<?php

//Fuentes - se cargan 1 vez por eficiencia
$iso=file("codes.iso");
$win=file("codes.win");
$utf=file("codes.utf");
$htm=file("codes.htm");

//Reparando "file" si el salto de linea no es el del S.O.
$iso=str_replace(array("\n","\r"),array("",""),$iso);
$win=str_replace(array("\n","\r"),array("",""),$win);
$utf=str_replace(array("\n","\r"),array("",""),$utf);
$htm=str_replace(array("\n","\r"),array("",""),$htm);

//acentosHTML: convierte todo a HTML.
//$txt puede ser un string o un arreglo de strings.
function acentosHTML($txt) {
 global $utf, $iso, $win, $htm;
 $txt=str_replace($utf,$htm,$txt);
 $txt=str_replace($iso,$htm,$txt);
 $txt=str_replace($win,$htm,$txt);
 return $txt;
}

?>
