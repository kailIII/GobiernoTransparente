<?php

set_time_limit (600);
ini_set('memory_limit', '1024M');
ini_set("auto_detect_line_endings", true);

//Si el servidor no auspicia, yo lo hago!
header('Content-Type: text/html; charset=utf-8'); 


session_start();


//Colocar en uno si estamos estudiando lo generado por el sitio,
//para evitar descargar los archivos generados
$depurar=0;


//Filas por pagina
//$filas_por_pagina=500;
$filas_por_pagina=200;


//Object-count; para no repetir nombres de elementos html
$objcount=0;


//Sitio base - cambiable
$sitio="http://www.gobiernotransparente.gob.cl";

//Inicia la sesion con datos
if (!isset($_SESSION['nombre'])) {
 $_SESSION=array(
   'nombre' => '',
   'sigla' => '',
   'rut' => '',
   'fono' => '',
   'direccion' => '',
   'email' => '',
   'url' => '',
   'cweb' => '',
   'logo' => '',
   'back' => 'main.php'
 );
}


//Datos basicos de fecha
$para_mes=( date('m')+11 )%12;
$para_ano=(0+date('m') == 12)?date('Y')+1:date('Y');



//Parsea un arreglo obtenido de un archivo CSV usando
//la instruccion $csv=file("archivo"); y lo guarda en
//un arreglo tradicional bidimencional.
function parseCSV($csv,$tipo) {
 $del=";";
 if ($tipo=="calc") $del=",";
 //Retorno
 $row=array();
 $col=array();
 $cell="";
 $cachear=0;
 //Creamos $csv2
 $csv2=array();
 foreach($csv as $lin) {
   $csv2[]=explode($del,str_replace('""','"',$lin));
 }
 //Ubicacion dentro de $csv2: $i->fila, $j->columna
 $i=0;
 $j=0;
 while($i<count($csv2)) {

   $C=trim($csv2[$i][$j]);

   //Leemos cada celda del arreglo
   if ($cachear==0) {
     //Si esto es cierto, iniciamos una multicelda
     if (substr($C,0,1)=='"' && substr($C,strlen($C)-1,1)!='"') {
       $cell=substr($C,1);
       $cachear=1;
     } else { //Celda simple
       if (substr($C,0,1)=='"')
         $col[]=substr($C,1,strlen($C)-2);
       else
         $col[]=$C;
     }
   } else { //Ahora ya estamos en una multicelda
     if (substr($C,strlen($C)-1,1)=='"') {
       //Este es el termino de una multicelda
       $cachear=0;
       $col[]="$cell ".substr($C,0,strlen($C)-1);
     } else {
       if ($j>0) $cell="$cell $del ";
       $cell="$cell".$C;
     }
   }

   $j++;
   //Cuando hay una nueva linea
   if ($j>=count($csv2[$i])) {
     $i++;
     $j=0;
     if ($cachear==0) {
       $row[]=$col;
       $col=array();
     } else {
       $cell="$cell <br/> ";
     }
   }

 }
 return $row;
}





//Esta funcion limpia los acentos originales y los deja
//en formato HTML, o sea, con &*acute.
//Incluye la e�e (n tildada).
require_once "codes.php";





// F U N C I O N E S   X H T M L

// Boton de volver
function html_button($goto="main.php") {
  global $sitio,$objcount;
  $objcount++;
  return "<a href='$goto' onmouseout='MM_swapImgRestore()' onmouseover='MM_swapImage(\"volver$objcount\",\"\",\"$sitio/material/images/btn-volver-main2.png\",1)' ><img src='$sitio/material/images/btn-volver-main.png' alt='Volver' name='volver$objcount' width='114' height='36' border='0' /></a>";
}

function html_volver($goto="index.html") {
  global $sitio;
  return "<a href='$goto' onmouseout='MM_swapImgRestore()' onmouseover='MM_swapImage(\"volver\",\"\",\"$sitio/material/images/btn-volver-over.png\",1)' ><img src='$sitio/material/images/btn-volver-on.png' alt='Volver' name='volver' width='114' height='36' border='0' id='volver' /></a>";
}


// Esta funcion crea la cabecera de un HTML
// No retorna nada; modifica instantaneamente la salida
function html_header($title,$nombre=NULL,$sigla=NULL,$logo=NULL,$linksaccesibilidad=false) {
global $sitio;
$title=acentosHTML($title);
$nombre=acentosHTML($nombre);
$sigla=acentosHTML($sigla);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xml:lang="es" xmlns="http://www.w3.org/1999/xhtml" lang="es">

<head>
 <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
 <title>GobiernoTransparente - <?php echo preg_replace('/<.+/i','',$title) //Remuevo cualquier cosa que venga luego de un tag HTML?></title>
 <link rel="stylesheet" type="text/css" href="<?php echo $sitio; ?>/material/css/gob.css" />
 <script type="text/JavaScript" language="javascript" src="<?php echo $sitio; ?>/material/js/gob.js"></script>
 <script type="text/JavaScript" language="javascript" src="<?php echo $sitio; ?>/material/js/jquery-1.3.2.min.js"></script>
 <script type="text/JavaScript" language="javascript" src="<?php echo $sitio; ?>/material/js/jquery.quicksearch.js"></script>
</head>

<body>

 <div class="logoprint">
    <img src="<?=$sitio?>/material/images/header.jpg" alt="GobiernoTransparente" />
 </div>
 <div class="top">
 </div>
 <div class="contenido">
  <div class="cenefa">
   <font>Gobierno<b>Transparente</b></font>
  </div>
  <?php if($linksaccesibilidad){ ?>
	  <a href="<?php echo $sitio; ?>/asistente/tutoriales.html" title="Videos educativos en Lenguaje de Señas" class="link_accesibilidad">
	  	<img src="<?php echo $sitio; ?>/material/images/imagen_accesibilidad.png" alt="Accesibilidad">
	  </a>
  <?php } ?>
  <?php if($logo) echo '<div style="float: left; width: 80px; height: 100px;" ><img style="width: 80px; height: 80px; vertical-align: bottom;" alt="logo" src="'.$logo.'"/></div>'?>
  <h1> <?php echo $title ?> </h1>
  <?php if($nombre) echo '<h2>'.$nombre.', '.$sigla.'</h2>'?>
  <div class="clearfix"></div>
 </div>
 <div class="detalle">

<?php
}


// Esta funcion crea los pies de la pagina
// No retorna nada; modifica instantaneamente la salida
function html_footer($cod="",$w="*") {
global $sitio;
?>
  <div class="detalle-bottom">
   <font class="botones">
    <a href="javascript:window.print();" title="Imprimir este documento">
     <img src="<?php echo $sitio; ?>/material/images/ico-print.gif" border="0" height="33" width="37" alt="print" />
    </a>
   </font>
  </div>
 </div>
 <div class="footer">

<!-- Datos del usuario-->

<?php
if ($w!="*") {
  echo acentosHTML($w);
}else {
  echo acentosHTML($_SESSION['nombre'].", ".$_SESSION['sigla']."<br/>");
  echo "RUT: ".$_SESSION['rut']."<br/>";
  echo acentosHTML($_SESSION['direccion']);
  echo acentosHTML(" - Fono: ".$_SESSION['fono']."<br/>");
  echo "Web: <a href='".$_SESSION['url']."'>".$_SESSION['url']."</a><br/>";
  if (trim($_SESSION['email'])!="") {
    echo "Email: <a href='mailto:".$_SESSION['email']."'>";
    echo $_SESSION['email']."</a><br/>";
  }
  if (trim($_SESSION['cweb'])!="") {
    echo "<a href='".$_SESSION['cweb']."'>Contacto</a><br/>";
  }
  
  $clnrut=str_replace(array(",",".","-"," "),array("","","",""),$_SESSION['rut']);
  
  echo '<br />';
  echo '<a href="'.$sitio.'/asistente/plugin_visualizador.php">Descargar plug-ins y programas de visualizaci&oacute;n</a>';
  
  echo "<div style='display: none;'>$cod</div>";
}

echo ' </div></body></html>';
}


// Esta funcion hace submenues
function menu($titulo,$arr) {
 $titulo=acentosHTML($titulo);
 $ret="


 <!--  $titulo  -->

 <p class='subMenu'>
 <b>$titulo</b>\n";
 foreach($arr as $key => $value) {
  $key=acentosHTML($key);
  $ret="$ret\n <a href='$value' title='Link a: $key'>$key</a>\n";
 }
 $ret="$ret\n<u></u></p>\n\n";
 echo $ret;
}


// Crea una tabla a partir de un arreglo bidimensional
// Ademas, permite especificar una columna de links
function ArrayToTable($arr,$cols,$links,$str_enlace=-1,$str_noenlace=-1) {

 //preparamos las columnas con links
 for($k=0;$k<$cols;$k++) $link[$k]=0;
 if (isset($links[0])) {
    foreach($links as $key=>$L){
        $link[$L]=1;
        if($str_enlace!=-1) $link_str[$L]=$str_enlace[$key];
        if($str_noenlace!=-1) $nolink_str[$L]=$str_noenlace[$key];
    }
 }
 else {
    $link[$links]=1;
 }

 //creacion de la tabla
 $tablas="
<!-- Tabla generada/ columnas: $cols/ columna-link: ".print_r($link,true)." -->
<table class='tabla'>\n";
 $init=0;

 //thead
 $tablas="$tablas\n<thead><tr> ";
 $x=$arr[0];
 if ($x != array()) {
   for($k=0;$k<$cols;$k++) {
     if (isset($x[$k])) $y=$x[$k]; else $y=" ";
     $tablas="$tablas<th> $y </th>";
   }
 }
 $tablas="$tablas\n</tr></thead>";

 //tbody
 $tablas="$tablas\n<tbody> ";
 for($i=1;$i<count($arr);$i++) {
   $x=$arr[$i];
   $tablas="$tablas<tr>\n ";
   if ($x != array()) {
     for($k=0;$k<$cols;$k++) {
       if (isset($x[$k])) $y=$x[$k]; else $y=" ";
       if ($link[$k]==0)
         $tablas="$tablas<td> $y </td>";
       else{
         if (!isset($nolink_str) || !isset($link_str)){
             if (trim($y)=="" || trim(strtolower($y))=='sin modificaciones' || trim(strtolower($y))=='no tiene' || trim($y)=='-' || trim(strtolower($y))=='no')
               $tablas="$tablas<td>".trim($y)."</td>";
             else
               $tablas="$tablas<td> <a href='$y'>ver enlace</a> </td>";
         }
         else{
             if (trim($y)=="" || trim(strtolower($y))=='sin modificaciones' || trim(strtolower($y))=='no tiene' || trim($y)=='-' || trim(strtolower($y))=='no')
                 $tablas=$tablas.'<td>'.$nolink_str[$k].'</td>';
             else if (preg_match('/^\(?ii\)?$/i', $y))
                 $tablas="$tablas<td>".trim($y)."</td>";
             else
               $tablas=$tablas.'<td> <a href="'.$y.'">'.$link_str[$k].'</a> </td>';
         }
       }
     }
   }
   $tablas="$tablas\n</tr>\n";
 }
 $tablas="$tablas\n</tbody> ";

 return "$tablas</table>\n\n";
}


// Filtrar columna segun valor
// Ej. $eso = ArraySelect($arr,2,"Enero");
// Y mantiene la primera linea (nombre de las columnas)
function ArraySelect($arr,$col,$valor) {
  $output=array();
  $output[]=$arr[0];
  foreach($arr as $x) {
    if (isset($x[$col]) && eregi($valor,$x[$col]))
      $output[]=$x;
  }
  return $output;
}


// Proyecta ciertas columnas de un arreglo bidimensional
// Lo mismo hace en la primera linea (queda todo consistente)
function ArrayProject($arr,$cols) {
  $output=array();
  foreach($arr as $x) {
    $y=array();
    foreach($cols as $c) {
      if (isset($x[$c])) $y[]=$x[$c]; else $y[]="";
    }
    $output[]=$y;
  }
  return $output;
}





// Esta funcion HACE LOS FORMULARIOS PARA LOS CONVERSORES
// para cambiarlo si cambiamos el conversor
function formularioConversor($url_conversor) {
$url_main = (isset($_GET['g']))? "generar.php" : "main.php";
return "

<!-- formulario de conversor -->
<form method=\"post\" action=\"$url_conversor\" enctype=\"multipart/form-data\">
 <input type=\"file\" name=\"archivo\" />
 <select name=\"tipo\">
  <option value=\"excel\" selected>CSV generado por Excel</option>
  <option value=\"calc\">CSV generado por OpenOffice</option>
 </select>
 <br/>
 <input type=\"submit\" value=\"Procesar\" />
</form><br/>
<br/><a href='$url_main' title='Volver'><img src='../material/images/btn-volver-main.png' width='114' height='36' alt='Volver' border='0'/></a>

";
}


// A alfanumerico
function alfanum($string) {
 return strtoupper(preg_replace("/[^0-9a-zA-Z]/","",$string));
}

//funcion antispambot
function encode_email_address( $email ) {
     $output = '';
     for ($i = 0; $i < strlen($email); $i++)
     {
          $output .= '&#'.ord($email[$i]).';';
     }
     return $output;
}
?>
