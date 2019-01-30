@extends ('layouts.admin')

@section('title', 'Create a Type or Brand')

@section('content')

<div class="page-header">
	<h1>Create a Type</h1>
</div>

{!! Form::model($type, ['route' => 'admin.types.store']) !!}

	@include('admin.types.partials.object_form')

  <button class="btn-success" type="submit">Create a Type!</button>

<BR><BR>

{!! Form::close() !!}

@endsection