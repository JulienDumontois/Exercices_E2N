<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<a href="index.php?langage=PHP&amp;serveur=LAMP">zzzzzzzzzzz</a>
<?php
if(isset($_GET['langage']) && isset($_GET['serveur'])){
  echo 'Ce code est écrit en ' . $_GET['langage'] . ' sur serveur ' . $_GET['serveur'];
} else {
  echo '...';
};
 ?>
  </body>
</html>
