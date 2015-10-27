<?php

require_once "common-multi.php";

$titulo=$_POST['titulo'];
$nombre=$_POST['nombre'];
$msg2=$_POST['msg2'];
$sv=$_POST['sv'];
$pag=$_POST['pag'];
$cols=$_POST['cols'];
$links=$_POST['links'];
$str_enlace=$_POST['str_enlace'];
$str_noenlace=$_POST['str_noenlace'];
$backto=$_POST['backto'];
$sub=(isset($_POST['sub']))?$_POST['sub']:"";
$data=($sub!="")?$_SESSION['data'][$sub]:$_SESSION['data'];
$footnotes=(isset($_POST['footnotes']) && $_POST['footnotes']!='')?$_POST['footnotes']:"";


$_SESSION[$sv]="SI";



//Nombre del archivo - descarga
if ($depurar!=1) {
  $arch=($pag>0)?"$nombre-".($pag+1).".html":"$nombre.html";
  header("Content-Disposition: attachment; filename=\"$arch\"");
}


//Preambulo informacional: titulo, mensaje, fecha...
html_header(acentosHTML($titulo));




?>
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

echo acentosHTML($msg2);
//echo "<br/><br/><h3><b>&Uacute;ltima aactualizaci&oacute;n:</b>";
//echo date("d/m/Y")."</h3><br/><br/>";
echo '<br /><br />';

//Indice de paginas similares
$csv=arrayPagina($data,$pag);
//Simplificamos la primera fila
$z=count($csv[0]);
for($i=0;$i<$z;$i++) {
  if (trim($csv[0][$i])!="")
    $cols=$i+1;
}


if (getNumPags($data)>1) {
  echo "<center>\n";
  echo ($pag==0)?"1":"<a href='$nombre.html'>1</a>";
  for($i=2;$i<=getNumPags($data);$i++) {
    echo ($i==$pag+1)?" - $i":" - <a href='$nombre-$i.html'>$i</a>";
  }
  echo "</center><br/>\n";
}


//Escribiendo la tabla
$alink=-1;
if (trim($links)!="") $alink=explode(",",$links);
$astr_noenlace=-1;
if (trim($str_noenlace)!="") $astr_noenlace=explode(",",$str_noenlace);
$astr_enlace=-1;
if (trim($str_enlace)!="") $astr_enlace=explode(",",$str_enlace);

echo acentosHTML(ArrayToTable($csv,$cols,$alink,$astr_enlace,$astr_noenlace));
echo acentosHTML("<div id='footnotes'>".nl2br($footnotes)."</div>");


//Indice del fondo
echo "<br/>\n";
if (getNumPags($data)>1) {
  echo "<center>\n";
  echo ($pag==0)?"1":"<a href='$nombre.html'>1</a>";
  for($i=2;$i<=getNumPags($data);$i++) {
    echo ($i==$pag+1)?" - $i":" - <a href='$nombre-$i.html'>$i</a>";
  }
  echo "</center><br/>\n";
}

echo html_volver($backto);

html_footer("codigo".trim( alfanum($_SESSION['sigla']) )." ".$sv." ".date('Y-m-d'));

?>
