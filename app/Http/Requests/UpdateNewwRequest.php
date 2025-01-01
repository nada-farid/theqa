<?php

namespace App\Http\Requests;

use App\Models\Neww;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateNewwRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('neww_edit');
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
            'inner_image' => [
                'string',
                'nullable',
            ],
        ];
    }
}
