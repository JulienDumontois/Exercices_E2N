<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<a href="index.php?nom=Neymar&amp;prenom=Jean">Dis-moi bonjour !</a>
<?php if (isset($_GET['nom']) && isset($_GET['prenom'])){
  echo 'Bonjour ' . $_GET['nom'] . ' ' . $_GET['prenom'];
} else {
  echo '...';
};
 ?>
  </body>
</html>
