@extends('frontend.layouts.main')

@section('content')
    @include('frontend.partials.breadcrumb', ['heading' =>  trans('front.AllServices') , 'heading2' =>  trans('front.Services')])


    <!-- heroooooo  Area -->
    <!-- ////////////////////services////////////////////// -->

    <section class="singleServicePage">
        <div class="container largeContainer">
            <div class="row">
                <div class="col-xl-6">
                    @if ($service->inside_image)
                        <div class="ssThumb">
                            <img src="{{ $service->inside_image->getUrl() }}" alt="">
                        </div>
                    @endif
                </div>
                <div class="col-xl-6">
                    <div class="ssContent">
                        <div class="subTitle">{{ $service->category->name }}</div>
                        <h2 class="secTitle">{{ $service->name }}</h2>
                        {!! $service->description !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if ($related->count() > 0)
        <!-- Related Service Start -->
        <section class="relatedService">
            <div class="container largeContainer">
                <h2 class="text-center text-capitalize my-3 ">
                    Related services
                </h2>
                <div class="row">
                    @foreach ($related as $service)
                        <div class="col-lg-4 col-md-6">
                            <div class="serviceITem">
                                <img src="{{ $service->image->getUrl() }}">
                                <a href="{{ route('frontend.service', $service) }}">+</a>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </section>
        <!-- Related Service End -->
    @endif
@endsection
