<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    for ($nb = 0; $nb <= 10; $nb += 0.5){
      echo $nb . '<br>';
    }
     ?>
     <hr>
     <?php
     $variable = 1;
    while ($variable <= 10){
      echo $variable . '<br>';
      $variable+=($variable/2);
    }
      ?>
  </body>
</html>
