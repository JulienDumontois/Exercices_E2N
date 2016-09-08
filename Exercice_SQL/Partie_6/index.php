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
      <h2 class="titrePartie">PARTIE 6 : Suppression de données / Tables / Bases</h2>
      <a href="/../SQL/index.php" class="menu col-lg-offset-10 btn btn-default">Retour au menu</a>
    </div>
    </br>
    <h4 class="titreExo">Exercice 1 :<h4>
      <p class="consigne">Supprimer Juliette Maçon de la liste des clients.</p>
      <p class="reponse">DELETE FROM clients WHERE id=1;</p>
      <hr>
      <h4 class="titreExo">Exercice 2 :<h4>
        <p class="consigne">Supprimer les spectacles qui ont lieu entre 1er février et le 31 mai 2016.</p>
        <p class="reponse">DELETE FROM spectacles WHERE date BETWEEN '2016-02-01' AND '2016-05-31';</p>
      <hr>
      <h4 class="titreExo">Exercice 3 :<h4>
        <p class="consigne">Supprimer tous les clients dont le nom finit par "ski".</p>
        <p class="reponse">DELETE FROM clients WHERE nom LIKE '%ski';</p>
      <hr>
      <h4 class="titreExo">Exercice 4 :<h4>
        <p class="consigne">Avant de commencer merci d'éxécuter le script paradisio.sql. Supprimer la table clients de la base paradisio.</p>
        <p class="reponseX col-lg-offset-4">mysql -h localhost -u root -p;</br>
                          GRANT ALL PRIVILEGES ON paradisio.* TO 'JulienDumontois'@'localhost' IDENTIFIED BY '********';</br>
                          exit;</br>
                          mysql -u JulienDumontois -p --default-character-set=utf8;</br>
                          CREATE DATABASE paradisio;</br>
                          SOURCE /home/dumontois/www/Exercices/SQL/sql/paradisio.sql;</br>
                          USE paradisio;</br>
                          DROP TABLE clients;</br></p>
      <hr>
      <h4 class="titreExo">Exercice 5 :<h4>
        <p class="consigne">Supprimer la table soirees de la base paradisio.</p>
        <p class="reponse">DROP TABLE soirees;</p>
      <hr>
      <h4 class="titreExo">Exercice 6 :<h4>
        <p class="consigne">Supprimer la table langages de la base competences.</p>
        <p class="reponse">DROP TABLE langages;</p>
      <hr>
      <h4 class="titreExo">Exercice 7 :<h4>
        <p class="consigne">Supprimer la base competences.</p>
        <p class="reponse">DROP DATABASE competences;</p>
      <hr>
      <h4 class="titreExo">Exercice 8 :<h4>
        <p class="consigne">Supprimer la base paradisio.</p>
        <p class="reponse">DROP DATABASE paradisio;</p>
      <hr>
      <h4 class="titreExo">Exercice 9 :<h4>
        <p class="consigne">Supprimer la base competences.</p>
        <p class="reponse">DROP DATABASE colysee;</p>
      <hr>
  </div>
  </body>
</html>
