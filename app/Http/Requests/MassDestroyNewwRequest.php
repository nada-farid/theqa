<?php

namespace App\Http\Requests;

use App\Models\Neww;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyNewwRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('neww_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:newws,id',
        ];
    }
}
