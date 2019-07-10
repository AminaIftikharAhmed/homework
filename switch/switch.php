<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Switch Statement</title>
</head>
<body>

	<h2>Switch Statement</h2>

<?php

   $favcolor = "Red";

    switch ($favcolor) {

    	case 'Red':
    		echo "Your favorite color is Red";
    		break;

        case 'Pink':
    		echo "Your favorite color is Pink";
    		break;
    		
    	case 'Yellow':
    		echo "Your favorite color is Yellow";
    		break;

        case 'Green':
    		echo "Your favorite color is Green";
    		break;			
    	
    	default:
    	    echo "Your favorite color is undefine ";
    		break;
    }


?>
	
</body>
</html>