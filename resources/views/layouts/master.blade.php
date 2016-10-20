<!DOCTYPE html>
<html lang="en">
<head>

{{--Begin:  Bootstrap  --}}

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

{{--Begin: Styling for the look of the page including nav-bar styling --}}
	<style>
		body {
			margin:0px;

		}

		ul {
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
			top: 0;
			width: 100%;
		}

		li {
			float: left;
		}

		li a {
			display: block;
			color: white;
			text-align: center;
			padding: 18px 16px;
			text-decoration: none;
		}

		li a:hover:not(.active) {
			background-color: #EAAE0C;
		}

		.active {
			background-color: #4000ff;
		}
	</style>

	@yield('top-script')
</head>

{{-- Begin: Body of page starts here: We open with a nav-bar and a jumbotron call to action.  --}}

<body>
	
	<div class="nav" style="background-color: black; color: white; border: thin solid black;">
    <ul>
	@if(Auth::check());
		<li class="home"><a href="http://reddit.dev/posts">Home</a></li>
		<li class="about"><a href="http://reddit.dev/posts/create">Make A Post</a></li>
		<li class="news"><a href="#">About</a></li>
		<li class="contact"><a href="#">Contact</a></li>
		<li class="logout"><a href="{{ action('Auth\AuthController@getLogout') }}">Logout</a></li>
	@else
		<li class="login"><a href="http://reddit.dev/auth/login">Login</a></li>
		<li clas="register"><a href="{{ action('Auth\AuthController@getRegister') }}">Register</a></li>
	@endif

{{-- Begin: Search Bar --}}
	<form class="navbar-form navbar-right" method="GET" action="{{ action('PostsController@search') }}" role="search" style="margin:10px;">
		<div class="form-group">
			<input type="text" class="form-control" name="search" placeholder="Search">
		</div>
		<button type="submit" class="btn btn-default">Submit</button>
	</form>
	</ul>
	</div>
	

	<div class="jumbotron" style="padding: 2%;">
	  <h1>Welcome to Forust!</h1>
	  <p>Forust is San Antonio's Premiere Blog for the Forum Posts you find absolutely nuts! If you come across a post that's nutty as Buddy, share it and get a chance to earn a $50 gift card to Texas Land and Cattle! Sign up today!!!</p>
	  <p><a class="btn btn-primary btn-lg" style="background-color: #4000ff;" href="http://reddit.dev/auth/register" role="submit">Sign Up!</a></p>
	</div>

{{-- Begin: 4 column gif's start here and are wrapped in a div class="row for seperation of content.  If you don't wrap the images in a div row, you will have content that merges with your images and the page looks wonky. " --}}

<div class="row">
<div class="col">
  <div class="col-xs-6 col-md-3">
    <a href="#" class="thumbnail">
      <img src="https://s-media-cache-ak0.pinimg.com/originals/cb/36/6d/cb366daf20a2b190cff86c42028a7134.gif" alt="...">
    </a>
  </div>
</div>

<div class="col">
  <div class="col-xs-6 col-md-3">
    <a href="#" class="thumbnail">
      <img src="http://3.bp.blogspot.com/-YAJmnXnF59I/UdS82x5KN-I/AAAAAAAAQxQ/uL2zYMwUsiU/s500/bbts3.gif" alt="...">
    </a>
  </div>
</div>

<div class="col">
  <div class="col-xs-6 col-md-3">
    <a href="#" class="thumbnail">
      <img src="https://media.giphy.com/media/3oFyD5u6KSwziZcXFS/giphy.gif" alt="...">
    </a>
  </div>
</div>
<div class="col">	
<div class="col">
  <div class="col-xs-6 col-md-3">
    <a href="#" class="thumbnail">
      <img src="https://67.media.tumblr.com/6e28f97509c6f575fb5e8bd7e6822a7d/tumblr_of06lspCt21r9a32bo1_500.gif" alt="...">
    </a>
  </div>
</div>
</div>
</div>

{{-- Begin: Posts begin here and this if statement gives users an error message or success message if their content was saved correctly. --}}
	<div class="container">
		@if(session()->has('SUCCESS_MESSAGE'))
			<div class="alert alert-success">
				<p>{{ session('SUCCESS_MESSAGE') }}</p>
			</div>
		@endif

		@if(session()->has('ERROR_MESSAGE'))
			<div class="alert alert-danger">
				<p>{{ session('ERROR_MESSAGE') }}</p>	
			</div>
		@endif
		
		@yield('content')




{{-- Begin: Footer info listed below.  --}}
<div class="row">
	<div class="footer-text">
		<p align="center">EVOQ | Copyright © 2016</p>
	</div>
</div>
</body>
</html>
