@extends('frontend.layouts.main')

@section('content')
    @include('frontend.partials.breadcrumb', ['heading' => trans('front.News') , 'heading2' => $new->name])


    <div class="singleNews mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-2"></div>

                <!-- Personal Information Section -->
                <div class="col-md-8">

                    <div class="sic_details clearfix">
                        @if ($new->inside_image)
                            <div class="postThumb">
                                <img src="{{ $new->inside_image->getUrl() }}" alt="">
                            </div>
                        @endif
                        {!! $new->description !!}
                        <div class="spMeta clearfix">
                            <div class="row">
                                {{-- <div class="col-md-7">
                                    <div class="tags clearfix">
                                        <h5>Related Tags:</h5>
                                        <a href="News.html">services</a>
                                        <a href="News.html">Plumbing </a>
                                        <a href="News.html">Best control</a>
                                    </div>
                                </div> --}}
                                <div class="col-md-5">
                                    <div class="socialShare">
                                        <h5>Share Now:</h5>
                                        <a class="fac" href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}" target="_blank">
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>
                                        <a class="twi" href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}&text={{ urlencode('Check this out!') }}" target="_blank">
                                            <i class="fa-brands fa-twitter"></i>
                                        </a>
                                        <a class="lin" href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(request()->fullUrl()) }}&title={{ urlencode('Amazing Content') }}" target="_blank">
                                            <i class="fa-brands fa-linkedin-in"></i>
                                        </a>
                                    </div>
                                </div>
                                
                            </div>
                        </div>


                    </div>
                </div>
            </div>




        </div>
    </div>
@endsection
