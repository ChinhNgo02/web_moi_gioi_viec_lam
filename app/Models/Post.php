<?php

namespace App\Models;

use App\Enums\PostCurrencySalaryEnum;
use App\Enums\PostRemotableEnum;
use App\Enums\PostStatusEnum;
use App\Enums\SystemCacheKeyEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Str;
use BeyondCode\Comments\Traits\HasComments;
use Laravelista\Comments\Commentable;

class Post extends Model
{
    use HasFactory;
    use Sluggable;
    use Commentable;

    protected $fillable =
    [
        'company_id',
        'job_title',
        'city',
        'levels',
        'status',
        "district",
        "remotable",
        "can_parttime",
        "min_salary",
        "max_salary",
        "currency_salary",
        "requirement",
        "start_date",
        "end_date",
        "number_applicants",
        "status",
        "is_pinned",
        "slug",
    ];

    protected $casts  = [
        'start_date' => 'date',
        'end_date' => 'date',
    ];

    // protected $appends = ['currency_salary_code'];

    protected static function booted()
    {
        static::creating(function ($object) {
            // $object->user_id = 1;
            $object->user_id = user()->id;
            $object->status = PostStatusEnum::getByRole();
        });

        static::saved(function ($object) {
            $city = $object->city;
            $arr = explode(', ', $city);
            $arrCity = getPostCities();
            foreach ($arr as $item) {
                if (in_array($item, $arrCity)) {
                    continue;
                }
                $arrCity[] = $item;
            }
            cache()->put(SystemCacheKeyEnum::POST_CITIES, $arrCity);
        });
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' =>  'job_title'
            ]
        ];
    }

    public function languages()
    {
        return $this->morphToMany(
            Language::class,
            'object',
            ObjectLanguage::class,
            'object_id',
            'language_id',
        );
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function file()
    {
        return $this->hasOne(Flie::class);
    }

    public function getCurrencySalaryCodeAttribute()
    {
        return PostCurrencySalaryEnum::getKey($this->currency_salary);
    }

    public function getStatusNameAttribute()
    {
        return PostStatusEnum::getKey($this->status);
    }

    public function getLocationAttribute(): ?string
    {
        if (!empty($this->district)) {
            return $this->district . ', ' . $this->city;
        }
        return $this->city;
    }

    public function getRemotableNameAttribute()
    {
        $key =  PostRemotableEnum::getKey($this->remotable);

        return Str::title(str_replace('_', ' ', $key));
    }


    public function getSalaryAttribute()
    {
        $val = $this->currency_salary;
        // dd($val);
        $key = PostCurrencySalaryEnum::getKey($val);
        $locale = PostCurrencySalaryEnum::getLocaleByVal($val);
        $format = new \NumberFormatter($locale, \NumberFormatter::CURRENCY);
        $rate = Config::getByKey($key);

        if (!is_null($this->min_salary)) {
            $salary = $this->min_salary * $rate;
            $minSalary = $format->formatCurrency($salary, $key);
        }

        if (!is_null($this->max_salary)) {
            $salary = $this->max_salary * $rate;
            $maxSalary = $format->formatCurrency($salary, $key);
        }

        if (!empty($minSalary) && !empty($maxSalary)) {
            return $minSalary . ' - ' . $maxSalary;
        }

        if (!empty($minSalary)) {
            return __('frontpage.from_salary') . ' ' . $minSalary;
        }

        if (!empty($maxSalary)) {
            return __('frontpage.to_salary') . ' ' . $maxSalary;
        }

        return '';
    }

    public function scopeApproved($query)
    {
        return $query->Where('status', PostStatusEnum::ADMIN_APPROVED);
    }

    public function getIsNotAvailableAttribute()
    {
        if (empty($this->start_date)) {
            return false;
        }
        if (empty($this->end_date)) {
            return false;
        }

        return !now()->between($this->start_date, $this->end_date);
    }

    public function scopeIndexHomePage($query, $filters)
    {
        return $query
            ->with([
                'languages',
                'company' => function ($q) {
                    $q->select([
                        'id',
                        'name',
                        'logo',
                    ]);
                }
            ])
            ->approved()
            ->When(isset($filters['cities']), function ($q) use ($filters) {
                $q->where(function ($q) use ($filters) {
                    foreach ($filters['cities'] as $searchCity) {
                        $q->orWhere('city', 'like', '%' . $searchCity . '%');
                    }
                    $q->orWhereNull('city');
                });
            })

            ->When(isset($filters['levels']), function ($q) use ($filters) {
                $q->where(function ($q) use ($filters) {
                    foreach ($filters['levels'] as $key) {
                        $q->orWhere('levels', 'like', '%' . $key . '%');
                    }
                    $q->orWhereNull('levels');
                });
            })

            ->When(isset($filters['min_salary']), function ($q) use ($filters) {
                $q->where(function ($q) use ($filters) {
                    $q->orWhere('min_salary', '>=',  $filters['min_salary']);
                    $q->orWhereNull('min_salary');
                });
            })

            ->When(isset($filters['max_salary']), function ($q) use ($filters) {
                $q->where(function ($q) use ($filters) {
                    $q->orWhere('max_salary', '<=',  $filters['max_salary']);
                    $q->orWhereNull('max_salary');
                });
            })

            ->When(isset($filters['remotable']), function ($q) use ($filters) {
                $q->where('remotable', $filters['remotable']);
            })

            ->When(isset($filters['can_parttime']), function ($q) use ($filters) {
                $q->where('can_parttime', $filters['can_parttime']);
            })

            ->orderByDesc('is_pinned')
            ->orderByDesc('id');
    }
}