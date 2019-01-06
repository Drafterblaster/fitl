<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $object->title; ?></title>
	</head>
	<BODY>
		<H1><?php echo $object->title; ?></H1>
		<p><?php echo $object->type; ?></p>
		<p><?php echo $object->deliver; ?></p>
		<p><?php echo $object->description; ?></p>
		<p><?php echo $object->custom_01 ?></p>
		<p><?php echo $object->custom_02 ?></p>
		<p><?php echo $object->custom_03 ?></p>
		<p>Order Placed: <?php echo $object->created_at ?></p>
	</BODY>
</html>