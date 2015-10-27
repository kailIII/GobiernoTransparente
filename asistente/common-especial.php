<?php

require_once "common.php";
require_once "common-msg.php";
/*
 * Formulario especial para el caso donde se quiera filtrar por una categoria. Es decir, coloca un
 * combobox arriba de la tabla que cambia las paginas de acuerdo a la categoria.
 */
function formularioEspecial($titulo,$msg2,$filtro,$showfiltrocol,$cols,$links,$sv,$combobox=0,$msgfiltro='',$headings="") {

    $lnk=implode(",",$links);

    $output= '<form method="post" action="common-especial-b.php" enctype="multipart/form-data">';

    //foreach($subsecciones as $key=>$val)
    //    $output.= '<input type="hidden" name="subsecciones['.$key.']" value="'.$val.'" />';

    $output.='<input type="hidden" name="titulo" value="'.$titulo.'" />';
    $output.='<input type="hidden" name="msg2" value="'.$msg2.'" />';
    $output.='<input type="hidden" name="msgfiltro" value="'.$msgfiltro.'" />';
    $output.='<input type="hidden" name="filtro" value="'.$filtro.'" />';
    $output.='<input type="hidden" name="showfiltrocol" value="'.$showfiltrocol.'" />';
    $output.='<input type="hidden" name="cols" value="'.$cols.'" />';
    $output.='<input type="hidden" name="links" value="'.$lnk.'" />';
    $output.='<input type="hidden" name="sv" value="'.$sv.'" />';
    $output.='<input type="hidden" name="headings" value="'.$headings.'" />';
    $output.='<input type="hidden" name="combobox" value="'.$combobox.'" />';


    $output.='<input type="file" name="archivo" />
 <select name="tipo">
  <option value="excel" selected>CSV generado por Excel</option>
  <option value="calc">CSV generado por OpenOffice</option>
 </select>
 <br/>
 <input type="submit" value="Procesar" />
</form>
';

    return $output;

}



?>
