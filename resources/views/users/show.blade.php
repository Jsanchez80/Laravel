@extends('layouts.master')

@section('top-script')
	<title></title>
@stop

@section('content')
	


<div><h3>User General Settings:</h3></div> 
  
<div class="container" style=" border-radius: 5px; border: 1px solid black;
    border-collapse: collapse; padding: 30px">
{{-- Styling the hover table was inspired by a similar table at http://www.w3schools.com/html/tryit.asp?filename=tryhtml_table_intro --}}
<div class="row" >
	<table class="table table-hover" style="border: 1px solid black;
    border-collapse: collapse; padding: 15px">
		<tr>
 			<td style="align: center;">Name {{ $user->name }}</td>
		</tr>
		<tr>	    
	    	<td style="align: center;">Contact {{ $user->email }}</td>
	    </tr>	
	    <tr>
	    	<td style="align: center;">Member Since {{ $user->created_at->format(' F s, Y') }}</td>
	    </tr>
	</table> 

@foreach($user->posts as $post)

<div class="row">
  <div class="col-sm-6 col-sm-4">
    <div class="thumbnail">
      <div class="caption">
		<h5>{{ $post->title }} </h5>
		<h5>{{ $post->content }}</h5>
		<h5>{{ $post->url }}</h5>	
        <p><a href="#" class="btn btn-primary" role="button">Update</a> <a href="#" class="btn btn-default" role="button">Delete</a></p>
      </div>
    </div>
  </div>
</div>	
@endforeach    
</div>  
</div>	
	


@stop
