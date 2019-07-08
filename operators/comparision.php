<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Comparision Operators</title>
</head>
<body>

	<h2>Comparision Operator</h2>

	<?php

	//Equal//


		$x = 100; 

		$y = "100";

		var_dump($x == $y); 

		echo "<br>";

		//Identical//

		$x = 100; 

		$y = "100";

		var_dump($x === $y); 

		echo "<br>";

        //Not equal//

        $x = 100;  
		$y = "100";

		var_dump($x != $y); 

		echo "<br>";

        //Not equal//

        $x = 100;  
		$y = "100";

		var_dump($x <> $y); 

		echo "<br>";

        //Greater//

        $x = 100;  
		$y = "10";

		var_dump($x > $y); 

		echo "<br>";

        //Less than//

        $x = 100;  
		$y = "10";

		var_dump($x > $y); 

		echo "<br>";

		//Greater than or equal//

        $x = 100;  
		$y = "10";

		var_dump($x >= $y); 

		echo "<br>";

		//Less than//

        $x = 100;  
		$y = "10";

		var_dump($x >= $y); 

		echo "<br>";

		//Spaceship Operator//

		$x = 5;  
		$y = 10;

		echo ($x <=> $y); // returns -1 because $x is less than $y
		echo "<br>";

		$x = 10;  
		$y = 10;

		echo ($x <=> $y); // returns 0 because values are equal
		echo "<br>";

		$x = 15;  
		$y = 10;

		echo ($x <=> $y); // returns +1 because $x is greater than $y

     ?>  


	
</body>
</html>