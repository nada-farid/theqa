@extends('frontend.layouts.main')

@section('content')
    @include('frontend.partials.breadcrumb', ['heading' =>  trans('front.News') , 'heading2' => trans('front.News') ])

    <!-- heroooooo  Area -->
    <!-- ////////////////////services////////////////////// -->
    <div class="news mt-5">
        <div class="container">
            <div class="row">

                <div class="row ">
                    @foreach ($news as $new)
                        <div class=" col-md-4">
                            <div class="bloglistItem">
                                @if ($new->image)
                                    <div class="blThumb">
                                        <img src="{{ $new->image->getUrl() }}" alt="">
                                    </div>
                                @endif
                                <div class="blogContent02">
                                    <div class="bmeta">
                                        {{-- <a href="javascript:void(0);"><i class="fa-regular fa-eye"></i> 232 Views</a> --}}
                                        <a href="single-news.html"> <i class="fa-regular fa-calendar-days"></i>
                                            {{ $new->date }}</a>
                                    </div>
                                    <h3><a href="single-news.html">{{ $new->name }} </a></h3>
                                    <p>
                                        {{ $new->short_description }}
                                    </p>
                                    <a class="rm_more" href="{{ route('frontend.new',$new) }}">{{trans('front.ReadMore')}} <i
                                            class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>

                        </div>
                    @endforeach



                </div>
            </div>




        </div>
    </div>


    <!-- ///////////////////////////////////////// -->
@endsection
