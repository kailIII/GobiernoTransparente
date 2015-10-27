<?php
require_once "common-multi.php";

$pag=$_GET['pag'];
$cat=$_GET['cat'];
$cols=$_GET['cols'];
$links=$_GET['links'];
$titulo=$_GET['titulo'];
$msg2=$_GET['msg2'];
$sv=$_GET['sv'];
$combobox=$_GET['combobox'];
$msgfiltro=$_GET['msgfiltro'];
$filtro=$_GET['filtro'];
$showfiltrocol=$_GET['showfiltrocol'];
$subsecciones=$_SESSION['subsecciones'][$sv];

$_SESSION[$cat]="SI";
$_SESSION[$sv]="SI";

$depurar=0;
//Para descargar
if ($depurar!=1) {
  $arch=($pag>1)?"$cat-$pag.html":"$cat.html";
  header("Content-Disposition: attachment; filename=\"$arch\"");
}
?>

<?php echo html_header($titulo)?>

<?php
echo acentosHTML($msg2);
if(!$combobox)
    echo ' <strong>'.$subsecciones[$cat].'</strong>';
?>



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

   $(".filtroCategorias").change(function(){
       window.location=$(this).val()+".html";
   });
 });
</script>

<?php if($combobox){?>

<p style="text-align: center;">
    <?=$msgfiltro?>
    <select class="filtroCategorias">
        <?php
        foreach ($subsecciones as $key=>$val){
            echo '<option value="'.$key.'" '.($key==$cat?'selected="selected"':'').'>'.$val.'</option>';
        }
        ?>
    </select>
</p>
<?php }?>



<?php
$csv=arrayPagina($_SESSION['data'][$sv][$cat],$pag-1);

if (getNumPags($_SESSION['data'][$sv][$cat])>1) {
  echo "<center>\n";
  echo ($pag==1)?"1":"<a href='$cat.html'>1</a>";
  for($i=2;$i<=getNumPags($_SESSION['data'][$sv][$cat]);$i++) {
    echo ($i==$pag)?" - $i":" - <a href='$cat-$i.html'>$i</a>";
  }
  echo "</center><br/>\n";
}

?>


<?php

/*
echo acentosHTML(
  ArrayToTable( ArrayProject($csv,array(1,2,3,4,5,6,7,8,9,10,11)),
    11,-1
  )
);
 */

if($showfiltrocol){
    echo acentosHTML(
      ArrayToTable( $csv,$cols,explode(',',$links))
    );
}
else{
    for($i=0;$i<$cols;$i++)
        if($i!=$filtro)
            $proj[]=$i;
    $csv=ArrayProject($csv, $proj);

    echo acentosHTML(
      ArrayToTable( $csv,$cols-1,explode(',',$links))
    );
}

echo '<br />';
if (getNumPags($_SESSION['data'][$sv][$cat])>1) {
  echo "<center>\n";
  echo ($pag==1)?"1":"<a href='$cat.html'>1</a>";
  for($i=2;$i<=getNumPags($_SESSION['data'][$sv][$cat]);$i++) {
    echo ($i==$pag)?" - $i":" - <a href='$cat-$i.html'>$i</a>";
  }
  echo "</center><br />\n";
}


echo html_volver("javascript:history.back()");

html_footer("codigo".trim( alfanum($_SESSION['sigla']) )." ".$cat." ".date('Y-m-d'));
?>
