<?php 

require_once("../sad/php/component.php");
require_once("../sad/php/operation.php");

 ?>


 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>School Admiddion Data</title>

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

	<!-- BootStrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
	<main>
		
          <div class="container text-center">
          	<h1 class="py-4 bg-dark text-light rounded"> <i class="fas fa-file-signature"></i>Admission Form</h1>
          	<div class="d-flex justify-content-center">

          		<form action="" method="post" class="w-50">
                <div class="pt-2">
                        <?php inputElement("<i class='fas fa-id-badge'></i>","ID", "std_id",""); ?>
                    </div>

          			<div class="row pt-2">

	          				<div class="col">
	          				<?php inputElement("<i class='fas fa-user'></i>","First Name", "user_fname",""); ?>
	          				</div>

	          				<div class="col"> 
	          				<?php inputElement("<i class='fas fa-user'></i>","Last Name", "user_lname",""); ?>
	          				
	          			    </div>
          			</div>

          			<div class="pt-2">
                        <?php inputElement("<i class='fas fa-user-graduate'></i>","Qualification", "qualification",""); ?>
                </div>

          			<div class="pt-2">
                        <?php inputElement("<i class='fas fa-map-marker-alt'></i>","Address", "adress",""); ?>
                </div>

                <div class="row pt-2"> 
	          				<div class="col">
	          				<?php inputElement("<i class='fas fa-envelope'></i>","E-mail", "e-mail",""); ?>
	          				</div>
	          				<div class="col"> 
	          				<?php inputElement("<i class='fas fa-mobile-alt'></i>","Mobile", "mobile",""); ?>
	          				
	          			 </div>
          	</div>

          			<div class="d-flex justify-content-center">
          				<?php buttonElement("btn-create","btn btn-success","<i class='fas fa-plus'></i>", "creat","data-toggle='tooltip' data-placement='bottom' title='Create'"  )
          				?>
          				<?php buttonElement("btn-create","btn btn-primary","<i class='fas fa-sync'></i>", "creat","data-toggle='tooltip' data-placement='bottom' title='Create'"  )
          				?>
          				<?php buttonElement("btn-create","btn btn-warning","<i class='fas fa-pen-alt'></i>", "creat","data-toggle='tooltip' data-placement='bottom' title='Create'"  )
          				?>
          				<?php buttonElement("btn-create","btn btn-danger","<i class='fas fa-trash-alt'></i>", "creat","data-toggle='tooltip' data-placement='bottom' title='Create'"  )
          				?>
                  <?php deleteBtn();?>

          			</div>
          		</form> 
          	</div>

            <!-- Bootstrap Table -->

            <div class="d-flex table-data">
              <table class="table table-striped table-dark">
                <thead class="thead-dark">
                  <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Qualification</th>
                    <th>Adress</th>
                    <th>E-mail</th>
                    <th>Mobile</th>
                  </tr>
                  
                </thead>
                <tbody id="tbody">
                                <?php 

                                    // create read button click
                                    if(isset($_POST['read'])){
                                        $result = getData();
                                        if($result)
                                         {
                                            while($row = mysqli_fetch_assoc($result)){
                                ?>

                                <tr>
                                  <td data-id=<?php echo $row['id']; ?>> <?php echo $row ['id']; ?> </td>
                                  <td data-id=<?php echo $row['id']; ?>> <?php echo $row ['user_fname']; ?> </td>
                                  <td data-id=<?php echo $row['id']; ?>> <?php echo $row ['user_lname']; ?> </td>
                                  <td data-id=<?php echo $row['id']; ?>> <?php echo $row ['qualification']; ?> </td>
                                  <td data-id=<?php echo $row['id']; ?>> <?php echo $row ['address']; ?> </td>
                                  <td data-id=<?php echo $row['id']; ?>> <?php echo $row ['e-mail']; ?> </td>
                                  <td data-id=<?php echo $row['id']; ?>> <?php echo $row ['mobile']; ?> </td>
                                  <td><i data-id=<?php echo $row['id']; ?> class="fas fa-edit btnedit"></i></td>
                                </tr>

                                <?php }
                                         }
                                    }

                                 ?>
                                
                </tbody>

                
              </table>
              
            </div>
          	


          </div>

	</main>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="../keb/php/main.js"></script>
	
</body>
</html>