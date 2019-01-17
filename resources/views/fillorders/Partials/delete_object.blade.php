<hr>

<h2>Cancel my Order</h2>

{!! Form::open([
	'action' => ['FillorderController@destroy', $fillorder->id],
	'method' => 'delete',
	'class' => 'delete-object'
	])
!!}

	<button type="submit" class="btn btn-danger">CANCEL this order!</button>

{!! Form::close() !!}