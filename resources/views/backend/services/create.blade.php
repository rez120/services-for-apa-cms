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


        <form style="background-color:white; display:flex; flex-direction: column;" action={{route('admin.service.store')}} method="POST">
            @csrf
            {{-- @method('PUT') --}}
            <input name="title" type="text" placeholder="title">
            <input name="thumbnail" type="text"  >
            <textarea name="body" id="" cols="30" rows="10" placeholder="descryption"></textarea>
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

@endsection






