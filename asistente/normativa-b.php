<?php


require_once('common-multi.php');


$nombre = $_SESSION['nombre'];


// Esto evita problemas mayores
if ( isset($_FILES['archivo']['tmp_name']) &&
     is_uploaded_file($_FILES['archivo']['tmp_name']) ) {

 $csv=file($_FILES['archivo']['tmp_name']);

 $data=parseCSV($csv,$_POST['tipo']);
 //$x=$data[0];
 $x=file("normativa_rep.csv");
 $A[]=array($x[0],$x[1],$x[2],$x[4],$x[7]);
 $B[]=array($x[0],$x[1],$x[2],$x[7]);
// $C[]=array($x[0],$x[1],$x[2],$x[7]);
 $D[]=array($x[0],$x[1],$x[2],$x[7]);
 foreach($data as $x) {
   if (isset($x[3]) && $x[3]=="SI")
     $A[]=array($x[0],$x[1],$x[2],$x[4],$x[7]);
   if (isset($x[6]) && $x[6]=="SI")
     $B[]=array($x[0],$x[1],$x[2],$x[7]);
   //if (isset($x[3]) && $x[3]=="SI")
     $C[]=array($x[0],$x[1],$x[2],$x[7]);
   if (isset($x[5]) && $x[5]=="SI")
     $D[]=array($x[0],$x[1],$x[2],$x[7]);
 }

}


html_header("CSV: Marco Normativo (descargables)");

?>


A partir de la informaci&oacute;n proporcionada en la planilla,
en esta secci&oacute;n podr&aacute; descargar las p&aacute;ginas correspondientes
al marco normativo.
<br/><br/>

<h2>Descargables:</h2>


<ul>

<!-- normativa a6 -->

<li>
<b>Actos y documentos publicados en el Diario Oficial</b>.<br/>
Para este &iacute;tem se gener&oacute;
<?php echo getNumPags($A); ?> p&aacute;gina(s):
<ul>
<?php
for($i=0;$i<getNumPags($A) || $i==0;$i++) {
  echo "
  <li><form name='a6f$i' action='multi-proc.php' method='post'>
    <input type='hidden' name='titulo' value='Actos y documentos publicados en el Diario Oficial' />
    <input type='hidden' name='nombre' value='normativa_a6' />
    <input type='hidden' name='msg2'   value='A continuaci&oacute;n se presentan todos los actos y resoluciones de este Organismo ($nombre) que han sido objeto de publicaci&oacute;n en el Diario Oficial.' />
    <input type='hidden' name='sv'     value='normativa_a6' />
    <input type='hidden' name='cols'   value='5'  />
    <input type='hidden' name='links'  value='4'  />
    <input type='hidden' name='pag'    value='$i' />
    <input type='hidden' name='sub'    value='a6' />
    <input type='hidden' name='backto' value='index.html' />
    <a href='javascript:void(null)' onclick='a6f$i.submit();'> normativa_a6".(($i==0)?"":"-".($i+1)).".html </a>
  </form></li>\n  ";
}
?>
</ul><br/>
</li>

<!-- normativa a7b -->

<li>
<b>Funciones, competencias y responsabilidades</b>.<br/>
Para este &iacute;tem se gener&oacute;
<?php echo getNumPags($B); ?> p&aacute;gina(s):
<ul>
<?php
for($i=0;$i<getNumPags($B) || $i==0;$i++) {
  echo "
  <li><form name='a7bf$i' action='multi-proc.php' method='post'>
    <input type='hidden' name='titulo' value='Funciones, competencias y responsabilidades'/>
    <input type='hidden' name='nombre' value='normativa_a7b'/>
    <input type='hidden' name='msg2'   value='A continuaci&oacute;n se presenta toda la normativa que establece facultades, funciones o atribuciones para este Organismo ($nombre) y para cada una de sus unidades u &oacute;rganos internos.'  />
    <input type='hidden' name='sv'     value='normativa_a7b'    />
    <input type='hidden' name='cols'   value='4'  />
    <input type='hidden' name='links'  value='3' />
    <input type='hidden' name='pag'    value='$i'      />
    <input type='hidden' name='sub'    value='a7b'/>
    <input type='hidden' name='backto' value='index.html' />
    <a href='javascript:void(null)' onclick='a7bf$i.submit();'> normativa_a7b".(($i==0)?"":"-".($i+1)).".html </a>
  </form></li>\n  ";
}
?>
</ul><br/>
</li>


<!-- normativa a7c -->

<li>
<b>Marco Normativo</b>.<br/>
Para este &iacute;tem se gener&oacute;
<?php echo getNumPags($C); ?> p&aacute;gina(s):
<ul>
<?php
for($i=0;$i<getNumPags($C) || $i==0;$i++) {
  echo "
  <li><form name='a7cf$i' action='multi-proc.php' method='post'>
    <input type='hidden' name='titulo' value='Marco normativo'/>
    <input type='hidden' name='nombre' value='normativa_a7c'/>
    <input type='hidden' name='msg2'   value='A continuaci&oacute;n se presenta el marco normativo aplicable a este Organismo ($nombre).'  />
    <input type='hidden' name='sv'     value='normativa_a7c'/>
    <input type='hidden' name='cols'   value='4'  />
    <input type='hidden' name='links'  value='3' />
    <input type='hidden' name='pag'    value='$i'      />
    <input type='hidden' name='sub'    value='a7c'/>
    <input type='hidden' name='backto' value='index.html' />
    <a href='javascript:void(null)' onclick='a7cf$i.submit();'> normativa_a7c".(($i==0)?"":"-".($i+1)).".html </a>
  </form></li>\n  ";
}
?>
</ul><br/>
</li>


<!-- normativa a7g -->

<li>
<b>Actos con efectos sobre terceros</b>.<br/>
Para este &iacute;tem se gener&oacute;
<?php echo getNumPags($D); ?> p&aacute;gina(s):
<ul>
<?php
for($i=0;$i<getNumPags($D) || $i==0;$i++) {
  echo "
  <li><form name='a7gf$i' action='multi-proc.php' method='post'>
    <input type='hidden' name='titulo' value='Actos con efectos sobre terceros'/>
    <input type='hidden' name='nombre' value='normativa_a7g'/>
    <input type='hidden' name='msg2'   value='A continuaci&oacute;n se presentan los actos y resoluciones de este Organismo ($nombre) que tienen efecto sobre terceros.'  />
    <input type='hidden' name='sv'     value='normativa_a7g'/>
    <input type='hidden' name='cols'   value='4'  />
    <input type='hidden' name='links'  value='3'  />
    <input type='hidden' name='pag'    value='$i' />
    <input type='hidden' name='sub'    value='a7g'/>
    <input type='hidden' name='backto' value='index.html' />
    <a href='javascript:void(null)' onclick='a7gf$i.submit();'> normativa_a7g".(($i==0)?"":"-".($i+1)).".html </a>
  </form></li>\n  ";
}
?>
</ul><br/>
</li>

</ul>


Una vez concluida la descarga de archivos, puede continuar
su sesi&oacute;n.

<br/><br/>
<?php echo html_button($_SESSION['back']); ?>


<?php

$_SESSION['data']['a6']=$A;
$_SESSION['data']['a7b']=$B;
$_SESSION['data']['a7c']=$C;
$_SESSION['data']['a7g']=$D;

html_footer();

?>
