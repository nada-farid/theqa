@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.strategy.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.strategy.fields.id') }}
                        </th>
                        <td>
                            {{ $strategy->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.strategy.fields.title') }}
                        </th>
                        <td>
                            {{ $strategy->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.strategy.fields.description') }}
                        </th>
                        <td>
                            {{ $strategy->description }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.strategies.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection