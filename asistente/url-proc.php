<?php

require_once "common.php";

if (trim($_POST['url'])=="") {
   unset($_SESSION[$_POST['sv']]);
} else {
   $_SESSION[$_POST['sv']]=$_POST['url'];
}

html_header($_POST['titulo']);

echo acentosHTML($_POST['mensaje']);

echo "<br/><br/>".html_button($_SESSION['back']);

html_footer();

?>
