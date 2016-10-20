@extends('layouts.master')

@section('top-script')
	<title></title>
@stop

@section('content')
	
<div><h2 class="add">Check out your post!</h2>
    <div class="row">
     <div class="col-md-10 blogShort">
	     
	    {{-- <h3>{{ $post->user->name }}</h3> --}}
		<h3>{{ $post->title }} </h3>
	    <p>{{ $post->content }}</p>
	    <h3>{{ $post->url }}</h3>
	    <h6>You originally created your post on {{ $post->created_at }}</h6>
	    <h6>and updated your post on {{ $post->updated_at }}</h6>
	    <p>User: {{ $post->user->name}}</p>
	   
	    <br>
	     
	  </div>    
    </div>    
	    
<div class="art-footer-text">
    <p>EVOQ | Copyright © 2016</p>
</div>


@stop
