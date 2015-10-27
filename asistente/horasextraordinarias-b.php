<?php


require_once('common-multi.php');
require_once('slug.php');


$nombre=$_POST['nombre'];
$nombre_archivo=generar_slug($nombre);

$csv=file($_FILES['archivo']['tmp_name']);

$data=parseCSV($csv,$_POST['tipo']);


//print_r($data);

//foreach($data as $key=>$val) {
    $_SESSION['data']['horasextraordinarias'][$nombre_archivo]  = $data;
    //for($i=1;$i<count($data);$i++) {
    //    if (eregi(utf8_decode($val),$data[$i][$filtro]))
    //        $_SESSION['data'][$sv][$key][]=$data[$i];
    //}
//}



// $_SESSION['personal_honorarios']="SI";


html_header("CSV: Generador de páginas");

//foreach($subsecciones as $key=>$val){
    echo 'La información se descarga de 1 página';
    echo '<ul>';
    echo '<li><a href="horasextraordinarias-c.php?nombre='.urlencode($nombre).'&nombre_archivo='.$nombre_archivo.'">'.$nombre_archivo.'.html</a></li>';
    echo '</ul>';
    echo '<br />';
    echo '<br />';
//}

?>




<?php echo html_button($_SESSION['back']); ?>


<?php  html_footer();  ?>
