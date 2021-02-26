<!DOCTYPE html>
<html>
<head>
	<title>The Age Page</title>
</head>
<body>
	<h1>The Age Page</h1>
	<?php
		$age = $_GET['age'];
		echo ($age>17);
	?>
</body>
</html>