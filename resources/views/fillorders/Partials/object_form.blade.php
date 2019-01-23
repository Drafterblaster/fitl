  <div class="form-group">
    {!! Form::label('title', 'Choose Part') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('type', 'Choose Type') !!}
    {!! Form::text('type', null, ['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('deliver', 'Choose Method of Delivery') !!}
    {!! Form::text('deliver', null, ['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('description', 'Please Describe') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('custom_01', 'Customize (optional)') !!}
    {!! Form::text('custom_01', null, ['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('custom_02', 'Customize (optional)') !!}
    {!! Form::text('custom_02', null, ['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('custom_03', 'Customize (optional)') !!}
    {!! Form::text('custom_03', null, ['class' => 'form-control']) !!}
  </div>

  <div class="form-group">
    {!! Form::label('type_id[]', 'Brand Names') !!}
    {!! Form::select('type_id[]', $types,
      $fillorder->types->lists('id')->all(),
      ['multiple' => true, 'class' => 'form-control']) !!}
  </div>