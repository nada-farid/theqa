<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCareerRequest;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use App\Models\Career;
use Illuminate\Http\Request;
use Alert;

class CareerController extends Controller
{
    //
    public function career(){
        return view('frontend.career');
    }

    public function store(StoreCareerRequest $request){

        $career = Career::create($request->all());

        $career->addMedia($request->cv)->toMediaCollection('cv');

        Alert::success(trans('front.Success'), trans('front.SavedSuccessfully'));

        return redirect()->back();
    }
}
