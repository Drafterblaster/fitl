@if($errors->has() > 0 )
	<div class="alert alert-danger">
	   	@foreach ($errors->all() as $error)
	      <div>{{ $error }}</div>
	      <br>
	  	@endforeach
	</div>
@endif