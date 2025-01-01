<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Neww;
use Illuminate\Http\Request;

class NewController extends Controller
{
    //
    public function news(){
        $news = Neww::paginate(8);
        return view('frontend.news',compact('news'));
    }

    public function new(Neww $new){
        return view('frontend.new',compact('new'));
    }
}
