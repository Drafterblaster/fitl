@extends ('layouts.master')

@section('title', 'Sumbit an Order')

@section('content')
<div class="page-header">
	<h1>Parts, get your parts here</h1>
</div>


{!! Form::model($fillorder, ['action' => 'FillorderController@store']) !!}
	
	@include('fillorders.partials.object_form')

  <button class="btn-success" type="submit">Place Order</button>

<BR><BR>

{!! Form::close() !!}

@endsection