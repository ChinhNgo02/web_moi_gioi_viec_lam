<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserProfileRequest extends FormRequest
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
            'email' => [
                'required',
                'string',
                'email',
            ],

            'password' => [
                'required',
            ],

            'city' => [
                'required',
                'string',
            ],

            'phone' => [
                'required',
                'string',
            ],

            'gender' => [
                'required',
            ],

            'avatar' => [
                'nullable',
                'file',
                'image',
                'max:5000',
            ],
        ];
    }
}