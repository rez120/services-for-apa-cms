@extends('backend.layouts.app')

@section('title', __('Services'))

@section('content')
 
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
                </tr>
            @endforeach

          </table>
        
    </div>
    
 
@endsection

