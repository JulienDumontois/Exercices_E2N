<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      function maFonction($param, $param1){
        if($param > $param1){
          return $param . ' est le plus grand que ' . $param1;
        } elseif ($param < $param1) {
          return $param . ' est le plus petit que ' . $param1;
        }
        else{
          return 'Les deux nombres sont identiques';
        }
      }
      echo maFonction(24, 59);
     ?>
  </body>
</html>
