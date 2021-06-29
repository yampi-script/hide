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
  <li><a href="#tabs-1-ind">INSTRUCCIONES</a></li>
                        <li><a href="#tabs-1">Contacto</a></li>
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

                            //error_reporting(E_ALL);


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
<div style="font-weight: bold;">

<p style="font-size: 14px;;">La Unidad de Apoyo al Sistema de Justicia (UASJ) presenta la siguiente guía para facilitar el proceso de llenado del formulario de Plataforma Justicia.</p>
<p>A continuación se presentan las instrucciones para el correcto llenado de la información, así como el envío de la versión final del formulario.</p>


<p>La información reportada debe corresponder únicamente al Sistema de Justicia Penal Acusatorio con fecha de corte a diciembre 2020.</p>
<p></p>
<br>
 <blockquote style="font-size: 1em;">1. El formulario cuenta con una barra de navegación en la parte inferior del lado izquierdo que indica las secciones en las que este se divide.</blockquote>

<div style=" text-align: center;">
<img src="http://unidaddejusticia.com/registro/hide/vistas/img/m1.png" width="40%" height="40%">
</div>

 <blockquote style="font-size: 1em;">2. En la pestaña CONTACTO deberá incluirse la información correspondiente a las personas que fungirán como contactos y responsables de la información proporcionada para aclaración de dudas futuras.</blockquote>


  <ul>
        <li>El contacto principal hace referencia al superior jerárquico de la persona que realiza el llenado del formulario.
</li>
        <li>El contacto secundario se refiere a la persona enlace que responde el formulario.</li>
      </ul>




</ul>

<div style=" text-align: center;">
<img src="http://unidaddejusticia.com/registro/hide/vistas/img/m2.png" width="40%" height="40%">
</div>


<br>

<blockquote style="font-size: 1em;">
3. El estado del formulario se mostrará en la parte superior de la pantalla. El tipo de estado que se muestra corresponde a alguno de los siguientes:
</blockquote>

<ul>
      <li>
        INCOMPLETO: el formulario no ha sido concluido.
</li>
      <li>
        ENVIADO: el formulario fue completado y ha sido enviado en formato electrónico. Sin embargo, se encuentra pendiente con la respuesta en oficio.
      </li>

      <li>
        FINALIZADO: el formulario fue finalizado y enviado junto con la respuesta en oficio firmada por la persona titular de la Institución (Revisar paso 10).
      </li>
    </ul>


<div style=" text-align: center;">
<img src="http://unidaddejusticia.com/registro/hide/vistas/img/m3.png" width="40%" height="40%">
</div>
<br>
<blockquote style="font-size: 1em;">
4. Es posible realizar descargas preliminares de las respuestas en el formulario, seleccionando el ícono de PDF.
</blockquote>

<div style=" text-align: center;">
<img src="http://unidaddejusticia.com/registro/hide/vistas/img/m4.png" width="40%" height="40%">
</div>
<br>


<ul>
      <li>
        Este documento descargable no tiene validez oficial. Se mostrará una marca de agua con la leyenda “Vista Preliminar”.
      </li>
    </ul>

<div style=" text-align: center;">
<img src="http://unidaddejusticia.com/registro/hide/vistas/img/m5.png" width="40%">
</div>
<br>
<blockquote style="font-size: 1em;">
5. Una vez iniciado el formulario, es posible guardar los cambios y regresar posteriormente. Al dar click en GUARDAR CAMBIOS, se mostrará el mensaje “La información se ha guardado exitosamente”.
</blockquote>
<div style=" text-align: center;">
<img src="http://unidaddejusticia.com/registro/hide/vistas/img/m6.png" width="40%" height="40%">
<br><img src="http://unidaddejusticia.com/registro/hide/vistas/img/m6.1.png" width="40%" height="40%">
</div>
<br>
<blockquote style="font-size: 1em;">
6. En caso de que sea necesario escribir comentarios, sugerencias o si requiere realizar aclaraciones sobre alguna de las preguntas relacionadas al formulario, es posible incluirlas en la última sección OBSERVACIONES FINALES.
</blockquote>


<div style=" text-align: center;">
<img src="http://unidaddejusticia.com/registro/hide/vistas/img/m7.png" width="40%" height="40%">
</div>
<br>

<blockquote style="font-size: 1em;">
7. Cuando el formulario esté finalizado, será posible realizar el envío final. Asegúrese de que la información esté correcta porque no será posible realizar modificaciones posteriormente.
</blockquote>

<ul>
 <li>
   La Unidad de Apoyo al Sistema de Justicia realizará una validación del formulario. En caso de que se cuente con información faltante, se contactará con las personas responsables del formulario para completar la información.</p>
 </li>
</ul>


<div style=" text-align: center;">
<img src="http://unidaddejusticia.com/registro/hide/vistas/img/m8.png" width="40%" height="40%">
<br><img src="http://unidaddejusticia.com/registro/hide/vistas/img/m8.1.png" width="40%" height="40%">
</div>
<br>

<blockquote style="font-size: 1em;">
8. Una vez enviado el formulario será posible descargar una copia final de todas las respuestas en formato PDF.
</blockquote>
<div style=" text-align: center;">
<img src="http://unidaddejusticia.com/registro/hide/vistas/img/m9.png" width="40%" height="40%">
</div>
<blockquote style="font-size: 1em;">
9. Una vez que el formulario se envíe, es decir, cuando el estado del formulario diga “ENVIADO”, éste se deberá enviar como anexo en un oficio firmado por la persona titular de la Institución.
</blockquote>




<b>Enviar en físico a:<b>
  <ul>
   <li>
     Dirección física: General Prim #21, Colonia Centro, CP. 06000, CDMX.
   </li>
 </ul>

<b>O por correo electrónico a:<b>
  <ul>
   <li>
     Dirección electrónica: sistemadejusticia@segob.gob.mx.
   </li>
 </ul>


En caso de dudas en el llenado de la información, favor de contactar al número 51280000 ext. 33123 y 38114 o al correo electrónico
<a href="mailto:sistemadejusticia@segob.gob.mx?subject=Registro%20de formulario en platadorma&body=Email%20Adjunto%20el Pdf Oficial de mis respuestas" target="_blank">sistemadejusticia@segob.gob.mx</a>


</div>



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

/*
  $presupuesto_p3=$pregunta[0]["presupuesto_p3"];
*/



}
?>


<!--  Pregunta 1  -->
  <div >
    <h5>1.- ¿Cuántas personas laboran en la Defensoría Pública estatal? Desglosar por sexo.
</h5>
  </div>
  <br>

                                      <table class="table">
                                          <thead>
                                              <tr>

                                                  <th>#</th>
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
                                                            name="personal_d1_M"
                                                            id="personal_d1_M"
                                                            onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                            <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                            value="<?php echo $personal_d1_M; ?>">
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="input-group">
                                                        <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                            name="personal_d1_H"
                                                            id="personal_d1_H"
                                                            onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                            <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                            value="<?php echo $personal_d1_H; ?>">
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="input-group">
                                                        <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                            name="personal_d1_T"
                                                            id="personal_d1_T"
                                                            onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                            <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                            value="<?php echo $personal_d1_T; ?>">
                                                    </div>
                                                </td>
                                            </tr>


                                      </tbody>
                                      </table>


                                      <h5>


                                        1.1.-¿Cuántas personas laboran en la institución? Desglosar por función y sexo.
                                      </h5>
                                                <table class="table">
                                                    <thead>
                                                        <tr>
  <th>#</th>
                                                            <th>Descripción</th>
                                                            <th>Mujer </th>
                                                            <th>Hombre</th>
                                                            <th>Subtotal</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                      <tr>
                                                        <td>1.</td>
                                                        <td>Defensores públicos</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_d1_p1_defcuanlab_M"
                                                                    id="personal_d1_p1_defcuanlab_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_d1_p1_defcuanlab_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_d1_p1_defcuanlab_H"
                                                                    id="personal_d1_p1_defcuanlab_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_d1_p1_defcuanlab_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_d1_p1_defcuanlab_T"
                                                                    id="personal_d1_p1_defcuanlab_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_d1_p1_defcuanlab_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>

      <td>2</td>
                                                        <td>Asesores jurídicos</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_d1_p1_asecunlab_M" id="personal_d1_p1_asecunlab_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_d1_p1_asecunlab_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_d1_p1_asecunlab_H" id="personal_d1_p1_asecunlab_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_d1_p1_asecunlab_H; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_d1_p1_asecunlab_T" id="personal_d1_p1_asecunlab_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_d1_p1_asecunlab_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
      <td>3</td>
      <td><div style=<"float:left;">Otros (¿cuáles?) </div>
          <div class="input-group">
              <input type="text" class="form-control"
                  name="personal_d1_p1_otros" id="personal_d1_p1_otros"
                  <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                  value="<?php echo $personal_d1_p1_otros; ?>">
          </div>
      </td>


                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_d1_p1_otcuanlab_M"
                                                                    id="personal_d1_p1_otcuanlab_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_d1_p1_otcuanlab_M; ?>">
                                                            </div>
                                                        </td>



                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_d1_p1_otcuanlab_H"
                                                                    id="personal_d1_p1_otcuanlab_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_d1_p1_otcuanlab_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_d1_p1_otcuanlab_T"
                                                                    id="personal_d1_p1_otcuanlab_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_d1_p1_otcuanlab_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>


                                                    <tr>
      <td>9</td>
                                                        <td>Total</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_d1_p1_tot_M"
                                                                    id="personal_d1_p1_tot_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_d1_p1_tot_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_d1_p1_tot_H"
                                                                    id="personal_d1_p1_tot_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_d1_p1_tot_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="personal_d1_p1_tot_T"
                                                                    id="personal_d1_p1_tot_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_d1_p1_tot_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>




                                                </tbody>
                                            </table>

                                            <!--  Termina Pregunta 1  -->


                                            <!--   Pregunta 2  -->
                                            <div >
                                              <h5>1.2.-¿Cuántas personas defensoras públicas que laboran en la institución cuentan con una especialidad en materia penal? Desglosar por sexo.
                                          </h5>
                                            </div>
                                            <br>

                                                                                <table class="table">
                                                                                    <thead>
                                                                                        <tr>

                                                                                            <th>#</th>
                                                                                            <th> Mujer </th>
                                                                                            <th>Hombre</th>
                                                                                            <th>Total</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>

                                                                                      <tr>

                                                                                          <td>Total Personas  </td>
                                                                                          <td>
                                                                                              <div class="input-group">
                                                                                                  <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                                                      name="personal_d1_p1_2_espmatpenal_M"
                                                                                                      id="personal_d1_p1_2_espmatpenal_M"
                                                                                                      onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                                                      value="<?php echo $personal_d1_p1_2_espmatpenal_M; ?>">
                                                                                              </div>
                                                                                          </td>

                                                                                          <td>
                                                                                              <div class="input-group">
                                                                                                  <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                                                      name="personal_d1_p1_2_espmatpenal_H"
                                                                                                      id="personal_d1_p1_2_espmatpenal_H"
                                                                                                      onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                                                      value="<?php echo $personal_d1_p1_2_espmatpenal_H; ?>">
                                                                                              </div>
                                                                                          </td>

                                                                                          <td>
                                                                                              <div class="input-group">
                                                                                                  <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                                                      name="personal_d1_p1_2_espmatpenal_T"
                                                                                                      id="personal_d1_p1_2_espmatpenal_T"
                                                                                                      onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                                                      value="<?php echo $personal_d1_p1_2_espmatpenal_T; ?>">
                                                                                              </div>
                                                                                          </td>
                                                                                      </tr>


                                                                                </tbody>
                                                                                </table>






<!--1.3 -->
<div>
    <h5>1.3.-¿Cuántas personas defensoras públicas que laboran en la institución cuentan con una especialidad en alguna etapa del proceso penal? Desglosar por estapa del proceso penal y sexo
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
            <th>Subtotal</th>
        </tr>

    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Estapa de Investigación</td>
            <!--  esa queda asi presupuestop3 asi nadamas por que esa es de opcion multiple si y no-->
            <td>
                <div class="input-group">
                    <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group13";}?>"
                        name="personal_d1_p1_3_etainv_M"
                        id="personal_d1_p1_3_etainv_M"
                        onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                        <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                        value="<?php echo $personal_d1_p1_3_etainv_M; ?>">
                </div>
            </td>

            <td>
                <div class="input-group">
                    <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group13";}?>"
                        name="personal_d1_p1_3_etainv_H"
                        id="personal_d1_p1_3_etainv_H"
                        onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                        <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                        value="<?php echo $personal_d1_p1_3_etainv_H; ?>">
                </div>
            </td>


            <td>
                <div class="input-group">
                    <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group13";}?>"
                        name="personal_d1_p1_3_etainv_T"
                        id="personal_d1_p1_3_etainv_T"
                        onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                        <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                        value="<?php echo $personal_d1_p1_3_etainv_T; ?>">
                </div>
            </td>
        </tr>

        <tr>
            <td>2</td>
            <td>Etapa intermedia</td>
            <td>
                <div class="input-group">
                    <input type="number"  min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group13";}?>"
                        name="personal_d1_p1_3_etaint_M"
                        id="personal_d1_p1_3_etaint_M"
                        onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                        <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                        value="<?php echo $personal_d1_p1_3_etaint_M; ?>">
                </div>
            </td>

            <td>
                <div class="input-group">
                    <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group13";}?>"
                        name="personal_d1_p1_3_etaint_H"
                        id="personal_d1_p1_3_etaint_H"
                        onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                        <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                        value="<?php echo $personal_d1_p1_3_etaint_H; ?>">
                </div>
            </td>


            <td>
                <div class="input-group">
                    <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group13";}?>"
                        name="personal_d1_p1_3_etaint_T"
                        id="personal_d1_p1_3_etaint_T"
                        onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                        <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                        value="<?php echo $personal_d1_p1_3_etaint_T; ?>">
                </div>
            </td>

        </tr>


        <tr>
            <td>3</td>
            <td>Etapa de amparo y apelación</td>
            <td>
                <div class="input-group">
                    <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group13";}?>"
                        name="personal_d1_p1_3_etampacep_M"
                        id="personal_d1_p1_3_etampacep_M"
                        onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                        <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                        value="<?php echo $personal_d1_p1_3_etampacep_M; ?>">
                </div>
            </td>
            <td>
                <div class="input-group">
                    <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group13";}?>"
                        name="personal_d1_p1_3_etampacep_H"
                        id="personal_d1_p1_3_etampacep_H"
                        onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                        <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                        value="<?php echo $personal_d1_p1_3_etampacep_H; ?>">
                </div>
            </td>

            <td>
                <div class="input-group">
                    <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group13";}?>"
                        name="personal_d1_p1_3_etampacep_T"
                        id="personal_d1_p1_3_etampacep_T"
                        onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                        <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                        value="<?php echo $personal_d1_p1_3_etampacep_T; ?>">
                </div>
            </td>
        </tr>

        <tr>
            <td>4</td>
            <td>Etapa de ejecución penal o juicio oral</td>
            <td>
                <div class="input-group">
                    <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group13";}?>"
                        name="personal_d1_p1_3_etaejepen_M"
                        id="personal_d1_p1_3_etaejepen_M"
                        onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                        <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                        value="<?php echo $personal_d1_p1_3_etaejepen_M; ?>">
                </div>
            </td>
            <td>
                <div class="input-group">
                    <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group13";}?>"
                        name="personal_d1_p1_3_etaejepen_H"
                        id="personal_d1_p1_3_etaejepen_H"
                        onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                        <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                        value="<?php echo $personal_d1_p1_3_etaejepen_H; ?>">
                </div>
            </td>

            <td>
                <div class="input-group">
                    <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group13";}?>"
                        name="personal_d1_p1_3_etaejepen_T"
                        id="personal_d1_p1_3_etaejepen_T"
                        onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                        <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                        value="<?php echo $personal_d1_p1_3_etaejepen_T; ?>">
                </div>
            </td>
        </tr>


    </tbody>
</table>




<!-- 1.4 -->

<div>
    <h5>1.4.-¿Cuál es el ingreso bruto mensual de las personas defensoras públicas reportadas en la categoría 1 de la pregunta 1.1? Desglosar por ingreso bruto mensual y por sexo.

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
                  <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group14";}?>"
                      name="personal_d1_p1_4_siningre_M"
                      id="personal_d1_p1_4_siningre_M"
                      onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                      value="<?php echo $personal_d1_p1_4_siningre_M; ?>">
              </div>
          </td>

          <td>
              <div class="input-group">
                  <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group14";}?>"
                      name="personal_d1_p1_4_siningre_H"
                      id="personal_d1_p1_4_siningre_H"
                      onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                      value="<?php echo $personal_d1_p1_4_siningre_H; ?>">
              </div>
          </td>


          <td>
              <div class="input-group">
                  <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group14";}?>"
                      name="personal_d1_p1_4_siningre_T"
                      id="personal_d1_p1_4_siningre_T"
                      onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                      value="<?php echo $personal_d1_p1_4_siningre_T; ?>">
              </div>
          </td>

      </tr>

                                                    <tr>
                                                      <td>2</td>

                                                        <td>De 1 a 5,000 pesos</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group14";}?>"
                                                                    name="personal_d1_p1_4_1a5000_M"
                                                                    id="personal_d1_p1_4_1a5000_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_d1_p1_4_1a5000_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group14";}?>"
                                                                    name="personal_d1_p1_4_1a5000_H"
                                                                    id="personal_d1_p1_4_1a5000_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_d1_p1_4_1a5000_H; ?>">
                                                            </div>
                                                        </td>


                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group14";}?>"
                                                                    name="personal_d1_p1_4_1a5000_T"
                                                                    id="personal_d1_p1_4_1a5000_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_d1_p1_4_1a5000_T; ?>">
                                                            </div>
                                                        </td>

                                                    </tr>


                                                    <tr>
                                                      <td>3</td>

                                                        <td>De 5,001 a 10,000 pesos</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group14";}?>"
                                                                    name="personal_d1_p1_4_5001a10000_M"
                                                                    id="personal_d1_p1_4_5001a10000_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_d1_p1_4_5001a10000_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group14";}?>"
                                                                    name="personal_d1_p1_4_5001a10000_H"
                                                                    id="personal_d1_p1_4_5001a10000_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_d1_p1_4_5001a10000_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group14";}?>"
                                                                    name="personal_d1_p1_4_5001a10000_T"
                                                                    id="personal_d1_p1_4_5001a10000_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_d1_p1_4_5001a10000_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                      <td>4</td>

                                                        <td>De 10,001 a 15,000 pesos</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group14";}?>"
                                                                    name="personal_d1_p1_4_10001a15000_M"
                                                                    id="personal_d1_p1_4_10001a15000_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_d1_p1_4_10001a15000_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group14";}?>"
                                                                    name="personal_d1_p1_4_10001a15000_H"
                                                                    id="personal_d1_p1_4_10001a15000_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_d1_p1_4_10001a15000_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group14";}?>"
                                                                    name="personal_d1_p1_4_10001a15000_T"
                                                                    id="personal_d1_p1_4_10001a15000_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_d1_p1_4_10001a15000_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                      <td>5</td>

                                                        <td>De 15,001 a 20,000 pesos </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group14";}?>"
                                                                    name="personal_d1_p1_4_15001a20000_M"
                                                                    id="personal_d1_p1_4_15001a20000_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_d1_p1_4_15001a20000_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group14";}?>"
                                                                    name="personal_d1_p1_4_15001a20000_H"
                                                                    id="personal_d1_p1_4_15001a20000_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_d1_p1_4_15001a20000_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group14";}?>"
                                                                    name="personal_d1_p1_4_15001a20000_T"
                                                                    id="personal_d1_p1_4_15001a20000_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_d1_p1_4_15001a20000_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                      <td>6</td>

                                                        <td>De 20,001 a 25,000 pesos</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group14";}?>"
                                                                    name="personal_d1_p1_4_20001a25000_M"
                                                                    id="personal_d1_p1_4_20001a25000_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_d1_p1_4_20001a25000_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group14";}?>"
                                                                    name="personal_d1_p1_4_20001a25000_H"
                                                                    id="personal_d1_p1_4_20001a25000_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_d1_p1_4_20001a25000_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group14";}?>"
                                                                    name="personal_d1_p1_4_20001a25000_T"
                                                                    id="personal_d1_p1_4_20001a25000_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_d1_p1_4_20001a25000_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                      <td>7</td>

                                                        <td>De 25,001 a 30,000 pesos</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group14";}?>"
                                                                    name="personal_d1_p1_4_25001a30000_M"
                                                                    id="personal_d1_p1_4_25001a30000_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_d1_p1_4_25001a30000_M; ?>">
                                                            </div>
                                                        </td>


                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group14";}?>"
                                                                    name="personal_d1_p1_4_25001a30000_H"
                                                                    id="personal_d1_p1_4_25001a30000_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_d1_p1_4_25001a30000_H; ?>">
                                                            </div>
                                                        </td>


                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group14";}?>"
                                                                    name="personal_d1_p1_4_25001a30000_T"
                                                                    id="personal_d1_p1_4_25001a30000_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_d1_p1_4_25001a30000_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>



                                                    <tr>


                                                      <td>8</td>

                                                        <td>De 30,001 a 35,000 pesos </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group14";}?>"
                                                                    name="personal_d1_p1_4_30001a35000_M"
                                                                    id="personal_d1_p1_4_30001a35000_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_d1_p1_4_30001a35000_M; ?>">
                                                            </div>
                                                        </td>


                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group14";}?>"
                                                                    name="personal_d1_p1_4_30001a35000_H"
                                                                    id="personal_d1_p1_4_30001a35000_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_d1_p1_4_30001a35000_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group14";}?>"
                                                                    name="personal_d1_p1_4_30001a35000_T"
                                                                    id="personal_d1_p1_4_30001a35000_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_d1_p1_4_30001a35000_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                      <td>9</td>

                                                        <td>De 35,001 a 40,000 pesos </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group14";}?>"
                                                                    name="personal_d1_p1_4_35001a40000_M"
                                                                    id="personal_d1_p1_4_35001a40000_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_d1_p1_4_35001a40000_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group14";}?>"
                                                                    name="personal_d1_p1_4_35001a40000_H"
                                                                    id="personal_d1_p1_4_35001a40000_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_d1_p1_4_35001a40000_H; ?>">
                                                            </div>
                                                        </td>


                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group14";}?>"
                                                                    name="personal_d1_p1_4_35001a40000_T"
                                                                    id="personal_d1_p1_4_35001a40000_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_d1_p1_4_35001a40000_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>



                                                    <tr>
                                                      <td>10</td>

                                                        <td>De 40,001 a 45,000 pesos </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group14";}?>"
                                                                    name="personal_d1_p1_4_40001a45000_M"
                                                                    id="personal_d1_p1_4_40001a45000_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_d1_p1_4_40001a45000_M; ?>">
                                                            </div>
                                                        </td>


                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group14";}?>"
                                                                    name="personal_d1_p1_4_40001a45000_H"
                                                                    id="personal_d1_p1_4_40001a45000_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_d1_p1_4_40001a45000_H; ?>">
                                                            </div>
                                                        </td>



                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group14";}?>"
                                                                    name="personal_d1_p1_4_40001a45000_T"
                                                                    id="personal_d1_p1_4_40001a45000_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_d1_p1_4_40001a45000_T; ?>">
                                                            </div>
                                                        </td>

                                                    </tr>





                                                    <tr>

                                                      <td>11</td>

                                                        <td>De 45,001 a 50,000 pesos </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group14";}?>"
                                                                    name="personal_d1_p1_4_45001a50000_M"
                                                                    id="personal_d1_p1_4_45001a50000_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_d1_p1_4_45001a50000_M; ?>">
                                                            </div>
                                                        </td>


                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group14";}?>"
                                                                    name="personal_d1_p1_4_45001a50000_H"
                                                                    id="personal_d1_p1_4_45001a50000_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_d1_p1_4_45001a50000_H; ?>">
                                                            </div>
                                                        </td>



                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group14";}?>"
                                                                    name="personal_d1_p1_4_45001a50000_T"
                                                                    id="personal_d1_p1_4_45001a50000_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_d1_p1_4_45001a50000_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                      <td>12</td>

                                                        <td>Más de 50,000 pesos </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group14";}?>"
                                                                    name="personal_d1_p1_4_masde50000_M"
                                                                    id="personal_d1_p1_4_masde50000_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_d1_p1_4_masde50000_M; ?>">
                                                            </div>
                                                        </td>


                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group14";}?>"
                                                                    name="personal_d1_p1_4_masde50000_H"
                                                                    id="personal_d1_p1_4_masde50000_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_d1_p1_4_masde50000_H; ?>">
                                                            </div>
                                                        </td>



                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group14";}?>"
                                                                    name="personal_d1_p1_4_masde50000_T"
                                                                    id="personal_d1_p1_4_masde50000_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $personal_d1_p1_4_masde50000_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                            </table>

                                            <div>
                                                <input type="checkbox" name="personal_d1_4_nosesabe"
                                                    id="personal_d1_4_nosesabe"
                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                    <?php echo $personal_d1_4_nosesabe ?> /><label for="personal_d1_4_nosesabe">No se sabe</label>
                                            </div>








                                            <!--   Pregunta 3  -->










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
                          <div style="text-align: center;">
                            <!-- cambio realizado 21/06/2020 con base en documento-->
                            La información proporcionada en las siguientes preguntas nos permitirá conocer las capacitaciones con las que se podría coadyuvar a la institución. </div>

                            </div>
                            <br>
                            <div class="panel-body">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <form action="#" method="post" class="col-lg-12">
                                            <!--  Pregunta capacitacion.p2  -->
                                            <div >
                                              <h5>2.-¿Cuántas personas defensoras públicas reportadas en la categoría 1 de la pregunta 1.1, tomaron al menos una capacitación durante el año 2020? Desglosar por sexo.
                                          </h5>
                                            </div>
                                            <br>

                                                                                <table class="table">
                                                                                    <thead>
                                                                                        <tr>

                                                                                            <th>#</th>
                                                                                            <th> Mujer </th>
                                                                                            <th>Hombre</th>
                                                                                            <th>Total</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>

                                                                                      <tr>

                                                                                          <td>Total Personas  </td>
                                                                                          <td>
                                                                                              <div class="input-group">
                                                                                                  <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group02";}?>"
                                                                                                      name="capacitacion_d1_p2_mencap_M"
                                                                                                      id="capacitacion_d1_p2_mencap_M"
                                                                                                      onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                                                      value="<?php echo $capacitacion_d1_p2_mencap_M; ?>">
                                                                                              </div>
                                                                                          </td>

                                                                                          <td>
                                                                                              <div class="input-group">
                                                                                                  <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group02";}?>"
                                                                                                      name="capacitacion_d1_p2_mencap_H"
                                                                                                      id="capacitacion_d1_p2_mencap_H"
                                                                                                      onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                                                      value="<?php echo $capacitacion_d1_p2_mencap_H; ?>">
                                                                                              </div>
                                                                                          </td>

                                                                                          <td>
                                                                                              <div class="input-group">
                                                                                                  <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group02";}?>"
                                                                                                      name="capacitacion_d1_p2_mencap_T"
                                                                                                      id="capacitacion_d1_p2_mencap_T"
                                                                                                      onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                                                      value="<?php echo $capacitacion_d1_p2_mencap_T; ?>">
                                                                                              </div>
                                                                                          </td>
                                                                                      </tr>


                                                                                </tbody>
                                                                                </table>

                                                                                <div>
                                                                                    <input type="checkbox" name="capacitacion_d1_p2_nosesabe"
                                                                                        id="capacitacion_d1_p2_nosesabe"
                                                                                        <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                                        <?php echo $capacitacion_d1_2_nosesabe ?> /><label for="capacitacion_d1_p2_nosesabe">No se sabe</label>
                                                                                </div>




                                            <!--  Termina Pregunta capacitación.p2  -->

                                            <!--  Pregunta capacitacion.p2.1-->
                                            <div>
                                                <h5>2.1.-¿Cuántas personas defensoras públicas tomaron al menos una capacitación en las siguientes materias durante el año 2020? Desglosar por sexo.
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
                                                        <th>Subtotal</th>
                                                    </tr>

                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Sistema de Justicia Penal Acusatorio</td>
                                                        <!--  esa queda asi presupuestop3 asi nadamas por que esa es de opcion multiple si y no-->
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_sisjuspenacu_M"
                                                                    id="capa_d1_p2_1_sisjuspenacu_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_sisjuspenacu_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_sisjuspenacu_H"
                                                                    id="capa_d1_p2_1_sisjuspenacu_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_sisjuspenacu_H; ?>">
                                                            </div>
                                                        </td>


                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_sisjuspenacu_T"
                                                                    id="capa_d1_p2_1_sisjuspenacu_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_sisjuspenacu_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>2</td>
                                                        <td>Debido proceso</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number"  min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_debproc_M"
                                                                    id="capa_d1_p2_1_debproc_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_debproc_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_debproc_H"
                                                                    id="capa_d1_p2_1_debproc_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_debproc_H; ?>">
                                                            </div>
                                                        </td>


                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_debproc_T"
                                                                    id="capa_d1_p2_1_debproc_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_debproc_T; ?>">
                                                            </div>
                                                        </td>

                                                    </tr>


                                                    <tr>
                                                        <td>3</td>
                                                        <td>Feminicidio</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_fem_M"
                                                                    id="capa_d1_p2_1_fem_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_fem_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_fem_H"
                                                                    id="capa_d1_p2_1_fem_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_fem_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_fem_T"
                                                                    id="capa_d1_p2_1_fem_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_fem_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>4</td>
                                                        <td>Anti trata de personas</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_antratper_M"
                                                                    id="capa_d1_p2_1_antratper_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_antratper_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_antratper_H"
                                                                    id="capa_d1_p2_1_antratper_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_antratper_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_antratper_T"
                                                                    id="capa_d1_p2_1_antratper_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_antratper_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>5</td>
                                                        <td>Violencia contra las mujeres</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_viocontmuj_M"
                                                                    id="capa_d1_p2_1_viocontmuj_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_viocontmuj_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_viocontmuj_H"
                                                                    id="capa_d1_p2_1_viocontmuj_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_viocontmuj_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_viocontmuj_T"
                                                                    id="capa_d1_p2_1_viocontmuj_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_viocontmuj_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>6</td>
                                                        <td>Asistencia consular y derechos de extranjeros</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_asisconder_M"
                                                                    id="capa_d1_p2_1_asisconder_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_asisconder_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_asisconder_H"
                                                                    id="capa_d1_p2_1_asisconder_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_asisconder_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_asisconder_T"
                                                                    id="capa_d1_p2_1_asisconder_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_asisconder_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>7</td>
                                                        <td>Sistema Integral de Justicia Penal para Adolescentes</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_sisintjust_M"
                                                                    id="capa_d1_p2_1_sisintjust_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_sisintjust_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_sisintjust_H"
                                                                    id="capa_d1_p2_1_sisintjust_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_sisintjust_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_sisintjust_T"
                                                                    id="capa_d1_p2_1_sisintjust_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_sisintjust_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>8</td>
                                                        <td>Tortura</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_tort_M"
                                                                    id="capa_d1_p2_1_tort_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_tort_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_tort_H"
                                                                    id="capa_d1_p2_1_tort_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_tort_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_tort_T"
                                                                    id="capa_d1_p2_1_tort_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_tort_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>9</td>
                                                        <td>Atención a personas indígenas</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_atenperind_M"
                                                                    id="capa_d1_p2_1_atenperind_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_atenperind_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_atenperind_H"
                                                                    id="capa_d1_p2_1_atenperind_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_atenperind_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_atenperind_T"
                                                                    id="capa_d1_p2_1_atenperind_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_atenperind_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>10</td>
                                                        <td>Atención a personas con discapacidad</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_atenperdisc_M"
                                                                    id="capa_d1_p2_1_atenperdisc_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_atenperdisc_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_atenperdisc_H"
                                                                    id="capa_d1_p2_1_atenperdisc_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_atenperdisc_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_atenperdisc_T"
                                                                    id="capa_d1_p2_1_atenperdisc_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_atenperdisc_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>11</td>
                                                        <td>Atención a personas pertenecientes a la comunidad LGBTTTI</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_atenperlgbt_M"
                                                                    id="capa_d1_p2_1_atenperlgbt_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_atenperlgbt_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_atenperlgbt_H"
                                                                    id="capa_d1_p2_1_atenperlgbt_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_atenperlgbt_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_atenperlgbt_T"
                                                                    id="capa_d1_p2_1_atenperlgbt_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_atenperlgbt_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>12</td>
                                                        <td>Medidas cautelares</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_medcaut_M"
                                                                    id="capa_d1_p2_1_medcaut_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_medcaut_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_medcaut_H"
                                                                    id="capa_d1_p2_1_medcaut_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_medcaut_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_medcaut_T"
                                                                    id="capa_d1_p2_1_medcaut_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_medcaut_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>13</td>
                                                        <td>Justicia alternativa</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_justalt_M"
                                                                    id="capa_d1_p2_1_justalt_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_justalt_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_justalt_H"
                                                                    id="capa_d1_p2_1_justalt_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_justalt_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_justalt_T"
                                                                    id="capa_d1_p2_1_justalt_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_justalt_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>14</td>
                                                        <td>Justicia terapéutica</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_justera_M"
                                                                    id="capa_d1_p2_1_justera_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_justera_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_justera_H"
                                                                    id="capa_d1_p2_1_justera_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_justera_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_justera_T"
                                                                    id="capa_d1_p2_1_justera_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_justera_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>15</td>
                                                        <td>Justicia transicional</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_justrad_M"
                                                                    id="capa_d1_p2_1_justrad_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_justrad_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_justrad_H"
                                                                    id="capa_d1_p2_1_justrad_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_justrad_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_justrad_T"
                                                                    id="capa_d1_p2_1_justrad_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_justrad_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>16</td>
                                                        <td>Mediación</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_mediacion_M"
                                                                    id="capa_d1_p2_1_mediacion_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_mediacion_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_mediacion_H"
                                                                    id="capa_d1_p2_1_mediacion_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_mediacion_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_mediacion_T"
                                                                    id="capa_d1_p2_1_mediacion_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_mediacion_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>17</td>
                                                        <td>Reparación del daño</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_repdan_M"
                                                                    id="capa_d1_p2_1_repdan_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_repdan_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_repdan_H"
                                                                    id="capa_d1_p2_1_repdan_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_repdan_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_repdan_T"
                                                                    id="capa_d1_p2_1_repdan_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_repdan_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>18</td>
                                                        <td>Etapa de investigación</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_etainv_M"
                                                                    id="capa_d1_p2_1_etainv_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_etainv_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_etainv_H"
                                                                    id="capa_d1_p2_1_etainv_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_etainv_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_etainv_T"
                                                                    id="capa_d1_p2_1_etainv_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_etainv_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>19</td>
                                                        <td>Etapa intermedia</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_etaint_M"
                                                                    id="capa_d1_p2_1_etaint_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_etaint_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_etaint_H"
                                                                    id="capa_d1_p2_1_etaint_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_etaint_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_etaint_T"
                                                                    id="capa_d1_p2_1_etaint_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_etaint_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>20</td>
                                                        <td>Etapa de amparo y apelación</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_etampyape_M"
                                                                    id="capa_d1_p2_1_etampyape_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_etampyape_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_etampyape_H"
                                                                    id="capa_d1_p2_1_etampyape_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_etampyape_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_etampyape_T"
                                                                    id="capa_d1_p2_1_etampyape_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_etampyape_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>21</td>
                                                        <td>Etapa de ejecución penal o juicio oral</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_otros"
                                                                    id="capa_d1_p2_1_otros"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_otros; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_etaejepen_H"
                                                                    id="capa_d1_p2_1_etaejepen_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_etaejepen_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_etaejepen_T"
                                                                    id="capa_d1_p2_1_etaejepen_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_etaejepen_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>22</td>
                                                        <td>Otros temas (¿cuáles?)
                                                          <div class="input-group">
                                                              <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                  name="capa_d1_p2_1_otrocual_M"
                                                                  id="capa_d1_p2_1_otrocual_M"
                                                                  onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                  <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                  value="<?php echo $capa_d1_p2_1_otrocual_M; ?>">
                                                          </div>

                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_otrocual_M"
                                                                    id="capa_d1_p2_1_otrocual_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_otrocual_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_otrocual_H"
                                                                    id="capa_d1_p2_1_otrocual_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_otrocual_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group021";}?>"
                                                                    name="capa_d1_p2_1_otrocual_T"
                                                                    id="capa_d1_p2_1_otrocual_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $capa_d1_p2_1_otrocual_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>


                                                </tbody>

                                            </table>
                                              <table class="table">
                                              <tbody>
                                                <tr>
                                                    <div class="form-group col-md-6">
                                                        <div class="form-check form-check-inline">
                                                            <label class="form-check-label" for="cap_d1_p2_1_noaplicanosesabe">
                                                              <input class="form-check-input" type="checkbox"
                                                                name="cap_d1_p2_1_noaplicanosesabe" id="cap_d1_p2_1_noaplicanosesabe"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                <?php if ($cap_d1_p2_1_noaplicanosesabe == "No aplica"){echo ' checked="checked"'; }?> />
                                                            No aplica</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <label class="form-check-label"  for="cap_d1_p2_1_noaplicanosesabe_no">
                                                              <input class="form-check-input" type="checkbox"
                                                                name="cap_d1_p2_1_noaplicanosesabe" id="cap_d1_p2_1_noaplicanosesabe_no"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                <?php if ($cap_d1_p2_1_noaplicanosesabe == "No se sabe"){echo ' checked="checked"'; }?> />
                                                            No se sabe</label>
                                                        </div>
                                                    </div>
                                                </tr>
                                          </tbody>
                                        </table>


                                            <!--  Fin capacitacion.p2.1  -->

                                            <!--  Pregunta capacitacion.p2.2-->


                                            <div>
                                                <h5>2.2.-¿Qué instituciones u organismos nacionales o extranjeros impartieron las capacitaciones previamente mencionadas? (Capacitación y evaluación de personal)
                                                </h5>
                                            </div>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <div class="form-group col-md-6">

                                                          <textarea
                                                            class="form-control"
                                                            <?php if($estatus == 0){echo  "group022";}?>
                                                            name="cap_d1_p2_2_insorgcaprev" id="cap_d1_p2_2_insorgcaprev" rows="10" cols="90"
                                                            <?php if($estatus != 0) { echo "disabled='true'"; } ?>>
                                                            <?php echo $cap_d1_p2_2_insorgcaprev; ?></textarea>



                                                        </div>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!--  Fin capacitacion.p2.2  -->


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
                                                <h5>3.-¿La institución cuenta con autonomía presupuestal? </h5>
                                            </div>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <div class="form-group col-md-6">
                                                            <div class="form-check form-check-inline">
                                                                <label class="form-check-label" for="presupuesto_d1_autopresu">
                                                                  <input class="form-check-input" type="radio"
                                                                    name="presupuesto_d1_autopresu" id="presupuesto_d1_autopresu"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    <?php if ($presupuesto_d1_autopresu == "Sí"){echo ' checked="checked"'; }?> />
                                                                Sí</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <label class="form-check-label"  for="presupuesto_d1_autopresu_no">
                                                                  <input class="form-check-input" type="radio"
                                                                    name="presupuesto_d1_autopresu" id="presupuesto_d1_autopresu_no"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    <?php if ($presupuesto_d1_autopresu == "No"){echo ' checked="checked"'; }?> />
                                                                No</label>
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
                                                                name="presupuesto_d1_p3_1_pres2020"
                                                                id="presupuesto_d1_p3_1_pres2020"
                                                                onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                <?php if($estatus == 0) { echo "group031"; } ?>
                                                                    <?php if($presupuesto_p3 == "No") { echo "disabled='true'"; } ?>
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                value="<?php echo $presupuesto_d1_p3_1_pres2020; ?>">
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
                                                                name="prsupuesto_d1_p3_2_ejer20cap1000"
                                                                id="prsupuesto_d1_p3_2_ejer20cap1000"
                                                                onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                  <?php if($estatus == 0) { echo "group031"; } ?>
                                                                    <?php if($presupuesto_p3 == "No") { echo "disabled='true'"; } ?>
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                value="<?php echo $prsupuesto_d1_p3_2_ejer20cap1000; ?>">
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
/*
$mujeres_d4_nosesabe=

$ja_d5_totdefpubl_M=$pregunta[0]["ja_d5_totdefpubl_M"];
$ja_d5_totdefpubl_H=$pregunta[0]["ja_d5_totdefpubl_H"];
$ja_d5_totdefpubl_T=$pregunta[0]["ja_d5_totdefpubl_T"];
$ja_d5_1_totdefpubl_M=$pregunta[0]["ja_d5_1_totdefpubl_M"];
$ja_d5_1_totdefpubl_H=$pregunta[0]["ja_d5_1_totdefpubl_H"];
$ja_d5_1_totdefpubl_T=$pregunta[0]["ja_d5_1_totdefpubl_T"];
$ja_d5_2_protoInter=$pregunta[0]["ja_d5_2_protoInter"];
$ja_d5_2_protoInter_cual=$pregunta[0]["ja_d5_2_protoInter_cual"];
$ja_d5_2__interno=$pregunta[0]["ja_d5_2__interno"];
$ja_d5_2__interno_cua=$pregunta[0]["ja_d5_2__interno_cua"];
$ja_d5_2_SNDIF=$pregunta[0]["ja_d5_2_SNDIF"];
$ja_d5_2_SCJN=$pregunta[0]["ja_d5_2_SCJN"];
$ja_d5_2_ninguno=$pregunta[0]["ja_d5_2_ninguno"];
$ja_d5_2_otros=$pregunta[0]["ja_d5_2_otros"];
$ja_d5_2_nosesabe=$pregunta[0]["ja_d5_2_nosesabe"];
$ja_d5_3_instbuenaprac=$pregunta[0]["ja_d5_3_instbuenaprac"];
$ja_d5_3_nosesabe=$pregunta[0]["ja_d5_3_nosesabe"];
$ja_d5_4_cualbupra=$pregunta[0]["ja_d5_4_cualbupra"];
$ja_d5_4_cualbupra_noapl=$pregunta[0]["ja_d5_4_cualbupra_noapl"];
$indigenas_d6_defpunleind_M=$pregunta[0]["indigenas_d6_defpunleind_M"];
$indigenas_d6_defpunleind_H=$pregunta[0]["indigenas_d6_defpunleind_H"];
$indigenas_d6_defpunleind_T=$pregunta[0]["indigenas_d6_defpunleind_T"];
$indigenas_d6_defpunleind_noapli=$pregunta[0]["indigenas_d6_defpunleind_noapli"];
$indigenas_d6_defpunleind_nosesabe=$pregunta[0]["indigenas_d6_defpunleind_nosesabe"];
$indigenas_d6_1_interlegind=$pregunta[0]["indigenas_d6_1_interlegind"];
$indigenas_d6_2_nahu_M=$pregunta[0]["indigenas_d6_2_nahu_M"];
$indigenas_d6_2_nahu_H=$pregunta[0]["indigenas_d6_2_nahu_H"];
$indigenas_d6_2_nahu_T=$pregunta[0]["indigenas_d6_2_nahu_T"];
$indigenas_d6_2_maya_M=$pregunta[0]["indigenas_d6_2_maya_M"];
$indigenas_d6_2_maya_H=$pregunta[0]["indigenas_d6_2_maya_H"];
$indigenas_d6_2_maya_T=$pregunta[0]["indigenas_d6_2_maya_T"];
$indigenas_d6_2_Tseltal_M=$pregunta[0]["indigenas_d6_2_Tseltal_M"];
$indigenas_d6_2_Tseltal_H=$pregunta[0]["indigenas_d6_2_Tseltal_H"];
$indigenas_d6_2_Tseltal_T=$pregunta[0]["indigenas_d6_2_Tseltal_T"];
$indigenas_d6_2_Mix_M=$pregunta[0]["indigenas_d6_2_Mix_M"];
$indigenas_d6_2_Mix_H=$pregunta[0]["indigenas_d6_2_Mix_H"];
$indigenas_d6_2_Mix_T=$pregunta[0]["indigenas_d6_2_Mix_T"];
$indigenas_d6_2_Tsotsil_M=$pregunta[0]["indigenas_d6_2_Tsotsil_M"];
$indigenas_d6_2_Tsotsil_H=$pregunta[0]["indigenas_d6_2_Tsotsil_H"];
$indigenas_d6_2_Tsotsil_T=$pregunta[0]["indigenas_d6_2_Tsotsil_T"];
$indigenas_d6_2_otros=$pregunta[0]["indigenas_d6_2_otros"];
$indigenas_d6_2_otros_abierta=$pregunta[0]["indigenas_d6_2_otros_abierta"];
$indigenas_d6_2_noapl=$pregunta[0]["indigenas_d6_2_noapl"];
$indigenas_d6_2_nosesabe=$pregunta[0]["indigenas_d6_2_nosesabe"];
$indigenas_d6_3_conveinst=$pregunta[0]["indigenas_d6_3_conveinst"];
$indigenas_d6_4_nombinst=$pregunta[0]["indigenas_d6_4_nombinst"];
$indigenas_d6_5_protoInter=$pregunta[0]["indigenas_d6_5_protoInter"];
$indigenas_d6_5_protoInter_cual=$pregunta[0]["indigenas_d6_5_protoInter_cual"];
$indigenas_d6_5_interno=$pregunta[0]["indigenas_d6_5_interno"];
$indigenas_d6_5_interno_cua=$pregunta[0]["indigenas_d6_5_interno_cua"];
$indigenas_d6_5_SCJN=$pregunta[0]["indigenas_d6_5_SCJN"];
$indigenas_d6_5_ninguno=$pregunta[0]["indigenas_d6_5_ninguno"];
$indigenas_d6_5_otros=$pregunta[0]["indigenas_d6_5_otros"];
$indigenas_d6_5_nosesabe=$pregunta[0]["indigenas_d6_5_nosesabe"];
$indigenas_d6_6_pracinnvind=$pregunta[0]["indigenas_d6_6_pracinnvind"];
$indigenas_d6_7_cuabuepra=$pregunta[0]["indigenas_d6_7_cuabuepra"];
$indigenas_d6_7_noapli=$pregunta[0]["indigenas_d6_7_noapli"];

*/

}
?>




                                            <!--  Pregunta mujeresp4-->
                                            <div>
                                                <h5>4.- ¿Con qué protocolos cuenta la institución para garantizar los derechos de las mujeres?  </h5>
                                            </div>
                                            <table class="table">
                                                <tbody>
                                                    <tr>


                                                    <div>
                                                        <div class="form-check form-check-inline">
                                                            <input <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                            class="form-check-input <?php if($estatus == 0){echo  "group04";}?> " type="checkbox"
                                                                name="mujeres_d4_protoInter" id="mujeres_d4_protoInter"

                                                                <?php
                                                                if ($mujeres_d4_protoInter == "Protocolo internacional"){
                                                                  echo 'checked="checked"'; }?>
                                                                onchange="javascript:showContent()"
                                                                />

                                                            <label class="form-check-label"
                                                                for="mujeres_d4_protoInter">Protocolo internacional
                                                            </label>
                                                          </div>

                                                            <div id="content" style="display: none;">
                                                                <label class="form-check-label"
                                                                    for="mujeres_d4_protoInter_cual">
                                                                    (¿Cuáles?) </label>
                                                                <input <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                class="form-control group04" type="text"
                                                                    name="mujeres_d4_protoInter_cual"
                                                                    id="mujeres_d4_protoInter_cual"

                                                                    value="<?php echo $mujeres_d4_protoInter_cual; ?>">

                                                            </div>
                                                        </div>





                                                        <div class="form-check form-check-inline">
                                                            <input <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                            class="form-check-input <?php if($estatus == 0){echo  "group04";}?>" type="checkbox"
                                                                name="mujeres_d4_interno" id="mujeres_d4_interno"
                                                                onchange="javascript:showContent2()"

                                                                <?php if ($mujeres_d4_interno == "Protocolo interno"){echo ' checked="checked"'; }?> />
                                                            <label class="form-check-label group04" for="mujeres_d4_interno">
                                                                Protocolo interno</label>
                                                            <br>

                                                            <div id="content2" style="display: none;">
                                                                <label class="form-check-label" for="mujeres_d4_interno_cua">
                                                                    (¿Cuáles?) </label>
                                                                <input <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                class="form-control group04" type="text"
                                                                    name="mujeres_d4_interno_cua"
                                                                    id="mujeres_d4_interno_cua"

                                                                   value="<?php echo $mujeres_d4_interno_cua; ?>">
                                                            </div>

                                                        </div>




                                                        <div class="form-check form-check-inline">
                                                          <label class="form-check-label" for="mujeres_d4_prosupcorjus">   <input <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                          class="form-check-input <?php if($estatus == 0){echo  "group04";}?>" type="checkbox"
                                                                name="mujeres_d4_prosupcorjus" id="mujeres_d4_prosupcorjus"
                                                                <?php if ($mujeres_d4_prosupcorjus == "Protocolo  de la Suprema Corte de Justicia de la Nación para Juzgar con Perspectiva de Género"){echo ' checked="checked"'; }?> />

                                                        Protocolo  de la Suprema Corte de Justicia de la Nación para Juzgar con Perspectiva de Género </label>
                                                        </div>


                                                        <div class="form-check form-check-inline">
                                                            <input <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                            class="form-check-input" type="checkbox"
                                                                name="mujeres_d4_ninguna" id="mujeres_d4_ninguna"
                                                                <?php if ($mujeres_d4_ninguna == "Ninguno"){
                                                                  echo ' checked="checked"';
                                                                }?> />

                                                            <label class="form-check-label"
                                                                for="mujeres_d4_ninguna">Ninguno</label>
                                                        </div>

                                                        <div class="form-check form-check-inline">
                                                          <label  class="form-check-label" for="mujeres_d4_otros">
                                                              <input  <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                              class="form-check-input <?php if($estatus == 0){echo  "group04";}?>" type="checkbox"
                                                                name="mujeres_d4_otros" id="mujeres_d4_otros"
                                                                onchange="javascript:showContent400()"
                                                                <?php if ($mujeres_d4_otros == "Otro"){
                                                                  echo ' checked="checked"';
                                                                }?> />

                                                                Otro</label>
                                                            <br>

                                                            <!--Duda-->
                                                            <div id="content400" style="display: none;">
                                                                <label class="form-check-label " for="mujeres_d4_otros_cual">
                                                                    ¿Cuáles? </label>
                                                                <input <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                class="form-control group04" type="text" name="mujeres_d4_otros_cual"
                                                                    id="mujeres_d4_otros_cual"

                                                                    value="<?php echo $mujeres_d4_otros_cual; ?>">

                                                            </div>

                                                            </div>

                                                            <div class="form-check form-check-inline">
                                                                <input <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                class="form-check-input" type="checkbox"
                                                                    name="mujeres_d4_nosesabe" id="mujeres_d4_nosesabe"
                                                                    <?php if ($mujeres_d4_nosesabe == "No se sabe"){
                                                                      echo ' checked="checked"';
                                                                    }?> />

                                                                <label class="form-check-label"
                                                                    for="mujeres_d4_nosesabe">No se sabe</label>
                                                            </div>


                                                    </tr>
                                                </tbody>
                                            </table>






                                            <!--Fin pregunta mujeresp4-->

                                            <!--  Pregunta mujeresp4.1-->
                                            <div>
                                                <h5>4.1.- ¿La institución cuenta con buenas prácticas que considere sean innovadoras para mejorar el acceso a la justicia para las mujeres?
                                                </h5>
                                            </div>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <div class="form-group col-md-6">
                                                            <div class="form-check form-check-inline">
                                                                <label class="form-check-label" for="mujeres_d4_1_pracjusmujeres">
                                                                  <input class="form-check-input" type="radio"
                                                                    name="mujeres_d4_1_pracjusmujeres" id="mujeres_d4_1_pracjusmujeres"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    <?php if ($mujeres_d4_1_pracjusmujeres == "Sí"){echo ' checked="checked"'; }?> />
                                                                Sí</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <label class="form-check-label" for="mujeres_d4_1_pracjusmujeres_no">
                                                                  <input class="form-check-input" type="radio"
                                                                    name="mujeres_d4_1_pracjusmujeres" id="mujeres_d4_1_pracjusmujeres_no"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    <?php if ($mujeres_d4_1_pracjusmujeres_no == "No"){echo ' checked="checked"'; }?> />
                                                                No</label>
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

                                                          <textarea   <?php if($estatus != 0) { echo "readonly='true'"; } ?>
                                                            <?php if($mujeres_p4_1_buenprac == "No") { echo "readonly='true'"; } ?>
                                                            class="form-control" name="mujeres_d4_2_bunprac"
                                                              id="mujeres_d4_2_bunprac" rows="10" cols="90" ><?php echo $mujeres_d4_2_bunprac; ?></textarea>
                                                        </div>



                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!--  Fin mujeresp4_2  -->
                                            <!--  Pregunta mujeresp4_2-->
                                            <div>
                                                <h5>4.3.- Total de personas defensoras públicas que cuentan con una especialidad en justicia para las mujeres. Desglosar por sexo. </h5>
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
                                                                    name="mujeres_d4_3_totde_M" id="mujeres_d4_3_totde_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $mujeres_d4_3_totde_M; ?>">

                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number"  min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="mujeres_d4_3_totde_H" id="mujeres_d4_3_totde_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $mujeres_d4_3_totde_H; ?>">

                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number"  min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="mujeres_d4_3_totde_T" id="mujeres_d4_3_totde_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $mujeres_d4_3_totde_T; ?>">
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
                                <h3 class="panel-title text-center">5.JUSTICIA PENAL PARA ADOLESCENTES</h3>
                            </div>
                            <br>
                            <div class="panel-body">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <form action="#" method="post" class="col-lg-12">

                                            <!--  Pregunta nna_p5-->
                                            <div>
                                                <h5>5.- Total de personas defensoras públicas que cuentan con una especialidad en justicia penal para adolescentes. Desglosar por sexo. </h5>
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
                                                                    name="ja_d5_totdefpubl_M" id="ja_d5_totdefpubl_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $ja_d5_totdefpubl_M; ?>">

                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number"  min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="ja_d5_totdefpubl_H" id="ja_d5_totdefpubl_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $ja_d5_totdefpubl_H; ?>">

                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number"  min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="ja_d5_totdefpubl_T" id="ja_d5_totdefpubl_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $ja_d5_totdefpubl_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div>
                                                <h5>5.1.- ¿Con cuántas personas defensoras públicas especializadas en justicia para adolescentes cuenta la institución? Desglosar por sexo.</h5>
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
                                                                    name="ja_d5_1_totdefpubl_M" id="ja_d5_1_totdefpubl_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $ja_d5_1_totdefpubl_M; ?>">

                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number"  min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="ja_d5_1_totdefpubl_H" id="ja_d5_1_totdefpubl_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $ja_d5_1_totdefpubl_H; ?>">

                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number"  min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="ja_d5_1_totdefpubl_T" id="ja_d5_1_totdefpubl_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $ja_d5_1_totdefpubl_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div>
                                                <h5>5.2.- ¿Con qué protocolos cuenta la institución para garantizar  los derechos de niñas, niños y adolescentes?  </h5>
                                            </div>
                                            <table class="table">
                                                <tbody>
                                                    <tr>


                                                    <div>
                                                        <div class="form-check form-check-inline">
                                                            <input <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                            class="form-check-input <?php if($estatus == 0){echo  "group52";}?> " type="checkbox"
                                                                name="ja_d5_2_protoInter" id="ja_d5_2_protoInter"

                                                                <?php
                                                                if ($ja_d5_2_protoInter == "Protocolo internacional"){
                                                                  echo 'checked="checked"'; }?>
                                                                onchange="javascript:showContent22()"
                                                                />

                                                            <label class="form-check-label"
                                                                for="ja_d5_2_protoInter">Protocolo internacional
                                                            </label>
                                                          </div>

                                                            <div id="content" style="display: none;">
                                                                <label class="form-check-label"
                                                                    for="ja_d5_2_protoInter_cual">
                                                                    (¿Cuáles?) </label>
                                                                <input <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                class="form-control group52" type="text"
                                                                    name="ja_d5_2_protoInter_cual"
                                                                    id="ja_d5_2_protoInter_cual"

                                                                    value="<?php echo $ja_d5_2_protoInter_cual; ?>">

                                                            </div>
                                                        </div>


                                                        <div>
                                                            <div class="form-check form-check-inline">
                                                                <input <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                class="form-check-input <?php if($estatus == 0){echo  "group52";}?> " type="checkbox"
                                                                    name="ja_d5_2_interno" id="ja_d5_2_interno"

                                                                    <?php
                                                                    if ($ja_d5_2_interno == " Protocolo interno"){
                                                                      echo 'checked="checked"'; }?>
                                                                    onchange="javascript:showContent11()"
                                                                    />

                                                                <label class="form-check-label"
                                                                    for="ja_d5_2_interno"> Protocolo interno
                                                                </label>
                                                              </div>

                                                                <div id="content" style="display: none;">
                                                                    <label class="form-check-label"
                                                                        for="ja_d5_2_interno_cua">
                                                                        (¿Cuáles?) </label>
                                                                    <input <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    class="form-control group52" type="text"
                                                                        name="ja_d5_2_interno_cua"
                                                                        id="ja_d5_2_interno_cua"

                                                                        value="<?php echo $ja_d5_2_interno_cua; ?>">

                                                                </div>
                                                            </div>




                                                        <div class="form-check form-check-inline">
                                                          <label class="form-check-label" for="ja_d5_2_SNDIF">   <input <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                          class="form-check-input <?php if($estatus == 0){echo  "group52";}?>" type="checkbox"
                                                                name="ja_d5_2_SNDIF" id="ja_d5_2_SNDIF"
                                                                <?php if ($ja_d5_2_SNDIF == "Protocolo de Atención Integral para Niñas, Niños y Adolescentes Víctimas de Delito y en Condiciones de Vulnerabilidad (SNDIF)"){echo ' checked="checked"'; }?> />

                                                        Protocolo de Atención Integral para Niñas, Niños y Adolescentes Víctimas de Delito y en Condiciones de Vulnerabilidad (SNDIF)</label>
                                                        </div>

                                                        <div class="form-check form-check-inline">
                                                          <label class="form-check-label" for="ja_d5_2_SCJN">   <input <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                          class="form-check-input <?php if($estatus == 0){echo  "group52";}?>" type="checkbox"
                                                                name="ja_d5_2_SCJN" id="ja_d5_2_SCJN"
                                                                <?php if ($ja_d5_2_SCJN == "Protocolo de actuación para quienes imparten justicia en casos que involucren a niñas, niños y adolescentes (SCJN)"){echo ' checked="checked"'; }?> />

                                                      	Protocolo de actuación para quienes imparten justicia en casos que involucren a niñas, niños y adolescentes (SCJN)</label>
                                                        </div>


                                                        <div class="form-check form-check-inline">
                                                            <input <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                            class="form-check-input" type="checkbox"
                                                                name="ja_d5_2_ninguno" id="ja_d5_2_ninguno"
                                                                <?php if ($ja_d5_2_ninguno == "Ninguno"){
                                                                  echo ' checked="checked"';
                                                                }?> />

                                                            <label class="form-check-label"
                                                                for="ja_d5_2_ninguno">Ninguno</label>
                                                        </div>

                                                        <div class="form-check form-check-inline">
                                                          <label  class="form-check-label" for="ja_d5_2_otros">
                                                              <input  <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                              class="form-check-input <?php if($estatus == 0){echo  "group52";}?>" type="checkbox"
                                                                name="ja_d5_2_otros" id="ja_d5_2_otros"
                                                                onchange="javascript:showContent99()"
                                                                <?php if ($ja_d5_2_otros == "Otro"){
                                                                  echo ' checked="checked"';
                                                                }?> />

                                                                Otros</label>
                                                            <br>

                                                            <div id="content400" style="display: none;">
                                                                <label class="form-check-label " for="ja_d5_2_otros_cual">
                                                                    ¿Cuáles? </label>
                                                                <input <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                class="form-control group52" type="text" name="ja_d5_2_otros_cual"
                                                                    id="ja_d5_2_otros_cual"

                                                                    value="<?php echo $ja_d5_2_otros_cual; ?>">

                                                            </div>
                                                            </div>


                                                            <div class="form-check form-check-inline">
                                                                <input <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                class="form-check-input" type="checkbox"
                                                                    name="ja_d5_2_nosesabe" id="ja_d5_2_nosesabe"
                                                                    <?php if ($ja_d5_2_nosesabe == "No se sabe"){
                                                                      echo ' checked="checked"';
                                                                    }?> />

                                                                <label class="form-check-label"
                                                                    for="ja_d5_2_nosesabe">No se sabe</label>
                                                            </div>

                                                    </tr>
                                                </tbody>
                                            </table>


                                            <div>
                                                <h5>5.3.- ¿La institución cuenta con buenas prácticas que considere sean innovadoras para mejorar el acceso a la justicia para niñas, niños y adolescentes?   </h5>
                                            </div>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                      <div class="form-group col-md-12">

                                                        <div class="form-group col-md-6">
                                                            <div class="form-check form-check-inline">
                                                              <label class="form-check-label" for="ja_d5_3_instbuenaprac">
                                                                <input class="form-check-input" type="radio"
                                                                    name="ja_d5_3_instbuenaprac" id="ja_d5_3_instbuenaprac"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    <?php if ($ja_d5_3_instbuenaprac == "Sí"){echo ' checked="checked"'; }?> />
                                                                Sí</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                              <label class="form-check-label" for="ja_d5_3_instbuenaprac_no">
                                                                <input class="form-check-input" type="radio"
                                                                    name="ja_d5_3_instbuenaprac" id="ja_d5_3_instbuenaprac_no"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    <?php if ($ja_d5_3_instbuenaprac == "No"){echo ' checked="checked"'; }?> />
                                                                No</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                              <label class="form-check-label" for="ja_d5_3_instbuenaprac_nosesabe">
                                                                <input class="form-check-input" type="radio"
                                                                    name="ja_d5_3_instbuenaprac" id="ja_d5_3_instbuenaprac_nosesabe"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    <?php if ($ja_d5_3_instbuenaprac == "No se sabe"){echo ' checked="checked"'; }?> />
                                                                No se sabe</label>
                                                            </div>
                                                        </div>



                                                     </div>
                                                    </tr>
                                                </tbody>
</table>

<div>
    <h5>5.4.- ¿Cuáles son esas buenas prácticas? </h5>
</div>
<table class="table">
    <tbody>
        <tr>
            <div class="form-group col-md-6">

              <textarea   <?php if($estatus != 0) { echo "readonly='true'"; } ?>
                <?php if($ja_d5_4_cualbupra == "No") { echo "readonly='true'"; } ?>
                class="form-control" name="ja_d5_4_cualbupra"
                  id="ja_d5_4_cualbupra" rows="10" cols="90" ><?php echo $ja_d5_4_cualbupra; ?></textarea>
            </div>

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
                                                <h5>6.- Total de personas defensoras públicas laborando en la institución que hablan una lengua indígena. Desglosar por sexo.   </h5>
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
                                                                    name="indigenas_d6_defpunleind_M" id="indigenas_d6_defpunleind_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $indigenas_d6_defpunleind_M; ?>">

                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number"  min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="indigenas_d6_defpunleind_H" id="indigenas_d6_defpunleind_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $indigenas_d6_defpunleind_H; ?>">

                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number"  min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="indigenas_d6_defpunleind_T" id="indigenas_d6_defpunleind_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $indigenas_d6_defpunleind_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>




                                            </tbody>



                                        </table>
                                        <table class="table">
                                            <tbody>
                                                <tr>

                                        <div class="form-group col-md-6">
                                            <div class="form-check form-check-inline">
                                                <label class="form-check-label" for="indigenas_d6_defpunleind_noaplinosabe">
                                                <input class="form-check-input" type="radio"
                                                    name="indigenas_d6_defpunleind_noaplinosabe" id="indigenas_d6_defpunleind_noaplinosabe"
                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                    <?php if ($indigenas_d6_defpunleind_noaplinosabe == "No aplica"){echo ' checked="checked"'; }?> />
                                            No aplica</label>
                                            </div>
                                            <div class="form-check form-check-inline">

                                                <label class="form-check-label" for="indigenas_d6_defpunleind_noaplinosabe_no">
                                                <input class="form-check-input" type="radio"
                                                    name="indigenas_d6_defpunleind_noaplinosabe" id="indigenas_d6_defpunleind_noaplinosabe_no"
                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                    <?php if ($indigenas_d6_defpunleind_noaplinosabe == "No se sabe"){echo ' checked="checked"'; }?> />
                                              No se sabe</label>
                                            </div>
                                        </div>
                                      </tr>
                                  </tbody>
                              </table>

                                            <div>
                                                <h5>6.1.- ¿La institución cuenta con intérpretes/traductores de lenguas indígenas?  </h5>
                                            </div>
                                            <table class="table">
                                                <tbody>
                                                    <tr>

                                                      <div class="form-group col-md-6">
                                                          <div class="form-check form-check-inline">
                                                              <label class="form-check-label" for="indigenas_d6_1_interlegind">
                                                              <input class="form-check-input" type="radio"
                                                                  name="indigenas_d6_1_interlegind" id="indigenas_d6_1_interlegind"
                                                                  <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                  <?php if ($indigenas_d6_1_interlegind == "Sí"){echo ' checked="checked"'; }?> />
                                                          Sí</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">

                                                              <label class="form-check-label" for="indigenas_d6_1_interlegind_no">
                                                              <input class="form-check-input" type="radio"
                                                                  name="indigenas_d6_1_interlegind" id="indigenas_d6_1_interlegind_no"
                                                                  <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                  <?php if ($indigenas_d6_1_interlegind == "No"){echo ' checked="checked"'; }?> />
                                                            No</label>
                                                          </div>
                                                      </div>

                                                    </tr>
                                                </tbody>
                                            </table>


                                            <div>
                                                <h5>6.2.- ¿Con cuántos intérpretes/traductores cuenta la institución? Desglosar por lengua indígena y sexo.  </h5>
                                            </div>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Descripción</th>
                                                        <th>Mujer</th>
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
                                                                    name="indigenas_d6_2_nahu_M" id="indigenas_d6_2_nahu_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                      value="<?php echo $indigenas_d6_2_nahu_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="indigenas_d6_2_nahu_H" id="indigenas_d6_2_nahu_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $indigenas_d6_2_nahu_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="indigenas_d6_2_nahu_T" id="indigenas_d6_2_nahu_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $indigenas_d6_2_nahu_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>2</td>
                                                        <td>Maya</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="indigenas_d6_2_maya_M" id="indigenas_d6_2_maya_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $indigenas_d6_2_maya_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="indigenas_d6_2_maya_H" id="indigenas_d6_2_maya_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $indigenas_d6_2_maya_H; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="indigenas_d6_2_maya_T" id="indigenas_d6_2_maya_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $indigenas_d6_2_maya_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>3</td>
                                                        <td>Tseltal</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="indigenas_d6_2_Tseltal_M" id="indigenas_d6_2_Tseltal_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $indigenas_d6_2_Tseltal_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="indigenas_d6_2_Tseltal_H" id="indigenas_d6_2_Tseltal_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $indigenas_d6_2_Tseltal_H; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="indigenas_d6_2_Tseltal_T" id="indigenas_d6_2_Tseltal_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $indigenas_d6_2_Tseltal_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>4</td>
                                                        <td>Mixteco</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="indigenas_d6_2_Mix_M" id="indigenas_d6_2_Mix_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $indigenas_d6_2_Mix_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="indigenas_d6_2_Mix_H" id="indigenas_d6_2_Mix_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $indigenas_d6_2_Mix_H; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="indigenas_d6_2_Mix_T" id="indigenas_d6_2_Mix_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $indigenas_d6_2_Mix_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>




                                                    <tr>
                                                        <td>5</td>
                                                        <td>Tsotsil</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="indigenas_d6_2_Tsotsil_M" id="indigenas_d6_2_Tsotsil_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $indigenas_d6_2_Tsotsil_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="indigenas_d6_2_Tsotsil_H" id="indigenas_d6_2_Tsotsil_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $indigenas_d6_2_Tsotsil_H; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="indigenas_d6_2_Tsotsil_T" id="indigenas_d6_2_Tsotsil_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $indigenas_d6_2_Tsotsil_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>


                                      <td>6</td>
                                      <td><div style=<"float:left;">Otros (¿cuáles?) </div>
                                      <div class="input-group">
                                      <input type="text" class="form-control"
                                      name="indigenas_d6_2_otros_cual" id="indigenas_d6_2_otros_cual"
                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                      value="<?php echo $indigenas_d6_2_otros_cual; ?>">
                                      </div>
                                      </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="indigenas_d6_2otros_M" id="indigenas_d6_2otros_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $indigenas_d6_2otros_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="indigenas_d6_2otros_H" id="indigenas_d6_2otros_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $indigenas_d6_2otros_H; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="indigenas_d6_2otros_T" id="indigenas_d6_2otros_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $indigenas_d6_2otros_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>

                                            </table>





                                                                                        <div>
                                                                                            <input type="checkbox" name="indigenas_d6_2_nosesabe"
                                                                                                id="indigenas_d6_2_nosesabe"
                                                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                                                <?php echo $indigenas_d6_2_nosesabe ?> /><label
                                                                                                for="indigenas_d6_2_nosesabe"> No se sabe</label>
                                                                                        </div>



                                            <!--  Fin  Pregunta indigenas_p6.1 -->

                                            <!--  Pregunta indigenas_p6_2-->
                                            <div>
                                                <h5>6.3.- ¿Tienen convenios con alguna institución que provea este servicio?  </h5>
                                            </div>
                                            <table class="table">
                                                <tbody>
                                                    <tr>

                                                      <div class="form-group col-md-6">
                                                          <div class="form-check form-check-inline">
                                                              <label class="form-check-label" for="indigenas_d6_3_conveinst">
                                                              <input class="form-check-input" type="radio"
                                                                  name="indigenas_d6_3_conveinst" id="indigenas_d6_3_conveinst"
                                                                  <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                  <?php if ($indigenas_d6_3_conveinst == "Sí"){echo ' checked="checked"'; }?> />
                                                          Sí</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">

                                                              <label class="form-check-label" for="indigenas_d6_3_conveinst_no">
                                                              <input class="form-check-input" type="radio"
                                                                  name="indigenas_d6_3_conveinst" id="indigenas_d6_3_conveinst_no"
                                                                  <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                  <?php if ($indigenas_d6_3_conveinst == "No"){echo ' checked="checked"'; }?> />
                                                            No</label>
                                                          </div>
                                                      </div>

                                                    </tr>
                                                </tbody>
                                            </table>


                                            <div>
                                                <h5>6.4.- ¿Cuál es el nombre de la institución o instituciones? </h5>
                                            </div>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <div class="form-group col-md-6">


                                                          <textarea  <?php if($estatus != 0) { echo "readonly='true'"; } ?>
                                                            <?php if($indigenas_d6_4_nombinst == "No") { echo "readonly='true'"; } ?>

                                                            class="form-control" name="indigenas_d6_4_nombinst" id="indigenas_d6_4_nombinst" rows="10" cols="90" ><?php echo $indigenas_d6_4_nombinst; ?></textarea>


                                                        </div>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!--  Fin indigenas_p6_3 -->
                                            <!--  Pregunta indigenas_p6_4-->
                                            <div>
                                                <h5>6.5.- ¿Con qué protocolos cuenta la institución para garantizar los derechos de las personas indígenas?</h5>
                                            </div>
                                            <table class="table">
                                                <tbody>
                                                    <tr>

                                                      <div class="form-check form-check-inline">
                                                          <input class="form-check-input <?php if($estatus == 0){echo  "group64";}?>" type="checkbox"
                                                              name="indigenas_d6_5_protoInter"
                                                              id="indigenas_d6_5_protoInter"
                                                              onchange="javascript:showContent100()"
                                                              <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                              <?php if ($indigenas_d6_5_protoInter == "Protocolo internacional"){echo ' checked="checked"'; }?>
                                                               />
                                                          <label class="form-check-label"
                                                              for="indigenas_d6_5_protoInter">Protocolo internacional
                                                          </label>


                                                          <div id="content100" style="display: none;">
                                                              <label class="form-check-label"
                                                                  for="indigenas_d6_5_protoInter_cual">
                                                                  (¿Cuáles?) </label>
                                                              <input class="form-control group64"  type="text"
                                                                  name="indigenas_d6_5_protoInter_cual"
                                                                  id="indigenas_d6_5_protoInter_cual"
                                                                  <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                  value="<?php echo $indigenas_d6_5_protoInter_cual; ?>">

                                                          </div>
                                                      </div>




                                                      <div class="form-check form-check-inline">
                                                          <input class="form-check-input <?php if($estatus == 0){echo  "group64";}?>" type="checkbox"
                                                              name="indigenas_d6_5_interno"
                                                              id="indigenas_d6_5_interno"
                                                              onchange="javascript:showContent101()"
                                                              <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                              <?php if ($indigenas_d6_5_interno == "Protocolo interno"){echo ' checked="checked"'; }?>
                                                              />
                                                          <label class="form-check-label"
                                                              for="indigenas_d6_5_interno">Protocolo interno
                                                          </label>


                                                          <div id="content101" style="display: none;">
                                                              <label class="form-check-label"
                                                                  for="indigenas_d6_5_interno_cua">
                                                                  (¿Cuáles?) </label>
                                                              <input class="form-control group64" type="text"
                                                                  name="indigenas_d6_5_interno_cua"
                                                                  id="indigenas_d6_5_interno_cua"
                                                                  <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                  value="<?php echo $indigenas_d6_5_interno_cua; ?>">

                                                          </div>
                                                      </div>




                                                        <div class="form-check form-check-inline">

                                                          <label class="form-check-label"for="indigenas_d6_5_SCJN">
                                                            <input class="form-check-input <?php if($estatus == 0){echo  "group64";}?>" type="checkbox"
                                                          name="indigenas_d6_5_SCJN" id="indigenas_d6_5_SCJN"
                                                              <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                              <?php if ($indigenas_d6_5_SCJN == "Protocolo de actuación para quienes imparten justicia en casos que involucren derechos de personas, comunidades y pueblos indígenas (SCJN)")
                                                              {echo ' checked="checked"'; }?>
                                                              />

                                                          Protocolo de actuación para quienes imparten justicia en casos que involucren derechos de personas, comunidades y pueblos indígenas (SCJN)
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="indigenas_d6_5_ninguno" id="indigenas_d6_5_ninguno"
                                                                  <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                  <?php if ($indigenas_d6_5_ninguno == "Ninguno"){echo ' checked="checked"'; }?>
                                                                  />

                                                            <label class="form-check-label"
                                                                for="indigenas_d6_5_ninguno">Ninguno</label>
                                                        </div>



                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input <?php if($estatus == 0){echo  "group64";}?>" type="checkbox"
                                                                name="indigenas_d6_5_otros" id="indigenas_d6_5_otros"
                                                                onchange="javascript:showContent102()"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                <?php if ($indigenas_d6_5_otros == "Otro"){echo ' checked="checked"'; }?>
                                                                />
                                                            <label class="form-check-label" for="indigenas_d6_5_otros">
                                                                Otros</label>

                                                            <!--Duda-->
                                                            <div id="content102" style="display: none;">
                                                                <label class="form-check-label" for="indigenas_d6_5_otros_cual">
                                                                    (¿Cuáles?) </label>
                                                                <input class="form-control group64" type="text" name="indigenas_d6_5_otros_cual"
                                                                    id="indigenas_d6_5_otros_cual"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $indigenas_d6_5_otros_cual; ?>">

                                                            </div>
                                                           </div>

                                                           <div>
                                                               <input type="checkbox" name="indigenas_d6_5_nosesabe"
                                                                   id="indigenas_d6_5_nosesabe"
                                                                   <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                   <?php echo $indigenas_d6_5_nosesabe ?> /><label for="indigenas_d6_5_nosesabe"> No se sabe</label>
                                                           </div>


                                                    </tr>
                                                </tbody>
                                            </table>


                                            <!--  Fin indigenas_p6_4-->
                                            <!--  Pregunta indigenas_p6_5-->
                                            <div>
                                                <h5>6.6.- ¿La institución cuenta con buenas prácticas que considere sean innovadoras para mejorar el acceso a la justicia a personas indígenas?</h5>
                                            </div>
                                            <table class="table">
                                                <tbody>
                                                    <tr>


                                                      <div class="form-group col-md-6">
                                                          <div class="form-check form-check-inline">
                                                            <label class="form-check-label" for="indigenas_d6_6_pracinnvind">  <input class="form-check-input" type="radio"
                                                                  name="indigenas_d6_6_pracinnvind" id="indigenas_d6_6_pracinnvind"
                                                                  <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                  <?php if ($indigenas_d6_6_pracinnvind == "Sí"){echo ' checked="checked"'; }?> />
                                                              Sí</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <label class="form-check-label" for="indigenas_d6_6_pracinnvind_no"><input class="form-check-input" type="radio"
                                                                  name="indigenas_d6_6_pracinnvind" id="indigenas_d6_6_pracinnvind_no"
                                                                  <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                  <?php if ($indigenas_d6_6_pracinnvind == "No"){echo ' checked="checked"'; }?> />
                                                            No</label>
                                                          </div>
                                                      </div>
                                                    </tr>
                                                </tbody>
                                            </table>


                                            <div>
                                                <h5>6.7.- ¿Cuáles son esas buenas prácticas? </h5>
                                            </div>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <div class="form-group col-md-6">

                                                          <textarea  <?php if($estatus != 0) { echo "readonly='true'"; } ?>
                                                            <?php if($indigenas_d6_7_cuabuepra == "No") { echo "readonly='true'"; } ?>


                                                            class="form-control" name="indigenas_d6_7_cuabuepra" id="indigenas_d6_7_cuabuepra" rows="10" cols="90" ><?php echo $indigenas_d6_7_cuabuepra; ?></textarea>

                                                        </div>
                                                    </tr>
                                                </tbody>
                                            </table>



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
                                                                  name="extranjeras_d7_traductext" id="extranjeras_d7_traductext"
                                                                  <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                  <?php if ($extranjeras_d7_traductext == "SÍ"){echo ' checked="checked"'; }?> />
                                                              <label class="form-check-label"
                                                                  for="extranjeras_d7_traductext">Sí</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                            <label class="form-check-label"
                                                                for="extranjeras_d7_traductext_no">  <input class="form-check-input" type="radio"
                                                                  name="extranjeras_d7_traductext" id="extranjeras_d7_traductext_no"
                                                                  <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                  <?php if ($extranjeras_d7_traductext == "No"){echo ' checked="checked"'; }?> />
                                                              No</label>
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
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group7";}?>"
                                                                    name="extranjeras_d7_1_ing_M" id="extranjeras_d7_1_ing_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $extranjeras_d7_1_ing_M; ?>">

                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group7";}?>"
                                                                    name="extranjeras_d7_1_ing_H" id="extranjeras_d7_1_ing_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $extranjeras_d7_1_ing_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group7";}?>"
                                                                    name="extranjeras_d7_1_ing_T" id="extranjeras_d7_1_ing_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $extranjeras_d7_1_ing_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>2</td>
                                                        <td>Chino</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group7";}?>"
                                                                    name="extranjeras_d7_1_chin_M" id="extranjeras_d7_1_chin_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $extranjeras_d7_1_chin_M; ?>">
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group7";}?>"
                                                                    name="extranjeras_d7_1_chin_H" id="extranjeras_d7_1_chin_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $extranjeras_d7_1_chin_H; ?>">

                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group7";}?>"
                                                                    name="extranjeras_d7_1_chin_T" id="extranjeras_d7_1_chin_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $extranjeras_d7_1_chin_T; ?>">

                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>3</td>
                                                        <td>Francés</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group7";}?>"
                                                                    name="extranjeras_d7_1_franc_M" id="extranjeras_d7_1_franc_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                  <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                  value="<?php echo $extranjeras_d7_1_franc_M; ?>">

                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group7";}?>"
                                                                    name="extranjeras_d7_1_franc_H" id="extranjeras_d7_1_franc_H "
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $extranjeras_d7_1_franc_H; ?>">

                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group7";}?>"
                                                                    name="extranjeras_d7_1_franc_T" id="extranjeras_d7_1_franc_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $extranjeras_d7_1_franc_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td>4</td>
                                                        <td>Árabe</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group7";}?>"
                                                                    name="extranjeras_d7_1_arabe_M" id="extranjeras_d7_1_arabe_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $extranjeras_d7_1_arabe_M; ?>">

                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group7";}?>"
                                                                    name="extranjeras_d7_1_arabe_H" id="extranjeras_d7_1_arabe_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $extranjeras_d7_1_arabe_H; ?>">

                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group7";}?>"
                                                                    name="extranjeras_d7_1_arabe_T" id="extranjeras_d7_1_arabe_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $extranjeras_d7_1_arabe_T; ?>">

                                                            </div>
                                                        </td>
                                                    </tr>


                                                    <tr>
                                                        <td>5</td>
                                                        <td>Ruso</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group7";}?>"
                                                                    name="extranjeras_d7_1_ruso_M" id="extranjeras_d7_1_ruso_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $extranjeras_d7_1_ruso_M; ?>">

                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group7";}?>"
                                                                    name="extranjeras_d7_1_ruso_H" id="extranjeras_d7_1_ruso_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                  <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                  value="<?php echo $extranjeras_d7_1_ruso_H; ?>">

                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group7";}?>"
                                                                    name="extranjeras_d7_1_ruso_T" id="extranjeras_d7_1_ruso_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $extranjeras_d7_1_ruso_T; ?>">

                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td><div style="float:left;">Otras (¿cuáles?)   &nbsp;&nbsp;&nbsp;&nbsp;</div>
                                                            <div  class="input-group">
                                                                <input type="text" class="form-control <?php if($estatus == 0){echo  "group7";}?>"
                                                                    name="extranjeras_d7_1_otras" id="extranjeras_d7_1_otras"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $extranjeras_d7_1_otras; ?>">

                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group7";}?> "
                                                                    name="extranjeras_d7_1_otras_M" id="extranjeras_d7_1_otras_M"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $extranjeras_d7_1_otras_M; ?>">

                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group7";}?>"
                                                                    name="extranjeras_d7_1_otras_H" id="extranjeras_d7_1_otras_H"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $extranjeras_d7_1_otras_H; ?>">

                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control <?php if($estatus == 0){echo  "group7";}?>"
                                                                    name="extranjeras_d7_1_otras_T" id="extranjeras_d7_1_otras_T"
                                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"

                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $extranjeras_d7_1_otras_T; ?>">

                                                            </div>
                                                        </td>
                                                    </tr>
                                            </table>


                                            <div>
                                                <input type="checkbox" name="extranjeras_d7_1_nosesabe"
                                                    id="extranjeras_d7_1_nosesabe"
                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                    <?php echo $extranjeras_d7_1_nosesabe?> /><label for="extranjeras_d7_1_nosesabe">No se sabe</label>
                                            </div>

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
                                                                                                                <label class="form-check-label" for="extranjeras_d7_2_ConvInst">
                                                                                                                    <input class="form-check-input" type="radio"
                                                                                                                        name="extranjeras_d7_2_ConvInst" id="extranjeras_d7_2_ConvInst"
                                                                                                                        <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                                                                        <?php if ($extranjeras_d7_2_ConvInst == "Sí"){echo ' checked="checked"'; }?> />
                                                                                                                    Sí</label>
                                                                                                                </div>
                                                                                                                <div class="form-check form-check-inline">
                                                                                                                  <label class="form-check-label" for="extranjeras_d7_2_ConvInst_no">
                                                                                                                    <input class="form-check-input" type="radio"
                                                                                                                    name="extranjeras_d7_2_ConvInst" id="extranjeras_d7_2_ConvInst_no"
                                                                                                                        <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                                                                        <?php if ($extranjeras_d7_2_ConvInst == "No"){echo ' checked="checked"'; }?> />
                                                                                                                    No</label>
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
                                                <h5> 7.3.-¿Cuál es el nombre de la institución o instituciones?</h5>
                                            </div>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <div class="form-group col-md-6">

                                                          <textarea  <?php if($estatus != 0) { echo "readonly='true'"; } ?>
                                                            <?php if($extranjeras_p7_2_ConvInst == "No") { echo "readonly='true'"; } ?>


                                                            class="form-control" name="extranjeras_d7_3_nombreInsti" id="extranjeras_d7_3_nombreInsti" rows="10" cols="90" ><?php echo $extranjeras_d7_3_nombreInsti; ?></textarea>



                                                        </div>
                                                    </tr>
                                                </tbody>
                                            </table>


                                            <div>
                                                <input type="checkbox" name="extranjeras_d7_3_nosesabe"
                                                    id="extranjeras_d7_3_nosesabe"
                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                    <?php echo $extranjeras_d7_3_nosesabe?> /><label for="extranjeras_d7_3_nosesabe">No se sabe</label>
                                            </div>
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
                                                          <input class="form-check-input <?php if($estatus == 0){echo"group74";}?>" type="checkbox"
                                                          name="extranjeras_d7_4_ProtoInterna"
                                                          id="extranjeras_d7_4_ProtoInterna"
                                                          onchange="javascript:showContent1010()"
                                                          <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                          <?php if ($extranjeras_d7_4_ProtoInterna == "Protocolo internacional"){echo ' checked="checked"'; }?>
                                                          />
                                                          <label class="form-check-label"
                                                          for="extranjeras_d7_4_ProtoInterna">Protocolo internacional
                                                        </label>

                                                        <div id="content1010" style="display: none;">
                                                          <label class="form-check-label"
                                                          for="extranjeras_d7_4_ProtoInterna_cual">
                                                          ¿Cuáles?</label>
                                                          <input class="form-control group74" type="text"
                                                          name="extranjeras_d7_4_ProtoInterna_cual"
                                                          id="extranjeras_d7_4_ProtoInterna_cual"
                                                          <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                          value="<?php echo $extranjeras_d7_4_ProtoInterna_cual; ?>" />
                                                        </div>
                                                        </div>


                                                        <div class="form-check form-check-inline">
                                                          <input class="form-check-input <?php if($estatus == 0){echo  "group74";}?>" type="checkbox"
                                                          name="extranjeras_d7_4_interno"
                                                          id="extranjeras_d7_4_interno"
                                                          <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                          onchange="javascript:showContent103()"
                                                      <?php if ($extranjeras_d7_4_interno == "Protocolo interno"){echo ' checked="checked"'; }?>/>
                                                          <label class="form-check-label" for="extranjeras_d7_4_interno"/>
                                                                Protocolo interno  </label>
                                                                <br>
                                                          <div id="content103" style="display: none;">
                                                          <label class="form-check-label" for="extranjeras_d7_4_interno_cual">
                                                          ¿Cuáles? </label>
                                                          <input class="form-control group74" type="text"  name="extranjeras_d7_4_interno_cual"
                                                          id="extranjeras_d7_4_interno_cual"
                                                          <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                          value="<?php echo $extranjeras_d7_4_interno_cual; ?>" />
                                                          </div>
                                                        </div>

                                                        <div class="form-check form-check-inline">
                                                            <input <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                            class="form-check-input" type="checkbox"
                                                                name="extranjeras_d7_4_ninguno" id="extranjeras_d7_4_ninguno"
                                                                <?php if ($extranjeras_d7_4_ninguno == "Ninguno"){
                                                                  echo ' checked="checked"';
                                                                }?> />

                                                            <label class="form-check-label"
                                                                for="extranjeras_d7_4_ninguno">Ninguno</label>
                                                        </div>

                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input <?php if($estatus == 0){echo  "group74";}?>" type="checkbox" name="extranjeras_d7_4_Otro"
                                                                id="extranjeras_d7_4_Otro" onchange="javascript:showContent104()"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                <?php if ($extranjeras_d7_4_Otro == "Otros"){echo ' checked="checked"'; }?>/>
                                                            <label class="form-check-label" for="extranjeras_d7_4_Otro"/>
                                                                Otros  </label>
                                                                <br>
                                                                <div id="content104" style="display: none;">
                                                                  <label class="form-check-label" for="extranjeras_d7_4_Otro_cual">
                                                                    ¿Cuáles?</label>
                                                                <input class="form-control group74" type="text"
                                                                    name="extranjeras_d7_4_Otro_cual" id="extranjeras_d7_4_Otro_cual"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $extranjeras_d7_4_Otro_cual; ?>" />
                                                        </div>
                                                        </div>

                                                        <div class="form-check form-check-inline">
                                                            <input <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                            class="form-check-input" type="checkbox"
                                                                name="extranjeras_d7_4_nosesabe" id="extranjeras_d7_4_nosesabe"
                                                                <?php if ($extranjeras_d7_4_nosesabe == "No se sabe"){
                                                                  echo ' checked="checked"';
                                                                }?> />

                                                            <label class="form-check-label"
                                                                for="extranjeras_d7_4_nosesabe">No se sabe</label>
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
                                                        <label class="form-check-label"
                                                        for="extranjeras_d7_5_buenasprac">
                                                      <input class="form-check-input" type="radio"
                                                      name="extranjeras_d7_5_buenasprac" id="extranjeras_d7_5_buenasprac"
                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                      <?php if ($extranjeras_d7_5_buenasprac == "Sí"){echo ' checked="checked"'; }?> />
                                                      Sí</label>
                                                      </div>
                                                      <div class="form-check form-check-inline">
                                                        <label class="form-check-label"
                                                        for="extranjeras_d7_5_buenasprac_no">
                                                      <input class="form-check-input" type="radio"
                                                      name="extranjeras_d7_5_buenasprac" id="extranjeras_d7_5_buenasprac_no"
                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                      <?php if ($extranjeras_d7_5_buenasprac == "No"){echo ' checked="checked"'; }?> />
                                                      No</label>
                                                      </div>
                                                      </div>




                                                    </tr>
                                                </tbody>
                                            </table>



                                            <!--  Fin extranjeras_p7_5-->

                                            <!--  Pregunta extranjeras_p7_6-->
                                            <div>
                                                <h5>7.6.- ¿Cuáles son esas buenas prácticas? </h5>
                                            </div>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <div class="form-group col-md-6">


                                                          <textarea  <?php if($estatus != 0) { echo "readonly='true'"; } ?>
                                                            <?php if($extranjeras_d7_5_buenasprac == "No") { echo "readonly='true'"; } ?>

                                                            class="form-control" name="extranjeras_d7_6_buenasprac_cual" id="extranjeras_d7_6_buenasprac_cual" rows="10" cols="90" ><?php echo $extranjeras_d7_6_buenasprac_cual; ?></textarea>


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
                                                        <label class="form-check-label"
                                                        for="discapacidad_d8_braile"><input class="form-check-input" type="radio"
                                                      name="discapacidad_d8_braile" id="discapacidad_d8_braile"
                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                      <?php if ($discapacidad_d8_braile == "Sí"){echo ' checked="checked"'; }?> />
                                                      Sí</label>
                                                      </div>
                                                      <div class="form-check form-check-inline">
                                                        <label class="form-check-label"
                                                        for="discapacidad_d8_braile_no"><input class="form-check-input" type="radio"
                                                      name="discapacidad_d8_braile" id="discapacidad_d8_braile_no"
                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                      <?php if ($discapacidad_d8_braile == "No"){echo ' checked="checked"'; }?> />
                                                      No</label>
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
                                                                                                              <label class="form-check-label"
                                                                                                              for="discapacidad_d8_LenSen"><input class="form-check-input" type="radio"
                                                                                                            name="discapacidad_d8_LenSen" id="discapacidad_d8_LenSen"
                                                                                                            <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                                                            <?php if ($discapacidad_d8_LenSen == "Sí"){echo ' checked="checked"'; }?> />
                                                                                                            Sí</label>
                                                                                                            </div>
                                                                                                            <div class="form-check form-check-inline">
                                                                                                              <label class="form-check-label"
                                                                                                              for="discapacidad_d8_LenSen_no"><input class="form-check-input" type="radio"
                                                                                                            name="discapacidad_d8_LenSen" id="discapacidad_d8_LenSen_no"
                                                                                                            <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                                                            <?php if ($discapacidad_d8_LenSen == "No"){echo ' checked="checked"'; }?> />
                                                                                                          No</label>
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

                                                          <textarea  <?php if($estatus != 0) { echo "readonly='true'"; } ?> class="form-control" name="discapacidad_d8_1_nombreInst" id="discapacidad_d8_1_nombreInst" rows="10" cols="90" ><?php echo $discapacidad_d8_1_nombreInst; ?></textarea>


                                                        </div>
                                                    </tr>
                                                </tbody>
                                            </table>


                                            <div>
                                                <input type="checkbox" name="extranjeras_d8_1_nosesabe"
                                                    id="extranjeras_d8_1_nosesabe"
                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                    <?php echo $extranjeras_d8_1_nosesabe ?> /><label for ="extranjeras_d8_1_nosesabe">No se sabe</label>
                                            </div>

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
                                                          <input class="form-check-input <?php if($estatus == 0){echo  "group82";}?> " type="checkbox"
                                                          name="discapacidad_d8_2_ProtoInterna"
                                                          id="discapacidad_d8_2_ProtoInterna"
                                                          onchange="javascript:showContent1020()"
                                                          <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                          <?php if ($discapacidad_d8_2_ProtoInterna == "Protocolo internacional"){echo ' checked="checked"'; }?>
                                                          />
                                                          <label class="form-check-label"
                                                          for="discapacidad_d8_2_ProtoInterna">Protocolo internacional
                                                        </label>

                                                        <div id="content1020" style="display: none;">
                                                          <label class="form-check-label"
                                                          for="discapacidad_d8_2_ProtoInterna_cual">
                                                          ¿Cuáles?</label>
                                                          <input class="form-control group82" type="text"
                                                          name="discapacidad_d8_2_ProtoInterna_cual"
                                                          id="discapacidad_d8_2_ProtoInterna_cual"
                                                          <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                          value="<?php echo $discapacidad_d8_2_ProtoInterna_cual; ?>"/>
                                                        </div>
                                                        </div>


                                                        <div class="form-check form-check-inline">
                                                          <input class="form-check-input <?php if($estatus == 0){echo  "group82";}?>  " type="checkbox"
                                                          name="discapacidad_d8_2_interno"
                                                          id="discapacidad_d8_2_interno"
                                                          onchange="javascript:showContent1021()"
                                                          <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                          <?php if ($discapacidad_d8_2_interno == "Protocolo interno"){echo ' checked="checked"'; }?>
                                                          />
                                                            <label class="form-check-label" for="discapacidad_d8_2_interno"/>
                                                                Protocolo interno</label>
                                                                <br>
                                                          <div id="content1021" style="display: none;">
                                                          <label class="form-check-label" for="discapacidad_d8_2_interno_cua">
                                                          ¿Cuáles? </label>
                                                          <input class="form-control group82" type="text"  name="discapacidad_d8_2_interno_cua"
                                                          id="discapacidad_d8_2_interno_cua"
                                                          <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                          value="<?php echo $discapacidad_d8_2_interno_cua; ?>" />
                                                          </div>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input <?php if($estatus == 0){echo  "group82";}?> " type="checkbox"
                                                                name="discapacidad_d8_2_ProtoImpJust" id="discapacidad_d8_2_ProtoImpJust"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                <?php if ($discapacidad_d8_2_ProtoImpJust == "Protocolo de actuación para quienes imparten justicia en casos que involucren derechos de personas con discapacidad (SCJN)"){echo ' checked="checked"'; }?>
                                                                />

                                                            <label class="form-check-label"
                                                                for="discapacidad_d8_2_ProtoImpJust">Protocolo de actuación para
                                                                quienes imparten justicia en casos que involucren
                                                                derechos de personas con discapacidad (SCJN)</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="discapacidad_d8_2_ninguno" id="discapacidad_d8_2_ninguno"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                <?php if ($discapacidad_d8_2_ninguno == "Ninguno"){echo ' checked="checked"'; }?>
                                                                />

                                                            <label class="form-check-label"
                                                                for="discapacidad_d8_2_ninguno">Ninguno</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input <?php if($estatus == 0){echo  "group82";}?> " type="checkbox" name="discapacidad_d8_2_otros"
                                                                id="discapacidad_d8_2_otros" onchange="javascript:showContent107()"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                <?php if ($discapacidad_d8_2_otros == "Otros"){echo ' checked="checked"'; }?>
                                                                />
                                                            <label class="form-check-label" for="discapacidad_d8_2_otros"/>
                                                                Otros</label>
                                                                <br>
                                                                <div id="content107" style="display: none;">
                                                                  <label class="form-check-label" for="discapacidad_d8_2_otros_cual">
                                                                    ¿Cuáles?</label>
                                                                <input class="form-control group82" type="text"
                                                                    name="discapacidad_d8_2_otros_cual" id="discapacidad_d8_2_otros_cual"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $discapacidad_d8_2_otros_cual; ?>" />
                                                        </div>
                                                        </div>

                                                        <div>
                                                             <input type="checkbox" name="extranjeras_d8_2_noaplica"
                                                                 id="extranjeras_d8_2_noaplica"
                                                                 <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                 <?php echo $extranjeras_d8_2_noaplica ?> /><label for="extranjeras_d8_2_noaplica">No aplica</label>
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
                                                        <label class="form-check-label" for="discapacidad_d8_3_buenasprac">
                                                      <input class="form-check-input" type="radio"
                                                      name="discapacidad_d8_3_buenasprac" id="discapacidad_d8_3_buenasprac"
                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                      <?php if ($discapacidad_d8_3_buenasprac == "Sí"){echo ' checked="checked"'; }?> />
                                                      Sí</label>
                                                      </div>
                                                      <div class="form-check form-check-inline">
                                                        <label class="form-check-label" for="discapacidad_d8_3_buenasprac_no">
                                                      <input class="form-check-input" type="radio"
                                                      name="discapacidad_d8_3_buenasprac" id="discapacidad_d8_3_buenasprac_no"
                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                      <?php if ($discapacidad_d8_3_buenasprac == "No"){echo ' checked="checked"'; }?> />
                                                      No</label>
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

                                                          <textarea  <?php if($estatus != 0) { echo "readonly='true'"; } ?>
                                                            <?php if($discapacidad_d8_3_buenasprac == "No") { echo "readonly='true'"; } ?>

                                                            class="form-control" name="discapacidad_d8_4_buenasprac_cual" id="discapacidad_d8_4_buenasprac_cual" rows="10" cols="90" ><?php echo $discapacidad_d8_4_buenasprac_cual; ?></textarea>


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
/*
$colaboración_d9_instorg=$pregunta[0]["colaboración_d9_instorg"];
$colaboración_d9_1_isntcola=$pregunta[0]["colaboración_d9_1_isntcola"];
$colaboración_d9_1_noapli=$pregunta[0]["colaboración_d9_1_noapli"];
$colaboración_d9_1_nosesabe=$pregunta[0]["colaboración_d9_1_nosesabe"];
$colaboración_d9_2_finan=$pregunta[0]["colaboración_d9_2_finan"];
$colaboración_d9_2_dona=$pregunta[0]["colaboración_d9_2_dona"];
$colaboración_d9_2_capa=$pregunta[0]["colaboración_d9_2_capa"];
$colaboración_d9_2_otros=$pregunta[0]["colaboración_d9_2_otros"];
$colaboración_d9_2_otros_cual=$pregunta[0]["colaboración_d9_2_otros_cual"];
$colaboración_d9_2_noapli=$pregunta[0]["colaboración_d9_2_noapli"];
$colaboración_d9_2_nosesabe=$pregunta[0]["colaboración_d9_2_nosesabe"];
$colaboración_d9_3_colseñ=$pregunta[0]["colaboración_d9_3_colseñ"];
$colaboración_d9_3_noapli=$pregunta[0]["colaboración_d9_3_noapli"];
$registro_d10_sisplatser=$pregunta[0]["registro_d10_sisplatser"];
$registro_d10_1_serprove=$pregunta[0]["registro_d10_1_serprove"];
$registro_d10_2_vincliga=$pregunta[0]["registro_d10_2_vincliga"];
$evaluacion_d11_insindseg=$pregunta[0]["evaluacion_d11_insindseg"];
$evaluacion_d11_1_cualeind=$pregunta[0]["evaluacion_d11_1_cualeind"];
$evaluacion_d11_1_cualeind_noapp=$pregunta[0]["evaluacion_d11_1_cualeind_noapp"];
$evaluacion_d11_2_evalind=$pregunta[0]["evaluacion_d11_2_evalind"];
*/

}
?>
                                            <div>
                                                <h5>9.- ¿La institución cuenta con algún tipo de colaboración con otras instituciones u organismos nacionales o extranjeros?</h5>
                                            </div>
                                            <br>
                                            <table class="table">
                                                <tbody>
                                                    <tr>



                                                      <div class="form-group col-md-6">
                                                      <div class="form-check form-check-inline">
                                                        <label class="form-check-label" for="colaboración_d9_instorg">
                                                      <input class="form-check-input" type="radio"
                                                      name="colaboración_d9_instorg" id="colaboración_d9_instorg"
                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                      <?php if ($colaboración_d9_instorg == "Sí"){echo ' checked="checked"'; }?> />
                                                      Sí</label>
                                                      </div>
                                                      <div class="form-check form-check-inline">

                                                        <label class="form-check-label" for="colaboración_d9_instorg_no">
                                                      <input class="form-check-input" type="radio"
                                                      name="colaboración_d9_instorg" id="colaboración_d9_instorg_no"
                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                      <?php if ($colaboración_d9_instorg == "No"){echo ' checked="checked"'; }?> />

                                                      No</label>
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

                                                      <textarea <?php if($estatus != 0) { echo "readonly='true'"; } ?>
                                                        <?php if($colaboración_d9_1_isntcola == "No") { echo "readonly='true'"; } ?>


                                                        class="form-control" name="colaboración_d9_1_isntcola" id="colaboración_d9_1_isntcola" rows="10" cols="90" ><?php echo $colaboración_d9_1_isntcola; ?></textarea>

                                                    </tr>
                                                </tbody>
                                            </table>


                                             <div>
                                                  <input type="checkbox" name="colaboración_d9_1_nosesabe"
                                                      id="colaboración_d9_1_nosesabe"
                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                      <?php echo $colaboración_d9_1_nosesabe ?> /><label for="colaboración_d9_1_nosesabe">No se sabe</label>
                                              </div>

                                            <div>
                                                <h5>9.2.- ¿Qué tipo de colaboración mantienen? </h5>
                                            </div>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="colaboración_d9_2_finan"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                <?php if ($colaboración_d9_2_finan == "Financiamiento"){echo ' checked="checked"'; }?>
                                                                />

                                                            <label class="form-check-label" for="colaboración_d9_2_finan">
                                                                Financiamiento
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="colaboración_d9_2_dona"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                <?php if ($colaboración_d9_2_dona == "Donación"){echo ' checked="checked"'; }?>
                                                                />

                                                            <label class="form-check-label" for="colaboración_d9_2_dona">
                                                                Donación
                                                            </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="colaboración_d9_2_capa"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                <?php if ($colaboración_d9_2_capa == "Capacitación"){echo ' checked="checked"'; }?>
                                                                />

                                                            <label class="form-check-label" for="colaboración_d9_2_capa">
                                                                Capacitación
                                                            </label>
                                                        </div>


                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox"
                                                            name="colaboración_d9_2_otros"
                                                            id="colaboración_d9_2_otros"
                                                            <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                            onchange="javascript:showContent92()"
                                                            <?php if ($colaboración_d9_2_otros == "Otro"){echo ' checked="checked"'; }?>
                                                            />
                                                            <label class="form-check-label"
                                                            for="colaboración_d9_2_otros">Otros
                                                          </label>

                                                          <div id="content92" style="display: none;">
                                                            <label class="form-check-label"
                                                            for="colaboración_d9_2_otros_cual">
                                                            ¿Cuáles?</label>
                                                            <input class="form-control" type="text"
                                                            name="colaboración_d9_2_otros_cual"
                                                            id="colaboración_d9_2_otros_cual"
                                                            <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                            value="<?php echo $colaboración_d9_2_otros_cual; ?>"/>
                                                          </div>
                                                          </div>

                                                          <div>
                                                               <input type="checkbox" name="colaboración_d9_2_noapli"
                                                                   id="colaboración_d9_2_noapli"
                                                                   <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                   <?php echo $colaboración_d9_2_noapli ?> /><label for="colaboración_d9_2_noapli">No aplica</label>
                                                           </div>

                                                           <div>
                                                                <input type="checkbox" name="colaboración_d9_2_nosesabe"
                                                                    id="colaboración_d9_2_nosesabe"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    <?php echo $colaboración_d9_2_nosesabe ?> /><label for="colaboración_d9_2_nosesabe">No se sabe</label>
                                                            </div>

                                                    </tr>
                                                </tbody>
                                            </table>



                                            <div>
                                                <h5>9.3.- Describir el tipo de colaboración señalada en la pregunta anterior.(Colaboración con instituciones)
                                                </h5>
                                            </div>
                                            <table class="table">
                                                <tbody>
                                                    <tr>

                                                      <textarea <?php if($estatus != 0) { echo "readonly='true'"; } ?> class="form-control" name="colaboración_d9_3_colseñ" id="colaboración_d9_3_colseñ" rows="10" cols="90" ><?php echo $colaboración_d9_3_colseñ; ?></textarea>

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
                                                      <label class="form-check-label" for="registro_d10_sisplatser">
                                                    <input class="form-check-input" type="radio"
                                                    name="registro_d10_sisplatser" id="registro_d10_sisplatser"
                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                    <?php if ($registro_d10_sisplatser == "Sí"){echo ' checked="checked"'; }?> />
                                                    Sí</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                      <label class="form-check-label" for="registro_d10_sisplatser_no">
                                                    <input class="form-check-input" type="radio"
                                                    name="registro_d10_sisplatser" id="registro_d10_sisplatser_no"
                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                    <?php if ($registro_d10_sisplatser == "No"){echo ' checked="checked"'; }?> />
                                                    No</label>
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

                                                    <textarea <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                      <?php if($registro_d10_1_serprove == "No") { echo "readonly='true'"; } ?>


                                                      class="form-control" name="registro_d10_1_serprove" id="registro_d10_1_serprove" rows="10" cols="90" ><?php echo $registro_d10_1_serprove; ?></textarea>
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

                                                    <textarea <?php if($estatus != 0) { echo "disabled='true'"; } ?> class="form-control" name="registro_d10_2_vincliga" id="registro_d10_2_vincliga" rows="2" cols="2" > <?php echo $registro_d10_2_vincliga; ?></textarea>
                                                  </tr>
                                              </tbody>
                                          </table>



                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

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
//tab6
if(count($pregunta)==0){
$idFormulario=0;
}else{
$idFormulario=$pregunta[0]["id"];
/* p11 */  $indicadores_p11_modeval=$pregunta[0]["indicadores_p11_modeval"];

/* p11.1 */  $indicadores_p11_1_cualind=$pregunta[0]["indicadores_p11_1_cualind"];

/* p11.2 */  $evaluacion_p11_2_evalind=$pregunta[0]["evaluacion_p11_2_evalind"];



}
?>
                                            <div>
                                                <h5>
                                                    11.- Sin incluir el Modelo de Evaluación y Seguimiento (MES),
                                                     ¿La institución cuenta con indicadores para el seguimiento, monitoreo y evaluación del Sistema de Justicia?
                                                </h5>
                                            </div>
                                            <br>
                                            <table class="table">
                                                <tbody>
                                                    <tr>


                                                      <div class="form-group col-md-6">
                                                      <div class="form-check form-check-inline">
                                                        <label class="form-check-label" for="evaluacion_d11_insindseg">
                                                          <input class="form-check-input" type="radio"
                                                      name="evaluacion_d11_insindseg" id="evaluacion_d11_insindseg"
                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                      <?php if ($evaluacion_d11_insindseg == "Sí"){echo ' checked="checked"'; }?> />
                                                      Sí</label>
                                                      </div>
                                                      <div class="form-check form-check-inline">
                                                        <label class="form-check-label" for="evaluacion_d11_insindseg_no">
                                                      <input class="form-check-input" type="radio"
                                                      name="evaluacion_d11_insindseg" id="evaluacion_d11_insindseg_no"
                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                      <?php if ($evaluacion_d11_insindseg == "No"){echo ' checked="checked"'; }?> />
                                                      No</label>
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

                                                      <textarea <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                        <?php if($evaluacion_d11_1_cualeind == "No") { echo "readonly='true'"; } ?>

                                                        class="form-control" name="evaluacion_d11_1_cualeind" id="evaluacion_d11_1_cualeind" rows="10" cols="90" ><?php echo $evaluacion_d11_1_cualeind; ?></textarea>


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
                                                        <input type="text" name="evaluacion_d11_2_evalind" id="evaluacion_d11_2_evalind"
                                                        <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                            class="form-control"
                                                            value="<?php echo $evaluacion_d11_2_evalind; ?>" />


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

                        <!-- Finaliza Tab Registro de informacion-->

                        <!-- Fin TAB PERSONAS CON DISCAPACIDAD -->

                    </div>


                    <!--  Tab Capacitacion y evaluacion de personal  -->
                    <div id="tabs-6">

                        <!-- Tab Evaluación y Seguimiento del Sistema de Justicia -->

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
                                                                                                              <label class="form-check-label" for="indicadores_p12_bunprac">
                                                                                                            <input class="form-check-input" type="radio"
                                                                                                            name="indicadores_p12_bunprac" id="indicadores_p12_bunprac"
                                                                                                            <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                                                            <?php if ($indicadores_p12_bunprac == "Sí"){echo ' checked="checked"'; }?> />
                                                                                                            Sí</label>
                                                                                                            </div>
                                                                                                            <div class="form-check form-check-inline">
                                                                                                              <label class="form-check-label" for="indicadores_p12_bunprac_no">
                                                                                                            <input class="form-check-input" type="radio"
                                                                                                            name="indicadores_p12_bunprac" id="indicadores_p12_bunprac_no"
                                                                                                            <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                                                            <?php if ($indicadores_p12_bunprac == "No"){echo ' checked="checked"'; }?> />
                                                                                                            No</label>
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

                                                      <textarea <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                        <?php if($indicadores_p12_bunprac == "No") { echo "readonly='true'"; } ?>


                                                        class="form-control" name="transparencia_d12_1_cualpract" id="transparencia_d12_1_cualpract" rows="10" cols="90" ><?php echo $transparencia_d12_1_cualpract; ?></textarea>

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
                                                    13.- ¿Qué necesidades detecta la Defensoría Pública para desempeñar correctamente sus funciones?
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
                                                <input type="checkbox" name="necesidades_p13_noaplica"
                                                    id="necesidades_p13_noaplica"
                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                    <?php echo $necesidades_p13_noaplica ?> /><label>No aplica</label>
                                            </div>

                                            <div>
                                                <input type="checkbox" name="necesidades_p13_nosesabe"
                                                    id="necesidades_p13_nosesabe"
                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                    <?php echo $necesidades_p13_nosesabe ?> /><label>No se sabe</label>
                                            </div>


                                            <div>

                                                <h5>13.1.- Describir las necesidades señaladas en la pregunta anterior.
                                                </h5>
                                            </div>
                                            <table class="table">
                                                <tbody>
                                                    <tr>

                                                      <textarea  <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                         class="form-control" name="necesidades_p13_1_desnec" id="necesidades_p13_1_desnec" rows="10" cols="90" ><?php echo $necesidades_p13_1_desnec; ?></textarea>

                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div>
                                                <input type="checkbox" name="necesidades_p13_1_noaplica"
                                                    id="necesidades_p13_1_noaplica"
                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                    <?php echo $necesidades_p13_1_noaplica ?> /><label>No aplica</label>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Finaliza Tab Transparencia-->
                        <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h3 class="panel-title text-center">14.1 RESPONSABILIDADES DE LOS SERVIDORES PÚBLICOS: RESPONSABILIDAD ADMINISTRATIVA</h3>
                                                    </div>
                                                    <br>
                                                    <div class="panel-body">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <form action="#" method="post" class="col-lg-12">


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

                                                                      <h5>14.1.2 Total de quejas presentadas contra servidores públicos, en el año 2020.
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
                                                                              <td>Defensores públicos </td>
                                                                              <td>
                                                                                  <div class="input-group">
                                                                                      <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                                          name="denunciaserv_p14_3_defp_M"
                                                                                          id="denunciaserv_p14_3_defp_M"
                                                                                          <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                                          onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                                          value="<?php echo $denunciaserv_p14_3_defp_M; ?>">
                                                                                  </div>
                                                                              </td>
                                                                              <td>
                                                                                  <div class="input-group">
                                                                                      <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                                          name="denunciaserv_d14_3_defp_H"
                                                                                          id="denunciaserv_d14_3_defp_H"
                                                                                          <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                                          onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                                          value="<?php echo $denunciaserv_d14_3_defp_H; ?>">
                                                                                  </div>
                                                                              </td>
                                                                              <td>
                                                                                  <div class="input-group">
                                                                                      <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                                          name="denunciaserv_p14_3_defp_T"
                                                                                          id="denunciaserv_p14_3_defp_T"
                                                                                          <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                                          onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                                          value="<?php echo $denunciaserv_p14_3_defp_T; ?>">
                                                                                  </div>
                                                                              </td>
                                                                          </tr>

                                                                          <tr>
                                                                            <td>2</td>
                                                                              <td><div style="float:left;">Otros (¿cuáles?)   &nbsp;&nbsp;&nbsp;&nbsp;</div>
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
                                                                              <td>Defensores públicos</td>
                                                                              <td>
                                                                                  <div class="input-group">
                                                                                      <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                                          name="denunciaserv_p14_4_defp_M"
                                                                                          id="denunciaserv_p14_4_defp_M"
                                                                                          <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                                          onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                                          value="<?php echo $denunciaserv_p14_4_defp_M; ?>">
                                                                                  </div>
                                                                              </td>

                                                                              <td>
                                                                                  <div class="input-group">
                                                                                      <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                                          name="denunciaserv_p14_4_defp_H"
                                                                                          id="denunciaserv_p14_4_defp_H"
                                                                                          <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                                          onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                                          value="<?php echo $denunciaserv_p14_4_defp_H; ?>">
                                                                                  </div>
                                                                              </td>

                                                                              <td>
                                                                                  <div class="input-group">
                                                                                      <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                                          name="denunciaserv_p14_4_defp_T"
                                                                                          id="denunciaserv_p14_4_defp_T"
                                                                                          <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                                          onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                                          value="<?php echo $denunciaserv_p14_4_defp_T; ?>">
                                                                                  </div>
                                                                              </td>
                                                                          </tr>

                                                                          <tr>
                                                                <td>2</td>
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

                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading">
                                                                        <h3 class="panel-title text-center">14.2 RESPONSABILIDADES DE LOS SERVIDORES PÚBLICOS: RESPONSABILIDAD PENAL</h3>
                                                                    </div>
                                                                    <br>
                                                                    <div class="panel-body">
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <form action="#" method="post" class="col-lg-12">


                                                                                  <div>

                                                                                      <h5>14.2.1.- Total de denuncias presentadas en el año 2020 contra servidores públicos. Desglosar por función y por sexo.

                                      </h5>
                                                                                  </div>
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
                                                                                              <td>Defensores públicos </td>
                                                                                              <td>
                                                                                                  <div class="input-group">
                                                                                                      <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                                                          name="denunciaserv_p142_3_defp_M"
                                                                                                          id="denunciaserv_p142_3_defp_M"
                                                                                                          <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                                                          onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                                                          value="<?php echo $denunciaserv_p142_3_defp_M; ?>">
                                                                                                  </div>
                                                                                              </td>
                                                                                              <td>
                                                                                                  <div class="input-group">
                                                                                                      <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                                                          name="denunciaserv_p142_3_defp_H"
                                                                                                          id="denunciaserv_p142_3_defp_H"
                                                                                                          <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                                                          onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                                                          value="<?php echo $denunciaserv_p142_3_defp_H; ?>">
                                                                                                  </div>
                                                                                              </td>
                                                                                              <td>
                                                                                                  <div class="input-group">
                                                                                                      <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                                                          name="denunciaserv_p142_3_defp_T"
                                                                                                          id="denunciaserv_p142_3_defp_T"
                                                                                                          <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                                                          onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                                                          value="<?php echo $denunciaserv_p142_3_defp_T; ?>">
                                                                                                  </div>
                                                                                              </td>
                                                                                          </tr>

                                                                                          <tr>
                                                                                            <td>2</td>
                                                                                              <td><div style="float:left;">Otros (¿cuáles?)   &nbsp;&nbsp;&nbsp;&nbsp;</div>
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
                                                                                              <td>Defensores públicos</td>
                                                                                              <td>
                                                                                                  <div class="input-group">
                                                                                                      <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                                                          name="denunciaserv_p142_4_defp_M"
                                                                                                          id="denunciaserv_p142_4_defp_M"
                                                                                                          <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                                                          onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                                                          value="<?php echo $denunciaserv_p142_4_defp_M; ?>">
                                                                                                  </div>
                                                                                              </td>

                                                                                              <td>
                                                                                                  <div class="input-group">
                                                                                                    <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                                                          name="denunciaserv_p142_4_defp_H"
                                                                                                          id="denunciaserv_p142_4_defp_H"
                                                                                                          <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                                                          onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                                                          value="<?php echo $denunciaserv_p142_4_defp_H; ?>">
                                                                                                  </div>
                                                                                              </td>

                                                                                              <td>
                                                                                                  <div class="input-group">
                                                                                                      <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                                                          name="denunciaserv_p142_4_defp_T"
                                                                                                          id="denunciaserv_p142_4_defp_T"
                                                                                                          <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                                                          onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                                                          value="<?php echo $denunciaserv_p142_4_defp_T; ?>">
                                                                                                  </div>
                                                                                              </td>
                                                                                          </tr>

                                                                                          <tr>
                                                            <td>2</td>
                                                                                              <td><div style="float:left;">Otros (¿cuáles?)   &nbsp;&nbsp;&nbsp;&nbsp;</div>
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


                        <!-- Fin TAB PERSONAS CON DISCAPACIDAD -->

                    </div>

                    <!--  Tab Capacitacion y evaluacion de personal  -->
                    <div id="tabs-7">


                        <!-- Tab Denuncias a Servidores Públicos -->
<?php
//BUSCAR PREGUNTA Formulario
$pregunta = ModeloPolicias:: mdlMostrarPolicias("policias","uuid", $_SESSION["id"]);

if(count($pregunta)==0){
$idFormulario=0;
}else{
$idFormulario=$pregunta[0]["id"];


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
/* p13 */  $necesidades_p13_noaplica=$pregunta[0]["necesidades_p13_noaplica"];
/* p13 */  $necesidades_p13_nosesabe=$pregunta[0]["necesidades_p13_nosesabe"];


/* p13.1 */  $necesidades_p13_1_desnec=$pregunta[0]["necesidades_p13_1_desnec"];
/* p13.1 */  $necesidades_p13_1_noaplica=$pregunta[0]["necesidades_p13_1_noaplica"];

/* p14 */  $denunciaserv_p14_den=$pregunta[0]["denunciaserv_p14_den"];
/* p14 */  $denunciaserv_p14_den_cual=$pregunta[0]["denunciaserv_p14_den_cual"];
/* p14.2 */  $denunciaserv_p14_2_quej=$pregunta[0]["denunciaserv_p14_2_quej"];

/* p14.3 */  $denunciaserv_p14_3_defp_M=$pregunta[0]["denunciaserv_p14_3_defp_M"];
/* p14.3 */  $denunciaserv_d14_3_defp_H=$pregunta[0]["denunciaserv_d14_3_defp_H"];
/* p14.3 */  $denunciaserv_p14_3_defp_T=$pregunta[0]["denunciaserv_p14_3_defp_T"];
/* p14.3 */  $denunciaserv_p14_3_otros=$pregunta[0]["denunciaserv_p14_3_otros"];
/* p14.3 */  $denunciaserv_p14_3_otros_M=$pregunta[0]["denunciaserv_p14_3_otros_M"];
/* p14.3 */  $denunciaserv_p14_3_otros_H=$pregunta[0]["denunciaserv_p14_3_otros_H"];
/* p14.3 */  $denunciaserv_p14_3_otros_T=$pregunta[0]["denunciaserv_p14_3_otros_T"];
/* p14.3 */  $denunciaserv_p14_4_defp_M=$pregunta[0]["denunciaserv_p14_4_defp_M"];
/* p14.3 */  $denunciaserv_p14_4_defp_H=$pregunta[0]["denunciaserv_p14_4_defp_H"];
/* p14.3 */  $denunciaserv_p14_4_defp_T=$pregunta[0]["denunciaserv_p14_4_defp_T"];
/* p14.4 */  $denunciaserv_p14_4_otroscual=$pregunta[0]["denunciaserv_p14_4_otroscual"];
/* p14.4 */  $denunciaserv_p14_4_otros_M=$pregunta[0]["denunciaserv_p14_4_otros_M"];
/* p14.4 */  $denunciaserv_p14_4_otros_H=$pregunta[0]["denunciaserv_p14_4_otros_H"];
/* p14.4 */  $denunciaserv_p14_4_otros_T=$pregunta[0]["denunciaserv_p14_4_otros_T"];


/* p142.3 */  $denunciaserv_p142_3_defp_M=$pregunta[0]["denunciaserv_p142_3_defp_M"];
/* p142.3 */  $denunciaserv_p142_3_defp_H=$pregunta[0]["denunciaserv_p142_3_defp_H"];
/* p142.3 */  $denunciaserv_p142_3_defp_T=$pregunta[0]["denunciaserv_p142_3_defp_T"];
/* p142 */  $denunciaserv_p142_3_otros=$pregunta[0]["denunciaserv_p142_3_otros"];
/* p142 */  $denunciaserv_p142_3_otros_M=$pregunta[0]["denunciaserv_p142_3_otros_M"];
/* p142 */  $denunciaserv_p142_3_otros_H=$pregunta[0]["denunciaserv_p142_3_otros_H"];
/* p142 */  $denunciaserv_p142_3_otros_T=$pregunta[0]["denunciaserv_p142_3_otros_T"];


/* p14.3 */  $denunciaserv_p142_4_defp_M=$pregunta[0]["denunciaserv_p142_4_defp_M"];
/* p14.3 */  $denunciaserv_p142_4_defp_H=$pregunta[0]["denunciaserv_p142_4_defp_H"];
/* p14.3 */  $denunciaserv_p142_4_defp_T=$pregunta[0]["denunciaserv_p142_4_defp_T"];
/* p142 */  $denunciaserv_p142_4_otroscual=$pregunta[0]["denunciaserv_p142_4_otroscual"];
/* p142 */  $denunciaserv_p142_4_otros_M=$pregunta[0]["denunciaserv_p142_4_otros_M"];
/* p142 */  $denunciaserv_p142_4_otros_H=$pregunta[0]["denunciaserv_p142_4_otros_H"];
/* p142 */  $denunciaserv_p142_4_otros_T=$pregunta[0]["denunciaserv_p142_4_otros_T"];

//hk


/* p15 */  $asuntos_p15_recibidos=$pregunta[0]["asuntos_p15_recibidos"];
/* p15 */  $asuntos_p15_proceate=$pregunta[0]["asuntos_p15_proceate"];
/* p15 */  $asuntos_d15_conclu=$pregunta[0]["asuntos_d15_conclu"];


/* p16 */  $imputados_d16_total_M=$pregunta[0]["imputados_d16_total_M"];
/* p16 */  $imputados_d16_total_H=$pregunta[0]["imputados_d16_total_H"];
/* p16 */  $imputados_d16_total_T=$pregunta[0]["imputados_d16_total_T"];
/* p16 */  $imputados_d16_menor18_M=$pregunta[0]["imputados_d16_menor18_M"];
/* p16 */  $imputados_d16_menor18_H=$pregunta[0]["imputados_d16_menor18_H"];
/* p16 */  $imputados_d16_menor18_T=$pregunta[0]["imputados_d16_menor18_T"];
/* p16 */  $imputados_p16_mayor18_M=$pregunta[0]["imputados_p16_mayor18_M"];
/* p16 */  $imputados_p16_mayor18_H=$pregunta[0]["imputados_p16_mayor18_H"];
/* p16 */  $imputados_p16_mayor18_T=$pregunta[0]["imputados_p16_mayor18_T"];

/* p17 */  $casos_d17_conde=$pregunta[0]["casos_d17_conde"];
/* p17 */  $casos_d17_abso=$pregunta[0]["casos_d17_abso"];
/* p17 */  $casos_d17_mixta=$pregunta[0]["casos_d17_mixta"];
/* p17 */  $casos_d17_otros=$pregunta[0]["casos_d17_otros"];
/* p17 */  $casos_d17_otros_cuales=$pregunta[0]["casos_d17_otros_cuales"];

/* p17.1 */ $casos_d17_1_total_M=$pregunta[0]["casos_d17_1_total_M"];
/* p17.1 */ $casos_d17_1_total_H=$pregunta[0]["casos_d17_1_total_H"];
/* p17.1 */ $casos_d17_1_total_T=$pregunta[0]["casos_d17_1_total_T"];


/* p17.1 */  $casos_d17_1_menor18_M=$pregunta[0]["casos_d17_1_menor18_M"];
/* p17.1 */  $casos_d17_1_menor18_H=$pregunta[0]["casos_d17_1_menor18_H"];
/* p17.1 */  $casos_d17_1_menor18_T=$pregunta[0]["casos_d17_1_menor18_T"];

/* p17.1 */  $casos_d17_1_mayor18_M=$pregunta[0]["casos_d17_1_mayor18_M"];
/* p17.1 */  $casos_d17_1_mayor18_H=$pregunta[0]["casos_d17_1_mayor18_H"];
/* p17.1 */  $casos_d17_1_mayor18_T=$pregunta[0]["casos_d17_1_mayor18_T"];

/* p17.2 */  $casos_d17_2_total_M=$pregunta[0]["casos_d17_2_total_M"];
/* p17.2 */  $casos_d17_2_total_H=$pregunta[0]["casos_d17_2_total_H"];
/* p17.2 */  $casos_d17_2_total_T=$pregunta[0]["casos_d17_2_total_T"];


/* p17.2 */  $casos_d17_2_menor18_M=$pregunta[0]["casos_d17_2_menor18_M"];
/* p17.2 */  $casos_d17_2_menor18_H=$pregunta[0]["casos_d17_2_menor18_H"];
/* p17.2 */  $casos_d17_2_menor18_T=$pregunta[0]["casos_d17_2_menor18_T"];

/* p17.2 */  $casos_d17_2_mayor18_M=$pregunta[0]["casos_d17_2_mayor18_M"];
/* p17.2 */  $casos_d17_2_mayor18_H=$pregunta[0]["casos_d17_2_mayor18_H"];
/* p17.2 */  $casos_d17_2_mayor18_T=$pregunta[0]["casos_d17_2_mayor18_T"];

}
?>

                        <!-- Finaliza Tab Denuncias a Servidores Públicos-->








                        <!-- Tab Denuncias a Servidores Públicos -->

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




                      }
                      ?>



                        <!-- Finaliza Tab Denuncias a Servidores Públicos-->



                        <!-- Tab Transparencia -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">15. Asuntos</h3>
                            </div>
                            <br>
                            <div class="panel-body">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <form action="#" method="post" class="col-lg-12">

                                          <div>
                                              <h5>15.- Total de asuntos que conoció la defensoría en el año 2020. </h5>
                                          </div>
                                          <table class="table">
                                              <thead>
                                                  <tr>
                                                      <th> Recibidos </th>
                                                      <th>En proceso de atención</th>
                                                      <th>Concluidos</th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <tr>
                                                      <td>
                                                          <div class="input-group">
                                                              <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                  name="asuntos_p15_recibidos" id="asuntos_p15_recibidos"
                                                                  onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                  <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                  value="<?php echo $asuntos_p15_recibidos; ?>">

                                                          </div>
                                                      </td>
                                                      <td>
                                                          <div class="input-group">
                                                              <input type="number"  min="0" pattern="^[0-9]+" class="form-control"
                                                                  name="asuntos_p15_proceate" id="asuntos_p15_proceate"
                                                                  onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                  <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                  value="<?php echo $asuntos_p15_proceate; ?>">

                                                          </div>
                                                      </td>
                                                      <td>
                                                          <div class="input-group">
                                                              <input type="number"  min="0" pattern="^[0-9]+" class="form-control"
                                                                  name="asuntos_d15_conclu" id="asuntos_d15_conclu"
                                                                  onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                  <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                  value="<?php echo $asuntos_d15_conclu; ?>">
                                                          </div>
                                                      </td>
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
                                <h3 class="panel-title text-center">16. Imputados </h3>
                            </div>
                            <br>
                            <div class="panel-body">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <form action="#" method="post" class="col-lg-12">

                                          <!--  Pregunta -->
                                          <div>
                                              <h5>16.-  Total de personas atendidas por la defensoría pública en el año 2020. Desglosar por sexo y edad.</h5>
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
                                                                    name="imputados_p16_mayor18_M"
                                                                    id="imputados_p16_mayor18_M"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $imputados_p16_mayor18_M; ?>">

                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                              <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="imputados_p16_mayor18_H"
                                                                    id="imputados_p16_mayor18_H"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $imputados_p16_mayor18_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="imputados_p16_mayor18_T"
                                                                    id="imputados_p16_mayor18_T"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $imputados_p16_mayor18_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Menor de 18</td>
                                                        <td>
                                                            <div class="input-group">
                                                              <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="imputados_d16_menor18_M"
                                                                    id="imputados_d16_menor18_M"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $imputados_d16_menor18_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="imputados_d16_menor18_H"
                                                                    id="imputados_d16_menor18_H"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $imputados_d16_menor18_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                              <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="imputados_d16_menor18_T"
                                                                    id="imputados_d16_menor18_T"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $imputados_d16_menor18_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Total</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="imputados_d16_total_M"
                                                                    id="imputados_d16_total_M"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $imputados_d16_total_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="imputados_d16_total_H"
                                                                    id="imputados_d16_total_H"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $imputados_d16_total_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="imputados_d16_total_T"
                                                                    id="imputados_d16_total_T"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $imputados_d16_total_T; ?>">
                                                            </div>

                                                        </td>
                                                    </tr>
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
                                <h3 class="panel-title text-center">17. Casos Finalizados </h3>
                            </div>
                            <br>
                            <div class="panel-body">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <form action="#" method="post" class="col-lg-12">
                                          <div>
                                              <h5>
                                                17.- Total de asuntos finalizados en el año 2020. Desglosar por tipo de sentencia.
                                              </h5>
                                          </div>

                                          <br>
                                          <table class="table">
                                              <tbody>
                                                  <tr>
                                                      <div class="form-check">




                                                          <input class="form-check-input" type="checkbox"
                                                              id="casos_d17_conde"
                                                              <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                              <?php if ($casos_d17_conde == "Condenatoria"){echo ' checked="checked"'; }?>
                                                              />
                                                          <label class="form-check-label" for="casos_d17_conde">
                                                              Condenatoria
                                                          </label>
                                                      </div>
                                                      <div class="form-check">
                                                          <input class="form-check-input" type="checkbox"
                                                              id="casos_d17_abso"
                                                              <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                              <?php if ($casos_d17_abso == "Absolutoria"){echo ' checked="checked"'; }?>
                                                              />

                                                          <label class="form-check-label" for="casos_d17_abso">
                                                              Absolutoria
                                                          </label>
                                                      </div>
                                                      <div class="form-check">
                                                          <input class="form-check-input" type="checkbox"
                                                              id="casos_d17_mixta"
                                                              <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                              <?php echo $casos_d17_mixta ?>
                                                              <?php if ($casos_d17_mixta == "Mixta"){echo ' checked="checked"'; }?>
                                                              />

                                                          <label class="form-check-label" for="necesidades_p13_rectec">
                                                              Mixta
                                                          </label>
                                                      </div>



                                                      <div class="form-check form-check-inline">
                                                          <input class="form-check-input" type="checkbox"
                                                          name="casos_d17_otros"
                                                          id="casos_d17_otros"
                                                          <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                          onchange="javascript:showContent1014()"
                                                          <?php if ($casos_d17_otros == "Otro"){echo ' checked="checked"'; }?>
                                                          />
                                                          <label class="form-check-label"
                                                          for="casos_d17_otros">Otro
                                                        </label>

                                                        <div id="content1014" style="display: none;">
                                                          <label class="form-check-label"
                                                          for="casos_d17_otros_cuales">
                                                          ¿Cuáles?</label>
                                                          <input class="form-control" type="text"
                                                          name="casos_d17_otros_cuales"
                                                          id="casos_d17_otros_cuales"
                                                          <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                          value="<?php echo $casos_d17_otros_cuales; ?>"/>
                                                        </div>
                                                        </div>

                                                  </tr>

                                              </tbody>
                                          </table>

                                          <div>
                                              <h5>17.1.- Total de asuntos finalizados por acuerdo reparatorio en el 2020. Desglosar por edad y sexo del imputado.</h5>
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
                                                                    name="casos_d17_1_mayor18_M"
                                                                    id="casos_d17_1_mayor18_M"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $casos_d17_1_mayor18_M; ?>">

                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                              <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="casos_d17_1_mayor18_H"
                                                                    id="casos_d17_1_mayor18_H"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $casos_d17_1_mayor18_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="casos_d17_1_mayor18_T"
                                                                    id="casos_d17_1_mayor18_T"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $casos_d17_1_mayor18_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Menor de 18</td>
                                                        <td>
                                                            <div class="input-group">
                                                              <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="casos_d17_1_menor18_M"
                                                                    id="casos_d17_1_menor18_M"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $casos_d17_1_menor18_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="casos_d17_1_menor18_H"
                                                                    id="casos_d17_1_menor18_H"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $casos_d17_1_menor18_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                              <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="casos_d17_1_menor18_T"
                                                                    id="casos_d17_1_menor18_T"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $casos_d17_1_menor18_T; ?>">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Total</td>
                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="casos_d17_1_total_M"
                                                                    id="casos_d17_1_total_M"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $casos_d17_1_total_M; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="casos_d17_1_total_H"
                                                                    id="casos_d17_1_total_H"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $casos_d17_1_total_H; ?>">
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                    name="casos_d17_1_total_T"
                                                                    id="casos_d17_1_total_T"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    value="<?php echo $casos_d17_1_total_T; ?>">
                                                            </div>

                                                        </td>
                                                    </tr>
                                            </table>

                                            <div>
                                                <h5>17.2.- Total de causas finalizadas por suspensión condicional del proceso en el año 2020. Desglosar por edad y sexo del imputado.</h5>
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
                                                                      name="casos_d17_2_mayor18_M"
                                                                      id="casos_d17_2_mayor18_M"
                                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                      value="<?php echo $casos_d17_2_mayor18_M; ?>">

                                                              </div>
                                                          </td>

                                                          <td>
                                                              <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                      name="casos_d17_2_mayor18_H"
                                                                      id="casos_d17_2_mayor18_H"
                                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                      value="<?php echo $casos_d17_2_mayor18_H; ?>">
                                                              </div>
                                                          </td>

                                                          <td>
                                                              <div class="input-group">
                                                                  <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                      name="casos_d17_2_mayor18_T"
                                                                      id="casos_d17_2_mayor18_T"
                                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                      value="<?php echo $casos_d17_2_mayor18_T; ?>">
                                                              </div>
                                                          </td>
                                                      </tr>
                                                      <tr>
                                                          <td>Menor de 18</td>
                                                          <td>
                                                              <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                      name="casos_d17_2_menor18_M"
                                                                      id="casos_d17_2_menor18_M"
                                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                      value="<?php echo $casos_d17_2_menor18_M; ?>">
                                                              </div>
                                                          </td>

                                                          <td>
                                                              <div class="input-group">
                                                                  <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                      name="casos_d17_2_menor18_H"
                                                                      id="casos_d17_2_menor18_H"
                                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                      value="<?php echo $casos_d17_2_menor18_H; ?>">
                                                              </div>
                                                          </td>

                                                          <td>
                                                              <div class="input-group">
                                                                <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                      name="casos_d17_2_menor18_T"
                                                                      id="casos_d17_2_menor18_T"
                                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                      value="<?php echo $casos_d17_2_menor18_T; ?>">
                                                              </div>
                                                          </td>
                                                      </tr>
                                                      <tr>
                                                          <td>Total</td>
                                                          <td>
                                                              <div class="input-group">
                                                                  <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                      name="casos_d17_2_total_M"
                                                                      id="casos_d17_2_total_M"
                                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                      value="<?php echo $casos_d17_2_total_M; ?>">
                                                              </div>
                                                          </td>

                                                          <td>
                                                              <div class="input-group">
                                                                  <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                      name="casos_d17_2_total_H"
                                                                      id="casos_d17_2_total_H"
                                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                      value="<?php echo $casos_d17_2_total_H; ?>">
                                                              </div>
                                                          </td>

                                                          <td>
                                                              <div class="input-group">
                                                                  <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                      name="casos_d17_2_total_T"
                                                                      id="casos_d17_2_total_T"
                                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                      value="<?php echo $casos_d17_2_total_T; ?>">
                                                              </div>

                                                          </td>
                                                      </tr>
                                              </table>


                                              <div>
                                                  <h5>17.3.- Total de casos finalizados por procedimiento abreviado en el año 2020. Desglosar por tipo de sentencia y sexo del imputado. </h5>
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
                                                                      name="casos_d17_3_fin_M" id="casos_d17_3_fin_M"
                                                                      onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                      value="<?php echo $casos_d17_3_fin_M; ?>">

                                                              </div>
                                                          </td>
                                                          <td>
                                                              <div class="input-group">
                                                                  <input type="number"  min="0" pattern="^[0-9]+" class="form-control"
                                                                      name="casos_d17_3_fin_H" id="casos_d17_3_fin_H"
                                                                      onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                      value="<?php echo $casos_d17_3_fin_H; ?>">

                                                              </div>
                                                          </td>
                                                          <td>
                                                              <div class="input-group">
                                                                  <input type="number"  min="0" pattern="^[0-9]+" class="form-control"
                                                                      name="casos_d17_3_fin_T" id="casos_d17_3_fin_T"
                                                                      onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                      <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                      value="<?php echo $casos_d17_3_fin_T; ?>">
                                                              </div>
                                                          </td>
                                                      </tr>
                                                  </tbody>
                                              </table>



                                              <div>
                                                  <h5>17.4.- Total de causas finalizadas por suspensión condicional del proceso en el año 2020. Desglosar por edad y sexo del imputado.</h5>
                                              </div>

                                                <table class="table">
                                                    <thead>
                                                        <tr>

                                                            <th>Descripción</th>
                                                            <th> Total </th>
                                                            <th>Menor de 18 años </th>
                                                            <th>Mayor de 18 años</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Condenatoria</td>
                                                            <td>
                                                                <div class="input-group">
                                                                    <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                        name="casos_d17_3_conde_T"
                                                                        id="casos_d17_3_conde_T"
                                                                        <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                        value="<?php echo $casos_d17_3_conde_T; ?>">

                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="input-group">
                                                                  <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                        name="casos_d17_3_conde_Men18"
                                                                        id="casos_d17_3_conde_Men18"
                                                                        <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                        value="<?php echo $casos_d17_3_conde_Men18; ?>">
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="input-group">
                                                                    <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                        name="casos_d17_3_conde_May18"
                                                                        id="casos_d17_3_conde_May18"
                                                                        <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                        value="<?php echo $casos_d17_3_conde_May18; ?>">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Absolutoria</td>
                                                            <td>
                                                                <div class="input-group">
                                                                  <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                        name="casos_d17_3_abso_T"
                                                                        id="casos_d17_3_abso_T"
                                                                        <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                        value="<?php echo $casos_d17_3_abso_T; ?>">
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="input-group">
                                                                    <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                        name="casos_d17_3_abso_Men18"
                                                                        id="casos_d17_3_abso_Men18"
                                                                        <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                        value="<?php echo $casos_d17_3_abso_Men18; ?>">
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="input-group">
                                                                  <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                        name="casos_d17_3_abso_May18"
                                                                        id="casos_d17_3_abso_May18"
                                                                        <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                        value="<?php echo $casos_d17_3_abso_May18; ?>">
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Mixta</td>
                                                            <td>
                                                                <div class="input-group">
                                                                    <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                        name="casos_d17_3_mixta_T"
                                                                        id="casos_d17_3_mixta_T"
                                                                        <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                        value="<?php echo $casos_d17_3_mixta_T; ?>">
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="input-group">
                                                                    <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                        name="casos_d17_3_mixta_Men18"
                                                                        id="casos_d17_3_mixta_Men18"
                                                                        <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                        value="<?php echo $casos_d17_3_mixta_Men18; ?>">
                                                                </div>
                                                            </td>

                                                            <td>
                                                                <div class="input-group">
                                                                    <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                        name="casos_d17_3_mixta_May18"
                                                                        id="casos_d17_3_mixta_May18"
                                                                        <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                        value="<?php echo $casos_d17_3_mixta_May18; ?>">
                                                                </div>

                                                            </td>
                                                        </tr>
                                                </table>

                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="checkbox"
                                                    name="casos_d17_3_otros"
                                                    id="casos_d17_3_otros"
                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                    onchange="javascript:showContent1014()"
                                                    <?php if ($casos_d17_3_otros == "Otro"){echo ' checked="checked"'; }?>
                                                    />
                                                    <label class="form-check-label"
                                                    for="casos_d17_otros">Otro
                                                  </label>

                                                  <div id="content1014" style="display: none;">
                                                    <label class="form-check-label"
                                                    for="casos_d17_3_otros_cual">
                                                    ¿Cuáles?</label>
                                                    <input class="form-control" type="text"
                                                    name="casos_d17_3_otros_cual"
                                                    id="casos_d17_3_otros_cual"
                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                    value="<?php echo $casos_d17_3_otros_cual; ?>"/>
                                                  </div>
                                                  </div>


                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h3 class="panel-title text-center">18. VÍCTIMAS </h3>
                                                    </div>
                                                    <br>
                                                    <div class="panel-body">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <form action="#" method="post" class="col-lg-12">

                                                                  <div>
                                                                      <h5>18.- ¿La institución cuenta con buenas prácticas que considere sean innovadoras para
                                                                        evitar la revictimización tanto de  víctimas directas como de indirectas?</h5>
                                                                  </div>
                                                                  <br>
                                                                  <table class="table">
                                                                      <tbody>
                                                                          <tr>

                                                                            <div class="form-group col-md-6">
                                                                            <div class="form-check form-check-inline">
                                                                              <label class="form-check-label" for="victimas_d18_instvicdir">
                                                                            <input class="form-check-input" type="radio"
                                                                            name="victimas_d18_instvicdir" id="victimas_d18_instvicdir"
                                                                            <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                            <?php if ($victimas_d18_instvicdir == "Sí"){echo ' checked="checked"'; }?> />
                                                                            Sí</label>
                                                                            </div>
                                                                            <div class="form-check form-check-inline">
                                                                              <label class="form-check-label" for="victimas_d18_instvicdir">
                                                                            <input class="form-check-input" type="radio"
                                                                            name="victimas_d18_instvicdir" id="victimas_d18_instvicdir"
                                                                            <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                            <?php if ($victimas_d18_instvicdir == "No"){echo ' checked="checked"'; }?> />
                                                                            No</label>
                                                                            </div>
                                                                            </div>

                                                                          </tr>

                                                                      </tbody>
                                                                  </table>

                                                                  <div>
                                                                      <h5>
                                                                          18.1.- ¿Cuáles son esas buenas  prácticas?                                                                      </h5>
                                                                  </div>

                                                                  <br>

                                                                      </tbody>
                                                                      <table class="table">
                                                                          <tbody>
                                                                              <tr>

                                                                                <textarea  <?php if($estatus != 0) { echo "disabled='true'"; } ?>  class="form-control" name="victimas_d18_1_buenprac" id="victimas_d18_1_buenprac" rows="10" cols="90" ><?php echo $victimas_d18_1_buenprac; ?></textarea>



                                                                              </tr>
                                                                          </tbody>
                                                                      </table>

                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <input type="button" value="Guardar cambios"
                                                    class="btn btn-success btn-flotante crearTab6" />

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
                                <!--<h3 class="panel-title text-center">18. Mesas de Justicia</h3> -->
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
                                <h3 class="panel-title text-center">19. MESAS DE JUSTICIA </h3>
                            </div>
                            <br>
                            <div class="panel-body">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <form action="#" method="post" class="col-lg-12">
                                            <div>
                                                <h5>
                                                    19.- La institución participa en las Mesas de Justicia -judicialización- de la entidad?
                                                </h5>
                                            </div>
                                            <br>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <div class="form-group col-md-6">
                                                            <div class="form-check form-check-inline">
                                                              <label class="form-check-label" for="mesa_d19_judicia">
                                                                  <input class="form-check-input" type="radio"
                                                                    name="mesa_d19_judicia" id="mesa_d19_judicia"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    <?php if ($mesa_d19_judicia == "Sí"){echo ' checked="checked"'; }?>/>
                                                                Sí</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                              <label class="form-check-label" for="mesa_d19_judicia_no">
                                                                <input class="form-check-input" type="radio"
                                                                    name="mesa_d19_judicia" id="mesa_d19_judicia_no"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                   <?php if ($mesa_d19_judicia_no == "No"){echo ' checked="checked"'; }?>/>
                                                                No</label>
                                                            </div>
                                                        </div>

                                                    </tr>


                                                </tbody>
                                            </table>

                                            <div>
                                                <h5>
                                                    19.1 ¿Qué instituciones participan en las Mesas de Justicia -judicialización-?
                                                </h5>
                                            </div>

                                            <br>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="mesa_d19_1_segobedo" name="mesa_d19_1_segobedo"
                                                            <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                              <?php if ($mesa_d19_1_segobedo == "Secretaría de Gobierno del Estado"){echo ' checked="checked"'; }?>
                                                              />

                                                            <label class="form-check-label" for="mesa_d19_1_segobedo">
                                                                Secretaría de Gobierno del Estado
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="mesa_d19_1_uasisjus" name="mesa_d19_1_uasisjus"
                                                                  <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                              <?php if ($mesa_d19_1_uasisjus == "Unidad de Apoyo al Sistema de Justicia"){echo ' checked="checked"'; }?>
                                                              />
                                                            <label class="form-check-label" for="mesa_d19_1_uasisjus">
                                                                Unidad de Apoyo al Sistema de Justicia
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="mesa_d19_1_ptrisup" name="mesa_d19_1_ptrisup"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                <?php if ($mesa_d19_1_ptrisup == "Presidente/a del Tribunal Superior de Justicia del Estado"){echo ' checked="checked"'; }?>
                                                                />
                                                            <label class="form-check-label" for="mesa_d19_1_ptrisup">
                                                                Presidente/a del Tribunal Superior de Justicia del
                                                                Estado
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="mesa_d19_1_fisgral" name="mesa_d19_1_fisgral"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                <?php if ($mesa_d19_1_fisgral == "Fiscal o Procurador/a General del Estado"){echo ' checked="checked"'; }?>
                                                                />
                                                            <label class="form-check-label" for="mesa_d19_1_fisgral">
                                                                Fiscal o Procurador/a General del Estado
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <label class="form-check-label" for="mesa_d19_1_secsegpu">  <input class="form-check-input" type="checkbox"
                                                                id="mesa_d19_1_secsegpu" name="mesa_d19_1_secsegpu"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                <?php if ($mesa_d19_1_secsegpu == "Secretario/a de Seguridad Pública/ Jefe de la Policía u homólogo"){echo ' checked="checked"'; }?>
                                                                />

                                                                Secretario/a de Seguridad Pública/ Jefe de la Policía u homólogo
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="mesa_d19_1_tinst" name="mesa_d19_1_tinst"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                <?php if ($mesa_d19_1_tinst == "Titular del Instituto de la Defensoría del Estado"){echo ' checked="checked"'; }?>
                                                                />
                                                            <label class="form-check-label" for="mesa_d19_1_tinst">
                                                                Titular del Instituto de la Defensoría del Estado
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <label class="form-check-label" for="mesa_d19_1_subsispen">      <input class="form-check-input" type="checkbox"
                                                                id="mesa_d19_1_subsispen" name="mesa_d19_1_subsispen"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                <?php if ($mesa_d19_1_subsispen == "Subsecretario/a del Sistema Penitenciario/ Director General u homólogo"){echo ' checked="checked"'; }?>
                                                                />

                                                                Subsecretario/a del Sistema Penitenciario/ Director General u homólogo
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                          <label class="form-check-label" for="mesa_d19_1_tautsup">    <input class="form-check-input" type="checkbox"
                                                                id="mesa_d19_1_tautsup" name="necesidades_p18_1_tautsup"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                <?php if ($mesa_d19_1_tautsup == "Titular de la Autoridad de Supervisión de Medidas Cautelares y de Suspensión Condicional del Proceso"){echo ' checked="checked"'; }?>
                                                                />

                                                                Titular de la Autoridad de Supervisión de Medidas Cautelares y de Suspensión Condicional del Proceso
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="mesa_d19_1_tinsestm" name="mesa_d19_1_tinsestm"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                <?php if ($mesa_d19_1_tinsestm == "Titular del Instituto Estatal de las Mujeres"){echo ' checked="checked"'; }?>
                                                                />
                                                            <label class="form-check-label" for="mesa_d19_1_tinsestm">
                                                                Titular del Instituto Estatal de las Mujeres
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="mesa_d19_1_dif" name="mesa_d19_1_dif"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                <?php if ($mesa_d19_1_dif == "DIF estatal"){echo ' checked="checked"'; }?>
                                                                />
                                                            <label class="form-check-label" for="mesa_d19_1_dif">
                                                                DIF estatal
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="mesa_d19_1_sipinna" name="mesa_d19_1_sipinna"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                <?php if ($mesa_d19_1_sipinna == "SIPINNA estatal"){echo ' checked="checked"'; }?>
                                                                />
                                                            <label class="form-check-label" for="mesa_d19_1_sipinna">
                                                                SIPINNA estatal
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="mesa_d19_1_secsal" name="mesa_d19_1_secsal"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                <?php if ($mesa_d19_1_secsal == "Secretaría de Salud"){echo ' checked="checked"'; }?>
                                                                />
                                                            <label class="form-check-label" for="mesa_d19_1_secsal">
                                                                Secretaría de Salud
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="mesa_d19_1_asejurvict" name="mesa_d19_1_asejurvict"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                <?php if ($mesa_d19_1_asejurvict == "Comisión Ejecutiva de Atención a Víctimas"){echo ' checked="checked"'; }?>
                                                                />
                                                            <label class="form-check-label" for="mesa_d19_1_asejurvict">
                                                                Asesores jurídicos victimales
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="mesa_d19_1_titcenjutmuj" name="mesa_d19_1_titcenjutmuj"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                <?php if ($mesa_d19_1_titcenjutmuj == "Centro o Unidad de atención a víctimas u homólogo"){echo ' checked="checked"'; }?>
                                                                />
                                                            <label class="form-check-label" for="mesa_d19_1_titcenjutmuj">
                                                                	Titular del Centro de Justicia para las Mujeres
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="mesa_d19_1_titfisespdelgenero" name="mesa_d19_1_titfisespdelgenero"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                <?php if ($mesa_d19_1_titfisespdelgenero == "Titular del Centro de Justicia para Mujeres u homólogo"){echo ' checked="checked"'; }?>
                                                                />
                                                            <label class="form-check-label" for="mesa_d19_1_titfisespdelgenero">
                                                                Titular de la Fiscalía Especializada delitos en razón de género
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <label class="form-check-label" for="mesa_d19_1_dircentpen">  <input class="form-check-input" type="checkbox"
                                                                id="mesa_d19_1_dircentpen" name="mesa_d19_1_dircentpen"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                <?php if ($necesidades_p18_1_tfisespm == "Titular de Fiscalía Especializada en delitos en razón de género"){echo ' checked="checked"'; }?>
                                                                />

                                                                Director/a de Centros penitenciarios
                                                            </label>

                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="mesa_d19_1_dcenpenadol" name="mesa_d19_1_dcenpenadol"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                <?php if ($mesa_d19_1_dcenpenadol == "Director/a de Centros de internamiento para adolescentes"){echo ' checked="checked"'; }?>
                                                                />
                                                            <label class="form-check-label" for="mesa_d19_1_dcenpenadol">
                                                                Director/a de Centros de internamiento para adolescentes
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                        <label class="form-check-label" for="mesa_d19_1_torgmec">      <input class="form-check-input" type="checkbox"
                                                                id="mesa_d19_1_torgmec" name="mesa_d19_1_torgmec"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                <?php if ($mesa_d19_1_torgmec == "Titular del Órgano de Mecanismos Alternativos de Solución de Controversias en materia Penal u homólogo"){echo ' checked="checked"'; }?>
                                                                />

                                                                Titular del Órgano de Mecanismos Alternativos de Solución de Controversias en materia Penal u homólogo
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="mesa_d19_1_tsevper" name="mesa_d19_1_tsevper"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                <?php if ($mesa_d19_1_tsevper == "Titular de Servicios Periciales y Forenses u homólogo"){echo ' checked="checked"'; }?>
                                                                />
                                                            <label class="form-check-label" for="mesa_d19_1_tsevper">
                                                                Titular de Servicios Periciales y Forenses u homólogo
                                                            </label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="mesa_d19_1_otros" name="mesa_d19_1_otros"
                                                                <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                onchange="javascript:showContent1533()"
                                                                <?php if ($mesa_d19_1_otros == "Otros"){echo ' checked="checked"'; }?>
                                                                />
                                                            <label class="form-check-label" for="mesa_d19_1_otros">
                                                                Otros


                                                            </label>



                                                            <div id="content1533" style="display: none;">
                                                              <label class="form-check-label"
                                                              for="mesa_d19_1_cual">
                                                              ¿Cuáles?</label>
                                                              <input class="form-control" type="text"
                                                              name="mesa_d19_1_cual"
                                                              id="mesa_d19_1_cual"
                                                              <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                              value="<?php echo $mesa_d19_1_cual; ?>"/>
                                                            </div>
                                                        </div>

                                                    </tr>


                                                </tbody>
                                            </table>
                                            <div>
                                                <input type="checkbox" name="mesa_d19_1_noaplica"
                                                    id="mesa_d19_1_noaplica"
                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                    <?php echo $mesa_d19_1_noaplica ?> /><label>No aplica</label>
                                            </div>
                                            <div>
                                                <input type="checkbox" name="mesa_d19_1_nosesabe"
                                                    id="mesa_d19_1_nosesabe"
                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                    <?php echo $mesa_d19_1_nosesabe ?> /><label>No se sabe</label>
                                            </div>
                                            <div>
                                                <h5>19.2 ¿Generalmente con qué frecuencia se realizan las Mesas de Justicia -judicialización- en la entidad?</h5>
                                            </div>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <div class="form-group col-md-6">


                                                          <textarea  <?php if($estatus != 0) { echo "readonly='true'"; } ?>
                                                            <?php if($mesa_d19_2_frecmesajust == "No") { echo "readonly='true'"; } ?>

                                                            class="form-control" name="mesa_d19_2_frecmesajust" id="mesa_d19_2_frecmesajust" rows="10" cols="90" ><?php echo $mesa_d19_2_frecmesajust; ?></textarea>


                                                        </div>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div>
                                                <input type="checkbox" name="mesa_d19_2_noaplica"
                                                    id="mesa_d19_2_noaplica"
                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                    <?php echo $mesa_d19_2_noaplica ?> /><label>No aplica</label>
                                            </div>
                                            <div>
                                                <input type="checkbox" name="mesa_d19_2_nosesabe"
                                                    id="mesa_d19_2_nosesabe"
                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                    <?php echo $mesa_d19_2_nosesabe ?> /><label>No se sabe</label>
                                            </div>

                                            <div>
                                                <h5>19.3 Describir buenas prácticas que considere sean innovadoras para mejorar el Sistema de Justicia y que hayan sido implementadas en la entidad derivadas de las Mesas de Justicia - judicialización-
                                                   </h5>
                                            </div>
                                            <table class="table">
                                                <tbody>
                                                    <tr>

                                                      <textarea  <?php if($estatus != 0) { echo "disabled='true'"; } ?>

                                                                  <?php if($mesa_p19_2_buenpract== "No") { echo "readonly='true'"; } ?>

                                                                  class="form-control" name="mesa_p19_2_buenpract" id="mesa_p19_2_buenpract" rows="10" cols="90" ><?php echo $mesa_p19_2_buenpract; ?></textarea>


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
                                <h3 class="panel-title text-center">20. IMPACTO COVID-19</h3>
                                </div>
                            <br>
                            <div class="panel-body">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <form action="#" method="post" class="col-lg-12">

                                          <div>
                                              <h5>
                                                  20 ¿La institución incorporó medidas preventivas durante COVID-19 que considere sean innovadoras para proteger la salud del personal?
                                          </div>
                                          <br>
                                          <table class="table">
                                              <tbody>
                                                  <tr>
                                                      <div class="form-group col-md-6">
                                                          <div class="form-check form-check-inline">
                                                              <input class="form-check-input" type="radio"
                                                                  name="inpacto_p20_medprecovid" id="inpacto_p20_medprecovid"
                                                                  <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                  <?php if ($inpacto_p20_medprecovid == "SÍ"){echo ' checked="checked"'; }?>>
                                                              <label class="form-check-label"
                                                                  for="inpacto_p20_medprecovid">Sí</label>
                                                          </div>
                                                          <div class="form-check form-check-inline">
                                                              <input class="form-check-input" type="radio"
                                                                  name="inpacto_p20_medprecovid" id="inpacto_p20_medprecovid_no"
                                                                  <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                  <?php if ($inpacto_p20_medprecovid == "NO"){echo ' checked="checked"'; }?>>
                                                              <label class="form-check-label"
                                                                  for="inpacto_p20_medprecovid_no">No</label>
                                                          </div>
                                                      </div>

                                                  </tr>

                                              </tbody>
                                          </table>

                                          <!--  Pregunta -->
                                          <div>
                                              <h5>20.1 Describir las medidas señaladas en la pregunta anterior.
                                                 </h5>
                                          </div>
                                          <table class="table">
                                              <tbody>
                                                  <tr>

                                                    <textarea  <?php if($estatus != 0) { echo "disabled='true'"; } ?>

                                                                <?php if($mesa_p19_2_buenpract== "No") { echo "readonly='true'"; } ?>

                                                                class="form-control" name="inpacto_p20_1_desmed" id="inpacto_p20_1_desmed" rows="10" cols="90" ><?php echo $inpacto_p20_1_desmed; ?></textarea>


                                                  </tr>
                                              </tbody>
                                          </table>

                                            <!--  Fin  Pregunta  -->

                                            <!--  Pregunta -->
                                            <div>
                                                <h5>
                                                    20.2  ¿La institución incorporó medidas preventivas durante COVID-19 que considere sean innovadoras para proteger la salud de las personas usuarias/ciudadanía?
                                            </div>
                                            <br>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <div class="form-group col-md-6">
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    name="inpacto_p20_2_medprecovidino" id="inpacto_p20_2_medprecovidino"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    <?php if ($inpacto_p20_2_medprecovidino == "SÍ"){echo ' checked="checked"'; }?>>
                                                                <label class="form-check-label"
                                                                    for="inpacto_p20_2_medprecovidino">Sí</label>
                                                            </div>
                                                            <div class="form-check form-check-inline">
                                                                <input class="form-check-input" type="radio"
                                                                    name="inpacto_p20_2_medprecovidino" id="inpacto_p20_2_medprecovidino_no"
                                                                    <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                    <?php if ($inpacto_p20_2_medprecovidino == "NO"){echo ' checked="checked"'; }?>>
                                                                <label class="form-check-label"
                                                                    for="inpacto_p20_2_medprecovidino_no">No</label>
                                                            </div>
                                                        </div>

                                                    </tr>

                                                </tbody>
                                            </table>

                                            <div>
                                                <h5>20.3 Describir las medidas/buenas prácticas señaladas en la pregunta anterior.
                                                   </h5>
                                            </div>
                                            <table class="table">
                                                <tbody>
                                                    <tr>

                                                      <textarea  <?php if($estatus != 0) { echo "disabled='true'"; } ?>

                                                                  <?php if($mesa_d20_3_buenpract== "No") { echo "readonly='true'"; } ?>

                                                                  class="form-control" name="mesa_d20_3_buenpract" id="mesa_d20_3_buenpract" rows="10" cols="90" ><?php echo $mesa_d20_3_buenpract; ?></textarea>


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
                                                        <h3 class="panel-title text-center">21.	JUSTICIA TERAPÉUTICA</h3>
                                                        <br>
                                                        <div style="text-align: center;">Las siguientes preguntas son recabadas con el fin de que la Dirección General para la Reconciliación y Justicia de la UASJ pueda coadyuvar en la implementación de proyectos de Justicia Terapéutica.

                                                      </div>
                                                    </div>
                                                    <br>
                                                    <div class="panel-body">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <form action="#" method="post" class="col-lg-12">


                                                                  <div>
                                                                      <h5>
                                                                          21 La institución cuenta con un programa de Justicia Terapéutica para la atención y/o tratamiento específico del consumo problemático de sustancias psicoactivas.
                                                                  </div>
                                                                  <br>
                                                                  <table class="table">
                                                                      <tbody>
                                                                          <tr>
                                                                              <div class="form-group col-md-6">
                                                                                  <div class="form-check form-check-inline">
                                                                                      <input class="form-check-input" type="radio"
                                                                                          name="justera_d21_progjustera" id="justera_d21_progjustera"
                                                                                          <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                                          <?php if ($justera_d21_progjustera == "SÍ"){echo ' checked="checked"'; }?>>
                                                                                      <label class="form-check-label"
                                                                                          for="justera_d21_progjustera">Sí</label>
                                                                                  </div>
                                                                                  <div class="form-check form-check-inline">
                                                                                      <input class="form-check-input" type="radio"
                                                                                          name="justera_d21_progjustera" id="justera_d21_progjustera_no"
                                                                                          <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                                          <?php if ($justera_d21_progjustera == "NO"){echo ' checked="checked"'; }?>>
                                                                                      <label class="form-check-label"
                                                                                          for="justera_d21_progjustera_no">No</label>
                                                                                  </div>
                                                                              </div>

                                                                          </tr>

                                                                      </tbody>
                                                                  </table>

                                                                  <div>

                                                                      <h5>21.1 Total de personas imputadas en un programa de Justicia Terapéutica que cuentan con defensa pública y cuyos casos fueron resueltos por acuerdo reparatorio. Desglosar por sexo y estado del acuerdo.

                      </h5>
                                                                  </div>
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
                                                                              <td>Con acuerdo reparatorio firmado </td>
                                                                              <td>
                                                                                  <div class="input-group">
                                                                                      <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                                          name="justera_d21_1_acuerdrepfirma_M"
                                                                                          id="justera_d21_1_acuerdrepfirma_M"
                                                                                          <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                                          onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                                          value="<?php echo $justera_d21_1_acuerdrepfirma_M; ?>">
                                                                                  </div>
                                                                              </td>
                                                                              <td>
                                                                                  <div class="input-group">
                                                                                      <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                                          name="justera_d21_1_acuerdrepfirma_H"
                                                                                          id="justera_d21_1_acuerdrepfirma_H"
                                                                                          <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                                          onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                                          value="<?php echo $justera_d21_1_acuerdrepfirma_H; ?>">
                                                                                  </div>
                                                                              </td>
                                                                              <td>
                                                                                  <div class="input-group">
                                                                                      <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                                          name="justera_d21_1_acuerdrepfirma_T"
                                                                                          id="justera_d21_1_acuerdrepfirma_T"
                                                                                          <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                                          onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                                          value="<?php echo $justera_d21_1_acuerdrepfirma_T; ?>">
                                                                                  </div>
                                                                              </td>
                                                                          </tr>

                                                                          <tr>
                                                                              <td>2</td>
                                                                              <td>En tramite </td>
                                                                              <td>
                                                                                  <div class="input-group">
                                                                                      <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                                          name="justera_d21_1_acuerfirma_M"
                                                                                          id="justera_d21_1_acuerfirma_M"
                                                                                          <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                                          onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                                          value="<?php echo $justera_d21_1_acuerfirma_M; ?>">
                                                                                  </div>
                                                                              </td>
                                                                              <td>
                                                                                  <div class="input-group">
                                                                                      <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                                          name="justera_d21_1_acuerfirma_H"
                                                                                          id="justera_d21_1_acuerfirma_H"
                                                                                          <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                                          onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                                          value="<?php echo $justera_d21_1_acuerfirma_H; ?>">
                                                                                  </div>
                                                                              </td>
                                                                              <td>
                                                                                  <div class="input-group">
                                                                                      <input type="number" min="0" pattern="^[0-9]+" class="form-control"
                                                                                          name="justera_d21_1_acuerfirma_T"
                                                                                          id="justera_d21_1_acuerfirma_T"
                                                                                          <?php if($estatus != 0) { echo "disabled='true'"; } ?>
                                                                                          onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                                                          value="<?php echo $justera_d21_1_acuerfirma_M; ?>">
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
  mujeres_d4_protoInter = document.getElementById("mujeres_d4_protoInter");
    if (mujeres_d4_protoInter.checked) {
        element.style.display = 'block';
    } else {
        document.getElementById("mujeres_d4_protoInter_cual").value=null;
        element.style.display = 'none';
    }
}

function showContent2() {
    element = document.getElementById("content2");
    mujeres_d4_interno = document.getElementById("mujeres_d4_interno");
    if (mujeres_d4_interno.checked) {
        element.style.display = 'block';
    } else {
        document.getElementById("mujeres_d4_interno_cua").value=null;
        element.style.display = 'none';
    }
}

function showContent400() {
    element = document.getElementById("content400");
    mujeres_d4_otros = document.getElementById("mujeres_d4_otros");
    if (mujeres_d4_otros.checked) {
        element.style.display = 'block';
    } else {
        document.getElementById("mujeres_d4_otros_cual").value=null;
        element.style.display = 'none';
    }
}







function showContent22() {
    element = document.getElementById("content22");
    ja_d5_2_protoInter = document.getElementById("ja_d5_2_protoInter");
    if (ja_d5_2_protoInter.checked) {
        element.style.display = 'block';
    } else {
      document.getElementById("ja_d5_2_protoInter_cual").value=null;
        element.style.display = 'none';
    }
}


function showContent11() {
    element = document.getElementById("content11");
    ja_d5_2_interno = document.getElementById("ja_d5_2_interno");
    if (ja_d5_2_interno.checked) {
        element.style.display = 'block';
    } else {
      document.getElementById("ja_d5_2_interno_cua").value=null;
        element.style.display = 'none';

    }
}

function showContent99() {
    element = document.getElementById("content99");
    ja_d5_2_otros = document.getElementById("ja_d5_2_otros");
    if (ja_d5_2_otros.checked) {
        element.style.display = 'block';
    } else {
      document.getElementById("ja_d5_2_otros_cual").value=null;
        element.style.display = 'none';
    }
}





function showContent04() {
    element = document.getElementById("content04");
    capacitacion_p2_2_otro = document.getElementById("capacitacion_p2_2_otro");
    if (capacitacion_p2_2_otro.checked) {
        element.style.display = 'block';
    } else {
        document.getElementById("capacitacion_p2_2_otro_cual").value=null;
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
      //document.getElementById("denunciaserv_p14_den_cual").value=null;

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


function showContent100() {
    element = document.getElementById("content100");
    indigenas_p6_4_ProtoInter = document.getElementById("indigenas_p6_4_ProtoInter");
    if (indigenas_p6_4_ProtoInter.checked) {
        element.style.display = 'block';
    } else {
      document.getElementById("indigenas_p6_4_ProtoInter_cual").value=null;
        element.style.display = 'none';
    }
}


function showContent101() {
    element = document.getElementById("content101");
    indigenas_p6_4_interno = document.getElementById("indigenas_p6_4_interno");
    if (indigenas_p6_4_interno.checked) {
        element.style.display = 'block';
    } else {
      document.getElementById("indigenas_p6_4_interno_cual").value=null;
        element.style.display = 'none';
    }
}



function showContent1001() {
    element = document.getElementById("content1001");
    registro_p10_1_otros = document.getElementById("registro_p10_1_otros");
    if (registro_p10_1_otros.checked) {
        element.style.display = 'block';
    } else {
      document.getElementById("registro_p10_1_cual").value=null;
        element.style.display = 'none';
    }
}




function showContent1002() {
    element = document.getElementById("content1002");
    registro_p10_2_otro = document.getElementById("registro_p10_2_otro");
    if (registro_p10_2_otro.checked) {
        element.style.display = 'block';
    } else {
        document.getElementById("registro_p10_2_cual").value=null;
        element.style.display = 'none';
    }
}


function showContent1004() {
    element = document.getElementById("content1004");
    registro_p10_4_otro = document.getElementById("registro_p10_4_otro");
    if (registro_p10_4_otro.checked) {
        element.style.display = 'block';
    } else {
        document.getElementById("registro_p10_4_cual").value=null;
        element.style.display = 'none';
    }
}






function showContent102() {
    element = document.getElementById("content102");
    indigenas_p6_4_otro = document.getElementById("indigenas_p6_4_otro");
    if (indigenas_p6_4_otro.checked) {
        element.style.display = 'block';
    } else {
      document.getElementById("indigenas_p6_4_otro_cual").value=null;
        element.style.display = 'none';
    }
}



function showContent104() {
    element = document.getElementById("content104");
    extranjeras_p7_4_Otro = document.getElementById("extranjeras_p7_4_Otro");
    if (extranjeras_p7_4_Otro.checked) {
        element.style.display = 'block';
    } else {
      document.getElementById("extranjeras_p7_4_Otro_cual").value=null;
        element.style.display = 'none';
    }
}











function showContent107() {
    element = document.getElementById("content107");
    discapacidad_p8_2_otros = document.getElementById("discapacidad_p8_2_otros");
    if (discapacidad_p8_2_otros.checked) {
        element.style.display = 'block';
    } else {
      document.getElementById("discapacidad_p8_2_otros_cual").value=null;
        element.style.display = 'none';
    }
}


function showContent1010() {
    element = document.getElementById("content1010");
    extranjeras_p7_4_ProtoInterna = document.getElementById("extranjeras_p7_4_ProtoInterna");
    if (extranjeras_p7_4_ProtoInterna.checked) {
        element.style.display = 'block';
    } else {
      document.getElementById("extranjeras_p7_4_ProtoInterna_cual").value=null;
        element.style.display = 'none';
    }
}

function showContent1014() {
    element = document.getElementById("content1014");
    necesidades_p13_otros = document.getElementById("necesidades_p13_otros");
    if (necesidades_p13_otros.checked) {
        element.style.display = 'block';
    } else {
      document.getElementById("necesidades_p13_cual").value=null;
        element.style.display = 'none';
    }
}

function showContent153() {
    element = document.getElementById("content153");
    casos_d17_otros = document.getElementById("casos_d17_otros");
    if (casos_d17_otros.checked) {
        element.style.display = 'block';
    } else {
      document.getElementById("casos_d17_otros_cuales").value=null;
        element.style.display = 'none';
    }
}


function showContent1533() {
    element = document.getElementById("content1533");
    necesidades_p18_1_otros = document.getElementById("necesidades_p18_1_otros");
    if (necesidades_p18_1_otros.checked) {
        element.style.display = 'block';
    } else {
        document.getElementById("necesidades_p18_1_cual").value=null;
        element.style.display = 'none';
    }
}



function showContent92() {
    element = document.getElementById("content92");
    colaboracion_p9_2_otros = document.getElementById("colaboracion_p9_2_otros");
    if (colaboracion_p9_2_otros.checked) {
        element.style.display = 'block';
    } else {
      document.getElementById("colaboracion_p9_2_cual").value=null;
        element.style.display = 'none';
    }
}


function showContent10() {
    element = document.getElementById("content10");
    registro_p10_otro = document.getElementById("registro_p10_otro");
    if (registro_p10_otro.checked) {
        element.style.display = 'block';
    } else {
      document.getElementById("registro_p10_cual").value=null;
        element.style.display = 'none';
    }
}

function showContent1020() {
    element = document.getElementById("content1020");
    discapacidad_p8_2_ProtoInterna = document.getElementById("discapacidad_p8_2_ProtoInterna");
    if (discapacidad_p8_2_ProtoInterna.checked) {
        element.style.display = 'block';
    } else {
      document.getElementById("discapacidad_p8_2_ProtoInterna_cual").value=null;
        element.style.display = 'none';
    }
}

function showContent1021() {
    element = document.getElementById("content1021");
    discapacidad_p8_2_interno = document.getElementById("discapacidad_p8_2_interno");
    if (discapacidad_p8_2_interno.checked) {
        element.style.display = 'block';
    } else {
      document.getElementById("discapacidad_p8_2_interno_cua").value=null;
        element.style.display = 'none';
    }
}


function showContent103() {
    element = document.getElementById("content103");
    extranjeras_p7_4_interno = document.getElementById("extranjeras_p7_4_interno");
    if (extranjeras_p7_4_interno.checked) {
        element.style.display = 'block';
    } else {
      document.getElementById("extranjeras_p7_4_interno_cual").value=null;
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



    var datos = new FormData();
    datos.append("idFormulario", idFormulario);
    datos.append("uuid", uuid);
    datos.append("indicadores_p11_modeval", indicadores_p11_modeval);
    datos.append("indicadores_p11_1_cualind", indicadores_p11_1_cualind);
    datos.append("evaluacion_p11_2_evalind", evaluacion_p11_2_evalind);



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
    var necesidades_p13_noaplica = $("#necesidades_p13_noaplica").val();
    var necesidades_p13_nosesabe = $("#necesidades_p13_nosesabe").val();

    var necesidades_p13_1_desnec = $("#necesidades_p13_1_desnec").val();
    var necesidades_p13_1_noaplica = $("#necesidades_p13_1_noaplica").val();

    if ($("#denunciaserv_p14_den").is(":checked")) {
        var denunciaserv_p14_den = "SÍ";
    } else {
        var denunciaserv_p14_den = "NO";
    }

    var denunciaserv_p14_den_cual = $("#denunciaserv_p14_den_cual").val();
    var denunciaserv_p14_2_quej = $("#denunciaserv_p14_2_quej").val();

    var denunciaserv_p14_3_defp_M = $("#denunciaserv_p14_3_defp_M").val();
    var denunciaserv_d14_3_defp_H = $("#denunciaserv_d14_3_defp_H").val();
    var denunciaserv_p14_3_defp_T = $("#denunciaserv_p14_3_defp_T").val();
    var denunciaserv_p14_3_otros = $("#denunciaserv_p14_3_otros").val();
    var denunciaserv_p14_3_otros_M = $("#denunciaserv_p14_3_otros_M").val();
    var denunciaserv_p14_3_otros_H = $("#denunciaserv_p14_3_otros_H").val();
    var denunciaserv_p14_3_otros_T = $("#denunciaserv_p14_3_otros_T").val();

    var denunciaserv_p14_4_defp_M = $("#denunciaserv_p14_4_defp_M").val();
    var denunciaserv_p14_4_defp_H = $("#denunciaserv_p14_4_defp_H").val();
    var denunciaserv_p14_4_defp_T = $("#denunciaserv_p14_4_defp_T").val();
    var denunciaserv_p14_4_otroscual = $("#denunciaserv_p14_4_otroscual").val();
    var denunciaserv_p14_4_otros_M = $("#denunciaserv_p14_4_otros_M").val();
    var denunciaserv_p14_4_otros_H = $("#denunciaserv_p14_4_otros_H").val();
    var denunciaserv_p14_4_otros_T = $("#denunciaserv_p14_4_otros_T").val();

    var denunciaserv_p142_3_defp_M = $("#denunciaserv_p142_3_defp_M").val();
    var denunciaserv_p142_3_defp_H = $("#denunciaserv_p142_3_defp_H").val();
    var denunciaserv_p142_3_defp_T = $("#denunciaserv_p142_3_defp_T").val();
    var denunciaserv_p142_3_otros = $("#denunciaserv_p142_3_otros").val();
    var denunciaserv_p142_3_otros_M = $("#denunciaserv_p142_3_otros_M").val();
    var denunciaserv_p142_3_otros_H = $("#denunciaserv_p142_3_otros_H").val();
    var denunciaserv_p142_3_otros_T = $("#denunciaserv_p142_3_otros_T").val();

    var denunciaserv_p142_4_defp_M = $("#denunciaserv_p142_4_defp_M").val();
    var denunciaserv_p142_4_defp_H = $("#denunciaserv_p142_4_defp_H").val();
    var denunciaserv_p142_4_defp_T = $("#denunciaserv_p142_4_defp_T").val();
    var denunciaserv_p142_4_otroscual = $("#denunciaserv_p142_4_otroscual").val();
    var denunciaserv_p142_4_otros_M = $("#denunciaserv_p142_4_otros_M").val();
    var denunciaserv_p142_4_otros_H = $("#denunciaserv_p142_4_otros_H").val();
    var denunciaserv_p142_4_otros_T = $("#denunciaserv_p142_4_otros_T").val();






    var asuntos_p15_recibidos = $("#asuntos_p15_recibidos").val();
    var asuntos_p15_proceate = $("#asuntos_p15_proceate").val();
    var asuntos_d15_conclu = $("#asuntos_d15_conclu").val();

    var imputados_d16_total_M = $("#imputados_d16_total_M").val();
    var imputados_d16_total_H = $("#imputados_d16_total_H").val();
    var imputados_d16_total_T = $("#imputados_d16_total_T").val();
    var imputados_d16_menor18_M = $("#imputados_d16_menor18_M").val();
    var imputados_d16_menor18_H = $("#imputados_d16_menor18_H").val();
    var imputados_d16_menor18_T = $("#imputados_d16_menor18_T").val();
    var imputados_p16_mayor18_M = $("#imputados_p16_mayor18_M").val();
    var imputados_p16_mayor18_H = $("#imputados_p16_mayor18_H").val();
    var imputados_p16_mayor18_T = $("#imputados_p16_mayor18_T").val();


    if ($("#casos_d17_conde").is(":checked")) {
        var casos_d17_conde = "Condenatoria";
    } else {
        var casos_d17_conde = "";
    }

    if ($("#casos_d17_abso").is(":checked")) {
        var casos_d17_abso = "Absolutoria";
    } else {
        var casos_d17_abso = "";
    }

    if ($("#casos_d17_mixta").is(":checked")) {
        var casos_d17_mixta = "Mixta";
    } else {
        var casos_d17_mixta = "";
    }

    if ($("#casos_d17_otros").is(":checked")) {
        var casos_d17_otros = "Otro";
    } else {
        var casos_d17_otros = "";
    }

    var casos_d17_otros_cuales = $("#casos_d17_otros_cuales").val();

    var casos_d17_1_total_M = $("#casos_d17_1_total_M").val();
    var casos_d17_1_total_H = $("#casos_d17_1_total_H").val();
    var casos_d17_1_total_T = $("#casos_d17_1_total_T").val();

    var casos_d17_1_menor18_M = $("#casos_d17_1_menor18_M").val();
    var casos_d17_1_menor18_H = $("#casos_d17_1_menor18_H").val();
    var casos_d17_1_menor18_T = $("#casos_d17_1_menor18_T").val();

    var casos_d17_1_mayor18_M = $("#casos_d17_1_mayor18_M").val();
    var casos_d17_1_mayor18_H = $("#casos_d17_1_mayor18_H").val();
    var casos_d17_1_mayor18_T = $("#casos_d17_1_mayor18_T").val();

    var casos_d17_2_total_M = $("#casos_d17_2_total_M").val();
    var casos_d17_2_total_H = $("#casos_d17_2_total_H").val();
    var casos_d17_2_total_T = $("#casos_d17_2_total_T").val();


    var casos_d17_2_menor18_M = $("#casos_d17_2_menor18_M").val();
    var casos_d17_2_menor18_H = $("#casos_d17_2_menor18_H").val();
    var casos_d17_2_menor18_T = $("#casos_d17_2_menor18_T").val();

    var casos_d17_2_mayor18_M = $("#casos_d17_2_mayor18_M").val();
    var casos_d17_2_mayor18_H = $("#casos_d17_2_mayor18_H").val();
    var casos_d17_2_mayor18_T = $("#casos_d17_2_mayor18_T").val();







    var datos = new FormData();
    datos.append("idFormulario", idFormulario);
    datos.append("uuid", uuid);

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
    datos.append("necesidades_p13_noaplica", necesidades_p13_noaplica);
    datos.append("necesidades_p13_nosesabe", necesidades_p13_nosesabe);
    datos.append("necesidades_p13_1_desnec", necesidades_p13_1_desnec);
    datos.append("necesidades_p13_1_noaplica", necesidades_p13_1_noaplica);

    datos.append("denunciaserv_p14_den", denunciaserv_p14_den);
    datos.append("denunciaserv_p14_den_cual", denunciaserv_p14_den_cual);
    datos.append("denunciaserv_p14_2_quej", denunciaserv_p14_2_quej);

    datos.append("denunciaserv_p14_3_defp_M", denunciaserv_p14_3_defp_M);
    datos.append("denunciaserv_d14_3_defp_H", denunciaserv_d14_3_defp_H);
    datos.append("denunciaserv_p14_3_defp_T", denunciaserv_p14_3_defp_T);
    datos.append("denunciaserv_p14_3_otros", denunciaserv_p14_3_otros);
    datos.append("denunciaserv_p14_3_otros_M", denunciaserv_p14_3_otros_M);
    datos.append("denunciaserv_p14_3_otros_H", denunciaserv_p14_3_otros_H);
    datos.append("denunciaserv_p14_3_otros_T", denunciaserv_p14_3_otros_T);

    datos.append("denunciaserv_p14_4_defp_M", denunciaserv_p14_4_defp_M);
    datos.append("denunciaserv_p14_4_defp_H", denunciaserv_p14_4_defp_H);
    datos.append("denunciaserv_p14_4_defp_T", denunciaserv_p14_4_defp_T);
    datos.append("denunciaserv_p14_4_otroscual", denunciaserv_p14_4_otroscual);
    datos.append("denunciaserv_p14_4_otros_M", denunciaserv_p14_4_otros_M);
    datos.append("denunciaserv_p14_4_otros_H", denunciaserv_p14_4_otros_H);
    datos.append("denunciaserv_p14_4_otros_T", denunciaserv_p14_4_otros_T);

    datos.append("denunciaserv_p142_3_defp_M", denunciaserv_p142_3_defp_M);
    datos.append("denunciaserv_p142_3_defp_H", denunciaserv_p142_3_defp_H);
    datos.append("denunciaserv_p142_3_defp_T", denunciaserv_p142_3_defp_T);
    datos.append("denunciaserv_p142_3_otros", denunciaserv_p142_3_otros);
    datos.append("denunciaserv_p142_3_otros_M", denunciaserv_p142_3_otros_M);
    datos.append("denunciaserv_p142_3_otros_H", denunciaserv_p142_3_otros_H);
    datos.append("denunciaserv_p142_3_otros_T", denunciaserv_p142_3_otros_T);

    datos.append("denunciaserv_p142_4_defp_M", denunciaserv_p142_4_defp_M);
    datos.append("denunciaserv_p142_4_defp_H", denunciaserv_p142_4_defp_H);
    datos.append("denunciaserv_p142_4_defp_T", denunciaserv_p142_4_defp_T);
    datos.append("denunciaserv_p142_4_otroscual", denunciaserv_p142_4_otroscual);
    datos.append("denunciaserv_p142_4_otros_M", denunciaserv_p142_4_otros_M);
    datos.append("denunciaserv_p142_4_otros_H", denunciaserv_p142_4_otros_H);
    datos.append("denunciaserv_p142_4_otros_T", denunciaserv_p142_4_otros_T);









    datos.append("asuntos_p15_recibidos", asuntos_p15_recibidos);
    datos.append("asuntos_p15_proceate", asuntos_p15_proceate);
    datos.append("asuntos_d15_conclu", asuntos_d15_conclu);

    datos.append("imputados_d16_total_M", imputados_d16_total_M);
    datos.append("imputados_d16_total_H", imputados_d16_total_H);
    datos.append("imputados_d16_total_T", imputados_d16_total_T);
    datos.append("imputados_d16_menor18_M", imputados_d16_menor18_M);
    datos.append("imputados_d16_menor18_H", imputados_d16_menor18_H);
    datos.append("imputados_d16_menor18_T", imputados_d16_menor18_T);
    datos.append("imputados_p16_mayor18_M", imputados_p16_mayor18_M);
    datos.append("imputados_p16_mayor18_H", imputados_p16_mayor18_H);

    datos.append("imputados_p16_mayor18_T", imputados_p16_mayor18_T);

    datos.append("casos_d17_conde", casos_d17_conde);

    datos.append("casos_d17_abso", casos_d17_abso);
    datos.append("casos_d17_mixta", casos_d17_mixta);
    datos.append("casos_d17_otros", casos_d17_otros);
    datos.append("casos_d17_otros_cuales", casos_d17_otros_cuales);

    datos.append("casos_d17_1_total_M", casos_d17_1_total_M);
    datos.append("casos_d17_1_total_H", casos_d17_1_total_H);
    datos.append("casos_d17_1_total_T", casos_d17_1_total_T);

    datos.append("casos_d17_1_menor18_M", casos_d17_1_menor18_M);
    datos.append("casos_d17_1_menor18_H", casos_d17_1_menor18_H);
    datos.append("casos_d17_1_menor18_T", casos_d17_1_menor18_T);

    datos.append("casos_d17_1_mayor18_M", casos_d17_1_mayor18_M);
    datos.append("casos_d17_1_mayor18_H", casos_d17_1_mayor18_H);
    datos.append("casos_d17_1_mayor18_T", casos_d17_1_mayor18_T);
    datos.append("casos_d17_2_total_M", casos_d17_2_total_M);
    datos.append("casos_d17_2_total_H", casos_d17_2_total_H);
    datos.append("casos_d17_2_total_T", casos_d17_2_total_T);






    datos.append("casos_d17_2_menor18_M", casos_d17_2_menor18_M);
    datos.append("casos_d17_2_menor18_H", casos_d17_2_menor18_H);
    datos.append("casos_d17_2_menor18_T", casos_d17_2_menor18_T);

    datos.append("casos_d17_2_mayor18_M", casos_d17_2_mayor18_M);
    datos.append("casos_d17_2_mayor18_H", casos_d17_2_mayor18_H);
    datos.append("casos_d17_2_mayor18_T", casos_d17_2_mayor18_T);


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
        var impacto_p19_medprev = "Sí";
    } else {
        var impacto_p19_medprev = "No";
    }

    var impacto_p19_1_medse = $("#impacto_p19_1_medse").val();

    if ($("#impacto_p19_2_incmed").is(":checked")) {
        var impacto_p19_2_incmed = "Sí";
    } else {
        var impacto_p19_2_incmed = "No";
    }

    var impacto_p19_3_descmed = $("#impacto_p19_3_descmed").val();

    var comfin = $("#comfin").val();



    if ($("#terapeutica_p20_progjus").is(":checked")) {
        var terapeutica_p20_progjus = "Sí";
    } else {
        var terapeutica_p20_progjus = "No";
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

var nosesabe14 = document.getElementById('personal_d1_4_nosesabe');

function updateStatus14() {
  if (nosesabe14.checked) {
    $("input.group14").attr("disabled", true).removeAttr("checked").val(" ");
  } else {
    $("input.group14").attr("disabled", false);
  }
}

nosesabe14.addEventListener('change', updateStatus14)

</script>

<script type="text/javascript">

var nosesabe02 = document.getElementById('capacitacion_d1_p2_nosesabe');

function updateStatus02() {
  if (nosesabe02.checked) {
    $("input.group02").attr("disabled", true).removeAttr("checked").val(" ");
  } else {
    $("input.group02").attr("disabled", false);
  }
}

nosesabe02.addEventListener('change', updateStatus02)

</script>

<script type="text/javascript">

var nosesabe021 = document.getElementById('cap_d1_p2_1_noaplicanosesabe');
var noaplica021 = document.getElementById('cap_d1_p2_1_noaplicanosesabe_no');

function updateStatus021() {
  if (nosesabe021.checked ) {
    $("input.group021").attr("disabled", true).val(" ");
    $("textarea.group022").attr("disabled", true).val(" ");
    noaplica021.disabled=true;
    noaplica021.checked=false;
  } else if(noaplica021.checked){
    $("input.group021").attr("disabled", true).val(" ");
    $("textarea.group022").attr("disabled", true).val(" ");
    nosesabe021.disabled=true;
    nosesabe021.checked=false;
  }else {
    $("input.group021").attr("disabled", false);
    $("textarea.group022").attr("disabled", false);
    noaplica021.disabled=false;
    nosesabe021.disabled=false;
  }
}

nosesabe021.addEventListener('change', updateStatus021)
noaplica021.addEventListener('change', updateStatus021)

</script>

<script type="text/javascript">

var si031 = document.getElementById('presupuesto_d1_autopresu');
var no031 = document.getElementById('presupuesto_d1_autopresu_no');

function updateStatus031() {
  if (no031.checked ) {
    $("input.group031").attr("disabled", true).removeAttr("checked").val(" ");
  } else if(si031.checked){
    $("input.group031").attr("disabled", false);
  }else {
    $("input.group031").attr("disabled", false);
  }
}

no031.addEventListener('change', updateStatus031)
si031.addEventListener('change', updateStatus031)

</script>























<script type="text/javascript">

$(function() {
    enable_cb13();
    $("#personal_p1_3_nosesabe").click(enable_cb13);
});

function enable_cb13() {
if (this.checked) {
        $("input.group13").attr("disabled", true).removeAttr("checked").val(" ");
    }else  {
      $("input.group13").attr("disabled", false);
    }
}
</script>


<script type="text/javascript">

$(function() {
    enable_cb23();
    $("#capacitacion_p2_3_nosabe").click(enable_cb23);
});

function enable_cb23() {
if (this.checked) {
        $("input.group23").attr("disabled", true).removeAttr("checked").val(" ");
    }else  {
      $("input.group23").attr("disabled", false);
    }
}
</script>




<script type="text/javascript">

$(function() {
    enable_cb04();
    $("#mujeres_p4_ninguno").click(enable_cb04);
});

function enable_cb04() {
if (this.checked) {
        $("input.group04").attr("disabled", true).removeAttr("checked").val(" ");
    }else  {
      $("input.group04").attr("disabled", false);
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
        $("input.group05").attr("disabled", true).removeAttr("checked").val(" ");
    }else  {
      $("input.group05").attr("disabled", false);
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
        $("input.group64").attr("disabled", true).removeAttr("checked").val(" ");
    }else {
      $("input.group64").attr("disabled", false);
    }
}

</script>


<script type="text/javascript">

$(function() {
    enable_cb7();
    $("#extranjeras_p7_tradLenExt_no").click(enable_cb7);
});

function enable_cb7() {
if (this.checked) {
        $("input.group7").attr("disabled", true).removeAttr("checked").val(" ");
    }else  {
      $("input.group7").attr("disabled", false);
    }
}
</script>



<script type="text/javascript">

$(function() {
    enable_cb74();
    $("#extranjeras_p7_4_ninguno").click(enable_cb74);
});

function enable_cb74() {
if (this.checked) {
        $("input.group74").attr("disabled", true).removeAttr("checked").val(" ");
    }else  {
      $("input.group74").attr("disabled", false);
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
        $("input.group82").attr("disabled", true).removeAttr("checked").val(" ");
    }else {
      $("input.group82").attr("disabled", false);
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



<script type="text/javascript">

var si2 = document.getElementById('capacitacion_p2');
var no2 = document.getElementById('capacitacion_p2_no')
var txtar21 = document.getElementById('capacitacion_p2_1_nom')

function updateStatus2() {
  if (no2.checked) {
    txtar21.disabled = true;
    txtar21.value = null;
  } else {
    txtar21.disabled = false;
  }
}

si2.addEventListener('change', updateStatus2)
no2.addEventListener('change', updateStatus2)

</script>

<script type="text/javascript">

var si3 = document.getElementById('presupuesto_p3');
var no3 = document.getElementById('presupuesto_p3_no')
var txtar31 = document.getElementById('presupuestop3_1_anuaeje20')
var txtar32 = document.getElementById('presupuestop3_2_anuaeje20')

function updateStatus3() {
  if (no3.checked) {
    txtar31.disabled = true;
    txtar31.value = null;
    txtar32.disabled = true;
    txtar32.value = null;
  } else {
    txtar31.disabled = false;
    txtar32.disabled = false;
  }
}

si3.addEventListener('change', updateStatus3)
no3.addEventListener('change', updateStatus3)

</script>


<script type="text/javascript">

var si4 = document.getElementById('mujeres_p4_1_buenprac');
var no4 = document.getElementById('mujeres_p4_1_buenprac_no')
var txtar42 = document.getElementById('mujeres_p4_2_cualBuenprac')

function updateStatus4() {
  if (no4.checked) {
    txtar42.disabled = true;
    txtar42.value = null;
  } else {
    txtar42.disabled = false;
  }
}

si4.addEventListener('change', updateStatus4)
no4.addEventListener('change', updateStatus4)

</script>


<script type="text/javascript">

var si5 = document.getElementById('nna_p5_1_buenpracs');
var no5 = document.getElementById('nna_p5_1_buenpracs_no')
var txtar52 = document.getElementById('nna_p5_2_cualBuenpract')

function updateStatus5() {
  if (no5.checked) {
    txtar52.disabled = true;
    txtar52.value = null;
  } else {
    txtar52.disabled = false;
  }
}

si5.addEventListener('change', updateStatus5)
no5.addEventListener('change', updateStatus5)

</script>


<script type="text/javascript">

var si62 = document.getElementById('indigenas_p6_2_convenio');
var no62 = document.getElementById('indigenas_p6_2_convenio_no')
var txtar622 = document.getElementById('indigenas_p6_2_nombinst')

function updateStatus62() {
  if (no62.checked) {
    txtar622.disabled = true;
    txtar622.value = null;
  } else {
    txtar622.disabled = false;
  }
}

si62.addEventListener('change', updateStatus62)
no62.addEventListener('change', updateStatus62)

</script>

<script type="text/javascript">

var si65 = document.getElementById('indigenas_p6_5_buenaspract');
var no65 = document.getElementById('indigenas_p6_5_buenaspract_no')
var txtar652 = document.getElementById('indigenas_p6_6_cualbuenaspra')

function updateStatus65() {
  if (no65.checked) {
    txtar652.disabled = true;
    txtar652.value = null;
  } else {
    txtar652.disabled = false;
  }
}

si65.addEventListener('change', updateStatus65)
no65.addEventListener('change', updateStatus65)

</script>



<script type="text/javascript">

var si72 = document.getElementById('extranjeras_p7_2_ConvInst');
var no72 = document.getElementById('extranjeras_p7_2_ConvInst_no')
var txtar722 = document.getElementById('extranjeras_p7_3_nombreInsti')

function updateStatus72() {
  if (no72.checked) {
    txtar722.disabled = true;
    txtar722.value = null;
  } else {
    txtar722.disabled = false;
  }
}

si72.addEventListener('change', updateStatus72)
no72.addEventListener('change', updateStatus72)

</script>



<script type="text/javascript">

var si75 = document.getElementById('extranjeras_p7_5_buenasprac');
var no75 = document.getElementById('extranjeras_p7_5_buenasprac_no')
var txtar752 = document.getElementById('extranjeras_p7_6_buenasprac_cual')

function updateStatus75() {
  if (no75.checked) {
    txtar752.disabled = true;
    txtar752.value = null;
  } else {
    txtar752.disabled = false;
  }
}

si75.addEventListener('change', updateStatus75)
no75.addEventListener('change', updateStatus75)

</script>



<script type="text/javascript">

var si8 = document.getElementById('discapacidad_p8_braile');
var no8 = document.getElementById('discapacidad_p8_braile_no')
var si82 = document.getElementById('discapacidad_p8_LenSen');
var no82 = document.getElementById('discapacidad_p8_LenSen_no')
var txtar81 = document.getElementById('discapacidad_p8_1_nombreInst')

/*function updateStatus8() {
  if (no8.checked) {
    txtar81.disabled = true;
    txtar81.value = null;
  } else {
    txtar81.disabled = false;
  }
}

function updateStatus82() {
  if (no82.checked) {
    txtar81.disabled = true;
    txtar81.value = null;
  } else {
    txtar81.disabled = false;
  }
}
*/

function updateStatus8() {
  if (no8.checked && no82.checked) {
    txtar81.disabled = true;
    txtar81.value = null;
  } else {
    txtar81.disabled = false;
  }
}

si8.addEventListener('change', updateStatus8)
no8.addEventListener('change', updateStatus8)
si82.addEventListener('change', updateStatus8)
no82.addEventListener('change', updateStatus8)

</script>


<script type="text/javascript">

var si83 = document.getElementById('discapacidad_p8_3_buenasprac');
var no83 = document.getElementById('discapacidad_p8_3_buenasprac_no')
var txtar832 = document.getElementById('discapacidad_p8_3_buenasprac_cual')

function updateStatus83() {
  if (no83.checked) {
    txtar832.disabled = true;
    txtar832.value = null;
  } else {
    txtar832.disabled = false;
  }
}

si83.addEventListener('change', updateStatus83)
no83.addEventListener('change', updateStatus83)

</script>




<script type="text/javascript">

var si9 = document.getElementById('colaboracion_p9_tipcol');
var no9 = document.getElementById('colaboracion_p9_tipcol_no')
var txtar92 = document.getElementById('colaboracion_p9_1_instcol')

function updateStatus9() {
  if (no9.checked) {
    txtar92.disabled = true;
    txtar92.value = null;
  } else {
    txtar92.disabled = false;
  }
}

si9.addEventListener('change', updateStatus9)
no9.addEventListener('change', updateStatus9)

</script>



<script type="text/javascript">

var si10 = document.getElementById('registro_p10_intsispla');
var no10 = document.getElementById('registro_p10_intsispla_no')
var txtar102 = document.getElementById('registro_p10_1_servsispl')

function updateStatus10() {
  if (no10.checked) {
    txtar102.disabled = true;
    txtar102.value = null;
  } else {
    txtar102.disabled = false;
  }
}

si10.addEventListener('change', updateStatus10)
no10.addEventListener('change', updateStatus10)

</script>




<script type="text/javascript">

var si11 = document.getElementById('indicadores_p11_modeval');
var no11 = document.getElementById('indicadores_p11_modeval_no')
var txtar112 = document.getElementById('indicadores_p11_1_cualind')

function updateStatus11() {
  if (no11.checked) {
    txtar112.disabled = true;
    txtar112.value = null;
  } else {
    txtar112.disabled = false;
  }
}

si11.addEventListener('change', updateStatus11)
no11.addEventListener('change', updateStatus11)

</script>



<script type="text/javascript">

var si12 = document.getElementById('indicadores_p12_bunprac');
var no12 = document.getElementById('indicadores_p12_bunprac_no')
var txtar122 = document.getElementById('transparencia_p12_1_cualpract')

function updateStatus12() {
  if (no12.checked) {
    txtar122.disabled = true;
    txtar122.value = null;
  } else {
    txtar122.disabled = false;
  }
}

si12.addEventListener('change', updateStatus12)
no12.addEventListener('change', updateStatus12)

</script>


<script type="text/javascript">

var si17 = document.getElementById('victimas_p17_bprac');
var no17 = document.getElementById('victimas_p17_bprac_no')
var txtar172 = document.getElementById('')

function updateStatus17() {
  if (no17.checked) {
    txtar172.disabled = true;
    txtar172.value = null;
  } else {
    txtar172.disabled = false;
  }
}

si17.addEventListener('change', updateStatus17)
no17.addEventListener('change', updateStatus17)

</script>


<script type="text/javascript">

var si19 = document.getElementById('impacto_p19_medprev');
var no19 = document.getElementById('impacto_p19_medprev_no')
var txtar192 = document.getElementById('impacto_p19_1_medse')

function updateStatus19() {
  if (no19.checked) {
    txtar192.disabled = true;
    txtar192.value = null;
  } else {
    txtar192.disabled = false;
  }
}

si19.addEventListener('change', updateStatus19)
no19.addEventListener('change', updateStatus19)

</script>


<script type="text/javascript">

var si192 = document.getElementById('impacto_p19_2_incmed');
var no192 = document.getElementById('impacto_p19_2_incmed_no')
var txtar1922 = document.getElementById('impacto_p19_3_descmed')

function updateStatus192() {
  if (no192.checked) {
    txtar1922.disabled = true;
    txtar1922.value = null;
  } else {
    txtar1922.disabled = false;
  }
}

si192.addEventListener('change', updateStatus192)
no192.addEventListener('change', updateStatus192)

</script>
