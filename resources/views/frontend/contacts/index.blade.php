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

    <form style="display:flex;flex-direction:column;" action={{route('contactMessage.store')}} method="POST">
        @csrf
        <input name="title" placeholder="title" type="text">
        <input name="email" placeholder="email" type="email">
        <input name="name" placeholder="name" type="text">
        <textarea name="body" id="" cols="30" rows="10" placeholder="message"></textarea>
        <button>submit</button>
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