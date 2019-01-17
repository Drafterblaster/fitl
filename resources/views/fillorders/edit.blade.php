@extends ('layouts.master')

@section('title', 'Edit an Order')

@section('content')
<div class="page-header">
	<h1>Edit your parts here</h1>
</div>


{!! Form::model($fillorder, ['action' => ['FillorderController@update', $fillorder->id], 'method' => 'put']) !!}
	
	@include('fillorders.partials.object_form')

  <button class="btn-success" type="submit">Update your Order</button>

<BR><BR>

{!! Form::close() !!}

@endsection