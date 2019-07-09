<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> If elseif Statement</title>
</head>
<body>

	<?php
		$t = date("H");

		if ($t < "10") {

		    echo "Have a good morning!";

		} elseif ($t < "20") {

		    echo "Have a good day!";

		} else {
			
		    echo "Have a good night!";
		}
	?>
	
</body>
</html>