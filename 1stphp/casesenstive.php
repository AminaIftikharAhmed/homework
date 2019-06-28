<!DOCTYPE html>
<html>
<meta charset="UTF-8">
	<title>Case Sensitive</title>
		<style>
			  body{
			  	text-align: center;
			  }
		</style>
<body>

	<?php

	    $color = "red";

		ECHO "Hello World!<br>";
		echo "Hello World!<br>";
		EcHo "Hello World!<br>";

		
		echo "My car is " . $color . "<br>";
		echo "My house is " . $COLOR . "<br>";
		echo "My boat is " . $coLOR . "<br>";
?> 
</body>
</html>