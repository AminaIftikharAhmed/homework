<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Conditional Operators</title>
</head>
<body>

	<h2>Conditional Operators</h2>

	<?php

	   // Ternery

	   echo $status = (empty($user)) ? "anonymous" : "logged in";

	   echo("<br>");

	   $user = "John Doe";


	   echo $status = (empty($user)) ? "anonymous" : "logged in";
	   echo("<br>");

	   $user = "Null";


	   echo $status = (empty($user)) ? "anonymous" : "logged in";
	   echo("<br>");

	   //Null coalescing

	   echo $user = $_GET["user"] ?? "anonymous";

	   echo("<br>");
	  
	   echo $color = $color ?? "red";

    ?>  

	
</body>
</html>