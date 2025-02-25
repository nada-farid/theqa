@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.career.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.careers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.career.fields.id') }}
                        </th>
                        <td>
                            {{ $career->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.career.fields.full_name') }}
                        </th>
                        <td>
                            {{ $career->full_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.career.fields.last_name') }}
                        </th>
                        <td>
                            {{ $career->last_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.career.fields.email') }}
                        </th>
                        <td>
                            {{ $career->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.career.fields.phone') }}
                        </th>
                        <td>
                            {{ $career->phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.career.fields.cv') }}
                        </th>
                        <td>
                            @if($career->cv)
                                <a href="{{ $career->cv->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.career.fields.job') }}
                        </th>
                        <td>
                            {{ $career->job->title ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.careers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection