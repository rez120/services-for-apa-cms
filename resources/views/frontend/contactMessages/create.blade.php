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

    <form style="display:flex;flex-direction:column;" action={{route('contact_message.store')}} method="POST">
        @csrf
        <input type="text"  name="title" placeholder="title" >
        <input type="email" name="email" placeholder="email" >
        <input type="text"  name="name"  placeholder="name" >
        <textarea name="body" id="" cols="30" rows="10" placeholder="message"></textarea>
        <button>submit</button>
    </form>



    @if (\Session::has('successMessage'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('successMessage') !!}</li>
        </ul>
    </div>
@endif

    
    
</body>
</html>