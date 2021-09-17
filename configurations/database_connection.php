
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
 $DATABASE_HOST = 'sql311.unaux.com';
 $DATABASE_USER = 'unaux_29764247';
 $DATABASE_PASS = 'Conglomeration1';
 $DATABASE_NAME = 'unaux_29764247_soup_database';
 
 //connect to database
 $conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
 
 //check database connection if it's true or false
 if (mysqli_connect_errno()) {
 	exit('Failed to connect to database: ' . mysqli_connect_error());
 }
  ?>