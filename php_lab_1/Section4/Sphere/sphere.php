<!DOCTYPE html>
<html>
<head>
	<title>The Sphere Surface Area Page.</title>
</head>
<body>
	<h1>The Sphere Surface Area Page.</h1>
	<?php
		$r = $_GET['radius'];
		$s = (4 * 3.14 * $r * $r);
		echo ("The surface area of a sphere is " . $s);
	?>
</body>
</html>