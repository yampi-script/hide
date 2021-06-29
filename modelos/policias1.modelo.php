<?php
require_once "conexion.php";

class ModeloPolicias{

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
	MOSTRAR POLICIAS
	=============================================*/

	static public function mdlMostrarPolicias($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT *

													FROM policias a WHERE $item = :valor");

			$stmt -> bindParam(":valor", $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetchAll();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT *

													FROM $tabla policias");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}


		$stmt -> close();

		$stmt = null;

	}


/*=============================================
	MOSTRAR POLICIAS ID
	=============================================*/

	static public function mdlMostrarPoliciasID($item, $valor){



		$stmt = Conexion::conectar()->prepare("SELECT id
			,pcontacto
			,cargo
			,area
			,mail
			,telofi
			,ext
			,telextra
			,estatus

			,pcontacto2
			,cargo2
			,area2
			,mail2
			,telofi2
			,ext2
			,telextra2



			,personal_p1_totalp_M
			,personal_p1_totalp_H
			,personal_p1_totalp_T

			,personal_p1_invyanali_M
			,personal_p1_invyanali_H
			,personal_p1_invyanali_T


			,personal_p1_inte_M
			,personal_p1_inte_H
			,personal_p1_inte_T

			,personal_p1_reacc_M
			,personal_p1_reacc_H
			,personal_p1_reacc_T

			,personal_p1_proce_M
			,personal_p1_proce_H
			,personal_p1_proce_T

			,personal_p1_segycuspen_M
			,personal_p1_segycuspen_H
			,personal_p1_segycuspen_T

			,personal_p1_preven_M
			,personal_p1_preven_H
			,personal_p1_preven_T

			,personal_p1_prirespon_M
			,personal_p1_prirespon_H
			,personal_p1_prirespon_T

			,personal_p1_otros
			,personal_p1_otros_M
			,personal_p1_otros_H
			,personal_p1_otros_T

			,personal_p1_total_M
			,personal_p1_total_H
			,personal_p1_total_T



			,personal_p1_totalp_M
			,personal_p1_totalp_H
			,personal_p1_totalp_T

			,personal_p1_siningre_M
			,personal_p1_siningre_H
			,personal_p1_siningre_T



			,personal_p1_de1a5000_M
			,personal_p1_de1a5000_H
			,personal_p1_de1a5000_T

			,personal_p1_de5001a10000_M
			,personal_p1_de5001a10000_H
			,personal_p1_de5001a10000_T

			,personal_p1_de10001a15000_M
			,personal_p1_de10001a15000_H
			,personal_p1_de10001a15000_T

			,personal_p1_de15001a20000_M
			,personal_p1_de15001a20000_H
			,personal_p1_de15001a20000_T

			,personal_p1_de20001a25000_M
			,personal_p1_de20001a25000_H
			,personal_p1_de20001a25000_T

			,personal_p1_de25001a30000_M
			,personal_p1_de25001a30000_H
			,personal_p1_de25001a30000_T

			,personal_p1_de30001a35000_M
			,personal_p1_de30001a35000_H
			,personal_p1_de30001a35000_T

			,personal_p1_de35001a40000_M
			,personal_p1_de35001a40000_H
			,personal_p1_de35001a40000_T

			,personal_p1_de40001a45000_M
			,personal_p1_de40001a45000_H
			,personal_p1_de40001a45000_T

			,personal_p1_de45001a50000_M
			,personal_p1_de45001a50000_H
			,personal_p1_de45001a50000_T

			,personal_p1_masde50000_M
			,personal_p1_masde50000_H
			,personal_p1_masde50000_T

			,personal_p1_2_ning_M
			,personal_p1_2_ning_H
			,personal_p1_2_ning_T


			,personal_p1_2_prees_M
			,personal_p1_2_prees_H
			,personal_p1_2_prees_T

			,personal_p1_2_prim_M
			,personal_p1_2_prim_H
			,personal_p1_2_prim_T

			,personal_p1_2_secu_M
			,personal_p1_2_secu_H
			,personal_p1_2_secu_T

			,personal_p1_2_ctsect_M
			,personal_p1_2_ctsect_H
			,personal_p1_2_ctsect_T

			,personal_p1_2_nbasica_M
			,personal_p1_2_nbasica_H
			,personal_p1_2_nbasica_T

			,personal_p1_2_preobach_M
			,personal_p1_2_preobach_H
			,personal_p1_2_preobach_T

			,personal_p1_2_ctcpret_M
			,personal_p1_2_ctcpret_H
			,personal_p1_2_ctcpret_T

			,personal_p1_2_licoprof_M
			,personal_p1_2_licoprof_H
			,personal_p1_2_licoprof_T

			,personal_p1_2_maesdoc_M
			,personal_p1_2_maesdoc_H
			,personal_p1_2_maesdoc_T

			,personal_p1_2_total_M
			,personal_p1_2_total_H
			,personal_p1_2_total_T
			,personal_p1_2_nosesabe
				,personal_p1_3_nosesabe
				,capacitacion_p2s

			,capacitacion_p2
			,capacitacion_p2_1_nom
			,capacitacion_p2_2_aul
			,capacitacion_p2_2_comp
			,capacitacion_p2_2_juor
			,capacitacion_p2_2_come
			,capacitacion_p2_2_coci
			,capacitacion_p2_2_dorm
			,capacitacion_p2_2_pruf
			,capacitacion_p2_2_auvis
			,capacitacion_p2_2_medi
			,capacitacion_p2_2_tirof
			,capacitacion_p2_2_tirov
			,capacitacion_p2_2_entre
			,capacitacion_p2_2_vehi
			,capacitacion_p2_2_unif
			,capacitacion_p2_2_otro
			,capacitacion_p2_2_otro_cual

			,capacitacion_p2_3_invyanali_M
			,capacitacion_p2_3_invyanali_H
			,capacitacion_p2_3_invyanali_T

			,capacitacion_p2_3_inte_M
			,capacitacion_p2_3_inte_H
			,capacitacion_p2_3_inte_T

			,capacitacion_p2_3_reacc_M
			,capacitacion_p2_3_reacc_H
			,capacitacion_p2_3_reacc_T

			,capacitacion_p2_3_proce_M
			,capacitacion_p2_3_proce_H
			,capacitacion_p2_3_proce_T

			,capacitacion_p2_3_segycuspen_M
			,capacitacion_p2_3_segycuspen_H
			,capacitacion_p2_3_segycuspen_T

			,capacitacion_p2_3_preven_M
			,capacitacion_p2_3_preven_H
			,capacitacion_p2_3_preven_T

			,capacitacion_p2_3_prirespon_M
			,capacitacion_p2_3_prirespon_H
			,capacitacion_p2_3_prirespon_T


			,capacitacion_p2_4_majudlacpo_M
			,capacitacion_p2_4_majudlacpo_H
			,capacitacion_p2_4_majudlacpo_T

			,capacitacion_p2_4_prdedeypaci_M
			,capacitacion_p2_4_prdedeypaci_H
			,capacitacion_p2_4_prdedeypaci_T

			,capacitacion_p2_4_dehuygain_M
			,capacitacion_p2_4_dehuygain_H
			,capacitacion_p2_4_dehuygain_T

			,capacitacion_p2_4_realsipejupeac_M
			,capacitacion_p2_4_realsipejupeac_H
			,capacitacion_p2_4_realsipejupeac_T

			,capacitacion_p2_4_prdeludeloheodeha_M
			,capacitacion_p2_4_prdeludeloheodeha_H
			,capacitacion_p2_4_prdeludeloheodeha_T

			,capacitacion_p2_4_idldlhodhymdeeoddp_M
			,capacitacion_p2_4_idldlhodhymdeeoddp_H
			,capacitacion_p2_4_idldlhodhymdeeoddp_T

			,capacitacion_p2_4_cadecu_M
			,capacitacion_p2_4_cadecu_H
			,capacitacion_p2_4_cadecu_T

			,capacitacion_p2_4_enates_M
			,capacitacion_p2_4_enates_H
			,capacitacion_p2_4_enates_T

			,capacitacion_p2_4_usledelafu_M
			,capacitacion_p2_4_usledelafu_H
			,capacitacion_p2_4_usledelafu_T

			,capacitacion_p2_4_inves_M
			,capacitacion_p2_4_inves_H
			,capacitacion_p2_4_inves_T

			,capacitacion_p2_4_prres_M
			,capacitacion_p2_4_prres_H
			,capacitacion_p2_4_prres_T

			,capacitacion_p2_4_inpoho_M
			,capacitacion_p2_4_inpoho_H
			,capacitacion_p2_4_inpoho_T

			,capacitacion_p2_4_especia_M
			,capacitacion_p2_4_especia_H
			,capacitacion_p2_4_especia_T

			,capacitacion_p2_4_actualiza_M
			,capacitacion_p2_4_actualiza_H
			,capacitacion_p2_4_actualiza_T

			,capacitacion_p2_4_sidejupeacu_M
			,capacitacion_p2_4_sidejupeacu_H
			,capacitacion_p2_4_sidejupeacu_T

			,capacitacion_p2_4_depro_M
			,capacitacion_p2_4_depro_H
			,capacitacion_p2_4_depro_T

			,capacitacion_p2_4_femeni_M
			,capacitacion_p2_4_femeni_H
			,capacitacion_p2_4_femeni_T

			,capacitacion_p2_4_antrdepe_M
			,capacitacion_p2_4_antrdepe_H
			,capacitacion_p2_4_antrdepe_T

			,capacitacion_p2_4_vicolamu_M
			,capacitacion_p2_4_vicolamu_H
			,capacitacion_p2_4_vicolamu_T

			,capacitacion_p2_4_predege_M
			,capacitacion_p2_4_predege_H
			,capacitacion_p2_4_predege_T

			,capacitacion_p2_4_ascoydedeex_M
			,capacitacion_p2_4_ascoydedeex_H
			,capacitacion_p2_4_ascoydedeex_T

			,capacitacion_p2_4_siindejupepaad_M
			,capacitacion_p2_4_siindejupepaad_H
			,capacitacion_p2_4_siindejupepaad_T

			,capacitacion_p2_4_ataperin_M
			,capacitacion_p2_4_ataperin_H
			,capacitacion_p2_4_ataperin_T

			,capacitacion_p2_4_atapercondis_M
			,capacitacion_p2_4_atapercondis_H
			,capacitacion_p2_4_atapercondis_T

			,capacitacion_p2_4_jusalt_M
			,capacitacion_p2_4_jusalt_H
			,capacitacion_p2_4_jusalt_T

			,capacitacion_p2_4_justera_M
			,capacitacion_p2_4_justera_H
			,capacitacion_p2_4_justera_T

			,capacitacion_p2_4_justransi_M
			,capacitacion_p2_4_justransi_H
			,capacitacion_p2_4_justransi_T

			,capacitacion_p2_4_atemuj_M
			,capacitacion_p2_4_atemuj_H
			,capacitacion_p2_4_atemuj_T


			,capacitacion_p2_4_otros
			,capacitacion_p2_4_otros_M
			,capacitacion_p2_4_otros_H
			,capacitacion_p2_4_otros_T
			,capacitacion_p2_5_instuprga

			,capacitacion_p2_6_evconconf_M
			,capacitacion_p2_6_evconconf_H
			,capacitacion_p2_6_evconconf_T

			,presupuesto_p3
			,presupuestop3_1_anuaeje20
			,presupuestop3_2_anuaeje20



			,mujeres_p4_protoInterna
			,mujeres_p4_protoInterna_cual
			,mujeres_p4_interno
			,mujeres_p4_interno_cua
			,mujeres_p4_protoInvmipp
			,mujeres_p4_protoScjn
			,mujeres_p4_ninguno
			,mujeres_p4_otroProtocolo
			,mujeres_p4_otroProtocolo_cual

			,mujeres_p4_1_buenprac

			,mujeres_p4_2_cualBuenprac

			,mujeres_p4_3_justmuj_M
			,mujeres_p4_3_justmuj_H
			,mujeres_p4_3_justmuj_T

			,nna_p5_protoInterna
			,nna_p5_protoInterna_cual
			,nna_p5_interno
			,nna_p5_interno_cua
			,nna_p5_protoAteninte
			,nna_p5_protoActjust
			,nna_p5_ninguno
			,nna_p5_otroProtocolo
			,nna_p5_otroProtocolo_cual


			,nna_p5_1_buenpracs

			,nna_p5_2_cualBuenpract
			,ja_p5_3_espejust_M
			,ja_p5_3_espejust_H
			,ja_p5_3_espejust_T


			,indigenas_p6_tradulenind

			,indigenas_p6_1_nahuatl_M
			,indigenas_p6_1_nahuatl_H
			,indigenas_p6_1_nahuatl_T
			,indigenas_p6_1_maya_M
			,indigenas_p6_1_maya_H
			,indigenas_p6_1_maya_T
			,indigenas_p6_1_tseltal_M
			,indigenas_p6_1_tseltal_H
			,indigenas_p6_1_tseltal_T
			,indigenas_p6_1_mixteco_M
			,indigenas_p6_1_mixteco_H
			,indigenas_p6_1_mixteco_T
      ,indigenas_p6_1_tsotsil_M
			,indigenas_p6_1_tsotsil_H
			,indigenas_p6_1_tsotsil_T
			,indigenas_p6_1_otro
			,indigenas_p6_1_otro_M
			,indigenas_p6_1_otro_H
			,indigenas_p6_1_otro_T


			,indigenas_p6_2_convenio

			,indigenas_p6_2_nombinst

			,indigenas_p6_4_ProtoInter
			,indigenas_p6_4_ProtoInter_cual
			,indigenas_p6_4_interno
			,indigenas_p6_4_interno_cual
			,indigenas_p6_4_ProtoImpjust
			,indigenas_p6_4_ninguno
			,indigenas_p6_4_otro
			,indigenas_p6_4_otro_cual


			,indigenas_p6_5_buenaspract

		  ,indigenas_p6_6_cualbuenaspra

			,extranjeras_p7_tradLenExt

			,extranjeras_p7_1_ingles_M
			,extranjeras_p7_1_ingles_H
			,extranjeras_p7_1_ingles_T
			,extranjeras_p7_1_chino_M
			,extranjeras_p7_1_chino_H
			,extranjeras_p7_1_chino_T
			,extranjeras_p7_1_frances_M
			,extranjeras_p7_1_frances_H
			,extranjeras_p7_1_frances_T
			,extranjeras_p7_1_arabe_M
			,extranjeras_p7_1_arabe_H
			,extranjeras_p7_1_arabe_T
			,extranjeras_p7_1_ruso_M
			,extranjeras_p7_1_ruso_H
			,extranjeras_p7_1_ruso_T
			,extranjeras_p7_1_otro
			,extranjeras_p7_1_otro_M
			,extranjeras_p7_1_otro_H
			,extranjeras_p7_1_otro_T


			,extranjeras_p7_2_ConvInst

			,extranjeras_p7_3_nombreInsti

			,extranjeras_p7_4_ProtoInterna
			,extranjeras_p7_4_ProtoInterna_cual
			,extranjeras_p7_4_interno
			,extranjeras_p7_4_interno_cual
			,extranjeras_p7_4_ninguno
			,extranjeras_p7_4_Otro
			,extranjeras_p7_4_Otro_cual

			,extranjeras_p7_5_buenasprac

			,extranjeras_p7_6_buenasprac_cual

			,discapacidad_p8_braile
			,discapacidad_p8_LenSen
			,discapacidad_p8_1_nombreInst
			,discapacidad_p8_2_ProtoInterna
			,discapacidad_p8_2_ProtoInterna_cual
			,extranjeras_p7_4_ProtoInterna_cual
      ,discapacidad_p8_2_interno
			,discapacidad_p8_2_interno_cua
			,discapacidad_p8_2_ProtoImpJust
			,discapacidad_p8_2_ninguno
			,discapacidad_p8_2_otros
			,discapacidad_p8_2_otros_cual


			,discapacidad_p8_3_buenasprac

			,discapacidad_p8_3_buenasprac_cual

			,colaboracion_p9_tipcol
			,colaboracion_p9_1_instcol
			,colaboracion_p9_2_finan
			,colaboracion_p9_2_dona
			,colaboracion_p9_2_capa
			,colaboracion_p9_2_otros
			,colaboracion_p9_2_cual
			,colaboracion_p9_3_descol





			    ,registro_p10_intsispla
			    ,registro_p10_1_servsispl
			    ,registro_p10_2_proliga

			,registro_p10_lib
			,registro_p10_imp
			,registro_p10_tab
			,registro_p10_cel
			,registro_p10_comp
			,registro_p10_otro
			,registro_p10_cual

			,registro_p10_1_ind
			,registro_p10_1_per
			,registro_p10_1_cap
      ,registro_p10_1_perdet
			,registro_p10_1_del
			,registro_p10_1_vic
			,registro_p10_1_perdes
			,registro_p10_1_den
			,registro_p10_1_pedetfad
			,registro_p10_1_pedetpdis
			,registro_p10_1_llam
			,registro_p10_1_dil
			,registro_p10_1_part
			,registro_p10_1_atn
			,registro_p10_1_actu
			,registro_p10_1_otros
			,registro_p10_1_cuales

			,registro_p10_2_lib
			,registro_p10_2_bd
			,registro_p10_2_ap
			,registro_p10_2_plat
			,registro_p10_2_cap
			,registro_p10_2_otro
			,registro_p10_2_cual

			,registro_p10_3_inter

			,registro_p10_4_instmun
			,registro_p10_4_instmunot
			,registro_p10_4_instestot
			,registro_p10_4_sec
			,registro_p10_4_guar
			,registro_p10_4_procotras
			,registro_p10_4_fisc
			,registro_p10_4_podjud
			,registro_p10_4_podjudotras
			,registro_p10_4_podfed
			,registro_p10_4_sipenent
			,registro_p10_4_sispen
			,registro_p10_4_sispenfed
			,registro_p10_4_otro
			,registro_p10_4_cual













      ,indicadores_p11_modeval
			,indicadores_p11_1_cualind
			,evaluacion_p11_2_evalind
			,indicadores_p12_bunprac
			,transparencia_p12_1_cualpract

			,necesidades_p13_cap
			,necesidades_p13_recmat
			,necesidades_p13_rectec
			,necesidades_p13_per
			,necesidades_p13_infra
			,necesidades_p13_mej
			,necesidades_p13_prot
			,necesidades_p13_otros
			,necesidades_p13_cual

			,necesidades_p13_1_desnec
			,denunciaserv_p14_den
			,denunciaserv_p14_2_quej
			,denunciaserv_p142_den
			,denunciaserv_p142_den_cual

/* 14.1.3.- ¿Cuántas quejas fueron presentadas en el año 2020 contra servidores públicos? Desglosar por función y por sexo. */
			 ,denunciaserv_p14_3_inv_M
			 ,denunciaserv_p14_3_inv_H
			 ,denunciaserv_p14_3_inv_T
			 ,denunciaserv_p14_3_int_M
			 ,denunciaserv_p14_3_int_H
			 ,denunciaserv_p14_3_int_T
			 ,denunciaserv_p14_3_reac_M
			 ,denunciaserv_p14_3_reac_H
			 ,denunciaserv_p14_3_reac_T
			 ,denunciaserv_p14_3_proc_M
			 ,denunciaserv_p14_3_proc_H
			 ,denunciaserv_p14_3_proc_T
			 ,denunciaserv_p14_3_proc_M
			 ,denunciaserv_p14_3_proc_H
			 ,denunciaserv_p14_3_proc_T
			 ,denunciaserv_p14_3_seg_M
			 ,denunciaserv_p14_3_seg_H
			 ,denunciaserv_p14_3_seg_T
			 ,denunciaserv_p14_3_prev_M
			 ,denunciaserv_p14_3_prev_H
			 ,denunciaserv_p14_3_prev_T
			 ,denunciaserv_p14_3_pri_M
			 ,denunciaserv_p14_3_pri_H
			 ,denunciaserv_p14_3_pri_T
			 ,denunciaserv_p14_3_otros
			 ,denunciaserv_p14_3_otros_M
			 ,denunciaserv_p14_3_otros_H
			 ,denunciaserv_p14_3_otros_T

/*14.1.4.- ¿Cuántos servidores públicos fueron sancionados por faltas administrativas? Desglosar por función y por sexo. */

		   ,denunciaserv_p14_4_inv_M
			 ,denunciaserv_p14_4_inv_H
			 ,denunciaserv_p14_4_inv_T
			 ,denunciaserv_p14_4_intel_M
			 ,denunciaserv_p14_4_intel_H
			 ,denunciaserv_p14_4_intel_T
			 ,denunciaserv_p14_4_reac_M
			 ,denunciaserv_p14_4_reac_H
			 ,denunciaserv_p14_4_reac_T
			 ,denunciaserv_p14_4_proc_M
			 ,denunciaserv_p14_4_proc_H
			 ,denunciaserv_p14_4_proc_T
			 ,denunciaserv_p14_4_seg_M
			 ,denunciaserv_p14_4_seg_H
			 ,denunciaserv_p14_4_seg_T
			 ,denunciaserv_p14_4_prev_M
			 ,denunciaserv_p14_4_prev_H
			 ,denunciaserv_p14_4_prev_T
			 ,denunciaserv_p14_4_pri_M
			 ,denunciaserv_p14_4_pri_H
			 ,denunciaserv_p14_4_pri_T
			 ,denunciaserv_p14_4_otroscual
			 ,denunciaserv_p14_4_otros_M
			 ,denunciaserv_p14_4_otros_H
			 ,denunciaserv_p14_4_otros_T

/* ======================= */
			 ,denunciaserv_p142_2_quej
       ,denunciaserv_p142_den

			 ,denunciaserv_p142_2_quej
			 ,denunciaserv_p142_3_inv_M
			 ,denunciaserv_p142_3_inv_H
			 ,denunciaserv_p142_3_inv_T

			 ,denunciaserv_p142_3_int_M
			 ,denunciaserv_p142_3_int_H
			 ,denunciaserv_p142_3_int_T

			 ,denunciaserv_p142_3_reac_M
			 ,denunciaserv_p142_3_reac_H
			 ,denunciaserv_p142_3_reac_T

			 ,denunciaserv_p142_3_proc_M
			 ,denunciaserv_p142_3_proc_H
			 ,denunciaserv_p142_3_proc_T

			 ,denunciaserv_p142_3_seg_M
			 ,denunciaserv_p142_3_seg_H
			 ,denunciaserv_p142_3_seg_T

			 ,denunciaserv_p142_3_prev_M
			 ,denunciaserv_p142_3_prev_H
			 ,denunciaserv_p142_3_prev_T

			 ,denunciaserv_p142_3_pri_M
			 ,denunciaserv_p142_3_pri_H
			 ,denunciaserv_p142_3_pri_T

			 ,denunciaserv_p142_3_otros
			 ,denunciaserv_p142_3_otros_M
			 ,denunciaserv_p142_3_otros_H
			 ,denunciaserv_p142_3_otros_T

	/* 14.2.3.- Total de sentencias condenatorias en contra de servidores públicos en el año 2020. Desglosar por función y por sexo.*/
			 ,denunciaserv_p14_den
			 ,denunciaserv_p14_den_cual
	     ,denunciaserv_p142_4_inv_M
			 ,denunciaserv_p142_4_inv_H
			 ,denunciaserv_p142_4_inv_T

			 ,denunciaserv_p142_4_intel_M
			 ,denunciaserv_p142_4_intel_H
			 ,denunciaserv_p142_4_intel_T

			 ,denunciaserv_p142_4_reac_M
			 ,denunciaserv_p142_4_reac_H
			 ,denunciaserv_p142_4_reac_T

			 ,denunciaserv_p142_4_proc_M
			 ,denunciaserv_p142_4_proc_H
			 ,denunciaserv_p142_4_proc_T

			 ,denunciaserv_p142_4_seg_M
			 ,denunciaserv_p142_4_seg_H
			 ,denunciaserv_p142_4_seg_T

			 ,denunciaserv_p142_4_prev_M
			 ,denunciaserv_p142_4_prev_H
			 ,denunciaserv_p142_4_prev_T

			 ,denunciaserv_p142_4_pri_M
			 ,denunciaserv_p142_4_pri_H
			 ,denunciaserv_p142_4_pri_T

			 ,denunciaserv_p142_4_otroscual
			 ,denunciaserv_p142_4_otros_M
			 ,denunciaserv_p142_4_otros_H
			 ,denunciaserv_p142_4_otros_T
			 ,denuncias_p15_numtot
/* 15.1.- Número de denuncias recibidas en el año 2020. Desagregar por los siguientes delitos:*/

       ,denuncias_p15_1_homi
			 ,denuncias_p15_1_femi
			 ,denuncias_p15_1_les
			 ,denuncias_p15_1_viofam
			 ,denuncias_p15_1_abusex
       ,denuncias_p15_1_hossex
			 ,denuncias_p15_1_viol
			 ,denuncias_p15_1_tratper
			 ,denuncias_p15_1_cormen
			 ,denuncias_p15_1_trafmen
			 ,denuncias_p15_2_mecnopre
			 ,denuncias_p15_3_pagint
			 ,denuncias_p15_3_tel
			 ,denuncias_p15_3_app
			 ,necesidades_p15_3_sms
			 ,necesidades_p15_3_otros
			 ,necesidades_p15_3_cuales
			 ,denuncias_p15_4_den

/*16. Total de detenciones realizadas durante el año 2020. Desagregar por edad de la persona detenida y sexo*/

			  ,denunciaserv_p16_totdet_M
			  ,denunciaserv_p16_totdet_H
			 	,denunciaserv_p16_totdet_T
			 	,detenciones_p_16_1_detot
			 	,detenciones_p_16_1_defla
			  ,detenciones_p_16_1_decasurg
			  ,victimas_p17_bprac
				,denunciaserv_p16_totdet_meno18M
				,denunciaserv_p16_totdet_meno18H
				,denunciaserv_p16_totdet_meno18T
				,denunciaserv_p16_totdet_TM
				,denunciaserv_p16_totdet_TH
				,denunciaserv_p16_totdet_TT

				,detenciones_p_16_1_detot
				,detenciones_p_16_1_defla
				,detenciones_p_16_1_decasurg
				,victimas_p17_bprac
				,victimas_p17_1_cuales
				,justiicia_p18_mesajus
/*18.1.- ¿Qué instituciones participan en las Mesas de Justicia -judicialización-?
*/

         ,necesidades_p18_1_segobedo
				 ,necesidades_p18_1_uasisjus
				 ,necesidades_p18_1_ptrisup
				 ,necesidades_p18_1_fisgral
				 ,necesidades_p18_1_secsegpu
				 ,necesidades_p18_1_tinst
				 ,necesidades_p18_1_subsispen
				 ,necesidades_p18_1_tautsup
				 ,necesidades_p18_1_tinsestm
				 ,necesidades_p18_1_dif
				 ,necesidades_p18_1_sipinna
				 ,necesidades_p18_1_secsal
				 ,necesidades_p18_1_comejavic
				 ,necesidades_p18_1_cenuatnvic
				 ,necesidades_p18_1_tcenjusm
				 ,necesidades_p18_1_tfisespm
				 ,necesidades_p18_1_dcenpen
				 ,necesidades_p18_1_dcenpenadol
				 ,necesidades_p18_1_torgmec
				 ,necesidades_p18_1_tsevper
				 ,necesidades_p18_1_otros
				 ,necesidades_p18_1_cual
				 ,justiicia_p18_2_semanal
				 ,justiicia_p18_2_quincenal
				 ,justiicia_p18_2_mensual
				 ,justiicia_p18_2_bimestral
				 ,justiicia_p18_2_trimestral
				 ,justiicia_p18_2_semestral
				 ,justiicia_p18_2_anual

				 ,justiicia_p18_2_abierta

				 ,justiicia_p18_3_buenpract
				 ,impacto_p19_medprev
				 ,impacto_p19_1_medse
				 ,impacto_p19_2_incmed
				 ,impacto_p19_3_descmed
				 ,terapeutica_p20_progjus

				 ,terapeutica_p20_1_may18_M
				 ,terapeutica_p20_1_may18_H
				 ,terapeutica_p20_1_may18_T

				 ,terapeutica_p20_1_men18_M
				 ,terapeutica_p20_1_men18_H
				 ,terapeutica_p20_1_men18_T

				 ,terapeutica_p20_1_total_M
				 ,terapeutica_p20_1_total_H
				 ,terapeutica_p20_1_total_T

				 ,terapeutica_p20_2_can_M
				 ,terapeutica_p20_2_can_H
				 ,terapeutica_p20_2_can_T

				 ,terapeutica_p20_2_men_M
				 ,terapeutica_p20_2_men_H
				 ,terapeutica_p20_2_men_T

				 ,terapeutica_p20_2_fen_M
				 ,terapeutica_p20_2_fen_H
				 ,terapeutica_p20_2_fen_T

				 ,terapeutica_p20_2_coc_M
				 ,terapeutica_p20_2_coc_H
				 ,terapeutica_p20_2_coc_T

				 ,terapeutica_p20_2_her_M
				 ,terapeutica_p20_2_her_H
				 ,terapeutica_p20_2_her_T

				 ,terapeutica_p20_2_alc_M
				 ,terapeutica_p20_2_alc_H
				 ,terapeutica_p20_2_alc_T

				 ,terapeutica_p20_2_otroascual
				 ,terapeutica_p20_2_otras_M
				 ,terapeutica_p20_2_otras_H
				 ,terapeutica_p20_2_otras_T
				 ,comfin










		FROM policias a WHERE $item = :valor");

		$stmt -> bindParam(":valor", $valor, PDO::PARAM_INT);

		$stmt -> execute();

		return $stmt -> fetch();

		$stmt -> close();

		$stmt = null;

	}


	/*=============================================
	REGISTRO DE USUARIO
	=============================================*/

	static public function mdlIngresarFPolicia($tabla, $datos){

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
																					, estatus

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
																								, :estatus


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
		$stmt->bindParam(":estatus", $datos["estatus"], PDO::PARAM_STR);




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

	static public function mdlEditarFPoliciaTab1($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET
        pcontacto = :pcontacto
			 , perfil = :perfil
			 ,area = :area
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
			 , estatus = :estatus




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
		$stmt -> bindParam(":estatus", $datos["estatus"], PDO::PARAM_STR);



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

		static public function mdlEditarFPoliciaTab2($tabla, $datos){

			$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET
		  			personal_p1_totalp_M = :personal_p1_totalp_M
				 ,	personal_p1_totalp_H = :personal_p1_totalp_H
				 ,	personal_p1_totalp_T = :personal_p1_totalp_T
			 	 ,	personal_p1_invyanali_M = :personal_p1_invyanali_M
				 , personal_p1_invyanali_H = :personal_p1_invyanali_H
				 , personal_p1_invyanali_T = :personal_p1_invyanali_T
				 , personal_p1_inte_M = :personal_p1_inte_M
				 , personal_p1_inte_H = :personal_p1_inte_H
				 , personal_p1_inte_T = :personal_p1_inte_T
				 , personal_p1_reacc_M = :personal_p1_reacc_M
				 , personal_p1_reacc_H = :personal_p1_reacc_H
				 , personal_p1_reacc_T = :personal_p1_reacc_T
				 , personal_p1_proce_M = :personal_p1_proce_M
				 , personal_p1_proce_H = :personal_p1_proce_H
				 , personal_p1_proce_T = :personal_p1_proce_T
				 , personal_p1_segycuspen_M = :personal_p1_segycuspen_M
				 , personal_p1_segycuspen_H = :personal_p1_segycuspen_H
				 , personal_p1_segycuspen_T = :personal_p1_segycuspen_T
				 , personal_p1_preven_M = :personal_p1_preven_M
				 , personal_p1_preven_H = :personal_p1_preven_H
			   , personal_p1_preven_T = :personal_p1_preven_T
			   , personal_p1_prirespon_M = :personal_p1_prirespon_M
			 	 , personal_p1_prirespon_H = :personal_p1_prirespon_H
			   , personal_p1_prirespon_T = :personal_p1_prirespon_T



				 , personal_p1_total_M = :personal_p1_total_M
				 , personal_p1_total_H = :personal_p1_total_H
				 , personal_p1_total_T = :personal_p1_total_T



				 , personal_p1_otros = :personal_p1_otros
			   , personal_p1_otros_M = :personal_p1_otros_M
			 	 , personal_p1_otros_H = :personal_p1_otros_H
			   , personal_p1_otros_T = :personal_p1_otros_T
				 , personal_p1_siningre_M = :personal_p1_siningre_M
				 , personal_p1_siningre_H = :personal_p1_siningre_H
				 , personal_p1_siningre_T = :personal_p1_siningre_T
				 , personal_p1_de1a5000_M = :personal_p1_de1a5000_M
				 , personal_p1_de1a5000_H = :personal_p1_de1a5000_H
				 , personal_p1_de1a5000_T = :personal_p1_de1a5000_T
				 , personal_p1_de5001a10000_M = :personal_p1_de5001a10000_M
				 , personal_p1_de5001a10000_H = :personal_p1_de5001a10000_H
				 , personal_p1_de5001a10000_T = :personal_p1_de5001a10000_T
				 , personal_p1_de10001a15000_M = :personal_p1_de10001a15000_M
				 , personal_p1_de10001a15000_H = :personal_p1_de10001a15000_H
				 , personal_p1_de10001a15000_T = :personal_p1_de10001a15000_T
				 , personal_p1_de15001a20000_M = :personal_p1_de15001a20000_M
				 , personal_p1_de15001a20000_H = :personal_p1_de15001a20000_H
				 , personal_p1_de15001a20000_T = :personal_p1_de15001a20000_T
				 , personal_p1_de20001a25000_M = :personal_p1_de20001a25000_M
			   , personal_p1_de20001a25000_H = :personal_p1_de20001a25000_H
			   , personal_p1_de20001a25000_T = :personal_p1_de20001a25000_T
			 	 , personal_p1_de25001a30000_M = :personal_p1_de25001a30000_M
			   , personal_p1_de25001a30000_H = :personal_p1_de25001a30000_H
				 , personal_p1_de25001a30000_T = :personal_p1_de25001a30000_T
			   , personal_p1_de30001a35000_M = :personal_p1_de30001a35000_M
			 	 , personal_p1_de30001a35000_H = :personal_p1_de30001a35000_H
			   , personal_p1_de30001a35000_T = :personal_p1_de30001a35000_T
				 , personal_p1_de35001a40000_M = :personal_p1_de35001a40000_M
				 , personal_p1_de35001a40000_H = :personal_p1_de35001a40000_H
				 , personal_p1_de35001a40000_T = :personal_p1_de35001a40000_T
				 , personal_p1_de40001a45000_M = :personal_p1_de40001a45000_M
				 , personal_p1_de40001a45000_H = :personal_p1_de40001a45000_H
				 , personal_p1_de40001a45000_T = :personal_p1_de40001a45000_T
				 , personal_p1_de45001a50000_M = :personal_p1_de45001a50000_M
				 , personal_p1_de45001a50000_H = :personal_p1_de45001a50000_H
				 , personal_p1_de45001a50000_T = :personal_p1_de45001a50000_T
				 , personal_p1_de50001a55000_M = :personal_p1_de50001a55000_M
				 , personal_p1_de50001a55000_H = :personal_p1_de50001a55000_H
				 , personal_p1_de50001a55000_T = :personal_p1_de50001a55000_T
				 , personal_p1_55001a60000_M = :personal_p1_55001a60000_M
				 , personal_p1_55001a60000_H = :personal_p1_55001a60000_H
				 , personal_p1_55001a60000_T = :personal_p1_55001a60000_T
				 , personal_p1_60001a65000_M = :personal_p1_60001a65000_M
			   , personal_p1_60001a65000_H = :personal_p1_60001a65000_H
			   , personal_p1_60001a65000_T = :personal_p1_60001a65000_T
			 	 , personal_p1_65001a70000_M = :personal_p1_65001a70000_M
			   , personal_p1_65001a70000_H = :personal_p1_65001a70000_H
				 , personal_p1_65001a70000_T = :personal_p1_65001a70000_T
			   , personal_p1_masde70000_M = :personal_p1_masde70000_M
			 	 , personal_p1_masde70000_H = :personal_p1_masde70000_H
			   , personal_p1_masde70000_T = :personal_p1_masde70000_T
				 , personal_p1_masde50000_M = :personal_p1_masde50000_M
				 , personal_p1_masde50000_H = :personal_p1_masde50000_H
				 , personal_p1_masde50000_T = :personal_p1_masde50000_T
				 , personal_p1_2_ning_M = :personal_p1_2_ning_M
			 	 , personal_p1_2_ning_H = :personal_p1_2_ning_H
			   , personal_p1_2_ning_T = :personal_p1_2_ning_T
				 , personal_p1_2_prees_M = :personal_p1_2_prees_M
			 	 , personal_p1_2_prees_H = :personal_p1_2_prees_H
			   , personal_p1_2_prees_T = :personal_p1_2_prees_T
				 , personal_p1_2_prim_M = :personal_p1_2_prim_M
			 	 , personal_p1_2_prim_H = :personal_p1_2_prim_H
			   , personal_p1_2_prim_T = :personal_p1_2_prim_T
				 , personal_p1_2_secu_M = :personal_p1_2_secu_M
			 	 , personal_p1_2_secu_H = :personal_p1_2_secu_H
			   , personal_p1_2_secu_T = :personal_p1_2_secu_T
				 , personal_p1_2_ctsect_M = :personal_p1_2_ctsect_M
			 	 , personal_p1_2_ctsect_H = :personal_p1_2_ctsect_H
			   , personal_p1_2_ctsect_T = :personal_p1_2_ctsect_T
				 , personal_p1_2_nbasica_M = :personal_p1_2_nbasica_M
			 	 , personal_p1_2_nbasica_H = :personal_p1_2_nbasica_H
			   , personal_p1_2_nbasica_T = :personal_p1_2_nbasica_T
				 , personal_p1_2_preobach_M = :personal_p1_2_preobach_M
			 	 , personal_p1_2_preobach_H = :personal_p1_2_preobach_H
			   , personal_p1_2_preobach_T = :personal_p1_2_preobach_T
				 , personal_p1_2_ctcpret_M = :personal_p1_2_ctcpret_M
			 	 , personal_p1_2_ctcpret_H = :personal_p1_2_ctcpret_H
			   , personal_p1_2_ctcpret_T = :personal_p1_2_ctcpret_T
				 , personal_p1_2_licoprof_M = :personal_p1_2_licoprof_M
			 	 , personal_p1_2_licoprof_H = :personal_p1_2_licoprof_H
			   , personal_p1_2_licoprof_T = :personal_p1_2_licoprof_T
				 , personal_p1_2_maesdoc_M = :personal_p1_2_maesdoc_M
			 	 , personal_p1_2_maesdoc_H = :personal_p1_2_maesdoc_H
			   , personal_p1_2_maesdoc_T = :personal_p1_2_maesdoc_T
				 , personal_p1_2_total_M = :personal_p1_2_total_M
				 , personal_p1_2_total_H = :personal_p1_2_total_H
				 , personal_p1_2_total_T = :personal_p1_2_total_T
				 , personal_p1_2_nosesabe = :personal_p1_2_nosesabe
				 , personal_p1_3_nosesabe = :personal_p1_3_nosesabe
				 , capacitacion_p2s = :capacitacion_p2s





				 , personal_p1_2_nosanore_M = :personal_p1_2_nosanore_M
				 , personal_p1_2_nosanore_H = :personal_p1_2_nosanore_H
				 , personal_p1_2_nosanore_T = :personal_p1_2_nosanore_T
				 , capacitacion_p2 = :capacitacion_p2
				 , capacitacion_p2_1_nom = :capacitacion_p2_1_nom
				 , capacitacion_p2_2_aul = :capacitacion_p2_2_aul
				 , capacitacion_p2_2_comp = :capacitacion_p2_2_comp
				 , capacitacion_p2_2_juor = :capacitacion_p2_2_juor
				 , capacitacion_p2_2_come = :capacitacion_p2_2_come
				 , capacitacion_p2_2_coci = :capacitacion_p2_2_coci
				 , capacitacion_p2_2_dorm = :capacitacion_p2_2_dorm
				 , capacitacion_p2_2_pruf = :capacitacion_p2_2_pruf
				 , capacitacion_p2_2_auvis = :capacitacion_p2_2_auvis
				 , capacitacion_p2_2_medi = :capacitacion_p2_2_medi
				 , capacitacion_p2_2_tirof = :capacitacion_p2_2_tirof
				 , capacitacion_p2_2_tirov = :capacitacion_p2_2_tirov
				 , capacitacion_p2_2_entre = :capacitacion_p2_2_entre
				 , capacitacion_p2_2_vehi = :capacitacion_p2_2_vehi
				 , capacitacion_p2_2_unif = :capacitacion_p2_2_unif
				 , capacitacion_p2_2_otro = :capacitacion_p2_2_otro
				 , capacitacion_p2_2_otro_cual = :capacitacion_p2_2_otro_cual
				 , capacitacion_p2_3_invyanali_M = :capacitacion_p2_3_invyanali_M
				 , capacitacion_p2_3_invyanali_H = :capacitacion_p2_3_invyanali_H
				 , capacitacion_p2_3_invyanali_T = :capacitacion_p2_3_invyanali_T
				 , capacitacion_p2_3_inte_M = :capacitacion_p2_3_inte_M
				 , capacitacion_p2_3_inte_H = :capacitacion_p2_3_inte_H
				 , capacitacion_p2_3_inte_T = :capacitacion_p2_3_inte_T
				 , capacitacion_p2_3_reacc_M = :capacitacion_p2_3_reacc_M
				 , capacitacion_p2_3_reacc_H = :capacitacion_p2_3_reacc_H
				 , capacitacion_p2_3_reacc_T = :capacitacion_p2_3_reacc_T
				 , capacitacion_p2_3_proce_M = :capacitacion_p2_3_proce_M
				 , capacitacion_p2_3_proce_H = :capacitacion_p2_3_proce_H
				 , capacitacion_p2_3_proce_T = :capacitacion_p2_3_proce_T
				 , capacitacion_p2_3_segycuspen_M = :capacitacion_p2_3_segycuspen_M
				 , capacitacion_p2_3_segycuspen_H = :capacitacion_p2_3_segycuspen_H
				 , capacitacion_p2_3_segycuspen_T = :capacitacion_p2_3_segycuspen_T
				 , capacitacion_p2_3_preven_M = :capacitacion_p2_3_preven_M
				 , capacitacion_p2_3_preven_H = :capacitacion_p2_3_preven_H
				 , capacitacion_p2_3_preven_T = :capacitacion_p2_3_preven_T
				 , capacitacion_p2_3_prirespon_M = :capacitacion_p2_3_prirespon_M
				 , capacitacion_p2_3_prirespon_H = :capacitacion_p2_3_prirespon_H
				 , capacitacion_p2_3_prirespon_T = :capacitacion_p2_3_prirespon_T
				 , capacitacion_p2_3_otros = :capacitacion_p2_3_otros
				 , capacitacion_p2_3_otros_M = :capacitacion_p2_3_otros_M
				 , capacitacion_p2_3_otros_H = :capacitacion_p2_3_otros_H
				 , capacitacion_p2_3_otros_T = :capacitacion_p2_3_otros_T
				 , capacitacion_p2_4_majudlacpo_M = :capacitacion_p2_4_majudlacpo_M
				 , capacitacion_p2_4_majudlacpo_H = :capacitacion_p2_4_majudlacpo_H
				 , capacitacion_p2_4_majudlacpo_T = :capacitacion_p2_4_majudlacpo_T
				 , capacitacion_p2_4_prdedeypaci_M = :capacitacion_p2_4_prdedeypaci_M
				 , capacitacion_p2_4_prdedeypaci_H = :capacitacion_p2_4_prdedeypaci_H
				 , capacitacion_p2_4_prdedeypaci_T = :capacitacion_p2_4_prdedeypaci_T
				 , capacitacion_p2_4_dehuygain_M = :capacitacion_p2_4_dehuygain_M
				 , capacitacion_p2_4_dehuygain_H = :capacitacion_p2_4_dehuygain_H
				 , capacitacion_p2_4_dehuygain_T = :capacitacion_p2_4_dehuygain_T
				 , capacitacion_p2_4_realsipejupeac_M = :capacitacion_p2_4_realsipejupeac_M
				 , capacitacion_p2_4_realsipejupeac_H = :capacitacion_p2_4_realsipejupeac_H
				 , capacitacion_p2_4_realsipejupeac_T = :capacitacion_p2_4_realsipejupeac_T
				 , capacitacion_p2_4_prdeludeloheodeha_M = :capacitacion_p2_4_prdeludeloheodeha_M
				 , capacitacion_p2_4_prdeludeloheodeha_H = :capacitacion_p2_4_prdeludeloheodeha_H
				 , capacitacion_p2_4_prdeludeloheodeha_T = :capacitacion_p2_4_prdeludeloheodeha_T
				 , capacitacion_p2_4_idldlhodhymdeeoddp_M = :capacitacion_p2_4_idldlhodhymdeeoddp_M
				 , capacitacion_p2_4_idldlhodhymdeeoddp_H = :capacitacion_p2_4_idldlhodhymdeeoddp_H
				 , capacitacion_p2_4_idldlhodhymdeeoddp_T = :capacitacion_p2_4_idldlhodhymdeeoddp_T
				 , capacitacion_p2_4_cadecu_M = :capacitacion_p2_4_cadecu_M
				 , capacitacion_p2_4_cadecu_H = :capacitacion_p2_4_cadecu_H
				 , capacitacion_p2_4_cadecu_T = :capacitacion_p2_4_cadecu_T
				 , capacitacion_p2_4_enates_M = :capacitacion_p2_4_enates_M
				 , capacitacion_p2_4_enates_H = :capacitacion_p2_4_enates_H
				 , capacitacion_p2_4_enates_T = :capacitacion_p2_4_enates_T
				 , capacitacion_p2_4_usledelafu_M = :capacitacion_p2_4_usledelafu_M
				 , capacitacion_p2_4_usledelafu_H = :capacitacion_p2_4_usledelafu_H
				 , capacitacion_p2_4_usledelafu_T = :capacitacion_p2_4_usledelafu_T
				 , capacitacion_p2_4_inves_M = :capacitacion_p2_4_inves_M
				 , capacitacion_p2_4_inves_H = :capacitacion_p2_4_inves_H
				 , capacitacion_p2_4_inves_T = :capacitacion_p2_4_inves_T
				 , capacitacion_p2_4_prres_M = :capacitacion_p2_4_prres_M
				 , capacitacion_p2_4_prres_H = :capacitacion_p2_4_prres_H
				 , capacitacion_p2_4_prres_T = :capacitacion_p2_4_prres_T
				 , capacitacion_p2_4_inpoho_M = :capacitacion_p2_4_inpoho_M
				 , capacitacion_p2_4_inpoho_H = :capacitacion_p2_4_inpoho_H
				 , capacitacion_p2_4_inpoho_T = :capacitacion_p2_4_inpoho_T
				 , capacitacion_p2_4_especia_M = :capacitacion_p2_4_especia_M
				 , capacitacion_p2_4_especia_H = :capacitacion_p2_4_especia_H
				 , capacitacion_p2_4_especia_T = :capacitacion_p2_4_especia_T
				 , capacitacion_p2_4_actualiza_M = :capacitacion_p2_4_actualiza_M
				 , capacitacion_p2_4_actualiza_H = :capacitacion_p2_4_actualiza_H
				 , capacitacion_p2_4_actualiza_T = :capacitacion_p2_4_actualiza_T
				 , capacitacion_p2_4_sidejupeacu_M = :capacitacion_p2_4_sidejupeacu_M
				 , capacitacion_p2_4_sidejupeacu_H = :capacitacion_p2_4_sidejupeacu_H
				 , capacitacion_p2_4_sidejupeacu_T = :capacitacion_p2_4_sidejupeacu_T
				 , capacitacion_p2_4_depro_M = :capacitacion_p2_4_depro_M
				 , capacitacion_p2_4_depro_H = :capacitacion_p2_4_depro_H
				 , capacitacion_p2_4_depro_T = :capacitacion_p2_4_depro_T
				 , capacitacion_p2_4_femeni_M = :capacitacion_p2_4_femeni_M
				 , capacitacion_p2_4_femeni_H = :capacitacion_p2_4_femeni_H
				 , capacitacion_p2_4_femeni_T = :capacitacion_p2_4_femeni_T
				 , capacitacion_p2_4_antrdepe_M = :capacitacion_p2_4_antrdepe_M
				 , capacitacion_p2_4_antrdepe_H = :capacitacion_p2_4_antrdepe_H
				 , capacitacion_p2_4_antrdepe_T = :capacitacion_p2_4_antrdepe_T
				 , capacitacion_p2_4_vicolamu_M = :capacitacion_p2_4_vicolamu_M
				 , capacitacion_p2_4_vicolamu_H = :capacitacion_p2_4_vicolamu_H
				 , capacitacion_p2_4_vicolamu_T = :capacitacion_p2_4_vicolamu_T
				 , capacitacion_p2_4_predege_M = :capacitacion_p2_4_predege_M
				 , capacitacion_p2_4_predege_H = :capacitacion_p2_4_predege_H
				 , capacitacion_p2_4_predege_T = :capacitacion_p2_4_predege_T
				 , capacitacion_p2_4_ascoydedeex_M = :capacitacion_p2_4_ascoydedeex_M
				 , capacitacion_p2_4_ascoydedeex_H = :capacitacion_p2_4_ascoydedeex_H
				 , capacitacion_p2_4_ascoydedeex_T = :capacitacion_p2_4_ascoydedeex_T
				 , capacitacion_p2_4_siindejupepaad_M = :capacitacion_p2_4_siindejupepaad_M
				 , capacitacion_p2_4_siindejupepaad_H = :capacitacion_p2_4_siindejupepaad_H
				 , capacitacion_p2_4_siindejupepaad_T = :capacitacion_p2_4_siindejupepaad_T
				 , capacitacion_p2_4_ataperin_M = :capacitacion_p2_4_ataperin_M
				 , capacitacion_p2_4_ataperin_H = :capacitacion_p2_4_ataperin_H
				 , capacitacion_p2_4_ataperin_T = :capacitacion_p2_4_ataperin_T
				 , capacitacion_p2_4_atapercondis_M = :capacitacion_p2_4_atapercondis_M
				 , capacitacion_p2_4_atapercondis_H = :capacitacion_p2_4_atapercondis_H
				 , capacitacion_p2_4_atapercondis_T = :capacitacion_p2_4_atapercondis_T
				 , capacitacion_p2_4_jusalt_M = :capacitacion_p2_4_jusalt_M
				 , capacitacion_p2_4_jusalt_H = :capacitacion_p2_4_jusalt_H
				 , capacitacion_p2_4_jusalt_T = :capacitacion_p2_4_jusalt_T
				 , capacitacion_p2_4_justera_M = :capacitacion_p2_4_justera_M
				 , capacitacion_p2_4_justera_H = :capacitacion_p2_4_justera_H
				 , capacitacion_p2_4_justera_T = :capacitacion_p2_4_justera_T
				 , capacitacion_p2_4_justransi_M = :capacitacion_p2_4_justransi_M
				 , capacitacion_p2_4_justransi_H = :capacitacion_p2_4_justransi_H
				 , capacitacion_p2_4_justransi_T = :capacitacion_p2_4_justransi_T

				 ,capacitacion_p2_4_atemuj_M = :capacitacion_p2_4_atemuj_M
				 ,capacitacion_p2_4_atemuj_H = :capacitacion_p2_4_atemuj_H
				 ,capacitacion_p2_4_atemuj_T = :capacitacion_p2_4_atemuj_T
				 , capacitacion_p2_4_otros = :capacitacion_p2_4_otros
				 , capacitacion_p2_4_otros_M = :capacitacion_p2_4_otros_M
				 , capacitacion_p2_4_otros_H = :capacitacion_p2_4_otros_H
				 , capacitacion_p2_4_otros_T = :capacitacion_p2_4_otros_T
				 , capacitacion_p2_5_instuprga = :capacitacion_p2_5_instuprga
				 , capacitacion_p2_6_evconconf_M = :capacitacion_p2_6_evconconf_M
				 , capacitacion_p2_6_evconconf_H = :capacitacion_p2_6_evconconf_H
				 , capacitacion_p2_6_evconconf_T = :capacitacion_p2_6_evconconf_T
				 , presupuesto_p3 = :presupuesto_p3
				 , presupuestop3_1_anuaeje20 = :presupuestop3_1_anuaeje20
				 , presupuestop3_2_anuaeje20 = :presupuestop3_2_anuaeje20



















				WHERE id = :idFormulario");


			$stmt -> bindParam(":idFormulario", $datos["idFormulario"], PDO::PARAM_STR);
		$stmt -> bindParam(":personal_p1_totalp_M", $datos["personal_p1_totalp_M"], PDO::PARAM_STR);
		$stmt -> bindParam(":personal_p1_totalp_H", $datos["personal_p1_totalp_H"], PDO::PARAM_STR);
		$stmt -> bindParam(":personal_p1_totalp_T", $datos["personal_p1_totalp_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_invyanali_M", $datos["personal_p1_invyanali_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_invyanali_H", $datos["personal_p1_invyanali_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_invyanali_T", $datos["personal_p1_invyanali_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_inte_M", $datos["personal_p1_inte_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_inte_H", $datos["personal_p1_inte_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_inte_T", $datos["personal_p1_inte_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_reacc_M", $datos["personal_p1_reacc_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_reacc_H", $datos["personal_p1_reacc_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_reacc_T", $datos["personal_p1_reacc_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_proce_M", $datos["personal_p1_proce_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_proce_H", $datos["personal_p1_proce_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_proce_T", $datos["personal_p1_proce_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_segycuspen_M", $datos["personal_p1_segycuspen_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_segycuspen_H", $datos["personal_p1_segycuspen_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_segycuspen_T", $datos["personal_p1_segycuspen_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_preven_M", $datos["personal_p1_preven_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_preven_H", $datos["personal_p1_preven_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_preven_T", $datos["personal_p1_preven_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_prirespon_M", $datos["personal_p1_prirespon_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_prirespon_H", $datos["personal_p1_prirespon_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_prirespon_T", $datos["personal_p1_prirespon_T"], PDO::PARAM_STR);

			$stmt -> bindParam(":personal_p1_total_M", $datos["personal_p1_total_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_total_H", $datos["personal_p1_total_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_total_T", $datos["personal_p1_total_T"], PDO::PARAM_STR);


			$stmt -> bindParam(":personal_p1_otros", $datos["personal_p1_otros"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_otros_M", $datos["personal_p1_otros_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_otros_H", $datos["personal_p1_otros_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_otros_T", $datos["personal_p1_otros_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_siningre_M", $datos["personal_p1_siningre_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_siningre_H", $datos["personal_p1_siningre_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_siningre_T", $datos["personal_p1_siningre_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_de1a5000_M", $datos["personal_p1_de1a5000_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_de1a5000_H", $datos["personal_p1_de1a5000_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_de1a5000_T", $datos["personal_p1_de1a5000_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_de5001a10000_M", $datos["personal_p1_de5001a10000_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_de5001a10000_H", $datos["personal_p1_de5001a10000_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_de5001a10000_T", $datos["personal_p1_de5001a10000_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_de10001a15000_M", $datos["personal_p1_de10001a15000_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_de10001a15000_H", $datos["personal_p1_de10001a15000_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_de10001a15000_T", $datos["personal_p1_de10001a15000_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_de15001a20000_M", $datos["personal_p1_de15001a20000_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_de15001a20000_H", $datos["personal_p1_de15001a20000_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_de15001a20000_T", $datos["personal_p1_de15001a20000_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_de20001a25000_M", $datos["personal_p1_de20001a25000_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_de20001a25000_H", $datos["personal_p1_de20001a25000_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_de20001a25000_T", $datos["personal_p1_de20001a25000_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_de25001a30000_M", $datos["personal_p1_de25001a30000_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_de25001a30000_H", $datos["personal_p1_de25001a30000_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_de25001a30000_T", $datos["personal_p1_de25001a30000_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_de30001a35000_M", $datos["personal_p1_de30001a35000_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_de30001a35000_H", $datos["personal_p1_de30001a35000_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_de30001a35000_T", $datos["personal_p1_de30001a35000_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_de35001a40000_M", $datos["personal_p1_de35001a40000_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_de35001a40000_H", $datos["personal_p1_de35001a40000_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_de35001a40000_T", $datos["personal_p1_de35001a40000_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_de40001a45000_M", $datos["personal_p1_de40001a45000_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_de40001a45000_H", $datos["personal_p1_de40001a45000_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_de40001a45000_T", $datos["personal_p1_de40001a45000_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_de45001a50000_M", $datos["personal_p1_de45001a50000_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_de45001a50000_H", $datos["personal_p1_de45001a50000_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_de45001a50000_T", $datos["personal_p1_de45001a50000_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_de50001a55000_M", $datos["personal_p1_de50001a55000_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_de50001a55000_H", $datos["personal_p1_de50001a55000_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_de50001a55000_T", $datos["personal_p1_de50001a55000_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_55001a60000_M", $datos["personal_p1_55001a60000_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_55001a60000_H", $datos["personal_p1_55001a60000_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_55001a60000_T", $datos["personal_p1_55001a60000_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_60001a65000_M", $datos["personal_p1_60001a65000_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_60001a65000_H", $datos["personal_p1_60001a65000_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_60001a65000_T", $datos["personal_p1_60001a65000_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_65001a70000_M", $datos["personal_p1_65001a70000_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_65001a70000_H", $datos["personal_p1_65001a70000_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_65001a70000_T", $datos["personal_p1_65001a70000_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_masde70000_M", $datos["personal_p1_masde70000_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_masde70000_H", $datos["personal_p1_masde70000_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_masde70000_T", $datos["personal_p1_masde70000_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_masde50000_M", $datos["personal_p1_masde50000_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_masde50000_H", $datos["personal_p1_masde50000_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_masde50000_T", $datos["personal_p1_masde50000_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_2_ning_M", $datos["personal_p1_2_ning_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_2_ning_H", $datos["personal_p1_2_ning_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_2_ning_T", $datos["personal_p1_2_ning_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_2_prees_M", $datos["personal_p1_2_prees_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_2_prees_H", $datos["personal_p1_2_prees_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_2_prees_T", $datos["personal_p1_2_prees_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_2_prim_M", $datos["personal_p1_2_prim_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_2_prim_H", $datos["personal_p1_2_prim_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_2_prim_T", $datos["personal_p1_2_prim_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_2_secu_M", $datos["personal_p1_2_secu_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_2_secu_H", $datos["personal_p1_2_secu_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_2_secu_T", $datos["personal_p1_2_secu_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_2_ctsect_M", $datos["personal_p1_2_ctsect_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_2_ctsect_H", $datos["personal_p1_2_ctsect_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_2_ctsect_T", $datos["personal_p1_2_ctsect_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_2_nbasica_M", $datos["personal_p1_2_nbasica_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_2_nbasica_H", $datos["personal_p1_2_nbasica_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_2_nbasica_T", $datos["personal_p1_2_nbasica_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_2_preobach_M", $datos["personal_p1_2_preobach_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_2_preobach_H", $datos["personal_p1_2_preobach_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_2_preobach_T", $datos["personal_p1_2_preobach_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_2_ctcpret_M", $datos["personal_p1_2_ctcpret_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_2_ctcpret_H", $datos["personal_p1_2_ctcpret_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_2_ctcpret_T", $datos["personal_p1_2_ctcpret_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_2_licoprof_M", $datos["personal_p1_2_licoprof_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_2_licoprof_H", $datos["personal_p1_2_licoprof_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_2_licoprof_T", $datos["personal_p1_2_licoprof_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_2_maesdoc_M", $datos["personal_p1_2_maesdoc_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_2_maesdoc_H", $datos["personal_p1_2_maesdoc_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_2_maesdoc_T", $datos["personal_p1_2_maesdoc_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_2_total_M", $datos["personal_p1_2_total_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_2_total_H", $datos["personal_p1_2_total_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_2_total_T", $datos["personal_p1_2_total_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_2_nosesabe", $datos["personal_p1_2_nosesabe"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_3_nosesabe", $datos["personal_p1_3_nosesabe"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2s", $datos["capacitacion_p2s"], PDO::PARAM_STR);




			$stmt -> bindParam(":personal_p1_2_nosanore_M", $datos["personal_p1_2_nosanore_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_2_nosanore_H", $datos["personal_p1_2_nosanore_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":personal_p1_2_nosanore_T", $datos["personal_p1_2_nosanore_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2", $datos["capacitacion_p2"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_1_nom", $datos["capacitacion_p2_1_nom"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_2_aul", $datos["capacitacion_p2_2_aul"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_2_comp", $datos["capacitacion_p2_2_comp"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_2_juor", $datos["capacitacion_p2_2_juor"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_2_come", $datos["capacitacion_p2_2_come"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_2_coci", $datos["capacitacion_p2_2_coci"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_2_dorm", $datos["capacitacion_p2_2_dorm"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_2_pruf", $datos["capacitacion_p2_2_pruf"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_2_auvis", $datos["capacitacion_p2_2_auvis"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_2_medi", $datos["capacitacion_p2_2_medi"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_2_tirof", $datos["capacitacion_p2_2_tirof"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_2_tirov", $datos["capacitacion_p2_2_tirov"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_2_entre", $datos["capacitacion_p2_2_entre"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_2_vehi", $datos["capacitacion_p2_2_vehi"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_2_unif", $datos["capacitacion_p2_2_unif"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_2_otro", $datos["capacitacion_p2_2_otro"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_2_otro_cual", $datos["capacitacion_p2_2_otro_cual"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_3_invyanali_M", $datos["capacitacion_p2_3_invyanali_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_3_invyanali_H", $datos["capacitacion_p2_3_invyanali_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_3_invyanali_T", $datos["capacitacion_p2_3_invyanali_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_3_inte_M", $datos["capacitacion_p2_3_inte_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_3_inte_H", $datos["capacitacion_p2_3_inte_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_3_inte_T", $datos["capacitacion_p2_3_inte_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_3_reacc_M", $datos["capacitacion_p2_3_reacc_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_3_reacc_H", $datos["capacitacion_p2_3_reacc_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_3_reacc_T", $datos["capacitacion_p2_3_reacc_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_3_proce_M", $datos["capacitacion_p2_3_proce_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_3_proce_H", $datos["capacitacion_p2_3_proce_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_3_proce_T", $datos["capacitacion_p2_3_proce_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_3_segycuspen_M", $datos["capacitacion_p2_3_segycuspen_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_3_segycuspen_H", $datos["capacitacion_p2_3_segycuspen_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_3_segycuspen_T", $datos["capacitacion_p2_3_segycuspen_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_3_preven_M", $datos["capacitacion_p2_3_preven_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_3_preven_H", $datos["capacitacion_p2_3_preven_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_3_preven_T", $datos["capacitacion_p2_3_preven_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_3_prirespon_M", $datos["capacitacion_p2_3_prirespon_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_3_prirespon_H", $datos["capacitacion_p2_3_prirespon_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_3_prirespon_T", $datos["capacitacion_p2_3_prirespon_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_3_otros", $datos["capacitacion_p2_3_otros"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_3_otros_M", $datos["capacitacion_p2_3_otros_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_3_otros_H", $datos["capacitacion_p2_3_otros_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_3_otros_T", $datos["capacitacion_p2_3_otros_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_majudlacpo_M", $datos["capacitacion_p2_4_majudlacpo_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_majudlacpo_H", $datos["capacitacion_p2_4_majudlacpo_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_majudlacpo_T", $datos["capacitacion_p2_4_majudlacpo_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_prdedeypaci_M", $datos["capacitacion_p2_4_prdedeypaci_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_prdedeypaci_H", $datos["capacitacion_p2_4_prdedeypaci_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_prdedeypaci_T", $datos["capacitacion_p2_4_prdedeypaci_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_dehuygain_M", $datos["capacitacion_p2_4_dehuygain_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_dehuygain_H", $datos["capacitacion_p2_4_dehuygain_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_dehuygain_T", $datos["capacitacion_p2_4_dehuygain_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_realsipejupeac_M", $datos["capacitacion_p2_4_realsipejupeac_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_realsipejupeac_H", $datos["capacitacion_p2_4_realsipejupeac_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_realsipejupeac_T", $datos["capacitacion_p2_4_realsipejupeac_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_prdeludeloheodeha_M", $datos["capacitacion_p2_4_prdeludeloheodeha_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_prdeludeloheodeha_H", $datos["capacitacion_p2_4_prdeludeloheodeha_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_prdeludeloheodeha_T", $datos["capacitacion_p2_4_prdeludeloheodeha_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_idldlhodhymdeeoddp_M", $datos["capacitacion_p2_4_idldlhodhymdeeoddp_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_idldlhodhymdeeoddp_H", $datos["capacitacion_p2_4_idldlhodhymdeeoddp_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_idldlhodhymdeeoddp_T", $datos["capacitacion_p2_4_idldlhodhymdeeoddp_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_cadecu_M", $datos["capacitacion_p2_4_cadecu_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_cadecu_H", $datos["capacitacion_p2_4_cadecu_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_cadecu_T", $datos["capacitacion_p2_4_cadecu_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_enates_M", $datos["capacitacion_p2_4_enates_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_enates_H", $datos["capacitacion_p2_4_enates_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_enates_T", $datos["capacitacion_p2_4_enates_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_usledelafu_M", $datos["capacitacion_p2_4_usledelafu_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_usledelafu_H", $datos["capacitacion_p2_4_usledelafu_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_usledelafu_T", $datos["capacitacion_p2_4_usledelafu_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_inves_M", $datos["capacitacion_p2_4_inves_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_inves_H", $datos["capacitacion_p2_4_inves_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_inves_T", $datos["capacitacion_p2_4_inves_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_prres_M", $datos["capacitacion_p2_4_prres_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_prres_H", $datos["capacitacion_p2_4_prres_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_prres_T", $datos["capacitacion_p2_4_prres_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_inpoho_M", $datos["capacitacion_p2_4_inpoho_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_inpoho_H", $datos["capacitacion_p2_4_inpoho_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_inpoho_T", $datos["capacitacion_p2_4_inpoho_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_especia_M", $datos["capacitacion_p2_4_especia_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_especia_H", $datos["capacitacion_p2_4_especia_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_especia_T", $datos["capacitacion_p2_4_especia_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_actualiza_M", $datos["capacitacion_p2_4_actualiza_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_actualiza_H", $datos["capacitacion_p2_4_actualiza_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_actualiza_T", $datos["capacitacion_p2_4_actualiza_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_sidejupeacu_M", $datos["capacitacion_p2_4_sidejupeacu_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_sidejupeacu_H", $datos["capacitacion_p2_4_sidejupeacu_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_sidejupeacu_T", $datos["capacitacion_p2_4_sidejupeacu_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_depro_M", $datos["capacitacion_p2_4_depro_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_depro_H", $datos["capacitacion_p2_4_depro_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_depro_T", $datos["capacitacion_p2_4_depro_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_femeni_M", $datos["capacitacion_p2_4_femeni_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_femeni_H", $datos["capacitacion_p2_4_femeni_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_femeni_T", $datos["capacitacion_p2_4_femeni_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_antrdepe_M", $datos["capacitacion_p2_4_antrdepe_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_antrdepe_H", $datos["capacitacion_p2_4_antrdepe_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_antrdepe_T", $datos["capacitacion_p2_4_antrdepe_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_vicolamu_M", $datos["capacitacion_p2_4_vicolamu_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_vicolamu_H", $datos["capacitacion_p2_4_vicolamu_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_vicolamu_T", $datos["capacitacion_p2_4_vicolamu_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_predege_M", $datos["capacitacion_p2_4_predege_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_predege_H", $datos["capacitacion_p2_4_predege_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_predege_T", $datos["capacitacion_p2_4_predege_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_ascoydedeex_M", $datos["capacitacion_p2_4_ascoydedeex_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_ascoydedeex_H", $datos["capacitacion_p2_4_ascoydedeex_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_ascoydedeex_T", $datos["capacitacion_p2_4_ascoydedeex_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_siindejupepaad_M", $datos["capacitacion_p2_4_siindejupepaad_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_siindejupepaad_H", $datos["capacitacion_p2_4_siindejupepaad_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_siindejupepaad_T", $datos["capacitacion_p2_4_siindejupepaad_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_ataperin_M", $datos["capacitacion_p2_4_ataperin_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_ataperin_H", $datos["capacitacion_p2_4_ataperin_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_ataperin_T", $datos["capacitacion_p2_4_ataperin_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_atapercondis_M", $datos["capacitacion_p2_4_atapercondis_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_atapercondis_H", $datos["capacitacion_p2_4_atapercondis_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_atapercondis_T", $datos["capacitacion_p2_4_atapercondis_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_jusalt_M", $datos["capacitacion_p2_4_jusalt_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_jusalt_H", $datos["capacitacion_p2_4_jusalt_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_jusalt_T", $datos["capacitacion_p2_4_jusalt_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_justera_M", $datos["capacitacion_p2_4_justera_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_justera_H", $datos["capacitacion_p2_4_justera_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_justera_T", $datos["capacitacion_p2_4_justera_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_justransi_M", $datos["capacitacion_p2_4_justransi_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_justransi_H", $datos["capacitacion_p2_4_justransi_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_justransi_T", $datos["capacitacion_p2_4_justransi_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_atemuj_M", $datos["capacitacion_p2_4_atemuj_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_atemuj_H", $datos["capacitacion_p2_4_atemuj_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_atemuj_T", $datos["capacitacion_p2_4_atemuj_T"], PDO::PARAM_STR);

			$stmt -> bindParam(":capacitacion_p2_4_otros", $datos["capacitacion_p2_4_otros"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_otros_M", $datos["capacitacion_p2_4_otros_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_otros_H", $datos["capacitacion_p2_4_otros_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_4_otros_T", $datos["capacitacion_p2_4_otros_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_5_instuprga", $datos["capacitacion_p2_5_instuprga"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_6_evconconf_M", $datos["capacitacion_p2_6_evconconf_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_6_evconconf_H", $datos["capacitacion_p2_6_evconconf_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":capacitacion_p2_6_evconconf_T", $datos["capacitacion_p2_6_evconconf_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":presupuesto_p3", $datos["presupuesto_p3"], PDO::PARAM_STR);
			$stmt -> bindParam(":presupuestop3_1_anuaeje20", $datos["presupuestop3_1_anuaeje20"], PDO::PARAM_STR);
			$stmt -> bindParam(":presupuestop3_2_anuaeje20", $datos["presupuestop3_2_anuaeje20"], PDO::PARAM_STR);




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

	static public function mdlEditarFPoliciaTab3($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET
				mujeres_p4_protoInterna = :mujeres_p4_protoInterna
			, mujeres_p4_protoInterna_cual = :mujeres_p4_protoInterna_cual
			, mujeres_p4_interno = :mujeres_p4_interno
			, mujeres_p4_interno_cua = :mujeres_p4_interno_cua
			, mujeres_p4_protoInvmipp = :mujeres_p4_protoInvmipp
			, mujeres_p4_protoScjn = :mujeres_p4_protoScjn
			, mujeres_p4_ninguno = :mujeres_p4_ninguno
, mujeres_p4_otroProtocolo = :mujeres_p4_otroProtocolo
, mujeres_p4_otroProtocolo_cual = :mujeres_p4_otroProtocolo_cual



			, mujeres_p4_otro_nombre = :mujeres_p4_otro_nombre
			, mujeres_p4_otro_nombre2 = :mujeres_p4_otro_nombre2
			, mujeres_p4_1_buenprac = :mujeres_p4_1_buenprac
			, mujeres_p4_2_cualBuenprac = :mujeres_p4_2_cualBuenprac
			, mujeres_p4_3_justmuj_M = :mujeres_p4_3_justmuj_M
			, mujeres_p4_3_justmuj_H = :mujeres_p4_3_justmuj_H
			, mujeres_p4_3_justmuj_T = :mujeres_p4_3_justmuj_T
			, nna_p5_protoInterna = :nna_p5_protoInterna
			, nna_p5_protoInterna_cual = :nna_p5_protoInterna_cual
			, nna_p5_interno = :nna_p5_interno
			, nna_p5_interno_cua = :nna_p5_interno_cua
			, nna_p5_protoAteninte = :nna_p5_protoAteninte
			, nna_p5_protoActjust = :nna_p5_protoActjust
			, nna_p5_ninguno = :nna_p5_ninguno
			, nna_p5_otroProtocolo = :nna_p5_otroProtocolo
			, nna_p5_otroProtocolo_cual = :nna_p5_otroProtocolo_cual


			, nna_p5_1_buenpracs = :nna_p5_1_buenpracs
			, nna_p5_2_cualBuenpract = :nna_p5_2_cualBuenpract
			, ja_p5_3_espejust_M = :ja_p5_3_espejust_M
			, ja_p5_3_espejust_H = :ja_p5_3_espejust_H
			, ja_p5_3_espejust_T = :ja_p5_3_espejust_T
			, indigenas_p6_tradulenind = :indigenas_p6_tradulenind

			, indigenas_p6_1_nahuatl_M = :indigenas_p6_1_nahuatl_M
			, indigenas_p6_1_nahuatl_H = :indigenas_p6_1_nahuatl_H
			, indigenas_p6_1_nahuatl_T = :indigenas_p6_1_nahuatl_T
			, indigenas_p6_1_maya_M = :indigenas_p6_1_maya_M
			, indigenas_p6_1_maya_H = :indigenas_p6_1_maya_H
			, indigenas_p6_1_maya_T = :indigenas_p6_1_maya_T
			, indigenas_p6_1_tseltal_M = :indigenas_p6_1_tseltal_M
			, indigenas_p6_1_tseltal_H = :indigenas_p6_1_tseltal_H
			, indigenas_p6_1_tseltal_T = :indigenas_p6_1_tseltal_T
			, indigenas_p6_1_mixteco_M = :indigenas_p6_1_mixteco_M
			, indigenas_p6_1_mixteco_H = :indigenas_p6_1_mixteco_H
			, indigenas_p6_1_mixteco_T = :indigenas_p6_1_mixteco_T
			, indigenas_p6_1_tsotsil_M = :indigenas_p6_1_tsotsil_M
			, indigenas_p6_1_tsotsil_H = :indigenas_p6_1_tsotsil_H
			, indigenas_p6_1_tsotsil_T = :indigenas_p6_1_tsotsil_T
			, indigenas_p6_1_otro = :indigenas_p6_1_otro
			, indigenas_p6_1_otro_M = :indigenas_p6_1_otro_M
			, indigenas_p6_1_otro_H = :indigenas_p6_1_otro_H
			, indigenas_p6_1_otro_T = :indigenas_p6_1_otro_T
			, indigenas_p6_2_convenio = :indigenas_p6_2_convenio
			, indigenas_p6_2_nombinst = :indigenas_p6_2_nombinst
			, indigenas_p6_4_ProtoInter = :indigenas_p6_4_ProtoInter
			, indigenas_p6_4_ProtoInter_cual = :indigenas_p6_4_ProtoInter_cual
			, indigenas_p6_4_interno = :indigenas_p6_4_interno
			, indigenas_p6_4_interno_cual = :indigenas_p6_4_interno_cual
			, indigenas_p6_4_ProtoImpjust = :indigenas_p6_4_ProtoImpjust
			, indigenas_p6_4_ninguno = :indigenas_p6_4_ninguno
			, indigenas_p6_4_otro = :indigenas_p6_4_otro
			, indigenas_p6_4_otro_cual = :indigenas_p6_4_otro_cual
			, indigenas_p6_5_buenaspract = :indigenas_p6_5_buenaspract
			, indigenas_p6_6_cualbuenaspra = :indigenas_p6_6_cualbuenaspra











			WHERE id = :idFormulario");




			$stmt -> bindParam(":idFormulario", $datos["idFormulario"], PDO::PARAM_STR);
			$stmt -> bindParam(":mujeres_p4_protoInterna", $datos["mujeres_p4_protoInterna"], PDO::PARAM_STR);
			$stmt -> bindParam(":mujeres_p4_protoInterna_cual", $datos["mujeres_p4_protoInterna_cual"], PDO::PARAM_STR);
			$stmt -> bindParam(":mujeres_p4_interno", $datos["mujeres_p4_interno"], PDO::PARAM_STR);
			$stmt -> bindParam(":mujeres_p4_interno_cua", $datos["mujeres_p4_interno_cua"], PDO::PARAM_STR);
			$stmt -> bindParam(":mujeres_p4_protoInvmipp", $datos["mujeres_p4_protoInvmipp"], PDO::PARAM_STR);
			$stmt -> bindParam(":mujeres_p4_protoScjn", $datos["mujeres_p4_protoScjn"], PDO::PARAM_STR);
			$stmt -> bindParam(":mujeres_p4_ninguno", $datos["mujeres_p4_ninguno"], PDO::PARAM_STR);
			$stmt -> bindParam(":mujeres_p4_otroProtocolo", $datos["mujeres_p4_otroProtocolo"], PDO::PARAM_STR);
			$stmt -> bindParam(":mujeres_p4_otroProtocolo_cual", $datos["mujeres_p4_otroProtocolo_cual"], PDO::PARAM_STR);



			$stmt -> bindParam(":mujeres_p4_otro_nombre", $datos["mujeres_p4_otro_nombre"], PDO::PARAM_STR);
			$stmt -> bindParam(":mujeres_p4_otro_nombre2", $datos["mujeres_p4_otro_nombre2"], PDO::PARAM_STR);
			$stmt -> bindParam(":mujeres_p4_1_buenprac", $datos["mujeres_p4_1_buenprac"], PDO::PARAM_STR);
			$stmt -> bindParam(":mujeres_p4_2_cualBuenprac", $datos["mujeres_p4_2_cualBuenprac"], PDO::PARAM_STR);
			$stmt -> bindParam(":mujeres_p4_3_justmuj_M", $datos["mujeres_p4_3_justmuj_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":mujeres_p4_3_justmuj_H", $datos["mujeres_p4_3_justmuj_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":mujeres_p4_3_justmuj_T", $datos["mujeres_p4_3_justmuj_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":nna_p5_protoInterna", $datos["nna_p5_protoInterna"], PDO::PARAM_STR);
			$stmt -> bindParam(":nna_p5_protoInterna_cual", $datos["nna_p5_protoInterna_cual"], PDO::PARAM_STR);
			$stmt -> bindParam(":nna_p5_interno", $datos["nna_p5_interno"], PDO::PARAM_STR);
			$stmt -> bindParam(":nna_p5_interno_cua", $datos["nna_p5_interno_cua"], PDO::PARAM_STR);
			$stmt -> bindParam(":nna_p5_protoAteninte", $datos["nna_p5_protoAteninte"], PDO::PARAM_STR);
			$stmt -> bindParam(":nna_p5_protoActjust", $datos["nna_p5_protoActjust"], PDO::PARAM_STR);
			$stmt -> bindParam(":nna_p5_ninguno", $datos["nna_p5_ninguno"], PDO::PARAM_STR);



			$stmt -> bindParam(":nna_p5_otroProtocolo", $datos["nna_p5_otroProtocolo"], PDO::PARAM_STR);

			$stmt -> bindParam(":nna_p5_otroProtocolo_cual", $datos["nna_p5_otroProtocolo_cual"], PDO::PARAM_STR);



			$stmt -> bindParam(":nna_p5_1_buenpracs", $datos["nna_p5_1_buenpracs"], PDO::PARAM_STR);
			$stmt -> bindParam(":nna_p5_2_cualBuenpract", $datos["nna_p5_2_cualBuenpract"], PDO::PARAM_STR);
			$stmt -> bindParam(":ja_p5_3_espejust_M", $datos["ja_p5_3_espejust_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":ja_p5_3_espejust_H", $datos["ja_p5_3_espejust_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":ja_p5_3_espejust_T", $datos["ja_p5_3_espejust_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":indigenas_p6_tradulenind", $datos["indigenas_p6_tradulenind"], PDO::PARAM_STR);

			$stmt -> bindParam(":indigenas_p6_1_nahuatl_M", $datos["indigenas_p6_1_nahuatl_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":indigenas_p6_1_nahuatl_H", $datos["indigenas_p6_1_nahuatl_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":indigenas_p6_1_nahuatl_T", $datos["indigenas_p6_1_nahuatl_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":indigenas_p6_1_maya_M", $datos["indigenas_p6_1_maya_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":indigenas_p6_1_maya_H", $datos["indigenas_p6_1_maya_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":indigenas_p6_1_maya_T", $datos["indigenas_p6_1_maya_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":indigenas_p6_1_tseltal_M", $datos["indigenas_p6_1_tseltal_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":indigenas_p6_1_tseltal_H", $datos["indigenas_p6_1_tseltal_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":indigenas_p6_1_tseltal_T", $datos["indigenas_p6_1_tseltal_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":indigenas_p6_1_mixteco_M", $datos["indigenas_p6_1_mixteco_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":indigenas_p6_1_mixteco_H", $datos["indigenas_p6_1_mixteco_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":indigenas_p6_1_mixteco_T", $datos["indigenas_p6_1_mixteco_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":indigenas_p6_1_tsotsil_M", $datos["indigenas_p6_1_tsotsil_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":indigenas_p6_1_tsotsil_H", $datos["indigenas_p6_1_tsotsil_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":indigenas_p6_1_tsotsil_T", $datos["indigenas_p6_1_tsotsil_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":indigenas_p6_1_otro", $datos["indigenas_p6_1_otro"], PDO::PARAM_STR);
			$stmt -> bindParam(":indigenas_p6_1_otro_M", $datos["indigenas_p6_1_otro_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":indigenas_p6_1_otro_H", $datos["indigenas_p6_1_otro_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":indigenas_p6_1_otro_T", $datos["indigenas_p6_1_otro_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":indigenas_p6_2_convenio", $datos["indigenas_p6_2_convenio"], PDO::PARAM_STR);
			$stmt -> bindParam(":indigenas_p6_2_nombinst", $datos["indigenas_p6_2_nombinst"], PDO::PARAM_STR);
			$stmt -> bindParam(":indigenas_p6_4_ProtoInter", $datos["indigenas_p6_4_ProtoInter"], PDO::PARAM_STR);
			$stmt -> bindParam(":indigenas_p6_4_ProtoInter_cual", $datos["indigenas_p6_4_ProtoInter_cual"], PDO::PARAM_STR);
			$stmt -> bindParam(":indigenas_p6_4_interno", $datos["indigenas_p6_4_interno"], PDO::PARAM_STR);
			$stmt -> bindParam(":indigenas_p6_4_interno_cual", $datos["indigenas_p6_4_interno_cual"], PDO::PARAM_STR);
			$stmt -> bindParam(":indigenas_p6_4_ProtoImpjust", $datos["indigenas_p6_4_ProtoImpjust"], PDO::PARAM_STR);
			$stmt -> bindParam(":indigenas_p6_4_ninguno", $datos["indigenas_p6_4_ninguno"], PDO::PARAM_STR);
			$stmt -> bindParam(":indigenas_p6_4_otro", $datos["indigenas_p6_4_otro"], PDO::PARAM_STR);
			$stmt -> bindParam(":indigenas_p6_4_otro_cual", $datos["indigenas_p6_4_otro_cual"], PDO::PARAM_STR);
			$stmt -> bindParam(":indigenas_p6_5_buenaspract", $datos["indigenas_p6_5_buenaspract"], PDO::PARAM_STR);
			$stmt -> bindParam(":indigenas_p6_6_cualbuenaspra", $datos["indigenas_p6_6_cualbuenaspra"], PDO::PARAM_STR);















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

	static public function mdlEditarFPoliciaTab4($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET
				extranjeras_p7_tradLenExt = :extranjeras_p7_tradLenExt
			, extranjeras_p7_1_traductor_M = :extranjeras_p7_1_traductor_M
			, extranjeras_p7_1_traductor_H = :extranjeras_p7_1_traductor_H
			, extranjeras_p7_1_traductor_T = :extranjeras_p7_1_traductor_T
			, extranjeras_p7_1_ingles_M = :extranjeras_p7_1_ingles_M
			, extranjeras_p7_1_ingles_H = :extranjeras_p7_1_ingles_H
			, extranjeras_p7_1_ingles_T = :extranjeras_p7_1_ingles_T
  		, extranjeras_p7_1_chino_M = :extranjeras_p7_1_chino_M
			, extranjeras_p7_1_chino_H = :extranjeras_p7_1_chino_H
			, extranjeras_p7_1_chino_T = :extranjeras_p7_1_chino_T
			, extranjeras_p7_1_frances_M = :extranjeras_p7_1_frances_M
			, extranjeras_p7_1_frances_H = :extranjeras_p7_1_frances_H
			, extranjeras_p7_1_frances_T = :extranjeras_p7_1_frances_T
			, extranjeras_p7_1_arabe_M = :extranjeras_p7_1_arabe_M
			, extranjeras_p7_1_arabe_H = :extranjeras_p7_1_arabe_H
			, extranjeras_p7_1_arabe_T = :extranjeras_p7_1_arabe_T
			, extranjeras_p7_1_ruso_M = :extranjeras_p7_1_ruso_M
			, extranjeras_p7_1_ruso_H = :extranjeras_p7_1_ruso_H
			, extranjeras_p7_1_ruso_T = :extranjeras_p7_1_ruso_T
			, extranjeras_p7_1_otro = :extranjeras_p7_1_otro
			, extranjeras_p7_1_otro_M = :extranjeras_p7_1_otro_M
			, extranjeras_p7_1_otro_H = :extranjeras_p7_1_otro_H
			, extranjeras_p7_1_otro_T = :extranjeras_p7_1_otro_T
			, extranjeras_p7_2_ConvInst = :extranjeras_p7_2_ConvInst
			, extranjeras_p7_3_nombreInsti = :extranjeras_p7_3_nombreInsti
			, extranjeras_p7_4_ProtoInterna = :extranjeras_p7_4_ProtoInterna
			, extranjeras_p7_4_ProtoInterna_cual = :extranjeras_p7_4_ProtoInterna_cual
			, extranjeras_p7_4_interno = :extranjeras_p7_4_interno
			, extranjeras_p7_4_interno_cual = :extranjeras_p7_4_interno_cual
			, extranjeras_p7_4_ninguno = :extranjeras_p7_4_ninguno
			, extranjeras_p7_4_Otro = :extranjeras_p7_4_Otro
			, extranjeras_p7_4_Otro_cual = :extranjeras_p7_4_Otro_cual
			, extranjeras_p7_5_buenasprac = :extranjeras_p7_5_buenasprac
			, extranjeras_p7_6_buenasprac_cual = :extranjeras_p7_6_buenasprac_cual
			, discapacidad_p8_braile = :discapacidad_p8_braile
			, discapacidad_p8_LenSen = :discapacidad_p8_LenSen
			, discapacidad_p8_1_nombreInst = :discapacidad_p8_1_nombreInst
			, discapacidad_p8_2_ProtoInterna = :discapacidad_p8_2_ProtoInterna
			, discapacidad_p8_2_ProtoInterna_cual = :discapacidad_p8_2_ProtoInterna_cual
			, discapacidad_p8_2_interno = :discapacidad_p8_2_interno
			, discapacidad_p8_2_interno_cua = :discapacidad_p8_2_interno_cua
			, discapacidad_p8_2_ProtoImpJust = :discapacidad_p8_2_ProtoImpJust
			, discapacidad_p8_2_ninguno = :discapacidad_p8_2_ninguno
			, discapacidad_p8_2_otros = :discapacidad_p8_2_otros
			, discapacidad_p8_2_otros_cual = :discapacidad_p8_2_otros_cual
			, discapacidad_p8_3_buenasprac = :discapacidad_p8_3_buenasprac
			, discapacidad_p8_3_buenasprac_cual = :discapacidad_p8_3_buenasprac_cual






			WHERE id = :idFormulario");




			$stmt -> bindParam(":idFormulario", $datos["idFormulario"], PDO::PARAM_STR);
			$stmt -> bindParam(":extranjeras_p7_tradLenExt", $datos["extranjeras_p7_tradLenExt"], PDO::PARAM_STR);
			$stmt -> bindParam(":extranjeras_p7_1_traductor_M", $datos["extranjeras_p7_1_traductor_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":extranjeras_p7_1_traductor_H", $datos["extranjeras_p7_1_traductor_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":extranjeras_p7_1_traductor_T", $datos["extranjeras_p7_1_traductor_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":extranjeras_p7_1_ingles_M", $datos["extranjeras_p7_1_ingles_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":extranjeras_p7_1_ingles_H", $datos["extranjeras_p7_1_ingles_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":extranjeras_p7_1_ingles_T", $datos["extranjeras_p7_1_ingles_T"], PDO::PARAM_STR);


			$stmt -> bindParam(":extranjeras_p7_1_chino_M", $datos["extranjeras_p7_1_chino_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":extranjeras_p7_1_chino_H", $datos["extranjeras_p7_1_chino_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":extranjeras_p7_1_chino_T", $datos["extranjeras_p7_1_chino_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":extranjeras_p7_1_frances_M", $datos["extranjeras_p7_1_frances_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":extranjeras_p7_1_frances_H", $datos["extranjeras_p7_1_frances_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":extranjeras_p7_1_frances_T", $datos["extranjeras_p7_1_frances_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":extranjeras_p7_1_arabe_M", $datos["extranjeras_p7_1_arabe_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":extranjeras_p7_1_arabe_H", $datos["extranjeras_p7_1_arabe_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":extranjeras_p7_1_arabe_T", $datos["extranjeras_p7_1_arabe_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":extranjeras_p7_1_ruso_M", $datos["extranjeras_p7_1_ruso_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":extranjeras_p7_1_ruso_H", $datos["extranjeras_p7_1_ruso_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":extranjeras_p7_1_ruso_T", $datos["extranjeras_p7_1_ruso_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":extranjeras_p7_1_otro", $datos["extranjeras_p7_1_otro"], PDO::PARAM_STR);
			$stmt -> bindParam(":extranjeras_p7_1_otro_M", $datos["extranjeras_p7_1_otro_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":extranjeras_p7_1_otro_H", $datos["extranjeras_p7_1_otro_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":extranjeras_p7_1_otro_T", $datos["extranjeras_p7_1_otro_T"], PDO::PARAM_STR);
			$stmt -> bindParam(":extranjeras_p7_2_ConvInst", $datos["extranjeras_p7_2_ConvInst"], PDO::PARAM_STR);
			$stmt -> bindParam(":extranjeras_p7_3_nombreInsti", $datos["extranjeras_p7_3_nombreInsti"], PDO::PARAM_STR);
			$stmt -> bindParam(":extranjeras_p7_4_ProtoInterna", $datos["extranjeras_p7_4_ProtoInterna"], PDO::PARAM_STR);
			$stmt -> bindParam(":extranjeras_p7_4_ProtoInterna_cual", $datos["extranjeras_p7_4_ProtoInterna_cual"], PDO::PARAM_STR);
			$stmt -> bindParam(":extranjeras_p7_4_interno", $datos["extranjeras_p7_4_interno"], PDO::PARAM_STR);
			$stmt -> bindParam(":extranjeras_p7_4_interno_cual", $datos["extranjeras_p7_4_interno_cual"], PDO::PARAM_STR);
			$stmt -> bindParam(":extranjeras_p7_4_ninguno", $datos["extranjeras_p7_4_ninguno"], PDO::PARAM_STR);
			$stmt -> bindParam(":extranjeras_p7_4_Otro", $datos["extranjeras_p7_4_Otro"], PDO::PARAM_STR);
			$stmt -> bindParam(":extranjeras_p7_4_Otro_cual", $datos["extranjeras_p7_4_Otro_cual"], PDO::PARAM_STR);
			$stmt -> bindParam(":extranjeras_p7_5_buenasprac", $datos["extranjeras_p7_5_buenasprac"], PDO::PARAM_STR);
			$stmt -> bindParam(":extranjeras_p7_6_buenasprac_cual", $datos["extranjeras_p7_6_buenasprac_cual"], PDO::PARAM_STR);
			$stmt -> bindParam(":discapacidad_p8_braile", $datos["discapacidad_p8_braile"], PDO::PARAM_STR);
			$stmt -> bindParam(":discapacidad_p8_LenSen", $datos["discapacidad_p8_LenSen"], PDO::PARAM_STR);
			$stmt -> bindParam(":discapacidad_p8_1_nombreInst", $datos["discapacidad_p8_1_nombreInst"], PDO::PARAM_STR);
			$stmt -> bindParam(":discapacidad_p8_2_ProtoInterna", $datos["discapacidad_p8_2_ProtoInterna"], PDO::PARAM_STR);
			$stmt -> bindParam(":discapacidad_p8_2_ProtoInterna_cual", $datos["discapacidad_p8_2_ProtoInterna_cual"], PDO::PARAM_STR);
			$stmt -> bindParam(":discapacidad_p8_2_interno", $datos["discapacidad_p8_2_interno"], PDO::PARAM_STR);
			$stmt -> bindParam(":discapacidad_p8_2_interno_cua", $datos["discapacidad_p8_2_interno_cua"], PDO::PARAM_STR);
			$stmt -> bindParam(":discapacidad_p8_2_ProtoImpJust", $datos["discapacidad_p8_2_ProtoImpJust"], PDO::PARAM_STR);
			$stmt -> bindParam(":discapacidad_p8_2_ninguno", $datos["discapacidad_p8_2_ninguno"], PDO::PARAM_STR);
			$stmt -> bindParam(":discapacidad_p8_2_otros", $datos["discapacidad_p8_2_otros"], PDO::PARAM_STR);
			$stmt -> bindParam(":discapacidad_p8_2_otros", $datos["discapacidad_p8_2_otros"], PDO::PARAM_STR);
			$stmt -> bindParam(":discapacidad_p8_2_otros_cual", $datos["discapacidad_p8_2_otros_cual"], PDO::PARAM_STR);
			$stmt -> bindParam(":discapacidad_p8_3_buenasprac", $datos["discapacidad_p8_3_buenasprac"], PDO::PARAM_STR);
			$stmt -> bindParam(":discapacidad_p8_3_buenasprac_cual", $datos["discapacidad_p8_3_buenasprac_cual"], PDO::PARAM_STR);





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

	static public function mdlEditarFPoliciaTab5($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET
				colaboracion_p9_tipcol = :colaboracion_p9_tipcol
			, colaboracion_p9_1_instcol = :colaboracion_p9_1_instcol
			, colaboracion_p9_2_finan = :colaboracion_p9_2_finan
			, colaboracion_p9_2_dona = :colaboracion_p9_2_dona
			, colaboracion_p9_2_capa = :colaboracion_p9_2_capa
			, colaboracion_p9_2_otros = :colaboracion_p9_2_otros
			, colaboracion_p9_2_cual = :colaboracion_p9_2_cual

			, colaboracion_p9_3_descol = :colaboracion_p9_3_descol




			, registro_p10_intsispla = :registro_p10_intsispla
			, registro_p10_1_servsispl = :registro_p10_1_servsispl
			, registro_p10_2_proliga = :registro_p10_2_proliga





			, registro_p10_lib = :registro_p10_lib
			, registro_p10_imp = :registro_p10_imp
			, registro_p10_tab = :registro_p10_tab
			, registro_p10_cel = :registro_p10_cel
			, registro_p10_comp = :registro_p10_comp
			, registro_p10_otro = :registro_p10_otro
			, registro_p10_cual = :registro_p10_cual
			, registro_p10_1_ind = :registro_p10_1_ind
			, registro_p10_1_per = :registro_p10_1_per
			, registro_p10_1_cap = :registro_p10_1_cap
			, registro_p10_1_perdet = :registro_p10_1_perdet
			, registro_p10_1_del = :registro_p10_1_del
			, registro_p10_1_del = :registro_p10_1_del
			, registro_p10_1_vic = :registro_p10_1_vic
			, registro_p10_1_perdes = :registro_p10_1_perdes
			, registro_p10_1_den = :registro_p10_1_den
			, registro_p10_1_pedetfad = :registro_p10_1_pedetfad
			, registro_p10_1_pedetpdis = :registro_p10_1_pedetpdis
			, registro_p10_1_llam = :registro_p10_1_llam
			, registro_p10_1_dil = :registro_p10_1_dil
			, registro_p10_1_part = :registro_p10_1_part
			, registro_p10_1_reu = :registro_p10_1_reu
			, registro_p10_1_comer = :registro_p10_1_comer
			, registro_p10_1_esc = :registro_p10_1_esc
			, registro_p10_1_atn = :registro_p10_1_atn
			, registro_p10_1_actu = :registro_p10_1_actu
			, registro_p10_1_otros = :registro_p10_1_otros
			, registro_p10_1_cuales = :registro_p10_1_cuales
			, registro_p10_2_lib = :registro_p10_2_lib
			, registro_p10_2_bd = :registro_p10_2_bd
			, registro_p10_2_ap = :registro_p10_2_ap
			, registro_p10_2_plat = :registro_p10_2_plat
			, registro_p10_2_cap = :registro_p10_2_cap
			, registro_p10_2_otro = :registro_p10_2_otro
			, registro_p10_2_cual = :registro_p10_2_cual
			, registro_p10_3_inter = :registro_p10_3_inter
			, registro_p10_4_instmun = :registro_p10_4_instmun
			, registro_p10_4_instmunot = :registro_p10_4_instmunot
			, registro_p10_4_instestot = :registro_p10_4_instestot
			, registro_p10_4_sec = :registro_p10_4_sec
			, registro_p10_4_guar = :registro_p10_4_guar
			, registro_p10_4_procotras = :registro_p10_4_procotras
			, registro_p10_4_fisc = :registro_p10_4_fisc
			, registro_p10_4_podjud = :registro_p10_4_podjud
			, registro_p10_4_podjudotras = :registro_p10_4_podjudotras
			, registro_p10_4_podfed = :registro_p10_4_podfed
			, registro_p10_4_sipenent = :registro_p10_4_sipenent
			, registro_p10_4_sispen = :registro_p10_4_sispen
			, registro_p10_4_sispenfed = :registro_p10_4_sispenfed
			, registro_p10_4_otro = :registro_p10_4_otro
			, registro_p10_4_cual = :registro_p10_4_cual





			WHERE id = :idFormulario");




			$stmt -> bindParam(":idFormulario", $datos["idFormulario"], PDO::PARAM_STR);
			$stmt -> bindParam(":colaboracion_p9_tipcol", $datos["colaboracion_p9_tipcol"], PDO::PARAM_STR);
			$stmt -> bindParam(":colaboracion_p9_1_instcol", $datos["colaboracion_p9_1_instcol"], PDO::PARAM_STR);
			$stmt -> bindParam(":colaboracion_p9_2_finan", $datos["colaboracion_p9_2_finan"], PDO::PARAM_STR);
			$stmt -> bindParam(":colaboracion_p9_2_dona", $datos["colaboracion_p9_2_dona"], PDO::PARAM_STR);
			$stmt -> bindParam(":colaboracion_p9_2_capa", $datos["colaboracion_p9_2_capa"], PDO::PARAM_STR);
			$stmt -> bindParam(":colaboracion_p9_2_otros", $datos["colaboracion_p9_2_otros"], PDO::PARAM_STR);
			$stmt -> bindParam(":colaboracion_p9_2_cual", $datos["colaboracion_p9_2_cual"], PDO::PARAM_STR);

			$stmt -> bindParam(":colaboracion_p9_3_descol", $datos["colaboracion_p9_3_descol"], PDO::PARAM_STR);


			$stmt -> bindParam(":registro_p10_intsispla", $datos["registro_p10_intsispla"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_p10_1_servsispl", $datos["registro_p10_1_servsispl"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_p10_2_proliga", $datos["registro_p10_2_proliga"], PDO::PARAM_STR);



			$stmt -> bindParam(":registro_p10_lib", $datos["registro_p10_lib"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_p10_imp", $datos["registro_p10_imp"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_p10_tab", $datos["registro_p10_tab"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_p10_cel", $datos["registro_p10_cel"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_p10_comp", $datos["registro_p10_comp"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_p10_otro", $datos["registro_p10_otro"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_p10_cual", $datos["registro_p10_cual"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_p10_1_ind", $datos["registro_p10_1_ind"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_p10_1_per", $datos["registro_p10_1_per"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_p10_1_cap", $datos["registro_p10_1_cap"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_p10_1_perdet", $datos["registro_p10_1_perdet"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_p10_1_del", $datos["registro_p10_1_del"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_p10_1_vic", $datos["registro_p10_1_vic"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_p10_1_perdes", $datos["registro_p10_1_perdes"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_p10_1_den", $datos["registro_p10_1_den"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_p10_1_pedetfad", $datos["registro_p10_1_pedetfad"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_p10_1_pedetpdis", $datos["registro_p10_1_pedetpdis"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_p10_1_llam", $datos["registro_p10_1_llam"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_p10_1_dil", $datos["registro_p10_1_dil"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_p10_1_part", $datos["registro_p10_1_part"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_p10_1_reu", $datos["registro_p10_1_reu"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_p10_1_comer", $datos["registro_p10_1_comer"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_p10_1_esc", $datos["registro_p10_1_esc"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_p10_1_atn", $datos["registro_p10_1_atn"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_p10_1_actu", $datos["registro_p10_1_actu"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_p10_1_otros", $datos["registro_p10_1_otros"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_p10_1_cuales", $datos["registro_p10_1_cuales"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_p10_2_lib", $datos["registro_p10_2_lib"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_p10_2_bd", $datos["registro_p10_2_bd"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_p10_2_ap", $datos["registro_p10_2_ap"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_p10_2_plat", $datos["registro_p10_2_plat"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_p10_2_cap", $datos["registro_p10_2_cap"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_p10_2_otro", $datos["registro_p10_2_otro"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_p10_2_cual", $datos["registro_p10_2_cual"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_p10_3_inter", $datos["registro_p10_3_inter"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_p10_4_instmun", $datos["registro_p10_4_instmun"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_p10_4_instmunot", $datos["registro_p10_4_instmunot"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_p10_4_instestot", $datos["registro_p10_4_instestot"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_p10_4_sec", $datos["registro_p10_4_sec"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_p10_4_guar", $datos["registro_p10_4_guar"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_p10_4_procotras", $datos["registro_p10_4_procotras"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_p10_4_fisc", $datos["registro_p10_4_fisc"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_p10_4_podjud", $datos["registro_p10_4_podjud"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_p10_4_podjudotras", $datos["registro_p10_4_podjudotras"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_p10_4_podfed", $datos["registro_p10_4_podfed"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_p10_4_sipenent", $datos["registro_p10_4_sipenent"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_p10_4_sispen", $datos["registro_p10_4_sispen"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_p10_4_sispenfed", $datos["registro_p10_4_sispenfed"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_p10_4_otro", $datos["registro_p10_4_otro"], PDO::PARAM_STR);
			$stmt -> bindParam(":registro_p10_4_cual", $datos["registro_p10_4_cual"], PDO::PARAM_STR);








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

	static public function mdlEditarFPoliciaTab6($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET
				indicadores_p11_modeval = :indicadores_p11_modeval
			, indicadores_p11_1_cualind = :indicadores_p11_1_cualind
			, evaluacion_p11_2_evalind = :evaluacion_p11_2_evalind
			, indicadores_p12_bunprac = :indicadores_p12_bunprac
			, transparencia_p12_1_cualpract = :transparencia_p12_1_cualpract
			, necesidades_p13_cap = :necesidades_p13_cap
			, necesidades_p13_recmat = :necesidades_p13_recmat
			, necesidades_p13_rectec = :necesidades_p13_rectec
			, necesidades_p13_per = :necesidades_p13_per
			, necesidades_p13_infra = :necesidades_p13_infra
			, necesidades_p13_mej = :necesidades_p13_mej
			, necesidades_p13_prot = :necesidades_p13_prot
			, necesidades_p13_otros = :necesidades_p13_otros
			, necesidades_p13_cual = :necesidades_p13_cual
			, necesidades_p13_1_desnec = :necesidades_p13_1_desnec





			WHERE id = :idFormulario");




			$stmt -> bindParam(":idFormulario", $datos["idFormulario"], PDO::PARAM_STR);
			$stmt -> bindParam(":indicadores_p11_modeval", $datos["indicadores_p11_modeval"], PDO::PARAM_STR);
			$stmt -> bindParam(":indicadores_p11_1_cualind", $datos["indicadores_p11_1_cualind"], PDO::PARAM_STR);
			$stmt -> bindParam(":evaluacion_p11_2_evalind", $datos["evaluacion_p11_2_evalind"], PDO::PARAM_STR);
			$stmt -> bindParam(":indicadores_p12_bunprac", $datos["indicadores_p12_bunprac"], PDO::PARAM_STR);
			$stmt -> bindParam(":transparencia_p12_1_cualpract", $datos["transparencia_p12_1_cualpract"], PDO::PARAM_STR);
			$stmt -> bindParam(":necesidades_p13_cap", $datos["necesidades_p13_cap"], PDO::PARAM_STR);
			$stmt -> bindParam(":necesidades_p13_recmat", $datos["necesidades_p13_recmat"], PDO::PARAM_STR);
			$stmt -> bindParam(":necesidades_p13_rectec", $datos["necesidades_p13_rectec"], PDO::PARAM_STR);
			$stmt -> bindParam(":necesidades_p13_per", $datos["necesidades_p13_per"], PDO::PARAM_STR);
			$stmt -> bindParam(":necesidades_p13_infra", $datos["necesidades_p13_infra"], PDO::PARAM_STR);
			$stmt -> bindParam(":necesidades_p13_mej", $datos["necesidades_p13_mej"], PDO::PARAM_STR);
			$stmt -> bindParam(":necesidades_p13_prot", $datos["necesidades_p13_prot"], PDO::PARAM_STR);
			$stmt -> bindParam(":necesidades_p13_otros", $datos["necesidades_p13_otros"], PDO::PARAM_STR);
			$stmt -> bindParam(":necesidades_p13_cual", $datos["necesidades_p13_cual"], PDO::PARAM_STR);
			$stmt -> bindParam(":necesidades_p13_1_desnec", $datos["necesidades_p13_1_desnec"], PDO::PARAM_STR);





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



	static public function mdlEditarFPoliciaTab7($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET

 				denunciaserv_p14_den = :denunciaserv_p14_den
			, denunciaserv_p14_den_cual = :denunciaserv_p14_den_cual
			, denunciaserv_p14_1_orginv = :denunciaserv_p14_1_orginv
			, denunciaserv_p14_2_quej = :denunciaserv_p14_2_quej

			, denunciaserv_p14_3_inv_M = :denunciaserv_p14_3_inv_M
			, denunciaserv_p14_3_inv_H = :denunciaserv_p14_3_inv_H
			, denunciaserv_p14_3_inv_T = :denunciaserv_p14_3_inv_T

			, denunciaserv_p14_3_int_M = :denunciaserv_p14_3_int_M
			, denunciaserv_p14_3_int_H = :denunciaserv_p14_3_int_H
			, denunciaserv_p14_3_int_T = :denunciaserv_p14_3_int_T

			, denunciaserv_p14_3_reac_M = :denunciaserv_p14_3_reac_M
			, denunciaserv_p14_3_reac_H = :denunciaserv_p14_3_reac_H
			, denunciaserv_p14_3_reac_T = :denunciaserv_p14_3_reac_T

			, denunciaserv_p14_3_proc_M = :denunciaserv_p14_3_proc_M
			, denunciaserv_p14_3_proc_H = :denunciaserv_p14_3_proc_H
			, denunciaserv_p14_3_proc_T = :denunciaserv_p14_3_proc_T

			, denunciaserv_p14_3_seg_M = :denunciaserv_p14_3_seg_M
			, denunciaserv_p14_3_seg_H = :denunciaserv_p14_3_seg_H
			, denunciaserv_p14_3_seg_T = :denunciaserv_p14_3_seg_T

			, denunciaserv_p14_3_prev_M = :denunciaserv_p14_3_prev_M
			, denunciaserv_p14_3_prev_H = :denunciaserv_p14_3_prev_H
			, denunciaserv_p14_3_prev_T = :denunciaserv_p14_3_prev_T

			, denunciaserv_p14_3_pri_M = :denunciaserv_p14_3_pri_M
			, denunciaserv_p14_3_pri_H = :denunciaserv_p14_3_pri_H
			, denunciaserv_p14_3_pri_T = :denunciaserv_p14_3_pri_T

			, denunciaserv_p14_3_otros = :denunciaserv_p14_3_otros
			, denunciaserv_p14_3_otros_M = :denunciaserv_p14_3_otros_M
			, denunciaserv_p14_3_otros_H = :denunciaserv_p14_3_otros_H
			, denunciaserv_p14_3_otros_T = :denunciaserv_p14_3_otros_T

			, denunciaserv_p14_4_inv_M = :denunciaserv_p14_4_inv_M
			, denunciaserv_p14_4_inv_H = :denunciaserv_p14_4_inv_H
			, denunciaserv_p14_4_inv_T = :denunciaserv_p14_4_inv_T

			, denunciaserv_p14_4_intel_M = :denunciaserv_p14_4_intel_M
			, denunciaserv_p14_4_intel_H = :denunciaserv_p14_4_intel_H
			, denunciaserv_p14_4_intel_T = :denunciaserv_p14_4_intel_T

			, denunciaserv_p14_4_reac_M = :denunciaserv_p14_4_reac_M
			, denunciaserv_p14_4_reac_H = :denunciaserv_p14_4_reac_H
			, denunciaserv_p14_4_reac_T = :denunciaserv_p14_4_reac_T

			, denunciaserv_p14_4_proc_M = :denunciaserv_p14_4_proc_M
			, denunciaserv_p14_4_proc_H = :denunciaserv_p14_4_proc_H
			, denunciaserv_p14_4_proc_T = :denunciaserv_p14_4_proc_T

			, denunciaserv_p14_4_seg_M = :denunciaserv_p14_4_seg_M
			, denunciaserv_p14_4_seg_H = :denunciaserv_p14_4_seg_H
			, denunciaserv_p14_4_seg_T = :denunciaserv_p14_4_seg_T

			, denunciaserv_p14_4_prev_M = :denunciaserv_p14_4_prev_M
			, denunciaserv_p14_4_prev_H = :denunciaserv_p14_4_prev_H
			, denunciaserv_p14_4_prev_T = :denunciaserv_p14_4_prev_T

			, denunciaserv_p14_4_pri_M = :denunciaserv_p14_4_pri_M
			, denunciaserv_p14_4_pri_H = :denunciaserv_p14_4_pri_H
			, denunciaserv_p14_4_pri_T = :denunciaserv_p14_4_pri_T

			, denunciaserv_p14_4_otroscual = :denunciaserv_p14_4_otroscual
			, denunciaserv_p14_4_otros_M = :denunciaserv_p14_4_otros_M
			, denunciaserv_p14_4_otros_H = :denunciaserv_p14_4_otros_H
			, denunciaserv_p14_4_otros_T = :denunciaserv_p14_4_otros_T

			, denunciaserv_p142_den = :denunciaserv_p142_den
			, denunciaserv_p142_den_cual = :denunciaserv_p142_den_cual
			, denunciaserv_p142_2_quej = :denunciaserv_p142_2_quej
			, denunciaserv_p142_3_inv_M = :denunciaserv_p142_3_inv_M
			, denunciaserv_p142_3_inv_H = :denunciaserv_p142_3_inv_H
			, denunciaserv_p142_3_inv_T = :denunciaserv_p142_3_inv_T
			, denunciaserv_p142_3_int_M = :denunciaserv_p142_3_int_M
			, denunciaserv_p142_3_int_H = :denunciaserv_p142_3_int_H
			, denunciaserv_p142_3_int_T = :denunciaserv_p142_3_int_T
			, denunciaserv_p142_3_reac_M = :denunciaserv_p142_3_reac_M
			, denunciaserv_p142_3_reac_H = :denunciaserv_p142_3_reac_H
			, denunciaserv_p142_3_reac_T = :denunciaserv_p142_3_reac_T
			, denunciaserv_p142_3_proc_M = :denunciaserv_p142_3_proc_M
			, denunciaserv_p142_3_proc_H = :denunciaserv_p142_3_proc_H
			, denunciaserv_p142_3_proc_T = :denunciaserv_p142_3_proc_T
			, denunciaserv_p142_3_seg_M = :denunciaserv_p142_3_seg_M
			, denunciaserv_p142_3_seg_H = :denunciaserv_p142_3_seg_H
			, denunciaserv_p142_3_seg_T = :denunciaserv_p142_3_seg_T
			, denunciaserv_p142_3_prev_M = :denunciaserv_p142_3_prev_M
			, denunciaserv_p142_3_prev_H = :denunciaserv_p142_3_prev_H
			, denunciaserv_p142_3_prev_T = :denunciaserv_p142_3_prev_T
			, denunciaserv_p142_3_pri_M = :denunciaserv_p142_3_pri_M
			, denunciaserv_p142_3_pri_H = :denunciaserv_p142_3_pri_H
			, denunciaserv_p142_3_pri_M = :denunciaserv_p142_3_pri_M
			, denunciaserv_p142_3_pri_T = :denunciaserv_p142_3_pri_T
			, denunciaserv_p142_3_otros = :denunciaserv_p142_3_otros
			, denunciaserv_p142_3_otros_M = :denunciaserv_p142_3_otros_M
			, denunciaserv_p142_3_otros_H = :denunciaserv_p142_3_otros_H
			, denunciaserv_p142_3_otros_T = :denunciaserv_p142_3_otros_T
			, denunciaserv_p142_4_inv_M = :denunciaserv_p142_4_inv_M
			, denunciaserv_p142_4_inv_H = :denunciaserv_p142_4_inv_H
			, denunciaserv_p142_4_inv_T = :denunciaserv_p142_4_inv_T
			, denunciaserv_p142_4_intel_M = :denunciaserv_p142_4_intel_M
			, denunciaserv_p142_4_intel_H = :denunciaserv_p142_4_intel_H
			, denunciaserv_p142_4_intel_T = :denunciaserv_p142_4_intel_T
			, denunciaserv_p142_4_reac_M = :denunciaserv_p142_4_reac_M
			, denunciaserv_p142_4_reac_H = :denunciaserv_p142_4_reac_H
			, denunciaserv_p142_4_reac_T = :denunciaserv_p142_4_reac_T
			, denunciaserv_p142_4_proc_M = :denunciaserv_p142_4_proc_M
			, denunciaserv_p142_4_proc_H = :denunciaserv_p142_4_proc_H
			, denunciaserv_p142_4_proc_T = :denunciaserv_p142_4_proc_T
			, denunciaserv_p142_4_seg_M = :denunciaserv_p142_4_seg_M
			, denunciaserv_p142_4_seg_H = :denunciaserv_p142_4_seg_H
			, denunciaserv_p142_4_seg_T = :denunciaserv_p142_4_seg_T
			, denunciaserv_p142_4_prev_M = :denunciaserv_p142_4_prev_M
			, denunciaserv_p142_4_prev_H = :denunciaserv_p142_4_prev_H
			, denunciaserv_p142_4_prev_T = :denunciaserv_p142_4_prev_T
			, denunciaserv_p142_4_pri_M = :denunciaserv_p142_4_pri_M
			, denunciaserv_p142_4_pri_H = :denunciaserv_p142_4_pri_H
			, denunciaserv_p142_4_pri_T = :denunciaserv_p142_4_pri_T
			, denunciaserv_p142_4_otroscual = :denunciaserv_p142_4_otroscual
			, denunciaserv_p142_4_otros_M = :denunciaserv_p142_4_otros_M
			, denunciaserv_p142_4_otros_H = :denunciaserv_p142_4_otros_H
			, denunciaserv_p142_4_otros_T = :denunciaserv_p142_4_otros_T

			, denuncias_p15_numtot = :denuncias_p15_numtot
			, denuncias_p15_1_homi = :denuncias_p15_1_homi
			, denuncias_p15_1_femi = :denuncias_p15_1_femi
			, denuncias_p15_1_les = :denuncias_p15_1_les
			, denuncias_p15_1_viofam = :denuncias_p15_1_viofam
			, denuncias_p15_1_abusex = :denuncias_p15_1_abusex
			, denuncias_p15_1_hossex = :denuncias_p15_1_hossex
			, denuncias_p15_1_viol = :denuncias_p15_1_viol
			, denuncias_p15_1_tratper = :denuncias_p15_1_tratper
			, denuncias_p15_1_cormen = :denuncias_p15_1_cormen
			, denuncias_p15_1_trafmen = :denuncias_p15_1_trafmen

			, denuncias_p15_2_mecnopre = :denuncias_p15_2_mecnopre

			, denuncias_p15_3_pagint = :denuncias_p15_3_pagint
			, denuncias_p15_3_tel = :denuncias_p15_3_tel
			, denuncias_p15_3_app = :denuncias_p15_3_app
			, necesidades_p15_3_sms = :necesidades_p15_3_sms
			, necesidades_p15_3_otros = :necesidades_p15_3_otros
			, necesidades_p15_3_cuales = :necesidades_p15_3_cuales

			, denuncias_p15_4_den = :denuncias_p15_4_den

			, denunciaserv_p16_totdet_M = :denunciaserv_p16_totdet_M
			, denunciaserv_p16_totdet_H = :denunciaserv_p16_totdet_H
			, denunciaserv_p16_totdet_T = :denunciaserv_p16_totdet_T

			, denunciaserv_p16_totdet_meno18M = :denunciaserv_p16_totdet_meno18M
			, denunciaserv_p16_totdet_meno18H = :denunciaserv_p16_totdet_meno18H
			, denunciaserv_p16_totdet_meno18T = :denunciaserv_p16_totdet_meno18T
			, denunciaserv_p16_totdet_TM = :denunciaserv_p16_totdet_TM
			, denunciaserv_p16_totdet_TH = :denunciaserv_p16_totdet_TH
			, denunciaserv_p16_totdet_TT = :denunciaserv_p16_totdet_TT




			, detenciones_p_16_1_detot = :detenciones_p_16_1_detot
			, detenciones_p_16_1_defla = :detenciones_p_16_1_defla
			, detenciones_p_16_1_decasurg = :detenciones_p_16_1_decasurg

			, victimas_p17_bprac = :victimas_p17_bprac
			, victimas_p17_1_cuales = :victimas_p17_1_cuales

			WHERE id = :idFormulario");




		$stmt -> bindParam(":idFormulario", $datos["idFormulario"], PDO::PARAM_STR);

	 $stmt -> bindParam(":denunciaserv_p14_den", $datos["denunciaserv_p14_den"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p14_den_cual", $datos["denunciaserv_p14_den_cual"], PDO::PARAM_STR);

	 $stmt -> bindParam(":denunciaserv_p14_1_orginv", $datos["denunciaserv_p14_1_orginv"], PDO::PARAM_STR);

	 $stmt -> bindParam(":denunciaserv_p14_2_quej", $datos["denunciaserv_p14_2_quej"], PDO::PARAM_STR);

	 $stmt -> bindParam(":denunciaserv_p14_3_inv_M", $datos["denunciaserv_p14_3_inv_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p14_3_inv_H", $datos["denunciaserv_p14_3_inv_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p14_3_inv_T", $datos["denunciaserv_p14_3_inv_T"], PDO::PARAM_STR);

	 $stmt -> bindParam(":denunciaserv_p14_3_int_M", $datos["denunciaserv_p14_3_int_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p14_3_int_H", $datos["denunciaserv_p14_3_int_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p14_3_int_T", $datos["denunciaserv_p14_3_int_T"], PDO::PARAM_STR);

	 $stmt -> bindParam(":denunciaserv_p14_3_reac_M", $datos["denunciaserv_p14_3_reac_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p14_3_reac_H", $datos["denunciaserv_p14_3_reac_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p14_3_reac_T", $datos["denunciaserv_p14_3_reac_T"], PDO::PARAM_STR);

	 $stmt -> bindParam(":denunciaserv_p14_3_proc_M", $datos["denunciaserv_p14_3_proc_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p14_3_proc_H", $datos["denunciaserv_p14_3_proc_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p14_3_proc_T", $datos["denunciaserv_p14_3_proc_T"], PDO::PARAM_STR);

	 $stmt -> bindParam(":denunciaserv_p14_3_seg_M", $datos["denunciaserv_p14_3_seg_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p14_3_seg_H", $datos["denunciaserv_p14_3_seg_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p14_3_seg_T", $datos["denunciaserv_p14_3_seg_T"], PDO::PARAM_STR);

	 $stmt -> bindParam(":denunciaserv_p14_3_prev_M", $datos["denunciaserv_p14_3_prev_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p14_3_prev_H", $datos["denunciaserv_p14_3_prev_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p14_3_prev_T", $datos["denunciaserv_p14_3_prev_T"], PDO::PARAM_STR);

	 $stmt -> bindParam(":denunciaserv_p14_3_pri_M", $datos["denunciaserv_p14_3_pri_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p14_3_pri_H", $datos["denunciaserv_p14_3_pri_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p14_3_pri_T", $datos["denunciaserv_p14_3_pri_T"], PDO::PARAM_STR);

	 $stmt -> bindParam(":denunciaserv_p14_3_otros", $datos["denunciaserv_p14_3_otros"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p14_3_otros_M", $datos["denunciaserv_p14_3_otros_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p14_3_otros_H", $datos["denunciaserv_p14_3_otros_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p14_3_otros_T", $datos["denunciaserv_p14_3_otros_T"], PDO::PARAM_STR);

	 $stmt -> bindParam(":denunciaserv_p14_4_inv_M", $datos["denunciaserv_p14_4_inv_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p14_4_inv_H", $datos["denunciaserv_p14_4_inv_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p14_4_inv_T", $datos["denunciaserv_p14_4_inv_T"], PDO::PARAM_STR);

	 $stmt -> bindParam(":denunciaserv_p14_4_intel_M", $datos["denunciaserv_p14_4_intel_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p14_4_intel_H", $datos["denunciaserv_p14_4_intel_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p14_4_intel_T", $datos["denunciaserv_p14_4_intel_T"], PDO::PARAM_STR);

	 $stmt -> bindParam(":denunciaserv_p14_4_reac_M", $datos["denunciaserv_p14_4_reac_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p14_4_reac_H", $datos["denunciaserv_p14_4_reac_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p14_4_reac_T", $datos["denunciaserv_p14_4_reac_T"], PDO::PARAM_STR);

	 $stmt -> bindParam(":denunciaserv_p14_4_proc_M", $datos["denunciaserv_p14_4_proc_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p14_4_proc_H", $datos["denunciaserv_p14_4_proc_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p14_4_proc_T", $datos["denunciaserv_p14_4_proc_T"], PDO::PARAM_STR);

	 $stmt -> bindParam(":denunciaserv_p14_4_seg_M", $datos["denunciaserv_p14_4_seg_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p14_4_seg_H", $datos["denunciaserv_p14_4_seg_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p14_4_seg_T", $datos["denunciaserv_p14_4_seg_T"], PDO::PARAM_STR);

	 $stmt -> bindParam(":denunciaserv_p14_4_prev_M", $datos["denunciaserv_p14_4_prev_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p14_4_prev_H", $datos["denunciaserv_p14_4_prev_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p14_4_prev_T", $datos["denunciaserv_p14_4_prev_T"], PDO::PARAM_STR);

	 $stmt -> bindParam(":denunciaserv_p14_4_pri_M", $datos["denunciaserv_p14_4_pri_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p14_4_pri_H", $datos["denunciaserv_p14_4_pri_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p14_4_pri_T", $datos["denunciaserv_p14_4_pri_T"], PDO::PARAM_STR);

	 $stmt -> bindParam(":denunciaserv_p14_4_otroscual", $datos["denunciaserv_p14_4_otroscual"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p14_4_otros_M", $datos["denunciaserv_p14_4_otros_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p14_4_otros_H", $datos["denunciaserv_p14_4_otros_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p14_4_otros_T", $datos["denunciaserv_p14_4_otros_T"], PDO::PARAM_STR);


	 $stmt -> bindParam(":denunciaserv_p142_den", $datos["denunciaserv_p142_den"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p142_den_cual", $datos["denunciaserv_p142_den_cual"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p142_2_quej", $datos["denunciaserv_p142_2_quej"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p142_3_inv_M", $datos["denunciaserv_p142_3_inv_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p142_3_inv_H", $datos["denunciaserv_p142_3_inv_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p142_3_inv_T", $datos["denunciaserv_p142_3_inv_T"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p142_3_int_M", $datos["denunciaserv_p142_3_int_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p142_3_int_H", $datos["denunciaserv_p142_3_int_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p142_3_int_T", $datos["denunciaserv_p142_3_int_T"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p142_3_reac_M", $datos["denunciaserv_p142_3_reac_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p142_3_reac_H", $datos["denunciaserv_p142_3_reac_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p142_3_reac_T", $datos["denunciaserv_p142_3_reac_T"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p142_3_proc_M", $datos["denunciaserv_p142_3_proc_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p142_3_proc_H", $datos["denunciaserv_p142_3_proc_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p142_3_proc_T", $datos["denunciaserv_p142_3_proc_T"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p142_3_seg_M", $datos["denunciaserv_p142_3_seg_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p142_3_seg_H", $datos["denunciaserv_p142_3_seg_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p142_3_seg_T", $datos["denunciaserv_p142_3_seg_T"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p142_3_prev_M", $datos["denunciaserv_p142_3_prev_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p142_3_prev_H", $datos["denunciaserv_p142_3_prev_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p142_3_prev_T", $datos["denunciaserv_p142_3_prev_T"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p142_3_pri_M", $datos["denunciaserv_p142_3_pri_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p142_3_pri_H", $datos["denunciaserv_p142_3_pri_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p142_3_pri_T", $datos["denunciaserv_p142_3_pri_T"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p142_3_otros", $datos["denunciaserv_p142_3_otros"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p142_3_otros_M", $datos["denunciaserv_p142_3_otros_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p142_3_otros_H", $datos["denunciaserv_p142_3_otros_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p142_3_otros_T", $datos["denunciaserv_p142_3_otros_T"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p142_4_inv_M", $datos["denunciaserv_p142_4_inv_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p142_4_inv_H", $datos["denunciaserv_p142_4_inv_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p142_4_inv_T", $datos["denunciaserv_p142_4_inv_T"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p142_4_intel_M", $datos["denunciaserv_p142_4_intel_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p142_4_intel_H", $datos["denunciaserv_p142_4_intel_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p142_4_intel_T", $datos["denunciaserv_p142_4_intel_T"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p142_4_reac_M", $datos["denunciaserv_p142_4_reac_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p142_4_reac_H", $datos["denunciaserv_p142_4_reac_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p142_4_reac_T", $datos["denunciaserv_p142_4_reac_T"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p142_4_proc_M", $datos["denunciaserv_p142_4_proc_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p142_4_proc_H", $datos["denunciaserv_p142_4_proc_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p142_4_proc_T", $datos["denunciaserv_p142_4_proc_T"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p142_4_seg_M", $datos["denunciaserv_p142_4_seg_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p142_4_seg_H", $datos["denunciaserv_p142_4_seg_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p142_4_seg_T", $datos["denunciaserv_p142_4_seg_T"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p142_4_prev_M", $datos["denunciaserv_p142_4_prev_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p142_4_prev_H", $datos["denunciaserv_p142_4_prev_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p142_4_prev_T", $datos["denunciaserv_p142_4_prev_T"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p142_4_pri_M", $datos["denunciaserv_p142_4_pri_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p142_4_pri_H", $datos["denunciaserv_p142_4_pri_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p142_4_pri_T", $datos["denunciaserv_p142_4_pri_T"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p142_4_otroscual", $datos["denunciaserv_p142_4_otroscual"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p142_4_otros_M", $datos["denunciaserv_p142_4_otros_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p142_4_otros_H", $datos["denunciaserv_p142_4_otros_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p142_4_otros_T", $datos["denunciaserv_p142_4_otros_T"], PDO::PARAM_STR);









	 $stmt -> bindParam(":denuncias_p15_numtot", $datos["denuncias_p15_numtot"], PDO::PARAM_STR);

	 $stmt -> bindParam(":denuncias_p15_1_homi", $datos["denuncias_p15_1_homi"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denuncias_p15_1_femi", $datos["denuncias_p15_1_femi"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denuncias_p15_1_les", $datos["denuncias_p15_1_les"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denuncias_p15_1_viofam", $datos["denuncias_p15_1_viofam"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denuncias_p15_1_abusex", $datos["denuncias_p15_1_abusex"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denuncias_p15_1_hossex", $datos["denuncias_p15_1_hossex"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denuncias_p15_1_viol", $datos["denuncias_p15_1_viol"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denuncias_p15_1_tratper", $datos["denuncias_p15_1_tratper"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denuncias_p15_1_cormen", $datos["denuncias_p15_1_cormen"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denuncias_p15_1_trafmen", $datos["denuncias_p15_1_trafmen"], PDO::PARAM_STR);

	 $stmt -> bindParam(":denuncias_p15_2_mecnopre", $datos["denuncias_p15_2_mecnopre"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denuncias_p15_3_pagint", $datos["denuncias_p15_3_pagint"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denuncias_p15_3_tel", $datos["denuncias_p15_3_tel"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denuncias_p15_3_app", $datos["denuncias_p15_3_app"], PDO::PARAM_STR);
	 $stmt -> bindParam(":necesidades_p15_3_sms", $datos["necesidades_p15_3_sms"], PDO::PARAM_STR);
	 $stmt -> bindParam(":necesidades_p15_3_otros", $datos["necesidades_p15_3_otros"], PDO::PARAM_STR);
	 $stmt -> bindParam(":necesidades_p15_3_cuales", $datos["necesidades_p15_3_cuales"], PDO::PARAM_STR);

	 $stmt -> bindParam(":denuncias_p15_4_den", $datos["denuncias_p15_4_den"], PDO::PARAM_STR);

	 $stmt -> bindParam(":denunciaserv_p16_totdet_M", $datos["denunciaserv_p16_totdet_M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p16_totdet_H", $datos["denunciaserv_p16_totdet_H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p16_totdet_T", $datos["denunciaserv_p16_totdet_T"], PDO::PARAM_STR);


	 $stmt -> bindParam(":denunciaserv_p16_totdet_meno18M", $datos["denunciaserv_p16_totdet_meno18M"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p16_totdet_meno18H", $datos["denunciaserv_p16_totdet_meno18H"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p16_totdet_meno18T", $datos["denunciaserv_p16_totdet_meno18T"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p16_totdet_TM", $datos["denunciaserv_p16_totdet_TM"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p16_totdet_TH", $datos["denunciaserv_p16_totdet_TH"], PDO::PARAM_STR);
	 $stmt -> bindParam(":denunciaserv_p16_totdet_TT", $datos["denunciaserv_p16_totdet_TT"], PDO::PARAM_STR);



	 $stmt -> bindParam(":detenciones_p_16_1_detot", $datos["detenciones_p_16_1_detot"], PDO::PARAM_STR);
	 $stmt -> bindParam(":detenciones_p_16_1_defla", $datos["detenciones_p_16_1_defla"], PDO::PARAM_STR);
	 $stmt -> bindParam(":detenciones_p_16_1_decasurg", $datos["detenciones_p_16_1_decasurg"], PDO::PARAM_STR);

	 $stmt -> bindParam(":victimas_p17_bprac", $datos["victimas_p17_bprac"], PDO::PARAM_STR);
	 $stmt -> bindParam(":victimas_p17_1_cuales", $datos["victimas_p17_1_cuales"], PDO::PARAM_STR);

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

	static public function mdlEditarFPoliciaTab8($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET
				justiicia_p18_mesajus = :justiicia_p18_mesajus

			, necesidades_p18_1_segobedo = :necesidades_p18_1_segobedo
			, necesidades_p18_1_uasisjus = :necesidades_p18_1_uasisjus
			, necesidades_p18_1_ptrisup = :necesidades_p18_1_ptrisup
			, necesidades_p18_1_fisgral = :necesidades_p18_1_fisgral
			, necesidades_p18_1_secsegpu = :necesidades_p18_1_secsegpu
			, necesidades_p18_1_tinst = :necesidades_p18_1_tinst
			, necesidades_p18_1_subsispen = :necesidades_p18_1_subsispen
			, necesidades_p18_1_tautsup = :necesidades_p18_1_tautsup
			, necesidades_p18_1_tinsestm = :necesidades_p18_1_tinsestm
			, necesidades_p18_1_dif = :necesidades_p18_1_dif
			, necesidades_p18_1_sipinna = :necesidades_p18_1_sipinna
			, necesidades_p18_1_secsal = :necesidades_p18_1_secsal
			, necesidades_p18_1_comejavic = :necesidades_p18_1_comejavic
			, necesidades_p18_1_cenuatnvic = :necesidades_p18_1_cenuatnvic
			, necesidades_p18_1_tcenjusm = :necesidades_p18_1_tcenjusm
			, necesidades_p18_1_tfisespm = :necesidades_p18_1_tfisespm
			, necesidades_p18_1_dcenpen = :necesidades_p18_1_dcenpen
			, necesidades_p18_1_dcenpenadol = :necesidades_p18_1_dcenpenadol
			, necesidades_p18_1_torgmec = :necesidades_p18_1_torgmec
			, necesidades_p18_1_tsevper = :necesidades_p18_1_tsevper
			, necesidades_p18_1_otros = :necesidades_p18_1_otros
			, necesidades_p18_1_cual = :necesidades_p18_1_cual

			, justiicia_p18_2_semanal = :justiicia_p18_2_semanal
			, justiicia_p18_2_quincenal = :justiicia_p18_2_quincenal
			, justiicia_p18_2_mensual = :justiicia_p18_2_mensual
			, justiicia_p18_2_bimestral = :justiicia_p18_2_bimestral
			, justiicia_p18_2_trimestral = :justiicia_p18_2_trimestral
			, justiicia_p18_2_semestral = :justiicia_p18_2_semestral
			, justiicia_p18_2_anual = :justiicia_p18_2_anual
			, justiicia_p18_2_abierta = :justiicia_p18_2_abierta



			, justiicia_p18_3_buenpract = :justiicia_p18_3_buenpract

			, impacto_p19_medprev = :impacto_p19_medprev

			, impacto_p19_1_medse = :impacto_p19_1_medse

			, impacto_p19_2_incmed = :impacto_p19_2_incmed

			, impacto_p19_3_descmed = :impacto_p19_3_descmed

			, comfin = :comfin


			, terapeutica_p20_progjus = :terapeutica_p20_progjus

			, terapeutica_p20_1_may18_M = :terapeutica_p20_1_may18_M
			, terapeutica_p20_1_may18_H = :terapeutica_p20_1_may18_H
			, terapeutica_p20_1_may18_T = :terapeutica_p20_1_may18_T

			, terapeutica_p20_1_men18_M = :terapeutica_p20_1_men18_M
			, terapeutica_p20_1_men18_H = :terapeutica_p20_1_men18_H
			, terapeutica_p20_1_men18_T = :terapeutica_p20_1_men18_T

			, terapeutica_p20_1_total_M = :terapeutica_p20_1_total_M
			, terapeutica_p20_1_total_H = :terapeutica_p20_1_total_H
			, terapeutica_p20_1_total_T = :terapeutica_p20_1_total_T

			, terapeutica_p20_2_can_M = :terapeutica_p20_2_can_M
			, terapeutica_p20_2_can_H = :terapeutica_p20_2_can_H
			, terapeutica_p20_2_can_T = :terapeutica_p20_2_can_T

			, terapeutica_p20_2_men_M = :terapeutica_p20_2_men_M
			, terapeutica_p20_2_men_H = :terapeutica_p20_2_men_H
			, terapeutica_p20_2_men_T = :terapeutica_p20_2_men_T

			, terapeutica_p20_2_fen_M = :terapeutica_p20_2_fen_M
			, terapeutica_p20_2_fen_H = :terapeutica_p20_2_fen_H
			, terapeutica_p20_2_fen_T = :terapeutica_p20_2_fen_T

			, terapeutica_p20_2_coc_M = :terapeutica_p20_2_coc_M
			, terapeutica_p20_2_coc_H = :terapeutica_p20_2_coc_H
			, terapeutica_p20_2_coc_T = :terapeutica_p20_2_coc_T

			, terapeutica_p20_2_her_M = :terapeutica_p20_2_her_M
			, terapeutica_p20_2_her_H = :terapeutica_p20_2_her_H
			, terapeutica_p20_2_her_T = :terapeutica_p20_2_her_T

			, terapeutica_p20_2_alc_M = :terapeutica_p20_2_alc_M
			, terapeutica_p20_2_alc_H = :terapeutica_p20_2_alc_H
			, terapeutica_p20_2_alc_T = :terapeutica_p20_2_alc_T

			, terapeutica_p20_2_otroascual = :terapeutica_p20_2_otroascual
			, terapeutica_p20_2_otras_M = :terapeutica_p20_2_otras_M
			, terapeutica_p20_2_otras_H = :terapeutica_p20_2_otras_H
    	, terapeutica_p20_2_otras_T = :terapeutica_p20_2_otras_T

			WHERE id = :idFormulario");

			$stmt -> bindParam(":idFormulario", $datos["idFormulario"], PDO::PARAM_STR);

			$stmt -> bindParam(":justiicia_p18_mesajus", $datos["justiicia_p18_mesajus"], PDO::PARAM_STR);

			$stmt -> bindParam(":necesidades_p18_1_segobedo", $datos["necesidades_p18_1_segobedo"], PDO::PARAM_STR);
			$stmt -> bindParam(":necesidades_p18_1_uasisjus", $datos["necesidades_p18_1_uasisjus"], PDO::PARAM_STR);
			$stmt -> bindParam(":necesidades_p18_1_ptrisup", $datos["necesidades_p18_1_ptrisup"], PDO::PARAM_STR);
			$stmt -> bindParam(":necesidades_p18_1_fisgral", $datos["necesidades_p18_1_fisgral"], PDO::PARAM_STR);
			$stmt -> bindParam(":necesidades_p18_1_secsegpu", $datos["necesidades_p18_1_secsegpu"], PDO::PARAM_STR);
			$stmt -> bindParam(":necesidades_p18_1_tinst", $datos["necesidades_p18_1_tinst"], PDO::PARAM_STR);
			$stmt -> bindParam(":necesidades_p18_1_subsispen", $datos["necesidades_p18_1_subsispen"], PDO::PARAM_STR);
			$stmt -> bindParam(":necesidades_p18_1_tautsup", $datos["necesidades_p18_1_tautsup"], PDO::PARAM_STR);
			$stmt -> bindParam(":necesidades_p18_1_tinsestm", $datos["necesidades_p18_1_tinsestm"], PDO::PARAM_STR);
			$stmt -> bindParam(":necesidades_p18_1_dif", $datos["necesidades_p18_1_dif"], PDO::PARAM_STR);
			$stmt -> bindParam(":necesidades_p18_1_sipinna", $datos["necesidades_p18_1_sipinna"], PDO::PARAM_STR);
			$stmt -> bindParam(":necesidades_p18_1_secsal", $datos["necesidades_p18_1_secsal"], PDO::PARAM_STR);
			$stmt -> bindParam(":necesidades_p18_1_comejavic", $datos["necesidades_p18_1_comejavic"], PDO::PARAM_STR);
			$stmt -> bindParam(":necesidades_p18_1_cenuatnvic", $datos["necesidades_p18_1_cenuatnvic"], PDO::PARAM_STR);
			$stmt -> bindParam(":necesidades_p18_1_tcenjusm", $datos["necesidades_p18_1_tcenjusm"], PDO::PARAM_STR);
			$stmt -> bindParam(":necesidades_p18_1_tfisespm", $datos["necesidades_p18_1_tfisespm"], PDO::PARAM_STR);
			$stmt -> bindParam(":necesidades_p18_1_dcenpen", $datos["necesidades_p18_1_dcenpen"], PDO::PARAM_STR);
			$stmt -> bindParam(":necesidades_p18_1_dcenpenadol", $datos["necesidades_p18_1_dcenpenadol"], PDO::PARAM_STR);
			$stmt -> bindParam(":necesidades_p18_1_torgmec", $datos["necesidades_p18_1_torgmec"], PDO::PARAM_STR);
			$stmt -> bindParam(":necesidades_p18_1_tsevper", $datos["necesidades_p18_1_tsevper"], PDO::PARAM_STR);
			$stmt -> bindParam(":necesidades_p18_1_otros", $datos["necesidades_p18_1_otros"], PDO::PARAM_STR);
			$stmt -> bindParam(":necesidades_p18_1_cual", $datos["necesidades_p18_1_cual"], PDO::PARAM_STR);

			$stmt -> bindParam(":justiicia_p18_2_semanal", $datos["justiicia_p18_2_semanal"], PDO::PARAM_STR);
			$stmt -> bindParam(":justiicia_p18_2_quincenal", $datos["justiicia_p18_2_quincenal"], PDO::PARAM_STR);
			$stmt -> bindParam(":justiicia_p18_2_mensual", $datos["justiicia_p18_2_mensual"], PDO::PARAM_STR);
			$stmt -> bindParam(":justiicia_p18_2_bimestral", $datos["justiicia_p18_2_bimestral"], PDO::PARAM_STR);
			$stmt -> bindParam(":justiicia_p18_2_trimestral", $datos["justiicia_p18_2_trimestral"], PDO::PARAM_STR);
			$stmt -> bindParam(":justiicia_p18_2_semestral", $datos["justiicia_p18_2_semestral"], PDO::PARAM_STR);
			$stmt -> bindParam(":justiicia_p18_2_anual", $datos["justiicia_p18_2_anual"], PDO::PARAM_STR);
			$stmt -> bindParam(":justiicia_p18_2_abierta", $datos["justiicia_p18_2_abierta"], PDO::PARAM_STR);


			$stmt -> bindParam(":justiicia_p18_3_buenpract", $datos["justiicia_p18_3_buenpract"], PDO::PARAM_STR);

			$stmt -> bindParam(":impacto_p19_medprev", $datos["impacto_p19_medprev"], PDO::PARAM_STR);

			$stmt -> bindParam(":impacto_p19_1_medse", $datos["impacto_p19_1_medse"], PDO::PARAM_STR);

			$stmt -> bindParam(":impacto_p19_2_incmed", $datos["impacto_p19_2_incmed"], PDO::PARAM_STR);

			$stmt -> bindParam(":impacto_p19_3_descmed", $datos["impacto_p19_3_descmed"], PDO::PARAM_STR);

			$stmt -> bindParam(":comfin", $datos["comfin"], PDO::PARAM_STR);



			$stmt -> bindParam(":terapeutica_p20_progjus", $datos["terapeutica_p20_progjus"], PDO::PARAM_STR);

			$stmt -> bindParam(":terapeutica_p20_1_may18_M", $datos["terapeutica_p20_1_may18_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_p20_1_may18_H", $datos["terapeutica_p20_1_may18_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_p20_1_may18_T", $datos["terapeutica_p20_1_may18_T"], PDO::PARAM_STR);

			$stmt -> bindParam(":terapeutica_p20_1_men18_M", $datos["terapeutica_p20_1_men18_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_p20_1_men18_H", $datos["terapeutica_p20_1_men18_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_p20_1_men18_T", $datos["terapeutica_p20_1_men18_T"], PDO::PARAM_STR);

			$stmt -> bindParam(":terapeutica_p20_1_total_M", $datos["terapeutica_p20_1_total_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_p20_1_total_H", $datos["terapeutica_p20_1_total_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_p20_1_total_T", $datos["terapeutica_p20_1_total_T"], PDO::PARAM_STR);

			$stmt -> bindParam(":terapeutica_p20_2_can_M", $datos["terapeutica_p20_2_can_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_p20_2_can_H", $datos["terapeutica_p20_2_can_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_p20_2_can_T", $datos["terapeutica_p20_2_can_T"], PDO::PARAM_STR);

			$stmt -> bindParam(":terapeutica_p20_2_men_M", $datos["terapeutica_p20_2_men_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_p20_2_men_H", $datos["terapeutica_p20_2_men_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_p20_2_men_T", $datos["terapeutica_p20_2_men_T"], PDO::PARAM_STR);

			$stmt -> bindParam(":terapeutica_p20_2_fen_M", $datos["terapeutica_p20_2_fen_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_p20_2_fen_H", $datos["terapeutica_p20_2_fen_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_p20_2_fen_T", $datos["terapeutica_p20_2_fen_T"], PDO::PARAM_STR);

			$stmt -> bindParam(":terapeutica_p20_2_coc_M", $datos["terapeutica_p20_2_coc_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_p20_2_coc_H", $datos["terapeutica_p20_2_coc_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_p20_2_coc_T", $datos["terapeutica_p20_2_coc_T"], PDO::PARAM_STR);

			$stmt -> bindParam(":terapeutica_p20_2_her_M", $datos["terapeutica_p20_2_her_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_p20_2_her_H", $datos["terapeutica_p20_2_her_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_p20_2_her_T", $datos["terapeutica_p20_2_her_T"], PDO::PARAM_STR);

			$stmt -> bindParam(":terapeutica_p20_2_alc_M", $datos["terapeutica_p20_2_alc_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_p20_2_alc_H", $datos["terapeutica_p20_2_alc_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_p20_2_alc_T", $datos["terapeutica_p20_2_alc_T"], PDO::PARAM_STR);

			$stmt -> bindParam(":terapeutica_p20_2_otroascual", $datos["terapeutica_p20_2_otroascual"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_p20_2_otras_M", $datos["terapeutica_p20_2_otras_M"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_p20_2_otras_H", $datos["terapeutica_p20_2_otras_H"], PDO::PARAM_STR);
			$stmt -> bindParam(":terapeutica_p20_2_otras_T", $datos["terapeutica_p20_2_otras_T"], PDO::PARAM_STR);

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

	static public function mdlEditarFPoliciaTab9($tabla, $datos){

		$stmt = Conexion::conectar()->prepare("UPDATE policias SET
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
