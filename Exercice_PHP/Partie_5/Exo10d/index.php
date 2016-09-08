<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $departement =  array(
      'Oise' => 60,
      'Aisne' => 02,
      'Somme' => 80,
      'Nord' => 59,
      'Pas de calais' => 62,
      'Marne' => 51,
     );
    foreach($departement as $cle => $element){
      echo 'Le département ' . $cle . ' porte de numéro ' . $element . '. <br/>';
    };
    ?>
  </body>
</html>
