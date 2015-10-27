<?php

require_once "common-url.php";
require_once "common-msg.php";

html_header("URL: Declaraci&oacute;n de intereses y de patrimonio del Ministro(a) y Subsecretario(a)");

?>

Ingrese la URL del documento que contiene la declaraci&oacute;n de intereses y la declaraci&oacute;n de patrimonio de Ministro(a)s y Subsecretario(a)s.<br />
<br />
<br/>
<br />

<form action='url_patrimonio-b.php' method='post' name='frm'>

<table class="tabla">
<tr>
<th>Declaraci&oacute;n de Ministro(a) </th>
</tr>
<tr>
<td>
Ingrese la URL de la <strong>declaraci&oacute;n de intereses del Ministro(a)
</strong><br/><br/>
 <input type='text' value='<?php echo isset($_SESSION['url_ministro_intereses'])?$_SESSION['url_ministro_intereses']:""; ?>'
  name='url_ministro_intereses' size='50' />
 <input type="button" value="Verificar"
onclick="window.open(frm.url_ministro_intereses.value, '_NEW', 'width=550,height=400');" />
 (Ej. http://www.economia.cl/declaracion_intereses_min.pdf )
<br /><br />
Ingrese la URL de la <strong>declaraci&oacute;n de patrimonio del Ministro(a)</strong> <br/><br/>
 <input type='text' value='<?php echo isset($_SESSION['url_ministro_patrimonio'])?$_SESSION['url_ministro_patrimonio']:""; ?>'
  name='url_ministro_patrimonio' size='50' />
 <input type="button" value="Verificar"
onclick="window.open(frm.url_ministro_patrimonio.value, '_NEW', 'width=550,height=400');" />
 (Ej. http://www.economia.cl/declaracion_patrimonio_min.pdf )
</td>
</tr>


<tr>
<th>Declaraci&oacute;n de Subsecretario(a)</th>
</tr>
<tr>
<td>

Ingrese la URL de la <strong>declaraci&oacute;n de intereses del Subsecretario(a)</strong><strong></strong>
<br/><br/>
 <input type='text' value='<?php echo isset($_SESSION['url_subsecretario_intereses'])?$_SESSION['url_subsecretario_intereses']:""; ?>'
  name='url_subsecretario_intereses' size='50' />
 <input type="button" value="Verificar"
onclick="window.open(frm.url_diariooficial.value, '_NEW', 'width=550,height=400');" />
 (Ej. http://www.economia.cl/declaracion_intereses_subsec.pdf )
<br/><br/>
Ingrese la URL de la <strong>declaraci&oacute;n de patrimonio del Subsecretario(a)</strong> <br/><br/>
 <input type='text' value='<?php echo isset($_SESSION['url_subsecretario_patrimonio'])?$_SESSION['url_subsecretario_patrimonio']:""; ?>'
  name='url_subsecretario_patrimonio' size='50' />
 <input type="button" value="Verificar"
onclick="window.open(frm.url_diariooficial.value, '_NEW', 'width=550,height=400');" />
 (Ej. http://www.economia.cl/declaracion_patrimonio_subsec.pdf )
</td>
</tr>


<tr>
<td>
 <input type='submit' value='Actualizar' /> </td>
</tr>
</table>

</form>
<br /><br />

<?php 

echo html_button($_SESSION['back']);
echo html_footer();
?>