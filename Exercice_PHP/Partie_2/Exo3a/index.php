<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $genre = 'femme';
    $age = 10;
    if ($genre == 'homme' && $age >= 18){
      echo "Vous êtes un homme et vous êtes majeur";
    } elseif ($genre == 'homme' && $age < 18){
      echo "Vous êtes un homme et vous êtes mineur";
    } elseif ($genre == 'femme' && $age >= 18){
      echo "Vous êtes une femme et vous êtes majeure";
    } elseif ($genre == 'femme' && $age < 18){
      echo"Vous êtes une femme et vous êtes mineure";
    } else {
      echo "Vérifier votre réponse."
    }
     ?>
  </body>
</html>
