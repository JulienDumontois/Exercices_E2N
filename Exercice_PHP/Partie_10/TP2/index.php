<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="style.css" rel="stylesheet" type="text/css"/>
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <title></title>
  </head>
  <body>
    <!--Faire une page permettant de saisir les informations suivantes :
    Civilité (liste déroulante)
    Nom
    Prénom
    Age
    Société
A la validation, les données saisies devront aparaitre sous le formulaire. Attention les données devront rester dans les différents éléments du formulaire même après la validation.-->
    <div class="cadre row col-lg-offset-3">
    <form action="index.php" method="post">
      <label for="civilite" class="lab col-lg-offset-3">Civilité : </label>
      <br/>
      <input type="text" class="col-lg-offset-3" name="civilite" placeholder="Civilité" value="<?php if(isset($_POST['civilite'])) {echo $_POST['civilite'];} ?>"/>
      <br/>
      <label for="nom" class="lab col-lg-offset-3">Nom : </label>
      <br/>
      <input type="text" class="col-lg-offset-3" name="nom" placeholder="Nom" value="<?php if(isset($_POST['nom'])) {echo $_POST['nom'];} ?>"/>
      <br/>
      <label for="prenom" class="lab col-lg-offset-3">Prénom : </label>
      <br/>
      <input type="text" class="col-lg-offset-3" name="prenom" placeholder="Prénom" value="<?php if(isset($_POST['prenom'])) {echo $_POST['prenom'];} ?>"/>
      <br/>
      <label for="age" class="lab col-lg-offset-3">Age : </label>
      <br/>
      <input type="text" class="col-lg-offset-3" name="age" placeholder="Age" value="<?php if(isset($_POST['age'])) {echo $_POST['age'];} ?>"/>
      <br/>
      <label for="societe" class="lab col-lg-offset-3">Société : </label>
      <br/>
      <input type="text" class="col-lg-offset-3" name="societe" placeholder="Société" value="<?php if(isset($_POST['societe'])) {echo $_POST['societe'];} ?>"/>
      <br/>
      <input type="submit" value="Envoyer" class="send btn btn-primary col-lg-offset-3">
    </form>
    <?php
    if(isset($_POST['civilite']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['age']) && isset($_POST['societe'])){
      echo $_POST['civilite'] . '<br/>' . $_POST['nom'] . '<br/>' . $_POST['prenom'] . '<br/>' . $_POST['age'] . '<br/>' . $_POST['societe'];
    } else {
      echo "<p>Veillez à bien remplir tous les champs.</p>";
    }
     ?>
    </div>
  </body>
</html>
