<html>
<head>
<div class="container">
  @yield('title')
 </div>
  <link href="{{ URL::asset('assets/bootstraps/bootstrap.css') }}" type="text/css" rel="stylesheet" media="screen,projection">
	
</head>

<body>
<div class="container">
	@yield('content')
</div>

	@yield('footer')
</body>
</html>