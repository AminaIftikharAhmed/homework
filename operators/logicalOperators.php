<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Logical Operators</title>
</head>
<body>

	<h2>Logical Operators</h2>

	<?php

	// And//

	$x = 100; 

	$y = 50;

	if ($x == 100 and $y == 50) {

	    echo "Hello Logical Operators!";
	}

	echo "<br>";

	//Or//

	$x = 100; 

	$y = 50;

	if ($x == 100 or $y == 50) {

	    echo "Hello Logical Operators!";
	}

	echo "<br>";

	//xor//

	$x = 100; 

	$y = 50;

	if ($x == 100 xor $y == 80) {

	    echo "Hello world!";
	}
	echo "<br>";

	// $$ OPerator//

	$x = 100;  

	$y = 50;

	if ($x == 100 && $y == 50) {

	    echo "Hello $$ Operator!";
	}
	echo "<br>";

	// || OPerator//

	$x = 100;

	$y = 50;

	if ($x == 100 || $y == 80) {

	    echo "Hello Operator!";
	}

	echo "<br>";

    // ! OPerator//

	$x = 100;  

	if ($x !== 90) {
	    echo "Hello world!";
	}

?>  

	
</body>
</html>