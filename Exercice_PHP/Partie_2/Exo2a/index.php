<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $isEasy = true;
    if ($isEasy) {
      echo "C'est facile";
    } else {
      echo "C'est difficile";
    };
    ?>
    <br>
    <?php
    if ($isEasy == false) {
      echo "C'est difficile";
    } else {
      echo "C'est facile";
    }
     ?>
  </body>
</html>
