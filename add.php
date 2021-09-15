<?php

/*
// used this initially to check if form was working
if (isset($_POST['submit'])) {
//convert dangerous characters into html entities
  echo htmlspecialchars($_POST['email']);
  echo htmlspecialchars($_POST['title']);
  echo htmlspecialchars($_POST['ingredients']); 

} */


//check email
if (empty($_POST['email'])) {
  echo "Your email is required <br />";
} else {
  $email = $_POST['email'];
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Please enter a vaild email address";
  }
}


//check title
if (empty($_POST['title'])) {
  echo "Your pizza title is required <br />";
} else {
  
  $tite = $_POST['title'];
  //match lowercass and uppercase letters and a space
    if (!preg_match('/^[a-zA-Z\s]+$/', $title )) {
      echo "Title must be letters and spaces only. <br />";
    }
  }



//check ingredients
if (empty($_POST['ingredients'])) {
  echo "At least one ingredient is required <br />";
} else {
  
  $ingredients = $_POST['ingredient'];
   //match comma separated words
      if (!preg_match('/^([a-zA-Z\s])+(,\s*[a-zA-Z\s]*)*$/', $ingredients)) {
        echo "Ingredients must be a comma separated list. <br />";
      }

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