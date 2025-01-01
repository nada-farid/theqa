@extends('frontend.layouts.main')

@section('content')
    @include('frontend.partials.breadcrumb', ['heading' => trans('front.Career'), 'heading2' => trans('front.Career')])

    <!-- ////////////////////Career////////////////////// -->

    <div class="career mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>

                <!-- Personal Information Section -->
                <div class="col-md-8">

                    <form id="contact" action="{{ route('frontend.career.store') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <h3> {{trans('front.JobApplication')}}</h3>
                        <div class="row">
                            <div class="col-6">
                                <fieldset>
                                    <input placeholder="{{trans('front.FirstName')}}"
                                        class="form-control {{ $errors->has('full_name') ? 'is-invalid' : '' }}"
                                        type="text" name="full_name" id="full_name" value="{{ old('full_name', '') }}"
                                        required>
                                    @if ($errors->has('full_name'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('full_name') }}
                                        </div>
                                    @endif
                                </fieldset>
                            </div>
                            <div class="col-6">
                                <fieldset>
                                    <input tabindex="3"
                                        class="form-control {{ $errors->has('last_name') ? 'is-invalid' : '' }}"
                                        type="text" name="last_name" id="last_name" value="{{ old('last_name', '') }}"
                                        required placeholder="{{trans('front.LastName')}}">
                                    @if ($errors->has('last_name'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('last_name') }}
                                        </div>
                                    @endif
                                </fieldset>
                            </div>
                        </div>
                        <fieldset>
                            <input tabindex="3" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                placeholder="{{trans('front.Email')}}" type="text" name="email" id="email"
                                value="{{ old('email', '') }}" required>
                            @if ($errors->has('email'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('email') }}
                                </div>
                            @endif
                        </fieldset>


                        <fieldset>
                            <input placeholder="{{trans('front.Phone')}}" tabindex="3"
                                class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" type="tel"
                                name="phone" id="phone" value="{{ old('phone', '') }}">
                            @if ($errors->has('phone'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('phone') }}
                                </div>
                            @endif
                        </fieldset>
                        <fieldset>
                    

                            <input placeholder="{{trans('front.JobTitle')}}"
                                class="form-control {{ $errors->has('job') ? 'is-invalid' : '' }}" type="text"
                                name="job" id="job" value="{{ old('job', '') }}">
                            @if ($errors->has('job'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('job') }}
                                </div>
                            @endif
                        </fieldset>



                        <!-- Resume Upload -->
                        <fieldset>
                            <label class="block mb-2" for="resume">{{trans('front.UploadResume')}}:</label>
                            <input name="cv" type="file" id="cv"  class="p-2 border rounded  {{ $errors->has('cv') ? 'is-invalid' : '' }}">
                            @if ($errors->has('cv'))
                            <div class="invalid-feedback">
                                {{ $errors->first('cv') }}
                            </div>
                        @endif
                        </fieldset>

                        <fieldset>
                            <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">{{trans('front.SendNow')}}
                                </button>
                        </fieldset>
                    </form>
                </div>
            </div>




        </div>
    </div>

    <!-- ///////////////////////////////////////// -->
@endsection
@section('scripts')
       <script>
        const fileInput = document.getElementById('cv');
        const fileNameDisplay = document.getElementById('fileName');

        fileInput.addEventListener('change', function() {
            if (fileInput.files.length > 0) {
                fileNameDisplay.textContent = fileInput.files[0].name;
            }
        });
    </script>
@endsection