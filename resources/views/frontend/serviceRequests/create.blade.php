<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>



    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <h1>service requests</h1>

    @php

            $model = App\Models\Service::find($service_id) ;
            
        
    @endphp

    {{$model}}

   

    <form action={{route("service_request.store")}} method="POST" style = "display:flex;flex-direction:column;">
        @csrf
        <input type="text" name="name" placeholder="name">
        <input type="text" name="email" placeholder="email">
        <input type="text" name="phone_number" placeholder="phone number">
        <input type="text" name="organization_name" placeholder="organization name">
        <input type="hidden" value={{$service_id}}  name="service_id">
        <button>send</button>
      
        id:  {{$service_id}}
    </form>


    
    @if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif

    
    
</body>
</html>