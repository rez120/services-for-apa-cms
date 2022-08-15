<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServiceRequest;
use App\Models\Backend\Service;
class ServiceRequestController extends Controller
{
    
    public function create(Service $service){

        return view('frontend.serviceRequests.index', ['service'=> $service]);
    }


    public function store(Request $request){

        $this->validate($request, [
            'name' => 'required|max:255',
            'phone_number'=> 'required',
            'organization_name' => 'required',
            'email' => 'required',
            'service_id' => 'required',
        ]);

        $serviceRequest = new ServiceRequest;
        $serviceRequest->name = $request->name ;
        $serviceRequest->phone_number = $request->phone_number ;
        $serviceRequest->organization_name = $request->organization_name;
        $serviceRequest->email = $request->email;
        $serviceRequest->service_id = $request->service_id;
        $serviceRequest -> save();


        return "successfully added new service request";


    }

   
}