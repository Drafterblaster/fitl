<!-- I can see if the routes are all working just by typing in
"Registration Page..." (or anything else) here on this page,
and type in the URL fitl.local/auth/register in the browser-->

<!-- the URL to redirect to upon successful authentication
is found in the AuthController.php--> 

@extends('layouts.master')

@section('title', 'Register')

@section('content')

<div class="page-header">
	<h1>Register</h1>
</div>

{!! Form::open([ 'action' => 'Auth\AuthController@postRegister']) !!}

<div class="form-group">
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('email', 'Email') !!}
    {!! Form::text('email', old('email'), ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('password', 'Password') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('password_confirmation', 'Confirm Password') !!}
    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
</div>

<button class="btn btn-success" type="submit">Register</button>

<BR><BR>

{!! Form::close() !!}

@endsection