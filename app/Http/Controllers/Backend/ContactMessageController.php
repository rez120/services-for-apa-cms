<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactMessage;

class ContactMessageController extends Controller
{
    public function index(){


        $contactMessages = ContactMessage::all();

        return view('backend.contactMessages.index', ['contactMessages'=> $contactMessages]);
    }



    public function destroy(ContactMessage $contact_message)
    {

        $contact_message->delete();
          
        return redirect()->route('admin.contact_message.index')->with('successMessage', 'Successfully soft deleted the contact message.');
    }


    public function show(ContactMessage $contact_message)
    {

        return view('backend.contactMessages.show', ['contactMessage'=> $contact_message]);
    }
}