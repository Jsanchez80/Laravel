@extends('layouts.master')

@section('top-script')
	<title>Update</title>
@stop

@section('content')
	
	<h1>Please create your file: </h1>
	<form method="POST" action="{{ action('PostsController@store') }}">
		{!! csrf_field() !!}
		Title: <input type="text" name="title" value="{{ old('name') }}">
		Content: <input type="text" name="content" value="{{ old('name') }}">
		URL: <input type="text" name="url" value="{{ old('name') }}">
		<input type="submit">
	</form>

@stop
