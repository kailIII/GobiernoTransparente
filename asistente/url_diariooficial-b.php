<?php

require_once "common.php";

$_SESSION['url_diariooficial']=$_POST['url'];

html_header("Diario Oficial (actualizado)");
?>

La URL del Diario Oficial ha sido actualizada.

<br/><br/><a href='main.php' title='Volver'><img src='../material/images/btn-volver-main.png' alt='Volver' border='0'/></a>

<br/><br/>

<?php  html_footer(); ?>
