<?php

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;



class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $services = Service::all();
        
        return view('backend.services.index', ['services'=>$services]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request, [
            'title' => 'required|max:255',
            'thumbnail'=> 'required|max:255',
            'body' => 'required|max:60000',
        ]);

        $service = new Service;
        $service->title = $request->title ;
        $service->thumbnail = $request->thumbnail ;
        $service->body = $request->body;
        $service -> save();

        return redirect()->route('admin.service.index')->with('successMessage', 'The Service was successfully created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        return view('backend.services.show',['service'=> $service]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        
      return view('backend.services.edit', ['service'=> $service]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'thumbnail'=> 'required|max:255',
            'body' => 'required|max:60000',
        ]);

        $service->title = $request->title;
        $service->thumbnail = $request->thumbnail;
        $service->body = $request->body;
        $service->save();
        

        return redirect()->route('admin.service.index')->with('successMessage', 'The Service was successfully edited.');

    }


    public function hide(Service $service){
        
        if($service->visibility == 1){
            $service->visibility = 0;
            $service->save();
        }
        elseif($service->visibility == 0){
            $service->visibility = 1;
            $service->save();
        }


        // return $service;

        return redirect()->route('admin.service.index')->with('successMessage', 'The Service was successfully hidden/unhidden.');
        
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {


        foreach($service->serviceRequests as $serviceRequest){
            $serviceRequest->delete();
        }
        $service->delete();


          
        return redirect()->route('admin.service.index')->with('successMessage', "The Service and it's requests was successfully deleted.");
    }
}