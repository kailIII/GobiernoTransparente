<?php

require_once "common.php";

html_header("Generador de Men&uacute;s");

$_SESSION['back'] = "generar.php";

?>

<h2>Informaci&oacute;n entregada</h2>
A continuaci&oacute;n se presentar&aacute; un formulario que le permitir&aacute; crear los men&uacute; para la p&aacute;gina de inicio de su sitio.
<br/>
El listado que se presenta a continuaci&oacute;n corresponde a aquellos items que ya ha completado.<br/>
Verifique que se encuentren seleccionados s&oacute;lo aquellos que sean pertinentes a su organismo.<br/>
<br/>

<form action="generar-b.php" method="post">


    <input type="submit" value="Siguiente paso"/>

    <br/><br/>

    <table class="tabla">


        <!-- seccion de conversion de planillas -->

        <tr>
            <th colspan="2">ITEMS A PUBLICAR</th>
        </tr>
        <tr>
            <th>Planillas generadas</th>
            <th>Generado</th>
        </tr>

        <tr>
            <td><a href="marconormativo.php?g">Marco normativo, art. 7-(c) (entregar CSV, generar XHTML)</a></td>
            <td><input type="checkbox"
                       name="marconormativo" <?php echo isset($_SESSION['marconormativo']) ? "checked" : ""; ?> /></td>
        </tr>

        <tr>
            <td><a href="potestades.php?g">Potestades, competencias, responsabilidades, funciones, atribuciones y/o
                    tareas, art. 6 (entregar CSV, generar XHTML)</a></td>
            <td><input type="checkbox"
                       name="potestades" <?php echo isset($_SESSION['potestades']) ? "checked" : ""; ?> /></td>
        </tr>

        <tr>
            <td><a href="diariooficial.php?g">Actos y documentos publicados en el Diario Oficial, art. 6 (entregar CSV,
                    generar XHTML)</a></td>
            <td><input type="checkbox"
                       name="diariooficial" <?php echo isset($_SESSION['diariooficial']) ? "checked" : ""; ?> /></td>
        </tr>

        <tr>
            <td><a href="terceros.php?g">Actos con efectos sobre terceros, art. 7-(g) (entregar CSV, generar XHTML)</a>
            </td>
            <td><input type="checkbox"
                       name="terceros_index" <?php echo isset($_SESSION['terceros_index']) ? "checked" : ""; ?> /></td>
        </tr>

        <tr>
            <td><a href="facultades.php?g">Facultades, funciones y atribuciones de sus unidades u &oacute;rganos
                    internos, art. 7-(b) (entregar CSV, generar XHTML)</a></td>
            <td><input type="checkbox"
                       name="facultades" <?php echo isset($_SESSION['facultades']) ? "checked" : ""; ?> /></td>
        </tr>

        <tr>
            <td><a href="plantaycontrata.php?g">Personal de planta (entregar CSV, generar varios XHTML)</a></td>
            <td><input type="checkbox"
                       name="personal_planta" <?php echo isset($_SESSION['personal_planta']) ? "checked" : ""; ?> />
            </td>
        </tr>

        <tr>
            <td><a href="plantaycontrata.php?g">Personal a contrata (entregar CSV, generar varios XHTML)</a></td>
            <td><input type="checkbox"
                       name="personal_contrata" <?php echo isset($_SESSION['personal_contrata']) ? "checked" : ""; ?> />
            </td>
        </tr>

        <tr>
            <td><a href="remuneraciones.php?g">Remuneraciones seg&uacute;n estamentos, grados o jornada (entregar CSV,
                    generar varios XHTML)</a></td>
            <td><input type="checkbox"
                       name="remuneraciones" <?php echo isset($_SESSION['remuneraciones']) ? "checked" : ""; ?> /></td>
        </tr>

        <tr>
            <td><a href="honorarios.php?g">Personal a honorarios (entregar CSV, generar varios XHTML)</a></td>
            <td><input type="checkbox"
                       name="personal_honorarios" <?php echo isset($_SESSION['personal_honorarios']) ? "checked" : ""; ?> />
            </td>
        </tr>

        <tr>
            <td><a href="personalcodtrabajo.php">Personal - otros contratos (entregar CSV, generar varios XHTML)</a>
            </td>
            <td><input type="checkbox"
                       name="personal_otros" <?php echo isset($_SESSION['personal_otros']) ? "checked" : ""; ?> /></td>
        </tr>

        <tr>
            <td><a href="otrascompras.php?g">Otras Compras (entregar CSV, generar XHTML)</a></td>
            <td><input type="checkbox"
                       name="otras_compras" <?php echo isset($_SESSION['otras_compras']) ? "checked" : ""; ?> /></td>
        </tr>

        <tr>
            <td><a href="bienesinmuebles.php?g">Contratos bienes inmuebles (entregar CSV, generar XHTML)</a></td>
            <td><input type="checkbox"
                       name="bienes_inmuebles" <?php echo isset($_SESSION['bienes_inmuebles']) ? "checked" : ""; ?> />
            </td>
        </tr>

        <tr>
            <td><a href="transferencias.php?g">Transferencias (entregar CSV, generar XHTML)</a></td>
            <td><input type="checkbox"
                       name="transferencias" <?php echo isset($_SESSION['transferencias']) ? "checked" : ""; ?> /></td>
        </tr>

        <tr>
            <td><a href="auditorias.php?g">Aud&iacute;torias (entregar CSV, generar XHTML)</a></td>
            <td><input type="checkbox"
                       name="auditorias" <?php echo isset($_SESSION['auditorias']) ? "checked" : ""; ?> /></td>
        </tr>

        <tr>
            <td><a href="tramites.php?g">Otros Tr&aacute;mites (entregar CSV, generar XHTML)</a></td>
            <td><input type="checkbox"
                       name="otros_tramites" <?php echo isset($_SESSION['otros_tramites']) ? "checked" : ""; ?> /></td>
        </tr>

        <tr>
            <td><a href="ciudadana.php?g">Mecanismos de participaci&oacute;n Ciudadana (entregar CSV, generar XHTML)</a>
            </td>
            <td><input type="checkbox"
                       name="participacion_ciudadana" <?php echo isset($_SESSION['participacion_ciudadana']) ? "checked" : ""; ?> />
            </td>
        </tr>

        <tr>
            <td><a href="subsidioprogramas.php?g">Programas de Subsidios y Otros Beneficios (entregar CSV, generar
                    XHTML)</a></td>
            <td><input type="checkbox"
                       name="subsidio_programas" <?php echo isset($_SESSION['subsidio_programas']) ? "checked" : ""; ?> />
            </td>
        </tr>

        <tr>
            <td><a href="vinculos.php?g">V&iacute;nculos institucionales (entregar CSV, generar XHTML)</a></td>
            <td><input type="checkbox" name="vinculos" <?php echo isset($_SESSION['vinculos']) ? "checked" : ""; ?> />
            </td>
        </tr>

        <tr>
            <td><a href="informacion_no_disponible.php?g">Informaci&oacute;n no disponible en poder del servicio</a>
            </td>
            <td><input type="checkbox"
                       name="informacion_no_disponible" <?php echo isset($_SESSION['informacion_no_disponible']) ? "checked" : ""; ?> />
            </td>
        </tr>

        <tr>
            <td><a href="secretoreserva.php?g">&Iacute;ndice de actos y documentos calificados como secretos o
                    reservados (entregar CSV, generar XHTML)</a></td>
            <td><input type="checkbox"
                       name="secretoreserva" <?php echo isset($_SESSION['secretoreserva']) ? "checked" : ""; ?> /></td>
        </tr>

        <tr>
            <td><a href="ley20416.php?g">Antecedentes preparatorios de propuestas normativas que afecten a empresas de
                    menor tamaño (Ley N° 20.416) (entregar CSV, generar XHTML)</a></td>
            <td><input type="checkbox" name="ley20416" <?php echo isset($_SESSION['ley20416']) ? "checked" : ""; ?> />
            </td>
        </tr>

        <tr>
            <td><a href="patrimonioeintereses.php?g">Declaraci&oacute;n de patrimonio e intereses de autoridades
                    (entregar CSV, generar XHTML)</a></td>
            <td><input type="checkbox"
                       name="patrimonioeintereses" <?php echo (isset($_SESSION['patrimonioeintereses'])) ? "checked" : ""; ?> />
            </td>
        </tr>

        <tr>
            <td><a href="oficinas_atencion.php?g">Direcciones de oficinas de atención (entregar CSV, generar XHTML)</a>
            </td>
            <td><input type="checkbox"
                       name="oficinas_atencion" <?php echo (isset($_SESSION['oficinas_atencion']) || isset($_SESSION['url_oficinas_atencion'])) ? "checked" : ""; ?> />
            </td>
        </tr>

        <tr>
            <td><a href="registro_respuestas_solicitudes.php?g">Registro de respuestas de solicitudes (entregar CSV,
                    generar XHTML)</a></td>
            <td><input type="checkbox"
                       name="registro_respuestas_solicitudes" <?php echo (isset($_SESSION['registro_respuestas_solicitudes'])) ? "checked" : ""; ?> />
            </td>
        </tr>

        <!-- Generar indices de valores historicos -->

        <tr>
            <th>Archivos generados en l&iacute;nea</th>
            <th>Generado</th>
        </tr>

        <tr>
            <td>Estructura org&aacute;nica (generar XHTML)</td>
            <td><input type="checkbox" name="organica"
                    <?php echo isset($_SESSION['organica']) ? "checked" : ""; ?> /></td>
        </tr>

        <tr>
            <td>Hist&oacute;rico: Dotaci&oacute;n de Planta (generar XHTML)</td>
            <td><input type="checkbox" name="planta_historico"
                    <?php echo isset($_SESSION['planta_historico']) ? "checked" : ""; ?> /></td>
        </tr>

        <tr>
            <td>Hist&oacute;rico: Dotaci&oacute;n a Contrata (generar XHTML)</td>
            <td><input type="checkbox" name="contrata_historico"
                    <?php echo isset($_SESSION['contrata_historico']) ? "checked" : ""; ?> /></td>
        </tr>

        <tr>
            <td>Hist&oacute;rico: Dotaci&oacute;n a Honorarios (generar XHTML)</td>
            <td><input type="checkbox" name="honorarios_historico"
                    <?php echo isset($_SESSION['honorarios_historico']) ? "checked" : ""; ?> /></td>
        </tr>

        <tr>
            <td>Hist&oacute;rico: Otras contrataciones seg&uacute;n C&oacute;digo del Trabajo (generar XHTML)</td>
            <td><input type="checkbox" name="codtrabajo_historico"
                    <?php echo isset($_SESSION['codtrabajo_historico']) ? "checked" : ""; ?> /></td>
        </tr>

        <tr>
            <td>Hist&oacute;rico: Otras compras y adquisiciones (generar XHTML)</td>
            <td><input type="checkbox" name="otrascompras_historico"
                    <?php echo isset($_SESSION['otrascompras_historico']) ? "checked" : ""; ?> /></td>
        </tr>

        <tr>
            <td>Hist&oacute;rico: Contratos bienes inmuebles (generar XHTML)</td>
            <td><input type="checkbox" name="bienesinmuebles_historico"
                    <?php echo isset($_SESSION['bienesinmuebles_historico']) ? "checked" : ""; ?> /></td>
        </tr>

        <tr>
            <td>Hist&oacute;rico: Transferencias (generar XHTML)</td>
            <td><input type="checkbox" name="transferencias_historico"
                    <?php echo isset($_SESSION['transferencias_historico']) ? "checked" : ""; ?> /></td>
        </tr>

        <tr>
            <td>Hist&oacute;rico: Auditor&iacute;as al ejercicio presupuestario (generar XHTML)</td>
            <td><input type="checkbox" name="auditorias_historico"
                    <?php echo isset($_SESSION['auditorias_historico']) ? "checked" : ""; ?> /></td>
        </tr>

        <tr>
            <td>Hist&oacute;rico: Beneficiarios de programas sociales (generar XHTML)</td>
            <td><input type="checkbox" name="subsidio_historico"
                    <?php echo isset($_SESSION['subsidio_historico']) ? "checked" : ""; ?> /></td>
        </tr>

        <tr>
            <td>Generador portada Solicitud de Información Ley de Transparencia (generar XHTML)</td>
            <td><input type="checkbox" name="generador_portada_solicitudo_info_transparencia"
                    <?php echo isset($_SESSION['generador_portada_solicitudo_info_transparencia']) ? "checked" : ""; ?> />
            </td>
        </tr>


        <!-- seccion de entregar URL -->

        <tr>
            <th>Generados a partir de URL</th>
            <th>Generado</th>
        </tr>

        <tr>
            <td><a href="url_bibcongreso.php?g">URL: Biblioteca del Congreso Nacional (entregar URL)</a></td>
            <td><input type="checkbox" name="url_bibcongreso" disabled
                       readonly <?php echo isset($_SESSION['url_bibcongreso']) ? "checked" : ""; ?> /></td>
        </tr>

        <tr>
            <td><a href="url_diariooficial.php?g">URL: Diario Oficial (entregar URL)</a></td>
            <td><input type="checkbox" name="url_diariooficial" disabled
                       readonly <?php echo isset($_SESSION['url_diariooficial']) ? "checked" : ""; ?> /></td>
        </tr>

        <tr>
            <td><a href="url_compraspublicas.php?g">URL: Compras en MercadoP&uacute;blico (entregar URL)</a></td>
            <td><input type="checkbox" name="url_mpublico" disabled
                       readonly <?php echo isset($_SESSION['url_mpublico']) ? "checked" : ""; ?> /></td>
        </tr>

        <tr>
            <td><a href="url_registro19862.php?g">URL: Registro 19862 (entregar URL)</a></td>
            <td><input type="checkbox" name="url_registro" disabled
                       readonly <?php echo (isset($_SESSION['url_registro']) || isset($_SESSION['msg_registro'])) ? "checked" : ""; ?> />
            </td>
        </tr>

        <tr>
            <td><a href="url_dipres.php?g">URL: Informes de ejecución presupuestaria (entregar URL)</a></td>
            <td><input type="checkbox" name="url_dipres" disabled
                       readonly <?php echo isset($_SESSION['url_dipres']) ? "checked" : ""; ?> /></td>
        </tr>

        <tr>
            <td><a href="url_chileatiende.php?g">URL: Tr&aacute;mites listados en ChileAtiende (entregar URL)</a></td>
            <td><input type="checkbox" name="url_chileatiende" disabled
                       readonly <?php echo isset($_SESSION['url_chileatiende']) ? "checked" : ""; ?> /></td>
        </tr>

        <tr>
            <td><a href="url_lobby.php?g">URL: Acceso a subsitio lobby (entregar URL)</a></td>
            <td><input type="checkbox" name="url_lobby" disabled
                       readonly <?php echo isset($_SESSION['url_lobby']) ? "checked" : ""; ?> /></td>
        </tr>

        <tr>
            <td><a href="url_ciudadana.php?g">URL: Norma Gral. de Participaci&oacute;n Ciudadana (entregar URL)</a></td>
            <td><input type="checkbox" name="url_ciudadana" disabled
                       readonly <?php echo isset($_SESSION['url_ciudadana']) ? "checked" : ""; ?> /></td>
        </tr>

        <tr>
            <td><a href="url_ciudadana2.php?g">URL: Portal de Participaci&oacute;n Ciudadana (entregar URL)</a></td>
            <td><input type="checkbox" name="url_ciudadana2" disabled
                       readonly <?php echo isset($_SESSION['url_ciudadana2']) ? "checked" : ""; ?> /></td>
        </tr>

        <tr>
            <td><a href="url_solicitudes.php?g">URL: Sistema de Solicitudes (entregar URL)</a></td>
            <td><input type="checkbox" name="url_solicitudes" disabled
                       readonly <?php echo isset($_SESSION['url_solicitudes']) ? "checked" : ""; ?> /></td>
        </tr>

        <tr>
            <td><a href="url_costos_directos.php?g">URL: Costos Directos de Reproducci&oacute;n de la Informaci&oacute;n
                    (entregar URL)</a></td>
            <td><input type="checkbox" name="url_costos_directos" disabled
                       readonly <?php echo isset($_SESSION['url_costos_directos']) ? "checked" : ""; ?> /></td>
        </tr>

        <tr>
            <td><a href="formulario_descargable.php?g">URL: Enlace a formulario descargable (entregar URL)</a></td>
            <td><input type="checkbox" name="formulario_descargable" disabled
                       readonly <?php echo isset($_SESSION['formulario_descargable']) ? "checked" : ""; ?> /></td>
        </tr>

        <tr>
            <td><a href="canales_ingreso.php?g">URL: Canales o vías de ingreso (entregar URL)</a></td>
            <td><input type="checkbox" name="canales_ingreso" disabled
                       readonly <?php echo (isset($_SESSION['canales_ingreso']) || isset($_SESSION['msg_canales_ingreso'])) ? "checked" : ""; ?> />
            </td>
        </tr>

        <tr>
            <td><a href="tutoriales_institucionales.php?g">URL: Tutoriales institucionales (entregar URL)</a></td>
            <td><input type="checkbox" name="tutoriales_institucionales" disabled
                       readonly <?php echo isset($_SESSION['tutoriales_institucionales']) ? "checked" : ""; ?> /></td>
        </tr>

        <tr>
            <td><a href="dificultad_tecnica_sistema_electronico.php?g">URL: Dificultad técnica sistema electrónico
                    (entregar URL)</a></td>
            <td><input type="checkbox" name="dificultad_tecnica_sistema_electronico" disabled
                       readonly <?php echo isset($_SESSION['dificultad_tecnica_sistema_electronico']) ? "checked" : ""; ?> />
            </td>
        </tr>

        <tr>
            <td><a href="dificultad_tecnica_reporte_error.php?g">URL: Dificultad técnica reporte un error (entregar
                    URL)</a></td>
            <td><input type="checkbox" name="dificultad_tecnica_reporte_error" disabled
                       readonly <?php echo isset($_SESSION['dificultad_tecnica_reporte_error']) ? "checked" : ""; ?> />
            </td>
        </tr>
        <tr>
            <td><a href="url_patrimonioeintereses.php?g">URL: Acceso a subsitio de Declaraciones de Patrimonio e Intereses (entregar URL)</a></td>
            <td><input type="checkbox" name="url_patrimonioeintereses" disabled
                       readonly <?php echo isset($_SESSION['url_patrimonioeintereses']) ? "checked" : ""; ?> /></td>
        </tr>

    </table>

    <br/>

    <input type="submit" value="Siguiente paso"/>

</form><br/>
<?php echo html_button("main.php"); ?>


<?php html_footer(); ?>
