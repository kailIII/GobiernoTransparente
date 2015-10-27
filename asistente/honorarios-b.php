<?php


require_once('common-multi.php');


//Para descargar
//if ($depurar!=1)
//header('Content-Disposition: attachment; filename="per_honorarios.html"');

$csv=file($_FILES['archivo']['tmp_name']);
$_SESSION['data']=parseCSV($csv,$_POST['tipo']);


// $_SESSION['personal_honorarios']="SI"; 


html_header("CSV: Generador de personal a honorarios");

?>


La informaci&oacute;n se descarga de
 <?php echo getNumPags($_SESSION['data']); ?> 
p&aacute;gina(s).

<ul>
<li><a href="honorarios-c.php?pag=1">per_honorarios.html</a></li>
<?php
for($i=2;$i<=getNumPags($_SESSION['data']);$i++)
 echo "<li><a href=\"honorarios-c.php?pag=$i\">per_honorarios-$i.html</a></li>\n";
?>
</ul>

<br/>
<?php echo html_button($_SESSION['back']); ?>


<?php  html_footer();  ?>
