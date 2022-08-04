@extends('backend.layouts.app')

@section('titlezz', __('Dashboard'))

@section('content')
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
                    
                    <form action={{route('admin.contact.destroy', ['contactMessage'=>$contactMessage->id])}} method="POST">
                        @csrf
                        @method('delete')
                        <button>delete</button>
                    </form>

                    
                </td>
            </tr>
        @endforeach

      </table>
    
</div>
@endsection
