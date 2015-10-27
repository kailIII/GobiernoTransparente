<?php

require_once "common.php";

if (!isset($ruta)) $ruta = "";

if (isset($_SESSION['data'])) unset($_SESSION['data']);
if (isset($_SESSION['comm'])) unset($_SESSION['comm']);
$_SESSION['back'] = "main.php";

html_header("Gobierno Transparente<br/>Ley N&deg; 20.285 - sobre Acceso a la Informaci&oacute;n P&uacute;blica");

?>


<!-- Estas herramientas son &uacute;nica y exclusivamente
para la realizaci&oacute;n de pruebas internas,
sin acceso p&uacute;blico hasta el 20 de abril.<br/><br/> -->

<h3><b>&Uacute;ltima actualizaci&oacute;n:</b> 28/05/2015 </h3>

<br/>


<br/>


<div class="seccion">
    <!-- columna 1 -->

    <p class="subMenu">

        <!-- datos de la unidad -->
        <b>1. Organismo</b>
        <a href="<?php echo $ruta; ?>datos.php">Ingresar datos del organismo</a>
        <u></u>
        <br/>


        <!-- normativa -->
        <b>2. Marco Normativo</b>
        <a href="<?php echo $ruta; ?>marconormativo.php" title="normativa a7c">
            CSV: Marco normativo aplicable
            <?php echo (isset($_SESSION['marconormativo'])) ? "(Ok)" : ""; ?>
        </a>
        <a href="<?php echo $ruta; ?>potestades.php" title="normativa a6 2">
            CSV: Potestades, competencias, responsabilidades, funciones, atribuciones y/o tareas
            <?php echo (isset($_SESSION['potestades'])) ? "(Ok)" : ""; ?>
        </a>
        <a href="<?php echo $ruta; ?>diariooficial.php" title="normativa a6">
            CSV: Actos y documentos publicados en el Diario Oficial
            <?php echo (isset($_SESSION['diariooficial'])) ? "(Ok)" : ""; ?>
        </a>
        <a href="<?php echo $ruta; ?>url_bibcongreso.php" title="biblioteca del congreso">
            URL: Sitios externos
            <?php echo (isset($_SESSION['url_bibcongreso']) || isset($_SESSION['url_diariooficial'])) ? "(Ok)" : ""; ?>
        </a>
        <u></u>
        <br/>

        <!-- actos y resoluciones -->
        <b>3. Actos y Resoluciones</b>
        <a href="<?php echo $ruta; ?>terceros.php" title="normativa a7g">
            CSV: Actos con efectos sobre terceros
            <?php echo (isset($_SESSION['terceros_index'])) ? "(Ok)" : ""; ?>
        </a>
        <a href="<?php echo $ruta; ?>terceros_historico.php" title="normativa a7g historicos">
            HIST: Directorio hist&oacute;rico de actos con efectos sobre terceros
            <?php echo (isset($_SESSION['terceros_historico'])) ? "(Ok)" : ""; ?>
        </a>
        <u></u>
        <br/>

        <!-- estructura organica -->
        <b>4. Estructura Org&aacute;nica</b>
        <a href="<?php echo $ruta; ?>facultades.php" title="normativa a7b">
            CSV: Facultades, funciones y atribuciones de sus unidades u &oacute;rganos internos
            <?php echo (isset($_SESSION['facultades'])) ? "(Ok)" : ""; ?>
        </a>
        <a href="<?php echo $ruta; ?>organica.php" title="organica">
            Editor de estructuras org&aacute;nicas
            <?php echo (isset($_SESSION['organica'])) ? "(Ok)" : ""; ?>
        </a>
        <a href="<?php echo $ruta; ?>img_organica.php" title="img organica">
            Publicar organigrama (JPG/PNG)
            <?php echo (isset($_SESSION['organica'])) ? "(Ok)" : ""; ?>
        </a>
        <a href="<?php echo $ruta; ?>url_organica.php" title="url organica">
            URL: Estructura org&aacute;nica
            <?php echo (isset($_SESSION['url_organica'])) ? "(Ok)" : ""; ?>
        </a>
        <u></u>
        <br/>


        <!-- personal -->
        <b>5. Dotaci&oacute;n de Personal</b>
        <a href="<?php echo $ruta; ?>horasextraordinarias.php" title="Horas Extraordinarias">
            CSV: Generador de datos sobre horas extraordinarias
            <?php if (isset($_SESSION['horasextraordinarias'])) echo "(Ok)"; ?>
        </a>
        <a href="<?php echo $ruta; ?>horasextraordinarias_multicarga.php" title="Horas Extraordinarias">
            CSV: Generador de datos sobre horas extraordinarias (Multicarga)
            <?php if (isset($_SESSION['horasextraordinarias'])) echo "(Ok)"; ?>
        </a>
        <a href="<?php echo $ruta; ?>personal_historico.php" title="Directorio historico">
            HIST: Directorio hist&oacute;rico de personal
            <?php
            $k = isset($_SESSION['planta_historico']) ? 1 : 0;
            $k += isset($_SESSION['contrata_historico']) ? 1 : 0;
            $k += isset($_SESSION['honorarios_historico']) ? 1 : 0;
            $k += isset($_SESSION['codtrabajo_historico']) ? 1 : 0;
            if ($k > 0 && $k < 4) echo " ($k/4)";
            if ($k == 4) echo " (Ok)";
            ?>
        </a>
        <a href="<?php echo $ruta; ?>plantaycontrata.php" title="Planta y contrata">
            CSV: Generador de personal de planta y contrata
            <?php
            $k = 0;
            if (isset($_SESSION['personal_planta'])) $k++;
            if (isset($_SESSION['personal_contrata'])) $k++;

            if ($k == 2) echo "(Ok)";
            if ($k > 0 && $k < 2) echo "($k/2)";
            ?>
        </a>
        <a href="<?php echo $ruta; ?>remuneraciones.php" title="Remuneraciones">
            CSV: Generador de remuneraciones seg&uacute;n estamentos, grados o jornadas
            <?php if (isset($_SESSION['remuneraciones'])) echo "(Ok)"; ?>
        </a>
        <a href="<?php echo $ruta; ?>honorarios.php" title="Honorarios">
            CSV: Generador de personal a honorarios
            <?php if (isset($_SESSION['personal_honorarios'])) echo "(Ok)"; ?>
        </a>
        <a href="<?php echo $ruta; ?>personalcodtrabajo.php" title="Otras Contrataciones">
            CSV: Otras contrataciones sujetas al c&oacute;digo del trabajo
            <?php if (isset($_SESSION['personal_otros'])) echo "(Ok)"; ?>
        </a>
        <u></u></p>


    <!-- columna 2 -->
    <p class="subMenu">


        <!-- compras -->
        <b>6. Compras y Adquisiciones</b>
        <a href="<?php echo $ruta; ?>url_compraspublicas.php" title="Url Compras P&uacute;blicas">
            URL: Sistema de Compras P&uacute;blicas
            <?php echo isset($_SESSION['url_mpublico']) ? "(Ok)" : ""; ?>
        </a>
        <a href="<?php echo $ruta; ?>otrascompras_historico.php" title="Historico">
            HIST: Directorio hist&oacute;rico de otras compras y adquisiciones
            <?php echo isset($_SESSION['otrascompras_historico']) ? "(Ok)" : ""; ?>
        </a>
        <a href="<?php echo $ruta; ?>otrascompras.php" title="Compras fuera del SCP">
            CSV: Otras compras y adquisiciones
            <?php echo isset($_SESSION['otras_compras']) ? "(Ok)" : ""; ?>
        </a>
        <a href="<?php echo $ruta; ?>bienesinmuebles.php" title="Contratos bienes inmuebles">
            CSV: Contratos bienes inmuebles
            <?php echo isset($_SESSION['bienes_inmuebles']) ? "(Ok)" : ""; ?>
        </a>
        <u></u>
        <br/>


        <!-- presupuesto -->
        <b>7. Presupuesto</b>
        <a href="<?php echo $ruta; ?>url_dipres.php" title="Url DIPRES">
            URL: Informes de ejecuci&oacute;n presupuestaria
            <?php echo isset($_SESSION['url_dipres']) ? "(Ok)" : ""; ?>
        </a>
        <u></u>
        <br/>


        <!-- transferencias -->
        <b>8. Transferencias</b>
        <a href="<?php echo $ruta; ?>url_registro19862.php" title="URL Registros 19862">
            URL: Registros ley N&deg; 19.862
            <?php echo (isset($_SESSION['msg_registro']) || isset($_SESSION['url_registro'])) ? "(Ok)" : ""; ?>
        </a>
        <a href="<?php echo $ruta; ?>transferencias_historico.php" title="Historico">
            HIST: Directorio hist&oacute;rico de otras transferencias
            <?php echo isset($_SESSION['transferencias_historico']) ? "(Ok)" : ""; ?>
        </a>
        <a href="<?php echo $ruta; ?>transferencias.php" title="Otras Transferencias">
            CSV: Otras transferencias
            <?php echo isset($_SESSION['transferencias']) ? "(Ok)" : ""; ?>
        </a>
        <u></u>
        <br/>


        <!-- auditorias -->
        <b>9. Auditor&iacute;as al Ejercicio Presupuestario</b>
        <a href="<?php echo $ruta; ?>auditorias_historico.php" title="Historico">
            HIST: Directorio hist&oacute;rico de auditor&iacute;as
            <?php echo isset($_SESSION['auditorias_historico']) ? "(Ok)" : ""; ?>
        </a>
        <a href="<?php echo $ruta; ?>auditorias.php" title="Generar Auditorias">
            CSV: Generador de auditor&iacute;as
            <?php echo isset($_SESSION['auditorias']) ? "(Ok)" : ""; ?>
        </a>
        <u></u>
    </p>


    <!-- columna 3 -->
    <p class="subMenu">


        <!-- tramites -->
        <b>10. Tr&aacute;mites</b>
        <a href="<?php echo $ruta; ?>url_chileatiende.php" title="Url ChileAtiende">
            URL: Tr&aacute;mites en ChileAtiende
            <?php echo (isset($_SESSION['msg_chileatiende']) || isset($_SESSION['url_chileatiende'])) ? "(Ok)" : ""; ?>
        </a>
        <a href="<?php echo $ruta; ?>tramites.php" title="Otros Tramites">
            CSV: Otros tr&aacute;mites
            <?php echo isset($_SESSION['otros_tramites']) ? "(Ok)" : ""; ?>
        </a>
        <u></u>
        <br/>


        <!-- subsidios y beneficios -->
        <b>11. Subsidios y Beneficios</b>
        <a href="<?php echo $ruta; ?>subsidio_historico.php" title="Historico de Subsidios">
            HIST: Directorio hist&oacute;rico de programas sociales y beneficiarios
            <?php echo isset($_SESSION['subsidio_historico']) ? "(Ok)" : ""; ?>
        </a>
        <a href="<?php echo $ruta; ?>subsidioprogramas.php" title="Montos de Subsidio">
            CSV: Programas de subsidios y otros beneficios
            <?php echo isset($_SESSION['subsidio_programas']) ? "(Ok)" : ""; ?>
        </a>
        <a href="<?php echo $ruta; ?>subsidionominas.php" title="Nominas de Subsidio">
            CSV: N&oacute;mina de beneficiarios de programas sociales en ejecuci&oacute;n
            <?php echo isset($_SESSION['subsidio_nominas']) ? "(Ok)" : ""; ?>
        </a>
        <u></u>
        <br/>


        <!-- Mecanismos de participacion ciudadana -->
        <b>12. Participaci&oacute;n Ciudadana</b>
        <a href="<?php echo $ruta; ?>ciudadana.php" title="Participacion Ciudadana">
            CSV: Mecanismos de participaci&oacute;n ciudadana
            <?php echo isset($_SESSION['participacion_ciudadana']) ? "(Ok)" : ""; ?>
        </a>
        <a href="<?php echo $ruta; ?>consejosconsultivos.php" title="Consejos Consultivos">
            CSV: Consejos consultivos
            <?php echo isset($_SESSION['consejosconsultivos']) ? "(Ok)" : ""; ?>
        </a>
        <a href="<?php echo $ruta; ?>url_ciudadana.php" title="Norma General">
            URL: Norma General de Participaci&oacute;n Ciudadana
            <?php echo (isset($_SESSION['msg_ciudadana']) || isset($_SESSION['url_ciudadana'])) ? "(Ok)" : ""; ?>
        </a>
        <a href="<?php echo $ruta; ?>url_ciudadana2.php" title="Portal Participacion Ciudadana">
            URL: Portal de Participaci&oacute;n Ciudadana
            <?php echo (isset($_SESSION['msg_ciudadana2']) || isset($_SESSION['url_ciudadana2'])) ? "(Ok)" : ""; ?>
        </a>
        <u></u>
        <br/>


        <!-- vinculos -->
        <b>13. V&iacute;nculos Institucionales</b>
        <a href="<?php echo $ruta; ?>vinculos.php" title="vinculos">
            CSV: V&iacute;nculos institucionales
            <?php echo isset($_SESSION['vinculos']) ? "(Ok)" : ""; ?>
        </a>
        <u></u>

        <br/>
        <!-- ley del lobby -->
        <b>14. Ley del Lobby</b>
        <a href="<?php echo $ruta; ?>url_lobby.php" title="Url Ley del Lobby">
            URL: Acceso a subsitio lobby
            <?php echo (isset($_SESSION['msg_lobby']) || isset($_SESSION['url_lobby'])) ? "(Ok)" : ""; ?>
        </a>
        <u></u>


    </p>


    <p class="subMenu">

        <b>15. Derecho de Acceso a la Informaci&oacute;n P&uacute;blica</b>
        <a href="<?php echo $ruta; ?>url_solicitudes.php">URL: Enlace a sistema electr&oacute;nico
            <?php echo(isset($_SESSION['url_solicitudes']) ? "(Ok)" : "") ?>
        </a>
        <a href="<?php echo $ruta; ?>formulario_descargable.php">URL: Enlace a formulario descargable
            <?php echo(isset($_SESSION['formulario_descargable']) ? "(Ok)" : "") ?>
        </a>
        <a href="<?php echo $ruta; ?>canales_ingreso.php">URL: Canales o v&iacute;as de ingreso
            <?php echo((isset($_SESSION['msg_canales_ingreso']) || isset($_SESSION['canales_ingreso'])) ? "(Ok)" : "") ?>
        </a>
        <a href="<?php echo $ruta; ?>oficinas_atencion.php">CSV: Direcciones de oficinas de atenci&oacute;n
            <?php echo((isset($_SESSION['oficinas_atencion']) || isset($_SESSION['url_oficinas_atencion'])) ? "(Ok)" : "") ?>
        </a>
        <a href="<?php echo $ruta; ?>tutoriales_institucionales.php">URL: Tutoriales institucionales
            <?php echo(isset($_SESSION['tutoriales_institucionales']) ? "(Ok)" : "") ?>
        </a>
        <a href="<?php echo $ruta; ?>dificultad_tecnica_sistema_electronico.php">URL: Dificultad t&eacute;cnica sistema
            electr&oacute;nico
            <?php echo((isset($_SESSION['msg_dificultad_tecnica_sistema_electronico']) || isset($_SESSION['dificultad_tecnica_sistema_electronico'])) ? "(Ok)" : "") ?>
        </a>
        <a href="<?php echo $ruta; ?>dificultad_tecnica_reporte_error.php">URL: Dificultad t&eacute;cnica reporte un
            error
            <?php echo((isset($_SESSION['msg_dificultad_tecnica_reporte_error']) || isset($_SESSION['dificultad_tecnica_reporte_error'])) ? "(Ok)" : "") ?>
        </a>
        <a href="<?php echo $ruta; ?>contactotransparencia.php">Ingrese datos de contacto Transparencia
            <?php echo(isset($_SESSION['encargado']) && ($_SESSION['contacto_transparencia']) ? "(Ok)" : "") ?>
        </a>
        <a href="<?php echo $ruta; ?>generador_portada_solicitudo_info_transparencia.php">GEN: Generador portada
            Solicitud de Informaci&oacute;n Ley de Transparencia
            <?php echo(isset($_SESSION['generador_portada_solicitudo_info_transparencia']) ? "(Ok)" : "") ?>
        </a>
        <a href="<?php echo $ruta; ?>secretoreserva.php">CSV: &Iacute;ndice de actos y documentos calificados como
            secretos o reservados
            <?php echo(isset($_SESSION['secretoreserva']) ? "(Ok)" : "") ?>
        </a>
        <a href="<?php echo $ruta; ?>informacion_no_disponible.php">CSV: Informaci&oacute;n no disponible en poder del
            servicio
            <?php echo(isset($_SESSION['informacion_no_disponible']) ? "(Ok)" : "") ?>
        </a>
        <a href="<?php echo $ruta; ?>registro_respuestas_solicitudes.php">CSV: Registro de respuestas de solicitudes
            <?php echo(isset($_SESSION['registro_respuestas_solicitudes']) ? "(Ok)" : "") ?>
        </a>
        <u></u>
        <br/>

        <b>16. Costos Directos de Reproducci&oacute;n</b>
        <a href="<?php echo $ruta; ?>url_costos_directos.php">URL: Costos directos de reproducci&oacute;n de la
            informaci&oacute;n requerida v&iacute;a ley N&deg; 20.285
            <?php echo(isset($_SESSION['url_costos_directos']) ? "(Ok)" : "") ?>
        </a>
        <u></u>
        <br/>

        <b>17. Antecedentes preparatorios de normas que afecten a EMT Ley N° 20.416</b>
        <a href="<?php echo $ruta; ?>ley20416.php">CSV: Formularios y antecedentes de propuestas normativas que afecten
            a empresas de menor tamaño (EMT)
            <?php echo(isset($_SESSION['ley20416']) ? "(Ok)" : "") ?>
        </a>
        <u></u>
        <br/>

        <b>18. Declaraci&oacute;n de patrimonio e intereses</b>
        <a href="<?php echo $ruta; ?>patrimonioeintereses.php">CSV: Declaraci&oacute;n de patrimonio e intereses de
            autoridades
            <?php echo(isset($_SESSION['patrimonioeintereses']) ? "(Ok)" : "") ?>
        </a>
        <a href="<?php echo $ruta; ?>patrimonioeintereses_menu.php">HIST: Directorio de declaraciones de patrimonio e
            intereses
            <?php echo(isset($_SESSION['patrimonioeintereses_menu']) ? "(Ok)" : "") ?>
        </a>
        <a href="<?php echo $ruta; ?>url_patrimonioeintereses.php" title="Declaraciones de Patrimonio e Intereses">
            URL: Acceso a subsitio de Declaraciones de Patrimonio e Intereses
            <?php echo (isset($_SESSION['url_patrimonioeintereses'])) ? "(Ok)" : ""; ?>
        </a>
        <u></u>
        <br/>

    </p>

</div>
<div class="seccion">

    <p class="subMenu">
        <b>19. Generar Portada</b>
        <a href="<?php echo $ruta; ?>generar.php"><strong>GEN: Generador de men&uacute;s</strong></a>
        <u></u>
        <br/>

    </p>

    <p class="subMenu">
        <b>Herramientas</b>
        <a href="<?php echo $ruta; ?>csv2xhtml2.php" title="Conversor CSV a XHTML">
            Conversor CSV a XHTML </a>
        <!--
         <a href="mensajes.php" title="P&aacute;gina de mensaje">
         Generador de p&aacute;gina de mensaje</a> -->
        <a href="<?php echo $ruta; ?>planillas.php" title="Plantillas para los datos">
            Todas las plantillas</a>
        <a href="<?php echo $ruta; ?>directorios.zip" title="Estructura de directorios">
            Ejemplo de estructura de directorios</a>
        <a href="http://www.gobforge.gob.cl/projects/sgs20285/"
           title="Sistema de Gesti&oacute;n de Solicitudes en GobForge">
            Proyecto Gesti&oacute;n de Solicitudes de Transparencia,
            ley N&deg; 20.285, en GobForge </a>
        <u></u></p>

    <p class="subMenu">
        <b>Documentos</b>
        <a href="<?php echo $ruta; ?>documentos.php" title="Normas de Transparencia Activa">
            Normas de Transparencia</a>
        <u></u>
    </p>

    <!-- banner de una vez anterior -->
    <p class="subMenu">
        <b>Banners</b>
        <a title="Bajar Banner Gobierno Transparente est&aacute;tico en formato GIF"
           href="<?= $sitio ?>/asistente/banner-no-animado.gif"><img src="<?= $sitio ?>/asistente/banner-no-animado.gif"
                                                                     border="0"
                                                                     alt="Banner no animado Gobierno Transparente"/></a>
        <a title="Bajar Banner Gobierno Transparente est&aacute;tico en formato GIF"
           href="<?= $sitio ?>/asistente/banner-no-animado-blanco.gif"><img
                src="<?= $sitio ?>/asistente/banner-no-animado-blanco.gif" border="0"
                alt="Banner no animado Gobierno Transparente"/></a>
        <a title="Bajar Banner Solicitud de Informaci&iacute;n est&aacute;tico en formato GIF"
           href="<?= $sitio ?>/asistente/banner_azul_leytransparencia.gif"><img
                src="<?= $sitio ?>/asistente/banner_azul_leytransparencia.gif" border="0"
                alt="Banner no animado Solicitud de Acceso"/></a>
        <a title="Bajar Banner Solicitud de Informaci&iacute;n est&aacute;tico en formato GIF"
           href="<?= $sitio ?>/asistente/banner_blanco_leytransparencia.gif"><img
                src="<?= $sitio ?>/asistente/banner_blanco_leytransparencia.gif" border="0"
                alt="Banner no animado Solicitud de Acceso"/></a>
        <u></u></p>


</div>

<p style="text-align: center;"><a href="http://creativecommons.org/licenses/by-nc-sa/3.0/cl/"
                                  title="Creative Commons"><img
            src="http://i.creativecommons.org/l/by-nc-sa/3.0/88x31.png" alt="Creative Commons 3.0: by-nc-sa"/></a></p>

<div class="detalle-bottom">
    <font class="botones">
        <a href="javascript:window.print();" title="Imprimir este documento"><img
                src="http://www.gobiernotransparente.gob.cl/material/images/ico-print.gif" border="0" height="33"
                width="37" alt="Imprimir"/></a>
    </font>
</div>
<!--
 <div class="footer">
<p>
  
</p>



 </div>
-->

<script type="text/javascript">
    var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
    document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
    try {
        var pageTracker = _gat._getTracker("UA-10205593-1");
        pageTracker._trackPageview();
    } catch (err) {
    }</script>

</body></html>
