<?php

namespace App\Http\Requests\Applicant\Homepage;

use App\Enums\PostRemotableEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class IndexRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'cities' => [
                'array',
            ],

            'min_salary' => [
                'integer',
            ],

            'max_salary' => [
                'integer',
            ],

            'remotable' => [
                'nullable',
                Rule::in(PostRemotableEnum::asArray()),
            ]
        ];
    }
}