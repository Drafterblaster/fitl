@extends ('layouts.master')

@section('title', 'Edit a Type or Brand')

@section('content')

<div class="page-header">
	<h1>Edit a Type</h1>
</div>

{!! Form::model($type, ['route' => ['types.update', $type->id ], 'method' => 'put']) !!}

	@include('types.partials.object_form')

  <button class="btn-success" type="submit">Save Changes</button>

<BR><BR>

{!! Form::close() !!}

@include('types.partials.delete_object')

@endsection