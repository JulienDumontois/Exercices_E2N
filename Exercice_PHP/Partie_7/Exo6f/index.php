<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php if (isset($_POST['nom']) && isset($_POST['prenom']) && $_POST['nom'] != NULL && $_POST['prenom'] != NULL){
    echo htmlspecialchars($_POST['civilite']) . ' ' . htmlspecialchars($_POST['nom']) . ' ' . htmlspecialchars($_POST['prenom']);
  } else { ?>
    <form method="post" action="index.php">
      <select name="civilite">
        <option>Mr
        <option>Mme
      </select>
      <input type="text" name="nom" placeholder="nom"/>
      <input type="text" name="prenom" placeholder="prenom"/>
      <input type="submit" value="Valider"/>
    </form>
    <?php
  }
     ?>
  </body>
</html>
