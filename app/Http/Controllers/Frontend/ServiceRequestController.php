<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServiceRequest;
use App\Models\Service;
class ServiceRequestController extends Controller
{
    
    public function create( $service_id){

        return view('frontend.serviceRequests.create', ['service_id'=> $service_id]);
    }


    public function store(Request $request){

        $this->validate($request, [
            'name' => 'required|max:255',
            'phone_number'=> 'required|max:30',
            'organization_name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'service_id' => 'required|numeric',
        ]);

        $services = Service::all();
        $serviceIdIsLegit = 0;
        foreach($services as $service){
            if($service->id == $request->service_id){
                $serviceIdIsLegit = 1;
                break;
            }
        }



        if(!$serviceIdIsLegit){


           
            return redirect()->route('service_request.create', ['service_id'=> $request->service_id])->withErrors(['msg' => 'Your Service is not valid']);
            // return Redirect::back()->withErrors(['msg' => 'The Message']);
        }

        $serviceRequest = new ServiceRequest;
        $serviceRequest->name = $request->name ;
        $serviceRequest->phone_number = $request->phone_number ;
        $serviceRequest->organization_name = $request->organization_name;
        $serviceRequest->email = $request->email;
        $serviceRequest->service_id = $request->service_id;
        $serviceRequest -> save();


        return redirect()->route('service.index')->with('successMessage', "The Service Request was successfully sent.");


    }

   
}