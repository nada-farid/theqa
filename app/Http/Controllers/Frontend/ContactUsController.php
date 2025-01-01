<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use Alert;

class ContactUsController extends Controller
{
    //
    public function contact(){
        return view('frontend.contact');
    }
    public function store(StoreContactRequest $request)
    {
        $contact = Contact::create($request->all());

        Alert::success(trans('front.Success'), trans('front.SavedSuccessfully'));

        return redirect()->back();
    }
}
