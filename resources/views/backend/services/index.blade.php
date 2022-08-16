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
 
    <div style="width: 80%; min-height:200px; background-color:white;">
        <table>
            <tr>
              <th>ID</th>
              <th>Title</th>
              <th>Thumbnail</th>
              <th>Body</th>
              <th>actions</th>
            </tr>

                
            @foreach ($services as $service) 

                <tr>
                    <td>{{$service->id}} </td>
                    <td>{{$service->title}} </td>
                    <td>{{$service->thumbnail}}</td>
                    <td>{!!$service->body!!}</td>
                    <td> 
                        
                        <a href={{route('admin.service.edit', ['service'=>$service->id])}}>edit</a>
                        <a href={{route('admin.service.show', ['service'=>$service])}}>show</a>
                        <form action={{route('admin.service.destroy', ['service'=>$service->id])}} method="POST">
                            @csrf
                            @method('delete')
                            <button>delete</button>
                        </form>


                        <form action={{route('admin.service.visibility', ['service'=>$service->id])}} method="POST">
                            @csrf
                            @method('put')
                            <button>hide</button>
                        </form>

                        
                    </td>
                    <td>
                        {{$service->serviceRequests}}
                        
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

