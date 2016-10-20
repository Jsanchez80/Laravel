@extends('layouts.master')

@section('top-script')
    <title>Login</title>
@stop

@section('content')
    
    <h1>Please Login to Continue: </h1>
{{-- <div class="container" style=" border-radius: 5px; border: 1px solid black;
    border-collapse: collapse; padding: 30px"> --}}
    <form method="POST" style=" border-radius: 5px; border: 1px solid black;
    border-collapse: collapse; padding: 30px" action="/auth/login">
        {!! csrf_field() !!}
        <div class="form-group">
            <label for="inputEmail" type="text" name="email">Email:</label>
            <input type="text" name="title" class="form-control" value="{{ old('email') }}">
        </div>
        <div class="form-group">
            <label for="inputPassword" type="password" name="password">Password:</label> 
            <input type="password" name="password" class="form-control" id="password">
        </div>
        <div>
            <label for="checkbox">Remember Me: </label>
            <input type="checkbox" name="remember">
        </div>
        <br>
        <button class="btn btn-primary" role="button" type="login">Login</button>

    </form>
{{-- </div> --}}
@stop
