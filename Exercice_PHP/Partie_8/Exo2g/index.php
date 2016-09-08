<?php
session_start();
$_SESSION['nom'] = 'Dumontois';
$_SESSION['prenom'] ='Julien';
$_SESSION['age'] = 23;
session_write_close();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<a href="deuxdex.php">...............</a>
  </body>
</html>
