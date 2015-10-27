<?php


require_once('common-multi.php');


//Para descargar
//if ($depurar!=1)
//header('Content-Disposition: attachment; filename="per_honorarios.html"');


$csv=file($_FILES['archivo']['tmp_name']);
$data=parseCSV($csv,$_POST['tipo']);
$_SESSION['data']['planta'][]   = $data[0];
$_SESSION['data']['contrata'][] = $data[0];
for($i=1;$i<count($data);$i++) {
  if (eregi("Planta",$data[$i][0]))
    $_SESSION['data']['planta'][]=$data[$i];
  if (eregi("Contrata",$data[$i][0]))
    $_SESSION['data']['contrata'][]=$data[$i];
}

$_SESSION['data']['planta'][0]=file('per_planta_rep.txt');
$_SESSION['data']['contrata'][0]=file('per_contrata_rep.txt');


$_SESSION['footnotes']['planta']=$_POST['footnotes'];
$_SESSION['footnotes']['contrata']=$_POST['footnotes'];

// $_SESSION['personal_honorarios']="SI"; 


html_header("CSV: Generador de Planta y a Contrata");

?>

<h2>Dotaci&oacute;n de Planta</h2>

La informaci&oacute;n se descarga de
 <?php echo getNumPags($_SESSION['data']['planta']); ?> 
 p&aacute;gina(s).

<ul>
<li><a href="plantaycontrata-c.php?pag=1">per_planta.html</a></li>
<?php
for($i=2;$i<=getNumPags($_SESSION['data']['planta']);$i++)
 echo "<li><a href=\"plantaycontrata-c.php?pag=$i\">per_planta-$i.html</a></li>\n";
?>
</ul>

<br/><br/>


<h2>Dotaci&oacute;n de Contrata</h2>

La informaci&oacute;n se descarga de
 <?php echo getNumPags($_SESSION['data']['contrata']); ?> 
 p&aacute;gina(s).

<ul>
<li><a href="plantaycontrata-d.php?pag=1">per_contrata.html</a></li>
<?php
for($i=2;$i<=getNumPags($_SESSION['data']['contrata']);$i++)
 echo "<li><a href=\"plantaycontrata-d.php?pag=$i\">per_contrata-$i.html</a></li>\n";
?>
</ul>

  <br/><br/>
<?php echo html_button($_SESSION['back']); ?>


<?php  html_footer();  ?>
