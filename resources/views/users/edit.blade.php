@extends('layouts.master')

@section('top-script')
	<title>Update</title>
@stop


@section('content')
	
	<div><h3 class="add">Update Your Contact Info:</h3></div> 

	<div class="container" style=" border-radius: 5px; border: 1px solid black;
    border-collapse: collapse; padding: 15px">
	{{-- Avoid a CSRf Attach using CSRF protection "{!! csrf_field() !!}" --}}
	<form method="POST" action="{{ action('UsersController@update', $user->id) }}">
		{!! csrf_field() !!}
		{{-- calling the {!! method_field('PUT') !!}  ensures that you're entries are fed to the database and updated correctly. A form of method spoofing --}}
		{!! method_field('PUT') !!}
		<form>
  	
  		{{-- Begin: Inputs to update user info: --}}
  		<div class="form-group">
  			<label for="inputName1" type="text" name="name" >Name</label>
			<input type="text" class="form-control" id="exampleInputName1" value="{{ old('name') == null ? $user->name : old('name') }}">
		</div>
		<div class="form-group">
			<label for="inputEmail1" type="text" name="email">Email</label>
		<input type="text" class="form-control" id="exampleEmail1" value="{{ old('email') == null ? $user->email : old('email') }}">
		<br>
		Subscribe to our weekly newsletter: <input type="radio" name="newsletter" value="subscribed" checked {{ old('subscribed') == null ? $user->subscribed : old('subscribed') }}">Subscribe
		
		<input type="submit">

	</form>
	</div>
</div>
@stop

