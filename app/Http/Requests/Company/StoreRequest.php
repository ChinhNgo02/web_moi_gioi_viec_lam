<?php

namespace App\Http\Requests\Company;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Enums\CompanyCountryEnum;

class StoreRequest extends FormRequest
{

    public function authorize()
    {
        return auth()->check();
    }


    public function rules()
    {
        return [
            'name' => [
                'required',
                'filled',
                'string',
                'min:0',
            ],
            'country' => [
                'required',
                'string',
                Rule::in(CompanyCountryEnum::getKeys()),
            ],
            'city' => [
                'required',
                'string',
            ],
            'distinct' => [
                'nullable',
                'string',
            ],
            'address' => [
                'nullable',
                'string',
            ],
            'address2' => [
                'nullable',
                'string',
            ],
            'zipcode' => [
                'nullable',
                'string',
            ],
            'phone' => [
                'nullable',
                'string',
            ],
            'email' => [
                'nullable',
                'string',
            ],
            'logo' => [
                'nullable',
                'file',
                'image',
                'max:5000',
            ],
        ];
    }
}