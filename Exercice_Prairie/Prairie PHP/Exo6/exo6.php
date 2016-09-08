<?php
$tableau=array("HTML","CSS","Javascript","PHP");
function tri($langage){
  sort($langage);
  return $langage;
}
$triretour = array();
$triretour = tri($tableau);
foreach($triretour as $retour){
  echo $retour;
}
function fusiontableau($fusionlang){
  return implode(" ; ",$fusionlang);
}
echo fusiontableau($tableau);
?>
