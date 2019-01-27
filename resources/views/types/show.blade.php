@extends('layouts.master')

@section('title', $type->name . 'Fillorders')

@section('content')

<div class="row">

		<div class="col-sm-9">

		<div class="page-header">
			<a href="{{ url('fillorders/create') }}" class="btn btn-success pull-right">+ Submit Order</a>
			<h1>{{ $type->name }} Fillorders</h1>
		</div>

		<div class="list-group">
			
			@foreach ($type->fillorders as $fillorder)
				<a href="{{ url('fillorders', [$fillorder->id]) }}" class="list-group-item">
					<h2 class="list-group-item-heading">{{ $fillorder->title }}</h2>
					<p class="list-group-item-text">
						Submitted on {{ $fillorder->created_at }}
					</p>
				</a>
			@endforeach
		</div>

	</div><!-- col-sm-9-->

@include('shared.fillorders_sidebar')

</div><!-- class row-->


@endsection