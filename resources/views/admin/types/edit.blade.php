@extends ('layouts.admin')

@section('title', 'Edit a Type or Brand')

@section('content')

<div class="page-header">
	<h1>Edit a Type</h1>
</div>

{!! Form::model($type, ['route' => ['admin.types.update', $type->id ], 'method' => 'put']) !!}

	@include('admin.types.partials.object_form')

  <button class="btn-success" type="submit">Save Changes</button>

<BR><BR>

{!! Form::close() !!}

@include('admin.types.partials.delete_object')

@endsection