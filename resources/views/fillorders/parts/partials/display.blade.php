<hr>

<h2>Parts</h2>

@include('fillorders.parts.partials.create')

<hr>

<ul class="list-group">
@foreach ($object->parts as $part)
	<li class="list-group-item">
		<div class="text-muted">
			<small>{{ $part->created_at->diffForHumans() }}</small>
		</div>
		<p>{{ $part->part }}</p>

		@if ( $part->canEdit() )
			<div class="clearfix">
				<button class="edit-object btn btn-info btn-xs pull-left">edit</button>
				@include('fillorders.parts.partials.delete')
			</div>

		@include('fillorders.parts.partials.edit')
	@endif
	</li>
@endforeach
</ul>