<?php

namespace App\Http\Requests;

use App\Models\Neww;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreNewwRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('neww_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'image' => [
                'required',
            ],
            'date' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'short_description' => [
                'required',
            ],
            'inside_image' => [
                'required',
            ],
        ];
    }

    public function messages()
    {
        return [
            'image.required' => __('global.Please upload an image with required dimensions'),
            'inside_image.required' => __('global.Please upload an image with required dimensions'),
        ];
    }
}
