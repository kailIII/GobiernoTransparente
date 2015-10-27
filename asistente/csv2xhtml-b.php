<?php


require_once('common.php');


$tablas="error";
// Esto evita problemas mayores
if ( isset($_FILES['archivo']['tmp_name']) &&
     is_uploaded_file($_FILES['archivo']['tmp_name']) ) {
 $tablas="";
 $init=0;
 $csv=file($_FILES['archivo']['tmp_name']);
 $arr=parseCSV2($csv,$_POST['tipo']);
 foreach($arr as $x) {
  $tablas="$tablas<tr>\n ";
  if ($x != array()) {
   foreach($x as $y) {
      if ($init>0)
        $tablas="$tablas<td> $y </td>";
      else
        $tablas="$tablas<th> $y </th>";
    }
    $init=1;
  }
  $tablas="$tablas\n</tr>\n";
 }
}


html_header("Conversor CSV a XHTML: resultado");

?>


A continuaci&oacute;n se presenta el c&oacute;digo de
la tabla generada y su visualizaci&oacute;n.



<br/>
<br/>


<table class="tabla">
<?php echo "$tablas"; ?>
</table>



<br/>
<br/>
C&oacute;digo fuente:
<br/>
<br/>



<textarea cols="80" rows="20">
<table class="tabla">
<?php echo "$tablas"; ?>
</table>
</textarea>


<br/>
<br/>



<?php  html_footer();  ?>
