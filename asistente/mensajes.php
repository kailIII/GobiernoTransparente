<?php

require_once "common.php";

html_header("Generador de p&aacute;gina de mensaje (HTML)");

?>

Complete los campos para generar una p&aacute;gina de mensaje con el
estilo de Transparencia.
<br/><br/><br/>

<form method="post" action="mensajes-b.php" name="frm">
 T&iacute;tulo de la p&aacute;gina:<br/>
 &nbsp; <input type="text" name="titulo" size="40"/><br/><br/>
 Mensajes propuestos:<br/>
 &nbsp; <select>
   <option onclick="frm.texto.value='Esta informaci&oacute;n se encuentra restringida por seg&uacute;n lo dispuesto por el art&iacute;culo 436 del C&oacute;digo de Justicia Militar.';">
     Impedimento legal: Fuerzas Armadas
   </option>

   <option onclick="frm.texto.value='La informaci&oacute;n asociada a este campo se encuentra bajo causal de reserva o secreto en los t&eacute;rminos establecidos por la ley N&deg; 20.285.';">
     Impedimento legal: Otros organismos e instituciones
   </option>

   <option onclick="frm.texto.value='No existen antecedentes asociados a este campo durante el per&iacute;odo solicitado.';">
     No hubo antecedentes durante el per&iacute;odo, pero pudo haber.
   </option>

   <option onclick="frm.texto.value='Este organismo no genera antecedentes para el &iacute;tem consultado.';">
     El &oacute;rgano o servicio no genera antecedentes.
   </option>

 </select><br/><br/>
 Mensaje:<br/>
 &nbsp; <textarea name="texto" cols="40" rows="6"></textarea><br/><br/>
 <input type="submit" value="Procesar" />
</form>

<br/><br/>
<?php echo html_button($_SESSION['back']); ?>

<?php
html_footer();
?>
