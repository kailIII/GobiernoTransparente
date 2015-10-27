<?php
function caracteres_latinos($cadena){
	//acentos
	$cadena = preg_replace("/(À|Á|Â|Ã|Ä|Å|à|á|â|ã|ä|å)/","a",$cadena);
	$cadena = preg_replace("/(È|É|Ê|Ë|è|é|ê|ë)/","e",$cadena);
	$cadena = preg_replace("/(Ì|Í|Î|Ï|ì|í|î|ï)/","i",$cadena);
	$cadena = preg_replace("/(Ò|Ó|Ô|Õ|Ö|Ø|ò|ó|ô|õ|ö|ø)/","o",$cadena);
	$cadena = preg_replace("/(Ù|Ú|Û|Ü|ù|ú|û|ü)/","u",$cadena);

	//la ñ
	$cadena = preg_replace("/(Ñ|ñ)/","n",$cadena);

	//caracteres extraños
	$cadena = preg_replace("/(Ç|ç)/","c",$cadena);
	$cadena = preg_replace("/ÿ/","y",$cadena);

	return $cadena;
}

function generar_slug($cadena){

	//limpiamos caracteres los latinos
	$cadena =  caracteres_latinos($cadena);

	$cadena = strtolower(trim($cadena));
	$cadena = preg_replace('/[^a-z0-9-]/', '-', $cadena);
	$cadena = preg_replace('/-+/', "-", $cadena);


	return $cadena;
}


?>
