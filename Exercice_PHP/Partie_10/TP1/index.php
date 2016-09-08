<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link href="style.css" rel="stylesheet" type="text/css"/>
  <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <title></title>
</head>
<body>
  <?php
  if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['dateNaissance']) && isset($_POST['mail']) && isset($_POST['paysNaissance']) && isset($_POST['nationalite']) && isset($_POST['adresse']) &&isset($_POST['telephone']) &&isset($_POST['diplome']) &&isset($_POST['numPE'])
  &&isset($_POST['nbBadges']) &&isset($_POST['lienCodecademy']) &&isset($_POST['superheros']) &&isset($_POST['hack']) &&isset($_POST['exp'])){
    echo $_POST['nom'] . '<br/>' . $_POST['prenom'] . '<br/>' . $_POST['dateNaissance'] . '<br/>' . $_POST['paysNaissance'] . '<br/>' . $_POST['nationalite'] . '<br/>' . $_POST['adresse']
     . '<br/>'. $_POST['telephone'] . '<br/>' . $_POST['diplome'] . '<br/>' . $_POST['mail'] . '<br/>' . $_POST['numPE'] . '<br/>' . $_POST['nbBadges'] . '<br/>' . $_POST['lienCodecademy'] . '<br/>' .
     $_POST['superheros'] . '<br/>' . $_POST['hack'] . '<br/>' . $_POST['exp'];
  } else { ?>
   <form method="post" action='index.php'>
    <label for="nom" class="col-lg-offset-4">Nom : </label>
    <input type="text" name="nom"/>
    <br/>
    <label for="prenom" class="col-lg-offset-4">Prenom : </label>
    <input type="text" name="prenom"/>
    <br/>
    <label for="dateNaissance" class="col-lg-offset-4">Date de naissance : </label>
    <input type="text" name="dateNaissance"/>
    <br/>
    <label for="paysNaissance" class="col-lg-offset-4">Pays de naissance : </label>
    <input type="text" name="paysNaissance"/>
    <br/>
    <label for="nationalite" class="col-lg-offset-4">Nationalité : </label>
    <input type="text" name="nationalite"/>
    <br/>
    <label for="adresse" class="col-lg-offset-4">Adresse : </label>
    <input type="text" name="adresse"/>
    <br/>
    <label for="mail" class="col-lg-offset-4">Email : </label>
    <input type="text" name="mail"/>
    <br/>
    <label for="telephone" class="col-lg-offset-4">Téléphone : </label>
    <input type="text" name="telephone"/>
    <br/>
    <label for="diplome" class="col-lg-offset-4">Diplômes : </label>
    <input type="text" name="diplome"/>
    <br/>
    <label for="numPE" class="col-lg-offset-4">Numéro Pôle Emploi : </label>
    <input type="text" name="numPE"/>
    <br/>
    <label for="nbBadges" class="col-lg-offset-4">Nombre de badges : </label>
    <input type="text" name="nbBadges"/>
    <br/>
    <label for="lienCodecademy" class="col-lg-offset-4">Lien codecamedy : </label>
    <input type="text" name="lienCodecademy"/>
    <br/>
    <label for="superheros" class="col-lg-offset-4">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ? </label>
    <input type="text" name="superheros"/>
    <br/>
    <label for="hack" class="col-lg-offset-4">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique) : </label>
    <input type="text" name="hack"/>
    <br/>
    <label for="exp" class="col-lg-offset-4">Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ? </label>
    <input type="text" name="exp"/>
    <br/>
    <input type="submit" value="Envoyer ce formulaire méga chiant" class="col-lg-offset-4"/>
  </form>
      <?php   
  }
   ?>
</body>
</html>
