<?php

namespace App\Http\Requests;

use App\Models\Project;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateProjectRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('project_edit');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
            ],
            'description' => [
                'required',
            ],
            'image' => [
                'required',
            ],
            'service' => [
                'string',
                'required',
            ],
            'duration' => [
                'string',
                'required',
            ],
            'team' => [
                'string',
                'required',
            ],
            'long_description' => [
                'required',
            ],
            'quotation_text' => [
                'string',
                'nullable',
            ],
            'live_url' => [
                'string',
                'nullable',
            ],
            'inner_image' => [
                'required',
            ],
            'photos' => [
                'array',
            ],
        ];
    }
}
