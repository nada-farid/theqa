@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.neww.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.neww.fields.id') }}
                        </th>
                        <td>
                            {{ $neww->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.neww.fields.name') }}
                        </th>
                        <td>
                            {{ $neww->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.neww.fields.image') }}
                        </th>
                        <td>
                            @if($neww->image)
                                <a href="{{ $neww->image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $neww->image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.neww.fields.date') }}
                        </th>
                        <td>
                            {{ $neww->date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.neww.fields.short_description') }}
                        </th>
                        <td>
                            {{ $neww->short_description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.neww.fields.description') }}
                        </th>
                        <td>
                            {!! $neww->description !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.news.fields.insideImage') }}
                            
                        </th>
                        <td>
                            @if ($neww->inside_image)
                                <a href="{{ $neww->inside_image->getUrl() }}" target="_blank"
                                    style="display: inline-block">
                                    <img src="{{ $neww->inside_image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.newws.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection