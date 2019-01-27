@extends('layouts.master')

@section('title', 'My Profile')

@section('content')
<div class="page-header">
	<h1>My Profile</h1>
</div>

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