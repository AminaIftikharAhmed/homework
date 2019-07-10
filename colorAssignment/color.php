<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Display Color</title>
</head>
<body>
	
      <?php 
		$colors = array("red", "green", "blue", "yellow","pink" , "black", "purple"); 
       
       $length = count($colors);

	   for ($x = 0; $x <= $length; $x++) {
      echo "$colors[$x] <br>";
} 

	   ?>

</body>
</html>