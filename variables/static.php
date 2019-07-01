<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Static Keyword</title>
</head>
<body>
		<?php
			function myTest() {
			    static $x = 0;
			    echo $x;
			    $x++;
			}

			myTest(); echo "<br>";
			myTest(); echo "<br>";
			myTest();
		?>
	
</body>
</html>