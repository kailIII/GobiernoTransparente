<?php


include "common-multi.php";



//Procesamos el archivo
$csv=file($_FILES['archivo']['tmp_name']);
$_SESSION['data']=parseCSV($csv,$_POST['tipo']);

if (trim($_POST['headings'])!="")
	$_SESSION['data'][0]=file( trim($_POST['headings']) );

//$_SESSION['data'][0]=explode(';',file_get_contents($_POST['headings']));

//Leemos el POST
$nombre=$_POST['nombre'];
$titulo=$_POST['titulo'];
$msg1 = $_POST['msg1'];
$msg2 = $_POST['msg2'];
$sv   = $_POST['sv'];
$cols = $_POST['cols'];
$links= $_POST['links'];
$str_enlace= $_POST['str_enlace'];
$str_noenlace= $_POST['str_noenlace'];
$backto=$_POST['backto'];
$footnotes =$_POST['footnotes'];


//Mensaje personalizado
html_header("CSV: $titulo");
echo $msg1;


//Mensaje de n# de paginas
if (getNumPags($_SESSION['data'])<=1)
  echo "<br/><br/>Se ha generado 1 p&aacute;gina:\n";
else 
  echo "<br/><br/>Se han generado ".getNumPags($_SESSION['data'])." p&aacute;ginas:\n";




/*
 * Aqui hacemos la lista de paginas para su descarga.
 * Cada vinculo es, en realidad, un formulario.
 */

echo "<ul>\n";

//Paginas
for($i=0;$i<getNumPags($_SESSION['data']) || $i==0;$i++) {
  echo "
  <li><form name='f$i' action='multi-proc.php' method='post'>
    <input type='hidden' name='titulo' value='$titulo'/>
    <input type='hidden' name='nombre' value='$nombre'/>
    <input type='hidden' name='msg2'   value='$msg2'  />
    <input type='hidden' name='sv'     value='$sv'    />
    <input type='hidden' name='cols'   value='$cols'  />
    <input type='hidden' name='links'  value='$links' />
        <input type='hidden' name='str_enlace'  value='$str_enlace' />
        <input type='hidden' name='str_noenlace'  value='$str_noenlace' />
    <input type='hidden' name='pag'    value='$i'     />
    <input type='hidden' name='backto' value='$backto'/>
    <input type='hidden' name='footnotes'  value='$footnotes' />
    <a href='javascript:void(null)' onclick='f$i.submit();'> $nombre".(($i==0)?"":"-".($i+1)).".html </a>
  </form></li>
  ";
}

echo "</ul><br/>\n";

echo html_button($_SESSION['back']);

html_footer();
?>
