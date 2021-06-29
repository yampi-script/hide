<?php

if($_SESSION["perfiles"] == "off"){

  echo '<script>

    window.location = "inicio";

  </script>';

  return;

}

?>
<div class="content-wrapper">

  <section class="content-header">

    <h1>

      Administrar Perfiles

    </h1>

    <ol class="breadcrumb">

      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>

      <li class="active">Administrar Perfiles</li>

    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">

        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuario">

          Agregar Perfil

        </button>

      </div>

      <div class="box-body">

       <table class="table table-bordered table-striped dt-responsive tablas" width="100%">

        <thead>

         <tr>

           <th style="width:10px">#</th>
           <th>Descripcion</th>

           <th>Acciones</th>

         </tr>

        </thead>

        <tbody>

        <?php

        $item = null;
        $valor = null;

        $usuarios = ControladorPerfiles::ctrMostrarPerfiles($item, $valor);

       foreach ($usuarios as $key => $value){

          echo ' <tr>
                  <td>'.$value["perfil"].'</td>
                  <td>'.$value["descripcion"].'</td>';

            echo '
                  <td>

                    <div class="btn-group">

                      <button class="btn btn-warning btnEditarPerfil" idPerfil="'.$value["perfil"].'" data-toggle="modal" data-target="#modalEditarPerfil"><i class="fa fa-pencil"></i></button>

                      <button class="btn btn-danger btnEliminarPerfil" idPerfil="'.$value["perfil"].'" ><i class="fa fa-times"></i></button>

                    </div>

                  </td>

                </tr>';
        }


        ?>

        </tbody>

       </table>

      </div>

    </div>

  </section>

</div>

<!--=====================================
MODAL AGREGAR PERFIL
======================================-->

<div id="modalAgregarUsuario" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar perfil</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA DESCRIPCION DEL PERFIL -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-user"></i></span>

                <input type="text" class="form-control input-lg" name="nuevoDescripcionPerfil" placeholder="Ingresar descripcion perfil" required>

              </div>

            </div>




 <!-- EMPEZAMMOS CON LAS PESTAÑAS -->
<ul class="nav nav-tabs">

  <li class="active"><a data-toggle="tab" href="#configuraciones">Configuraciones</a></li>

  <li><a data-toggle="tab" href="#Catalogos">Catalogos</a></li>

  <li><a data-toggle="tab" href="#Formularios">Formularios</a></li>


</ul>



 <!-- CONTENIDO DE LAS PESTAÑAS -->
<div class="tab-content">


  <!-- CATALOGOS -->
  <div id="Formularios" class="tab-pane fade">

    <h3>Formularios</h3>

    <p>


       <!-- Formulario de Policias -->

    <div class="form-group">

      <div class="input-group">

        <div class="checkbox">

          <label>

            <input type="checkbox" data-toggle="toggle" name="formularioDePolicias" data-on="Si" data-off="No">

            Formulario de Policias

          </label>

        </div>


        <div class="checkbox">

          <label>

            <input type="checkbox" data-toggle="toggle" name="formularioDeJueces" data-on="Si" data-off="No">

            Formulario de Jueces

          </label>

        </div>



        <div class="checkbox">

          <label>

            <input type="checkbox" data-toggle="toggle" name="formularioDeFiscales" data-on="Si" data-off="No">

            Formulario de Fiscales

          </label>

        </div>



        <div class="checkbox">

          <label>

            <input type="checkbox" data-toggle="toggle" name="formularioDeDefensores" data-on="Si" data-off="No">

            Formulario de Defensores

          </label>

        </div>


      </div>

    </div>

    </p>

  </div>

  <div id="configuraciones" class="tab-pane fade in active">

    <h3>Configuraciones</h3>

    <p>

   <!-- Check Configuraciones -->

    <div class="form-group">

      <div class="input-group">
        <div class="checkbox">

          <label>

            <input type="checkbox" data-toggle="toggle" name="mConfiguraciones" data-on="Si" data-off="No">

            Menu Configuraciones

          </label>

        </div>
      </div>
    </div>

       <!-- Check datos empresa -->

    <div class="form-group">

      <div class="input-group">

        <div class="checkbox">

          <label>

            <input type="checkbox" data-toggle="toggle" name="smDatosEmpresa" data-on="Si" data-off="No">

            Datos Empresa

          </label>

        </div>

      </div>

    </div>

   <!-- Check Usuarios -->

    <div class="form-group">

      <div class="input-group">

        <div class="checkbox">

          <label>

            <input type="checkbox" data-toggle="toggle" name="smUsuarios" data-on="Si" data-off="No">

            Usuarios

          </label>

        </div>

      </div>

    </div>

       <!-- Check Perfiles -->

    <div class="form-group">

      <div class="input-group">

        <div class="checkbox">

          <label>

            <input type="checkbox" data-toggle="toggle" name="smPerfiles" data-on="Si" data-off="No">

            Perfiles

          </label>

        </div>

      </div>

    </div>

   <!-- Configuracion de correo -->

    <div class="form-group">

      <div class="input-group">

        <div class="checkbox">

          <label>

            <input type="checkbox" data-toggle="toggle" name="smConfiguracionCorreo" data-on="Si" data-off="No">

            Configuracion de Correo

          </label>

        </div>

      </div>

    </div>

     <!-- Bitacora -->

    <div class="form-group">

      <div class="input-group">

        <div class="checkbox">

          <label>

            <input type="checkbox" data-toggle="toggle" name="smBitacora" data-on="Si" data-off="No">

            Bitacora

          </label>

        </div>

      </div>

    </div>


    </p>
  </div>



  <!-- CATALOGOS -->
  <div id="Catalogos" class="tab-pane fade">

    <h3>Catalogos</h3>

    <p>


       <!-- Catalogo de Categorias -->

    <div class="form-group">

      <div class="input-group">

        <div class="checkbox">

          <label>

            <input type="checkbox" data-toggle="toggle" name="smCategorias" data-on="Si" data-off="No">

            Catalogo de Categorias

          </label>

        </div>

      </div>

    </div>

    </p>

  </div>







  </div>








          </div>

        </div>




        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar Perfil</button>

        </div>

        <?php

          $crearPerfil= new ControladorPerfiles();
          $crearPerfil-> ctrCrearPerfil();

        ?>

      </form>

    </div>

  </div>

</div>

<!--=====================================
MODAL EDITAR PERFIL
======================================-->

<div id="modalEditarPerfil" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar Perfil</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA LA DESCRIPCION -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-user"></i></span>

                <input type="text" class="form-control input-lg" id="editarDescripcion" name="editarDescripcion" value="" required>

              </div>

            </div>


              <!-- ENTRADA PARA EL ID DEL PERFIL -->

            <div class="form-group" hidden>

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-user"></i></span>

                <input type="text" class="form-control input-lg" id="idPerfil" name="idPerfil" value="" required>

              </div>

            </div>





 <!-- EMPEZAMMOS CON LAS PESTAÑAS -->
<ul class="nav nav-tabs">

  <li class="active"><a data-toggle="tab" href="#editarConfiguraciones">Configuraciones</a></li>

  <li><a data-toggle="tab" href="#editarCatalogos">Catalogos</a></li>

  <li><a data-toggle="tab" href="#editarFormularios">Formularios</a></li>

</ul>



 <!-- CONTENIDO DE LAS PESTAÑAS -->
<div class="tab-content">

  <!-- CATALOGOS -->
  <div id="editarFormularios" class="tab-pane fade">

    <h3>Formularios</h3>

    <p>

       <!-- Catalogo de Categorias -->

    <div class="form-group">

      <div class="input-group">

        <div class="checkbox">

          <label>

            <input type="checkbox" data-toggle="toggle" name="editarFormularioDePolicias" id="editarFormularioDePolicias" data-on="Si" data-off="No">

            Formulario de Policias

          </label>

        </div>


        <div class="checkbox">

          <label>

            <input type="checkbox" data-toggle="toggle" name="editarFormularioDeJueces" id="editarFormularioDeJueces" data-on="Si" data-off="No">

            Formulario de Jueces

          </label>

        </div>


        <div class="checkbox">

          <label>

            <input type="checkbox" data-toggle="toggle" name="editarFormularioDeFiscales" id="editarFormularioDeFiscales" data-on="Si" data-off="No">

            Formulario de Fiscales

          </label>

        </div>


        <div class="checkbox">

          <label>

            <input type="checkbox" data-toggle="toggle" name="editarFormularioDeDefensores" id="editarFormularioDeDefensores" data-on="Si" data-off="No">

            Formulario de Defensores

          </label>

        </div>


      </div>

    </div>

    </p>

  </div>


  <div id="editarConfiguraciones" class="tab-pane fade in active">

    <h3>Configuraciones</h3>

    <p>

   <!-- Check Configuraciones -->

    <div class="form-group">

      <div class="input-group">
        <div class="checkbox">

          <label>

            <input type="checkbox" data-toggle="toggle" name="editarmConfiguraciones" id="editarmConfiguraciones" data-on="Si" data-off="No">

            Menu Configuraciones

          </label>

        </div>
      </div>
    </div>

       <!-- Check datos empresa -->

    <div class="form-group">

      <div class="input-group">

        <div class="checkbox">

          <label>

            <input type="checkbox" data-toggle="toggle" name="editarsmDatosEmpresa" id="editarsmDatosEmpresa" data-on="Si" data-off="No">

            Datos Empresa

          </label>

        </div>

      </div>

    </div>

   <!-- Check Usuarios -->

    <div class="form-group">

      <div class="input-group">

        <div class="checkbox">

          <label>

            <input type="checkbox" data-toggle="toggle" name="editarsmUsuarios" id="editarsmUsuarios" data-on="Si" data-off="No">

            Usuarios

          </label>

        </div>

      </div>

    </div>

       <!-- Check Perfiles -->

    <div class="form-group">

      <div class="input-group">

        <div class="checkbox">

          <label>

            <input type="checkbox" data-toggle="toggle" name="editarsmPerfiles" id="editarsmPerfiles" data-on="Si" data-off="No">

            Perfiles

          </label>

        </div>

      </div>

    </div>

   <!-- Configuracion de correo -->

    <div class="form-group">

      <div class="input-group">

        <div class="checkbox">

          <label>

            <input type="checkbox" data-toggle="toggle" name="editarsmConfiguracionCorreo" id="editarsmConfiguracionCorreo"  data-on="Si" data-off="No">

            Configuracion de Correo

          </label>

        </div>

      </div>

    </div>



       <!-- EDITAR DERECHO BITACORA-->

    <div class="form-group">

      <div class="input-group">

        <div class="checkbox">

          <label>

            <input type="checkbox" data-toggle="toggle" name="editarsmBitacora" id="editarsmBitacora"  data-on="Si" data-off="No">

            Bitacora

          </label>

        </div>

      </div>

    </div>


    </p>
  </div>



  <!-- CATALOGOS -->
  <div id="editarCatalogos" class="tab-pane fade">

    <h3>Catalogos</h3>

    <p>

       <!-- Catalogo de Categorias -->

    <div class="form-group">

      <div class="input-group">

        <div class="checkbox">

          <label>

            <input type="checkbox" data-toggle="toggle" name="editarsmCategorias" id="editarsmCategorias" data-on="Si" data-off="No">

            Catalogo de Categorias

          </label>

        </div>

      </div>

    </div>

    </p>

  </div>







  </div>










          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Modificar Perfil</button>

        </div>

     <?php

          $editarPerfil = new ControladorPerfiles();
          $editarPerfil -> ctrEditarPerfil();

        ?>

      </form>

    </div>

  </div>

</div>

<?php

  $borrarPerfil = new ControladorPerfiles();
  $borrarPerfil-> ctrBorrarPerfil();

?>
