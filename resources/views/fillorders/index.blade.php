@extends('layouts.master')

@section('title', 'Index Page Title')

@section('content')
<div class="page-header">
	<h1>Parts, get your parts here</h1>
</div>

<div class="list-group">

	@foreach ($objects as $fillorder)
		<a href="{{ url('fillorders', [$fillorder->id]) }}" class="list-group-item">
			<h2 class="list-group-item-heading">{{ $fillorder->title }}</h2>
			<p class="list-group-item-text">
				Submitted on {{ $fillorder->created_at }}
			</p>
		</a>
	@endforeach

</div>

@endsection