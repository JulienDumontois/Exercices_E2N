<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    if (isset($_POST['civilite']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_FILES['monfichier'])){
    echo htmlspecialchars($_POST['civilite']) . ' ' . htmlspecialchars($_POST['nom']) . ' ' . htmlspecialchars($_POST['prenom']) . ' ' . htmlspecialchars($_FILES['monfichier']['type']) . ' ' . htmlspecialchars($_FILES['monfichier']['name']);
  } else { ?>
    <form method="post" action="index.php" enctype="multipart/form-data">
      <select name="civilite">
        <option>Mr
        <option>Mme
      </select>
      <input type="text" name="nom" placeholder="nom"/>
      <input type="text" name="prenom" placeholder="prenom"/>
      <input type="file" name="monfichier" placeholder="insérer votre pièce jointe"/>
      <input type="submit" value="Valider"/>
    </form>
    <?php
  }
     ?>
  </body>
</html>
