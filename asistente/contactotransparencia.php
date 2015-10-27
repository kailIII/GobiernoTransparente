<?php

require_once "common.php";


html_header("Ingresar/Modificar Contacto encargado de Transparencia");

?>


Complete el siguiente formulario. <br/><br/>

<form method="post" action="contactotransparencia-b.php">
<table class='tabla'>
<tr>
 <td>Nombre completo &nbsp; </td>
 <td><input type='text' value='<?php echo (isset($_SESSION['encargado'])?$_SESSION['encargado']:''); ?>'
      name='encargado'></td>
 <td>(Ej. Juan Perez)</td>
</tr>
<tr>
 <td>Correo de contacto &nbsp; </td>
 <td><input type='text' value='<?php echo (isset($_SESSION['contacto_transparencia'])?$_SESSION['contacto_transparencia']:''); ?>'
      name='contacto'></td>
 <td>(Ej. ejemplo@gob.cl)</td>
</tr>


<tr>
 <td> </td>
 <td>
  <input type="submit" value="Actualizar" />
 </td>
 <td> </td>
</tr>

</table>
</form>

<br/> 

<?php echo html_button($_SESSION['back']); ?>

<br/><br/>



<?php  html_footer(); ?>
