
{!! Form::model($part, ['route' => ['fillorders.parts.update', $object->id, $part->id],
	'method' => 'put',
	'class' => 'edit-object-form'
]) !!}

@include('fillorders.parts.partials.part_form')

<button type="submit" class="btn btn-info">Update the part</button>

{!! Form::close() !!}
