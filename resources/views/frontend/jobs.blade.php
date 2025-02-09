@extends('frontend.layouts.main')
@section('style')
    <style>
        .job-listing {
            border-bottom: 1px solid #ddd;
            padding: 10px 0;
        }

        .job-listing:last-child {
            border-bottom: none;
        }

        .job-title {
            font-size: 14px;
            font-weight: bold;
        }

        .job-title h4 {
            font-size: 18px;
        }

        .job-description {
            color: #555;
            font-size: 14px;
        }

        .job-title {
            display: flex;
            justify-content: space-between;
        }




        #jobs button[type="submit"] {
            cursor: pointer;
            border: none;
            background: #000;
            color: #FFF;
            margin: 0 0 5px;
            padding: 10px 30px;
            font-size: 14px;
            text-transform: uppercase;
            border-radius: 20px;
            margin-top: 10px;
        }

        #jobs button[type="submit"]:hover {
            background: #1b396b;
            -webkit-transition: background 0.3s ease-in-out;
            -moz-transition: background 0.3s ease-in-out;
            transition: background-color 0.3s ease-in-out;
        }

        #jobs button[type="submit"]:active {
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
        }
    </style>
@endsection

@section('content')
    @include('frontend.partials.breadcrumb', [
        'heading' => trans('front.jobs'),
        'heading2' => trans('front.jobs'),
    ])

    <div id="jobs" class=" mt-5">
        <div class="container">
        @foreach($jobs as $job)
            <div class="job-listing">
                <div class="job-title">
                    <h4>{{$job->title}} </h4>
                    <div class="date">{{ \Carbon\Carbon::parse($job->created_at)->format('d/m/Y') }}
                    </div>
                </div>
                <div class="job-description">{{$job->description}}</div>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending"> <a style="color: white" href="{{route('frontend.career',$job->id)}}">{{trans('front.ApplyNow')}}</a></button> 
            </div>

      @endforeach



        </div>
    </div>
@endsection
