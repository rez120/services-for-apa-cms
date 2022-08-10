<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactMessage;

class ContactMessageController extends Controller
{
    public function index(){


        $contactMessages = ContactMessage::all();

        return view('backend.contacts.index', ['contactMessages'=> $contactMessages]);
    }



    public function destroy(ContactMessage $contactMessage)
    {

        $contactMessage->delete();
          
        return redirect()->back();
    }


    public function show(ContactMessage $contactMessage)
    {

        return view('backend.contacts.show', ['contactMessage'=> $contactMessage]);
    }
}