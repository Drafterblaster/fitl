<div class="list-group">

	@foreach ($fillorders as $fillorder)
		<a href="{{ url('fillorders', [$fillorder->id]) }}" class="list-group-item">
			<h2 class="list-group-item-heading">{{ $fillorder->title }}</h2>
			<p class="list-group-item-text">Submitted on {{ $fillorder->created_at }}</p>
		</a>
	@endforeach
</div>