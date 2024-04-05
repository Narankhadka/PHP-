<?php
session_start();

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
  header('Location: Session.php'); 
}

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!-- <link rel="stylesheet" href="style.css" /> -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    
    <style>  
    </style>
  </head>
  <body>
    <div class="container">
    <form action="post.php" method="post">
      username:
      <input type="text" name="username" required /><br /><br />
      Password :
      <input type="password" name="password" required /><br><br>
      <input type="submit" value="log in">
    </form>
</div>
  </body>
</html>
