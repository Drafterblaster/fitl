@extends('layouts.master')

@section('title', $object->title)

@section('content')
<h1><?php echo $object->title; ?></h1>
<p><?php echo $object->type; ?></p>
<p><?php echo $object->deliver; ?></p>
<p><?php echo $object->description; ?></p>
<p><?php echo $object->custom_01 ?></p>
<p><?php echo $object->custom_02 ?></p>
<p><?php echo $object->custom_03 ?></p>
<p>Order Placed: <?php echo $object->created_at ?></p>
@endsection