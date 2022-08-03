<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form style="display:flex;flex-direction:column;" action="" method="POST">
        @csrf
        <input name="title" placeholder="title" type="text">
        <input name="email" placeholder="email" type="email">
        <input name="name" placeholder="name" type="text">
        <textarea name="body" id="" cols="30" rows="10" placeholder="message"></textarea>
        <button>submit</button>
    </form>
    
</body>
</html>