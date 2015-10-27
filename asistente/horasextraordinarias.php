<?php

require_once "common-multi.php";

html_header("CSV: Horas extraordinarias");

?>

La siguiente planilla le permitir&aacute; elaborar las horas extraordinarias para un trabajador.

<br/><br/>
Paso 1: Descargue la planilla en alguno de los siguientes formatos:

<ul>
 <li><a href="horasextraordinarias.xls" target="_NEW">horasextraordinarias.xls</a>,
 formato Microsoft Excel 97/XP.</li>
 <li><a href="horasextraordinarias.ods" target="_NEW">horasextraordinarias.ods</a>,
 formato OpenOffice Calc 2.0.</li>
 <li><a href="horasextraordinarias.csv" target="_NEW">horasextraordinarias.csv</a>,
 formato CSV delimitado por punto y comas (;).</li>
</ul>

Paso 2: Complete la planilla con los datos solicitados en cada columna.
<br/><br/>
Paso 3: Guarde su planilla Microsoft Excel u OpenOffice Calc, en formato CSV.
Los archivos CSV (del ingl&eacute;s <i>comma separated values</i>) son un tipo
de documento sencillo para representar datos en forma de tabla.
<br/><br/>
Paso 4: Presione Examinar y seleccione el archivo CSV.
<br/><br/>
Paso 5: Presione "Procesar" para acceder a los descargables de "Horas extraordinarias".
<br/><br/>

 <form method='post' action='horasextraordinarias-b.php' enctype='multipart/form-data'>
     <label style="display: inline-block; width:100px;">Nombre completo</label>
   <input type='text' name='nombre' />
   <br />
     <label style="display: inline-block; width:100px;">Cargar Planilla</label>
   <input type='file' name='archivo' />
   <select name='tipo'>
     <option value='excel' selected>CSV generado por Excel</option>
     <option value='calc'>CSV generado por OpenOffice</option>
   </select>
    <br/>
 <input type="submit" value="Procesar" />
 </form>
  



<?php

html_footer();

?>