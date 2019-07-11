<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Calculator </title>


</head>
<body>

	<?php 

		$result_str = $result = '';
	    
	    if (isset($_POST['unit-submit'])) {
	    
	    $units = $_POST['units'];
	    
	    if (!empty($units)) {
	        
	        $result = calculate_bill($units);
	        
	        $result_str = 'Total amount of ' . $units . ' - ' . $result;
	    
	    }

		}

		function calculate_bill($units) {

		    $unit_first = 3.50;

		    $unit_second = 4.00;

		    $unit_third = 5.20;

		    $unit_above = 6.50;
		 
		    if($units <= 50) {

		        $bill = $units * $unit_first;
		    }

		    else if($units > 50 && $units <= 100) {

		        $temp = 50 * $unit_first;

		        $remaining_units = $units - 50;

		        $bill = $temp + ($remaining_units * $unit_second);

		    }

		    else if($units > 100 && $units <= 200) {

		        $temp = (50 * 3.5) + (100 * $unit_second);

		        $remaining_units = $units - 150;

		        $bill = $temp + ($remaining_units * $unit_third);

		    }

		    else {

		        $temp = (50 * 3.5) + (100 * $unit_second) + (100 * $unit_third);

		        $remaining_units = $units - 250;

		        $bill = $temp + ($remaining_units * $unit_above);

		    }
		    return number_format((float)$bill, 2, '.', '');
		}
			     



	?>

	<div class="form-group">

        <h1 style=""> Calculator Electricity Bill</h1>

        <form action=" " method="post" id="bill">
        	
        	<input type="number" name="units" id="units" placeholder="Please enter units">

        	<input type="submit" name="unit-submit" id="unit-submit" value="submit">
        </form>

        <?php echo '<br />' . $result_str; ?>
	</div>
	
</body>
</html>