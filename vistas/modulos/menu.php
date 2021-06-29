<aside class="main-sidebar">

	 <section class="sidebar">

		<ul class="sidebar-menu">

		    <div class="user-panel">
		<div class="pull-left image">

			  <?php

			if($_SESSION["foto"] != ""){

				echo '<img src="'.$_SESSION["foto"].'" class="img-circle" alt="User Image">';

			}else{


				echo '<img src="vistas/img/usuarios/default/anonymous.png" class="img-circle" alt="User Image">';

			}

			?>


		</div>
		<div class="pull-left info">
		  <p><?php  echo $_SESSION["nombre"]; ?></p>
		  <a href="#"><i class="fa fa-circle text-success"></i> En Linea</a>
		</div>
	      </div>
			 <!-- search form -->
	      <form action="#" method="get" class="sidebar-form">
		<div class="input-group">
		  <input type="text" name="search" id="search" class="form-control search-menu-box" placeholder="Buscar...">
		</div>
	      </form>

		<?php


		//MENU


		if($_SESSION["categorias"] == "on"){

			echo '<li '.strMenuActivo($_GET["ruta"],"categorias").'>

				<a href="categorias">

					<i class="fa fa-th"></i>
					<span>Categorías</span>

				</a>

			</li>';

		}


		if("on" == "on"){
			echo '<li '.strMenuActivo($_GET["ruta"],"datosEmpresa").strMenuActivo($_GET["ruta"],"policias").' class="treeview">

					<a href="#">

						<i class="fa fa-tasks"></i>
						<span>Formularios</span>

						<span class="pull-right-container">

							<i class="fa fa-angle-left pull-right"></i>

						</span>

					</a>



				<ul class="treeview-menu">';

				if($_SESSION["formularioDePolicias"] == "on"){
					echo '

						<li '.strMenuActivo($_GET["ruta"],"formularioDePolicias").'>

							<a href="policias">

								<i class="fa fa-building-o"></i>
								<span>Policías</span>
							</a>
						</li>';
				}




				if($_SESSION["formularioDeJueces"] == "on"){
					echo '

					 <li '.strMenuActivo($_GET["ruta"],"formularioDeJueces").'>

						<a href="jueces">

							<i class="fa fa-gavel"></i>
							<span>Jueces</span>

						</a>

					</li> ';

				}





				if($_SESSION["formularioDeFiscales"] == "on"){
					echo '

					 <li '.strMenuActivo($_GET["ruta"],"formularioDeFiscales").'>

						<a href="fiscales">

							<i class="fa fa-university"></i>
							<span>Fiscales</span>

						</a>

					</li> ';

				}


				if($_SESSION["formularioDeDefensores"] == "on"){
					echo '

					 <li '.strMenuActivo($_GET["ruta"],"formularioDeDefensores").'>

						<a href="defensores">

							<i class="fa fa-user-secret"></i>
							<span>Defensores</span>

						</a>

					</li> ';

				}








				echo '
				</ul>' ;


		}















		if($_SESSION["menuConfiguraciones"] == "on"){
			echo '<li '.strMenuActivo($_GET["ruta"],"datosEmpresa").strMenuActivo($_GET["ruta"],"usuarios").' class="treeview">

					<a href="#">

						<i class="fa fa-cogs"></i>
						<span>Configuraciones</span>

						<span class="pull-right-container">

							<i class="fa fa-angle-left pull-right"></i>

						</span>

					</a>

				<ul class="treeview-menu">';

				if($_SESSION["datosEmpresa"] == "on"){
					echo '

						<li '.strMenuActivo($_GET["ruta"],"datosEmpresa").'>

							<a href="datosEmpresa">

								<i class="fa fa-building-o"></i>
								<span>Datos Empresa</span>
							</a>

						</li>';
				}



				if($_SESSION["usuarios"] == "on"){
					echo '

					 <li '.strMenuActivo($_GET["ruta"],"usuarios").'>

						<a href="usuarios">

							<i class="fa fa-user"></i>
							<span>Usuarios</span>

						</a>

					</li> ';

				}


				if($_SESSION["perfiles"] == "on"){
					echo '


					<li '.strMenuActivo($_GET["ruta"],"perfiles").'>

							<a href="perfiles">

								<i class="fa fa-users"></i>
								<span>Perfiles</span>

							</a>

						</li>';
				}


				if($_SESSION["configuracionCorreo"] == "on"){
					echo '
					 <li '.strMenuActivo($_GET["ruta"],"configurarCorreo").'>

						<a href="configurarCorreo">

							<i class="fa fa-envelope-square"></i>
							<span>Configurar Correo</span>

						</a>

					</li>';
				}

			if($_SESSION["bitacora"] == "on"){
				echo '
					 <li '.strMenuActivo($_GET["ruta"],"bitacora").'>

						<a href="bitacora">

							<i class="fa fa-navicon"></i>
							<span>Bitacora</span>

						</a>

					</li>';
				}

				echo '
				</ul>' ;


		}



		?>

		</ul>

	 </section>

</aside>

<script>


	$(document).ready(function () {


	$("#search").on("keyup", function () {
	if (this.value.length > 0) {
	  $(".sidebar-menu li").hide().filter(function () {
	    return $(this).text().toLowerCase().indexOf($("#search").val().toLowerCase()) != -1;
	  }).show();
	}
	else {
	  $(".sidebar-menu li").show();
	}
	});

	});

</script>
