<?php
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$database = "test";
	$testMsgs = false;	// true = On, false = Off.

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $database);

	//Check connection
	if (!$conn) 
	{
		die("Connection failed: " . mysqli_connect_error());
	}
	echo "Connected successsfully";

	$sql = "CREATE DATABASE test";
 	doSQL($conn, $sql, $testMsgs);

// Section 8
//	$sql = "DROP TABLE user";
//	doSQL($conn, $sql, $testMsgs);

// Section 5
	$sql = "
	CREATE TABLE user(
		userId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		forename VARCHAR(30)  NOT NULL,
		surname  VARCHAR(30)  NOT NULL,
		email    VARCHAR(50)  NOT NULL UNIQUE,
		password VARCHAR(128) NOT NULL
	)
	";
	doSQL($conn, $sql, $testMsgs);

// Section 6	
	$password = password_hash('enterperise', PASSWORD_DEFAULT);
	$sql = "INSERT INTO user(forename, surname, email, password)
			VALUES ('Patrick', 'Stewart', 'stewart.p@sf.com', '$password')";
	doSQL($conn, $sql, $testMsgs);


	$sql = "INSERT INTO user(forename, surname, email, password)
			VALUES ('Kathryn', 'Janeway', 'janeway.k@sf.com', 'voyager')";
	doSQL($conn, $sql, $testMsgs);


	// Check the users
	$sql = "SELECT * FROM user";
	$records = doSQL($conn, $sql, $testMsgs);

	$output = "<table border='2'>
				<th>User Id</th>
				<th>Forename</th>
				<th>Surname</th>
				<th>Email</th>
				<th>Password</th>";
	
	while ($row = $records->fetch_assoc()) 
	{
		$output .= "<tr>
						<td>$row[userId]</td>
						<td>$row[forename]</td>
						<td>$row[surname]</td>
						<td>$row[email]</td>
						<td>$row[password]</td>
					</tr>";

		$output .= "</table>";
		echo ($output);
	}

// Section 7
function doSQL($conn, $sql, $testMsgs)
{
	if ($testMsgs) 
	{
		echo ("<br><code>SQL: $sql</code>");
		if ($result = $conn->query($sql))
			echo "<code> - OK</code>";
		else
			echo ("<code> - FAIL!" . $conn->error . "</code>");
	}
	else
		$result = $conn->query($sql);
	return $result;
}

?>