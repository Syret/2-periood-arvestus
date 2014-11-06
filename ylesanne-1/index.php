<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>II perioodi arvestustöö - Ülesanne 1 - GET päring</title>
  </head>

  <body>
  	<?php $page_link = "result.php";
    $username = "Syret";
    $age = 21; ?>
    <a href="<?php echo $page_link.'?name='.$username."&age=".$age; ?>">Edasi</a>
  </body>
</html>
