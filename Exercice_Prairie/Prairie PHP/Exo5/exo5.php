<?php
$string1 = "Ramsay est cool.";
$string2 = "Mais Oberyn était encore plus cool !";
function Mafonction($string1, $string2){
  return $string1."\n".$string2;
}
$return = Mafonction($string1, $string2);
echo $return;
 ?>
