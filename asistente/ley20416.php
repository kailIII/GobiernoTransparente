<?php

require_once "common-multi.php";

html_header("CSV: Formularios y antecedentes de propuestas normativas que afecten a empresas de menor tamaño (EMT)");

?>

La siguiente planilla le permitir&aacute; elaborar el listado de antecedentes preparatorios de propuestas normativas que afecten a empresas de menor tamaño (<a href="http://www.leychile.cl/Navegar?idNorma=1010668&buscar=20416&r=3" target="_blank">Ley N° 20.416</a>). El formulario y manual correspondientes se encuentra disponible en el sitio web <a href="http://www.economia.cl/1540/article-185396.html" target="_blank">http://www.economia.cl/1540/article-185396.html</a><br/><br />
Paso 1: Descargue la planilla en alguno de los siguientes formatos:

<ul>
 <li><a href="ley20416.xls" target="_NEW">ley20416.xls</a>,
 formato Microsoft Excel 97/XP.</li>
 <li><a href="ley20416.ods" target="_NEW">ley20416.ods</a>,
 formato OpenOffice Calc 2.0.</li>
 <li><a href="ley20416.csv" target="_NEW">ley20416.csv</a>,
 formato CSV delimitado por punto y comas (;).</li>
</ul>

Paso 2: Complete la planilla con los datos solicitados en cada columna.<br/><br/>
Paso 3: Guarde su planilla Microsoft Excel u OpenOffice Calc, en formato CSV.
Los archivos CSV (del ingl&eacute;s <i>comma separated values</i>) son un tipo
de documento sencillo para representar datos en forma de tabla.
<br/><br/>
Paso 4: Presione Examinar y seleccione el archivo CSV.
<br/><br/>
Paso 5: Presione "Procesar" para acceder a los descargables de "Antecedentes preparatorios de normas que afecten a EMT Ley N&deg; 20.416". 
<br/><br/>

<?php
echo formularioMultipagina(
  "Antecedentes preparatorios de propuestas normativas que afecten a empresas de menor tamaño (Ley N° 20.416)",
  "A continuación se listan los antecedentes preparatorios de propuestas normativas que afecten a empresas de menor tamaño de acuerdo a lo establecido en la Ley N° 20.416, artículo quinto y su Reglamento.",
  "A continuación se listan los antecedentes preparatorios de propuestas normativas que afecten a empresas de menor tamaño de acuerdo a lo establecido en la Ley N°20.416, artículo quinto y su Reglamento (".$_SESSION['nombre'].").",
  7,array(5,6),"ley20416","ley20416","index.html",'ley20416_rep.txt'
);
?>
  
<br/>
<hr style="color: #ddddff;" />
<br/>

<h2>Generador de p&aacute;gina de mensaje (HTML)</h2>


<?php

$opciones=array('No genera información'=>'Desde el 1 de septiembre de 2010, esta institución no ha dictado, modificado o derogado normas que afecten a empresas de menor tamaño, ni lo hará dentro del plazo de 15 días (o 1 día en caso de urgencia).' );
echo formularioExcepcion($opciones,"Antecedentes preparatorios de propuestas normativas que afecten a empresas de menor tamaño (Ley N° 20.416)","ley20416","ley20416.html");

html_footer();

?>
