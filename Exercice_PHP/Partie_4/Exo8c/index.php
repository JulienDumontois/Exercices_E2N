<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $nb = 4;
    $nb1 = 6;
    $nb2 = 10;
    function maFonction($nb0 = 0, $nb10 = 0, $nb20 = 0){
      echo $nb0 + $nb10 + $nb20;
    };
    echo maFonction($nb, $nb1, $nb2);
     ?>
  </body>
</html>
