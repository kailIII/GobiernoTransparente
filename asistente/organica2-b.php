<?php

require_once "organica.inc";


if (isset($_SESSION['data'])) {
 $organik=$_SESSION['data'];
} else {
 $organik['funcion']="";
 $organik['titulo']="?";
 $organik['glosa']="";
 $organik['id']=1;
 $organik['hijos']=array();
 $organik['url']="";
}


if (isset($_GET['n']) && isset($_GET['q'])) {
  if ($_GET['q']=='new') {
    $organik=addChild($organik,$_GET['n']);
  }
  if ($_GET['q']=='del') {
    $organik=deleteNode($organik,$_GET['n']);
  }
}

if (isset($_POST['funcion'])) {
  $info=array(
	'funcion'=>$_POST['funcion'],
        'titulo'=>$_POST['titulo'],
        'glosa'=>$_POST['glosa'],
        'url'=>$_POST['url']
  );
  $organik=updateInfo($organik,$_POST['id'],$info);
}


$_SESSION['data']=$organik;



org_header("Editor de Estructuras Org&aacute;nicas");

?>

<form action="organica-d.php" method="post">
<input type="button" value="Volver"
onclick="location.href='organica2.php';" />
<input type="button" value="Generar"
onclick="location.href='organica-d.php';" />
</form>


<?php

echo toListaEditor2($organik,"fin");

html_footer();

?>
