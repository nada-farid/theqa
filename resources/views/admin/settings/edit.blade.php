@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            {{ trans('global.edit') }} {{ trans('cruds.setting.title_singular') }}
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('admin.settings.update', [$setting->id]) }}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="description">{{ trans('cruds.setting.fields.description') }}</label>
                    <textarea class="form-control ckeditor {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description"
                        id="description">{!! old('description', $setting->description) !!}</textarea>
                    @if ($errors->has('description'))
                        <div class="invalid-feedback">
                            {{ $errors->first('description') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.setting.fields.description_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="phone">{{ trans('cruds.setting.fields.phone') }}</label>
                    <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" type="text"
                        name="phone" id="phone" value="{{ old('phone', $setting->phone) }}">
                    @if ($errors->has('phone'))
                        <div class="invalid-feedback">
                            {{ $errors->first('phone') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.setting.fields.phone_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="address">{{ trans('cruds.setting.fields.address') }}</label>
                    <input class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" type="text"
                        name="address" id="address" value="{{ old('address', $setting->address) }}">
                    @if ($errors->has('address'))
                        <div class="invalid-feedback">
                            {{ $errors->first('address') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.setting.fields.address_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="email">{{ trans('cruds.setting.fields.email') }}</label>
                    <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text"
                        name="email" id="email" value="{{ old('email', $setting->email) }}">
                    @if ($errors->has('email'))
                        <div class="invalid-feedback">
                            {{ $errors->first('email') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.setting.fields.email_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="facebook">{{ trans('cruds.setting.fields.facebook') }}</label>
                    <input class="form-control {{ $errors->has('facebook') ? 'is-invalid' : '' }}" type="text"
                        name="facebook" id="facebook" value="{{ old('facebook', $setting->facebook) }}">
                    @if ($errors->has('facebook'))
                        <div class="invalid-feedback">
                            {{ $errors->first('facebook') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.setting.fields.facebook_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="twitter">{{ trans('cruds.setting.fields.twitter') }}</label>
                    <input class="form-control {{ $errors->has('twitter') ? 'is-invalid' : '' }}" type="text"
                        name="twitter" id="twitter" value="{{ old('twitter', $setting->twitter) }}">
                    @if ($errors->has('twitter'))
                        <div class="invalid-feedback">
                            {{ $errors->first('twitter') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.setting.fields.twitter_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="linkedin">{{ trans('cruds.setting.fields.linkedin') }}</label>
                    <input class="form-control {{ $errors->has('linkedin') ? 'is-invalid' : '' }}" type="text"
                        name="linkedin" id="linkedin" value="{{ old('linkedin', $setting->linkedin) }}">
                    @if ($errors->has('linkedin'))
                        <div class="invalid-feedback">
                            {{ $errors->first('linkedin') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.setting.fields.linkedin_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="whatsapp">{{ trans('cruds.setting.fields.whatsapp') }}</label>
                    <input class="form-control {{ $errors->has('whatsapp') ? 'is-invalid' : '' }}" type="text"
                        name="whatsapp" id="whatsapp" value="{{ old('whatsapp', $setting->whatsapp) }}">
                    @if ($errors->has('whatsapp'))
                        <div class="invalid-feedback">
                            {{ $errors->first('whatsapp') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.setting.fields.whatsapp_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="snapchat">{{ trans('cruds.setting.fields.snapchat') }}</label>
                    <input class="form-control {{ $errors->has('snapchat') ? 'is-invalid' : '' }}" type="text"
                        name="snapchat" id="snapchat" value="{{ old('snapchat', $setting->snapchat) }}">
                    @if ($errors->has('snapchat'))
                        <div class="invalid-feedback">
                            {{ $errors->first('snapchat') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.setting.fields.snapchat_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="youtubte">{{ trans('cruds.setting.fields.youtubte') }}</label>
                    <input class="form-control {{ $errors->has('youtubte') ? 'is-invalid' : '' }}" type="text"
                        name="youtubte" id="youtubte" value="{{ old('youtubte', $setting->youtubte) }}">
                    @if ($errors->has('youtubte'))
                        <div class="invalid-feedback">
                            {{ $errors->first('youtubte') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.setting.fields.youtubte_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="system_link">{{ trans('cruds.setting.fields.system_link') }}</label>
                    <input class="form-control {{ $errors->has('system_link') ? 'is-invalid' : '' }}" type="text"
                        name="system_link" id="system_link" value="{{ old('system_link', $setting->system_link) }}">
                    @if ($errors->has('system_link'))
                        <div class="invalid-feedback">
                            {{ $errors->first('system_link') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.setting.fields.system_link_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="about_description">{{ trans('cruds.setting.fields.about_description') }}</label>
                    <textarea class="form-control {{ $errors->has('about_description') ? 'is-invalid' : '' }}" name="about_description"
                        id="about_description">{{ old('about_description', $setting->about_description) }}</textarea>
                    @if ($errors->has('about_description'))
                        <div class="invalid-feedback">
                            {{ $errors->first('about_description') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.setting.fields.about_description_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="about_photo">{{ trans('cruds.setting.fields.about_photo') }}</label>
                    <div class="needsclick dropzone {{ $errors->has('about_photo') ? 'is-invalid' : '' }}"
                        id="about_photo-dropzone">
                    </div>
                    @if ($errors->has('about_photo'))
                        <div class="invalid-feedback">
                            {{ $errors->first('about_photo') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.setting.fields.about_photo_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="site_name">{{ trans('cruds.setting.fields.site_name') }}</label>
                    <input class="form-control {{ $errors->has('site_name') ? 'is-invalid' : '' }}" type="text"
                        name="site_name" id="site_name" value="{{ old('site_name', $setting->site_name) }}">
                    @if ($errors->has('site_name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('site_name') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.setting.fields.site_name_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="instagram">{{ trans('cruds.setting.fields.instagram') }}</label>
                    <input class="form-control {{ $errors->has('instagram') ? 'is-invalid' : '' }}" type="text"
                        name="instagram" id="instagram" value="{{ old('instagram', $setting->instagram) }}">
                    @if ($errors->has('instagram'))
                        <div class="invalid-feedback">
                            {{ $errors->first('instagram') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.setting.fields.instagram_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="logo">{{ trans('cruds.setting.fields.logo') }}</label>
                    <div class="needsclick dropzone {{ $errors->has('logo') ? 'is-invalid' : '' }}" id="logo-dropzone">
                    </div>
                    @if ($errors->has('logo'))
                        <div class="invalid-feedback">
                            {{ $errors->first('logo') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.setting.fields.logo_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="white_logo">{{ trans('cruds.setting.fields.white_logo') }}</label>
                    <div class="needsclick dropzone {{ $errors->has('white_logo') ? 'is-invalid' : '' }}"
                        id="white_logo-dropzone">
                    </div>
                    @if ($errors->has('white_logo'))
                        <div class="invalid-feedback">
                            {{ $errors->first('white_logo') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.setting.fields.white_logo_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="chairman_description">{{ trans('cruds.setting.fields.chairman_description') }}</label>
                  <textarea class="form-control ckeditor {{ $errors->has('chairman_description') ? 'is-invalid' : '' }}"
                        name="chairman_description" id="chairman_description">
                     {{ old('chairman_description', $setting->chairman_description) }}</textarea>
                    @if ($errors->has('chairman_description'))
                        <div class="invalid-feedback">
                            {{ $errors->first('chairman_description') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.setting.fields.chairman_description_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required"
                        for="chairman_image">{{ trans('cruds.setting.fields.chairman_image') }}</label>
                    <div class="needsclick dropzone {{ $errors->has('chairman_image') ? 'is-invalid' : '' }}"
                        id="chairman_image-dropzone">
                    </div>
                    @if ($errors->has('chairman_image'))
                        <div class="invalid-feedback">
                            {{ $errors->first('chairman_image') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.setting.fields.chairman_image_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="about_image">{{ trans('cruds.setting.fields.about_image') }}</label>
                    <div class="needsclick dropzone {{ $errors->has('about_image') ? 'is-invalid' : '' }}"
                        id="about_image-dropzone">
                    </div>
                    @if ($errors->has('about_image'))
                        <div class="invalid-feedback">
                            {{ $errors->first('about_image') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.setting.fields.about_image_helper') }}</span>
                </div>
                {{-- <div class="form-group">
                    <label for="vision_image">{{ trans('cruds.setting.fields.vision_image') }}</label>
                    <div class="needsclick dropzone {{ $errors->has('vision_image') ? 'is-invalid' : '' }}"
                        id="vision_image-dropzone">
                    </div>
                    @if ($errors->has('vision_image'))
                        <div class="invalid-feedback">
                            {{ $errors->first('vision_image') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.setting.fields.vision_image_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="mission_image">{{ trans('cruds.setting.fields.mission_image') }}</label>
                    <div class="needsclick dropzone {{ $errors->has('mission_image') ? 'is-invalid' : '' }}"
                        id="mission_image-dropzone">
                    </div>
                    @if ($errors->has('mission_image'))
                        <div class="invalid-feedback">
                            {{ $errors->first('mission_image') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.setting.fields.mission_image_helper') }}</span>
                </div> --}}
                {{-- <div class="form-group">
                    <label for="counter_1_text">{{ trans('cruds.setting.fields.counter_1_text') }}</label>
                    <input class="form-control {{ $errors->has('counter_1_text') ? 'is-invalid' : '' }}" type="text"
                        name="counter_1_text" id="counter_1_text"
                        value="{{ old('counter_1_text', $setting->counter_1_text) }}">
                    @if ($errors->has('counter_1_text'))
                        <div class="invalid-feedback">
                            {{ $errors->first('counter_1_text') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.setting.fields.counter_1_text_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="counter_1_value">{{ trans('cruds.setting.fields.counter_1_value') }}</label>
                    <input class="form-control {{ $errors->has('counter_1_value') ? 'is-invalid' : '' }}" type="number"
                        name="counter_1_value" id="counter_1_value"
                        value="{{ old('counter_1_value', $setting->counter_1_value) }}" step="1">
                    @if ($errors->has('counter_1_value'))
                        <div class="invalid-feedback">
                            {{ $errors->first('counter_1_value') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.setting.fields.counter_1_value_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="counter_2_text">{{ trans('cruds.setting.fields.counter_2_text') }}</label>
                    <input class="form-control {{ $errors->has('counter_2_text') ? 'is-invalid' : '' }}" type="text"
                        name="counter_2_text" id="counter_2_text"
                        value="{{ old('counter_2_text', $setting->counter_2_text) }}">
                    @if ($errors->has('counter_2_text'))
                        <div class="invalid-feedback">
                            {{ $errors->first('counter_2_text') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.setting.fields.counter_2_text_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="counter_2_value">{{ trans('cruds.setting.fields.counter_2_value') }}</label>
                    <input class="form-control {{ $errors->has('counter_2_value') ? 'is-invalid' : '' }}" type="number"
                        name="counter_2_value" id="counter_2_value"
                        value="{{ old('counter_2_value', $setting->counter_2_value) }}" step="1">
                    @if ($errors->has('counter_2_value'))
                        <div class="invalid-feedback">
                            {{ $errors->first('counter_2_value') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.setting.fields.counter_2_value_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="counter_3_text">{{ trans('cruds.setting.fields.counter_3_text') }}</label>
                    <input class="form-control {{ $errors->has('counter_3_text') ? 'is-invalid' : '' }}" type="text"
                        name="counter_3_text" id="counter_3_text"
                        value="{{ old('counter_3_text', $setting->counter_3_text) }}">
                    @if ($errors->has('counter_3_text'))
                        <div class="invalid-feedback">
                            {{ $errors->first('counter_3_text') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.setting.fields.counter_3_text_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="counter_3_value">{{ trans('cruds.setting.fields.counter_3_value') }}</label>
                    <input class="form-control {{ $errors->has('counter_3_value') ? 'is-invalid' : '' }}" type="number"
                        name="counter_3_value" id="counter_3_value"
                        value="{{ old('counter_3_value', $setting->counter_3_value) }}" step="1">
                    @if ($errors->has('counter_3_value'))
                        <div class="invalid-feedback">
                            {{ $errors->first('counter_3_value') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.setting.fields.counter_3_value_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="counter_4_text">{{ trans('cruds.setting.fields.counter_4_text') }}</label>
                    <input class="form-control {{ $errors->has('counter_4_text') ? 'is-invalid' : '' }}" type="text"
                        name="counter_4_text" id="counter_4_text"
                        value="{{ old('counter_4_text', $setting->counter_4_text) }}">
                    @if ($errors->has('counter_4_text'))
                        <div class="invalid-feedback">
                            {{ $errors->first('counter_4_text') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.setting.fields.counter_4_text_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="counter_4_value">{{ trans('cruds.setting.fields.counter_4_value') }}</label>
                    <input class="form-control {{ $errors->has('counter_4_value') ? 'is-invalid' : '' }}" type="number"
                        name="counter_4_value" id="counter_4_value"
                        value="{{ old('counter_4_value', $setting->counter_4_value) }}" step="1">
                    @if ($errors->has('counter_4_value'))
                        <div class="invalid-feedback">
                            {{ $errors->first('counter_4_value') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.setting.fields.counter_4_value_helper') }}</span>
                </div> --}}
                <div class="form-group">
                    <label for="short_descrption">{{ trans('cruds.setting.fields.short_descrption') }}</label>
                    <textarea class="form-control ckeditor {{ $errors->has('short_descrption') ? 'is-invalid' : '' }}"
                        name="short_descrption" id="short_descrption">{!! old('short_descrption', $setting->short_descrption) !!}</textarea>
                    @if ($errors->has('short_descrption'))
                        <div class="invalid-feedback">
                            {{ $errors->first('short_descrption') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.setting.fields.short_descrption_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="inner_image">{{ trans('cruds.setting.fields.inner_image') }}</label>
                    <div class="needsclick dropzone {{ $errors->has('inner_image') ? 'is-invalid' : '' }}"
                        id="inner_image-dropzone">
                    </div>
                    @if ($errors->has('inner_image'))
                        <div class="invalid-feedback">
                            {{ $errors->first('inner_image') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.setting.fields.inner_image_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="contact_text">{{ trans('cruds.setting.fields.contact_text') }}</label>
                    <textarea class="form-control ckeditor {{ $errors->has('contact_text') ? 'is-invalid' : '' }}" name="contact_text"
                        id="contact_text">{!! old('contact_text', $setting->contact_text) !!}</textarea>
                    @if ($errors->has('contact_text'))
                        <div class="invalid-feedback">
                            {{ $errors->first('contact_text') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.setting.fields.contact_text_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="vision_text">{{ trans('cruds.setting.fields.vision_text') }}</label>
                    <textarea class="form-control ckeditor {{ $errors->has('vision_text') ? 'is-invalid' : '' }}" name="vision_text"
                        id="vision_text">{!! old('vision_text', $setting->vision_text) !!}</textarea>
                    @if ($errors->has('vision_text'))
                        <div class="invalid-feedback">
                            {{ $errors->first('vision_text') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.setting.fields.vision_text_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="mission_text">{{ trans('cruds.setting.fields.mission_text') }}</label>
                    <textarea class="form-control ckeditor {{ $errors->has('mission_text') ? 'is-invalid' : '' }}" name="mission_text"
                        id="mission_text">{!! old('mission_text', $setting->mission_text) !!}</textarea>
                    @if ($errors->has('mission_text'))
                        <div class="invalid-feedback">
                            {{ $errors->first('mission_text') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.setting.fields.mission_text_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="why_us_text">{{ trans('cruds.setting.fields.why_us_text') }}</label>
                    <textarea class="form-control ckeditor {{ $errors->has('why_us_text') ? 'is-invalid' : '' }}" name="why_us_text"
                        id="why_us_text">{!! old('why_us_text', $setting->why_us_text) !!}</textarea>
                    @if ($errors->has('why_us_text'))
                        <div class="invalid-feedback">
                            {{ $errors->first('why_us_text') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.setting.fields.why_us_text_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required"
                        for="signature_image">{{ trans('cruds.setting.fields.signature_image') }}</label>
                    <div class="needsclick dropzone {{ $errors->has('signature_image') ? 'is-invalid' : '' }}"
                        id="signature_image-dropzone">
                    </div>
                    @if ($errors->has('signature_image'))
                        <div class="invalid-feedback">
                            {{ $errors->first('signature_image') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.setting.fields.signature_image_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="home_section_1">{{ trans('cruds.setting.fields.home_section_1') }}</label>
                    <textarea class="form-control ckeditor {{ $errors->has('home_section_1') ? 'is-invalid' : '' }}"
                        name="home_section_1" id="home_section_1">{!! old('home_section_1', $setting->home_section_1) !!}</textarea>
                    @if ($errors->has('home_section_1'))
                        <div class="invalid-feedback">
                            {{ $errors->first('home_section_1') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.setting.fields.home_section_1_helper') }}</span>
                </div>
                <div class="form-group">
                    <label for="home_section_2">{{ trans('cruds.setting.fields.home_section_2') }}</label>
                    <textarea class="form-control ckeditor {{ $errors->has('home_section_2') ? 'is-invalid' : '' }}"
                        name="home_section_2" id="home_section_2">{!! old('home_section_2', $setting->home_section_2) !!}</textarea>
                    @if ($errors->has('home_section_2'))
                        <div class="invalid-feedback">
                            {{ $errors->first('home_section_2') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.setting.fields.home_section_2_helper') }}</span>
                </div>
                <div class="form-group">
                    <button class="btn btn-danger" type="submit">
                        {{ trans('global.save') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            function SimpleUploadAdapter(editor) {
                editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
                    return {
                        upload: function() {
                            return loader.file
                                .then(function(file) {
                                    return new Promise(function(resolve, reject) {
                                        // Init request
                                        var xhr = new XMLHttpRequest();
                                        xhr.open('POST',
                                            '{{ route('admin.settings.storeCKEditorImages') }}',
                                            true);
                                        xhr.setRequestHeader('x-csrf-token', window._token);
                                        xhr.setRequestHeader('Accept', 'application/json');
                                        xhr.responseType = 'json';

                                        // Init listeners
                                        var genericErrorText =
                                            `Couldn't upload file: ${ file.name }.`;
                                        xhr.addEventListener('error', function() {
                                            reject(genericErrorText)
                                        });
                                        xhr.addEventListener('abort', function() {
                                            reject()
                                        });
                                        xhr.addEventListener('load', function() {
                                            var response = xhr.response;

                                            if (!response || xhr.status !== 201) {
                                                return reject(response && response
                                                    .message ?
                                                    `${genericErrorText}\n${xhr.status} ${response.message}` :
                                                    `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`
                                                    );
                                            }

                                            $('form').append(
                                                '<input type="hidden" name="ck-media[]" value="' +
                                                response.id + '">');

                                            resolve({
                                                default: response.url
                                            });
                                        });

                                        if (xhr.upload) {
                                            xhr.upload.addEventListener('progress', function(
                                            e) {
                                                if (e.lengthComputable) {
                                                    loader.uploadTotal = e.total;
                                                    loader.uploaded = e.loaded;
                                                }
                                            });
                                        }

                                        // Send request
                                        var data = new FormData();
                                        data.append('upload', file);
                                        data.append('crud_id', '{{ $setting->id ?? 0 }}');
                                        xhr.send(data);
                                    });
                                })
                        }
                    };
                }
            }

            var allEditors = document.querySelectorAll('.ckeditor');
            for (var i = 0; i < allEditors.length; ++i) {
                ClassicEditor.create(
                    allEditors[i], {
                        extraPlugins: [SimpleUploadAdapter]
                    }
                );
            }
        });
    </script>

    <script>
        Dropzone.options.aboutPhotoDropzone = {
            url: '{{ route('admin.settings.storeMedia') }}',
            maxFilesize: 4, // MB
            acceptedFiles: '.jpeg,.jpg,.png,.gif',
            maxFiles: 1,
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            params: {
                size: 4,
                width: 354,
                height: 414
            },
            success: function(file, response) {
                $('form').find('input[name="about_photo"]').remove()
                $('form').append('<input type="hidden" name="about_photo" value="' + response.name + '">')
            },
            removedfile: function(file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="about_photo"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function() {
                @if (isset($setting) && $setting->about_photo)
                    var file = {!! json_encode($setting->about_photo) !!}
                    this.options.addedfile.call(this, file)
                    this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="about_photo" value="' + file.file_name + '">')
                    this.options.maxFiles = this.options.maxFiles - 1
                @endif
            },
            error: function(file, response) {
                if ($.type(response) === 'string') {
                    var message = response //dropzone sends it's own error messages in string
                } else {
                    var message = response.errors.file
                }
                file.previewElement.classList.add('dz-error')
                _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
                _results = []
                for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                    node = _ref[_i]
                    _results.push(node.textContent = message)
                }

                return _results
            }
        }
    </script>
    <script>
        Dropzone.options.logoDropzone = {
            url: '{{ route('admin.settings.storeMedia') }}',
            maxFilesize: 40, // MB
            acceptedFiles: '.jpeg,.jpg,.png,.gif',
            maxFiles: 1,
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            params: {
                size: 40,
                width: 470,
                height: 332
            },
            success: function(file, response) {
                $('form').find('input[name="logo"]').remove()
                $('form').append('<input type="hidden" name="logo" value="' + response.name + '">')
            },
            removedfile: function(file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="logo"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function() {
                @if (isset($setting) && $setting->logo)
                    var file = {!! json_encode($setting->logo) !!}
                    this.options.addedfile.call(this, file)
                    this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="logo" value="' + file.file_name + '">')
                    this.options.maxFiles = this.options.maxFiles - 1
                @endif
            },
            error: function(file, response) {
                if ($.type(response) === 'string') {
                    var message = response //dropzone sends it's own error messages in string
                } else {
                    var message = response.errors.file
                }
                file.previewElement.classList.add('dz-error')
                _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
                _results = []
                for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                    node = _ref[_i]
                    _results.push(node.textContent = message)
                }

                return _results
            }
        }
    </script>
    <script>
        Dropzone.options.chairmanImageDropzone = {
            url: '{{ route('admin.settings.storeMedia') }}',
            maxFilesize: 40, // MB
            acceptedFiles: '.jpeg,.jpg,.png,.gif',
            maxFiles: 1,
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            params: {
                size: 40,
                width: 488,
                height: 610
            },
            success: function(file, response) {
                $('form').find('input[name="chairman_image"]').remove()
                $('form').append('<input type="hidden" name="chairman_image" value="' + response.name + '">')
            },
            removedfile: function(file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="chairman_image"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function() {
                @if (isset($setting) && $setting->chairman_image)
                    var file = {!! json_encode($setting->chairman_image) !!}
                    this.options.addedfile.call(this, file)
                    this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="chairman_image" value="' + file.file_name + '">')
                    this.options.maxFiles = this.options.maxFiles - 1
                @endif
            },
            error: function(file, response) {
                if ($.type(response) === 'string') {
                    var message = response //dropzone sends it's own error messages in string
                } else {
                    var message = response.errors.file
                }
                file.previewElement.classList.add('dz-error')
                _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
                _results = []
                for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                    node = _ref[_i]
                    _results.push(node.textContent = message)
                }

                return _results
            }
        }
    </script>
    <script>
        Dropzone.options.aboutImageDropzone = {
            url: '{{ route('admin.settings.storeMedia') }}',
            maxFilesize: 40, // MB
            acceptedFiles: '.jpeg,.jpg,.png,.gif',
            maxFiles: 1,
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            params: {
                size: 40,
                width: 4096,
                height: 4096
            },
            success: function(file, response) {
                $('form').find('input[name="about_image"]').remove()
                $('form').append('<input type="hidden" name="about_image" value="' + response.name + '">')
            },
            removedfile: function(file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="about_image"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function() {
                @if (isset($setting) && $setting->about_image)
                    var file = {!! json_encode($setting->about_image) !!}
                    this.options.addedfile.call(this, file)
                    this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="about_image" value="' + file.file_name + '">')
                    this.options.maxFiles = this.options.maxFiles - 1
                @endif
            },
            error: function(file, response) {
                if ($.type(response) === 'string') {
                    var message = response //dropzone sends it's own error messages in string
                } else {
                    var message = response.errors.file
                }
                file.previewElement.classList.add('dz-error')
                _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
                _results = []
                for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                    node = _ref[_i]
                    _results.push(node.textContent = message)
                }

                return _results
            }
        }
    </script>
    <script>
        Dropzone.options.visionImageDropzone = {
            url: '{{ route('admin.settings.storeMedia') }}',
            maxFilesize: 40, // MB
            acceptedFiles: '.jpeg,.jpg,.png,.gif',
            maxFiles: 1,
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            params: {
                size: 40,
                width: 4096,
                height: 4096
            },
            success: function(file, response) {
                $('form').find('input[name="vision_image"]').remove()
                $('form').append('<input type="hidden" name="vision_image" value="' + response.name + '">')
            },
            removedfile: function(file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="vision_image"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function() {
                @if (isset($setting) && $setting->vision_image)
                    var file = {!! json_encode($setting->vision_image) !!}
                    this.options.addedfile.call(this, file)
                    this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="vision_image" value="' + file.file_name + '">')
                    this.options.maxFiles = this.options.maxFiles - 1
                @endif
            },
            error: function(file, response) {
                if ($.type(response) === 'string') {
                    var message = response //dropzone sends it's own error messages in string
                } else {
                    var message = response.errors.file
                }
                file.previewElement.classList.add('dz-error')
                _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
                _results = []
                for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                    node = _ref[_i]
                    _results.push(node.textContent = message)
                }

                return _results
            }
        }
    </script>
    <script>
        Dropzone.options.missionImageDropzone = {
            url: '{{ route('admin.settings.storeMedia') }}',
            maxFilesize: 40, // MB
            acceptedFiles: '.jpeg,.jpg,.png,.gif',
            maxFiles: 1,
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            params: {
                size: 40,
                width: 300,
                height: 350
            },
            success: function(file, response) {
                $('form').find('input[name="mission_image"]').remove()
                $('form').append('<input type="hidden" name="mission_image" value="' + response.name + '">')
            },
            removedfile: function(file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="mission_image"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function() {
                @if (isset($setting) && $setting->mission_image)
                    var file = {!! json_encode($setting->mission_image) !!}
                    this.options.addedfile.call(this, file)
                    this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="mission_image" value="' + file.file_name + '">')
                    this.options.maxFiles = this.options.maxFiles - 1
                @endif
            },
            error: function(file, response) {
                if ($.type(response) === 'string') {
                    var message = response //dropzone sends it's own error messages in string
                } else {
                    var message = response.errors.file
                }
                file.previewElement.classList.add('dz-error')
                _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
                _results = []
                for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                    node = _ref[_i]
                    _results.push(node.textContent = message)
                }

                return _results
            }
        }
    </script>
    <script>
        Dropzone.options.innerImageDropzone = {
            url: '{{ route('admin.settings.storeMedia') }}',
            maxFilesize: 40, // MB
            acceptedFiles: '.jpeg,.jpg,.png,.gif',
            maxFiles: 1,
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            params: {
                size: 40,
                width: 1920,
                height: 420
            },
            success: function(file, response) {
                $('form').find('input[name="inner_image"]').remove()
                $('form').append('<input type="hidden" name="inner_image" value="' + response.name + '">')
            },
            removedfile: function(file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="inner_image"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function() {
                @if (isset($setting) && $setting->inner_image)
                    var file = {!! json_encode($setting->inner_image) !!}
                    this.options.addedfile.call(this, file)
                    this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="inner_image" value="' + file.file_name + '">')
                    this.options.maxFiles = this.options.maxFiles - 1
                @endif
            },
            error: function(file, response) {
                if ($.type(response) === 'string') {
                    var message = response //dropzone sends it's own error messages in string
                } else {
                    var message = response.errors.file
                }
                file.previewElement.classList.add('dz-error')
                _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
                _results = []
                for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                    node = _ref[_i]
                    _results.push(node.textContent = message)
                }

                return _results
            }
        }
    </script>
    <script>
        Dropzone.options.signatureImageDropzone = {
            url: '{{ route('admin.settings.storeMedia') }}',
            maxFilesize: 20, // MB
            acceptedFiles: '.jpeg,.jpg,.png,.gif',
            maxFiles: 1,
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            params: {
                size: 20,
                width: 235,
                height: 117
            },
            success: function(file, response) {
                $('form').find('input[name="signature_image"]').remove()
                $('form').append('<input type="hidden" name="signature_image" value="' + response.name + '">')
            },
            removedfile: function(file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="signature_image"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function() {
                @if (isset($setting) && $setting->signature_image)
                    var file = {!! json_encode($setting->signature_image) !!}
                    this.options.addedfile.call(this, file)
                    this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="signature_image" value="' + file.file_name + '">')
                    this.options.maxFiles = this.options.maxFiles - 1
                @endif
            },
            error: function(file, response) {
                if ($.type(response) === 'string') {
                    var message = response //dropzone sends it's own error messages in string
                } else {
                    var message = response.errors.file
                }
                file.previewElement.classList.add('dz-error')
                _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
                _results = []
                for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                    node = _ref[_i]
                    _results.push(node.textContent = message)
                }

                return _results
            }
        }
    </script>
    <script>
        Dropzone.options.whiteLogoDropzone = {
            url: '{{ route('admin.settings.storeMedia') }}',
            maxFilesize: 40, // MB
            acceptedFiles: '.jpeg,.jpg,.png,.gif',
            maxFiles: 1,
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            params: {
                width: 296,
                height: 182
            },
            success: function(file, response) {
                $('form').find('input[name="white_logo"]').remove()
                $('form').append('<input type="hidden" name="white_logo" value="' + response.name + '">')
            },
            removedfile: function(file) {
                file.previewElement.remove()
                if (file.status !== 'error') {
                    $('form').find('input[name="white_logo"]').remove()
                    this.options.maxFiles = this.options.maxFiles + 1
                }
            },
            init: function() {
                @if (isset($setting) && $setting->white_logo)
                    var file = {!! json_encode($setting->white_logo) !!}
                    this.options.addedfile.call(this, file)
                    this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
                    file.previewElement.classList.add('dz-complete')
                    $('form').append('<input type="hidden" name="white_logo" value="' + file.file_name + '">')
                    this.options.maxFiles = this.options.maxFiles - 1
                @endif
            },
            error: function(file, response) {
                if ($.type(response) === 'string') {
                    var message = response //dropzone sends it's own error messages in string
                } else {
                    var message = response.errors.file
                }
                file.previewElement.classList.add('dz-error')
                _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
                _results = []
                for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                    node = _ref[_i]
                    _results.push(node.textContent = message)
                }

                return _results
            }
        }
    </script>
@endsection
