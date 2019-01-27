
@extends('layouts.master')

@section('title', 'Search results for "' . $q . '")

@section('content')

<div class="row">

	<div class="col-sm-9">

		<div class="page-header">
			<a href="{{ url('fillorders/create') }}" class="btn btn-success pull-right">+ Order</a>
			<h1>Search results for "{{ $q }}"</h1>
		</div>

		@include('fillorders.partials.fillorders')

	</div>

	@include('shared.fillorders_sidebar')
	
</div>

@endsection