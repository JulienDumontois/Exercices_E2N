<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    // Afficher la date en toutes lettres en Français
    setlocale (LC_TIME, 'fr_FR.utf8');
    echo strftime('%A %d %B %Y');
    ?>
    <br/>
    <?php
    // Afficher la date en toutes lettres en Anglais
    echo date('l d F Y');
     ?>
  </body>
</html>
