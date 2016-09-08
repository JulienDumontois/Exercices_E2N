<?php
session_start();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    if(isset($_SESSION['nom']) && isset($_SESSION['prenom']) && isset($_SESSION['age'])){
    echo $_SESSION['nom'] . ' ' . $_SESSION['prenom'] . ' ' . $_SESSION['age'];
  }
     ?>
  </body>
</html>
<?php
session_destroy();
 ?>
