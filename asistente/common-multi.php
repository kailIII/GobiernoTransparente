<?php

require_once "common.php";
require_once "common-msg.php";

function formularioMultipagina($titulo,$msg1,$msg2,$cols,$links,$nombre,$sv,$backto,$headings="",$footnotes=NULL,$str_enlace=array(),$str_noenlace=array(),$showbackbtn = true) {

$lnk=implode(",",$links);
$str_enlace=implode(",",$str_enlace);
$str_noenlace=implode(",",$str_noenlace);

$retStr = "
 <form method='post' action='multi-list.php' enctype='multipart/form-data'>

   <input  type='hidden'  name='nombre' value='$nombre' />
   <input  type='hidden'  name='titulo' value='$titulo' />
   <input  type='hidden'  name='msg1'   value='$msg1'   />
   <input  type='hidden'  name='msg2'   value='$msg2'   />
   <input  type='hidden'  name='sv'     value='$sv'     />
   <input  type='hidden'  name='cols'   value='$cols'   />
   <input  type='hidden'  name='links'  value='$lnk'    />
   <input  type='hidden'  name='str_enlace'  value='$str_enlace'    />
   <input  type='hidden'  name='str_noenlace'  value='$str_noenlace'    />
   <input  type='hidden'  name='backto' value='$backto' />
   <input  type='hidden'  name='headings'  value='$headings'    />

   <input type='file' name='archivo' />
   <select name='tipo'>
     <option value='excel' selected>CSV generado por Excel</option>
     <option value='calc'>CSV generado por OpenOffice</option>
   </select>
   <br/>".
 ($footnotes!==NULL?"<br />Notas a pie de página<br /><textarea rows='10' cols='60' name='footnotes'>".$footnotes."</textarea>":"<input type='hidden' name='footnotes' value='' />")
 ."<br /><br />
   <input type='submit' value='Procesar' />";
	if($showbackbtn){
		  $retStr .= "<br/><br/>".html_button($_SESSION['back']);
	}

	$retStr .= "</form>";
	return $retStr;
}



// Recorte de arreglo
function arrayPagina($array,$pagina) {
global $filas_por_pagina;
$arr[]=$array[0];
for($i=1+$pagina*$filas_por_pagina; $i<=($pagina+1)*$filas_por_pagina; $i++)
  if (isset($array[$i])) $arr[]=$array[$i];
return $arr;
}


// Numero paginas
function getNumPags($array) {
global $filas_por_pagina;
return ceil( (count($array)-1.0)/$filas_por_pagina );
}



?>
