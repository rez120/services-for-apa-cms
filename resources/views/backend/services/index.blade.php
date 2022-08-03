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
                    <td>{{$service->body}}</td>
                   
                </tr>
                

            
            @endforeach

          </table>
        
    </div>
    
 
@endsection

