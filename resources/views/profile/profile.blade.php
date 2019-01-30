@extends('layouts.master')

@section('title', 'My Profile')

@section('content')
<div class="page-header">
	<h1>My Profile</h1>
</div>

@if ( Auth::user()->hasRole('member') )
<div class="alert alert-info">User is a member</div>
@endif

@if ( Auth::user()->isAdmin() )
<div class="alert alert-success">User is an admin</div>
@endif

<h2>Roles</h2>
<ul>
	@foreach (Auth::user()->roles as $role)
	<li>{{ $role->name }}</li>
	@endforeach
</ul>

<h2>Submitted Orders</h2>

@include('fillorders.partials.fillorders', ['fillorders' => $fillorders])

<h2>Submitted Parts</h2>

<ul class="list-group">
@foreach ($parts as $part)
	<li class="list-group-item">
		<div class="text-muted">
			<small>{{ $part->created_at->diffForHumans() }}</small>
		</div>
		<p><small>Fillorder:</small> <strong>{{ $part->fillorder->title }}</strong></p>
		<p>{{ $part->part }}</p>
	</li>
@endforeach
</ul>

@endsection