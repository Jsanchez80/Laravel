@extends('layouts.master')

@section('top-script')
	<title>Update</title>
@stop

@section('content')
	
	<h1>Please create your post: </h1>
{{-- <div class="container" style=" border-radius: 5px; border: 1px solid black;
    border-collapse: collapse; padding: 30px"> --}}
	<form method="POST" style=" border-radius: 5px; border: 1px solid black;
    border-collapse: collapse; padding: 30px" action="{{ action('PostsController@store') }}">
		{!! csrf_field() !!}
		<div class="form-group">
			<label for="inputTitle" type="text" name="title">Title:</label>
			<input type="text" name="title" class="form-control" value="{{ old('name') }}">
		</div>
		<div class="form-group">
			<label for="inputContent" type="text" name="content">Content:</label> 
			<input type="text" name="content" class="form-control" value="{{ old('name') }}">
		</div>
		<div class="form-group">
			<label for="inputURL" type="text" name="url">URL:</label>
			<input type="text" name="url" class="form-control" value="{{ old('name') }}">
		</div>
		<input type="submit">
	</form>
{{-- </div> --}}
@stop
