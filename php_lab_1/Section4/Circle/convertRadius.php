<!DOCTYPE html>
<html>
<head>
	<title>Raduis Conversion Page</title>
</head>
<body>
	<h1>Raduis Conversion Page</h1>
	<?php
		$r = $_GET['radius'];
		$s = ($r * $r * 3.14);
		$c = (2 * 3.14 * $r);
		echo ("The area of a circle that has a radius of " . $r . " is " . $s . ", and the circumference is " . $c );
	?>
</body>
</html>