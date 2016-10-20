@extends('layouts.master')

@section('top-script')
	<title>Update</title>
@stop

@section('content')
	
	<h1>Not a member? SignUp Below! </h1>
	<div class="container" style=" border-radius: 5px; border: 1px solid black;
    border-collapse: collapse; padding: 15px">

	<form method="POST" action="{{ action('PostsController@store') }}">
		{!! csrf_field() !!}
		
		{{-- Begin: Styling for the form within the main container. --}}

		<div class="form-group">
  			<label for="inputName1" type="text" name="firstName">First Name</label>
  			 <input type="text" class="form-control" value="{{ old('name') }}">
  		</div>
  		
  		<div class="form-group">
  			<label for="inputName1" type="text" name="lastName">Last Name:</label> 
  			<input type="text" class="form-control" value="{{ old('name') }}">
  		</div>
  		
  		<div class="form-group">
  			<label for="inputName1" type="text" name="birthDate">Birthdate</label>
  			<input type="text" class="form-control" value="{{ old('name') }}">
  		</div>

		<div class="form-group">
  			<label for="inputName1" type="text" name="userName">Username</label>
  			<input type="text" class="form-control" value="{{ old('name') }}">
  		</div>
		
		<div class="form-group">
  			<label for="inputName1" type="text" name="password">Password</label> 
  			<input type="text" class="form-control" value="{{ old('name') }}">
  		</div>
  		<div class="form-group">
  			<label for="inputName1" type="text" name="passConfirm">Confirm Password</label> 
  			<input type="text" class="form-control" value="{{ old('name') }}"> 
  		</div>

		<div class="form-group">
  			<label for="inputName1" type="text" name="email">Email</label> 
  			<input type="text" class="form-control" value="{{ old('name') }}">
  		</div>

		<br>
		<br>
		<p>Gender:</p>
		<input type="radio" name="gender" value="male" checked> Male<br>
  		<input type="radio" name="gender" value="female"> Female<br>
  		<input type="radio" name="gender" value="other"> Other<br>
  		<br>
  		<br>
  		SignUp for our weekly newsletter: <input type="radio" name="newsletter" value="subscribed" checked> Subscribe
  		<br>
  		<br>
		<input type="submit">

	</form>
</div>
@stop
