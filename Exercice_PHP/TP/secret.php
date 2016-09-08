<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    if (isset($_POST['password']) && $_POST['password'] == 'kangourou'){
      echo 'Bien joué, vous avez gagné le droit de ne rien comprendre aux codes de la NASA';
    }
    else {
      echo 'Accès non-autorisé';
    }
     ?>
  </body>
</html>
