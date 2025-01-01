@extends('frontend.layouts.main')

@section('content')

    @include('frontend.partials.breadcrumb', ['heading' =>trans('front.AboutUs'),'heading2'=>trans('front.AboutUs')])
    <!-- hero  Area -->

    <div class="about-page mt-5 ">
        <div class="container">

            <div class="row text-center">
                <p class="">
                    {{ $setting->about_description }}
                </p>


            </div>


            <div class="story mt-5">
                <div class="row">
                    <div class="col-md-9">
                        <div class="tabs">
                            <div class="tab">
                                <button class="tab-toggle"> {{trans('front.OurStory')}}</button>
                            </div>
                            <div class="content">
                                <h3 class="heading"> {{trans('front.OurStory')}}</h3>
                                <p class="description">{!! $setting->vision_text !!}</p>
                            </div>
                            <div class="tab">
                                <button class="tab-toggle"> {{trans('front.OurMission')}}</button>
                            </div>
                            <div class="content">
                                <h3 class="heading">{{trans('front.OurMission')}}</h3>
                                <p class="description">{!! $setting->mission_text !!}</p>
                            </div>
                            <div class="tab">
                                <button class="tab-toggle">{{trans('front.WhyUs')}}</button>
                            </div>
                            <div class="content">
                                <h3 class="heading">{{trans('front.WhyUs')}}</h3>
                                <p class="description">{!! $setting->why_us_text !!}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        @if ($setting->about_photo)
                            <div class="about-img">
                                <img src="{{ $setting->about_photo->getUrl() }}" class="img-fluid" />
                            </div>
                        @endif
                    </div>
                </div>
            </div>





        </div>
    </div>
    @if ($team->count() > 0)
        <div class="testimonials mt-5">

            <div class="container">
                <section id="testim" class="testim">
                    <div class="testim-cover">
                        <div class="wrap">

                            <span id="right-arrow" class="arrow right fa fa-chevron-right"></span>
                            <span id="left-arrow" class="arrow left fa fa-chevron-left "></span>
                            <ul id="testim-dots" class="dots">
                                @foreach ($team as $item)
                                    <li class="dot {{ $loop->first ? 'active' : '' }}"></li>
                                @endforeach
                            </ul>
                            <div id="testim-content" class="cont">
                                @foreach ($team as $item)
                                    <div class="{{ $loop->first ? 'active' : '' }}">
                                        @if ($item->image)
                                            <div class="img"><img src="{{ $item->image->getUrl() }}" alt="">
                                            </div>
                                        @endif
                                        <h2>{{ $item->name }}</h2>
                                        <p>{{ $item->review }}</p>
                                    </div>
                                @endforeach




                            </div>

                        </div>
                    </div>
                </section>
            </div>
        </div>
    @endif
@endsection
@section('scripts')
    <!------tabs------>
    <script id="rendered-js">
        // ----------------- Variables

        wrapper = $(".tabs");
        tabs = wrapper.find(".tab");
        tabToggle = wrapper.find(".tab-toggle");

        // ----------------- Functions

        function openTab() {
            var content = $(this).parent().next(".content"),
                activeItems = wrapper.find(".active");

            if (!$(this).hasClass('active')) {
                $(this).add(content).add(activeItems).toggleClass('active');
                wrapper.css('min-height', content.outerHeight());
            }
        };

        // ----------------- Interactions

        tabToggle.on('click', openTab);

        // ----------------- Constructor functions

        $(window).load(function() {
            tabToggle.first().trigger('click');
        });
        //# sourceURL=pen.js
    </script>


    <!--------------------test------------------>
    <script id="rendered-js">
        // vars
        'use strict';
        var testim = document.getElementById("testim"),
            testimDots = Array.prototype.slice.call(document.getElementById("testim-dots").children),
            testimContent = Array.prototype.slice.call(document.getElementById("testim-content").children),
            testimLeftArrow = document.getElementById("left-arrow"),
            
            testimRightArrow = document.getElementById("right-arrow"),
            testimSpeed = 4500,
            currentSlide = 0,
            currentActive = 0,
            testimTimer,
            touchStartPos,
            touchEndPos,
            touchPosDiff,
            ignoreTouch = 30;;

        window.onload = function() {

            // Testim Script
            function playSlide(slide) {
                for (var k = 0; k < testimDots.length; k++) {
                    if (window.CP.shouldStopExecution(0)) break;
                    testimContent[k].classList.remove("active");
                    testimContent[k].classList.remove("inactive");
                    testimDots[k].classList.remove("active");
                }
                window.CP.exitedLoop(0);

                if (slide < 0) {
                    slide = currentSlide = testimContent.length - 1;
                }

                if (slide > testimContent.length - 1) {
                    slide = currentSlide = 0;
                }

                if (currentActive != currentSlide) {
                    testimContent[currentActive].classList.add("inactive");
                }
                testimContent[slide].classList.add("active");
                testimDots[slide].classList.add("active");

                currentActive = currentSlide;

                clearTimeout(testimTimer);
                testimTimer = setTimeout(function() {
                    playSlide(currentSlide += 1);
                }, testimSpeed);
            }

            testimLeftArrow.addEventListener("click", function() {
                playSlide(currentSlide -= 1);
            });

            testimRightArrow.addEventListener("click", function() {
                playSlide(currentSlide += 1);
            });

            for (var l = 0; l < testimDots.length; l++) {
                if (window.CP.shouldStopExecution(1)) break;
                testimDots[l].addEventListener("click", function() {
                    playSlide(currentSlide = testimDots.indexOf(this));
                });
            }
            window.CP.exitedLoop(1);

            playSlide(currentSlide);

            // keyboard shortcuts
            document.addEventListener("keyup", function(e) {
                switch (e.keyCode) {
                    case 37:
                        testimLeftArrow.click();
                        break;

                    case 39:
                        testimRightArrow.click();
                        break;

                    case 39:
                        testimRightArrow.click();
                        break;

                    default:
                        break;
                }

            });

            testim.addEventListener("touchstart", function(e) {
                touchStartPos = e.changedTouches[0].clientX;
            });

            testim.addEventListener("touchend", function(e) {
                touchEndPos = e.changedTouches[0].clientX;

                touchPosDiff = touchStartPos - touchEndPos;

                console.log(touchPosDiff);
                console.log(touchStartPos);
                console.log(touchEndPos);


                if (touchPosDiff > 0 + ignoreTouch) {
                    testimLeftArrow.click();
                } else if (touchPosDiff < 0 - ignoreTouch) {
                    testimRightArrow.click();
                } else {
                    return;
                }

            });
        };
        //# sourceURL=pen.js
    </script>
@endsection
