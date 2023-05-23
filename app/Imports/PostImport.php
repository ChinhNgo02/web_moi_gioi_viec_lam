<?php

namespace App\Imports;

use App\Enums\FlieTypeEnum;
use App\Enums\PostLevelEnum;
use App\Enums\PostRemotableEnum;
use App\Enums\PostStatusEnum;
use App\Models\Company;
use App\Models\Flie;
use App\Models\Language;
use App\Models\ObjectLanguage;
use App\Models\Post;
use Maatwebsite\Excel\Concerns\ToArray;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PostImport implements ToArray, WithHeadingRow
{
    public string $levels;

    public function __construct($levels)
    {
        $this->levels = $levels;
    }

    public function array(array $array): void
    {

        foreach ($array as $each) {
            try {
                $remotable   = PostRemotableEnum::OFFICE_ONLY;
                $companyName = $each['cong_ty'];
                $language    = $each['ngon_ngu'];
                $city        = $each['dia_diem'];
                if ($city === 'Nhiều') {
                    $city = null;
                } elseif ($city === 'Remote') {
                    $remotable = PostRemotableEnum::REMOTE_ONLY;
                    $city      = null;
                } else {
                    $city = str_replace([
                        'HN',
                        'HCM',
                    ], [
                        'Hà Nội',
                        'Hồ Chí Minh',
                    ], $city);
                }
                $link = $each['link'];

                if (!empty($companyName)) {
                    $companyId = Company::firstOrCreate([
                        'name' => $companyName,
                    ], [
                        'country' => 'Vietnam',
                    ])->id;
                } else {
                    $companyId = null;
                }
                $job_title = $this->generateJobTitle($city, $language, $companyName);

                $post = Post::create([
                    'job_title'  => $job_title,
                    'levels' => $this->levels,
                    'company_id' => $companyId,
                    'city'       => $city,
                    'status'     => PostStatusEnum::ADMIN_APPROVED,
                    'remotable'  => $remotable,
                ]);
                $languages = explode(',', $language);
                foreach ($languages as $language) {
                    $objLanguage = Language::firstOrCreate([
                        'name' => trim($language),
                    ]);
                    ObjectLanguage::create([
                        'object_id' => $post->id,
                        'language_id' => $objLanguage->id,
                        'object_type' => Post::class,
                    ]);
                }

                Flie::create([
                    'post_id' => $post->id,
                    'link'    => $link,
                    'type'    => FlieTypeEnum::JD,
                ]);
            } catch (\Throwable $e) {
                dd($each, $e);
            }
        }
    }

    private function generateJobTitle($city, $language, $companyName)
    {
        $levelVals = explode(',', $this->levels);
        $levelKeys = array_map(
            function ($each) {
                return PostLevelEnum::getKey($each);
            },
            $levelVals
        );

        $levels = implode(', ', $levelKeys);
        $str = '(';
        $str .= $levels;
        if ($city) {
            $str .= ' - ' . $city;
        }
        $str .= ') ';
        $str .= $language;
        if ($companyName) {
            $str .= ' - ' . $companyName;
        }

        return $str;
    }
}