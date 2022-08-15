<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{


    public function index(){

        $services = Service::all();


        return view('frontend.services.index',['services'=> $services] );
    }


    public function serviceRequests()
    {
        return $this->hasMany(serviceRequest::class);
    }
}