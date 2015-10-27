<?php

require_once "common.php";


html_header("Ingresar/Modificar Datos del Organismo");

?>


Complete el siguiente formulario. Con estos datos
podr&aacute; posteriormente generar una p&aacute;gina
principal de <b>Gobierno Transparente</b> de forma
autom&aacute;tica.<br/><br/>

<form method="post" action="datos-b.php">
<table class='tabla'>
<tr>
 <td>Nombre del Organismo &nbsp; </td>
 <td><input type='text' value='<?php echo $_SESSION['nombre']; ?>'
      name='nombre'></td>
 <td>(Ej. Servicio Nacional de Pesca)</td>
</tr>
<tr>
 <td>Sigla &nbsp; </td>
 <td><input type='text' value='<?php echo $_SESSION['sigla']; ?>'
      name='sigla'></td>
 <td>(Ej. SERNAPESCA)</td>
</tr>
<tr>
 <td>RUT &nbsp; </td>
 <td><input type='text' value='<?php echo $_SESSION['rut']; ?>'
      name='rut'></td>
 <td>(Ej. 11.111.111-1)</td>
</tr>
<tr>
 <td>Direcci&oacute;n &nbsp; </td>
 <td><input type='text' value='<?php echo $_SESSION['direccion']; ?>'
      name='direccion'></td>
 <td>(Ej. Victoria 2832, Valpara&iacute;so)</td>
</tr>
<tr>
 <td>Tel&eacute;fono de contacto &nbsp; </td>
 <td><input type='text' value='<?php echo $_SESSION['fono']; ?>'
      name='fono'></td>
 <td>(Ej. +56 32 2819 441)</td>
</tr>
<tr>
 <td>P&aacute;gina web (URL) &nbsp; </td>
 <td><input type='text' value='<?php echo $_SESSION['url']; ?>'
      name='url'></td>
 <td>(Ej. http://www.sernapesca.gob.cl)</td>
</tr>
<input type='hidden' name='email' value=''/>
<!--<tr>
 <td>Correo electr&oacute;nico de contacto &nbsp; </td>
 <td><input type='text' value='<?php echo $_SESSION['email']; ?>'
      name='email'></td>
 <td>(Ej. transparencia@sernapesca.gob.cl)</td>
</tr> -->
<tr>
 <td>P&aacute;gina web de contacto &nbsp; </td>
 <td><input type='text' value='<?php echo $_SESSION['cweb']; ?>'
      name='cweb'></td>
 <td>(Ej. http://www.probidadytransparencia.gob.cl/solicitudes)</td>
</tr>
<tr>
 <td>Enlace a logo de la instituci&oacute;n (80x80 pixeles)</td>
 <td><input type='text' value='<?php echo $_SESSION['logo']; ?>'
      name='logo'></td>
 <td>(Ej. http://www.probidadytransparencia.gob.cl/logo.jpg)</td>
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
