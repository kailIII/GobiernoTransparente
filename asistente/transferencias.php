<?php

require_once "common-multi.php";

html_header("Otras Transferencias");

?>

La siguiente planilla le permitir&aacute; presentar las transferencias efectuadas
por su organismo que no se encuentren regidas por la ley N&deg; 19.862 .

<br/><br/>
Paso 1: Descargue la planilla en alguno de los siguientes formatos:
<ul>
 <li><a href="transferencias.xls" target="_NEW">transferencias.xls</a>,
 formato Microsoft Excel 97/XP.</li>
 <li><a href="transferencias.ods" target="_NEW">transferencias.ods</a>,
 formato OpenOffice Calc 2.0.</li>
 <li><a href="transferencias.csv" target="_NEW">transferencias.csv</a>,
 formato CSV delimitado por punto y comas (;).</li>
</ul>

Paso 2: Complete la planilla con los datos solicitados en cada columna,
de acuerdo a lo dispuesto en el art&iacute;culo 7-f de la ley N&deg; 20.285.
<br/><br/>
Paso 3: Guarde su planilla Microsoft Excel u OpenOffice Calc, en formato CSV.
Los archivos CSV (del ingl&eacute;s <i>comma separated values</i>) son un tipo
de documento sencillo para representar datos en forma de tabla.
<br/><br/>
Paso 4: Presione Examinar y seleccione el archivo CSV.
 <br/><br/>
Paso 5: Presione "Procesar" para acceder a los descargables de "Otras Transferencias". 
<br/><br/>

<?php
echo formularioMultipagina(
  "Otras Transferencias",	//Titulo de las paginas
  "A continuaci&oacute;n se listan las p&aacute;ginas generadas con las transferencias realizadas por este Organismo.",	//Mensaje del indice de paginas
  "A continuaci&oacute;n se listan las transferencias
realizadas por este Organismo (".$_SESSION['nombre']."), que no est&aacute;n listadas en Registros N&deg; 19.862.",	//Mensaje las paginas generadas
  13,	//num columnas a considerar
  array(),	//columnas de enlaces
  "transferencias",   //base nombre archivo
  "transferencias",    //variable sesion
  "../transferencias_historico.html",  //pagina anterior
  "transferencias_rep.txt"
);
?>

<br/>
<hr style="color: #ddddff;" />
<br/>

<h2>Generador de p&aacute;gina de mensaje (HTML)</h2>

Si la publicaci&oacute;n de esta informaci&oacute;n no aplica a su servicio,
ingrese el mensaje jur&iacute;dico correspondiente para generar la p&aacute;gina
HTML de respuesta. <br/><br/>

<?php

$opciones=array(
	"No genera informaci&oacute;n" => 'Esta institución no efectúa transferencias.',
	"No existe informaci&oacute;n en el per&iacute;odo" => "Esta institución no ha efectuado transferencia durante el período consultado.",
        'Se efectúan bajo ley Nº 19.862'=>'Esta institución efectúa todas sus transferencias al amparo de la ley N° 19.862 por lo que la información puede ser consultada en el enlace “Registro ley N° 19.862” dispuesto en este sitio.'
);
echo formularioExcepcion($opciones,"Otras transferencias","transferencias","transferencias.html");
html_footer();

?>
