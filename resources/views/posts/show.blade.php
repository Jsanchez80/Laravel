@extends('layouts.master')

@section('top-script')
	<title></title>
@stop

@section('content')
	
<div><h2 class="add">Place for your ad!</h2></div> 
    
     <div class="col-md-10 blogShort">
	     
		<h3>{{ $post->title }} </h3>
	    <p>{{ $post->content }}</p>
	    <h3>{{ $post->url }}</h3>
	    <br>
	     
	     
	     
	    
<div class="art-footer-text">
    <p>EVOQ | Copyright © 2016</p>
</div>


@stop
