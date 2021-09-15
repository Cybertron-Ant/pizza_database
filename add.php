<?php

/*
// used this initially to check if form was working
if (isset($_POST['submit'])) {
//convert dangerous characters into html entities
  echo htmlspecialchars($_POST['email']);
  echo htmlspecialchars($_POST['title']);
  echo htmlspecialchars($_POST['ingredients']);

} */


if (isset($_POST['submit'])) {



//initialize variables to an empty string
$email = $title = $ingredients = '';
//if there are errors, update empty positions in the array
$errors = array('email' => '', 'title' => '', 'ingredients' => '');





//check email
if (empty($_POST['email'])) {
    $errors['email'] =  "Your email is required <br />";
} else {
  $email = $_POST['email'];
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = "Please enter a vaild email address";
  }
}


//check title
if (empty($_POST['title'])) {
  $errors['title'] = "Your pizza title is required <br />";
} else {

  $title = $_POST['title'];
  //match lowercass and uppercase letters and a space
    if (!preg_match('/^[a-zA-Z\s]+$/', $title )) {
      $errors['title'] = "Title must be letters and spaces only. <br />";
    }
  }



//check ingredients
if (empty($_POST['ingredients'])) {
    $errors['ingredients'] =  "At least one ingredient is required <br />";
} else {

  $ingredients = $_POST['ingredients'];
   //match comma separated words
      if (!preg_match('/^([a-zA-Z\s])+(,\s*[a-zA-Z\s]*)*$/', $ingredients)) {
        $errors['ingredients'] = "Ingredients must be a comma separated list. <br />";
      }

}


if(array_filter($errors)) {
  //do nothing
} else {
  //redirect user to home page
  //header('Location: index php');

//Or redirect user using some JavaScript
       echo "<script>
       //Using setTimeout to execute a function after 5 seconds.
       setTimeout(function () {
          //Redirect with JavaScript
          window.location.assign('index.php');
       }, 1000);
       </script>";
}


}// end POST submit


?>


<!DOCTYPE html>
<html lang="en">

<?php  include "./templates/header.php";   ?>

<section class = "container grey-text">
  <h4 class = "center">Add a Pizza</h4>
  <form class = "white" method = "POST" action = "add.php">
    <label for = "email">Your Email</label>
    <input type = "text" id = "email" name ="email" value = "<?php echo htmlspecialchars($email) ?>" >
    <div class = "red-text"><?php echo $errors['email']; ?></div>

    <label for = "title">Pizza Title</label>
    <input type = "text" id = "title" name ="title" value = "<?php echo htmlspecialchars($title) ?>" >
        <div class = "red-text"><?php echo $errors['title']; ?></div>


    <label for = "ingredients">Ingredients</label>
    <input type = "text" id = "ingredients" name ="ingredients" value = "<?php echo htmlspecialchars($ingredients) ?>" >
        <div class = "red-text"><?php echo $errors['ingredients']; ?></div>


    <div class = "center">
      <input type = "submit" name = "submit" value = "submit" class = "btn brand z-depth-0">
    </div>
  </form>
</section>




<?php  include "./templates/footer.php";   ?>


  </html>