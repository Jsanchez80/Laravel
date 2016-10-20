@extends('layouts.master')

@section('top-script')
    <title>Login</title>
@stop

@section('content')
    
<h1>Not a member? SignUp Below!</h1>
{{-- <div class="container" style=" border-radius: 5px; border: 1px solid black;
    border-collapse: collapse; padding: 30px;"> --}}
<form method="POST" style=" border-radius: 5px; border: 1px solid black;
    border-collapse: collapse; padding: 30px" action="{{ action('Auth\AuthController@postRegister') }}">
        {!! csrf_field() !!}
    <div class="form-group">
        <label for="name" type="text">First Name</label>
         <input type="text" class="form-control" name="name" value="{{ old('name') }}">
    </div>

    <div class="form-group">
        <label for="password" type="password">Password</label> 
        <input type="password" class="form-control" name="password">
    </div>

    <div class="form-group">
        <label for="password_confirmation" type="password">Confrim Password</label> 
        <input type="password" class="form-control" name="password_confirmation">
    </div>

    <div class="form-group">
        <label for="email" type="text">Email</label> 
        <input type="text" class="form-control" name="email" value="{{ old('email') }}">
    </div>

    <div>
        <label for="checkbox">Remember Me: </label>
        <input type="checkbox" name="remember">
    </div>

    <br>
    <button class="btn btn-primary" role="button" type="login">Login</button>

        {{-- Begin Customization: You can build out a stronger feature that allows you to grab analytics and source it to a database.  It's not necessary for the this assignment, but I chose to build it out for future builds should a client ask for such items.  See commented out data through the sbmit button for an example of some of the data you could build out.   --}}
        {{-- <div class="form-group">
            <label for="inputName1" type="text" name="lastName">Last Name:</label> 
            <input type="text" class="form-control" value="{{ old('name') }}">
        </div> --}}
        
        {{-- <div class="form-group">
            <label for="inputName1" type="text" name="birthDate">Birthdate</label>
            <input type="text" class="form-control" value="{{ old('name') }}">
        </div> --}}

       {{--  <div class="form-group">
            <label for="inputName1" type="text" name="userName">Username</label>
            <input type="text" class="form-control" value="{{ old('name') }}">
        </div> --}}
        
        
        {{-- <div class="form-group">
            <label for="inputName1" type="text" name="passConfirm">Confirm Password</label> 
            <input type="text" class="form-control" value="{{ old('name') }}"> 
        </div> --}}


        {{-- <br>
        <br>
        <p>Gender:</p>
        <input type="radio" name="gender" value="male" checked> Male<br>
        <input type="radio" name="gender" value="female"> Female<br>
        <input type="radio" name="gender" value="other"> Other<br>
        <br>
        <br>
        SignUp for our weekly newsletter: <input type="radio" name="newsletter" value="subscribed" checked> Subscribe
        <br>
        <br> --}}
    </form>
</div>
@stop