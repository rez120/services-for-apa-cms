



@extends('backend.layouts.app')

@section('titlezz', __('Dashboard'))

@section('content')
<div style="width: 80%; min-height:200px; background-color:white;">

    <h2>{{$contactMessage->name}} </h2>
    <h2>{{$contactMessage->email}} </h2>
    <h2> {{$contactMessage->title}} </h2>  
    <p>{{$contactMessage->body}} </p>

    <form action={{route('admin.contact.destroy', ['contactMessage'=> $contactMessage->id])}} method="POST">
        @csrf
        @method('delete')
        <button>delete</button>
    </form>
    
</div>
@endsection
