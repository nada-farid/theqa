@extends('frontend.layouts.main')

@section('content')
    @include('frontend.partials.breadcrumb', ['heading' => ' Projects', 'heading2' => $project->title])

    <!-- heroooooo  Area -->
    <!-- ////////////////////services////////////////////// -->

    <section class="singlefolioPage">
        <div class="container largeContainer">
            <div class="row">
                <div class="col-lg-12">
                    @if ($project->inner_image)
                        <div class="fsThumb">
                            <img src="{{ $project->inner_image->getUrl() }}" alt="">
                        </div>
                    @endif
                </div>
            </div>
            <div class="row fsconWrap">
                <div class="col-lg-12">
                    <div class="sfContent">
                        <div class="fsMeta">
                            <span> {{ $project->title }}</span>
                            <h4> {{ $project->service }}</h4>
                        </div>
                        <div class="fsMeta">
                            <span>Time Duration</span>
                            <h4>{{ $project->duration }}+ Hour</h4>
                        </div>
                        <div class="fsMeta">
                            <span>Team</span>
                            <h4>{{ $project->team }}</h4>
                        </div>
                        <div class="fsMeta btnMeta">
                            <a href="{{ $project->live_url }}" class="qu_btn">Live Preview</a>
                        </div>
                    </div>
                    {!! $project->long_description !!}
                </div>
            </div>
            <div class="row">
                @foreach ($project->photos as $key => $media)
                    <div class="col-lg-4 col-md-6">
                        <div class="serviceITem">
                            <img src="{{ $media->getUrl() }}">

                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row rlsContent">
                <div class="col-lg-12">
                    {!! $project->description !!}
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="serQuote">
                        {{ $project->quotation_text }}
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- ///////////////////////////////////////// -->
@endsection
