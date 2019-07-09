<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>If Statement</title>
</head>
<body>

	<h3>If Statement</h3>

	<?php

         $t=date("H");

         if ($t < "20") {
         	echo "Have a Good Day!";
         }

         echo "<br>";


         //////////////////////////

         $t=date("l");

         echo "$t";

         echo "<br>";

         ///////////////////////////

         $t=date("D, d M Y H:i:s");

         echo "$t";

         echo "<br>";

         //////////////////////////


         $t=date("M");

         echo "$t";

         echo "<br>";








	?>
	
</body>
</html>