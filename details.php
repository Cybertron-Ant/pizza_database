<?php 
include('configurations/database_connection.php');

// check GET request id parameter
if(isset($_GET['id'])) {
  
  $id = mysqli_real_escape_string($conn, $_GET['id']);
  
  //create query
  $sql = "SELECT * FROM soups WHERE id = $id";
  
  //run query
  $result = mysqli_query($conn, $sql);
  
  //get result in associative array format
  $mySoup = mysqli_fetch_assoc($result);
  
  mysqli_free_result($result);
  mysqli_close($conn);
  
  
  
  
}


?>


<!DOCTYPE html>
<html>

<?php  include "templates/header.php";   ?>

<h2>Soup Details</h2>
<div class = "container center">
  
   <?php if($mySoup): ?>
    <h4><?php echo htmlspecialchars($mySoup['title']); ?></h4>
    <p>Created by: <?php echo htmlspecialchars($mySoup['email']); ?></p>
    <p>Created by: <?php echo date($mySoup['created_at']); ?></p>
    <h5>Ingredients</h5>
     <p><?php echo htmlspecialchars($mySoup['ingredients']); ?></p>



   <?php else: ?>
   
   <h5>No such soup exists!</h5>
   
   <?php endif; ?>

</div>


<?php  include "templates/footer.php";   ?>


</html>