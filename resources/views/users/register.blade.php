@extends('layouts.default',['title'=>'Register'])
@section('content')
<h1 class="lead" >Devenez dès à present membre!</h1>

<form method="POST" action="{{route('Register.store')}}" class="well col-md-6" >
{{csrf_field()}}


	
<!-- name field-->
	<div class="form-group">
<label for="name">Nom:</label>
<input type="text" value="{{old('name')}}" class="form-control" id="name" name="name">
{!!$errors->first('name','<p class="input_error">:message</p>')!!}
</div>


<!-- name field-->
	<div class="form-group">
<label for="name">Pseudo:</label>
<input type="text" value="{{old('pseudo')}}" class="form-control" id="pseudo" name="pseudo">
{!!$errors->first('pseudo','<p class="input_error">:message</p>')!!}
</div>


<!-- name field-->
	<div class="form-group">
<label for="email">Adresse Email:</label>
<input type="text" value="{{old('email')}}" class="form-control" id="email" name="email">
{!!$errors->first('email','<p class="input_error">:message</p>')!!}
</div>

<!-- name field-->
	<div class="form-group">
<label for="name">Mot de passe:</label>
<input type="password" class="form-control" id="password" name="password">
{!!$errors->first('password','<p class="input_error">:message</p>')!!}
</div>


<!-- password-confirmation field-->
	<div class="form-group">
<label for="password-confirm">confirmation de mot de passe: </label>
<input type="password" class="form-control" id="password_confirm" name="password_confirm">
{!!$errors->first('password_confirm','<p class="input_error">:message</p>')!!}
</div>

<!-- register field-->
	<div class="form-group">

<input type="submit" class="btn btn-primary btn btn-lg"  value="Inscription" name="register">
</div>

</form>
@stop

@section('script_footer')
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"> </script>     
@stop