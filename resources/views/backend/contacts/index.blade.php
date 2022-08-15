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
    <table>
        <tr>
          <th>ID</th>
          <th>Title</th>
          <th>name</th>
          <th>email</th>
          <th>body</th>
          <th>actions</th>
        </tr>

            
        @foreach ($contactMessages as $contactMessage) 

            <tr>
                <td>{{$contactMessage->id}} </td>
                <td>{{$contactMessage->title}} </td>
                <td>{{$contactMessage->name}}</td>
                <td>{{$contactMessage->email}}</td>
                <td>{{$contactMessage->body}}</td>
                <td> 


                    <a href={{route('admin.contact_message.show', ['contact_message'=> $contactMessage])}}>show</a>
                    
                    <form action={{route('admin.contact_message.destroy', ['contact_message'=>$contactMessage])}} method="POST">
                        @csrf
                        @method('delete')
                        <button>delete</button>
                    </form>

                    
                </td>
            </tr>
        @endforeach

      </table>

      @if (\Session::has('successMessage'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('successMessage') !!}</li>
        </ul>
    </div>
@endif
    
</div>
@endsection
