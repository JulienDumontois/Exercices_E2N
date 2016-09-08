<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <a href="index.php?batiment=12&amp;salle=101">Batiment</a>
    <?php
    if (isset($_GET['batiment']) && isset($_GET['salle'])){
      echo 'Nous étudions dans le bâtiment ' . $_GET['batiment'] . ' en salle ' . $_GET['salle'];
    } else {
      echo '...';
    };
     ?>
  </body>
</html>
