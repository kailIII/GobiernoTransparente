<?php

require_once "common.php";

html_header("Diario Oficial (link)");

?>

Ingrese la URL del Diario Oficial:


<br/><br/>


<form action='url_diariooficial-b.php' method='post' name='frm'>
 <input type='text' value='<?php echo isset($_SESSION['url_diariooficial'])?$_SESSION['url_diariooficial']:""; ?>'
  name='url' />
 <input type="button" value="Verificar"
onclick="window.open(frm.url.value, '_NEW', 'width=550,height=400');" />
 <input type='submit' value='Actualizar' />
</form>


<br/><br/><a href='main.php' title='Volver'><img src='../material/images/btn-volver-main.png' alt='Volver' border='0'/></a>



<?php html_footer(); ?>
