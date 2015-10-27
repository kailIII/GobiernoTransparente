<?php

require_once "common.php";

$txt="";
if (!ereg("^ *$",$_POST['url_ministro_intereses'])) {
	$_SESSION['url_ministro_intereses']=$_POST['url_ministro_intereses'];
	$txt="<li>Intereses del Ministro(a)</li>";
} else {
	unset($_SESSION['url_ministro_intereses']);
}
if (!ereg("^ *$",$_POST['url_ministro_patrimonio'])) {
	$_SESSION['url_ministro_patrimonio']=$_POST['url_ministro_patrimonio'];
	$txt="$txt<li>Patrimonio del Ministro(a)</li>";
} else {
	unset($_SESSION['url_ministro_patrimonio']);
}

if (!ereg("^ *$",$_POST['url_subsecretario_intereses'])) {
	$_SESSION['url_subsecretario_intereses']=$_POST['url_subsecretario_intereses'];
	$txt="<li>Intereses del Subsecretario(a)</li>";
} else {
	unset($_SESSION['url_subsecretario_intereses']);
}
if (!ereg("^ *$",$_POST['url_subsecretario_patrimonio'])) {
	$_SESSION['url_subsecretario_patrimonio']=$_POST['url_subsecretario_patrimonio'];
	$txt="$txt<li>Patrimonio del Subsecretario(a)</li>";
} else {
	unset($_SESSION['url_subsecretario_patrimonio']);
}

html_header("Sitios externos (actualizado)");
?>

Los enlaces han sido actualizados.
<ul>
<?php echo $txt; ?>
</ul><br/>

<?php echo html_button($_SESSION['back']); ?>

<?php  html_footer(); ?>
