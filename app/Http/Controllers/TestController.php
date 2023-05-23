<?php

namespace App\Http\Controllers;

use App\Enums\FlieTypeEnum;
use App\Enums\PostCurrencySalaryEnum;
use App\Enums\PostStatusEnum;
use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Language;
use App\Models\Post;
use App\Models\File;
use App\Models\Flie;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\View;

class TestController extends Controller
{
    private object $model;
    private string $table;

    public function __construct()
    {
        $this->model = User::query();
        $this->table = (new User())->getTable();

        View::share('title', ucwords($this->table));
        View::share('table', $this->table);
    }
    public function test()
    {
        $cities = Post::query()
            ->pluck('city');
        $arrCity = [];
        foreach ($cities as $city) {
            if (empty($city)) {
                continue;
            }
            $arr = explode(', ', $city);
            foreach ($arr as $item) {
                if (empty($item)) {
                    continue;
                }
                if (in_array($item, $arrCity)) {
                    continue;
                }
                $arrCity[] = $item;
            }
        }
        if ($arrCity[0] == $arrCity[5]) dd(1);
        dd($arrCity);
        // return $arrCity;
    }
}