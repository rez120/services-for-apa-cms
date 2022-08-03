<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\contactMessage;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    public function contactUs(){

        return view('frontend.contacts.index');
    }



    public function store(Request $request)
    {
         $this->validate($request, [
            'title' => 'required|max:255',
            'email'=> 'required|email',
            'name'=> 'required',
            'body' => 'required'
        ]);

        $contactMessage = new ContactMessage;
        $contactMessage->title = $request->title ;
        $contactMessage->name = $request->name ;
        $contactMessage->email = $request->email;
        $contactMessage->body = $request->body;


        $contactMessage -> save();

        return redirect()->back()->with('success', 'successfully created a new service');




    }
}
