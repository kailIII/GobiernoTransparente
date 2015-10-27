<?php

require_once "common.php";

$_SESSION['encargado']    				= acentosHTML( $_POST['encargado'] );
$_SESSION['contacto_transparencia']     = acentosHTML( $_POST['contacto'] );


html_header("Contacto encargado de Transparencia (actualizados)");

?>

Los datos del contacto
han sido actualizados.


<br/><br/>
<?php
echo html_button($_SESSION['back']);
?>


<?php  echo html_footer(); ?>
