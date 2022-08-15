<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServiceRequest;

class ServiceRequestController extends Controller
{
    


    public function index(){
        
        $serviceRequests = ServiceRequest::all();


        return view('backend.serviceRequests.index', ['serviceRequests'=> $serviceRequests]);

    }


    public function destroy(ServiceRequest $serviceRequest){


        $serviceRequest->delete();

        return "delete successful";
    }
}