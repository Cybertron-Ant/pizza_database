<?php 
include('configurations/database_connection.php');

if (isset($_POST['delete'])) {
  
  //reference hidden input form field 
  $id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);
  
  $sql = "DELETE FROM soups WHERE id = $id_to_delete";
  
  if (mysqli_query($conn, $sql)) {
    //if query is successful
    //redirect user to home page
  
    //header('Location: index php');
    
    //Or redirect user using some JavaScript
      echo "<script>
           //Using setTimeout to execute a function after 1 second.
           setTimeout(function () {
              //Redirect with JavaScript
              window.location.assign('index.php');
           }, 1000);
           </script>";  
    
    
  } else {
    //if query failed
    echo "Error ". mysqli_query($conn);
  }
  
}

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

<h2 class="center">Soup Details</h2>
<div class = "container center">
  
   <?php if($mySoup): ?>
    <h4><?php echo htmlspecialchars($mySoup['title']); ?></h4>
    <p>Created by: <?php echo htmlspecialchars($mySoup['email']); ?></p>
    <p>Date: <?php echo date($mySoup['created_at']); ?></p>
    <h5>Ingredients</h5>
     <p><?php echo htmlspecialchars($mySoup['ingredients']); ?></p>

<!-- DELETE functionality -->

<form action = "details.php" method = "POST">
  <input type = "hidden" name = "id_to_delete" value = "<?php echo $mySoup['id']  ?>"
  <input type = "submit" name = "delete" value = "DELETE" class = "btn brand z-depth-0">
  
</form>

   <?php else: ?>
   
   <h5>No such soup exists!</h5>
   
   <?php endif; ?>

</div>


<?php  include "templates/footer.php";   ?>


</html>