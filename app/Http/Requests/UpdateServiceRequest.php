<?php

namespace App\Http\Requests;

use App\Models\Service;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateServiceRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('service_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'description' => [
                'required',
            ],
            'category_id' => [
                'required',
                'integer',
            ],
            'image' => [
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
            'inside_image.required' => __('global.Please upload inside image with required dimensions'),
        ];
    }
}
