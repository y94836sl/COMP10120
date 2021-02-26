<!DOCTYPE html>
<html>
<head>
	<title>My Jokes Application</title>
	<style type="text/css">
		.joke
		{
			font-family: Georgia, serif;
			font-size: 25px;
			letter-spacing: 2px;
			word-spacing: 2px;
			text-align: center;
		}

		.myButton
		{
			box-shadow: 0px 10px 14px -7px #3e7327;
			background: linear-gradient(to bottom, ##77b55a 5%, #72b352 100%);
			background-color: #77b55a;
			border: 1px solid #4b8f29;
			display: inline-block;
			cursor: pointer;
			color: #ffffff;
			font-family: Arial;
			font-size: 13px;
			font-weight: bold;
			padding: 6px 12px;
			text-shadow: 0px 1px 0px #5b8a3c;
		}

		.wrapper
		{
			text-align: center;
		}
	</style>
	<script type="text/javascript">
		function showAnswer()
		{
			answer = document.getElementById("answer");
			answer.style.display = "block"
		}

	</script>
</head>
<body>

<?php

$curl = curl_init();
$URL = "https://official-joke-api.appspot.com/jokes/programming/random";

curl_setopt($curl, CURLOPT_URL, $URL);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec($curl);
$err = curl_errno($curl);

if ($err) 
{
	die("Curl Error: " . $err);
}
else
{
	// echo ("It worked!<br></br>");
}

// echo (gettype($response));
 // echo($response . "<br></br>");

$response = json_decode($response, true);

//echo (gettype($response));

// foreach ($response as $key => $value) 
// {
//  	echo "IN array";
//  	if (gettype($value) == "array") 
//  	{
//  		echo "Inside inner array<br></br>";
//  		foreach ($value as $key2 => $value2) 
//  		{
//  			echo ("key: $key2  |  value: $value2<br>");
//  		}
//  	}
//  	else
//  	{
//  		echo ("key: $key  |  value: $value");
//  	}
// }

	echo ("<p class = 'joke'>" . $response[0]['setup'] . "</p>");

	echo ("<form method = 'post'>");

	echo("<div class='wrapper'>");
	echo ("<input class = 'myButton' type = 'button' value = 'Reveal Answer' onclick = 'showAnswer();'>");
	echo ("<input class = 'myButton' type = 'submit' value = 'New Joke' onclick = 'submit'>");
	echo ("</div>");

	echo("</form>");

	echo ("<p class = 'joke' id = 'answer' style = 'display:none;'>" . $response[0]['punchline'] . "</p>");


	

?>
</body>
</html>