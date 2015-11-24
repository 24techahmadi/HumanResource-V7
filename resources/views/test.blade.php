<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="{{url('test')}}" method="POST">
    {!! csrf_field() !!}
   UserName: <input type="text" name="username">
    <button type="submit">Submit</button>
</form>
</body>
</html>