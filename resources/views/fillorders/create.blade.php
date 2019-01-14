@extends ('layouts.master')

@section('title', 'Sumbit an Order')

@section('content')
<div class="page-header">
	<h1>Parts, get your parts here</h1>
</div>


{!! Form::model($fillorder, ['action' => 'FillorderController@store']) !!}

  <div class="form-group">
    {!! Form::label('title', 'Choose Part') !!}
    {!! Form::text('title', '', ['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('type', 'Choose Type') !!}
    {!! Form::text('type', '', ['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('deliver', 'Choose Method of Delivery') !!}
    {!! Form::text('deliver', '', ['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('description', 'Please Describe') !!}
    {!! Form::textarea('description', '', ['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('custom_01', 'Customize (optional)') !!}
    {!! Form::text('custom_01', '', ['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('custom_02', 'Customize (optional)') !!}
    {!! Form::text('custom_02', '', ['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('custom_03', 'Customize (optional)') !!}
    {!! Form::text('custom_03', '', ['class' => 'form-control']) !!}
  </div>

  <button class="btn-success" type="submit">Place Order</button>

<BR><BR>

{!! Form::close() !!}

@endsection