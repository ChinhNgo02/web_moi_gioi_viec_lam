<?php

namespace App\Http\Controllers\Applicant;

use App\Enums\PostLevelEnum;
use App\Enums\PostRemotableEnum;
use App\Enums\PostStatusEnum;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Enums\SystemCacheKeyEnum;
use App\Http\Requests\Applicant\Homepage\IndexRequest;
use App\Models\Config;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class HomePageController extends Controller
{
    public function index(IndexRequest $request)
    {
        // cache()->clear();
        $searchCities = $request->get('cities', []);
        $configs = Config::getAndCache(0);
        $minSalary = $request->get('min_salary', $configs['filter_min_salary']);
        $maxSalary = $request->get('max_salary', $configs['filter_max_salary']);
        $remotable = $request->get('remotable');
        $levels = $request->get('levels', []);
        $searchCanParttime = $request->boolean('can_parttime');
        $filters = [];

        if (!empty($searchCities)) {
            $filters['cities'] = $searchCities;
        }

        if ($request->has('min_salary')) {
            $filters['min_salary'] = $minSalary;
        }

        if ($request->has('max_salary')) {
            $filters['max_salary'] = $maxSalary;
        }

        if (!empty($levels)) {
            $filters['levels'] = $levels;
        }

        if (!empty($remotable)) {
            $filters['remotable'] = $remotable;
        }

        if ($searchCanParttime) {
            $filters['can_parttime'] = $searchCanParttime;
        }

        $posts = Post::query()
            ->indexHomePage($filters)
            ->paginate();

        // dd($posts->toArray());
        $filtersPostLevel = PostLevelEnum::getArrWithLowerKey();
        $filtersPostRemotable = PostRemotableEnum::getArrWithLowerKey();
        $arrCity = getPostCities();
        // dd($arrCity);
        return view('applicant.index', [
            'posts' => $posts,
            'arrCity' => $arrCity,
            'searchCities' => $searchCities,
            'configs' => $configs,
            'minSalary' => $minSalary,
            'maxSalary' => $maxSalary,
            'levels' => $levels,
            'filtersPostLevel' => $filtersPostLevel,
            'filtersPostRemotable' => $filtersPostRemotable,
            'remotable' => $remotable,
            'searchCanParttime' => $searchCanParttime,
        ]);
    }

    public function show($postId)
    {
        $post = Post::query()
            ->with('file')
            ->approved()
            ->findOrFail($postId);

        $title = $post->job_title;

        return view('applicant.show', [
            'post' => $post,
            'title' => $title,
        ]);
    }
}