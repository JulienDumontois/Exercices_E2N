<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <a href="index.php?nom=Nemare&amp;prenom=Jean&amp;age=23">zzzzzzzzzz</a>
    <?php if (isset($_GET['nom']) && isset($_GET['prenom']) && isset($_GET['age'])){
      echo 'Bonjour ' . $_GET['nom'] . ' ' . $_GET['prenom'] . ' tu as ' . $_GET['age'] . ' ans.';
    } else {
      echo '...';
    };
     ?>
  </body>
</html>
