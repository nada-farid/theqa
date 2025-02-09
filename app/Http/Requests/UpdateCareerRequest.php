<?php

namespace App\Http\Requests;

use App\Models\Career;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCareerRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('career_edit');
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
            ],
            'cv' => [
                'required',
            ],
            'job_id' => [
                'required',
                'integer',
            ],
            'phone' => [
                'required',
                'regex:/^05\d{8}$/',
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