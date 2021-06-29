<?php

require_once "conexion.php";

class ModeloPerfiles{

	/*=============================================
	MOSTRAR USUARIOS
	=============================================*/

	static public function mdlMostrarPerfiles($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT perfil
														 ,descripcion

														  ,(case when menuConfiguraciones='on' then 'on'
														  		else 'off'
														  		end) as menuConfiguraciones

														  ,(case when datosEmpresa='on' then 'on'
														  		else 'off'
														  		end ) as datosEmpresa

														  ,(case when usuarios='on' then 'on'
														  	else 'off'
														  	end) as usuarios

														  ,(case when perfiles='on' then 'on'
														  		 else 'off'
														  		 end) as perfiles

														  ,(case when configuracionCorreo='on' then 'on' else 'off'
														  		end )as configuracionCorreo


														  ,(case when categorias='on' then 'on' else 'off'
														  		  end )as categorias

														  ,(case when bitacora='on' then 'on' else 'off'
														  		  end )as bitacora

																		,(case when formularioDePolicias='on' then 'on' else 'off'
		  														  		  end )as formularioDePolicias

																					,(case when formularioDeJueces='on' then 'on' else 'off'
																								end )as formularioDeJueces

																								,(case when formularioDeFiscales='on' then 'on' else 'off'
																											end )as formularioDeFiscales

									,(case when formularioDeDefensores='on' then 'on' else 'off'
											end )as formularioDeDefensores


													FROM $tabla

													WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT perfil
														 ,descripcion

														  ,(case when menuConfiguraciones='on' then 'on'
														  		else 'off'
														  		end) as menuConfiguraciones

														  ,(case when datosEmpresa='on' then 'on'
														  		else 'off'
														  		end ) as datosEmpresa

														  ,(case when usuarios='on' then 'on'
														  	else 'off'
														  	end) as usuarios

														  ,(case when perfiles='on' then 'on'
														  		 else 'off'
														  		 end) as perfiles

														  ,(case when configuracionCorreo='on' then 'on' else 'off'
														  		end )as configuracionCorreo


														  ,(case when categorias='on' then 'on' else 'off'
														  		  end )as categorias

														  ,(case when bitacora='on' then 'on' else 'off'
														  		  end )as bitacora


															,(case when formularioDePolicias='on' then 'on' else 'off'
																end )as formularioDePolicias

																,(case when formularioDeJueces='on' then 'on' else 'off'
																	end )as formularioDeJueces

																	,(case when formularioDeFiscales='on' then 'on' else 'off'
																		end )as formularioDeFiscales

																		,(case when formularioDeDefensores='on' then 'on' else 'off'
																			end )as formularioDeDefensores

												   FROM
												   $tabla");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}


		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	REGISTRO DE PERFIL
	=============================================*/

	static public function mdlIngresarPerfil($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(descripcion

																,menuConfiguraciones
																,datosEmpresa
																,usuarios
																,perfiles
																,configuracionCorreo

																,categorias


																,bitacora
																,formularioDePolicias
																	,formularioDeJueces
																		,formularioDeFiscales
																		,formularioDeDefensores



																)
														VALUES (:descripcion

																,:menuConfiguraciones
																,:datosEmpresa
																,:usuarios
																,:perfiles
																,:configuracionCorreo


																,:categorias





																,:bitacora
																,:formularioDePolicias
																	,:formularioDeJueces
																		,:formularioDeFiscales
																		,:formularioDeDefensores


															)");

		$stmt->bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);

		$stmt->bindParam(":menuConfiguraciones", $datos["menuConfiguraciones"], PDO::PARAM_STR);
		$stmt->bindParam(":datosEmpresa", $datos["datosEmpresa"], PDO::PARAM_STR);
		$stmt->bindParam(":usuarios", $datos["usuarios"], PDO::PARAM_STR);
		$stmt->bindParam(":perfiles", $datos["perfiles"], PDO::PARAM_STR);
		$stmt->bindParam(":configuracionCorreo", $datos["configuracionCorreo"], PDO::PARAM_STR);

		$stmt->bindParam(":categorias", $datos["categorias"], PDO::PARAM_STR);




		$stmt->bindParam(":bitacora", $datos["bitacora"], PDO::PARAM_STR);
			$stmt->bindParam(":formularioDePolicias", $datos["formularioDePolicias"], PDO::PARAM_STR);
			$stmt->bindParam(":formularioDeJueces", $datos["formularioDeJueces"], PDO::PARAM_STR);
			$stmt->bindParam(":formularioDeFiscales", $datos["formularioDeFiscales"], PDO::PARAM_STR);
			$stmt->bindParam(":formularioDeDefensores", $datos["formularioDeDefensores"], PDO::PARAM_STR);








		if($stmt->execute()){

			return "ok";

		}else{

			return "error";

		}

		$stmt->close();

		$stmt = null;

	}

	/*=============================================
	EDITAR PERFIL
	=============================================*/

	static public function mdlEditarPerfil($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla
												SET descripcion = :descripcion

													,menuConfiguraciones = :menuConfiguraciones
													,datosEmpresa = :datosEmpresa
													,usuarios = :usuarios
													,perfiles = :perfiles
													,configuracionCorreo = :configuracionCorreo


													,categorias= :categorias
													,formularioDePolicias= :formularioDePolicias
													,formularioDeJueces= :formularioDeJueces
														,formularioDeFiscales= :formularioDeFiscales
														,formularioDeDefensores= :formularioDeDefensores




													,bitacora= :bitacora




												WHERE perfil = :perfil"
												);


		$stmt -> bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
		$stmt -> bindParam(":perfil", $datos["perfil"], PDO::PARAM_STR);
		$stmt->bindParam(":menuConfiguraciones", $datos["menuConfiguraciones"], PDO::PARAM_STR);
		$stmt->bindParam(":datosEmpresa", $datos["datosEmpresa"], PDO::PARAM_STR);
		$stmt->bindParam(":usuarios", $datos["usuarios"], PDO::PARAM_STR);
		$stmt->bindParam(":perfiles", $datos["perfiles"], PDO::PARAM_STR);
		$stmt->bindParam(":configuracionCorreo", $datos["configuracionCorreo"], PDO::PARAM_STR);

		$stmt->bindParam(":formularioDePolicias", $datos["formularioDePolicias"], PDO::PARAM_STR);
		$stmt->bindParam(":formularioDeJueces", $datos["formularioDeJueces"], PDO::PARAM_STR);
		$stmt->bindParam(":formularioDeFiscales", $datos["formularioDeFiscales"], PDO::PARAM_STR);
		$stmt->bindParam(":formularioDeDefensores", $datos["formularioDeDefensores"], PDO::PARAM_STR);





		$stmt->bindParam(":categorias", $datos["categorias"], PDO::PARAM_STR);





		$stmt->bindParam(":bitacora", $datos["bitacora"], PDO::PARAM_STR);


		if($stmt -> execute()){

			return "ok";

		}else{

			return "error";

		}

		$stmt -> close();

		$stmt = null;

	}


	/*=============================================
	BORRAR PERFIL
	=============================================*/

	static public function mdlBorrarPerfil($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE perfil = :id");

		$stmt -> bindParam(":id", $datos, PDO::PARAM_INT);

		if($stmt -> execute()){

			return "ok";

		}else{

			return "error";

		}

		$stmt -> close();

		$stmt = null;


	}

}
