<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet" />

    <!-----------------new arabic font family---------------->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap" rel="stylesheet">
    <!-----------------new arabic font family---------------->



    <link rel="stylesheet" href="{{ asset('frontend/css/' . app()->getLocale() . '/all.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/' . app()->getLocale() . '/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/' . app()->getLocale() . '/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/' . app()->getLocale() . '/style.css') }}" />


    <title>{{$setting->site_name}}</title>

    <link href="{{ asset('frontend/css/model.css') }}" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


    <!----slider---->
    <script src="https://code.jquery.com/jquery.js"></script>

    <script src="{{ asset('frontend/src/' . app()->getLocale() . '/skdslider.min.js') }}"></script>
    <link href="{{ asset('frontend/src/' . app()->getLocale() . '/skdslider.css') }}" rel="stylesheet">
    <!----menu---->
    <link rel="stylesheet" href="{{ asset('frontend/css/' . app()->getLocale() . '/ozmenu.css') }}" />

    <script>
        window.console = window.console || function (t) { };
    </script>


    <!----------test-------->
    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js"></script>
    <!----------test-------->



</head>

<body>





    <header class="vs-header header-layout3">
        <!-- Header Top -->
        <div class="header-topper position-relative   w-100 ">
            <div class="container">

                <div class="row ">
                    <div class="header-main position-relative">



                        <!-------------logo------------------>
                        <div class="header-logo ">
                            <a href="{{ route('frontend.home') }}"><img src="{{ $setting->getFirstMediaUrl('logo') }}"
                                    alt="" class="logo w-50"></a>

                        </div>

                        <!----------end-logo------------------>
                        <!-------------head details------------------>
                        <div class="header-infos d-flex px-2">

                            <div class="header-info header-info-1">
                                <div class="media-body">
                                    @if ($setting->phone)
                                        <div class="header-info_link">
                                            <i class="fa-solid fa-phone text-white2  mx-1"></i>
                                            <a href="tel:+{{ $setting->phone }}" class="text-white">
                                                +{{ $setting->phone }}</a>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="header-info header-info-2 d-md-flex">

                                <div class="media-body">
                                    @if ($setting->email)
                                        <div class="header-info_link">
                                            <i class="fa-regular fa-envelope text-white2  mx-1"></i>
                                            <a href="mailto:{{ $setting->email }}"
                                                class="text-white">{{ $setting->email }}</a>
                                        </div>
                                    @endif
                                </div>
                            </div>

                            <div class="lang-set d-flex">
                                @php
                                    $language = session('language', config('app.locale')) === 'ar' ? 'en' : 'ar';
                                @endphp
                                <a href="{{ route('change.language', $language) }}"
                                    class="d-flex align-items-center justify-content-center">
                                    <span class="text-white">{{ strtoupper($language) }}</span>
                                </a>
                            </div>

                        </div>

                        <!-------------head details------------------>

                    </div>

                </div>
            </div>
        </div>



    </header>
    <!-- Main Menu Area -->

    <!-- Ozmenu -->

    <div class="container">
        <div class="menu">
            <div class="menu-open"><span class="open"></span></div>
            <div class="ozmenu ">
                <div class="menu-close"><span class="close"></span></div>
                <ul class="ozmenu-nav">
                    <li class="item"><a href="{{ route('frontend.home') }}">{{ trans('front.Home') }}</a></li>
                    <li class="item"><a href="{{ route('frontend.about') }}">{{ trans('front.AboutUs') }}</a></li>
                    <li class="item dropdownitem">
                        <a href="#" class="nav-dropdown">{{ trans('front.Services') }}</a>
                        <div class="dropdown">
                            <ul>
                                @foreach ($services as $service)
                                    <li class="item"><a
                                            href="{{ route('frontend.service', $service) }}">{{ $service->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </li>


                    <li class="item"><a href="{{ route('frontend.projects') }}">{{ trans('front.Projects') }}</a></li>
                    <li class="item"><a href="{{ route('frontend.news') }}">{{ trans('front.News') }}</a></li>
                    <li class="item"><a href="{{ route('frontend.career') }}">{{ trans('front.Career') }}</a></li>
                    <li class="item"><a href="{{ route('frontend.contact') }}">{{ trans('front.Contact') }}</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /Ozmenu -->
    @yield('content')



    <!-- ////////////////////////////footer/////////////////////////////// -->
    <footer class="py-5 footer-part">
        <div class="footer-content raw-container text-center">
            <div class="row d-flex align-items-center justify-content-center">
                <div class="col-lg-5 col-md-8 col-sm-12 col-12">
                    <div class="footer-items row g-2 d-flex align-items-center justify-content-center">
                        <div class="col-md-2 col-2">
                            <div class="f-icon">
                                <a href="{{$setting->facebook}}"> <i class="fa-brands fa-facebook"></i></a>
                            </div>
                        </div>

                        <div class="col-md-2 col-2">
                            <div class="f-icon">
                                <a href="{{$setting->youtubte}}">
                                    <i class="fa-brands fa-youtube"></i>
                                </a>
                            </div>
                        </div>
    
                        <div class="col-md-2 col-2">
                            <div class="f-icon">
                                <a href="{{$setting->twitter}}">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-2 col-2">
                            <div class="f-icon">
                                <a href="{{$setting->whatsapp}}">
                                    <i class="fa-brands fa-whatsapp"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="text-center my-3">
                <p class="text-white">
                    {{trans('front.CopyRight')}}
                </p>
            </div>
        </div>
    </footer>
    @include('sweetalert::alert')

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="{{ asset('frontend/js/' . app()->getLocale() . '/all.min.js') }}"></script>


    <script src="{{ asset('frontend/js/' . app()->getLocale() . '/index.js') }}"></script>


    <!----slider---->
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-3415878-12', 'dandywebsolution.com');
        ga('send', 'pageview');
    </script>
    <!----slider---->
    <script src="{{ asset('frontend/js/' . app()->getLocale() . '/ozmenu.js') }}"></script>
    @yield('scripts')

</body>

</html>
