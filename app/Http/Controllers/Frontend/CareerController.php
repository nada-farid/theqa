<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCareerRequest;
use App\Models\Job;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use App\Models\Career;
use Illuminate\Http\Request;
use Alert;

class CareerController extends Controller
{
    //
    public function career($job_id = null){
        $jobs = Job::all();
        return view('frontend.career',compact('job_id','jobs'));
    }

    public function store(StoreCareerRequest $request){

        $career = Career::create($request->all());

        $career->addMedia($request->cv)->toMediaCollection('cv');

        Alert::success(trans('front.Success'), trans('front.SavedSuccessfully'));

        return redirect()->back();
    }

    public function jobs(){
        $jobs = Job::all();
        return view('frontend.jobs',compact('jobs'));
    }


}
