<?php

require_once "common.php";

function org_header($titulo) {
global $sitio;
$titulo= acentosHTML( $titulo );
echo "
 <html>  
 <head>
  <title>$titulo</title>
  <link rel='stylesheet' type='text/css'
href='$sitio/material/css/organica.css' />
  <link rel='stylesheet' type='text/css'
href='$sitio/material/css/gob.css' />
 </head>

<body>
 <div class='logoprint'>
  <img src='$sitio/material/images/header.jpg' />
 </div>
 <div class='top'>
 </div>
 <div class='contenido'>
  <div class='cenefa'>
   <font>Gobierno<b>Transparente</b></font>
  </div>
  <h1> $titulo </h1>
 </div>
 <div class='detalle'>
";
}



function toListaEditor($orga,$li_estilo,$ul_estilo) {
 $htm="<li class='$li_estilo'>".$orga['funcion']." ".$orga['titulo'];
 $ID=$orga['id'];
 $htm="$htm (<a href='organica-c.php?n=$ID'>editar</a>)\n";
 if ($ID!=1) {
   $htm="$htm (<a href='organica-b.php?n=$ID&q=del'>borrar</a>)\n";
 }
 $htm="$htm (<a href='organica-b.php?n=$ID&q=new'>nuevo subnivel</a>)\n";

 if (trim($orga['glosa'])!="")
   $htm="$htm<br/>Descripci&oacute;n: <i>".$orga['glosa']."</i>";
  if (trim($orga['url'])!="")
   $htm="$htm<br/>URL: <u>".$orga['url']."</u>";
 $hijos=$orga['hijos'];
 if ($hijos!=array()) {
  for( $i=0 ; $i<count($hijos) ; $i++ ) {
   $htm=$htm.toListaEditor($hijos[$i],($i<count($hijos)-1)?"":"fin","menu");
  }
 }
 $htm=$htm."</li>\n";
 return  acentosHTML( "<ul class='$ul_estilo'>\n$htm\n</ul>\n" );
}




function toLista($orga,$li_estilo,$ul_estilo) {

 $htm="<li class='$li_estilo'>";

 if (trim($orga['url'])!="") {
   $htm="$htm <a href='".$orga['url']."'>".$orga['funcion']." ".$orga['titulo']."</a>";
 } else {
   $htm="$htm".$orga['funcion']." ".$orga['titulo'];
 }

 if (trim($orga['glosa'])!="")
   $htm="$htm: <i>".$orga['glosa']."</i>";

 $hijos=$orga['hijos'];
 if ($hijos!=array()) {
  for( $i=0 ; $i<count($hijos) ; $i++ ) {
   $htm=$htm.toLista($hijos[$i],($i<count($hijos)-1)?"":"fin","menu");
  }
 }
 $htm=$htm."</li>\n";
 return  acentosHTML( "<ul class='$ul_estilo'>\n$htm\n</ul>\n" );
}




function getInfo($org,$id) {
 $ans=array();
 if ($id==$org['id']) {
  $ans=array("funcion" => $org['funcion'],
	"titulo" => $org['titulo'],
	"glosa" => $org['glosa'],
	"url" => $org['url']);
  return $ans;
 }
 $hijos=$org['hijos'];
 if ($hijos!=array()) {
  foreach( $hijos as $X ) {
   $seq=getInfo($X,$id);
   if ($seq!=array()) {
    $ans=$seq;
    break;
   }
  }
 }
 return $ans;
}



function updateInfo($org,$id,$ans) {
 $new=array();
 if ($id==$org['id']) {
  $org['funcion']=$ans['funcion'];
  $org['titulo']=$ans['titulo'];
  $org['glosa']=$ans['glosa'];
  $org['url']=$ans['url'];
  return $org;
 }
 $hijos=$org['hijos'];
 if ($hijos!=array()) {
  foreach( $hijos as $X ) {
   $new[]=updateInfo($X,$id,$ans);
  }
 }
 $org['hijos']=$new;
 return $org;
}



function addChild($org,$id) {
 $newid=_maxId($org)+1;
 return _addChild($org,$id,$newid);
}

function _maxId($org) {
 $max=$org['id'];
 $hijos=$org['hijos'];
 if ($hijos==array()) return $max;
 foreach( $hijos as $X ) {
  $mx=_maxId($X);
  if ($mx > $max) $max=$mx;
 }
 return $max;
}

function _addChild($org,$id,$newid) {
 $new=array();
 $hijos=$org['hijos'];
 if ($hijos!=array()) {
  foreach( $hijos as $X ) {
   $new[]=_addChild($X,$id,$newid);
  }
 }
 if ($id==$org['id']) {
  $new[]=array('id'=>$newid,'funcion'=>'','titulo'=>'','glosa'=>'','url'=>'','hijos'=>array());
 }
 $org['hijos']=$new;
 return $org;
}



function deleteNode($org,$id) {
 $new=array();
 $hijos=$org['hijos'];
 if ($hijos!=array()) {
  foreach( $hijos as $X ) {
   if ($X['id']!=$id) {
    $new[]=deleteNode($X,$id);
   }
  }
 }
 $org['hijos']=$new;
 return $org;
}

?>
