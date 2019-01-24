<div class="col-sm-3">

	<h3>Types</h3>

	<div class="list-group">
	@foreach ($types as $type)
		<a class="list-group-item" href="{{ route('types.show', $fillorder->id) }}">
		{{ $type->name }}
		</a>
	@endforeach
	</div>


</div><!-- /.col-sm-3 -->