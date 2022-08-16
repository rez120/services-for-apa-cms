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


    <h1>services</h1>

 

        @foreach ($services as $service) 
            
            <h2>{{$service->title}} </h2>
            <a href={{route("service_request.create", ['service_id'=> $service->id])}}>add </a>
           <br>
        
        @endforeach


        @if (\Session::has('successMessage'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('successMessage') !!}</li>
            </ul>
        </div>
    @endif
         
</body>
</html>