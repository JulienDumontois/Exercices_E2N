<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <a href="index.php?semaine=12">Semaine</a>
    <?php
    if(isset($_GET['semaine'])){
      echo 'Nous sommes à notre ' . $_GET['semaine'] . 'em semaine de cours.';
    } else {
      echo '...';
    };
     ?>
  </body>
</html>
