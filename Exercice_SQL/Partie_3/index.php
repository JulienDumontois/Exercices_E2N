<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../Boostrap/bootstrap.min.css"/>
  <link rel="stylesheet" href="style.css" type="text/css"/>
  <title></title>
</head>
<body>
  <div>
    <h2 class="titrePartie">PARTIE 3 : Lecture de données avec conditions simples</h2>
    <a href="/../SQL/index.php" class="menu btn btn-default">Retour au menu</a>
  </br>
    <h4 class="titreExo">Exercice 1 :<h4>
      <p class="consigne">Afficher tous les clients de la table clients</p>
      <p class="reponse">SELECT * FROM clients</p>
    <hr>
    <h4 class="titreExo">Exercice 2 :<h4>
      <p class="consigne">Afficher tous les clients qui ont une carte de fidélité de la table clients.</p>
      <p class="reponse">SELECT * FROM clients WHERE carteFidelite="1";</p>
    <hr>
    <h4 class="titreExo">Exercice 3 :<h4>
      <p class="consigne">Afficher les billets à tarif réduit (Enfants et Étudiants) dans la table billets.</p>
      <p class="reponse">SELECT * FROM billets WHERE type='Etudiants' || type='Enfants';</p>
    <hr>
    <h4 class="titreExo">Exercice 4 :<h4>
      <p class="consigne">Afficher tous les billets de la réservation n°1 dans la table billets.</p>
      <p class="reponse">SELECT * FROM billets WHERE reservations_id='1';</p>
    <hr>
    <h4 class="titreExo">Exercice 5 :<h4>
      <p class="consigne">Afficher tous les concerts de variété pop internationale dans la table spectacles.</p>
      <p class="reponse">SELECT * FROM spectacles WHERE genre = 'Variété pop internationale';</p>
    <hr>
    <h4 class="titreExo">Exercice 7 :<h4>
      <p class="consigne">Dans la table billets, sélectioner tous les billets au tarif étudiant qui appartiennent à la réservation n°1.</p>
      <p class="reponse">SELECT * FROM billets WHERE reservations_id='1' && type='Etudiants';</p>
    <hr>
    <h4 class="titreExo">Exercice 8 :<h4>
      <p class="consigne">Dans la table spectacles, afficher les One Man Show et les pièces de théâtre.</p>
      <p class="reponse">SELECT * FROM spectacles WHERE type='Théâtre' || type='One Man Show';</p>
    <hr>
    <h4 class="titreExo">Exercice 9 :<h4>
      <p class="consigne">Dans la table billets, afficher tous les prix possibles (enfants, étudiants, ...). Chaque résultat ne doit apparaître qu'une seule fois !</p>
      <p class="reponse">SELECT DISTINCT prix FROM billets ORDER BY prix ASC;</p>
    <hr>
    <h4 class="titreExo">Exercice 10 :<h4>
      <p class="consigne">Dans la table clients, afficher tous les clients et les trier par nom.</p>
      <p class="reponse">SELECT * FROM clients ORDER BY nom ASC;</p>
    <hr>
    <h4 class="titreExo">Exercice 11 :<h4>
      <p class="consigne">Dans la table clients, ne'afficher que les 5 premiers clients.</p>
      <p class="reponse">SELECT * FROM clients LIMIT 5;</p>
    <hr>
    <h4 class="titreExo">Exercice 12 :<h4>
      <p class="consigne">Dans la table spectacles, afficher tous les genres. Chaque genre ne doit apparaître qu'une seule fois.</p>
      <p class="reponse">SELECT DISTINCT genre FROM spectacles ORDER BY name;</p>
    <hr>
    <h4 class="titreExo">Exercice 13 :<h4>
      <p class="consigne">Dans la table spectacles, afficher tous les intitulés et les trier par nom.</p>
      <p class="reponse">SELECT intitule FROM `spectacles` ORDER BY intitule ASC;</p>
    <hr>
  </div>
</body>
</html>
