<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $nb = 5;
    for ($un = 0; $un <= 20; $un++){
      echo $nb * $un . '<br>';
    }
?>
<hr>
<?php
    $nb1 = 0;
    while($nb1 <= 20){
      echo $nb * $nb1 . '<br>';
      $nb1++;
    }
     ?>
  </body>
</html>
