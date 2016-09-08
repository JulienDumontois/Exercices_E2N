<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <?php
  // Pensez a ajouter des commentaires !!!
  function dateDifference($date_1 , $date_2 , $differenceFormat = '%a')
  {
    $datetime1 = date_create($date_1);
    $datetime2 = date_create($date_2);
    $interval = date_diff($datetime1, $datetime2);
    return $interval->format($differenceFormat);
  }
  echo dateDifference('2016-08-29', '2016-05-16');
  ?>
  <?php
  //créer une variable date au jour j
  $date1 = new DateTime('now');
  //créer une variable date au 16mai2016
  $date2 = new DateTime('16-05-2016');
  //créer une variable qui compte le nombre qui separe la date 1 et 2
  $interval = $date2->diff($date1);
  echo $interval->format('%R%a days');
  ?>
</body>
</html>
