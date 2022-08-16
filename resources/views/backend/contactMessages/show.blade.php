



@extends('backend.layouts.app')

@section('titlezz', __('Dashboard'))

@section('content')

@if (count($errors) > 0)
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div style="width: 80%; min-height:200px; background-color:white;">

    <h2>{{$contactMessage->name}} </h2>
    <h2>{{$contactMessage->email}} </h2>
    <h2> {{$contactMessage->title}} </h2>  
    <p>{{$contactMessage->body}} </p>

    <form action={{route('admin.contact_message.destroy', ['contact_message'=> $contactMessage])}} method="POST">
        @csrf
        @method('delete')
        <button>delete</button>
    </form>


    
</div>
@endsection
