<?php

require_once "common.php";

$_SESSION['nombre']    = acentosHTML( $_POST['nombre'] );
$_SESSION['sigla']     = acentosHTML( $_POST['sigla'] );
$_SESSION['rut']       = acentosHTML( $_POST['rut'] );
$_SESSION['direccion'] = acentosHTML( $_POST['direccion'] );
$_SESSION['fono']      = acentosHTML( $_POST['fono'] );
$_SESSION['url']       = acentosHTML( $_POST['url'] );
$_SESSION['email']     = acentosHTML( $_POST['email'] );
$_SESSION['cweb']      = acentosHTML( $_POST['cweb'] );
$_SESSION['logo']      = acentosHTML( $_POST['logo'] );

html_header("Datos del Organismo (actualizados)");

?>

Los datos de su organismo
han sido actualizados.


<br/><br/>
<?php
echo html_button($_SESSION['back']);
?>


<?php  echo html_footer(); ?>
