<hr>

<h2>Parts</h2>

<ul class="list-group">
@foreach ($object->parts as $part)
	<li class="list-group-item">
		<div class="text-muted">
			<small>{{ $part->created_at->diffForHumans() }}</small>
		</div>
		<p>{{ $part->part }}</p>
	</li>
@endforeach
</ul>