<?php


require_once('common.php');


$nom="pagina";

if (isset($_FILES['archivo']['name'])) {
  $nom=$_FILES['archivo']['name'];
  $nom=explode(".",$nom);
  $nom=$nom[0];
}

if ($depurar!=1)
        header("Content-Disposition: attachment; filename=\"$nom.html\"");




$tablas="error";
// Esto evita problemas mayores
if ( isset($_FILES['archivo']['tmp_name']) &&
     is_uploaded_file($_FILES['archivo']['tmp_name']) ) {
 $tablas="";
 $init=0;
 $csv=file($_FILES['archivo']['tmp_name']);
 $arr=parseCSV($csv,$_POST['tipo']);

 //thead
 $tablas=" <thead>\n";
 $x=$arr[0];
 if ($x != array()) {
   foreach($x as $y) {
      $y=trim($y);
      $tablas="$tablas<th>$y</th>";
   }
 }
 $tablas="$tablas\n </thead>\n";

 //tbody
 $tablas="$tablas\n <tbody>\n";
 for($i=1;$i<count($arr);$i++) {
  $x=$arr[$i];
  $tablas="$tablas  <tr>\n   ";
  if ($x != array()) {
   foreach($x as $y) {
      $y=trim($y);
      $tablas="$tablas<td>$y</td>";
    }
  }
  $tablas="$tablas\n  </tr>\n";
 }
 $tablas="$tablas\n </tbody>";
}


html_header(acentosHTML($_POST['titulo']));

$desc=acentosHTML($_POST['descripcion']);

$desc=implode("<br/>",explode("\n",$desc));

echo $desc;

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


<br/>
<br/>


<table class="tabla">
<?php echo acentosHTML($tablas); ?>
</table>



<br/>
<br/>



<?php  html_footer();  ?>
