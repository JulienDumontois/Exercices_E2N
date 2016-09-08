<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $departement = array(
     '60' => 'Oise',
     '02' => 'Aisne',
     '80' => 'Somme',
     '59' => 'Nord',
     '62' => 'Pas-de-Calais',
    );
    $departement['51'] = 'Marne';

    echo $departement ['Nord'];
     ?>
  </body>
</html>
