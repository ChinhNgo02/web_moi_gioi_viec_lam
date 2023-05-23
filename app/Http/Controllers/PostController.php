<?php

namespace App\Http\Controllers;

use App\Enums\PostLevelEnum;
use App\Http\Controllers\ResponseTrait;
use App\Http\Requests\Post\CheckSlugRequest;
use App\Http\Requests\Post\GenerateSlugRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Str;



class PostController extends Controller
{
    use ResponseTrait;
    private object $model;

    public function __construct()
    {
        $this->model = Post::query();
    }

    public function index()
    {
        $data = $this->model
            ->latest()
            ->paginate();
        foreach ($data as $each) {
            $each->currency_salary = $each->currency_salary_code;
            $each->status = $each->status_name;
        }

        $arr['data'] = $data->getCollection();
        $arr['pagination'] = $data->linkCollection();
        return $this->successResponse($arr);
    }
   

    public function generateSlug(GenerateSlugRequest $request)
    {
        try {
            $title = $request->get('title');
            $slug = SlugService::createSlug(Post::class, 'slug', $title);

            return $this->successResponse($slug);
        } catch (\Throwable $e) {
            return $this->errorResponse();
        }
    }


    public function checkSlug(CheckSlugRequest $request)
    {
        return $this->successResponse();
    }
}