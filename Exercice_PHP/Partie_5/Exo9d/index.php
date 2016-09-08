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
  foreach($departement as $element){
    echo $element . '<br/>';
  };
  ?>
</body>
</html>
