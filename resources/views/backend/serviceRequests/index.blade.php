@extends('backend.layouts.app')

@section('title', __('Services'))

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
              <th>name</th>
              <th>email</th>
              <th>phone Number</th>
              <th>service id</th>
              <th>actions</th>
            </tr>

                
            @foreach ($serviceRequests as $serviceRequest) 

                <tr>
                    <td>{{$serviceRequest->id}} </td>
                    <td>{{$serviceRequest->name}} </td>
                    <td>{{$serviceRequest->email}}</td>
                    <td>{{$serviceRequest->phone_number}} </td>
                    <td> @if($serviceRequest->service)

                        <a href={{route('admin.service.show',['service'=> $serviceRequest->service])}}>{{$serviceRequest->service->title}}</a>
                        @else 
                            service name
                         @endif    </td>
                    <td> 
                        <form action={{route('admin.service_request.destroy',['serviceRequest'=> $serviceRequest])}}  method="POST">
                            @csrf
                            @method('delete')
                            <button>delete</button>
                        </form>


                    </td>
                </tr>
            @endforeach

          </table>
        
    </div>

    @if (\Session::has('successMessage'))
<div class="alert alert-success">
    <ul>
        <li>{!! \Session::get('successMessage') !!}</li>
    </ul>
</div>
@endif


    
 
@endsection


