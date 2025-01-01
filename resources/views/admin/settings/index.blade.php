@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('cruds.setting.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Setting">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.phone') }}
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.address') }}
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.email') }}
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.facebook') }}
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.twitter') }}
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.linkedin') }}
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.youtubte') }}
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.about_description') }}
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.about_photo') }}
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.site_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.instagram') }}
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.logo') }}
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.chairman_description') }}
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.chairman_image') }}
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.about_image') }}
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.vision_image') }}
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.mission_image') }}
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.counter_1_text') }}
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.counter_1_value') }}
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.counter_2_text') }}
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.counter_2_value') }}
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.counter_3_text') }}
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.counter_3_value') }}
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.counter_4_text') }}
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.counter_4_value') }}
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.inner_image') }}
                        </th>
                        <th>
                            {{ trans('cruds.setting.fields.signature_image') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($settings as $key => $setting)
                        <tr data-entry-id="{{ $setting->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $setting->id ?? '' }}
                            </td>
                            <td>
                                {{ $setting->phone ?? '' }}
                            </td>
                            <td>
                                {{ $setting->address ?? '' }}
                            </td>
                            <td>
                                {{ $setting->email ?? '' }}
                            </td>
                            <td>
                                {{ $setting->facebook ?? '' }}
                            </td>
                            <td>
                                {{ $setting->twitter ?? '' }}
                            </td>
                            <td>
                                {{ $setting->linkedin ?? '' }}
                            </td>
                            <td>
                                {{ $setting->youtubte ?? '' }}
                            </td>
                            <td>
                                {{ $setting->about_description ?? '' }}
                            </td>
                            <td>
                                @if($setting->about_photo)
                                    <a href="{{ $setting->about_photo->getUrl() }}" target="_blank" style="display: inline-block">
                                        <img src="{{ $setting->about_photo->getUrl('thumb') }}">
                                    </a>
                                @endif
                            </td>
                            <td>
                                {{ $setting->site_name ?? '' }}
                            </td>
                            <td>
                                {{ $setting->instagram ?? '' }}
                            </td>
                            <td>
                                @if($setting->logo)
                                    <a href="{{ $setting->logo->getUrl() }}" target="_blank" style="display: inline-block">
                                        <img src="{{ $setting->logo->getUrl('thumb') }}">
                                    </a>
                                @endif
                            </td>
                            <td>
                                {{ $setting->chairman_description ?? '' }}
                            </td>
                            <td>
                                @if($setting->chairman_image)
                                    <a href="{{ $setting->chairman_image->getUrl() }}" target="_blank" style="display: inline-block">
                                        <img src="{{ $setting->chairman_image->getUrl('thumb') }}">
                                    </a>
                                @endif
                            </td>
                            <td>
                                @if($setting->about_image)
                                    <a href="{{ $setting->about_image->getUrl() }}" target="_blank" style="display: inline-block">
                                        <img src="{{ $setting->about_image->getUrl('thumb') }}">
                                    </a>
                                @endif
                            </td>
                            <td>
                                @if($setting->vision_image)
                                    <a href="{{ $setting->vision_image->getUrl() }}" target="_blank" style="display: inline-block">
                                        <img src="{{ $setting->vision_image->getUrl('thumb') }}">
                                    </a>
                                @endif
                            </td>
                            <td>
                                @if($setting->mission_image)
                                    <a href="{{ $setting->mission_image->getUrl() }}" target="_blank" style="display: inline-block">
                                        <img src="{{ $setting->mission_image->getUrl('thumb') }}">
                                    </a>
                                @endif
                            </td>
                            <td>
                                {{ $setting->counter_1_text ?? '' }}
                            </td>
                            <td>
                                {{ $setting->counter_1_value ?? '' }}
                            </td>
                            <td>
                                {{ $setting->counter_2_text ?? '' }}
                            </td>
                            <td>
                                {{ $setting->counter_2_value ?? '' }}
                            </td>
                            <td>
                                {{ $setting->counter_3_text ?? '' }}
                            </td>
                            <td>
                                {{ $setting->counter_3_value ?? '' }}
                            </td>
                            <td>
                                {{ $setting->counter_4_text ?? '' }}
                            </td>
                            <td>
                                {{ $setting->counter_4_value ?? '' }}
                            </td>
                            <td>
                                @if($setting->inner_image)
                                    <a href="{{ $setting->inner_image->getUrl() }}" target="_blank" style="display: inline-block">
                                        <img src="{{ $setting->inner_image->getUrl('thumb') }}">
                                    </a>
                                @endif
                            </td>
                            <td>
                                @if($setting->signature_image)
                                    <a href="{{ $setting->signature_image->getUrl() }}" target="_blank" style="display: inline-block">
                                        <img src="{{ $setting->signature_image->getUrl('thumb') }}">
                                    </a>
                                @endif
                            </td>
                            <td>

                                @can('setting_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.settings.edit', $setting->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan


                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
  
  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 25,
  });
  let table = $('.datatable-Setting:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection