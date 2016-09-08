<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
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
    if (isset($_POST['civilite']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_FILES['monfichier']) && isset($_FILES['monfichier']['name'])){
      $infosfichier = pathinfo($_FILES['monfichier']['name']);
      $extension_upload = $infosfichier['extension'];
      $extensions_autorisees = array('pdf');
      if (in_array($extension_upload, $extensions_autorisees){
        move_uploaded_file($_FILES['monfichier']['tmp_name'] . 'uploads/' . basename($_FILES['monfichier']['name']))
    echo $_POST['civilite'] . ' ' . $_POST['nom'] . ' ' . $_POST['prenom'] . ' ' . $_FILES['monfichier']['type'] . ' ' . $_FILES['monfichier']['name'];
  } else {
    echo "Remplissez le formulaire";
  }
}
     ?>
  </body>
</html>
