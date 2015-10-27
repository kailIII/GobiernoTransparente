<?php

require_once "common.php";

html_header("Publicar Organigrama");

?>

Ingrese la URL de la imagen con estructura org&aacute;nica
de su Organismo (<?php echo $_SESSION['nombre'];?>).
Esta funcionalidad es alternativa a la del Generador de
Estructuras Org&aacute;nicas.<br/><br/>

La direcci&oacute;n URL debe apuntar a un archivo con
extensi&oacute;n .jpg, .jpeg, .png, .gif o .swf (flash).
De otra manera, el enlace entregado no ser&aacute; aceptado.

<br/><br/>

<script language="JavaScript">
function validez() {
  var S=document.frm.texto.value;
  var L=S.length;
  if (L<5) return (1==0);
  return (S.substr(L-4,4)==".png" || S.substr(L-4,4)==".jpg" || S.substr(L-5,5)==".jpeg" || S.substr(L-4,4)==".gif" || S.substr(L-4,4)==".swf" );
}
function ventana() {
  if (validez())
    window.open(document.frm.texto.value, "_NEW", "width=550,height=400");
  else
    alert('Debe ingresar una URL que referencie a una imagen. Extensiones admitidas: jpg, jpeg, png, gif y swf.');
}
</script>

<form name="frm" action="img_organica-b.php" method="post">
<table class="tabla">
<tr>
 <td>URL de la imagen: &nbsp; </td>
 <td>
   <input type='text' name='texto' value='' size='40'/>
   <input type='button' value='Verificar' 
    onclick='ventana();' /> &nbsp; 
 </td>
 <td>(Ej. http://www.gobiernotransparente.gob.cl/material/images/banner.gif )</td>
<tr>
 <td>Breve descripci&oacute;n: &nbsp; </td>
 <td>
   <textarea name='desc' cols='40' rows='5'></textarea>
 </td>
 <td>(Ej. La estructura org&aacute;nica de nuestro organismo... )</td>
<tr>
 <td>Dimensiones (opcional): </td>
 <td>
   Ancho: <input type="text" size="5" name="ancho" value=""/> 
   - Alto: <input type="text" size="5" name="alto" value=""/>
 </td>
 <td>(Si se deja en blanco, se omite en HTML. Ejs.<br/>
   - Ancho="600", Alto="" <br/>
   - Ancho="80%", Alto="" <br/>
   - Ancho="500", Alto="400" <br/>
   Es necesario especificarlas para animaciones flash.)
 </td>
</tr>
</tr>
 <td> </td>
 <td colspan="2">
  <input type='button' value='Generar'
  onclick='if (validez()) frm.submit(); else alert("URL no v&aacute;lida.");' />
 </td>
</tr>
</table>
</form>


<br/><br/>
<?php echo html_button($_SESSION['back']); ?>


<?php html_footer(); ?>
