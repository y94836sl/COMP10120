<!DOCTYPE html>
<html>
<head>
	<title>The Cylinder Surface Area Page.</title>
</head>
<body>
	<h1>The Cylinder Surface Area Page.</h1>
	<?php
		$r = $_GET['radi'];
		$h = $_GET['height'];
		$s = (2 * 3.14 * $r * $r) + (2 * 3.14 * $r * $h);
		echo ("The surface area of a sphere with a radius of " . $r . ", and a height of " . $h . " is " . $s);
	?>
</body>
</html>