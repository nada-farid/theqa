<?php

namespace App\Http\Requests;

use App\Models\Career;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCareerRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'full_name' => [
                'string',
                'required',
            ],
            'last_name' => [
                'string',
                'required',
            ],
            'email' => [
                'string',
                'required',
                'email'
            ],
            'phone' => [
                'nullable',
                'regex:/^05\d{8}$/',
            ],
            'job' => [
                'string',
                'nullable',
            ],
            'cv' => [
                'required',
            ],
        ];
    }

    public function messages()
    {
        return [
            'phone.regex' => 'رقم الجوال يجب ان يكون 10 أرقام ويبدأ ب 05',
        ];
    }
}
