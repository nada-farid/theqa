@extends('frontend.layouts.main')

@section('content')
    @include('frontend.partials.breadcrumb', ['heading' => trans('front.AllProjects') , 'heading2' =>  trans('front.Projects')])

    <!-- heroooooo  Area -->
    <!-- ////////////////////services////////////////////// -->

    <section class="portfolioPage mt-5 ">
        <div class="container largeContainer">
            <div class="row shaff_grid shuffle">
                @foreach ($projects as $project)
                    <div class="col-lg-3 col-md-6 shaff_item shuffle-item ">
                        <div class="folioItem02">
                            @if ($project->image)
                                <img src="{{ $project->image->getUrl() }}" alt="">
                            @endif
                            <div class="folioContent">
                                <a href="{{ route('frontend.project', $project) }}">{{ $project->name }}</a>
                                <h3><a href="{{ route('frontend.project', $project) }}">{{ $project->short_description }}</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-md-1 shaff_size"></div>
            </div>
        </div>
    </section>


    {{ $projects->links() }}

    <!-- ///////////////////////////////////////// -->
@endsection
