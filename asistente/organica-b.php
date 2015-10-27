<?php

require_once "common-org.php";


if (isset($_SESSION['data'])) {
 $organik=$_SESSION['data'];
} else {
 $organik['funcion']="";
 $organik['titulo']=acentosHTML($_POST['cargo']);
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
	'funcion'=> acentosHTML( $_POST['otra'] ),
        'titulo'=> acentosHTML( $_POST['titulo'] ),
        'glosa'=> acentosHTML( $_POST['glosa'] ),
        'url'=> acentosHTML( $_POST['url'] )
  );
  $organik=updateInfo($organik,$_POST['id'],$info);
}

if (isset($_POST['cargo'])) {
  $_SESSION['comm']= acentosHTML( $_POST['cargo'] );
}



$_SESSION['data']=$organik;



org_header("Editor de Estructuras Org&aacute;nicas");

?>

<form action="organica-d.php" method="post">
<input type="button" value="Generar"
onclick="location.href='organica-d.php';" />
</form>


<?php

echo toListaEditor($organik,"","primer_nodo");

?>

<?php
echo html_button($_SESSION['back']);
html_footer();

?>
