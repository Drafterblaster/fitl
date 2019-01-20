@extends ('layouts.master')

@section('title', 'Submit an Order')

@section('content')
<div class="page-header">
	<h1>Place your Order</h1>
</div>

{!! Form::model($fillorder, ['action' => 'FillorderController@store']) !!}

	@include('fillorders.partials.object_form')

  <button class="btn-success" type="submit">Place Order</button>

<BR><BR>

{!! Form::close() !!}

@endsection