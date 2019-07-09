<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php

	$days = [
     
     "Monday",
     "Tuesday",
     "Wednesday",
     "Thursday",
     "Friday",
     "Saturday",
     "Sunday"
    ];
		   $day =date("l");
		    
		    if ( $day ==  $days[0])

		    echo "chinese Rise";

		    elseif ( $day == $days[1])

		    echo "Pasta";

		    elseif ( $day == $days[2])

		    echo "Spaghetti";

		    elseif ( $day == $days[3])

		    echo "Biryani";

		    elseif ( $day == $days[4])

		    echo "Rise";

		    elseif ( $day == $days[5])

		    echo "Rasmali";

		    elseif ( $day == $days[6])

		    echo "Bar B Q";

		    else
		    	
		    echo "Have a nice day!";
   ?>
</body>
</html>