@extends('layouts.master')

@section('title', $fillorder->title)

@section('content')

<div class="page-header">
	<a href="{{ action('FillorderController@edit', $fillorder->id) }}"
		class="btn btn-info pull-right">Edit</a>
<h1><?php echo $fillorder->title; ?></h1>
</div>

<p><?php echo $fillorder->type; ?></p>
<p><?php echo $fillorder->deliver; ?></p>
<p><?php echo $fillorder->description; ?></p>		
<pre><?php echo $fillorder->custom_01; ?></pre>
<pre><?php echo $fillorder->custom_02; ?></pre>
<pre><?php echo $fillorder->custom_03; ?></pre>				
<p>Order submitted at: <?php echo $fillorder->created_at; ?></p>

@include('fillorders.parts.partials.display')

@endsection