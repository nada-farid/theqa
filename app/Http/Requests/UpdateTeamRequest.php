<?php

namespace App\Http\Requests;

use App\Models\Team;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateTeamRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('team_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'review' => [
                'required',
            ],
            'image' => ['required']
        ];
    }

    public function messages()
    {
        return [
            'image.required' => __('global.Please upload an image with required dimensions'),
        ];
    }
}

