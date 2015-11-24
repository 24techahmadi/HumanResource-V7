<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
</head>
<body>
<h1>Contact Me</h1>
<form action="{{ route('contact_send') }}" method="POST">
    <input type="hidden" value="{{ csrf_token() }}" name="_token">

    <label for="name">Your Name: </label>
    <input type="text" name="name" id="name" value="{{ old('name') }}"> <span class="error">{{ $errors->first('name') }}</span> <br>

    <label for="email">Your Email: </label>
    <input type="email" name="email" id="email" value="{{ old('email') }}"> <span class="error">{{ $errors->first('email') }}</span> <br>

    <label for="message">Message:</label>
    <textarea name="message" id="message">{{ old('message') }}</textarea> <span class="error">{{ $errors->first('message') }}</span> <br>

    <input type="submit" value="Send">
</form>

@if (Session::has('message'))
    {{ Session::get('message') }}
@endif
</body>
</html>