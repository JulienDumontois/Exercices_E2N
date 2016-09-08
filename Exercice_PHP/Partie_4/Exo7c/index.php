<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    function maFonction($age, $genre){
      if($age >= 18 && $genre == 'Homme'){
        return 'Vous êtes un homme majeur';
      } elseif ($age < 18 && $genre == 'Homme') {
        return 'Vous êtes un homme mineur';
      } elseif ($age >= 18 && $genre == 'Femme'){
        return 'Vous êtes une femme majeur';
      } elseif ($age < 18 && $genre == 'Femme') {
        return 'Vous êtes une femme mineur';
      } else {
        return 'ZBLAAAAAAAAAAAA';
      }
    }
    echo maFonction(26, "Femme");
     ?>
  </body>
</html>
