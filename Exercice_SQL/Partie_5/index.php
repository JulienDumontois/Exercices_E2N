<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../Boostrap/bootstrap.min.css"/>
    <link rel="stylesheet" href="style.css" type="text/css"/>
  </head>
  <body>
    <div class="container-fluid">
    <div class="row">
      <h2 class="titrePartie">PARTIE 5 : Modification de données</h2>
      <a href="/../SQL/index.php" class="menu col-lg-offset-11 btn btn-default">Retour au menu</a>
    </div>
    </br>
      <h4 class="titreExo">Exercice 1 :<h4>
        <p class="consigne">Modifier le nom de famille de Juliette Masson. Le remplacer par "Maçon".</p>
        <p class="reponse">UPDATE clients SET nom ="Maçon" WHERE id=1;</p>
        <hr>
        <h4 class="titreExo">Exercice 2 :<h4>
          <p class="consigne">Modifier le nom de Julien ALLMEIDA. Le remplacer par "Allmeida".</p>
          <p class="reponse">UPDATE clients SET nom ="Allmeida"  WHERE id=16;</p>
        <hr>
        <h4 class="titreExo">Exercice 3 :<h4>
          <p class="consigne">Modifier le prix de tous les billets au tarif "Etudiants". Ils passent de 13€ à 10€.</p>
          <p class="reponse">UPDATE billets SET prix=10  WHERE prix=13;</p>
        <hr>
        <h4 class="titreExo">Exercice 4 :<h4>
          <p class="consigne">Modifier le montant de la réduction des possesseurs de cartes de fidélité. La réduction passe de 0.5 à 1.</p>
          <p class="reponse">UPDATE clients SET reduction=1  WHERE reduction=0.50;</p>
        <hr>
        <h4 class="titreExo">Exercice 5 :<h4>
          <p class="consigne">Tous les spectacles ayant lieu dans la salle 5 doivent changer de salle. Leur attribuer la salle 3.</p>
          <p class="reponse">UPDATE spectacles SET salles_id=3  WHERE salles_id=5;</p>
        <hr>
        <h4 class="titreExo">Exercice 6 :<h4>
          <p class="consigne">Modifier le 23ème client. Son prénom sera "Sophie" et son nom de famille sera "Lemaire".</p>
          <p class="reponse">UPDATE clients SET nom="Lemaire", prenom="Sophie" WHERE id=23;</p>
        <hr>
        <h4 class="titreExo">Exercice 7 :<h4>
          <p class="consigne">Tous les clients dont le nom se termine par "ski" obtiennent une réduction de 0.5.</p>
          <p class="reponse">UPDATE clients SET reduction=0.50 WHERE nom LIKE "%ski";</p>
        <hr>
      </div>
</html>
