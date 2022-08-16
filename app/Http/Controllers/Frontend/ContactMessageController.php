<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\contactMessage;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    public function create(){

        return view('frontend.contactMessages.create');
    }



    public function store(Request $request)
    {
         $this->validate($request, [
            'title' => 'required|max:255',
            'email'=> 'required|email|max:255',
            'name'=> 'required|max:255',
            'body' => 'required|max:5000'
        ]);

        $contactMessage = new ContactMessage;
        $contactMessage->title = $request->title ;
        $contactMessage->name = $request->name ;
        $contactMessage->email = $request->email;
        $contactMessage->body = $request->body;


        $contactMessage -> save();

        return redirect()->route('contact_message.create')->with('successMessage', 'The message was successfully sent.');




    }
}