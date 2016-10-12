@extends('layouts.master')

@section('top-script')
	<title>Edit</title>
@stop


@section('content')
	
	<h1>Please edit your Information: </h1>
	{{-- Avoid a CSRf Attach using CSRF protection "{!! csrf_field() !!}" --}}
	<form method="POST" action="{{ action('PostsController@update', 1) }}">
		{!! csrf_field() !!}
		{{-- calling the {!! method_field('PUT') !!}  ensures that you're entries are fed to the database and updated correctly. A form of method spoofing --}}
		{!! method_field('PUT') !!}
		Title: <input type="text" name="title" value="{{ old('title') }}">
		Content: <input type="text" name="content" value="{{ old('content') }}">
		URL: <input type="text" name="url" value="{{ old('url') }}">
		<input type="submit">
	</form>

@stop

