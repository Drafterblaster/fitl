@extends('layouts.admin')

@section('title', 'Types Page')

@section('content')
<div class="page-header">
	<a href="{{ route('admin.types.create') }}" class="btn btn-success pull-right">+ Type</a>
	<h1>Brand Name of Part (Type)</h1>
</div>

<div class="list-group">

	@foreach ($types as $type)
		<div class="list-group-item">
			<h2 class="list-group-item-heading">{{ $type->name }}</h2>
			<p class="list-group-item-text">
				<a href="{{ route('admin.types.edit', [$type->id]) }}">edit</a>
			</p>
		</div>
	@endforeach

</div>

@endsection