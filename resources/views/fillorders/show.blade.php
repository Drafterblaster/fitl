@extends('layouts.master')

@section('title', $object->title)

@section('content')
<h1><?php echo $object->title; ?></h1>
<p><?php echo $object->type; ?></p>
<p><?php echo $object->deliver; ?></p>
<p><?php echo $object->description; ?></p>		
<pre><?php echo $object->custom_01; ?></pre>
<pre><?php echo $object->custom_02; ?></pre>
<pre><?php echo $object->custom_03; ?></pre>				
<p>Order submitted at: <?php echo $object->created_at; ?></p>
@endsection