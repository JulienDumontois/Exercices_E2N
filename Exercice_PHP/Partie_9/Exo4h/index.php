<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    // Afficher le timestamp du jour
    echo 'Aujourd\'hui : ' . time();
    ?>
    <br/>
    <?php
    // Afficher le timestamp Mardi 2 Août à 15h00
    $date = date_create('08/02/2016 15:00:00');
    echo 'Mardi 2 Août à 15h : ' . date_timestamp_get($date) . ' ou ' . mktime(15,0,0,8,2,2016);
     ?>
  </body>
</html>
