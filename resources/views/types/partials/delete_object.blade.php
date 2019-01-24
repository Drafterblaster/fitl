<hr>

<h2>Delete Type:</h2>

{!! Form::open([
	'route' => ['types.destroy', $type->id],
	'method' => 'delete',
	'class' => 'delete-object'
	])
!!}

	<button type="submit" class="btn btn-danger">DELETE this Type!</button>

	<BR><BR>

{!! Form::close() !!}