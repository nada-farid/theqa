<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //

    public function service(Service $service){
        $related = Service::where('category_id',$service->category_id)->whereNot('id',$service->id)->get()->take(3);
        return view('frontend.service',compact('service','related'));
    }
}
