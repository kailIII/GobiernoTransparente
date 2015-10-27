<?php

require_once "organica.inc";

html_header("Editar nivel");

$id=$_GET['n'];
$info=getInfo($_SESSION['data'],$id);

?>

Detalle la informaci&oacute;n de este nivel de la
estructura org&aacute;nica de su instituci&oacute;n
(<?php echo $_SESSION['nombre']; ?>).

<br/><br/>

<form action="organica2-b.php" method="post">
<input type="hidden" name="id" value="<?php echo $id; ?>"/>
<input type="hidden" name="funcion" value="" />
<table class="tabla">
<tr>
 <td>Nombre del nivel &nbsp; </td>
 <td colspan="2"><input type="text" name="titulo" size="60" value="<?php echo $info['titulo']; ?>" /></td>
</tr>
<tr>
 <td>Descripci&oacute;n (opcional) &nbsp;</td>
 <td colspan="2"><input type="text" name="glosa" value="<?php echo $info['glosa']; ?>" size="60" /></td>
</tr>
<tr>
 <td>Enlace (opcional) &nbsp;</td>
 <td colspan="2"><input type="text" name="url" value="<?php echo $info['url']; ?>" size="60" /></td>
</tr>
</table>
<input type="button" value="Cancelar" onclick="location.href='organica-b.php';"/>
<input type="submit" value="Modificar" />
</form>

<?php
html_footer();
?>
