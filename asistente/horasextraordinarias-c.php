<?php
require_once "common-multi.php";

$nombre=$_GET['nombre'];
$nombre_archivo=$_GET['nombre_archivo'];

//$_SESSION['horasextraordinarias']="SI";

$depurar=0;
//Para descargar
if ($depurar!=1) {
  $arch=$nombre_archivo.'.html';
  header("Content-Disposition: attachment; filename=\"$arch\"");
}
?>

<?php echo html_header('Pago de horas extraordinarias')?>

A continuaci&oacute;n se presenta el detalle del pago de horas extraordinarias de <strong><?=$nombre?></strong>.

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

$csv=arrayPagina($_SESSION['data']['horasextraordinarias'][$nombre_archivo],0);

echo acentosHTML(
  ArrayToTable( $csv,7,-1)
);
?>



<br/>
<br/>





<?php
echo html_volver("javascript:history.back()");

html_footer("codigo".trim( alfanum($_SESSION['sigla']) )." remuneraciones ".date('Y-m-d'));
?>
