<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <a href="index.php?dateDebut=2/05/2016&amp;dateFin=27/11/2016">aaaaaaaaaa</a>
    <?php if(isset($_GET['dateDebut']) && isset($_GET['dateFin'])){
    echo 'La formation cours du ' . $_GET['dateDebut'] . ' au ' . $_GET['dateFin'];
  } else {
    echo '...';
  }
    ?>
  </body>
</html>
