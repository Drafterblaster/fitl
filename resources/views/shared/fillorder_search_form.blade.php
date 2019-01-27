{!! Form::open([
	'action' => 'FillorderController@search',
	'method' => 'get',
	'class' => 'navbar-form navbar-right'
	]) !!}

	<div class="input-group">
		{!! Form::text('q', null, ['class' => 'form-control', 'placeholder' => 'Search for...']) !!}
		<span class="input-group-btn">
			<button class="btn btn-default" type="submit">Go!</button>
		</span>
	</div>

{!! Form::close() !!}