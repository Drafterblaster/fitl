@extends('layouts.master')

@section('title', 'Login')

@section('content')

<div class="page-header">
	<h1>Login</h1>
</div>

{!! Form::open([ 'action' => 'Auth\AuthController@postLogin']) !!}

<div class="form-group">
    {!! Form::label('email', 'Email') !!}
    {!! Form::text('email', old('email'), ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('password', 'Password') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    <label>
    {!! Form::checkbox('remember', 'yes', true) !!} Remember me
    </label>
</div>

<button class="btn btn-success" type="submit">Login</button>

<BR><BR>

{!! Form::close() !!}

<BR>

<p>
	Forgot your password? <a href="{{ action('Auth\PasswordController@getEmail') }}">Reset your password</a>
</p>

<BR>

<p>
	Don't have an account? <a href="{{ action('Auth\AuthController@getRegister') }}">Register now</a>
</p>

@endsection