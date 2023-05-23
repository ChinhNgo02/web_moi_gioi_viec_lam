<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Http\Requests\StoreLanguageRequest;
use App\Http\Requests\UpdateLanguageRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class LanguageController extends Controller
{
    use ResponseTrait;
    private object $model;

    public function __construct()
    {
        $this->model = Language::query();
    }


    public function index(Request $request)
    {
        $configs = SystemConfigController::getAndCache();

        $data = $configs['languages']->filter(function ($each) use ($request) {
            if ($request->has('q')) {
                return Str::contains(strtolower($each['name']), $request->get('q'));
            }

            return true;
        });

        return $this->successResponse($data);
    }
}