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
    <h2 class="titrePartie">PARTIE 4 : Lecture de données avec conditions complexes</h2>
    <a href="/../SQL/index.php" class="menu col-lg-offset-10 btn btn-default">Retour au menu</a>
  </br>
    <h4 class="titreExo">Exercice 1 :<h4>
      <p class="consigne">Afficher tous les clients dont le nom commence par la lettre "L".</p>
      <p class="reponse">SELECT * FROM clients WHERE nom LIKE 'L%';</p>
    <hr>
    <h4 class="titreExo">Exercice 2 :<h4>
      <p class="consigne">Afficher tous les clients dont le nom commence par "L" et qui ne contiennent que 5 lettres.</p>
      <p class="reponse">SELECT * FROM clients WHERE nom LIKE 'L____';</p>
    <hr>
    <h4 class="titreExo">Exercice 3 :<h4>
      <p class="consigne">Afficher tous les clients dont le nom commence par "P" et finit par "ski".</p>
      <p class="reponse">SELECT * FROM clients WHERE nom LIKE 'P%ski';</p>
    <hr>
    <h4 class="titreExo">Exercice 4 :<h4>
      <p class="consigne">Afficher tous les clients dont le nom commence par "A", finit par "da" et ne contient que 8 lettres.</p>
      <p class="reponse">SELECT * FROM clients WHERE nom LIKE 'A_____da';</p>
    <hr>
    <h4 class="titreExo">Exercice 5 :<h4>
      <p class="consigne">Afficher le nom de tous les clients dont le nom ne contient pas la lettre "a".</p>
      <p class="reponse">SELECT * FROM clients WHERE nom NOT LIKE '%a%';</p>
    <hr>
    <h4 class="titreExo">Exercice 6 :<h4>
      <p class="consigne">Afficher tous les prix de billets commençant par le chiffre 2.</p>
      <p class="reponse">SELECT * FROM billets WHERE prix LIKE '2%';</p>
    <hr>
    <h4 class="titreExo">BONUS :<h4>
      <p class="consigne">Afficher tous les clients dont le nom contient "L". Attention : les clients dont le nom contient "l" ne doivent pas apparaître.</p>
      <p class="reponse">SELECT * FROM clients WHERE nom LIKE BINARY '%L%';</p>
    <hr>
    <h4 class="titreExo">Exercice 7 :<h4>
      <p class="consigne">Afficher tous les spectacles ayant lieu entre le 15 mai 2016 et le 15 aôut 2016.</p>
      <p class="reponse">SELECT * FROM spectacles WHERE date BETWEEN '2016-05-16' AND '2016-08-15';</p>
    <hr>
    <h4 class="titreExo">Exercice 8 :<h4>
      <p class="consigne">Afficher tous les prix de billets compris entre 5 € et 20 €.</p>
      <p class="reponse">SELECT * FROM billets WHERE prix BETWEEN 5 AND 20;</p>
    <hr>
    <h4 class="titreExo">BONUS :<h4>
      <p class="consigne">En utilisant la même requête que pour les execcices 7 et 8, afficher tous les clients dont le nom commence par "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K" ou "L". Les trier par nom.</p>
      <p class="reponse">SELECT * FROM clients WHERE nom BETWEEN 'A%' AND 'M%' ORDER BY nom ASC;</p>
    <hr>
    <h4 class="titreExo">Exercice 9 :<h4>
      <p class="consigne">Afficher tous les spectacles qui ne se déroulent pas entre le 1er janvier 2016 et le 15 février 2016.</p>
      <p class="reponse">SELECT * FROM spectacles WHERE date NOT BETWEEN '2016-01-16' AND '2016-02-15';</p>
    <hr>
    <h4 class="titreExo">Exercice 10 :<h4>
      <p class="consigne"> En utilisant le même requête que pour l'exercice 9, afficher toutes les réservations qui concernent moins de 2 billets et plus de 6 billets.</p>
      <p class="reponse">SELECT * FROM reservations WHERE nombreBillets NOT BETWEEN 2 AND 6;</p>
    <hr>
    <h4 class="titreExo">Exercice 11 :<h4>
      <p class="consigne">Afficher tous les clients dont le nom se trouve dans cette liste : Faubert, Dubeau, Soucy, Michaud, Rivière, Lacroix, Demers, Tritan. Les trier par nom.</p>
      <p class="reponse"> SELECT * FROM clients WHERE nom='Faubert' OR nom='Dubeau' OR nom='Soucy' OR nom='Michaud' OR nom='Rivière' OR nom='Lacroix' OR nom='Demers' OR nom='Tritan' ORDER BY nom ASC;</p>
    <hr>
    <h4 class="titreExo">Exercice 12 :<h4>
      <p class="consigne">Afficher tous les clients dont le nom n'est pas dans cette liste. Les trier par nom.</p>
      <p class="reponse">SELECT * FROM clients WHERE nom NOT IN('Demers','Dubeau','Faubert','Lacroix','Michaud','Rivière','Soucy','Tritant') ORDER BY nom ASC;</p>
    <hr>
  </div>
</body>
</html>
