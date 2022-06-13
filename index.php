<?php
    declare(strict_types = 1);
    include 'includes/class-autoload.inc.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>

    <p>This is a paragraph!</p>
    <?php if (true) { ?>
      echo "This is also a paragraph!";
    <?php } ?>
    <p>This is a paragraph!</p>
    
  </body>
</html>
