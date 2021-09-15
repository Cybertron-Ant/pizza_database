<?php


$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'soup_database';

//connect to database
$conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

//check database connection if it's true or false
if (mysqli_connect_errno()) {
	exit('Failed to connect to database: ' . mysqli_connect_error());
}

//write query for what I want
$sql = 'SELECT title, ingredients, id FROM soups ORDER BY created_at';

//run query and get result
$result = mysql_db_query($conn, $sql);

//fetch resulting rows as an associative array
$soups = mysqli_fetch_all($result, MYSQLI_ASSOC); 

//free results from memory
mysqli_free_result($result);

//close database connection
mysqli_close($conn);



?>




<!DOCTYPE html>
<html lang="en">

<?php  include "./templates/header.php";   ?>

<h4 class= "center grey-text">Soups</h4>

<div class = "container">
  <div class= "row">
    
    <?php foreach ($soups as $soup) { ?>
      <!-- on small screens, take up 6 columns of width out of 12.
      On medium screens, that up 3 columns of width out of 12. -->
      <div class= "col s6 md3">
        <div class = "card z-depth-0">
          <div class = "card-content center">
            <h6><?php echo htmlspecialchars($soups['title']); ?></h6>
            <div><?php echo htmlspecialchars($soups['ingredients']); ?></div>
          </div>
          <div class = "card-action right-align">
            <a class= "brand-text" href = "#">more info</a>
          </div>
        </div>
      </div>
      
    <?php } ?>
    
  </div>
</div>

<?php  include "./templates/footer.php";   ?>



  </html>