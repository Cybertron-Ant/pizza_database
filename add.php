
<?php

if (isset($_POST['submit'])) {
  echo $_POST['email'];
  echo $_POST['title'];
  echo $_POST['ingredients'];

}

?>


<!DOCTYPE html>
<html lang="en">

<?php  include "./templates/header.php";   ?>

<section class = "container grey-text">
  <h4 class = "center">Add a Pizza</h4>
  <form class = "white"method = "GET" action = "">
    <label for = "email">Your Email</label>
    <input type = "text" id = "email" name ="email">

    <label for = "title">Pizza Title</label>
    <input type = "text" id = "title" name ="title">

    <label for = "ingredients">Ingredients</label>
    <input type = "text" id = "ingredients" name ="ingredients">

    <div class = "center">
      <input type = "submit" name = "submit" value = "submit" class = "btn brand z-depth-0">
    </div>
  </form>
</section>




<?php  include "./templates/footer.php";   ?>

  </html>