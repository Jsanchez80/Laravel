@extends('layouts.master')



@section('content')
	{{-- {!! $posts !!} --}}    
	@foreach($posts as $post)
		{{-- <div>
		    <img src="http://placekitten.com/g/200/200">
		</div> --}}
<br>
<br>
<br>
		
		<div class="row"  style="background-color: black; color: white; border: thin solid black;">
		{{-- Placekitten.com allows you to place a photo onto your site of a kitten: I used this for testing the div....not sure if I want to build this out.  --}}
			{{-- <img src="http://placekitten.com/g/200/200"> --}}
			<h3>{{ $post->title }} </h3>
		</div>

{{-- Begin Content Area: This is where our posts are defined using divs to give us the shape of our post.   --}}
		<div class="row" style="border: thin solid black;">

		{{-- Begin data from database  --}}
			
			<h5>{{ $post->title }}</h5>
		    <h5>{{ $post->content }}</h5>
		    <h5>{{ $post->url }}</h5>
		    {{--  we can add the date the post had been posted at by formatting the date with the PHP commands--}}
		    <p>Posted On: {{ $post->created_at->format('l, jS F Y')}} By: {{ $post->user->name }}</p>


		</div>

	  
	    <br>
	@endforeach     
{{-- Begin Pagination: --}}
		{{-- <div class="row">
			{!! $posts->render() !!}
		</div> --}}
	
@stop