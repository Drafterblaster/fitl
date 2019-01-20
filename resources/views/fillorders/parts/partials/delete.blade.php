
{!! Form::open([
	'route' => ['fillorders.parts.destroy', $object->id, $part->id],
	'method' => 'delete',
	'class' => 'pull-left'
]) !!}

&nbsp;<button type="submit" class="btn btn-danger btn-xs">Cancel Order</button>

{!! Form::close() !!}