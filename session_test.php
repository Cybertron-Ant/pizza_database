<?php

if(isset($_POST['submit'])) {

session_start();

//hard coding my session variable
$_SESSION['username'] = "Guest";

$_SESSION['username'] = $_POST['username'];

header('Location: index.php');

}




?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Session</title>
</head>

<body>
  
  
<form method = "POST" action = "<?php echo SERVER['PHP_SELF'] ?>">
  
 <input type = "text" name = "username">
 <input type = "submit" value = "Submit" name = "submit">
  
</form>

</body>

</html>