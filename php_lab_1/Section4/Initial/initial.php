<!DOCTYPE html>
<html>
<head>
	<title>Initial Page</title>
</head>
<body>
	<h1>The inital page</h1>
	<?php
		$fn = $_GET['fname'];
        $sn = $_GET['surname'];
        $ini = substr($fn, 0,1) . substr($sn, 0,1);
        echo ('Hi, '. $fn . $sn . '. Your initial is ' . $ini );
	?>
</body>
</html>
 