@extends('layouts.default',['title'=>'login'])
@section('content')
<h1 class="lead" >Connexion</h1>

<form method="POST" action="{{route('login.store')}}" class="well col-md-6" >
        {{csrf_field()}}
	<!-- name field-->
	<div class="form-group">
		<label for="identifiant">Pseudo ou Adresse electronique:</label>
		<input type="text" value="{{old('identifiant')}}" class="form-control" id="identifiant" name="identifiant">
		{!!$errors->first('identifiant','<p class="input_error">:message</p>')!!}
	</div>

	<!-- name field-->
	<div class="form-group">
		<label for="password">Mot de passe:</label>
		<input type="password" class="form-control" id="password" name="password">
		{!!$errors->first('password','<p class="input_error">:message</p>')!!}
	</div>
	<!-- remember me -->
	<div class="form-group">
		<label for="remember_me">
		<input type="checkbox"  id="remember_me" name="remember_me">
		Remember me:</label>
	</div>
	<!-- register field-->
	<div class="form-group">
		<input type="submit" class="btn btn-primary btn btn-lg"  value="Connexion" name="login">
	</div>
</form>

@stop
@section('script_footer')
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"> </script>     
@stop