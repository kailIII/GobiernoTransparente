<?php

require_once "common.php";
html_header("Editor de Estructuras Org&aacute;nicas")

?>

<table border=0 width="100%">
<tr>
<td>

Este asistente le permitir&aacute; construir estructuras
org&aacute;nicas consistentes con el formato de Gobierno<b>Transparente</b>.
<br/><br/>

<b>Opciones</b>: Cada nivel, salvo la base, tiene tres opciones: "editar", "borrar" y
"nuevo subnivel". La base s&oacute;lo admite "nuevo subnivel". (Refi&eacute;rase
a la imagen de la derecha.)
<br/><br/>

<b>Editar</b>: Esta instrucci&oacute;n permite entregar cierta
informaci&oacute;n para el diagrama: un t&iacute;tulo, una descripci&oacute;n
(opcional) y un enlace (opcional). Si la descripci&oacute;n es entregada,
aparecer&aacute; en el diagrama. Si el enlace es entregado, el nivel
ser&aacute; un enlace a la direcci&oacute;n URL especificada.
<br/><br/>

<b>Borrar</b>: La acci&oacute;n de borrar un nivel tambi&eacute;n borra
todos los subniveles que el nivel ten&iacute;a. Por eso, sea cuidadoso
al borrar niveles.
<br/><br/>

<b>Nuevo subnivel</b>: En cada
nivel se pueden agregar nuevos subniveles con s&oacute;lo un clic del
rat&oacute;n. Cada subnivel aparecer&aacute; sin informaci&oacute;n,
conteniendo un "?" como nombre (vea la imagen de la derecha).
Posteriormente, se debe proceder a "editar" los datos del nivel.

</td>
<td width="280" align="center" valign="middle">
<br/><img src="organica-img1.png" /><br/><br/>
</td>
</tr>
</table>
<br/><br/>

<h2>M&aacute;xima autoridad</h2>
A continuaci&oacute;n ingrese el cargo de la m&aacute;xima autoridad
del Organismo. &Eacute;ste servir&aacute; como base para el diagrama
de la estructura org&aacute;nica.
<br/><br/>

<form action="organica-b.php" method="post" name="frm" onsubmit="return (frm.cargo.value!='')">

<table class="tabla">
<tr>
 <td>Indique el cargo m&aacute;s alto del Organismo: &nbsp; </td>
 <td><input type="text" name="cargo" value="" size="50"/></td>
 <td>(Ej: Director General, Comandante en Jefe, Subsecretario, etc.)
</tr>
<tr>
 <td> </td>
 <td colspan="2">
   <input type="submit" value="Comenzar" onsubmit="return (frm.cargo.value!='')" onclick="if (frm.cargo.value=='') alert('Debe indicar el cargo m&aacute;s alto.');" />
 </td>
</tr>
</table>
</form>

<br/><br/>

<?php
echo html_button($_SESSION['back']);
html_footer();
?>
