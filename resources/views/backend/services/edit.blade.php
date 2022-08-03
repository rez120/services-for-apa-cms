@extends('backend.layouts.app')

@section('title', __('Services'))

@section('content')

        <h1>error</h1>
        @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <h1>error</h1>


        <form style="background-color:white; display:flex; flex-direction: column;" action={{route('admin.service.update',['service' => $service->id] )}} method="POST">
            @csrf
            @method('PATCH')
            {{-- @method('PUT') --}}
            <input name="title" type="text" placeholder="title"  value={{$service->title}}>
            <input name="thumbnail" type="text" value={{$service->thumbnail}}  >
            <textarea name="body" id="" cols="30" rows="10" placeholder="description">{{$service->body}}</textarea>
            <button>submit</button>
        </form>

        @if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif

@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif


@php 

    var_dump($service->title);

@endphp

@endsection




