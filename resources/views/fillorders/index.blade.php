
@extends('layouts.master')

@section('title', 'Index Page Title')

@section('content')

<div class="row">

	<div class="col-sm-9">

		<div class="page-header">
			<a href="{{ url('fillorders/create') }}" class="btn btn-success pull-right">+ Order</a>
			<h1>Open Orders</h1>
		</div>

		@include('fillorders.partials.fillorders')

	</div>

	@include('shared.fillorders_sidebar')
	
</div>

@endsection