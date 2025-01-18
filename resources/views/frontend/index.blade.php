@extends('frontend.layouts.main')

@section('content')
    <!-- hero  Area -->


    <div class="hero-sec">



        <ul id="demo1" style="direction:ltr;">
            @foreach ($sliders as $slider)
                @if ($slider->image)
                    <li>
                        <div class="slidelink"><a href="{{ $slider->link }}">
                                <div class="overslide"></div><img src="{{ $slider->image->getUrl() }}" />
                            </a> </div>
                    </li>
                @endif
            @endforeach

        </ul>
        <div class="her-form">
            <p>{{ trans('front.Ready') }} </p>
            <h4>{{ trans('front.ContactUsToday') }} </h4>
            <form action="{{ route('frontend.contact.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <input name="name" type="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                        id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" {{ trans('front.Name') }} " value="{{ old('name') }}">
                    @if ($errors->has('name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('name') }}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <input name="phone" type="number"
                        class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" id="exampleInputEmail1"
                        aria-describedby="emailHelp" placeholder="{{ trans('front.Phone') }}" value="{{ old('phone') }}">

                    @if ($errors->has('phone'))
                        <div class="invalid-feedback">
                            {{ $errors->first('phone') }}
                        </div>
                    @endif
                </div>

                <div class="form-group">
                    <input name="email" type="email"
                        class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" id="exampleInputEmail1"
                        aria-describedby="emailHelp" placeholder="{{ trans('front.Email') }}" value="{{ old('email') }}">
                    @if ($errors->has('email'))
                        <div class="invalid-feedback">
                            {{ $errors->first('email') }}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <input type="text" class="form-control {{ $errors->has('website') ? 'is-invalid' : '' }}"
                        id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="{{ trans('front.Website') }}" value="{{ old('website') }}">
                    @if ($errors->has('website'))
                        <div class="invalid-feedback">
                            {{ $errors->first('website') }}
                        </div>
                    @endif
                </div>
                <div class="form-group mb-2">
                    <textarea class="form-control  {{ $errors->has('message') ? 'is-invalid' : '' }}" name="message"
                        placeholder="{{ trans('front.TypeYourMessage') }}...." tabindex="5" required autofocus >{{ old('message') }}</textarea>
                    @if ($errors->has('message'))
                        <div class="invalid-feedback">
                            {{ $errors->first('message') }}
                        </div>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">{{ trans('front.Submit') }}</button>

            </form>
        </div>

    </div>


    <!-- heroooooo  Area -->
    <!-- /////////////////// STRATEGIES///////////////////// -->
    @if ($Strategies->count() > 0)
        <section class="strategy py-2">
            <div class="raw-container main-strategy">
                <h2 class="text-center text-capitalize my-3 ">
                    {{ trans('front.OURMAINTENANCESTRATEGIES') }}
                </h2>
                <div class="strategy-content mt-3 row d-flex justify-content-center align-items-stretch g-4 text-center">
                    @foreach ($Strategies as $strategy)
                        <div
                            class="{{ $loop->first ? 'col-lg-5 col-md-12 col-sm-8 col-auto' : 'col-lg-3 col-md-6 col-sm-8 col-auto' }}">
                            <div class="stra-content stra-content{{ $loop->index + 1 }} text-center pt-3 ">
                                <div class="px-3 d-flex flex-column align-items-center justify-content-center">
                                    <h4 class="pt-4"> {{ $strategy->title }}</h4>
                                    <p class="pt-4 stra-p1">
                                        {{ $strategy->description }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <!-- ////////////////////////manager massage//////////////////// -->

    <section class="g-massage bg-white">
        <div class="massage-content raw-container py-5">
            <div class="row main-message ">
                <div class="col-md-1"></div>

                <div class=" col-md-3 ">
                    @if ($setting->chairman_image)
                        <div class="man-image text-center  ">
                            <!-- Rendered size:	488 × 610 px -->
                            <img src="{{ $setting->chairman_image->getUrl() }}" alt="manager image" class="img-fluid" />
                        </div>
                    @endif
                </div>

                <div class=" col-md-6 ">
                    <div class=" manager-massage">
                        <div class="mt-5 ps-4">
                            <div class="main-logo">
                                <img src="{{ asset('frontend/assets/images/logo-s.png') }}" alt="Siyani logo" />
                            </div>
                            <div>
                                <h2 class="mt-2 mb-2"> {{ trans('front.MessageFromTheGeneralManager') }}</h2>
                                <p>
                                    {!! $setting->chairman_description !!}
                                </p>
                                @if ($setting->signature_image)
                                    <div class="text-end mt-3">
                                        <img src="{{ $setting->signature_image->getUrl() }}" alt="" />
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-1"></div>
            </div>
        </div>
    </section>
    <!-- //////////////////////////////// -->
    <!-- //////////////////team////////////////////////// -->

    <section class="team">
        <div class="team-adv">
            <div class="team-content">
                <p class="text-capitalize text-white">
                <div class="text-white">{!! $setting->home_section_1 !!}</div>
                </p>
                    <div class="back-logo">
                        <img src="{{asset('frontend/assets/images/logo-white 1.png')}}" alt="background logo" />
                    </div>
            </div>
        </div>
    </section>

    <!-- ////////////////////services////////////////////// -->

    <section class="services mt-5 ">

        <div class="ser-content container py-5">
            <div class="ser-main row g-4 d-flex align-items-center justify-content-center text-center">
                @foreach ($services as $service)
                    <div class="col-md-4 col-sm-6 col-12">
                        <div class="ser-item d-flex align-items-center justify-content-center"
                            style="background-image: url('{{ $service->getFirstMediaUrl('image') }}');">

                            <div class="info-item">
                                <p>{{ $service->name }}</p>
                            </div>
                            <div class="hovered-section px-3 align-items-center justify-content-center flex-column">
                                <h4>{{ $service->name }}</h4>

                                <p> {{Str::limit( $service->short_description, 250) }} </p>
                                <a href="{{ route('frontend.service', $service->id) }}"
                                    class="d-flex align-items-center justify-content-center text-white">
                                    <i class="fa-solid fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>




    <!-- ///////////////////////////////////////// -->
    <!-- //////////////////////emergency offer /////////////////////// -->

    <section class="offer ">
        <div class="offer-main raw-container py-5">
            <div class="offer-container">
                <div class="offer-content text-center d-flex align-items-center  justify-content-center">
                    <p class="text-white">
                    <div class="text-white">{!! $setting->home_section_2 !!}</div>
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script type="text/javascript">
        jQuery(document).ready(function() {
            jQuery('#demo1').skdslider({
                'delay': 5000,
                'animationSpeed': 2000,
                'showNextPrev': true,
                'showPlayButton': true,
                'autoSlide': true,
                'animationType': 'sliding'
            });
            jQuery('#demo2').skdslider({
                'delay': 5000,
                'animationSpeed': 1000,
                'showNextPrev': true,
                'showPlayButton': true,
                'autoSlide': true,
                'animationType': 'sliding'
            });
            jQuery('#demo3').skdslider({
                'delay': 5000,
                'animationSpeed': 2000,
                'showNextPrev': true,
                'showPlayButton': true,
                'autoSlide': true,
                'animationType': 'fading'
            });

            jQuery('#responsive').change(function() {
                $('#responsive_wrapper').width(jQuery(this).val());
            });

        });
    </script>
@endsection
