<?php

require_once "common.php";

function formularioURL($titulo,$mensaje,$sv,$anex="") {
$defurl=isset($_SESSION[$sv])?$_SESSION[$sv]:"";
//if($defurl=='SI')$defurl=''; //Parche feo
$ret="

<form action='url-proc.php' method='post' name='form_$sv'>

  <input type='hidden' name='titulo' value='$titulo'/>
  <input type='hidden' name='mensaje' value='$mensaje'/>
  <input type='hidden' name='sv' value='$sv'/>

  <input type='text' name='url' value='$defurl' size='40'/>
  <input type='button' value='Verificar' onclick='window.open(form_$sv.url.value, \"_NEW\", \"width=550,height=400\");' />
  <input type='submit' value='Actualizar' />
  $anex

</form>

<br/><br/>".html_button($_SESSION['back']);

return $ret;
}

?>
