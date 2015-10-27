<?php
require_once "common-multi.php";

$pag=$_GET['pag'];


//Para descargar
if ($depurar!=1) {
  $arch=($pag>1)?"per_honorarios-$pag.html":"per_honorarios.html";
  header("Content-Disposition: attachment; filename=\"$arch\"");
}



$_SESSION['personal_honorarios']="SI"; 


html_header("Dotaci&oacute;n a Honorarios");

$csv=arrayPagina($_SESSION['data'],$pag-1);

if (getNumPags($_SESSION['data'])>1) {
  echo "<center>\n";
  echo ($pag==1)?"1":"<a href='per_honorarios.html'>1</a>";
  for($i=2;$i<=getNumPags($_SESSION['data']);$i++) {
    echo ($i==$pag)?" - $i":" - <a href='per_honorarios-$i.html'>$i</a>";
  }
  echo "</center><br/>\n";
}

?>

A continuaci&oacute;n se presentan las contrataciones
a honorarios de este Organismo (<?php echo $_SESSION['nombre']; ?>).


<br/>
<br/>

<h3><b>&Uacute;ltima actualizaci&oacute;n:</b>
<?php echo date("d/m/Y"); ?> </h3>

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

echo acentosHTML(ArrayToTable($csv,11,-1));

echo "<br/>";

if (getNumPags($_SESSION['data'])>1) {
  echo "<center>\n";
  echo ($pag==1)?"1":"<a href='per_honorarios.html'>1</a>";
  for($i=2;$i<=getNumPags($_SESSION['data']);$i++) {
    echo ($i==$pag)?" - $i":" - <a href='per_honorarios-$i.html'>$i</a>";
  }
  echo "</center><br/>\n";
}


html_footer();
?>
