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
		
		<div class="row" style="background-color: salmon; color: white; border: thin solid black;">
		{{-- Placekitten.com allows you to place a photo onto your site of a kitten: I used this for testing the div....not sure if I want to build this out.  --}}
			{{-- <img src="http://placekitten.com/g/200/200"> --}}
			<h3>{{ $post->title }} </h3>
		</div>

{{-- Begin Content Area: This is where our posts are defined using divs to give us the shape of our post.   --}}
		<div class="row" style="border: thin solid black;">

		{{-- Begin Images: Columns for up to four pics.  --}}
			
			<div class="col">
				 <div class="col-xs-6 col-md-3">
				<img class="media-object" src="http://placekitten.com/200/300" alt="...">
				</div>
		    </div>

		    <div class="col">
				 <div class="col-xs-6 col-md-3">
				<img class="media-object" src="http://placekitten.com/200/300" alt="...">
				</div>
		    </div>

		    <div class="col">
				 <div class="col-xs-6 col-md-3">
				<img class="media-object" src="http://placekitten.com/200/300" alt="...">
				</div>
		    </div>

		    <div class="col">
				 <div class="col-xs-6 col-md-3">
				<img class="media-object" src="http://placekitten.com/200/300" alt="...">
				</div>
		    </div>

		    <h4>{{ $post->content }}</h4>
		    <h4>{{ $post->url }}</h4>
		    {{--  we can add the date the post had been posted at by formatting the date with the PHP commands--}}
		    <p>Posted On: {{ $post->created_at->format('l, jS F Y')}}</p>

		</div>

	  
	    <br>
	@endforeach     
{{-- Begin Pagination: --}}
		<div class="row">
			{!! $posts->render() !!}
		</div>
	
@stop

	
