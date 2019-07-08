<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>String Operator</title>
</head>
<body>

	<?php

	//Concatenation

	$txt1 = "Hello";

	$txt2 = " dear";

	$txt3= " Maria!";

	echo $txt1 . $txt2 . $txt3 ;

	echo "<br>";

	//Concatenation Assignment

	$txt1 = "Hello";

	$txt2 = " dear";

	//$txt3= " Maria!";

    $txt1 .= $txt2 .= $txt3 ;

    echo $txt1;

	?> 
	
</body>
</html>