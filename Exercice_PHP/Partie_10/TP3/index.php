<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
$portrait1 = array('name'=>'Victor', 'firstname'=>'Hugo', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
$portrait2 = array('name'=>'Jean', 'firstname'=>'de La Fontaine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
$portrait3 = array('name'=>'Pierre', 'firstname'=>'Corneille', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
$portrait4 = array('name'=>'Jean', 'firstname'=>'Racine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');
function Por1($portrait1){
  foreach($portrait1 as $element1){
    return $element1 [firstname];
  }
}
echo Por1($portrait1);

//foreach($portrait1 as $element1){
//    echo $element1 . '<br/>';
//  }
//foreach($portrait2 as $element2){
//  echo $element2 . '<br/>';
//}
//foreach($portrait3 as $element3){
//    echo $element3 . '<br/>';
//  }
//foreach($portrait4 as $element4){
//  echo $element4 . '<br/>';
//}
  ?>

  </body>
</html>
