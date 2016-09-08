<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    function maFonction($nom, $prenom, $age){
      return 'Bonjour ' . $prenom . $nom . ', tu as ' . $age . ' ans.';
    }
    echo maFonction('Cooper', 'Bradley ', 41);
     ?>
  </body>
</html>
