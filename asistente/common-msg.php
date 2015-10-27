<?php

require_once "common.php";

// Esta funcion HACE EL FORMULARIO PARA EL CASO EXCEPCIONAL
// DE LA INFORMACION PRIVILEGIADA
function formularioExcepcion($opciones,$titulo,$sv,$archivo,$textarea_readonly=false) {

if ($textarea_readonly)
	$textarea_readonly='readonly="readonly"';
else
	$textarea_readonly='';
	
$url_main = (isset($_GET['g']))? "generar.php" : "main.php";
$ret="

 <!--  -->
<form method='post' action='msg-proc.php' name='frm_$sv'>

 <input type='hidden' name='titulo' value='$titulo' />
 <input type='hidden' name='sv' value='$sv' />
 <input type='hidden' name='archivo' value='$archivo' />";

if($opciones){
	$ret .= "Textos predefinidos: &nbsp; 
	 <select name='sel' onchange='frm_$sv.texto.value=frm_$sv.sel.value;'>
	  <option value=''>-- Elija un texto --</option>
	";

	foreach($opciones as $k=>$v) {
	  $ret=$ret.acentosHTML("  <option value='$v'>$k</option>\n");
	}

	$ret=$ret." </select><br/>";
}

$ret .= "<textarea ".$textarea_readonly." name=\"texto\" cols=\"40\" rows=\"6\"></textarea><br/>
 <input type=\"submit\" value=\"Procesar\" />
</form>
<br/><br/>\n".html_button($_SESSION['back']);

return $ret;
}

?>
