@if($errors->has() > 0 )
	<div class="alert alert-danger">
	   	@foreach ($errors->all() as $error)
	      <div>{{ $error }}<br></div>
	</div>
	  	@endforeach
@endif