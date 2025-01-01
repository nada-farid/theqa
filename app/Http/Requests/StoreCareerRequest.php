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
            ],
            'phone' => [
                'nullable',
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
}
