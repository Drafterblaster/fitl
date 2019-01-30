<h3>Add a Part:</h3>

{!! Form::open(['route' => ['fillorders.parts.store', $fillorder->id]]) !!}

	@include('fillorders.parts.partials.part_form')

	<button type="submit" class="btn btn-success">Add your Part!</button>

{!! Form::close() !!}