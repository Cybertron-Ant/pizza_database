 <?php
 
 session_start();
 $_SESSION['username'] = "Guest";

 $username = $_SESSION['username'];
 
 
 ?>
 
 <head>
     <title>Best Soup: Make your own soup</title>
     <meta name="description" content="Come and improve your soup making skills by adding your favorite ingredients.">
      <link rel = "stylesheet" href = "./node_modules/bootstrap.min.css">
<link rel = "stylesheet" href = "./node_modules/materialize.min.css">

<link rel = "stylesheet" href = "css/beautify.css">

<style type = "text/css">
  </style>


</head>
   <body class = "paint lighten-8">
     <nav class = " z-depth-0">
       <div class = "container">
         <a href = "index.php" class = "brand-logo brand-text">Antonio's Soup Depo</a>
         <ul id = "nav-mobile" class = "right ">
        <li class = "">Hello <?php echo htmlspecialchars($username); ?> </li>
           <li><a href = "add.php" class = "btn brand z-depth-0">Add Soup</a></li>
         </ul>
       </div>

     </nav>