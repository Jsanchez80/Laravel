@extends('layouts.master')



@section('content')
	{{-- {!! $users !!} --}}    
	@foreach($users as $user)
		
<br>
<br>
<br>
		
		<div class="row" style="background-color: salmon; color: white; border: thin solid black;">
		{{-- Placekitten.com allows you to place a photo onto your site of a kitten: I used this for testing the div....not sure if I want to build this out.  --}}
			<img src="http://placekitten.com/g/200/200">
			<h3>Name: {{ $user->name }} </h3>
		</div>

{{-- 	Begin Content Area: This is where our users are defined using divs to give us the shape of our post.   --}}
		<div class="row" style="border: thin solid black;">


			
			
			
		    <h4>Contact: {{ $user->email }}</h4>
		    
		    <h4>Member since: {{ $user->created_at->format('F Y') }}</h4>
		</div>

	  
	    <br>
	@endforeach     
{{-- Begin Pagination: --}}
		<div class="row">
			{!! $users->render() !!}
		</div>
	
@stop

