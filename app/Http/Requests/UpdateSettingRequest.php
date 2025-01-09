<?php

namespace App\Http\Requests;

use App\Models\Setting;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateSettingRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('setting_edit');
    }

    public function rules()
    {
        return [
            'phone' => [
                'string',
                'nullable',
            ],
            'address' => [
                'string',
                'nullable',
            ],
            'email' => [
                'string',
                'nullable',
            ],
            'facebook' => [
                'string',
                'nullable',
            ],
            'twitter' => [
                'string',
                'nullable',
            ],
            'linkedin' => [
                'string',
                'nullable',
            ],
            'youtubte' => [
                'string',
                'nullable',
            ],
            'site_name' => [
                'string',
                'nullable',
            ],
            'instagram' => [
                'string',
                'nullable',
            ],
            'chairman_description' => [
                'string',
                'nullable',
            ],
            'chairman_image' => [
                'required',
            ],
            'mission_image' => [
                // 'required',
            ],
            'counter_1_text' => [
                'string',
                'nullable',
            ],
            'counter_1_value' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'counter_2_text' => [
                'string',
                'nullable',
            ],
            'counter_2_value' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'counter_3_text' => [
                'string',
                'nullable',
            ],
            'counter_3_value' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'counter_4_text' => [
                'string',
                'nullable',
            ],
            'counter_4_value' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'inner_image' => [
                'required',
            ],
            'logo' =>[
                'required'
            ],
            'white_logo' =>[
                'required'
            ],
        ];
    }

    public function messages()
    {
        return [
            'inner_image.required' => __('global.Please upload inner image with required dimensions'),
            'chairman_image.required' => __('global.Please upload chairman image with required dimensions'),
            'logo.required' => __('global.Please upload logo with required dimensions'),
            'white_logo.required' => __('global.Please upload whit logo with required dimensions'),

        ];
    }
}
