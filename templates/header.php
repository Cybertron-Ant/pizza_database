 <?php
 
 session_start();
 
 $username = $_SESSION['username'];
 
 
 ?>
 
 <head>
     <title>My page</title>
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
        <li class = "paint">Hello <?php echo htmlspecialchars($username); ?> </li>
           <li><a href = "add.php" class = "btn brand z-depth-0">Add Soup</a></li>
         </ul>
       </div>

     </nav>