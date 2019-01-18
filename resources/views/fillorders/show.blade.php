@extends('layouts.master')

@section('title', $object->title)

@section('content')

<div class="page-header">
	<a href="{{ action('FillorderController@edit', $object->id) }}"
		class="btn btn-info pull-right">Edit</a>
<h1><?php echo $object->title; ?></h1>
</div>

<p><?php echo $object->type; ?></p>
<p><?php echo $object->deliver; ?></p>
<p><?php echo $object->description; ?></p>		
<pre><?php echo $object->custom_01; ?></pre>
<pre><?php echo $object->custom_02; ?></pre>
<pre><?php echo $object->custom_03; ?></pre>				
<p>Order submitted at: <?php echo $object->created_at; ?></p>

<h2>Parts</h2>

@foreach ($object->parts as $part)
	<p>{{ $part->part }}</p>
	<div><small>{{ $part->created_at->diffForHumans() }}</small></div>
@endforeach

@endsection