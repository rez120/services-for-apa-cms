@extends('backend.layouts.app')

@section('title', __('Services'))

@section('content')
 
    <div style="width: 80%; min-height:200px; background-color:white;">
        
        <h2>{{$service->title}}</h2>
        <p>{{$service->thumbnail}}</p>
        <p>{{$service->service_provider}}</p>
        <p>{{$service->body}}</p>

        <a href={{route('admin.service.edit', ['service'=> $service])}}>edit</a>
        <form action={{route('admin.service.destroy', ['service'=> $service->id])}} method="POST">
            @csrf
            @method('delete')
            <button>delete</button>
        </form>  

        <form action={{route('admin.service.visibility', ['service'=>$service->id])}} method="POST">
            @csrf
            @method('put')
            <button>hide</button>
        </form>
    </div>
    
 
@endsection

