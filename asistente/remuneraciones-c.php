<?php
require_once "common-multi.php";


$_SESSION['remuneraciones']="SI";

$depurar=0;
//Para descargar
if ($depurar!=1) {
  $arch="remuneraciones.html";
  header("Content-Disposition: attachment; filename=\"$arch\"");
}
?>

<?php echo html_header('Escala de Remuneraciones')?>

<?=acentosHTML('A continuación se presenta el detalle de las remuneraciones de planta y contrata de este Organismo ('.$_SESSION['nombre'].'), según estamento, grado o jornada.')?>

<br/>
<br/>
<div id="remuneraciones">
<strong>Escala de asignaciones permanentes</strong>
<br/>


<script type="text/javascript">
 $(document).ready(function () {
   $('#remuneraciones tbody tr').quicksearch({
     stripeRowClass: ['odd', 'even'],
     position: 'before',
     attached: '#remuneraciones table',
     labelText: 'Buscar en esta p&aacute;gina: ',
     delay: 50
   });
 });
</script>



<?php

$csv=arrayPagina($_SESSION['data']['remuneraciones'],0);

$cols=count($csv[0]);

echo acentosHTML(
  ArrayToTable( $csv,$cols,-1)
);
?>

<br />
Nota
<br />
<?=acentosHTML('
<ol>
    <li>La presente escala comprende la suma mensual de las contraprestaciones en dinero que para cada grado (o contrato por jornadas) debe recibir un funcionario en razón de su empleo o función pagadas habitual y permanentemente, sin los descuentos legales que correspondan (remuneración bruta).</li>
   <li>No se contemplan las contraprestaciones eventuales y accidentales y las afectas a fines determinados, tales como: la asignación familiar, los aguinaldos y las horas extraordinarias, cuando no tienen el carácter de habituales y permanentes, y ciertos derechos estatutarios que constituyen beneficios indemnizatorios, como los viáticos y el bono de escolaridad. Esto de acuerdo a lo establecido por la Contraloría General de la República (entre otros, dictamen N° 25.275 de 2005).</li>
   <li>Asimismo, no se consignan aquellas contraprestaciones que correspondan en atención a la situación personal de cada funcionario, tales como los bienios (antigüedad). Éstas se informan, respecto de cada funcionario en particular, en la plantilla de personal que corresponda.</li>
   <li>Para las asignaciones que no son pagadas mensualmente, se ha calculado un promedio mensual para cada grado (asignación mensualizada).</li>
</ol>
');?>
</div>

<br/>
<br/>


<div id="bienios">
<strong>Escala de bienios</strong>
<br/>
<script type="text/javascript">
 $(document).ready(function () {
   $('#bienios tbody tr').quicksearch({
     stripeRowClass: ['odd', 'even'],
     position: 'before',
     attached: '#bienios table',
     labelText: 'Buscar en esta p&aacute;gina: ',
     delay: 50
   });
 });
</script>





<?php

$csv=arrayPagina($_SESSION['data']['bienios'],0);

$cols=count($csv[0]);

echo acentosHTML(
  ArrayToTable( $csv,$cols,-1)
);
?>
</div>








<br/>
<br/>

<div id="incentivos">
<strong>Escala de incentivos y metas</strong>
<br/>

<script type="text/javascript">
 $(document).ready(function () {
   $('#incentivos tbody tr').quicksearch({
     stripeRowClass: ['odd', 'even'],
     position: 'before',
     attached: '#incentivos table',
     labelText: 'Buscar en esta p&aacute;gina: ',
     delay: 50
   });
 });
</script>




<?php

$csv=arrayPagina($_SESSION['data']['incentivos'],0);

$cols=count($csv[0]);

echo acentosHTML(
  ArrayToTable( $csv,$cols,-1)
);
?>
</div>


<?php
echo html_volver("javascript:history.back()");

html_footer("codigo".trim( alfanum($_SESSION['sigla']) )." remuneraciones ".date('Y-m-d'));
?>
