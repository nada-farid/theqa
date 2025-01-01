<?php

namespace App\Http\Requests;

use App\Models\Strategy;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreStrategyRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('strategy_create');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
            ],
            'description' => [
                'string',
                'required',
            ],
        ];
    }
}
