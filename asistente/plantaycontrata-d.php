<?php
require_once "common-multi.php";

$pag=$_GET['pag'];


//Para descargar
if ($depurar!=1) {
  $arch=($pag>1)?"per_contrata-$pag.html":"per_contrata.html";
  header("Content-Disposition: attachment; filename=\"$arch\"");
}



$_SESSION['personal_contrata']="SI"; 


html_header("Dotaci&oacute;n a Contrata");

$csv=arrayPagina($_SESSION['data']['contrata'],$pag-1);

if (getNumPags($_SESSION['data']['contrata'])>1) {
  echo "<center>\n";
  echo ($pag==1)?"1":"<a href='per_contrata.html'>1</a>";
  for($i=2;$i<=getNumPags($_SESSION['data']['contrata']);$i++) {
    echo ($i==$pag)?" - $i":" - <a href='per_contrata-$i.html'>$i</a>";
  }
  echo "</center><br/>\n";
}

?>

A continuaci&oacute;n se presentan las contrataciones
a contrata de este Organismo (<?php echo $_SESSION['nombre']; ?>).

<br />
<br />

En la información publicada en los meses de febrero y marzo no se considera la
asignación de modernización, pues el monto de sus componentes por desempeño
institucional y colectivo sólo se determinará en marzo de 2013.
En consecuencia, dicha asignación se informará sólo a partir de la
actualización de abril.

<br/>
<br/>


<script type="text/javascript">
 $(document).ready(function () {                         
   $('tbody tr').quicksearch({
     stripeRowClass: ['odd', 'even'],
     position: 'before',
     attached: 'table',
     labelText: 'Buscar en esta p&aacute;gina: ',
     delay: 50                                       
   });                     
 });
</script>
<?php


echo acentosHTML(
  ArrayToTable( ArrayProject($csv,array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15)),
    15,array(11),array('Si'),array('No')
  )
);

echo '<br />';
if (getNumPags($_SESSION['data']['contrata'])>1) {
  echo "<center>\n";
  echo ($pag==1)?"1":"<a href='per_contrata.html'>1</a>";
  for($i=2;$i<=getNumPags($_SESSION['data']['contrata']);$i++) {
    echo ($i==$pag)?" - $i":" - <a href='per_contrata-$i.html'>$i</a>";
  }
  echo "</center><br/>\n";
}
?>

<div id="footnotes">
<?=acentosHTML(nl2br($_SESSION['footnotes']['contrata']))?>
</div>

<br />

<?php
echo html_volver("../contrata_historico.html");

html_footer("codigo".trim( alfanum($_SESSION['sigla']) )." personal_contrata ".date('Y-m-d'));
?>
