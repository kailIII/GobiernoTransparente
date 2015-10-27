<?php

require_once "common.php";

html_header("URL: Sitios externos");

?>


<form action='url_bibcongreso-b.php' method='post' name='frm'>

<table class="tabla">
<tr>
<th>Biblioteca del Congreso Nacional </th>
</tr>
<tr>
<td>
Si la informaci&oacute;n sobre actos, documentos y normativa exigidos
por la ley N&deg; 20.285 en sus art&iacute;culos 6&deg; y 7&deg; b), c) y g) es
elaborada en convenio con la Biblioteca del Congreso Nacional,
ingrese la URL correspondiente aqu&iacute;.<br/><br/>
 <input type='text' value='<?php echo isset($_SESSION['url_bibcongreso'])?$_SESSION['url_bibcongreso']:""; ?>'
  name='url_bibcongreso' size='50' />
 <input type="button" value="Verificar"
onclick="window.open(frm.url_bibcongreso.value, '_NEW', 'width=550,height=400');" />
 (Ej. http://www.bcn.cl/ )
</td>
</tr>

<tr><td></td></tr>

<tr>
<th>Diario Oficial</th>
</tr>
<tr>
<td>
Si la informaci&oacute;n sobre actos, documentos y normativa exigidos 
por la ley N&deg; 20.285 en sus art&iacute;culos 6&deg; y 7&deg; b), c) y g) es
elaborada en convenio con el Diario Oficial, ingrese la URL
correspondiente aqu&iacute;.<br/><br/>
 <input type='text' value='<?php echo isset($_SESSION['url_diariooficial'])?$_SESSION['url_diariooficial']:""; ?>'
  name='url_diariooficial' size='50' />
 <input type="button" value="Verificar"
onclick="window.open(frm.url_diariooficial.value, '_NEW', 'width=550,height=400');" />
 (Ej. http://www.diariooficial.cl/ )
</td>
</tr>

<tr><td></td></tr>

<tr>
<td>
 <input type='submit' value='Actualizar' /> </td>
</tr>
</table>

</form>


<br/><br/>
<?php echo html_button($_SESSION['back']); ?>



<?php html_footer(); ?>
