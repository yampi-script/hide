<?php
require_once "conexion.php";

class ModeloJueces{

  /*=============================================
	GENERA UUID
	=============================================*/

	static public function mdlGeneraUUID(){

		$stmt = Conexion::conectar()->prepare("select uuid() as generaUUID");

		$stmt -> execute();

		return $stmt -> fetch();

		$stmt -> close();

		$stmt = null;
	}

	/*=============================================
	MOSTRAR Jueces
	=============================================*/

	static public function mdlMostrarJueces($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT *

													FROM jueces a WHERE $item = :valor");

			$stmt -> bindParam(":valor", $valor, PDO::PARAM_INT);

			$stmt -> execute();

			return $stmt -> fetchAll();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT *

													FROM $tabla jueces");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}


		$stmt -> close();

		$stmt = null;

	}


/*=============================================
	MOSTRAR Jueces ID
	=============================================*/

	static public function mdlMostrarJuecesID($item, $valor){



		$stmt = Conexion::conectar()->prepare("SELECT id
			,pcontacto
			,cargo
			,area
			,mail
			,telofi
			,ext
			,telextra

		FROM jueces a WHERE $item = :valor");

		$stmt -> bindParam(":valor", $valor, PDO::PARAM_INT);

		$stmt -> execute();

		return $stmt -> fetch();

		$stmt -> close();

		$stmt = null;

	}


	/*=============================================
	REGISTRO DE USUARIO
	=============================================*/

	static public function mdlIngresarFJueces($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(
																						operador
                                          , pcontacto
                                          , area
                                          , cargo
                                          , mail
                                          , telofi
                                          , ext
                                          , telextra
                                          , uuid
																					, pcontacto2
																					, area2
																					, cargo2
																					, mail2
																					, telofi2
																					, ext2
																					, telextra2
																					, perfil

                                            )
                                            VALUES (
                                                :operador
                                              , :pcontacto
                                              , :area
                                              , :cargo
                                              , :mail
                                              , :telofi
                                              , :ext
                                              , :telextra
                                              , :uuid
																							, :pcontacto2
																							, :area2
																							, :cargo2
																							, :mail2
																							, :telofi2
																							, :ext2
																							, :telextra2
																							, :perfil


                                              )"
                                            );

		$stmt->bindParam(":uuid", $datos["uuid"], PDO::PARAM_STR);
		$stmt->bindParam(":operador", $datos["operador"], PDO::PARAM_STR);
		$stmt->bindParam(":pcontacto", $datos["pcontacto"], PDO::PARAM_STR);
		$stmt->bindParam(":area", $datos["area"], PDO::PARAM_STR);
		$stmt->bindParam(":cargo", $datos["cargo"], PDO::PARAM_STR);
		$stmt->bindParam(":mail", $datos["mail"], PDO::PARAM_STR);
		$stmt->bindParam(":telofi", $datos["mail"], PDO::PARAM_STR);
    $stmt->bindParam(":ext", $datos["ext"], PDO::PARAM_STR);
    $stmt->bindParam(":telextra", $datos["telextra"], PDO::PARAM_STR);
		$stmt->bindParam(":pcontacto2", $datos["pcontacto2"], PDO::PARAM_STR);
		$stmt->bindParam(":area2", $datos["area2"], PDO::PARAM_STR);
		$stmt->bindParam(":cargo2", $datos["cargo2"], PDO::PARAM_STR);
		$stmt->bindParam(":mail2", $datos["mail2"], PDO::PARAM_STR);
		$stmt->bindParam(":telofi2", $datos["telofi2"], PDO::PARAM_STR);
		$stmt->bindParam(":ext2", $datos["ext2"], PDO::PARAM_STR);
		$stmt->bindParam(":telextra2", $datos["telextra2"], PDO::PARAM_STR);
		$stmt->bindParam(":perfil", $datos["perfil"], PDO::PARAM_STR);




		if($stmt->execute()){

			return "La información se ha guardado exitosamente";

		}else{

			$arr = $stmt ->errorInfo();
			$arr[3]="ERROR";
			return $arr[2];

		}

		$stmt->close();

		$stmt = null;

	}

	/*=============================================
	EDITAR tab 1
	=============================================*/

	static public function mdlEditarFJuecesTab1($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET
        pcontacto = :pcontacto
			 , perfil = :perfil
			 , area = :area
			 , cargo = :cargo
			 , mail = :mail
			 , telofi = :telofi
			 , ext = :ext
			 , telextra = :telextra
			 , pcontacto2 = :pcontacto2
			 , area2 = :area2
			 , cargo2 = :cargo2
			 , mail2 = :mail2
			 , telofi2 = :telofi2
			 , ext2 = :ext2
			 , telextra2 = :telextra2



      WHERE id = :idFormulario");


		$stmt -> bindParam(":idFormulario", $datos["idFormulario"], PDO::PARAM_STR);
		$stmt -> bindParam(":perfil", $datos["perfil"], PDO::PARAM_STR);
		$stmt -> bindParam(":pcontacto", $datos["pcontacto"], PDO::PARAM_STR);
		$stmt -> bindParam(":area", $datos["area"], PDO::PARAM_STR);
		$stmt -> bindParam(":cargo", $datos["cargo"], PDO::PARAM_STR);
		$stmt -> bindParam(":mail", $datos["mail"], PDO::PARAM_STR);
		$stmt -> bindParam(":telofi", $datos["telofi"], PDO::PARAM_STR);
		$stmt -> bindParam(":ext", $datos["ext"], PDO::PARAM_STR);
		$stmt -> bindParam(":telextra", $datos["telextra"], PDO::PARAM_STR);
		$stmt -> bindParam(":pcontacto2", $datos["pcontacto2"], PDO::PARAM_STR);
		$stmt -> bindParam(":area2", $datos["area2"], PDO::PARAM_STR);
		$stmt -> bindParam(":cargo2", $datos["cargo2"], PDO::PARAM_STR);
		$stmt -> bindParam(":mail2", $datos["mail2"], PDO::PARAM_STR);
		$stmt -> bindParam(":telofi2", $datos["telofi2"], PDO::PARAM_STR);
		$stmt -> bindParam(":ext2", $datos["ext2"], PDO::PARAM_STR);
		$stmt -> bindParam(":telextra2", $datos["telextra2"], PDO::PARAM_STR);


		if($stmt->execute()){

			return "La información se ha guardado exitosamente";

		}else{

			$arr = $stmt ->errorInfo();
			$arr[3]="ERROR";
			return $arr[2];

		}

		$stmt -> close();

		$stmt = null;

	}



		/*=============================================
		EDITAR tab 2
		=============================================*/

		static public function mdlEditarFJuecesTab2($tabla, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET



 				    /* INFRAESTRUCTURA */

							infraestructura_j1_tot = :infraestructura_j1_tot

					 ,	infraestructura_j1_1_totjuz = :infraestructura_j1_1_totjuz

					 ,	infraestructura_j1_2_totjuz = :infraestructura_j1_2_totjuz
 					 ,	infraestructura_j1_2_matpenacu = :infraestructura_j1_2_matpenacu
					 ,	infraestructura_j1_2_matpenfun = :infraestructura_j1_2_matpenfun

					 	/* PERSONAL */
					 ,	personal_j2_perlab_M = :personal_j2_perlab_M
					 ,	personal_j2_perlab_H = :personal_j2_perlab_H
					 ,	personal_j2_perlab_T = :personal_j2_perlab_T

					 ,	personal_j2_1_mag_M = :personal_j2_1_mag_M
					 ,	personal_j2_1_mag_H = :personal_j2_1_mag_H
					 ,	personal_j2_1_mag_T = :personal_j2_1_mag_T

					 ,	personal_j2_1_jec_M = :personal_j2_1_jec_M
					 ,	personal_j2_1_jec_H = :personal_j2_1_jec_H
					 ,	personal_j2_1_jec_T = :personal_j2_1_jec_T

					 ,	personal_j2_1_sec_M = :personal_j2_1_sec_M
					 ,	personal_j2_1_sec_H = :personal_j2_1_sec_H
					 ,	personal_j2_1_sec_T = :personal_j2_1_sec_T

					 ,	personal_j2_1_act_M = :personal_j2_1_act_M
					 ,	personal_j2_1_act_H = :personal_j2_1_act_H
					 ,	personal_j2_1_act_T = :personal_j2_1_act_T

					 ,	personal_j2_1_otrserv_M = :personal_j2_1_otrserv_M
					 ,	personal_j2_1_otrserv_H = :personal_j2_1_otrserv_H
					 ,	personal_j2_1_otrserv_T = :personal_j2_1_otrserv_T

					 ,	personal_j2_1_otros = :personal_j2_1_otros
					 ,	personal_j2_1_otros_M = :personal_j2_1_otros_M
					 ,	personal_j2_1_otros_H = :personal_j2_1_otros_H
					 ,	personal_j2_1_otros_T = :personal_j2_1_otros_T

					 ,	personal_j2_2_mag_M = :personal_j2_2_mag_M
					 ,	personal_j2_2_mag_H = :personal_j2_2_mag_H
					 ,	personal_j2_2_mag_T = :personal_j2_2_mag_T

					 ,	personal_j2_3_jue_M = :personal_j2_3_jue_M
					 ,	personal_j2_3_jue_H = :personal_j2_3_jue_H
					 ,	personal_j2_3_jue_T = :personal_j2_3_jue_T

					 ,	personal_j2_4_de1a5000_M = :personal_j2_4_de1a5000_M
					 ,	personal_j2_4_de1a5000_H = :personal_j2_4_de1a5000_H
					 ,	personal_j2_4_de1a5000_T = :personal_j2_4_de1a5000_T

					 ,	personal_j2_4_de5001a10000_M = :personal_j2_4_de5001a10000_M
					 ,	personal_j2_4_de5001a10000_H = :personal_j2_4_de5001a10000_H
					 ,	personal_j2_4_de5001a10000_T = :personal_j2_4_de5001a10000_T

					 ,	personal_j2_4_de10001a15000_M = :personal_j2_4_de10001a15000_M
					 ,	personal_j2_4_de10001a15000_H = :personal_j2_4_de10001a15000_H
					 ,	personal_j2_4_de10001a15000_T = :personal_j2_4_de10001a15000_T

					 ,	personal_j2_4_de15001a20000_M = :personal_j2_4_de15001a20000_M
					 ,	personal_j2_4_de15001a20000_H = :personal_j2_4_de15001a20000_H
					 ,	personal_j2_4_de15001a20000_T = :personal_j2_4_de15001a20000_T

					 ,	personal_j2_4_de20001a25000_M = :personal_j2_4_de20001a25000_M
					 ,	personal_j2_4_de20001a25000_H = :personal_j2_4_de20001a25000_H
					 ,	personal_j2_4_de20001a25000_T = :personal_j2_4_de20001a25000_T

					 ,	personal_j2_4_de25001a30000_M = :personal_j2_4_de25001a30000_M
					 ,	personal_j2_4_de25001a30000_H = :personal_j2_4_de25001a30000_H
					 ,	personal_j2_4_de25001a30000_T = :personal_j2_4_de25001a30000_T

					 ,	personal_j2_4_de30001a35000_M = :personal_j2_4_de30001a35000_M
					 ,	personal_j2_4_de30001a35000_H = :personal_j2_4_de30001a35000_H
					 ,	personal_j2_4_de30001a35000_T = :personal_j2_4_de30001a35000_T

					 ,	personal_j2_4_de35001a40000_M = :personal_j2_4_de35001a40000_M
					 ,	personal_j2_4_de35001a40000_H = :personal_j2_4_de35001a40000_H
					 ,	personal_j2_4_de35001a40000_T = :personal_j2_4_de35001a40000_T

					 ,	personal_j2_4_de40001a45000_M = :personal_j2_4_de40001a45000_M
					 ,	personal_j2_4_de40001a45000_H = :personal_j2_4_de40001a45000_H
					 ,	personal_j2_4_de40001a45000_T = :personal_j2_4_de40001a45000_T

					 ,	personal_j2_4_de45001a50000_M = :personal_j2_4_de45001a50000_M
					 ,	personal_j2_4_de45001a50000_H = :personal_j2_4_de45001a50000_H
					 ,	personal_j2_4_de45001a50000_T = :personal_j2_4_de45001a50000_T

					 ,	personal_j2_4_masde50000_M = :personal_j2_4_masde50000_M
					 ,	personal_j2_4_masde50000_H = :personal_j2_4_masde50000_H
					 ,	personal_j2_4_masde50000_T = :personal_j2_4_masde50000_T

					 ,	personal_j2_4_nosesabe = :personal_j2_4_nosesabe

 				    /* CAPACITACIÓN Y EVALUACIÓN DE PERSONAL */

						,	capacitacion_j3_mag_M = :capacitacion_j3_mag_M
 					  ,	capacitacion_j3_mag_H = :capacitacion_j3_mag_H
  					,	capacitacion_j3_mag_T = :capacitacion_j3_mag_T

						,	capacitacion_j3_jec_M = :capacitacion_j3_jec_M
 					  ,	capacitacion_j3_jec_H = :capacitacion_j3_jec_H
  					,	capacitacion_j3_jec_T = :capacitacion_j3_jec_T

						,	capacitacion_j3_sec_M = :capacitacion_j3_sec_M
 					  ,	capacitacion_j3_sec_H = :capacitacion_j3_sec_H
  					,	capacitacion_j3_sec_T = :capacitacion_j3_sec_T

						,	capacitacion_j3_act_M = :capacitacion_j3_act_M
 					  ,	capacitacion_j3_act_H = :capacitacion_j3_act_H
  					,	capacitacion_j3_act_T = :capacitacion_j3_act_T

						,	capacitacion_j3_otrserv_M = :capacitacion_j3_otrserv_M
 					  ,	capacitacion_j3_otrserv_H = :capacitacion_j3_otrserv_H
  					,	capacitacion_j3_otrserv_T = :capacitacion_j3_otrserv_T

						,	capacitacion_j3_otros = :capacitacion_j3_otros
 					  ,	capacitacion_j3_otros_M = :capacitacion_j3_otros_M
  					,	capacitacion_j3_otros_H = :capacitacion_j3_otros_H
						,	capacitacion_j3_otros_T = :capacitacion_j3_otros_T

						,	capacitacion_j3_1_sisjus_M = :capacitacion_j3_1_sisjus_M
 					  ,	capacitacion_j3_1_sisjus_H = :capacitacion_j3_1_sisjus_H
  					,	capacitacion_j3_1_sisjus_T = :capacitacion_j3_1_sisjus_T

						,	capacitacion_j3_1_debpro_M = :capacitacion_j3_1_debpro_M
 					  ,	capacitacion_j3_1_debpro_H = :capacitacion_j3_1_debpro_H
  					,	capacitacion_j3_1_debpro_T = :capacitacion_j3_1_debpro_T

						,	capacitacion_j3_1_fem_M = :capacitacion_j3_1_fem_M
 					  ,	capacitacion_j3_1_fem_H = :capacitacion_j3_1_fem_H
  					,	capacitacion_j3_1_fem_T = :capacitacion_j3_1_fem_T

						,	capacitacion_j3_1_anttra_M = :capacitacion_j3_1_anttra_M
 					  ,	capacitacion_j3_1_anttra_H = :capacitacion_j3_1_anttra_H
  					,	capacitacion_j3_1_anttra_T = :capacitacion_j3_1_anttra_T

						,	capacitacion_j3_1_viomuj_M = :capacitacion_j3_1_viomuj_M
 					  ,	capacitacion_j3_1_viomuj_H = :capacitacion_j3_1_viomuj_H
  					,	capacitacion_j3_1_viomuj_T = :capacitacion_j3_1_viomuj_T

						,	capacitacion_j3_1_asicon_M = :capacitacion_j3_1_asicon_M
 					  ,	capacitacion_j3_1_asicon_H = :capacitacion_j3_1_asicon_H
  					,	capacitacion_j3_1_asicon_T = :capacitacion_j3_1_asicon_T

						,	capacitacion_j3_1_sisint_M = :capacitacion_j3_1_sisint_M
 					  ,	capacitacion_j3_1_sisint_H = :capacitacion_j3_1_sisint_H
  					,	capacitacion_j3_1_sisint_T = :capacitacion_j3_1_sisint_T

						,	capacitacion_j3_1_ejesan_M = :capacitacion_j3_1_ejesan_M
 					  ,	capacitacion_j3_1_ejesan_H = :capacitacion_j3_1_ejesan_H
  					,	capacitacion_j3_1_ejesan_T = :capacitacion_j3_1_ejesan_T

						,	capacitacion_j3_1_ateper_M = :capacitacion_j3_1_ateper_M
 					  ,	capacitacion_j3_1_ateper_H = :capacitacion_j3_1_ateper_H
  					,	capacitacion_j3_1_ateper_T = :capacitacion_j3_1_ateper_T

						,	capacitacion_j3_1_atenperdis_M = :capacitacion_j3_1_atenperdis_M
 					  ,	capacitacion_j3_1_atenperdis_H = :capacitacion_j3_1_atenperdis_H
  					,	capacitacion_j3_1_atenperdis_T = :capacitacion_j3_1_atenperdis_T

						,	capacitacion_j3_1_jusalt_M = :capacitacion_j3_1_jusalt_M
 					  ,	capacitacion_j3_1_jusalt_H = :capacitacion_j3_1_jusalt_H
  					,	capacitacion_j3_1_jusalt_T = :capacitacion_j3_1_jusalt_T

						,	capacitacion_j3_1_juster_M = :capacitacion_j3_1_juster_M
 					  ,	capacitacion_j3_1_juster_H = :capacitacion_j3_1_juster_H
  					,	capacitacion_j3_1_juster_T = :capacitacion_j3_1_juster_T

						,	capacitacion_j3_1_justra_M = :capacitacion_j3_1_justra_M
 					  ,	capacitacion_j3_1_justra_H = :capacitacion_j3_1_justra_H
  					,	capacitacion_j3_1_justra_T = :capacitacion_j3_1_justra_T

						,	capacitacion_j3_1_rep_M = :capacitacion_j3_1_rep_M
 					  ,	capacitacion_j3_1_rep_H = :capacitacion_j3_1_rep_H
  					,	capacitacion_j3_1_rep_T = :capacitacion_j3_1_rep_T

						,	capacitacion_j3_1_tor_M = :capacitacion_j3_1_tor_M
 					  ,	capacitacion_j3_1_tor_H = :capacitacion_j3_1_tor_H
  					,	capacitacion_j3_1_tor_T = :capacitacion_j3_1_tor_T

						,	capacitacion_j3_1_otros = :capacitacion_j3_1_otros
 					  ,	capacitacion_j3_1_otros_M = :capacitacion_j3_1_otros_M
  					,	capacitacion_j3_1_otros_H = :capacitacion_j3_1_otros_H
						,	capacitacion_j3_1_otros_T = :capacitacion_j3_1_otros_T

						,	capacitacion_j3_2_int = :capacitacion_j3_2_int



						,	presupuesto_j4_aut = :presupuesto_j4_aut
 					  ,	presupuesto_j4_1_pre = :presupuesto_j4_1_pre
  					,	presupuesto_j4_2_preserv = :presupuesto_j4_2_preserv

				WHERE id = :idFormulario");


			$stmt -> bindParam(":idFormulario", $datos["idFormulario"], PDO::PARAM_STR);

		    /* INFRAESTRUCTURA */

				$stmt -> bindParam(":infraestructura_j1_tot", $datos["infraestructura_j1_tot"], PDO::PARAM_STR);

				$stmt -> bindParam(":infraestructura_j1_1_totjuz", $datos["infraestructura_j1_1_totjuz"], PDO::PARAM_STR);

				$stmt -> bindParam(":infraestructura_j1_2_totjuz", $datos["infraestructura_j1_2_totjuz"], PDO::PARAM_STR);
				$stmt -> bindParam(":infraestructura_j1_2_matpenacu", $datos["infraestructura_j1_2_matpenacu"], PDO::PARAM_STR);
				$stmt -> bindParam(":infraestructura_j1_2_matpenfun", $datos["infraestructura_j1_2_matpenfun"], PDO::PARAM_STR);

		    /* PERSONAL */

				$stmt -> bindParam(":personal_j2_perlab_M", $datos["personal_j2_perlab_M"], PDO::PARAM_STR);
				$stmt -> bindParam(":personal_j2_perlab_H", $datos["personal_j2_perlab_H"], PDO::PARAM_STR);
				$stmt -> bindParam(":personal_j2_perlab_T", $datos["personal_j2_perlab_T"], PDO::PARAM_STR);

				$stmt -> bindParam(":personal_j2_1_mag_M", $datos["personal_j2_1_mag_M"], PDO::PARAM_STR);
				$stmt -> bindParam(":personal_j2_1_mag_H", $datos["personal_j2_1_mag_H"], PDO::PARAM_STR);
				$stmt -> bindParam(":personal_j2_1_mag_T", $datos["personal_j2_1_mag_T"], PDO::PARAM_STR);

				$stmt -> bindParam(":personal_j2_1_jec_M", $datos["personal_j2_1_jec_M"], PDO::PARAM_STR);
				$stmt -> bindParam(":personal_j2_1_jec_H", $datos["personal_j2_1_jec_H"], PDO::PARAM_STR);
				$stmt -> bindParam(":personal_j2_1_jec_T", $datos["personal_j2_1_jec_T"], PDO::PARAM_STR);

				$stmt -> bindParam(":personal_j2_1_sec_M", $datos["personal_j2_1_sec_M"], PDO::PARAM_STR);
				$stmt -> bindParam(":personal_j2_1_sec_H", $datos["personal_j2_1_sec_H"], PDO::PARAM_STR);
				$stmt -> bindParam(":personal_j2_1_sec_T", $datos["personal_j2_1_sec_T"], PDO::PARAM_STR);

				$stmt -> bindParam(":personal_j2_1_act_M", $datos["personal_j2_1_act_M"], PDO::PARAM_STR);
				$stmt -> bindParam(":personal_j2_1_act_H", $datos["personal_j2_1_act_H"], PDO::PARAM_STR);
				$stmt -> bindParam(":personal_j2_1_act_T", $datos["personal_j2_1_act_T"], PDO::PARAM_STR);

				$stmt -> bindParam(":personal_j2_1_otrserv_M", $datos["personal_j2_1_otrserv_M"], PDO::PARAM_STR);
				$stmt -> bindParam(":personal_j2_1_otrserv_H", $datos["personal_j2_1_otrserv_H"], PDO::PARAM_STR);
				$stmt -> bindParam(":personal_j2_1_otrserv_T", $datos["personal_j2_1_otrserv_T"], PDO::PARAM_STR);

				$stmt -> bindParam(":personal_j2_1_otros", $datos["personal_j2_1_otros"], PDO::PARAM_STR);
				$stmt -> bindParam(":personal_j2_1_otros_M", $datos["personal_j2_1_otros_M"], PDO::PARAM_STR);
				$stmt -> bindParam(":personal_j2_1_otros_H", $datos["personal_j2_1_otros_H"], PDO::PARAM_STR);
				$stmt -> bindParam(":personal_j2_1_otros_T", $datos["personal_j2_1_otros_T"], PDO::PARAM_STR);

				$stmt -> bindParam(":personal_j2_2_mag_M", $datos["personal_j2_2_mag_M"], PDO::PARAM_STR);
				$stmt -> bindParam(":personal_j2_2_mag_H", $datos["personal_j2_2_mag_H"], PDO::PARAM_STR);
				$stmt -> bindParam(":personal_j2_2_mag_T", $datos["personal_j2_2_mag_T"], PDO::PARAM_STR);

				$stmt -> bindParam(":personal_j2_3_jue_M", $datos["personal_j2_3_jue_M"], PDO::PARAM_STR);
				$stmt -> bindParam(":personal_j2_3_jue_H", $datos["personal_j2_3_jue_H"], PDO::PARAM_STR);
				$stmt -> bindParam(":personal_j2_3_jue_T", $datos["personal_j2_3_jue_T"], PDO::PARAM_STR);

				$stmt -> bindParam(":personal_j2_4_de1a5000_M", $datos["personal_j2_4_de1a5000_M"], PDO::PARAM_STR);
				$stmt -> bindParam(":personal_j2_4_de1a5000_H", $datos["personal_j2_4_de1a5000_H"], PDO::PARAM_STR);
				$stmt -> bindParam(":personal_j2_4_de1a5000_T", $datos["personal_j2_4_de1a5000_T"], PDO::PARAM_STR);

				$stmt -> bindParam(":personal_j2_4_de5001a10000_M", $datos["personal_j2_4_de5001a10000_M"], PDO::PARAM_STR);
				$stmt -> bindParam(":personal_j2_4_de5001a10000_H", $datos["personal_j2_4_de5001a10000_H"], PDO::PARAM_STR);
				$stmt -> bindParam(":personal_j2_4_de5001a10000_T", $datos["personal_j2_4_de5001a10000_T"], PDO::PARAM_STR);

				$stmt -> bindParam(":personal_j2_4_de10001a15000_M", $datos["personal_j2_4_de10001a15000_M"], PDO::PARAM_STR);
				$stmt -> bindParam(":personal_j2_4_de10001a15000_H", $datos["personal_j2_4_de10001a15000_H"], PDO::PARAM_STR);
				$stmt -> bindParam(":personal_j2_4_de10001a15000_T", $datos["personal_j2_4_de10001a15000_T"], PDO::PARAM_STR);

				$stmt -> bindParam(":personal_j2_4_de15001a20000_M", $datos["personal_j2_4_de15001a20000_M"], PDO::PARAM_STR);
				$stmt -> bindParam(":personal_j2_4_de15001a20000_H", $datos["personal_j2_4_de15001a20000_H"], PDO::PARAM_STR);
				$stmt -> bindParam(":personal_j2_4_de15001a20000_T", $datos["personal_j2_4_de15001a20000_T"], PDO::PARAM_STR);

				$stmt -> bindParam(":personal_j2_4_de20001a25000_M", $datos["personal_j2_4_de20001a25000_M"], PDO::PARAM_STR);
				$stmt -> bindParam(":personal_j2_4_de20001a25000_H", $datos["personal_j2_4_de20001a25000_H"], PDO::PARAM_STR);
				$stmt -> bindParam(":personal_j2_4_de20001a25000_T", $datos["personal_j2_4_de20001a25000_T"], PDO::PARAM_STR);

				$stmt -> bindParam(":personal_j2_4_de25001a30000_M", $datos["personal_j2_4_de25001a30000_M"], PDO::PARAM_STR);
				$stmt -> bindParam(":personal_j2_4_de25001a30000_H", $datos["personal_j2_4_de25001a30000_H"], PDO::PARAM_STR);
				$stmt -> bindParam(":personal_j2_4_de25001a30000_T", $datos["personal_j2_4_de25001a30000_T"], PDO::PARAM_STR);

				$stmt -> bindParam(":personal_j2_4_de30001a35000_M", $datos["personal_j2_4_de30001a35000_M"], PDO::PARAM_STR);
				$stmt -> bindParam(":personal_j2_4_de30001a35000_H", $datos["personal_j2_4_de30001a35000_H"], PDO::PARAM_STR);
				$stmt -> bindParam(":personal_j2_4_de30001a35000_T", $datos["personal_j2_4_de30001a35000_T"], PDO::PARAM_STR);

				$stmt -> bindParam(":personal_j2_4_de35001a40000_M", $datos["personal_j2_4_de35001a40000_M"], PDO::PARAM_STR);
				$stmt -> bindParam(":personal_j2_4_de35001a40000_H", $datos["personal_j2_4_de35001a40000_H"], PDO::PARAM_STR);
				$stmt -> bindParam(":personal_j2_4_de35001a40000_T", $datos["personal_j2_4_de35001a40000_T"], PDO::PARAM_STR);

				$stmt -> bindParam(":personal_j2_4_de40001a45000_M", $datos["personal_j2_4_de40001a45000_M"], PDO::PARAM_STR);
				$stmt -> bindParam(":personal_j2_4_de40001a45000_H", $datos["personal_j2_4_de40001a45000_H"], PDO::PARAM_STR);
				$stmt -> bindParam(":personal_j2_4_de40001a45000_T", $datos["personal_j2_4_de40001a45000_T"], PDO::PARAM_STR);

				$stmt -> bindParam(":personal_j2_4_de45001a50000_M", $datos["personal_j2_4_de45001a50000_M"], PDO::PARAM_STR);
				$stmt -> bindParam(":personal_j2_4_de45001a50000_H", $datos["personal_j2_4_de45001a50000_H"], PDO::PARAM_STR);
				$stmt -> bindParam(":personal_j2_4_de45001a50000_T", $datos["personal_j2_4_de45001a50000_T"], PDO::PARAM_STR);

				$stmt -> bindParam(":personal_j2_4_masde50000_M", $datos["personal_j2_4_masde50000_M"], PDO::PARAM_STR);
				$stmt -> bindParam(":personal_j2_4_masde50000_H", $datos["personal_j2_4_masde50000_H"], PDO::PARAM_STR);
				$stmt -> bindParam(":personal_j2_4_masde50000_T", $datos["personal_j2_4_masde50000_T"], PDO::PARAM_STR);

				$stmt -> bindParam(":personal_j2_4_nosesabe", $datos["personal_j2_4_nosesabe"], PDO::PARAM_STR);

		    /* CAPACITACIÓN Y EVALUACIÓN DE PERSONAL  */

				$stmt -> bindParam(":capacitacion_j3_mag_M", $datos["capacitacion_j3_mag_M"], PDO::PARAM_STR);
				$stmt -> bindParam(":capacitacion_j3_mag_H", $datos["capacitacion_j3_mag_H"], PDO::PARAM_STR);
				$stmt -> bindParam(":capacitacion_j3_mag_T", $datos["capacitacion_j3_mag_T"], PDO::PARAM_STR);

				$stmt -> bindParam(":capacitacion_j3_jec_M", $datos["capacitacion_j3_jec_M"], PDO::PARAM_STR);
				$stmt -> bindParam(":capacitacion_j3_jec_H", $datos["capacitacion_j3_jec_H"], PDO::PARAM_STR);
				$stmt -> bindParam(":capacitacion_j3_jec_T", $datos["capacitacion_j3_jec_T"], PDO::PARAM_STR);

				$stmt -> bindParam(":capacitacion_j3_sec_M", $datos["capacitacion_j3_sec_M"], PDO::PARAM_STR);
				$stmt -> bindParam(":capacitacion_j3_sec_H", $datos["capacitacion_j3_sec_H"], PDO::PARAM_STR);
				$stmt -> bindParam(":capacitacion_j3_sec_T", $datos["capacitacion_j3_sec_T"], PDO::PARAM_STR);

				$stmt -> bindParam(":capacitacion_j3_act_M", $datos["capacitacion_j3_act_M"], PDO::PARAM_STR);
				$stmt -> bindParam(":capacitacion_j3_act_H", $datos["capacitacion_j3_act_H"], PDO::PARAM_STR);
				$stmt -> bindParam(":capacitacion_j3_act_T", $datos["capacitacion_j3_act_T"], PDO::PARAM_STR);

				$stmt -> bindParam(":capacitacion_j3_otrserv_M", $datos["capacitacion_j3_otrserv_M"], PDO::PARAM_STR);
				$stmt -> bindParam(":capacitacion_j3_otrserv_H", $datos["capacitacion_j3_otrserv_H"], PDO::PARAM_STR);
				$stmt -> bindParam(":capacitacion_j3_otrserv_T", $datos["capacitacion_j3_otrserv_T"], PDO::PARAM_STR);

				$stmt -> bindParam(":capacitacion_j3_otros", $datos["capacitacion_j3_otros"], PDO::PARAM_STR);
				$stmt -> bindParam(":capacitacion_j3_otros_M", $datos["capacitacion_j3_otros_M"], PDO::PARAM_STR);
				$stmt -> bindParam(":capacitacion_j3_otros_H", $datos["capacitacion_j3_otros_H"], PDO::PARAM_STR);
				$stmt -> bindParam(":capacitacion_j3_otros_T", $datos["capacitacion_j3_otros_T"], PDO::PARAM_STR);

				$stmt -> bindParam(":capacitacion_j3_1_sisjus_M", $datos["capacitacion_j3_1_sisjus_M"], PDO::PARAM_STR);
				$stmt -> bindParam(":capacitacion_j3_1_sisjus_H", $datos["capacitacion_j3_1_sisjus_H"], PDO::PARAM_STR);
				$stmt -> bindParam(":capacitacion_j3_1_sisjus_T", $datos["capacitacion_j3_1_sisjus_T"], PDO::PARAM_STR);

				$stmt -> bindParam(":capacitacion_j3_1_debpro_M", $datos["capacitacion_j3_1_debpro_M"], PDO::PARAM_STR);
				$stmt -> bindParam(":capacitacion_j3_1_debpro_H", $datos["capacitacion_j3_1_debpro_H"], PDO::PARAM_STR);
				$stmt -> bindParam(":capacitacion_j3_1_debpro_T", $datos["capacitacion_j3_1_debpro_T"], PDO::PARAM_STR);

				$stmt -> bindParam(":capacitacion_j3_1_fem_M", $datos["capacitacion_j3_1_fem_M"], PDO::PARAM_STR);
				$stmt -> bindParam(":capacitacion_j3_1_fem_H", $datos["capacitacion_j3_1_fem_H"], PDO::PARAM_STR);
				$stmt -> bindParam(":capacitacion_j3_1_fem_T", $datos["capacitacion_j3_1_fem_T"], PDO::PARAM_STR);

				$stmt -> bindParam(":capacitacion_j3_1_anttra_M", $datos["capacitacion_j3_1_anttra_M"], PDO::PARAM_STR);
				$stmt -> bindParam(":capacitacion_j3_1_anttra_H", $datos["capacitacion_j3_1_anttra_H"], PDO::PARAM_STR);
				$stmt -> bindParam(":capacitacion_j3_1_anttra_T", $datos["capacitacion_j3_1_anttra_T"], PDO::PARAM_STR);

				$stmt -> bindParam(":capacitacion_j3_1_viomuj_M", $datos["capacitacion_j3_1_viomuj_M"], PDO::PARAM_STR);
				$stmt -> bindParam(":capacitacion_j3_1_viomuj_H", $datos["capacitacion_j3_1_viomuj_H"], PDO::PARAM_STR);
				$stmt -> bindParam(":capacitacion_j3_1_viomuj_T", $datos["capacitacion_j3_1_viomuj_T"], PDO::PARAM_STR);

				$stmt -> bindParam(":capacitacion_j3_1_asicon_M", $datos["capacitacion_j3_1_asicon_M"], PDO::PARAM_STR);
				$stmt -> bindParam(":capacitacion_j3_1_asicon_H", $datos["capacitacion_j3_1_asicon_H"], PDO::PARAM_STR);
				$stmt -> bindParam(":capacitacion_j3_1_asicon_T", $datos["capacitacion_j3_1_asicon_T"], PDO::PARAM_STR);

				$stmt -> bindParam(":capacitacion_j3_1_sisint_M", $datos["capacitacion_j3_1_sisint_M"], PDO::PARAM_STR);
				$stmt -> bindParam(":capacitacion_j3_1_sisint_H", $datos["capacitacion_j3_1_sisint_H"], PDO::PARAM_STR);
				$stmt -> bindParam(":capacitacion_j3_1_sisint_T", $datos["capacitacion_j3_1_sisint_T"], PDO::PARAM_STR);

				$stmt -> bindParam(":capacitacion_j3_1_ejesan_M", $datos["capacitacion_j3_1_ejesan_M"], PDO::PARAM_STR);
				$stmt -> bindParam(":capacitacion_j3_1_ejesan_H", $datos["capacitacion_j3_1_ejesan_H"], PDO::PARAM_STR);
				$stmt -> bindParam(":capacitacion_j3_1_ejesan_T", $datos["capacitacion_j3_1_ejesan_T"], PDO::PARAM_STR);

				$stmt -> bindParam(":capacitacion_j3_1_ateper_M", $datos["capacitacion_j3_1_ateper_M"], PDO::PARAM_STR);
				$stmt -> bindParam(":capacitacion_j3_1_ateper_H", $datos["capacitacion_j3_1_ateper_H"], PDO::PARAM_STR);
				$stmt -> bindParam(":capacitacion_j3_1_ateper_T", $datos["capacitacion_j3_1_ateper_T"], PDO::PARAM_STR);

				$stmt -> bindParam(":capacitacion_j3_1_atenperdis_M", $datos["capacitacion_j3_1_atenperdis_M"], PDO::PARAM_STR);
				$stmt -> bindParam(":capacitacion_j3_1_atenperdis_H", $datos["capacitacion_j3_1_atenperdis_H"], PDO::PARAM_STR);
				$stmt -> bindParam(":capacitacion_j3_1_atenperdis_T", $datos["capacitacion_j3_1_atenperdis_T"], PDO::PARAM_STR);

				$stmt -> bindParam(":capacitacion_j3_1_jusalt_M", $datos["capacitacion_j3_1_jusalt_M"], PDO::PARAM_STR);
				$stmt -> bindParam(":capacitacion_j3_1_jusalt_H", $datos["capacitacion_j3_1_jusalt_H"], PDO::PARAM_STR);
				$stmt -> bindParam(":capacitacion_j3_1_jusalt_T", $datos["capacitacion_j3_1_jusalt_T"], PDO::PARAM_STR);

				$stmt -> bindParam(":capacitacion_j3_1_juster_M", $datos["capacitacion_j3_1_juster_M"], PDO::PARAM_STR);
				$stmt -> bindParam(":capacitacion_j3_1_juster_H", $datos["capacitacion_j3_1_juster_H"], PDO::PARAM_STR);
				$stmt -> bindParam(":capacitacion_j3_1_juster_T", $datos["capacitacion_j3_1_juster_T"], PDO::PARAM_STR);

				$stmt -> bindParam(":capacitacion_j3_1_justra_M", $datos["capacitacion_j3_1_justra_M"], PDO::PARAM_STR);
				$stmt -> bindParam(":capacitacion_j3_1_justra_H", $datos["capacitacion_j3_1_justra_H"], PDO::PARAM_STR);
				$stmt -> bindParam(":capacitacion_j3_1_justra_T", $datos["capacitacion_j3_1_justra_T"], PDO::PARAM_STR);

				$stmt -> bindParam(":capacitacion_j3_1_rep_M", $datos["capacitacion_j3_1_rep_M"], PDO::PARAM_STR);
				$stmt -> bindParam(":capacitacion_j3_1_rep_H", $datos["capacitacion_j3_1_rep_H"], PDO::PARAM_STR);
				$stmt -> bindParam(":capacitacion_j3_1_rep_T", $datos["capacitacion_j3_1_rep_T"], PDO::PARAM_STR);

				$stmt -> bindParam(":capacitacion_j3_1_tor_M", $datos["capacitacion_j3_1_tor_M"], PDO::PARAM_STR);
				$stmt -> bindParam(":capacitacion_j3_1_tor_H", $datos["capacitacion_j3_1_tor_H"], PDO::PARAM_STR);
				$stmt -> bindParam(":capacitacion_j3_1_tor_T", $datos["capacitacion_j3_1_tor_T"], PDO::PARAM_STR);

				$stmt -> bindParam(":capacitacion_j3_1_otros", $datos["capacitacion_j3_1_otros"], PDO::PARAM_STR);
				$stmt -> bindParam(":capacitacion_j3_1_otros_M", $datos["capacitacion_j3_1_otros_M"], PDO::PARAM_STR);
				$stmt -> bindParam(":capacitacion_j3_1_otros_H", $datos["capacitacion_j3_1_otros_H"], PDO::PARAM_STR);
				$stmt -> bindParam(":capacitacion_j3_1_otros_T", $datos["capacitacion_j3_1_otros_T"], PDO::PARAM_STR);

				$stmt -> bindParam(":capacitacion_j3_2_int", $datos["capacitacion_j3_2_int"], PDO::PARAM_STR);

				 /* Presupuesto */

				$stmt -> bindParam(":presupuesto_j4_aut", $datos["presupuesto_j4_aut"], PDO::PARAM_STR);

				$stmt -> bindParam(":presupuesto_j4_1_pre", $datos["presupuesto_j4_1_pre"], PDO::PARAM_STR);

				$stmt -> bindParam(":presupuesto_j4_2_preserv", $datos["presupuesto_j4_2_preserv"], PDO::PARAM_STR);

			if($stmt->execute()){

				return "La información se ha guardado exitosamente";

			}else{

				$arr = $stmt ->errorInfo();
				$arr[3]="ERROR";
				return $arr[2];

			}

			$stmt -> close();

			$stmt = null;

		}




	/*=============================================
	EDITAR tab 3
	=============================================*/

	static public function mdlEditarFJuecesTab3($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET

			/* JUSTICIA PARA MUJERES */

				mujeres_j5_proint = :mujeres_j5_proint
			, mujeres_j5_proint_cuales = :mujeres_j5_proint_cuales
			, mujeres_j5_prointr = :mujeres_j5_prointr
			, mujeres_j5_prointr_cuales = :mujeres_j5_prointr_cuales
			, mujeres_j5_proinv = :mujeres_j5_proinv
			, mujeres_j5_prosupcor = :mujeres_j5_prosupcor
			, mujeres_j5_ninguno = :mujeres_j5_ninguno
			, mujeres_j5_otros = :mujeres_j5_otros
			, mujeres_j5_otros_cuales = :mujeres_j5_otros_cuales
			, mujeres_j5_nosesabe = :mujeres_j5_nosesabe

			, mujeres_j5_1_buepra = :mujeres_j5_1_buepra

			, mujeres_j5_2_cuabuepra = :mujeres_j5_2_cuabuepra
			, mujeres_j5_2_noaplica = :mujeres_j5_2_noaplica

			/* JUSTICIA PENAL PARA ADOLESCENTES */

			, ja_j6_proint = :ja_j6_proint
			, ja_j6_proint_cual = :ja_j6_proint_cual
			, ja_j6_prointr = :ja_j6_prointr
			, ja_j6_prointr_cual = :ja_j6_prointr_cual
			, ja_j6_proateint = :ja_j6_proateint
			, ja_j6_proactjus = :ja_j6_proactjus
			, ja_j6_ninguno = :ja_j6_ninguno
			, ja_j6_otros = :ja_j6_otros
			, ja_j6_otros_cual = :ja_j6_otros_cual
			, ja_j6_nosesabe = :ja_j6_nosesabe

			, ja_j6_1_buepra = :ja_j6_1_buepra

			, ja_j6_2_cuabuepra = :ja_j6_2_cuabuepra
			, ja_j6_2_noaplica = :ja_j6_2_noaplica

			, ja_j6_3_mag_M = :ja_j6_3_mag_M
			, ja_j6_3_mag_H = :ja_j6_3_mag_H
			, ja_j6_3_mag_T = :ja_j6_3_mag_T

			, ja_j6_4_jue_M = :ja_j6_4_jue_M
			, ja_j6_4_jue_H = :ja_j6_4_jue_H
			, ja_j6_4_jue_T = :ja_j6_4_jue_T

			, ja_j6_5_triesp = :ja_j6_5_triesp

			, ja_j6_6_triesp = :ja_j6_6_triesp
			, ja_j6_6_noaplica = :ja_j6_6_noaplica

			/* JUSTICIA PARA PERSONAS INDÍGENAS */

			, indigenas_j7_intlen = :indigenas_j7_intlen

			, indigenas_j7_1_nahuatl_M = :indigenas_j7_1_nahuatl_M
			, indigenas_j7_1_nahuatl_H = :indigenas_j7_1_nahuatl_H
			, indigenas_j7_1_nahuatl_T = :indigenas_j7_1_nahuatl_T

			, indigenas_j7_1_maya_M = :indigenas_j7_1_maya_M
			, indigenas_j7_1_maya_H = :indigenas_j7_1_maya_H
			, indigenas_j7_1_maya_T = :indigenas_j7_1_maya_T

			, indigenas_j7_1_tsetsal_M = :indigenas_j7_1_tsetsal_M
			, indigenas_j7_1_tsetsal_H = :indigenas_j7_1_tsetsal_H
			, indigenas_j7_1_tsetsal_T = :indigenas_j7_1_tsetsal_T

			, indigenas_j7_1_mixteco_M = :indigenas_j7_1_mixteco_M
			, indigenas_j7_1_mixteco_H = :indigenas_j7_1_mixteco_H
			, indigenas_j7_1_mixteco_T = :indigenas_j7_1_mixteco_T

			, indigenas_j7_1_tsotsil_M = :indigenas_j7_1_tsotsil_M
			, indigenas_j7_1_tsotsil_H = :indigenas_j7_1_tsotsil_H
			, indigenas_j7_1_tsotsil_T = :indigenas_j7_1_tsotsil_T

			, indigenas_j7_1_otros = :indigenas_j7_1_otros
			, indigenas_j7_1_otros_M = :indigenas_j7_1_otros_M
			, indigenas_j7_1_otros_H = :indigenas_j7_1_otros_H
			, indigenas_j7_1_otros_T = :indigenas_j7_1_otros_T

			, indigenas_j7_1_noaplica = :indigenas_j7_1_noaplica
			, indigenas_j7_1_nosesabe = :indigenas_j7_1_nosesabe

			, indigenas_j7_2_con = :indigenas_j7_2_con

			, indigenas_j7_3_nomins = :indigenas_j7_3_nomins
			, indigenas_j7_3_noaplica = :indigenas_j7_3_noaplica
			, indigenas_j7_3_nosesabe = :indigenas_j7_3_nosesabe

			, indigenas_j7_4_proint = :indigenas_j7_4_proint
			, indigenas_j7_4_proint_cual = :indigenas_j7_4_proint_cual
			, indigenas_j7_4_prointr = :indigenas_j7_4_prointr
			, indigenas_j7_4_prointr_cual = :indigenas_j7_4_prointr_cual
			, indigenas_j7_4_proact = :indigenas_j7_4_proact
			, indigenas_j7_4_ninguno = :indigenas_j7_4_ninguno
			, indigenas_j7_4_otro = :indigenas_j7_4_otro
			, indigenas_j7_4_otro_cual = :indigenas_j7_4_otro_cual
			, indigenas_j7_4_nosesabe = :indigenas_j7_4_nosesabe

			, indigenas_j7_5_insbuepra = :indigenas_j7_5_insbuepra

			, indigenas_j7_6_cuabuepra = :indigenas_j7_6_cuabuepra
			, indigenas_j7_6_noaplica = :indigenas_j7_6_noaplica

			WHERE id = :idFormulario");

			$stmt -> bindParam(":idFormulario", $datos["idFormulario"], PDO::PARAM_STR);

			// JUSTICIA PARA MUJERES

			$stmt -> bindParam(":mujeres_j5_proint", $datos["mujeres_j5_proint"], PDO::PARAM_STR);
			$stmt -> bindParam(":mujeres_j5_proint_cuales", $datos["mujeres_j5_proint_cuales"], PDO::PARAM_STR);
			$stmt -> bindParam(":mujeres_j5_prointr", $datos["mujeres_j5_prointr"], PDO::PARAM_STR);
			$stmt -> bindParam(":mujeres_j5_prointr_cuales", $datos["mujeres_j5_prointr_cuales"], PDO::PARAM_STR);
			$stmt -> bindParam(":mujeres_j5_proinv", $datos["mujeres_j5_proinv"], PDO::PARAM_STR);
			$stmt -> bindParam(":mujeres_j5_prosupcor", $datos["mujeres_j5_prosupcor"], PDO::PARAM_STR);
			$stmt -> bindParam(":mujeres_j5_ninguno", $datos["mujeres_j5_ninguno"], PDO::PARAM_STR);
			$stmt -> bindParam(":mujeres_j5_otros", $datos["mujeres_j5_otros"], PDO::PARAM_STR);
			$stmt -> bindParam(":mujeres_j5_otros_cuales", $datos["mujeres_j5_otros_cuales"], PDO::PARAM_STR);
			$stmt -> bindParam(":mujeres_j5_nosesabe", $datos["mujeres_j5_nosesabe"], PDO::PARAM_STR);

			$stmt -> bindParam(":mujeres_j5_1_buepra", $datos["mujeres_j5_1_buepra"], PDO::PARAM_STR);

			$stmt -> bindParam(":mujeres_j5_2_cuabuepra", $datos["mujeres_j5_2_cuabuepra"], PDO::PARAM_STR);
			$stmt -> bindParam(":mujeres_j5_2_noaplica", $datos["mujeres_j5_2_noaplica"], PDO::PARAM_STR);

			// JUSTICIA PENAL PARA ADOLESCENTES

			$stmt -> bindParam(":ja_j6_proint", $datos["ja_j6_proint"], PDO::PARAM_STR);
			$stmt -> bindParam(":ja_j6_proint_cual", $datos["ja_j6_proint_cual"], PDO::PARAM_STR);
			$stmt -> bindParam(":ja_j6_prointr", $datos["ja_j6_prointr"], PDO::PARAM_STR);
			$stmt -> bindParam(":ja_j6_prointr_cual", $datos["ja_j6_prointr_cual"], PDO::PARAM_STR);
			$stmt -> bindParam(":ja_j6_proateint", $datos["ja_j6_proateint"], PDO::PARAM_STR);
			$stmt -> bindParam(":ja_j6_proactjus", $datos["ja_j6_proactjus"], PDO::PARAM_STR);
			$stmt -> bindParam(":ja_j6_ninguno", $datos["ja_j6_ninguno"], PDO::PARAM_STR);
			$stmt -> bindParam(":ja_j6_otros", $datos["ja_j6_otros"], PDO::PARAM_STR);
			$stmt -> bindParam(":ja_j6_otros_cual", $datos["ja_j6_otros_cual"], PDO::PARAM_STR);
			$stmt -> bindParam(":ja_j6_nosesabe", $datos["ja_j6_nosesabe"], PDO::PARAM_STR);

			$stmt -> bindParam(":ja_j6_1_buepra", $datos["ja_j6_1_buepra"], PDO::PARAM_STR);

			$stmt -> bindParam(":ja_j6_2_cuabuepra", $datos["ja_j6_2_cuabuepra"], PDO::PARAM_STR);
			$stmt -> bindParam(":ja_j6_2_noaplica", $datos["ja_j6_2_noaplica"], PDO::PARAM_STR);

			$stmt -> bindParam(":ja_j6_3_mag_M", $datos["ja_j6_3_mag_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":ja_j6_3_mag_H", $datos["ja_j6_3_mag_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":ja_j6_3_mag_T", $datos["ja_j6_3_mag_T"], PDO::PARAM_STR);

			$stmt -> bindParam(":ja_j6_4_jue_M", $datos["ja_j6_4_jue_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":ja_j6_4_jue_H", $datos["ja_j6_4_jue_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":ja_j6_4_jue_T", $datos["ja_j6_4_jue_T"], PDO::PARAM_STR);

			$stmt -> bindParam(":ja_j6_5_triesp", $datos["ja_j6_5_triesp"], PDO::PARAM_STR);

			$stmt -> bindParam(":ja_j6_6_triesp", $datos["ja_j6_6_triesp"], PDO::PARAM_STR);
			$stmt -> bindParam(":ja_j6_6_noaplica", $datos["ja_j6_6_noaplica"], PDO::PARAM_STR);

			// JUSTICIA PARA PERSONAS INDÍGENAS

			$stmt -> bindParam(":indigenas_j7_intlen", $datos["indigenas_j7_intlen"], PDO::PARAM_STR);

			$stmt -> bindParam(":indigenas_j7_1_nahuatl_M", $datos["indigenas_j7_1_nahuatl_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":indigenas_j7_1_nahuatl_H", $datos["indigenas_j7_1_nahuatl_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":indigenas_j7_1_nahuatl_T", $datos["indigenas_j7_1_nahuatl_T"], PDO::PARAM_STR);

			$stmt -> bindParam(":indigenas_j7_1_maya_M", $datos["indigenas_j7_1_maya_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":indigenas_j7_1_maya_H", $datos["indigenas_j7_1_maya_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":indigenas_j7_1_maya_T", $datos["indigenas_j7_1_maya_T"], PDO::PARAM_STR);

			$stmt -> bindParam(":indigenas_j7_1_tsetsal_M", $datos["indigenas_j7_1_tsetsal_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":indigenas_j7_1_tsetsal_H", $datos["indigenas_j7_1_tsetsal_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":indigenas_j7_1_tsetsal_T", $datos["indigenas_j7_1_tsetsal_T"], PDO::PARAM_STR);

			$stmt -> bindParam(":indigenas_j7_1_mixteco_M", $datos["indigenas_j7_1_mixteco_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":indigenas_j7_1_mixteco_H", $datos["indigenas_j7_1_mixteco_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":indigenas_j7_1_mixteco_T", $datos["indigenas_j7_1_mixteco_T"], PDO::PARAM_STR);

			$stmt -> bindParam(":indigenas_j7_1_tsotsil_M", $datos["indigenas_j7_1_tsotsil_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":indigenas_j7_1_tsotsil_H", $datos["indigenas_j7_1_tsotsil_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":indigenas_j7_1_tsotsil_T", $datos["indigenas_j7_1_tsotsil_T"], PDO::PARAM_STR);

			$stmt -> bindParam(":indigenas_j7_1_otros", $datos["indigenas_j7_1_otros"], PDO::PARAM_STR);
			$stmt -> bindParam(":indigenas_j7_1_otros_M", $datos["indigenas_j7_1_otros_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":indigenas_j7_1_otros_H", $datos["indigenas_j7_1_otros_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":indigenas_j7_1_otros_T", $datos["indigenas_j7_1_otros_T"], PDO::PARAM_STR);

			$stmt -> bindParam(":indigenas_j7_1_noaplica", $datos["indigenas_j7_1_noaplica"], PDO::PARAM_STR);
			$stmt -> bindParam(":indigenas_j7_1_nosesabe", $datos["indigenas_j7_1_nosesabe"], PDO::PARAM_STR);

			$stmt -> bindParam(":indigenas_j7_2_con", $datos["indigenas_j7_2_con"], PDO::PARAM_STR);

			$stmt -> bindParam(":indigenas_j7_3_nomins", $datos["indigenas_j7_3_nomins"], PDO::PARAM_STR);
			$stmt -> bindParam(":indigenas_j7_3_noaplica", $datos["indigenas_j7_3_noaplica"], PDO::PARAM_STR);
			$stmt -> bindParam(":indigenas_j7_3_nosesabe", $datos["indigenas_j7_3_nosesabe"], PDO::PARAM_STR);

			$stmt -> bindParam(":indigenas_j7_4_proint", $datos["indigenas_j7_4_proint"], PDO::PARAM_STR);
			$stmt -> bindParam(":indigenas_j7_4_proint_cual", $datos["indigenas_j7_4_proint_cual"], PDO::PARAM_STR);
			$stmt -> bindParam(":indigenas_j7_4_prointr", $datos["indigenas_j7_4_prointr"], PDO::PARAM_STR);
			$stmt -> bindParam(":indigenas_j7_4_prointr_cual", $datos["indigenas_j7_4_prointr_cual"], PDO::PARAM_STR);
			$stmt -> bindParam(":indigenas_j7_4_proact", $datos["indigenas_j7_4_proact"], PDO::PARAM_STR);
			$stmt -> bindParam(":indigenas_j7_4_ninguno", $datos["indigenas_j7_4_ninguno"], PDO::PARAM_STR);
			$stmt -> bindParam(":indigenas_j7_4_otro", $datos["indigenas_j7_4_otro"], PDO::PARAM_STR);
			$stmt -> bindParam(":indigenas_j7_4_otro_cual", $datos["indigenas_j7_4_otro_cual"], PDO::PARAM_STR);
			$stmt -> bindParam(":indigenas_j7_4_nosesabe", $datos["indigenas_j7_4_nosesabe"], PDO::PARAM_STR);

			$stmt -> bindParam(":indigenas_j7_5_insbuepra", $datos["indigenas_j7_5_insbuepra"], PDO::PARAM_STR);

			$stmt -> bindParam(":indigenas_j7_6_cuabuepra", $datos["indigenas_j7_6_cuabuepra"], PDO::PARAM_STR);
			$stmt -> bindParam(":indigenas_j7_6_noaplica", $datos["indigenas_j7_6_noaplica"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "La información se ha guardado exitosamente";

		}else{

			$arr = $stmt ->errorInfo();
			$arr[3]="ERROR";
			return $arr[2];

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	EDITAR tab 4
	=============================================*/

	static public function mdlEditarFJuecesTab4($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET

			/* JUSTICIA PARA PERSONAS EXTRANJERAS */
			extranjeras_j8_tra = :extranjeras_j8_tra

		, extranjeras_j8_1_ingles_M = :extranjeras_j8_1_ingles_M
		, extranjeras_j8_1_ingles_H = :extranjeras_j8_1_ingles_H
		, extranjeras_j8_1_ingles_T = :extranjeras_j8_1_ingles_T

		, extranjeras_j8_1_chino_M = :extranjeras_j8_1_chino_M
		, extranjeras_j8_1_chino_H = :extranjeras_j8_1_chino_H
		, extranjeras_j8_1_chino_T = :extranjeras_j8_1_chino_T

		, extranjeras_j8_1_frances_M = :extranjeras_j8_1_frances_M
		, extranjeras_j8_1_frances_H = :extranjeras_j8_1_frances_H
		, extranjeras_j8_1_frances_T = :extranjeras_j8_1_frances_T

		, extranjeras_j8_1_arabe_M = :extranjeras_j8_1_arabe_M
		, extranjeras_j8_1_arabe_H = :extranjeras_j8_1_arabe_H
		, extranjeras_j8_1_arabe_T = :extranjeras_j8_1_arabe_T

		, extranjeras_j8_1_ruso_M = :extranjeras_j8_1_ruso_M
		, extranjeras_j8_1_ruso_H = :extranjeras_j8_1_ruso_H
		, extranjeras_j8_1_ruso_T = :extranjeras_j8_1_ruso_T

		, extranjeras_j8_1_otro = :extranjeras_j8_1_otro
		, extranjeras_j8_1_otro_M = :extranjeras_j8_1_otro_M
		, extranjeras_j8_1_otro_H = :extranjeras_j8_1_otro_H
		, extranjeras_j8_1_otro_T = :extranjeras_j8_1_otro_T

		, extranjeras_j8_1_noaplica = :extranjeras_j8_1_noaplica
		, extranjeras_j8_1_nosesabe = :extranjeras_j8_1_nosesabe

		, extranjeras_j8_2_con = :extranjeras_j8_2_con

		, extranjeras_j8_3_nomins = :extranjeras_j8_3_nomins
		, extranjeras_j8_3_noaplica = :extranjeras_j8_3_noaplica
		, extranjeras_j8_3_nosesabe = :extranjeras_j8_3_nosesabe

		, extranjeras_j8_4_proint = :extranjeras_j8_4_proint
		, extranjeras_j8_4_proint_cual = :extranjeras_j8_4_proint_cual
		, extranjeras_j8_4_prointr = :extranjeras_j8_4_prointr
		, extranjeras_j8_4_prointr_cual = :extranjeras_j8_4_prointr_cual
		, extranjeras_j8_4_ninguno = :extranjeras_j8_4_ninguno
		, extranjeras_j8_4_otro = :extranjeras_j8_4_otro
		, extranjeras_j8_4_otro_cual = :extranjeras_j8_4_otro_cual
		, extranjeras_j8_4_nosesabe = :extranjeras_j8_4_nosesabe

		, extranjeras_j8_5_buepra = :extranjeras_j8_5_buepra

		, extranjeras_j8_6_cuabuepra = :extranjeras_j8_6_cuabuepra
		, extranjeras_j8_6_noaplica = :extranjeras_j8_6_noaplica

			/* JUSTICIA PARA PERSONAS CON DISCAPACIDAD */

			, discapacidad_j9_braile = :discapacidad_j9_braile
			, discapacidad_j9_lense = :discapacidad_j9_lense

			, discapacidad_j9_1_nomins = :discapacidad_j9_1_nomins
			, discapacidad_j9_1_noaplica = :discapacidad_j9_1_noaplica
			, discapacidad_j9_1_nosesabe = :discapacidad_j9_1_nosesabe

			, discapacidad_j9_2_proint = :discapacidad_j9_2_proint
			, discapacidad_j9_2_proint_cual = :discapacidad_j9_2_proint_cual
			, discapacidad_j9_2_prointr = :discapacidad_j9_2_prointr
			, discapacidad_j9_2_prointr_cual = :discapacidad_j9_2_prointr_cual
			, discapacidad_j9_2_proact = :discapacidad_j9_2_proact
			, discapacidad_j9_2_ninguno = :discapacidad_j9_2_ninguno
			, discapacidad_j9_2_otros = :discapacidad_j9_2_otros
			, discapacidad_j9_2_otros_cual = :discapacidad_j9_2_otros_cual
			, discapacidad_j9_2_nosesabe = :discapacidad_j9_2_nosesabe

			, discapacidad_j9_3_buepra = :discapacidad_j9_3_buepra

			, discapacidad_j9_4_cuabuepra = :discapacidad_j9_4_cuabuepra
			, discapacidad_j9_4_noaplica = :discapacidad_j9_4_noaplica

			WHERE id = :idFormulario");


			$stmt -> bindParam(":idFormulario", $datos["idFormulario"], PDO::PARAM_STR);

			// JUSTICIA PARA PERSONAS EXTRANJERAS
			$stmt -> bindParam(":extranjeras_j8_tra", $datos["extranjeras_j8_tra"], PDO::PARAM_STR);

			$stmt -> bindParam(":extranjeras_j8_1_ingles_M", $datos["extranjeras_j8_1_ingles_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":extranjeras_j8_1_ingles_H", $datos["extranjeras_j8_1_ingles_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":extranjeras_j8_1_ingles_T", $datos["extranjeras_j8_1_ingles_T"], PDO::PARAM_STR);

			$stmt -> bindParam(":extranjeras_j8_1_chino_M", $datos["extranjeras_j8_1_chino_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":extranjeras_j8_1_chino_H", $datos["extranjeras_j8_1_chino_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":extranjeras_j8_1_chino_T", $datos["extranjeras_j8_1_chino_T"], PDO::PARAM_STR);

			$stmt -> bindParam(":extranjeras_j8_1_frances_M", $datos["extranjeras_j8_1_frances_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":extranjeras_j8_1_frances_H", $datos["extranjeras_j8_1_frances_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":extranjeras_j8_1_frances_T", $datos["extranjeras_j8_1_frances_T"], PDO::PARAM_STR);

			$stmt -> bindParam(":extranjeras_j8_1_arabe_M", $datos["extranjeras_j8_1_arabe_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":extranjeras_j8_1_arabe_H", $datos["extranjeras_j8_1_arabe_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":extranjeras_j8_1_arabe_T", $datos["extranjeras_j8_1_arabe_T"], PDO::PARAM_STR);

			$stmt -> bindParam(":extranjeras_j8_1_ruso_M", $datos["extranjeras_j8_1_ruso_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":extranjeras_j8_1_ruso_H", $datos["extranjeras_j8_1_ruso_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":extranjeras_j8_1_ruso_T", $datos["extranjeras_j8_1_ruso_T"], PDO::PARAM_STR);

			$stmt -> bindParam(":extranjeras_j8_1_otro", $datos["extranjeras_j8_1_otro"], PDO::PARAM_STR);
			$stmt -> bindParam(":extranjeras_j8_1_otro_M", $datos["extranjeras_j8_1_otro_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":extranjeras_j8_1_otro_H", $datos["extranjeras_j8_1_otro_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":extranjeras_j8_1_otro_T", $datos["extranjeras_j8_1_otro_T"], PDO::PARAM_STR);

			$stmt -> bindParam(":extranjeras_j8_1_noaplica", $datos["extranjeras_j8_1_noaplica"], PDO::PARAM_STR);
			$stmt -> bindParam(":extranjeras_j8_1_nosesabe", $datos["extranjeras_j8_1_nosesabe"], PDO::PARAM_STR);

			$stmt -> bindParam(":extranjeras_j8_2_con", $datos["extranjeras_j8_2_con"], PDO::PARAM_STR);

			$stmt -> bindParam(":extranjeras_j8_3_nomins", $datos["extranjeras_j8_3_nomins"], PDO::PARAM_STR);
			$stmt -> bindParam(":extranjeras_j8_3_noaplica", $datos["extranjeras_j8_3_noaplica"], PDO::PARAM_STR);
			$stmt -> bindParam(":extranjeras_j8_3_nosesabe", $datos["extranjeras_j8_3_nosesabe"], PDO::PARAM_STR);

			$stmt -> bindParam(":extranjeras_j8_4_proint", $datos["extranjeras_j8_4_proint"], PDO::PARAM_STR);
			$stmt -> bindParam(":extranjeras_j8_4_proint_cual", $datos["extranjeras_j8_4_proint_cual"], PDO::PARAM_STR);
			$stmt -> bindParam(":extranjeras_j8_4_prointr", $datos["extranjeras_j8_4_prointr"], PDO::PARAM_STR);
			$stmt -> bindParam(":extranjeras_j8_4_prointr_cual", $datos["extranjeras_j8_4_prointr_cual"], PDO::PARAM_STR);
			$stmt -> bindParam(":extranjeras_j8_4_ninguno", $datos["extranjeras_j8_4_ninguno"], PDO::PARAM_STR);
			$stmt -> bindParam(":extranjeras_j8_4_otro", $datos["extranjeras_j8_4_otro"], PDO::PARAM_STR);
			$stmt -> bindParam(":extranjeras_j8_4_otro_cual", $datos["extranjeras_j8_4_otro_cual"], PDO::PARAM_STR);
			$stmt -> bindParam(":extranjeras_j8_4_nosesabe", $datos["extranjeras_j8_4_nosesabe"], PDO::PARAM_STR);

			$stmt -> bindParam(":extranjeras_j8_5_buepra", $datos["extranjeras_j8_5_buepra"], PDO::PARAM_STR);

			$stmt -> bindParam(":extranjeras_j8_6_cuabuepra", $datos["extranjeras_j8_6_cuabuepra"], PDO::PARAM_STR);
			$stmt -> bindParam(":extranjeras_j8_6_noaplica", $datos["extranjeras_j8_6_noaplica"], PDO::PARAM_STR);

			// JUSTICIA PARA PERSONAS CON DISCAPACIDAD

			$stmt -> bindParam(":discapacidad_j9_braile", $datos["discapacidad_j9_braile"], PDO::PARAM_STR);
			$stmt -> bindParam(":discapacidad_j9_lense", $datos["discapacidad_j9_lense"], PDO::PARAM_STR);

			$stmt -> bindParam(":discapacidad_j9_1_nomins", $datos["discapacidad_j9_1_nomins"], PDO::PARAM_STR);
			$stmt -> bindParam(":discapacidad_j9_1_noaplica", $datos["discapacidad_j9_1_noaplica"], PDO::PARAM_STR);
			$stmt -> bindParam(":discapacidad_j9_1_nosesabe", $datos["discapacidad_j9_1_nosesabe"], PDO::PARAM_STR);

			$stmt -> bindParam(":discapacidad_j9_2_proint", $datos["discapacidad_j9_2_proint"], PDO::PARAM_STR);
			$stmt -> bindParam(":discapacidad_j9_2_proint_cual", $datos["discapacidad_j9_2_proint_cual"], PDO::PARAM_STR);
			$stmt -> bindParam(":discapacidad_j9_2_prointr", $datos["discapacidad_j9_2_prointr"], PDO::PARAM_STR);
			$stmt -> bindParam(":discapacidad_j9_2_prointr_cual", $datos["discapacidad_j9_2_prointr_cual"], PDO::PARAM_STR);
			$stmt -> bindParam(":discapacidad_j9_2_proact", $datos["discapacidad_j9_2_proact"], PDO::PARAM_STR);
			$stmt -> bindParam(":discapacidad_j9_2_ninguno", $datos["discapacidad_j9_2_ninguno"], PDO::PARAM_STR);
			$stmt -> bindParam(":discapacidad_j9_2_otros", $datos["discapacidad_j9_2_otros"], PDO::PARAM_STR);
			$stmt -> bindParam(":discapacidad_j9_2_otros_cual", $datos["discapacidad_j9_2_otros_cual"], PDO::PARAM_STR);
			$stmt -> bindParam(":discapacidad_j9_2_nosesabe", $datos["discapacidad_j9_2_nosesabe"], PDO::PARAM_STR);

			$stmt -> bindParam(":discapacidad_j9_3_buepra", $datos["discapacidad_j9_3_buepra"], PDO::PARAM_STR);

			$stmt -> bindParam(":discapacidad_j9_4_cuabuepra", $datos["discapacidad_j9_4_cuabuepra"], PDO::PARAM_STR);
			$stmt -> bindParam(":discapacidad_j9_4_noaplica", $datos["discapacidad_j9_4_noaplica"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "La información se ha guardado exitosamente";

		}else{

			$arr = $stmt ->errorInfo();
			$arr[3]="ERROR";
			return $arr[2];

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	EDITAR tab 5
	=============================================*/

	static public function mdlEditarFJuecesTab5($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET

			/* COLABORACIÓN CON OTRAS INSTITUCIONES */

			colaboracion_j10_col = :colaboracion_j10_col

		, colaboracion_j10_1_ins = :colaboracion_j10_1_ins
		, colaboracion_j10_1_noaplica = :colaboracion_j10_1_noaplica
		, colaboracion_j10_1_nosesabe = :colaboracion_j10_1_nosesabe

		, colaboracion_j10_2_fin = :colaboracion_j10_2_fin
		, colaboracion_j10_2_don = :colaboracion_j10_2_don
		, colaboracion_j10_2_cap = :colaboracion_j10_2_cap
		, colaboracion_j10_2_otros = :colaboracion_j10_2_otros
		, colaboracion_j10_2_otros_cual = :colaboracion_j10_2_otros_cual

		, colaboracion_j10_3_tipcol = :colaboracion_j10_3_tipcol
		, colaboracion_j10_3_noaplica = :colaboracion_j10_3_noaplica

	    // JUSTICIA DIGITAL

			, registro_j11_pla = :registro_j11_pla

			, registro_j11_1_ser = :registro_j11_ser
			, registro_j11_1_noaplica = :registro_j11_noaplica

			, registro_j11_2_lig = :registro_j11_2_lig

			, registro_j11_3_regcap = :registro_j11_3_regcap
			, registro_j11_3_regper = :registro_j11_3_regper
			, registro_j11_3_regvic = :registro_j11_3_regvic
			, registro_j11_3_regaud = :registro_j11_3_regaud
			, registro_j11_3_regmed = :registro_j11_3_regmed
			, registro_j11_3_regres = :registro_j11_3_regres
			, registro_j11_3_regsentip = :registro_j11_3_regsentip
			, registro_j11_3_regsendel = :registro_j11_3_regsendel
			, registro_j11_3_otros = :registro_j11_3_otros
			, registro_j11_3_otros_cuales = :registro_j11_3_otros_cuales
			, registro_j11_3_noaplica = :registro_j11_3_noaplica
			, registro_j11_3_nosesabe = :registro_j11_3_nosesabe

			, registro_j11_4_lib = :registro_j11_4_lib
			, registro_j11_4_bd = :registro_j11_4_bd
			, registro_j11_4_ap = :registro_j11_4_ap
			, registro_j11_4_pla = :registro_j11_4_pla
			, registro_j11_4_otro = :registro_j11_4_otro
			, registro_j11_4_otro_cual = :registro_j11_4_otro_cual
			, registro_j11_4_noaplica = :registro_j11_4_noaplica
			, registro_j11_4_nosesabe = :registro_j11_4_nosesabe

			, registro_j11_5_int = :registro_j11_5_int

			, registro_j11_6_intmun = :registro_j11_6_intmun
			, registro_j11_6_intmunotr = :registro_j11_6_intmunotr
			, registro_j11_6_intest = :registro_j11_6_intest
			, registro_j11_6_intestotr = :registro_j11_6_intestotr
			, registro_j11_6_intfed = :registro_j11_6_intfed
			, registro_j11_6_guanac = :registro_j11_6_guanac
			, registro_j11_6_progen = :registro_j11_6_progen
			, registro_j11_6_progenotr = :registro_j11_6_progenotr
			, colaboracion_p9_tipcol = :registro_j11_6_fisgen
			, registro_j11_6_podjudotr = :registro_j11_6_podjudotr
			, registro_j11_6_podjud = :registro_j11_6_podjud
			, registro_j11_6_sispen = :registro_j11_6_sispen
			, registro_j11_6_sispenotr = :registro_j11_6_sispenotr
			, registro_j11_6_sispenfed = :registro_j11_6_sispenfed
			, registro_j11_6_otras = :registro_j11_6_otras
			, registro_j11_6_otras_cual = :registro_j11_6_otras_cual
			, registro_j11_6_noaplica = :registro_j11_6_noaplica

	     /* EVALUACIÓN Y SEGUIMIENTO DEL SISTEMA DE JUSTICIA */

			 , evaluacion_j12_ind = :evaluacion_j12_ind

			 , evaluacion_j12_1_cuaind = :evaluacion_j12_1_cuaind
			 , evaluacion_j12_1_noaplica = :evaluacion_j12_1_noaplica

			 , evaluacion_j12_2_frec = :evaluacion_j12_2_frec
			 , evaluacion_j12_2_noaplica = :evaluacion_j12_2_noaplica

			WHERE id = :idFormulario");

			$stmt -> bindParam(":idFormulario", $datos["idFormulario"], PDO::PARAM_STR);

			// COLABORACIÓN CON OTRAS INSTITUCIONES

			$stmt -> bindParam(":colaboracion_j10_col", $datos["colaboracion_j10_col"], PDO::PARAM_STR);

			$stmt -> bindParam(":colaboracion_j10_1_ins", $datos["colaboracion_j10_1_ins"], PDO::PARAM_STR);
			$stmt -> bindParam(":colaboracion_j10_1_noaplica", $datos["colaboracion_j10_1_noaplica"], PDO::PARAM_STR);
			$stmt -> bindParam(":colaboracion_j10_1_nosesabe", $datos["colaboracion_j10_1_nosesabe"], PDO::PARAM_STR);

			$stmt -> bindParam(":colaboracion_j10_2_fin", $datos["colaboracion_j10_2_fin"], PDO::PARAM_STR);
			$stmt -> bindParam(":colaboracion_j10_2_don", $datos["colaboracion_j10_2_don"], PDO::PARAM_STR);
			$stmt -> bindParam(":colaboracion_j10_2_cap", $datos["colaboracion_j10_2_cap"], PDO::PARAM_STR);
			$stmt -> bindParam(":colaboracion_j10_2_otros", $datos["colaboracion_j10_2_otros"], PDO::PARAM_STR);
			$stmt -> bindParam(":colaboracion_j10_2_otros_cual", $datos["colaboracion_j10_2_otros_cual"], PDO::PARAM_STR);

			$stmt -> bindParam(":colaboracion_j10_3_tipcol", $datos["colaboracion_j10_3_tipcol"], PDO::PARAM_STR);
			$stmt -> bindParam(":colaboracion_j10_3_noaplica", $datos["colaboracion_j10_3_noaplica"], PDO::PARAM_STR);

	    // JUSTICIA DIGITAL

			$stmt -> bindParam(":registro_j11_pla", $datos["registro_j11_pla"], PDO::PARAM_STR);

			$stmt -> bindParam(":registro_j11_1_ser", $datos["registro_j11_ser"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_j11_noaplica", $datos["registro_j11_noaplica"], PDO::PARAM_STR);

			$stmt -> bindParam(":registro_j11_2_lig", $datos["registro_j11_2_lig"], PDO::PARAM_STR);

			$stmt -> bindParam(":registro_j11_3_regcap", $datos["registro_j11_3_regcap"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_j11_3_regper", $datos["registro_j11_3_regper"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_j11_3_regvic", $datos["registro_j11_3_regvic"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_j11_3_regaud", $datos["registro_j11_3_regaud"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_j11_3_regmed", $datos["registro_j11_3_regmed"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_j11_3_regres", $datos["registro_j11_3_regres"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_j11_3_regsentip", $datos["registro_j11_3_regsentip"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_j11_3_regsendel", $datos["registro_j11_3_regsendel"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_j11_3_otros", $datos["registro_j11_3_otros"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_j11_3_otros_cuales", $datos["registro_j11_3_otros_cuales"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_j11_3_noaplica", $datos["registro_j11_3_noaplica"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_j11_3_nosesabe", $datos["registro_j11_3_nosesabe"], PDO::PARAM_STR);

			$stmt -> bindParam(":registro_j11_4_lib", $datos["registro_j11_4_lib"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_j11_4_bd", $datos["registro_j11_4_bd"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_j11_4_ap", $datos["registro_j11_4_ap"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_j11_4_pla", $datos["registro_j11_4_pla"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_j11_4_otro", $datos["registro_j11_4_otro"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_j11_4_otro_cual", $datos["registro_j11_4_otro_cual"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_j11_4_noaplica", $datos["registro_j11_4_noaplica"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_j11_4_nosesabe", $datos["registro_j11_4_nosesabe"], PDO::PARAM_STR);

			$stmt -> bindParam(":registro_j11_5_int", $datos["registro_j11_5_int"], PDO::PARAM_STR);

			$stmt -> bindParam(":registro_j11_6_intmun", $datos["registro_j11_6_intmun"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_j11_6_intmunotr", $datos["registro_j11_6_intmunotr"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_j11_6_intest", $datos["registro_j11_6_intest"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_j11_6_intestotr", $datos["registro_j11_6_intestotr"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_j11_6_intfed", $datos["registro_j11_6_intfed"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_j11_6_guanac", $datos["registro_j11_6_guanac"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_j11_6_progen", $datos["registro_j11_6_progen"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_j11_6_progenotr", $datos["registro_j11_6_progenotr"], PDO::PARAM_STR);
			$stmt -> bindParam(":colaboracion_p9_tipcol", $datos["registro_j11_6_fisgen"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_j11_6_podjudotr", $datos["registro_j11_6_podjudotr"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_j11_6_podjud", $datos["registro_j11_6_podjud"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_j11_6_sispen", $datos["registro_j11_6_sispen"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_j11_6_sispenotr", $datos["registro_j11_6_sispenotr"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_j11_6_sispenfed", $datos["registro_j11_6_sispenfed"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_j11_6_otras", $datos["registro_j11_6_otras"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_j11_6_otras_cual", $datos["registro_j11_6_otras_cual"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_j11_6_noaplica", $datos["registro_j11_6_noaplica"], PDO::PARAM_STR);

	     // EVALUACIÓN Y SEGUIMIENTO DEL SISTEMA DE JUSTICIA

			 $stmt -> bindParam(":evaluacion_j12_ind", $datos["evaluacion_j12_ind"], PDO::PARAM_STR);

 			 $stmt -> bindParam(":evaluacion_j12_1_cuaind", $datos["evaluacion_j12_1_cuaind"], PDO::PARAM_STR);
			 $stmt -> bindParam(":evaluacion_j12_1_noaplica", $datos["evaluacion_j12_1_noaplica"], PDO::PARAM_STR);

 			 $stmt -> bindParam(":evaluacion_j12_2_frec", $datos["evaluacion_j12_2_frec"], PDO::PARAM_STR);
			 $stmt -> bindParam(":evaluacion_j12_2_noaplica", $datos["evaluacion_j12_2_noaplica"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "La información se ha guardado exitosamente";

		}else{

			$arr = $stmt ->errorInfo();
			$arr[3]="ERROR";
			return $arr[2];

		}

		$stmt -> close();

		$stmt = null;

	}



	/*=============================================
	EDITAR tab 6
	=============================================*/

	static public function mdlEditarFJuecesTab6($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET

			/* TRANSPARENCIA */
				transparencia_j13_sen = :transparencia_j13_sen

			, transparencia_j13_1_senlig = :transparencia_j13_1_senlig

			, transparencia_j13_2_acc = :transparencia_j13_2_acc

			, transparencia_j13_3_buepra = :transparencia_j13_3_buepra

			, transparencia_j13_4_bueprac_cuales = :transparencia_j13_4_bueprac_cuales
			, transparencia_j13_4_noaplica = :transparencia_j13_4_noaplica

			/*  NECESIDADES DE LA INSTITUCIÓN*/
			, necesidades_j14_capacitacion = :necesidades_j14_capacitacion
			, necesidades_j14_recMate = :necesidades_j14_recMate
			, necesidades_j14_recTec = :necesidades_j14_recTec
			, necesidades_j14_recHum = :necesidades_j14_recHum
			, necesidades_j14_infra = :necesidades_j14_infra
			, necesidades_j14_mejorasLeg = :necesidades_j14_mejorasLeg
			, necesidades_j14_protocolos = :necesidades_j14_protocolos
			, necesidades_j14_otras = :necesidades_j14_otras
			, necesidades_j14_otrasCuales = :necesidades_j14_otrasCuales
			, necesidades_j14_noAplica = :necesidades_j14_noAplica
			, necesidades_j14_nosesabe = :necesidades_j14_nosesabe

			, necesidades_j14_1_descNece = :necesidades_j14_1_descNece
			, necesidades_j14_1_noAplica = :necesidades_j14_1_noAplica

			/*  RESPONSABILIDADES DE LOS SERVIDORES PÚBLICOS: RESPONSABILIDAD ADMINISTRATIVA*/
			, denunciaserv_j15_1_1_mecaDen = :denunciaserv_j15_1_1_mecaDen
			, denunciaserv_j15_1_2_organoEsp = :denunciaserv_j15_1_2_organoEsp
			, denunciaserv_j15_1_2_organoEsp_cual = :denunciaserv_j15_1_2_organoEsp_cual
			, denunciaserv_j15_1_3_quejasDen = :denunciaserv_j15_1_3_quejasDen

	, denunciaserv_j15_1_4_magiM = :denunciaserv_j15_1_4_magiM
		, denunciaserv_j15_1_4_magiH = :denunciaserv_j15_1_4_magiH
			, denunciaserv_j15_1_4_magi = :denunciaserv_j15_1_4_magi
			, denunciaserv_j15_1_4_jueM = :denunciaserv_j15_1_4_jueM
			, denunciaserv_j15_1_4_jueH = :denunciaserv_j15_1_4_jueH

			, denunciaserv_j15_1_4_jue = :denunciaserv_j15_1_4_jue

			, denunciaserv_j15_1_4_secEstM = :denunciaserv_j15_1_4_secEstM
			, denunciaserv_j15_1_4_secEstH = :denunciaserv_j15_1_4_secEstH
			, denunciaserv_j15_1_4_secEst = :denunciaserv_j15_1_4_secEst



			, denunciaserv_j15_1_4_actuH = :denunciaserv_j15_1_4_actuH
			, denunciaserv_j15_1_4_actuM = :denunciaserv_j15_1_4_actuM


			, denunciaserv_j15_1_4_actu = :denunciaserv_j15_1_4_actu


			, denunciaserv_j15_1_4_carrerajudM = :denunciaserv_j15_1_4_carrerajudM
			, denunciaserv_j15_1_4_carrerajudH = :denunciaserv_j15_1_4_carrerajudH

			, denunciaserv_j15_1_4_carrerajud = :denunciaserv_j15_1_4_carrerajud
			, denunciaserv_j15_1_4_otro = :denunciaserv_j15_1_4_otro
			, denunciaserv_j15_1_4_otro = :denunciaserv_j15_1_4_otro
			, denunciaserv_j15_1_4_otro_M = :denunciaserv_j15_1_4_otro_M
			, denunciaserv_j15_1_4_otro_H = :denunciaserv_j15_1_4_otro_H
			, denunciaserv_j15_1_4_otro_T = :denunciaserv_j15_1_4_otro_T
			, denunciaserv_j15_1_4_noaplica = :denunciaserv_j15_1_4_noaplica
			, denunciaserv_j15_1_4_nosesabe = :denunciaserv_j15_1_4_nosesabe

			, denunciaserv_j15_1_5_magi_M = :denunciaserv_j15_1_5_magi_M
			, denunciaserv_j15_1_5_magi_H = :denunciaserv_j15_1_5_magi_H
			, denunciaserv_j15_1_5_magi_T = :denunciaserv_j15_1_5_magi_T
			, denunciaserv_j15_1_5_jue_M = :denunciaserv_j15_1_5_jue_M
			, denunciaserv_j15_1_5_jue_H = :denunciaserv_j15_1_5_jue_H
			, denunciaserv_j15_1_5_jue_T = :denunciaserv_j15_1_5_jue_T
			, denunciaserv_j15_1_5_secEst_M = :denunciaserv_j15_1_5_secEst_M
			, denunciaserv_j15_1_5_secEst_H = :denunciaserv_j15_1_5_secEst_H
			, denunciaserv_j15_1_5_secEst_T = :denunciaserv_j15_1_5_secEst_T
			, denunciaserv_j15_1_5_actu_M = :denunciaserv_j15_1_5_actu_M
			, denunciaserv_j15_1_5_actu_H = :denunciaserv_j15_1_5_actu_H
			, denunciaserv_j15_1_5_actu_T = :denunciaserv_j15_1_5_actu_T
			, denunciaserv_j15_1_5_carrerajud_M = :denunciaserv_j15_1_5_carrerajud_M
			, denunciaserv_j15_1_5_carrerajud_H = :denunciaserv_j15_1_5_carrerajud_H
			, denunciaserv_j15_1_5_carrerajud_T = :denunciaserv_j15_1_5_carrerajud_T
			, denunciaserv_j15_1_5_otros = :denunciaserv_j15_1_5_otros
			, denunciaserv_j15_1_5_otro_M = :denunciaserv_j15_1_5_otro_M
			, denunciaserv_j15_1_5_otro_H = :denunciaserv_j15_1_5_otro_H
			, denunciaserv_j15_1_5_otro_T = :denunciaserv_j15_1_5_otro_T
			, denunciaserv_j15_1_5_noaplica = :denunciaserv_j15_1_5_noaplica
			, denunciaserv_j15_1_5_nosesabe = :denunciaserv_j15_1_5_nosesabe

			/* RESPONSABILIDADES DE LOS SERVIDORES PÚBLICOS: RESPONSABILIDAD PENAL*/
			, denunciaserv_j15_2_1_denContraServ = :denunciaserv_j15_2_1_denContraServ

			, denunciaserv_j15_2_2_magi_M = :denunciaserv_j15_2_2_magi_M
			, denunciaserv_j15_2_2_magi_H = :denunciaserv_j15_2_2_magi_H
			, denunciaserv_j15_2_2_magi_T = :denunciaserv_j15_2_2_magi_T
			, denunciaserv_j15_2_2_jue_M = :denunciaserv_j15_2_2_jue_M
			, denunciaserv_j15_2_2_jue_H = :denunciaserv_j15_2_2_jue_H
			, denunciaserv_j15_2_2_jue_T = :denunciaserv_j15_2_2_jue_T
			, denunciaserv_j15_2_2_secEst_M = :denunciaserv_j15_2_2_secEst_M
			, denunciaserv_j15_2_2_secEst_H = :denunciaserv_j15_2_2_secEst_H
			, denunciaserv_j15_2_2_secEst_T = :denunciaserv_j15_2_2_secEst_T
			, denunciaserv_j15_2_2_actu_M = :denunciaserv_j15_2_2_actu_M
			, denunciaserv_j15_2_2_actu_H = :denunciaserv_j15_2_2_actu_H
			, denunciaserv_j15_2_2_actu_T = :denunciaserv_j15_2_2_actu_T
			, denunciaserv_j15_2_2_carrerajud_M = :denunciaserv_j15_2_2_carrerajud_M
			, denunciaserv_j15_2_2_carrerajud_H = :denunciaserv_j15_2_2_carrerajud_H
			, denunciaserv_j15_2_2_carrerajud_T = :denunciaserv_j15_2_2_carrerajud_T
			, denunciaserv_j15_2_2_otros = :denunciaserv_j15_2_2_otros
			, denunciaserv_j15_2_2_otro_M = :denunciaserv_j15_2_2_otro_M
			, denunciaserv_j15_2_2_otro_H = :denunciaserv_j15_2_2_otro_H
			, denunciaserv_j15_2_2_otro_H = :denunciaserv_j15_2_2_otro_H
			, denunciaserv_j15_2_2_noaplica = :denunciaserv_j15_2_2_noaplica
			, denunciaserv_j15_2_2_nosesabe = :denunciaserv_j15_2_2_nosesabe

			, denunciaserv_j15_2_3_magi_M = :denunciaserv_j15_2_3_magi_M
			, denunciaserv_j15_2_3_magi_H = :denunciaserv_j15_2_3_magi_H
			, denunciaserv_j15_2_3_magi = :denunciaserv_j15_2_3_magi
			, denunciaserv_j15_2_3_jue_M = :denunciaserv_j15_2_3_jue_M
			, denunciaserv_j15_2_3_jue_H = :denunciaserv_j15_2_3_jue_H
			, denunciaserv_j15_2_3_jue = :denunciaserv_j15_2_3_jue
			, denunciaserv_j15_2_3_secEst_M = :denunciaserv_j15_2_3_secEst_M
			, denunciaserv_j15_2_3_secEst_H = :denunciaserv_j15_2_3_secEst_H
			, denunciaserv_j15_2_3_secEst = :denunciaserv_j15_2_3_secEst
			, denunciaserv_j15_2_3_actu_M = :denunciaserv_j15_2_3_actu_M
			, denunciaserv_j15_2_3_actu_H = :denunciaserv_j15_2_3_actu_H
			, denunciaserv_j15_2_3_actu = :denunciaserv_j15_2_3_actu
			, denunciaserv_j15_2_3_carrerajud_M = :denunciaserv_j15_2_3_carrerajud_M
			, denunciaserv_j15_2_3_carrerajud_H = :denunciaserv_j15_2_3_carrerajud_H
			, denunciaserv_j15_2_3_carrerajud = :denunciaserv_j15_2_3_carrerajud
			, denunciaserv_j15_2_3_otro = :denunciaserv_j15_2_3_otro
			, denunciaserv_j15_2_3_otro_M = :denunciaserv_j15_2_3_otro_M
			, denunciaserv_j15_2_3_otro_H = :denunciaserv_j15_2_3_otro_H
			, denunciaserv_j15_2_3_otro_T = :denunciaserv_j15_2_3_otro_T
			, denunciaserv_j15_2_3_noaplica = :denunciaserv_j15_2_3_noaplica
			, denunciaserv_j15_2_3_nosesabe = :denunciaserv_j15_2_3_nosesabe

			WHERE id = :idFormulario");

			$stmt -> bindParam(":idFormulario", $datos["idFormulario"], PDO::PARAM_STR);

			// TRANSPARENCIA
			$stmt -> bindParam(":transparencia_j13_sen", $datos["transparencia_j13_sen"], PDO::PARAM_STR);
			$stmt -> bindParam(":transparencia_j13_1_senlig", $datos["transparencia_j13_1_senlig"], PDO::PARAM_STR);
			$stmt -> bindParam(":transparencia_j13_2_acc", $datos["transparencia_j13_2_acc"], PDO::PARAM_STR);
			$stmt -> bindParam(":transparencia_j13_3_buepra", $datos["transparencia_j13_3_buepra"], PDO::PARAM_STR);
			$stmt -> bindParam(":transparencia_j13_4_bueprac_cuales", $datos["transparencia_j13_4_bueprac_cuales"], PDO::PARAM_STR);
			$stmt -> bindParam(":transparencia_j13_4_noaplica", $datos["transparencia_j13_4_noaplica"], PDO::PARAM_STR);

			/*  NECESIDADES DE LA INSTITUCIÓN*/
			$stmt -> bindParam(":necesidades_j14_capacitacion", $datos["necesidades_j14_capacitacion"], PDO::PARAM_STR);
			$stmt -> bindParam(":necesidades_j14_recMate", $datos["necesidades_j14_recMate"], PDO::PARAM_STR);
			$stmt -> bindParam(":necesidades_j14_recTec", $datos["necesidades_j14_recTec"], PDO::PARAM_STR);
			$stmt -> bindParam(":necesidades_j14_recHum", $datos["necesidades_j14_recHum"], PDO::PARAM_STR);
			$stmt -> bindParam(":necesidades_j14_infra", $datos["necesidades_j14_infra"], PDO::PARAM_STR);
			$stmt -> bindParam(":necesidades_j14_mejorasLeg", $datos["necesidades_j14_mejorasLeg"], PDO::PARAM_STR);
			$stmt -> bindParam(":necesidades_j14_protocolos", $datos["necesidades_j14_protocolos"], PDO::PARAM_STR);
			$stmt -> bindParam(":necesidades_j14_otras", $datos["necesidades_j14_otras"], PDO::PARAM_STR);
			$stmt -> bindParam(":necesidades_j14_otrasCuales", $datos["necesidades_j14_otrasCuales"], PDO::PARAM_STR);
			$stmt -> bindParam(":necesidades_j14_noAplica", $datos["necesidades_j14_noAplica"], PDO::PARAM_STR);
			$stmt -> bindParam(":necesidades_j14_nosesabe", $datos["necesidades_j14_nosesabe"], PDO::PARAM_STR);

			$stmt -> bindParam(":necesidades_j14_1_descNece", $datos["necesidades_j14_1_descNece"], PDO::PARAM_STR);
			$stmt -> bindParam(":necesidades_j14_1_noAplica", $datos["necesidades_j14_1_noAplica"], PDO::PARAM_STR);

			/*  RESPONSABILIDADES DE LOS SERVIDORES PÚBLICOS: RESPONSABILIDAD ADMINISTRATIVA*/
			$stmt -> bindParam(":denunciaserv_j15_1_1_mecaDen", $datos["denunciaserv_j15_1_1_mecaDen"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_1_2_organoEsp", $datos["denunciaserv_j15_1_2_organoEsp"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_1_2_organoEsp_cual", $datos["denunciaserv_j15_1_2_organoEsp_cual"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_1_3_quejasDen", $datos["denunciaserv_j15_1_3_quejasDen"], PDO::PARAM_STR);

			$stmt -> bindParam(":denunciaserv_j15_1_4_magiM", $datos["denunciaserv_j15_1_4_magiM"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_1_4_magiH", $datos["denunciaserv_j15_1_4_magiH"], PDO::PARAM_STR);

			$stmt -> bindParam(":denunciaserv_j15_1_4_magi", $datos["denunciaserv_j15_1_4_magi"], PDO::PARAM_STR);

			$stmt -> bindParam(":denunciaserv_j15_1_4_jueM", $datos["denunciaserv_j15_1_4_jueM"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_1_4_jueH", $datos["denunciaserv_j15_1_4_jueH"], PDO::PARAM_STR);

			$stmt -> bindParam(":denunciaserv_j15_1_4_jue", $datos["denunciaserv_j15_1_4_jue"], PDO::PARAM_STR);



			$stmt -> bindParam(":denunciaserv_j15_1_4_secEstM", $datos["denunciaserv_j15_1_4_secEstM"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_1_4_secEstH", $datos["denunciaserv_j15_1_4_secEstH"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_1_4_secEst", $datos["denunciaserv_j15_1_4_secEst"], PDO::PARAM_STR);


			$stmt -> bindParam(":denunciaserv_j15_1_4_actuM", $datos["denunciaserv_j15_1_4_actuM"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_1_4_actuH", $datos["denunciaserv_j15_1_4_actuH"], PDO::PARAM_STR);


			$stmt -> bindParam(":denunciaserv_j15_1_4_actu", $datos["denunciaserv_j15_1_4_actu"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_1_4_carrerajudM", $datos["denunciaserv_j15_1_4_carrerajudM"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_1_4_carrerajudH", $datos["denunciaserv_j15_1_4_carrerajudH"], PDO::PARAM_STR);

			$stmt -> bindParam(":denunciaserv_j15_1_4_carrerajud", $datos["denunciaserv_j15_1_4_carrerajud"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_1_4_otro", $datos["denunciaserv_j15_1_4_otro"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_1_4_otro", $datos["denunciaserv_j15_1_4_otro"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_1_4_otro_M", $datos["denunciaserv_j15_1_4_otro_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_1_4_otro_H", $datos["denunciaserv_j15_1_4_otro_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_1_4_otro_T", $datos["denunciaserv_j15_1_4_otro_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_1_4_noaplica", $datos["denunciaserv_j15_1_4_noaplica"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_1_4_nosesabe", $datos["denunciaserv_j15_1_4_nosesabe"], PDO::PARAM_STR);

			$stmt -> bindParam(":denunciaserv_j15_1_5_magi_M", $datos["denunciaserv_j15_1_5_magi_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_1_5_magi_H", $datos["denunciaserv_j15_1_5_magi_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_1_5_magi_T", $datos["denunciaserv_j15_1_5_magi_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_1_5_jue_M", $datos["denunciaserv_j15_1_5_jue_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_1_5_jue_H", $datos["denunciaserv_j15_1_5_jue_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_1_5_jue_T", $datos["denunciaserv_j15_1_5_jue_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_1_5_secEst_M", $datos["denunciaserv_j15_1_5_secEst_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_1_5_secEst_H", $datos["denunciaserv_j15_1_5_secEst_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_1_5_secEst_T", $datos["denunciaserv_j15_1_5_secEst_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_1_5_actu_M", $datos["denunciaserv_j15_1_5_actu_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_1_5_actu_H", $datos["denunciaserv_j15_1_5_actu_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_1_5_actu_T", $datos["denunciaserv_j15_1_5_actu_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_1_5_carrerajud_M", $datos["denunciaserv_j15_1_5_carrerajud_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_1_5_carrerajud_H", $datos["denunciaserv_j15_1_5_carrerajud_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_1_5_carrerajud_T", $datos["denunciaserv_j15_1_5_carrerajud_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_1_5_otros", $datos["denunciaserv_j15_1_5_otros"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_1_5_otro_M", $datos["denunciaserv_j15_1_5_otro_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_1_5_otro_H", $datos["denunciaserv_j15_1_5_otro_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_1_5_otro_T", $datos["denunciaserv_j15_1_5_otro_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_1_5_noaplica", $datos["denunciaserv_j15_1_5_noaplica"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_1_5_nosesabe", $datos["denunciaserv_j15_1_5_nosesabe"], PDO::PARAM_STR);

			/* RESPONSABILIDADES DE LOS SERVIDORES PÚBLICOS: RESPONSABILIDAD PENAL*/
			$stmt -> bindParam(":denunciaserv_j15_2_1_denContraServ", $datos["denunciaserv_j15_2_1_denContraServ"], PDO::PARAM_STR);

			$stmt -> bindParam(":denunciaserv_j15_2_2_magi_M", $datos["denunciaserv_j15_2_2_magi_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_2_2_magi_H", $datos["denunciaserv_j15_2_2_magi_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_2_2_magi_T", $datos["denunciaserv_j15_2_2_magi_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_2_2_jue_M", $datos["denunciaserv_j15_2_2_jue_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_2_2_jue_H", $datos["denunciaserv_j15_2_2_jue_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_2_2_jue_T", $datos["denunciaserv_j15_2_2_jue_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_2_2_secEst_M", $datos["denunciaserv_j15_2_2_secEst_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_2_2_secEst_H", $datos["denunciaserv_j15_2_2_secEst_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_2_2_secEst_T", $datos["denunciaserv_j15_2_2_secEst_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_2_2_actu_M", $datos["denunciaserv_j15_2_2_actu_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_2_2_actu_H", $datos["denunciaserv_j15_2_2_actu_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_2_2_actu_T", $datos["denunciaserv_j15_2_2_actu_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_2_2_carrerajud_M", $datos["denunciaserv_j15_2_2_carrerajud_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_2_2_carrerajud_H", $datos["denunciaserv_j15_2_2_carrerajud_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_2_2_carrerajud_T", $datos["denunciaserv_j15_2_2_carrerajud_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_2_2_otros", $datos["denunciaserv_j15_2_2_otros"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_2_2_otro_M", $datos["denunciaserv_j15_2_2_otro_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_2_2_otro_H", $datos["denunciaserv_j15_2_2_otro_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_2_2_otro_H", $datos["denunciaserv_j15_2_2_otro_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_2_2_noaplica", $datos["denunciaserv_j15_2_2_noaplica"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_2_2_nosesabe", $datos["denunciaserv_j15_2_2_nosesabe"], PDO::PARAM_STR);

			$stmt -> bindParam(":denunciaserv_j15_2_3_magi", $datos["denunciaserv_j15_2_3_magi"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_2_3_magi", $datos["denunciaserv_j15_2_3_magi"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_2_3_magi", $datos["denunciaserv_j15_2_3_magi"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_2_3_jue", $datos["denunciaserv_j15_2_3_jue"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_2_3_jue", $datos["denunciaserv_j15_2_3_jue"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_2_3_jue", $datos["denunciaserv_j15_2_3_jue"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_2_3_secEst", $datos["denunciaserv_j15_2_3_secEst"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_2_3_secEst", $datos["denunciaserv_j15_2_3_secEst"], PDO::PARAM_ST5R);
			$stmt -> bindParam(":denunciaserv_j15_2_3_secEst", $datos["denunciaserv_j15_2_3_secEst"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_2_3_actu", $datos["denunciaserv_j15_2_3_actu"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_2_3_carrerajud", $datos["denunciaserv_j15_2_3_carrerajud"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_2_3_otro", $datos["denunciaserv_j15_2_3_otro"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_2_3_otro_M", $datos["denunciaserv_j15_2_3_otro_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_2_3_otro_H", $datos["denunciaserv_j15_2_3_otro_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_2_3_otro_T", $datos["denunciaserv_j15_2_3_otro_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_2_3_noaplica", $datos["denunciaserv_j15_2_3_noaplica"], PDO::PARAM_STR);
			$stmt -> bindParam(":denunciaserv_j15_2_3_nosesabe", $datos["denunciaserv_j15_2_3_nosesabe"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "La información se ha guardado exitosamente";

		}else{

			$arr = $stmt ->errorInfo();
			$arr[3]="ERROR";
			return $arr[2];

		}

		$stmt -> close();

		$stmt = null;

	}


	/*=============================================
	EDITAR tab 7
	=============================================*/



	static public function mdlEditarFJuecesTab7($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET

 				autovinculacion_j16_vinculacion_M = :autovinculacion_j16_vinculacion_M
			, autovinculacion_j16_vinculacion_H = :autovinculacion_j16_vinculacion_H
			, autovinculacion_j16_vinculacion_T = :autovinculacion_j16_vinculacion_T
			, autovinculacion_j16_novinculacion_M = :autovinculacion_j16_novinculacion_M
			, autovinculacion_j16_novinculacion_H = :autovinculacion_j16_novinculacion_H
			, autovinculacion_j16_novinculacion_T = :autovinculacion_j16_novinculacion_T
			, autovinculacion_j16_total_M = :autovinculacion_j16_total_M
			, autovinculacion_j16_total_H = :autovinculacion_j16_total_H
			, autovinculacion_j16_total_T = :autovinculacion_j16_total_T

			, autovinculacion_j16_1_mayor18_M = :autovinculacion_j16_1_mayor18_M
			, autovinculacion_j16_1_mayor18_H = :autovinculacion_j16_1_mayor18_H
			, autovinculacion_j16_1_mayor18_T = :autovinculacion_j16_1_mayor18_T
			, autovinculacion_j16_1_menor18_M = :autovinculacion_j16_1_menor18_M
			, autovinculacion_j16_1_menor18_H = :autovinculacion_j16_1_menor18_H
			, autovinculacion_j16_1_menor18_T = :autovinculacion_j16_1_menor18_T
			, autovinculacion_j16_1_total_M = :autovinculacion_j16_1_total_M
			, autovinculacion_j16_1_total_H = :autovinculacion_j16_1_total_H
			, autovinculacion_j16_1_total_T = :autovinculacion_j16_1_total_T

			, autovinculacion_j16_2_homicidio_M = :autovinculacion_j16_2_homicidio_M
			, autovinculacion_j16_2_homicidio_H = :autovinculacion_j16_2_homicidio_H
			, autovinculacion_j16_2_homicidio_T = :autovinculacion_j16_2_homicidio_T
			, autovinculacion_j16_2_feminicidio_M = :autovinculacion_j16_2_feminicidio_M
			, autovinculacion_j16_2_feminicidio_H = :autovinculacion_j16_2_feminicidio_H
			, autovinculacion_j16_2_feminicidio_T = :autovinculacion_j16_2_feminicidio_T
			, autovinculacion_j16_2_lesiones_M = :autovinculacion_j16_2_lesiones_M
			, autovinculacion_j16_2_lesiones_H = :autovinculacion_j16_2_lesiones_H
			, autovinculacion_j16_2_lesiones_T = :autovinculacion_j16_2_lesiones_T
			, autovinculacion_j16_2_violFam_M = :autovinculacion_j16_2_violFam_M
			, autovinculacion_j16_2_violFam_H = :autovinculacion_j16_2_violFam_H
			, autovinculacion_j16_2_violFam_T = :autovinculacion_j16_2_violFam_T
			, autovinculacion_j16_2_abuSex_M = :autovinculacion_j16_2_abuSex_M
			, autovinculacion_j16_2_abuSex_H = :autovinculacion_j16_2_abuSex_H
			, autovinculacion_j16_2_abuSex_T = :autovinculacion_j16_2_abuSex_T
			, autovinculacion_j16_2_hostSex_M = :autovinculacion_j16_2_hostSex_M
			, autovinculacion_j16_2_hostSex_H = :autovinculacion_j16_2_hostSex_H
			, autovinculacion_j16_2_hostSex_T = :autovinculacion_j16_2_hostSex_T
			, autovinculacion_j16_2_violacion_M = :autovinculacion_j16_2_violacion_M
			, autovinculacion_j16_2_violacion_H = :autovinculacion_j16_2_violacion_H
			, autovinculacion_j16_2_violacion_T = :autovinculacion_j16_2_violacion_T
			, autovinculacion_j16_2_trata_M = :autovinculacion_j16_2_trata_M
			, autovinculacion_j16_2_trata_H = :autovinculacion_j16_2_trata_H
			, autovinculacion_j16_2_trata_T = :autovinculacion_j16_2_trata_T
			, autovinculacion_j16_2_corrup_M = :autovinculacion_j16_2_corrup_M
			, autovinculacion_j16_2_corrup_H = :autovinculacion_j16_2_corrup_H
			, autovinculacion_j16_2_corrup_T = :autovinculacion_j16_2_corrup_T
			, autovinculacion_j16_2_traMen_M = :autovinculacion_j16_2_traMen_M
			, autovinculacion_j16_2_traMen_H = :autovinculacion_j16_2_traMen_H
			, autovinculacion_j16_2_traMen_T = :autovinculacion_j16_2_traMen_T
			, autovinculacion_j16_2_otros = :autovinculacion_j16_2_otros
			, autovinculacion_j16_2_otros_M = :autovinculacion_j16_2_otros_M
			, autovinculacion_j16_2_otros_H = :autovinculacion_j16_2_otros_H
			, autovinculacion_j16_2_otros_T = :autovinculacion_j16_2_otros_T
			, autovinculacion_j16_2_nosesabe = :autovinculacion_j16_2_nosesabe

			, solucion_j17_suspCond_M = :solucion_j17_suspCond_M
			, solucion_j17_suspCond_H = :solucion_j17_suspCond_H
			, solucion_j17_suspCond_T = :solucion_j17_suspCond_T
			, solucion_j17_acuerdo_M = :solucion_j17_acuerdo_M
			, solucion_j17_acuerdo_H = :solucion_j17_acuerdo_H
			, solucion_j17_acuerdo_T = :solucion_j17_acuerdo_T
			, solucion_j17_total_M = :solucion_j17_total_M
			, solucion_j17_total_H = :solucion_j17_total_H
			, solucion_j17_total_T = :solucion_j17_total_T

			, medida_j18_medidaCau_M = :medida_j18_medidaCau_M
			, medida_j18_medidaCau_H = :medida_j18_medidaCau_H
			, medida_j18_medidaCau_T = :medida_j18_medidaCau_T

			, medida_j18_1_presePeri_M = :medida_j18_1_presePeri_M
			, medida_j18_1_presePeri_H = :medida_j18_1_presePeri_H
			, medida_j18_1_presePeri_T = :medida_j18_1_presePeri_T
			, medida_j18_1_garantia_M = :medida_j18_1_garantia_M
			, medida_j18_1_garantia_H = :medida_j18_1_garantia_H
			, medida_j18_1_garantia_T = :medida_j18_1_garantia_T
			, medida_j18_1_embargo_M = :medida_j18_1_embargo_M
			, medida_j18_1_embargo_H = :medida_j18_1_embargo_H
			, medida_j18_1_embargo_T = :medida_j18_1_embargo_T
			, medida_j18_1_inmoCue_M = :medida_j18_1_inmoCue_M
			, medida_j18_1_inmoCue_H = :medida_j18_1_inmoCue_H
			, medida_j18_1_inmoCue_T = :medida_j18_1_inmoCue_T
			, medida_j18_1_some_M = :medida_j18_1_some_M
			, medida_j18_1_some_H = :medida_j18_1_some_H
			, medida_j18_1_some_T = :medida_j18_1_some_T
			, medida_j18_1_prohi_M = :medida_j18_1_prohi_M
			, medida_j18_1_prohi_H = :medida_j18_1_prohi_H
			, medida_j18_1_prohi_T = :medida_j18_1_prohi_T
			, medida_j18_1_proConv_M = :medida_j18_1_proConv_M
			, medida_j18_1_proConv_H = :medida_j18_1_proConv_H
			, medida_j18_1_proConv_T = :medida_j18_1_proConv_T
			, medida_j18_1_separa_M = :medida_j18_1_separa_M
			, medida_j18_1_separa_H = :medida_j18_1_separa_H
			, medida_j18_1_separa_T = :medida_j18_1_separa_T
			, medida_j18_1_susp_M = :medida_j18_1_susp_M
			, medida_j18_1_susp_H = :medida_j18_1_susp_H
			, medida_j18_1_susp_T = :medida_j18_1_susp_T
			, medida_j18_1_suspDet_M = :medida_j18_1_suspDet_M
			, medida_j18_1_suspDet_H = :medida_j18_1_suspDet_H
			, medida_j18_1_suspDet_T = :medida_j18_1_suspDet_T
			, medida_j18_1_coloca_M = :medida_j18_1_coloca_M
			, medida_j18_1_coloca_H = :medida_j18_1_coloca_H
			, medida_j18_1_coloca_T = :medida_j18_1_coloca_T
			, medida_j18_1_resguardo_M = :medida_j18_1_resguardo_M
			, medida_j18_1_resguardo_H = :medida_j18_1_resguardo_H
			, medida_j18_1_resguardo_T = :medida_j18_1_resguardo_T
			, medida_j18_1_prision_M = :medida_j18_1_prision_M
			, medida_j18_1_prision_H = :medida_j18_1_prision_H
			, medida_j18_1_prision_T = :medida_j18_1_prision_T
			, medida_j18_1_otros = :medida_j18_1_otros
			, medida_j18_1_otros_M = :medida_j18_1_otros_M
			, medida_j18_1_otros_H = :medida_j18_1_otros_H
			, medida_j18_1_otros_T = :medida_j18_1_otros_T
			, medida_j18_1_nosesabe = :medida_j18_1_nosesabe

			, medida_j18_2_dicto_M = :medida_j18_2_dicto_M
			, medida_j18_2_dicto_H = :medida_j18_2_dicto_H
			, medida_j18_2_dicto_T = :medida_j18_2_dicto_T

			, medida_j18_3_presePeri_M = :medida_j18_3_presePeri_M
			, medida_j18_3_presePeri_H = :medida_j18_3_presePeri_H
			, medida_j18_3_presePeri_T = :medida_j18_3_presePeri_T
			, medida_j18_3_garantia_M = :medida_j18_3_garantia_M
			, medida_j18_3_garantia_H = :medida_j18_3_garantia_H
			, medida_j18_3_garantia_T = :medida_j18_3_garantia_T
			, medida_j18_3_embargo_M = :medida_j18_3_embargo_M
			, medida_j18_3_embargo_H = :medida_j18_3_embargo_H
			, medida_j18_3_embargo_T = :medida_j18_3_embargo_T
			, medida_j18_3_inmoCue_M = :medida_j18_3_inmoCue_M
			, medida_j18_3_inmoCue_H = :medida_j18_3_inmoCue_H
			, medida_j18_3_inmoCue_T = :medida_j18_3_inmoCue_T
			, medida_j18_3_some_M = :medida_j18_3_some_M
			, medida_j18_3_some_H = :medida_j18_3_some_H
			, medida_j18_3_some_T = :medida_j18_3_some_T
			, medida_j18_3_prohi_M = :medida_j18_3_prohi_M
			, medida_j18_3_prohi_H = :medida_j18_3_prohi_H
			, medida_j18_3_prohi_T = :medida_j18_3_prohi_T
			, medida_j18_3_proConv_M = :medida_j18_3_proConv_M
			, medida_j18_3_proConv_H = :medida_j18_3_proConv_H
			, medida_j18_3_proConv_T = :medida_j18_3_proConv_T
			, medida_j18_3_separa_M = :medida_j18_3_separa_M
			, medida_j18_3_separa_H = :medida_j18_3_separa_H
			, medida_j18_3_separa_T = :medida_j18_3_separa_T
			, medida_j18_3_susp_M = :medida_j18_3_susp_M
			, medida_j18_3_susp_H = :medida_j18_3_susp_H
			, medida_j18_3_susp_T = :medida_j18_3_susp_T
			, medida_j18_3_suspDet_M = :medida_j18_3_suspDet_M
			, medida_j18_3_suspDet_H = :medida_j18_3_suspDet_H
			, medida_j18_3_suspDet_T = :medida_j18_3_suspDet_T
			, medida_j18_3_coloca_M = :medida_j18_3_coloca_M
			, medida_j18_3_coloca_H = :medida_j18_3_coloca_H
			, medida_j18_3_coloca_T = :medida_j18_3_coloca_T
			, medida_j18_3_resguardo_M = :medida_j18_3_resguardo_M
			, medida_j18_3_resguardo_H = :medida_j18_3_resguardo_H
			, medida_j18_3_resguardo_T = :medida_j18_3_resguardo_T
			, medida_j18_3_prision_M = :medida_j18_3_prision_M
			, medida_j18_3_prision_H = :medida_j18_3_prision_H
			, medida_j18_3_prision_T = :medida_j18_3_prision_T
			, medida_j18_3_otros = :medida_j18_3_otros
			, medida_j18_3_otros_M = :medida_j18_3_otros_M
			, medida_j18_3_otros_H = :medida_j18_3_otros_H
			, medida_j18_3_otros_T = :medida_j18_3_otros_T
			, audiencias_j19_audCele = :audiencias_j19_audCele
			, audiencias_j19_audAnul = :audiencias_j19_audAnul
			, audiencias_j19_audDif = :audiencias_j19_audDif
			, audiencias_j19_otras = :audiencias_j19_otras
			, audiencias_j19_otrasCual = :audiencias_j19_otrasCual
			, audiencias_j19_total = :audiencias_j19_total

			, audiencias_j19_1_iniciales = :audiencias_j19_1_iniciales
			, audiencias_j19_1_inter = :audiencias_j19_1_inter
			, audiencias_j19_1_juicioOr = :audiencias_j19_1_juicioOr
			, audiencias_j19_1_sentencia = :audiencias_j19_1_sentencia
			, audiencias_j19_1_sanciones = :audiencias_j19_1_sanciones
			, audiencias_j19_1_total = :audiencias_j19_1_total

			WHERE id = :idFormulario");




		$stmt -> bindParam(":idFormulario", $datos["idFormulario"], PDO::PARAM_STR);

	 $stmt -> bindParam(":autovinculacion_j16_vinculacion_M", $datos["autovinculacion_j16_vinculacion_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":autovinculacion_j16_vinculacion_H", $datos["autovinculacion_j16_vinculacion_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":autovinculacion_j16_vinculacion_T", $datos["autovinculacion_j16_vinculacion_T"], PDO::PARAM_STR);
	 $stmt -> bindParam(":autovinculacion_j16_novinculacion_M", $datos["autovinculacion_j16_novinculacion_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":autovinculacion_j16_novinculacion_H", $datos["autovinculacion_j16_novinculacion_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":autovinculacion_j16_novinculacion_T", $datos["autovinculacion_j16_novinculacion_T"], PDO::PARAM_STR);
	 $stmt -> bindParam(":autovinculacion_j16_total_M", $datos["autovinculacion_j16_total_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":autovinculacion_j16_total_H", $datos["autovinculacion_j16_total_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":autovinculacion_j16_total_T", $datos["autovinculacion_j16_total_T"], PDO::PARAM_STR);

	 $stmt -> bindParam(":autovinculacion_j16_1_mayor18_M", $datos["autovinculacion_j16_1_mayor18_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":autovinculacion_j16_1_mayor18_H", $datos["autovinculacion_j16_1_mayor18_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":autovinculacion_j16_1_mayor18_T", $datos["autovinculacion_j16_1_mayor18_T"], PDO::PARAM_STR);
	 $stmt -> bindParam(":autovinculacion_j16_1_menor18_M", $datos["autovinculacion_j16_1_menor18_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":autovinculacion_j16_1_menor18_H", $datos["autovinculacion_j16_1_menor18_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":autovinculacion_j16_1_menor18_T", $datos["autovinculacion_j16_1_menor18_T"], PDO::PARAM_STR);
	 $stmt -> bindParam(":autovinculacion_j16_1_total_M", $datos["autovinculacion_j16_1_total_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":autovinculacion_j16_1_total_H", $datos["autovinculacion_j16_1_total_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":autovinculacion_j16_1_total_T", $datos["autovinculacion_j16_1_total_T"], PDO::PARAM_STR);

	 $stmt -> bindParam(":autovinculacion_j16_2_homicidio_M", $datos["autovinculacion_j16_2_homicidio_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":autovinculacion_j16_2_homicidio_H", $datos["autovinculacion_j16_2_homicidio_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":autovinculacion_j16_2_homicidio_T", $datos["autovinculacion_j16_2_homicidio_T"], PDO::PARAM_STR);
	 $stmt -> bindParam(":autovinculacion_j16_2_feminicidio_M", $datos["autovinculacion_j16_2_feminicidio_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":autovinculacion_j16_2_feminicidio_H", $datos["autovinculacion_j16_2_feminicidio_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":autovinculacion_j16_2_feminicidio_T", $datos["autovinculacion_j16_2_feminicidio_T"], PDO::PARAM_STR);
	 $stmt -> bindParam(":autovinculacion_j16_2_lesiones_M", $datos["autovinculacion_j16_2_lesiones_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":autovinculacion_j16_2_lesiones_H", $datos["autovinculacion_j16_2_lesiones_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":autovinculacion_j16_2_lesiones_T", $datos["autovinculacion_j16_2_lesiones_T"], PDO::PARAM_STR);
	 $stmt -> bindParam(":autovinculacion_j16_2_violFam_M", $datos["autovinculacion_j16_2_violFam_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":autovinculacion_j16_2_violFam_H", $datos["autovinculacion_j16_2_violFam_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":autovinculacion_j16_2_violFam_T", $datos["autovinculacion_j16_2_violFam_T"], PDO::PARAM_STR);
	 $stmt -> bindParam(":autovinculacion_j16_2_abuSex_M", $datos["autovinculacion_j16_2_abuSex_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":autovinculacion_j16_2_abuSex_H", $datos["autovinculacion_j16_2_abuSex_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":autovinculacion_j16_2_abuSex_T", $datos["autovinculacion_j16_2_abuSex_T"], PDO::PARAM_STR);
	 $stmt -> bindParam(":autovinculacion_j16_2_hostSex_M", $datos["autovinculacion_j16_2_hostSex_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":autovinculacion_j16_2_hostSex_H", $datos["autovinculacion_j16_2_hostSex_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":autovinculacion_j16_2_hostSex_T", $datos["autovinculacion_j16_2_hostSex_T"], PDO::PARAM_STR);
	 $stmt -> bindParam(":autovinculacion_j16_2_violacion_M", $datos["autovinculacion_j16_2_violacion_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":autovinculacion_j16_2_violacion_H", $datos["autovinculacion_j16_2_violacion_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":autovinculacion_j16_2_violacion_T", $datos["autovinculacion_j16_2_violacion_T"], PDO::PARAM_STR);
	 $stmt -> bindParam(":autovinculacion_j16_2_trata_M", $datos["autovinculacion_j16_2_trata_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":autovinculacion_j16_2_trata_H", $datos["autovinculacion_j16_2_trata_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":autovinculacion_j16_2_trata_T", $datos["autovinculacion_j16_2_trata_T"], PDO::PARAM_STR);
	 $stmt -> bindParam(":autovinculacion_j16_2_corrup_M", $datos["autovinculacion_j16_2_corrup_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":autovinculacion_j16_2_corrup_H", $datos["autovinculacion_j16_2_corrup_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":autovinculacion_j16_2_corrup_T", $datos["autovinculacion_j16_2_corrup_T"], PDO::PARAM_STR);
	 $stmt -> bindParam(":autovinculacion_j16_2_traMen_M", $datos["autovinculacion_j16_2_traMen_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":autovinculacion_j16_2_traMen_H", $datos["autovinculacion_j16_2_traMen_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":autovinculacion_j16_2_traMen_T", $datos["autovinculacion_j16_2_traMen_T"], PDO::PARAM_STR);
	 $stmt -> bindParam(":autovinculacion_j16_2_otros", $datos["autovinculacion_j16_2_otros"], PDO::PARAM_STR);
	 $stmt -> bindParam(":autovinculacion_j16_2_otros_M", $datos["autovinculacion_j16_2_otros_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":autovinculacion_j16_2_otros_H", $datos["autovinculacion_j16_2_otros_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":autovinculacion_j16_2_otros_T", $datos["autovinculacion_j16_2_otros_T"], PDO::PARAM_STR);
	 $stmt -> bindParam(":autovinculacion_j16_2_nosesabe", $datos["autovinculacion_j16_2_nosesabe"], PDO::PARAM_STR);

	 $stmt -> bindParam(":solucion_j17_suspCond_M", $datos["solucion_j17_suspCond_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":solucion_j17_suspCond_H", $datos["solucion_j17_suspCond_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":solucion_j17_suspCond_T", $datos["solucion_j17_suspCond_T"], PDO::PARAM_STR);
	 $stmt -> bindParam(":solucion_j17_acuerdo_M", $datos["solucion_j17_acuerdo_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":solucion_j17_acuerdo_H", $datos["solucion_j17_acuerdo_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":solucion_j17_acuerdo_T", $datos["solucion_j17_acuerdo_T"], PDO::PARAM_STR);
	 $stmt -> bindParam(":solucion_j17_total_M", $datos["solucion_j17_total_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":solucion_j17_total_H", $datos["solucion_j17_total_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":solucion_j17_total_T", $datos["solucion_j17_total_T"], PDO::PARAM_STR);

	 $stmt -> bindParam(":medida_j18_medidaCau_M", $datos["medida_j18_medidaCau_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_medidaCau_H", $datos["medida_j18_medidaCau_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_medidaCau_T", $datos["medida_j18_medidaCau_T"], PDO::PARAM_STR);

	 $stmt -> bindParam(":medida_j18_1_presePeri_M", $datos["medida_j18_1_presePeri_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_1_presePeri_H", $datos["medida_j18_1_presePeri_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_1_presePeri_T", $datos["medida_j18_1_presePeri_T"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_1_garantia_M", $datos["medida_j18_1_garantia_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_1_garantia_H", $datos["medida_j18_1_garantia_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_1_garantia_T", $datos["medida_j18_1_garantia_T"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_1_embargo_M", $datos["medida_j18_1_embargo_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_1_embargo_H", $datos["medida_j18_1_embargo_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_1_embargo_T", $datos["medida_j18_1_embargo_T"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_1_inmoCue_M", $datos["medida_j18_1_inmoCue_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_1_inmoCue_H", $datos["medida_j18_1_inmoCue_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_1_inmoCue_T", $datos["medida_j18_1_inmoCue_T"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_1_some_M", $datos["medida_j18_1_some_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_1_some_H", $datos["medida_j18_1_some_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_1_some_T", $datos["medida_j18_1_some_T"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_1_prohi_M", $datos["medida_j18_1_prohi_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_1_prohi_H", $datos["medida_j18_1_prohi_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_1_prohi_T", $datos["medida_j18_1_prohi_T"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_1_proConv_M", $datos["medida_j18_1_proConv_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_1_proConv_H", $datos["medida_j18_1_proConv_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_1_proConv_T", $datos["medida_j18_1_proConv_T"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_1_separa_M", $datos["medida_j18_1_separa_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_1_separa_H", $datos["medida_j18_1_separa_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_1_separa_T", $datos["medida_j18_1_separa_T"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_1_susp_M", $datos["medida_j18_1_susp_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_1_susp_H", $datos["medida_j18_1_susp_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_1_susp_T", $datos["medida_j18_1_susp_T"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_1_suspDet_M", $datos["medida_j18_1_suspDet_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_1_suspDet_H", $datos["medida_j18_1_suspDet_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_1_suspDet_T", $datos["medida_j18_1_suspDet_T"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_1_coloca_M", $datos["medida_j18_1_coloca_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_1_coloca_H", $datos["medida_j18_1_coloca_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_1_coloca_T", $datos["medida_j18_1_coloca_T"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_1_resguardo_M", $datos["medida_j18_1_resguardo_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_1_resguardo_H", $datos["medida_j18_1_resguardo_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_1_resguardo_T", $datos["medida_j18_1_resguardo_T"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_1_prision_M", $datos["medida_j18_1_prision_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_1_prision_H", $datos["medida_j18_1_prision_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_1_prision_T", $datos["medida_j18_1_prision_T"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_1_otros", $datos["medida_j18_1_otros"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_1_otros_M", $datos["medida_j18_1_otros_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_1_otros_H", $datos["medida_j18_1_otros_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_1_otros_T", $datos["medida_j18_1_otros_T"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_1_nosesabe", $datos["medida_j18_1_nosesabe"], PDO::PARAM_STR);

	 $stmt -> bindParam(":medida_j18_2_dicto_M", $datos["medida_j18_2_dicto_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_2_dicto_H", $datos["medida_j18_2_dicto_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_2_dicto_T", $datos["medida_j18_2_dicto_T"], PDO::PARAM_STR);

	 $stmt -> bindParam(":medida_j18_3_presePeri_M", $datos["medida_j18_3_presePeri_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_3_presePeri_H", $datos["medida_j18_3_presePeri_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_3_presePeri_T", $datos["medida_j18_3_presePeri_T"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_3_garantia_M", $datos["medida_j18_3_garantia_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_3_garantia_H", $datos["medida_j18_3_garantia_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_3_garantia_T", $datos["medida_j18_3_garantia_T"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_3_embargo_M", $datos["medida_j18_3_embargo_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_3_embargo_H", $datos["medida_j18_3_embargo_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_3_embargo_T", $datos["medida_j18_3_embargo_T"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_3_inmoCue_M", $datos["medida_j18_3_inmoCue_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_3_inmoCue_H", $datos["medida_j18_3_inmoCue_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_3_inmoCue_T", $datos["medida_j18_3_inmoCue_T"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_3_some_M", $datos["medida_j18_3_some_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_3_some_H", $datos["medida_j18_3_some_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_3_some_T", $datos["medida_j18_3_some_T"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_3_prohi_M", $datos["medida_j18_3_prohi_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_3_prohi_H", $datos["medida_j18_3_prohi_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_3_prohi_T", $datos["medida_j18_3_prohi_T"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_3_proConv_M", $datos["medida_j18_3_proConv_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_3_proConv_H", $datos["medida_j18_3_proConv_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_3_proConv_T", $datos["medida_j18_3_proConv_T"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_3_separa_M", $datos["medida_j18_3_separa_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_3_separa_H", $datos["medida_j18_3_separa_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_3_separa_T", $datos["medida_j18_3_separa_T"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_3_susp_M", $datos["medida_j18_3_susp_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_3_susp_H", $datos["medida_j18_3_susp_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_3_susp_T", $datos["medida_j18_3_susp_T"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_3_suspDet_M", $datos["medida_j18_3_suspDet_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_3_suspDet_H", $datos["medida_j18_3_suspDet_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_3_suspDet_T", $datos["medida_j18_3_suspDet_T"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_3_coloca_M", $datos["medida_j18_3_coloca_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_3_coloca_H", $datos["medida_j18_3_coloca_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_3_coloca_T", $datos["medida_j18_3_coloca_T"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_3_resguardo_M", $datos["medida_j18_3_resguardo_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_3_resguardo_H", $datos["medida_j18_3_resguardo_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_3_resguardo_T", $datos["medida_j18_3_resguardo_T"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_3_prision_M", $datos["medida_j18_3_prision_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_3_prision_H", $datos["medida_j18_3_prision_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_3_prision_T", $datos["medida_j18_3_prision_T"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_3_otros", $datos["medida_j18_3_otros"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_3_otros_M", $datos["medida_j18_3_otros_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_3_otros_H", $datos["medida_j18_3_otros_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":medida_j18_3_otros_T", $datos["medida_j18_3_otros_T"], PDO::PARAM_STR);

	 $stmt -> bindParam(":audiencias_j19_audCele", $datos["audiencias_j19_audCele"], PDO::PARAM_STR);
	 $stmt -> bindParam(":audiencias_j19_audAnul", $datos["audiencias_j19_audAnul"], PDO::PARAM_STR);
	 $stmt -> bindParam(":audiencias_j19_audDif", $datos["audiencias_j19_audDif"], PDO::PARAM_STR);
	 $stmt -> bindParam(":audiencias_j19_otras", $datos["audiencias_j19_otras"], PDO::PARAM_STR);
	 $stmt -> bindParam(":audiencias_j19_otrasCual", $datos["audiencias_j19_otrasCual"], PDO::PARAM_STR);
	 $stmt -> bindParam(":audiencias_j19_total", $datos["audiencias_j19_total"], PDO::PARAM_STR);

	 $stmt -> bindParam(":audiencias_j19_1_iniciales", $datos["audiencias_j19_1_iniciales"], PDO::PARAM_STR);
	 $stmt -> bindParam(":audiencias_j19_1_inter", $datos["audiencias_j19_1_inter"], PDO::PARAM_STR);
	 $stmt -> bindParam(":audiencias_j19_1_juicioOr", $datos["audiencias_j19_1_juicioOr"], PDO::PARAM_STR);
	 $stmt -> bindParam(":audiencias_j19_1_sentencia", $datos["audiencias_j19_1_sentencia"], PDO::PARAM_STR);
	 $stmt -> bindParam(":audiencias_j19_1_sanciones", $datos["audiencias_j19_1_sanciones"], PDO::PARAM_STR);
	 $stmt -> bindParam(":audiencias_j19_1_total", $datos["audiencias_j19_1_total"], PDO::PARAM_STR);


					if($stmt->execute()){

						return "La información se ha guardado exitosamente";

					}else{

						$arr = $stmt ->errorInfo();
						$arr[3]="ERROR";
						return $arr[2];

					}

					$stmt -> close();

					$stmt = null;

				}


	/*=============================================
	EDITAR tab 8
	=============================================*/

	static public function mdlEditarFJuecesTab8($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET

				sentencias_j20_absolutaria = :sentencias_j20_absolutaria

			, sentencias_j20_condena = :sentencias_j20_condena
			, sentencias_j20_mixta = :sentencias_j20_mixta
			, sentencias_j20_otras = :sentencias_j20_otras
			, sentencias_j20_otrasCual = :sentencias_j20_otrasCual
			, sentencias_j20_total = :sentencias_j20_total
			, sentencias_j20_1_proceAbr = :sentencias_j20_1_proceAbr
			, sentencias_j20_1_juicioOr = :sentencias_j20_1_juicioOr
			, sentencias_j20_1_otras = :sentencias_j20_1_otras
			, sentencias_j20_1_otrasCual = :sentencias_j20_1_otrasCual
			, sentencias_j20_1_total = :sentencias_j20_1_total

			, sentencias_j20_2_mayor18_M = :sentencias_j20_2_mayor18_M
			, sentencias_j20_2_mayor18_H = :sentencias_j20_2_mayor18_H
			, sentencias_j20_2_mayor18_T = :sentencias_j20_2_mayor18_T
			, sentencias_j20_2_menor18_M = :sentencias_j20_2_menor18_M
			, sentencias_j20_2_menor18_H = :sentencias_j20_2_menor18_H
			, sentencias_j20_2_menor18_T = :sentencias_j20_2_menor18_T
			, sentencias_j20_2_total_M = :sentencias_j20_2_total_M
			, sentencias_j20_2_total_H = :sentencias_j20_2_total_H
			, sentencias_j20_2_total_T = :sentencias_j20_2_total_T
			, sentencias_j20_2_nosesabe = :sentencias_j20_2_nosesabe
			, sentencias_j20_3_homicidio_M = :sentencias_j20_3_homicidio_M
			, sentencias_j20_3_homicidio_H = :sentencias_j20_3_homicidio_H
			, sentencias_j20_3_homicidio_T = :sentencias_j20_3_homicidio_T
			, sentencias_j20_3_feminicidio_M = :sentencias_j20_3_feminicidio_M
			, sentencias_j20_3_feminicidio_H = :sentencias_j20_3_feminicidio_H
			, sentencias_j20_3_feminicidio_T = :sentencias_j20_3_feminicidio_T
			, sentencias_j20_3_lesiones_M = :sentencias_j20_3_lesiones_M
			, sentencias_j20_3_lesiones_H = :sentencias_j20_3_lesiones_H
			, sentencias_j20_3_lesiones_T = :sentencias_j20_3_lesiones_T
			, sentencias_j20_3_violFam_M = :sentencias_j20_3_violFam_M
			, sentencias_j20_3_violFam_H = :sentencias_j20_3_violFam_H
			, sentencias_j20_3_violFam_T = :sentencias_j20_3_violFam_T
			, sentencias_j20_3_abuSex_M = :sentencias_j20_3_abuSex_M
			, sentencias_j20_3_abuSex_H = :sentencias_j20_3_abuSex_H
			, sentencias_j20_3_abuSex_T = :sentencias_j20_3_abuSex_T
			, sentencias_j20_3_hostSex_M = :sentencias_j20_3_hostSex_M
			, sentencias_j20_3_hostSex_H = :sentencias_j20_3_hostSex_H
			, sentencias_j20_3_hostSex_T = :sentencias_j20_3_hostSex_T
			, sentencias_j20_3_violacion_M = :sentencias_j20_3_violacion_M
			, sentencias_j20_3_violacion_H = :sentencias_j20_3_violacion_H
			, sentencias_j20_3_violacion_T = :sentencias_j20_3_violacion_T
			, sentencias_j20_3_trata_M = :sentencias_j20_3_trata_M
			, sentencias_j20_3_trata_H = :sentencias_j20_3_trata_H
			, sentencias_j20_3_trata_T = :sentencias_j20_3_trata_T
			, sentencias_j20_3_corrup_M = :sentencias_j20_3_corrup_M
			, sentencias_j20_3_corrup_H = :sentencias_j20_3_corrup_H
			, sentencias_j20_3_corrup_T = :sentencias_j20_3_corrup_T
			, sentencias_j20_3_traMen_M = :sentencias_j20_3_traMen_M
			, sentencias_j20_3_traMen_H = :sentencias_j20_3_traMen_H
			, sentencias_j20_3_traMen_T = :sentencias_j20_3_traMen_T
			, sentencias_j20_3_otros = :sentencias_j20_3_otros
			, sentencias_j20_3_otros_M = :sentencias_j20_3_otros_M
			, sentencias_j20_3_otros_H = :sentencias_j20_3_otros_H
			, sentencias_j20_3_otros_T = :sentencias_j20_3_otros_T
			, sentencias_j20_3_nosesabe = :sentencias_j20_3_nosesabe

			, sentencias_j20_4_suspenCond = :sentencias_j20_4_suspenCond
			, sentencias_j20_4_acuerdo = :sentencias_j20_4_acuerdo
			, sentencias_j20_4_otorPerd = :sentencias_j20_4_otorPerd
			, sentencias_j20_4_otrasDet = :sentencias_j20_4_otrasDet

			, sentencias_j20_5_confirmadas = :sentencias_j20_5_confirmadas
			, sentencias_j20_5_modificadas = :sentencias_j20_5_modificadas
			, sentencias_j20_5_revocadas = :sentencias_j20_5_revocadas
			, sentencias_j20_5_total = :sentencias_j20_5_total

			, amparos_j21_amparos = :amparos_j21_amparos
			, amparos_j21_1_concedidos = :amparos_j21_1_concedidos
			, amparos_j21_1_negados = :amparos_j21_1_negados
			, amparos_j21_1_sobreseidos = :amparos_j21_1_sobreseidos
			, amparos_j21_1_desechados = :amparos_j21_1_desechados
			, amparos_j21_1_otras = :amparos_j21_1_otras
			, amparos_j21_1_otrasCual = :amparos_j21_1_otrasCual
			, amparos_j21_1_total = :amparos_j21_1_total

			, preliberacional_j22_libCond_M = :preliberacional_j22_libCond_M
			, preliberacional_j22_libCond_H = :preliberacional_j22_libCond_H
			, preliberacional_j22_libCond_T = :preliberacional_j22_libCond_T
			, preliberacional_j22_libAnt_M = :preliberacional_j22_libAnt_M
			, preliberacional_j22_libAnt_H = :preliberacional_j22_libAnt_H
			, preliberacional_j22_libAnt_T = :preliberacional_j22_libAnt_T
			, preliberacional_j22_sustSusp_M = :preliberacional_j22_sustSusp_M
			, preliberacional_j22_sustSusp_H = :preliberacional_j22_sustSusp_H
			, preliberacional_j22_sustSusp_T = :preliberacional_j22_sustSusp_T
			, preliberacional_j22_permHum_M = :preliberacional_j22_permHum_M
			, preliberacional_j22_permHum_H = :preliberacional_j22_permHum_H
			, preliberacional_j22_permHum_T = :preliberacional_j22_permHum_T
			, preliberacional_j22_prelib_M = :preliberacional_j22_prelib_M
			, preliberacional_j22_prelib_H = :preliberacional_j22_prelib_H
			, preliberacional_j22_prelib_T = :preliberacional_j22_prelib_T

			, victimas_j23_mayor18_M = :victimas_j23_mayor18_M
			, victimas_j23_mayor18_H = :victimas_j23_mayor18_H
			, victimas_j23_mayor18_T = :victimas_j23_mayor18_T
			, victimas_j23_menor18_M = :victimas_j23_menor18_M
			, victimas_j23_menor18_H = :victimas_j23_menor18_H
			, victimas_j23_menor18_T = :victimas_j23_menor18_T
			, victimas_j23_total_M = :victimas_j23_total_M
			, victimas_j23_total_H = :victimas_j23_total_H
			, victimas_j23_total_T = :victimas_j23_total_T
			, victimas_j23_1_homicidio_M = :victimas_j23_1_homicidio_M
			, victimas_j23_1_homicidio_H = :victimas_j23_1_homicidio_H
			, victimas_j23_1_homicidio_T = :victimas_j23_1_homicidio_T
			, victimas_j23_1_feminicidio_M = :victimas_j23_1_feminicidio_M
			, victimas_j23_1_feminicidio_H = :victimas_j23_1_feminicidio_H
			, victimas_j23_1_feminicidio_T = :victimas_j23_1_feminicidio_T
			, victimas_j23_1_lesiones_M = :victimas_j23_1_lesiones_M
			, victimas_j23_1_lesiones_H = :victimas_j23_1_lesiones_H
			, victimas_j23_1_lesiones_T = :victimas_j23_1_lesiones_T
			, victimas_j23_1_violFam_M = :victimas_j23_1_violFam_M
			, victimas_j23_1_violFam_H = :victimas_j23_1_violFam_H
			, victimas_j23_1_violFam_T = :victimas_j23_1_violFam_T
			, victimas_j23_1_abuSex_M = :victimas_j23_1_abuSex_M
			, victimas_j23_1_abuSex_H = :victimas_j23_1_abuSex_H
			, victimas_j23_1_abuSex_T = :victimas_j23_1_abuSex_T
			, victimas_j23_1_hostSex_M = :victimas_j23_1_hostSex_M
			, victimas_j23_1_hostSex_H = :victimas_j23_1_hostSex_H
			, victimas_j23_1_hostSex_T = :victimas_j23_1_hostSex_T
			, victimas_j23_1_violacion_M = :victimas_j23_1_violacion_M
			, victimas_j23_1_violacion_H = :victimas_j23_1_violacion_H
			, victimas_j23_1_violacion_T = :victimas_j23_1_violacion_T
			, victimas_j23_1_trata_M = :victimas_j23_1_trata_M
			, victimas_j23_1_trata_H = :victimas_j23_1_trata_H
			, victimas_j23_1_trata_T = :victimas_j23_1_trata_T
			, victimas_j23_1_corrup_M = :victimas_j23_1_corrup_M
			, victimas_j23_1_corrup_H = :victimas_j23_1_corrup_H
			, victimas_j23_1_corrup_T = :victimas_j23_1_corrup_T
			, victimas_j23_1_traMen_M = :victimas_j23_1_traMen_M
			, victimas_j23_1_traMen_H = :victimas_j23_1_traMen_H
			, victimas_j23_1_traMen_T = :victimas_j23_1_traMen_T
			, victimas_j23_1_nosesabe = :victimas_j23_1_nosesabe
			, victimas_j23_2_buepra = :victimas_j23_2_buepra
			, victimas_j23_3_cuabuepra = :victimas_j23_3_cuabuepra

			WHERE id = :idFormulario");

			$stmt -> bindParam(":idFormulario", $datos["idFormulario"], PDO::PARAM_STR);

			$stmt -> bindParam(":sentencias_j20_absolutaria", $datos["sentencias_j20_absolutaria"], PDO::PARAM_STR);
			$stmt -> bindParam(":sentencias_j20_condena", $datos["sentencias_j20_condena"], PDO::PARAM_STR);
			$stmt -> bindParam(":sentencias_j20_mixta", $datos["sentencias_j20_mixta"], PDO::PARAM_STR);
			$stmt -> bindParam(":sentencias_j20_otras", $datos["sentencias_j20_otras"], PDO::PARAM_STR);
			$stmt -> bindParam(":sentencias_j20_otrasCual", $datos["sentencias_j20_otrasCual"], PDO::PARAM_STR);
			$stmt -> bindParam(":sentencias_j20_total", $datos["sentencias_j20_total"], PDO::PARAM_STR);

			$stmt -> bindParam(":sentencias_j20_1_proceAbr", $datos["sentencias_j20_1_proceAbr"], PDO::PARAM_STR);
			$stmt -> bindParam(":sentencias_j20_1_juicioOr", $datos["sentencias_j20_1_juicioOr"], PDO::PARAM_STR);
			$stmt -> bindParam(":sentencias_j20_1_otras", $datos["sentencias_j20_1_otras"], PDO::PARAM_STR);
			$stmt -> bindParam(":sentencias_j20_1_otrasCual", $datos["sentencias_j20_1_otrasCual"], PDO::PARAM_STR);
			$stmt -> bindParam(":sentencias_j20_1_total", $datos["sentencias_j20_1_total"], PDO::PARAM_STR);

			$stmt -> bindParam(":sentencias_j20_2_mayor18_M", $datos["sentencias_j20_2_mayor18_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":sentencias_j20_2_mayor18_H", $datos["sentencias_j20_2_mayor18_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":sentencias_j20_2_mayor18_T", $datos["sentencias_j20_2_mayor18_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":sentencias_j20_2_menor18_M", $datos["sentencias_j20_2_menor18_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":sentencias_j20_2_menor18_H", $datos["sentencias_j20_2_menor18_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":sentencias_j20_2_menor18_T", $datos["sentencias_j20_2_menor18_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":sentencias_j20_2_total_M", $datos["sentencias_j20_2_total_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":sentencias_j20_2_total_H", $datos["sentencias_j20_2_total_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":sentencias_j20_2_total_T", $datos["sentencias_j20_2_total_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":sentencias_j20_2_nosesabe", $datos["sentencias_j20_2_nosesabe"], PDO::PARAM_STR);

			$stmt -> bindParam(":sentencias_j20_3_homicidio_M", $datos["sentencias_j20_3_homicidio_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":sentencias_j20_3_homicidio_H", $datos["sentencias_j20_3_homicidio_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":sentencias_j20_3_homicidio_T", $datos["sentencias_j20_3_homicidio_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":sentencias_j20_3_feminicidio_M", $datos["sentencias_j20_3_feminicidio_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":sentencias_j20_3_feminicidio_H", $datos["sentencias_j20_3_feminicidio_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":sentencias_j20_3_feminicidio_T", $datos["sentencias_j20_3_feminicidio_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":sentencias_j20_3_lesiones_M", $datos["sentencias_j20_3_lesiones_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":sentencias_j20_3_lesiones_H", $datos["sentencias_j20_3_lesiones_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":sentencias_j20_3_lesiones_T", $datos["sentencias_j20_3_lesiones_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":sentencias_j20_3_violFam_M", $datos["xxxxxxxxxxx"], PDO::PARAM_STR);
			$stmt -> bindParam(":sentencias_j20_3_violFam_H", $datos["sentencias_j20_3_violFam_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":sentencias_j20_3_violFam_T", $datos["sentencias_j20_3_violFam_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":sentencias_j20_3_abuSex_M", $datos["sentencias_j20_3_abuSex_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":sentencias_j20_3_abuSex_H", $datos["sentencias_j20_3_abuSex_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":sentencias_j20_3_abuSex_T", $datos["sentencias_j20_3_abuSex_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":sentencias_j20_3_hostSex_M", $datos["sentencias_j20_3_hostSex_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":sentencias_j20_3_hostSex_H", $datos["sentencias_j20_3_hostSex_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":sentencias_j20_3_hostSex_T", $datos["sentencias_j20_3_hostSex_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":sentencias_j20_3_violacion_M", $datos["sentencias_j20_3_violacion_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":sentencias_j20_3_violacion_H", $datos["sentencias_j20_3_violacion_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":sentencias_j20_3_violacion_T", $datos["sentencias_j20_3_violacion_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":sentencias_j20_3_trata_M", $datos["sentencias_j20_3_trata_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":sentencias_j20_3_trata_H", $datos["sentencias_j20_3_trata_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":sentencias_j20_3_trata_T", $datos["sentencias_j20_3_trata_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":sentencias_j20_3_corrup_M", $datos["sentencias_j20_3_corrup_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":sentencias_j20_3_corrup_H", $datos["sentencias_j20_3_corrup_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":sentencias_j20_3_corrup_T", $datos["sentencias_j20_3_corrup_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":sentencias_j20_3_traMen_M", $datos["sentencias_j20_3_traMen_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":sentencias_j20_3_traMen_H", $datos["sentencias_j20_3_traMen_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":sentencias_j20_3_traMen_T", $datos["sentencias_j20_3_traMen_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":sentencias_j20_3_otros", $datos["sentencias_j20_3_otros"], PDO::PARAM_STR);
			$stmt -> bindParam(":sentencias_j20_3_otros_M", $datos["sentencias_j20_3_otros_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":sentencias_j20_3_otros_H", $datos["sentencias_j20_3_otros_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":sentencias_j20_3_otros_T", $datos["sentencias_j20_3_otros_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":sentencias_j20_3_nosesabe", $datos["sentencias_j20_3_nosesabe"], PDO::PARAM_STR);

			$stmt -> bindParam(":sentencias_j20_4_suspenCond", $datos["sentencias_j20_4_suspenCond"], PDO::PARAM_STR);
			$stmt -> bindParam(":sentencias_j20_4_acuerdo", $datos["sentencias_j20_4_acuerdo"], PDO::PARAM_STR);
			$stmt -> bindParam(":sentencias_j20_4_otorPerd", $datos["sentencias_j20_4_otorPerd"], PDO::PARAM_STR);
			$stmt -> bindParam(":sentencias_j20_4_otrasDet", $datos["sentencias_j20_4_otrasDet"], PDO::PARAM_STR);

			$stmt -> bindParam(":sentencias_j20_5_confirmadas", $datos["sentencias_j20_5_confirmadas"], PDO::PARAM_STR);
			$stmt -> bindParam(":sentencias_j20_5_modificadas", $datos["sentencias_j20_5_modificadas"], PDO::PARAM_STR);
			$stmt -> bindParam(":sentencias_j20_5_revocadas", $datos["sentencias_j20_5_revocadas"], PDO::PARAM_STR);
			$stmt -> bindParam(":sentencias_j20_5_total", $datos["sentencias_j20_5_total"], PDO::PARAM_STR);

			$stmt -> bindParam(":amparos_j21_amparos", $datos["amparos_j21_amparos"], PDO::PARAM_STR);
			$stmt -> bindParam(":amparos_j21_1_concedidos", $datos["amparos_j21_1_concedidos"], PDO::PARAM_STR);
			$stmt -> bindParam(":amparos_j21_1_negados", $datos["amparos_j21_1_negados"], PDO::PARAM_STR);
			$stmt -> bindParam(":amparos_j21_1_sobreseidos", $datos["amparos_j21_1_sobreseidos"], PDO::PARAM_STR);
			$stmt -> bindParam(":amparos_j21_1_desechados", $datos["amparos_j21_1_desechados"], PDO::PARAM_STR);
			$stmt -> bindParam(":amparos_j21_1_otras", $datos["amparos_j21_1_otras"], PDO::PARAM_STR);
			$stmt -> bindParam(":amparos_j21_1_otrasCual", $datos["amparos_j21_1_otrasCual"], PDO::PARAM_STR);
			$stmt -> bindParam(":amparos_j21_1_total", $datos["amparos_j21_1_total"], PDO::PARAM_STR);

			$stmt -> bindParam(":preliberacional_j22_libCond_M", $datos["preliberacional_j22_libCond_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":preliberacional_j22_libCond_H", $datos["preliberacional_j22_libCond_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":preliberacional_j22_libCond_T", $datos["preliberacional_j22_libCond_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":preliberacional_j22_libAnt_M", $datos["preliberacional_j22_libAnt_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":preliberacional_j22_libAnt_H", $datos["preliberacional_j22_libAnt_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":preliberacional_j22_libAnt_T", $datos["preliberacional_j22_libAnt_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":preliberacional_j22_sustSusp_M", $datos["preliberacional_j22_sustSusp_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":preliberacional_j22_sustSusp_H", $datos["preliberacional_j22_sustSusp_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":preliberacional_j22_sustSusp_T", $datos["preliberacional_j22_sustSusp_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":preliberacional_j22_permHum_M", $datos["preliberacional_j22_permHum_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":preliberacional_j22_permHum_H", $datos["preliberacional_j22_permHum_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":preliberacional_j22_permHum_T", $datos["preliberacional_j22_permHum_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":preliberacional_j22_prelib_M", $datos["preliberacional_j22_prelib_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":preliberacional_j22_prelib_H", $datos["preliberacional_j22_prelib_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":preliberacional_j22_prelib_T", $datos["preliberacional_j22_prelib_T"], PDO::PARAM_STR);

			$stmt -> bindParam(":victimas_j23_mayor18_M", $datos["victimas_j23_mayor18_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":victimas_j23_mayor18_H", $datos["victimas_j23_mayor18_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":victimas_j23_mayor18_T", $datos["victimas_j23_mayor18_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":victimas_j23_menor18_M", $datos["victimas_j23_menor18_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":victimas_j23_menor18_H", $datos["victimas_j23_menor18_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":victimas_j23_menor18_T", $datos["victimas_j23_menor18_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":victimas_j23_total_M", $datos["victimas_j23_total_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":victimas_j23_total_H", $datos["victimas_j23_total_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":victimas_j23_total_T", $datos["victimas_j23_total_T"], PDO::PARAM_STR);

			$stmt -> bindParam(":victimas_j23_1_homicidio_M", $datos["victimas_j23_1_homicidio_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":victimas_j23_1_homicidio_H", $datos["victimas_j23_1_homicidio_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":victimas_j23_1_homicidio_T", $datos["victimas_j23_1_homicidio_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":victimas_j23_1_feminicidio_M", $datos["victimas_j23_1_feminicidio_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":victimas_j23_1_feminicidio_H", $datos["victimas_j23_1_feminicidio_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":victimas_j23_1_feminicidio_T", $datos["victimas_j23_1_feminicidio_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":victimas_j23_1_lesiones_M", $datos["victimas_j23_1_lesiones_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":victimas_j23_1_lesiones_H", $datos["victimas_j23_1_lesiones_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":victimas_j23_1_lesiones_T", $datos["victimas_j23_1_lesiones_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":victimas_j23_1_violFam_M", $datos["victimas_j23_1_violFam_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":victimas_j23_1_violFam_H", $datos["victimas_j23_1_violFam_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":victimas_j23_1_violFam_T", $datos["victimas_j23_1_violFam_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":victimas_j23_1_abuSex_M", $datos["victimas_j23_1_abuSex_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":victimas_j23_1_abuSex_H", $datos["victimas_j23_1_abuSex_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":victimas_j23_1_abuSex_T", $datos["victimas_j23_1_abuSex_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":victimas_j23_1_hostSex_M", $datos["victimas_j23_1_hostSex_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":victimas_j23_1_hostSex_H", $datos["victimas_j23_1_hostSex_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":victimas_j23_1_hostSex_T", $datos["victimas_j23_1_hostSex_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":victimas_j23_1_violacion_M", $datos["victimas_j23_1_violacion_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":victimas_j23_1_violacion_H", $datos["victimas_j23_1_violacion_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":victimas_j23_1_violacion_T", $datos["victimas_j23_1_violacion_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":victimas_j23_1_trata_M", $datos["victimas_j23_1_trata_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":victimas_j23_1_trata_H", $datos["victimas_j23_1_trata_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":victimas_j23_1_trata_T", $datos["victimas_j23_1_trata_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":victimas_j23_1_corrup_M", $datos["victimas_j23_1_corrup_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":victimas_j23_1_corrup_H", $datos["victimas_j23_1_corrup_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":victimas_j23_1_corrup_T", $datos["victimas_j23_1_corrup_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":victimas_j23_1_traMen_M", $datos["victimas_j23_1_traMen_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":victimas_j23_1_traMen_H", $datos["victimas_j23_1_traMen_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":victimas_j23_1_traMen_T", $datos["victimas_j23_1_traMen_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":victimas_j23_1_nosesabe", $datos["victimas_j23_1_nosesabe"], PDO::PARAM_STR);

			$stmt -> bindParam(":victimas_j23_2_buepra", $datos["victimas_j23_2_buepra"], PDO::PARAM_STR);
			$stmt -> bindParam(":victimas_j23_3_cuabuepra", $datos["victimas_j23_3_cuabuepra"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "La información se ha guardado exitosamente";

		}else{

			$arr = $stmt ->errorInfo();
			$arr[3]="ERROR";
			return $arr[2];

		}

		$stmt -> close();

		$stmt = null;

	}

	/*=============================================
	EDITAR tab 9
	=============================================*/

	static public function mdlEditarFJuecesTab9($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET

				justicia_j24_mesas = :justicia_j24_mesas

			, justicia_j24_1_segobedo = :justicia_j24_1_segobedo
			, justicia_j24_1_uasj = :justicia_j24_1_uasj
			, justicia_j24_1_presitsje = :justicia_j24_1_presitsje
			, justicia_j24_1_fiscalprocu = :justicia_j24_1_fiscalprocu
			, justicia_j24_1_ssp = :justicia_j24_1_ssp
			, justicia_j24_1_ide = :justicia_j24_1_ide
			, justicia_j24_1_peni = :justicia_j24_1_peni
			, justicia_j24_1_medidasCau = :justicia_j24_1_medidasCau
			, justicia_j24_1_iem = :justicia_j24_1_iem
			, justicia_j24_1_difEst = :justicia_j24_1_difEst
			, justicia_j24_1_sipinna = :justicia_j24_1_sipinna
			, justicia_j24_1_salud = :justicia_j24_1_salud
			, justicia_j24_1_asesoresJur = :justicia_j24_1_asesoresJur
			, justicia_j24_1_justMuj = :justicia_j24_1_justMuj
			, justicia_j24_1_delGene = :justicia_j24_1_delGene
			, justicia_j24_1_direPeni = :justicia_j24_1_direPeni
			, justicia_j24_1_direInteAd = :justicia_j24_1_direInteAd
			, justicia_j24_1_mecaAlt = :justicia_j24_1_mecaAlt
			, justicia_j24_1_periFor = :justicia_j24_1_periFor
			, justicia_j24_1_otros = :justicia_j24_1_otros
			, justicia_j24_1_otrosCua = :justicia_j24_1_otrosCua
			, justicia_j24_1_noaplica = :justicia_j24_1_noaplica
			, justicia_j24_1_nosesabe = :justicia_j24_1_nosesabe

			, justicia_j24_2_semanal = :justicia_j24_2_semanal
			, justicia_j24_2_quincenal = :justicia_j24_2_quincenal
			, justicia_j24_2_mensual = :justicia_j24_2_mensual
			, justicia_j24_2_bimestral = :justicia_j24_2_bimestral
			, justicia_j24_2_trimestral = :justicia_j24_2_trimestral
			, justicia_j24_2_semestral = :justicia_j24_2_semestral
			, justicia_j24_2_anual = :justicia_j24_2_anual
			, justicia_j24_2_noaplica = :justicia_j24_2_noaplica
			, justicia_j24_2_nosesabe = :justicia_j24_2_nosesabe

			, justicia_j24_3_buepra = :justicia_j24_3_buepra

			, impacto_j25_medidasPrev = :impacto_j25_medidasPrev

			, impacto_j25_1_desc = :impacto_j25_1_desc

			, impacto_j25__2_medidasInn = :impacto_j25__2_medidasInn

			, impacto_j25_3_desc = :impacto_j25_3_desc

			, terapeutica_j26_justTer = :terapeutica_j26_justTer
			, terapeutica_j26_justTer_noaplica = :terapeutica_j26_justTer_noaplica
			, terapeutica_j26_justTer_nosesabe = :terapeutica_j26_justTer_nosesabe

			, terapeutica_j26_1_psicoa_M = :terapeutica_j26_1_psicoa_M
			, terapeutica_j26_1_psicoa_H = :terapeutica_j26_1_psicoa_H
			, terapeutica_j26_1_psicoa_T = :terapeutica_j26_1_psicoa_T

			, terapeutica_j26_1_psicoa_noaplica = :terapeutica_j26_1_psicoa_noaplica

			, terapeutica_j26_2_proJustTer_M = :terapeutica_j26_2_proJustTer_M
			, terapeutica_j26_2_proJustTer_H = :terapeutica_j26_2_proJustTer_H
			, terapeutica_j26_2_proJustTer_T = :terapeutica_j26_2_proJustTer_T

			, terapeutica_j26_2_proJustTer_noaplica = :terapeutica_j26_2_proJustTer_noaplica

			, terapeutica_j26_3_egresoJustTer_M = :terapeutica_j26_3_egresoJustTer_M
			, terapeutica_j26_3_egresoJustTer_H = :terapeutica_j26_3_egresoJustTer_H
			, terapeutica_j26_3_egresoJustTer_T = :terapeutica_j26_3_egresoJustTer_T

			, terapeutica_j26_3_noaplica = :terapeutica_j26_3_noaplica

			, terapeutica_j26_4_bajaVol_M = :terapeutica_j26_4_bajaVol_M
			, terapeutica_j26_4_bajaVol_H = :terapeutica_j26_4_bajaVol_H
			, terapeutica_j26_4_bajaVol_T = :terapeutica_j26_4_bajaVol_T

			, terapeutica_j26_4_expul_M = :terapeutica_j26_4_expul_M
			, terapeutica_j26_4_expul_H = :terapeutica_j26_4_expul_H
			, terapeutica_j26_4_expul_T = :terapeutica_j26_4_expul_T

			, terapeutica_j26_4_total_M = :terapeutica_j26_4_total_M
			, terapeutica_j26_4_total_H = :terapeutica_j26_4_total_H
			, terapeutica_j26_4_total_T = :terapeutica_j26_4_total_T
			, terapeutica_j26_4_noaplica = :terapeutica_j26_4_noaplica

			, terapeutica_j26_5_ejeSen_M = :terapeutica_j26_5_ejeSen_M
			, terapeutica_j26_5_ejeSen_H = :terapeutica_j26_5_ejeSen_H
			, terapeutica_j26_5_ejeSen_T = :terapeutica_j26_5_ejeSen_T

			, terapeutica_j26_5_procAbr_M = :terapeutica_j26_5_procAbr_M
			, terapeutica_j26_5_procAbr_H = :terapeutica_j26_5_procAbr_H
			, terapeutica_j26_5_procAbr_T = :terapeutica_j26_5_procAbr_T

			, terapeutica_j26_5_solAlt_M = :terapeutica_j26_5_solAlt_M
			, terapeutica_j26_5_solAlt_H = :terapeutica_j26_5_solAlt_H
			, terapeutica_j26_5_solAlt_T = :terapeutica_j26_5_solAlt_T
			, terapeutica_j26_5_noaplica = :terapeutica_j26_5_noaplica

			, terapeutica_j26_6_acuRep_M = :terapeutica_j26_6_acuRep_M
			, terapeutica_j26_6_acuRep_H = :terapeutica_j26_6_acuRep_H
			, terapeutica_j26_6_acuRep_T = :terapeutica_j26_6_acuRep_T

			, terapeutica_j26_6_suspCon_M = :terapeutica_j26_6_suspCon_M
			, terapeutica_j26_6_suspCon_H = :terapeutica_j26_6_suspCon_H
			, terapeutica_j26_6_suspCon_T = :terapeutica_j26_6_suspCon_T
			, terapeutica_j26_6_noaplica = :terapeutica_j26_6_noaplica

			, terapeutica_j26_7_firmado_M = :terapeutica_j26_7_firmado_M
			, terapeutica_j26_7_firmado_H = :terapeutica_j26_7_firmado_H
			, terapeutica_j26_7_firmado_T = :terapeutica_j26_7_firmado_T

			, terapeutica_j26_7_tramite_M = :terapeutica_j26_7_tramite_M
			, terapeutica_j26_7_tramite_H = :terapeutica_j26_7_tramite_H
			, terapeutica_j26_7_tramite_T = :terapeutica_j26_7_tramite_T
			, terapeutica_j26_7_noaplica = :terapeutica_j26_7_noaplica

			, terapeutica_j26_8_susp_M = :terapeutica_j26_8_susp_M
			, terapeutica_j26_8_susp_H = :terapeutica_j26_8_susp_H
			, terapeutica_j26_8_susp_T = :terapeutica_j26_8_susp_T

			, terapeutica_j26_8_prorro_M = :terapeutica_j26_8_prorro_M
			, terapeutica_j26_8_prorro_H = :terapeutica_j26_8_prorro_H
			, terapeutica_j26_8_prorro_T = :terapeutica_j26_8_prorro_T

			, terapeutica_j26_8_cond_M = :terapeutica_j26_8_cond_M
			, terapeutica_j26_8_cond_H = :terapeutica_j26_8_cond_H
			, terapeutica_j26_8_cond_T = :terapeutica_j26_8_cond_T

			, terapeutica_j26_8_incum_M = :terapeutica_j26_8_incum_M
			, terapeutica_j26_8_incum_H = :terapeutica_j26_8_incum_H
			, terapeutica_j26_8_incum_T = :terapeutica_j26_8_incum_T

			, terapeutica_j26_8_otras = :terapeutica_j26_8_otras
			, terapeutica_j26_8_otras_M = :terapeutica_j26_8_otras_M
			, terapeutica_j26_8_otras_H = :terapeutica_j26_8_otras_H
			, terapeutica_j26_8_otras_T = :terapeutica_j26_8_otras_T
			, terapeutica_j26_8_noaplica = :terapeutica_j26_8_noaplica

			, terapeutica_j26_9_imputadas_M = :terapeutica_j26_9_imputadas_M
			, terapeutica_j26_9_imputadas_H = :terapeutica_j26_9_imputadas_H
			, terapeutica_j26_9_imputadas_T = :terapeutica_j26_9_imputadas_T
			, terapeutica_j26_9_imputadas_noapli = :terapeutica_j26_9_imputadas_noapli

			WHERE id = :idFormulario");

			$stmt -> bindParam(":idFormulario", $datos["idFormulario"], PDO::PARAM_STR);

			$stmt -> bindParam(":justicia_j24_mesas", $datos["justicia_j24_mesas"], PDO::PARAM_STR);
			$stmt -> bindParam(":justicia_j24_1_segobedo", $datos["justicia_j24_1_segobedo"], PDO::PARAM_STR);
			$stmt -> bindParam(":justicia_j24_1_uasj", $datos["justicia_j24_1_uasj"], PDO::PARAM_STR);
			$stmt -> bindParam(":justicia_j24_1_presitsje", $datos["justicia_j24_1_presitsje"], PDO::PARAM_STR);
			$stmt -> bindParam(":justicia_j24_1_fiscalprocu", $datos["justicia_j24_1_fiscalprocu"], PDO::PARAM_STR);
			$stmt -> bindParam(":justicia_j24_1_ssp", $datos["justicia_j24_1_ssp"], PDO::PARAM_STR);
			$stmt -> bindParam(":justicia_j24_1_ide", $datos["justicia_j24_1_ide"], PDO::PARAM_STR);
			$stmt -> bindParam(":justicia_j24_1_peni", $datos["justicia_j24_1_peni"], PDO::PARAM_STR);
			$stmt -> bindParam(":justicia_j24_1_medidasCau", $datos["justicia_j24_1_medidasCau"], PDO::PARAM_STR);
			$stmt -> bindParam(":justicia_j24_1_iem", $datos["justicia_j24_1_iem"], PDO::PARAM_STR);
			$stmt -> bindParam(":justicia_j24_1_difEst", $datos["justicia_j24_1_difEst"], PDO::PARAM_STR);
			$stmt -> bindParam(":justicia_j24_1_sipinna", $datos["justicia_j24_1_sipinna"], PDO::PARAM_STR);
			$stmt -> bindParam(":justicia_j24_1_salud", $datos["justicia_j24_1_salud"], PDO::PARAM_STR);
			$stmt -> bindParam(":justicia_j24_1_asesoresJur", $datos["justicia_j24_1_asesoresJur"], PDO::PARAM_STR);
			$stmt -> bindParam(":justicia_j24_1_justMuj", $datos["justicia_j24_1_justMuj"], PDO::PARAM_STR);
			$stmt -> bindParam(":justicia_j24_1_delGene", $datos["justicia_j24_1_delGene"], PDO::PARAM_STR);
			$stmt -> bindParam(":justicia_j24_1_direPeni", $datos["justicia_j24_1_direPeni"], PDO::PARAM_STR);
			$stmt -> bindParam(":justicia_j24_1_direInteAd", $datos["justicia_j24_1_direInteAd"], PDO::PARAM_STR);
			$stmt -> bindParam(":justicia_j24_1_mecaAlt", $datos["justicia_j24_1_mecaAlt"], PDO::PARAM_STR);
			$stmt -> bindParam(":justicia_j24_1_periFor", $datos["justicia_j24_1_periFor"], PDO::PARAM_STR);
			$stmt -> bindParam(":justicia_j24_1_otros", $datos["justicia_j24_1_otros"], PDO::PARAM_STR);
			$stmt -> bindParam(":justicia_j24_1_otrosCua", $datos["justicia_j24_1_otrosCua"], PDO::PARAM_STR);
			$stmt -> bindParam(":justicia_j24_1_noaplica", $datos["justicia_j24_1_noaplica"], PDO::PARAM_STR);
			$stmt -> bindParam(":justicia_j24_1_nosesabe", $datos["justicia_j24_1_nosesabe"], PDO::PARAM_STR);

			$stmt -> bindParam(":justicia_j24_2_semanal", $datos["justicia_j24_2_semanal"], PDO::PARAM_STR);
			$stmt -> bindParam(":justicia_j24_2_quincenal", $datos["justicia_j24_2_quincenal"], PDO::PARAM_STR);
			$stmt -> bindParam(":justicia_j24_2_mensual", $datos["justicia_j24_2_mensual"], PDO::PARAM_STR);
			$stmt -> bindParam(":justicia_j24_2_bimestral", $datos["justicia_j24_2_bimestral"], PDO::PARAM_STR);
			$stmt -> bindParam(":justicia_j24_2_trimestral", $datos["justicia_j24_2_trimestral"], PDO::PARAM_STR);
			$stmt -> bindParam(":justicia_j24_2_semestral", $datos["justicia_j24_2_semestral"], PDO::PARAM_STR);
			$stmt -> bindParam(":justicia_j24_2_anual", $datos["justicia_j24_2_anual"], PDO::PARAM_STR);
			$stmt -> bindParam(":justicia_j24_2_noaplica", $datos["justicia_j24_2_noaplica"], PDO::PARAM_STR);
			$stmt -> bindParam(":justicia_j24_2_nosesabe", $datos["justicia_j24_2_nosesabe"], PDO::PARAM_STR);

			$stmt -> bindParam(":justicia_j24_3_buepra", $datos["justicia_j24_3_buepra"], PDO::PARAM_STR);

			$stmt -> bindParam(":impacto_j25_medidasPrev", $datos["impacto_j25_medidasPrev"], PDO::PARAM_STR);

			$stmt -> bindParam(":impacto_j25_1_desc", $datos["impacto_j25_1_desc"], PDO::PARAM_STR);

			$stmt -> bindParam(":impacto_j25__2_medidasInn", $datos["impacto_j25__2_medidasInn"], PDO::PARAM_STR);

			$stmt -> bindParam(":impacto_j25_3_desc", $datos["impacto_j25_3_desc"], PDO::PARAM_STR);

			$stmt -> bindParam(":terapeutica_j26_justTer", $datos["terapeutica_j26_justTer"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_j26_justTer_noaplica", $datos["terapeutica_j26_justTer_noaplica"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_j26_justTer_nosesabe", $datos["terapeutica_j26_justTer_nosesabe"], PDO::PARAM_STR);

			$stmt -> bindParam(":terapeutica_j26_1_psicoa_M", $datos["terapeutica_j26_1_psicoa_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_j26_1_psicoa_H", $datos["terapeutica_j26_1_psicoa_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_j26_1_psicoa_T", $datos["terapeutica_j26_1_psicoa_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_j26_1_psicoa_noaplica", $datos["terapeutica_j26_1_psicoa_noaplica"], PDO::PARAM_STR);

			$stmt -> bindParam(":terapeutica_j26_2_proJustTer_M", $datos["terapeutica_j26_2_proJustTer_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_j26_2_proJustTer_H", $datos["terapeutica_j26_2_proJustTer_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_j26_2_proJustTer_T", $datos["terapeutica_j26_2_proJustTer_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_j26_2_proJustTer_noaplica", $datos["terapeutica_j26_2_proJustTer_noaplica"], PDO::PARAM_STR);

			$stmt -> bindParam(":terapeutica_j26_3_egresoJustTer_M", $datos["terapeutica_j26_3_egresoJustTer_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_j26_3_egresoJustTer_H", $datos["terapeutica_j26_3_egresoJustTer_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_j26_3_egresoJustTer_T", $datos["terapeutica_j26_3_egresoJustTer_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_j26_3_noaplica", $datos["terapeutica_j26_3_noaplica"], PDO::PARAM_STR);

			$stmt -> bindParam(":terapeutica_j26_4_bajaVol_M", $datos["terapeutica_j26_4_bajaVol_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_j26_4_bajaVol_H", $datos["terapeutica_j26_4_bajaVol_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_j26_4_bajaVol_T", $datos["terapeutica_j26_4_bajaVol_T"], PDO::PARAM_STR);

			$stmt -> bindParam(":terapeutica_j26_4_expul_M", $datos["terapeutica_j26_4_expul_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_j26_4_expul_H", $datos["terapeutica_j26_4_expul_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_j26_4_expul_T", $datos["terapeutica_j26_4_expul_T"], PDO::PARAM_STR);

			$stmt -> bindParam(":terapeutica_j26_4_total_M", $datos["terapeutica_j26_4_total_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_j26_4_total_H", $datos["terapeutica_j26_4_total_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_j26_4_total_T", $datos["terapeutica_j26_4_total_T"], PDO::PARAM_STR);

			$stmt -> bindParam(":terapeutica_j26_4_noaplica", $datos["terapeutica_j26_4_noaplica"], PDO::PARAM_STR);

			$stmt -> bindParam(":terapeutica_j26_5_ejeSen_M", $datos["terapeutica_j26_5_ejeSen_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_j26_5_ejeSen_H", $datos["terapeutica_j26_5_ejeSen_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_j26_5_ejeSen_T", $datos["terapeutica_j26_5_ejeSen_T"], PDO::PARAM_STR);

			$stmt -> bindParam(":terapeutica_j26_5_procAbr_M", $datos["terapeutica_j26_5_procAbr_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_j26_5_procAbr_H", $datos["terapeutica_j26_5_procAbr_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_j26_5_procAbr_T", $datos["terapeutica_j26_5_procAbr_T"], PDO::PARAM_STR);

			$stmt -> bindParam(":terapeutica_j26_5_solAlt_M", $datos["terapeutica_j26_5_solAlt_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_j26_5_solAlt_H", $datos["terapeutica_j26_5_solAlt_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_j26_5_solAlt_T", $datos["terapeutica_j26_5_solAlt_T"], PDO::PARAM_STR);

			$stmt -> bindParam(":terapeutica_j26_5_noaplica", $datos["terapeutica_j26_5_noaplica"], PDO::PARAM_STR);

			$stmt -> bindParam(":terapeutica_j26_6_acuRep_M", $datos["terapeutica_j26_6_acuRep_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_j26_6_acuRep_H", $datos["terapeutica_j26_6_acuRep_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_j26_6_acuRep_T", $datos["terapeutica_j26_6_acuRep_T"], PDO::PARAM_STR);

			$stmt -> bindParam(":terapeutica_j26_6_suspCon_M", $datos["terapeutica_j26_6_suspCon_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_j26_6_suspCon_H", $datos["terapeutica_j26_6_suspCon_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_j26_6_suspCon_T", $datos["terapeutica_j26_6_suspCon_T"], PDO::PARAM_STR);

			$stmt -> bindParam(":terapeutica_j26_6_noaplica", $datos["terapeutica_j26_6_noaplica"], PDO::PARAM_STR);

			$stmt -> bindParam(":terapeutica_j26_7_firmado_M", $datos["terapeutica_j26_7_firmado_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_j26_7_firmado_H", $datos["terapeutica_j26_7_firmado_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_j26_7_firmado_T", $datos["terapeutica_j26_7_firmado_T"], PDO::PARAM_STR);

			$stmt -> bindParam(":terapeutica_j26_7_tramite_M", $datos["terapeutica_j26_7_tramite_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_j26_7_tramite_H", $datos["terapeutica_j26_7_tramite_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_j26_7_tramite_T", $datos["terapeutica_j26_7_tramite_T"], PDO::PARAM_STR);

			$stmt -> bindParam(":terapeutica_j26_7_noaplica", $datos["terapeutica_j26_7_noaplica"], PDO::PARAM_STR);

			$stmt -> bindParam(":terapeutica_j26_8_susp_M", $datos["terapeutica_j26_8_susp_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_j26_8_susp_H", $datos["terapeutica_j26_8_susp_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_j26_8_susp_T", $datos["terapeutica_j26_8_susp_T"], PDO::PARAM_STR);

			$stmt -> bindParam(":terapeutica_j26_8_prorro_M", $datos["terapeutica_j26_8_prorro_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_j26_8_prorro_H", $datos["terapeutica_j26_8_prorro_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_j26_8_prorro_T", $datos["terapeutica_j26_8_prorro_T"], PDO::PARAM_STR);

			$stmt -> bindParam(":terapeutica_j26_8_cond_M", $datos["terapeutica_j26_8_cond_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_j26_8_cond_H", $datos["terapeutica_j26_8_cond_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_j26_8_cond_T", $datos["terapeutica_j26_8_cond_T"], PDO::PARAM_STR);

			$stmt -> bindParam(":terapeutica_j26_8_incum_M", $datos["terapeutica_j26_8_incum_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_j26_8_incum_H", $datos["terapeutica_j26_8_incum_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_j26_8_incum_T", $datos["terapeutica_j26_8_incum_T"], PDO::PARAM_STR);

			$stmt -> bindParam(":terapeutica_j26_8_otras", $datos["terapeutica_j26_8_otras"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_j26_8_otras_M", $datos["terapeutica_j26_8_otras_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_j26_8_otras_H", $datos["terapeutica_j26_8_otras_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_j26_8_otras_T", $datos["terapeutica_j26_8_otras_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_j26_8_noaplica", $datos["terapeutica_j26_8_noaplica"], PDO::PARAM_STR);

			$stmt -> bindParam(":terapeutica_j26_9_imputadas_M", $datos["terapeutica_j26_9_imputadas_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_j26_9_imputadas_H", $datos["terapeutica_j26_9_imputadas_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_j26_9_imputadas_T", $datos["terapeutica_j26_9_imputadas_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_j26_9_imputadas_noapli", $datos["terapeutica_j26_9_imputadas_noapli"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "La información se ha guardado exitosamente";

		}else{

			$arr = $stmt ->errorInfo();
			$arr[3]="ERROR";
			return $arr[2];

		}

		$stmt -> close();

		$stmt = null;

	}



	/*=============================================
	EDITAR tab 10
	=============================================*/

	static public function mdlEditarFJuecesTab10($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE jueces SET
				estatus = 1

			WHERE id = :idFormulario");

			$stmt -> bindParam(":idFormulario",$datos, PDO::PARAM_INT);


		if($stmt->execute()){

			return "La información se ha guardado exitosamente";

		}else{

			$arr = $stmt ->errorInfo();
			$arr[3]="ERROR";
			return $arr[2];

		}

		$stmt -> close();

		$stmt = null;

	}

	}


}
