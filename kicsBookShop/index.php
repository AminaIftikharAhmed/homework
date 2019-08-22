<?php 
	require_once("../keb/php/component.php");
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>KEB</title>

	// Font Awesome //

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    // Bootstrap 4 //
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
	
	<main>

		<div class="container text-center">

			<h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-swatchbook"></i> KICS BOOKS SHOP</h1>

			<div class="d-flex justify-content-center">

            	<form action="" method="post" class="w-50">
                    <div class="py-2">

                         <?php 
                         inputElement("<i class='fas fa-id-badge'></i>","ID", "book_id",""); 
                         ?>

                    </div>

                    <div class="py-2">

                        <?php
                         inputElement("<i class='fas fa-book'></i>","Book Name", "book_name",""); 
                         ?>

                    </div>

                    <div class="row pt-2">

                        <div class="col">

                            <?php 
                              inputElement("<i class='fas fa-people-carry'></i>","Publisher", "book_publisher",""); 
                              ?>

                        </div>

                        <div class="col">

                            <?php 
                              inputElement("<i class='fas fa-dollar-sign'></i>","Price", "book_price",""); 
                              ?>

                        </div>

                    </div>
            		
            	</form>

            </div>

		</div>
        
	</main>


</body>
</html>