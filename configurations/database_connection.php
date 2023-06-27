
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
 $DATABASE_HOST = 'sql211.unaux.com';
 $DATABASE_USER = 'unaux_34511784';
 $DATABASE_PASS = 'Conglomeration1';
 $DATABASE_NAME = 'unaux_34511784_soup_database';
 
 //connect to database
 $conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
 
 //check database connection if it's true or false
 if (mysqli_connect_errno()) {
 	exit('Failed to connect to database: ' . mysqli_connect_error());
 } 
  ?>


<?php /*
 $DATABASE_HOST = $_ENV["DATABASE_HOST"];
 $DATABASE_USER = $_ENV["DATABASE_USER"];
 $DATABASE_PASS = $_ENV["DATABASE_PASS"];
 $DATABASE_NAME = $_ENV["DATABASE_NAME"];
 $DATABASE_PORT = $_ENV["DATABASE_PORT"];
 
 //connect to database
 $conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME, $DATABASE_PORT);
 
 //check database connection if it's true or false
 if (mysqli_connect_errno()) {
 	exit('Failed to connect to database: ' . mysqli_connect_error());
 } */
  ?>
