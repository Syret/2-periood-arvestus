<?php 
  session_start(); 
	$validUsername = $_SESSION["username"];
    $validPassword = $_SESSION["password"];
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>II perioodi arvestustöö - Ülesanne 5 - Sessiooni tagasiside</title>
  </head>

  <body>
 
    <?php
    	if ($validUsername = $_SESSION["username"] and $validPassword = $_SESSION["password"]) {
    	
    	echo "Kasutajanimi ja parool on õiged." ;
    }else{
    	echo "Kasutajanimi ja/või parool ei klapi.";
    }
    ?>
    <a href="index.php">Mine tagasi</a>
  </body>
</html>
