<!DOCTYPE html>
<link rel="stylesheet" href="vistas/bower_components/tabs/jquery-ui.css">
<link rel="stylesheet" href="vistas/bower_components/tabs/css/table.css">
<script src="vistas/bower_components/tabs/jquery-1.12.4.js"></script>
<script src="vistas/bower_components/tabs/jquery-ui.js"></script>
<script>
$(function() {
    $("#tabs").tabs();
});
</script>
<div class="content-wrapper">
    <div class="content-header">
        <h1>Instituciones Estatales de Seguridad Pública</h1>
        <ol class="breadcrumb">
            <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
            <li><a href="#">Formulario</li>
            <li class="active">Policías</a></li>
        </ol>
    </div>


    <?php
//BUSCAR PREGUNTA Formulario
$pregunta = ModeloPolicias:: mdlMostrarPolicias("policias","uuid", $_SESSION["id"]);
if(count($pregunta)==0){
$idFormulario=0;
}else{
$idFormulario=$pregunta[0]["id"];
$estatus=$pregunta[0]["estatus"];
}
?>

    <!--   <section class="content">  -->
    <div style="font-" class="content">
        <div class="box">
            <header class="text-center">
                <h1>Plataforma Justicia</h1>
                <hr />
                <div style="font-size:20px;">
                  <b>El presente cuestionario forma parte de un proyecto de
                    fortalecimiento institucional cuyo objetivo es brindar apoyo a los operadores
                    del Sistema de Justicia Penal en cada entidad federativa.</b>
              <a title="PDF" href="extensiones/tcpdf/pdf/pdfPolicias.php?id=<?php echo $_SESSION["id"]; ?>
                "target="_blank"><img src="vistas/img/plantilla/pdf.png" alt="PDF"  width="3%" /></a>  </div>
                <br><br>
<div style="float:right; padding-right:15px">ESTADO DEL FORMULARIO:







<?

        if($estatus == "0"){

        echo '<td><button class="btn btn-warning btn-xs btnActivar" >INCOMPLETO</button></td>';

      }elseif ($estatus == "1") {
        echo '<td><button class="btn btn-primary btn-xs btnActivar" >ENVIADO</button></td>';
      } elseif ($estatus == "2") {
        echo '<td><button class="btn btn-danger btn-xs btnActivar" >EN REVISIÓN</button></td>';
      }elseif ($estatus == "3") {
        echo '<td><button class="btn btn-success btn-xs btnActivar" >FINALIZADO</button></td>';
      }

?>








            </div><br><br>
            </header>




            <div class="row" style="margin-right: 15px;margin-left: 15px;">

                <!-- Tab Contacto principal -->

                <div id="tabs">

                    <ul style="position:fixed; z-index: 100px;" class="btn-flotante-2">
                        <li><a href="#tabs-1">Contacto</a></li>
                        <li><a href="#tabs-1-ind">INSTRUCCIONES</a></li>
                        <li><a href="#tabs-2">1</a></li>
                        <li><a href="#tabs-3">2</a></li>
                        <li><a href="#tabs-4">3</a></li>
                        <li><a href="#tabs-5">4</a></li>
                        <li><a href="#tabs-6">5</a></li>
                        <li><a href="#tabs-7">6</a></li>
                        <li><a href="#tabs-8">7</a></li>

                    </ul>











                    <div id="tabs-1">
                        <div style="font-size:20px;">
                            <br>Favor de proporcionar los siguientes datos con la finalidad de contactar a la persona
                            responsable del cuestionario, en caso de dudas.
                            <br>
                        </div>
                        <div class="panel panel-default">


                            <!--=====================================
UUID
======================================-->

                            <?php

                            ini_set('display_errors', 1);

                            ini_set('display_startup_errors', 1);

                            error_reporting(E_ALL);


$UUID = ModeloPolicias::mdlGeneraUUID();
$UUID = $UUID["generaUUID"];
?>


                            <div class="panel-heading">
                                <h3 class="panel-title text-center">Contacto principal</h3>
                            </div>
                            <br>
                            <div class="panel-body">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <form action="#" method="post" class="col-lg-12">

                                            <div class="form-group">

                                                <div class="input-group">

                                                    <!--===     <span class="input-group-addon"><i class="fa fa-commenting"></i></span>  =======-->

                                                    <input type="hidden" class="form-control  pull-right" name="UUID"
                                                        id="UUID" placeholder="UUID"
                                                        value="<?php echo $_SESSION["id"]; ?>">
                                                    <?php
//BUSCAR PREGUNTA Formulario
$pregunta = ModeloPolicias:: mdlMostrarPolicias("policias","uuid", $_SESSION["id"]);

if(count($pregunta)==0){
$idFormulario=0;
}else{
$idFormulario=$pregunta[0]["id"];
$pcontacto=$pregunta[0]["pcontacto"];
$area=$pregunta[0]["area"];
$cargo=$pregunta[0]["cargo"];
$mail=$pregunta[0]["mail"];
$telofi=$pregunta[0]["telofi"];
$ext=$pregunta[0]["ext"];
$telextra=$pregunta[0]["telextra"];
$pcontacto2=$pregunta[0]["pcontacto2"];
$area2=$pregunta[0]["area2"];
$cargo2=$pregunta[0]["cargo2"];
$mail2=$pregunta[0]["mail2"];
$telofi2=$pregunta[0]["telofi2"];
$ext2=$pregunta[0]["ext2"];
$telextra2=$pregunta[0]["telextra2"];

$estatus=$pregunta[0]["estatus"];


}
?>

              <input type="hidden" class="form-control pull-right"
                                                        name="idFormulario" id="idFormulario" placeholder="idFormulario"
                                                        value="<?php echo $idFormulario; ?>">
                                                </div>

                                            </div>



                                            <input   name="operador"  id="operador" type="hidden" value="Policias">
                                          <label>  Nombre de la persona responsable del cuestionario:</label>
                                            <input  type="text" name="pcontacto" id="pcontacto" class="form-control"
                                            <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                value="<?php echo $pcontacto; ?>">
                                          <label>  Cargo:</label><input type="text" name="cargo" id="cargo"
                                          <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                class="form-control" value="<?php echo $cargo; ?>">
                                          <label>    Área o unidad de adscripción:</label> <input type="text" name="area"
                                              <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                id="area" class="form-control" value="<?php echo $area; ?>">
                                        <label>    Correo electrónico:</label><input type="text" name="mail" id="mail"
                                          <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                class="form-control" value="<?php echo $mail; ?>">
                                            <label>  Teléfono de oficina:</label><input type="text" name="telofi"
                                            <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                id="telofi" class="form-control" value="<?php echo $telofi; ?>">
                                          <label>   Extensión: </label><input type="text" name="ext" id="ext"
                                            onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                           <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                class="form-control" value="<?php echo $ext; ?>">
                                          <label>  Otro teléfono: </label><input type="int" name="telextra"
                                            onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                            <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                id="telextra" class="form-control" value="<?php echo $telextra; ?>">
                                            <br />

                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="panel panel-default">


                            <div class="panel-heading">
                                <h3 class="panel-title text-center">Contacto secundario</h3>
                            </div>
                            <br>
                            <div class="panel-body">
                                <div class="col-md-12">
                                    <div class="form-group">

                                      <label>     Nombre de la persona responsable del cuestionario: </label><input type="text"
                                            name="pcontacto2" id="pcontacto2" class="form-control"
                                            <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                            value="<?php echo $pcontacto2; ?>">
                                      <label>     Cargo:  </label>  <input type="text" name="cargo2" id="cargo2" class="form-control"
                                        <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                            value="<?php echo $cargo2; ?>">
                                        <label>   Área o unidad de adscripción:   </label> <input type="text" name="area2" id="area2"
                                        <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                            class="form-control" value="<?php echo $area2; ?>">
                                        <label>   Correo electrónico:   </label> <input type="text" name="mail2" id="mail2"
                                        <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                            class="form-control" value="<?php echo $mail2; ?>">
                                        <label>   Teléfono de oficina:   </label> <input type="text" name="telofi2" id="telofi2"
                                        <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                            class="form-control" value="<?php echo $telofi2; ?>">
                                        <label>   Extensión:  </label>  <input type="text" name="ext2" id="ext2" class="form-control"
                                        <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                            value="<?php echo $ext2; ?>">
                                        <label>   Otro teléfono:  </label>  <input type="int" name="telextra2" id="telextra2"
                                          onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                        <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                            class="form-control" value="<?php echo $telextra2; ?>">
                                        <br />


                                        <input type="button" value="Guardar cambios"
                                            class="btn btn-success btn-flotante crearTab1" />
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                    <!-- Finaliza Tab Contacto principal -->









                    <div id="tabs-1-ind">

                        <div class="panel panel-default">

                            <div class="panel-heading">
                                <h3 class="panel-title text-center">INSTRUCCIONES GENERALES</h3>
                            </div>
                            <br>
                            <div class="panel-body">
                                <div class="col-md-12">
                                    <div class="form-group">


                                            <div class="form-group">

<div class="col-md-12">
<p>La Unidad de Apoyo al Sistema de Justicia (UASJ) presenta la siguiente guía para facilitar el proceso de llenado del formulario de Plataforma Justicia.</p>
<p>A continuación se encuentran las instrucciones para el correcto llenado de la información, así como el envío de la versión final del mismo.</p>


<ul>
 <li>La información reportada debe corresponder únicamente al Sistema de Justicia Penal Acusatorio con fecha de corte a diciembre 2020.
</li>
 <li>El formulario cuenta con una barra de navegación en la parte inferior del lado izquierdo que indica las secciones en las que este se divide.
</li>

</ul>

<div style=" text-align: center;">
<img src="http://unidaddejusticia.com/registro/hide/vistas/img/m1.png" width="80%" height="80%">
</div>
<ul>
 <li>En la pestaña "CONTACTO" deberá incluirse la información correspondiente a las personas que fungirán como Contacto Principal y como Contacto Secundario.

   <ul>
        <li>El contacto principal hace referencia al superior jerárquico de la persona que realiza el llenado del formulario. </li>
        <li>El contacto secundario se refiere a la persona enlace que responde el formulario.</li>
      </ul>

</li>


</ul>

<div style=" text-align: center;">
<img src="http://unidaddejusticia.com/registro/hide/vistas/img/m2.png" width="85%" height="85%">
</div>

<li>
Es posible realizar descargas preliminares de las respuestas en el formulario, seleccionando el ícono de PDF. <br><strong>Este documento descargable no tiene validez oficial. Se mostrará una marca de agua con la leyenda "Vista Preliminar".</strong>

</li>


</div>





<div style=" text-align: center;">
<img src="http://unidaddejusticia.com/registro/hide/vistas/img/m3.png" width="85%" height="85%">
</div>


<ul>
 <li>Una vez iniciado el formulario, es posible guardar los cambios y regresar a terminarlo posteriormente. Al dar click en "guardar cambios", se mostrará el mensaje "La información se ha guardado exitosamente".</li>
</li>

</ul>

<div style=" text-align: center;">
<img src="http://unidaddejusticia.com/registro/hide/vistas/img/m4.png" width="85%" height="85%">
<img src="http://unidaddejusticia.com/registro/hide/vistas/img/m5.png" width="85%" height="85%">
</div>

<ul>
 <li>En caso de que sea necesario escribir comentarios, sugerencias o si requiere realizar aclaraciones sobre alguna de las preguntas relacionadas al formulario, es posible incluirlas en la última sección "Observaciones finales".
</li>
</ul>
<div style=" text-align: center;">
<img src="http://unidaddejusticia.com/registro/hide/vistas/img/m6.png" width="85%" height="85%">
</div>


<ul>
 <li>Cuando todas las preguntas estén completas, será posible realizar el envío final del formulario.</li>
</ul>


<div style=" text-align: center;">
<img src="http://unidaddejusticia.com/registro/hide/vistas/img/m7.png" width="85%" height="85%">
</div>
<br>

<ul>
 <li>Una vez enviado el formulario será posible descargar una copia final de todas las respuestas en formato PDF. </li>
 <li>El estado del formulario se mostrará en la parte superior de la pantalla.

   <ul>
        <li>INCOMPLETO: el formulario no ha sido concluido.
</li>
        <li>ENVIADO: el formulario fue completado y ha sido enviado en formato electrónico. Sin embargo, se encuentra pendiente de forma física.</li>


      <li>EN REVISIÓN: la Unidad de Apoyo al Sistema de Justicia encontró inconsistencias y el formulario requiere modificaciones.</li>

      <li>FINALIZADO: el formulario fue completado, no existen observaciones de inconsistencias y ha sido recibida la versión física.</li>
      </ul>

</li>



</ul>

<div style=" text-align: center;">
<img src="http://unidaddejusticia.com/registro/hide/vistas/img/m9.png" width="85%" height="85%">
</div>



<ul>
 <li>La Unidad de Apoyo al Sistema de Justicia se contactará por medio de correo electrónico para confirmar que la información haya sido recibida correctamente y no haya información incompleta.</li>
 <li>Para dar por completado el instrumento de captación, es importante que posterior a la confirmación por parte de la Unidad de Apoyo al Sistema de Justicia se realice el envío de una copia final del formulario con la firma del/de la titular de la institución por medio de oficio con anexo a la siguiente dirección electrónica: sistemadejusticia@segob.gob.mx.</li>

</ul>

En caso de dudas en el llenado de la información contactarse al número 51280000 ext 33123 y 38114 o al correo sistemadejusticia@segob.gob.mx.






                                                    <!--===     <span class="input-group-addon"><i class="fa fa-commenting"></i></span>  =======-->

                                    </div>
                                </div>
                            </div>
                        </div>
                          </div>
                            </div>





                    <!-- Finaliza Tab Contacto principal -->



















                    <!--  Tab Personal  -->
                    <div id="tabs-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">1. PERSONAL</h3>
                            </div>
                            <br>
                            <div class="panel-body">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <form action="#" method="post" class="col-lg-12">


<?php
//BUSCAR PREGUNTA Formulario
$pregunta = ModeloPolicias:: mdlMostrarPolicias("policias","uuid", $_SESSION["id"]);

if(count($pregunta)==0){
$idFormulario=0;
}else{
$idFormulario=$pregunta[0]["id"];
/* agregado por cambios 18/03/2021 */ $personal_p1_totalp_M=$pregunta[0]["personal_p1_totalp_M"];
/* agregado por cambios 18/03/2021 */ $personal_p1_totalp_H=$pregunta[0]["personal_p1_totalp_H"];
/* agregado por cambios 18/03/2021 */ $personal_p1_totalp_T=$pregunta[0]["personal_p1_totalp_T"];

/* 1 */  $personal_p1_invyanali_M=$pregunta[0]["personal_p1_invyanali_M"];
/* 1 */  $personal_p1_invyanali_H=$pregunta[0]["personal_p1_invyanali_H"];
/* 1 */  $personal_p1_invyanali_T=$pregunta[0]["personal_p1_invyanali_T"];
/* 2 */  $personal_p1_inte_M=$pregunta[0]["personal_p1_inte_M"];
/* 2 */  $personal_p1_inte_H=$pregunta[0]["personal_p1_inte_H"];
/* 2 */  $personal_p1_inte_T=$pregunta[0]["personal_p1_inte_T"];
/* 3 */  $personal_p1_reacc_M=$pregunta[0]["personal_p1_reacc_M"];
/* 3 */  $personal_p1_reacc_H=$pregunta[0]["personal_p1_reacc_H"];
/* 3 */  $personal_p1_reacc_T=$pregunta[0]["personal_p1_reacc_T"];
/* 4 */  $personal_p1_proce_M=$pregunta[0]["personal_p1_proce_M"];
/* 4 */  $personal_p1_proce_H=$pregunta[0]["personal_p1_proce_H"];
/* 4 */  $personal_p1_proce_T=$pregunta[0]["personal_p1_proce_T"];
/* 5 */  $personal_p1_segycuspen_M=$pregunta[0]["personal_p1_segycuspen_M"];
/* 5 */  $personal_p1_segycuspen_H=$pregunta[0]["personal_p1_segycuspen_H"];
/* 5 */  $personal_p1_segycuspen_T=$pregunta[0]["personal_p1_segycuspen_T"];
/* 6 */  $personal_p1_preven_M=$pregunta[0]["personal_p1_preven_M"];
/* 6 */  $personal_p1_preven_H=$pregunta[0]["personal_p1_preven_H"];
/* 6 */  $personal_p1_preven_T=$pregunta[0]["personal_p1_preven_T"];
/* 7 */  $personal_p1_prirespon_M=$pregunta[0]["personal_p1_prirespon_M"];
/* 7 */  $personal_p1_prirespon_H=$pregunta[0]["personal_p1_prirespon_H"];
/* 7 */  $personal_p1_prirespon_T=$pregunta[0]["personal_p1_prirespon_T"];
/* 7 */  $personal_p1_otros=$pregunta[0]["personal_p1_otros"];
/* 7 */  $personal_p1_otros_M=$pregunta[0]["personal_p1_otros_M"];
/* 7 */  $personal_p1_otros_H=$pregunta[0]["personal_p1_otros_H"];
/* 7 */  $personal_p1_otros_T=$pregunta[0]["personal_p1_otros_T"];


$capacitacion_p2s=$pregunta[0]["capacitacion_p2s"];
/*$presupuesto_sp3=$pregunta[0]["presupuesto_sp3"];
$mujeres_p4_1_buenpracs=$pregunta[0]["mujeres_p4_1_buenpracs"];
$nna_p5_1_buenprac=$pregunta[0]["nna_p5_1_buenprac"];
$indigenas_p6_2_convenio_s=$pregunta[0]["indigenas_p6_2_convenio_s"];
$indigenas_p6_5_buenaspracts=$pregunta[0]["indigenas_p6_5_buenaspracts"];
$extranjeras_p7_2_ConvInsts=$pregunta[0]["extranjeras_p7_2_ConvInsts"];
*/

/* 7 */  $personal_p1_total_M=$pregunta[0]["personal_p1_total_M"];
/* 7 */  $personal_p1_total_H=$pregunta[0]["personal_p1_total_H"];
/* 7 */  $personal_p1_total_T=$pregunta[0]["personal_p1_total_T"];



/* se quita por cambios 18/03/2021
       $personal_p1_otros=$pregunta[0]["personal_p1_otros"];
/* 8   $personal_p1_otros_M=$pregunta[0]["personal_p1_otros_M"];
/* 8   $personal_p1_otros_H=$pregunta[0]["personal_p1_otros_H"];
/* 8   $personal_p1_otros_T=$pregunta[0]["personal_p1_otros_T"];
*/

/* agregado por cambios 18/03/2021 */ $personal_p1_totalp_T=$pregunta[0]["personal_p1_totalp_T"];
/* agregado por cambios 18/03/2021 */ $personal_p1_totalp_T=$pregunta[0]["personal_p1_totalp_T"];
/* agregado por cambios 18/03/2021 */ $personal_p1_totalp_T=$pregunta[0]["personal_p1_totalp_T"];

         $personal_p1_siningre_M=$pregunta[0]["personal_p1_siningre_M"];
/* 1 */  $personal_p1_siningre_H=$pregunta[0]["personal_p1_siningre_H"];
/* 1 */  $personal_p1_siningre_T=$pregunta[0]["personal_p1_siningre_T"];
/* 2 */  $personal_p1_de1a5000_M=$pregunta[0]["personal_p1_de1a5000_M"];
/* 2 */  $personal_p1_de1a5000_H=$pregunta[0]["personal_p1_de1a5000_H"];
/* 2 */  $personal_p1_de1a5000_T=$pregunta[0]["personal_p1_de1a5000_T"];
/* 3 */  $personal_p1_de5001a10000_M=$pregunta[0]["personal_p1_de5001a10000_M"];
/* 3 */  $personal_p1_de5001a10000_H=$pregunta[0]["personal_p1_de5001a10000_H"];
/* 3 */  $personal_p1_de5001a10000_T=$pregunta[0]["personal_p1_de5001a10000_T"];
/* 4 */  $personal_p1_de10001a15000_M=$pregunta[0]["personal_p1_de10001a15000_M"];
/* 4 */  $personal_p1_de10001a15000_H=$pregunta[0]["personal_p1_de10001a15000_H"];
/* 4 */  $personal_p1_de10001a15000_T=$pregunta[0]["personal_p1_de10001a15000_T"];
/* 5 */  $personal_p1_de15001a20000_M=$pregunta[0]["personal_p1_de15001a20000_M"];
/* 5 */  $personal_p1_de15001a20000_H=$pregunta[0]["personal_p1_de15001a20000_H"];
/* 5 */  $personal_p1_de15001a20000_T=$pregunta[0]["personal_p1_de15001a20000_T"];
/* 6 */  $personal_p1_de20001a25000_M=$pregunta[0]["personal_p1_de20001a25000_M"];
/* 6 */  $personal_p1_de20001a25000_H=$pregunta[0]["personal_p1_de20001a25000_H"];
/* 6 */  $personal_p1_de20001a25000_T=$pregunta[0]["personal_p1_de20001a25000_T"];
/* 7 */  $personal_p1_de25001a30000_M=$pregunta[0]["personal_p1_de25001a30000_M"];
/* 7 */  $personal_p1_de25001a30000_H=$pregunta[0]["personal_p1_de25001a30000_H"];
/* 7 */  $personal_p1_de25001a30000_T=$pregunta[0]["personal_p1_de25001a30000_T"];
/* 8 */  $personal_p1_de30001a35000_M=$pregunta[0]["personal_p1_de30001a35000_M"];
/* 8 */  $personal_p1_de30001a35000_H=$pregunta[0]["personal_p1_de30001a35000_H"];
/* 8 */  $personal_p1_de30001a35000_T=$pregunta[0]["personal_p1_de30001a35000_T"];
/* 9 */  $personal_p1_de35001a40000_M=$pregunta[0]["personal_p1_de35001a40000_M"];
/* 9 */  $personal_p1_de35001a40000_H=$pregunta[0]["personal_p1_de35001a40000_H"];
/* 9 */  $personal_p1_de35001a40000_T=$pregunta[0]["personal_p1_de35001a40000_T"];
/* 10 */  $personal_p1_de40001a45000_M=$pregunta[0]["personal_p1_de40001a45000_M"];
/* 10 */  $personal_p1_de40001a45000_H=$pregunta[0]["personal_p1_de40001a45000_H"];
/* 10 */  $personal_p1_de40001a45000_T=$pregunta[0]["personal_p1_de40001a45000_T"];
/* 11 */  $personal_p1_de45001a50000_M=$pregunta[0]["personal_p1_de45001a50000_M"];
/* 11 */  $personal_p1_de45001a50000_H=$pregunta[0]["personal_p1_de45001a50000_H"];
/* 11 */  $personal_p1_de45001a50000_T=$pregunta[0]["personal_p1_de45001a50000_T"];

/* agregado por cambios 18/03/2021 */  $personal_p1_masde50000_M=$pregunta[0]["personal_p1_masde50000_M"];
/* agregado por cambios 18/03/2021 */  $personal_p1_masde50000_H=$pregunta[0]["personal_p1_masde50000_H"];
/* agregado por cambios 18/03/2021 */  $personal_p1_masde50000_T=$pregunta[0]["personal_p1_masde50000_T"];

/* se quita por cambios 18/03/2021

        $personal_p1_de50001a55000_M=$pregunta[0]["personal_p1_de50001a55000_M"];
/* 12   $personal_p1_de50001a55000_H=$pregunta[0]["personal_p1_de50001a55000_H"];
/* 12   $personal_p1_de50001a55000_T=$pregunta[0]["personal_p1_de50001a55000_T"];
/* 13   $personal_p1_55001a60000_M=$pregunta[0]["personal_p1_55001a60000_M"];
/* 13   $personal_p1_55001a60000_H=$pregunta[0]["personal_p1_55001a60000_H"];
/* 13   $personal_p1_55001a60000_T=$pregunta[0]["personal_p1_55001a60000_T"];
/* 14   $personal_p1_60001a65000_M=$pregunta[0]["personal_p1_60001a65000_M"];
/* 14   $personal_p1_60001a65000_H=$pregunta[0]["personal_p1_60001a65000_H"];
/* 14   $personal_p1_60001a65000_T=$pregunta[0]["personal_p1_60001a65000_T"];
/* 15   $personal_p1_65001a70000_M=$pregunta[0]["personal_p1_65001a70000_M"];
/* 15   $personal_p1_65001a70000_H=$pregunta[0]["personal_p1_65001a70000_H"];
/* 15   $personal_p1_65001a70000_T=$pregunta[0]["personal_p1_65001a70000_T"];
*/

/* 16 */  $personal_p1_masde70000_M=$pregunta[0]["personal_p1_masde70000_M"];
/* 16 */  $personal_p1_masde70000_H=$pregunta[0]["personal_p1_masde70000_H"];
/* 16 */  $personal_p1_masde70000_T=$pregunta[0]["personal_p1_masde70000_T"];

         $personal_p1_2_ning_M=$pregunta[0]["personal_p1_2_ning_M"];
/* 1 */  $personal_p1_2_ning_H=$pregunta[0]["personal_p1_2_ning_H"];
/* 1 */  $personal_p1_2_ning_T=$pregunta[0]["personal_p1_2_ning_T"];
/* 2 */  $personal_p1_2_prees_M=$pregunta[0]["personal_p1_2_prees_M"];
/* 2 */  $personal_p1_2_prees_H=$pregunta[0]["personal_p1_2_prees_H"];
/* 2 */  $personal_p1_2_prees_T=$pregunta[0]["personal_p1_2_prees_T"];
/* 3 */  $personal_p1_2_prim_M=$pregunta[0]["personal_p1_2_prim_M"];
/* 3 */  $personal_p1_2_prim_H=$pregunta[0]["personal_p1_2_prim_H"];
/* 3 */  $personal_p1_2_prim_T=$pregunta[0]["personal_p1_2_prim_T"];
/* 4 */  $personal_p1_2_secu_M=$pregunta[0]["personal_p1_2_secu_M"];
/* 4 */  $personal_p1_2_secu_H=$pregunta[0]["personal_p1_2_secu_H"];
/* 4 */  $personal_p1_2_secu_T=$pregunta[0]["personal_p1_2_secu_T"];
/* 5 */  $personal_p1_2_ctsect_M=$pregunta[0]["personal_p1_2_ctsect_M"];
/* 5 */  $personal_p1_2_ctsect_H=$pregunta[0]["personal_p1_2_ctsect_H"];
/* 5 */  $personal_p1_2_ctsect_T=$pregunta[0]["personal_p1_2_ctsect_T"];
/* 6 */  $personal_p1_2_nbasica_M=$pregunta[0]["personal_p1_2_nbasica_M"];
/* 6 */  $personal_p1_2_nbasica_H=$pregunta[0]["personal_p1_2_nbasica_H"];
/* 6 */  $personal_p1_2_nbasica_T=$pregunta[0]["personal_p1_2_nbasica_T"];
/* 7 */  $personal_p1_2_preobach_M=$pregunta[0]["personal_p1_2_preobach_M"];
/* 7 */  $personal_p1_2_preobach_H=$pregunta[0]["personal_p1_2_preobach_H"];
/* 7 */  $personal_p1_2_preobach_T=$pregunta[0]["personal_p1_2_preobach_T"];
/* 8 */  $personal_p1_2_ctcpret_M=$pregunta[0]["personal_p1_2_ctcpret_M"];
/* 8 */  $personal_p1_2_ctcpret_H=$pregunta[0]["personal_p1_2_ctcpret_H"];
/* 8 */  $personal_p1_2_ctcpret_T=$pregunta[0]["personal_p1_2_ctcpret_T"];
/* 9 */  $personal_p1_2_licoprof_M=$pregunta[0]["personal_p1_2_licoprof_M"];
/* 9 */  $personal_p1_2_licoprof_H=$pregunta[0]["personal_p1_2_licoprof_H"];
/* 9 */  $personal_p1_2_licoprof_T=$pregunta[0]["personal_p1_2_licoprof_T"];
/* 10 */  $personal_p1_2_maesdoc_M=$pregunta[0]["personal_p1_2_maesdoc_M"];
/* 10 */  $personal_p1_2_maesdoc_H=$pregunta[0]["personal_p1_2_maesdoc_H"];
/* 10 */  $personal_p1_2_maesdoc_T=$pregunta[0]["personal_p1_2_maesdoc_T"];

/* 10 */  $personal_p1_2_total_M=$pregunta[0]["personal_p1_2_total_M"];
/* 10 */  $personal_p1_2_total_H=$pregunta[0]["personal_p1_2_total_H"];
/* 10 */  $personal_p1_2_total_T=$pregunta[0]["personal_p1_2_total_T"];
/* 10 */  $personal_p1_2_nosesabe=$pregunta[0]["personal_p1_2_nosesabe"];

/* 10 */  $personal_p1_3_nosesabe=$pregunta[0]["personal_p1_3_nosesabe"];







          $capacitacion_p2=$pregunta[0]["capacitacion_p2"];

/* 1 */ 	$capacitacion_p2_1_nom=$pregunta[0]["capacitacion_p2_1_nom"];

/* 1 */ 	$capacitacion_p2_2_aul=$pregunta[0]["capacitacion_p2_2_aul"];
/* 2 */ 	$capacitacion_p2_2_comp=$pregunta[0]["capacitacion_p2_2_comp"];
/* 3 */	$capacitacion_p2_2_juor=$pregunta[0]["capacitacion_p2_2_juor"];
/* 4 */	$capacitacion_p2_2_come=$pregunta[0]["capacitacion_p2_2_come"];
/* 5 */ 	$capacitacion_p2_2_coci=$pregunta[0]["capacitacion_p2_2_coci"];
/* 6 */ 	$capacitacion_p2_2_dorm=$pregunta[0]["capacitacion_p2_2_dorm"];
/* 7 */ 	$capacitacion_p2_2_pruf=$pregunta[0]["capacitacion_p2_2_pruf"];
/* 8 */ 	$capacitacion_p2_2_auvis=$pregunta[0]["capacitacion_p2_2_auvis"];
/* 9 */ 	$capacitacion_p2_2_medi=$pregunta[0]["capacitacion_p2_2_medi"];
/* 10 */ 	$capacitacion_p2_2_tirof=$pregunta[0]["capacitacion_p2_2_tirof"];
/* 11 */ 	$capacitacion_p2_2_tirov=$pregunta[0]["capacitacion_p2_2_tirov"];
/* 12 */ 	$capacitacion_p2_2_entre=$pregunta[0]["capacitacion_p2_2_entre"];
/* 13 */ 	$capacitacion_p2_2_vehi=$pregunta[0]["capacitacion_p2_2_vehi"];
/* 14 */ 	$capacitacion_p2_2_unif=$pregunta[0]["capacitacion_p2_2_unif"];
/* 15 */ 	$capacitacion_p2_2_otro=$pregunta[0]["capacitacion_p2_2_otro"];
/* 15 */ 	$capacitacion_p2_2_otro_cual=$pregunta[0]["capacitacion_p2_2_otro_cual"];



/* 1 */  $capacitacion_p2_3_invyanali_M=$pregunta[0]["capacitacion_p2_3_invyanali_M"];
/* 1 */  $capacitacion_p2_3_invyanali_H=$pregunta[0]["capacitacion_p2_3_invyanali_H"];
/* 1 */  $capacitacion_p2_3_invyanali_T=$pregunta[0]["capacitacion_p2_3_invyanali_T"];
/* 2 */  $capacitacion_p2_3_inte_M=$pregunta[0]["capacitacion_p2_3_inte_M"];
/* 2 */  $capacitacion_p2_3_inte_H=$pregunta[0]["capacitacion_p2_3_inte_H"];
/* 2 */  $capacitacion_p2_3_inte_T=$pregunta[0]["capacitacion_p2_3_inte_T"];
/* 3 */  $capacitacion_p2_3_reacc_M=$pregunta[0]["capacitacion_p2_3_reacc_M"];
/* 3 */  $capacitacion_p2_3_reacc_H=$pregunta[0]["capacitacion_p2_3_reacc_H"];
/* 3 */  $capacitacion_p2_3_reacc_T=$pregunta[0]["capacitacion_p2_3_reacc_T"];
/* 4 */  $capacitacion_p2_3_proce_M=$pregunta[0]["capacitacion_p2_3_proce_M"];
/* 4 */  $capacitacion_p2_3_proce_H=$pregunta[0]["capacitacion_p2_3_proce_H"];
/* 4 */  $capacitacion_p2_3_proce_T=$pregunta[0]["capacitacion_p2_3_proce_T"];
/* 5 */  $capacitacion_p2_3_segycuspen_M=$pregunta[0]["capacitacion_p2_3_segycuspen_M"];
/* 5 */  $capacitacion_p2_3_segycuspen_H=$pregunta[0]["capacitacion_p2_3_segycuspen_H"];
/* 5 */  $capacitacion_p2_3_segycuspen_T=$pregunta[0]["capacitacion_p2_3_segycuspen_T"];
/* 6 */  $capacitacion_p2_3_preven_M=$pregunta[0]["capacitacion_p2_3_preven_M"];
/* 6 */  $capacitacion_p2_3_preven_H=$pregunta[0]["capacitacion_p2_3_preven_H"];
/* 6 */  $capacitacion_p2_3_preven_T=$pregunta[0]["capacitacion_p2_3_preven_T"];
/* 7 */  $capacitacion_p2_3_prirespon_M=$pregunta[0]["capacitacion_p2_3_prirespon_M"];
/* 7 */  $capacitacion_p2_3_prirespon_H=$pregunta[0]["capacitacion_p2_3_prirespon_H"];
/* 7 */  $capacitacion_p2_3_prirespon_T=$pregunta[0]["capacitacion_p2_3_prirespon_T"];

/* 7 */  $capacitacion_p2_3_nosabe=$pregunta[0]["capacitacion_p2_3_nosabe"];


/* se quita por cambios 18/03/2021

       $capacitacion_p2_3_otros=$pregunta[0]["capacitacion_p2_3_otros"];
/* 8   $capacitacion_p2_3_otros_M=$pregunta[0]["capacitacion_p2_3_otros_M"];
/* 8   $capacitacion_p2_3_otros_H=$pregunta[0]["capacitacion_p2_3_otros_H"];
/* 8   $capacitacion_p2_3_otros_T=$pregunta[0]["capacitacion_p2_3_otros_T"];
*/

/* 1 */ 	$capacitacion_p2_4_majudlacpo_M=$pregunta[0]["capacitacion_p2_4_majudlacpo_M"];
/* 2 */ 	$capacitacion_p2_4_majudlacpo_H=$pregunta[0]["capacitacion_p2_4_majudlacpo_H"];
/* 3 */	  $capacitacion_p2_4_majudlacpo_T=$pregunta[0]["capacitacion_p2_4_majudlacpo_T"];
/* 4 */	  $capacitacion_p2_4_prdedeypaci_M=$pregunta[0]["capacitacion_p2_4_prdedeypaci_M"];
/* 5 */ 	$capacitacion_p2_4_prdedeypaci_H=$pregunta[0]["capacitacion_p2_4_prdedeypaci_H"];
/* 6 */ 	$capacitacion_p2_4_prdedeypaci_T=$pregunta[0]["capacitacion_p2_4_prdedeypaci_T"];
/* 7 */ 	$capacitacion_p2_4_dehuygain_M=$pregunta[0]["capacitacion_p2_4_dehuygain_M"];
/* 8 */ 	$capacitacion_p2_4_dehuygain_H=$pregunta[0]["capacitacion_p2_4_dehuygain_H"];
/* 9 */ 	$capacitacion_p2_4_dehuygain_T=$pregunta[0]["capacitacion_p2_4_dehuygain_T"];
/* 10 */ 	$capacitacion_p2_4_realsipejupeac_M=$pregunta[0]["capacitacion_p2_4_realsipejupeac_M"];
/* 11 */ 	$capacitacion_p2_4_realsipejupeac_H=$pregunta[0]["capacitacion_p2_4_realsipejupeac_H"];
/* 12 */ 	$capacitacion_p2_4_realsipejupeac_T=$pregunta[0]["capacitacion_p2_4_realsipejupeac_T"];
/* 13 */ 	$capacitacion_p2_4_prdeludeloheodeha_M=$pregunta[0]["capacitacion_p2_4_prdeludeloheodeha_M"];
/* 14 */ 	$capacitacion_p2_4_prdeludeloheodeha_H=$pregunta[0]["capacitacion_p2_4_prdeludeloheodeha_H"];
/* 15 */ 	$capacitacion_p2_4_prdeludeloheodeha_T=$pregunta[0]["capacitacion_p2_4_prdeludeloheodeha_T"];
/* 1 */  $capacitacion_p2_4_idldlhodhymdeeoddp_M=$pregunta[0]["capacitacion_p2_4_idldlhodhymdeeoddp_M"];
/* 1 */  $capacitacion_p2_4_idldlhodhymdeeoddp_H=$pregunta[0]["capacitacion_p2_4_idldlhodhymdeeoddp_H"];
/* 1 */  $capacitacion_p2_4_idldlhodhymdeeoddp_T=$pregunta[0]["capacitacion_p2_4_idldlhodhymdeeoddp_T"];
/* 2 */  $capacitacion_p2_4_cadecu_M=$pregunta[0]["capacitacion_p2_4_cadecu_M"];
/* 2 */  $capacitacion_p2_4_cadecu_H=$pregunta[0]["capacitacion_p2_4_cadecu_H"];
/* 2 */  $capacitacion_p2_4_cadecu_T=$pregunta[0]["capacitacion_p2_4_cadecu_T"];
/* 3 */  $capacitacion_p2_4_enates_M=$pregunta[0]["capacitacion_p2_4_enates_M"];
/* 3 */  $capacitacion_p2_4_enates_H=$pregunta[0]["capacitacion_p2_4_enates_H"];
/* 3 */  $capacitacion_p2_4_enates_T=$pregunta[0]["capacitacion_p2_4_enates_T"];
/* 4 */  $capacitacion_p2_4_usledelafu_M=$pregunta[0]["capacitacion_p2_4_usledelafu_M"];
/* 4 */  $capacitacion_p2_4_usledelafu_H=$pregunta[0]["capacitacion_p2_4_usledelafu_H"];
/* 4 */  $capacitacion_p2_4_usledelafu_T=$pregunta[0]["capacitacion_p2_4_usledelafu_T"];
/* 5 */  $capacitacion_p2_4_inves_M=$pregunta[0]["capacitacion_p2_4_inves_M"];
/* 5 */  $capacitacion_p2_4_inves_H=$pregunta[0]["capacitacion_p2_4_inves_H"];
/* 5 */  $capacitacion_p2_4_inves_T=$pregunta[0]["capacitacion_p2_4_inves_T"];
/* 6 */  $capacitacion_p2_4_prres_M=$pregunta[0]["capacitacion_p2_4_prres_M"];
/* 6 */  $capacitacion_p2_4_prres_H=$pregunta[0]["capacitacion_p2_4_prres_H"];
/* 6 */  $capacitacion_p2_4_prres_T=$pregunta[0]["capacitacion_p2_4_prres_T"];
/* 7 */  $capacitacion_p2_4_inpoho_M=$pregunta[0]["capacitacion_p2_4_inpoho_M"];
/* 7 */  $capacitacion_p2_4_inpoho_H=$pregunta[0]["capacitacion_p2_4_inpoho_H"];
/* 7 */  $capacitacion_p2_4_inpoho_T=$pregunta[0]["capacitacion_p2_4_inpoho_T"];
/* 8 */  $capacitacion_p2_4_especia_M=$pregunta[0]["capacitacion_p2_4_especia_M"];
/* 8 */  $capacitacion_p2_4_especia_H=$pregunta[0]["capacitacion_p2_4_especia_H"];
/* 8 */  $capacitacion_p2_4_especia_T=$pregunta[0]["capacitacion_p2_4_especia_T"];
/* 8 */  $capacitacion_p2_4_actualiza_M=$pregunta[0]["capacitacion_p2_4_actualiza_M"];
/* 8 */  $capacitacion_p2_4_actualiza_H=$pregunta[0]["capacitacion_p2_4_actualiza_H"];
/* 8 */  $capacitacion_p2_4_actualiza_T=$pregunta[0]["capacitacion_p2_4_actualiza_T"];
/* 8 */  $capacitacion_p2_4_sidejupeacu_M=$pregunta[0]["capacitacion_p2_4_sidejupeacu_M"];
/* 8 */  $capacitacion_p2_4_sidejupeacu_H=$pregunta[0]["capacitacion_p2_4_sidejupeacu_H"];
/* 8 */  $capacitacion_p2_4_sidejupeacu_T=$pregunta[0]["capacitacion_p2_4_sidejupeacu_T"];
/* 8 */  $capacitacion_p2_4_depro_M=$pregunta[0]["capacitacion_p2_4_depro_M"];
/* 8 */  $capacitacion_p2_4_depro_H=$pregunta[0]["capacitacion_p2_4_depro_H"];
/* 8 */  $capacitacion_p2_4_depro_T=$pregunta[0]["capacitacion_p2_4_depro_T"];
/* 8 */  $capacitacion_p2_4_femeni_M=$pregunta[0]["capacitacion_p2_4_femeni_M"];
/* 8 */  $capacitacion_p2_4_femeni_H=$pregunta[0]["capacitacion_p2_4_femeni_H"];
/* 8 */  $capacitacion_p2_4_femeni_T=$pregunta[0]["capacitacion_p2_4_femeni_T"];
/* 8 */  $capacitacion_p2_4_antrdepe_M=$pregunta[0]["capacitacion_p2_4_antrdepe_M"];
/* 8 */  $capacitacion_p2_4_antrdepe_H=$pregunta[0]["capacitacion_p2_4_antrdepe_H"];
/* 8 */  $capacitacion_p2_4_antrdepe_T=$pregunta[0]["capacitacion_p2_4_antrdepe_T"];
/* 8 */  $capacitacion_p2_4_vicolamu_M=$pregunta[0]["capacitacion_p2_4_vicolamu_M"];
/* 8 */  $capacitacion_p2_4_vicolamu_H=$pregunta[0]["capacitacion_p2_4_vicolamu_H"];
/* 8 */  $capacitacion_p2_4_vicolamu_T=$pregunta[0]["capacitacion_p2_4_vicolamu_T"];
/* 8 */  $capacitacion_p2_4_predege_M=$pregunta[0]["capacitacion_p2_4_predege_M"];
/* 8 */  $capacitacion_p2_4_predege_H=$pregunta[0]["capacitacion_p2_4_predege_H"];
/* 8 */  $capacitacion_p2_4_predege_T=$pregunta[0]["capacitacion_p2_4_predege_T"];
/* 8 */  $capacitacion_p2_4_ascoydedeex_M=$pregunta[0]["capacitacion_p2_4_ascoydedeex_M"];
/* 8 */  $capacitacion_p2_4_ascoydedeex_H=$pregunta[0]["capacitacion_p2_4_ascoydedeex_H"];
/* 8 */  $capacitacion_p2_4_ascoydedeex_T=$pregunta[0]["capacitacion_p2_4_ascoydedeex_T"];
/* 8 */  $capacitacion_p2_4_siindejupepaad_M=$pregunta[0]["capacitacion_p2_4_siindejupepaad_M"];
/* 8 */  $capacitacion_p2_4_siindejupepaad_H=$pregunta[0]["capacitacion_p2_4_siindejupepaad_H"];
/* 8 */  $capacitacion_p2_4_siindejupepaad_T=$pregunta[0]["capacitacion_p2_4_siindejupepaad_T"];
/* 8 */  $capacitacion_p2_4_ataperin_M=$pregunta[0]["capacitacion_p2_4_ataperin_M"];
/* 8 */  $capacitacion_p2_4_ataperin_H=$pregunta[0]["capacitacion_p2_4_ataperin_H"];
/* 8 */  $capacitacion_p2_4_ataperin_T=$pregunta[0]["capacitacion_p2_4_ataperin_T"];
/* 8 */  $capacitacion_p2_4_atapercondis_M=$pregunta[0]["capacitacion_p2_4_atapercondis_M"];
/* 8 */  $capacitacion_p2_4_atapercondis_H=$pregunta[0]["capacitacion_p2_4_atapercondis_H"];
/* 8 */  $capacitacion_p2_4_atapercondis_T=$pregunta[0]["capacitacion_p2_4_atapercondis_T"];
/* 8 */  $capacitacion_p2_4_jusalt_M=$pregunta[0]["capacitacion_p2_4_jusalt_M"];
/* 8 */  $capacitacion_p2_4_jusalt_H=$pregunta[0]["capacitacion_p2_4_jusalt_H"];
/* 8 */  $capacitacion_p2_4_jusalt_T=$pregunta[0]["capacitacion_p2_4_jusalt_T"];
/* 8 */  $capacitacion_p2_4_justera_M=$pregunta[0]["capacitacion_p2_4_justera_M"];
/* 8 */  $capacitacion_p2_4_justera_H=$pregunta[0]["capacitacion_p2_4_justera_H"];
/* 8 */  $capacitacion_p2_4_justera_T=$pregunta[0]["capacitacion_p2_4_justera_T"];
/* 8 */  $capacitacion_p2_4_justransi_M=$pregunta[0]["capacitacion_p2_4_justransi_M"];
/* 8 */  $capacitacion_p2_4_justransi_H=$pregunta[0]["capacitacion_p2_4_justransi_H"];
/* 8 */  $capacitacion_p2_4_justransi_T=$pregunta[0]["capacitacion_p2_4_justransi_T"];

/* 8 */  $capacitacion_p2_4_atemuj_M=$pregunta[0]["capacitacion_p2_4_atemuj_M"];
/* 8 */  $capacitacion_p2_4_atemuj_H=$pregunta[0]["capacitacion_p2_4_atemuj_H"];
/* 8 */  $capacitacion_p2_4_atemuj_T=$pregunta[0]["capacitacion_p2_4_atemuj_T"];

/* 8 */  $capacitacion_p2_4_otros=$pregunta[0]["capacitacion_p2_4_otros"];
/* 8 */  $capacitacion_p2_4_otros_M=$pregunta[0]["capacitacion_p2_4_otros_M"];
/* 8 */  $capacitacion_p2_4_otros_H=$pregunta[0]["capacitacion_p2_4_otros_H"];
/* 8 */  $capacitacion_p2_4_otros_T=$pregunta[0]["capacitacion_p2_4_otros_T"];
/* 8 */

/* 8 */  $capacitacion_p2_5_instuprga=$pregunta[0]["capacitacion_p2_5_instuprga"];

/* 8 */  $capacitacion_p2_6_evconconf_M=$pregunta[0]["capacitacion_p2_6_evconconf_M"];
/* 8 */  $capacitacion_p2_6_evconconf_H=$pregunta[0]["capacitacion_p2_6_evconconf_H"];
/* 8 */  $capacitacion_p2_6_evconconf_T=$pregunta[0]["capacitacion_p2_6_evconconf_T"];
/* 8

/* 8 */  $presupuesto_p3=$pregunta[0]["presupuesto_p3"];

/* 8 */  $presupuestop3_1_anuaeje20=$pregunta[0]["presupuestop3_1_anuaeje20"];


/* 8 */  $presupuestop3_2_anuaeje20=$pregunta[0]["presupuestop3_2_anuaeje20"];


}
?>


<!--  Pregunta 1  -->
  <div >
    <h5>1.- ¿Cuántas personas laboran en la institución? Desglosar por sexo.
</h5>
  </div>
  <br>

                                      <table class="table">
                                          <thead>
                                              <tr>

                                                  <th>Descripción</th>
                                                  <th> Mujer </th>
                                                  <th>Hombre</th>
                                                  <th>Total</th>
                                              </tr>
                                          </thead>
                                          <tbody>

                                            <tr>

                                                <td>Total Personal                      </td>
                                                <td>
                                                    <div class="input-group">
                                                        <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                            name="personal_p1_totalp_M"
                                                            id="personal_p1_totalp_M"
                                                            onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                            <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                            value="<?php echo $personal_p1_totalp_M; ?>">
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="input-group">
                                                        <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                            name="personal_p1_totalp_H"
                                                            id="personal_p1_totalp_H"
                                                            onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                            <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                            value="<?php echo $personal_p1_totalp_H; ?>">
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="input-group">
                                                        <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                            name="personal_p1_totalp_T"
                                                            id="personal_p1_totalp_T"
                                                            onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                            <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                            value="<?php echo $personal_p1_totalp_T; ?>">
                                                    </div>
                                                </td>
                                            </tr>


                                      </tbody>
                                      </table>


                                      <h5>


                                        1.1.- ¿Cuántas personas laboran en la institución? Desglosar por función policial y sexo.
                                      </h5>
                                                <table class="table">
                                                    <thead>
                                                        <tr>
  <th>#</th>
                                                            <th>Descripción</th>
                                                            <th> Mujer </th>
                                                            <th>Hombre</th>
                                                            <th>Subtotal</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                      <tr>
                                                        <td>1</td>
                                                        <td>Investigación y Análisis</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_invyanali_M"
                                                                    id="personal_p1_invyanali_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_invyanali_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_invyanali_H"
                                                                    id="personal_p1_invyanali_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_invyanali_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_invyanali_T"
                                                                    id="personal_p1_invyanali_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_invyanali_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
      <td>2</td>
                                                        <td>Inteligencia</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_inte_M" id="personal_p1_inte_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_inte_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_inte_H" id="personal_p1_inte_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_inte_H; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_inte_T" id="personal_p1_inte_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_inte_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
      <td>3</td>
                                                        <td>Reacción</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_reacc_M" id="personal_p1_reacc_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_reacc_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_reacc_H" id="personal_p1_reacc_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_reacc_H; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_reacc_T" id="personal_p1_reacc_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_reacc_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>


                                                    <tr>
      <td>4</td>
                                                        <td>Procesal</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_proce_M" id="personal_p1_proce_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_proce_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_proce_H" id="personal_p1_proce_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_proce_H; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_proce_T" id="personal_p1_proce_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_proce_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>


                                                    <tr>
      <td>5</td>
                                                        <td>Seguridad y Custodia Penitenciaria</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_segycuspen_M"
                                                                    id="personal_p1_segycuspen_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_segycuspen_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_segycuspen_H"
                                                                    id="personal_p1_segycuspen_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_segycuspen_H; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_segycuspen_T"
                                                                    id="personal_p1_segycuspen_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_segycuspen_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
      <td>6</td>
                                                        <td>Preventivo</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_preven_M"
                                                                    id="personal_p1_preven_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_preven_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_preven_H"
                                                                    id="personal_p1_preven_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_preven_H; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_preven_T"
                                                                    id="personal_p1_preven_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_preven_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
      <td>7</td>
                                                        <td>Primer respondiente</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_prirespon_M"
                                                                    id="personal_p1_prirespon_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_prirespon_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_prirespon_H"
                                                                    id="personal_p1_prirespon_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_prirespon_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_prirespon_T"
                                                                    id="personal_p1_prirespon_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_prirespon_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
      <td>8</td>
      <td><div style="float:left;">Otros (¿cuáles?) </div>
          <div class="input-group">
              <input type="text" class="form-control"
                  name="personal_p1_otros" id="personal_p1_otros"
                  <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                  value="<?php echo $personal_p1_otros; ?>">
          </div>
      </td>


                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_otros_M"
                                                                    id="personal_p1_otros_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_otros_M; ?>">
                                                            </div>
                                                        </td>



                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_otros_H"
                                                                    id="personal_p1_otros_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_otros_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_otros_T"
                                                                    id="personal_p1_otros_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_otros_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>


                                                    <tr>
      <td>9</td>
                                                        <td>Total</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_total_M"
                                                                    id="personal_p1_total_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_total_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_total_H"
                                                                    id="personal_p1_total_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_total_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_total_T"
                                                                    id="personal_p1_total_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_total_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>



                                                    <!--
                                                    <tr>

                                                        <td>Otros (¿cuáles?)
                                                            <div class="input-group">
                                                                <input type="text" class="form-control"
                                                                    name="personal_p1_otros" id="personal_p1_otros"
                                                                    value="<?php //echo $personal_p1_otros; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" class="form-control"
                                                                    name="personal_p1_otros_M" id="personal_p1_otros_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php //echo $personal_p1_otros_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" class="form-control"
                                                                    name="personal_p1_otros_H" id="personal_p1_otros_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php //echo $personal_p1_otros_H; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" class="form-control"
                                                                    name="personal_p1_otros_T" id="personal_p1_otros_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php //echo $personal_p1_otros_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                  -->
                                                </tbody>
                                            </table>

                                            <!--  Termina Pregunta 1  -->


                                            <!--   Pregunta 2  -->


                                            <div>
                                                <h5>1.2.-
                                                    ¿Cuál es el ingreso bruto mensual del personal reportado
                                                     en las categorías 1 a 7 de la pregunta anterior? Desglosar por ingreso bruto mensual y por sexo.
                                                </h5>
                                            </div>
                                            <br>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Descripción</th>
                                                        <th> Mujer </th>
                                                        <th>Hombre</th>
                                                        <th>Total</th>
                                                    </tr>

                                                </thead>
                                                <tbody>
                                                    <tr>
<td>1</td>
                                                        <td>Sin ingresos</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_siningre_M"
                                                                    id="personal_p1_siningre_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_siningre_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_siningre_H"
                                                                    id="personal_p1_siningre_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_siningre_H; ?>">
                                                            </div>
                                                        </td>


                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_siningre_T"
                                                                    id="personal_p1_siningre_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_siningre_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                      <td>2</td>

                                                        <td>De 1 a 5,000 pesos</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_de1a5000_M"
                                                                    id="personal_p1_de1a5000_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_de1a5000_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_de1a5000_H"
                                                                    id="personal_p1_de1a5000_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_de1a5000_H; ?>">
                                                            </div>
                                                        </td>


                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_de1a5000_T"
                                                                    id="personal_p1_de1a5000_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_de1a5000_T; ?>">
                                                            </div>
                                                        </td>

                                                    </tr>


                                                    <tr>
                                                      <td>3</td>

                                                        <td>De 5,001 a 10,000 pesos</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_de5001a10000_M"
                                                                    id="personal_p1_de5001a10000_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_de5001a10000_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_de5001a10000_H"
                                                                    id="personal_p1_de5001a10000_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_de5001a10000_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_de5001a10000_T"
                                                                    id="personal_p1_de5001a10000_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_de5001a10000_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                      <td>4</td>

                                                        <td>De 10,001 a 15,000 pesos</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_de10001a15000_M"
                                                                    id="personal_p1_de10001a15000_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_de10001a15000_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_de10001a15000_H"
                                                                    id="personal_p1_de10001a15000_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_de10001a15000_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_de10001a15000_T"
                                                                    id="personal_p1_de10001a15000_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_de10001a15000_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                      <td>5</td>

                                                        <td>De 15,001 a 20,000 pesos </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_de15001a20000_M"
                                                                    id="personal_p1_de15001a20000_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_de15001a20000_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_de15001a20000_H"
                                                                    id="personal_p1_de15001a20000_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_de15001a20000_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_de15001a20000_T"
                                                                    id="personal_p1_de15001a20000_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_de15001a20000_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                      <td>6</td>

                                                        <td>De 20,001 a 25,000 pesos</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_de20001a25000_M"
                                                                    id="personal_p1_de20001a25000_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_de20001a25000_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_de20001a25000_H"
                                                                    id="personal_p1_de20001a25000_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_de20001a25000_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_de20001a25000_T"
                                                                    id="personal_p1_de20001a25000_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_de20001a25000_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                      <td>7</td>

                                                        <td>De 25,001 a 30,000 pesos</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_de25001a30000_M"
                                                                    id="personal_p1_de25001a30000_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_de25001a30000_M; ?>">
                                                            </div>
                                                        </td>


                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_de25001a30000_H"
                                                                    id="personal_p1_de25001a30000_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_de25001a30000_H; ?>">
                                                            </div>
                                                        </td>


                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_de25001a30000_T"
                                                                    id="personal_p1_de25001a30000_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_de25001a30000_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>



                                                    <tr>


                                                      <td>8</td>

                                                        <td>De 30,001 a 35,000 pesos </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_de30001a35000_M"
                                                                    id="personal_p1_de30001a35000_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_de30001a35000_M; ?>">
                                                            </div>
                                                        </td>


                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_de30001a35000_H"
                                                                    id="personal_p1_de30001a35000_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_de30001a35000_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_de30001a35000_T"
                                                                    id="personal_p1_de30001a35000_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_de30001a35000_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                      <td>9</td>

                                                        <td>De 35,001 a 40,000 pesos </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_de35001a40000_M"
                                                                    id="personal_p1_de35001a40000_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_de35001a40000_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_de35001a40000_H"
                                                                    id="personal_p1_de35001a40000_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_de35001a40000_H; ?>">
                                                            </div>
                                                        </td>


                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_de35001a40000_T"
                                                                    id="personal_p1_de35001a40000_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_de35001a40000_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>



                                                    <tr>
                                                      <td>10</td>

                                                        <td>De 40,001 a 45,000 pesos </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_de40001a45000_M"
                                                                    id="personal_p1_de40001a45000_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_de40001a45000_M; ?>">
                                                            </div>
                                                        </td>


                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_de40001a45000_H"
                                                                    id="personal_p1_de40001a45000_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_de40001a45000_H; ?>">
                                                            </div>
                                                        </td>



                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_de40001a45000_T"
                                                                    id="personal_p1_de40001a45000_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_de40001a45000_T; ?>">
                                                            </div>
                                                        </td>

                                                    </tr>





                                                    <tr>

                                                      <td>11</td>

                                                        <td>De 45,001 a 50,000 pesos </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_de45001a50000_M"
                                                                    id="personal_p1_de45001a50000_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_de45001a50000_M; ?>">
                                                            </div>
                                                        </td>


                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_de45001a50000_H"
                                                                    id="personal_p1_de45001a50000_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_de45001a50000_H; ?>">
                                                            </div>
                                                        </td>



                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_de45001a50000_T"
                                                                    id="personal_p1_de45001a50000_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_de45001a50000_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                      <td>12</td>

                                                        <td>Más de 50,000 pesos </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_masde50000_M"
                                                                    id="personal_p1_masde50000_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_masde50000_M; ?>">
                                                            </div>
                                                        </td>


                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_masde50000_H"
                                                                    id="personal_p1_masde50000_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_masde50000_H; ?>">
                                                            </div>
                                                        </td>



                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_masde50000_T"
                                                                    id="personal_p1_masde50000_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_masde50000_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>


                                                    <!--

                                                    <tr>
                                                        <td>13</td>
                                                        <td>De 55,001 a 60,000 pesos </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" class="form-control"
                                                                    name="personal_p1_55001a60000_M"
                                                                    id="personal_p1_55001a60000_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php //echo $personal_p1_55001a60000_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" class="form-control"
                                                                    name="personal_p1_55001a60000_H"
                                                                    id="personal_p1_55001a60000_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php //echo $personal_p1_55001a60000_H; ?>">
                                                            </div>
                                                        </td>



                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" class="form-control"
                                                                    name="personal_p1_55001a60000_T"
                                                                    id="personal_p1_55001a60000_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php //echo $personal_p1_55001a60000_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td>14</td>
                                                        <td>De 60,001 a 65,000 pesos </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" class="form-control"
                                                                    name="personal_p1_60001a65000_M"
                                                                    id="personal_p1_60001a65000_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php //echo $personal_p1_60001a65000_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" class="form-control"
                                                                    name="personal_p1_60001a65000_H"
                                                                    id="personal_p1_60001a65000_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php //echo $personal_p1_60001a65000_H; ?>">
                                                            </div>
                                                        </td>


                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" class="form-control"
                                                                    name="personal_p1_60001a65000_T"
                                                                    id="personal_p1_60001a65000_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php //echo $personal_p1_60001a65000_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td>15</td>
                                                        <td>De 65,001 a 70,000 pesos </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" class="form-control"
                                                                    name="personal_p1_65001a70000_M"
                                                                    id="personal_p1_65001a70000_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php //echo $personal_p1_65001a70000_M; ?>">
                                                            </div>
                                                        </td>


                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" class="form-control"
                                                                    name="personal_p1_65001a70000_H"
                                                                    id="personal_p1_65001a70000_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php //echo $personal_p1_65001a70000_H; ?>">
                                                            </div>
                                                        </td>



                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" class="form-control"
                                                                    name="personal_p1_65001a70000_T"
                                                                    id="personal_p1_65001a70000_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php //echo $personal_p1_65001a70000_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>

                                                        <td>Más de 70,000 pesos </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" class="form-control"
                                                                    name="personal_p1_masde70000_M"
                                                                    id="personal_p1_masde70000_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $personal_p1_masde70000_M; ?>">
                                                            </div>
                                                        </td>


                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" class="form-control"
                                                                    name="personal_p1_masde70000_H"
                                                                    id="personal_p1_masde70000_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $personal_p1_masde70000_H; ?>">
                                                            </div>
                                                        </td>



                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" class="form-control"
                                                                    name="personal_p1_masde70000_T"
                                                                    id="personal_p1_masde70000_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $personal_p1_masde70000_T; ?>">
                                                            </div>
                                                        </td>  -->




                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div>
                                                <input type="checkbox" name="personal_p1_2_nosesabe"
                                                    id="personal_p1_2_nosesabe"
                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                    <?php echo $personal_p1_2_nosesabe ?> /><label>No se sabe</label>
                                            </div>


<script>
$(function() {
    $("#personal_p1_2_nosesabe").click(function() {
        ToggleSection2();
    });

    ToggleSection2();
});

function ToggleSection2() {
var $personal_p1_siningre_M = $("#personal_p1_siningre_M");
  var $personal_p1_siningre_H = $("#personal_p1_siningre_H");
    var $personal_p1_siningre_T = $("#personal_p1_siningre_T");
var $personal_p1_de1a5000_M = $("#personal_p1_de1a5000_M");
  var $personal_p1_de1a5000_H = $("#personal_p1_de1a5000_H");
    var $personal_p1_de1a5000_T = $("#personal_p1_de1a5000_T");
var $personal_p1_de5001a10000_M = $("#personal_p1_de5001a10000_M");
  var $personal_p1_de5001a10000_H = $("#personal_p1_de5001a10000_H");
    var $personal_p1_de5001a10000_T = $("#personal_p1_de5001a10000_");
var $personal_p1_de5001a10000_M = $("#personal_p1_de5001a10000_M");
  var $personal_p1_de5001a10000_H = $("#personal_p1_de5001a10000_H");
    var $personal_p1_de5001a10000_T = $("#personal_p1_de5001a10000_T");
var $personal_p1_de10001a15000_M = $("#personal_p1_de10001a15000_M");
  var $personal_p1_de10001a15000_H = $("#personal_p1_de10001a15000_H");
    var $personal_p1_de10001a15000_T = $("#personal_p1_de10001a15000_T");
var $personal_p1_de15001a20000_M = $("#personal_p1_de15001a20000_M");
  var $personal_p1_de15001a20000_H = $("#personal_p1_de15001a20000_H");
    var $personal_p1_de15001a20000_T = $("#personal_p1_de15001a20000_T");
var $personal_p1_de20001a25000_M = $("#personal_p1_de20001a25000_M");
  var $personal_p1_de20001a25000_H = $("#personal_p1_de20001a25000_H");
    var $personal_p1_de20001a25000_T = $("#personal_p1_de20001a25000_T");
var $personal_p1_de25001a30000_M = $("#personal_p1_de25001a30000_M");
  var $personal_p1_de25001a30000_H = $("#personal_p1_de25001a30000_H");
    var $personal_p1_de25001a30000_T = $("#personal_p1_de25001a30000_T");
var $personal_p1_de30001a35000_M = $("#personal_p1_de30001a35000_M");
  var $personal_p1_de30001a35000_H = $("#personal_p1_de30001a35000_H");
    var $personal_p1_de30001a35000_T = $("#personal_p1_de30001a35000_T");
var $personal_p1_de35001a40000_M = $("#personal_p1_de35001a40000_M");
  var $personal_p1_de35001a40000_H = $("#personal_p1_de35001a40000_H");
    var $personal_p1_de35001a40000_T = $("#personal_p1_de35001a40000_T");
var $personal_p1_de35001a40000_M = $("#personal_p1_de35001a40000_M");
  var $personal_p1_de35001a40000_H = $("#personal_p1_de35001a40000_H");
    var $personal_p1_de35001a40000_T = $("#personal_p1_de35001a40000_T");
var $personal_p1_de35001a40000_M = $("#personal_p1_de35001a40000_M");
  var $personal_p1_de35001a40000_H = $("#personal_p1_de35001a40000_H");
    var $personal_p1_de35001a40000_T = $("#personal_p1_de35001a40000_T");
var $personal_p1_de40001a45000_M = $("#personal_p1_de40001a45000_M");
  var $personal_p1_de40001a45000_H = $("#personal_p1_de40001a45000_H");
    var $personal_p1_de40001a45000_T = $("#personal_p1_de40001a45000_T");
var $personal_p1_de45001a50000_M = $("#personal_p1_de40001a45000_M");
  var $personal_p1_de45001a50000_H = $("#personal_p1_de40001a45000_H");
    var $personal_p1_de45001a50000_T = $("#personal_p1_de40001a45000_T");
var $personal_p1_masde50000_M = $("#personal_p1_de40001a45000_M");
  var $personal_p1_masde50000_H = $("#personal_p1_de40001a45000_H");
    var $personal_p1_masde50000_T = $("#personal_p1_de40001a45000_T");
var $personal_p1_de45001a50000_M = $("#personal_p1_de45001a50000_M");
  var $personal_p1_de45001a50000_H = $("#personal_p1_de45001a50000_H");
    var $personal_p1_de45001a50000_T = $("#personal_p1_de45001a50000_T");
var $personal_p1_masde50000_M = $("#personal_p1_masde50000_M");
  var $personal_p1_masde50000_H = $("#personal_p1_masde50000_H");
    var $personal_p1_masde50000_T = $("#personal_p1_masde50000_T");



    // The right way to check if a checkbox is checked is with .prop method
    if ($("#personal_p1_2_nosesabe").prop("checked")) {
        $personal_p1_siningre_M.prop("disabled", true).val(" ");
        $personal_p1_siningre_H.prop("disabled", true).val(" ");
        $personal_p1_siningre_T.prop("disabled", true).val(" ");

        $personal_p1_de1a5000_M.prop("disabled", true).val(" ");
        $personal_p1_de1a5000_H.prop("disabled", true).val(" ");
        $personal_p1_de1a5000_T.prop("disabled", true).val(" ");

        $personal_p1_de5001a10000_M.prop("disabled", true).val(" ");
        $personal_p1_de5001a10000_H.prop("disabled", true).val(" ");
        $personal_p1_de5001a10000_T.prop("disabled", true).val(" ");

        $personal_p1_de10001a15000_M.prop("disabled", true).val(" ");
        $personal_p1_de10001a15000_H.prop("disabled", true).val(" ");
        $personal_p1_de10001a15000_T.prop("disabled", true).val(" ");

        $personal_p1_de15001a20000_M.prop("disabled", true).val(" ");
        $personal_p1_de15001a20000_H.prop("disabled", true).val(" ");
        $personal_p1_de15001a20000_T.prop("disabled", true).val(" ");

        $personal_p1_de20001a25000_M.prop("disabled", true).val(" ");
        $personal_p1_de20001a25000_H.prop("disabled", true).val(" ");
        $personal_p1_de20001a25000_T.prop("disabled", true).val(" ");

        $personal_p1_de25001a30000_M.prop("disabled", true).val(" ");
        $personal_p1_de25001a30000_H.prop("disabled", true).val(" ");
        $personal_p1_de25001a30000_T.prop("disabled", true).val(" ");

        $personal_p1_de30001a35000_M.prop("disabled", true).val(" ");
        $personal_p1_de30001a35000_H.prop("disabled", true).val(" ");
        $personal_p1_de30001a35000_T.prop("disabled", true).val(" ");

        $personal_p1_de35001a40000_M.prop("disabled", true).val(" ");
        $personal_p1_de35001a40000_H.prop("disabled", true).val(" ");
        $personal_p1_de35001a40000_T.prop("disabled", true).val(" ");

        $personal_p1_de40001a45000_M.prop("disabled", true).val(" ");
        $personal_p1_de40001a45000_H.prop("disabled", true).val(" ");
        $personal_p1_de40001a45000_T.prop("disabled", true).val(" ");

        $personal_p1_de45001a50000_M.prop("disabled", true).val(" ");
        $personal_p1_de45001a50000_H.prop("disabled", true).val(" ");
        $personal_p1_de45001a50000_T.prop("disabled", true).val(" ");

        $personal_p1_masde50000_M.prop("disabled", true).val(" ");
        $personal_p1_masde50000_H.prop("disabled", true).val(" ");
        $personal_p1_masde50000_T.prop("disabled", true).val(" ");


    }
    else {
        $personal_p1_siningre_M.prop("disabled", false);
        $personal_p1_siningre_H.prop("disabled", false);
        $personal_p1_siningre_T.prop("disabled", false);

        $personal_p1_de1a5000_M.prop("disabled", false);
        $personal_p1_de1a5000_H.prop("disabled", false);
        $personal_p1_de1a5000_T.prop("disabled", false);

        $personal_p1_de5001a10000_M.prop("disabled", false);
        $personal_p1_de5001a10000_H.prop("disabled", false);
        $personal_p1_de5001a10000_T.prop("disabled", false);

        $personal_p1_de5001a10000_M.prop("disabled", false);
        $personal_p1_de5001a10000_H.prop("disabled", false);
        $personal_p1_de5001a10000_T.prop("disabled", false);

        $personal_p1_de10001a15000_M.prop("disabled", false);
        $personal_p1_de10001a15000_H.prop("disabled", false);
        $personal_p1_de10001a15000_T.prop("disabled", false);

        $personal_p1_de15001a20000_M.prop("disabled", false);
        $personal_p1_de15001a20000_H.prop("disabled", false);
        $personal_p1_de15001a20000_T.prop("disabled", false);

        $personal_p1_de20001a25000_M.prop("disabled", false);
        $personal_p1_de20001a25000_H.prop("disabled", false);
        $personal_p1_de20001a25000_T.prop("disabled", false);

        $personal_p1_de25001a30000_M.prop("disabled", false);
        $personal_p1_de25001a30000_H.prop("disabled", false);
        $personal_p1_de25001a30000_T.prop("disabled", false);

        $personal_p1_de30001a35000_M.prop("disabled", false);
        $personal_p1_de30001a35000_H.prop("disabled", false);
        $personal_p1_de30001a35000_T.prop("disabled", false);

        $personal_p1_de35001a40000_M.prop("disabled", false);
        $personal_p1_de35001a40000_H.prop("disabled", false);
        $personal_p1_de35001a40000_T.prop("disabled", false);

        $personal_p1_de40001a45000_M.prop("disabled", false);
        $personal_p1_de40001a45000_H.prop("disabled", false);
        $personal_p1_de40001a45000_T.prop("disabled", false);

        $personal_p1_de45001a50000_M.prop("disabled", false);
        $personal_p1_de45001a50000_H.prop("disabled", false);
        $personal_p1_de45001a50000_T.prop("disabled", false);

        $personal_p1_masde50000_M.prop("disabled", false);
        $personal_p1_masde50000_H.prop("disabled", false);
        $personal_p1_masde50000_T.prop("disabled", false);


    }
}
</script>






                                            <!--   Pregunta 3  -->
                                            <div>
                                                <h5>1.3.-
                                                  Del personal reportado en las categorías 1 a 7 de la pregunta 1.1,
                                                  ¿Cuántas personas laboran en la institución? Desglosar por grado de escolaridad y por sexo.</h5>
                                            </div>
                                            <br>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Descripción</th>
                                                        <th> Mujer </th>
                                                        <th>Hombre</th>
                                                        <th>Subtotal</th>
                                                    </tr>

                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Ninguno</td>
                                                        <!--  esa queda asi presupuestop3 asi nadamas por que esa es de opcion multiple si y no-->
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_2_ning_M"
                                                                    id="personal_p1_2_ning_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_2_ning_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_2_ning_H"
                                                                    id="personal_p1_2_ning_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_2_ning_H; ?>">
                                                            </div>
                                                        </td>


                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_2_ning_T"
                                                                    id="personal_p1_2_ning_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_2_ning_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>2</td>
                                                        <td>Preescolar</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number"  min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_2_prees_M"
                                                                    id="personal_p1_2_prees_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_2_prees_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_2_prees_H"
                                                                    id="personal_p1_2_prees_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_2_prees_H; ?>">
                                                            </div>
                                                        </td>


                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_2_prees_T"
                                                                    id="personal_p1_2_prees_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_2_prees_T; ?>">
                                                            </div>
                                                        </td>

                                                    </tr>


                                                    <tr>
                                                        <td>3</td>
                                                        <td>Primaria</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_2_prim_M"
                                                                    id="personal_p1_2_prim_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_2_prim_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_2_prim_H"
                                                                    id="personal_p1_2_prim_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_2_prim_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_2_prim_T"
                                                                    id="personal_p1_2_prim_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_2_prim_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>4</td>
                                                        <td>Secundaria</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_2_secu_M"
                                                                    id="personal_p1_2_secu_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_2_secu_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_2_secu_H"
                                                                    id="personal_p1_2_secu_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_2_secu_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_2_secu_T"
                                                                    id="personal_p1_2_secu_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_2_secu_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>Carrera técnica con secundaria terminada </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_2_ctsect_M"
                                                                    id="personal_p1_2_ctsect_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_2_ctsect_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_2_ctsect_H"
                                                                    id="personal_p1_2_ctsect_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_2_ctsect_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_2_ctsect_T"
                                                                    id="personal_p1_2_ctsect_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_2_ctsect_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>6</td>
                                                        <td>Normal básica </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_2_nbasica_M"
                                                                    id="personal_p1_2_nbasica_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_2_nbasica_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_2_nbasica_H"
                                                                    id="personal_p1_2_nbasica_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_2_nbasica_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_2_nbasica_T"
                                                                    id="personal_p1_2_nbasica_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_2_nbasica_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>7</td>
                                                        <td>Preparatoria o bachillerato </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_2_preobach_M"
                                                                    id="personal_p1_2_preobach_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_2_preobach_M; ?>">
                                                            </div>
                                                        </td>


                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_2_preobach_H"
                                                                    id="personal_p1_2_preobach_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_2_preobach_H; ?>">
                                                            </div>
                                                        </td>


                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_2_preobach_T"
                                                                    id="personal_p1_2_preobach_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_2_preobach_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>



                                                    <tr>

                                                        <td>8</td>

                                                        <td>Carrera técnica con preparatoria terminada </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_2_ctcpret_M"
                                                                    id="personal_p1_2_ctcpret_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_2_ctcpret_M; ?>">
                                                            </div>
                                                        </td>


                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_2_ctcpret_H"
                                                                    id="personal_p1_2_ctcpret_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_2_ctcpret_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_2_ctcpret_T"
                                                                    id="personal_p1_2_ctcpret_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_2_ctcpret_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td>9</td>
                                                        <td>Licenciatura o profesional </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_2_licoprof_M"
                                                                    id="personal_p1_2_licoprof_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_2_licoprof_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_2_licoprof_H"
                                                                    id="personal_p1_2_licoprof_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_2_licoprof_H; ?>">
                                                            </div>
                                                        </td>


                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_2_licoprof_T"
                                                                    id="personal_p1_2_licoprof_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_2_licoprof_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td>10</td>
                                                        <td>Maestría o doctorado </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_2_maesdoc_M"
                                                                    id="personal_p1_2_maesdoc_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_2_maesdoc_M; ?>">
                                                            </div>
                                                        </td>


                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_2_maesdoc_H"
                                                                    id="personal_p1_2_maesdoc_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_2_maesdoc_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_2_maesdoc_T"
                                                                    id="personal_p1_2_maesdoc_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_2_maesdoc_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>


                                                    <tr>
  <td>11</td>                                                        <td>Total</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_2_total_M"
                                                                    id="personal_p1_2_total_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_2_total_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_2_total_H"
                                                                    id="personal_p1_2_total_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_2_total_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_p1_2_total_T"
                                                                    id="personal_p1_2_total_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_p1_2_total_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>










                                                </tbody>
                                            </table>

                                            <div>
                                                <input type="checkbox" name="personal_p1_3_nosesabe"
                                                    id="personal_p1_3_nosesabe"
                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                    <?php echo $personal_p1_3_nosesabe ?> /><label>No se sabe</label>
                                            </div>




                                            <script>
                                            $(function () {
                                                $("#personal_p1_3_nosesabe").click(function() {
                                                    ToggleSection3();
                                                });

                                                ToggleSection3();
                                            });

                                            function ToggleSection3() {
                                              var $personal_p1_2_ning_M = $("#personal_p1_2_ning_M");
                                                var $personal_p1_2_ning_H = $("#personal_p1_2_ning_H");
                                                  var $personal_p1_2_ning_T = $("#personal_p1_2_ning_T");
                                              var $personal_p1_2_prees_M = $("#personal_p1_2_prees_M");
                                                var $personal_p1_2_prees_H = $("#personal_p1_2_prees_H");
                                                  var $personal_p1_2_prees_T = $("#personal_p1_2_prees_T");
                                              var $personal_p1_2_prim_M = $("#personal_p1_2_prim_M");
                                                var $personal_p1_2_prim_H = $("#personal_p1_2_prim_H");
                                                  var $personal_p1_2_prim_T = $("#personal_p1_2_prim_T");
                                              var $personal_p1_2_secu_M = $("#personal_p1_2_secu_M");
                                                var $personal_p1_2_secu_H = $("#personal_p1_2_secu_H");
                                                  var $personal_p1_2_secu_T = $("#personal_p1_2_secu_T");
                                              var $personal_p1_2_ctsect_M = $("#personal_p1_2_ctsect_M");
                                                var $personal_p1_2_ctsect_H = $("#personal_p1_2_ctsect_H");
                                                  var $personal_p1_2_ctsect_T = $("#personal_p1_2_ctsect_T");
                                              var $personal_p1_2_nbasica_M = $("#personal_p1_2_nbasica_M");
                                                var $personal_p1_2_nbasica_H = $("#personal_p1_2_nbasica_H");
                                                  var $personal_p1_2_nbasica_T = $("#personal_p1_2_nbasica_T");
                                              var $personal_p1_2_preobach_M = $("#personal_p1_2_preobach_M");
                                                var $personal_p1_2_preobach_H = $("#personal_p1_2_preobach_H");
                                                  var $personal_p1_2_preobach_T = $("#personal_p1_2_preobach_T");
                                              var $personal_p1_2_ctcpret_M = $("#personal_p1_2_ctcpret_M");
                                                var $personal_p1_2_ctcpret_H = $("#personal_p1_2_ctcpret_H");
                                                  var $personal_p1_2_ctcpret_T = $("#personal_p1_2_ctcpret_T");
                                              var $personal_p1_2_licoprof_M = $("#personal_p1_2_licoprof_M");
                                                var $personal_p1_2_licoprof_H = $("#personal_p1_2_licoprof_H");
                                                  var $personal_p1_2_licoprof_T = $("#personal_p1_2_licoprof_T");
                                              var $personal_p1_2_maesdoc_M = $("#personal_p1_2_maesdoc_M");
                                                var $personal_p1_2_maesdoc_H = $("#personal_p1_2_maesdoc_H");
                                                  var $personal_p1_2_maesdoc_T = $("#personal_p1_2_maesdoc_T");
                                              var $personal_p1_2_maesdoc_T = $("#personal_p1_2_maesdoc_T");
                                                var $personal_p1_2_total_M = $("#personal_p1_2_total_M");
                                                  var $personal_p1_2_total_H = $("#personal_p1_2_total_H");
                                              var $personal_p1_2_total_T = $("#personal_p1_2_total_T");



                                                // The right way to check if a checkbox is checked is with .prop method
                                                if ($("#personal_p1_3_nosesabe").prop("checked")) {
                                                    $personal_p1_2_ning_M.prop("disabled", true).val(" ");
                                                    $personal_p1_2_ning_H.prop("disabled", true).val(" ");
                                                    $personal_p1_2_ning_T.prop("disabled", true).val(" ");

                                                    $personal_p1_2_prees_M.prop("disabled", true).val(" ");
                                                    $personal_p1_2_prees_H.prop("disabled", true).val(" ");
                                                    $personal_p1_2_prees_T.prop("disabled", true).val(" ");

                                                    $personal_p1_2_prim_M.prop("disabled", true).val(" ");
                                                    $personal_p1_2_prim_H.prop("disabled", true).val(" ");
                                                    $personal_p1_2_prim_T.prop("disabled", true).val(" ");

                                                    $personal_p1_2_secu_M.prop("disabled", true).val(" ");
                                                    $personal_p1_2_secu_H.prop("disabled", true).val(" ");
                                                    $personal_p1_2_secu_T.prop("disabled", true).val(" ");

                                                    $personal_p1_2_ctsect_M.prop("disabled", true).val(" ");
                                                    $personal_p1_2_ctsect_H.prop("disabled", true).val(" ");
                                                    $personal_p1_2_ctsect_T.prop("disabled", true).val(" ");

                                                    $personal_p1_2_nbasica_M.prop("disabled", true).val(" ");
                                                    $personal_p1_2_nbasica_H.prop("disabled", true).val(" ");
                                                    $personal_p1_2_nbasica_T.prop("disabled", true).val(" ");

                                                    $personal_p1_2_preobach_M.prop("disabled", true).val(" ");
                                                    $personal_p1_2_preobach_H.prop("disabled", true).val(" ");
                                                    $personal_p1_2_preobach_T.prop("disabled", true).val(" ");

                                                    $personal_p1_2_ctcpret_M.prop("disabled", true).val(" ");
                                                    $personal_p1_2_ctcpret_H.prop("disabled", true).val(" ");
                                                    $personal_p1_2_ctcpret_T.prop("disabled", true).val(" ");

                                                    $personal_p1_2_licoprof_M.prop("disabled", true).val(" ");
                                                    $personal_p1_2_licoprof_H.prop("disabled", true).val(" ");
                                                    $personal_p1_2_licoprof_T.prop("disabled", true).val(" ");

                                                    $personal_p1_2_maesdoc_M.prop("disabled", true).val(" ");
                                                    $personal_p1_2_maesdoc_H.prop("disabled", true).val(" ");
                                                    $personal_p1_2_maesdoc_T.prop("disabled", true).val(" ");

                                                    $personal_p1_2_total_M.prop("disabled", true).val(" ");
                                                    $personal_p1_2_total_H.prop("disabled", true).val(" ");
                                                    $personal_p1_2_total_T.prop("disabled", true).val(" ");







                                                }
                                                else {
                                                    $personal_p1_2_ning_M.prop("disabled", false);
                                                    $personal_p1_2_ning_H.prop("disabled", false);
                                                    $personal_p1_2_ning_T.prop("disabled", false);

                                                    $personal_p1_2_prees_M.prop("disabled", false);
                                                    $personal_p1_2_prees_H.prop("disabled", false);
                                                    $personal_p1_2_prees_T.prop("disabled", false);

                                                    $personal_p1_2_prim_M.prop("disabled", false);
                                                    $personal_p1_2_prim_H.prop("disabled", false);
                                                    $personal_p1_2_prim_T.prop("disabled", false);

                                                    $personal_p1_2_secu_M.prop("disabled", false);
                                                    $personal_p1_2_secu_H.prop("disabled", false);
                                                    $personal_p1_2_secu_T.prop("disabled", false);

                                                    $personal_p1_2_ctsect_M.prop("disabled", false);
                                                    $personal_p1_2_ctsect_H.prop("disabled", false);
                                                    $personal_p1_2_ctsect_T.prop("disabled", false);

                                                    $personal_p1_2_nbasica_M.prop("disabled", false);
                                                    $personal_p1_2_nbasica_H.prop("disabled", false);
                                                    $personal_p1_2_nbasica_T.prop("disabled", false);

                                                    $personal_p1_2_preobach_M.prop("disabled", false);
                                                    $personal_p1_2_preobach_H.prop("disabled", false);
                                                    $personal_p1_2_preobach_T.prop("disabled", false);

                                                    $personal_p1_2_ctcpret_M.prop("disabled", false);
                                                    $personal_p1_2_ctcpret_H.prop("disabled", false);
                                                    $personal_p1_2_ctcpret_T.prop("disabled", false);

                                                    $personal_p1_2_licoprof_M.prop("disabled", false);
                                                    $personal_p1_2_licoprof_H.prop("disabled", false);
                                                    $personal_p1_2_licoprof_T.prop("disabled", false);

                                                    $personal_p1_2_maesdoc_M.prop("disabled", false);
                                                    $personal_p1_2_maesdoc_H.prop("disabled", false);
                                                    $personal_p1_2_maesdoc_T.prop("disabled", false);

                                                    $personal_p1_2_total_M.prop("disabled", false);
                                                    $personal_p1_2_total_H.prop("disabled", false);
                                                    $personal_p1_2_total_T.prop("disabled", false);






                                                }
                                            }
                                            </script>






                                            <input type="button" value="Guardar cambios"
                                                class="btn btn-success btn-flotante crearTab2" />

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">2. CAPACITACIÓN Y EVALUACIÓN DE PERSONAL</h3>
                          <div style="text-align: center;">LA INFORMACIÓN PROPORCIONADA EN ESTA SECCIÓN NOS PERMITIRÁ CONOCER LAS CAPACITACIONES CON LAS QUE SE PODRÍA COADYUVAR A LA INSTITUCIÓN.


</div>
                            </div>
                            <br>
                            <div class="panel-body">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <form action="#" method="post" class="col-lg-12">
                                            <!--  Pregunta capacitacion.p2  -->


                                            <div>
                                                <h5>2.- ¿La institución cuenta con una Universidad/Academia Policial en
                                                    la entidad?</h5>
                                            </div>
                                            <table class="table">
                                                <tbody>
                                                    <tr>





                                                      <div class="form-group col-md-6">
                                                          <div class="form-check form-check-inline">
                                                              <input class="form-check-input" type="radio"
                                                                  name="capacitacion_p2" id="capacitacion_p2"
                                                                  <?php if($estatus != 0) { echo "disabled='true'"; } ?>

                                                                  <?php if ($capacitacion_p2 == "Sí"){echo ' checked="checked"'; }?> />
                                                              <label class="form-check-label"
                                                                  for="capacitacion_p2">Sí</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                              <input class="form-check-input" type="radio"
                                                                  name="capacitacion_p2" id="capacitacion_p2"
                                                                  <?php if($estatus != 0) { echo "disabled='true'"; } ?>

                                                                  <?php if ($capacitacion_p2 == "No"){echo ' checked="checked"'; }?> />
                                                              <label class="form-check-label"
                                                                  for="capacitacion_p2">No</label>
                                                          </div>
                                                      </div>





                                                    </tr>

                                                </tbody>
                                            </table>

                                            <!--  Termina Pregunta capacitación.p2  -->

                                            <!--  Pregunta capacitacion.p2.1-->
                                            <div>
                                                <h5>2.1.- Indique el nombre o nombres de dichas instituciones.</h5>
                                            </div>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <div class="form-group col-md-6">


                                                          <textarea     <?php if($estatus != 0) { echo "readonly='true'"; } ?> class="form-control" name="capacitacion_p2_1_nom"
                                                          id="capacitacion_p2_1_nom" rows="10" cols="90"  >




                                                            <?php echo $capacitacion_p2_1_nom; ?></textarea>




                                                        </div>
                                                    </tr>
                                                </tbody>
                                            </table>



                                            <!--  Fin capacitacion.p2.1  -->

                                            <!--  Pregunta capacitacion.p2.2-->
                                            <div>
                                                <h5>2.2.- La Universidad/Academia de la entidad cuenta con las
                                                    siguientes facilidades: </h5>
                                            </div>

                                            <?php  ?>

                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <div class="form-group col-md-12">


                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="capacitacion_p2_2_aul"
                                                                    id="capacitacion_p2_2_aul"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    <?php if ($capacitacion_p2_2_aul == "Aulas suficientes"){echo ' checked="checked"'; }?> />
                                                                <label class="form-check-label"
                                                                    for="capacitacion_p2_2_aul">Aulas suficientes</label>
                                                            </div>


                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="capacitacion_p2_2_comp"
                                                                    id="capacitacion_p2_2_comp"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    <?php if ($capacitacion_p2_2_comp == "Aula de cómputo"){echo ' checked="checked"'; }?> />

                                                                <label class="form-check-label"
                                                                    for="capacitacion_p2_2_comp">Aula de cómputo</label>
                                                            </div>

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="capacitacion_p2_2_juor"
                                                                    id="capacitacion_p2_2_juor"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    <?php if ($capacitacion_p2_2_juor == "Sala de juicios orales"){echo ' checked="checked"'; }?> />
                                                                <label class="form-check-label"
                                                                    for="capacitacion_p2_2_juor">Sala de juicios
                                                                    orales</label>
                                                            </div>

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="capacitacion_p2_2_come"
                                                                    id="capacitacion_p2_2_come"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    <?php if ($capacitacion_p2_2_come == "Comedor"){echo ' checked="checked"'; }?> />
                                                                <label class="form-check-label"
                                                                    for="capacitacion_p2_2_come">Comedor</label>
                                                            </div>

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="capacitacion_p2_2_coci"
                                                                    id="capacitacion_p2_2_coci" value="Cocina"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                  <?php if ($capacitacion_p2_2_coci == "Cocina"){echo ' checked="checked"'; }?> />
                                                                <label class="form-check-label"
                                                                    for="capacitacion_p2_2_coci">Cocina</label>
                                                            </div>

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="capacitacion_p2_2_dorm"
                                                                    id="capacitacion_p2_2_dorm" value="Dormitorios"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    <?php if ($capacitacion_p2_2_dorm == "Dormitorios"){echo ' checked="checked"'; }?> />
                                                                <label class="form-check-label"
                                                                    for="capacitacion_p2_2_dorm">Dormitorios</label>
                                                            </div>

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="capacitacion_p2_2_pruf"
                                                                    id="capacitacion_p2_2_pruf"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    <?php if ($capacitacion_p2_2_pruf == "Pista de prueba física"){echo ' checked="checked"'; }?> />
                                                                <label class="form-check-label"
                                                                    for="capacitacion_p2_2_pruf">Pista de prueba
                                                                    física</label>
                                                            </div>

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="capacitacion_p2_2_auvis"
                                                                    id="capacitacion_p2_2_auvis"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    <?php if ($capacitacion_p2_2_auvis == "Sala con equipo audiovisual"){echo ' checked="checked"'; }?> />
                                                                <label class="form-check-label"
                                                                    for="capacitacion_p2_2_auvis">Sala con equipo
                                                                    audiovisual</label>
                                                            </div>

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="capacitacion_p2_2_medi"
                                                                    id="capacitacion_p2_2_medi"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    <?php if ($capacitacion_p2_2_medi == "Servicio médico"){echo ' checked="checked"'; }?> />
                                                                <label class="form-check-label"
                                                                    for="capacitacion_p2_2_medi">Servicio médico</label>
                                                            </div>

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="capacitacion_p2_2_tirof"
                                                                    id="capacitacion_p2_2_tirof"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                  <?php if ($capacitacion_p2_2_tirof == "Stand de tiro físico"){echo ' checked="checked"'; }?> />
                                                                <label class="form-check-label"
                                                                    for="capacitacion_p2_2_tirof">Stand de tiro
                                                                    físico</label>
                                                            </div>

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="capacitacion_p2_2_tirov"
                                                                    id="capacitacion_p2_2_tirov"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                  <?php if ($capacitacion_p2_2_tirov == "Stand de tiro virtual"){echo ' checked="checked"'; }?> />
                                                                <label class="form-check-label"
                                                                    for="capacitacion_p2_2_tirov">Stand de tiro
                                                                    virtual</label>
                                                            </div>

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="capacitacion_p2_2_entre"
                                                                    id="capacitacion_p2_2_entre"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    <?php if ($capacitacion_p2_2_entre == "Área de entrenamiento"){echo ' checked="checked"'; }?> />
                                                                <label class="form-check-label"
                                                                    for="capacitacion_p2_2_entre">Área de
                                                                    entrenamiento</label>
                                                            </div>

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="capacitacion_p2_2_vehi"
                                                                    id="capacitacion_p2_2_vehi"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    <?php if ($capacitacion_p2_2_vehi == "Explanada o pista de práctica vehicular"){echo ' checked="checked"'; }?> />
                                                                <label class="form-check-label"
                                                                    for="capacitacion_p2_2_vehi">Explanada o pista de
                                                                    práctica vehicular</label>
                                                            </div>

                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="capacitacion_p2_2_unif"
                                                                    id="capacitacion_p2_2_unif"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                      <?php if ($capacitacion_p2_2_unif == "Equipo o uniformes policiacos"){echo ' checked="checked"'; }?> />
                                                                <label class="form-check-label"
                                                                    for="capacitacion_p2_2_unif">Equipo o uniformes
                                                                    policiacos</label>
                                                            </div>



                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="checkbox"
                                                                    name="capacitacion_p2_2_otro" id="capacitacion_p2_2_otro"
                                                                    onchange="javascript:showContent04()"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    <?php if ($capacitacion_p2_2_otro == "Otro"){echo ' checked="checked"'; }?> />
                                                                <label class="form-check-label" for="mujeresp4">
                                                                    Otro</label>
                                                                <br>

                                                                <!--Duda-->
                                                                <div id="content04" style="display: none;">
                                                                    <label class="form-check-label" for="capacitacion_p2_2_otro_cual">
                                                                        ¿Cuáles? </label>
                                                                    <input class="form-control" type="text" name="capacitacion_p2_2_otro_cual"
                                                                        id="capacitacion_p2_2_otro_cual"
                                                                        <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                        value="<?php echo $capacitacion_p2_2_otro_cual; ?>">
                                                                </div>






                                                        </div>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!--  Fin capacitacion.p2.2-->

                                            <!--  Pregunta capacitacion.p2.3-->
                                            <div>
                                                <h5>2.3.- ¿Cuántas personas laborando recibieron al menos una
                                                    capacitación durante el año 2020? Desglosar por función policial y
                                                    sexo.
                                                </h5>
                                            </div>

                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Descripción</th>
                                                        <th> Mujer </th>
                                                        <th>Hombre</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Investigación y Análisis</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_3_invyanali_M"
                                                                    id="capacitacion_p2_3_invyanali_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_3_invyanali_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_3_invyanali_H"
                                                                    id="capacitacion_p2_3_invyanali_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_3_invyanali_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_3_invyanali_T"
                                                                    id="capacitacion_p2_3_invyanali_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_3_invyanali_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>2</td>
                                                        <td>Inteligencia</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_3_inte_M"
                                                                    id="capacitacion_p2_3_inte_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_3_inte_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_3_inte_H"
                                                                    id="capacitacion_p2_3_inte_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_3_inte_H; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_3_inte_T"
                                                                    id="capacitacion_p2_3_inte_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_3_inte_T; ?>">
                                                            </div>
                                                        </td>


                                                    </tr>

                                                    <tr>
                                                        <td>3</td>
                                                        <td>Reacción</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_3_reacc_M"
                                                                    id="capacitacion_p2_3_reacc_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_3_reacc_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_3_reacc_H"
                                                                    id="capacitacion_p2_3_reacc_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_3_reacc_H; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_3_reacc_T"
                                                                    id="capacitacion_p2_3_reacc_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_3_reacc_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td>4</td>
                                                        <td>Procesal</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_3_proce_M"
                                                                    id="capacitacion_p2_3_proce_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_3_proce_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_3_proce_H"
                                                                    id="capacitacion_p2_3_proce_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_3_proce_H; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_3_proce_T"
                                                                    id="capacitacion_p2_3_proce_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_3_proce_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>5</td>
                                                        <td>Seguridad y Custodia Penitenciaria</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_3_segycuspen_M"
                                                                    id="capacitacion_p2_3_segycuspen_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_3_segycuspen_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_3_segycuspen_H"
                                                                    id="capacitacion_p2_3_segycuspen_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_3_segycuspen_H; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_3_segycuspen_T"
                                                                    id="capacitacion_p2_3_segycuspen_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_3_segycuspen_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>6</td>
                                                        <td>Preventivo</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_3_preven_M"
                                                                    id="capacitacion_p2_3_preven_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_3_preven_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_3_preven_H"
                                                                    id="capacitacion_p2_3_preven_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_3_preven_H; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_3_preven_T"
                                                                    id="capacitacion_p2_3_preven_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_3_preven_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>7</td>
                                                        <td>Primer respondiente</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_3_prirespon_M"
                                                                    id="capacitacion_p2_3_prirespon_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_3_prirespon_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_3_prirespon_H"
                                                                    id="capacitacion_p2_3_prirespon_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_3_prirespon_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_3_prirespon_T"
                                                                    id="capacitacion_p2_3_prirespon_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_3_prirespon_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <!--
                                                    <tr>
                                                        <td>8</td>
                                                        <td>Otras (¿cuáles?)
                                                            <div class="input-group">
                                                                <input type="text" class="form-control"
                                                                    name="capacitacion_p2_3_otros"
                                                                    id="capacitacion_p2_3_otros"
                                                                    value="<?php //echo $capacitacion_p2_3_otros; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" class="form-control"
                                                                    name="capacitacion_p2_3_otros_M"
                                                                    id="capacitacion_p2_3_otros_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php //echo $capacitacion_p2_3_otros_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" class="form-control"
                                                                    name="capacitacion_p2_3_otros_H"
                                                                    id="capacitacion_p2_3_otros_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php //echo $capacitacion_p2_3_otros_H; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" class="form-control"
                                                                    name="capacitacion_p2_3_otros_T"
                                                                    id="capacitacion_p2_3_otros_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php //echo $capacitacion_p2_3_otros_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                  -->
                                                </tbody>
                                            </table>

                                            <div>
                                                <input type="checkbox" name="capacitacion_p2_3_nosabe"
                                                    id="capacitacion_p2_3_nosabe"
                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                    <?php echo $capacitacion_p2_3_nosabe?> /><label>No se sabe</label>
                                            </div>

                                            <script>
                                            $(function () {
                                                $("#capacitacion_p2_3_nosabe").click(function() {
                                                    ToggleSection23();
                                                });

                                                ToggleSection23();
                                            });

                                            function ToggleSection23() {
                                              var $capacitacion_p2_3_invyanali_M = $("#capacitacion_p2_3_invyanali_M");
                                                var $capacitacion_p2_3_invyanali_H = $("#capacitacion_p2_3_invyanali_H");
                                                  var $capacitacion_p2_3_invyanali_T = $("#capacitacion_p2_3_invyanali_T");
                                              var $capacitacion_p2_3_inte_M = $("#capacitacion_p2_3_inte_M");
                                                var $capacitacion_p2_3_inte_H = $("#capacitacion_p2_3_inte_H");
                                                  var $capacitacion_p2_3_inte_T = $("#capacitacion_p2_3_inte_T");
                                              var $capacitacion_p2_3_reacc_M = $("#capacitacion_p2_3_reacc_M");
                                                var $capacitacion_p2_3_reacc_H = $("#capacitacion_p2_3_reacc_H");
                                                  var $capacitacion_p2_3_reacc_T = $("#capacitacion_p2_3_reacc_T");
                                              var $capacitacion_p2_3_proce_M = $("#capacitacion_p2_3_proce_M");
                                                var $capacitacion_p2_3_proce_H = $("#capacitacion_p2_3_proce_H");
                                                  var $capacitacion_p2_3_proce_T = $("#capacitacion_p2_3_proce_T");
                                              var $capacitacion_p2_3_segycuspen_M = $("#capacitacion_p2_3_segycuspen_M");
                                                var $capacitacion_p2_3_segycuspen_H = $("#capacitacion_p2_3_segycuspen_H");
                                                  var $capacitacion_p2_3_segycuspen_T = $("#capacitacion_p2_3_segycuspen_T");
                                              var $capacitacion_p2_3_preven_M = $("#capacitacion_p2_3_preven_M");
                                                var $capacitacion_p2_3_preven_H = $("#capacitacion_p2_3_preven_H");
                                                  var $capacitacion_p2_3_preven_T = $("#capacitacion_p2_3_preven_T");
                                              var $capacitacion_p2_3_prirespon_M = $("#capacitacion_p2_3_prirespon_M");
                                                var $capacitacion_p2_3_prirespon_H = $("#capacitacion_p2_3_prirespon_H");
                                                  var $capacitacion_p2_3_prirespon_T = $("#capacitacion_p2_3_prirespon_T");



                                                // The right way to check if a checkbox is checked is with .prop method
                                                if ($("#capacitacion_p2_3_nosabe").prop("checked")) {
                                                    $capacitacion_p2_3_invyanali_M.prop("disabled", true).val(" ");
                                                    $capacitacion_p2_3_invyanali_H.prop("disabled", true).val(" ");
                                                    $capacitacion_p2_3_invyanali_T.prop("disabled", true).val(" ");

                                                    $capacitacion_p2_3_inte_M.prop("disabled", true).val(" ");
                                                    $capacitacion_p2_3_inte_H.prop("disabled", true).val(" ");
                                                    $capacitacion_p2_3_inte_T.prop("disabled", true).val(" ");

                                                    $capacitacion_p2_3_reacc_M.prop("disabled", true).val(" ");
                                                    $capacitacion_p2_3_reacc_H.prop("disabled", true).val(" ");
                                                    $capacitacion_p2_3_reacc_T.prop("disabled", true).val(" ");

                                                    $capacitacion_p2_3_proce_M.prop("disabled", true).val(" ");
                                                    $capacitacion_p2_3_proce_H.prop("disabled", true).val(" ");
                                                    $capacitacion_p2_3_proce_T.prop("disabled", true).val(" ");

                                                    $capacitacion_p2_3_segycuspen_M.prop("disabled", true).val(" ");
                                                    $capacitacion_p2_3_segycuspen_H.prop("disabled", true).val(" ");
                                                    $capacitacion_p2_3_segycuspen_T.prop("disabled", true).val(" ");

                                                    $capacitacion_p2_3_preven_M.prop("disabled", true).val(" ");
                                                    $capacitacion_p2_3_preven_H.prop("disabled", true).val(" ");
                                                    $capacitacion_p2_3_preven_T.prop("disabled", true).val(" ");

                                                    $capacitacion_p2_3_prirespon_M.prop("disabled", true).val(" ");
                                                    $capacitacion_p2_3_prirespon_H.prop("disabled", true).val(" ");
                                                    $capacitacion_p2_3_prirespon_T.prop("disabled", true).val(" ");






                                                }
                                                else {
                                                    $capacitacion_p2_3_invyanali_M.prop("disabled", false);
                                                    $capacitacion_p2_3_invyanali_H.prop("disabled", false);
                                                    $capacitacion_p2_3_invyanali_T.prop("disabled", false);

                                                    $capacitacion_p2_3_inte_M.prop("disabled", false);
                                                    $capacitacion_p2_3_inte_H.prop("disabled", false);
                                                    $capacitacion_p2_3_inte_T.prop("disabled", false);

                                                    $capacitacion_p2_3_reacc_M.prop("disabled", false);
                                                    $capacitacion_p2_3_reacc_H.prop("disabled", false);
                                                    $capacitacion_p2_3_reacc_T.prop("disabled", false);

                                                    $capacitacion_p2_3_proce_M.prop("disabled", false);
                                                    $capacitacion_p2_3_proce_H.prop("disabled", false);
                                                    $capacitacion_p2_3_proce_T.prop("disabled", false);

                                                    $capacitacion_p2_3_segycuspen_M.prop("disabled", false);
                                                    $capacitacion_p2_3_segycuspen_H.prop("disabled", false);
                                                    $capacitacion_p2_3_segycuspen_T.prop("disabled", false);

                                                    $capacitacion_p2_3_preven_M.prop("disabled", false);
                                                    $capacitacion_p2_3_preven_H.prop("disabled", false);
                                                    $capacitacion_p2_3_preven_T.prop("disabled", false);

                                                    $capacitacion_p2_3_prirespon_M.prop("disabled", false);
                                                    $capacitacion_p2_3_prirespon_H.prop("disabled", false);
                                                    $capacitacion_p2_3_prirespon_T.prop("disabled", false);







                                                }
                                            }
                                            </script>



                                            <!--  Fin capacitacion.p2.3-->

                                            <!--  Pregunta capacitacion.p2.4-->
                                            <div>
                                                <h5>2.4.- ¿Cuántas personas laborando tomaron al menos una capacitación
                                                    en las siguientes materias durante el año 2020? Desglosar por sexo.
                                                </h5>
                                            </div>



                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Descripción</th>
                                                        <th> Mujer </th>
                                                        <th>Hombre</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Marco jurídico de la Actuación Policial</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_majudlacpo_M"
                                                                    id="capacitacion_p2_4_majudlacpo_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_majudlacpo_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_majudlacpo_H"
                                                                    id="capacitacion_p2_4_majudlacpo_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_majudlacpo_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_majudlacpo_T"
                                                                    id="capacitacion_p2_4_majudlacpo_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_majudlacpo_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>2</td>
                                                        <td>Prevención del delito y participación ciudadana</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_prdedeypaci_M"
                                                                    id="capacitacion_p2_4_prdedeypaci_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_prdedeypaci_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_prdedeypaci_H"
                                                                    id="capacitacion_p2_4_prdedeypaci_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_prdedeypaci_H; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_prdedeypaci_T"
                                                                    id="capacitacion_p2_4_prdedeypaci_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_prdedeypaci_T; ?>">
                                                            </div>
                                                        </td>


                                                    </tr>

                                                    <tr>
                                                        <td>3</td>
                                                        <td>Derechos humanos y garantías individuales</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_dehuygain_M"
                                                                    id="capacitacion_p2_4_dehuygain_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_dehuygain_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_dehuygain_H"
                                                                    id="capacitacion_p2_4_dehuygain_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_dehuygain_H; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_dehuygain_T"
                                                                    id="capacitacion_p2_4_dehuygain_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_dehuygain_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td>4</td>
                                                        <td>Reforma al Sistema Penal - Juicio Penal Acusatorio</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_realsipejupeac_M"
                                                                    id="capacitacion_p2_4_realsipejupeac_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_realsipejupeac_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_realsipejupeac_H"
                                                                    id="capacitacion_p2_4_realsipejupeac_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_realsipejupeac_H; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_realsipejupeac_T"
                                                                    id="capacitacion_p2_4_realsipejupeac_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_realsipejupeac_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>5</td>
                                                        <td>Preservación del lugar de los hechos o del hallazgo</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_prdeludeloheodeha_M"
                                                                    id="capacitacion_p2_4_prdeludeloheodeha_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_prdeludeloheodeha_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_prdeludeloheodeha_H"
                                                                    id="capacitacion_p2_4_prdeludeloheodeha_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_prdeludeloheodeha_H; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_prdeludeloheodeha_T"
                                                                    id="capacitacion_p2_4_prdeludeloheodeha_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_prdeludeloheodeha_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>6</td>
                                                        <td>Intervención del lugar de los hechos o del hallazgo<br>
                                                            y manejo de evidencias, elementos o datos de prueba</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_idldlhodhymdeeoddp_M"
                                                                    id="capacitacion_p2_4_idldlhodhymdeeoddp_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_idldlhodhymdeeoddp_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_idldlhodhymdeeoddp_H"
                                                                    id="capacitacion_p2_4_idldlhodhymdeeoddp_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_idldlhodhymdeeoddp_H; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_idldlhodhymdeeoddp_T"
                                                                    id="capacitacion_p2_4_idldlhodhymdeeoddp_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_idldlhodhymdeeoddp_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>7</td>
                                                        <td>Cadena de custodia</td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_cadecu_M"
                                                                    id="capacitacion_p2_4_cadecu_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_cadecu_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_cadecu_H"
                                                                    id="capacitacion_p2_4_cadecu_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_cadecu_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_cadecu_T"
                                                                    id="capacitacion_p2_4_cadecu_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_cadecu_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td>8</td>
                                                        <td>Entrevistas a testigos</td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_enates_M"
                                                                    id="capacitacion_p2_4_enates_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_enates_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_enates_H"
                                                                    id="capacitacion_p2_4_enates_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_enates_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_enates_T"
                                                                    id="capacitacion_p2_4_enates_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_enates_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>9</td>
                                                        <td>Uso legítimo de la fuerza</td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_usledelafu_M"
                                                                    id="capacitacion_p2_4_usledelafu_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_usledelafu_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_usledelafu_H"
                                                                    id="capacitacion_p2_4_usledelafu_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_usledelafu_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_usledelafu_T"
                                                                    id="capacitacion_p2_4_usledelafu_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_usledelafu_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>10</td>
                                                        <td>Investigación</td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_inves_M"
                                                                    id="capacitacion_p2_4_inves_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_inves_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_inves_H"
                                                                    id="capacitacion_p2_4_inves_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_inves_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_inves_T"
                                                                    id="capacitacion_p2_4_inves_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_inves_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td>11</td>
                                                        <td>Primer respondiente</td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_prres_M"
                                                                    id="capacitacion_p2_4_prres_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_prres_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_prres_H"
                                                                    id="capacitacion_p2_4_prres_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_prres_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_3_prirespon_T"
                                                                    id="capacitacion_p2_4_prres_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_prres_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td>12</td>
                                                        <td>Informe Policial Homologado</td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_inpoho_M"
                                                                    id="capacitacion_p2_4_inpoho_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_inpoho_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_inpoho_H"
                                                                    id="capacitacion_p2_4_inpoho_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_inpoho_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_inpoho_T"
                                                                    id="capacitacion_p2_4_inpoho_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_inpoho_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>13</td>
                                                        <td>Especialización</td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_especia_M"
                                                                    id="capacitacion_p2_4_especia_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_especia_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_especia_H"
                                                                    id="capacitacion_p2_4_especia_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_especia_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_especia_T"
                                                                    id="capacitacion_p2_4_especia_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_especia_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td>14</td>
                                                        <td>Actualización</td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_actualiza_M"
                                                                    id="capacitacion_p2_4_actualiza_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_actualiza_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_actualiza_H"
                                                                    id="capacitacion_p2_4_actualiza_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_actualiza_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_actualiza_T"
                                                                    id="capacitacion_p2_4_actualiza_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_actualiza_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>




                                                    <tr>
                                                        <td>15</td>
                                                        <td>Sistema de Justicia Penal Acusatorio</td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_sidejupeacu_M"
                                                                    id="capacitacion_p2_4_sidejupeacu_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_sidejupeacu_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_sidejupeacu_H"
                                                                    id="capacitacion_p2_4_sidejupeacu_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_sidejupeacu_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_sidejupeacu_T"
                                                                    id="capacitacion_p2_4_sidejupeacu_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_sidejupeacu_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>



                                                    <tr>
                                                        <td>16</td>
                                                        <td>Debido proceso</td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_depro_M"
                                                                    id="capacitacion_p2_4_depro_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_depro_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_depro_H"
                                                                    id="capacitacion_p2_4_depro_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_depro_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_depro_T"
                                                                    id="capacitacion_p2_4_depro_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_depro_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>




                                                    <tr>
                                                        <td>17</td>
                                                        <td>Feminicidio</td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_femeni_M"
                                                                    id="capacitacion_p2_4_femeni_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_femeni_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_femeni_H"
                                                                    id="capacitacion_p2_4_femeni_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_femeni_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_femeni_T"
                                                                    id="capacitacion_p2_4_femeni_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_femeni_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>



                                                    <tr>
                                                        <td>18</td>
                                                        <td>Anti trata de personas</td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_antrdepe_M"
                                                                    id="capacitacion_p2_4_antrdepe_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_antrdepe_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_antrdepe_H"
                                                                    id="capacitacion_p2_4_antrdepe_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_antrdepe_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_antrdepe_T"
                                                                    id="capacitacion_p2_4_antrdepe_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_antrdepe_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>



                                                    <tr>
                                                        <td>19</td>
                                                        <td>Violencia contra las mujeres</td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_vicolamu_M"
                                                                    id="capacitacion_p2_4_vicolamu_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_vicolamu_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_vicolamu_H"
                                                                    id="capacitacion_p2_4_vicolamu_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_vicolamu_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_vicolamu_T"
                                                                    id="capacitacion_p2_4_vicolamu_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_vicolamu_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>




                                                    <tr>
                                                        <td>20</td>
                                                        <td>Perspectiva de género</td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_predege_M"
                                                                    id="capacitacion_p2_4_predege_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_predege_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_predege_H"
                                                                    id="capacitacion_p2_4_predege_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_predege_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_predege_T"
                                                                    id="capacitacion_p2_4_predege_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_predege_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td>21</td>
                                                        <td>Asistencia consular y derechos de extranjeros</td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_ascoydedeex_M"
                                                                    id="capacitacion_p2_4_ascoydedeex_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_ascoydedeex_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_ascoydedeex_H"
                                                                    id="capacitacion_p2_4_ascoydedeex_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_ascoydedeex_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_ascoydedeex_T"
                                                                    id="capacitacion_p2_4_ascoydedeex_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_ascoydedeex_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>



                                                    <tr>
                                                        <td>22</td>
                                                        <td>Sistema Integral de Justicia Penal para Adolescentes</td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_siindejupepaad_M"
                                                                    id="capacitacion_p2_4_siindejupepaad_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_siindejupepaad_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_siindejupepaad_H"
                                                                    id="capacitacion_p2_4_siindejupepaad_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_siindejupepaad_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_siindejupepaad_T"
                                                                    id="capacitacion_p2_4_siindejupepaad_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_siindejupepaad_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td>23</td>
                                                        <td>Atención a personas indígenas</td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_ataperin_M"
                                                                    id="capacitacion_p2_4_ataperin_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_ataperin_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_ataperin_H"
                                                                    id="capacitacion_p2_4_ataperin_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_ataperin_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_ataperin_T"
                                                                    id="capacitacion_p2_4_ataperin_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_ataperin_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>



                                                    <tr>
                                                        <td>24</td>
                                                        <td>Atención a personas con discapacidad</td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_atapercondis_M"
                                                                    id="capacitacion_p2_4_atapercondis_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_atapercondis_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_atapercondis_H"
                                                                    id="capacitacion_p2_4_atapercondis_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_atapercondis_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_atapercondis_T"
                                                                    id="capacitacion_p2_4_atapercondis_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_atapercondis_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>




                                                    <tr>
                                                        <td>25</td>
                                                        <td>Justicia Alternativa</td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_jusalt_M"
                                                                    id="capacitacion_p2_4_jusalt_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_jusalt_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_jusalt_H"
                                                                    id="capacitacion_p2_4_jusalt_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_jusalt_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_jusalt_T"
                                                                    id="capacitacion_p2_4_jusalt_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_jusalt_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>



                                                    <tr>
                                                        <td>26</td>
                                                        <td>Justicia Terapéutica</td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_justera_M"
                                                                    id="capacitacion_p2_4_justera_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_justera_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_justera_H"
                                                                    id="capacitacion_p2_4_justera_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_justera_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_justera_T"
                                                                    id="capacitacion_p2_4_justera_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_justera_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>




                                                    <tr>
                                                        <td>27</td>
                                                        <td>Justicia Transicional</td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_justransi_M"
                                                                    id="capacitacion_p2_4_justransi_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_justransi_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_justransi_H"
                                                                    id="capacitacion_p2_4_justransi_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_justransi_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_justransi_T"
                                                                    id="capacitacion_p2_4_justransi_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_justransi_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>28</td>
                                                        <td>Atención de casos de mujeres desaparecidas</td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_atemuj_M"
                                                                    id="capacitacion_p2_4_atemuj_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_atemuj_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_atemuj_H"
                                                                    id="capacitacion_p2_4_atemuj_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_atemuj_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_atemuj_T"
                                                                    id="capacitacion_p2_4_atemuj_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_atemuj_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>

                                                        <td>29</td>
                                                        <td><div style="float:left;">Otras (¿cuáles?)   &nbsp;&nbsp;&nbsp;&nbsp;</div>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control"
                                                                    name="capacitacion_p2_4_otros"
                                                                    id="capacitacion_p2_4_otros"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_otros; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_otros_M"
                                                                    id="capacitacion_p2_4_otros_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_otros_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_otros_H"
                                                                    id="capacitacion_p2_4_otros_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_otros_H; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_4_otros_T"
                                                                    id="capacitacion_p2_4_otros_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_4_otros_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>










                                            <!--  Fin capacitacion.p2.4-->
                                            <!--  Pregunta capacitacion.p2.5-->
                                            <div>
                                                <h5>2.5.- ¿Qué instituciones u organismos nacionales o extranjeros
                                                    impartieron las capacitaciones previamente mencionadas?</h5>
                                            </div>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <div class="form-group col-md-6">

                                                          <textarea  <?php if($estatus != 0) { echo "readonly='true'"; } ?> class="form-control" name="capacitacion_p2_5_instuprga" id="capacitacion_p2_5_instuprga" rows="10" cols="90" ><?php echo $capacitacion_p2_5_instuprga; ?></textarea>



                                                        </div>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!--  Fin capacitacion.p2.5  -->
                                            <!--  Pregunta capacitacion.p2.6-->

                                            <div>
                                                <h5>2.6.- ¿Cuántas evaluaciones de Control de Confianza se llevaron a
                                                    cabo en el año 2020? Desglosar por sexo. </h5>
                                            </div>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th> Mujer </th>
                                                        <th>Hombre</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_6_evconconf_M"
                                                                    id="capacitacion_p2_6_evconconf_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_6_evconconf_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_6_evconconf_H"
                                                                    id="capacitacion_p2_6_evconconf_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_6_evconconf_H; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="capacitacion_p2_6_evconconf_T"
                                                                    id="capacitacion_p2_6_evconconf_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capacitacion_p2_6_evconconf_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <!--  Fin capacitacion.p2.6  -->
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- FIN TAB CAPACITACION-->

                        <!--TAB PRESUPUESTO-->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">3. PRESUPUESTO</h3>
                            </div>
                            <br>
                            <div class="panel-body">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <form action="#" method="post" class="col-lg-12">

                                            <!--  Pregunta presupuesto.p3-->
                                            <div>
                                                <h5>3.- ¿La institución cuenta con autonomía presupuestal? </h5>
                                            </div>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <div class="form-group col-md-6">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    name="presupuesto_p3" id="presupuesto_p3"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    <?php if ($presupuesto_p3 == "Sí"){echo ' checked="checked"'; }?> />
                                                                <label class="form-check-label"
                                                                    for="presupuesto_p3">Sí</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    name="presupuesto_p3" id="presupuesto_p3"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    <?php if ($presupuesto_p3 == "No"){echo ' checked="checked"'; }?> />
                                                                <label class="form-check-label"
                                                                    for="presupuesto_p3">No</label>
                                                            </div>
                                                        </div>
                                                    </tr>
                                                </tbody>
                                            </table>

                                          <!--  <script>
                                            $(function() {
                                                $("#presupuesto_p3").click(function() {
                                                    ToggleSection5();
                                                });

                                                ToggleSection5();
                                            });

                                            function ToggleSection5() {
                                              var $presupuestop3_1_anuaeje20 = $("#presupuestop3_1_anuaeje20");
                                                var $presupuestop3_2_anuaeje20 = $("#presupuestop3_2_anuaeje20");

                                                // The right way to check if a checkbox is checked is with .prop method
                                                if ($("#presupuesto_p3").prop("checked")) {
                                                    $presupuestop3_1_anuaeje20.prop("disabled", true).val(" ");
                                                    $presupuestop3_2_anuaeje20.prop("disabled", true).val(" ");

                                                }
   else {
                                                    $presupuestop3_1_anuaeje20.prop("disabled", false);
                                                    $presupuestop3_2_anuaeje20.prop("disabled", false);



                                                }
                                            }
                                            $(function() {
                                                $("#presupuesto_sp3").click(function() {
                                                    ToggleSection5();
                                                });

                                                ToggleSection5();
                                            });

                                            function ToggleSection5() {
                                              var $presupuestop3_1_anuaeje20 = $("#presupuestop3_1_anuaeje20");
                                                var $presupuestop3_2_anuaeje20 = $("#presupuestop3_2_anuaeje20");

                                                // The right way to check if a checkbox is checked is with .prop method
                                                if ($("#presupuesto_sp3").prop("checked")) {
                                                    $presupuestop3_1_anuaeje20.prop("disabled", false).val(" ");
                                                    $presupuestop3_2_anuaeje20.prop("disabled", false).val(" ");

                                                }
 else {
                                                    $presupuestop3_1_anuaeje20.prop("disabled", true);
                                                    $presupuestop3_2_anuaeje20.prop("disabled", true );



                                                }
                                            }
                                            </script>
                                          -->
                                            <!--Fin pregunta presupuestop3-->

                                            <!--  Pregunta presupuesto.p3.1-->
                                            <div>
                                                <h5>3.1.- ¿Cuál fue el presupuesto anual ejercido durante el año 2020?
                                                </h5>
                                            </div>
                                            <table class="table">
                                                <tbody>

                                                    <tr>
                                                        <div style="float: left; font-size: 17px;
padding-top: 5px;">
                                                            $
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <input type="text" class="form-control"
                                                                name="presupuestop3_1_anuaeje20"
                                                                id="presupuestop3_1_anuaeje20"
                                                                onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                value="<?php echo $presupuestop3_1_anuaeje20; ?>">
                                                        </div>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <!--  Fin  Pregunta presupuesto.p3.1 -->
                                            <!--  Pregunta presupuesto.p3.2-->
                                            <div>
                                                <h5>3.2.- Presupuesto anual ejercido 2020, por capítulo 1000 – Servicios
                                                    Personales. </h5>
                                            </div>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <div style="float: left; font-size: 17px;
padding-top: 5px;">
                                                            $
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <input type="text" class="form-control"
                                                                name="presupuestop3_2_anuaeje20"
                                                                id="presupuestop3_2_anuaeje20"
                                                                onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                value="<?php echo $presupuestop3_2_anuaeje20; ?>">
                                                        </div>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <!--  Fin presupuesto.p3.2  -->

                                            <!-- Fin preguntas presupuestop3 -->
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Fin TAB presupuesto -->



                    </div>


                    <!-- Personal Pregunta 1.2 -->

                    <div id="tabs-3">

                        <!--TAB MUJERES-->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">4. JUSTICIA PARA MUJERES</h3>
                            </div>
                            <br>
                            <div class="panel-body">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <form action="#" method="post" class="col-lg-12">



<?php
//BUSCAR PREGUNTA Formulario
$pregunta = ModeloPolicias:: mdlMostrarPolicias("policias","uuid", $_SESSION["id"]);

if(count($pregunta)==0){
$idFormulario=0;
}else{
$idFormulario=$pregunta[0]["id"];
$mujeres_p4_protoInterna=$pregunta[0]["mujeres_p4_protoInterna"];
$mujeres_p4_protoInterna_cual=$pregunta[0]["mujeres_p4_protoInterna_cual"];
$mujeres_p4_interno=$pregunta[0]["mujeres_p4_interno"];
$mujeres_p4_interno_cua=$pregunta[0]["mujeres_p4_interno_cua"];
$nna_p5_1_buenpracs=$pregunta[0]["nna_p5_1_buenpracs"];


// ++ eduardo ++
$mujeres_p4_protoInvmipp=$pregunta[0]["mujeres_p4_protoInvmipp"];
$mujeres_p4_protoScjn=$pregunta[0]["mujeres_p4_protoScjn"];
$mujeres_p4_ninguno=$pregunta[0]["mujeres_p4_ninguno"];
$mujeres_p4_otroProtocolo=$pregunta[0]["mujeres_p4_otroProtocolo"];
$mujeres_p4_otroProtocolo_cual = $pregunta[0]["mujeres_p4_otroProtocolo_cual"];
$mujeres_p4_1_buenprac=$pregunta[0]["mujeres_p4_1_buenprac"];
$mujeres_p4_2_cualBuenprac=$pregunta[0]["mujeres_p4_2_cualBuenprac"];
$mujeres_p4_3_justmuj_M=$pregunta[0]["mujeres_p4_3_justmuj_M"];
$mujeres_p4_3_justmuj_H=$pregunta[0]["mujeres_p4_3_justmuj_H"];
$mujeres_p4_3_justmuj_T=$pregunta[0]["mujeres_p4_3_justmuj_T"];
//$mujeres_p4_1_buenprac=$pregunta[0]["mujeres_p4_1_buenprac"];

//$presupuesto_sp3=$pregunta[0]["presupuesto_sp3"];
$nna_p5_protoInterna=$pregunta[0]["nna_p5_protoInterna"];
$nna_p5_protoInterna_cual=$pregunta[0]["nna_p5_protoInterna_cual"];
$nna_p5_interno=$pregunta[0]["nna_p5_interno"];
$nna_p5_interno_cua=$pregunta[0]["nna_p5_interno_cua"];
$nna_p5_protoAteninte=$pregunta[0]["nna_p5_protoAteninte"];
$nna_p5_protoActjust=$pregunta[0]["nna_p5_protoActjust"];
$nna_p5_ninguno=$pregunta[0]["nna_p5_ninguno"];
$nna_p5_otroProtocolo=$pregunta[0]["nna_p5_otroProtocolo"];
$nna_p5_otroProtocolo_cual = $pregunta[0]["nna_p5_otroProtocolo_cual"];
$nna_p5_2_cualBuenpract=$pregunta[0]["nna_p5_2_cualBuenpract"];

$ja_p5_3_espejust_M=$pregunta[0]["ja_p5_3_espejust_M"];
$ja_p5_3_espejust_H=$pregunta[0]["ja_p5_3_espejust_H"];
$ja_p5_3_espejust_T=$pregunta[0]["ja_p5_3_espejust_T"];

$indigenas_p6_tradulenind=$pregunta[0]["indigenas_p6_tradulenind"];
$indigenas_p6_1_nahuatl_M=$pregunta[0]["indigenas_p6_1_nahuatl_M"];
$indigenas_p6_1_nahuatl_H=$pregunta[0]["indigenas_p6_1_nahuatl_H"];
$indigenas_p6_1_nahuatl_T=$pregunta[0]["indigenas_p6_1_nahuatl_T"];
$indigenas_p6_1_maya_M=$pregunta[0]["indigenas_p6_1_maya_M"];
$indigenas_p6_1_maya_H=$pregunta[0]["indigenas_p6_1_maya_H"];
$indigenas_p6_1_maya_T=$pregunta[0]["indigenas_p6_1_maya_T"];
$indigenas_p6_1_tseltal_M=$pregunta[0]["indigenas_p6_1_tseltal_M"];
$indigenas_p6_1_tseltal_H=$pregunta[0]["indigenas_p6_1_tseltal_H"];
$indigenas_p6_1_tseltal_T=$pregunta[0]["indigenas_p6_1_tseltal_T"];
$indigenas_p6_1_mixteco_M=$pregunta[0]["indigenas_p6_1_mixteco_M"];
$indigenas_p6_1_mixteco_H=$pregunta[0]["indigenas_p6_1_mixteco_H"];
$indigenas_p6_1_mixteco_T=$pregunta[0]["indigenas_p6_1_mixteco_T"];
$indigenas_p6_1_tsotsil_M=$pregunta[0]["indigenas_p6_1_tsotsil_M"];
$indigenas_p6_1_tsotsil_H=$pregunta[0]["indigenas_p6_1_tsotsil_H"];
$indigenas_p6_1_tsotsil_T=$pregunta[0]["indigenas_p6_1_tsotsil_T"];
$indigenas_p6_1_otro=$pregunta[0]["indigenas_p6_1_otro"];
$indigenas_p6_1_otro_M=$pregunta[0]["indigenas_p6_1_otro_M"];
$indigenas_p6_1_otro_H=$pregunta[0]["indigenas_p6_1_otro_H"];
$indigenas_p6_1_otro_T=$pregunta[0]["indigenas_p6_1_otro_T"];
$indigenas_p6_2_convenio=$pregunta[0]["indigenas_p6_2_convenio"];
$indigenas_p6_2_nombinst=$pregunta[0]["indigenas_p6_2_nombinst"];
$indigenas_p6_4_ProtoInter=$pregunta[0]["indigenas_p6_4_ProtoInter"];
$indigenas_p6_4_ProtoInter_cual=$pregunta[0]["indigenas_p6_4_ProtoInter_cual"];
$indigenas_p6_4_interno=$pregunta[0]["indigenas_p6_4_interno"];
$indigenas_p6_4_interno_cual=$pregunta[0]["indigenas_p6_4_interno_cual"];
$indigenas_p6_4_ProtoImpjust=$pregunta[0]["indigenas_p6_4_ProtoImpjust"];
$indigenas_p6_4_ninguno=$pregunta[0]["indigenas_p6_4_ninguno"];
$indigenas_p6_4_otro=$pregunta[0]["indigenas_p6_4_otro"];
$indigenas_p6_4_otro_cual=$pregunta[0]["indigenas_p6_4_otro_cual"];
$indigenas_p6_5_buenaspract=$pregunta[0]["indigenas_p6_5_buenaspract"];
$indigenas_p6_6_cualbuenaspra=$pregunta[0]["indigenas_p6_6_cualbuenaspra"];


}
?>




                                            <!--  Pregunta mujeresp4-->
                                            <div>
                                                <h5>4.- ¿Con qué protocolos cuenta la institución para garantizar los
                                                    derechos de las mujeres? </h5>
                                            </div>
                                            <table class="table">
                                                <tbody>
                                                    <tr>


                                                    <div>
                                                        <div class="form-check form-check-inline">
                                                            <input <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                            class="form-check-input group04" type="checkbox"
                                                                name="mujeres_p4_protoInterna" id="mujeres_p4_protoInterna"
                                                                onchange="javascript:showContent()"
                                                                <?php if ($mujeres_p4_protoInterna == "Protocolo internacional"){echo ' checked="checked"'; }?> />
                                                            <label class="form-check-label"
                                                                for="mujeres_p4_protoInterna">Protocolo internacional
                                                            </label>
                                                          </div>

                                                            <div id="content" style="display: none;">
                                                                <label class="form-check-label"
                                                                    for="mujeres_p4_protoInterna_cual">
                                                                    (¿Cuáles?) </label>
                                                                <input <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                class="form-control" type="text"
                                                                    name="mujeres_p4_protoInterna_cual"
                                                                    id="mujeres_p4_protoInterna_cual"

                                                                    value="<?php echo $mujeres_p4_protoInterna_cual; ?>">

                                                            </div>
                                                        </div>





                                                        <div class="form-check form-check-inline">
                                                            <input <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                            class="form-check-input group04" type="checkbox"
                                                                name="mujeres_p4_interno" id="mujeres_p4_interno"
                                                                onchange="javascript:showContent2()"

                                                                <?php if ($mujeres_p4_interno == "Protocolo interno"){echo ' checked="checked"'; }?> />
                                                            <label class="form-check-label group04" for="mujeres_p4_interno">
                                                                Protocolo interno</label>
                                                            <br>

                                                            <div id="content2" style="display: none;">
                                                                <label class="form-check-label" for="mujeres_p4_interno_cua">
                                                                    (¿Cuáles?) </label>
                                                                <input <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                class="form-control" type="text"
                                                                    name="mujeres_p4_interno_cua"
                                                                    id="mujeres_p4_interno_cua"

                                                                   value="<?php echo $mujeres_p4_interno_cua; ?>">
                                                            </div>

                                                            </label>
                                                        </div>




                                                        <div class="form-check form-check-inline">
                                                        <input <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                          class="form-check-input group04" type="checkbox"
                                                                name="mujeres_p4_protoInvmipp" id="mujeres_p4_protoInvmipp"
                                                                <?php if ($mujeres_p4_protoInvmipp == "Protocolo de Investigación Ministerial, Policial y Pericial con Perspectiva de Género para el Delito de Feminicidio (FGR)"){echo ' checked="checked"'; }?> />

                                                            <label class="form-check-label" for="$mujeres_p4_protoInvmipp"> Protocolo de
                                                            Investigación Ministerial, Policial y Pericial con
                                                            Perspectiva de Género para el Delito de Feminicidio
                                                            (FGR)</label>
                                                        </div>



                                                        <div class="form-check form-check-inline">
                                                            <label>    <input <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                              class="form-check-input group04" type="checkbox"
                                                                name="mujeres_p4_protoScjn" id="mujeres_p4_protoScjn"

                                                          <?php if ($mujeres_p4_protoScjn == "Protocolo de la Suprema Corte de Justicia de la Nación para Juzgar con Perspectiva de Género"){echo ' checked="checked"'; }?> />

                                                            Protocolo de la Suprema Corte de Justicia de la Nación para Juzgar con Perspectiva de Género</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                            class="form-check-input" type="checkbox"
                                                                name="mujeres_p4_ninguno" id="mujeres_p4_ninguno"
                                                                <?php if ($mujeres_p4_ninguno == "Ninguno"){
                                                                  echo ' checked="checked"';
                                                                }?> />

                                                            <label class="form-check-label"
                                                                for="mujeres_p4_ninguno">Ninguno</label>
                                                        </div>

                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input group04" type="checkbox"
                                                                name="mujeres_p4_otroProtocolo" id="mujeres_p4_otroProtocolo"
                                                                onchange="javascript:showContent400()"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                <?php if ($mujeres_p4_otroProtocolo == "Otro"){
                                                                  echo ' checked="checked"';
                                                                }?> />
                                                            <label class="form-check-label" for="mujeresp4">
                                                                Otro</label>
                                                            <br>

                                                            <!--Duda-->
                                                            <div id="content400" style="display: none;">
                                                                <label class="form-check-label" for="mujeres_p4_otroProtocolo_cual">
                                                                    ¿Cuáles? </label>
                                                                <input class="form-control" type="text" name="mujeres_p4_otroProtocolo_cual"
                                                                    id="mujeres_p4_otroProtocolo_cual"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $mujeres_p4_otroProtocolo_cual; ?>">

                                                            </div>








                                                            </div>
                                                            </label>
                                                        </div>


                                                    </tr>
                                                </tbody>
                                            </table>






                                            <!--Fin pregunta mujeresp4-->

                                            <!--  Pregunta mujeresp4.1-->
                                            <div>
                                                <h5>4.1.- ¿La institución cuenta con buenas prácticas que considere sean
                                                    innovadoras para mejorar el acceso a la justicia para las mujeres?
                                                </h5>
                                            </div>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <div class="form-group col-md-6">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    name="mujeres_p4_1_buenprac" id="mujeres_p4_1_buenprac"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    <?php if ($mujeres_p4_1_buenprac == "Sí"){echo ' checked="checked"'; }?> />
                                                                <label class="form-check-label"
                                                                    for="mujeres_p4_1_buenprac">Sí</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    name="mujeres_p4_1_buenprac" id="mujeres_p4_1_buenprac"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    <?php if ($mujeres_p4_1_buenprac == "No"){echo ' checked="checked"'; }?> />
                                                                <label class="form-check-label"
                                                                    for="mujeres_p4_1_buenprac">No</label>
                                                            </div>
                                                        </div>
                                                    </tr>
                                                </tbody>
                                            </table>






                                            <!--  Fin  Pregunta mujeresp4.1 -->
                                            <!--  Pregunta mujeresp4_2-->
                                            <div>
                                                <h5>4.2.- ¿Cuáles son esas buenas prácticas? </h5>
                                            </div>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <div class="form-group col-md-6">

                                                          <textarea   <?php if($estatus != 0) { echo "readonly='true'"; } ?> class="form-control" name="mujeres_p4_2_cualBuenprac"
                                                              id="mujeres_p4_2_cualBuenprac" rows="10" cols="90" ><?php echo $mujeres_p4_2_cualBuenprac; ?></textarea>


                                                        </div>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!--  Fin mujeresp4_2  -->
                                            <!--  Pregunta mujeresp4_2-->
                                            <div>
                                                <h5>4.3.- Total de personal que cuenta con una especialidad en justicia para las mujeres.
                                                   Desglosar por sexo. </h5>
                                            </div>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th> Mujeres </th>
                                                        <th>Hombres</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="mujeres_p4_3_justmuj_M" id="mujeres_p4_3_justmuj_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $mujeres_p4_3_justmuj_M; ?>">

                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number"  min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="mujeres_p4_3_justmuj_H" id="mujeres_p4_3_justmuj_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $mujeres_p4_3_justmuj_H; ?>">

                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number"  min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="mujeres_p4_3_justmuj_T" id="mujeres_p4_3_justmuj_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $mujeres_p4_3_justmuj_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!-- Fin preguntas mujeresp4 -->
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Fin TAB Mujeres -->




                        <!--TAB nna-->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">5. JUSTICIA PARA ADOLESCENTES</h3>
                            </div>
                            <br>
                            <div class="panel-body">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <form action="#" method="post" class="col-lg-12">

                                            <!--  Pregunta nna_p5-->
                                            <div>
                                                <h5>5.- ¿Con qué protocolos cuenta la institución para garantizar los
                                                    derechos de niñas, niños y adolescentes? </h5>
                                            </div>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                      <div class="form-check form-check-inline">
                                                          <input class="form-check-input group05" type="checkbox"
                                                              name="nna_p5_protoInterna"
                                                              id="nna_p5_protoInterna"
                                                              onchange="javascript:showContent11()"
                                                              <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                              <?php if ($nna_p5_protoInterna == "Protocolo internacional"){echo ' checked="checked"'; }?> />

                                                          <label class="form-check-label"
                                                              for="nna_p5_protoInterna">Protocolo internacional
                                                          </label>


                                                          <div id="content11" style="display: none;">
                                                              <label class="form-check-label"
                                                                  for="nna_p5_protoInterna_cual">
                                                                  (¿Cuáles?) </label>
                                                              <input class="form-control" type="text"
                                                                  name="nna_p5_protoInterna_cual"
                                                                  id="nna_p5_protoInterna_cual"
                                                                  <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                  value="<?php echo $nna_p5_protoInterna_cual; ?>">

                                                          </div>
                                                      </div>

                                                      <div class="form-check form-check-inline">
                                                          <input class="form-check-input group05" type="checkbox"
                                                              name="nna_p5_interno"
                                                              id="nna_p5_interno"
                                                              onchange="javascript:showContent22()"
                                                              <?php if($estatus != 0) { echo "disabled='true'"; } ?>

                                                              <?php if ($nna_p5_interno == "Protocolo interno"){echo ' checked="checked"'; }?> />

                                                          <label class="form-check-label" for="nna_p5_interno">
                                                              Protocolo interno</label>
                                                          <br>

                                                          <div id="content22" style="display: none;">
                                                              <label class="form-check-label" for="nna_p5_interno_cua">
                                                                  (¿Cuáles?) </label>
                                                              <input class="form-control" type="text"
                                                                  name="nna_p5_interno_cua"
                                                                  id="nna_p5_interno_cua"
                                                                  <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                  value="<?php echo $nna_p5_interno_cua; ?>"/>
                                                          </div>

                                                          </label>
                                                      </div>

                                                      <label>   <div class="form-check form-check-inline">
                                                          <input class="form-check-input group05" type="checkbox"
                                                              name="nna_p5_protoAteninte" id="nna_p5_protoAteninte"
                                                                        <?php if($estatus != 0) { echo "disabled='true'"; } ?>


                                                                        <?php if ($nna_p5_protoAteninte == "Protocolo de Atención Integral para Niñas, Niños y Adolescentes Víctimas de Delito y en Condiciones de Vulnerabilidad (SNDIF)"){echo ' checked="checked"'; }?> />




                                                          Protocolo de Atención Integral para Niñas, Niños y Adolescentes
                                                          Víctimas de Delito y en Condiciones de Vulnerabilidad (SNDIF)
                                                      </div></label>
                                                    <label>  <div class="form-check form-check-inline">
                                                          <input class="form-check-input group05" type="checkbox"
                                                              name="nna_p5_protoActjust" id="nna_p5_protoActjust"
                                                          <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                          <?php if ($nna_p5_protoActjust == "Protocolo de actuación para quienes imparten justicia en casos que involucren a niñas, niños y adolescentes (SCJN)"){echo ' checked="checked"'; }?> />

                                                        Protocolo de Actuación para Quienes Imparten Justicia en Casos que Involucren a Niñas, Niños y Adolescentes (SCJN)
                                                      </div></label>

                                               <div class="form-check form-check-inline">
                                                          <input class="form-check-input" type="checkbox"
                                                              name="nna_p5_ninguno" id="nna_p5_ninguno"
                                                              <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                              <?php if ($nna_p5_ninguno == "Ninguno"){echo ' checked="checked"'; }?>
                                                              />

                                                          <label class="form-check-label"
                                                              for="nna_p5_ninguno">Ninguno</label>
                                                      </div>



                                                      <div class="form-check form-check-inline">
                                                          <input class="form-check-input group05" type="checkbox"
                                                              name="nna_p5_otroProtocolo" id="nna_p5_otroProtocolo"
                                                              onchange="javascript:showContent99()"
                                                              <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                              <?php if ($nna_p5_otroProtocolo == "Otro"){echo ' checked="checked"'; }?> />

                                                          <label class="form-check-label" for="nna_p5_otroProtocolo">
                                                              Otro</label>



                                                          <!--Duda-->
                                                          <div id="content99" style="display: none;">
                                                              <label class="form-check-label" for="nna_p5_otroProtocolo_cual">
                                                                  (¿Cuáles?) </label>
                                                              <input class="form-control" type="text" name="nna_p5_otroProtocolo_cual"
                                                                  id="nna_p5_otroProtocolo_cual"

                                                                  <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                  value="<?php echo $nna_p5_otroProtocolo_cual; ?>">

                                                          </div>
                                                          </label>
                                                      </div>
                                                    </tr>
                                                </tbody>
                                            </table>





                                                                    <!--

                                                                                                    <script>
                                                                                                    $(function () {
                                                                                                        $("#nna_p5_ninguno").click(function() {
                                                                                                            ToggleSection500();
                                                                                                        });

                                                                                                        ToggleSection500();
                                                                                                    });

                                                                                                    function ToggleSection500() {
                                                                                                        var $nna_p5_protoInterna = $("#nna_p5_protoInterna");
                                                                                                        var $nna_p5_interno = $("#nna_p5_interno");
                                                                                                        var $nna_p5_protoAteninte = $("#nna_p5_protoAteninte");
                                                                                                        var $nna_p5_protoActjust = $("#nna_p5_protoActjust");
                                                                                                        var $nna_p5_otroProtocolo = $("#nna_p5_otroProtocolo");
                                                                                                        var $nna_p5_otroProtocolo_cual = $("#nna_p5_otroProtocolo_cual");




                                                                                                        // The right way to check if a checkbox is checked is with .prop method
                                                                                                        if ($("#nna_p5_ninguno").prop("checked")) {
                                                                                                            $nna_p5_protoInterna.prop("disabled", true).val("");
                                                                                                            $nna_p5_interno.prop("disabled", true).val("");
                                                                                                            $nna_p5_protoAteninte.prop("disabled", true).val("");
                                                                                                            $nna_p5_protoActjust.prop("disabled", true).val("");
                                                                                                            $nna_p5_otroProtocolo.prop("disabled", true).val("");
                                                                                                            $nna_p5_otroProtocolo_cual.prop("disabled", true).val("");
                                                                                                                                                                                                          $nna_p5_protoActjust.prop("disabled", true).val("");

                                                                                                        }
                                                                                                        else {
                                                                                                            $nna_p5_protoInterna.prop("disabled", false);
                                                                                                            $nna_p5_interno.prop("disabled", false);
                                                                                                            $nna_p5_protoAteninte.prop("disabled", false);
                                                                                                            $nna_p5_protoActjust.prop("disabled", false);
                                                                                                            $nna_p5_otroProtocolo.prop("disabled", false);
                                                                                                            $nna_p5_otroProtocolo_cual.prop("disabled", false);






                                                                                                        }
                                                                                                    }
                                                                                                    </script>TAB nna-->




                                            <!--Fin pregunta nna_p5-->

                                            <!--  Pregunta nna_p5_1-->
                                            <div>
                                                <h5>5.1.- ¿La institución cuenta con buenas prácticas que considere sean
                                                    innovadoras para mejorar el acceso a la justicia a niñas, niños y
                                                    adolescentes? </h5>
                                            </div>


                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                      <div class="form-group col-md-6">
                                                          <div class="form-check form-check-inline">
                                                              <input class="form-check-input" type="radio"
                                                                  name="nna_p5_1_buenpracs" id="nna_p5_1_buenpracs"
                                                                  <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                  <?php if ($nna_p5_1_buenpracs == "Sí"){echo ' checked="checked"'; }?> />
                                                              <label class="form-check-label"
                                                                  for="nna_p5_1_buenpracs">Sí</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                              <input class="form-check-input" type="radio"
                                                                  name="nna_p5_1_buenpracs" id="nna_p5_1_buenpracs"
                                                                  <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                  <?php if ($nna_p5_1_buenpracs == "No"){echo ' checked="checked"'; }?> />
                                                              <label class="form-check-label"
                                                                  for="nna_p5_1_buenpracs">No</label>
                                                          </div>
                                                      </div>




                                                    </tr>

                                                </tbody>
                                            </table>

                                            <!--  Fin  nna_p5_1 -->
                                            <!--  Pregunta nna_p5_2-->
                                            <div>
                                                <h5>5.2.- ¿Cuáles son esas buenas prácticas? </h5>
                                            </div>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <div class="form-group col-md-6">


                                                          <textarea  <?php if($estatus != 0) { echo "readonly='true'"; } ?> class="form-control" name="nna_p5_2_cualBuenpract" id="nna_p5_2_cualBuenpract" rows="10" cols="90" ><?php echo $nna_p5_2_cualBuenpract; ?></textarea>


                                                        </div>
                                                    </tr>
                                                </tbody>
                                            </table>


                                            <div>
                                                <h5>5.3.- Total de personal especializado en justicia para adolescentes.
                                                    Desglosar por sexo. </h5>
                                            </div>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th> Mujer </th>
                                                        <th>Hombre</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>


                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control" name="ja_p5_3_espejust_M"
                                                                    id="ja_p5_3_espejust_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                     <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                     value="<?php echo $ja_p5_3_espejust_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control" name="ja_p5_3_espejust_H"
                                                                    id="ja_p5_3_espejust_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $ja_p5_3_espejust_H; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control" name="ja_p5_3_espejust_T"
                                                                    id="ja_p5_3_espejust_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $ja_p5_3_espejust_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <!--  Fin nna_p5_2  -->

                                            <!-- Fin preguntas nna_p5 -->
                                            <input type="button" value="Guardar cambios"
                                                class="btn btn-success btn-flotante crearTab3" />
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>












                        <!--TAB PERSONAS INDIGENAS-->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">6. JUSTICIA PARA PERSONAS INDÍGENAS</h3>
                            </div>
                            <br>
                            <div class="panel-body">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <form action="#" method="post" class="col-lg-12">

                                            <!--  Pregunta indigenas_p6-->
                                            <div>
                                                <h5>6.- ¿La institución cuenta con intérpretes/traductores de lenguas indígenas?  </h5>
                                            </div>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                      <div class="form-group col-md-12">



                                                        <div class="form-group col-md-6">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    name="indigenas_p6_tradulenind" id="indigenas_p6_tradulenind"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    <?php if ($indigenas_p6_tradulenind == "Sí"){echo ' checked="checked"'; }?> />
                                                                <label class="form-check-label"
                                                                    for="presupuestop3">Sí</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    name="indigenas_p6_tradulenind" id="indigenas_p6_tradulenind"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    <?php if ($indigenas_p6_tradulenind == "No"){echo ' checked="checked"'; }?> />
                                                                <label class="form-check-label"
                                                                    for="presupuestop3">No</label>
                                                            </div>
                                                        </div>



                                                     </div>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!--Fin pregunta indigenas_p6-->

                                            <!--  Pregunta indigenas_p6_1-->
                                            <div>
                                                <h5>6.1.- ¿Con cuántos intérpretes/traductores cuenta la institución?
                                                    Desglosar por lengua indígena y por sexo. </h5>
                                            </div>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Descripción</th>
                                                        <th> Mujer </th>
                                                        <th>Hombre</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>



                                                    <tr>
                                                        <td>1</td>
                                                        <td>Náhuatl</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="indigenas_p6_1_nahuatl_M" id="indigenas_p6_1_nahuatl_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                      value="<?php echo $indigenas_p6_1_nahuatl_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="indigenas_p6_1_nahuatl_H" id="indigenas_p6_1_nahuatl_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $indigenas_p6_1_nahuatl_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="indigenas_p6_1_nahuatl_T" id="indigenas_p6_1_nahuatl_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $indigenas_p6_1_nahuatl_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>2</td>
                                                        <td>Maya</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="indigenas_p6_1_maya_M" id="indigenas_p6_1_maya_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $indigenas_p6_1_maya_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="indigenas_p6_1_maya_H" id="indigenas_p6_1_maya_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $indigenas_p6_1_maya_H; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="indigenas_p6_1_maya_T" id="indigenas_p6_1_maya_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $indigenas_p6_1_maya_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>3</td>
                                                        <td>Tseltal</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="indigenas_p6_1_tseltal_M" id="indigenas_p6_1_tseltal_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $indigenas_p6_1_tseltal_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="indigenas_p6_1_tseltal_H" id="indigenas_p6_1_tseltal_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $indigenas_p6_1_tseltal_H; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="indigenas_p6_1_tseltal_T" id="indigenas_p6_1_tseltal_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $indigenas_p6_1_tseltal_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td>4</td>
                                                        <td>Mixteco</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="indigenas_p6_1_mixteco_M" id="indigenas_p6_1_mixteco_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $indigenas_p6_1_mixteco_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="indigenas_p6_1_mixteco_H" id="indigenas_p6_1_mixteco_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $indigenas_p6_1_mixteco_H; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="indigenas_p6_1_mixteco_T" id="indigenas_p6_1_mixteco_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $indigenas_p6_1_mixteco_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td>5</td>
                                                        <td>Tsotsil</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="indigenas_p6_1_tsotsil_M" id="indigenas_p6_1_tsotsil_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $indigenas_p6_1_tsotsil_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="indigenas_p6_1_tsotsil_H" id="indigenas_p6_1_tsotsil_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $indigenas_p6_1_tsotsil_H; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="indigenas_p6_1_tsotsil_T" id="indigenas_p6_1_tsotsil_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $indigenas_p6_1_tsotsil_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td><div style="float:left;">Otras (¿cuáles?)   &nbsp;&nbsp;&nbsp;&nbsp;</div>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control"
                                                                    name="indigenas_p6_1_otro" id="indigenas_p6_1_otro"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $indigenas_p6_1_otro; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="indigenas_p6_1_otro_M" id="indigenas_p6_1_otro_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $indigenas_p6_1_otro_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="indigenas_p6_1_otro_H" id="indigenas_p6_1_otro_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $indigenas_p6_1_otro_H; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="indigenas_p6_1_otro_T" id="indigenas_p6_1_otro_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $indigenas_p6_1_otro_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                            </table>

                                            <!--  Fin  Pregunta indigenas_p6.1 -->

                                            <!--  Pregunta indigenas_p6_2-->
                                            <div>
                                                <h5>6.2.- ¿Tienen convenios con alguna institución que provea este
                                                    servicio? </h5>
                                            </div>
                                            <table class="table">
                                                <tbody>
                                                    <tr>

                                                      <div class="form-group col-md-6">
                                                          <div class="form-check form-check-inline">
                                                              <input class="form-check-input" type="radio"
                                                                  name="indigenas_p6_2_convenio" id="indigenas_p6_2_conveni"
                                                                  <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                  <?php if ($indigenas_p6_2_convenio == "Sí"){echo ' checked="checked"'; }?> />
                                                              <label class="form-check-label"
                                                                  for="indigenas_p6_2_convenio">Sí</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                              <input class="form-check-input" type="radio"
                                                                  name="indigenas_p6_2_convenio" id="indigenas_p6_2_convenio"
                                                                  <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                  <?php if ($indigenas_p6_2_convenio == "No"){echo ' checked="checked"'; }?> />
                                                              <label class="form-check-label"
                                                                  for="indigenas_p6_2_convenio">No</label>
                                                          </div>
                                                      </div>

                                                    </tr>
                                                </tbody>
                                            </table>

                                          <!--  <script>
                                            $(function() {
                                                $("#indigenas_p6_2_convenio").click(function() {
                                                    ToggleSection8();
                                                });

                                                ToggleSection8();
                                            });

                                            function ToggleSection8() {
                                              var $indigenas_p6_2_nombinst = $("#indigenas_p6_2_nombinst");

                                                // The right way to check if a checkbox is checked is with .prop method
                                                if ($("#indigenas_p6_2_convenio_s").prop("checked")) {
                                                    $indigenas_p6_2_nombinst.prop("disabled", true).val(" ");

                                                }
                                          else {
                                                    $indigenas_p6_2_nombinst.prop("disabled", false);




                                                }
                                            }

                                            $(function() {
                                                $("#indigenas_p6_2_convenio").click(function() {
                                                    ToggleSection8();
                                                });

                                                ToggleSection8();
                                            });

                                            function ToggleSection8() {
                                              var $indigenas_p6_2_nombinst = $("#indigenas_p6_2_nombinst");

                                                // The right way to check if a checkbox is checked is with .prop method
                                                if ($("#indigenas_p6_2_convenio").prop("checked")) {
                                                    $indigenas_p6_2_nombinst.prop("disabled", true).val(" ");

                                                }
                                          else {
                                                    $indigenas_p6_2_nombinst.prop("disabled", false);




                                                }
                                            }



                                          </script> -->

                                            <!--  Fin indigenas_p6_2  -->

                                            <!--  Pregunta indigenas_p6_3-->
                                            <div>
                                                <h5>6.3.- ¿Cuál es el nombre de la institución o instituciones?</h5>
                                            </div>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <div class="form-group col-md-6">


                                                          <textarea  <?php if($estatus != 0) { echo "readonly='true'"; } ?> class="form-control" name="indigenas_p6_2_nombinst" id="indigenas_p6_2_nombinst" rows="10" cols="90" ><?php echo $indigenas_p6_2_nombinst; ?></textarea>


                                                        </div>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!--  Fin indigenas_p6_3 -->
                                            <!--  Pregunta indigenas_p6_4-->
                                            <div>
                                                <h5>6.4.- ¿Con qué protocolos cuenta la institución para garantizar los
                                                    derechos de las personas indígenas? </h5>
                                            </div>
                                            <table class="table">
                                                <tbody>
                                                    <tr>

                                                      <div class="form-check form-check-inline">
                                                          <input class="form-check-input group64" type="checkbox"
                                                              name="indigenas_p6_4_ProtoInter"
                                                              id="indigenas_p6_4_ProtoInter"
                                                              onchange="javascript:showContent100()"
                                                              <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                              <?php if ($indigenas_p6_4_ProtoInter == "Protocolo internacional"){echo ' checked="checked"'; }?>
                                                               />
                                                          <label class="form-check-label"
                                                              for="indigenas_p6_4_ProtoInter">Protocolo internacional
                                                          </label>


                                                          <div id="content100" style="display: none;">
                                                              <label class="form-check-label"
                                                                  for="indigenas_p6_4_ProtoInter_cual">
                                                                  (¿Cuáles?) </label>
                                                              <input class="form-control group64"  type="text"
                                                                  name="indigenas_p6_4_ProtoInter_cual"
                                                                  id="indigenas_p6_4_ProtoInter_cual"
                                                                  <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                  value="<?php echo $indigenas_p6_4_ProtoInter_cual; ?>">

                                                          </div>
                                                      </div>




                                                      <div class="form-check form-check-inline">
                                                          <input class="form-check-input group64" type="checkbox"
                                                              name="indigenas_p6_4_interno"
                                                              id="indigenas_p6_4_interno"
                                                              onchange="javascript:showContent101()"
                                                              <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                              <?php if ($indigenas_p6_4_interno == "Protocolo interno"){echo ' checked="checked"'; }?>
                                                              />
                                                          <label class="form-check-label"
                                                              for="indigenas_p6_4_interno">Protocolo interno
                                                          </label>


                                                          <div id="content101" style="display: none;">
                                                              <label class="form-check-label"
                                                                  for="indigenas_p6_4_interno_cual">
                                                                  (¿Cuáles?) </label>
                                                              <input class="form-control group64" type="text"
                                                                  name="indigenas_p6_4_interno_cual"
                                                                  id="indigenas_p6_4_interno_cual"
                                                                  <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                  value="<?php echo $indigenas_p6_4_interno_cual; ?>">

                                                          </div>
                                                      </div>




                                                        <div class="form-check form-check-inline">
                                                          <input class="form-check-input group64" type="checkbox"
                                                          name="indigenas_p6_4_ProtoImpjust" id="indigenas_p6_4_ProtoImpjust"
                                                              <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                              <?php if ($indigenas_p6_4_ProtoImpjust == "Protocolo de Actuación para Quienes Imparten Justicia en Casos que Involucren Derechos de Personas, Comunidades y Pueblos Indígenas (SCJN)")
                                                              {echo ' checked="checked"'; }?>
                                                              />

                                                          <label class="form-check-label"for="indigenas_p6_4_ProtoImpjust">
                                                          Protocolo de Actuación para Quienes Imparten Justicia en Casos que Involucren Derechos de Personas, Comunidades y Pueblos Indígenas (SCJN)
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="indigenas_p6_4_ninguno" id="indigenas_p6_4_ninguno"
                                                                  <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                  <?php if ($indigenas_p6_4_ninguno == "Ninguno"){echo ' checked="checked"'; }?>
                                                                  />

                                                            <label class="form-check-label"
                                                                for="indigenas_p6_4_ninguno">Ninguno</label>
                                                        </div>



                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input group64" type="checkbox"
                                                                name="indigenas_p6_4_otro" id="indigenas_p6_4_otro"
                                                                onchange="javascript:showContent102()"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                <?php if ($indigenas_p6_4_otro == "Otro"){echo ' checked="checked"'; }?>
                                                                />
                                                            <label class="form-check-label" for="indigenas_p6_4_otro">
                                                                Otro</label>

                                                            <!--Duda-->
                                                            <div id="content102" style="display: none;">
                                                                <label class="form-check-label" for="indigenas_p6_4_otro_cual">
                                                                    (¿Cuáles?) </label>
                                                                <input class="form-control group64" type="text" name="indigenas_p6_4_otro_cual"
                                                                    id="indigenas_p6_4_otro_cual"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $indigenas_p6_4_otro_cual; ?>">

                                                            </div>

                                                        </div>









                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!--  Fin indigenas_p6_4-->
                                            <!--  Pregunta indigenas_p6_5-->
                                            <div>
                                                <h5>6.5.- ¿La institución cuenta con buenas prácticas que considere sean
                                                    innovadoras para mejorar el acceso a la justicia a personas
                                                    indígenas? </h5>
                                            </div>
                                            <table class="table">
                                                <tbody>
                                                    <tr>


                                                      <div class="form-group col-md-6">
                                                          <div class="form-check form-check-inline">
                                                              <input class="form-check-input" type="radio"
                                                                  name="indigenas_p6_5_buenaspract" id="indigenas_p6_5_buenaspract"
                                                                  <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                  <?php if ($indigenas_p6_5_buenaspract == "Sí"){echo ' checked="checked"'; }?> />
                                                              <label class="form-check-label"
                                                                  for="indigenas_p6_5_buenaspract">Sí</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                              <input class="form-check-input" type="radio"
                                                                  name="indigenas_p6_5_buenaspract" id="indigenas_p6_5_buenaspract"
                                                                  <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                  <?php if ($indigenas_p6_5_buenaspract == "No"){echo ' checked="checked"'; }?> />
                                                              <label class="form-check-label"
                                                                  for="indigenas_p6_5_buenaspract">No</label>
                                                          </div>
                                                      </div>
                                                    </tr>
                                                </tbody>
                                            </table>

                                          <!--  <script>
                                            $(function() {
                                                $("#indigenas_p6_5_buenaspracts").click(function() {
                                                    ToggleSection650();
                                                });

                                                ToggleSection650();
                                            });

                                            function ToggleSection650() {
                                              var $indigenas_p6_6_cualbuenaspra = $("#indigenas_p6_6_cualbuenaspra");

                                                // The right way to check if a checkbox is checked is with .prop method
                                                if ($("#indigenas_p6_5_buenaspracts").prop("checked")) {
                                                    $indigenas_p6_6_cualbuenaspra.prop("disabled", true).val(" ");

                                                }
   else {
                                                    $indigenas_p6_6_cualbuenaspra.prop("disabled", false);




                                                }
                                            }

                                            $(function() {
                                                $("#indigenas_p6_5_buenaspracts").click(function() {
                                                    ToggleSection650();
                                                });

                                                ToggleSection650();
                                            });

                                            function ToggleSection650() {
                                              var $indigenas_p6_6_cualbuenaspra = $("#indigenas_p6_6_cualbuenaspra");

                                                // The right way to check if a checkbox is checked is with .prop method
                                                if ($("#indigenas_p6_5_buenaspracts").prop("checked")) {
                                                    $indigenas_p6_6_cualbuenaspra.prop("disabled", true).val(" ");

                                                }
else {
                                                    $indigenas_p6_6_cualbuenaspra.prop("disabled", false);




                                                }
                                            }



                                          </script> -->


                                            <!--  Fin indigenas_p6_5-->

                                            <!--  Pregunta indigenas_p6_6-->
                                            <div>
                                                <h5>6.6.- ¿Cuáles son esas buenas prácticas? </h5>
                                            </div>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <div class="form-group col-md-6">

                                                          <textarea  <?php if($estatus != 0) { echo "readonly='true'"; } ?> class="form-control" name="indigenas_p6_6_cualbuenaspra" id="indigenas_p6_6_cualbuenaspra" rows="10" cols="90" ><?php echo $indigenas_p6_6_cualbuenaspra; ?></textarea>

                                                        </div>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!--  Fin indigenas_p6_6 -->

                                            <!-- Fin preguntas indigenas_p6 -->

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Fin TAB indigenas -->

                    </div>

                    <!-- Finaliza Tab Contacto secundario -->

                    <!-- Termina tab personal -->



                    <!--  Tab Capacitacion y evaluacion de personal  -->
                    <div id="tabs-4">

                        <!--TAB PERSONAS EXTRANJERAS-->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">7. JUSTICIA PARA PERSONAS EXTRANJERAS</h3>
                            </div>
                            <br>
                            <div class="panel-body">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <form action="#" method="post" class="col-lg-12">
<?php

//BUSCAR PREGUNTA Formulario
$pregunta = ModeloPolicias:: mdlMostrarPolicias("policias","uuid", $_SESSION["id"]);
if(count($pregunta)==0){
$idFormulario=0;
}else{
$idFormulario=$pregunta[0]["id"];

$extranjeras_p7_tradLenExt=$pregunta[0]["extranjeras_p7_tradLenExt"];
$extranjeras_p7_1_traductor_M=$pregunta[0]["extranjeras_p7_1_traductor_M"];
$extranjeras_p7_1_traductor_H=$pregunta[0]["extranjeras_p7_1_traductor_H"];
$extranjeras_p7_1_traductor_T=$pregunta[0]["extranjeras_p7_1_traductor_T"];

$extranjeras_p7_1_ingles_M=$pregunta[0]["extranjeras_p7_1_ingles_M"];
$extranjeras_p7_1_ingles_H=$pregunta[0]["extranjeras_p7_1_ingles_H"];
$extranjeras_p7_1_ingles_T=$pregunta[0]["extranjeras_p7_1_ingles_T"];




$extranjeras_p7_1_chino_M=$pregunta[0]["extranjeras_p7_1_chino_M"];
$extranjeras_p7_1_chino_H=$pregunta[0]["extranjeras_p7_1_chino_H"];
$extranjeras_p7_1_chino_T=$pregunta[0]["extranjeras_p7_1_chino_T"];
$extranjeras_p7_1_frances_M=$pregunta[0]["extranjeras_p7_1_frances_M"];
$extranjeras_p7_1_frances_H=$pregunta[0]["extranjeras_p7_1_frances_H"];
$extranjeras_p7_1_frances_T=$pregunta[0]["extranjeras_p7_1_frances_T"];
$extranjeras_p7_1_arabe_M=$pregunta[0]["extranjeras_p7_1_arabe_M"];
$extranjeras_p7_1_arabe_H=$pregunta[0]["extranjeras_p7_1_arabe_H"];
$extranjeras_p7_1_arabe_T=$pregunta[0]["extranjeras_p7_1_arabe_T"];
$extranjeras_p7_1_ruso_M=$pregunta[0]["extranjeras_p7_1_ruso_M"];
$extranjeras_p7_1_ruso_H=$pregunta[0]["extranjeras_p7_1_ruso_H"];
$extranjeras_p7_1_ruso_T=$pregunta[0]["extranjeras_p7_1_ruso_T"];
$extranjeras_p7_1_otro=$pregunta[0]["extranjeras_p7_1_otro"];
$extranjeras_p7_1_otro_M=$pregunta[0]["extranjeras_p7_1_otro_M"];
$extranjeras_p7_1_otro_H=$pregunta[0]["extranjeras_p7_1_otro_H"];
$extranjeras_p7_1_otro_T=$pregunta[0]["extranjeras_p7_1_otro_T"];
$extranjeras_p7_2_ConvInst=$pregunta[0]["extranjeras_p7_2_ConvInst"];
$extranjeras_p7_3_nombreInsti=$pregunta[0]["extranjeras_p7_3_nombreInsti"];
$extranjeras_p7_4_ProtoInterna=$pregunta[0]["extranjeras_p7_4_ProtoInterna"];

$extranjeras_p7_4_ProtoInterna_cual=$pregunta[0]["extranjeras_p7_4_ProtoInterna_cual"];
$extranjeras_p7_4_interno=$pregunta[0]["extranjeras_p7_4_interno"];
$extranjeras_p7_4_interno_cual=$pregunta[0]["extranjeras_p7_4_interno_cual"];
$extranjeras_p7_4_ninguno=$pregunta[0]["extranjeras_p7_4_ninguno"];
$extranjeras_p7_4_Otro=$pregunta[0]["extranjeras_p7_4_Otro"];
$extranjeras_p7_4_Otro_cual=$pregunta[0]["extranjeras_p7_4_Otro_cual"];
$extranjeras_p7_5_buenasprac=$pregunta[0]["extranjeras_p7_5_buenasprac"];
$extranjeras_p7_6_buenasprac_cual=$pregunta[0]["extranjeras_p7_6_buenasprac_cual"];
$discapacidad_p8_braile=$pregunta[0]["discapacidad_p8_braile"];
$discapacidad_p8_LenSen=$pregunta[0]["discapacidad_p8_LenSen"];
$discapacidad_p8_1_nombreInst=$pregunta[0]["discapacidad_p8_1_nombreInst"];
$discapacidad_p8_2_ProtoInterna=$pregunta[0]["discapacidad_p8_2_ProtoInterna"];
$discapacidad_p8_2_ProtoInterna_cual=$pregunta[0]["discapacidad_p8_2_ProtoInterna_cual"];
$discapacidad_p8_2_interno=$pregunta[0]["discapacidad_p8_2_interno"];
$discapacidad_p8_2_interno_cua=$pregunta[0]["discapacidad_p8_2_interno_cua"];
$discapacidad_p8_2_ProtoImpJust=$pregunta[0]["discapacidad_p8_2_ProtoImpJust"];
$discapacidad_p8_2_ninguno=$pregunta[0]["discapacidad_p8_2_ninguno"];
$discapacidad_p8_2_otros=$pregunta[0]["discapacidad_p8_2_otros"];
$discapacidad_p8_2_otros_cual=$pregunta[0]["discapacidad_p8_2_otros_cual"];
$discapacidad_p8_3_buenasprac=$pregunta[0]["discapacidad_p8_3_buenasprac"];
$discapacidad_p8_3_buenasprac_cual=$pregunta[0]["discapacidad_p8_3_buenasprac_cual"];

}
?>
                                            <!--  Pregunta extranjeras_p7-->
                                            <div>
                                                <h5>7.- ¿La institución cuenta con traductores de lenguas extranjeras?  </h5>
                                            </div>

                                            <table class="table">
                                                <tbody>
                                                    <tr>

                                                      <div class="form-group col-md-6">
                                                          <div class="form-check form-check-inline">
                                                              <input class="form-check-input" type="radio"
                                                                  name="extranjeras_p7_tradLenExt" id="extranjeras_p7_tradLenExt"
                                                                  <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                  <?php if ($extranjeras_p7_tradLenExt == "SÍ"){echo ' checked="checked"'; }?> />
                                                              <label class="form-check-label"
                                                                  for="extranjeras_p7_tradLenExt">Sí</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                              <input class="form-check-input" type="radio"
                                                                  name="extranjeras_p7_tradLenExt" id="extranjeras_p7_tradLenExt"
                                                                  <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                  <?php if ($extranjeras_p7_tradLenExt == "No"){echo ' checked="checked"'; }?> />
                                                              <label class="form-check-label"
                                                                  for="extranjeras_p7_tradLenExt">No</label>
                                                          </div>
                                                      </div>

                                                    </tr>
                                                </tbody>
                                            </table>



                                            <div>
                                                <h5>7.1.- ¿Con cuántos traductores cuenta la institución? Desglosar por
                                                    lengua extranjera y por sexo. </h5>
                                            </div>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Descripción</th>
                                                        <th> Mujer </th>
                                                        <th>Hombre</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>



                                                    <tr>
                                                        <td>1</td>
                                                        <td>Inglés</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="extranjeras_p7_1_ingles_M" id="extranjeras_p7_1_ingles_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $extranjeras_p7_1_ingles_M; ?>">

                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="extranjeras_p7_1_ingles_H" id="extranjeras_p7_1_ingles_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $extranjeras_p7_1_ingles_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="extranjeras_p7_1_ingles_T" id="extranjeras_p7_1_ingles_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $extranjeras_p7_1_ingles_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>2</td>
                                                        <td>Chino</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="extranjeras_p7_1_chino_M" id="extranjeras_p7_1_chino_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $extranjeras_p7_1_chino_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="extranjeras_p7_1_chino_H" id="extranjeras_p7_1_chino_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $extranjeras_p7_1_chino_H; ?>">

                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="extranjeras_p7_1_chino_T" id="extranjeras_p7_1_chino_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $extranjeras_p7_1_chino_T; ?>">

                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>3</td>
                                                        <td>Francés</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="extranjeras_p7_1_frances_M" id="extranjeras_p7_1_frances_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                  <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                  value="<?php echo $extranjeras_p7_1_frances_M; ?>">

                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="extranjeras_p7_1_frances_H" id="extranjeras_p7_1_frances_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $extranjeras_p7_1_frances_H; ?>">

                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="extranjeras_p7_1_frances_T" id="extranjeras_p7_1_frances_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $extranjeras_p7_1_frances_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td>4</td>
                                                        <td>Árabe</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="extranjeras_p7_1_arabe_M" id="extranjeras_p7_1_arabe_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $extranjeras_p7_1_arabe_M; ?>">

                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="extranjeras_p7_1_arabe_H" id="extranjeras_p7_1_arabe_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $extranjeras_p7_1_arabe_H; ?>">

                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="extranjeras_p7_1_arabe_T" id="extranjeras_p7_1_arabe_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $extranjeras_p7_1_arabe_T; ?>">

                                                            </div>
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td>5</td>
                                                        <td>Ruso</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="extranjeras_p7_1_ruso_M" id="extranjeras_p7_1_ruso_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $extranjeras_p7_1_ruso_M; ?>">

                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="extranjeras_p7_1_ruso_H" id="extranjeras_p7_1_ruso_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                  <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                  value="<?php echo $extranjeras_p7_1_ruso_H; ?>">

                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="extranjeras_p7_1_ruso_T" id="extranjeras_p7_1_ruso_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $extranjeras_p7_1_ruso_T; ?>">

                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td><div style="float:left;">Otras (¿cuáles?)   &nbsp;&nbsp;&nbsp;&nbsp;</div>
                                                            <div  class="input-group">
                                                                <input type="text" class="form-control"
                                                                    name="extranjeras_p7_1_otro" id="extranjeras_p7_1_otro"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $extranjeras_p7_1_otro; ?>">

                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="extranjeras_p7_1_otro_M" id="extranjeras_p7_1_otro_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $extranjeras_p7_1_otro_M; ?>">

                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="extranjeras_p7_1_otro_H" id="extranjeras_p7_1_otro_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $extranjeras_p7_1_otro_H; ?>">

                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="extranjeras_p7_1_otro_T" id="extranjeras_p7_1_otro_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $extranjeras_p7_1_otro_T; ?>">

                                                            </div>
                                                        </td>
                                                    </tr>
                                            </table>

                                            <!--  Fin  Pregunta extranjeras_p7_1 -->

                                            <!--  Pregunta extranjeras_p7_2-->
                                            <div>
                                                <h5>7.2.- ¿La institución tiene convenios con otra institución que provea este servicio?</h5>
                                            </div>
                                            <table class="table">
                                                <tbody>
                                                    <tr>

                                                      <div class="form-group col-md-6">
                                                        <div class="form-check form-check-inline">
                                                                                                                    <input class="form-check-input" type="radio"
                                                                                                                        name="extranjeras_p7_2_ConvInst" id="extranjeras_p7_2_ConvInst"
                                                                                                                        <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                                                                        <?php if ($extranjeras_p7_2_ConvInst == "Sí"){echo ' checked="checked"'; }?> />
                                                                                                                    <label class="form-check-label"
                                                                                                                        for="extranjeras_p7_2_ConvInst">Sí</label>
                                                                                                                </div>
                                                                                                                <div class="form-check form-check-inline">
                                                                                                                    <input class="form-check-input" type="radio"
                                                                                                                        name="extranjeras_p7_2_ConvInst" id="extranjeras_p7_2_ConvInst"
                                                                                                                        <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                                                                        <?php if ($extranjeras_p7_2_ConvInst == "No"){echo ' checked="checked"'; }?> />
                                                                                                                    <label class="form-check-label"
                                                                                                                        for="extranjeras_p7_2_ConvInst">No</label>
                                                                                                                </div>
                                                                                                            </div>



                                                    </tr>
                                                </tbody>
                                            </table>
                                          <!--  <script>
                                            $(function() {
                                                $("#extranjeras_p7_2_ConvInsts").click(function() {
                                                    ToggleSection720();
                                                });

                                                ToggleSection720();
                                            });

                                            function ToggleSection720() {
                                              var $extranjeras_p7_3_nombreInsti = $("#extranjeras_p7_3_nombreInsti");

                                                // The right way to check if a checkbox is checked is with .prop method
                                                if ($("#extranjeras_p7_2_ConvInsts").prop("checked")) {
                                                    $extranjeras_p7_3_nombreInsti.prop("disabled", true).val(" ");

                                                }
   else {
                                                    $extranjeras_p7_3_nombreInsti.prop("disabled", false);




                                                }
                                            }

                                            $(function() {
                                                $("#extranjeras_p7_2_ConvInst").click(function() {
                                                    ToggleSection720();
                                                });

                                                ToggleSection720();
                                            });

                                            function ToggleSection720() {
                                              var $extranjeras_p7_3_nombreInsti = $("#extranjeras_p7_3_nombreInsti");

                                                // The right way to check if a checkbox is checked is with .prop method
                                                if ($("#extranjeras_p7_2_ConvInst").prop("checked")) {
                                                    $extranjeras_p7_3_nombreInsti.prop("disabled", true).val(" ");

                                                }
else {
                                                    $extranjeras_p7_3_nombreInsti.prop("disabled", false);




                                                }
                                            }



                                          </script> -->


                                            <!--  Fin extranjeras_p7_2  -->

                                            <!--  Pregunta extranjeras_p7_3-->
                                            <div>
                                                <h5>7.3.- ¿Cuál es el nombre de dicha institución o instituciones?</h5>
                                            </div>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <div class="form-group col-md-6">

                                                          <textarea  <?php if($estatus != 0) { echo "readonly='true'"; } ?> class="form-control" name="extranjeras_p7_3_nombreInsti" id="extranjeras_p7_3_nombreInsti" rows="10" cols="90" ><?php echo $extranjeras_p7_3_nombreInsti; ?></textarea>



                                                        </div>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!--  Fin extranjeras_p7_3 -->
                                            <!--  Pregunta extranjeras_p7_4-->
                                            <div>
                                                <h5>7.4.- ¿Con qué protocolos cuenta la institución para garantizar los
                                                    derechos de personas extranjeras?</h5>
                                            </div>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                      <div class="form-check form-check-inline">
                                                          <input class="form-check-input" type="checkbox"
                                                          name="extranjeras_p7_4_ProtoInterna"
                                                          id="extranjeras_p7_4_ProtoInterna"
                                                          onchange="javascript:showContent1010()"
                                                          <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                          <?php if ($extranjeras_p7_4_ProtoInterna == "Protocolo internacional"){echo ' checked="checked"'; }?>
                                                          />
                                                          <label class="form-check-label"
                                                          for="extranjeras_p7_4_ProtoInterna">Protocolo internacional
                                                        </label>

                                                        <div id="content1010" style="display: none;">
                                                          <label class="form-check-label"
                                                          for="extranjeras_p7_4_ProtoInterna_cual">
                                                          ¿Cuáles?</label>
                                                          <input class="form-control" type="text"
                                                          name="extranjeras_p7_4_ProtoInterna_cual"
                                                          id="extranjeras_p7_4_ProtoInterna_cual"
                                                          <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                          value="<?php echo $extranjeras_p7_4_ProtoInterna_cual; ?>" />
                                                        </div>
                                                        </div>


                                                        <div class="form-check form-check-inline">
                                                          <input class="form-check-input" type="checkbox"
                                                          name="extranjeras_p7_4_interno"
                                                          id="extranjeras_p7_4_interno"
                                                          <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                          onchange="javascript:showContent103()"
                                                      <?php if ($extranjeras_p7_4_interno == "Protocolo interno"){echo ' checked="checked"'; }?>/>
                                                          <label class="form-check-label" for="extranjeras_p7_4_interno"/>
                                                                Protocolo interno  </label>
                                                                <br>
                                                          <div id="content103" style="display: none;">
                                                          <label class="form-check-label" for="extranjeras_p7_4_interno_cual">
                                                          ¿Cuáles? </label>
                                                          <input class="form-control" type="text"  name="extranjeras_p7_4_interno_cual"
                                                          id="extranjeras_p7_4_interno_cual"
                                                          <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                          value="<?php echo $extranjeras_p7_4_interno_cual; ?>" />
                                                          </div>
                                                        </div>


                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox" name="extranjeras_p7_4_Otro"
                                                                id="extranjeras_p7_4_Otro" onchange="javascript:showContent104()"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                <?php if ($extranjeras_p7_4_Otro == "Otros"){echo ' checked="checked"'; }?>/>
                                                            <label class="form-check-label" for="extranjeras_p7_4_Otro"/>
                                                                Otros  </label>
                                                                <br>
                                                                <div id="content104" style="display: none;">
                                                                  <label class="form-check-label" for="extranjeras_p7_4_Otro_cual">
                                                                    ¿Cuáles?</label>
                                                                <input class="form-control" type="text"
                                                                    name="extranjeras_p7_4_Otro_cual" id="extranjeras_p7_4_Otro_cual"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $extranjeras_p7_4_Otro_cual; ?>" />
                                                        </div>
                                                        </div>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!--  Fin extranjeras_p7_4-->
                                            <!--  Pregunta extranjeras_p7_5-->
                                            <div>
                                                <h5>7.5.- ¿La institución cuenta con buenas prácticas que considere sean
                                                    innovadoras para mejorar el acceso a la justicia a personas
                                                    extranjeras? </h5>
                                            </div>
                                            <table class="table">
                                                <tbody>
                                                    <tr>


                                                      <div class="form-group col-md-6">
                                                      <div class="form-check form-check-inline">
                                                      <input class="form-check-input" type="radio"
                                                      name="extranjeras_p7_5_buenasprac" id="extranjeras_p7_5_buenasprac"
                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                      <?php if ($extranjeras_p7_5_buenasprac == "Sí"){echo ' checked="checked"'; }?> />
                                                      <label class="form-check-label"
                                                      for="extranjeras_p7_5_buenasprac">Sí</label>
                                                      </div>
                                                      <div class="form-check form-check-inline">
                                                      <input class="form-check-input" type="radio"
                                                      name="extranjeras_p7_5_buenasprac" id="extranjeras_p7_5_buenasprac"
                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                      <?php if ($extranjeras_p7_5_buenasprac == "No"){echo ' checked="checked"'; }?> />
                                                      <label class="form-check-label"
                                                      for="extranjeras_p7_5_buenasprac">No</label>
                                                      </div>
                                                      </div>




                                                    </tr>
                                                </tbody>
                                            </table>

                                            <script>
                                            $(function() {
                                                $("#capacitacion_p2s").click(function() {
                                                    ToggleSection4();
                                                });

                                                ToggleSection4();
                                            });

                                            function ToggleSection4() {
                                              var $capacitacion_p2_1_nom = $("#capacitacion_p2_1_nom");

                                                // The right way to check if a checkbox is checked is with .prop method
                                                if ($("#capacitacion_p2s").prop("checked")) {
                                                    $capacitacion_p2_1_nom.prop("disabled", true).val(" ");

                                                }
   else {
                                                    $capacitacion_p2_1_nom.prop("disabled", false);




                                                }
                                            }

                                            $(function() {
                                                $("#capacitacion_p2").click(function() {
                                                    ToggleSection4();
                                                });

                                                ToggleSection4();
                                            });

                                            function ToggleSection4() {
                                              var $capacitacion_p2_1_nom = $("#capacitacion_p2_1_nom");

                                                // The right way to check if a checkbox is checked is with .prop method
                                                if ($("#capacitacion_p2").prop("checked")) {
                                                    $capacitacion_p2_1_nom.prop("disabled", true).val(" ");

                                                }
else {
                                                    $capacitacion_p2_1_nom.prop("disabled", false);




                                                }
                                            }



                                            </script>

                                            <!--  Fin extranjeras_p7_5-->

                                            <!--  Pregunta extranjeras_p7_6-->
                                            <div>
                                                <h5>7.6.- ¿Cuáles son esas buenas prácticas? </h5>
                                            </div>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <div class="form-group col-md-6">


                                                          <textarea  <?php if($estatus != 0) { echo "readonly='true'"; } ?> class="form-control" name="extranjeras_p7_6_buenasprac_cual" id="extranjeras_p7_6_buenasprac_cual" rows="10" cols="90" ><?php echo $extranjeras_p7_6_buenasprac_cual; ?></textarea>


                                                        </div>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!--  Fin extranjeras_p7_6 -->

                                            <!-- Fin preguntas extranjeras_p7 -->
                                            <input type="button" value="Guardar cambios"
                                                class="btn btn-success btn-flotante crearTab4" />
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Fin TAB extranjeras -->




                        <!--TAB  PERSONAS CON DISCAPACIDAD-->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">8. JUSTICIA PARA PERSONAS CON DISCAPACIDAD</h3>
                            </div>
                            <br>
                            <div class="panel-body">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <form action="#" method="post" class="col-lg-12">

                                            <!--  Pregunta discapacidadp8-->
                                            <div>
                                                <h5>8.- ¿La institución tiene convenios con otras instituciones u organizaciones
                                                   de la sociedad civil que les proporcionen alguno de estos
                                                   servicios para personas con discapacidad? </h5>
                                            </div>
                                            <table class="table">
                                                <h5> Sistema Braille </h5>
                                                <tbody>
                                                    <tr>


                                                      <div class="form-group col-md-6">
                                                      <div class="form-check form-check-inline">
                                                      <input class="form-check-input" type="radio"
                                                      name="discapacidad_p8_braile" id="discapacidad_p8_braile"
                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                      <?php if ($discapacidad_p8_braile == "Sí"){echo ' checked="checked"'; }?> />
                                                      <label class="form-check-label"
                                                      for="discapacidad_p8_braile">Sí</label>
                                                      </div>
                                                      <div class="form-check form-check-inline">
                                                      <input class="form-check-input" type="radio"
                                                      name="discapacidad_p8_braile" id="discapacidad_p8_braile"
                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                      <?php if ($discapacidad_p8_braile == "No"){echo ' checked="checked"'; }?> />
                                                      <label class="form-check-label"
                                                      for="discapacidad_p8_braile">No</label>
                                                      </div>
                                                      </div>




                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table class="table">
                                                <h5>Intérpretes de Lengua de Señas Mexicana</h5>
                                                <tbody>
                                                    <tr>


                                                                                                            <div class="form-group col-md-6">
                                                                                                            <div class="form-check form-check-inline">
                                                                                                            <input class="form-check-input" type="radio"
                                                                                                            name="discapacidad_p8_LenSen" id="discapacidad_p8_LenSen"
                                                                                                            <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                                                            <?php if ($discapacidad_p8_LenSen == "Sí"){echo ' checked="checked"'; }?> />
                                                                                                            <label class="form-check-label"
                                                                                                            for="discapacidad_p8_LenSen">Sí</label>
                                                                                                            </div>
                                                                                                            <div class="form-check form-check-inline">
                                                                                                            <input class="form-check-input" type="radio"
                                                                                                            name="discapacidad_p8_LenSen" id="discapaciddiscapacidad_p8_LenSenad_p8_braile"
                                                                                                            <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                                                            <?php if ($discapacidad_p8_LenSen == "No"){echo ' checked="checked"'; }?> />
                                                                                                            <label class="form-check-label"
                                                                                                            for="discapacidad_p8_LenSen">No</label>
                                                                                                            </div>
                                                                                                            </div>



                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!--Fin pregunta discapacidad_p8_-->

                                            <!--  Pregunta discapacidad_p8_1-->
                                            <div>
                                                <h5>8.1.- ¿Cuál es el nombre de dicha institución o instituciones?</h5>
                                            </div>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <div class="form-group col-md-6">

                                                          <textarea  <?php if($estatus != 0) { echo "readonly='true'"; } ?> class="form-control" name="discapacidad_p8_1_nombreInst" id="discapacidad_p8_1_nombreInst" rows="10" cols="90" ><?php echo $discapacidad_p8_1_nombreInst; ?></textarea>


                                                        </div>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <!--  Fin  Pregunta discapacidad_p8_1 -->
                                            <!--  Pregunta discapacidad_p8_2-->
                                            <div>
                                                <h5>8.2.- ¿Con qué protocolos cuenta la institución para garantizar los
                                                    derechos de personas con discapacidad? </h5>
                                            </div>
                                            <table class="table">
                                                <tbody>
                                                    <tr>


                                                      <div class="form-check form-check-inline">
                                                          <input class="form-check-input group82" type="checkbox"
                                                          name="discapacidad_p8_2_ProtoInterna"
                                                          id="discapacidad_p8_2_ProtoInterna"
                                                          onchange="javascript:showContent1020()"
                                                          <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                          <?php if ($discapacidad_p8_2_ProtoInterna == "Protocolo internacional"){echo ' checked="checked"'; }?>
                                                          />
                                                          <label class="form-check-label"
                                                          for="discapacidad_p8_2_ProtoInterna">Protocolo internacional
                                                        </label>

                                                        <div id="content1020" style="display: none;">
                                                          <label class="form-check-label"
                                                          for="discapacidad_p8_2_ProtoInterna_cual">
                                                          ¿Cuáles?</label>
                                                          <input class="form-control" type="text"
                                                          name="discapacidad_p8_2_ProtoInterna_cual"
                                                          id="discapacidad_p8_2_ProtoInterna_cual"
                                                          <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                          value="<?php echo $discapacidad_p8_2_ProtoInterna_cual; ?>"/>
                                                        </div>
                                                        </div>










                                                        <div class="form-check form-check-inline">
                                                          <input class="form-check-input group82" type="checkbox"
                                                          name="discapacidad_p8_2_interno"
                                                          id="discapacidad_p8_2_interno"
                                                          onchange="javascript:showContent1021()"
                                                          <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                          <?php if ($discapacidad_p8_2_interno == "Protocolo interno"){echo ' checked="checked"'; }?>
                                                          />
                                                            <label class="form-check-label" for="discapacidad_p8_2_interno"/>
                                                                Protocolo interno</label>
                                                                <br>
                                                          <div id="content1021" style="display: none;">
                                                          <label class="form-check-label" for="discapacidad_p8_2_interno_cua">
                                                          ¿Cuáles? </label>
                                                          <input class="form-control" type="text"  name="discapacidad_p8_2_interno_cua"
                                                          id="discapacidad_p8_2_interno_cua"
                                                          <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                          value="<?php echo $discapacidad_p8_2_interno_cua; ?>" />
                                                          </div>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input group82" type="checkbox"
                                                                name="discapacidad_p8_2_ProtoImpJust" id="discapacidad_p8_2_ProtoImpJust"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                <?php if ($discapacidad_p8_2_ProtoImpJust == "Protocolo de actuación para quienes imparten justicia en casos que involucren derechos de personas con discapacidad (SCJN)"){echo ' checked="checked"'; }?>
                                                                />

                                                            <label class="form-check-label"
                                                                for="discapacidad_p8_2_ProtoImpJust">Protocolo de actuación para
                                                                quienes imparten justicia en casos que involucren
                                                                derechos de personas con discapacidad (SCJN)</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="discapacidad_p8_2_ninguno" id="discapacidad_p8_2_ninguno"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                <?php if ($discapacidad_p8_2_ninguno == "Ninguno"){echo ' checked="checked"'; }?>
                                                                />

                                                            <label class="form-check-label"
                                                                for="discapacidad_p8_2_ninguno">Ninguno</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input group82" type="checkbox" name="discapacidad_p8_2_otros"
                                                                id="discapacidad_p8_2_otros" onchange="javascript:showContent107()"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                <?php if ($discapacidad_p8_2_otros == "Otros"){echo ' checked="checked"'; }?>
                                                                />
                                                            <label class="form-check-label" for="discapacidad_p8_2_otros"/>
                                                                Otros</label>
                                                                <br>
                                                                <div id="content107" style="display: none;">
                                                                  <label class="form-check-label" for="discapacidad_p8_2_otros_cual">
                                                                    ¿Cuáles?</label>
                                                                <input class="form-control  " type="text"
                                                                    name="discapacidad_p8_2_otros_cual" id="discapacidad_p8_2_otros_cual"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $discapacidad_p8_2_otros_cual; ?>" />
                                                        </div>
                                                        </div>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!--  Fin discapacidad_p8_2-->


                                            <!--  Pregunta discapacidad_p8_3-->
                                            <div>
                                                <h5>8.3.- ¿La institución cuenta con buenas prácticas que considere sean
                                                    innovadoras para mejorar el acceso a la justicia de personas con
                                                    discapacidad?</h5>
                                            </div>
                                            <table class="table">
                                                <tbody>
                                                    <tr>

                                                      <div class="form-group col-md-6">
                                                      <div class="form-check form-check-inline">
                                                      <input class="form-check-input" type="radio"
                                                      name="discapacidad_p8_3_buenasprac" id="discapacidad_p8_3_buenasprac"
                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                      <?php if ($discapacidad_p8_3_buenasprac == "Sí"){echo ' checked="checked"'; }?> />
                                                      <label class="form-check-label"
                                                      for="discapacidad_p8_3_buenasprac">Sí</label>
                                                      </div>
                                                      <div class="form-check form-check-inline">
                                                      <input class="form-check-input" type="radio"
                                                      name="discapacidad_p8_3_buenasprac" id="discapacidad_p8_3_buenasprac"
                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                      <?php if ($discapacidad_p8_3_buenasprac == "No"){echo ' checked="checked"'; }?> />
                                                      <label class="form-check-label"
                                                      for="discapacidad_p8_3_buenasprac">No</label>
                                                      </div>
                                                      </div>


                                                    </tr>
                                                </tbody>
                                            </table>

                                            <!--  Fin discapacidad_p8_3-->

                                            <!--  Pregunta discapacidad_p8_4-->
                                            <div>
                                                <h5>8.4.- ¿Cuáles son esas buenas prácticas? </h5>
                                            </div>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <div class="form-group col-md-6">

                                                          <textarea  <?php if($estatus != 0) { echo "readonly='true'"; } ?> class="form-control" name="discapacidad_p8_3_buenasprac_cual" id="discapacidad_p8_3_buenasprac_cual" rows="10" cols="90" ><?php echo $discapacidad_p8_3_buenasprac_cual; ?></textarea>


                                                        </div>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!--  Fin discapacidadp8_3 -->

                                            <!-- Fin preguntas discapacidad -->

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Fin TAB PERSONAS CON DISCAPACIDAD -->

                    </div>


                    <!--  Tab Capacitacion y evaluacion de personal  -->
                    <div id="tabs-5">

                        <!-- Tab Colaboracion con otras instituciones -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">9. Colaboración con otras instituciones</h3>
                            </div>
                            <br>
                            <div class="panel-body">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <form action="#" method="post" class="col-lg-12">
<?php
//BUSCAR PREGUNTA Formulario
$pregunta = ModeloPolicias:: mdlMostrarPolicias("policias","uuid", $_SESSION["id"]);

if(count($pregunta)==0){
$idFormulario=0;
}else{
$idFormulario=$pregunta[0]["id"];
/* p9 */  $colaboracion_p9_tipcol=$pregunta[0]["colaboracion_p9_tipcol"];

/* p9.1 */  $colaboracion_p9_1_instcol=$pregunta[0]["colaboracion_p9_1_instcol"];

/* p9.2 */  $colaboracion_p9_2_finan=$pregunta[0]["colaboracion_p9_2_finan"];
/* p9.2 */  $colaboracion_p9_2_dona=$pregunta[0]["colaboracion_p9_2_dona"];
/* p9.2 */  $colaboracion_p9_2_capa=$pregunta[0]["colaboracion_p9_2_capa"];
/* p9.2 */  $colaboracion_p9_2_otros=$pregunta[0]["colaboracion_p9_2_otros"];
/* p9.2 */  $colaboracion_p9_2_cual=$pregunta[0]["colaboracion_p9_2_cual"];

/* p9.2 */  $registro_p10_intsispla=$pregunta[0]["registro_p10_intsispla"];
/* p9.2 */  $registro_p10_1_servsispl=$pregunta[0]["registro_p10_1_servsispl"];
/* p9.2 */  $registro_p10_2_proliga=$pregunta[0]["registro_p10_2_proliga"];



/* p10 */  $registro_p10_lib=$pregunta[0]["registro_p10_lib"];
/* p10 */  $registro_p10_imp=$pregunta[0]["registro_p10_imp"];
/* p10 */  $registro_p10_tab=$pregunta[0]["registro_p10_tab"];
/* p10 */  $registro_p10_cel=$pregunta[0]["registro_p10_cel"];
/* p10 */  $registro_p10_comp=$pregunta[0]["registro_p10_comp"];
/* p10 */  $registro_p10_otro=$pregunta[0]["registro_p10_otro"];
/* p10 */  $registro_p10_cual=$pregunta[0]["registro_p10_cual"];

/* p10.1 */  $registro_p10_1_ind=$pregunta[0]["registro_p10_1_ind"];
/* p10.1 */  $registro_p10_1_per=$pregunta[0]["registro_p10_1_per"];
/* p10.1 */  $registro_p10_1_cap=$pregunta[0]["registro_p10_1_cap"];
/* p10.1 */  $registro_p10_1_perdet=$pregunta[0]["registro_p10_1_perdet"];
/* p10.1 */  $registro_p10_1_del=$pregunta[0]["registro_p10_1_del"];
/* p10.1 */  $registro_p10_1_vic=$pregunta[0]["registro_p10_1_vic"];
/* p10.1 */  $registro_p10_1_perdes=$pregunta[0]["registro_p10_1_perdes"];
/* p10.1 */  $registro_p10_1_den=$pregunta[0]["registro_p10_1_den"];
/* p10.1 */  $registro_p10_1_pedetfad=$pregunta[0]["registro_p10_1_pedetfad"];
/* p10.1 */  $registro_p10_1_pedetpdis=$pregunta[0]["registro_p10_1_pedetpdis"];
/* p10.1 */  $registro_p10_1_llam=$pregunta[0]["registro_p10_1_llam"];
/* p10.1 */  $registro_p10_1_dil=$pregunta[0]["registro_p10_1_dil"];
/* p10.1 */  $registro_p10_1_part=$pregunta[0]["registro_p10_1_part"];
/* p10.1 */  $registro_p10_1_reu=$pregunta[0]["registro_p10_1_reu"];
/* p10.1 */  $registro_p10_1_comer=$pregunta[0]["registro_p10_1_comer"];
/* p10.1 */  $registro_p10_1_esc=$pregunta[0]["registro_p10_1_esc"];
/* p10.1 */  $registro_p10_1_atn=$pregunta[0]["registro_p10_1_atn"];
/* p10.1 */  $registro_p10_1_actu=$pregunta[0]["registro_p10_1_actu"];
/* p10.1 */  $registro_p10_1_otros=$pregunta[0]["registro_p10_1_otros"];
/* p10.1 */  $registro_p10_1_cuales=$pregunta[0]["registro_p10_1_cuales"];

/* p10.2 */  $registro_p10_2_lib=$pregunta[0]["registro_p10_2_lib"];
/* p10.2 */  $registro_p10_2_bd=$pregunta[0]["registro_p10_2_bd"];
/* p10.2 */  $registro_p10_2_ap=$pregunta[0]["registro_p10_2_ap"];
/* p10.2 */  $registro_p10_2_plat=$pregunta[0]["registro_p10_2_plat"];
/* p10.2 */  $registro_p10_2_cap=$pregunta[0]["registro_p10_2_cap"];
/* p10.2 */  $registro_p10_2_otro=$pregunta[0]["registro_p10_2_otro"];
/* p10.2 */  $registro_p10_2_cual=$pregunta[0]["registro_p10_2_cual"];


/* p10.3 */  $registro_p10_3_inter=$pregunta[0]["registro_p10_3_inter"];

/* p10.4 */  $registro_p10_4_instmun=$pregunta[0]["registro_p10_4_instmun"];
/* p10.4 */  $registro_p10_4_instmunot=$pregunta[0]["registro_p10_4_instmunot"];
/* p10.4 */  $registro_p10_4_instestot=$pregunta[0]["registro_p10_4_instestot"];
/* p10.4 */  $registro_p10_4_sec=$pregunta[0]["registro_p10_4_sec"];
/* p10.4 */  $registro_p10_4_guar=$pregunta[0]["registro_p10_4_guar"];
/* p10.4 */  $registro_p10_4_procotras=$pregunta[0]["registro_p10_4_procotras"];
/* p10.4 */  $registro_p10_4_fisc=$pregunta[0]["registro_p10_4_fisc"];
/* p10.4 */  $registro_p10_4_podjud=$pregunta[0]["registro_p10_4_podjud"];
/* p10.4 */  $registro_p10_4_podjudotras=$pregunta[0]["registro_p10_4_podjudotras"];
/* p10.4 */  $registro_p10_4_podfed=$pregunta[0]["registro_p10_4_podfed"];
/* p10.4 */  $registro_p10_4_sipenent=$pregunta[0]["registro_p10_4_sipenent"];
/* p10.4 */  $registro_p10_4_sispen=$pregunta[0]["registro_p10_4_sispen"];
/* p10.4 */  $registro_p10_4_sispenfed=$pregunta[0]["registro_p10_4_sispenfed"];
/* p10.4 */  $registro_p10_4_otro=$pregunta[0]["registro_p10_4_otro"];
/* p10.4 */  $registro_p10_4_cual=$pregunta[0]["registro_p10_4_cual"];

$registro_p10_intsispla=$pregunta[0]["registro_p10_intsispla"];
$registro_p10_1_servsispl=$pregunta[0]["registro_p10_1_servsispl"];
$registro_p10_2_proliga=$pregunta[0]["registro_p10_2_proliga"];
$colaboracion_p9_3_descol=$pregunta[0]["colaboracion_p9_3_descol"];









}
?>
                                            <div>
                                                <h5>9.- ¿Cuentan con algún tipo de colaboración con otras instituciones u organismos nacionales o
extranjeros?  </h5>
                                            </div>
                                            <br>
                                            <table class="table">
                                                <tbody>
                                                    <tr>



                                                      <div class="form-group col-md-6">
                                                      <div class="form-check form-check-inline">
                                                      <input class="form-check-input" type="radio"
                                                      name="colaboracion_p9_tipcol" id="colaboracion_p9_tipcol"
                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                      <?php if ($colaboracion_p9_tipcol == "Sí"){echo ' checked="checked"'; }?> />
                                                      <label class="form-check-label"
                                                      for="colaboracion_p9_tipcol">Sí</label>
                                                      </div>
                                                      <div class="form-check form-check-inline">
                                                      <input class="form-check-input" type="radio"
                                                      name="colaboracion_p9_tipcol" id="colaboracion_p9_tipcol"
                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                      <?php if ($colaboracion_p9_tipcol == "No"){echo ' checked="checked"'; }?> />

                                                      <label class="form-check-label"
                                                      for="colaboracion_p9_tipcol">No</label>
                                                      </div>
                                                      </div>

                                                    </tr>

                                                </tbody>
                                            </table>


                                            <div>
                                                <!-- Esta pregunta viene despues de que la anterior seleccionaron si, si la respuesta fue no se

mantiene oculto -->
                                                <h5>9.1.- ¿Con qué instituciones u organismos mantienen colaboración?
                                                </h5>
                                            </div>
                                            <table class="table">
                                                <tbody>
                                                    <tr>

                                                      <textarea <?php if($estatus != 0) { echo "readonly='true'"; } ?> class="form-control" name="colaboracion_p9_1_instcol" id="colaboracion_p9_1_instcol" rows="10" cols="90" ><?php echo $colaboracion_p9_1_instcol; ?></textarea>



                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div>
                                                <h5>9.2.- ¿Qué tipo de colaboración mantienen? </h5>
                                            </div>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="colaboracion_p9_2_finan"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                <?php if ($colaboracion_p9_2_finan == "Financiamiento"){echo ' checked="checked"'; }?>
                                                                />

                                                            <label class="form-check-label" for="colaboracion_p9_2_finan">
                                                                Financiamiento
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="colaboracion_p9_2_dona"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                <?php if ($colaboracion_p9_2_dona == "Donación"){echo ' checked="checked"'; }?>
                                                                />

                                                            <label class="form-check-label" for="colaboracion_p9_2_dona">
                                                                Donación
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="colaboracion_p9_2_capa"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                <?php if ($colaboracion_p9_2_capa == "Capacitación"){echo ' checked="checked"'; }?>
                                                                />

                                                            <label class="form-check-label" for="colaboracion_p9_2_capa">
                                                                Capacitación
                                                            </label>
                                                        </div>


                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox"
                                                            name="colaboracion_p9_2_otros"
                                                            id="colaboracion_p9_2_otros"
                                                            <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                            onchange="javascript:showContent92()"
                                                            <?php if ($colaboracion_p9_2_otros == "Otro"){echo ' checked="checked"'; }?>
                                                            />
                                                            <label class="form-check-label"
                                                            for="colaboracion_p9_2_otros">Otro
                                                          </label>

                                                          <div id="content92" style="display: none;">
                                                            <label class="form-check-label"
                                                            for="colaboracion_p9_2_cual">
                                                            ¿Cuáles?</label>
                                                            <input class="form-control" type="text"
                                                            name="colaboracion_p9_2_cual"
                                                            id="colaboracion_p9_2_cual"
                                                            <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                            value="<?php echo $colaboracion_p9_2_cual; ?>"/>
                                                          </div>
                                                          </div>

                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div>
                                                <h5>9.3.- Describir el tipo de colaboración señalada en la pregunta anterior.
(Colaboración con instituciones)
                                                </h5>
                                            </div>
                                            <table class="table">
                                                <tbody>
                                                    <tr>

                                                      <textarea <?php if($estatus != 0) { echo "readonly='true'"; } ?> class="form-control" name="colaboracion_p9_3_descol" id="colaboracion_p9_3_descol" rows="10" cols="90" ><?php echo $colaboracion_p9_3_descol; ?></textarea>

                                                    </tr>
                                                </tbody>
                                            </table>


                                            <input type="button" value="Guardar cambios"
                                                class="btn btn-success btn-flotante crearTab5" />
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Finaliza Tab Colaboracion con otras instituciones-->











                        <!-- Tab Registro de informacion -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">10. JUSTICIA DIGITAL</h3>
                            </div>
                            <br>
                            <div class="panel-body">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <form action="#" method="post" class="col-lg-12">
                                          <div>
                                              <h5>10.- ¿La institución cuenta con un sistema/plataforma
                                                en donde ofrecer servicios de justicia digital para la ciudadanía?</h5>
                                          </div>
                                          <br>
                                          <table class="table">
                                              <tbody>
                                                  <tr>

                                                    <div class="form-group col-md-6">
                                                    <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                    name="registro_p10_intsispla" id="registro_p10_intsispla"
                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                    <?php if ($registro_p10_intsispla == "Sí"){echo ' checked="checked"'; }?> />
                                                    <label class="form-check-label"
                                                    for="registro_p10_intsispla">Sí</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                    name="registro_p10_intsispla" id="registro_p10_intsispla"
                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                    <?php if ($registro_p10_intsispla == "No"){echo ' checked="checked"'; }?> />
                                                    <label class="form-check-label"
                                                    for="registro_p10_intsispla">No</label>
                                                    </div>
                                                    </div>

                                                  </tr>

                                              </tbody>
                                          </table>

                                          <div>
                                              <h5>10.1.- ¿Qué servicios proveen a través de este sistema/plataforma?
                                              </h5>
                                          </div>
                                          <table class="table">
                                              <tbody>
                                                  <tr>

                                                    <textarea <?php if($estatus != 0) { echo "disabled='true'"; } ?> class="form-control" name="registro_p10_1_servsispl" id="registro_p10_1_servsispl" rows="10" cols="90" ><?php echo $registro_p10_1_servsispl; ?></textarea>
                                                  </tr>
                                              </tbody>
                                          </table>

                                          <div>
                                              <h5>10.2.- Favor de proporcionar el vínculo o liga de acceso.
                                              </h5>
                                          </div>
                                          <table class="table">
                                              <tbody>
                                                  <tr>

                                                    <textarea <?php if($estatus != 0) { echo "disabled='true'"; } ?> class="form-control" name="registro_p10_2_proliga" id="registro_p10_2_proliga" rows="2" cols="2" > <?php echo $registro_p10_2_proliga; ?></textarea>
                                                  </tr>
                                              </tbody>
                                          </table>



                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Finaliza Tab Registro de informacion-->

                        <!-- Fin TAB PERSONAS CON DISCAPACIDAD -->

                    </div>


                    <!--  Tab Capacitacion y evaluacion de personal  -->
                    <div id="tabs-6">

                        <!-- Tab Evaluación y Seguimiento del Sistema de Justicia -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">11. Evaluación y Seguimiento del Sistema de Justicia
                                </h3>
                            </div>
                            <br>
                            <div class="panel-body">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <form action="#" method="post" class="col-lg-12">
<?php
//BUSCAR PREGUNTA Formulario
$pregunta = ModeloPolicias:: mdlMostrarPolicias("policias","uuid", $_SESSION["id"]);

if(count($pregunta)==0){
$idFormulario=0;
}else{
$idFormulario=$pregunta[0]["id"];
/* p11 */  $indicadores_p11_modeval=$pregunta[0]["indicadores_p11_modeval"];

/* p11.1 */  $indicadores_p11_1_cualind=$pregunta[0]["indicadores_p11_1_cualind"];

/* p11.2 */  $evaluacion_p11_2_evalind=$pregunta[0]["evaluacion_p11_2_evalind"];

/* p12 */  $indicadores_p12_bunprac=$pregunta[0]["indicadores_p12_bunprac"];

/* p12.1 */  $transparencia_p12_1_cualpract=$pregunta[0]["transparencia_p12_1_cualpract"];

/* p13 */  $necesidades_p13_cap=$pregunta[0]["necesidades_p13_cap"];
/* p13 */  $necesidades_p13_recmat=$pregunta[0]["necesidades_p13_recmat"];
/* p13 */  $necesidades_p13_rectec=$pregunta[0]["necesidades_p13_rectec"];
/* p13 */  $necesidades_p13_per=$pregunta[0]["necesidades_p13_per"];
/* p13 */  $necesidades_p13_infra=$pregunta[0]["necesidades_p13_infra"];
/* p13 */  $necesidades_p13_mej=$pregunta[0]["necesidades_p13_mej"];
/* p13 */  $necesidades_p13_prot=$pregunta[0]["necesidades_p13_prot"];
/* p13 */  $necesidades_p13_otros=$pregunta[0]["necesidades_p13_otros"];
/* p13 */  $necesidades_p13_cual=$pregunta[0]["necesidades_p13_cual"];

/* p13.1 */  $necesidades_p13_1_desnec=$pregunta[0]["necesidades_p13_1_desnec"];
/*
/* p14.2 *  $denunciaserv_p14_2_quej=$pregunta[0]["denunciaserv_p14_2_quej"];
/* p14.3 *  $denunciaserv_p14_3_inv=$pregunta[0]["denunciaserv_p14_3_inv"];
/* p14.3 *  $denunciaserv_p14_3_int=$pregunta[0]["denunciaserv_p14_3_int"];
/* p14.3 *  $denunciaserv_p14_3_proc=$pregunta[0]["denunciaserv_p14_3_proc"];
/* p14.3 *  $denunciaserv_p14_3_seg=$pregunta[0]["denunciaserv_p14_3_seg"];
/* p14.3 *  $denunciaserv_p14_3_prev=$pregunta[0]["denunciaserv_p14_3_prev"];
/* p14.3 *  $denunciaserv_p14_3_pri=$pregunta[0]["denunciaserv_p14_3_pri"];
/* p14.3 *  $denunciaserv_p14_3_otros=$pregunta[0]["denunciaserv_p14_3_otros"];
/* p14.3 *  $denunciaserv_p14_3_cual=$pregunta[0]["denunciaserv_p14_3_cual"];

*/
}
?>
                                            <div>
                                                <h5>
                                                    11.- Sin incluir el Modelo de Evaluación y Seguimiento (MES), ¿La
                                                    institución cuenta con indicadores para el seguimiento, monitoreo y
                                                    evaluación del Sistema de Justicia?
                                                </h5>
                                            </div>
                                            <br>
                                            <table class="table">
                                                <tbody>
                                                    <tr>


                                                      <div class="form-group col-md-6">
                                                      <div class="form-check form-check-inline">
                                                      <input class="form-check-input" type="radio"
                                                      name="indicadores_p11_modeval" id="indicadores_p11_modeval"
                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                      <?php if ($indicadores_p11_modeval == "Sí"){echo ' checked="checked"'; }?> />
                                                      <label class="form-check-label"
                                                      for="indicadores_p11_modeval">Sí</label>
                                                      </div>
                                                      <div class="form-check form-check-inline">
                                                      <input class="form-check-input" type="radio"
                                                      name="indicadores_p11_modeval" id="indicadores_p11_modeval"
                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                      <?php if ($indicadores_p11_modeval == "No"){echo ' checked="checked"'; }?> />
                                                      <label class="form-check-label"
                                                      for="indicadores_p11_modeval">No</label>
                                                      </div>
                                                      </div>





                                                    </tr>

                                                </tbody>
                                            </table>

                                            <div>
                                                <!-- Esta pregunta viene despues de que la anterior seleccionaron si, si la respuesta fue no se
mantiene oculto -->
                                                <h5>11.1.- ¿Cuáles son esos indicadores? </h5>
                                            </div>
                                            <table class="table">
                                                <tbody>
                                                    <tr>

                                                      <textarea <?php if($estatus != 0) { echo "disabled='true'"; } ?> class="form-control" name="indicadores_p11_1_cualind" id="indicadores_p11_1_cualind" rows="10" cols="90" ><?php echo $indicadores_p11_1_cualind; ?></textarea>


                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div>
                                                <!-- Esta pregunta viene despues de que la anterior seleccionaron si, si la respuesta fue no se
mantiene oculto -->
                                                <h5>11.2.- ¿Con qué frecuencia se evalúan dichos indicadores? </h5>
                                            </div>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <input type="text" name="evaluacion_p11_2_evalind" id="evaluacion_p11_2_evalind"
                                                        <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                            class="form-control"
                                                            value="<?php echo $evaluacion_p11_2_evalind; ?>" />


                                                    </tr>
                                                </tbody>
                                            </table>
                                            <input type="button" value="Guardar cambios"
                                                class="btn btn-success btn-flotante crearTab6" />
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Finaliza Tab Evaluación y Seguimiento del Sistema de Justicia-->




















                        <!-- Tab Transparencia -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">12. Transparencia</h3>
                            </div>
                            <br>
                            <div class="panel-body">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <form action="#" method="post" class="col-lg-12">
                                            <div>
                                                <h5>
                                                    12.- ¿La institución cuenta con buenas prácticas que considere sean
                                                    innovadoras en materia de transparencia y acceso a la información?
                                                </h5>
                                            </div>
                                            <br>
                                            <table class="table">
                                                <tbody>
                                                    <tr>



                                                                                                            <div class="form-group col-md-6">
                                                                                                            <div class="form-check form-check-inline">
                                                                                                            <input class="form-check-input" type="radio"
                                                                                                            name="indicadores_p12_bunprac" id="indicadores_p12_bunprac"
                                                                                                            <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                                                            <?php if ($indicadores_p12_bunprac == "Sí"){echo ' checked="checked"'; }?> />
                                                                                                            <label class="form-check-label"
                                                                                                            for="indicadores_p12_bunprac">Sí</label>
                                                                                                            </div>
                                                                                                            <div class="form-check form-check-inline">
                                                                                                            <input class="form-check-input" type="radio"
                                                                                                            name="indicadores_p12_bunprac" id="indicadores_p12_bunprac"
                                                                                                            <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                                                            <?php if ($indicadores_p12_bunprac == "No"){echo ' checked="checked"'; }?> />
                                                                                                            <label class="form-check-label"
                                                                                                            for="indicadores_p12_bunprac">No</label>
                                                                                                            </div>
                                                                                                            </div>









                                                    </tr>

                                                </tbody>
                                            </table>

                                            <div>
                                                <!-- Esta pregunta viene despues de que la anterior seleccionaron si, si la respuesta fue no se
mantiene oculto -->
                                                <h5>12.1.- ¿Cuáles son esas buenas prácticas? </h5>
                                            </div>
                                            <table class="table">
                                                <tbody>
                                                    <tr>

                                                      <textarea <?php if($estatus != 0) { echo "disabled='true'"; } ?> class="form-control" name="transparencia_p12_1_cualpract" id="transparencia_p12_1_cualpract" rows="10" cols="90" ><?php echo $transparencia_p12_1_cualpract; ?></textarea>

                                                    </tr>
                                                </tbody>
                                            </table>





                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Finaliza Tab Transparencia-->








                        <!-- Tab Transparencia -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">13. Necesidades de la Institución</h3>
                            </div>
                            <br>
                            <div class="panel-body">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <form action="#" method="post" class="col-lg-12">
                                            <div>
                                                <h5>
                                                    13.- ¿Qué necesidades detecta la institución estatal encargada de la seguridad pública para desempeñar correctamente sus funciones?
                                                </h5>
                                            </div>

                                            <br>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <div class="form-check">




                                                            <input class="form-check-input" type="checkbox"
                                                                id="necesidades_p13_cap"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                <?php if ($necesidades_p13_cap == "Capacitación"){echo ' checked="checked"'; }?>
                                                                />
                                                            <label class="form-check-label" for="necesidades_p13_cap">
                                                                Capacitación
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="necesidades_p13_recmat"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                <?php if ($necesidades_p13_recmat == "Recursos materiales"){echo ' checked="checked"'; }?>
                                                                />

                                                            <label class="form-check-label" for="necesidades_p13_recmat">
                                                                Recursos materiales
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="necesidades_p13_rectec"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                <?php echo $necesidades_p13_rectec ?>
                                                                <?php if ($necesidades_p13_rectec == "Recursos técnicos"){echo ' checked="checked"'; }?>
                                                                />

                                                            <label class="form-check-label" for="necesidades_p13_rectec">
                                                                Recursos técnicos
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="necesidades_p13_per"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                <?php if ($necesidades_p13_per == "Personal"){echo ' checked="checked"'; }?>
                                                                />

                                                            <label class="form-check-label" for="necesidades_p13_per">
                                                                Personal
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="necesidades_p13_infra"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                <?php if ($necesidades_p13_infra == "Infraestructura"){echo ' checked="checked"'; }?>
                                                                />

                                                            <label class="form-check-label" for="necesidades_p13_infra">
                                                                Infraestructura
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="necesidades_p13_mej"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                <?php if ($necesidades_p13_mej == "Mejoras legislativas"){echo ' checked="checked"'; }?>
                                                                />

                                                            <label class="form-check-label" for="necesidades_p13_mej">
                                                                Mejoras legislativas
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="necesidades_p13_prot"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                <?php if ($necesidades_p13_prot == "Protocolos"){echo ' checked="checked"'; }?>
                                                                />

                                                            <label class="form-check-label" for="necesidades_p13_prot">
                                                                Protocolos
                                                            </label>
                                                        </div>


                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox"
                                                            name="necesidades_p13_otros"
                                                            id="necesidades_p13_otros"
                                                            <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                            onchange="javascript:showContent1014()"
                                                            <?php if ($necesidades_p13_otros == "Otro"){echo ' checked="checked"'; }?>
                                                            />
                                                            <label class="form-check-label"
                                                            for="necesidades_p13_otros">Otro
                                                          </label>

                                                          <div id="content1014" style="display: none;">
                                                            <label class="form-check-label"
                                                            for="necesidades_p13_cual">
                                                            ¿Cuáles?</label>
                                                            <input class="form-control" type="text"
                                                            name="necesidades_p13_cual"
                                                            id="necesidades_p13_cual"
                                                            <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                            value="<?php echo $necesidades_p13_cual; ?>"/>
                                                          </div>
                                                          </div>





                                                    </tr>

                                                </tbody>
                                            </table>


                                            <div>

                                                <h5>13.1.- Describir las necesidades señaladas en la pregunta anterior.
                                                </h5>
                                            </div>
                                            <table class="table">
                                                <tbody>
                                                    <tr>

                                                      <textarea  <?php if($estatus != 0) { echo "disabled='true'"; } ?> class="form-control" name="necesidades_p13_1_desnec" id="necesidades_p13_1_desnec" rows="10" cols="90" ><?php echo $necesidades_p13_1_desnec; ?></textarea>

                                                    </tr>
                                                </tbody>
                                            </table>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Finaliza Tab Transparencia-->


                        <!-- Fin TAB PERSONAS CON DISCAPACIDAD -->

                    </div>

                    <!--  Tab Capacitacion y evaluacion de personal  -->
                    <div id="tabs-7">


                        <!-- Tab Denuncias a Servidores Públicos -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">14.1 RESPONSABILIDADES DE LOS SERVIDORES PÚBLICOS: RESPONSABILIDAD ADMINISTRATIVA</h3>
                            </div>
                            <br>
                            <div class="panel-body">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <form action="#" method="post" class="col-lg-12">
<?php
//BUSCAR PREGUNTA Formulario
$pregunta = ModeloPolicias:: mdlMostrarPolicias("policias","uuid", $_SESSION["id"]);

if(count($pregunta)==0){
$idFormulario=0;
}else{
$idFormulario=$pregunta[0]["id"];
/* p14 */  $denunciaserv_p14_den=$pregunta[0]["denunciaserv_p14_den"];
/* p14 */  $denunciaserv_p14_den_cual=$pregunta[0]["denunciaserv_p14_den_cual"];

/* p14.1 */  $denunciaserv_p14_1_orginv=$pregunta[0]["denunciaserv_p14_1_orginv"];

/* p14.2 */  $denunciaserv_p14_2_quej=$pregunta[0]["denunciaserv_p14_2_quej"];


/* p14.3 */  $denunciaserv_p14_3_inv_M=$pregunta[0]["denunciaserv_p14_3_inv_M"];
/* p14.3 */  $denunciaserv_p14_3_inv_H=$pregunta[0]["denunciaserv_p14_3_inv_H"];
/* p14.3 */  $denunciaserv_p14_3_inv_T=$pregunta[0]["denunciaserv_p14_3_inv_T"];

/* p14.3 */  $denunciaserv_p14_3_int_M=$pregunta[0]["denunciaserv_p14_3_int_M"];
/* p14.3 */  $denunciaserv_p14_3_int_H=$pregunta[0]["denunciaserv_p14_3_int_H"];
/* p14.3 */  $denunciaserv_p14_3_int_T=$pregunta[0]["denunciaserv_p14_3_int_T"];

/* p14.3 */  $denunciaserv_p14_3_reac_M=$pregunta[0]["denunciaserv_p14_3_reac_M"];
/* p14.3 */  $denunciaserv_p14_3_reac_H=$pregunta[0]["denunciaserv_p14_3_reac_H"];
/* p14.3 */  $denunciaserv_p14_3_reac_T=$pregunta[0]["denunciaserv_p14_3_reac_T"];

/* p14.3 */  $denunciaserv_p14_3_proc_M=$pregunta[0]["denunciaserv_p14_3_proc_M"];
/* p14.3 */  $denunciaserv_p14_3_proc_H=$pregunta[0]["denunciaserv_p14_3_proc_H"];
/* p14.3 */  $denunciaserv_p14_3_proc_T=$pregunta[0]["denunciaserv_p14_3_proc_T"];

/* p14.3 */  $denunciaserv_p14_3_seg_M=$pregunta[0]["denunciaserv_p14_3_seg_M"];
/* p14.3 */  $denunciaserv_p14_3_seg_H=$pregunta[0]["denunciaserv_p14_3_seg_H"];
/* p14.3 */  $denunciaserv_p14_3_seg_T=$pregunta[0]["denunciaserv_p14_3_seg_T"];

/* p14.3 */  $denunciaserv_p14_3_prev_M=$pregunta[0]["denunciaserv_p14_3_prev_M"];
/* p14.3 */  $denunciaserv_p14_3_prev_H=$pregunta[0]["denunciaserv_p14_3_prev_H"];
/* p14.3 */  $denunciaserv_p14_3_prev_T=$pregunta[0]["denunciaserv_p14_3_prev_T"];

/* p14.3 */  $denunciaserv_p14_3_pri_M=$pregunta[0]["denunciaserv_p14_3_pri_M"];
/* p14.3 */  $denunciaserv_p14_3_pri_H=$pregunta[0]["denunciaserv_p14_3_pri_H"];
/* p14.3 */  $denunciaserv_p14_3_pri_T=$pregunta[0]["denunciaserv_p14_3_pri_T"];

/* p14.3 */  $denunciaserv_p14_3_otros=$pregunta[0]["denunciaserv_p14_3_otros"];
/* p14.3 */  $denunciaserv_p14_3_otros_M=$pregunta[0]["denunciaserv_p14_3_otros_M"];
/* p14.3 */  $denunciaserv_p14_3_otros_H=$pregunta[0]["denunciaserv_p14_3_otros_H"];
/* p14.3 */  $denunciaserv_p14_3_otros_T=$pregunta[0]["denunciaserv_p14_3_otros_T"];

/* p14.4 */  $denunciaserv_p14_4_inv_M=$pregunta[0]["denunciaserv_p14_4_inv_M"];
/* p14.4 */  $denunciaserv_p14_4_inv_H=$pregunta[0]["denunciaserv_p14_4_inv_H"];
/* p14.4 */  $denunciaserv_p14_4_inv_T=$pregunta[0]["denunciaserv_p14_4_inv_T"];
/* p14.4 */  $denunciaserv_p14_4_intel_M=$pregunta[0]["denunciaserv_p14_4_intel_M"];
/* p14.4 */  $denunciaserv_p14_4_intel_H=$pregunta[0]["denunciaserv_p14_4_intel_H"];
/* p14.4 */  $denunciaserv_p14_4_intel_T=$pregunta[0]["denunciaserv_p14_4_intel_T"];
/* p14.4 */  $denunciaserv_p14_4_reac_M=$pregunta[0]["denunciaserv_p14_4_reac_M"];
/* p14.4 */  $denunciaserv_p14_4_reac_H=$pregunta[0]["denunciaserv_p14_4_reac_H"];
/* p14.4 */  $denunciaserv_p14_4_reac_T=$pregunta[0]["denunciaserv_p14_4_reac_T"];
/* p14.4 */  $denunciaserv_p14_4_proc_M=$pregunta[0]["denunciaserv_p14_4_proc_M"];
/* p14.4 */  $denunciaserv_p14_4_proc_H=$pregunta[0]["denunciaserv_p14_4_proc_H"];
/* p14.4 */  $denunciaserv_p14_4_proc_T=$pregunta[0]["denunciaserv_p14_4_proc_T"];
/* p14.4 */  $denunciaserv_p14_4_seg_M=$pregunta[0]["denunciaserv_p14_4_seg_M"];
/* p14.4 */  $denunciaserv_p14_4_seg_H=$pregunta[0]["denunciaserv_p14_4_seg_H"];
/* p14.4 */  $denunciaserv_p14_4_seg_T=$pregunta[0]["denunciaserv_p14_4_seg_T"];
/* p14.4 */  $denunciaserv_p14_4_prev_M=$pregunta[0]["denunciaserv_p14_4_prev_M"];
/* p14.4 */  $denunciaserv_p14_4_prev_H=$pregunta[0]["denunciaserv_p14_4_prev_H"];
/* p14.4 */  $denunciaserv_p14_4_prev_T=$pregunta[0]["denunciaserv_p14_4_prev_T"];
/* p14.4 */  $denunciaserv_p14_4_pri_M=$pregunta[0]["denunciaserv_p14_4_pri_M"];
/* p14.4 */  $denunciaserv_p14_4_pri_H=$pregunta[0]["denunciaserv_p14_4_pri_H"];
/* p14.4 */  $denunciaserv_p14_4_pri_T=$pregunta[0]["denunciaserv_p14_4_pri_T"];
/* p14.4 */  $denunciaserv_p14_4_otroscual=$pregunta[0]["denunciaserv_p14_4_otroscual"];
/* p14.4 */  $denunciaserv_p14_4_otros_M=$pregunta[0]["denunciaserv_p14_4_otros_M"];
/* p14.4 */  $denunciaserv_p14_4_otros_H=$pregunta[0]["denunciaserv_p14_4_otros_H"];
/* p14.4 */  $denunciaserv_p14_4_otros_T=$pregunta[0]["denunciaserv_p14_4_otros_T"];

/* p15 */  $denuncias_p15_numtot=$pregunta[0]["denuncias_p15_numtot"];

/* p15.1 */  $denuncias_p15_1_homi=$pregunta[0]["denuncias_p15_1_homi"];
/* p15.1 */  $denuncias_p15_1_femi=$pregunta[0]["denuncias_p15_1_femi"];
/* p15.1 */  $denuncias_p15_1_les=$pregunta[0]["denuncias_p15_1_les"];
/* p15.1 */  $denuncias_p15_1_viofam=$pregunta[0]["denuncias_p15_1_viofam"];
/* p15.1 */  $denuncias_p15_1_abusex=$pregunta[0]["denuncias_p15_1_abusex"];
/* p15.1 */  $denuncias_p15_1_hossex=$pregunta[0]["denuncias_p15_1_hossex"];
/* p15.1 */  $denuncias_p15_1_viol=$pregunta[0]["denuncias_p15_1_viol"];
/* p15.1 */  $denuncias_p15_1_tratper=$pregunta[0]["denuncias_p15_1_tratper"];
/* p15.1 */  $denuncias_p15_1_cormen=$pregunta[0]["denuncias_p15_1_cormen"];
/* p15.1 */  $denuncias_p15_1_trafmen=$pregunta[0]["denuncias_p15_1_trafmen"];

/* p15.2 */  $denuncias_p15_2_mecnopre=$pregunta[0]["denuncias_p15_2_mecnopre"];

/* p15.3 */  $denuncias_p15_3_pagint=$pregunta[0]["denuncias_p15_3_pagint"];
/* p15.3 */  $denuncias_p15_3_tel=$pregunta[0]["denuncias_p15_3_tel"];
/* p15.3 */  $denuncias_p15_3_app=$pregunta[0]["denuncias_p15_3_app"];
/* p15.3 */  $necesidades_p15_3_sms=$pregunta[0]["necesidades_p15_3_sms"];
/* p15.3 */  $necesidades_p15_3_otros=$pregunta[0]["necesidades_p15_3_otros"];
/* p15.3 */  $necesidades_p15_3_cuales=$pregunta[0]["necesidades_p15_3_cuales"];

/* p15.4 */  $denuncias_p15_4_den=$pregunta[0]["denuncias_p15_4_den"];

/* p16. */  $denunciaserv_p16_totdet_M=$pregunta[0]["denunciaserv_p16_totdet_M"];
/* p16. */  $denunciaserv_p16_totdet_H=$pregunta[0]["denunciaserv_p16_totdet_H"];
/* p16. */  $denunciaserv_p16_totdet_T=$pregunta[0]["denunciaserv_p16_totdet_T"];

/* p16. */  $denunciaserv_p16_totdet_meno18M=$pregunta[0]["denunciaserv_p16_totdet_meno18M"];
/* p16. */  $denunciaserv_p16_totdet_meno18H=$pregunta[0]["denunciaserv_p16_totdet_meno18H"];
/* p16. */  $denunciaserv_p16_totdet_meno18T=$pregunta[0]["denunciaserv_p16_totdet_meno18T"];

/* p16. */  $denunciaserv_p16_totdet_TM=$pregunta[0]["denunciaserv_p16_totdet_TM"];
/* p16. */  $denunciaserv_p16_totdet_TH=$pregunta[0]["denunciaserv_p16_totdet_TH"];
/* p16. */  $denunciaserv_p16_totdet_TT=$pregunta[0]["denunciaserv_p16_totdet_TT"];


/* p16.1 */  $detenciones_p_16_1_detot=$pregunta[0]["detenciones_p_16_1_detot"];
/* p16.1 */  $detenciones_p_16_1_defla=$pregunta[0]["detenciones_p_16_1_defla"];
/* p16.1 */  $detenciones_p_16_1_decasurg=$pregunta[0]["detenciones_p_16_1_decasurg"];

/* p17 */  $victimas_p17_bprac=$pregunta[0]["victimas_p17_bprac"];

/* p17.1 */  $victimas_p17_1_cuales=$pregunta[0]["victimas_p17_1_cuales"];

}
?>
                                            <div>
                                                <h5>
                                                    <!-- aqui -->
                                            14.1.1.- ¿Cuentan con un órgano especializado encargado de investigar quejas contra servidores públicos en materia administrativa? En caso de que sí, escribir el nombre del órgano responsable.</h5>
                                            </div>

                                            <br>
                                            <table class="table">
                                                <tbody>
                                                    <tr>

                                                        <div class="form-group col-md-6">

                                                          <div class="form-check form-check-inline">
                                                          <input class="form-check-input" type="radio"
                                                          name="denunciaserv_p14_den" id="denunciaserv_p14_den"
                                                          <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                          onchange="javascript:showContent65()"
                                                          <?php if ($denunciaserv_p14_den == "SÍ"){echo ' checked="checked"'; }?> />
                                                          <label class="form-check-label"
                                                          for="denunciaserv_p14_den">Sí</label>
                                                          </div>




                                                            <div id="content65" style="display: none;">
                                                                <label class="form-check-label" for="denunciaserv_p14_den_cual">
                                                                    (¿Cuál?) </label>
                                                                <input class="form-control" type="text" name="denunciaserv_p14_den_cual"
                                                                    id="denunciaserv_p14_den_cual"<?php if($estatus != 0) { echo "disabled='true'"; } ?> value="<?php echo $denunciaserv_p14_den_cual; ?>"/>
                                                            </div>





                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    name="denunciaserv_p14_den" id="denunciaserv_p14_den"
                                                                    onchange="javascript:showContent65()"
                                                                    <?php if ($denunciaserv_p14_den == "NO"){echo ' checked="checked"'; }?>>
                                                                <label class="form-check-label"
                                                                    for="denunciaserv_p14_den">No</label>
                                                            </div>
                                                        </div>







                                                    </tr>

                                                </tbody>
                                            </table>


                                            <div>

                                                <h5>14.1.2.- Total de quejas presentadas en el año 2020 contra servidores públicos.
 </h5>
                                            </div>
                                            <table class="table">
                                                <tbody>
                                                    <tr>


                                                                      <div class="input-group">
                                                                          <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                              name="denunciaserv_p14_2_quej"
                                                                              id="denunciaserv_p14_2_quej"
                                                                              <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                              onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                              value="<?php echo $denunciaserv_p14_2_quej; ?>">
                                                                      </div>

                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!--  Pregunta -->
                                            <div>
                                                <h5>14.1.3.-  ¿Cuántas quejas fueron presentadas en el año 2020 contra servidores públicos? Desglosar por función y por sexo.</h5>
                                            </div>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                       <th>#</th>
                                                        <th>Descripción</th>
                                                        <th>Mujer </th>
                                                        <th>Hombre</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Investigación y Análisis </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p14_3_inv_M"
                                                                    id="denunciaserv_p14_3_inv_M"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p14_3_inv_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p14_3_inv_H"
                                                                    id="denunciaserv_p14_3_inv_H"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p14_3_inv_H; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p14_3_inv_T"
                                                                    id="denunciaserv_p14_3_inv_T"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p14_3_inv_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                      <td>2</td>

                                                        <td>Inteligencia </td>
                                                        <td>
                                                            <div class="input-group">
                                                              <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p14_3_int_M"
                                                                    id="denunciaserv_p14_3_int_M"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p14_3_int_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p14_3_int_H"
                                                                    id="denunciaserv_p14_3_int_H"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p14_3_int_H; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p14_3_int_T"
                                                                    id="denunciaserv_p14_3_int_T"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p14_3_int_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                      <td>3</td>

                                                        <td>Reacción </td>
                                                        <td>
                                                            <div class="input-group">
                                                              <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p14_3_reac_M"
                                                                    id="denunciaserv_p14_3_reac_M"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p14_3_reac_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p14_3_reac_H"
                                                                    id="denunciaserv_p14_3_reac_H"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p14_3_reac_H; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p14_3_reac_T"
                                                                    id="denunciaserv_p14_3_reac_T"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p14_3_reac_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                      <td>4</td>

                                                        <td>Procesal </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p14_3_proc_M"
                                                                    id="denunciaserv_p14_3_proc_M"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p14_3_proc_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p14_3_proc_H"
                                                                    id="denunciaserv_p14_3_proc_H"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p14_3_proc_H; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p14_3_proc_T"
                                                                    id="denunciaserv_p14_3_proc_T"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p14_3_proc_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                      <td>5</td>

                                                        <td>Seguridad y Custodia Penitenciaria </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p14_3_seg_M"
                                                                    id="denunciaserv_p14_3_seg_M"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p14_3_seg_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p14_3_seg_H"
                                                                    id="denunciaserv_p14_3_seg_H"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p14_3_seg_H; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p14_3_seg_T"
                                                                    id="denunciaserv_p14_3_seg_T"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p14_3_seg_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                      <td>6</td>

                                                        <td>Preventivo </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p14_3_prev_M"
                                                                    id="denunciaserv_p14_3_prev_M"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p14_3_prev_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p14_3_prev_H"
                                                                    id="denunciaserv_p14_3_prev_H"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p14_3_prev_H; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p14_3_prev_T"
                                                                    id="denunciaserv_p14_3_prev_T"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p14_3_prev_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                      <td>7</td>

                                                        <td>Primer respondiente</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p14_3_pri_M"
                                                                    id="denunciaserv_p14_3_pri_M"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p14_3_pri_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p14_3_pri_H"
                                                                    id="denunciaserv_p14_3_pri_H"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p14_3_pri_H; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p14_3_pri_T"
                                                                    id="denunciaserv_p14_3_pri_T"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p14_3_pri_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                      <td>8</td>
                                                        <td><div style="float:left;">Otras (¿cuáles?)   &nbsp;&nbsp;&nbsp;&nbsp;</div>
                                                            <div class="input-group">
                                                                <input type="text" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p14_3_otros"
                                                                    id="denunciaserv_p14_3_otros"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $denunciaserv_p14_3_otros; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p14_3_otros_M"
                                                                    id="denunciaserv_p14_3_otros_M"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p14_3_otros_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p14_3_otros_H"
                                                                    id="denunciaserv_p14_3_otros_H"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p14_3_otros_H; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p14_3_otros_T"
                                                                    id="denunciaserv_p14_3_otros_T"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p14_3_otros_T; ?>">
                                                            </div>
                                                        </td>

                                                    </tr>
                                                </tbody>
                                            </table>

                                            <!--  Fin  Pregunta  -->
                                            <!--  Pregunta -->
                                            <div>
                                                <h5>14.1.4.- ¿Cuántos servidores públicos fueron sancionados por faltas administrativas?
                                                  Desglosar por función y por sexo. </h5>
                                            </div>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Descripción</th>
                                                        <th> Mujer </th>
                                                        <th>Hombre</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Investigación y Análisis</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p14_4_inv_M"
                                                                    id="denunciaserv_p14_4_inv_M"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p14_4_inv_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p14_4_inv_H"
                                                                    id="denunciaserv_p14_4_inv_H"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p14_4_inv_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p14_4_inv_T"
                                                                    id="denunciaserv_p14_4_inv_T"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p14_4_inv_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Inteligencia</td>
                                                        <td>
                                                            <div class="input-group">
                                                              <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p14_4_intel_M"
                                                                    id="denunciaserv_p14_4_intel_M"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p14_4_intel_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p14_4_intel_H"
                                                                    id="denunciaserv_p14_4_intel_H"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p14_4_intel_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p14_4_intel_T"
                                                                    id="denunciaserv_p14_4_intel_T"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p14_4_intel_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Reacción</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p14_4_reac_M"
                                                                    id="denunciaserv_p14_4_reac_M"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p14_4_reac_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p14_4_reac_H"
                                                                    id="denunciaserv_p14_4_reac_H"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p14_4_reac_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p14_4_reac_T"
                                                                    id="denunciaserv_p14_4_reac_T"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p14_4_reac_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Procesal</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p14_4_proc_M"
                                                                    id="denunciaserv_p14_4_proc_M"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p14_4_proc_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p14_4_proc_H"
                                                                    id="denunciaserv_p14_4_proc_H"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p14_4_proc_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p14_4_proc_T"
                                                                    id="denunciaserv_p14_4_proc_T"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p14_4_proc_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Seguridad y Custodia Penitenciaria</td>
                                                        <td>
                                                            <div class="input-group">
                                                              <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p14_4_seg_M"
                                                                    id="denunciaserv_p14_4_seg_M"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p14_4_seg_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p14_4_seg_H"
                                                                    id="denunciaserv_p14_4_seg_H"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p14_4_seg_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                              <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p14_4_seg_T"
                                                                    id="denunciaserv_p14_4_seg_T"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p14_4_seg_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>Preventivo</td>
                                                        <td>
                                                            <div class="input-group">
                                                              <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p14_4_prev_M"
                                                                    id="denunciaserv_p14_4_prev_M"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p14_4_prev_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p14_4_prev_H"
                                                                    id="denunciaserv_p14_4_prev_H"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p14_4_prev_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p14_4_prev_T"
                                                                    id="denunciaserv_p14_4_prev_T"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p14_4_prev_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>Primer respondiente</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p14_4_pri_M"
                                                                    id="denunciaserv_p14_4_pri_M"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p14_4_pri_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p14_4_pri_H"
                                                                    id="denunciaserv_p14_4_pri_H"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p14_4_pri_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>

                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p14_4_pri_T"
                                                                    id="denunciaserv_p14_4_pri_T"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p14_4_pri_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
    <td>7</td>
                                                        <td><div style="float:left;">Otras (¿cuáles?)   &nbsp;&nbsp;&nbsp;&nbsp;</div>
                                                            <div class="input-group">
                                                                <input type="text" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p14_4_otroscual"
                                                                    id="denunciaserv_p14_4_otroscual"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $denunciaserv_p14_4_otroscual; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p14_4_otros_M"
                                                                    id="denunciaserv_p14_4_otros_M"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p14_4_otros_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p14_4_otros_H"
                                                                    id="denunciaserv_p14_4_otros_H"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p14_4_otros_H; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p14_4_otros_T"
                                                                    id="denunciaserv_p14_4_otros_T"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p14_4_otros_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                            </table>

                                            <!--  Fin  Pregunta  -->
                                            </tbody>
                                            </table>




                                            <input type="button" value="Guardar cambios"
                                                class="btn btn-success btn-flotante crearTab7" />

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Finaliza Tab Denuncias a Servidores Públicos-->








                        <!-- Tab Denuncias a Servidores Públicos -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">14.2 RESPONSABILIDADES DE LOS SERVIDORES PÚBLICOS: RESPONSABILIDAD PENAL</h3>
                            </div>
                            <br>
                            <div class="panel-body">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <form action="#" method="post" class="col-lg-12">
                      <?php
                      //BUSCAR PREGUNTA Formulario
                      $pregunta = ModeloPolicias:: mdlMostrarPolicias("policias","uuid", $_SESSION["id"]);

                      if(count($pregunta)==0){
                      $idFormulario=0;
                      }else{
                      $idFormulario=$pregunta[0]["id"];
                      /* p142 */  $denunciaserv_p142_den=$pregunta[0]["denunciaserv_p142_den"];
                      /* p142 */  $denunciaserv_p142_den_cual=$pregunta[0]["denunciaserv_p142_den_cual"];
                      /* p142 */  $denunciaserv_p142_2_quej=$pregunta[0]["denunciaserv_p142_2_quej"];
                      /* p142 */  $denunciaserv_p142_3_inv_M=$pregunta[0]["denunciaserv_p142_3_inv_M"];
                      /* p142 */  $denunciaserv_p142_3_inv_H=$pregunta[0]["denunciaserv_p142_3_inv_H"];
                      /* p142 */  $denunciaserv_p142_3_inv_T=$pregunta[0]["denunciaserv_p142_3_inv_T"];
                      /* p142 */  $denunciaserv_p142_3_int_M=$pregunta[0]["denunciaserv_p142_3_int_M"];
                      /* p142 */  $denunciaserv_p142_3_int_H=$pregunta[0]["denunciaserv_p142_3_int_H"];
                      /* p142 */  $denunciaserv_p142_3_int_T=$pregunta[0]["denunciaserv_p142_3_int_T"];
                      /* p142 */  $denunciaserv_p142_3_reac_M=$pregunta[0]["denunciaserv_p142_3_reac_M"];
                      /* p142 */  $denunciaserv_p142_3_reac_H=$pregunta[0]["denunciaserv_p142_3_reac_H"];
                      /* p142 */  $denunciaserv_p142_3_reac_T=$pregunta[0]["denunciaserv_p142_3_reac_T"];
                      /* p142 */  $denunciaserv_p142_3_proc_M=$pregunta[0]["denunciaserv_p142_3_proc_M"];
                      /* p142 */  $denunciaserv_p142_3_proc_H=$pregunta[0]["denunciaserv_p142_3_proc_H"];
                      /* p142 */  $denunciaserv_p142_3_proc_T=$pregunta[0]["denunciaserv_p142_3_proc_T"];
                      /* p142 */  $denunciaserv_p142_3_seg_M=$pregunta[0]["denunciaserv_p142_3_seg_M"];

                      /* p142 */  $denunciaserv_p142_3_seg_H=$pregunta[0]["denunciaserv_p142_3_seg_H"];
                      /* p142 */  $denunciaserv_p142_3_seg_T=$pregunta[0]["denunciaserv_p142_3_seg_T"];
                      /* p142 */  $denunciaserv_p142_3_prev_M=$pregunta[0]["denunciaserv_p142_3_prev_M"];
                      /* p142 */  $denunciaserv_p142_3_prev_H=$pregunta[0]["denunciaserv_p142_3_prev_H"];
                      /* p142 */  $denunciaserv_p142_3_prev_T=$pregunta[0]["denunciaserv_p142_3_prev_T"];
                      /* p142 */  $denunciaserv_p142_3_pri_M=$pregunta[0]["denunciaserv_p142_3_pri_M"];
                      /* p142 */  $denunciaserv_p142_3_pri_H=$pregunta[0]["denunciaserv_p142_3_pri_H"];
                      /* p142 */  $denunciaserv_p142_3_pri_T=$pregunta[0]["denunciaserv_p142_3_pri_T"];
                      /* p142 */  $denunciaserv_p142_3_otros=$pregunta[0]["denunciaserv_p142_3_otros"];
                      /* p142 */  $denunciaserv_p142_3_otros_M=$pregunta[0]["denunciaserv_p142_3_otros_M"];
                      /* p142 */  $denunciaserv_p142_3_otros_H=$pregunta[0]["denunciaserv_p142_3_otros_H"];
                      /* p142 */  $denunciaserv_p142_3_otros_T=$pregunta[0]["denunciaserv_p142_3_otros_T"];
                      /* p142 */  $denunciaserv_p142_4_inv_M=$pregunta[0]["denunciaserv_p142_4_inv_M"];

                      /* p142 */  $denunciaserv_p142_4_inv_H=$pregunta[0]["denunciaserv_p142_4_inv_H"];
                      /* p142 */  $denunciaserv_p142_4_inv_T=$pregunta[0]["denunciaserv_p142_4_inv_T"];
                      /* p142 */  $denunciaserv_p142_4_intel_M=$pregunta[0]["denunciaserv_p142_4_intel_M"];
                      /* p142 */  $denunciaserv_p142_4_intel_H=$pregunta[0]["denunciaserv_p142_4_intel_H"];
                      /* p142 */  $denunciaserv_p142_4_intel_T=$pregunta[0]["denunciaserv_p142_4_intel_T"];
                      /* p142 */  $denunciaserv_p142_4_reac_M=$pregunta[0]["denunciaserv_p142_4_reac_M"];
                      /* p142 */  $denunciaserv_p142_4_reac_H=$pregunta[0]["denunciaserv_p142_4_reac_H"];
                      /* p142 */  $denunciaserv_p142_4_reac_T=$pregunta[0]["denunciaserv_p142_4_reac_T"];
                      /* p142 */  $denunciaserv_p142_4_proc_M=$pregunta[0]["denunciaserv_p142_4_proc_M"];
                      /* p142 */  $denunciaserv_p142_4_proc_H=$pregunta[0]["denunciaserv_p142_4_proc_H"];
                      /* p142 */  $denunciaserv_p142_4_proc_T=$pregunta[0]["denunciaserv_p142_4_proc_T"];
                      /* p142 */  $denunciaserv_p142_4_seg_M=$pregunta[0]["denunciaserv_p142_4_seg_M"];
                      /* p142 */  $denunciaserv_p142_4_seg_H=$pregunta[0]["denunciaserv_p142_4_seg_H"];

                      /* p142 */  $denunciaserv_p142_4_seg_T=$pregunta[0]["denunciaserv_p142_4_seg_T"];
                      /* p142 */  $denunciaserv_p142_4_prev_M=$pregunta[0]["denunciaserv_p142_4_prev_M"];
                      /* p142 */  $denunciaserv_p142_4_prev_H=$pregunta[0]["denunciaserv_p142_4_prev_H"];
                      /* p142 */  $denunciaserv_p142_4_prev_T=$pregunta[0]["denunciaserv_p142_4_prev_T"];
                      /* p142 */  $denunciaserv_p142_4_pri_M=$pregunta[0]["denunciaserv_p142_4_pri_M"];
                      /* p142 */  $denunciaserv_p142_4_pri_H=$pregunta[0]["denunciaserv_p142_4_pri_H"];
                      /* p142 */  $denunciaserv_p142_4_pri_T=$pregunta[0]["denunciaserv_p142_4_pri_T"];
                      /* p142 */  $denunciaserv_p142_4_otroscual=$pregunta[0]["denunciaserv_p142_4_otroscual"];
                      /* p142 */  $denunciaserv_p142_4_otros_M=$pregunta[0]["denunciaserv_p142_4_otros_M"];
                      /* p142 */  $denunciaserv_p142_4_otros_M=$pregunta[0]["denunciaserv_p142_4_otros_M"];
                      /* p142 */  $denunciaserv_p142_4_otros_H=$pregunta[0]["denunciaserv_p142_4_otros_H"];
                      /* p142 */  $denunciaserv_p142_4_otros_T=$pregunta[0]["denunciaserv_p142_4_otros_T"];




                      }
                      ?>


                                            <div>

                                                <h5>14.2.1.- Total de denuncias presentadas en el año 2020 contra servidores públicos. Desglosar por función y por sexo.

</h5>
                                            </div>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                          <div class="input-group">
                                                              <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                  name="denunciaserv_p142_2_quej"
                                                                  id="denunciaserv_p142_2_quej"
                                                                  <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                  onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                  value="<?php echo $denunciaserv_p142_2_quej; ?>">
                                                          </div>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!--  Pregunta -->

                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                       <th>#</th>
                                                        <th>Descripción</th>
                                                        <th>Mujer </th>
                                                        <th>Hombre</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Investigación y Análisis </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p142_3_inv_M"
                                                                    id="denunciaserv_p142_3_inv_M"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p142_3_inv_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p142_3_inv_H"
                                                                    id="denunciaserv_p142_3_inv_H"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p142_3_inv_H; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p142_3_inv_T"
                                                                    id="denunciaserv_p142_3_inv_T"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p142_3_inv_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                      <td>2</td>

                                                        <td>Inteligencia </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p142_3_int_M"
                                                                    id="denunciaserv_p142_3_int_M"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p142_3_int_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p142_3_int_H"
                                                                    id="denunciaserv_p142_3_int_H"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p142_3_int_H; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                              <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p142_3_int_T"
                                                                    id="denunciaserv_p142_3_int_T"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p142_3_int_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                      <td>3</td>

                                                        <td>Reacción </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p142_3_reac_M"
                                                                    id="denunciaserv_p142_3_reac_M"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p142_3_reac_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p142_3_reac_H"
                                                                    id="denunciaserv_p142_3_reac_H"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p142_3_reac_H; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p142_3_reac_T"
                                                                    id="denunciaserv_p142_3_reac_T"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p142_3_reac_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                      <td>4</td>

                                                        <td>Procesal </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p142_3_proc_M"
                                                                    id="denunciaserv_p142_3_proc_M"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p142_3_proc_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p142_3_proc_H"
                                                                    id="denunciaserv_p142_3_proc_H"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p142_3_proc_H; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p142_3_proc_T"
                                                                    id="denunciaserv_p142_3_proc_T"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p142_3_proc_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                      <td>5</td>

                                                        <td>Seguridad y Custodia Penitenciaria </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p142_3_seg_M"
                                                                    id="denunciaserv_p142_3_seg_M"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p142_3_seg_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p142_3_seg_H"
                                                                    id="denunciaserv_p142_3_seg_H"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p142_3_seg_H; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p142_3_seg_T"
                                                                    id="denunciaserv_p142_3_seg_T"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p142_3_seg_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                      <td>6</td>

                                                        <td>Preventivo </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p142_3_prev_M"
                                                                    id="denunciaserv_p142_3_prev_M"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p142_3_prev_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p142_3_prev_H"
                                                                    id="denunciaserv_p142_3_prev_H"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p142_3_prev_H; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p142_3_prev_T"
                                                                    id="denunciaserv_p142_3_prev_T"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p142_3_prev_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                      <td>7</td>

                                                        <td>Primer respondiente</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p142_3_pri_M"
                                                                    id="denunciaserv_p142_3_pri_M"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p142_3_pri_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p142_3_pri_H"
                                                                    id="denunciaserv_p142_3_pri_H"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p142_3_pri_H; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p142_3_pri_T"
                                                                    id="denunciaserv_p142_3_pri_T"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p142_3_pri_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                      <td>8</td>
                                                        <td><div style="float:left;">Otras (¿cuáles?)   &nbsp;&nbsp;&nbsp;&nbsp;</div>
                                                            <div class="input-group">
                                                                <input type="text" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p142_3_otros"
                                                                    id="denunciaserv_p142_3_otros"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $denunciaserv_p142_3_otros; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p142_3_otros_M"
                                                                    id="denunciaserv_p142_3_otros_M"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p142_3_otros_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p142_3_otros_H"
                                                                    id="denunciaserv_p142_3_otros_H"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p142_3_otros_H; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p142_3_otros_T"
                                                                    id="denunciaserv_p142_3_otros_T"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p142_3_otros_T; ?>">
                                                            </div>
                                                        </td>

                                                    </tr>
                                                </tbody>
                                            </table>

                                            <!--  Fin  Pregunta  -->
                                            <!--  Pregunta -->
                                            <div>
                                                <h5>14.2.2.- Total de sentencias condenatorias en contra de servidores públicos en el año 2020. Desglosar por función y por sexo.
</h5>
                                            </div>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Descripción</th>
                                                        <th> Mujer </th>
                                                        <th>Hombre</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Investigación y Análisis</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p142_4_inv_M"
                                                                    id="denunciaserv_p142_4_inv_M"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p142_4_inv_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                              <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p142_4_inv_H"
                                                                    id="denunciaserv_p142_4_inv_H"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p142_4_inv_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p142_4_inv_T"
                                                                    id="denunciaserv_p142_4_inv_T"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p142_4_inv_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Inteligencia</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p142_4_intel_M"
                                                                    id="denunciaserv_p142_4_intel_M"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p142_4_intel_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                              <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p142_4_intel_H"
                                                                    id="denunciaserv_p142_4_intel_H"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p142_4_intel_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p142_4_intel_T"
                                                                    id="denunciaserv_p142_4_intel_T"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p142_4_intel_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Reacción</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p142_4_reac_M"
                                                                    id="denunciaserv_p142_4_reac_M"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p142_4_reac_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p142_4_reac_H"
                                                                    id="denunciaserv_p142_4_reac_H"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p142_4_reac_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p142_4_reac_T"
                                                                    id="denunciaserv_p142_4_reac_T"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p142_4_reac_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>Procesal</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p142_4_proc_M"
                                                                    id="denunciaserv_p142_4_proc_M"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p142_4_proc_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p142_4_proc_H"
                                                                    id="denunciaserv_p142_4_proc_H"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p142_4_proc_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p142_4_proc_T"
                                                                    id="denunciaserv_p142_4_proc_T"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p142_4_proc_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>Seguridad y Custodia Penitenciaria</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p142_4_seg_M"
                                                                    id="denunciaserv_p142_4_seg_M"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p142_4_seg_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p142_4_seg_H"
                                                                    id="denunciaserv_p142_4_seg_H"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p142_4_seg_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p142_4_seg_T"
                                                                    id="denunciaserv_p142_4_seg_T"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p142_4_seg_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>Preventivo</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p142_4_prev_M"
                                                                    id="denunciaserv_p142_4_prev_M"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p142_4_prev_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p142_4_prev_H"
                                                                    id="denunciaserv_p142_4_prev_H"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p142_4_prev_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                              <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p142_4_prev_T"
                                                                    id="denunciaserv_p142_4_prev_T"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p142_4_prev_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>7</td>
                                                        <td>Primer respondiente</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p142_4_pri_M"
                                                                    id="denunciaserv_p142_4_pri_M"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p142_4_pri_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p142_4_pri_H"
                                                                    id="denunciaserv_p142_4_pri_H"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p142_4_pri_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>

                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p142_4_pri_T"
                                                                    id="denunciaserv_p142_4_pri_T"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p142_4_pri_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                      <td>7</td>
                                                        <td><div style="float:left;">Otras (¿cuáles?)   &nbsp;&nbsp;&nbsp;&nbsp;</div>
                                                            <div class="input-group">
                                                                <input type="text" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p142_4_otroscual"
                                                                    id="denunciaserv_p142_4_otroscual"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $denunciaserv_p142_4_otroscual; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                              <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p142_4_otros_M"
                                                                    id="denunciaserv_p142_4_otros_M"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p142_4_otros_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p142_4_otros_H"
                                                                    id="denunciaserv_p142_4_otros_H"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p142_4_otros_H; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                              <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p142_4_otros_T"
                                                                    id="denunciaserv_p142_4_otros_T"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    value="<?php echo $denunciaserv_p142_4_otros_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                            </table>

                                            <!--  Fin  Pregunta  -->
                                            </tbody>
                                            </table>




                                            <input type="button" value="Guardar cambios"
                                                class="btn btn-success btn-flotante crearTab7" />

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Finaliza Tab Denuncias a Servidores Públicos-->
























                        <!-- Tab Transparencia -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">15. Denuncias</h3>
                            </div>
                            <br>
                            <div class="panel-body">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <form action="#" method="post" class="col-lg-12">

                                            <div>

                                                <h5>15.- Número total de denuncias recibidas en el año 2020. </h5>
                                            </div>
                                            <table class="table">
                                                <tbody>

                                                    <td>
                                                        <div class="input-group">
                                                            <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                name="denuncias_p15_numtot"
                                                                id="denuncias_p15_numtot"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                value="<?php echo $denuncias_p15_numtot; ?>">
                                                        </div>
                                                    </td>


                                                </tbody>
                                            </table>

                                            <!--  Pregunta -->
                                            <div>
                                                <h5>15.1.-  Número de denuncias recibidas en el año 2020. Desglosar por los siguientes delitos: </h5>
                                            </div>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Descripción</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1 </td>
                                                        <td>Homicidio </td>
                                                        <td>
                                                            <div class="input-group">
                                                              <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denuncias_p15_1_homi" id="denuncias_p15_1_homi" <?php if($estatus != 0) { echo "disabled='true'"; } ?> value="<?php echo $denuncias_p15_1_homi; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                      <td>2 </td>

                                                        <td>Feminicidio </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denuncias_p15_1_femi" id="denuncias_p15_1_femi" <?php if($estatus != 0) { echo "disabled='true'"; } ?> value="<?php echo $denuncias_p15_1_femi; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                      <td>3 </td>

                                                        <td>Lesiones </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denuncias_p15_1_les" id="denuncias_p15_1_les" <?php if($estatus != 0) { echo "disabled='true'"; } ?>value="<?php echo $denuncias_p15_1_les; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                      <td>4 </td>

                                                        <td>Violencia familiar </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denuncias_p15_1_viofam" id="denuncias_p15_1_viofam"<?php if($estatus != 0) { echo "disabled='true'"; } ?> value="<?php echo $denuncias_p15_1_viofam; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                      <td>5 </td>

                                                        <td>Abuso sexual </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denuncias_p15_1_abusex" id="denuncias_p15_1_abusex" <?php if($estatus != 0) { echo "disabled='true'"; } ?> value="<?php echo $denuncias_p15_1_abusex; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                      <td>6 </td>

                                                        <td>Hostigamiento sexual </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denuncias_p15_1_hossex" id="denuncias_p15_1_hossex"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                     value="<?php echo $denuncias_p15_1_hossex; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                      <td>7 </td>

                                                        <td>Violación</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denuncias_p15_1_viol" id="denuncias_p15_1_viol"<?php if($estatus != 0) { echo "disabled='true'"; } ?> value="<?php echo $denuncias_p15_1_viol; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                      <td>8 </td>

                                                        <td>Trata de personas </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denuncias_p15_1_tratper" id="denuncias_p15_1_tratper"<?php if($estatus != 0) { echo "disabled='true'"; } ?> value="<?php echo $denuncias_p15_1_tratper; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                      <td>9 </td>

                                                        <td>Corrupción de menores</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denuncias_p15_1_cormen" id="denuncias_p15_1_cormen" <?php if($estatus != 0) { echo "disabled='true'"; } ?> value="<?php echo $denuncias_p15_1_cormen; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                      <td>10 </td>

                                                        <td>Tráfico de menores</td>
                                                        <td>
                                                            <div class="input-group">
                                                              <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denuncias_p15_1_trafmen" id="denuncias_p15_1_trafmen" <?php if($estatus != 0) { echo "disabled='true'"; } ?> value="<?php echo $denuncias_p15_1_trafmen; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>

                                            <!--  Fin  Pregunta  -->
                                            <div>
                                                <h5>
                                                    15.2.- ¿Cuentan con mecanismos no presenciales para interponer una
                                                    denuncia?
                                                </h5>
                                            </div>

                                            <br>
                                            <table class="table">
                                                <tbody>
                                                    <tr>



                                                      <div class="form-group col-md-6">
                                                      <div class="form-check form-check-inline">
                                                      <input class="form-check-input" type="radio"
                                                      name="denuncias_p15_2_mecnopre" id="denuncias_p15_2_mecnopre"
                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                      <?php if ($denuncias_p15_2_mecnopre == "SÍ"){echo ' checked="checked"'; }?> />
                                                      <label class="form-check-label"
                                                      for="denuncias_p15_2_mecnopre">Sí</label>
                                                      </div>
                                                      <div class="form-check form-check-inline">
                                                      <input class="form-check-input" type="radio"
                                                      name="denuncias_p15_2_mecnopre" id="denuncias_p15_2_mecnopre"
                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                      <?php if ($denuncias_p15_2_mecnopre == "NO"){echo ' checked="checked"'; }?> />
                                                      <label class="form-check-label"
                                                      for="denuncias_p15_2_mecnopre">No</label>
                                                      </div>
                                                      </div>



                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div>
                                                <h5>
                                                    15.3.- ¿Cuáles son los mecanismos no presenciales con los que
                                                    cuentan?
                                                </h5>
                                            </div>

                                            <br>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="denuncias_p15_3_pagint"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                  <?php if ($denuncias_p15_3_pagint == "Página de internet"){echo ' checked="checked"'; }?>
                                                                  />
                                                                  <label class="form-check-label" for="denuncias_p15_3_pagint">
                                                                Página de internet
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="denuncias_p15_3_tel"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                <?php if ($denuncias_p15_3_tel == "Teléfono"){echo ' checked="checked"'; }?>
                                                                />
                                                            <label class="form-check-label" for="denuncias_p15_3_tel">
                                                                Teléfono
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="denuncias_p15_3_app"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                <?php if ($denuncias_p15_3_app == "Aplicación Móvil (App)"){echo ' checked="checked"'; }?>
                                                                />
                                                            <label class="form-check-label" for="denuncias_p15_3_app">
                                                                Aplicación Móvil (App)
                                                            </label>
                                                        </div>

                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="necesidades_p15_3_sms"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                <?php if ($necesidades_p15_3_sms == "SMS (mensaje de texto)"){echo ' checked="checked"'; }?>
                                                                />
                                                            <label class="form-check-label" for="necesidades_p15_3_sms">
                                                                SMS (mensaje de texto)
                                                            </label>
                                                        </div>


                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox"
                                                            name="necesidades_p15_3_otros"
                                                            id="necesidades_p15_3_otros"
                                                            <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                            onchange="javascript:showContent153()"
                                                            <?php if ($necesidades_p15_3_otros == "Otro"){echo ' checked="checked"'; }?>
                                                            />
                                                            <label class="form-check-label"
                                                            for="necesidades_p15_3_otros">Otro
                                                          </label>

                                                          <div id="content153" style="display: none;">
                                                            <label class="form-check-label"
                                                            for="necesidades_p13_cual">
                                                            ¿Cuáles?</label>
                                                            <input class="form-control" type="text"
                                                            name="necesidades_p15_3_cuales"
                                                            id="necesidades_p15_3_cuales"
                                                            <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                            value="<?php echo $necesidades_p15_3_cuales; ?>"/>
                                                          </div>
                                                          </div>







                                                    </tr>

                                                </tbody>
                                            </table>

                                            <div>

                                                <h5>15.4.- ¿Para qué delitos es posible realizar una denuncia por medio
                                                    de mecanismos no presenciales? </h5>
                                            </div>
                                            <table class="table">
                                                <tbody>
                                                    <tr>

                                                      <textarea  <?php if($estatus != 0) { echo "disabled='true'"; } ?>  class="form-control" name="denuncias_p15_4_den" id="denuncias_p15_4_den" rows="10" cols="90" ><?php echo $denuncias_p15_4_den; ?></textarea>


                                                    </tr>
                                                </tbody>
                                            </table>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>







                        <!-- Tab Transparencia -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">16. Detenciones</h3>
                            </div>
                            <br>
                            <div class="panel-body">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <form action="#" method="post" class="col-lg-12">

                                          <!--  Pregunta -->
                                          <div>
                                              <h5>16.-  Total de detenciones realizadas durante el año 2020. Desglosar por edad de la persona detenida y sexo.</h5>
                                          </div>


                                          <!--  Fin  Pregunta  -->

                                            <!--  Pregunta -->


                                            <table class="table">
                                                <thead>
                                                    <tr>

                                                        <th>Descripción</th>
                                                        <th> Mujer </th>
                                                        <th>Hombre</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Mayor de 18</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p16_totdet_M"
                                                                    id="denunciaserv_p16_totdet_M"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $denunciaserv_p16_totdet_M; ?>">

                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                              <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p16_totdet_H"
                                                                    id="denunciaserv_p16_totdet_H"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $denunciaserv_p16_totdet_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p16_totdet_T"
                                                                    id="denunciaserv_p16_totdet_T"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $denunciaserv_p16_totdet_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Menor de 18</td>
                                                        <td>
                                                            <div class="input-group">
                                                              <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p16_totdet_meno18M"
                                                                    id="denunciaserv_p16_totdet_meno18M"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $denunciaserv_p16_totdet_meno18M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p16_totdet_meno18H"
                                                                    id="denunciaserv_p16_totdet_meno18H"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $denunciaserv_p16_totdet_meno18H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                              <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p16_totdet_meno18T"
                                                                    id="denunciaserv_p16_totdet_meno18T"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $denunciaserv_p16_totdet_meno18T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Total</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p16_totdet_TM"
                                                                    id="denunciaserv_p16_totdet_TM"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $denunciaserv_p16_totdet_TM; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p16_totdet_TH"
                                                                    id="denunciaserv_p16_totdet_TH"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $denunciaserv_p16_totdet_TH; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="denunciaserv_p16_totdet_TT"
                                                                    id="denunciaserv_p16_totdet_TT"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $denunciaserv_p16_totdet_TT; ?>">
                                                            </div>

                                                        </td>
                                                    </tr>
                                            </table>

                                            <div>
                                                <h5>16.1.- Total de detenciones realizadas durante el año 2020. Desglosar por los siguientes rubros:
                                                </h5>
                                            </div>

                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Descripción</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Detenciones totales </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="detenciones_p_16_1_detot" id="detenciones_p_16_1_detot"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $detenciones_p_16_1_detot; ?>">

                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Detenciones en flagrancia </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="detenciones_p_16_1_defla" id="detenciones_p_16_1_defla"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $detenciones_p_16_1_defla; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Detenciones por caso urgente </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="detenciones_p_16_1_decasurg" id="detenciones_p_16_1_decasurg"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $detenciones_p_16_1_decasurg; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>


                                                </tbody>
                                            </table>

                                            <!--  Fin  Pregunta  -->

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Finaliza Tab Transparencia-->














                        <!-- Tab Transparencia -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">17. Víctimas</h3>
                            </div>
                            <br>
                            <div class="panel-body">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <form action="#" method="post" class="col-lg-12">
                                            <div>
                                                <h5>
                                                    17.- ¿La institución cuenta con buenas prácticas que considere sean
                                                    innovadoras para evitar la revictimización de víctimas directas o
                                                    indirectas?
                                                </h5>
                                            </div>
                                            <br>
                                            <table class="table">
                                                <tbody>
                                                    <tr>


                                                      <div class="form-group col-md-6">
                                                      <div class="form-check form-check-inline">
                                                      <input class="form-check-input" type="radio"
                                                      name="victimas_p17_bprac" id="victimas_p17_bprac"
                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                      <?php if ($victimas_p17_bprac == "SÍ"){echo ' checked="checked"'; }?> />
                                                      <label class="form-check-label"
                                                      for="victimas_p17_bprac">Sí</label>
                                                      </div>
                                                      <div class="form-check form-check-inline">
                                                      <input class="form-check-input" type="radio"
                                                      name="victimas_p17_bprac" id="victimas_p17_bprac"
                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                      <?php if ($victimas_p17_bprac == "NO"){echo ' checked="checked"'; }?> />
                                                      <label class="form-check-label"
                                                      for="victimas_p17_bprac">No</label>
                                                      </div>
                                                      </div>





                                                    </tr>

                                                </tbody>
                                            </table>

                                            <div>
                                                <!-- Esta pregunta viene despues de que la anterior seleccionaron si, si la respuesta fue no se
mantiene oculto -->
                                                <h5>17.1.- ¿Cuáles son esas buenas prácticas? </h5>
                                            </div>
                                            <table class="table">
                                                <tbody>
                                                    <tr>

                                                      <textarea  <?php if($estatus != 0) { echo "disabled='true'"; } ?>  class="form-control" name="victimas_p17_1_cuales" id="victimas_p17_1_cuales" rows="10" cols="90" ><?php echo $victimas_p17_1_cuales; ?></textarea>


                                                    </tr>
                                                </tbody>
                                            </table>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Finaliza Tab Transparencia-->






                        <!-- Fin TAB PERSONAS CON DISCAPACIDAD -->

                    </div>


                    <!--  Tab Capacitacion y evaluacion de personal  -->
                    <div id="tabs-8">


                        <!-- Tab Transparencia -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">18. Mesas de Justicia</h3>
                            </div>
                            <br>
                            <div class="panel-body">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <form action="#" method="post" class="col-lg-12">
<?php
//BUSCAR PREGUNTA Formulario
$pregunta = ModeloPolicias:: mdlMostrarPolicias("policias","uuid", $_SESSION["id"]);

if(count($pregunta)==0){
$idFormulario=0;
}else{
$idFormulario=$pregunta[0]["id"];
/* p18 */  $justiicia_p18_mesajus=$pregunta[0]["justiicia_p18_mesajus"];

/* p18.1 1*/  $necesidades_p18_1_segobedo=$pregunta[0]["necesidades_p18_1_segobedo"];
/* p18.1 2*/  $necesidades_p18_1_uasisjus=$pregunta[0]["necesidades_p18_1_uasisjus"];
/* p18.1 3*/  $necesidades_p18_1_ptrisup=$pregunta[0]["necesidades_p18_1_ptrisup"];
/* p18.1 4*/  $necesidades_p18_1_fisgral=$pregunta[0]["necesidades_p18_1_fisgral"];
/* p18.1 5*/  $necesidades_p18_1_secsegpu=$pregunta[0]["necesidades_p18_1_secsegpu"];
/* p18.1 6*/  $necesidades_p18_1_tinst=$pregunta[0]["necesidades_p18_1_tinst"];
/* p18.1 7*/  $necesidades_p18_1_subsispen=$pregunta[0]["necesidades_p18_1_subsispen"];
/* p18.1 8*/  $necesidades_p18_1_tautsup=$pregunta[0]["necesidades_p18_1_tautsup"];
/* p18.1 9*/  $necesidades_p18_1_tinsestm=$pregunta[0]["necesidades_p18_1_tinsestm"];
/* p18.1 10*/  $necesidades_p18_1_dif=$pregunta[0]["necesidades_p18_1_dif"];
/* p18.1 11*/  $necesidades_p18_1_sipinna=$pregunta[0]["necesidades_p18_1_sipinna"];
/* p18.1 12*/  $necesidades_p18_1_secsal=$pregunta[0]["necesidades_p18_1_secsal"];
/* p18.1 13*/  $necesidades_p18_1_comejavic=$pregunta[0]["necesidades_p18_1_comejavic"];
/* p18.1 14*/  $necesidades_p18_1_cenuatnvic=$pregunta[0]["necesidades_p18_1_cenuatnvic"];
/* p18.1 15*/  $necesidades_p18_1_tcenjusm=$pregunta[0]["necesidades_p18_1_tcenjusm"];
/* p18.1 16*/  $necesidades_p18_1_tfisespm=$pregunta[0]["necesidades_p18_1_tfisespm"];
/* p18.1 17*/  $necesidades_p18_1_dcenpen=$pregunta[0]["necesidades_p18_1_dcenpen"];
/* p18.1 18*/  $necesidades_p18_1_dcenpenadol=$pregunta[0]["necesidades_p18_1_dcenpenadol"];
/* p18.1 19*/  $necesidades_p18_1_torgmec=$pregunta[0]["necesidades_p18_1_torgmec"];
/* p18.1 20*/  $necesidades_p18_1_tsevper=$pregunta[0]["necesidades_p18_1_tsevper"];
/* p18.1 21*/  $necesidades_p18_1_otros=$pregunta[0]["necesidades_p18_1_otros"];
/* p18.1 21*/  $necesidades_p18_1_cual=$pregunta[0]["necesidades_p18_1_cual"];

/* p18.2*/  $justiicia_p18_2_semanal=$pregunta[0]["justiicia_p18_2_semanal"];
/* p18.2*/  $justiicia_p18_2_quincenal=$pregunta[0]["justiicia_p18_2_quincenal"];
/* p18.2*/  $justiicia_p18_2_mensual=$pregunta[0]["justiicia_p18_2_mensual"];
/* p18.2*/  $justiicia_p18_2_bimestral=$pregunta[0]["justiicia_p18_2_bimestral"];
/* p18.2*/  $justiicia_p18_2_trimestral=$pregunta[0]["justiicia_p18_2_trimestral"];
/* p18.2*/  $justiicia_p18_2_semestral=$pregunta[0]["justiicia_p18_2_semestral"];
/* p18.2*/  $justiicia_p18_2_anual=$pregunta[0]["justiicia_p18_2_anual"];
/* p18.2*/  $justiicia_p18_2_abierta=$pregunta[0]["justiicia_p18_2_abierta"];

/* p18.3*/  $justiicia_p18_3_buenpract=$pregunta[0]["justiicia_p18_3_buenpract"];

/* p19*/  $impacto_p19_medprev=$pregunta[0]["impacto_p19_medprev"];

/* p19.1*/  $impacto_p19_1_medse=$pregunta[0]["impacto_p19_1_medse"];

/* p19.2*/  $impacto_p19_2_incmed=$pregunta[0]["impacto_p19_2_incmed"];

/* p19.3*/  $impacto_p19_3_descmed=$pregunta[0]["impacto_p19_3_descmed"];

/* p19.3*/  $comfin=$pregunta[0]["comfin"];




/* p20 */  $terapeutica_p20_progjus=$pregunta[0]["terapeutica_p20_progjus"];

/* p20.1 */  $terapeutica_p20_1_may18_M=$pregunta[0]["terapeutica_p20_1_may18_M"];
/* p20.1 */  $terapeutica_p20_1_may18_H=$pregunta[0]["terapeutica_p20_1_may18_H"];
/* p20.1 */  $terapeutica_p20_1_may18_T=$pregunta[0]["terapeutica_p20_1_may18_T"];
/* p20.1 */  $terapeutica_p20_1_men18_M=$pregunta[0]["terapeutica_p20_1_men18_M"];
/* p20.1 */  $terapeutica_p20_1_men18_H=$pregunta[0]["terapeutica_p20_1_men18_H"];
/* p20.1 */  $terapeutica_p20_1_men18_T=$pregunta[0]["terapeutica_p20_1_men18_T"];
/* p20.1 */  $terapeutica_p20_1_total_M=$pregunta[0]["terapeutica_p20_1_total_M"];
/* p20.1 */  $terapeutica_p20_1_total_H=$pregunta[0]["terapeutica_p20_1_total_H"];
/* p20.1 */  $terapeutica_p20_1_total_T=$pregunta[0]["terapeutica_p20_1_total_T"];

/* p20.2 */  $terapeutica_p20_2_can_M=$pregunta[0]["terapeutica_p20_2_can_M"];
/* p20.2 */  $terapeutica_p20_2_can_H=$pregunta[0]["terapeutica_p20_2_can_H"];
/* p20.2 */  $terapeutica_p20_2_can_T=$pregunta[0]["terapeutica_p20_2_can_T"];
/* p20.2 */  $terapeutica_p20_2_men_M=$pregunta[0]["terapeutica_p20_2_men_M"];
/* p20.2 */  $terapeutica_p20_2_men_H=$pregunta[0]["terapeutica_p20_2_men_H"];
/* p20.2 */  $terapeutica_p20_2_men_T=$pregunta[0]["terapeutica_p20_2_men_T"];
/* p20.2 */  $terapeutica_p20_2_fen_M=$pregunta[0]["terapeutica_p20_2_fen_M"];
/* p20.2 */  $terapeutica_p20_2_fen_H=$pregunta[0]["terapeutica_p20_2_fen_H"];
/* p20.2 */  $terapeutica_p20_2_fen_T=$pregunta[0]["terapeutica_p20_2_fen_T"];
/* p20.2 */  $terapeutica_p20_2_coc_M=$pregunta[0]["terapeutica_p20_2_coc_M"];
/* p20.2 */  $terapeutica_p20_2_coc_H=$pregunta[0]["terapeutica_p20_2_coc_H"];
/* p20.2 */  $terapeutica_p20_2_coc_T=$pregunta[0]["terapeutica_p20_2_coc_T"];
/* p20.2 */  $terapeutica_p20_2_her_M=$pregunta[0]["terapeutica_p20_2_her_M"];
/* p20.2 */  $terapeutica_p20_2_her_H=$pregunta[0]["terapeutica_p20_2_her_H"];
/* p20.2 */  $terapeutica_p20_2_her_T=$pregunta[0]["terapeutica_p20_2_her_T"];
/* p20.2 */  $terapeutica_p20_2_alc_M=$pregunta[0]["terapeutica_p20_2_alc_M"];
/* p20.2 */  $terapeutica_p20_2_alc_H=$pregunta[0]["terapeutica_p20_2_alc_H"];
/* p20.2 */  $terapeutica_p20_2_alc_T=$pregunta[0]["terapeutica_p20_2_alc_T"];
/* p20.2 */  $terapeutica_p20_2_otroascual=$pregunta[0]["terapeutica_p20_2_otroascual"];
/* p20.2 */  $terapeutica_p20_2_otras_M=$pregunta[0]["terapeutica_p20_2_otras_M"];
/* p20.2 */  $terapeutica_p20_2_otras_H=$pregunta[0]["terapeutica_p20_2_otras_H"];
/* p20.2 */  $terapeutica_p20_2_otras_T=$pregunta[0]["terapeutica_p20_2_otras_T"];

}
?>
                                            <div>
                                                <h5>
                                                    18.- ¿La institución participa en las Mesas de Justicia
                                                    -judicialización- de la entidad?
                                                </h5>
                                            </div>
                                            <br>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <div class="form-group col-md-6">
                                                        <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                        name="justiicia_p18_mesajus" id="justiicia_p18_mesajus"
                                                        <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                        <?php if ($justiicia_p18_mesajus == "SÍ"){echo ' checked="checked"'; }?> />
                                                        <label class="form-check-label"
                                                        for="justiicia_p18_mesajus">Sí</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio"
                                                        name="justiicia_p18_mesajus" id="justiicia_p18_mesajus"
                                                        <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                        <?php if ($justiicia_p18_mesajus == "NO"){echo ' checked="checked"'; }?> />
                                                        <label class="form-check-label"
                                                        for="justiicia_p18_mesajus">No</label>
                                                        </div>
                                                        </div>

                                                    </tr>

                                                </tbody>
                                            </table>
                                            <div>
                                                <h5>
                                                    18.1.- ¿Qué instituciones participan en las Mesas de Justicia -judicialización-?
                                                </h5>
                                            </div>

                                            <br>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="necesidades_p18_1_segobedo" name="necesidades_p18_1_segobedo"
                                                            <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                              <?php if ($necesidades_p18_1_segobedo == "Secretaría de Gobierno del Estado"){echo ' checked="checked"'; }?>
                                                              />

                                                            <label class="form-check-label" for="necesidades_p18_1_segobedo">
                                                                Secretaría de Gobierno del Estado
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="necesidades_p18_1_uasisjus" name="necesidades_p18_1_uasisjus"
                                                                  <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                              <?php if ($necesidades_p18_1_uasisjus == "Unidad de Apoyo al Sistema de Justicia"){echo ' checked="checked"'; }?>
                                                              />
                                                            <label class="form-check-label" for="necesidades_p18_1_uasisjus">
                                                                Unidad de Apoyo al Sistema de Justicia
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="necesidades_p18_1_ptrisup" name="necesidades_p18_1_ptrisup"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                <?php if ($necesidades_p18_1_ptrisup == "Presidente/a del Tribunal Superior de Justicia del Estado"){echo ' checked="checked"'; }?>
                                                                />
                                                            <label class="form-check-label" for="necesidades_p18_1_ptrisup">
                                                                Presidente/a del Tribunal Superior de Justicia del
                                                                Estado
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="necesidades_p18_1_fisgral" name="necesidades_p18_1_fisgral"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                <?php if ($necesidades_p18_1_fisgral == "Fiscal o Procurador/a General del Estado"){echo ' checked="checked"'; }?>
                                                                />
                                                            <label class="form-check-label" for="necesidades_p18_1_fisgral">
                                                                Fiscal o Procurador/a General del Estado
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="necesidades_p18_1_secsegpu" name="necesidades_p18_1_secsegpu"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                <?php if ($necesidades_p18_1_secsegpu == "Secretario/a de Seguridad Pública/ Jefe de la Policía u homólogo"){echo ' checked="checked"'; }?>
                                                                />
                                                            <label class="form-check-label" for="necesidades_p18_1_secsegpu">
                                                                Secretario/a de Seguridad Pública/ Jefe de la Policía u homólogo
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="necesidades_p18_1_tinst" name="necesidades_p18_1_tinst"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                <?php if ($necesidades_p18_1_tinst == "Titular del Instituto de la Defensoría del Estado"){echo ' checked="checked"'; }?>
                                                                />
                                                            <label class="form-check-label" for="necesidades_p18_1_tinst">
                                                                Titular del Instituto de la Defensoría del Estado
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="necesidades_p18_1_subsispen" name="necesidades_p18_1_subsispen"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                <?php if ($necesidades_p18_1_subsispen == "Subsecretario/a del Sistema Penitenciario/ Director General u homólogo"){echo ' checked="checked"'; }?>
                                                                />
                                                            <label class="form-check-label" for="necesidades_p18_1_subsispen">
                                                                Subsecretario/a del Sistema Penitenciario/ Director General u homólogo
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="necesidades_p18_1_tautsup" name="necesidades_p18_1_tautsup"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                <?php if ($necesidades_p18_1_tautsup == "Titular de la Autoridad de Supervisión de Medidas Cautelares y de Suspensión Condicional del Proceso"){echo ' checked="checked"'; }?>
                                                                />
                                                            <label class="form-check-label" for="necesidades_p18_1_tautsup">
                                                                Titular de la Autoridad de Supervisión de Medidas Cautelares y de Suspensión Condicional del Proceso
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="necesidades_p18_1_tinsestm" name="necesidades_p18_1_tinsestm"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                <?php if ($necesidades_p18_1_tinsestm == "Titular del Instituto Estatal de las Mujeres"){echo ' checked="checked"'; }?>
                                                                />
                                                            <label class="form-check-label" for="necesidades_p18_1_tinsestm">
                                                                Titular del Instituto Estatal de las Mujeres
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="necesidades_p18_1_dif" name="necesidades_p18_1_dif"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                <?php if ($necesidades_p18_1_dif == "DIF estatal"){echo ' checked="checked"'; }?>
                                                                />
                                                            <label class="form-check-label" for="necesidades_p18_1_dif">
                                                                DIF estatal
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="necesidades_p18_1_sipinna" name="necesidades_p18_1_sipinna"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                <?php if ($necesidades_p18_1_sipinna == "SIPINNA estatal"){echo ' checked="checked"'; }?>
                                                                />
                                                            <label class="form-check-label" for="necesidades_p18_1_sipinna">
                                                                SIPINNA estatal
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="necesidades_p18_1_secsal" name="necesidades_p18_1_secsal"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                <?php if ($necesidades_p18_1_secsal == "Secretaría de Salud"){echo ' checked="checked"'; }?>
                                                                />
                                                            <label class="form-check-label" for="necesidades_p18_1_secsal">
                                                                Secretaría de Salud
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="necesidades_p18_1_comejavic" name="necesidades_p18_1_comejavic"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                <?php if ($necesidades_p18_1_comejavic == "Comisión Ejecutiva de Atención a Víctimas"){echo ' checked="checked"'; }?>
                                                                />
                                                            <label class="form-check-label" for="necesidades_p18_1_comejavic">
                                                                Comisión Ejecutiva de Atención a Víctimas
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="necesidades_p18_1_cenuatnvic" name="necesidades_p18_1_cenuatnvic"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                <?php if ($necesidades_p18_1_cenuatnvic == "Centro o Unidad de atención a víctimas u homólogo"){echo ' checked="checked"'; }?>
                                                                />
                                                            <label class="form-check-label" for="necesidades_p18_1_cenuatnvic">
                                                                Centro o Unidad de atención a víctimas u homólogo
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="necesidades_p18_1_tcenjusm" name="necesidades_p18_1_tcenjusm"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                <?php if ($necesidades_p18_1_tcenjusm == "Titular del Centro de Justicia para Mujeres u homólogo"){echo ' checked="checked"'; }?>
                                                                />
                                                            <label class="form-check-label" for="necesidades_p18_1_tcenjusm">
                                                                Titular del Centro de Justicia para Mujeres u homólogo
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="necesidades_p18_1_tfisespm" name="necesidades_p18_1_tfisespm"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                <?php if ($necesidades_p18_1_tfisespm == "Titular de Fiscalía Especializada en delitos en razón de género"){echo ' checked="checked"'; }?>
                                                                />
                                                            <label class="form-check-label" for="necesidades_p18_1_tfisespm">
                                                                Titular de la Fiscalía Especializada en delitos en razón de género
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="necesidades_p18_1_dcenpen" name="necesidades_p18_1_dcenpen"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                <?php if ($necesidades_p18_1_dcenpen == "Director/a de Centros penitenciarios"){echo ' checked="checked"'; }?>
                                                                />
                                                            <label class="form-check-label" for="necesidades_p18_1_dcenpen">
                                                                Director/a de Centros penitenciarios
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="necesidades_p18_1_dcenpenadol" name="necesidades_p18_1_dcenpenadol"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                <?php if ($necesidades_p18_1_dcenpenadol == "Director/a de Centros de internamiento para adolescentes"){echo ' checked="checked"'; }?>
                                                                />
                                                            <label class="form-check-label" for="necesidades_p18_1_dcenpenadol">
                                                                Director/a de Centros de internamiento para adolescentes
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="necesidades_p18_1_torgmec" name="necesidades_p18_1_torgmec"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                <?php if ($necesidades_p18_1_torgmec == "Titular del Órgano de Mecanismos Alternativos de Solución de Controversias en materia Penal u homólogo"){echo ' checked="checked"'; }?>
                                                                />
                                                            <label class="form-check-label" for="necesidades_p18_1_torgmec">
                                                                Titular del Órgano de Mecanismos Alternativos de Solución de Controversias en materia Penal u homólogo
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="necesidades_p18_1_tsevper" name="necesidades_p18_1_tsevper"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                <?php if ($necesidades_p18_1_tsevper == "Titular de Servicios Periciales y Forenses u homólogo"){echo ' checked="checked"'; }?>
                                                                />
                                                            <label class="form-check-label" for="necesidades_p18_1_tsevper">
                                                                Titular de Servicios Periciales y Forenses u homólogo
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="necesidades_p18_1_otros" name="necesidades_p18_1_otros"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                onchange="javascript:showContent1533()"
                                                                <?php if ($necesidades_p18_1_otros == "Otros"){echo ' checked="checked"'; }?>
                                                                />
                                                            <label class="form-check-label" for="necesidades_p18_1_otros">
                                                                Otros


                                                            </label>



                                                            <div id="content1533" style="display: none;">
                                                              <label class="form-check-label"
                                                              for="necesidades_p18_1_cual">
                                                              ¿Cuáles?</label>
                                                              <input class="form-control" type="text"
                                                              name="necesidades_p18_1_cual"
                                                              id="necesidades_p18_1_cual"
                                                              <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                              value="<?php echo $necesidades_p18_1_cual; ?>"/>
                                                            </div>
                                                        </div>

                                                    </tr>

                                                </tbody>
                                            </table>
                                            <div>
                                                <h5>
                                                    18.2.- ¿Generalmente con qué frecuencia se realizan las sesiones de
                                                    las Mesas de Justicia -judicialización- en la entidad?
                                                </h5>
                                            </div>

                                            <br>

                                                </tbody>
                                                <table class="table">
                                                    <tbody>
                                                        <tr>

                                                          <textarea  <?php if($estatus != 0) { echo "disabled='true'"; } ?>  class="form-control" name="justiicia_p18_2_abierta" id="justiicia_p18_2_abierta" rows="10" cols="90" ><?php echo $justiicia_p18_2_abierta; ?></textarea>



                                                        </tr>
                                                    </tbody>
                                                </table>

                                            </table>

                                            <div>
                                                <!-- Esta pregunta viene despues de que la anterior seleccionaron si, si la respuesta fue no se
mantiene oculto -->
                                                <h5>18.3.- Describir buenas prácticas que considere sean innovadoras
                                                    para mejorar el Sistema de Justicia y que hayan sido implementadas
                                                    en la entidad derivadas de las Mesas de Justicia. </h5>
                                            </div>
                                            <table class="table">
                                                <tbody>
                                                    <tr>

                                                      <textarea  <?php if($estatus != 0) { echo "disabled='true'"; } ?> class="form-control" name="justiicia_p18_3_buenpract" id="justiicia_p18_3_buenpract" rows="10" cols="90" ><?php echo $justiicia_p18_3_buenpract; ?></textarea>

                                                    </tr>
                                                </tbody>
                                            </table>
                                            <input style="right: 20%;!important;" type="button" value="Enviar"
                                                  class="btn btn-success btn-flotante  btnFinzalizar" />
<div>
                                            <input type="button" value="Guardar cambios"
                                                class="btn btn-success btn-flotante crearTab8" />
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Finaliza Tab Transparencia-->

                        <script type="text/javascript">
                        $(".panel").on("click", ".btnFinzalizar", function(){

                          var idUsuario = $(this).attr("idUsuario");

                          swal({
                            title: '¿Está seguro de que desea enviar el formulario?',
                            text: "¡Asegúrese de llenarlo completamente, ya que una vez enviado, no se podrá editar ningún campo!",
                            type: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                              cancelButtonColor: '#d33',
                              cancelButtonText: 'Cancelar',
                              confirmButtonText: 'Enviar'
                          }).then(function(result){

                            if(result.value){
                              // BANDERA 01
                              var estatus = $("#estatus").val();


                              var datos = new FormData();

                              var idFormulario = $("#idFormulario").val();
                              datos.append("idFormulario", idFormulario);

                              datos.append("FINALIZARFORMULARIO", "FINALIZARFORMULARIO");



                              $.ajax({

                                      url: "controladores/policias.controlador.php",
                                      method: "POST",
                                      data: datos,
                                      cache: false,
                                      contentType: false,
                                      processData: false,
                                      //dataType:"json",
                                      success: function(respuesta) {

                                          console.log(respuesta);
                                          //  if (respuesta.match(/correctamente.*/)){
                                          if (1 == 1) {

                                              console.log(respuesta);
                                              if (respuesta > 0) {
                                                  $("#idFormulario").val(respuesta);
                                              }


                                              swal({
                                                  type: "success",
                                                  title: respuesta,
                                                  showConfirmButton: true,
                                                  confirmButtonText: "Cerrar"
                                              }).then(function(result) {
                                                  if (result.value) {

                                                      window.location = "index.php";

                                                  }
                                              })

                                          } else {
                                              swal({
                                                  type: "success",
                                                  title: respuesta,
                                                  showConfirmButton: true,
                                                  confirmButtonText: "Cerrar"
                                              }).then(function(result) {
                                                  if (result.value) {

                                                      //  window.location = "ventas";

                                                  }
                                              })


                                          }

                                      }

                                  }

                              )

                            }

                          })

                        })

                        </script>



                        <!-- Tab Transparencia -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">19. Impacto COVID-19</h3>
                            </div>
                            <br>
                            <div class="panel-body">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <form action="#" method="post" class="col-lg-12">
                                            <div>
                                                <h5>
                                                    19.- ¿La institución incorporó medidas preventivas durante COVID-19
                                                    que considere sean innovadoras para proteger la salud del personal
                                                    que labora?
                                                </h5>
                                            </div>
                                            <br>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <div class="form-group col-md-6">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    name="impacto_p19_medprev" id="impacto_p19_medprev"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    <?php if ($impacto_p19_medprev == "SÍ"){echo ' checked="checked"'; }?>/>
                                                                <label class="form-check-label"
                                                                    for="impacto_p19_medprev">Sí</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    name="impacto_p19_medprev" id="impacto_p19_medprev"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                   <?php if ($impacto_p19_medprev == "NO"){echo ' checked="checked"'; }?>/>
                                                                <label class="form-check-label"
                                                                    for="impacto_p19_medprev">No</label>
                                                            </div>
                                                        </div>

                                                    </tr>


                                                </tbody>
                                            </table>

                                            <div>
                                                <h5>19.1.- Describir las medidas señaladas en la pregunta anterior. </h5>
                                            </div>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                      <textarea  <?php if($estatus != 0) { echo "disabled='true'"; } ?> class="form-control" name="impacto_p19_1_medse" id="impacto_p19_1_medse" rows="10" cols="90" ><?php echo $impacto_p19_1_medse; ?></textarea>


                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div>
                                                <h5>
                                                    19.2.- ¿La institución incorporó medidas preventivas durante COVID-19 que considere sean innovadoras para proteger la salud de las personas usuarias/ciudadanía?

                                                </h5>
                                            </div>
                                            <br>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <div class="form-group col-md-6">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    name="impacto_p19_2_incmed" id="impacto_p19_2_incmed"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    <?php if ($impacto_p19_2_incmed == "SÍ"){echo ' checked="checked"'; }?>>
                                                                <label class="form-check-label"
                                                                    for="impacto_p19_2_incmed">Sí</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    name="impacto_p19_2_incmed" id="impacto_p19_2_incmed"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    <?php if ($impacto_p19_2_incmed == "NO"){echo ' checked="checked"'; }?>>
                                                                <label class="form-check-label"
                                                                    for="impacto_p19_2_incmed">No</label>
                                                            </div>
                                                        </div>

                                                    </tr>



                                                </tbody>
                                            </table>

                                            <div>
                                                <h5>19.3.- Describir las medidas/buenas prácticas señaladas en la
                                                    pregunta anterior.
                                                   </h5>
                                            </div>
                                            <table class="table">
                                                <tbody>
                                                    <tr>

                                                      <textarea  <?php if($estatus != 0) { echo "disabled='true'"; } ?>  class="form-control" name="impacto_p19_3_descmed" id="impacto_p19_3_descmed" rows="10" cols="90" ><?php echo $impacto_p19_3_descmed; ?></textarea>


                                                    </tr>
                                                </tbody>
                                            </table>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Fin TAB PERSONAS CON DISCAPACIDAD -->


                        <!-- Tab Transparencia -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">20. JUSTICIA TERAPÉUTICA</h3>
                              <div style="text-align: center;">  Las siguientes preguntas son recabadas con el fin de que la Dirección General para la Reconciliación y Justicia de la UASJ pueda coadyuvar en la implementación de proyectos de Justicia Terapéutica.
                            </div>  </div>
                            <br>
                            <div class="panel-body">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <form action="#" method="post" class="col-lg-12">

                                          <div>
                                              <h5>
                                                  20.- ¿La institución cuenta/participa en un programa de Justicia Terapéutica para la atención y/o tratamiento específico del consumo?   </h5>
                                          </div>
                                          <br>
                                          <table class="table">
                                              <tbody>
                                                  <tr>
                                                      <div class="form-group col-md-6">
                                                          <div class="form-check form-check-inline">
                                                              <input class="form-check-input" type="radio"
                                                                  name="terapeutica_p20_progjus" id="terapeutica_p20_progjus"
                                                                  <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                  <?php if ($terapeutica_p20_progjus == "SÍ"){echo ' checked="checked"'; }?>>
                                                              <label class="form-check-label"
                                                                  for="terapeutica_p20_progjus">Sí</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                              <input class="form-check-input" type="radio"
                                                                  name="terapeutica_p20_progjus" id="terapeutica_p20_progjus"
                                                                  <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                  <?php if ($terapeutica_p20_progjus == "NO"){echo ' checked="checked"'; }?>>
                                                              <label class="form-check-label"
                                                                  for="terapeutica_p20_progjus">No</label>
                                                          </div>
                                                      </div>

                                                  </tr>

                                              </tbody>
                                          </table>

                                          <!--  Pregunta -->
                                            <div>
                                                <h5>20.1.-
                                                Total de personas detenidas en flagrancia bajo el influjo,
                                                uso o consumo problemático de sustancias psicoactivas. Desglosar por edad y sexo. </h5>
                                            </div>
                                            <table class="table">
                                                <thead>
                                                    <tr>

                                                        <th>Descripción</th>
                                                        <th> Mujer </th>
                                                        <th>Hombre</th>
                                                        <th>Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Mayor de 18</td>
                                                        <td>
                                                            <div class="input-group">
                                                              <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="terapeutica_p20_1_may18_M"
                                                                    id="terapeutica_p20_1_may18_M"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $terapeutica_p20_1_may18_M; ?>">

                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="terapeutica_p20_1_may18_H"
                                                                    id="terapeutica_p20_1_may18_H"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $terapeutica_p20_1_may18_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                              <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="terapeutica_p20_1_may18_T"
                                                                    id="terapeutica_p20_1_may18_T"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $terapeutica_p20_1_may18_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Menor de 18</td>
                                                        <td>
                                                            <div class="input-group">
                                                              <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="terapeutica_p20_1_men18_M"
                                                                    id="terapeutica_p20_1_men18_M"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $terapeutica_p20_1_men18_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                              <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="terapeutica_p20_1_men18_H"
                                                                    id="terapeutica_p20_1_men18_H"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $terapeutica_p20_1_men18_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                              <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="terapeutica_p20_1_men18_T"
                                                                    id="terapeutica_p20_1_men18_T"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $terapeutica_p20_1_men18_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Total</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="terapeutica_p20_1_total_M"
                                                                    id="terapeutica_p20_1_total_M"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $terapeutica_p20_1_total_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="terapeutica_p20_1_total_H"
                                                                    id="terapeutica_p20_1_total_H"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $terapeutica_p20_1_total_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="terapeutica_p20_1_total_T"
                                                                    id="terapeutica_p20_1_total_T"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $terapeutica_p20_1_total_T; ?>">
                                                            </div>

                                                        </td>
                                                    </tr>
                                            </table>

                                            <!--  Fin  Pregunta  -->

                                            <!--  Pregunta -->
                                              <div>
                                                  <h5>20.2.-
                                                  Total de personas detenidas en flagrancia bajo el influjo,
                                                  uso o consumo problemático de sustancias psicoactivas. Desglosar por sexo y por sustancia utilizada. </h5>
                                              </div>
                                              <table class="table">
                                                  <thead>
                                                      <tr>

                                                          <th>Descripción</th>
                                                          <th> Mujer </th>
                                                          <th>Hombre</th>
                                                          <th>Total</th>
                                                      </tr>
                                                  </thead>
                                                  <tbody>
                                                      <tr>
                                                          <td>1. Cannabis</td>
                                                          <td>
                                                              <div class="input-group">
                                                                  <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                      name="terapeutica_p20_2_can_M"
                                                                      id="terapeutica_p20_2_can_M"
                                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                      value="<?php echo $terapeutica_p20_2_can_M; ?>">
                                                              </div>
                                                          </td>

                                                          <td>
                                                              <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                      name="terapeutica_p20_2_can_H"
                                                                      id="terapeutica_p20_2_can_H"
                                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                      value="<?php echo $terapeutica_p20_2_can_H; ?>">
                                                              </div>
                                                          </td>

                                                          <td>
                                                              <div class="input-group">
                                                                  <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                      name="terapeutica_p20_2_can_T"
                                                                      id="terapeutica_p20_2_can_T"
                                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                      value="<?php echo $terapeutica_p20_2_can_T; ?>">
                                                              </div>

                                                          </td>
                                                      </tr>
                                                      <tr>
                                                          <td>2. Metanfetamina</td>
                                                          <td>
                                                              <div class="input-group">
                                                                  <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                      name="terapeutica_p20_2_men_M"
                                                                      id="terapeutica_p20_2_men_M"
                                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                      value="<?php echo $terapeutica_p20_2_men_M; ?>">
                                                              </div>
                                                          </td>

                                                          <td>
                                                              <div class="input-group">
                                                                  <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                      name="terapeutica_p20_2_men_H"
                                                                      id="terapeutica_p20_2_men_H"
                                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                      value="<?php echo $terapeutica_p20_2_men_H; ?>">
                                                              </div>
                                                          </td>

                                                          <td>
                                                              <div class="input-group">
                                                                  <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                      name="terapeutica_p20_2_men_T"
                                                                      id="terapeutica_p20_2_men_T"
                                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                      value="<?php echo $terapeutica_p20_2_men_T; ?>">
                                                              </div>

                                                          </td>
                                                      </tr>
                                                      <tr>
                                                          <td>3. Fentanil</td>
                                                          <td>
                                                              <div class="input-group">
                                                                  <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                      name="terapeutica_p20_2_fen_M"
                                                                      id="terapeutica_p20_2_fen_M"
                                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                      value="<?php echo $terapeutica_p20_2_fen_M; ?>">
                                                              </div>
                                                          </td>

                                                          <td>
                                                              <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                      name="terapeutica_p20_2_fen_H"
                                                                      id="terapeutica_p20_2_fen_H"
                                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                      value="<?php echo $terapeutica_p20_2_fen_H; ?>">
                                                              </div>
                                                          </td>

                                                          <td>
                                                              <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                      name="terapeutica_p20_2_fen_T"
                                                                      id="terapeutica_p20_2_fen_T"
                                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                      value="<?php echo $terapeutica_p20_2_fen_T; ?>">
                                                              </div>

                                                          </td>
                                                      </tr>
                                                      <tr>
                                                          <td>4. Cocaína</td>
                                                          <td>
                                                              <div class="input-group">
                                                                  <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                      name="terapeutica_p20_2_coc_M"
                                                                      id="terapeutica_p20_2_coc_M"
                                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                      value="<?php echo $terapeutica_p20_2_coc_M; ?>">
                                                              </div>
                                                          </td>

                                                          <td>
                                                              <div class="input-group">
                                                                  <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                      name="terapeutica_p20_2_coc_H"
                                                                      id="terapeutica_p20_2_coc_H"
                                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                      value="<?php echo $terapeutica_p20_2_coc_H; ?>">
                                                              </div>
                                                          </td>

                                                          <td>
                                                              <div class="input-group">
                                                                  <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                      name="terapeutica_p20_2_coc_T"
                                                                      id="terapeutica_p20_2_coc_T"
                                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                      value="<?php echo $terapeutica_p20_2_coc_T; ?>">
                                                              </div>
                                                          </td>
                                                      </tr>
                                                      <tr>
                                                          <td>5. Heroína</td>
                                                          <td>
                                                              <div class="input-group">
                                                                  <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                      name="terapeutica_p20_2_her_M"
                                                                      id="terapeutica_p20_2_her_M"
                                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                      value="<?php echo $terapeutica_p20_2_her_M; ?>">
                                                              </div>
                                                          </td>

                                                          <td>
                                                              <div class="input-group">
                                                                  <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                      name="terapeutica_p20_2_her_H"
                                                                      id="terapeutica_p20_2_her_H"
                                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                      value="<?php echo $terapeutica_p20_2_her_H; ?>">
                                                              </div>
                                                          </td>

                                                          <td>
                                                              <div class="input-group">
                                                                  <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                      name="terapeutica_p20_2_her_T"
                                                                      id="terapeutica_p20_2_her_T"
                                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                      value="<?php echo $terapeutica_p20_2_her_T; ?>">
                                                              </div>

                                                          </td>
                                                      </tr>
                                                      <tr>
                                                          <td>6. Alcohol</td>
                                                          <td>
                                                              <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                      name="terapeutica_p20_2_alc_M"
                                                                      id="terapeutica_p20_2_alc_M"
                                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                      value="<?php echo $terapeutica_p20_2_alc_M; ?>">
                                                              </div>
                                                          </td>

                                                          <td>
                                                              <div class="input-group">
                                                                  <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                      name="terapeutica_p20_2_alc_H"
                                                                      id="terapeutica_p20_2_alc_H"
                                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                      value="<?php echo $terapeutica_p20_2_alc_H; ?>">
                                                              </div>
                                                          </td>

                                                          <td>
                                                              <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                      name="terapeutica_p20_2_alc_T"
                                                                      id="terapeutica_p20_2_alc_T"
                                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                      value="<?php echo $terapeutica_p20_2_alc_T; ?>">
                                                              </div>
                                                          </td>
                                                      </tr>
                                                      <tr>

                                                          <td>7. Otras (¿Cuáles?)
                                                              <div class="input-group">
                                                                  <input type="text" min="0" pattern="^[0-9]+" class="form-control"
                                                                      name="terapeutica_p20_2_otroascual"
                                                                      id="terapeutica_p20_2_otroascual"
                                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                      value="<?php echo $terapeutica_p20_2_otroascual; ?>">
                                                              </div>
                                                          </td>
                                                          <td>
                                                              <div class="input-group">
                                                                  <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                      name="terapeutica_p20_2_otras_M"
                                                                      id="terapeutica_p20_2_otras_M"
                                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                      value="<?php echo $terapeutica_p20_2_otras_M; ?>">
                                                              </div>
                                                          </td>
                                                          <td>
                                                              <div class="input-group">
                                                                  <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                      name="terapeutica_p20_2_otras_H"
                                                                      id="terapeutica_p20_2_otras_H"
                                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                      value="<?php echo $terapeutica_p20_2_otras_H; ?>">
                                                              </div>
                                                          </td>
                                                          <td>
                                                              <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                      name="terapeutica_p20_2_otras_T"
                                                                      id="terapeutica_p20_2_otras_T"
                                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                      value="<?php echo $terapeutica_p20_2_otras_T; ?>">
                                                              </div>
                                                          </td>

                                                      </tr>


                                              </table>





                                        </form>



                                    </div>
                                </div>
                            </div>
                        </div>





                                                <!-- Tab Transparencia -->
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h3 class="panel-title text-center">21.- Observaciones finales</h3>
                                                        <br>
                                                        <div style="text-align: center;">                                                                    Si tiene comentarios, sugerencias o requiere realizar aclaraciones sobre alguna de las preguntas relacionadas al cuestionario, puede incluirlas en esta sección.

                                                      </div>
                                                    </div>
                                                    <br>
                                                    <div class="panel-body">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <form action="#" method="post" class="col-lg-12">


                                                            <textarea   <?php if($estatus != 0) { echo "disabled='true'"; } ?> class="form-control" name="comfin" id="comfin" rows="10" cols="90" ><?php echo $comfin; ?></textarea>
                                                                                  <!--  Fin  Pregunta  -->



                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>














                        <!-- Fin TAB PERSONAS CON DISCAPACIDAD -->

                    </div>



                    <!-- termina las tabs -->
                </div>
            </div>




        </div>

        <!-- termina las tabs -->
    </div>

    </div>
























<script type="text/javascript">


$("#presupuestop3_1_anuaeje20").on({
    "focus": function (event) {
        $(event.target).select();
    },
    "keyup": function (event) {
        $(event.target).val(function (index, value ) {
            return value.replace(/\D/g, "")
                        .replace(/([0-9])([0-9]{2})$/, '$1.$2')
                        .replace(/\B(?=(\d{3})+(?!\d)\.?)/g, ",");
        });
    }
});


$("#presupuestop3_2_anuaeje20").on({
    "focus": function (event) {
        $(event.target).select();
    },
    "keyup": function (event) {
        $(event.target).val(function (index, value ) {
            return value.replace(/\D/g, "")
                        .replace(/([0-9])([0-9]{2})$/, '$1.$2')
                        .replace(/\B(?=(\d{3})+(?!\d)\.?)/g, ",");
        });
    }
});


</script>

<script type="text/javascript">



    // BOTON ADD
$(document).ready(function(){
    var i = 1;

    $('#add').click(function () {
        i++;
        $('#dynamic_field').append('<tr id="row'+i+'">' +
                                    '<td><input type="text" name="mujeres_p4_otro_nombre" id="mujeres_p4_otro_nombre" placeholder="Nombre" class="form-control name_list mujeres_p4_otro_nombre" /></td>' +
                                    '<td><input type="text" name="mujeres_p4_otro_nombre2" id="mujeres_p4_otro_nombre2" placeholder="Nombre" class="form-control name_list mujeres_p4_otro_nombre2" /></td>' +

                                    '<td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td>' +
                                    '</tr>');
    });

    $(document).on('click', '.btn_remove', function () {
        var id = $(this).attr('id');
       $('#row'+ id).remove();
    });

    $('#submit').click(function(){
        $.ajax({
            url:"name.php",
            method:"POST",
            data:$('#add_name').serialize(),
            success:function(data)
            {
                alert(data);
                $('#add_name')[0].reset();
            }
        });
    });
})


</script>


<script type="text/javascript">
function showContent() {
    element = document.getElementById("content");
  mujeres_p4_protoInterna = document.getElementById("mujeres_p4_protoInterna");
    if (mujeres_p4_protoInterna.checked) {
        element.style.display = 'block';
    } else {
        element.style.display = 'none';
    }
}

function showContent2() {
    element = document.getElementById("content2");
    mujeres_p4_interno = document.getElementById("mujeres_p4_interno");
    if (mujeres_p4_interno.checked) {
        element.style.display = 'block';
    } else {
        element.style.display = 'none';
    }
}


function showContent3() {
    element = document.getElementById("content3");
    otraMateria = document.getElementById("otraMateria");
    if (otraMateria.checked) {
        element.style.display = 'block';
    } else {
        element.style.display = 'none';
    }
}


function showContent400() {
    element = document.getElementById("content400");
    mujeres_p4_otroProtocolo = document.getElementById("mujeres_p4_otroProtocolo");
    if (mujeres_p4_otroProtocolo.checked) {
        element.style.display = 'block';
    } else {
        element.style.display = 'none';
    }
}


function showContent04() {
    element = document.getElementById("content04");
    capacitacion_p2_2_otro = document.getElementById("capacitacion_p2_2_otro");
    if (capacitacion_p2_2_otro.checked) {
        element.style.display = 'block';
    } else {
        element.style.display = 'none';
    }
}


function showContent5() {
    element = document.getElementById("content5");
    denunciaservp14 = document.getElementById("denunciaservp14");
    if (denunciaservp14.checked) {
        element.style.display = 'block';
    } else {
        element.style.display = 'none';
    }
}



function showContent65() {
    element = document.getElementById("content65");
    denunciaserv_p14_den = document.getElementById("denunciaserv_p14_den");
    if (denunciaserv_p14_den.checked) {
        element.style.display = 'block';
    } else {
        element.style.display = 'none';
    }
}


function showContent652() {
    element = document.getElementById("content652");
    denunciaserv_p142_den = document.getElementById("denunciaserv_p142_den");
    if (denunciaserv_p142_den.checked) {
        element.style.display = 'block';
    } else {
        element.style.display = 'none';
    }
}

function showContent99() {
    element = document.getElementById("content99");
    nna_p5_otroProtocolo = document.getElementById("nna_p5_otroProtocolo");
    if (nna_p5_otroProtocolo.checked) {
        element.style.display = 'block';
    } else {
        element.style.display = 'none';
    }
}


function showContent100() {
    element = document.getElementById("content100");
    indigenas_p6_4_ProtoInter = document.getElementById("indigenas_p6_4_ProtoInter");
    if (indigenas_p6_4_ProtoInter.checked) {
        element.style.display = 'block';
    } else {
        element.style.display = 'none';
    }
}


function showContent101() {
    element = document.getElementById("content101");
    indigenas_p6_4_interno = document.getElementById("indigenas_p6_4_interno");
    if (indigenas_p6_4_interno.checked) {
        element.style.display = 'block';
    } else {
        element.style.display = 'none';
    }
}



function showContent1001() {
    element = document.getElementById("content1001");
    registro_p10_1_otros = document.getElementById("registro_p10_1_otros");
    if (registro_p10_1_otros.checked) {
        element.style.display = 'block';
    } else {
        element.style.display = 'none';
    }
}




function showContent1002() {
    element = document.getElementById("content1002");
    registro_p10_2_otro = document.getElementById("registro_p10_2_otro");
    if (registro_p10_2_otro.checked) {
        element.style.display = 'block';
    } else {
        element.style.display = 'none';
    }
}


function showContent1004() {
    element = document.getElementById("content1004");
    registro_p10_4_otro = document.getElementById("registro_p10_4_otro");
    if (registro_p10_4_otro.checked) {
        element.style.display = 'block';
    } else {
        element.style.display = 'none';
    }
}






function showContent102() {
    element = document.getElementById("content102");
    indigenas_p6_4_otro = document.getElementById("indigenas_p6_4_otro");
    if (indigenas_p6_4_otro.checked) {
        element.style.display = 'block';
    } else {
        element.style.display = 'none';
    }
}



function showContent104() {
    element = document.getElementById("content104");
    extranjeras_p7_4_Otro = document.getElementById("extranjeras_p7_4_Otro");
    if (extranjeras_p7_4_Otro.checked) {
        element.style.display = 'block';
    } else {
        element.style.display = 'none';
    }
}




function showContent11() {
    element = document.getElementById("content11");
    nna_p5_protoInterna = document.getElementById("nna_p5_protoInterna");
    if (nna_p5_protoInterna.checked) {
        element.style.display = 'block';
    } else {
        element.style.display = 'none';
    }
}


function showContent22() {
    element = document.getElementById("content22");
    nna_p5_interno = document.getElementById("nna_p5_interno");
    if (nna_p5_interno.checked) {
        element.style.display = 'block';
    } else {
        element.style.display = 'none';
    }
}


function showContent107() {
    element = document.getElementById("content107");
    discapacidad_p8_2_otros = document.getElementById("discapacidad_p8_2_otros");
    if (discapacidad_p8_2_otros.checked) {
        element.style.display = 'block';
    } else {
        element.style.display = 'none';
    }
}


function showContent1010() {
    element = document.getElementById("content1010");
    extranjeras_p7_4_ProtoInterna = document.getElementById("extranjeras_p7_4_ProtoInterna");
    if (extranjeras_p7_4_ProtoInterna.checked) {
        element.style.display = 'block';
    } else {
        element.style.display = 'none';
    }
}

function showContent1014() {
    element = document.getElementById("content1014");
    necesidades_p13_otros = document.getElementById("necesidades_p13_otros");
    if (necesidades_p13_otros.checked) {
        element.style.display = 'block';
    } else {
        element.style.display = 'none';
    }
}

function showContent153() {
    element = document.getElementById("content153");
    necesidades_p15_3_otros = document.getElementById("necesidades_p15_3_otros");
    if (necesidades_p15_3_otros.checked) {
        element.style.display = 'block';
    } else {
        element.style.display = 'none';
    }
}


function showContent1533() {
    element = document.getElementById("content1533");
    necesidades_p18_1_otros = document.getElementById("necesidades_p18_1_otros");
    if (necesidades_p18_1_otros.checked) {
        element.style.display = 'block';
    } else {
        element.style.display = 'none';
    }
}



function showContent92() {
    element = document.getElementById("content92");
    colaboracion_p9_2_otros = document.getElementById("colaboracion_p9_2_otros");
    if (colaboracion_p9_2_otros.checked) {
        element.style.display = 'block';
    } else {
        element.style.display = 'none';
    }
}


function showContent10() {
    element = document.getElementById("content10");
    registro_p10_otro = document.getElementById("registro_p10_otro");
    if (registro_p10_otro.checked) {
        element.style.display = 'block';
    } else {
        element.style.display = 'none';
    }
}

function showContent1020() {
    element = document.getElementById("content1020");
    discapacidad_p8_2_ProtoInterna = document.getElementById("discapacidad_p8_2_ProtoInterna");
    if (discapacidad_p8_2_ProtoInterna.checked) {
        element.style.display = 'block';
    } else {
        element.style.display = 'none';
    }
}

function showContent1021() {
    element = document.getElementById("content1021");
    discapacidad_p8_2_interno = document.getElementById("discapacidad_p8_2_interno");
    if (discapacidad_p8_2_interno.checked) {
        element.style.display = 'block';
    } else {
        element.style.display = 'none';
    }
}


function showContent103() {
    element = document.getElementById("content103");
    extranjeras_p7_4_interno = document.getElementById("extranjeras_p7_4_interno");
    if (extranjeras_p7_4_interno.checked) {
        element.style.display = 'block';
    } else {
        element.style.display = 'none';
    }
}
</script>






<script type="text/javascript">
/*=============================================
GUARDAR FORMULARIO tab 1
=============================================*/
$(".panel-body").on("click", ".crearTab1", function() {




    //MANDAMOS LOS DATOS A GUARDAR
    var idFormulario = $("#idFormulario").val();
    var uuid = $("#UUID").val();
    var operador = $("#operador").val();
    var pcontacto = $("#pcontacto").val();
    var area = $("#area").val();
    var cargo = $("#cargo").val();
    var mail = $("#mail").val();
    var telofi = $("#telofi").val();
    var ext = $("#ext").val();
    var telextra = $("#telextra").val();
    var pcontacto2 = $("#pcontacto2").val();
    var area2 = $("#area2").val();
    var cargo2 = $("#cargo2").val();
    var mail2 = $("#mail2").val();
    var telofi2 = $("#telofi2").val();
    var ext2 = $("#ext2").val();
    var telextra2 = $("#telextra2").val();





    var datos = new FormData();
    datos.append("idFormulario", idFormulario);
    datos.append("uuid", uuid);
    datos.append("operador", operador);
    datos.append("pcontacto", pcontacto);
    datos.append("area", area);
    datos.append("cargo", cargo);
    datos.append("mail", mail);
    datos.append("telofi", telofi);
    datos.append("ext", ext);
    datos.append("telextra", telextra);
    datos.append("pcontacto2", pcontacto2);
    datos.append("area2", area2);
    datos.append("cargo2", cargo2);
    datos.append("mail2", mail2);
    datos.append("telofi2", telofi2);
    datos.append("ext2", ext2);
    datos.append("telextra2", telextra2);




    datos.append("tab1", "tab1");



    $.ajax({

            url: "controladores/policias.controlador.php",
            method: "POST",
            data: datos,
            cache: false,
            contentType: false,
            processData: false,
            //dataType:"json",
            success: function(respuesta) {

                console.log(respuesta);
                //  if (respuesta.match(/correctamente.*/)){
                if (1 == 1) {

                    console.log(respuesta);
                    if (respuesta > 0) {
                        $("#idFormulario").val(respuesta);
                    }


                    swal({
                        type: "success",
                        title: respuesta,
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"
                    }).then(function(result) {
                        if (result.value) {

                            //window.location = "index.php?ruta=ventas&cliente="+seleccionarCliente;

                        }
                    })

                } else {
                    swal({
                        type: "success",
                        title: respuesta,
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"
                    }).then(function(result) {
                        if (result.value) {

                            //  window.location = "ventas";

                        }
                    })


                }

            }

        }

    )





})






$(".panel-body").on("click", ".crearTab2", function() {

    //MANDAMOS LOS DATOS A GUARDAR


    var idFormulario = $("#idFormulario").val();
    var uuid = $("#UUID").val();



  var personal_p1_totalp_M = $("#personal_p1_totalp_M").val();
  var personal_p1_totalp_H = $("#personal_p1_totalp_H").val();
  var personal_p1_totalp_T = $("#personal_p1_totalp_T").val();

    var personal_p1_invyanali_M = $("#personal_p1_invyanali_M").val();
    var personal_p1_invyanali_H = $("#personal_p1_invyanali_H").val();
    var personal_p1_invyanali_T = $("#personal_p1_invyanali_T").val();
    var personal_p1_inte_M = $("#personal_p1_inte_M").val();
    var personal_p1_inte_H = $("#personal_p1_inte_H").val();
    var personal_p1_inte_T = $("#personal_p1_inte_T").val();
    var personal_p1_reacc_M = $("#personal_p1_reacc_M").val();
    var personal_p1_reacc_H = $("#personal_p1_reacc_H").val();
    var personal_p1_reacc_T = $("#personal_p1_reacc_T").val();
    var personal_p1_proce_M = $("#personal_p1_proce_M").val();
    var personal_p1_proce_H = $("#personal_p1_proce_H").val();
    var personal_p1_proce_T = $("#personal_p1_proce_T").val();
    var personal_p1_segycuspen_M = $("#personal_p1_segycuspen_M").val();
    var personal_p1_segycuspen_H = $("#personal_p1_segycuspen_H").val();
    var personal_p1_segycuspen_T = $("#personal_p1_segycuspen_T").val();
    var personal_p1_preven_M = $("#personal_p1_preven_M").val();
    var personal_p1_preven_H = $("#personal_p1_preven_H").val();
    var personal_p1_preven_T = $("#personal_p1_preven_T").val();
    var personal_p1_prirespon_M = $("#personal_p1_prirespon_M").val();
    var personal_p1_prirespon_H = $("#personal_p1_prirespon_H").val();
    var personal_p1_prirespon_T = $("#personal_p1_prirespon_T").val();

    var personal_p1_total_M = $("#personal_p1_total_M").val();
    var personal_p1_total_H = $("#personal_p1_total_H").val();
    var personal_p1_total_T = $("#personal_p1_total_T").val();





    var personal_p1_otros = $("#personal_p1_otros").val();
    var personal_p1_otros_M = $("#personal_p1_otros_M").val();
    var personal_p1_otros_H = $("#personal_p1_otros_H").val();
    var personal_p1_otros_T = $("#personal_p1_otros_T").val();
    var personal_p1_siningre_M = $("#personal_p1_siningre_M").val();
    var personal_p1_siningre_H = $("#personal_p1_siningre_H").val();
    var personal_p1_siningre_T = $("#personal_p1_siningre_T").val();
    var personal_p1_de1a5000_M = $("#personal_p1_de1a5000_M").val();
    var personal_p1_de1a5000_H = $("#personal_p1_de1a5000_H").val();
    var personal_p1_de1a5000_T = $("#personal_p1_de1a5000_T").val();
    var personal_p1_de5001a10000_M = $("#personal_p1_de5001a10000_M").val();
    var personal_p1_de5001a10000_H = $("#personal_p1_de5001a10000_H").val();
    var personal_p1_de5001a10000_T = $("#personal_p1_de5001a10000_T").val();
    var personal_p1_de10001a15000_M = $("#personal_p1_de10001a15000_M").val();
    var personal_p1_de10001a15000_H = $("#personal_p1_de10001a15000_H").val();
    var personal_p1_de10001a15000_T = $("#personal_p1_de10001a15000_T").val();
    var personal_p1_de15001a20000_M = $("#personal_p1_de15001a20000_M").val();
    var personal_p1_de15001a20000_H = $("#personal_p1_de15001a20000_H").val();
    var personal_p1_de15001a20000_T = $("#personal_p1_de15001a20000_T").val();
    var personal_p1_de20001a25000_M = $("#personal_p1_de20001a25000_M").val();
    var personal_p1_de20001a25000_H = $("#personal_p1_de20001a25000_H").val();
    var personal_p1_de20001a25000_T = $("#personal_p1_de20001a25000_T").val();
    var personal_p1_de25001a30000_M = $("#personal_p1_de25001a30000_M").val();
    var personal_p1_de25001a30000_H = $("#personal_p1_de25001a30000_H").val();
    var personal_p1_de25001a30000_T = $("#personal_p1_de25001a30000_T").val();
    var personal_p1_de30001a35000_M = $("#personal_p1_de30001a35000_M").val();
    var personal_p1_de30001a35000_H = $("#personal_p1_de30001a35000_H").val();
    var personal_p1_de30001a35000_T = $("#personal_p1_de30001a35000_T").val();
    var personal_p1_de35001a40000_M = $("#personal_p1_de35001a40000_M").val();
    var personal_p1_de35001a40000_H = $("#personal_p1_de35001a40000_H").val();
    var personal_p1_de35001a40000_T = $("#personal_p1_de35001a40000_T").val();
    var personal_p1_de40001a45000_M = $("#personal_p1_de40001a45000_M").val();
    var personal_p1_de40001a45000_H = $("#personal_p1_de40001a45000_H").val();
    var personal_p1_de40001a45000_T = $("#personal_p1_de40001a45000_T").val();
    var personal_p1_de45001a50000_M = $("#personal_p1_de45001a50000_M").val();
    var personal_p1_de45001a50000_H = $("#personal_p1_de45001a50000_H").val();
    var personal_p1_de45001a50000_T = $("#personal_p1_de45001a50000_T").val();
    var personal_p1_de50001a55000_M = $("#personal_p1_de50001a55000_M").val();
    var personal_p1_de50001a55000_H = $("#personal_p1_de50001a55000_H").val();
    var personal_p1_de50001a55000_T = $("#personal_p1_de50001a55000_T").val();
    var personal_p1_55001a60000_M = $("#personal_p1_55001a60000_M").val();
    var personal_p1_55001a60000_H = $("#personal_p1_55001a60000_H").val();
    var personal_p1_55001a60000_T = $("#personal_p1_55001a60000_T").val();
    var personal_p1_60001a65000_M = $("#personal_p1_60001a65000_M").val();
    var personal_p1_60001a65000_H = $("#personal_p1_60001a65000_H").val();
    var personal_p1_60001a65000_T = $("#personal_p1_60001a65000_T").val();
    var personal_p1_65001a70000_M = $("#personal_p1_65001a70000_M").val();
    var personal_p1_65001a70000_H = $("#personal_p1_65001a70000_H").val();
    var personal_p1_65001a70000_T = $("#personal_p1_65001a70000_T").val();
    var personal_p1_masde70000_M = $("#personal_p1_masde70000_M").val();
    var personal_p1_masde70000_H = $("#personal_p1_masde70000_H").val();
    var personal_p1_masde70000_T = $("#personal_p1_masde70000_T").val();

    var personal_p1_masde50000_M = $("#personal_p1_masde50000_M").val();
    var personal_p1_masde50000_H = $("#personal_p1_masde50000_H").val();
    var personal_p1_masde50000_T = $("#personal_p1_masde50000_T").val();



    var personal_p1_2_ning_M = $("#personal_p1_2_ning_M").val();
    var personal_p1_2_ning_H = $("#personal_p1_2_ning_H").val();
    var personal_p1_2_ning_T = $("#personal_p1_2_ning_T").val();
    var personal_p1_2_prees_M = $("#personal_p1_2_prees_M").val();
    var personal_p1_2_prees_H = $("#personal_p1_2_prees_H").val();
    var personal_p1_2_prees_T = $("#personal_p1_2_prees_T").val();
    var personal_p1_2_prim_M = $("#personal_p1_2_prim_M").val();
    var personal_p1_2_prim_H = $("#personal_p1_2_prim_H").val();
    var personal_p1_2_prim_T = $("#personal_p1_2_prim_T").val();
    var personal_p1_2_secu_M = $("#personal_p1_2_secu_M").val();
    var personal_p1_2_secu_H = $("#personal_p1_2_secu_H").val();
    var personal_p1_2_secu_T = $("#personal_p1_2_secu_T").val();
    var personal_p1_2_ctsect_M = $("#personal_p1_2_ctsect_M").val();
    var personal_p1_2_ctsect_H = $("#personal_p1_2_ctsect_H").val();
    var personal_p1_2_ctsect_T = $("#personal_p1_2_ctsect_T").val();
    var personal_p1_2_nbasica_M = $("#personal_p1_2_nbasica_M").val();
    var personal_p1_2_nbasica_H = $("#personal_p1_2_nbasica_H").val();
    var personal_p1_2_nbasica_T = $("#personal_p1_2_nbasica_T").val();
    var personal_p1_2_preobach_M = $("#personal_p1_2_preobach_M").val();
    var personal_p1_2_preobach_H = $("#personal_p1_2_preobach_H").val();
    var personal_p1_2_preobach_T = $("#personal_p1_2_preobach_T").val();
    var personal_p1_2_ctcpret_M = $("#personal_p1_2_ctcpret_M").val();
    var personal_p1_2_ctcpret_H = $("#personal_p1_2_ctcpret_H").val();
    var personal_p1_2_ctcpret_T = $("#personal_p1_2_ctcpret_T").val();
    var personal_p1_2_licoprof_M = $("#personal_p1_2_licoprof_M").val();
    var personal_p1_2_licoprof_H = $("#personal_p1_2_licoprof_H").val();
    var personal_p1_2_licoprof_T = $("#personal_p1_2_licoprof_T").val();
    var personal_p1_2_maesdoc_M = $("#personal_p1_2_maesdoc_M").val();
    var personal_p1_2_maesdoc_H = $("#personal_p1_2_maesdoc_H").val();
    var personal_p1_2_maesdoc_T = $("#personal_p1_2_maesdoc_T").val();
    var personal_p1_2_total_M = $("#personal_p1_2_total_M").val();
    var personal_p1_2_total_H = $("#personal_p1_2_total_H").val();
    var personal_p1_2_total_T = $("#personal_p1_2_total_T").val();





    if ($("#personal_p1_2_nosesabe").is(":checked")) {
        var personal_p1_2_nosesabe = "checked";
    } else {
        var personal_p1_2_nosesabe = "unchecked";
    }

    if ($("#personal_p1_3_nosesabe").is(":checked")) {
        var personal_p1_3_nosesabe = "checked";
    } else {
        var personal_p1_3_nosesabe = "unchecked";
    }



    if ($("#capacitacion_p2s").is(":checked")) {
        var capacitacion_p2s = "Sí";
    } else {
        var capacitacion_p2s = "No";
    }




    if ($("#capacitacion_p2").is(":checked")) {
        var capacitacion_p2 = "Sí";
    } else {
        var capacitacion_p2 = "No";
    }



    var capacitacion_p2_1_nom = $("#capacitacion_p2_1_nom").val();


    if ($("#capacitacion_p2_2_aul").is(":checked")) {
        var capacitacion_p2_2_aul = "Aulas suficientes";
    } else {
        var capacitacion_p2_2_aul = "";
    }


    if ($("#capacitacion_p2_2_comp").is(":checked")) {
        var capacitacion_p2_2_comp = "Aula de cómputo";
    } else {
        var capacitacion_p2_2_comp = "";
    }




    if ($("#capacitacion_p2_2_juor").is(":checked")) {
        var capacitacion_p2_2_juor = "Sala de juicios orales";
    } else {
        var capacitacion_p2_2_juor = "";
    }

    if ($("#capacitacion_p2_2_come").is(":checked")) {
        var capacitacion_p2_2_come = "Comedor";
    } else {
        var capacitacion_p2_2_come = "";
    }


    if ($("#capacitacion_p2_2_coci").is(":checked")) {
        var capacitacion_p2_2_coci = "Cocina";
    } else {
        var capacitacion_p2_2_coci = "";
    }



    if ($("#capacitacion_p2_2_dorm").is(":checked")) {
        var capacitacion_p2_2_dorm = "Dormitorios";
    } else {
        var capacitacion_p2_2_dorm = "";
    }



    if ($("#capacitacion_p2_2_pruf").is(":checked")) {
        var capacitacion_p2_2_pruf = "Pista de prueba física";
    } else {
        var capacitacion_p2_2_pruf = "";
    }


    if ($("#capacitacion_p2_2_auvis").is(":checked")) {
        var capacitacion_p2_2_auvis = "Sala con equipo audiovisual";
    } else {
        var capacitacion_p2_2_auvis = "";
    }

    if ($("#capacitacion_p2_2_medi").is(":checked")) {
        var capacitacion_p2_2_medi = "Servicio médico";
    } else {
        var capacitacion_p2_2_medi = "";
    }


    if ($("#capacitacion_p2_2_tirof").is(":checked")) {
        var capacitacion_p2_2_tirof = "Stand de tiro físico";
    } else {
        var capacitacion_p2_2_tirof = "";
    }


    if ($("#capacitacion_p2_2_tirov").is(":checked")) {
        var capacitacion_p2_2_tirov = "Stand de tiro virtual";
    } else {
        var capacitacion_p2_2_tirov = "";
    }


    if ($("#capacitacion_p2_2_entre").is(":checked")) {
        var capacitacion_p2_2_entre = "Área de entrenamiento";
    } else {
        var capacitacion_p2_2_entre = "";
    }




    if ($("#capacitacion_p2_2_vehi").is(":checked")) {
        var capacitacion_p2_2_vehi = "Explanada o pista de práctica vehicular";
    } else {
        var capacitacion_p2_2_vehi = "";
    }



    if ($("#capacitacion_p2_2_unif").is(":checked")) {
        var capacitacion_p2_2_unif = "Equipo o uniformes policiacos";
    } else {
        var capacitacion_p2_2_unif = "";
    }

    if ($("#capacitacion_p2_2_otro").is(":checked")) {
        var capacitacion_p2_2_otro = "Otro";
    } else {
        var capacitacion_p2_2_otro = "";
    }
    var capacitacion_p2_2_otro_cual = $("#capacitacion_p2_2_otro_cual").val();



    var capacitacion_p2_3_invyanali_M = $("#capacitacion_p2_3_invyanali_M").val();
    var capacitacion_p2_3_invyanali_H = $("#capacitacion_p2_3_invyanali_H").val();
    var capacitacion_p2_3_invyanali_T = $("#capacitacion_p2_3_invyanali_T").val();
    var capacitacion_p2_3_inte_M = $("#capacitacion_p2_3_inte_M").val();
    var capacitacion_p2_3_inte_H = $("#capacitacion_p2_3_inte_H").val();
    var capacitacion_p2_3_inte_T = $("#capacitacion_p2_3_inte_T").val();
    var capacitacion_p2_3_reacc_M = $("#capacitacion_p2_3_reacc_M").val();
    var capacitacion_p2_3_reacc_H = $("#capacitacion_p2_3_reacc_H").val();
    var capacitacion_p2_3_reacc_T = $("#capacitacion_p2_3_reacc_T").val();
    var capacitacion_p2_3_proce_M = $("#capacitacion_p2_3_proce_M").val();
    var capacitacion_p2_3_proce_H = $("#capacitacion_p2_3_proce_H").val();
    var capacitacion_p2_3_proce_T = $("#capacitacion_p2_3_proce_T").val();
    var capacitacion_p2_3_segycuspen_M = $("#capacitacion_p2_3_segycuspen_M").val();
    var capacitacion_p2_3_segycuspen_H = $("#capacitacion_p2_3_segycuspen_H").val();
    var capacitacion_p2_3_segycuspen_T = $("#capacitacion_p2_3_segycuspen_T").val();
    var capacitacion_p2_3_preven_M = $("#capacitacion_p2_3_preven_M").val();
    var capacitacion_p2_3_preven_H = $("#capacitacion_p2_3_preven_H").val();
    var capacitacion_p2_3_preven_T = $("#capacitacion_p2_3_preven_T").val();
    var capacitacion_p2_3_prirespon_M = $("#capacitacion_p2_3_prirespon_M").val();
    var capacitacion_p2_3_prirespon_H = $("#capacitacion_p2_3_prirespon_H").val();
    var capacitacion_p2_3_prirespon_T = $("#capacitacion_p2_3_prirespon_T").val();
    var capacitacion_p2_3_otros = $("#capacitacion_p2_3_otros").val();
    var capacitacion_p2_3_otros_M = $("#capacitacion_p2_3_otros_M").val();
    var capacitacion_p2_3_otros_H = $("#capacitacion_p2_3_otros_H").val();
    var capacitacion_p2_3_otros_T = $("#capacitacion_p2_3_otros_T").val();


    if ($("#capacitacion_p2_3_nosabe").is(":checked")) {
        var capacitacion_p2_3_nosabe= "checked";
    } else {
        var capacitacion_p2_3_nosabe= "unchecked";
    }


    var capacitacion_p2_4_majudlacpo_M = $("#capacitacion_p2_4_majudlacpo_M").val();
    var capacitacion_p2_4_majudlacpo_H = $("#capacitacion_p2_4_majudlacpo_H").val();
    var capacitacion_p2_4_majudlacpo_T = $("#capacitacion_p2_4_majudlacpo_T").val();
    var capacitacion_p2_4_prdedeypaci_M = $("#capacitacion_p2_4_prdedeypaci_M").val();
    var capacitacion_p2_4_prdedeypaci_H = $("#capacitacion_p2_4_prdedeypaci_H").val();
    var capacitacion_p2_4_prdedeypaci_T = $("#capacitacion_p2_4_prdedeypaci_T").val();
    var capacitacion_p2_4_dehuygain_M = $("#capacitacion_p2_4_dehuygain_M").val();
    var capacitacion_p2_4_dehuygain_H = $("#capacitacion_p2_4_dehuygain_H").val();
    var capacitacion_p2_4_dehuygain_T = $("#capacitacion_p2_4_dehuygain_T").val();
    var capacitacion_p2_4_realsipejupeac_M = $("#capacitacion_p2_4_realsipejupeac_M").val();
    var capacitacion_p2_4_realsipejupeac_H = $("#capacitacion_p2_4_realsipejupeac_H").val();
    var capacitacion_p2_4_realsipejupeac_T = $("#capacitacion_p2_4_realsipejupeac_T").val();
    var capacitacion_p2_4_prdeludeloheodeha_M = $("#capacitacion_p2_4_prdeludeloheodeha_M").val();
    var capacitacion_p2_4_prdeludeloheodeha_H = $("#capacitacion_p2_4_prdeludeloheodeha_H").val();
    var capacitacion_p2_4_prdeludeloheodeha_T = $("#capacitacion_p2_4_prdeludeloheodeha_T").val();
    var capacitacion_p2_4_idldlhodhymdeeoddp_M = $("#capacitacion_p2_4_idldlhodhymdeeoddp_M").val();
    var capacitacion_p2_4_idldlhodhymdeeoddp_H = $("#capacitacion_p2_4_idldlhodhymdeeoddp_H").val();
    var capacitacion_p2_4_idldlhodhymdeeoddp_T = $("#capacitacion_p2_4_idldlhodhymdeeoddp_T").val();
    var capacitacion_p2_4_cadecu_M = $("#capacitacion_p2_4_cadecu_M").val();
    var capacitacion_p2_4_cadecu_H = $("#capacitacion_p2_4_cadecu_H").val();
    var capacitacion_p2_4_cadecu_T = $("#capacitacion_p2_4_cadecu_T").val();
    var capacitacion_p2_4_enates_M = $("#capacitacion_p2_4_enates_M").val();
    var capacitacion_p2_4_enates_H = $("#capacitacion_p2_4_enates_H").val();
    var capacitacion_p2_4_enates_T = $("#capacitacion_p2_4_enates_T").val();
    var capacitacion_p2_4_usledelafu_M = $("#capacitacion_p2_4_usledelafu_M").val();
    var capacitacion_p2_4_usledelafu_H = $("#capacitacion_p2_4_usledelafu_H").val();
    var capacitacion_p2_4_usledelafu_T = $("#capacitacion_p2_4_usledelafu_T").val();
    var capacitacion_p2_4_inves_M = $("#capacitacion_p2_4_inves_M").val();
    var capacitacion_p2_4_inves_H = $("#capacitacion_p2_4_inves_H").val();
    var capacitacion_p2_4_inves_T = $("#capacitacion_p2_4_inves_T").val();
    var capacitacion_p2_4_prres_M = $("#capacitacion_p2_4_prres_M").val();
    var capacitacion_p2_4_prres_H = $("#capacitacion_p2_4_prres_H").val();
    var capacitacion_p2_4_prres_T = $("#capacitacion_p2_4_prres_T").val();
    var capacitacion_p2_4_inpoho_M = $("#capacitacion_p2_4_inpoho_M").val();
    var capacitacion_p2_4_inpoho_H = $("#capacitacion_p2_4_inpoho_H").val();
    var capacitacion_p2_4_inpoho_T = $("#capacitacion_p2_4_inpoho_T").val();
    var capacitacion_p2_4_especia_M = $("#capacitacion_p2_4_especia_M").val();
    var capacitacion_p2_4_especia_H = $("#capacitacion_p2_4_especia_H").val();
    var capacitacion_p2_4_especia_T = $("#capacitacion_p2_4_especia_T").val();
    var capacitacion_p2_4_actualiza_M = $("#capacitacion_p2_4_actualiza_M").val();
    var capacitacion_p2_4_actualiza_H = $("#capacitacion_p2_4_actualiza_H").val();
    var capacitacion_p2_4_actualiza_T = $("#capacitacion_p2_4_actualiza_T").val();
    var capacitacion_p2_4_sidejupeacu_M = $("#capacitacion_p2_4_sidejupeacu_M").val();
    var capacitacion_p2_4_sidejupeacu_H = $("#capacitacion_p2_4_sidejupeacu_H").val();
    var capacitacion_p2_4_sidejupeacu_T = $("#capacitacion_p2_4_sidejupeacu_T").val();
    var capacitacion_p2_4_depro_M = $("#capacitacion_p2_4_depro_M").val();
    var capacitacion_p2_4_depro_H = $("#capacitacion_p2_4_depro_H").val();
    var capacitacion_p2_4_depro_T = $("#capacitacion_p2_4_depro_T").val();
    var capacitacion_p2_4_femeni_M = $("#capacitacion_p2_4_femeni_M").val();
    var capacitacion_p2_4_femeni_H = $("#capacitacion_p2_4_femeni_H").val();
    var capacitacion_p2_4_femeni_T = $("#capacitacion_p2_4_femeni_T").val();
    var capacitacion_p2_4_antrdepe_M = $("#capacitacion_p2_4_antrdepe_M").val();
    var capacitacion_p2_4_antrdepe_H = $("#capacitacion_p2_4_antrdepe_H").val();
    var capacitacion_p2_4_antrdepe_T = $("#capacitacion_p2_4_antrdepe_T").val();
    var capacitacion_p2_4_vicolamu_M = $("#capacitacion_p2_4_vicolamu_M").val();
    var capacitacion_p2_4_vicolamu_H = $("#capacitacion_p2_4_vicolamu_H").val();
    var capacitacion_p2_4_vicolamu_T = $("#capacitacion_p2_4_vicolamu_T").val();
    var capacitacion_p2_4_predege_M = $("#capacitacion_p2_4_predege_M").val();
    var capacitacion_p2_4_predege_H = $("#capacitacion_p2_4_predege_H").val();
    var capacitacion_p2_4_predege_T = $("#capacitacion_p2_4_predege_T").val();
    var capacitacion_p2_4_ascoydedeex_M = $("#capacitacion_p2_4_ascoydedeex_M").val();
    var capacitacion_p2_4_ascoydedeex_H = $("#capacitacion_p2_4_ascoydedeex_H").val();
    var capacitacion_p2_4_ascoydedeex_T = $("#capacitacion_p2_4_ascoydedeex_T").val();
    var capacitacion_p2_4_siindejupepaad_M = $("#capacitacion_p2_4_siindejupepaad_M").val();
    var capacitacion_p2_4_siindejupepaad_H = $("#capacitacion_p2_4_siindejupepaad_H").val();
    var capacitacion_p2_4_siindejupepaad_T = $("#capacitacion_p2_4_siindejupepaad_T").val();
    var capacitacion_p2_4_ataperin_M = $("#capacitacion_p2_4_ataperin_M").val();
    var capacitacion_p2_4_ataperin_H = $("#capacitacion_p2_4_ataperin_H").val();
    var capacitacion_p2_4_ataperin_T = $("#capacitacion_p2_4_ataperin_T").val();
    var capacitacion_p2_4_atapercondis_M = $("#capacitacion_p2_4_atapercondis_M").val();
    var capacitacion_p2_4_atapercondis_H = $("#capacitacion_p2_4_atapercondis_H").val();
    var capacitacion_p2_4_atapercondis_T = $("#capacitacion_p2_4_atapercondis_T").val();
    var capacitacion_p2_4_jusalt_M = $("#capacitacion_p2_4_jusalt_M").val();
    var capacitacion_p2_4_jusalt_H = $("#capacitacion_p2_4_jusalt_H").val();
    var capacitacion_p2_4_jusalt_T = $("#capacitacion_p2_4_jusalt_T").val();
    var capacitacion_p2_4_justera_M = $("#capacitacion_p2_4_justera_M").val();
    var capacitacion_p2_4_justera_H = $("#capacitacion_p2_4_justera_H").val();
    var capacitacion_p2_4_justera_T = $("#capacitacion_p2_4_justera_T").val();
    var capacitacion_p2_4_justransi_M = $("#capacitacion_p2_4_justransi_M").val();
    var capacitacion_p2_4_justransi_H = $("#capacitacion_p2_4_justransi_H").val();
    var capacitacion_p2_4_justransi_T = $("#capacitacion_p2_4_justransi_T").val();
    var capacitacion_p2_4_atemuj_M = $("#capacitacion_p2_4_atemuj_M").val();
    var capacitacion_p2_4_atemuj_H = $("#capacitacion_p2_4_atemuj_H").val();
    var capacitacion_p2_4_atemuj_T = $("#capacitacion_p2_4_atemuj_T").val();

    var capacitacion_p2_4_otros = $("#capacitacion_p2_4_otros").val();
    var capacitacion_p2_4_otros_M = $("#capacitacion_p2_4_otros_M").val();
    var capacitacion_p2_4_otros_H = $("#capacitacion_p2_4_otros_H").val();
    var capacitacion_p2_4_otros_T = $("#capacitacion_p2_4_otros_T").val();

    var capacitacion_p2_5_instuprga = $("#capacitacion_p2_5_instuprga").val();

    var capacitacion_p2_6_evconconf_M = $("#capacitacion_p2_6_evconconf_M").val();
    var capacitacion_p2_6_evconconf_H = $("#capacitacion_p2_6_evconconf_H").val();
    var capacitacion_p2_6_evconconf_T = $("#capacitacion_p2_6_evconconf_T").val();


    if ($("#presupuesto_p3").is(":checked")) {
        var presupuesto_p3 = "Sí";
    } else {
        var presupuesto_p3 = "No";
    }

    var presupuestop3_1_anuaeje20 = $("#presupuestop3_1_anuaeje20").val();

    var presupuestop3_2_anuaeje20 = $("#presupuestop3_2_anuaeje20").val()






    var datos = new FormData();
    datos.append("idFormulario", idFormulario);
    datos.append("uuid", uuid);

    datos.append("personal_p1_totalp_M", personal_p1_totalp_M);
  datos.append("personal_p1_totalp_H", personal_p1_totalp_H);
  datos.append("personal_p1_totalp_T", personal_p1_totalp_T);

    datos.append("personal_p1_invyanali_M", personal_p1_invyanali_M);
    datos.append("personal_p1_invyanali_H", personal_p1_invyanali_H);
    datos.append("personal_p1_invyanali_T", personal_p1_invyanali_T);
    datos.append("personal_p1_inte_M", personal_p1_inte_M);
    datos.append("personal_p1_inte_H", personal_p1_inte_H);
    datos.append("personal_p1_inte_T", personal_p1_inte_T);
    datos.append("personal_p1_reacc_M", personal_p1_reacc_M);
    datos.append("personal_p1_reacc_H", personal_p1_reacc_H);
    datos.append("personal_p1_reacc_T", personal_p1_reacc_T);
    datos.append("personal_p1_proce_M", personal_p1_proce_M);
    datos.append("personal_p1_proce_H", personal_p1_proce_H);
    datos.append("personal_p1_proce_T", personal_p1_proce_T);
    datos.append("personal_p1_segycuspen_M", personal_p1_segycuspen_M);
    datos.append("personal_p1_segycuspen_H", personal_p1_segycuspen_H);
    datos.append("personal_p1_segycuspen_T", personal_p1_segycuspen_T);
    datos.append("personal_p1_preven_M", personal_p1_preven_M);
    datos.append("personal_p1_preven_H", personal_p1_preven_H);
    datos.append("personal_p1_preven_T", personal_p1_preven_T);
    datos.append("personal_p1_prirespon_M", personal_p1_prirespon_M);
    datos.append("personal_p1_prirespon_H", personal_p1_prirespon_H);
    datos.append("personal_p1_prirespon_T", personal_p1_prirespon_T);

    datos.append("personal_p1_total_M", personal_p1_total_M);
    datos.append("personal_p1_total_H", personal_p1_total_H);
    datos.append("personal_p1_total_T", personal_p1_total_T);


    datos.append("personal_p1_otros", personal_p1_otros);
    datos.append("personal_p1_otros_M", personal_p1_otros_M);
    datos.append("personal_p1_otros_H", personal_p1_otros_H);
    datos.append("personal_p1_otros_T", personal_p1_otros_T);
    datos.append("personal_p1_siningre_M", personal_p1_siningre_M);
    datos.append("personal_p1_siningre_H", personal_p1_siningre_H);
    datos.append("personal_p1_siningre_T", personal_p1_siningre_T);
    datos.append("personal_p1_de1a5000_M", personal_p1_de1a5000_M);
    datos.append("personal_p1_de1a5000_H", personal_p1_de1a5000_H);
    datos.append("personal_p1_de1a5000_T", personal_p1_de1a5000_T);
    datos.append("personal_p1_de5001a10000_M", personal_p1_de5001a10000_M);
    datos.append("personal_p1_de5001a10000_H", personal_p1_de5001a10000_H);
    datos.append("personal_p1_de5001a10000_T", personal_p1_de5001a10000_T);
    datos.append("personal_p1_de10001a15000_M", personal_p1_de10001a15000_M);
    datos.append("personal_p1_de10001a15000_H", personal_p1_de10001a15000_H);
    datos.append("personal_p1_de10001a15000_T", personal_p1_de10001a15000_T);
    datos.append("personal_p1_de15001a20000_M", personal_p1_de15001a20000_M);
    datos.append("personal_p1_de15001a20000_H", personal_p1_de15001a20000_H);
    datos.append("personal_p1_de15001a20000_T", personal_p1_de15001a20000_T);
    datos.append("personal_p1_de20001a25000_M", personal_p1_de20001a25000_M);
    datos.append("personal_p1_de20001a25000_H", personal_p1_de20001a25000_H);
    datos.append("personal_p1_de20001a25000_T", personal_p1_de20001a25000_T);
    datos.append("personal_p1_de25001a30000_M", personal_p1_de25001a30000_M);
    datos.append("personal_p1_de25001a30000_H", personal_p1_de25001a30000_H);
    datos.append("personal_p1_de25001a30000_T", personal_p1_de25001a30000_T);
    datos.append("personal_p1_de30001a35000_M", personal_p1_de30001a35000_M);
    datos.append("personal_p1_de30001a35000_H", personal_p1_de30001a35000_H);
    datos.append("personal_p1_de30001a35000_T", personal_p1_de30001a35000_T);
    datos.append("personal_p1_de35001a40000_M", personal_p1_de35001a40000_M);
    datos.append("personal_p1_de35001a40000_H", personal_p1_de35001a40000_H);
    datos.append("personal_p1_de35001a40000_T", personal_p1_de35001a40000_T);
    datos.append("personal_p1_de40001a45000_M", personal_p1_de40001a45000_M);
    datos.append("personal_p1_de40001a45000_H", personal_p1_de40001a45000_H);
    datos.append("personal_p1_de40001a45000_T", personal_p1_de40001a45000_T);
    datos.append("personal_p1_de45001a50000_M", personal_p1_de45001a50000_M);
    datos.append("personal_p1_de45001a50000_H", personal_p1_de45001a50000_H);
    datos.append("personal_p1_de45001a50000_T", personal_p1_de45001a50000_T);
    datos.append("personal_p1_de50001a55000_M", personal_p1_de50001a55000_M);
    datos.append("personal_p1_de50001a55000_H", personal_p1_de50001a55000_H);
    datos.append("personal_p1_de50001a55000_T", personal_p1_de50001a55000_T);
    datos.append("personal_p1_55001a60000_M", personal_p1_55001a60000_M);
    datos.append("personal_p1_55001a60000_H", personal_p1_55001a60000_H);
    datos.append("personal_p1_55001a60000_T", personal_p1_55001a60000_T);
    datos.append("personal_p1_60001a65000_M", personal_p1_60001a65000_M);
    datos.append("personal_p1_60001a65000_H", personal_p1_60001a65000_H);
    datos.append("personal_p1_60001a65000_T", personal_p1_60001a65000_T);
    datos.append("personal_p1_65001a70000_M", personal_p1_65001a70000_M);
    datos.append("personal_p1_65001a70000_H", personal_p1_65001a70000_H);
    datos.append("personal_p1_65001a70000_T", personal_p1_65001a70000_T);
    datos.append("personal_p1_masde70000_M", personal_p1_masde70000_M);
    datos.append("personal_p1_masde70000_H", personal_p1_masde70000_H);
    datos.append("personal_p1_masde70000_T", personal_p1_masde70000_T);

    datos.append("personal_p1_masde50000_M", personal_p1_masde50000_M);
    datos.append("personal_p1_masde50000_H", personal_p1_masde50000_H);
    datos.append("personal_p1_masde50000_T", personal_p1_masde50000_T);

    datos.append("personal_p1_2_ning_M", personal_p1_2_ning_M);
    datos.append("personal_p1_2_ning_H", personal_p1_2_ning_H);
    datos.append("personal_p1_2_ning_T", personal_p1_2_ning_T);
    datos.append("personal_p1_2_prees_M", personal_p1_2_prees_M);
    datos.append("personal_p1_2_prees_H", personal_p1_2_prees_H);
    datos.append("personal_p1_2_prees_T", personal_p1_2_prees_T);
    datos.append("personal_p1_2_prim_M", personal_p1_2_prim_M);
    datos.append("personal_p1_2_prim_H", personal_p1_2_prim_H);
    datos.append("personal_p1_2_prim_T", personal_p1_2_prim_T);
    datos.append("personal_p1_2_secu_M", personal_p1_2_secu_M);
    datos.append("personal_p1_2_secu_H", personal_p1_2_secu_H)
    datos.append("personal_p1_2_secu_T", personal_p1_2_secu_T);
    datos.append("personal_p1_2_ctsect_M", personal_p1_2_ctsect_M);
    datos.append("personal_p1_2_ctsect_H", personal_p1_2_ctsect_H);
    datos.append("personal_p1_2_ctsect_T", personal_p1_2_ctsect_T);
    datos.append("personal_p1_2_nbasica_M", personal_p1_2_nbasica_M);
    datos.append("personal_p1_2_nbasica_H", personal_p1_2_nbasica_H);
    datos.append("personal_p1_2_nbasica_T", personal_p1_2_nbasica_T);
    datos.append("personal_p1_2_preobach_M", personal_p1_2_preobach_M);
    datos.append("personal_p1_2_preobach_H", personal_p1_2_preobach_H);
    datos.append("personal_p1_2_preobach_T", personal_p1_2_preobach_T);
    datos.append("personal_p1_2_ctcpret_M", personal_p1_2_ctcpret_M);
    datos.append("personal_p1_2_ctcpret_H", personal_p1_2_ctcpret_H);
    datos.append("personal_p1_2_ctcpret_T", personal_p1_2_ctcpret_T);
    datos.append("personal_p1_2_licoprof_M", personal_p1_2_licoprof_M);
    datos.append("personal_p1_2_licoprof_H", personal_p1_2_licoprof_H);
    datos.append("personal_p1_2_licoprof_T", personal_p1_2_licoprof_T);
    datos.append("personal_p1_2_maesdoc_M", personal_p1_2_maesdoc_M);
    datos.append("personal_p1_2_maesdoc_H", personal_p1_2_maesdoc_H);
    datos.append("personal_p1_2_maesdoc_T", personal_p1_2_maesdoc_T);
    datos.append("personal_p1_2_total_M", personal_p1_2_total_M);
    datos.append("personal_p1_2_total_H", personal_p1_2_total_H);
    datos.append("personal_p1_2_total_T", personal_p1_2_total_T);
    datos.append("personal_p1_2_nosesabe", personal_p1_2_nosesabe);
    datos.append("personal_p1_3_nosesabe", personal_p1_3_nosesabe);
    datos.append("capacitacion_p2s", capacitacion_p2s);




    datos.append("capacitacion_p2", capacitacion_p2);
    datos.append("capacitacion_p2_1_nom", capacitacion_p2_1_nom);
    datos.append("capacitacion_p2_2_aul", capacitacion_p2_2_aul);
    datos.append("capacitacion_p2_2_comp", capacitacion_p2_2_comp);
    datos.append("capacitacion_p2_2_juor", capacitacion_p2_2_juor);
    datos.append("capacitacion_p2_2_come", capacitacion_p2_2_come);
    datos.append("capacitacion_p2_2_coci", capacitacion_p2_2_coci);
    datos.append("capacitacion_p2_2_dorm", capacitacion_p2_2_dorm);
    datos.append("capacitacion_p2_2_pruf", capacitacion_p2_2_pruf);
    datos.append("capacitacion_p2_2_auvis", capacitacion_p2_2_auvis);
    datos.append("capacitacion_p2_2_medi", capacitacion_p2_2_medi);
    datos.append("capacitacion_p2_2_tirof", capacitacion_p2_2_tirof);
    datos.append("capacitacion_p2_2_tirov", capacitacion_p2_2_tirov);
    datos.append("capacitacion_p2_2_entre", capacitacion_p2_2_entre);
    datos.append("capacitacion_p2_2_vehi", capacitacion_p2_2_vehi);
    datos.append("capacitacion_p2_2_unif", capacitacion_p2_2_unif);
    datos.append("capacitacion_p2_2_otro", capacitacion_p2_2_otro);
    datos.append("capacitacion_p2_2_otro_cual", capacitacion_p2_2_otro_cual);




    datos.append("capacitacion_p2_3_invyanali_M", capacitacion_p2_3_invyanali_M);
    datos.append("capacitacion_p2_3_invyanali_H", capacitacion_p2_3_invyanali_H);
    datos.append("capacitacion_p2_3_invyanali_T", capacitacion_p2_3_invyanali_T);
    datos.append("capacitacion_p2_3_inte_M", capacitacion_p2_3_inte_M);
    datos.append("capacitacion_p2_3_inte_H", capacitacion_p2_3_inte_H);
    datos.append("capacitacion_p2_3_inte_T", capacitacion_p2_3_inte_T);
    datos.append("capacitacion_p2_3_reacc_M", capacitacion_p2_3_reacc_M);
    datos.append("capacitacion_p2_3_reacc_H", capacitacion_p2_3_reacc_H);
    datos.append("capacitacion_p2_3_reacc_T", capacitacion_p2_3_reacc_T);
    datos.append("capacitacion_p2_3_proce_M", capacitacion_p2_3_proce_M);
    datos.append("capacitacion_p2_3_proce_H", capacitacion_p2_3_proce_H);
    datos.append("capacitacion_p2_3_proce_T", capacitacion_p2_3_proce_T);
    datos.append("capacitacion_p2_3_segycuspen_M", capacitacion_p2_3_segycuspen_M);
    datos.append("capacitacion_p2_3_segycuspen_H", capacitacion_p2_3_segycuspen_H);
    datos.append("capacitacion_p2_3_segycuspen_T", capacitacion_p2_3_segycuspen_T);
    datos.append("capacitacion_p2_3_preven_M", capacitacion_p2_3_preven_M);
    datos.append("capacitacion_p2_3_preven_H", capacitacion_p2_3_preven_H);
    datos.append("capacitacion_p2_3_preven_T", capacitacion_p2_3_preven_T);
    datos.append("capacitacion_p2_3_prirespon_M", capacitacion_p2_3_prirespon_M);
    datos.append("capacitacion_p2_3_prirespon_H", capacitacion_p2_3_prirespon_H);
    datos.append("capacitacion_p2_3_prirespon_T", capacitacion_p2_3_prirespon_T);
    datos.append("capacitacion_p2_3_otros", capacitacion_p2_3_otros);
    datos.append("capacitacion_p2_3_otros_M", capacitacion_p2_3_otros_M);
    datos.append("capacitacion_p2_3_otros_H", capacitacion_p2_3_otros_H);
    datos.append("capacitacion_p2_3_otros_T", capacitacion_p2_3_otros_T);


    datos.append("capacitacion_p2_4_majudlacpo_M", capacitacion_p2_4_majudlacpo_M);
    datos.append("capacitacion_p2_4_majudlacpo_H", capacitacion_p2_4_majudlacpo_H);
    datos.append("capacitacion_p2_4_majudlacpo_T", capacitacion_p2_4_majudlacpo_T);
    datos.append("capacitacion_p2_4_prdedeypaci_M", capacitacion_p2_4_prdedeypaci_M);
    datos.append("capacitacion_p2_4_prdedeypaci_H", capacitacion_p2_4_prdedeypaci_H);
    datos.append("capacitacion_p2_4_prdedeypaci_T", capacitacion_p2_4_prdedeypaci_T);
    datos.append("capacitacion_p2_4_dehuygain_M", capacitacion_p2_4_dehuygain_M);
    datos.append("capacitacion_p2_4_dehuygain_H", capacitacion_p2_4_dehuygain_H);
    datos.append("capacitacion_p2_4_dehuygain_T", capacitacion_p2_4_dehuygain_T);
    datos.append("capacitacion_p2_4_realsipejupeac_M", capacitacion_p2_4_realsipejupeac_M);
    datos.append("capacitacion_p2_4_realsipejupeac_H", capacitacion_p2_4_realsipejupeac_H)
    datos.append("capacitacion_p2_4_realsipejupeac_T", capacitacion_p2_4_realsipejupeac_T);
    datos.append("capacitacion_p2_4_prdeludeloheodeha_M", capacitacion_p2_4_prdeludeloheodeha_M);
    datos.append("capacitacion_p2_4_prdeludeloheodeha_H", capacitacion_p2_4_prdeludeloheodeha_H);
    datos.append("capacitacion_p2_4_prdeludeloheodeha_T", capacitacion_p2_4_prdeludeloheodeha_T);
    datos.append("capacitacion_p2_4_idldlhodhymdeeoddp_M", capacitacion_p2_4_idldlhodhymdeeoddp_M);
    datos.append("capacitacion_p2_4_idldlhodhymdeeoddp_H", capacitacion_p2_4_idldlhodhymdeeoddp_H);
    datos.append("capacitacion_p2_4_idldlhodhymdeeoddp_T", capacitacion_p2_4_idldlhodhymdeeoddp_T);
    datos.append("capacitacion_p2_4_cadecu_M", capacitacion_p2_4_cadecu_M);
    datos.append("capacitacion_p2_4_cadecu_H", capacitacion_p2_4_cadecu_H);
    datos.append("capacitacion_p2_4_cadecu_T", capacitacion_p2_4_cadecu_T);
    datos.append("capacitacion_p2_4_enates_M", capacitacion_p2_4_enates_M);
    datos.append("capacitacion_p2_4_enates_H", capacitacion_p2_4_enates_H);
    datos.append("capacitacion_p2_4_enates_T", capacitacion_p2_4_enates_T);
    datos.append("capacitacion_p2_4_usledelafu_M", capacitacion_p2_4_usledelafu_M);
    datos.append("capacitacion_p2_4_usledelafu_H", capacitacion_p2_4_usledelafu_H);
    datos.append("capacitacion_p2_4_usledelafu_T", capacitacion_p2_4_usledelafu_T);
    datos.append("capacitacion_p2_4_inves_M", capacitacion_p2_4_inves_M);
    datos.append("capacitacion_p2_4_inves_H", capacitacion_p2_4_inves_H);
    datos.append("capacitacion_p2_4_inves_T", capacitacion_p2_4_inves_T);
    datos.append("capacitacion_p2_4_prres_M", capacitacion_p2_4_prres_M);
    datos.append("capacitacion_p2_4_prres_H", capacitacion_p2_4_prres_H);
    datos.append("capacitacion_p2_4_prres_T", capacitacion_p2_4_prres_T);
    datos.append("capacitacion_p2_4_inpoho_M", capacitacion_p2_4_inpoho_M);
    datos.append("capacitacion_p2_4_inpoho_H", capacitacion_p2_4_inpoho_H);
    datos.append("capacitacion_p2_4_inpoho_T", capacitacion_p2_4_inpoho_T);
    datos.append("capacitacion_p2_4_especia_M", capacitacion_p2_4_especia_M);
    datos.append("capacitacion_p2_4_especia_H", capacitacion_p2_4_especia_H);
    datos.append("capacitacion_p2_4_especia_T", capacitacion_p2_4_especia_T);
    datos.append("capacitacion_p2_4_actualiza_M", capacitacion_p2_4_actualiza_M);
    datos.append("capacitacion_p2_4_actualiza_H", capacitacion_p2_4_actualiza_H);
    datos.append("capacitacion_p2_4_actualiza_T", capacitacion_p2_4_actualiza_T);
    datos.append("capacitacion_p2_4_sidejupeacu_M", capacitacion_p2_4_sidejupeacu_M);
    datos.append("capacitacion_p2_4_sidejupeacu_H", capacitacion_p2_4_sidejupeacu_H);
    datos.append("capacitacion_p2_4_sidejupeacu_T", capacitacion_p2_4_sidejupeacu_T);
    datos.append("capacitacion_p2_4_depro_M", capacitacion_p2_4_depro_M);
    datos.append("capacitacion_p2_4_depro_H", capacitacion_p2_4_depro_H);
    datos.append("capacitacion_p2_4_depro_T", capacitacion_p2_4_depro_T);
    datos.append("capacitacion_p2_4_femeni_M", capacitacion_p2_4_femeni_M);
    datos.append("capacitacion_p2_4_femeni_H", capacitacion_p2_4_femeni_H);
    datos.append("capacitacion_p2_4_femeni_T", capacitacion_p2_4_femeni_T);
    datos.append("capacitacion_p2_4_antrdepe_M", capacitacion_p2_4_antrdepe_M);
    datos.append("capacitacion_p2_4_antrdepe_H", capacitacion_p2_4_antrdepe_H);
    datos.append("capacitacion_p2_4_antrdepe_T", capacitacion_p2_4_antrdepe_T);
    datos.append("capacitacion_p2_4_vicolamu_M", capacitacion_p2_4_vicolamu_M);
    datos.append("capacitacion_p2_4_vicolamu_H", capacitacion_p2_4_vicolamu_H);
    datos.append("capacitacion_p2_4_vicolamu_T", capacitacion_p2_4_vicolamu_T);
    datos.append("capacitacion_p2_4_predege_M", capacitacion_p2_4_predege_M);
    datos.append("capacitacion_p2_4_predege_H", capacitacion_p2_4_predege_H);
    datos.append("capacitacion_p2_4_predege_T", capacitacion_p2_4_predege_T);
    datos.append("capacitacion_p2_4_ascoydedeex_M", capacitacion_p2_4_ascoydedeex_M);
    datos.append("capacitacion_p2_4_ascoydedeex_H", capacitacion_p2_4_ascoydedeex_H);
    datos.append("capacitacion_p2_4_ascoydedeex_T", capacitacion_p2_4_ascoydedeex_T);
    datos.append("capacitacion_p2_4_siindejupepaad_M", capacitacion_p2_4_siindejupepaad_M);
    datos.append("capacitacion_p2_4_siindejupepaad_H", capacitacion_p2_4_siindejupepaad_H);
    datos.append("capacitacion_p2_4_siindejupepaad_T", capacitacion_p2_4_siindejupepaad_T);
    datos.append("capacitacion_p2_4_ataperin_M", capacitacion_p2_4_ataperin_M);
    datos.append("capacitacion_p2_4_ataperin_H", capacitacion_p2_4_ataperin_H);
    datos.append("capacitacion_p2_4_ataperin_T", capacitacion_p2_4_ataperin_T);
    datos.append("capacitacion_p2_4_atapercondis_M", capacitacion_p2_4_atapercondis_M);
    datos.append("capacitacion_p2_4_atapercondis_H", capacitacion_p2_4_atapercondis_H);
    datos.append("capacitacion_p2_4_atapercondis_T", capacitacion_p2_4_atapercondis_T);
    datos.append("capacitacion_p2_4_jusalt_M", capacitacion_p2_4_jusalt_M);
    datos.append("capacitacion_p2_4_jusalt_H", capacitacion_p2_4_jusalt_H);
    datos.append("capacitacion_p2_4_jusalt_T", capacitacion_p2_4_jusalt_T);
    datos.append("capacitacion_p2_4_justera_M", capacitacion_p2_4_justera_M);
    datos.append("capacitacion_p2_4_justera_H", capacitacion_p2_4_justera_H);
    datos.append("capacitacion_p2_4_justera_T", capacitacion_p2_4_justera_T);
    datos.append("capacitacion_p2_4_justransi_M", capacitacion_p2_4_justransi_M);
    datos.append("capacitacion_p2_4_justransi_H", capacitacion_p2_4_justransi_H);
    datos.append("capacitacion_p2_4_justransi_T", capacitacion_p2_4_justransi_T);

    datos.append("capacitacion_p2_4_atemuj_M", capacitacion_p2_4_atemuj_M);
    datos.append("capacitacion_p2_4_atemuj_H", capacitacion_p2_4_atemuj_H);
    datos.append("capacitacion_p2_4_atemuj_T", capacitacion_p2_4_atemuj_T);


    datos.append("capacitacion_p2_4_otros", capacitacion_p2_4_otros);
    datos.append("capacitacion_p2_4_otros_M", capacitacion_p2_4_otros_M);
    datos.append("capacitacion_p2_4_otros_H", capacitacion_p2_4_otros_H);
    datos.append("capacitacion_p2_4_otros_T", capacitacion_p2_4_otros_T);

    datos.append("capacitacion_p2_5_instuprga", capacitacion_p2_5_instuprga);

    datos.append("capacitacion_p2_6_evconconf_M", capacitacion_p2_6_evconconf_M);
    datos.append("capacitacion_p2_6_evconconf_H", capacitacion_p2_6_evconconf_H);
    datos.append("capacitacion_p2_6_evconconf_T", capacitacion_p2_6_evconconf_T);
    datos.append("presupuesto_p3", presupuesto_p3);
    datos.append("presupuestop3_1_anuaeje20", presupuestop3_1_anuaeje20);
    datos.append("presupuestop3_2_anuaeje20", presupuestop3_2_anuaeje20);








    datos.append("tab2", "tab2");



    $.ajax({

            url: "controladores/policias.controlador.php",
            method: "POST",
            data: datos,
            cache: false,
            contentType: false,
            processData: false,
            //dataType:"json",
            success: function(respuesta) {

                console.log(respuesta);
                //  if (respuesta.match(/correctamente.*/)){
                if (1 == 1) {

                    console.log(respuesta);
                    if (respuesta > 0) {
                        $("#idFormulario").val(respuesta);
                    }


                    swal({
                        type: "success",
                        title: respuesta,
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"
                    }).then(function(result) {
                        if (result.value) {

                            //window.location = "index.php?ruta=ventas&cliente="+seleccionarCliente;

                        }
                    })

                } else {
                    swal({
                        type: "success",
                        title: respuesta,
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"
                    }).then(function(result) {
                        if (result.value) {

                            //  window.location = "ventas";

                        }
                    })


                }

            }

        }

    )

})














$(".panel-body").on("click", ".crearTab3", function() {


//CAMPOS DINAMICOS

listarCampos();

    //MANDAMOS LOS DATOS A GUARDAR
    var idFormulario = $("#idFormulario").val();
    var uuid = $("#UUID").val();
    var camposDinamicos =  $("#camposDinamicos").val();

    if ($("#mujeres_p4_protoInterna").is(":checked")) {
        var mujeres_p4_protoInterna = "Protocolo internacional";
    } else {
        var mujeres_p4_protoInterna = "";
    }

    var mujeres_p4_protoInterna_cual = $("#mujeres_p4_protoInterna_cual").val();

    if ($("#mujeres_p4_interno").is(":checked")) {
        var mujeres_p4_interno = "Protocolo interno";
    } else {
        var mujeres_p4_interno = "";
    }
    var mujeres_p4_interno_cua = $("#mujeres_p4_interno_cua").val();

    if ($("#mujeres_p4_protoInvmipp").is(":checked")) {
        var mujeres_p4_protoInvmipp = "Protocolo de Investigación Ministerial, Policial y Pericial con Perspectiva de Género para el Delito de Feminicidio (FGR)";
    } else {
        var mujeres_p4_protoInvmipp = "";
    }

    if ($("#mujeres_p4_protoScjn").is(":checked")) {
        var mujeres_p4_protoScjn = "Protocolo de la Suprema Corte de Justicia de la Nación para Juzgar con Perspectiva de Género";
    } else {
        var mujeres_p4_protoScjn = "";
    }

    if ($("#mujeres_p4_ninguno").is(":checked")) {
        var mujeres_p4_ninguno = "Ninguno";
    } else {
        var mujeres_p4_ninguno = "";
    }


    if ($("#mujeres_p4_otroProtocolo").is(":checked")) {
        var mujeres_p4_otroProtocolo = "Otro";
    } else {
        var mujeres_p4_otroProtocolo = "";
    }

var mujeres_p4_otroProtocolo_cual = $("#mujeres_p4_otroProtocolo_cual").val();



    var mujeres_p4_otro_nombre = $("#mujeres_p4_otro_nombre").val();

    var mujeres_p4_otro_nombre2 = $("#mujeres_p4_otro_nombre2").val();


    if ($("#mujeres_p4_1_buenprac").is(":checked")) {
        var mujeres_p4_1_buenprac = "Sí";
    } else {
        var mujeres_p4_1_buenprac = "No";
    }


    var mujeres_p4_2_cualBuenprac = $("#mujeres_p4_2_cualBuenprac").val();

    var mujeres_p4_3_justmuj_M = $("#mujeres_p4_3_justmuj_M").val();

    var mujeres_p4_3_justmuj_H = $("#mujeres_p4_3_justmuj_H").val();

    var mujeres_p4_3_justmuj_T = $("#mujeres_p4_3_justmuj_T").val();

    if ($("#nna_p5_protoInterna").is(":checked")) {
        var nna_p5_protoInterna = "Protocolo internacional";
    } else {
        var nna_p5_protoInterna = "";
    }



    var nna_p5_protoInterna_cual = $("#nna_p5_protoInterna_cual").val();



    if ($("#nna_p5_interno").is(":checked")) {
        var nna_p5_interno = "Protocolo interno";
    } else {
        var nna_p5_interno = "";
    }


    var nna_p5_interno_cua = $("#nna_p5_interno_cua").val();



    if ($("#nna_p5_protoAteninte").is(":checked")) {
        var nna_p5_protoAteninte = "Protocolo de Atención Integral para Niñas, Niños y Adolescentes Víctimas de Delito y en Condiciones de Vulnerabilidad (SNDIF)";
    } else {
        var nna_p5_protoAteninte = "";
    }


    if ($("#nna_p5_protoActjust").is(":checked")) {
        var nna_p5_protoActjust = "Protocolo de actuación para quienes imparten justicia en casos que involucren a niñas, niños y adolescentes (SCJN)";
    } else {
        var nna_p5_protoActjust = "";
    }


        if ($("#nna_p5_ninguno").is(":checked")) {
            var nna_p5_ninguno = "Ninguno";
        } else {
            var nna_p5_ninguno = "";
        }



    if ($("#nna_p5_otroProtocolo").is(":checked")) {
        var nna_p5_otroProtocolo = "Otro";
    } else {
        var nna_p5_otroProtocolo = "";
    }


    var nna_p5_otroProtocolo_cual = $("#nna_p5_otroProtocolo_cual").val();





    if ($("#nna_p5_1_buenpracs").is(":checked")) {
        var nna_p5_1_buenpracs = "Sí";
    } else {
        var nna_p5_1_buenpracs = "No";
    }




    var nna_p5_2_cualBuenpract = $("#nna_p5_2_cualBuenpract").val();

    var ja_p5_3_espejust_M = $("#ja_p5_3_espejust_M").val();
    var ja_p5_3_espejust_H = $("#ja_p5_3_espejust_H").val();
    var ja_p5_3_espejust_T = $("#ja_p5_3_espejust_T").val();

    if ($("#indigenas_p6_tradulenind").is(":checked")) {
        var indigenas_p6_tradulenind = "Sí";
    } else {
        var indigenas_p6_tradulenind = "No";
    }

    var indigenas_p6_1_nahuatl_M = $("#indigenas_p6_1_nahuatl_M").val();
    var indigenas_p6_1_nahuatl_H = $("#indigenas_p6_1_nahuatl_H").val();
    var indigenas_p6_1_nahuatl_T = $("#indigenas_p6_1_nahuatl_T").val();
    var indigenas_p6_1_maya_M = $("#indigenas_p6_1_maya_M").val();
    var indigenas_p6_1_maya_H = $("#indigenas_p6_1_maya_H").val();
    var indigenas_p6_1_maya_T = $("#indigenas_p6_1_maya_T").val();
    var indigenas_p6_1_tseltal_M = $("#indigenas_p6_1_tseltal_M").val();
    var indigenas_p6_1_tseltal_H = $("#indigenas_p6_1_tseltal_H").val();
    var indigenas_p6_1_tseltal_T = $("#indigenas_p6_1_tseltal_T").val();
    var indigenas_p6_1_mixteco_M = $("#indigenas_p6_1_mixteco_M").val();
    var indigenas_p6_1_mixteco_H = $("#indigenas_p6_1_mixteco_H").val();
    var indigenas_p6_1_mixteco_T = $("#indigenas_p6_1_mixteco_T").val();
    var indigenas_p6_1_tsotsil_M = $("#indigenas_p6_1_tsotsil_M").val();
    var indigenas_p6_1_tsotsil_H = $("#indigenas_p6_1_tsotsil_H").val();
    var indigenas_p6_1_tsotsil_T = $("#indigenas_p6_1_tsotsil_T").val();
    var indigenas_p6_1_otro = $("#indigenas_p6_1_otro").val();
    var indigenas_p6_1_otro_M = $("#indigenas_p6_1_otro_M").val();
    var indigenas_p6_1_otro_H = $("#indigenas_p6_1_otro_H").val();
    var indigenas_p6_1_otro_T = $("#indigenas_p6_1_otro_T").val();

    if ($("#indigenas_p6_2_convenio").is(":checked")) {
        var indigenas_p6_2_convenio = "Sí";
    } else {
        var indigenas_p6_2_convenio = "No";
    }
    var indigenas_p6_2_nombinst = $("#indigenas_p6_2_nombinst").val();







    if ($("#indigenas_p6_4_ProtoInter").is(":checked")) {
        var indigenas_p6_4_ProtoInter = "Protocolo internacional";
    } else {
        var indigenas_p6_4_ProtoInter = "";
    }

    var indigenas_p6_4_ProtoInter_cual = $("#indigenas_p6_4_ProtoInter_cual").val();

    if ($("#indigenas_p6_4_interno").is(":checked")) {
        var indigenas_p6_4_interno = "Protocolo interno";
    } else {
        var indigenas_p6_4_interno = "";
    }

    var indigenas_p6_4_interno_cual = $("#indigenas_p6_4_interno_cual").val();

    if ($("#indigenas_p6_4_ProtoImpjust").is(":checked")) {
        var indigenas_p6_4_ProtoImpjust = "Protocolo de Actuación para Quienes Imparten Justicia en Casos que Involucren Derechos de Personas, Comunidades y Pueblos Indígenas (SCJN)";
    } else {
        var indigenas_p6_4_ProtoImpjust = "";
    }

    if ($("#indigenas_p6_4_ninguno").is(":checked")) {
        var indigenas_p6_4_ninguno = "Ninguno";
    } else {
        var indigenas_p6_4_ninguno = "";
    }


    if ($("#indigenas_p6_4_otro").is(":checked")) {
        var indigenas_p6_4_otro = "Otro";
    } else {
        var indigenas_p6_4_otro = "";
    }

    var indigenas_p6_4_otro_cual = $("#indigenas_p6_4_otro_cual").val();



        if ($("#indigenas_p6_5_buenaspract").is(":checked")) {
            var indigenas_p6_5_buenaspract = "Sí";
        } else {
            var indigenas_p6_5_buenaspract = "No";
        }

        var indigenas_p6_6_cualbuenaspra = $("#indigenas_p6_6_cualbuenaspra").val();
















    var datos = new FormData();
    datos.append("idFormulario", idFormulario);
    datos.append("uuid", uuid);
    datos.append("mujeres_p4_protoInterna", mujeres_p4_protoInterna);
    datos.append("mujeres_p4_protoInterna_cual", mujeres_p4_protoInterna_cual);
    datos.append("mujeres_p4_interno", mujeres_p4_interno);
    datos.append("mujeres_p4_interno_cua", mujeres_p4_interno_cua);
    datos.append("mujeres_p4_protoInvmipp", mujeres_p4_protoInvmipp);
    datos.append("mujeres_p4_protoScjn", mujeres_p4_protoScjn);
    datos.append("mujeres_p4_ninguno", mujeres_p4_ninguno);
    datos.append("mujeres_p4_otroProtocolo", mujeres_p4_otroProtocolo);
    datos.append("mujeres_p4_otroProtocolo_cual", mujeres_p4_otroProtocolo_cual);


    datos.append("mujeres_p4_otro_nombre", mujeres_p4_otro_nombre);
    datos.append("mujeres_p4_otro_nombre2", mujeres_p4_otro_nombre2);
    datos.append("camposDinamicos", camposDinamicos);
    datos.append("mujeres_p4_1_buenprac", mujeres_p4_1_buenprac);
    datos.append("mujeres_p4_2_cualBuenprac", mujeres_p4_2_cualBuenprac);
    datos.append("mujeres_p4_3_justmuj_M", mujeres_p4_3_justmuj_M);
    datos.append("mujeres_p4_3_justmuj_H", mujeres_p4_3_justmuj_H);
    datos.append("mujeres_p4_3_justmuj_T", mujeres_p4_3_justmuj_T);
    datos.append("nna_p5_protoInterna", nna_p5_protoInterna);
    datos.append("nna_p5_protoInterna_cual", nna_p5_protoInterna_cual);
    datos.append("nna_p5_interno", nna_p5_interno);
    datos.append("nna_p5_interno_cua", nna_p5_interno_cua);
    datos.append("nna_p5_protoAteninte", nna_p5_protoAteninte);
    datos.append("nna_p5_protoActjust", nna_p5_protoActjust);
    datos.append("nna_p5_ninguno", nna_p5_ninguno);
    datos.append("nna_p5_otroProtocolo", nna_p5_otroProtocolo);
    datos.append("nna_p5_otroProtocolo_cual", nna_p5_otroProtocolo_cual);
    datos.append("nna_p5_1_buenpracs", nna_p5_1_buenpracs);
    datos.append("nna_p5_2_cualBuenpract", nna_p5_2_cualBuenpract);
    datos.append("ja_p5_3_espejust_M", ja_p5_3_espejust_M);
    datos.append("ja_p5_3_espejust_H", ja_p5_3_espejust_H);
    datos.append("ja_p5_3_espejust_T", ja_p5_3_espejust_T);
    datos.append("indigenas_p6_tradulenind", indigenas_p6_tradulenind);
    datos.append("indigenas_p6_1_nahuatl_M", indigenas_p6_1_nahuatl_M);
    datos.append("indigenas_p6_1_nahuatl_H", indigenas_p6_1_nahuatl_H);
    datos.append("indigenas_p6_1_nahuatl_T", indigenas_p6_1_nahuatl_T);
    datos.append("indigenas_p6_1_maya_M", indigenas_p6_1_maya_M);
    datos.append("indigenas_p6_1_maya_H", indigenas_p6_1_maya_H);
    datos.append("indigenas_p6_1_maya_T", indigenas_p6_1_maya_T);
    datos.append("indigenas_p6_1_tseltal_M", indigenas_p6_1_tseltal_M);
    datos.append("indigenas_p6_1_tseltal_H", indigenas_p6_1_tseltal_H);
    datos.append("indigenas_p6_1_tseltal_T", indigenas_p6_1_tseltal_T);
    datos.append("indigenas_p6_1_mixteco_M", indigenas_p6_1_mixteco_M);
    datos.append("indigenas_p6_1_mixteco_H", indigenas_p6_1_mixteco_H);
    datos.append("indigenas_p6_1_mixteco_T", indigenas_p6_1_mixteco_T);
    datos.append("indigenas_p6_1_tsotsil_M", indigenas_p6_1_tsotsil_M);
    datos.append("indigenas_p6_1_tsotsil_H", indigenas_p6_1_tsotsil_H);
    datos.append("indigenas_p6_1_tsotsil_T", indigenas_p6_1_tsotsil_T);
    datos.append("indigenas_p6_1_otro", indigenas_p6_1_otro);
    datos.append("indigenas_p6_1_otro_M", indigenas_p6_1_otro_M);
    datos.append("indigenas_p6_1_otro_H", indigenas_p6_1_otro_H);
    datos.append("indigenas_p6_1_otro_T", indigenas_p6_1_otro_T);
    datos.append("indigenas_p6_2_convenio", indigenas_p6_2_convenio);
    datos.append("indigenas_p6_2_nombinst", indigenas_p6_2_nombinst);
    datos.append("indigenas_p6_4_ProtoInter", indigenas_p6_4_ProtoInter);
    datos.append("indigenas_p6_4_ProtoInter_cual", indigenas_p6_4_ProtoInter_cual);
    datos.append("indigenas_p6_4_interno", indigenas_p6_4_interno);
    datos.append("indigenas_p6_4_interno_cual", indigenas_p6_4_interno_cual);
    datos.append("indigenas_p6_4_ProtoImpjust", indigenas_p6_4_ProtoImpjust);
    datos.append("indigenas_p6_4_ninguno", indigenas_p6_4_ninguno);
    datos.append("indigenas_p6_4_otro", indigenas_p6_4_otro);
    datos.append("indigenas_p6_4_otro_cual", indigenas_p6_4_otro_cual);
    datos.append("indigenas_p6_5_buenaspract", indigenas_p6_5_buenaspract);
    datos.append("indigenas_p6_6_cualbuenaspra", indigenas_p6_6_cualbuenaspra);






















    datos.append("tab3", "tab3");



    $.ajax({

            url: "controladores/policias.controlador.php",
            method: "POST",
            data: datos,
            cache: false,
            contentType: false,
            processData: false,
            //dataType:"json",
            success: function(respuesta) {

                console.log(respuesta);
                //  if (respuesta.match(/correctamente.*/)){
                if (1 == 1) {

                    console.log(respuesta);
                    if (respuesta > 0) {
                        $("#idFormulario").val(respuesta);
                    }


                    swal({
                        type: "success",
                        title: respuesta,
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"
                    }).then(function(result) {
                        if (result.value) {

                            //window.location = "index.php?ruta=ventas&cliente="+seleccionarCliente;

                        }
                    })

                } else {
                    swal({
                        type: "success",
                        title: respuesta,
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"
                    }).then(function(result) {
                        if (result.value) {

                            //  window.location = "ventas";

                        }
                    })


                }

            }

        }

    )





})









$(".panel-body").on("click", ".crearTab4", function() {



    //MANDAMOS LOS DATOS A GUARDAR

    var idFormulario = $("#idFormulario").val();
    var uuid = $("#UUID").val();

    if ($("#extranjeras_p7_tradLenExt").is(":checked")) {
        var extranjeras_p7_tradLenExt = "SÍ";
    } else {
        var extranjeras_p7_tradLenExt = "No";
    }



    var extranjeras_p7_1_ingles_M = $("#extranjeras_p7_1_ingles_M").val();
    var extranjeras_p7_1_ingles_H = $("#extranjeras_p7_1_ingles_H").val();
    var extranjeras_p7_1_ingles_T = $("#extranjeras_p7_1_ingles_T").val();
    var extranjeras_p7_1_chino_M = $("#extranjeras_p7_1_chino_M").val();
    var extranjeras_p7_1_chino_H = $("#extranjeras_p7_1_chino_H").val();
    var extranjeras_p7_1_chino_T = $("#extranjeras_p7_1_chino_T").val();
    var extranjeras_p7_1_frances_M = $("#extranjeras_p7_1_frances_M").val();
    var extranjeras_p7_1_frances_H = $("#extranjeras_p7_1_frances_H").val();
    var extranjeras_p7_1_frances_T = $("#extranjeras_p7_1_frances_T").val();
    var extranjeras_p7_1_frances_M = $("#extranjeras_p7_1_frances_M").val();
    var extranjeras_p7_1_frances_H = $("#extranjeras_p7_1_frances_H").val();
    var extranjeras_p7_1_frances_T = $("#extranjeras_p7_1_frances_T").val();
    var extranjeras_p7_1_arabe_M = $("#extranjeras_p7_1_arabe_M").val();
    var extranjeras_p7_1_arabe_H = $("#extranjeras_p7_1_arabe_H").val();
    var extranjeras_p7_1_arabe_T = $("#extranjeras_p7_1_arabe_T").val();
    var extranjeras_p7_1_ruso_M = $("#extranjeras_p7_1_ruso_M").val();
    var extranjeras_p7_1_ruso_H = $("#extranjeras_p7_1_ruso_H").val();
    var extranjeras_p7_1_ruso_T = $("#extranjeras_p7_1_ruso_T").val();
    var extranjeras_p7_1_otro = $("#extranjeras_p7_1_otro").val();
    var extranjeras_p7_1_otro_M = $("#extranjeras_p7_1_otro_M").val();
    var extranjeras_p7_1_otro_H = $("#extranjeras_p7_1_otro_H").val();
    var extranjeras_p7_1_otro_T = $("#extranjeras_p7_1_otro_T").val();

    if ($("#extranjeras_p7_2_ConvInst").is(":checked")) {
        var extranjeras_p7_2_ConvInst = "Sí";
    } else {
        var extranjeras_p7_2_ConvInst = "No";
    }
    var extranjeras_p7_3_nombreInsti = $("#extranjeras_p7_3_nombreInsti").val();

    if ($("#extranjeras_p7_4_ProtoInterna").is(":checked")) {
        var extranjeras_p7_4_ProtoInterna = "Protocolo internacional";
    } else {
        var extranjeras_p7_4_ProtoInterna = "";
    }

    var extranjeras_p7_4_ProtoInterna_cual = $("#extranjeras_p7_4_ProtoInterna_cual").val();


    if ($("#extranjeras_p7_4_interno").is(":checked")) {
        var extranjeras_p7_4_interno = "Protocolo interno";
    } else {
        var extranjeras_p7_4_interno = "";
    }

    var extranjeras_p7_4_interno_cual = $("#extranjeras_p7_4_interno_cual").val();

    if ($("#extranjeras_p7_4_ninguno").is(":checked")) {
        var extranjeras_p7_4_ninguno = "Ninguno";
    } else {
        var extranjeras_p7_4_ninguno = "";
    }

    if ($("#extranjeras_p7_4_Otro").is(":checked")) {
        var extranjeras_p7_4_Otro = "Otros";
    } else {
        var extranjeras_p7_4_Otro = "";
    }
    var extranjeras_p7_4_Otro_cual = $("#extranjeras_p7_4_Otro_cual").val();




    if ($("#extranjeras_p7_5_buenasprac").is(":checked")) {
        var extranjeras_p7_5_buenasprac = "Sí";
    } else {
        var extranjeras_p7_5_buenasprac = "No";
    }
    var extranjeras_p7_6_buenasprac_cual = $("#extranjeras_p7_6_buenasprac_cual").val();
    if ($("#discapacidad_p8_braile").is(":checked")) {
        var discapacidad_p8_braile = "Sí";
    } else {
        var discapacidad_p8_braile = "No";
    }

    if ($("#discapacidad_p8_LenSen").is(":checked")) {
        var discapacidad_p8_LenSen = "Sí";
    } else {
        var discapacidad_p8_LenSen = "No";
    }
    var discapacidad_p8_1_nombreInst = $("#discapacidad_p8_1_nombreInst").val();


    if ($("#discapacidad_p8_2_ProtoInterna").is(":checked")) {
        var discapacidad_p8_2_ProtoInterna = "Protocolo internacional";
    } else {
        var discapacidad_p8_2_ProtoInterna = "";
    }

    var discapacidad_p8_2_ProtoInterna_cual = $("#discapacidad_p8_2_ProtoInterna_cual").val();

    if ($("#discapacidad_p8_2_interno").is(":checked")) {
        var discapacidad_p8_2_interno = "Protocolo interno";
    } else {
        var discapacidad_p8_2_interno = "";
    }

    var discapacidad_p8_2_interno_cua = $("#discapacidad_p8_2_interno_cua").val();

    if ($("#discapacidad_p8_2_ProtoImpJust").is(":checked")) {
        var discapacidad_p8_2_ProtoImpJust = "Protocolo de actuación para quienes imparten justicia en casos que involucren derechos de personas con discapacidad (SCJN)";
    } else {
        var discapacidad_p8_2_ProtoImpJust = "";
    }


    if ($("#discapacidad_p8_2_ninguno").is(":checked")) {
        var discapacidad_p8_2_ninguno = "Ninguno";
    } else {
        var discapacidad_p8_2_ninguno = "";
    }


    if ($("#discapacidad_p8_2_otros").is(":checked")) {
        var discapacidad_p8_2_otros = "Otros";
    } else {
        var discapacidad_p8_2_otros = "";
    }

    var discapacidad_p8_2_otros_cual = $("#discapacidad_p8_2_otros_cual").val();



    if ($("#discapacidad_p8_3_buenasprac").is(":checked")) {
        var discapacidad_p8_3_buenasprac = "Sí";
    } else {
        var discapacidad_p8_3_buenasprac = "No";
    }


    var discapacidad_p8_3_buenasprac_cual = $("#discapacidad_p8_3_buenasprac_cual").val();









    var datos = new FormData();
    datos.append("idFormulario", idFormulario);
    datos.append("uuid", uuid);
    datos.append("extranjeras_p7_tradLenExt", extranjeras_p7_tradLenExt);
    datos.append("extranjeras_p7_1_ingles_M", extranjeras_p7_1_ingles_M);
    datos.append("extranjeras_p7_1_ingles_H", extranjeras_p7_1_ingles_H);
    datos.append("extranjeras_p7_1_ingles_T", extranjeras_p7_1_ingles_T);
    datos.append("extranjeras_p7_1_chino_M", extranjeras_p7_1_chino_M);
    datos.append("extranjeras_p7_1_chino_H", extranjeras_p7_1_chino_H);
    datos.append("extranjeras_p7_1_chino_T", extranjeras_p7_1_chino_T);
    datos.append("extranjeras_p7_1_frances_M", extranjeras_p7_1_frances_M);
    datos.append("extranjeras_p7_1_frances_H", extranjeras_p7_1_frances_H);
    datos.append("extranjeras_p7_1_frances_T", extranjeras_p7_1_frances_T);
    datos.append("extranjeras_p7_1_arabe_M", extranjeras_p7_1_arabe_M);
    datos.append("extranjeras_p7_1_arabe_H", extranjeras_p7_1_arabe_H);
    datos.append("extranjeras_p7_1_arabe_T", extranjeras_p7_1_arabe_T);
    datos.append("extranjeras_p7_1_ruso_M", extranjeras_p7_1_ruso_M);
    datos.append("extranjeras_p7_1_ruso_H", extranjeras_p7_1_ruso_H);
    datos.append("extranjeras_p7_1_frances_H", extranjeras_p7_1_frances_H);
    datos.append("extranjeras_p7_1_ruso_T", extranjeras_p7_1_ruso_T);
    datos.append("extranjeras_p7_1_otro", extranjeras_p7_1_otro);
    datos.append("extranjeras_p7_1_otro_M", extranjeras_p7_1_otro_M);
    datos.append("extranjeras_p7_1_otro_H", extranjeras_p7_1_otro_H);
    datos.append("extranjeras_p7_1_otro_T", extranjeras_p7_1_otro_T);

    datos.append("extranjeras_p7_2_ConvInst", extranjeras_p7_2_ConvInst);
    datos.append("extranjeras_p7_3_nombreInsti", extranjeras_p7_3_nombreInsti);
    datos.append("extranjeras_p7_4_ProtoInterna", extranjeras_p7_4_ProtoInterna);
    datos.append("extranjeras_p7_4_ProtoInterna_cual", extranjeras_p7_4_ProtoInterna_cual);
    datos.append("extranjeras_p7_4_interno", extranjeras_p7_4_interno);
    datos.append("extranjeras_p7_4_interno_cual", extranjeras_p7_4_interno_cual);
    datos.append("extranjeras_p7_4_ninguno", extranjeras_p7_4_ninguno);
    datos.append("extranjeras_p7_4_Otro", extranjeras_p7_4_Otro);
    datos.append("extranjeras_p7_4_Otro_cual", extranjeras_p7_4_Otro_cual);



    datos.append("extranjeras_p7_5_buenasprac", extranjeras_p7_5_buenasprac);
    datos.append("extranjeras_p7_6_buenasprac_cual", extranjeras_p7_6_buenasprac_cual);
    datos.append("discapacidad_p8_braile", discapacidad_p8_braile);
    datos.append("discapacidad_p8_LenSen", discapacidad_p8_LenSen);
    datos.append("discapacidad_p8_1_nombreInst", discapacidad_p8_1_nombreInst);

    datos.append("discapacidad_p8_2_ProtoInterna", discapacidad_p8_2_ProtoInterna);
    datos.append("discapacidad_p8_2_ProtoInterna_cual", discapacidad_p8_2_ProtoInterna_cual);
    datos.append("discapacidad_p8_2_interno", discapacidad_p8_2_interno);
    datos.append("discapacidad_p8_2_interno_cua", discapacidad_p8_2_interno_cua);
    datos.append("discapacidad_p8_2_ProtoImpJust", discapacidad_p8_2_ProtoImpJust);
    datos.append("discapacidad_p8_2_ninguno", discapacidad_p8_2_ninguno);
    datos.append("discapacidad_p8_2_otros", discapacidad_p8_2_otros);
    datos.append("discapacidad_p8_2_otros_cual", discapacidad_p8_2_otros_cual);
    datos.append("discapacidad_p8_3_buenasprac", discapacidad_p8_3_buenasprac);
    datos.append("discapacidad_p8_3_buenasprac_cual", discapacidad_p8_3_buenasprac_cual);









    datos.append("tab4", "tab4");



    $.ajax({

            url: "controladores/policias.controlador.php",
            method: "POST",
            data: datos,
            cache: false,
            contentType: false,
            processData: false,
            //dataType:"json",
            success: function(respuesta) {

                console.log(respuesta);
                //  if (respuesta.match(/correctamente.*/)){
                if (1 == 1) {

                    console.log(respuesta);
                    if (respuesta > 0) {
                        $("#idFormulario").val(respuesta);
                    }


                    swal({
                        type: "success",
                        title: respuesta,
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"
                    }).then(function(result) {
                        if (result.value) {

                            //window.location = "index.php?ruta=ventas&cliente="+seleccionarCliente;

                        }
                    })

                } else {
                    swal({
                        type: "success",
                        title: respuesta,
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"
                    }).then(function(result) {
                        if (result.value) {

                            //  window.location = "ventas";

                        }
                    })


                }

            }

        }

    )

})


$(".panel-body").on("click", ".crearTab5", function() {



    //MANDAMOS LOS DATOS A GUARDAR

    var idFormulario = $("#idFormulario").val();
    var uuid = $("#UUID").val();

    if ($("#colaboracion_p9_tipcol").is(":checked")) {
        var colaboracion_p9_tipcol = "Sí";
    } else {
        var colaboracion_p9_tipcol = "No";
    }


    var colaboracion_p9_1_instcol = $("#colaboracion_p9_1_instcol").val();

    if ($("#colaboracion_p9_2_finan").is(":checked")) {
        var colaboracion_p9_2_finan = "Financiamiento";
    } else {
        var colaboracion_p9_2_finan = "";
    }

    var colaboracion_p9_3_descol = $("#colaboracion_p9_3_descol").val();



    if ($("#colaboracion_p9_2_dona").is(":checked")) {
        var colaboracion_p9_2_dona = "Donación";
    } else {
        var colaboracion_p9_2_dona = "";
    }


    if ($("#colaboracion_p9_2_capa").is(":checked")) {
        var colaboracion_p9_2_capa = "Capacitación";
    } else {
        var colaboracion_p9_2_capa = "";
    }

    if ($("#colaboracion_p9_2_otros").is(":checked")) {
        var colaboracion_p9_2_otros = "Otro";
    } else {
        var colaboracion_p9_2_otros = "";
    }


    var colaboracion_p9_2_cual = $("#colaboracion_p9_2_cual").val();

    if ($("#registro_p10_intsispla").is(":checked")) {
        var registro_p10_intsispla = "Sí";
    } else {
        var registro_p10_intsispla = "No";
    }


    var registro_p10_intsispla = $("#registro_p10_intsispla").val();

    if ($("#registro_p10_intsispla").is(":checked")) {
        var registro_p10_intsispla = "Sí";
    } else {
        var registro_p10_intsispla = "No";
    }



    var registro_p10_1_servsispl = $("#registro_p10_1_servsispl").val();

    var registro_p10_2_proliga = $("#registro_p10_2_proliga").val();


    if ($("#registro_p10_lib").is(":checked")) {
        var registro_p10_lib = "Libro o bitácora en papel";
    } else {
        var registro_p10_lib = "";
    }

    if ($("#registro_p10_imp").is(":checked")) {
        var registro_p10_imp = "Formato impreso";
    } else {
        var registro_p10_imp = "";
    }

    if ($("#registro_p10_tab").is(":checked")) {
        var registro_p10_tab = "Tableta";
    } else {
        var registro_p10_tab = "";
    }

    if ($("#registro_p10_cel").is(":checked")) {
        var registro_p10_cel = "Celular";
    } else {
        var registro_p10_cel = "";
    }

    if ($("#registro_p10_comp").is(":checked")) {
        var registro_p10_comp = "Computadora";
    } else {
        var registro_p10_comp = "";
    }

    if ($("#registro_p10_otro").is(":checked")) {
        var registro_p10_otro = "Otro";
    } else {
        var registro_p10_otro = "";
    }

    var registro_p10_cual = $("#registro_p10_cual").val();



    if ($("#registro_p10_1_ind").is(":checked")) {
        var registro_p10_1_ind = "Registro individualizado del personal destinado a funciones de procuración de justicia";
    } else {
        var registro_p10_1_ind = "";
    }

    if ($("#registro_p10_1_per").is(":checked")) {
        var registro_p10_1_per = "Registro de personal dado de baja";
    } else {
        var registro_p10_1_per = "";
    }

    if ($("#registro_p10_1_cap").is(":checked")) {
        var registro_p10_1_cap = "Registro de capacitación y/o evaluación del personal";
    } else {
        var registro_p10_1_cap = "";
    }

    if ($("#registro_p10_1_perdet").is(":checked")) {
        var registro_p10_1_perdet = "Registro de personas detenidas";
    } else {
        var registro_p10_1_perdet = "";
    }

    if ($("#registro_p10_1_del").is(":checked")) {
        var registro_p10_1_del = "Registro de delitos";
    } else {
        var registro_p10_1_del = "";
    }

    if ($("#registro_p10_1_vic").is(":checked")) {
        var registro_p10_1_vic = "Registro de víctimas";
    } else {
        var registro_p10_1_vic = "";
    }

    if ($("#registro_p10_1_perdes").is(":checked")) {
        var registro_p10_1_perdes = "Registro de personas desaparecidas y/o extraviadas";
    } else {
        var registro_p10_1_perdes = "";
    }
    if ($("#registro_p10_1_den").is(":checked")) {
        var registro_p10_1_den = "Denuncias recibidas";
    } else {
        var registro_p10_1_den = "";
    }


    if ($("#registro_p10_1_pedetfad").is(":checked")) {
        var registro_p10_1_pedetfad = "Personas detenidas por falta administrativa";
    } else {
        var registro_p10_1_pedetfad = "";
    }
    if ($("#registro_p10_1_pedetpdis").is(":checked")) {
        var registro_p10_1_pedetpdis = "Personas detenidas y puestas a disposición del MP";
    } else {
        var registro_p10_1_pedetpdis = "";
    }
    if ($("#registro_p10_1_llam").is(":checked")) {
        var registro_p10_1_llam = "Llamadas de emergencia C4 atendidas";
    } else {
        var registro_p10_1_llam = "";
    }

    if ($("#registro_p10_1_dil").is(":checked")) {
        var registro_p10_1_dil = "Diligencias atendidas";
    } else {
        var registro_p10_1_dil = "";
    }

    if ($("#registro_p10_1_part").is(":checked")) {
        var registro_p10_1_part = "Participación en operativos";
    } else {
        var registro_p10_1_part = "";
    }

    if ($("#registro_p10_1_reu").is(":checked")) {
        var registro_p10_1_reu = "checked";
    } else {
        var registro_p10_1_reu = "unchecked";
    }
    if ($("#registro_p10_1_comer").is(":checked")) {
        var registro_p10_1_comer = "checked";
    } else {
        var registro_p10_1_comer = "unchecked";
    }
    if ($("#registro_p10_1_esc").is(":checked")) {
        var registro_p10_1_esc = "checked";
    } else {
        var registro_p10_1_esc = "unchecked";
    }
    if ($("#registro_p10_1_atn").is(":checked")) {
        var registro_p10_1_atn = "Atenciones de servicio social brindadas";
    } else {
        var registro_p10_1_atn = "";
    }
    if ($("#registro_p10_1_actu").is(":checked")) {
        var registro_p10_1_actu = "Otras actuaciones realizadas en calidad de Primer Respondiente";
    } else {
        var registro_p10_1_actu = "";
    }
    if ($("#registro_p10_1_otros").is(":checked")) {
        var registro_p10_1_otros = "Otro";
    } else {
        var registro_p10_1_otros = "";
    }


    var registro_p10_1_cuales = $("#registro_p10_1_cuales").val();
    var registro_p10_1_servsispl = $("#registro_p10_1_servsispl").val();

    if ($("#registro_p10_2_lib").is(":checked")) {
        var registro_p10_2_lib = "Libro o bitácora en papel";
    } else {
        var registro_p10_2_lib = "";
    }

    if ($("#registro_p10_2_bd").is(":checked")) {
        var registro_p10_2_bd = "Base de datos en excel u otra hoja de cálculo";
    } else {
        var registro_p10_2_bd = "";
    }


    if ($("#registro_p10_2_ap").is(":checked")) {
        var registro_p10_2_ap = "Aplicación informática";
    } else {
        var registro_p10_2_ap = "";
    }

    if ($("#registro_p10_2_plat").is(":checked")) {
        var registro_p10_2_plat = "Plataforma";
    } else {
        var registro_p10_2_plat = "";
    }


    if ($("#registro_p10_2_cap").is(":checked")) {
        var registro_p10_2_cap = "Capacidades de georreferenciar información";
    } else {
        var registro_p10_2_cap = "";
    }


    if ($("#registro_p10_2_otro").is(":checked")) {
        var registro_p10_2_otro = "Otro";
    } else {
        var registro_p10_2_otro = "";
    }

    var registro_p10_2_cual = $("#registro_p10_2_cual").val();

    var registro_p10_2_proliga = $("#registro_p10_2_proliga").val();

    if ($("#registro_p10_3_inter").is(":checked")) {
        var registro_p10_3_inter = "checked";
    } else {
        var registro_p10_3_inter = "unchecked";
    }

    if ($("#registro_p10_4_instmun").is(":checked")) {
        var registro_p10_4_instmun = "Instituciones municipales encargadas de la seguridad pública de la entidad";
    } else {
        var registro_p10_4_instmun = "";
    }

    if ($("#registro_p10_4_instmunot").is(":checked")) {
        var registro_p10_4_instmunot = "Instituciones municipales encargadas de la seguridad pública de otras entidades";
    } else {
        var registro_p10_4_instmunot = "";
    }

    if ($("#registro_p10_4_instestot").is(":checked")) {
        var registro_p10_4_instestot = "Instituciones estatales encargadas de la seguridad pública de otras entidades";
    } else {
        var registro_p10_4_instestot = "";
    }

    if ($("#registro_p10_4_sec").is(":checked")) {
        var registro_p10_4_sec = "Secretaría de Seguridad y Protección Ciudadana";
    } else {
        var registro_p10_4_sec = "";
    }

    if ($("#registro_p10_4_guar").is(":checked")) {
        var registro_p10_4_guar = "Guardia Nacional";
    } else {
        var registro_p10_4_guar = "";
    }

    if ($("#registro_p10_4_procotras").is(":checked")) {
        var registro_p10_4_procotras = "Procuraduría General de Justicia o Fiscalía General de otras entidades";
    } else {
        var registro_p10_4_procotras = "";
    }


    if ($("#registro_p10_4_fisc").is(":checked")) {
        var registro_p10_4_fisc = "Fiscalía General de la República";
    } else {
        var registro_p10_4_fisc = "";
    }


    if ($("#registro_p10_4_podjud").is(":checked")) {
        var registro_p10_4_podjud = "Poder Judicial de la entidad";
    } else {
        var registro_p10_4_podjud = "";
    }


    if ($("#registro_p10_4_podjudotras").is(":checked")) {
        var registro_p10_4_podjudotras = "Poder Judicial de otras entidades";
    } else {
        var registro_p10_4_podjudotras = "";
    }


    if ($("#registro_p10_4_podfed").is(":checked")) {
        var registro_p10_4_podfed = "Poder Judicial de la Federación";
    } else {
        var registro_p10_4_podfed = "";
    }


    if ($("#registro_p10_4_sipenent").is(":checked")) {
        var registro_p10_4_sipenent = "Sistema Penitenciario de la entidad";
    } else {
        var registro_p10_4_sipenent = "";
    }



    if ($("#registro_p10_4_sispen").is(":checked")) {
        var registro_p10_4_sispen = "Sistema Penitenciario de otras entidades";
    } else {
        var registro_p10_4_sispen = "";
    }


    if ($("#registro_p10_4_sispenfed").is(":checked")) {
        var registro_p10_4_sispenfed = "Sistema Penitenciario Federal";
    } else {
        var registro_p10_4_sispenfed = "";
    }


    if ($("#registro_p10_4_otro").is(":checked")) {
        var registro_p10_4_otro = "Otro";
    } else {
        var registro_p10_4_otro = "";
    }

    var registro_p10_4_cual = $("#registro_p10_4_cual").val();






    var datos = new FormData();

    datos.append("idFormulario", idFormulario);
    datos.append("uuid", uuid);
    datos.append("colaboracion_p9_tipcol", colaboracion_p9_tipcol);
    datos.append("colaboracion_p9_1_instcol", colaboracion_p9_1_instcol);

    datos.append("colaboracion_p9_2_finan", colaboracion_p9_2_finan);
    datos.append("colaboracion_p9_2_dona", colaboracion_p9_2_dona);
    datos.append("colaboracion_p9_2_capa", colaboracion_p9_2_capa);
    datos.append("colaboracion_p9_2_otros", colaboracion_p9_2_otros);
    datos.append("colaboracion_p9_2_cual", colaboracion_p9_2_cual);

    datos.append("colaboracion_p9_3_descol", colaboracion_p9_3_descol);



    datos.append("registro_p10_intsispla", registro_p10_intsispla);
    datos.append("registro_p10_1_servsispl", registro_p10_1_servsispl);
    datos.append("registro_p10_2_proliga", registro_p10_2_proliga);




    datos.append("registro_p10_intsispla", registro_p10_intsispla);
    datos.append("registro_p10_1_servsispl", registro_p10_1_servsispl);
    datos.append("registro_p10_2_proliga", registro_p10_2_proliga);


    datos.append("registro_p10_lib", registro_p10_lib);
    datos.append("registro_p10_imp", registro_p10_imp);
    datos.append("registro_p10_tab", registro_p10_tab);
    datos.append("registro_p10_cel", registro_p10_cel);
    datos.append("registro_p10_comp", registro_p10_comp);
    datos.append("registro_p10_otro", registro_p10_otro);
    datos.append("registro_p10_cual", registro_p10_cual);

    datos.append("registro_p10_1_ind", registro_p10_1_ind);
    datos.append("registro_p10_1_per", registro_p10_1_per);
    datos.append("registro_p10_1_cap", registro_p10_1_cap);
    datos.append("registro_p10_1_perdet", registro_p10_1_perdet);
    datos.append("registro_p10_1_del", registro_p10_1_del);
    datos.append("registro_p10_1_vic", registro_p10_1_vic);
    datos.append("registro_p10_1_perdes", registro_p10_1_perdes);
    datos.append("registro_p10_1_den", registro_p10_1_den);
    datos.append("registro_p10_1_pedetfad", registro_p10_1_pedetfad);
    datos.append("registro_p10_1_pedetpdis", registro_p10_1_pedetpdis);
    datos.append("registro_p10_1_llam", registro_p10_1_llam);
    datos.append("registro_p10_1_dil", registro_p10_1_dil);
    datos.append("registro_p10_1_part", registro_p10_1_part);
    datos.append("registro_p10_1_reu", registro_p10_1_reu);
    datos.append("registro_p10_1_comer", registro_p10_1_comer);
    datos.append("registro_p10_1_esc", registro_p10_1_esc);
    datos.append("registro_p10_1_atn", registro_p10_1_atn);
    datos.append("registro_p10_1_actu", registro_p10_1_actu);
    datos.append("registro_p10_1_otros", registro_p10_1_otros);
    datos.append("registro_p10_1_cuales", registro_p10_1_cuales);

    datos.append("registro_p10_2_lib", registro_p10_2_lib);
    datos.append("registro_p10_2_bd", registro_p10_2_bd);
    datos.append("registro_p10_2_ap", registro_p10_2_ap);
    datos.append("registro_p10_2_plat", registro_p10_2_plat);
    datos.append("registro_p10_2_cap", registro_p10_2_cap);
    datos.append("registro_p10_2_otro", registro_p10_2_otro);
    datos.append("registro_p10_2_cual", registro_p10_2_cual);
    datos.append("registro_p10_3_inter", registro_p10_3_inter);
    datos.append("registro_p10_4_instmun", registro_p10_4_instmun);
    datos.append("registro_p10_4_instmunot", registro_p10_4_instmunot);
    datos.append("registro_p10_4_instestot", registro_p10_4_instestot);
    datos.append("registro_p10_4_sec", registro_p10_4_sec);
    datos.append("registro_p10_4_guar", registro_p10_4_guar);
    datos.append("registro_p10_4_procotras", registro_p10_4_procotras);
    datos.append("registro_p10_4_fisc", registro_p10_4_fisc);
    datos.append("registro_p10_4_podjud", registro_p10_4_podjud);
    datos.append("registro_p10_4_podjudotras", registro_p10_4_podjudotras);
    datos.append("registro_p10_4_podfed", registro_p10_4_podfed);
    datos.append("registro_p10_4_sipenent", registro_p10_4_sipenent);
    datos.append("registro_p10_4_sispen", registro_p10_4_sispen);
    datos.append("registro_p10_4_sispenfed", registro_p10_4_sispenfed);
    datos.append("registro_p10_4_otro", registro_p10_4_otro);
    datos.append("registro_p10_4_cual", registro_p10_4_cual);





    datos.append("tab5", "tab5");



    $.ajax({

            url: "controladores/policias.controlador.php",
            method: "POST",
            data: datos,
            cache: false,
            contentType: false,
            processData: false,
            //dataType:"json",
            success: function(respuesta) {

                console.log(respuesta);
                //  if (respuesta.match(/correctamente.*/)){
                if (1 == 1) {

                    console.log(respuesta);
                    if (respuesta > 0) {
                        $("#idFormulario").val(respuesta);
                    }


                    swal({
                        type: "success",
                        title: respuesta,
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"
                    }).then(function(result) {
                        if (result.value) {

                            //window.location = "index.php?ruta=ventas&cliente="+seleccionarCliente;

                        }
                    })

                } else {
                    swal({
                        type: "success",
                        title: respuesta,
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"
                    }).then(function(result) {
                        if (result.value) {

                            //  window.location = "ventas";

                        }
                    })


                }

            }

        }

    )

})


$(".panel-body").on("click", ".crearTab6", function() {



    //MANDAMOS LOS DATOS A GUARDAR

    var idFormulario = $("#idFormulario").val();
    var uuid = $("#UUID").val();
    if ($("#indicadores_p11_modeval").is(":checked")) {
        var indicadores_p11_modeval = "Sí";
    } else {
        var indicadores_p11_modeval = "No";
    }
    var indicadores_p11_1_cualind = $("#indicadores_p11_1_cualind").val();

    var evaluacion_p11_2_evalind = $("#evaluacion_p11_2_evalind").val();

    if ($("#indicadores_p12_bunprac").is(":checked")) {
        var indicadores_p12_bunprac = "Sí";
    } else {
        var indicadores_p12_bunprac = "No";
    }

    var transparencia_p12_1_cualpract = $("#transparencia_p12_1_cualpract").val();

    if ($("#necesidades_p13_cap").is(":checked")) {
        var necesidades_p13_cap = "Capacitación";
    } else {
        var necesidades_p13_cap = "";
    }
    if ($("#necesidades_p13_recmat").is(":checked")) {
        var necesidades_p13_recmat = "Recursos materiales";
    } else {
        var necesidades_p13_recmat = "";
    }
    if ($("#necesidades_p13_rectec").is(":checked")) {
        var necesidades_p13_rectec = "Recursos técnicos";
    } else {
        var necesidades_p13_rectec = "";
    }
    if ($("#necesidades_p13_per").is(":checked")) {
        var necesidades_p13_per = "Personal";
    } else {
        var necesidades_p13_per = "";
    }
    if ($("#necesidades_p13_infra").is(":checked")) {
        var necesidades_p13_infra = "Infraestructura";
    } else {
        var necesidades_p13_infra = "";
    }
    if ($("#necesidades_p13_mej").is(":checked")) {
        var necesidades_p13_mej = "Mejoras legislativas";
    } else {
        var necesidades_p13_mej = "";
    }
    if ($("#necesidades_p13_prot").is(":checked")) {
        var necesidades_p13_prot = "Protocolos";
    } else {
        var necesidades_p13_prot = "";
    }
    if ($("#necesidades_p13_otros").is(":checked")) {
        var necesidades_p13_otros = "Otro";
    } else {
        var necesidades_p13_otros = "";
    }

    var necesidades_p13_cual = $("#necesidades_p13_cual").val();

    var necesidades_p13_1_desnec = $("#necesidades_p13_1_desnec").val();








    var datos = new FormData();
    datos.append("idFormulario", idFormulario);
    datos.append("uuid", uuid);
    datos.append("indicadores_p11_modeval", indicadores_p11_modeval);
    datos.append("indicadores_p11_1_cualind", indicadores_p11_1_cualind);
    datos.append("evaluacion_p11_2_evalind", evaluacion_p11_2_evalind);
    datos.append("indicadores_p12_bunprac", indicadores_p12_bunprac);
    datos.append("transparencia_p12_1_cualpract", transparencia_p12_1_cualpract);
    datos.append("necesidades_p13_cap", necesidades_p13_cap);
    datos.append("necesidades_p13_recmat", necesidades_p13_recmat);
    datos.append("necesidades_p13_rectec", necesidades_p13_rectec);
    datos.append("necesidades_p13_per", necesidades_p13_per);
    datos.append("necesidades_p13_infra", necesidades_p13_infra);
    datos.append("necesidades_p13_mej", necesidades_p13_mej);
    datos.append("necesidades_p13_prot", necesidades_p13_prot);
    datos.append("necesidades_p13_otros", necesidades_p13_otros);
    datos.append("necesidades_p13_cual", necesidades_p13_cual);
    datos.append("necesidades_p13_1_desnec", necesidades_p13_1_desnec);









    datos.append("tab6", "tab6");



    $.ajax({

            url: "controladores/policias.controlador.php",
            method: "POST",
            data: datos,
            cache: false,
            contentType: false,
            processData: false,
            //dataType:"json",
            success: function(respuesta) {

                console.log(respuesta);
                //  if (respuesta.match(/correctamente.*/)){
                if (1 == 1) {

                    console.log(respuesta);
                    if (respuesta > 0) {
                        $("#idFormulario").val(respuesta);
                    }


                    swal({
                        type: "success",
                        title: respuesta,
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"
                    }).then(function(result) {
                        if (result.value) {

                            //window.location = "index.php?ruta=ventas&cliente="+seleccionarCliente;

                        }
                    })

                } else {
                    swal({
                        type: "success",
                        title: respuesta,
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"
                    }).then(function(result) {
                        if (result.value) {

                            //  window.location = "ventas";

                        }
                    })


                }

            }

        }

    )

})



$(".panel-body").on("click", ".crearTab7", function() {



    //MANDAMOS LOS DATOS A GUARDAR

    var idFormulario = $("#idFormulario").val();
    var uuid = $("#UUID").val();

    if ($("#denunciaserv_p14_den").is(":checked")) {
        var denunciaserv_p14_den = "SÍ";
    } else {
        var denunciaserv_p14_den = "NO";
    }

    var denunciaserv_p14_den_cual = $("#denunciaserv_p14_den_cual").val();


    if ($("#denunciaserv_p14_1_orginv").is(":checked")) {
        var denunciaserv_p14_1_orginv = "Sí";
    } else {
        var denunciaserv_p14_1_orginv = "NO";
    }

    var denunciaserv_p14_2_quej = $("#denunciaserv_p14_2_quej").val();

    var denunciaserv_p14_3_inv_M = $("#denunciaserv_p14_3_inv_M").val();
    var denunciaserv_p14_3_inv_H = $("#denunciaserv_p14_3_inv_H").val();
    var denunciaserv_p14_3_inv_T = $("#denunciaserv_p14_3_inv_T").val();

    var denunciaserv_p14_3_int_M = $("#denunciaserv_p14_3_int_M").val();
    var denunciaserv_p14_3_int_H = $("#denunciaserv_p14_3_int_H").val();
    var denunciaserv_p14_3_int_T = $("#denunciaserv_p14_3_int_T").val();

    var denunciaserv_p14_3_reac_M = $("#denunciaserv_p14_3_reac_M").val();
    var denunciaserv_p14_3_reac_H = $("#denunciaserv_p14_3_reac_H").val();
    var denunciaserv_p14_3_reac_T = $("#denunciaserv_p14_3_reac_T").val();

    var denunciaserv_p14_3_proc_M = $("#denunciaserv_p14_3_proc_M").val();
    var denunciaserv_p14_3_proc_H = $("#denunciaserv_p14_3_proc_H").val();
    var denunciaserv_p14_3_proc_T = $("#denunciaserv_p14_3_proc_T").val();

    var denunciaserv_p14_3_seg_M = $("#denunciaserv_p14_3_seg_M").val();
    var denunciaserv_p14_3_seg_H = $("#denunciaserv_p14_3_seg_H").val();
    var denunciaserv_p14_3_seg_T = $("#denunciaserv_p14_3_seg_T").val();

    var denunciaserv_p14_3_prev_M = $("#denunciaserv_p14_3_prev_M").val();
    var denunciaserv_p14_3_prev_H = $("#denunciaserv_p14_3_prev_H").val();
    var denunciaserv_p14_3_prev_T = $("#denunciaserv_p14_3_prev_T").val();

    var denunciaserv_p14_3_pri_M = $("#denunciaserv_p14_3_pri_M").val();
    var denunciaserv_p14_3_pri_H = $("#denunciaserv_p14_3_pri_H").val();
    var denunciaserv_p14_3_pri_T = $("#denunciaserv_p14_3_pri_T").val();

    var denunciaserv_p14_3_otros = $("#denunciaserv_p14_3_otros").val();

    var denunciaserv_p14_3_otros_M = $("#denunciaserv_p14_3_otros_M").val();
    var denunciaserv_p14_3_otros_H = $("#denunciaserv_p14_3_otros_H").val();
    var denunciaserv_p14_3_otros_T = $("#denunciaserv_p14_3_otros_T").val();

    var denunciaserv_p14_4_inv_M = $("#denunciaserv_p14_4_inv_M").val();
    var denunciaserv_p14_4_inv_H = $("#denunciaserv_p14_4_inv_H").val();
    var denunciaserv_p14_4_inv_T = $("#denunciaserv_p14_4_inv_T").val();

    var denunciaserv_p14_4_intel_M = $("#denunciaserv_p14_4_intel_M").val();
    var denunciaserv_p14_4_intel_H = $("#denunciaserv_p14_4_intel_H").val();
    var denunciaserv_p14_4_intel_T = $("#denunciaserv_p14_4_intel_T").val();

    var denunciaserv_p14_4_reac_M = $("#denunciaserv_p14_4_reac_M").val();
    var denunciaserv_p14_4_reac_H = $("#denunciaserv_p14_4_reac_H").val();
    var denunciaserv_p14_4_reac_T = $("#denunciaserv_p14_4_reac_T").val();

    var denunciaserv_p14_4_proc_M = $("#denunciaserv_p14_4_proc_M").val();
    var denunciaserv_p14_4_proc_H = $("#denunciaserv_p14_4_proc_H").val();
    var denunciaserv_p14_4_proc_T = $("#denunciaserv_p14_4_proc_T").val();

    var denunciaserv_p14_4_seg_M = $("#denunciaserv_p14_4_seg_M").val();
    var denunciaserv_p14_4_seg_H = $("#denunciaserv_p14_4_seg_H").val();
    var denunciaserv_p14_4_seg_T = $("#denunciaserv_p14_4_seg_T").val();

    var denunciaserv_p14_4_prev_M = $("#denunciaserv_p14_4_prev_M").val();
    var denunciaserv_p14_4_prev_H = $("#denunciaserv_p14_4_prev_H").val();
    var denunciaserv_p14_4_prev_T = $("#denunciaserv_p14_4_prev_T").val();

    var denunciaserv_p14_4_pri_M = $("#denunciaserv_p14_4_pri_M").val();
    var denunciaserv_p14_4_pri_H = $("#denunciaserv_p14_4_pri_H").val();
    var denunciaserv_p14_4_pri_T = $("#denunciaserv_p14_4_pri_T").val();

    var denunciaserv_p14_4_otroscual = $("#denunciaserv_p14_4_otroscual").val();
    var denunciaserv_p14_4_otros_M = $("#denunciaserv_p14_4_otros_M").val();
    var denunciaserv_p14_4_otros_H = $("#denunciaserv_p14_4_otros_H").val();
    var denunciaserv_p14_4_otros_T = $("#denunciaserv_p14_4_otros_T").val();

    if ($("#denunciaserv_p142_den").is(":checked")) {
        var denunciaserv_p142_den = "SÍ";
    } else {
        var denunciaserv_p142_den = "NO";
    }

    var denunciaserv_p142_den_cual = $("#denunciaserv_p142_den_cual").val();
    var denunciaserv_p142_2_quej = $("#denunciaserv_p142_2_quej").val();
    var denunciaserv_p142_3_inv_M = $("#denunciaserv_p142_3_inv_M").val();
    var denunciaserv_p142_3_inv_H = $("#denunciaserv_p142_3_inv_H").val();
    var denunciaserv_p142_3_inv_T = $("#denunciaserv_p142_3_inv_T").val();
    var denunciaserv_p142_3_int_M = $("#denunciaserv_p142_3_int_M").val();
    var denunciaserv_p142_3_int_H = $("#denunciaserv_p142_3_int_H").val();
    var denunciaserv_p142_3_int_T = $("#denunciaserv_p142_3_int_T").val();
    var denunciaserv_p142_3_reac_M = $("#denunciaserv_p142_3_reac_M").val();
    var denunciaserv_p142_3_reac_H = $("#denunciaserv_p142_3_reac_H").val();
    var denunciaserv_p142_3_reac_T = $("#denunciaserv_p142_3_reac_T").val();
    var denunciaserv_p142_3_proc_M = $("#denunciaserv_p142_3_proc_M").val();
    var denunciaserv_p142_3_proc_H = $("#denunciaserv_p142_3_proc_H").val();
    var denunciaserv_p142_3_proc_T = $("#denunciaserv_p142_3_proc_T").val();
    var denunciaserv_p142_3_seg_M = $("#denunciaserv_p142_3_seg_M").val();
    var denunciaserv_p142_3_seg_H = $("#denunciaserv_p142_3_seg_H").val();
    var denunciaserv_p142_3_seg_T = $("#denunciaserv_p142_3_seg_T").val();
    var denunciaserv_p142_3_prev_M = $("#denunciaserv_p142_3_prev_M").val();
    var denunciaserv_p142_3_prev_H = $("#denunciaserv_p142_3_prev_H").val();
    var denunciaserv_p142_3_prev_T = $("#denunciaserv_p142_3_prev_T").val();
    var denunciaserv_p142_3_pri_M = $("#denunciaserv_p142_3_pri_M").val();
    var denunciaserv_p142_3_pri_H = $("#denunciaserv_p142_3_pri_H").val();
    var denunciaserv_p142_3_pri_T = $("#denunciaserv_p142_3_pri_T").val();
    var denunciaserv_p142_3_otros = $("#denunciaserv_p142_3_otros").val();
    var denunciaserv_p142_3_otros_M = $("#denunciaserv_p142_3_otros_M").val();
    var denunciaserv_p142_3_otros_H = $("#denunciaserv_p142_3_otros_H").val();
    var denunciaserv_p142_3_otros_T = $("#denunciaserv_p142_3_otros_T").val();
    var denunciaserv_p142_4_inv_M = $("#denunciaserv_p142_4_inv_M").val();
    var denunciaserv_p142_4_inv_H = $("#denunciaserv_p142_4_inv_H").val();
    var denunciaserv_p142_4_inv_T = $("#denunciaserv_p142_4_inv_T").val();
    var denunciaserv_p142_4_intel_M = $("#denunciaserv_p142_4_intel_M").val();
    var denunciaserv_p142_4_intel_H = $("#denunciaserv_p142_4_intel_H").val();
    var denunciaserv_p142_4_intel_T = $("#denunciaserv_p142_4_intel_T").val();
    var denunciaserv_p142_4_reac_M = $("#denunciaserv_p142_4_reac_M").val();
    var denunciaserv_p142_4_reac_H = $("#denunciaserv_p142_4_reac_H").val();
    var denunciaserv_p142_4_reac_T = $("#denunciaserv_p142_4_reac_T").val();
    var denunciaserv_p142_4_proc_M = $("#denunciaserv_p142_4_proc_M").val();
    var denunciaserv_p142_4_proc_H = $("#denunciaserv_p142_4_proc_H").val();
    var denunciaserv_p142_4_proc_T = $("#denunciaserv_p142_4_proc_T").val();
    var denunciaserv_p142_4_seg_M = $("#denunciaserv_p142_4_seg_M").val();
    var denunciaserv_p142_4_seg_H = $("#denunciaserv_p142_4_seg_H").val();
    var denunciaserv_p142_4_seg_T = $("#denunciaserv_p142_4_seg_T").val();
    var denunciaserv_p142_4_prev_M = $("#denunciaserv_p142_4_prev_M").val();
    var denunciaserv_p142_4_prev_H = $("#denunciaserv_p142_4_prev_H").val();
    var denunciaserv_p142_4_prev_T = $("#denunciaserv_p142_4_prev_T").val();
    var denunciaserv_p142_4_pri_M = $("#denunciaserv_p142_4_pri_M").val();
    var denunciaserv_p142_4_pri_H = $("#denunciaserv_p142_4_pri_H").val();
    var denunciaserv_p142_4_pri_T = $("#denunciaserv_p142_4_pri_T").val();
    var denunciaserv_p142_4_otroscual = $("#denunciaserv_p142_4_otroscual").val();
    var denunciaserv_p142_4_otros_M = $("#denunciaserv_p142_4_otros_M").val();
    var denunciaserv_p142_4_otros_H = $("#denunciaserv_p142_4_otros_H").val();
    var denunciaserv_p142_4_otros_T = $("#denunciaserv_p142_4_otros_T").val();





    var denuncias_p15_numtot = $("#denuncias_p15_numtot").val();

    var denuncias_p15_1_homi = $("#denuncias_p15_1_homi").val();
    var denuncias_p15_1_femi = $("#denuncias_p15_1_femi").val();
    var denuncias_p15_1_les = $("#denuncias_p15_1_les").val();
    var denuncias_p15_1_viofam = $("#denuncias_p15_1_viofam").val();
    var denuncias_p15_1_abusex = $("#denuncias_p15_1_abusex").val();
    var denuncias_p15_1_hossex = $("#denuncias_p15_1_hossex").val();
    var denuncias_p15_1_viol = $("#denuncias_p15_1_viol").val();
    var denuncias_p15_1_tratper = $("#denuncias_p15_1_tratper").val();
    var denuncias_p15_1_cormen = $("#denuncias_p15_1_cormen").val();
    var denuncias_p15_1_trafmen = $("#denuncias_p15_1_trafmen").val();

    if ($("#denuncias_p15_2_mecnopre").is(":checked")) {
        var denuncias_p15_2_mecnopre = "SÍ";
    } else {
        var denuncias_p15_2_mecnopre = "NO";
    }

    if ($("#denuncias_p15_3_pagint").is(":checked")) {
        var denuncias_p15_3_pagint = "Página de internet";
    } else {
        var denuncias_p15_3_pagint = "";
    }

    if ($("#denuncias_p15_3_tel").is(":checked")) {
        var denuncias_p15_3_tel = "Teléfono";
    } else {
        var denuncias_p15_3_tel = "";
    }

    if ($("#denuncias_p15_3_app").is(":checked")) {
        var denuncias_p15_3_app = "Aplicación Móvil (App)";
    } else {
        var denuncias_p15_3_app = "";
    }

    if ($("#necesidades_p15_3_sms").is(":checked")) {
        var necesidades_p15_3_sms = "SMS (mensaje de texto)";
    } else {
        var necesidades_p15_3_sms = "";
    }

    if ($("#necesidades_p15_3_otros").is(":checked")) {
        var necesidades_p15_3_otros = "Otro";
    } else {
        var necesidades_p15_3_otros = "";
    }

    var necesidades_p15_3_cuales = $("#necesidades_p15_3_cuales").val();

    var denuncias_p15_4_den = $("#denuncias_p15_4_den").val();

    var denunciaserv_p16_totdet_M = $("#denunciaserv_p16_totdet_M").val();
    var denunciaserv_p16_totdet_H = $("#denunciaserv_p16_totdet_H").val();
    var denunciaserv_p16_totdet_T = $("#denunciaserv_p16_totdet_T").val();

    var denunciaserv_p16_totdet_meno18M = $("#denunciaserv_p16_totdet_meno18M").val();
    var denunciaserv_p16_totdet_meno18H = $("#denunciaserv_p16_totdet_meno18H").val();
    var denunciaserv_p16_totdet_meno18T = $("#denunciaserv_p16_totdet_meno18T").val();
    var denunciaserv_p16_totdet_TM = $("#denunciaserv_p16_totdet_TM").val();
    var denunciaserv_p16_totdet_TH = $("#denunciaserv_p16_totdet_TH").val();
    var denunciaserv_p16_totdet_TT = $("#denunciaserv_p16_totdet_TT").val();


    var detenciones_p_16_1_detot = $("#detenciones_p_16_1_detot").val();
    var detenciones_p_16_1_defla = $("#detenciones_p_16_1_defla").val();
    var detenciones_p_16_1_decasurg = $("#detenciones_p_16_1_decasurg").val();

    if ($("#victimas_p17_bprac").is(":checked")) {
        var victimas_p17_bprac = "SÍ";
    } else {
        var victimas_p17_bprac = "NO";
    }

    var victimas_p17_1_cuales = $("#victimas_p17_1_cuales").val();







    var datos = new FormData();
    datos.append("idFormulario", idFormulario);
    datos.append("uuid", uuid);

    datos.append("denunciaserv_p14_den", denunciaserv_p14_den);

    datos.append("denunciaserv_p14_den_cual", denunciaserv_p14_den_cual);

    datos.append("denunciaserv_p14_1_orginv", denunciaserv_p14_1_orginv);

    datos.append("denunciaserv_p14_2_quej", denunciaserv_p14_2_quej);

    datos.append("denunciaserv_p14_3_inv_M", denunciaserv_p14_3_inv_M);
    datos.append("denunciaserv_p14_3_inv_H", denunciaserv_p14_3_inv_H);
    datos.append("denunciaserv_p14_3_inv_T", denunciaserv_p14_3_inv_T);

    datos.append("denunciaserv_p14_3_int_M", denunciaserv_p14_3_int_M);
    datos.append("denunciaserv_p14_3_int_H", denunciaserv_p14_3_int_H);
    datos.append("denunciaserv_p14_3_int_T", denunciaserv_p14_3_int_T);

    datos.append("denunciaserv_p14_3_reac_M", denunciaserv_p14_3_reac_M);
    datos.append("denunciaserv_p14_3_reac_H", denunciaserv_p14_3_reac_H);
    datos.append("denunciaserv_p14_3_reac_T", denunciaserv_p14_3_reac_T);

    datos.append("denunciaserv_p14_3_proc_M", denunciaserv_p14_3_proc_M);
    datos.append("denunciaserv_p14_3_proc_H", denunciaserv_p14_3_proc_H);
    datos.append("denunciaserv_p14_3_proc_T", denunciaserv_p14_3_proc_T);

    datos.append("denunciaserv_p14_3_seg_M", denunciaserv_p14_3_seg_M);
    datos.append("denunciaserv_p14_3_seg_H", denunciaserv_p14_3_seg_H);
    datos.append("denunciaserv_p14_3_seg_T", denunciaserv_p14_3_seg_T);

    datos.append("denunciaserv_p14_3_prev_M", denunciaserv_p14_3_prev_M);
    datos.append("denunciaserv_p14_3_prev_H", denunciaserv_p14_3_prev_H);
    datos.append("denunciaserv_p14_3_prev_T", denunciaserv_p14_3_prev_T);

    datos.append("denunciaserv_p14_3_pri_M", denunciaserv_p14_3_pri_M);
    datos.append("denunciaserv_p14_3_pri_H", denunciaserv_p14_3_pri_H);
    datos.append("denunciaserv_p14_3_pri_T", denunciaserv_p14_3_pri_T);

    datos.append("denunciaserv_p14_3_otros", denunciaserv_p14_3_otros);

    datos.append("denunciaserv_p14_3_otros_M", denunciaserv_p14_3_otros_M);
    datos.append("denunciaserv_p14_3_otros_H", denunciaserv_p14_3_otros_H);
    datos.append("denunciaserv_p14_3_otros_T", denunciaserv_p14_3_otros_T);

    datos.append("denunciaserv_p14_4_inv_M", denunciaserv_p14_4_inv_M);
    datos.append("denunciaserv_p14_4_inv_H", denunciaserv_p14_4_inv_H);
    datos.append("denunciaserv_p14_4_inv_T", denunciaserv_p14_4_inv_T);

    datos.append("denunciaserv_p14_4_intel_M", denunciaserv_p14_4_intel_M);
    datos.append("denunciaserv_p14_4_intel_H", denunciaserv_p14_4_intel_H);
    datos.append("denunciaserv_p14_4_intel_T", denunciaserv_p14_4_intel_T);

    datos.append("denunciaserv_p14_4_reac_M", denunciaserv_p14_4_reac_M);
    datos.append("denunciaserv_p14_4_reac_H", denunciaserv_p14_4_reac_H);
    datos.append("denunciaserv_p14_4_reac_T", denunciaserv_p14_4_reac_T);

    datos.append("denunciaserv_p14_4_proc_M", denunciaserv_p14_4_proc_M);
    datos.append("denunciaserv_p14_4_proc_H", denunciaserv_p14_4_proc_H);
    datos.append("denunciaserv_p14_4_proc_T", denunciaserv_p14_4_proc_T);

    datos.append("denunciaserv_p14_4_seg_M", denunciaserv_p14_4_seg_M);
    datos.append("denunciaserv_p14_4_seg_H", denunciaserv_p14_4_seg_H);
    datos.append("denunciaserv_p14_4_seg_T", denunciaserv_p14_4_seg_T);

    datos.append("denunciaserv_p14_4_prev_M", denunciaserv_p14_4_prev_M);
    datos.append("denunciaserv_p14_4_prev_H", denunciaserv_p14_4_prev_H);
    datos.append("denunciaserv_p14_4_prev_T", denunciaserv_p14_4_prev_T);

    datos.append("denunciaserv_p14_4_pri_M", denunciaserv_p14_4_pri_M);
    datos.append("denunciaserv_p14_4_pri_H", denunciaserv_p14_4_pri_H);
    datos.append("denunciaserv_p14_4_pri_T", denunciaserv_p14_4_pri_T);

    datos.append("denunciaserv_p14_4_otroscual", denunciaserv_p14_4_otroscual);
    datos.append("denunciaserv_p14_4_otros_M", denunciaserv_p14_4_otros_M);
    datos.append("denunciaserv_p14_4_otros_H", denunciaserv_p14_4_otros_H);
    datos.append("denunciaserv_p14_4_otros_T", denunciaserv_p14_4_otros_T);



    datos.append("denunciaserv_p142_den", denunciaserv_p142_den);

    datos.append("denunciaserv_p142_den_cual", denunciaserv_p142_den_cual);


    datos.append("denunciaserv_p142_2_quej", denunciaserv_p142_2_quej);

    datos.append("denunciaserv_p142_3_inv_M", denunciaserv_p142_3_inv_M);
    datos.append("denunciaserv_p142_3_inv_H", denunciaserv_p142_3_inv_H);
    datos.append("denunciaserv_p142_3_inv_T", denunciaserv_p142_3_inv_T);

    datos.append("denunciaserv_p142_3_int_M", denunciaserv_p142_3_int_M);
    datos.append("denunciaserv_p142_3_int_H", denunciaserv_p142_3_int_H);
    datos.append("denunciaserv_p142_3_int_T", denunciaserv_p142_3_int_T);

    datos.append("denunciaserv_p142_3_reac_M", denunciaserv_p142_3_reac_M);
    datos.append("denunciaserv_p142_3_reac_H", denunciaserv_p142_3_reac_H);
    datos.append("denunciaserv_p142_3_reac_T", denunciaserv_p142_3_reac_T);

    datos.append("denunciaserv_p142_3_proc_M", denunciaserv_p142_3_proc_M);
    datos.append("denunciaserv_p142_3_proc_H", denunciaserv_p142_3_proc_H);
    datos.append("denunciaserv_p142_3_proc_T", denunciaserv_p142_3_proc_T);

    datos.append("denunciaserv_p142_3_seg_M", denunciaserv_p142_3_seg_M);
    datos.append("denunciaserv_p142_3_seg_H", denunciaserv_p142_3_seg_H);
    datos.append("denunciaserv_p142_3_seg_T", denunciaserv_p142_3_seg_T);

    datos.append("denunciaserv_p142_3_prev_M", denunciaserv_p142_3_prev_M);
    datos.append("denunciaserv_p142_3_prev_H", denunciaserv_p142_3_prev_H);
    datos.append("denunciaserv_p142_3_prev_T", denunciaserv_p142_3_prev_T);

    datos.append("denunciaserv_p142_3_pri_M", denunciaserv_p142_3_pri_M);
    datos.append("denunciaserv_p142_3_pri_H", denunciaserv_p142_3_pri_H);
    datos.append("denunciaserv_p142_3_pri_T", denunciaserv_p142_3_pri_T);

    datos.append("denunciaserv_p142_3_otros", denunciaserv_p142_3_otros);

    datos.append("denunciaserv_p142_3_otros_M", denunciaserv_p142_3_otros_M);
    datos.append("denunciaserv_p142_3_otros_H", denunciaserv_p142_3_otros_H);
    datos.append("denunciaserv_p142_3_otros_T", denunciaserv_p142_3_otros_T);

    datos.append("denunciaserv_p142_4_inv_M", denunciaserv_p142_4_inv_M);
    datos.append("denunciaserv_p142_4_inv_H", denunciaserv_p142_4_inv_H);
    datos.append("denunciaserv_p142_4_inv_T", denunciaserv_p142_4_inv_T);

    datos.append("denunciaserv_p142_4_intel_M", denunciaserv_p142_4_intel_M);
    datos.append("denunciaserv_p142_4_intel_H", denunciaserv_p142_4_intel_H);
    datos.append("denunciaserv_p142_4_intel_T", denunciaserv_p142_4_intel_T);

    datos.append("denunciaserv_p142_4_reac_M", denunciaserv_p142_4_reac_M);
    datos.append("denunciaserv_p142_4_reac_H", denunciaserv_p142_4_reac_H);
    datos.append("denunciaserv_p142_4_reac_T", denunciaserv_p142_4_reac_T);

    datos.append("denunciaserv_p142_4_proc_M", denunciaserv_p142_4_proc_M);
    datos.append("denunciaserv_p142_4_proc_H", denunciaserv_p142_4_proc_H);
    datos.append("denunciaserv_p142_4_proc_T", denunciaserv_p142_4_proc_T);

    datos.append("denunciaserv_p142_4_seg_M", denunciaserv_p142_4_seg_M);
    datos.append("denunciaserv_p142_4_seg_H", denunciaserv_p142_4_seg_H);
    datos.append("denunciaserv_p142_4_seg_T", denunciaserv_p142_4_seg_T);

    datos.append("denunciaserv_p142_4_prev_M", denunciaserv_p142_4_prev_M);
    datos.append("denunciaserv_p142_4_prev_H", denunciaserv_p142_4_prev_H);
    datos.append("denunciaserv_p142_4_prev_T", denunciaserv_p142_4_prev_T);

    datos.append("denunciaserv_p142_4_pri_M", denunciaserv_p142_4_pri_M);
    datos.append("denunciaserv_p142_4_pri_H", denunciaserv_p142_4_pri_H);
    datos.append("denunciaserv_p142_4_pri_T", denunciaserv_p142_4_pri_T);

    datos.append("denunciaserv_p142_4_otroscual", denunciaserv_p142_4_otroscual);
    datos.append("denunciaserv_p142_4_otros_M", denunciaserv_p142_4_otros_M);
    datos.append("denunciaserv_p142_4_otros_H", denunciaserv_p142_4_otros_H);
    datos.append("denunciaserv_p142_4_otros_T", denunciaserv_p142_4_otros_T);



    datos.append("denuncias_p15_numtot", denuncias_p15_numtot);

    datos.append("denuncias_p15_1_homi", denuncias_p15_1_homi);
    datos.append("denuncias_p15_1_femi", denuncias_p15_1_femi);
    datos.append("denuncias_p15_1_les", denuncias_p15_1_les);
    datos.append("denuncias_p15_1_viofam", denuncias_p15_1_viofam);
    datos.append("denuncias_p15_1_abusex", denuncias_p15_1_abusex);
    datos.append("denuncias_p15_1_hossex", denuncias_p15_1_hossex);
    datos.append("denuncias_p15_1_viol", denuncias_p15_1_viol);
    datos.append("denuncias_p15_1_tratper", denuncias_p15_1_tratper);
    datos.append("denuncias_p15_1_cormen", denuncias_p15_1_cormen);
    datos.append("denuncias_p15_1_trafmen", denuncias_p15_1_trafmen);

    datos.append("denuncias_p15_2_mecnopre", denuncias_p15_2_mecnopre);

    datos.append("denuncias_p15_3_pagint", denuncias_p15_3_pagint);

    datos.append("denuncias_p15_3_tel", denuncias_p15_3_tel);
    datos.append("denuncias_p15_3_app", denuncias_p15_3_app);
    datos.append("necesidades_p15_3_sms", necesidades_p15_3_sms);
    datos.append("necesidades_p15_3_otros", necesidades_p15_3_otros);
    datos.append("necesidades_p15_3_cuales", necesidades_p15_3_cuales);

    datos.append("denuncias_p15_4_den", denuncias_p15_4_den);

    datos.append("denunciaserv_p16_totdet_M", denunciaserv_p16_totdet_M);
    datos.append("denunciaserv_p16_totdet_H", denunciaserv_p16_totdet_H);
    datos.append("denunciaserv_p16_totdet_T", denunciaserv_p16_totdet_T);

    datos.append("denunciaserv_p16_totdet_meno18M", denunciaserv_p16_totdet_meno18M);
    datos.append("denunciaserv_p16_totdet_meno18H", denunciaserv_p16_totdet_meno18H);
    datos.append("denunciaserv_p16_totdet_meno18T", denunciaserv_p16_totdet_meno18T);
    datos.append("denunciaserv_p16_totdet_TM", denunciaserv_p16_totdet_TM);
    datos.append("denunciaserv_p16_totdet_TH", denunciaserv_p16_totdet_TH);
    datos.append("denunciaserv_p16_totdet_TT", denunciaserv_p16_totdet_TT);






    datos.append("detenciones_p_16_1_detot", detenciones_p_16_1_detot);
    datos.append("detenciones_p_16_1_defla", detenciones_p_16_1_defla);
    datos.append("detenciones_p_16_1_decasurg", detenciones_p_16_1_decasurg);

    datos.append("victimas_p17_bprac", victimas_p17_bprac);
    datos.append("victimas_p17_1_cuales", victimas_p17_1_cuales);


    datos.append("tab7", "tab7");



    $.ajax({

            url: "controladores/policias.controlador.php",
            method: "POST",
            data: datos,
            cache: false,
            contentType: false,
            processData: false,
            //dataType:"json",
            success: function(respuesta) {

                console.log(respuesta);
                //  if (respuesta.match(/correctamente.*/)){
                if (1 == 1) {

                    console.log(respuesta);
                    if (respuesta > 0) {
                        $("#idFormulario").val(respuesta);
                    }


                    swal({
                        type: "success",
                        title: respuesta,
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"
                    }).then(function(result) {
                        if (result.value) {

                            //window.location = "index.php?ruta=ventas&cliente="+seleccionarCliente;

                        }
                    })

                } else {
                    swal({
                        type: "success",
                        title: respuesta,
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"
                    }).then(function(result) {
                        if (result.value) {

                            //  window.location = "ventas";

                        }
                    })


                }

            }

        }

    )

})


$(".panel-body").on("click", ".crearTab8", function() {



    //MANDAMOS LOS DATOS A GUARDAR

    var idFormulario = $("#idFormulario").val();
    var uuid = $("#UUID").val();

    if ($("#justiicia_p18_mesajus").is(":checked")) {
        var justiicia_p18_mesajus = "SÍ";
    } else {
        var justiicia_p18_mesajus = "NO";
    }

    if ($("#necesidades_p18_1_segobedo").is(":checked")) {
        var necesidades_p18_1_segobedo = "Secretaría de Gobierno del Estado";
    } else {
        var necesidades_p18_1_segobedo = "";
    }

    if ($("#necesidades_p18_1_uasisjus").is(":checked")) {
        var necesidades_p18_1_uasisjus = "Unidad de Apoyo al Sistema de Justicia";
    } else {
        var necesidades_p18_1_uasisjus = "";
    }

    if ($("#necesidades_p18_1_ptrisup").is(":checked")) {
        var necesidades_p18_1_ptrisup = "Presidente/a del Tribunal Superior de Justicia del Estado";
    } else {
        var necesidades_p18_1_ptrisup = "";
    }

    if ($("#necesidades_p18_1_fisgral").is(":checked")) {
        var necesidades_p18_1_fisgral = "Fiscal o Procurador/a General del Estado";
    } else {
        var necesidades_p18_1_fisgral = "";
    }

    if ($("#necesidades_p18_1_secsegpu").is(":checked")) {
        var necesidades_p18_1_secsegpu = "Secretario/a de Seguridad Pública/ Jefe de la Policía u homólogo";
    } else {
        var necesidades_p18_1_secsegpu = "";
    }

    if ($("#necesidades_p18_1_tinst").is(":checked")) {
        var necesidades_p18_1_tinst = "Titular del Instituto de la Defensoría del Estado";
    } else {
        var necesidades_p18_1_tinst = "";
    }

    if ($("#necesidades_p18_1_subsispen").is(":checked")) {
        var necesidades_p18_1_subsispen = "Subsecretario/a del Sistema Penitenciario/ Director General u homólogo";
    } else {
        var necesidades_p18_1_subsispen = "";
    }

    if ($("#necesidades_p18_1_tautsup").is(":checked")) {
        var necesidades_p18_1_tautsup = "Titular de la Autoridad de Supervisión de Medidas Cautelares y de Suspensión Condicional del Proceso";
    } else {
        var necesidades_p18_1_tautsup = "";
    }

    if ($("#necesidades_p18_1_tinsestm").is(":checked")) {
        var necesidades_p18_1_tinsestm = "Titular del Instituto Estatal de las Mujeres";
    } else {
        var necesidades_p18_1_tinsestm = " ";
    }

    if ($("#necesidades_p18_1_dif").is(":checked")) {
        var necesidades_p18_1_dif = "DIF estatal";
    } else {
        var necesidades_p18_1_dif = "";
    }

    if ($("#necesidades_p18_1_sipinna").is(":checked")) {
        var necesidades_p18_1_sipinna = "SIPINNA estatal";
    } else {
        var necesidades_p18_1_sipinna = "";
    }

    if ($("#necesidades_p18_1_secsal").is(":checked")) {
        var necesidades_p18_1_secsal = "Secretaría de Salud";
    } else {
        var necesidades_p18_1_secsal = "";
    }

    if ($("#necesidades_p18_1_comejavic").is(":checked")) {
        var necesidades_p18_1_comejavic = "Comisión Ejecutiva de Atención a Víctimas";
    } else {
        var necesidades_p18_1_comejavic = "";
    }

    if ($("#necesidades_p18_1_cenuatnvic").is(":checked")) {
        var necesidades_p18_1_cenuatnvic = "Centro o Unidad de atención a víctimas u homólogo";
    } else {
        var necesidades_p18_1_cenuatnvic = "";
    }

    if ($("#necesidades_p18_1_tcenjusm").is(":checked")) {
        var necesidades_p18_1_tcenjusm = "Titular del Centro de Justicia para Mujeres u homólogo";
    } else {
        var necesidades_p18_1_tcenjusm = "";
    }

    if ($("#necesidades_p18_1_tfisespm").is(":checked")) {
        var necesidades_p18_1_tfisespm = "Titular de Fiscalía Especializada en delitos en razón de género";
    } else {
        var necesidades_p18_1_tfisespm = "";
    }

    if ($("#necesidades_p18_1_dcenpen").is(":checked")) {
        var necesidades_p18_1_dcenpen = "Director/a de Centros penitenciarios";
    } else {
        var necesidades_p18_1_dcenpen = "";
    }

    if ($("#necesidades_p18_1_dcenpenadol").is(":checked")) {
        var necesidades_p18_1_dcenpenadol = "Director/a de Centros de internamiento para adolescentes";
    } else {
        var necesidades_p18_1_dcenpenadol = "";
    }

    if ($("#necesidades_p18_1_torgmec").is(":checked")) {
        var necesidades_p18_1_torgmec = "Titular del Órgano de Mecanismos Alternativos de Solución de Controversias en materia Penal u homólogo";
    } else {
        var necesidades_p18_1_torgmec = "";
    }

    if ($("#necesidades_p18_1_tsevper").is(":checked")) {
        var necesidades_p18_1_tsevper = "Titular de Servicios Periciales y Forenses u homólogo";
    } else {
        var necesidades_p18_1_tsevper = "";
    }

    if ($("#necesidades_p18_1_otros").is(":checked")) {
        var necesidades_p18_1_otros = "Otros";
    } else {
        var necesidades_p18_1_otros = "";
    }

    var necesidades_p18_1_cual = $("#necesidades_p18_1_cual").val();

    if ($("#justiicia_p18_2_semanal").is(":checked")) {
        var justiicia_p18_2_semanal = "SÍ";
    } else {
        var justiicia_p18_2_semanal = "NO";
    }

    if ($("#justiicia_p18_2_quincenal").is(":checked")) {
        var justiicia_p18_2_quincenal = "SÍ";
    } else {
        var justiicia_p18_2_quincenal = "NO";
    }

    if ($("#justiicia_p18_2_mensual").is(":checked")) {
        var justiicia_p18_2_mensual = "SÍ";
    } else {
        var justiicia_p18_2_mensual = "NO";
    }

    if ($("#justiicia_p18_2_bimestral").is(":checked")) {
        var justiicia_p18_2_bimestral = "SÍ";
    } else {
        var justiicia_p18_2_bimestral = "NO";
    }

    if ($("#justiicia_p18_2_trimestral").is(":checked")) {
        var justiicia_p18_2_trimestral = "SÍ";
    } else {
        var justiicia_p18_2_trimestral = "NO";
    }

    if ($("#justiicia_p18_2_semestral").is(":checked")) {
        var justiicia_p18_2_semestral = "SÍ";
    } else {
        var justiicia_p18_2_semestral = "NO";
    }

    if ($("#justiicia_p18_2_anual").is(":checked")) {
        var justiicia_p18_2_anual = "SÍ";
    } else {
        var justiicia_p18_2_anual = "NO";
    }

    var justiicia_p18_2_abierta = $("#justiicia_p18_2_abierta").val();




    var justiicia_p18_3_buenpract = $("#justiicia_p18_3_buenpract").val();

    if ($("#impacto_p19_medprev").is(":checked")) {
        var impacto_p19_medprev = "SÍ";
    } else {
        var impacto_p19_medprev = "NO";
    }

    var impacto_p19_1_medse = $("#impacto_p19_1_medse").val();

    if ($("#impacto_p19_2_incmed").is(":checked")) {
        var impacto_p19_2_incmed = "SÍ";
    } else {
        var impacto_p19_2_incmed = "NO";
    }

    var impacto_p19_3_descmed = $("#impacto_p19_3_descmed").val();

    var comfin = $("#comfin").val();



    if ($("#terapeutica_p20_progjus").is(":checked")) {
        var terapeutica_p20_progjus = "SÍ";
    } else {
        var terapeutica_p20_progjus = "NO";
    }

    var terapeutica_p20_1_may18_M = $("#terapeutica_p20_1_may18_M").val();
    var terapeutica_p20_1_may18_H = $("#terapeutica_p20_1_may18_H").val();
    var terapeutica_p20_1_may18_T = $("#terapeutica_p20_1_may18_T").val();

    var terapeutica_p20_1_men18_M = $("#terapeutica_p20_1_men18_M").val();
    var terapeutica_p20_1_men18_H = $("#terapeutica_p20_1_men18_H").val();
    var terapeutica_p20_1_men18_T = $("#terapeutica_p20_1_men18_T").val();

    var terapeutica_p20_1_total_M = $("#terapeutica_p20_1_total_M").val();
    var terapeutica_p20_1_total_H = $("#terapeutica_p20_1_total_H").val();
    var terapeutica_p20_1_total_T = $("#terapeutica_p20_1_total_T").val();

    var terapeutica_p20_2_can_M = $("#terapeutica_p20_2_can_M").val();
    var terapeutica_p20_2_can_H = $("#terapeutica_p20_2_can_H").val();
    var terapeutica_p20_2_can_T = $("#terapeutica_p20_2_can_T").val();

    var terapeutica_p20_2_men_M = $("#terapeutica_p20_2_men_M").val();
    var terapeutica_p20_2_men_H = $("#terapeutica_p20_2_men_H").val();
    var terapeutica_p20_2_men_T = $("#terapeutica_p20_2_men_T").val();

    var terapeutica_p20_2_fen_M = $("#terapeutica_p20_2_fen_M").val();
    var terapeutica_p20_2_fen_H = $("#terapeutica_p20_2_fen_H").val();
    var terapeutica_p20_2_fen_T = $("#terapeutica_p20_2_fen_T").val();

    var terapeutica_p20_2_coc_M = $("#terapeutica_p20_2_coc_M").val();
    var terapeutica_p20_2_coc_H = $("#terapeutica_p20_2_coc_H").val();
    var terapeutica_p20_2_coc_T = $("#terapeutica_p20_2_coc_T").val();

    var terapeutica_p20_2_her_M = $("#terapeutica_p20_2_her_M").val();
    var terapeutica_p20_2_her_H = $("#terapeutica_p20_2_her_H").val();
    var terapeutica_p20_2_her_T = $("#terapeutica_p20_2_her_T").val();

    var terapeutica_p20_2_alc_M = $("#terapeutica_p20_2_alc_M").val();
    var terapeutica_p20_2_alc_H = $("#terapeutica_p20_2_alc_H").val();
    var terapeutica_p20_2_alc_T = $("#terapeutica_p20_2_alc_T").val();

    var terapeutica_p20_2_otroascual = $("#terapeutica_p20_2_otroascual").val();

    var terapeutica_p20_2_otras_M = $("#terapeutica_p20_2_otras_M").val();
    var terapeutica_p20_2_otras_H = $("#terapeutica_p20_2_otras_H").val();
    var terapeutica_p20_2_otras_T = $("#terapeutica_p20_2_otras_T").val();


    var datos = new FormData();
    datos.append("idFormulario", idFormulario);
    datos.append("uuid", uuid);

    datos.append("justiicia_p18_mesajus", justiicia_p18_mesajus);

    datos.append("necesidades_p18_1_segobedo", necesidades_p18_1_segobedo);
    datos.append("necesidades_p18_1_uasisjus", necesidades_p18_1_uasisjus);
    datos.append("necesidades_p18_1_ptrisup", necesidades_p18_1_ptrisup);
    datos.append("necesidades_p18_1_fisgral", necesidades_p18_1_fisgral);
    datos.append("necesidades_p18_1_secsegpu", necesidades_p18_1_secsegpu);
    datos.append("necesidades_p18_1_tinst", necesidades_p18_1_tinst);
    datos.append("necesidades_p18_1_subsispen", necesidades_p18_1_subsispen);
    datos.append("necesidades_p18_1_tautsup", necesidades_p18_1_tautsup);
    datos.append("necesidades_p18_1_tinsestm", necesidades_p18_1_tinsestm);
    datos.append("necesidades_p18_1_dif", necesidades_p18_1_dif);
    datos.append("necesidades_p18_1_sipinna", necesidades_p18_1_sipinna);
    datos.append("necesidades_p18_1_secsal", necesidades_p18_1_secsal);
    datos.append("necesidades_p18_1_comejavic", necesidades_p18_1_comejavic);
    datos.append("necesidades_p18_1_cenuatnvic", necesidades_p18_1_cenuatnvic);
    datos.append("necesidades_p18_1_tcenjusm", necesidades_p18_1_tcenjusm);
    datos.append("necesidades_p18_1_tfisespm", necesidades_p18_1_tfisespm);
    datos.append("necesidades_p18_1_dcenpen", necesidades_p18_1_dcenpen);
    datos.append("necesidades_p18_1_dcenpenadol", necesidades_p18_1_dcenpenadol);
    datos.append("necesidades_p18_1_torgmec", necesidades_p18_1_torgmec);
    datos.append("necesidades_p18_1_tsevper", necesidades_p18_1_tsevper);
    datos.append("necesidades_p18_1_otros", necesidades_p18_1_otros);
    datos.append("necesidades_p18_1_cual", necesidades_p18_1_cual);

    datos.append("justiicia_p18_2_semanal", justiicia_p18_2_semanal);
    datos.append("justiicia_p18_2_quincenal", justiicia_p18_2_quincenal);
    datos.append("justiicia_p18_2_mensual", justiicia_p18_2_mensual);
    datos.append("justiicia_p18_2_bimestral", justiicia_p18_2_bimestral);
    datos.append("justiicia_p18_2_trimestral", justiicia_p18_2_trimestral);
    datos.append("justiicia_p18_2_semestral", justiicia_p18_2_semestral);
    datos.append("justiicia_p18_2_anual", justiicia_p18_2_anual);

    datos.append("justiicia_p18_2_abierta", justiicia_p18_2_abierta);




    datos.append("justiicia_p18_3_buenpract", justiicia_p18_3_buenpract);

    datos.append("impacto_p19_medprev", impacto_p19_medprev);

    datos.append("impacto_p19_1_medse", impacto_p19_1_medse);

    datos.append("impacto_p19_2_incmed", impacto_p19_2_incmed);

    datos.append("impacto_p19_3_descmed", impacto_p19_3_descmed);

    datos.append("comfin", comfin);




    datos.append("terapeutica_p20_progjus", terapeutica_p20_progjus);

    datos.append("terapeutica_p20_1_may18_M", terapeutica_p20_1_may18_M);
    datos.append("terapeutica_p20_1_may18_H", terapeutica_p20_1_may18_H);
    datos.append("terapeutica_p20_1_may18_T", terapeutica_p20_1_may18_T);

    datos.append("terapeutica_p20_1_men18_M", terapeutica_p20_1_men18_M);
    datos.append("terapeutica_p20_1_men18_H", terapeutica_p20_1_men18_H);
    datos.append("terapeutica_p20_1_men18_T", terapeutica_p20_1_men18_T);

    datos.append("terapeutica_p20_1_total_M", terapeutica_p20_1_total_M);
    datos.append("terapeutica_p20_1_total_H", terapeutica_p20_1_total_H);
    datos.append("terapeutica_p20_1_total_T", terapeutica_p20_1_total_T);

    datos.append("terapeutica_p20_2_can_M", terapeutica_p20_2_can_M);
    datos.append("terapeutica_p20_2_can_H", terapeutica_p20_2_can_H);
    datos.append("terapeutica_p20_2_can_T", terapeutica_p20_2_can_T);

    datos.append("terapeutica_p20_2_men_M", terapeutica_p20_2_men_M);
    datos.append("terapeutica_p20_2_men_H", terapeutica_p20_2_men_H);
    datos.append("terapeutica_p20_2_men_T", terapeutica_p20_2_men_T);

    datos.append("terapeutica_p20_2_fen_M", terapeutica_p20_2_fen_M);
    datos.append("terapeutica_p20_2_fen_H", terapeutica_p20_2_fen_H);
    datos.append("terapeutica_p20_2_fen_T", terapeutica_p20_2_fen_T);

    datos.append("terapeutica_p20_2_coc_M", terapeutica_p20_2_coc_M);
    datos.append("terapeutica_p20_2_coc_H", terapeutica_p20_2_coc_H);
    datos.append("terapeutica_p20_2_coc_T", terapeutica_p20_2_coc_T);

    datos.append("terapeutica_p20_2_her_M", terapeutica_p20_2_her_M);
    datos.append("terapeutica_p20_2_her_H", terapeutica_p20_2_her_H);
    datos.append("terapeutica_p20_2_her_T", terapeutica_p20_2_her_T);

    datos.append("terapeutica_p20_2_alc_M", terapeutica_p20_2_alc_M);
    datos.append("terapeutica_p20_2_alc_H", terapeutica_p20_2_alc_H);
    datos.append("terapeutica_p20_2_alc_T", terapeutica_p20_2_alc_T);

    datos.append("terapeutica_p20_2_otroascual", terapeutica_p20_2_otroascual);

    datos.append("terapeutica_p20_2_otras_M", terapeutica_p20_2_otras_M);
    datos.append("terapeutica_p20_2_otras_H", terapeutica_p20_2_otras_H);
    datos.append("terapeutica_p20_2_otras_T", terapeutica_p20_2_otras_T);


    datos.append("tab8", "tab8");



    $.ajax({

            url: "controladores/policias.controlador.php",
            method: "POST",
            data: datos,
            cache: false,
            contentType: false,
            processData: false,
            //dataType:"json",
            success: function(respuesta) {

                console.log(respuesta);
                //  if (respuesta.match(/correctamente.*/)){
                if (1 == 1) {

                    console.log(respuesta);
                    if (respuesta > 0) {
                        $("#idFormulario").val(respuesta);
                    }


                    swal({
                        type: "success",
                        title: respuesta,
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"
                    }).then(function(result) {
                        if (result.value) {

                            //window.location = "index.php?ruta=ventas&cliente="+seleccionarCliente;

                        }
                    })

                } else {
                    swal({
                        type: "success",
                        title: respuesta,
                        showConfirmButton: true,
                        confirmButtonText: "Cerrar"
                    }).then(function(result) {
                        if (result.value) {

                            //  window.location = "ventas";

                        }
                    })


                }

            }

        }

    )

})
</script>






<script type="text/javascript">

$(function() {
    enable_cb04();
    $("#mujeres_p4_ninguno").click(enable_cb04);
});

function enable_cb04() {
    if (this.checked) {
        $("input.group04").attr("disabled", true).removeAttr("checked");
    }
}

</script>



<script type="text/javascript">

$(function() {
    enable_cb05();
    $("#nna_p5_ninguno").click(enable_cb05);
});

function enable_cb05() {
    if (this.checked) {
        $("input.group05").attr("disabled", true).removeAttr("checked");
    }
}

</script>



<script type="text/javascript">

$(function() {
    enable_cb64();
    $("#indigenas_p6_4_ninguno").click(enable_cb64);
});

function enable_cb64() {
    if (this.checked) {
        $("input.group64").attr("disabled", true).removeAttr("checked");
    }
}

</script>


<script type="text/javascript">

$(function() {
    enable_cb65();
    $("#indigenas_p6_4_ninguno").click(enable_cb65);
});

function enable_cb65() {
    if (this.checked) {
        $("input.group65").attr("disabled", true).removeAttr("checked");
    }
}

</script>



<script type="text/javascript">

$(function() {
    enable_cb82();
    $("#discapacidad_p8_2_ninguno").click(enable_cb82);
});

function enable_cb82() {
    if (this.checked) {
        $("input.group82").attr("disabled", true).removeAttr("checked");
    }
}

</script>



<script type="text/javascript">
function validaNumericos(event) {
    if (event.charCode >= 48 && event.charCode <= 57) {
        return true;
    }
    return false;
}

</script>
