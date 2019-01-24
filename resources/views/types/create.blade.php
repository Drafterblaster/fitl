@extends ('layouts.master')

@section('title', 'Create a Type or Brand')

@section('content')

<div class="page-header">
	<h1>Create a Type</h1>
</div>

{!! Form::model($type, ['route' => 'types.store']) !!}

	@include('types.partials.object_form')

  <button class="btn-success" type="submit">Create a Type!</button>

<BR><BR>

{!! Form::close() !!}

@endsection