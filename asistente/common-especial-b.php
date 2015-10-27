<?php


require_once('common-multi.php');
require_once('slug.php');

//Para descargar
//if ($depurar!=1)
//header('Content-Disposition: attachment; filename="per_honorarios.html"');
$filtro=$_POST['filtro'];
$showfiltrocol=$_POST['showfiltrocol'];
$msgfiltro=$_POST['msgfiltro'];
$cols=$_POST['cols'];
$links=$_POST['links'];
$titulo=$_POST['titulo'];
$msg2=$_POST['msg2'];
$sv=$_POST['sv'];
$headings=$_POST['headings'];
$combobox=$_POST['combobox'];


$csv=file($_FILES['archivo']['tmp_name']);

$data=parseCSV($csv,$_POST['tipo']);

if (trim($headings)!="")
    $data[0]=file(trim($_POST['headings']) );


//Vemos cuales serian las subsecciones
for($i=1;$i<count($data);$i++) 
    $subsecciones[$sv.'_'.generar_slug(utf8_encode($data[$i][$filtro]))]=utf8_encode($data[$i][$filtro]);
//A la primera subseccion le ponemos el nombre default
$subsecciones[$sv]=reset($subsecciones);
unset($subsecciones[key($subsecciones)]);
ksort($subsecciones);

foreach($subsecciones as $key=>$val){
    $_SESSION['data'][$sv][$key]=array();
}


foreach($subsecciones as $key=>$val) {
    $_SESSION['data'][$sv][$key][]   = $data[0];
    for($i=1;$i<count($data);$i++) {
        if (utf8_decode($val)==$data[$i][$filtro])
            $_SESSION['data'][$sv][$key][]=$data[$i];
    }
}

//print_r($_SESSION['data']);

$_SESSION['subsecciones'][$sv]=array();
foreach($subsecciones as $key=>$val)
    $_SESSION['subsecciones'][$sv][$key]=$val;

// $_SESSION['personal_honorarios']="SI";


html_header("CSV: Generador de páginas");

//echo '<h2>Página Índice</h2>';
//echo '<ul>';
//echo '<li><a href="common-especial-d.php?titulo='.urlencode($titulo).'&msg2='.urlencode($msg2).'&sv='.$sv.'">'.$sv.'_index.html</a></li>';
//echo '</ul>';

echo '<h2>Páginas de contenido</h2>';
echo '<ul>';
foreach($subsecciones as $key=>$val){
    //echo '<h2>'.$val.'</h2>';
    //echo 'La información se descarga de '.getNumPags($_SESSION['data'][$sv][$key]).' páginas';
    //echo '<ul>';
    echo '<li><a href="common-especial-c.php?pag=1&cat='.$key.'&cols='.$cols.'&links='.$links.'&titulo='.urlencode($titulo).'&msg2='.urlencode($msg2).'&sv='.$sv.'&msgfiltro='.$msgfiltro.'&filtro='.$filtro.'&showfiltrocol='.$showfiltrocol.'&combobox='.$combobox.'">'.$key.'.html</a></li>';
    for($i=2;$i<=getNumPags($_SESSION['data'][$sv][$key]);$i++)
        echo '<li><a href="common-especial-c.php?pag='.$i.'&cat='.$key.'&cols='.$cols.'&links='.$links.'&titulo='.urlencode($titulo).'&msg2='.urlencode($msg2).'&sv='.$sv.'&msgfiltro='.$msgfiltro.'&filtro='.$filtro.'&showfiltrocol='.$showfiltrocol.'&combobox='.$combobox.'">'.$key.'-'.$i.'.html</a></li>';
    //echo '</ul>';
    //echo '<br />';
    //echo '<br />';
}
echo '</ul>';

?>




<?php echo html_button($_SESSION['back']); ?>


<?php  html_footer();  ?>
