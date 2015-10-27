<?php
require_once "common-multi.php";


$titulo=$_GET['titulo'];
$msg2=$_GET['msg2'];
$sv=$_GET['sv'];
/*
$pag=$_GET['pag'];
$cat=$_GET['cat'];
$cols=$_GET['cols'];
$links=$_GET['links'];


$msgfiltro=$_GET['msgfiltro'];
$subsecciones=$_SESSION['subsecciones'][$sv];

$_SESSION[$cat]="SI";
$_SESSION[$sv]="SI";
 * 
 */

$depurar=0;
//Para descargar
if ($depurar!=1) {
  $arch=$sv.'_index.html';
  header("Content-Disposition: attachment; filename=\"$arch\"");
}
?>

<?php echo html_header($titulo)?>

<?php echo acentosHTML($msg2) ?>


<br/>
<br/>


<script type="text/javascript">
 $(document).ready(function () {
   $('ul.listaIndex li').quicksearch({
     //stripeRowClass: ['odd', 'even'],
     position: 'before',
     attached: 'ul.listaIndex',
     labelText: 'Buscar en esta p&aacute;gina: ',
     delay: 50
   });


 });
</script>

<ul class="listaIndex">
<?php

foreach ($_SESSION['data'][$sv] as $key=>$val){
    echo '<li><a href="'.$key.'.html">'.utf8_encode($val[1][0]).'</a></li>';
}

?>
</ul>


<?php
echo '<br />';



echo html_volver("javascript:history.back()");

html_footer("codigo".trim( alfanum($_SESSION['sigla']) )." ".$sv." ".date('Y-m-d'));
?>
