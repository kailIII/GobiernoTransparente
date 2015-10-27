<?php


require_once('common-multi.php');




$csv['remuneraciones']=file($_FILES['archivo_remuneraciones']['tmp_name']);
$csv['bienios']=file($_FILES['archivo_bienios']['tmp_name']);
$csv['incentivos']=file($_FILES['archivo_incentivos']['tmp_name']);

$data['remuneraciones']=parseCSV($csv['remuneraciones'],$_POST['tipo_remuneraciones']);
$data['bienios']=parseCSV($csv['bienios'],$_POST['tipo_bienios']);
$data['incentivos']=parseCSV($csv['incentivos'],$_POST['tipo_incentivos']);

//print_r($data);

foreach($data as $key=>$val) {
    $_SESSION['data'][$key]  = $val;
    //for($i=1;$i<count($data);$i++) {
    //    if (eregi(utf8_decode($val),$data[$i][$filtro]))
    //        $_SESSION['data'][$sv][$key][]=$data[$i];
    //}
}

//print_r($_SESSION['data']);


// $_SESSION['personal_honorarios']="SI";


html_header("CSV: Generador de páginas");

//foreach($subsecciones as $key=>$val){
    echo 'La información se descarga de 1 página';
    echo '<ul>';
    echo '<li><a href="remuneraciones-c.php">remuneraciones.html</a></li>';
    echo '</ul>';
    echo '<br />';
    echo '<br />';
//}

?>




<?php echo html_button($_SESSION['back']); ?>


<?php  html_footer();  ?>
