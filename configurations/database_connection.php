
<?php /*
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'soup_database';

//connect to database
$conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

//check database connection if it's true or false
if (mysqli_connect_errno()) {
	exit('Failed to connect to database: ' . mysqli_connect_error());
}*/
 ?>
 
 

 
 <?php 
 $DATABASE_HOST = 'containers-us-west-33.railway.app';
 $DATABASE_USER = 'root';
 $DATABASE_PASS = 'pv09RfU0g9RaUdrKhCIs';
 $DATABASE_NAME = 'railway';
 
 //connect to database
 $conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
 
 //check database connection if it's true or false
 if (mysqli_connect_errno()) {
 	exit('Failed to connect to database: ' . mysqli_connect_error());
 }
  ?>