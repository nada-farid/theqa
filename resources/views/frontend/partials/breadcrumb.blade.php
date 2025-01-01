
<section class="page_banner" style="background-image: url({{$setting->getFirstMediaUrl('inner_image')}});">
    <div class="container largeContainer">
        <div class="row">
            <div class="col-md-6">
                <h2 class="banner-title"> {{$heading}}</h2>
            </div>
            <div class="col-md-6 text-right">
                <p class="breadcrumbs"><a href="{{route('frontend.home')}}" rel="v:url"><i class="twi-home-alt1"></i>{{ trans('front.Home') }}</a><span>/</span> {{$heading2}}  </p>
            </div>
        </div>
    </div>
</section>

