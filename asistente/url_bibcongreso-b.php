<?php

require_once "common.php";

$txt="";
if (!ereg("^ *$",$_POST['url_bibcongreso'])) {
	$_SESSION['url_bibcongreso']=$_POST['url_bibcongreso'];
	$txt="<li>Biblioteca del Congreso Nacional</li>";
} else {
	unset($_SESSION['url_bibcongreso']);
}
if (!ereg("^ *$",$_POST['url_diariooficial'])) {
	$_SESSION['url_diariooficial']=$_POST['url_diariooficial'];
	$txt="$txt<li>Diario Oficial</li>";
} else {
	unset($_SESSION['url_diariooficial']);
}

html_header("Sitios externos (actualizado)");
?>

Los enlaces han sido actualizados.
<ul>
<?php echo $txt; ?>
</ul><br/>

<?php echo html_button($_SESSION['back']); ?>

<?php  html_footer(); ?>
