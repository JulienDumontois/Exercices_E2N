<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    //Afficher le nombre de jour dans le mois de février de l'année 2016.
    $number = cal_days_in_month(CAL_GREGORIAN, 2, 2016);
    echo 'Il y a eu ' .  $number . ' jours en février 2016.';
     ?>
  </body>
</html>
