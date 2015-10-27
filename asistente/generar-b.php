<?php

require_once "common.php";

html_header("Generador de Men&uacute;s");

/*
* FUNCION MENUFORMULARIO($STRING,$ARRAY)
* ESTA FUNCION CREA FORMULARIOS CON UN TITULO $STRING
* Y OPCIONES SEGUN UN INDICE ASOCIATIVO $ARRAY.
* $ARRAY TIENE LA FORMA OPCION=>URL.
*/

function menuFormulario($titulo, $opciones)
{
    $opc = array();
    $url = array();
    if ($opciones != array()) foreach ($opciones as $k => $v) {
        $opc[] = $k;
        $url[] = $v;
    }
    for ($i = 0; $i < 6; $i++) {
        $opc[] = "";
        $url[] = "";
    }
    echo "<table class='tabla'>
<tr>
 <th>T&iacute;tulo:</th> <th colspan=3><input type='text' name='titulo[]' value='$titulo' size='60'/></th>
</tr>
<tr>
 <td>Opci&oacute;n 1:</td> <td><input type='text' name='opcion1[]' value='" . $opc[0] . "' size='30'/></td>
 <td>Enlace:</td> <td><input type='text' name='url1[]' value='" . $url[0] . "' size='30'/></td>
</tr>
<tr>
 <td>Opci&oacute;n 2:</td> <td><input type='text' name='opcion2[]' value='" . $opc[1] . "' size='30'/></td>
 <td>Enlace:</td> <td><input type='text' name='url2[]' value='" . $url[1] . "' size='30'/></td>
</tr>
<tr>
 <td>Opci&oacute;n 3:</td> <td><input type='text' name='opcion3[]' value='" . $opc[2] . "' size='30'/></td>
 <td>Enlace:</td> <td><input type='text' name='url3[]' value='" . $url[2] . "' size='30'/></td>
</tr>
<tr>
 <td>Opci&oacute;n 4:</td> <td><input type='text' name='opcion4[]' value='" . $opc[3] . "' size='30'/></td>
 <td>Enlace:</td> <td><input type='text' name='url4[]' value='" . $url[3] . "' size='30'/></td>
</tr>
<tr>
 <td>Opci&oacute;n 5:</td> <td><input type='text' name='opcion5[]' value='" . $opc[4] . "' size='30'/></td>
 <td>Enlace:</td> <td><input type='text' name='url5[]' value='" . $url[4] . "' size='30'/></td>
</tr>
<tr>
 <td>Opci&oacute;n 6:</td> <td><input type='text' name='opcion6[]' value='" . $opc[5] . "' size='30'/></td>
 <td>Enlace:</td> <td><input type='text' name='url6[]' value='" . $url[5] . "' size='30'/></td>
</tr>
</table>   <br/><br/>
";
}

/* Los checkbox anterior
foreach($_POST as $x => $y) {
  echo "<input type='hidden' name='$x' value='$y' />\n";
}*/


if ($para_mes < 10) $para_mes = "0$para_mes";


?>


<table border=0>
    <tr>
        <td valign="middle">
            Este formulario le permitir&aacute; ajustar manualmente la
            portada a generar para su sitio de Gobierno<b>Transparente</b>.
            Cada men&uacute; a generar (imagen de la derecha)
            corresponde a un grupo de campos del formulario, consistente en
            un t&iacute;tulo y seis opciones.
            <br/><br/>
            <b>Para editar:</b> El campo "t&iacute;tulo" modifica el t&iacute;tulo
            del recuadro (que corresponde al texto en negritas de la imagen).
            Las opciones, seis en total, tienen dos campos: el campo "opci&oacute;n",
            para ingresar el nombre la opci&oacute;n, y el campo "enlace", para
            ingresar el enlace. Si un campo opci&oacute;n o URL es dejado en blanco,
            <b>la respectiva opci&oacute;n no ser&aacute; generada</b>. Adem&aacute;s,
            sea criterioso para asignar URLs absolutas o relativas.
            <br/><br/>
            <b>Para ampliar:</b> El generador no est&aacute; limitado a los
            men&uacute;s prellenados. S&oacute;lo basta colocarle un
            t&iacute;tulo a un men&uacute; para que se construya.


            Si el nombre de una opci&oacute;n o su direcci&oacute;n URL
            es dejado en blanco, la opci&oacute;n no se agregar&aacute;
            a la portada a generar.
        </td>
        <td valign="middle" align="center"><img alt="" src="generar-caja.png"/></td>
    </tr>
</table>
<br/>

<form action="generar-c.php" method="post">


    <!-- BOTONES DE ACCION -->
    <input type="submit" value="Generar"/>
    <br/><br/>


    <!-- LOS MENUS REALES -->

    <?php


    //COLUMNA 1
    echo "<h2>COLUMNA 1</h2>\n";


    //MARCO NORMATIVO
    $arr = array();
    $arr['Marco normativo aplicable'] = (isset($_POST['marconormativo'])) ? "marconormativo.html" : "";
    $arr['Potestades, competencias, responsabilidades, funciones, atribuciones y/o tareas'] = (isset($_POST['potestades'])) ? "potestades.html" : "";
    $arr['Actos y documentos publicados en el Diario Oficial'] = (isset($_POST['diariooficial'])) ? "diariooficial.html" : "";

    //$arr['Actos con efectos sobre terceros']=(isset($_POST['normativa_a7g']))?"normativa_a7g.html":"";
    if (isset($_SESSION['url_bibcongreso']))
        $arr['Biblioteca del Congreso Nacional'] = $_SESSION['url_bibcongreso'];
    if (isset($_SESSION['url_diariooficial']))
        $arr['Diario Oficial'] = $_SESSION['url_diariooficial'];
    menuFormulario("Marco Normativo", $arr);


    //ACTOS Y RESOLUCIONES
    $arr = array();
    $arr['Actos con efectos sobre terceros'] = (isset($_POST['terceros_index'])) ? "terceros_index.html" : "";
    menuFormulario("Actos y Resoluciones", $arr);


    //ESTRUCTURA ORGANICA
    $arr = array();
    $arr['Facultades, funciones y atribuciones de sus unidades u &oacute;rganos internos'] = (isset($_POST['facultades'])) ? "facultades.html" : "";
    $arr['Diagrama de la estructura orgánica'] = (isset($_POST['organica'])) ? "organica.html" : "";
    $arr['Enlace a la estructura orgánica'] = (isset($_SESSION['url_organica'])) ? $_SESSION['url_organica'] : "";
    menuFormulario("Estructura Org&aacute;nica", $arr);


    //PERSONAL
    $arr = array();
    $arr['Dotaci&oacute;n de planta'] =
        (isset($_POST['planta_historico']) || isset($_POST['personal_planta'])) ? "planta_historico.html" : "";
    $arr['Dotaci&oacute;n a contrata'] =
        (isset($_POST['contrata_historico']) || isset($_POST['personal_contrata'])) ? "contrata_historico.html" : "";
    $arr['Remuneraciones seg&uacute;n estamentos, grados o jornadas'] =
        isset($_POST['remuneraciones']) ? "$para_ano/per_remuneraciones.html" : "";
    $arr['Dotaci&oacute;n a honorarios'] =
        (isset($_POST['honorarios_historico']) || isset($_POST['personal_honorarios'])) ? "honorarios_historico.html" : "";
    $arr['Otros contratos sujetos al C&oacute;digo del Trabajo'] =
        (isset($_POST['codtrabajo_historico']) || isset($_POST['personal_otros'])) ? "codtrabajo_historico.html" : "";
    menuFormulario("Dotaci&oacute;n de Personal", $arr);


    //ADICIONALES (permitir 5 menus por columna)
    menuFormulario("", array());


    //COLUMNA 2
    echo "<h2>COLUMNA 2</h2>\n";


    //COMPRAS Y ADQUISICIONES
    $arr = array();
    $arr['En Mercado P&uacute;blico'] =
        (isset($_SESSION['url_mpublico'])) ? $_SESSION['url_mpublico'] : "";
    $arr['Otras compras y adquisiciones'] =
        (isset($_POST['otras_compras']) || isset($_POST['otrascompras_historico'])) ? "otrascompras_historico.html" : "";
    $arr['Contratos bienes inmuebles'] =
        (isset($_POST['bienes_inmuebles']) || isset($_POST['bienesinmuebles_historico'])) ? "bienesinmuebles_historico.html" : "";
    menuFormulario("Compras y Adquisiciones", $arr);


    //TRANSFERENCIAS
    $arr = array();
    if (isset($_SESSION['url_registro']) && $_SESSION['url_registro'])
        $arr['Registro de la ley N&deg; 19.862'] = $_SESSION['url_registro'];
    else if (isset($_SESSION['msg_registro']) && $_SESSION['msg_registro'])
        $arr['Registro de la ley N&deg; 19.862'] = 'registro19862.html';

    $arr['Otras transferencias'] =
        (isset($_POST['transferencias_historico']) || isset($_POST['transferencias'])) ? "transferencias_historico.html" : "";
    menuFormulario("Transferencias", $arr);


    //PRESUPUESTO
    $arr = array();
    $arr['Informes de ejecuci&oacute;n Presupuestaria'] =
        (isset($_SESSION['url_dipres'])) ? $_SESSION['url_dipres'] : "";
    menuFormulario("Informaci&oacute;n Presupuestaria", $arr);


    //AUDITORIAS DE PRESUPUESTO
    $arr = array();
    $arr['Resultados y aclaraciones'] =
        (isset($_POST['auditorias']) || isset($_POST['auditorias_historico'])) ? "auditorias_historico.html" : '';
    menuFormulario("Auditor&iacute;as al Ejercicio Presupuestario", $arr);


    //MENU ADICIONAL
    menuFormulario("", array());


    //COLUMNA 3
    echo "<h2>COLUMNA 3</h2>\n";


    //TRAMITES
    $arr = array();
    $arr['Tr&aacute;mites en ChileAtiende'] =
        (isset($_SESSION['url_chileatiende'])) ? $_SESSION['url_chileatiende'] : "";
    $arr['Otros tr&aacute;mites'] =
        (isset($_POST['otros_tramites'])) ? "tramites.html" : "";
    menuFormulario("Tr&aacute;mites del Organismo", $arr);


    //PARTICIPACION CIUDADANA
    $arr = array();
    $arr['Mecanismos de participaci&oacute;n ciudadana'] =
        (isset($_POST['participacion_ciudadana'])) ? 'ciudadana.html' : '';
    $arr['Norma General de Participaci&oacute;n Ciudadana'] =
        (isset($_SESSION['url_ciudadana'])) ? $_SESSION['url_ciudadana'] : "";
    $arr['Portal de Participaci&oacute;n Ciudadana'] =
        (isset($_SESSION['url_ciudadana2'])) ? $_SESSION['url_ciudadana2'] : "";
    menuFormulario("Participaci&oacute;n Ciudadana", $arr);


    //SUBSIDIOS
    $arr = array();
    $arr['Programas de subsidios y otros beneficios'] =
        (isset($_POST['subsidio_programas']) || isset($_POST['subsidio_historico'])) ? "subsidio_historico.html" : '';
    menuFormulario("Subsidios y Beneficios", $arr);


    //VINCULOS INST
    $arr = array();
    $arr["Participaci&oacute;n, representaci&oacute;n e intervenci&oacute;n"] =
        (isset($_POST['vinculos'])) ? "vinculos.html" : "";
    menuFormulario("V&iacute;nculos Institucionales", $arr);


    //LEY DEL LOBBY
    $arr = array();
    $arr['Acceso a subsitio lobby'] =
        (isset($_SESSION['url_lobby'])) ? $_SESSION['url_lobby'] : "";
    menuFormulario("Ley del Lobby", $arr);


    // MENU ADICIONAL
    menuFormulario("", array());


    //COLUMNA 4
    echo "<h2>COLUMNA 4 - ADICIONAL</h2>\n";


    //SOLICITUDES
    $arr = array();
    /*$arr['Enlace al Sistema de Gestión de Solicitudes de Acceso']=
        (isset($_SESSION['url_solicitudes']))?$_SESSION['url_solicitudes']:"";*/
    if (isset($_SESSION['generador_portada_solicitudo_info_transparencia']) && $_SESSION['generador_portada_solicitudo_info_transparencia']) {
        $arr['Solicitud de Información Ley de Transparencia'] =
            (isset($_SESSION['generador_portada_solicitudo_info_transparencia'])) ? 'solicitud_informacion.html' : "";
    }
    if (isset($_SESSION['secretoreserva']) && $_SESSION['secretoreserva']) {
        $arr['Índice de actos y documentos calificados como secretos o reservados'] =
            (isset($_SESSION['secretoreserva'])) ? "secretoreserva.html" : "";
    }
    if (isset($_SESSION['informacion_no_disponible']) && $_SESSION['informacion_no_disponible']) {
        $arr['Informaci&oacute;n no disponible en poder del servicio'] =
            (isset($_SESSION['informacion_no_disponible'])) ? 'informacion_no_disponible.html' : "";
    }
    if (isset($_SESSION['registro_respuestas_solicitudes']) && $_SESSION['registro_respuestas_solicitudes']) {
        $arr['Registro de respuesta de solicitudes'] =
            (isset($_SESSION['registro_respuestas_solicitudes'])) ? 'registro_respuestas_solicitudes.html' : "";
    }
    menuFormulario("Derecho de Acceso a la Información P&uacute;blica", $arr);

    //COSTOS DIRECTOS DE REPRODUCCION DE LA INFORMACION
    $arr = array();
    if (isset($_SESSION['url_costos_directos']) && $_SESSION['url_costos_directos'])
        $arr['Costos directos de reproducci&oacute;n de la informaci&oacute;n requerida v&iacute;a ley N&deg; 20.285'] =
            (isset($_SESSION['url_costos_directos'])) ? $_SESSION['url_costos_directos'] : "";
    else if (isset($_SESSION['msg_costos_directos']) && $_SESSION['msg_costos_directos'])
        $arr['Costos directos de reproducci&oacute;n de la informaci&oacute;n requerida v&iacute;a ley N&deg; 20.285'] =
            (isset($_SESSION['msg_costos_directos'])) ? "costos_directos.html" : "";
    menuFormulario("Costos Directos de Reproducci&oacute;n", $arr);


    //LEY 20.416
    $arr = array();
    $arr['Antecedentes preparatorios de normas que afecten a EMT Ley N° 20.416'] = (isset($_SESSION['ley20416'])) ? "ley20416.html" : "";
    menuFormulario("Formularios y antecedentes de propuestas normativas que afecten a empresas de menor tamaño (EMT)", $arr);

    //INTERESES Y PATRIMONIOS DEL MINISTRO Y SUBSECRETARIO
    $arr = array();
    $arr['Declaración de patrimonio e intereses de autoridades'] = (isset($_SESSION['patrimonioeintereses_menu'])) ? "patrimonioeintereses_menu.html" : "";
    $arr['Acceso a subsitio de Declaraciones de Patrimonio e Intereses'] = (isset($_SESSION['url_patrimonioeintereses'])) ? $_SESSION['url_patrimonioeintereses'] : "";
    menuFormulario("Declaración de patrimonio e intereses", $arr);


    //NORMAS LEY 20.285
    $arr = array();
    $arr['Normas de la Ley sobre Acceso a la Informaci&oacute;n Pública'] = $sitio . '/asistente/normas.php';
    $arr['Tutoriales Derecho de Acceso'] = 'http://www.educatransparencia.cl/';
    $arr['Tutorial Institucional'] = (isset($_SESSION['tutoriales_institucionales'])) ? $_SESSION['tutoriales_institucionales'] : "";
    menuFormulario('Información Ley N° 20.285', $arr);


    //4 MENUS
    for ($i = 0; $i < 4; $i++) menuFormulario("", array());


    ?>




    <!-- BOTONES DE ACCION -->
    <input type="submit" value="Generar"/><br/><br/>
    <?php echo html_button("main.php"); ?>


</form>

<?php html_footer(); ?>
