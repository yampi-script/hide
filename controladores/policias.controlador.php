<?php

session_start();
if (isset($_POST["tab1"])){
  require_once "../modelos/policias1.modelo.php";

  $idFormulario = $_POST["idFormulario"];
    if($idFormulario > 0){
    $dato["uuid"] = $_POST["uuid"];
    $dato["perfil"] = $_SESSION["perfil"];
    $dato["operador"] = $_POST["operador"];
    $dato["pcontacto"] = $_POST["pcontacto"];
    $dato["area"] = $_POST["area"];
    $dato["cargo"] = $_POST["cargo"];
    $dato["mail"] = $_POST["mail"];
    $dato["telofi"] = $_POST["telofi"];
    $dato["ext"] = $_POST["ext"];
    $dato["telextra"] = $_POST["telextra"];
    $dato["pcontacto2"] = $_POST["pcontacto2"];
    $dato["area2"] = $_POST["area2"];
    $dato["cargo2"] = $_POST["cargo2"];
    $dato["mail2"] = $_POST["mail2"];
    $dato["telofi2"] = $_POST["telofi2"];
    $dato["ext2"] = $_POST["ext2"];
    $dato["telextra2"] = $_POST["telextra2"];
        $dato["estatus"] = $_POST["estatus"];
    $dato["idFormulario"] =$idFormulario;




    $actualizar = ModeloPolicias::mdlEditarFPoliciaTab1("policias",  $dato);


    echo $actualizar;
  }else{
    //INSERTA
    $dato["uuid"] = $_POST["uuid"];
    $dato["operador"] = $_POST["operador"];
    $dato["perfil"] = $_SESSION["perfil"];
    $dato["pcontacto"] = $_POST["pcontacto"];
    $dato["area"] = $_POST["area"];
    $dato["cargo"] = $_POST["cargo"];
    $dato["mail"] = $_POST["mail"];
    $dato["telofi"] = $_POST["telofi"];
    $dato["ext"] = $_POST["ext"];
    $dato["telextra"] = $_POST["telextra"];
    $dato["pcontacto2"] = $_POST["pcontacto2"];
    $dato["area2"] = $_POST["area2"];
    $dato["cargo2"] = $_POST["cargo2"];
    $dato["mail2"] = $_POST["mail2"];
    $dato["telofi2"] = $_POST["telofi2"];
    $dato["ext2"] = $_POST["ext2"];





    $guardar = ModeloPolicias::mdlIngresarFPolicia("policias",  $dato);

    if($guardar=="ok"){

      $datosGuardados =  ModeloPolicias::mdlMostrarPolicias("policias","uuid",  $dato["uuid"]);
      echo  $datosGuardados[0]["id"];
    }else{
      echo $guardar;
    }


  }

}


if (isset($_POST["tab2"])){

  require_once "../modelos/policias1.modelo.php";

  $idFormulario = $_POST["idFormulario"];
    if($idFormulario > 0){
    $dato["idFormulario"] =$idFormulario;
    $dato["uuid"] = $_POST["uuid"];
    $dato["personal_p1_totalp_M"] = $_POST["personal_p1_totalp_M"];
    $dato["personal_p1_totalp_H"] = $_POST["personal_p1_totalp_H"];
    $dato["personal_p1_totalp_T"] = $_POST["personal_p1_totalp_T"];
    $dato["personal_p1_invyanali_M"] = $_POST["personal_p1_invyanali_M"];
    $dato["personal_p1_invyanali_H"] = $_POST["personal_p1_invyanali_H"];
    $dato["personal_p1_invyanali_T"] = $_POST["personal_p1_invyanali_T"];
    $dato["personal_p1_inte_M"] = $_POST["personal_p1_inte_M"];
    $dato["personal_p1_inte_H"] = $_POST["personal_p1_inte_H"];
    $dato["personal_p1_inte_T"] = $_POST["personal_p1_inte_T"];
    $dato["personal_p1_reacc_M"] = $_POST["personal_p1_reacc_M"];
    $dato["personal_p1_reacc_H"] = $_POST["personal_p1_reacc_H"];
    $dato["personal_p1_reacc_T"] = $_POST["personal_p1_reacc_T"];
    $dato["personal_p1_proce_M"] = $_POST["personal_p1_proce_M"];
    $dato["personal_p1_proce_H"] = $_POST["personal_p1_proce_H"];
    $dato["personal_p1_proce_T"] = $_POST["personal_p1_proce_T"];
    $dato["personal_p1_segycuspen_M"] = $_POST["personal_p1_segycuspen_M"];
    $dato["personal_p1_segycuspen_H"] = $_POST["personal_p1_segycuspen_H"];
    $dato["personal_p1_segycuspen_T"] = $_POST["personal_p1_segycuspen_T"];
    $dato["personal_p1_preven_M"] = $_POST["personal_p1_preven_M"];
    $dato["personal_p1_preven_H"] = $_POST["personal_p1_preven_H"];
    $dato["personal_p1_preven_T"] = $_POST["personal_p1_preven_T"];
    $dato["personal_p1_prirespon_M"] = $_POST["personal_p1_prirespon_M"];
    $dato["personal_p1_prirespon_H"] = $_POST["personal_p1_prirespon_H"];
    $dato["personal_p1_prirespon_T"] = $_POST["personal_p1_prirespon_T"];

    $dato["personal_p1_total_M"] = $_POST["personal_p1_total_M"];
    $dato["personal_p1_total_H"] = $_POST["personal_p1_total_H"];
    $dato["personal_p1_total_T"] = $_POST["personal_p1_total_T"];

    $dato["personal_p1_otros"] = $_POST["personal_p1_otros"];
    $dato["personal_p1_otros_M"] = $_POST["personal_p1_otros_M"];
    $dato["personal_p1_otros_H"] = $_POST["personal_p1_otros_H"];
    $dato["personal_p1_otros_T"] = $_POST["personal_p1_otros_T"];
    $dato["personal_p1_siningre_M"] = $_POST["personal_p1_siningre_M"];
    $dato["personal_p1_siningre_H"] = $_POST["personal_p1_siningre_H"];
    $dato["personal_p1_siningre_T"] = $_POST["personal_p1_siningre_T"];
    $dato["personal_p1_de1a5000_M"] = $_POST["personal_p1_de1a5000_M"];
    $dato["personal_p1_de1a5000_H"] = $_POST["personal_p1_de1a5000_H"];
    $dato["personal_p1_de1a5000_T"] = $_POST["personal_p1_de1a5000_T"];
    $dato["personal_p1_de5001a10000_M"] = $_POST["personal_p1_de5001a10000_M"];
    $dato["personal_p1_de5001a10000_H"] = $_POST["personal_p1_de5001a10000_H"];
    $dato["personal_p1_de5001a10000_T"] = $_POST["personal_p1_de5001a10000_T"];
    $dato["personal_p1_de10001a15000_M"] = $_POST["personal_p1_de10001a15000_M"];
    $dato["personal_p1_de10001a15000_H"] = $_POST["personal_p1_de10001a15000_H"];
    $dato["personal_p1_de10001a15000_T"] = $_POST["personal_p1_de10001a15000_T"];
    $dato["personal_p1_de15001a20000_M"] = $_POST["personal_p1_de15001a20000_M"];
    $dato["personal_p1_de15001a20000_H"] = $_POST["personal_p1_de15001a20000_H"];
    $dato["personal_p1_de15001a20000_T"] = $_POST["personal_p1_de15001a20000_T"];
    $dato["personal_p1_de20001a25000_M"] = $_POST["personal_p1_de20001a25000_M"];
    $dato["personal_p1_de20001a25000_H"] = $_POST["personal_p1_de20001a25000_H"];
    $dato["personal_p1_de20001a25000_T"] = $_POST["personal_p1_de20001a25000_T"];
    $dato["personal_p1_de25001a30000_M"] = $_POST["personal_p1_de25001a30000_M"];
    $dato["personal_p1_de25001a30000_H"] = $_POST["personal_p1_de25001a30000_H"];
    $dato["personal_p1_de25001a30000_T"] = $_POST["personal_p1_de25001a30000_T"];
    $dato["personal_p1_de30001a35000_M"] = $_POST["personal_p1_de30001a35000_M"];
    $dato["personal_p1_de30001a35000_H"] = $_POST["personal_p1_de30001a35000_H"];
    $dato["personal_p1_de30001a35000_T"] = $_POST["personal_p1_de30001a35000_T"];
    $dato["personal_p1_de35001a40000_M"] = $_POST["personal_p1_de35001a40000_M"];
    $dato["personal_p1_de35001a40000_H"] = $_POST["personal_p1_de35001a40000_H"];
      $dato["personal_p1_de35001a40000_T"] = $_POST["personal_p1_de35001a40000_T"];
      $dato["personal_p1_de40001a45000_M"] = $_POST["personal_p1_de40001a45000_M"];
      $dato["personal_p1_de40001a45000_H"] = $_POST["personal_p1_de40001a45000_H"];
      $dato["personal_p1_de40001a45000_T"] = $_POST["personal_p1_de40001a45000_T"];
      $dato["personal_p1_de45001a50000_M"] = $_POST["personal_p1_de45001a50000_M"];
      $dato["personal_p1_de45001a50000_H"] = $_POST["personal_p1_de45001a50000_H"];
      $dato["personal_p1_de45001a50000_T"] = $_POST["personal_p1_de45001a50000_T"];
      $dato["personal_p1_de50001a55000_M"] = $_POST["personal_p1_de50001a55000_M"];
      $dato["personal_p1_de50001a55000_H"] = $_POST["personal_p1_de50001a55000_H"];
      $dato["personal_p1_de50001a55000_T"] = $_POST["personal_p1_de50001a55000_T"];
      $dato["personal_p1_55001a60000_M"] = $_POST["personal_p1_55001a60000_M"];
      $dato["personal_p1_55001a60000_H"] = $_POST["personal_p1_55001a60000_H"];
      $dato["personal_p1_segycuspen_H"] = $_POST["personal_p1_segycuspen_H"];
      $dato["personal_p1_segycuspen_T"] = $_POST["personal_p1_segycuspen_T"];
      $dato["personal_p1_55001a60000_T"] = $_POST["personal_p1_55001a60000_T"];
      $dato["personal_p1_60001a65000_M"] = $_POST["personal_p1_60001a65000_M"];
      $dato["personal_p1_60001a65000_H"] = $_POST["personal_p1_60001a65000_H"];
      $dato["personal_p1_60001a65000_T"] = $_POST["personal_p1_60001a65000_T"];
      $dato["personal_p1_65001a70000_M"] = $_POST["personal_p1_65001a70000_M"];
      $dato["personal_p1_65001a70000_H"] = $_POST["personal_p1_65001a70000_H"];
      $dato["personal_p1_65001a70000_T"] = $_POST["personal_p1_65001a70000_T"];
      $dato["personal_p1_masde70000_M"] = $_POST["personal_p1_masde70000_M"];
      $dato["personal_p1_masde70000_H"] = $_POST["personal_p1_masde70000_H"];
      $dato["personal_p1_masde70000_T"] = $_POST["personal_p1_masde70000_T"];
      $dato["personal_p1_masde50000_M"] = $_POST["personal_p1_masde50000_M"];
      $dato["personal_p1_masde50000_H"] = $_POST["personal_p1_masde50000_H"];
      $dato["personal_p1_masde50000_T"] = $_POST["personal_p1_masde50000_T"];
      $dato["personal_p1_2_ning_M"] = $_POST["personal_p1_2_ning_M"];
      $dato["personal_p1_2_ning_H"] = $_POST["personal_p1_2_ning_H"];
      $dato["personal_p1_2_ning_T"] = $_POST["personal_p1_2_ning_T"];
      $dato["personal_p1_2_prees_M"] = $_POST["personal_p1_2_prees_M"];
      $dato["personal_p1_2_prees_H"] = $_POST["personal_p1_2_prees_H"];
      $dato["personal_p1_2_prees_T"] = $_POST["personal_p1_2_prees_T"];
      $dato["personal_p1_2_prim_M"] = $_POST["personal_p1_2_prim_M"];
      $dato["personal_p1_2_prim_H"] = $_POST["personal_p1_2_prim_H"];
      $dato["personal_p1_2_prim_T"] = $_POST["personal_p1_2_prim_T"];
      $dato["personal_p1_2_secu_M"] = $_POST["personal_p1_2_secu_M"];
      $dato["personal_p1_2_secu_H"] = $_POST["personal_p1_2_secu_H"];
      $dato["personal_p1_2_secu_T"] = $_POST["personal_p1_2_secu_T"];
      $dato["personal_p1_2_ctsect_M"] = $_POST["personal_p1_2_ctsect_M"];
      $dato["personal_p1_2_ctsect_H"] = $_POST["personal_p1_2_ctsect_H"];
      $dato["personal_p1_2_ctsect_T"] = $_POST["personal_p1_2_ctsect_T"];
      $dato["personal_p1_2_nbasica_M"] = $_POST["personal_p1_2_nbasica_M"];
      $dato["personal_p1_2_nbasica_H"] = $_POST["personal_p1_2_nbasica_H"];
      $dato["personal_p1_2_nbasica_T"] = $_POST["personal_p1_2_nbasica_T"];
      $dato["personal_p1_2_preobach_M"] = $_POST["personal_p1_2_preobach_M"];
      $dato["personal_p1_2_preobach_H"] = $_POST["personal_p1_2_preobach_H"];
      $dato["personal_p1_2_preobach_T"] = $_POST["personal_p1_2_preobach_T"];
      $dato["personal_p1_2_ctcpret_M"] = $_POST["personal_p1_2_ctcpret_M"];
      $dato["personal_p1_2_ctcpret_H"] = $_POST["personal_p1_2_ctcpret_H"];
      $dato["personal_p1_2_ctcpret_T"] = $_POST["personal_p1_2_ctcpret_T"];
      $dato["personal_p1_2_licoprof_M"] = $_POST["personal_p1_2_licoprof_M"];
      $dato["personal_p1_2_licoprof_H"] = $_POST["personal_p1_2_licoprof_H"];
      $dato["personal_p1_2_licoprof_T"] = $_POST["personal_p1_2_licoprof_T"];
      $dato["personal_p1_2_maesdoc_M"] = $_POST["personal_p1_2_maesdoc_M"];
      $dato["personal_p1_2_maesdoc_H"] = $_POST["personal_p1_2_maesdoc_H"];
      $dato["personal_p1_2_maesdoc_T"] = $_POST["personal_p1_2_maesdoc_T"];
      $dato["personal_p1_2_total_M"] = $_POST["personal_p1_2_total_M"];
      $dato["personal_p1_2_total_H"] = $_POST["personal_p1_2_total_H"];
      $dato["personal_p1_2_total_T"] = $_POST["personal_p1_2_total_T"];
          $dato["personal_p1_2_nosesabe"] = $_POST["personal_p1_2_nosesabe"];
          $dato["personal_p1_3_nosesabe"] = $_POST["personal_p1_3_nosesabe"];
          $dato["capacitacion_p2s"] = $_POST["capacitacion_p2s"];



      $dato["personal_p1_2_nosanore_M"] = $_POST["personal_p1_2_nosanore_M"];
      $dato["personal_p1_2_nosanore_H"] = $_POST["personal_p1_2_nosanore_H"];
      $dato["personal_p1_2_nosanore_T"] = $_POST["personal_p1_2_nosanore_T"];
      $dato["capacitacion_p2"] = $_POST["capacitacion_p2"];
      $dato["capacitacion_p2_1_nom"] = $_POST["capacitacion_p2_1_nom"];
      $dato["capacitacion_p2_2_aul"] = $_POST["capacitacion_p2_2_aul"];
      $dato["capacitacion_p2_2_comp"] = $_POST["capacitacion_p2_2_comp"];
      $dato["capacitacion_p2_2_juor"] = $_POST["capacitacion_p2_2_juor"];
      $dato["capacitacion_p2_2_come"] = $_POST["capacitacion_p2_2_come"];
      $dato["capacitacion_p2_2_coci"] = $_POST["capacitacion_p2_2_coci"];
      $dato["capacitacion_p2_2_dorm"] = $_POST["capacitacion_p2_2_dorm"];
      $dato["capacitacion_p2_2_pruf"] = $_POST["capacitacion_p2_2_pruf"];
      $dato["capacitacion_p2_2_auvis"] = $_POST["capacitacion_p2_2_auvis"];
      $dato["capacitacion_p2_2_medi"] = $_POST["capacitacion_p2_2_medi"];
      $dato["capacitacion_p2_2_tirof"] = $_POST["capacitacion_p2_2_tirof"];
      $dato["capacitacion_p2_2_tirov"] = $_POST["capacitacion_p2_2_tirov"];
      $dato["capacitacion_p2_2_entre"] = $_POST["capacitacion_p2_2_entre"];
      $dato["capacitacion_p2_2_vehi"] = $_POST["capacitacion_p2_2_vehi"];
      $dato["capacitacion_p2_2_unif"] = $_POST["capacitacion_p2_2_unif"];
      $dato["capacitacion_p2_2_otro"] = $_POST["capacitacion_p2_2_otro"];
      $dato["capacitacion_p2_2_otro_cual"] = $_POST["capacitacion_p2_2_otro_cual"];
      $dato["capacitacion_p2_3_invyanali_M"] = $_POST["capacitacion_p2_3_invyanali_M"];
      $dato["capacitacion_p2_3_invyanali_H"] = $_POST["capacitacion_p2_3_invyanali_H"];
      $dato["capacitacion_p2_3_invyanali_T"] = $_POST["capacitacion_p2_3_invyanali_T"];
      $dato["capacitacion_p2_3_inte_M"] = $_POST["capacitacion_p2_3_inte_M"];
      $dato["capacitacion_p2_3_inte_H"] = $_POST["capacitacion_p2_3_inte_H"];
      $dato["capacitacion_p2_3_inte_T"] = $_POST["capacitacion_p2_3_inte_T"];
      $dato["capacitacion_p2_3_reacc_M"] = $_POST["capacitacion_p2_3_reacc_M"];
      $dato["capacitacion_p2_3_reacc_H"] = $_POST["capacitacion_p2_3_reacc_H"];
      $dato["capacitacion_p2_3_reacc_T"] = $_POST["capacitacion_p2_3_reacc_T"];
      $dato["capacitacion_p2_3_proce_M"] = $_POST["capacitacion_p2_3_proce_M"];
      $dato["capacitacion_p2_3_proce_H"] = $_POST["capacitacion_p2_3_proce_H"];
      $dato["capacitacion_p2_3_proce_T"] = $_POST["capacitacion_p2_3_proce_T"];
      $dato["capacitacion_p2_3_segycuspen_M"] = $_POST["capacitacion_p2_3_segycuspen_M"];
      $dato["capacitacion_p2_3_segycuspen_H"] = $_POST["capacitacion_p2_3_segycuspen_H"];
      $dato["capacitacion_p2_3_segycuspen_T"] = $_POST["capacitacion_p2_3_segycuspen_T"];
      $dato["capacitacion_p2_3_preven_M"] = $_POST["capacitacion_p2_3_preven_M"];
      $dato["capacitacion_p2_3_preven_H"] = $_POST["capacitacion_p2_3_preven_H"];
      $dato["capacitacion_p2_3_preven_T"] = $_POST["capacitacion_p2_3_preven_T"];
      $dato["capacitacion_p2_3_prirespon_M"] = $_POST["capacitacion_p2_3_prirespon_M"];
      $dato["capacitacion_p2_3_prirespon_H"] = $_POST["capacitacion_p2_3_prirespon_H"];
      $dato["capacitacion_p2_3_prirespon_T"] = $_POST["capacitacion_p2_3_prirespon_T"];
      $dato["capacitacion_p2_3_otros"] = $_POST["capacitacion_p2_3_otros"];
      $dato["capacitacion_p2_3_otros_M"] = $_POST["capacitacion_p2_3_otros_M"];
      $dato["capacitacion_p2_3_otros_H"] = $_POST["capacitacion_p2_3_otros_M"];
      $dato["capacitacion_p2_3_otros_T"] = $_POST["capacitacion_p2_3_otros_T"];
      $dato["capacitacion_p2_4_majudlacpo_M"] = $_POST["capacitacion_p2_4_majudlacpo_M"];
      $dato["capacitacion_p2_4_majudlacpo_H"] = $_POST["capacitacion_p2_4_majudlacpo_H"];
      $dato["capacitacion_p2_4_majudlacpo_T"] = $_POST["capacitacion_p2_4_majudlacpo_T"];
      $dato["capacitacion_p2_4_prdedeypaci_M"] = $_POST["capacitacion_p2_4_prdedeypaci_M"];
      $dato["capacitacion_p2_4_prdedeypaci_H"] = $_POST["capacitacion_p2_4_prdedeypaci_H"];
      $dato["capacitacion_p2_4_prdedeypaci_T"] = $_POST["capacitacion_p2_4_prdedeypaci_T"];
      $dato["capacitacion_p2_4_dehuygain_M"] = $_POST["capacitacion_p2_4_dehuygain_M"];
      $dato["capacitacion_p2_4_dehuygain_H"] = $_POST["capacitacion_p2_4_dehuygain_H"];
      $dato["capacitacion_p2_4_dehuygain_T"] = $_POST["capacitacion_p2_4_dehuygain_T"];
      $dato["capacitacion_p2_4_realsipejupeac_M"] = $_POST["capacitacion_p2_4_realsipejupeac_M"];
      $dato["capacitacion_p2_4_realsipejupeac_H"] = $_POST["capacitacion_p2_4_realsipejupeac_H"];
      $dato["capacitacion_p2_4_realsipejupeac_T"] = $_POST["capacitacion_p2_4_realsipejupeac_T"];
      $dato["capacitacion_p2_4_prdeludeloheodeha_M"] = $_POST["capacitacion_p2_4_prdeludeloheodeha_M"];
      $dato["capacitacion_p2_4_prdeludeloheodeha_H"] = $_POST["capacitacion_p2_4_prdeludeloheodeha_H"];
      $dato["capacitacion_p2_4_prdeludeloheodeha_T"] = $_POST["capacitacion_p2_4_prdeludeloheodeha_T"];
      $dato["capacitacion_p2_4_idldlhodhymdeeoddp_M"] = $_POST["capacitacion_p2_4_idldlhodhymdeeoddp_M"];
      $dato["capacitacion_p2_4_idldlhodhymdeeoddp_H"] = $_POST["capacitacion_p2_4_idldlhodhymdeeoddp_H"];
      $dato["capacitacion_p2_4_idldlhodhymdeeoddp_T"] = $_POST["capacitacion_p2_4_idldlhodhymdeeoddp_T"];
      $dato["capacitacion_p2_4_cadecu_M"] = $_POST["capacitacion_p2_4_cadecu_M"];
      $dato["capacitacion_p2_4_cadecu_H"] = $_POST["capacitacion_p2_4_cadecu_H"];
      $dato["capacitacion_p2_4_cadecu_T"] = $_POST["capacitacion_p2_4_cadecu_T"];
      $dato["capacitacion_p2_4_enates_M"] = $_POST["capacitacion_p2_4_enates_M"];
      $dato["capacitacion_p2_4_enates_H"] = $_POST["capacitacion_p2_4_enates_H"];
      $dato["capacitacion_p2_4_enates_T"] = $_POST["capacitacion_p2_4_enates_T"];
      $dato["capacitacion_p2_4_usledelafu_M"] = $_POST["capacitacion_p2_4_usledelafu_M"];
      $dato["capacitacion_p2_4_usledelafu_H"] = $_POST["capacitacion_p2_4_usledelafu_H"];
      $dato["capacitacion_p2_4_usledelafu_T"] = $_POST["capacitacion_p2_4_usledelafu_T"];
$dato["capacitacion_p2_4_inves_M"] = $_POST["capacitacion_p2_4_inves_M"];
$dato["capacitacion_p2_4_inves_H"] = $_POST["capacitacion_p2_4_inves_H"];
$dato["capacitacion_p2_4_inves_T"] = $_POST["capacitacion_p2_4_inves_T"];
      $dato["capacitacion_p2_4_prres_M"] = $_POST["capacitacion_p2_4_prres_M"];
      $dato["capacitacion_p2_4_prres_H"] = $_POST["capacitacion_p2_4_prres_H"];
      $dato["capacitacion_p2_4_prres_T"] = $_POST["capacitacion_p2_4_prres_T"];
      $dato["capacitacion_p2_4_inpoho_M"] = $_POST["capacitacion_p2_4_inpoho_M"];
      $dato["capacitacion_p2_4_inpoho_H"] = $_POST["capacitacion_p2_4_inpoho_H"];
      $dato["capacitacion_p2_4_inpoho_T"] = $_POST["capacitacion_p2_4_inpoho_T"];
      $dato["capacitacion_p2_4_especia_M"] = $_POST["capacitacion_p2_4_especia_M"];
      $dato["capacitacion_p2_4_especia_H"] = $_POST["capacitacion_p2_4_especia_H"];
      $dato["capacitacion_p2_4_especia_T"] = $_POST["capacitacion_p2_4_especia_T"];
      $dato["capacitacion_p2_4_actualiza_M"] = $_POST["capacitacion_p2_4_actualiza_M"];
      $dato["capacitacion_p2_4_actualiza_H"] = $_POST["capacitacion_p2_4_actualiza_H"];
      $dato["capacitacion_p2_4_actualiza_T"] = $_POST["capacitacion_p2_4_actualiza_T"];
      $dato["capacitacion_p2_4_sidejupeacu_M"] = $_POST["capacitacion_p2_4_sidejupeacu_M"];
      $dato["capacitacion_p2_4_sidejupeacu_H"] = $_POST["capacitacion_p2_4_sidejupeacu_H"];
      $dato["capacitacion_p2_4_sidejupeacu_T"] = $_POST["capacitacion_p2_4_sidejupeacu_T"];
      $dato["capacitacion_p2_4_depro_M"] = $_POST["capacitacion_p2_4_depro_M"];
      $dato["capacitacion_p2_4_depro_H"] = $_POST["capacitacion_p2_4_depro_H"];
      $dato["capacitacion_p2_4_depro_T"] = $_POST["capacitacion_p2_4_depro_T"];
        $dato["capacitacion_p2_4_femeni_M"] = $_POST["capacitacion_p2_4_femeni_M"];
        $dato["capacitacion_p2_4_femeni_H"] = $_POST["capacitacion_p2_4_femeni_H"];
        $dato["capacitacion_p2_4_femeni_T"] = $_POST["capacitacion_p2_4_femeni_T"];
        $dato["capacitacion_p2_4_antrdepe_M"] = $_POST["capacitacion_p2_4_antrdepe_M"];
        $dato["capacitacion_p2_4_antrdepe_H"] = $_POST["capacitacion_p2_4_antrdepe_H"];
        $dato["capacitacion_p2_4_antrdepe_T"] = $_POST["capacitacion_p2_4_antrdepe_T"];
        $dato["capacitacion_p2_4_vicolamu_M"] = $_POST["capacitacion_p2_4_vicolamu_M"];
        $dato["capacitacion_p2_4_vicolamu_H"] = $_POST["capacitacion_p2_4_vicolamu_H"];
        $dato["capacitacion_p2_4_vicolamu_T"] = $_POST["capacitacion_p2_4_vicolamu_T"];
        $dato["capacitacion_p2_4_predege_M"] = $_POST["capacitacion_p2_4_predege_M"];
        $dato["capacitacion_p2_4_predege_H"] = $_POST["capacitacion_p2_4_predege_H"];
        $dato["capacitacion_p2_4_predege_T"] = $_POST["capacitacion_p2_4_predege_T"];
        $dato["capacitacion_p2_4_ascoydedeex_M"] = $_POST["capacitacion_p2_4_ascoydedeex_M"];
        $dato["capacitacion_p2_4_ascoydedeex_H"] = $_POST["capacitacion_p2_4_ascoydedeex_H"];
        $dato["capacitacion_p2_4_ascoydedeex_T"] = $_POST["capacitacion_p2_4_ascoydedeex_T"];
        $dato["capacitacion_p2_4_siindejupepaad_M"] = $_POST["capacitacion_p2_4_siindejupepaad_M"];
        $dato["capacitacion_p2_4_siindejupepaad_H"] = $_POST["capacitacion_p2_4_siindejupepaad_H"];
        $dato["capacitacion_p2_4_siindejupepaad_T"] = $_POST["capacitacion_p2_4_siindejupepaad_T"];
        $dato["capacitacion_p2_4_ataperin_M"] = $_POST["capacitacion_p2_4_ataperin_M"];
        $dato["capacitacion_p2_4_ataperin_H"] = $_POST["capacitacion_p2_4_ataperin_H"];
        $dato["capacitacion_p2_4_ataperin_T"] = $_POST["capacitacion_p2_4_ataperin_T"];
        $dato["capacitacion_p2_4_atapercondis_M"] = $_POST["capacitacion_p2_4_atapercondis_M"];
        $dato["capacitacion_p2_4_atapercondis_H"] = $_POST["capacitacion_p2_4_atapercondis_H"];
        $dato["capacitacion_p2_4_atapercondis_T"] = $_POST["capacitacion_p2_4_atapercondis_T"];
        $dato["capacitacion_p2_4_jusalt_M"] = $_POST["capacitacion_p2_4_jusalt_M"];
        $dato["capacitacion_p2_4_jusalt_H"] = $_POST["capacitacion_p2_4_jusalt_H"];
        $dato["capacitacion_p2_4_jusalt_T"] = $_POST["capacitacion_p2_4_jusalt_T"];
        $dato["capacitacion_p2_4_justera_M"] = $_POST["capacitacion_p2_4_justera_M"];
        $dato["capacitacion_p2_4_justera_H"] = $_POST["capacitacion_p2_4_justera_H"];
        $dato["capacitacion_p2_4_justera_T"] = $_POST["capacitacion_p2_4_justera_T"];
        $dato["capacitacion_p2_4_justransi_M"] = $_POST["capacitacion_p2_4_justransi_M"];
        $dato["capacitacion_p2_4_justransi_H"] = $_POST["capacitacion_p2_4_justransi_H"];
        $dato["capacitacion_p2_4_justransi_T"] = $_POST["capacitacion_p2_4_justransi_T"];

        $dato["capacitacion_p2_4_atemuj_M"] = $_POST["capacitacion_p2_4_atemuj_M"];
        $dato["capacitacion_p2_4_atemuj_H"] = $_POST["capacitacion_p2_4_atemuj_H"];
        $dato["capacitacion_p2_4_atemuj_T"] = $_POST["capacitacion_p2_4_atemuj_T"];



        $dato["capacitacion_p2_4_otros"] = $_POST["capacitacion_p2_4_otros"];
        $dato["capacitacion_p2_4_otros_M"] = $_POST["capacitacion_p2_4_otros_M"];
        $dato["capacitacion_p2_4_otros_H"] = $_POST["capacitacion_p2_4_otros_H"];
        $dato["capacitacion_p2_4_otros_T"] = $_POST["capacitacion_p2_4_otros_T"];
        $dato["capacitacion_p2_5_instuprga"] = $_POST["capacitacion_p2_5_instuprga"];
        $dato["capacitacion_p2_6_evconconf_M"] = $_POST["capacitacion_p2_6_evconconf_M"];
        $dato["capacitacion_p2_6_evconconf_H"] = $_POST["capacitacion_p2_6_evconconf_H"];
        $dato["capacitacion_p2_6_evconconf_T"] = $_POST["capacitacion_p2_6_evconconf_T"];
        $dato["presupuesto_p3"] = $_POST["presupuesto_p3"];
        $dato["presupuestop3_1_anuaeje20"] = $_POST["presupuestop3_1_anuaeje20"];
        $dato["presupuestop3_2_anuaeje20"] = $_POST["presupuestop3_2_anuaeje20"];

    $actualizar = ModeloPolicias::mdlEditarFPoliciaTab2("policias",  $dato);


    echo $actualizar;
  }else{
    //INSERTA
    $dato["uuid"] = $_POST["uuid"];
    $dato["personal_p1_totalp_M"] = $_POST["personal_p1_totalp_M"];
    $dato["personal_p1_totalp_H"] = $_POST["personal_p1_totalp_H"];
    $dato["personal_p1_totalp_T"] = $_POST["personal_p1_totalp_T"];
    $dato["personal_p1_invyanali_M"] = $_POST["personal_p1_invyanali_M"];
    $dato["personal_p1_invyanali_H"] = $_POST["personal_p1_invyanali_H"];
    $dato["personal_p1_invyanali_T"] = $_POST["personal_p1_invyanali_T"];
    $dato["personal_p1_inte_M"] = $_POST["personal_p1_inte_M"];
    $dato["personal_p1_inte_H"] = $_POST["personal_p1_inte_H"];
    $dato["personal_p1_inte_T"] = $_POST["personal_p1_inte_T"];
    $dato["personal_p1_reacc_M"] = $_POST["personal_p1_reacc_M"];
    $dato["personal_p1_reacc_H"] = $_POST["personal_p1_reacc_H"];
    $dato["personal_p1_reacc_T"] = $_POST["personal_p1_reacc_T"];
    $dato["personal_p1_proce_M"] = $_POST["personal_p1_proce_M"];
    $dato["personal_p1_proce_H"] = $_POST["personal_p1_proce_H"];
    $dato["personal_p1_proce_T"] = $_POST["personal_p1_proce_T"];
    $dato["personal_p1_segycuspen_M"] = $_POST["personal_p1_segycuspen_M"];
    $dato["personal_p1_segycuspen_H"] = $_POST["personal_p1_segycuspen_H"];
    $dato["personal_p1_segycuspen_T"] = $_POST["personal_p1_segycuspen_T"];
    $dato["personal_p1_preven_M"] = $_POST["personal_p1_preven_M"];
    $dato["personal_p1_preven_H"] = $_POST["personal_p1_preven_H"];
    $dato["personal_p1_preven_T"] = $_POST["personal_p1_preven_T"];
    $dato["personal_p1_prirespon_M"] = $_POST["personal_p1_prirespon_M"];
    $dato["personal_p1_prirespon_H"] = $_POST["personal_p1_prirespon_H"];
    $dato["personal_p1_prirespon_T"] = $_POST["personal_p1_prirespon_T"];

    $dato["personal_p1_total_M"] = $_POST["personal_p1_total_M"];
    $dato["personal_p1_total_H"] = $_POST["personal_p1_total_H"];
    $dato["personal_p1_total_T"] = $_POST["personal_p1_total_T"];




    $dato["personal_p1_otros"] = $_POST["personal_p1_otros"];
    $dato["personal_p1_otros_M"] = $_POST["personal_p1_otros_M"];
    $dato["personal_p1_otros_H"] = $_POST["personal_p1_otros_H"];
    $dato["personal_p1_otros_T"] = $_POST["personal_p1_otros_T"];
    $dato["personal_p1_siningre_M"] = $_POST["personal_p1_siningre_M"];
    $dato["personal_p1_siningre_H"] = $_POST["personal_p1_siningre_H"];
    $dato["personal_p1_siningre_T"] = $_POST["personal_p1_siningre_T"];
    $dato["personal_p1_de1a5000_M"] = $_POST["personal_p1_de1a5000_M"];
    $dato["personal_p1_de1a5000_H"] = $_POST["personal_p1_de1a5000_H"];
    $dato["personal_p1_de1a5000_T"] = $_POST["personal_p1_de1a5000_T"];
    $dato["personal_p1_de5001a10000_M"] = $_POST["personal_p1_de5001a10000_M"];
    $dato["personal_p1_de5001a10000_H"] = $_POST["personal_p1_de5001a10000_H"];
    $dato["personal_p1_de5001a10000_T"] = $_POST["personal_p1_de5001a10000_T"];
    $dato["personal_p1_de10001a15000_M"] = $_POST["personal_p1_de10001a15000_M"];
    $dato["personal_p1_de10001a15000_H"] = $_POST["personal_p1_de10001a15000_H"];
    $dato["personal_p1_de10001a15000_T"] = $_POST["personal_p1_de10001a15000_T"];
    $dato["personal_p1_de15001a20000_M"] = $_POST["personal_p1_de15001a20000_M"];
    $dato["personal_p1_de15001a20000_H"] = $_POST["personal_p1_de15001a20000_H"];
    $dato["personal_p1_de15001a20000_T"] = $_POST["personal_p1_de15001a20000_T"];
    $dato["personal_p1_de20001a25000_M"] = $_POST["personal_p1_de20001a25000_M"];
    $dato["personal_p1_de20001a25000_H"] = $_POST["personal_p1_de20001a25000_H"];
    $dato["personal_p1_de20001a25000_T"] = $_POST["personal_p1_de20001a25000_T"];
    $dato["personal_p1_de25001a30000_M"] = $_POST["personal_p1_de25001a30000_M"];
    $dato["personal_p1_de25001a30000_H"] = $_POST["personal_p1_de25001a30000_H"];
    $dato["personal_p1_de25001a30000_T"] = $_POST["personal_p1_de25001a30000_T"];
    $dato["personal_p1_de30001a35000_M"] = $_POST["personal_p1_de30001a35000_M"];
    $dato["personal_p1_de30001a35000_H"] = $_POST["personal_p1_de30001a35000_H"];
    $dato["personal_p1_de30001a35000_T"] = $_POST["personal_p1_de30001a35000_T"];
    $dato["personal_p1_de35001a40000_M"] = $_POST["personal_p1_de35001a40000_M"];
    $dato["personal_p1_de35001a40000_H"] = $_POST["personal_p1_de35001a40000_H"];
    $dato["personal_p1_de35001a40000_T"] = $_POST["personal_p1_de35001a40000_T"];
    $dato["personal_p1_de40001a45000_M"] = $_POST["personal_p1_de40001a45000_M"];
    $dato["personal_p1_de40001a45000_H"] = $_POST["personal_p1_de40001a45000_H"];
    $dato["personal_p1_de40001a45000_T"] = $_POST["personal_p1_de40001a45000_T"];
    $dato["personal_p1_de45001a50000_M"] = $_POST["personal_p1_de45001a50000_M"];
    $dato["personal_p1_de45001a50000_H"] = $_POST["personal_p1_de45001a50000_H"];
    $dato["personal_p1_de45001a50000_T"] = $_POST["personal_p1_de45001a50000_T"];
    $dato["personal_p1_de50001a55000_M"] = $_POST["personal_p1_de50001a55000_M"];
    $dato["personal_p1_de50001a55000_H"] = $_POST["personal_p1_proce_M"];
    $dato["personal_p1_de50001a55000_T"] = $_POST["personal_p1_de50001a55000_T"];
    $dato["personal_p1_55001a60000_M"] = $_POST["personal_p1_55001a60000_M"];
    $dato["personal_p1_55001a60000_H"] = $_POST["personal_p1_55001a60000_H"];
    $dato["personal_p1_55001a60000_T"] = $_POST["personal_p1_55001a60000_T"];
    $dato["personal_p1_segycuspen_T"] = $_POST["personal_p1_segycuspen_T"];
    $dato["personal_p1_55001a60000_T"] = $_POST["personal_p1_preven_M"];
    $dato["personal_p1_60001a65000_M"] = $_POST["personal_p1_60001a65000_M"];
    $dato["personal_p1_60001a65000_H"] = $_POST["personal_p1_60001a65000_H"];
    $dato["personal_p1_60001a65000_T"] = $_POST["personal_p1_60001a65000_T"];
    $dato["personal_p1_65001a70000_M"] = $_POST["personal_p1_65001a70000_M"];
    $dato["personal_p1_65001a70000_H"] = $_POST["personal_p1_65001a70000_H"];
    $dato["personal_p1_65001a70000_T"] = $_POST["personal_p1_65001a70000_T"];
    $dato["personal_p1_masde70000_M"] = $_POST["personal_p1_masde70000_M"];
    $dato["personal_p1_masde70000_H"] = $_POST["personal_p1_masde70000_H"];
    $dato["personal_p1_masde70000_T"] = $_POST["personal_p1_masde70000_T"];
    $dato["personal_p1_masde50000_M"] = $_POST["personal_p1_masde50000_M"];
    $dato["personal_p1_masde50000_H"] = $_POST["personal_p1_masde50000_H"];
    $dato["personal_p1_masde50000_T"] = $_POST["personal_p1_masde50000_T"];
    $dato["personal_p1_2_ning_M"] = $_POST["personal_p1_2_ning_M"];
    $dato["personal_p1_2_ning_H"] = $_POST["personal_p1_2_ning_H"];
    $dato["personal_p1_2_ning_T"] = $_POST["personal_p1_2_ning_T"];
    $dato["personal_p1_2_prees_M"] = $_POST["personal_p1_2_prees_M"];
    $dato["personal_p1_2_prees_H"] = $_POST["personal_p1_2_prees_H"];
    $dato["personal_p1_2_prees_T"] = $_POST["personal_p1_2_prees_T"];
    $dato["personal_p1_2_prim_M"] = $_POST["personal_p1_2_prim_M"];
    $dato["personal_p1_2_prim_H"] = $_POST["personal_p1_2_prim_H"];
    $dato["personal_p1_2_prim_T"] = $_POST["personal_p1_2_prim_T"];
    $dato["personal_p1_2_secu_M"] = $_POST["personal_p1_2_secu_M"];
    $dato["personal_p1_2_secu_H"] = $_POST["personal_p1_2_secu_H"];
    $dato["personal_p1_2_secu_T"] = $_POST["personal_p1_2_secu_T"];
    $dato["personal_p1_2_ctsect_M"] = $_POST["personal_p1_2_ctsect_M"];
    $dato["personal_p1_2_ctsect_H"] = $_POST["personal_p1_2_ctsect_H"];
    $dato["personal_p1_2_ctsect_T"] = $_POST["personal_p1_2_ctsect_T"];
    $dato["personal_p1_2_nbasica_M"] = $_POST["personal_p1_2_nbasica_M"];
    $dato["personal_p1_2_nbasica_H"] = $_POST["personal_p1_2_nbasica_H"];
    $dato["personal_p1_2_nbasica_T"] = $_POST["personal_p1_2_nbasica_T"];
    $dato["personal_p1_2_preobach_M"] = $_POST["personal_p1_2_preobach_M"];
    $dato["personal_p1_2_preobach_H"] = $_POST["personal_p1_2_preobach_H"];
    $dato["personal_p1_2_preobach_T"] = $_POST["personal_p1_2_preobach_T"];
    $dato["personal_p1_2_ctcpret_M"] = $_POST["personal_p1_2_ctcpret_M"];
    $dato["personal_p1_2_ctcpret_H"] = $_POST["personal_p1_2_ctcpret_H"];
    $dato["personal_p1_2_ctcpret_T"] = $_POST["personal_p1_2_ctcpret_T"];
    $dato["personal_p1_2_licoprof_M"] = $_POST["personal_p1_2_licoprof_M"];
    $dato["personal_p1_2_licoprof_H"] = $_POST["personal_p1_2_licoprof_H"];
    $dato["personal_p1_2_licoprof_T"] = $_POST["personal_p1_2_licoprof_T"];
    $dato["personal_p1_2_maesdoc_M"] = $_POST["personal_p1_2_maesdoc_M"];
    $dato["personal_p1_2_maesdoc_H"] = $_POST["personal_p1_2_maesdoc_H"];
    $dato["personal_p1_2_maesdoc_T"] = $_POST["personal_p1_2_maesdoc_T"];
    $dato["personal_p1_2_total_M"] = $_POST["personal_p1_2_total_M"];
    $dato["personal_p1_2_total_H"] = $_POST["personal_p1_2_total_H"];
    $dato["personal_p1_2_total_T"] = $_POST["personal_p1_2_total_T"];
    $dato["personal_p1_2_nosesabe"] = $_POST["personal_p1_2_nosesabe"];
    $dato["personal_p1_3_nosesabe"] = $_POST["personal_p1_3_nosesabe"];
    $dato["capacitacion_p2s"] = $_POST["capacitacion_p2s"];






    $dato["personal_p1_2_nosanore_M"] = $_POST["personal_p1_2_nosanore_M"];
    $dato["personal_p1_2_nosanore_H"] = $_POST["personal_p1_2_nosanore_H"];
    $dato["personal_p1_2_nosanore_T"] = $_POST["personal_p1_2_nosanore_T"];
    $dato["capacitacion_p2"] = $_POST["capacitacion_p2"];
    $dato["capacitacion_p2_1_nom"] = $_POST["capacitacion_p2_1_nom"];
    $dato["capacitacion_p2_2_aul"] = $_POST["capacitacion_p2_2_aul"];
    $dato["capacitacion_p2_2_comp"] = $_POST["capacitacion_p2_2_comp"];
    $dato["capacitacion_p2_2_juor"] = $_POST["capacitacion_p2_2_juor"];
    $dato["capacitacion_p2_2_come"] = $_POST["capacitacion_p2_2_come"];
    $dato["capacitacion_p2_2_coci"] = $_POST["capacitacion_p2_2_coci"];
    $dato["capacitacion_p2_2_dorm"] = $_POST["capacitacion_p2_2_dorm"];
    $dato["capacitacion_p2_2_pruf"] = $_POST["capacitacion_p2_2_pruf"];
    $dato["capacitacion_p2_2_auvis"] = $_POST["capacitacion_p2_2_auvis"];
    $dato["capacitacion_p2_2_medi"] = $_POST["capacitacion_p2_2_medi"];
    $dato["capacitacion_p2_2_tirof"] = $_POST["capacitacion_p2_2_tirof"];
    $dato["capacitacion_p2_2_tirov"] = $_POST["capacitacion_p2_2_tirov"];
    $dato["capacitacion_p2_2_entre"] = $_POST["capacitacion_p2_2_entre"];
    $dato["capacitacion_p2_2_vehi"] = $_POST["capacitacion_p2_2_vehi"];
    $dato["capacitacion_p2_2_unif"] = $_POST["capacitacion_p2_2_unif"];
    $dato["capacitacion_p2_2_otro"] = $_POST["capacitacion_p2_2_otro"];
    $dato["capacitacion_p2_2_otro_cual"] = $_POST["capacitacion_p2_2_otro_cual"];
    $dato["capacitacion_p2_3_invyanali_M"] = $_POST["capacitacion_p2_3_invyanali_M"];
    $dato["capacitacion_p2_3_invyanali_H"] = $_POST["capacitacion_p2_3_invyanali_H"];
    $dato["capacitacion_p2_3_invyanali_T"] = $_POST["capacitacion_p2_3_invyanali_T"];
    $dato["capacitacion_p2_3_inte_M"] = $_POST["capacitacion_p2_3_inte_M"];
    $dato["capacitacion_p2_3_inte_H"] = $_POST["capacitacion_p2_3_inte_H"];
    $dato["capacitacion_p2_3_inte_T"] = $_POST["capacitacion_p2_3_inte_T"];
    $dato["capacitacion_p2_3_reacc_M"] = $_POST["capacitacion_p2_3_reacc_M"];
    $dato["capacitacion_p2_3_reacc_H"] = $_POST["capacitacion_p2_3_reacc_H"];
    $dato["capacitacion_p2_3_reacc_T"] = $_POST["capacitacion_p2_3_reacc_T"];
    $dato["capacitacion_p2_3_proce_M"] = $_POST["capacitacion_p2_3_proce_M"];
    $dato["capacitacion_p2_3_proce_H"] = $_POST["capacitacion_p2_3_proce_H"];
    $dato["capacitacion_p2_3_proce_T"] = $_POST["capacitacion_p2_3_proce_T"];
    $dato["capacitacion_p2_3_segycuspen_M"] = $_POST["capacitacion_p2_3_segycuspen_M"];
    $dato["capacitacion_p2_3_segycuspen_H"] = $_POST["capacitacion_p2_3_segycuspen_H"];
    $dato["capacitacion_p2_3_segycuspen_T"] = $_POST["capacitacion_p2_3_segycuspen_T"];
    $dato["capacitacion_p2_3_preven_M"] = $_POST["capacitacion_p2_3_preven_M"];
    $dato["capacitacion_p2_3_preven_H"] = $_POST["capacitacion_p2_3_preven_H"];
    $dato["capacitacion_p2_3_preven_T"] = $_POST["capacitacion_p2_3_preven_T"];
    $dato["capacitacion_p2_3_prirespon_M"] = $_POST["capacitacion_p2_3_prirespon_M"];
    $dato["capacitacion_p2_3_prirespon_H"] = $_POST["capacitacion_p2_3_prirespon_H"];
    $dato["capacitacion_p2_3_prirespon_T"] = $_POST["capacitacion_p2_3_prirespon_T"];
    $dato["capacitacion_p2_3_otros"] = $_POST["capacitacion_p2_3_otros"];
    $dato["capacitacion_p2_3_otros_M"] = $_POST["capacitacion_p2_3_otros_M"];
    $dato["capacitacion_p2_3_otros_H"] = $_POST["capacitacion_p2_3_otros_H"];
    $dato["capacitacion_p2_3_otros_T"] = $_POST["capacitacion_p2_3_otros_T"];
    $dato["capacitacion_p2_4_majudlacpo_M"] = $_POST["capacitacion_p2_4_majudlacpo_M"];
    $dato["capacitacion_p2_4_majudlacpo_H"] = $_POST["capacitacion_p2_4_majudlacpo_H"];
    $dato["capacitacion_p2_4_majudlacpo_T"] = $_POST["capacitacion_p2_4_majudlacpo_T"];
    $dato["capacitacion_p2_4_prdedeypaci_M"] = $_POST["capacitacion_p2_4_prdedeypaci_M"];
    $dato["capacitacion_p2_4_prdedeypaci_H"] = $_POST["capacitacion_p2_4_prdedeypaci_H"];
    $dato["capacitacion_p2_4_prdedeypaci_T"] = $_POST["capacitacion_p2_4_prdedeypaci_T"];
    $dato["capacitacion_p2_4_dehuygain_M"] = $_POST["capacitacion_p2_4_dehuygain_M"];
    $dato["capacitacion_p2_4_dehuygain_H"] = $_POST["capacitacion_p2_4_dehuygain_H"];
    $dato["capacitacion_p2_4_dehuygain_T"] = $_POST["capacitacion_p2_4_dehuygain_T"];
    $dato["capacitacion_p2_4_realsipejupeac_M"] = $_POST["capacitacion_p2_4_realsipejupeac_M"];
    $dato["capacitacion_p2_4_realsipejupeac_H"] = $_POST["capacitacion_p2_4_realsipejupeac_H"];
    $dato["capacitacion_p2_4_realsipejupeac_T"] = $_POST["capacitacion_p2_4_realsipejupeac_T"];
    $dato["capacitacion_p2_4_prdeludeloheodeha_M"] = $_POST["capacitacion_p2_4_prdeludeloheodeha_M"];
    $dato["capacitacion_p2_4_prdeludeloheodeha_H"] = $_POST["capacitacion_p2_4_prdeludeloheodeha_H"];
    $dato["capacitacion_p2_4_prdeludeloheodeha_T"] = $_POST["capacitacion_p2_4_prdeludeloheodeha_T"];
    $dato["capacitacion_p2_4_idldlhodhymdeeoddp_M"] = $_POST["capacitacion_p2_4_idldlhodhymdeeoddp_M"];
    $dato["capacitacion_p2_4_idldlhodhymdeeoddp_H"] = $_POST["capacitacion_p2_4_idldlhodhymdeeoddp_H"];
    $dato["capacitacion_p2_4_idldlhodhymdeeoddp_T"] = $_POST["capacitacion_p2_4_idldlhodhymdeeoddp_T"];
    $dato["capacitacion_p2_4_cadecu_M"] = $_POST["capacitacion_p2_4_cadecu_M"];
    $dato["capacitacion_p2_4_cadecu_H"] = $_POST["capacitacion_p2_4_cadecu_H"];
    $dato["capacitacion_p2_4_cadecu_T"] = $_POST["capacitacion_p2_4_cadecu_T"];
    $dato["capacitacion_p2_4_enates_M"] = $_POST["capacitacion_p2_4_enates_M"];
    $dato["capacitacion_p2_4_enates_H"] = $_POST["capacitacion_p2_4_enates_H"];
    $dato["capacitacion_p2_4_enates_T"] = $_POST["capacitacion_p2_4_enates_T"];
    $dato["capacitacion_p2_4_usledelafu_M"] = $_POST["capacitacion_p2_4_usledelafu_M"];
    $dato["capacitacion_p2_4_usledelafu_H"] = $_POST["capacitacion_p2_4_usledelafu_H"];
    $dato["capacitacion_p2_4_usledelafu_T"] = $_POST["capacitacion_p2_4_usledelafu_T"];
    $dato["capacitacion_p2_4_inves_M"] = $_POST["capacitacion_p2_4_inves_M"];
    $dato["capacitacion_p2_4_inves_H"] = $_POST["capacitacion_p2_4_inves_H"];
    $dato["capacitacion_p2_4_inves_T"] = $_POST["capacitacion_p2_4_inves_T"];
    $dato["capacitacion_p2_4_prres_M"] = $_POST["capacitacion_p2_4_prres_M"];
    $dato["capacitacion_p2_4_prres_H"] = $_POST["capacitacion_p2_4_prres_H"];
    $dato["capacitacion_p2_4_prres_T"] = $_POST["capacitacion_p2_4_prres_T"];
    $dato["capacitacion_p2_4_inpoho_M"] = $_POST["capacitacion_p2_4_inpoho_M"];
    $dato["capacitacion_p2_4_inpoho_H"] = $_POST["capacitacion_p2_4_inpoho_H"];
    $dato["capacitacion_p2_4_inpoho_T"] = $_POST["capacitacion_p2_4_inpoho_T"];
    $dato["capacitacion_p2_4_especia_M"] = $_POST["capacitacion_p2_4_especia_M"];
    $dato["capacitacion_p2_4_especia_H"] = $_POST["capacitacion_p2_4_especia_H"];
    $dato["capacitacion_p2_4_especia_T"] = $_POST["capacitacion_p2_4_especia_T"];
    $dato["capacitacion_p2_4_actualiza_M"] = $_POST["capacitacion_p2_4_actualiza_M"];
    $dato["capacitacion_p2_4_actualiza_H"] = $_POST["capacitacion_p2_4_actualiza_H"];
    $dato["capacitacion_p2_4_actualiza_T"] = $_POST["capacitacion_p2_4_actualiza_T"];
    $dato["capacitacion_p2_4_sidejupeacu_M"] = $_POST["capacitacion_p2_4_sidejupeacu_M"];
    $dato["capacitacion_p2_4_sidejupeacu_H"] = $_POST["capacitacion_p2_4_sidejupeacu_H"];
    $dato["capacitacion_p2_4_sidejupeacu_T"] = $_POST["capacitacion_p2_4_sidejupeacu_T"];
    $dato["capacitacion_p2_4_depro_M"] = $_POST["capacitacion_p2_4_depro_M"];
    $dato["capacitacion_p2_4_depro_H"] = $_POST["capacitacion_p2_4_depro_H"];
    $dato["capacitacion_p2_4_depro_T"] = $_POST["capacitacion_p2_4_depro_T"];
      $dato["capacitacion_p2_4_femeni_M"] = $_POST["capacitacion_p2_4_femeni_M"];
      $dato["capacitacion_p2_4_femeni_H"] = $_POST["capacitacion_p2_4_femeni_H"];
      $dato["capacitacion_p2_4_femeni_T"] = $_POST["capacitacion_p2_4_femeni_T"];
      $dato["capacitacion_p2_4_antrdepe_M"] = $_POST["capacitacion_p2_4_antrdepe_M"];
      $dato["capacitacion_p2_4_antrdepe_H"] = $_POST["capacitacion_p2_4_antrdepe_H"];
      $dato["capacitacion_p2_4_antrdepe_T"] = $_POST["capacitacion_p2_4_antrdepe_T"];
      $dato["capacitacion_p2_4_vicolamu_M"] = $_POST["capacitacion_p2_4_vicolamu_M"];
      $dato["capacitacion_p2_4_vicolamu_H"] = $_POST["capacitacion_p2_4_vicolamu_H"];
      $dato["capacitacion_p2_4_vicolamu_T"] = $_POST["capacitacion_p2_4_vicolamu_T"];
      $dato["capacitacion_p2_4_predege_M"] = $_POST["capacitacion_p2_4_predege_M"];
      $dato["capacitacion_p2_4_predege_H"] = $_POST["capacitacion_p2_4_predege_H"];
      $dato["capacitacion_p2_4_predege_T"] = $_POST["capacitacion_p2_4_predege_T"];
      $dato["capacitacion_p2_4_ascoydedeex_M"] = $_POST["capacitacion_p2_4_ascoydedeex_M"];
      $dato["capacitacion_p2_4_ascoydedeex_H"] = $_POST["capacitacion_p2_4_ascoydedeex_H"];
      $dato["capacitacion_p2_4_ascoydedeex_T"] = $_POST["capacitacion_p2_4_ascoydedeex_T"];
      $dato["capacitacion_p2_4_siindejupepaad_M"] = $_POST["capacitacion_p2_4_siindejupepaad_M"];
      $dato["capacitacion_p2_4_siindejupepaad_H"] = $_POST["capacitacion_p2_4_siindejupepaad_H"];
      $dato["capacitacion_p2_4_siindejupepaad_T"] = $_POST["capacitacion_p2_4_siindejupepaad_T"];
      $dato["capacitacion_p2_4_ataperin_M"] = $_POST["capacitacion_p2_4_ataperin_M"];
      $dato["capacitacion_p2_4_ataperin_H"] = $_POST["capacitacion_p2_4_ataperin_H"];
      $dato["capacitacion_p2_4_ataperin_T"] = $_POST["capacitacion_p2_4_ataperin_T"];
      $dato["capacitacion_p2_4_atapercondis_M"] = $_POST["capacitacion_p2_4_atapercondis_M"];
      $dato["capacitacion_p2_4_atapercondis_H"] = $_POST["capacitacion_p2_4_atapercondis_H"];
      $dato["capacitacion_p2_4_atapercondis_T"] = $_POST["capacitacion_p2_4_atapercondis_T"];
      $dato["capacitacion_p2_4_jusalt_M"] = $_POST["capacitacion_p2_4_jusalt_M"];
      $dato["capacitacion_p2_4_jusalt_H"] = $_POST["capacitacion_p2_4_jusalt_H"];
      $dato["capacitacion_p2_4_jusalt_T"] = $_POST["capacitacion_p2_4_jusalt_T"];
      $dato["capacitacion_p2_4_justera_M"] = $_POST["capacitacion_p2_4_justera_M"];
      $dato["capacitacion_p2_4_justera_H"] = $_POST["capacitacion_p2_4_justera_H"];
      $dato["capacitacion_p2_4_justera_T"] = $_POST["capacitacion_p2_4_justera_T"];
      $dato["capacitacion_p2_4_justransi_M"] = $_POST["capacitacion_p2_4_justransi_M"];
      $dato["capacitacion_p2_4_justransi_H"] = $_POST["capacitacion_p2_4_justransi_H"];
      $dato["capacitacion_p2_4_justransi_T"] = $_POST["capacitacion_p2_4_justransi_T"];
      $dato["capacitacion_p2_4_atemuj_M"] = $_POST["capacitacion_p2_4_atemuj_M"];
      $dato["capacitacion_p2_4_atemuj_H"] = $_POST["capacitacion_p2_4_atemuj_H"];
      $dato["capacitacion_p2_4_atemuj_T"] = $_POST["capacitacion_p2_4_atemuj_T"];


      $dato["capacitacion_p2_4_otros"] = $_POST["capacitacion_p2_4_otros"];
      $dato["capacitacion_p2_4_otros_M"] = $_POST["capacitacion_p2_4_otros_M"];
      $dato["capacitacion_p2_4_otros_H"] = $_POST["capacitacion_p2_4_otros_H"];
      $dato["capacitacion_p2_4_otros_T"] = $_POST["capacitacion_p2_4_otros_T"];
      $dato["capacitacion_p2_5_instuprga"] = $_POST["capacitacion_p2_5_instuprga"];
      $dato["capacitacion_p2_6_evconconf_M"] = $_POST["capacitacion_p2_6_evconconf_M"];
      $dato["capacitacion_p2_6_evconconf_H"] = $_POST["capacitacion_p2_6_evconconf_H"];
      $dato["capacitacion_p2_6_evconconf_T"] = $_POST["capacitacion_p2_6_evconconf_T"];
      $dato["presupuesto_p3"] = $_POST["presupuesto_p3"];
      $dato["presupuestop3_1_anuaeje20"] = $_POST["presupuestop3_1_anuaeje20"];
      $dato["presupuestop3_2_anuaeje20"] = $_POST["presupuestop3_2_anuaeje20"];

    if($guardar=="ok"){

      $datosGuardados =  ModeloPolicias::mdlMostrarPolicias("policias","uuid",  $dato["uuid"]);
      echo  $datosGuardados[0]["id"];
    }else{
      echo $guardar;
    }


  }

}






if (isset($_POST["tab3"])){

  require_once "../modelos/policias1.modelo.php";

  $idFormulario = $_POST["idFormulario"];
    if($idFormulario > 0){
    $dato["idFormulario"] =$idFormulario;
    $dato["uuid"] = $_POST["uuid"];
    $dato["mujeres_p4_protoInterna"] = $_POST["mujeres_p4_protoInterna"];
    $dato["mujeres_p4_protoInterna_cual"] = $_POST["mujeres_p4_protoInterna_cual"];
    $dato["mujeres_p4_interno"] = $_POST["mujeres_p4_interno"];
    $dato["mujeres_p4_interno_cua"] = $_POST["mujeres_p4_interno_cua"];
    $dato["mujeres_p4_protoInvmipp"] = $_POST["mujeres_p4_protoInvmipp"];
    $dato["mujeres_p4_protoScjn"] = $_POST["mujeres_p4_protoScjn"];
    $dato["mujeres_p4_ninguno"] = $_POST["mujeres_p4_ninguno"];

    $dato["mujeres_p4_otroProtocolo"] = $_POST["mujeres_p4_otroProtocolo"];
    $dato["mujeres_p4_otroProtocolo_cual"] = $_POST["mujeres_p4_otroProtocolo_cual"];


    $dato["mujeres_p4_otro_nombre"] = $_POST["mujeres_p4_otro_nombre"];
    $dato["mujeres_p4_otro_nombre2"] = $_POST["camposDinamicos"];
    $dato["mujeres_p4_1_buenprac"] = $_POST["mujeres_p4_1_buenprac"];
    $dato["mujeres_p4_2_cualBuenprac"] = $_POST["mujeres_p4_2_cualBuenprac"];
    $dato["mujeres_p4_3_justmuj_M"] = $_POST["mujeres_p4_3_justmuj_M"];
    $dato["mujeres_p4_3_justmuj_H"] = $_POST["mujeres_p4_3_justmuj_H"];
    $dato["mujeres_p4_3_justmuj_T"] = $_POST["mujeres_p4_3_justmuj_T"];
    $dato["nna_p5_protoInterna"] = $_POST["nna_p5_protoInterna"];
    $dato["nna_p5_protoInterna_cual"] = $_POST["nna_p5_protoInterna_cual"];
    $dato["nna_p5_interno"] = $_POST["nna_p5_interno"];
    $dato["nna_p5_interno_cua"] = $_POST["nna_p5_interno_cua"];
    $dato["nna_p5_protoAteninte"] = $_POST["nna_p5_protoAteninte"];
    $dato["nna_p5_protoActjust"] = $_POST["nna_p5_protoActjust"];
    $dato["nna_p5_ninguno"] = $_POST["nna_p5_ninguno"];

    $dato["nna_p5_otroProtocolo"] = $_POST["nna_p5_otroProtocolo"];
    $dato["nna_p5_otroProtocolo_cual"] = $_POST["nna_p5_otroProtocolo_cual"];


    $dato["nna_p5_1_buenpracs"] = $_POST["nna_p5_1_buenpracs"];
    $dato["nna_p5_2_cualBuenpract"] = $_POST["nna_p5_2_cualBuenpract"];
    $dato["ja_p5_3_espejust_M"] = $_POST["ja_p5_3_espejust_M"];
    $dato["ja_p5_3_espejust_H"] = $_POST["ja_p5_3_espejust_H"];
    $dato["ja_p5_3_espejust_T"] = $_POST["ja_p5_3_espejust_T"];
    $dato["indigenas_p6_tradulenind"] = $_POST["indigenas_p6_tradulenind"];
    $dato["indigenas_p6_1_nahuatl_M"] = $_POST["indigenas_p6_1_nahuatl_M"];
    $dato["indigenas_p6_1_nahuatl_H"] = $_POST["indigenas_p6_1_nahuatl_H"];
    $dato["indigenas_p6_1_nahuatl_T"] = $_POST["indigenas_p6_1_nahuatl_T"];
    $dato["indigenas_p6_1_maya_M"] = $_POST["indigenas_p6_1_maya_M"];
    $dato["indigenas_p6_1_maya_H"] = $_POST["indigenas_p6_1_maya_H"];
    $dato["indigenas_p6_1_maya_T"] = $_POST["indigenas_p6_1_maya_T"];
    $dato["indigenas_p6_1_tseltal_M"] = $_POST["indigenas_p6_1_tseltal_M"];
    $dato["indigenas_p6_1_tseltal_H"] = $_POST["indigenas_p6_1_tseltal_H"];
    $dato["indigenas_p6_1_tseltal_T"] = $_POST["indigenas_p6_1_tseltal_T"];
    $dato["indigenas_p6_1_mixteco_M"] = $_POST["indigenas_p6_1_mixteco_M"];
    $dato["indigenas_p6_1_mixteco_H"] = $_POST["indigenas_p6_1_mixteco_H"];
    $dato["indigenas_p6_1_mixteco_T"] = $_POST["indigenas_p6_1_mixteco_T"];
    $dato["indigenas_p6_1_tsotsil_M"] = $_POST["indigenas_p6_1_tsotsil_M"];
    $dato["indigenas_p6_1_tsotsil_H"] = $_POST["indigenas_p6_1_tsotsil_H"];
    $dato["indigenas_p6_1_tsotsil_T"] = $_POST["indigenas_p6_1_tsotsil_T"];
    $dato["indigenas_p6_1_otro"] = $_POST["indigenas_p6_1_otro"];
    $dato["indigenas_p6_1_otro_M"] = $_POST["indigenas_p6_1_otro_M"];
    $dato["indigenas_p6_1_otro_H"] = $_POST["indigenas_p6_1_otro_H"];
    $dato["indigenas_p6_1_otro_T"] = $_POST["indigenas_p6_1_otro_T"];
    $dato["indigenas_p6_2_convenio"] = $_POST["indigenas_p6_2_convenio"];
    $dato["indigenas_p6_2_nombinst"] = $_POST["indigenas_p6_2_nombinst"];
    $dato["indigenas_p6_4_ProtoInter"] = $_POST["indigenas_p6_4_ProtoInter"];
    $dato["indigenas_p6_4_ProtoInter_cual"] = $_POST["indigenas_p6_4_ProtoInter_cual"];
    $dato["indigenas_p6_4_interno"] = $_POST["indigenas_p6_4_interno"];
    $dato["indigenas_p6_4_interno_cual"] = $_POST["indigenas_p6_4_interno_cual"];
    $dato["indigenas_p6_4_ProtoImpjust"] = $_POST["indigenas_p6_4_ProtoImpjust"];
    $dato["indigenas_p6_4_ninguno"] = $_POST["indigenas_p6_4_ninguno"];
    $dato["indigenas_p6_4_otro"] = $_POST["indigenas_p6_4_otro"];
    $dato["indigenas_p6_4_otro_cual"] = $_POST["indigenas_p6_4_otro_cual"];
    $dato["indigenas_p6_5_buenaspract"] = $_POST["indigenas_p6_5_buenaspract"];
    $dato["indigenas_p6_6_cualbuenaspra"] = $_POST["indigenas_p6_6_cualbuenaspra"];



    $actualizar = ModeloPolicias::mdlEditarFPoliciaTab3("policias",  $dato);


    echo $actualizar;
  }else{
    //INSERTA
    $dato["uuid"] = $_POST["uuid"];
    $dato["mujeres_p4_protoInterna"] = $_POST["mujeres_p4_protoInterna"];
    $dato["mujeres_p4_protoInterna_cual"] = $_POST["mujeres_p4_protoInterna_cual"];
    $dato["mujeres_p4_interno"] = $_POST["mujeres_p4_interno"];
    $dato["mujeres_p4_interno_cua"] = $_POST["mujeres_p4_interno_cua"];
    $dato["mujeres_p4_protoInvmipp"] = $_POST["mujeres_p4_protoInvmipp"];
    $dato["mujeres_p4_protoScjn"] = $_POST["mujeres_p4_protoScjn"];
    $dato["mujeres_p4_ninguno"] = $_POST["mujeres_p4_ninguno"];
    $dato["mujeres_p4_otroProtocolo"] = $_POST["mujeres_p4_otroProtocolo"];
    $dato["mujeres_p4_otroProtocolo_cual"] = $_POST["mujeres_p4_otroProtocolo_cual"];



    $dato["mujeres_p4_otro_nombre"] = $_POST["mujeres_p4_otro_nombre"];
    $dato["mujeres_p4_otro_nombre2"] = $_POST["mujeres_p4_otro_nombre2"];
    $dato["mujeres_p4_otro_nombre2"] = $_POST["camposDinamicos"];
    $dato["mujeres_p4_1_buenprac"] = $_POST["mujeres_p4_1_buenprac"];
    $dato["mujeres_p4_2_cualBuenprac"] = $_POST["mujeres_p4_2_cualBuenprac"];
    $dato["mujeres_p4_3_justmuj_M"] = $_POST["mujeres_p4_3_justmuj_M"];
    $dato["mujeres_p4_3_justmuj_H"] = $_POST["mujeres_p4_3_justmuj_H"];
    $dato["mujeres_p4_3_justmuj_T"] = $_POST["mujeres_p4_3_justmuj_T"];
    $dato["nna_p5_protoInterna"] = $_POST["nna_p5_protoInterna"];
    $dato["nna_p5_protoInterna_cual"] = $_POST["nna_p5_protoInterna_cual"];
    $dato["nna_p5_interno"] = $_POST["nna_p5_interno"];
    $dato["nna_p5_interno_cua"] = $_POST["nna_p5_interno_cua"];
    $dato["nna_p5_protoAteninte"] = $_POST["nna_p5_protoAteninte"];
    $dato["nna_p5_protoActjust"] = $_POST["nna_p5_protoActjust"];
    $dato["nna_p5_ninguno"] = $_POST["nna_p5_ninguno"];



    $dato["nna_p5_otroProtocolo"] = $_POST["nna_p5_otroProtocolo"];
    $dato["nna_p5_otroProtocolo_cual"] = $_POST["nna_p5_otroProtocolo_cual"];
    $dato["nna_p5_1_buenpracs"] = $_POST["nna_p5_1_buenpracs"];
    $dato["nna_p5_2_cualBuenpract"] = $_POST["nna_p5_2_cualBuenpract"];
    $dato["ja_p5_3_espejust_M"] = $_POST["ja_p5_3_espejust_M"];
    $dato["ja_p5_3_espejust_H"] = $_POST["ja_p5_3_espejust_H"];
    $dato["ja_p5_3_espejust_T"] = $_POST["ja_p5_3_espejust_T"];
    $dato["indigenas_p6_tradulenind"] = $_POST["indigenas_p6_tradulenind"];
    $dato["indigenas_p6_1_nahuatl_M"] = $_POST["indigenas_p6_1_nahuatl_M"];
    $dato["indigenas_p6_1_nahuatl_H"] = $_POST["indigenas_p6_1_nahuatl_H"];
    $dato["indigenas_p6_1_nahuatl_T"] = $_POST["indigenas_p6_1_nahuatl_T"];
    $dato["indigenas_p6_1_maya_M"] = $_POST["indigenas_p6_1_maya_M"];
    $dato["indigenas_p6_1_maya_H"] = $_POST["indigenas_p6_1_maya_H"];
    $dato["indigenas_p6_1_maya_T"] = $_POST["indigenas_p6_1_maya_T"];
    $dato["indigenas_p6_1_tseltal_M"] = $_POST["indigenas_p6_1_tseltal_M"];
    $dato["indigenas_p6_1_tseltal_H"] = $_POST["indigenas_p6_1_tseltal_H"];
    $dato["indigenas_p6_1_tseltal_T"] = $_POST["indigenas_p6_1_tseltal_T"];
    $dato["indigenas_p6_1_mixteco_M"] = $_POST["indigenas_p6_1_mixteco_M"];
    $dato["indigenas_p6_1_mixteco_H"] = $_POST["indigenas_p6_1_mixteco_H"];
    $dato["indigenas_p6_1_mixteco_T"] = $_POST["indigenas_p6_1_mixteco_T"];
    $dato["indigenas_p6_1_tsotsil_M"] = $_POST["indigenas_p6_1_tsotsil_M"];
    $dato["indigenas_p6_1_tsotsil_H"] = $_POST["indigenas_p6_1_tsotsil_H"];
    $dato["indigenas_p6_1_tsotsil_T"] = $_POST["indigenas_p6_1_tsotsil_T"];
    $dato["indigenas_p6_1_otro"] = $_POST["indigenas_p6_1_otro"];
    $dato["indigenas_p6_1_otro_M"] = $_POST["indigenas_p6_1_otro_M"];
    $dato["indigenas_p6_1_otro_H"] = $_POST["indigenas_p6_1_otro_H"];
    $dato["indigenas_p6_1_otro_T"] = $_POST["indigenas_p6_1_otro_T"];
    $dato["indigenas_p6_2_convenio"] = $_POST["indigenas_p6_2_convenio"];
    $dato["indigenas_p6_2_nombinst"] = $_POST["indigenas_p6_2_nombinst"];
    $dato["indigenas_p6_4_ProtoInter"] = $_POST["indigenas_p6_4_ProtoInter"];
    $dato["indigenas_p6_4_ProtoInter_cual"] = $_POST["indigenas_p6_4_ProtoInter_cual"];
    $dato["indigenas_p6_4_interno"] = $_POST["indigenas_p6_4_interno"];
    $dato["indigenas_p6_4_interno_cual"] = $_POST["indigenas_p6_4_interno_cual"];
    $dato["indigenas_p6_4_ProtoImpjust"] = $_POST["indigenas_p6_4_ProtoImpjust"];
    $dato["indigenas_p6_4_ninguno"] = $_POST["indigenas_p6_4_ninguno"];
    $dato["indigenas_p6_4_otro"] = $_POST["indigenas_p6_4_otro"];
    $dato["indigenas_p6_4_otro_cual"] = $_POST["indigenas_p6_4_otro_cual"];
    $dato["indigenas_p6_5_buenaspract"] = $_POST["indigenas_p6_5_buenaspract"];
    $dato["indigenas_p6_6_cualbuenaspra"] = $_POST["indigenas_p6_6_cualbuenaspra"];

    if($guardar=="ok"){

      $datosGuardados =  ModeloPolicias::mdlMostrarPolicias("policias","uuid",  $dato["uuid"]);
      echo  $datosGuardados[0]["id"];
    }else{
      echo $guardar;
    }


  }

}




if (isset($_POST["tab4"])){

  require_once "../modelos/policias1.modelo.php";

  $idFormulario = $_POST["idFormulario"];
    if($idFormulario > 0){
    $dato["idFormulario"] =$idFormulario;
    $dato["uuid"] = $_POST["uuid"];
    $dato["extranjeras_p7_tradLenExt"] = $_POST["extranjeras_p7_tradLenExt"];
    $dato["extranjeras_p7_1_traductor_M"] = $_POST["extranjeras_p7_1_traductor_M"];
    $dato["extranjeras_p7_1_traductor_H"] = $_POST["extranjeras_p7_1_traductor_H"];
    $dato["extranjeras_p7_1_traductor_T"] = $_POST["extranjeras_p7_1_traductor_T"];

    $dato["extranjeras_p7_1_ingles_M"] = $_POST["extranjeras_p7_1_ingles_M"];
    $dato["extranjeras_p7_1_ingles_H"] = $_POST["extranjeras_p7_1_ingles_H"];
    $dato["extranjeras_p7_1_ingles_T"] = $_POST["extranjeras_p7_1_ingles_T"];




    $dato["extranjeras_p7_1_chino_M"] = $_POST["extranjeras_p7_1_chino_M"];
    $dato["extranjeras_p7_1_chino_H"] = $_POST["extranjeras_p7_1_chino_H"];
    $dato["extranjeras_p7_1_chino_T"] = $_POST["extranjeras_p7_1_chino_T"];
    $dato["extranjeras_p7_1_frances_M"] = $_POST["extranjeras_p7_1_frances_M"];
    $dato["extranjeras_p7_1_frances_H"] = $_POST["extranjeras_p7_1_frances_H"];
    $dato["extranjeras_p7_1_frances_T"] = $_POST["extranjeras_p7_1_frances_T"];
    $dato["extranjeras_p7_1_arabe_M"] = $_POST["extranjeras_p7_1_arabe_M"];
    $dato["extranjeras_p7_1_arabe_H"] = $_POST["extranjeras_p7_1_arabe_H"];
    $dato["extranjeras_p7_1_arabe_T"] = $_POST["extranjeras_p7_1_arabe_T"];
    $dato["extranjeras_p7_1_ruso_M"] = $_POST["extranjeras_p7_1_ruso_M"];
    $dato["extranjeras_p7_1_ruso_H"] = $_POST["extranjeras_p7_1_ruso_H"];
    $dato["extranjeras_p7_1_ruso_T"] = $_POST["extranjeras_p7_1_ruso_T"];
    $dato["extranjeras_p7_1_otro"] = $_POST["extranjeras_p7_1_otro"];
    $dato["extranjeras_p7_1_otro_M"] = $_POST["extranjeras_p7_1_otro_M"];
    $dato["extranjeras_p7_1_otro_H"] = $_POST["extranjeras_p7_1_otro_H"];
    $dato["extranjeras_p7_1_otro_T"] = $_POST["extranjeras_p7_1_otro_T"];
    $dato["extranjeras_p7_2_ConvInst"] = $_POST["extranjeras_p7_2_ConvInst"];
    $dato["extranjeras_p7_3_nombreInsti"] = $_POST["extranjeras_p7_3_nombreInsti"];
    $dato["extranjeras_p7_4_ProtoInterna"] = $_POST["extranjeras_p7_4_ProtoInterna"];
    $dato["extranjeras_p7_4_ProtoInterna_cual"] = $_POST["extranjeras_p7_4_ProtoInterna_cual"];
    $dato["extranjeras_p7_4_interno"] = $_POST["extranjeras_p7_4_interno"];
    $dato["extranjeras_p7_4_interno_cual"] = $_POST["extranjeras_p7_4_interno_cual"];
    $dato["extranjeras_p7_4_ninguno"] = $_POST["extranjeras_p7_4_ninguno"];
    $dato["extranjeras_p7_4_Otro"] = $_POST["extranjeras_p7_4_Otro"];
    $dato["extranjeras_p7_4_Otro_cual"] = $_POST["extranjeras_p7_4_Otro_cual"];
    $dato["extranjeras_p7_5_buenasprac"] = $_POST["extranjeras_p7_5_buenasprac"];
    $dato["extranjeras_p7_6_buenasprac_cual"] = $_POST["extranjeras_p7_6_buenasprac_cual"];
    $dato["discapacidad_p8_braile"] = $_POST["discapacidad_p8_braile"];
    $dato["discapacidad_p8_LenSen"] = $_POST["discapacidad_p8_LenSen"];
    $dato["discapacidad_p8_1_nombreInst"] = $_POST["discapacidad_p8_1_nombreInst"];
    $dato["discapacidad_p8_2_ProtoInterna"] = $_POST["discapacidad_p8_2_ProtoInterna"];
    $dato["discapacidad_p8_2_ProtoInterna_cual"] = $_POST["discapacidad_p8_2_ProtoInterna_cual"];
    $dato["discapacidad_p8_2_interno"] = $_POST["discapacidad_p8_2_interno"];
    $dato["discapacidad_p8_2_interno_cua"] = $_POST["discapacidad_p8_2_interno_cua"];
    $dato["discapacidad_p8_2_ProtoImpJust"] = $_POST["discapacidad_p8_2_ProtoImpJust"];
    $dato["discapacidad_p8_2_ninguno"] = $_POST["discapacidad_p8_2_ninguno"];
    $dato["discapacidad_p8_2_otros"] = $_POST["discapacidad_p8_2_otros"];
    $dato["discapacidad_p8_2_otros_cual"] = $_POST["discapacidad_p8_2_otros_cual"];
    $dato["discapacidad_p8_3_buenasprac"] = $_POST["discapacidad_p8_3_buenasprac"];
    $dato["discapacidad_p8_3_buenasprac_cual"] = $_POST["discapacidad_p8_3_buenasprac_cual"];




    $actualizar = ModeloPolicias::mdlEditarFPoliciaTab4("policias",  $dato);


    echo $actualizar;
  }else{
    //INSERTA
    $dato["uuid"] = $_POST["uuid"];
    $dato["extranjeras_p7_tradLenExt"] = $_POST["extranjeras_p7_tradLenExt"];
    $dato["extranjeras_p7_1_traductor_M"] = $_POST["extranjeras_p7_1_traductor_M"];
    $dato["extranjeras_p7_1_traductor_H"] = $_POST["extranjeras_p7_1_traductor_H"];
    $dato["extranjeras_p7_1_traductor_T"] = $_POST["extranjeras_p7_1_traductor_T"];

    $dato["extranjeras_p7_1_ingles_M"] = $_POST["extranjeras_p7_1_ingles_M"];
    $dato["extranjeras_p7_1_ingles_H"] = $_POST["extranjeras_p7_1_ingles_H"];
    $dato["extranjeras_p7_1_ingles_T"] = $_POST["extranjeras_p7_1_ingles_T"];



    $dato["extranjeras_p7_1_chino_M"] = $_POST["extranjeras_p7_1_chino_M"];
    $dato["extranjeras_p7_1_chino_H"] = $_POST["extranjeras_p7_1_chino_H"];
    $dato["extranjeras_p7_1_chino_T"] = $_POST["extranjeras_p7_1_chino_T"];
    $dato["extranjeras_p7_1_frances_M"] = $_POST["extranjeras_p7_1_frances_M"];
    $dato["extranjeras_p7_1_frances_H"] = $_POST["extranjeras_p7_1_frances_H"];
    $dato["extranjeras_p7_1_frances_T"] = $_POST["extranjeras_p7_1_frances_T"];
    $dato["extranjeras_p7_1_arabe_M"] = $_POST["extranjeras_p7_1_arabe_M"];
    $dato["extranjeras_p7_1_arabe_H"] = $_POST["extranjeras_p7_1_arabe_H"];
    $dato["extranjeras_p7_1_arabe_T"] = $_POST["extranjeras_p7_1_arabe_T"];
    $dato["extranjeras_p7_1_ruso_M"] = $_POST["extranjeras_p7_1_ruso_M"];
    $dato["extranjeras_p7_1_ruso_H"] = $_POST["extranjeras_p7_1_ruso_H"];
    $dato["extranjeras_p7_1_ruso_T"] = $_POST["extranjeras_p7_1_ruso_T"];
    $dato["extranjeras_p7_1_otro"] = $_POST["extranjeras_p7_1_otro"];
    $dato["extranjeras_p7_1_otro_M"] = $_POST["extranjeras_p7_1_otro_M"];
    $dato["extranjeras_p7_1_otro_H"] = $_POST["extranjeras_p7_1_otro_H"];
    $dato["extranjeras_p7_1_otro_T"] = $_POST["extranjeras_p7_1_otro_T"];
    $dato["extranjeras_p7_2_ConvInst"] = $_POST["extranjeras_p7_2_ConvInst"];
    $dato["extranjeras_p7_3_nombreInsti"] = $_POST["extranjeras_p7_3_nombreInsti"];
    $dato["extranjeras_p7_4_ProtoInterna"] = $_POST["extranjeras_p7_4_ProtoInterna"];
    $dato["extranjeras_p7_4_ProtoInterna_cual"] = $_POST["extranjeras_p7_4_ProtoInterna_cual"];
    $dato["extranjeras_p7_4_interno"] = $_POST["extranjeras_p7_4_interno"];
    $dato["extranjeras_p7_4_interno_cual"] = $_POST["extranjeras_p7_4_interno_cual"];
    $dato["extranjeras_p7_4_ninguno"] = $_POST["extranjeras_p7_4_ninguno"];
    $dato["extranjeras_p7_4_Otro"] = $_POST["extranjeras_p7_4_Otro"];
    $dato["extranjeras_p7_4_Otro_cual"] = $_POST["extranjeras_p7_4_Otro_cual"];
    $dato["extranjeras_p7_5_buenasprac"] = $_POST["extranjeras_p7_5_buenasprac"];
    $dato["extranjeras_p7_6_buenasprac_cual"] = $_POST["extranjeras_p7_6_buenasprac_cual"];
    $dato["discapacidad_p8_braile"] = $_POST["discapacidad_p8_braile"];
    $dato["discapacidad_p8_LenSen"] = $_POST["discapacidad_p8_LenSen"];
    $dato["discapacidad_p8_1_nombreInst"] = $_POST["discapacidad_p8_1_nombreInst"];
    $dato["discapacidad_p8_2_ProtoInterna"] = $_POST["discapacidad_p8_2_ProtoInterna"];
    $dato["discapacidad_p8_2_ProtoInterna_cual"] = $_POST["discapacidad_p8_2_ProtoInterna_cual"];
    $dato["discapacidad_p8_2_interno"] = $_POST["discapacidad_p8_2_interno"];
    $dato["discapacidad_p8_2_interno_cua"] = $_POST["discapacidad_p8_2_interno_cua"];
    $dato["discapacidad_p8_2_ProtoImpJust"] = $_POST["discapacidad_p8_2_ProtoImpJust"];
    $dato["discapacidad_p8_2_ninguno"] = $_POST["discapacidad_p8_2_ninguno"];
    $dato["discapacidad_p8_2_otros"] = $_POST["discapacidad_p8_2_otros"];
    $dato["discapacidad_p8_2_otros_cual"] = $_POST["discapacidad_p8_2_otros_cual"];
    $dato["discapacidad_p8_3_buenasprac"] = $_POST["discapacidad_p8_3_buenasprac"];
    $dato["discapacidad_p8_3_buenasprac_cual"] = $_POST["discapacidad_p8_3_buenasprac_cual"];


    if($guardar=="ok"){

      $datosGuardados =  ModeloPolicias::mdlMostrarPolicias("policias","uuid",  $dato["uuid"]);
      echo  $datosGuardados[0]["id"];
    }else{
      echo $guardar;
    }


  }

}




if (isset($_POST["tab5"])){

  require_once "../modelos/policias1.modelo.php";

  $idFormulario = $_POST["idFormulario"];
    if($idFormulario > 0){
    $dato["idFormulario"] =$idFormulario;
    $dato["uuid"] = $_POST["uuid"];
    $dato["colaboracion_p9_tipcol"] = $_POST["colaboracion_p9_tipcol"];
    $dato["colaboracion_p9_1_instcol"] = $_POST["colaboracion_p9_1_instcol"];
    $dato["colaboracion_p9_2_finan"] = $_POST["colaboracion_p9_2_finan"];
    $dato["colaboracion_p9_2_dona"] = $_POST["colaboracion_p9_2_dona"];
    $dato["colaboracion_p9_2_capa"] = $_POST["colaboracion_p9_2_capa"];
    $dato["colaboracion_p9_2_otros"] = $_POST["colaboracion_p9_2_otros"];
    $dato["colaboracion_p9_2_cual"] = $_POST["colaboracion_p9_2_cual"];

    $dato["colaboracion_p9_3_descol"] = $_POST["colaboracion_p9_3_descol"];



    $dato["registro_p10_intsispla"] = $_POST["registro_p10_intsispla"];
    $dato["registro_p10_1_servsispl"] = $_POST["registro_p10_1_servsispl"];
    $dato["registro_p10_2_proliga"] = $_POST["registro_p10_2_proliga"];



    $dato["registro_p10_lib"] = $_POST["registro_p10_lib"];
    $dato["registro_p10_imp"] = $_POST["registro_p10_imp"];
    $dato["registro_p10_tab"] = $_POST["registro_p10_tab"];
    $dato["registro_p10_cel"] = $_POST["registro_p10_cel"];
    $dato["registro_p10_comp"] = $_POST["registro_p10_comp"];
    $dato["registro_p10_otro"] = $_POST["registro_p10_otro"];
    $dato["registro_p10_cual"] = $_POST["registro_p10_cual"];
    $dato["registro_p10_1_ind"] = $_POST["registro_p10_1_ind"];
    $dato["registro_p10_1_per"] = $_POST["registro_p10_1_per"];
    $dato["registro_p10_1_cap"] = $_POST["registro_p10_1_cap"];
    $dato["registro_p10_1_perdet"] = $_POST["registro_p10_1_perdet"];
    $dato["registro_p10_1_del"] = $_POST["registro_p10_1_del"];
    $dato["registro_p10_1_vic"] = $_POST["registro_p10_1_vic"];
    $dato["registro_p10_1_perdes"] = $_POST["registro_p10_1_perdes"];
    $dato["registro_p10_1_den"] = $_POST["registro_p10_1_den"];
    $dato["registro_p10_1_pedetfad"] = $_POST["registro_p10_1_pedetfad"];
    $dato["registro_p10_1_pedetpdis"] = $_POST["registro_p10_1_pedetpdis"];
    $dato["registro_p10_1_llam"] = $_POST["registro_p10_1_llam"];
    $dato["registro_p10_1_dil"] = $_POST["registro_p10_1_dil"];
    $dato["registro_p10_1_part"] = $_POST["registro_p10_1_part"];
    $dato["registro_p10_1_reu"] = $_POST["registro_p10_1_reu"];
    $dato["registro_p10_1_comer"] = $_POST["registro_p10_1_comer"];
    $dato["registro_p10_1_esc"] = $_POST["registro_p10_1_esc"];
    $dato["registro_p10_1_atn"] = $_POST["registro_p10_1_atn"];
    $dato["registro_p10_1_actu"] = $_POST["registro_p10_1_actu"];
    $dato["registro_p10_1_otros"] = $_POST["registro_p10_1_otros"];
    $dato["registro_p10_1_cuales"] = $_POST["registro_p10_1_cuales"];
    $dato["registro_p10_2_lib"] = $_POST["registro_p10_2_lib"];
    $dato["registro_p10_2_bd"] = $_POST["registro_p10_2_bd"];
    $dato["registro_p10_2_ap"] = $_POST["registro_p10_2_ap"];
    $dato["registro_p10_2_plat"] = $_POST["registro_p10_2_plat"];
    $dato["registro_p10_2_cap"] = $_POST["registro_p10_2_cap"];
    $dato["registro_p10_2_otro"] = $_POST["registro_p10_2_otro"];
    $dato["registro_p10_2_cual"] = $_POST["registro_p10_2_cual"];
    $dato["registro_p10_3_inter"] = $_POST["registro_p10_3_inter"];
    $dato["registro_p10_4_instmun"] = $_POST["registro_p10_4_instmun"];
    $dato["registro_p10_4_instmunot"] = $_POST["registro_p10_4_instmunot"];
    $dato["registro_p10_4_instestot"] = $_POST["registro_p10_4_instestot"];
    $dato["registro_p10_4_sec"] = $_POST["registro_p10_4_sec"];
    $dato["registro_p10_4_guar"] = $_POST["registro_p10_4_guar"];
    $dato["registro_p10_4_procotras"] = $_POST["registro_p10_4_procotras"];
    $dato["registro_p10_4_fisc"] = $_POST["registro_p10_4_fisc"];
    $dato["registro_p10_4_podjud"] = $_POST["registro_p10_4_podjud"];
    $dato["registro_p10_4_podjudotras"] = $_POST["registro_p10_4_podjudotras"];
    $dato["registro_p10_4_podfed"] = $_POST["registro_p10_4_podfed"];
    $dato["registro_p10_4_sipenent"] = $_POST["registro_p10_4_sipenent"];
    $dato["registro_p10_4_sispen"] = $_POST["registro_p10_4_sispen"];
    $dato["registro_p10_4_sispenfed"] = $_POST["registro_p10_4_sispenfed"];
    $dato["registro_p10_4_otro"] = $_POST["registro_p10_4_otro"];
    $dato["registro_p10_4_cual"] = $_POST["registro_p10_4_cual"];




    $actualizar = ModeloPolicias::mdlEditarFPoliciaTab5("policias",  $dato);


    echo $actualizar;
  }else{
    //INSERTA
    $dato["uuid"] = $_POST["uuid"];
    $dato["colaboracion_p9_tipcol"] = $_POST["colaboracion_p9_tipcol"];
    $dato["colaboracion_p9_1_instcol"] = $_POST["colaboracion_p9_1_instcol"];
    $dato["colaboracion_p9_2_finan"] = $_POST["colaboracion_p9_2_finan"];
    $dato["colaboracion_p9_2_dona"] = $_POST["colaboracion_p9_2_dona"];
    $dato["colaboracion_p9_2_capa"] = $_POST["colaboracion_p9_2_capa"];
    $dato["colaboracion_p9_2_otros"] = $_POST["colaboracion_p9_2_otros"];
    $dato["colaboracion_p9_2_cual"] = $_POST["colaboracion_p9_2_cual"];

    $dato["colaboracion_p9_3_descol"] = $_POST["colaboracion_p9_3_descol"];


    $dato["registro_p10_intsispla"] = $_POST["registro_p10_intsispla"];
    $dato["registro_p10_1_servsispl"] = $_POST["registro_p10_1_servsispl"];
    $dato["registro_p10_2_proliga"] = $_POST["registro_p10_2_proliga"];

    $dato["registro_p10_lib"] = $_POST["registro_p10_lib"];
    $dato["registro_p10_imp"] = $_POST["registro_p10_imp"];
    $dato["registro_p10_tab"] = $_POST["registro_p10_tab"];
    $dato["registro_p10_cel"] = $_POST["registro_p10_cel"];
    $dato["registro_p10_comp"] = $_POST["registro_p10_comp"];
    $dato["registro_p10_otro"] = $_POST["registro_p10_otro"];
    $dato["registro_p10_cual"] = $_POST["registro_p10_cual"];
    $dato["registro_p10_1_ind"] = $_POST["registro_p10_1_ind"];
    $dato["registro_p10_1_per"] = $_POST["registro_p10_1_per"];
    $dato["registro_p10_1_cap"] = $_POST["registro_p10_1_cap"];
    $dato["registro_p10_1_perdet"] = $_POST["registro_p10_1_perdet"];
    $dato["registro_p10_1_del"] = $_POST["registro_p10_1_del"];
    $dato["registro_p10_1_vic"] = $_POST["registro_p10_1_vic"];
    $dato["registro_p10_1_perdes"] = $_POST["registro_p10_1_perdes"];
    $dato["registro_p10_1_den"] = $_POST["registro_p10_1_den"];
    $dato["registro_p10_1_pedetfad"] = $_POST["registro_p10_1_pedetfad"];
    $dato["registro_p10_1_pedetpdis"] = $_POST["registro_p10_1_pedetpdis"];
    $dato["registro_p10_1_llam"] = $_POST["registro_p10_1_llam"];
    $dato["registro_p10_1_dil"] = $_POST["registro_p10_1_dil"];
    $dato["registro_p10_1_part"] = $_POST["registro_p10_1_part"];
    $dato["registro_p10_1_reu"] = $_POST["registro_p10_1_reu"];
    $dato["registro_p10_1_comer"] = $_POST["registro_p10_1_comer"];
    $dato["registro_p10_1_esc"] = $_POST["registro_p10_1_esc"];
    $dato["registro_p10_1_atn"] = $_POST["registro_p10_1_atn"];
    $dato["registro_p10_1_actu"] = $_POST["registro_p10_1_actu"];
    $dato["registro_p10_1_otros"] = $_POST["registro_p10_1_otros"];
    $dato["registro_p10_1_cuales"] = $_POST["registro_p10_1_cuales"];
    $dato["registro_p10_2_lib"] = $_POST["registro_p10_2_lib"];
    $dato["registro_p10_2_bd"] = $_POST["registro_p10_2_bd"];
    $dato["registro_p10_2_ap"] = $_POST["registro_p10_2_ap"];
    $dato["registro_p10_2_plat"] = $_POST["registro_p10_2_plat"];
    $dato["registro_p10_2_cap"] = $_POST["registro_p10_2_cap"];
    $dato["registro_p10_2_otro"] = $_POST["registro_p10_2_otro"];
    $dato["registro_p10_2_cual"] = $_POST["registro_p10_2_cual"];
    $dato["registro_p10_3_inter"] = $_POST["registro_p10_3_inter"];
    $dato["registro_p10_4_instmun"] = $_POST["registro_p10_4_instmun"];
    $dato["registro_p10_4_instmunot"] = $_POST["registro_p10_4_instmunot"];
    $dato["registro_p10_4_instestot"] = $_POST["registro_p10_4_instestot"];
    $dato["registro_p10_4_sec"] = $_POST["registro_p10_4_sec"];
    $dato["registro_p10_4_guar"] = $_POST["registro_p10_4_guar"];
    $dato["registro_p10_4_procotras"] = $_POST["registro_p10_4_procotras"];
    $dato["registro_p10_4_fisc"] = $_POST["registro_p10_4_fisc"];
    $dato["registro_p10_4_podjud"] = $_POST["registro_p10_4_podjud"];
    $dato["registro_p10_4_podjudotras"] = $_POST["registro_p10_4_podjudotras"];
    $dato["registro_p10_4_podfed"] = $_POST["registro_p10_4_podfed"];
    $dato["registro_p10_4_sipenent"] = $_POST["registro_p10_4_sipenent"];
    $dato["registro_p10_4_sispen"] = $_POST["registro_p10_4_sispen"];
    $dato["registro_p10_4_sispenfed"] = $_POST["registro_p10_4_sispenfed"];
    $dato["registro_p10_4_otro"] = $_POST["registro_p10_4_otro"];
    $dato["registro_p10_4_cual"] = $_POST["registro_p10_4_cual"];




    if($guardar=="ok"){

      $datosGuardados =  ModeloPolicias::mdlMostrarPolicias("policias","uuid",  $dato["uuid"]);
      echo  $datosGuardados[0]["id"];
    }else{
      echo $guardar;
    }


  }

}





if (isset($_POST["tab6"])){

  require_once "../modelos/policias1.modelo.php";

  $idFormulario = $_POST["idFormulario"];
    if($idFormulario > 0){
    $dato["idFormulario"] =$idFormulario;
    $dato["uuid"] = $_POST["uuid"];
    $dato["indicadores_p11_modeval"] = $_POST["indicadores_p11_modeval"];
    $dato["indicadores_p11_1_cualind"] = $_POST["indicadores_p11_1_cualind"];
    $dato["evaluacion_p11_2_evalind"] = $_POST["evaluacion_p11_2_evalind"];
    $dato["indicadores_p12_bunprac"] = $_POST["indicadores_p12_bunprac"];
    $dato["transparencia_p12_1_cualpract"] = $_POST["transparencia_p12_1_cualpract"];
    $dato["necesidades_p13_cap"] = $_POST["necesidades_p13_cap"];
    $dato["necesidades_p13_recmat"] = $_POST["necesidades_p13_recmat"];
    $dato["necesidades_p13_rectec"] = $_POST["necesidades_p13_rectec"];
    $dato["necesidades_p13_per"] = $_POST["necesidades_p13_per"];
    $dato["necesidades_p13_infra"] = $_POST["necesidades_p13_infra"];
    $dato["necesidades_p13_mej"] = $_POST["necesidades_p13_mej"];
    $dato["necesidades_p13_prot"] = $_POST["necesidades_p13_prot"];
    $dato["necesidades_p13_otros"] = $_POST["necesidades_p13_otros"];
    $dato["necesidades_p13_cual"] = $_POST["necesidades_p13_cual"];
    $dato["necesidades_p13_1_desnec"] = $_POST["necesidades_p13_1_desnec"];


    $actualizar = ModeloPolicias::mdlEditarFPoliciaTab6("policias",  $dato);


    echo $actualizar;
  }else{
    //INSERTA
    $dato["uuid"] = $_POST["uuid"];
    $dato["indicadores_p11_modeval"] = $_POST["indicadores_p11_modeval"];
    $dato["indicadores_p11_1_cualind"] = $_POST["indicadores_p11_1_cualind"];
    $dato["evaluacion_p11_2_evalind"] = $_POST["evaluacion_p11_2_evalind"];
    $dato["indicadores_p12_bunprac"] = $_POST["indicadores_p12_bunprac"];
    $dato["transparencia_p12_1_cualpract"] = $_POST["transparencia_p12_1_cualpract"];
    $dato["necesidades_p13_cap"] = $_POST["necesidades_p13_cap"];
    $dato["necesidades_p13_recmat"] = $_POST["necesidades_p13_recmat"];
    $dato["necesidades_p13_rectec"] = $_POST["necesidades_p13_rectec"];
    $dato["necesidades_p13_per"] = $_POST["necesidades_p13_per"];
    $dato["necesidades_p13_infra"] = $_POST["necesidades_p13_infra"];
    $dato["necesidades_p13_mej"] = $_POST["necesidades_p13_mej"];
    $dato["necesidades_p13_prot"] = $_POST["necesidades_p13_prot"];
    $dato["necesidades_p13_otros"] = $_POST["necesidades_p13_otros"];
    $dato["necesidades_p13_cual"] = $_POST["necesidades_p13_cual"];
    $dato["necesidades_p13_1_desnec"] = $_POST["necesidades_p13_1_desnec"];


    if($guardar=="ok"){

      $datosGuardados =  ModeloPolicias::mdlMostrarPolicias("policias","uuid",  $dato["uuid"]);
      echo  $datosGuardados[0]["id"];
    }else{
      echo $guardar;
    }


  }

}




if (isset($_POST["tab7"])){

  require_once "../modelos/policias1.modelo.php";

  $idFormulario = $_POST["idFormulario"];
    if($idFormulario > 0){
    $dato["idFormulario"] =$idFormulario;
    $dato["uuid"] = $_POST["uuid"];
    $dato["denunciaserv_p14_den"] = $_POST["denunciaserv_p14_den"];
    $dato["denunciaserv_p14_den_cual"] = $_POST["denunciaserv_p14_den_cual"];

    $dato["denunciaserv_p14_1_orginv"] = $_POST["denunciaserv_p14_1_orginv"];

    $dato["denunciaserv_p14_2_quej"] = $_POST["denunciaserv_p14_2_quej"];

    $dato["denunciaserv_p14_3_inv_M"] = $_POST["denunciaserv_p14_3_inv_M"];
    $dato["denunciaserv_p14_3_inv_H"] = $_POST["denunciaserv_p14_3_inv_H"];
    $dato["denunciaserv_p14_3_inv_T"] = $_POST["denunciaserv_p14_3_inv_T"];

    $dato["denunciaserv_p14_3_int_M"] = $_POST["denunciaserv_p14_3_int_M"];
    $dato["denunciaserv_p14_3_int_H"] = $_POST["denunciaserv_p14_3_int_H"];
    $dato["denunciaserv_p14_3_int_T"] = $_POST["denunciaserv_p14_3_int_T"];

    $dato["denunciaserv_p14_3_reac_M"] = $_POST["denunciaserv_p14_3_reac_M"];
    $dato["denunciaserv_p14_3_reac_H"] = $_POST["denunciaserv_p14_3_reac_H"];
    $dato["denunciaserv_p14_3_reac_T"] = $_POST["denunciaserv_p14_3_reac_T"];

    $dato["denunciaserv_p14_3_proc_M"] = $_POST["denunciaserv_p14_3_proc_M"];
    $dato["denunciaserv_p14_3_proc_H"] = $_POST["denunciaserv_p14_3_proc_H"];
    $dato["denunciaserv_p14_3_proc_T"] = $_POST["denunciaserv_p14_3_proc_T"];

    $dato["denunciaserv_p14_3_seg_M"] = $_POST["denunciaserv_p14_3_seg_M"];
    $dato["denunciaserv_p14_3_seg_H"] = $_POST["denunciaserv_p14_3_seg_H"];
    $dato["denunciaserv_p14_3_seg_T"] = $_POST["denunciaserv_p14_3_seg_T"];

    $dato["denunciaserv_p14_3_prev_M"] = $_POST["denunciaserv_p14_3_prev_M"];
    $dato["denunciaserv_p14_3_prev_H"] = $_POST["denunciaserv_p14_3_prev_H"];
    $dato["denunciaserv_p14_3_prev_T"] = $_POST["denunciaserv_p14_3_prev_T"];

    $dato["denunciaserv_p14_3_pri_M"] = $_POST["denunciaserv_p14_3_pri_M"];
    $dato["denunciaserv_p14_3_pri_H"] = $_POST["denunciaserv_p14_3_pri_H"];
    $dato["denunciaserv_p14_3_pri_T"] = $_POST["denunciaserv_p14_3_pri_T"];

    $dato["denunciaserv_p14_3_otros"] = $_POST["denunciaserv_p14_3_otros"];
    $dato["denunciaserv_p14_3_otros_M"] = $_POST["denunciaserv_p14_3_otros_M"];
    $dato["denunciaserv_p14_3_otros_H"] = $_POST["denunciaserv_p14_3_otros_H"];
    $dato["denunciaserv_p14_3_otros_T"] = $_POST["denunciaserv_p14_3_otros_T"];

    $dato["denunciaserv_p14_4_inv_M"] = $_POST["denunciaserv_p14_4_inv_M"];
    $dato["denunciaserv_p14_4_inv_H"] = $_POST["denunciaserv_p14_4_inv_H"];
    $dato["denunciaserv_p14_4_inv_T"] = $_POST["denunciaserv_p14_4_inv_T"];

    $dato["denunciaserv_p14_4_intel_M"] = $_POST["denunciaserv_p14_4_intel_M"];
    $dato["denunciaserv_p14_4_intel_H"] = $_POST["denunciaserv_p14_4_intel_H"];
    $dato["denunciaserv_p14_4_intel_T"] = $_POST["denunciaserv_p14_4_intel_T"];

    $dato["denunciaserv_p14_4_reac_M"] = $_POST["denunciaserv_p14_4_reac_M"];
    $dato["denunciaserv_p14_4_reac_H"] = $_POST["denunciaserv_p14_4_reac_H"];
    $dato["denunciaserv_p14_4_reac_T"] = $_POST["denunciaserv_p14_4_reac_T"];

    $dato["denunciaserv_p14_4_proc_M"] = $_POST["denunciaserv_p14_4_proc_M"];
    $dato["denunciaserv_p14_4_proc_H"] = $_POST["denunciaserv_p14_4_proc_H"];
    $dato["denunciaserv_p14_4_proc_T"] = $_POST["denunciaserv_p14_4_proc_T"];

    $dato["denunciaserv_p14_4_seg_M"] = $_POST["denunciaserv_p14_4_seg_M"];
    $dato["denunciaserv_p14_4_seg_H"] = $_POST["denunciaserv_p14_4_seg_H"];
    $dato["denunciaserv_p14_4_seg_T"] = $_POST["denunciaserv_p14_4_seg_T"];

    $dato["denunciaserv_p14_4_prev_M"] = $_POST["denunciaserv_p14_4_prev_M"];
    $dato["denunciaserv_p14_4_prev_H"] = $_POST["denunciaserv_p14_4_prev_H"];
    $dato["denunciaserv_p14_4_prev_T"] = $_POST["denunciaserv_p14_4_prev_T"];

    $dato["denunciaserv_p14_4_pri_M"] = $_POST["denunciaserv_p14_4_pri_M"];
    $dato["denunciaserv_p14_4_pri_H"] = $_POST["denunciaserv_p14_4_pri_H"];
    $dato["denunciaserv_p14_4_pri_T"] = $_POST["denunciaserv_p14_4_pri_T"];

    $dato["denunciaserv_p14_4_otroscual"] = $_POST["denunciaserv_p14_4_otroscual"];
    $dato["denunciaserv_p14_4_otros_M"] = $_POST["denunciaserv_p14_4_otros_M"];
    $dato["denunciaserv_p14_4_otros_H"] = $_POST["denunciaserv_p14_4_otros_H"];
    $dato["denunciaserv_p14_4_otros_T"] = $_POST["denunciaserv_p14_4_otros_T"];




    $dato["denunciaserv_p142_den"] = $_POST["denunciaserv_p142_den"];
    $dato["denunciaserv_p142_den_cual"] = $_POST["denunciaserv_p142_den_cual"];
    $dato["denunciaserv_p142_2_quej"] = $_POST["denunciaserv_p142_2_quej"];
    $dato["denunciaserv_p142_3_inv_M"] = $_POST["denunciaserv_p142_3_inv_M"];
    $dato["denunciaserv_p142_3_inv_H"] = $_POST["denunciaserv_p142_3_inv_H"];
    $dato["denunciaserv_p142_3_inv_T"] = $_POST["denunciaserv_p142_3_inv_T"];
    $dato["denunciaserv_p142_3_int_M"] = $_POST["denunciaserv_p142_3_int_M"];
    $dato["denunciaserv_p142_3_int_H"] = $_POST["denunciaserv_p142_3_int_H"];
    $dato["denunciaserv_p142_3_int_T"] = $_POST["denunciaserv_p142_3_int_T"];
    $dato["denunciaserv_p142_3_reac_M"] = $_POST["denunciaserv_p142_3_reac_M"];
    $dato["denunciaserv_p142_3_reac_H"] = $_POST["denunciaserv_p142_3_reac_H"];
    $dato["denunciaserv_p142_3_reac_T"] = $_POST["denunciaserv_p142_3_reac_T"];
    $dato["denunciaserv_p142_3_proc_M"] = $_POST["denunciaserv_p142_3_proc_M"];
    $dato["denunciaserv_p142_3_proc_H"] = $_POST["denunciaserv_p142_3_proc_H"];
    $dato["denunciaserv_p142_3_proc_T"] = $_POST["denunciaserv_p142_3_proc_T"];
    $dato["denunciaserv_p142_3_seg_M"] = $_POST["denunciaserv_p142_3_seg_M"];
    $dato["denunciaserv_p142_3_seg_H"] = $_POST["denunciaserv_p142_3_seg_H"];
    $dato["denunciaserv_p142_3_seg_T"] = $_POST["denunciaserv_p142_3_seg_T"];
    $dato["denunciaserv_p142_3_prev_M"] = $_POST["denunciaserv_p142_3_prev_M"];
    $dato["denunciaserv_p142_3_prev_H"] = $_POST["denunciaserv_p142_3_prev_H"];
    $dato["denunciaserv_p142_3_prev_T"] = $_POST["denunciaserv_p142_3_prev_T"];
    $dato["denunciaserv_p142_3_pri_M"] = $_POST["denunciaserv_p142_3_pri_M"];
    $dato["denunciaserv_p142_3_pri_H"] = $_POST["denunciaserv_p142_3_pri_H"];
    $dato["denunciaserv_p142_3_pri_T"] = $_POST["denunciaserv_p142_3_pri_T"];
    $dato["denunciaserv_p142_3_otros"] = $_POST["denunciaserv_p142_3_otros"];
    $dato["denunciaserv_p142_3_otros_M"] = $_POST["denunciaserv_p142_3_otros_M"];
    $dato["denunciaserv_p142_3_otros_H"] = $_POST["denunciaserv_p142_3_otros_H"];
    $dato["denunciaserv_p142_3_otros_T"] = $_POST["denunciaserv_p142_3_otros_T"];
    $dato["denunciaserv_p142_4_inv_M"] = $_POST["denunciaserv_p142_4_inv_M"];
    $dato["denunciaserv_p142_4_inv_H"] = $_POST["denunciaserv_p142_4_inv_H"];
    $dato["denunciaserv_p142_4_inv_T"] = $_POST["denunciaserv_p142_4_inv_T"];
    $dato["denunciaserv_p142_4_intel_M"] = $_POST["denunciaserv_p142_4_intel_M"];
    $dato["denunciaserv_p142_4_intel_H"] = $_POST["denunciaserv_p142_4_intel_H"];
    $dato["denunciaserv_p142_4_intel_T"] = $_POST["denunciaserv_p142_4_intel_T"];
    $dato["denunciaserv_p142_4_reac_M"] = $_POST["denunciaserv_p142_4_reac_M"];
    $dato["denunciaserv_p142_4_reac_H"] = $_POST["denunciaserv_p142_4_reac_H"];
    $dato["denunciaserv_p142_4_reac_T"] = $_POST["denunciaserv_p142_4_reac_T"];
    $dato["denunciaserv_p142_4_proc_M"] = $_POST["denunciaserv_p142_4_proc_M"];
    $dato["denunciaserv_p142_4_proc_H"] = $_POST["denunciaserv_p142_4_proc_H"];
    $dato["denunciaserv_p142_4_proc_T"] = $_POST["denunciaserv_p142_4_proc_T"];
    $dato["denunciaserv_p142_4_seg_M"] = $_POST["denunciaserv_p142_4_seg_M"];
    $dato["denunciaserv_p142_4_seg_H"] = $_POST["denunciaserv_p142_4_seg_H"];
    $dato["denunciaserv_p142_4_seg_T"] = $_POST["denunciaserv_p142_4_seg_T"];
    $dato["denunciaserv_p142_4_prev_M"] = $_POST["denunciaserv_p142_4_prev_M"];
    $dato["denunciaserv_p142_4_prev_H"] = $_POST["denunciaserv_p142_4_prev_H"];
    $dato["denunciaserv_p142_4_prev_T"] = $_POST["denunciaserv_p142_4_prev_T"];
    $dato["denunciaserv_p142_4_pri_M"] = $_POST["denunciaserv_p142_4_pri_M"];
    $dato["denunciaserv_p142_4_pri_H"] = $_POST["denunciaserv_p142_4_pri_H"];
    $dato["denunciaserv_p142_4_pri_T"] = $_POST["denunciaserv_p142_4_pri_T"];
    $dato["denunciaserv_p142_4_otroscual"] = $_POST["denunciaserv_p142_4_otroscual"];
    $dato["denunciaserv_p142_4_otros_M"] = $_POST["denunciaserv_p142_4_otros_M"];
    $dato["denunciaserv_p142_4_otros_H"] = $_POST["denunciaserv_p142_4_otros_H"];
    $dato["denunciaserv_p142_4_otros_T"] = $_POST["denunciaserv_p142_4_otros_T"];








    $dato["denuncias_p15_numtot"] = $_POST["denuncias_p15_numtot"];

    $dato["denuncias_p15_1_homi"] = $_POST["denuncias_p15_1_homi"];
    $dato["denuncias_p15_1_femi"] = $_POST["denuncias_p15_1_femi"];
    $dato["denuncias_p15_1_les"] = $_POST["denuncias_p15_1_les"];
    $dato["denuncias_p15_1_viofam"] = $_POST["denuncias_p15_1_viofam"];
    $dato["denuncias_p15_1_abusex"] = $_POST["denuncias_p15_1_abusex"];
    $dato["denuncias_p15_1_hossex"] = $_POST["denuncias_p15_1_hossex"];
    $dato["denuncias_p15_1_viol"] = $_POST["denuncias_p15_1_viol"];
    $dato["denuncias_p15_1_tratper"] = $_POST["denuncias_p15_1_tratper"];
    $dato["denuncias_p15_1_cormen"] = $_POST["denuncias_p15_1_cormen"];
    $dato["denuncias_p15_1_trafmen"] = $_POST["denuncias_p15_1_trafmen"];

    $dato["denuncias_p15_2_mecnopre"] = $_POST["denuncias_p15_2_mecnopre"];

    $dato["denuncias_p15_3_pagint"] = $_POST["denuncias_p15_3_pagint"];
    $dato["denuncias_p15_3_tel"] = $_POST["denuncias_p15_3_tel"];
    $dato["denuncias_p15_3_app"] = $_POST["denuncias_p15_3_app"];
    $dato["necesidades_p15_3_sms"] = $_POST["necesidades_p15_3_sms"];
    $dato["necesidades_p15_3_otros"] = $_POST["necesidades_p15_3_otros"];
    $dato["necesidades_p15_3_cuales"] = $_POST["necesidades_p15_3_cuales"];


    $dato["denuncias_p15_4_den"] = $_POST["denuncias_p15_4_den"];

    $dato["denunciaserv_p16_totdet_M"] = $_POST["denunciaserv_p16_totdet_M"];
    $dato["denunciaserv_p16_totdet_H"] = $_POST["denunciaserv_p16_totdet_H"];
    $dato["denunciaserv_p16_totdet_T"] = $_POST["denunciaserv_p16_totdet_T"];

    $dato["denunciaserv_p16_totdet_meno18M"] = $_POST["denunciaserv_p16_totdet_meno18M"];
    $dato["denunciaserv_p16_totdet_meno18H"] = $_POST["denunciaserv_p16_totdet_meno18H"];
    $dato["denunciaserv_p16_totdet_meno18T"] = $_POST["denunciaserv_p16_totdet_meno18T"];
    $dato["denunciaserv_p16_totdet_TM"] = $_POST["denunciaserv_p16_totdet_TM"];
    $dato["denunciaserv_p16_totdet_TH"] = $_POST["denunciaserv_p16_totdet_TH"];
    $dato["denunciaserv_p16_totdet_TT"] = $_POST["denunciaserv_p16_totdet_TT"];


    $dato["detenciones_p_16_1_detot"] = $_POST["detenciones_p_16_1_detot"];
    $dato["detenciones_p_16_1_defla"] = $_POST["detenciones_p_16_1_defla"];
    $dato["detenciones_p_16_1_decasurg"] = $_POST["detenciones_p_16_1_decasurg"];

    $dato["victimas_p17_bprac"] = $_POST["victimas_p17_bprac"];
    $dato["victimas_p17_1_cuales"] = $_POST["victimas_p17_1_cuales"];


    $actualizar = ModeloPolicias::mdlEditarFPoliciaTab7("policias",  $dato);


    echo $actualizar;
  }else{
    //INSERTA
    $dato["uuid"] = $_POST["uuid"];

    $dato["denunciaserv_p14_den"] = $_POST["denunciaserv_p14_den"];
    $dato["denunciaserv_p14_den_cual"] = $_POST["denunciaserv_p14_den_cual"];

    $dato["denunciaserv_p14_1_orginv"] = $_POST["denunciaserv_p14_1_orginv"];

    $dato["denunciaserv_p14_2_quej"] = $_POST["denunciaserv_p14_2_quej"];

    $dato["denunciaserv_p14_3_inv_M"] = $_POST["denunciaserv_p14_3_inv_M"];
    $dato["denunciaserv_p14_3_inv_H"] = $_POST["denunciaserv_p14_3_inv_H"];
    $dato["denunciaserv_p14_3_inv_T"] = $_POST["denunciaserv_p14_3_inv_T"];

    $dato["denunciaserv_p14_3_int_M"] = $_POST["denunciaserv_p14_3_int_M"];
    $dato["denunciaserv_p14_3_int_H"] = $_POST["denunciaserv_p14_3_int_H"];
    $dato["denunciaserv_p14_3_int_T"] = $_POST["denunciaserv_p14_3_int_T"];

    $dato["denunciaserv_p14_3_reac_M"] = $_POST["denunciaserv_p14_3_reac_M"];
    $dato["denunciaserv_p14_3_reac_H"] = $_POST["denunciaserv_p14_3_reac_H"];
    $dato["denunciaserv_p14_3_reac_T"] = $_POST["denunciaserv_p14_3_reac_T"];

    $dato["denunciaserv_p14_3_proc_M"] = $_POST["denunciaserv_p14_3_proc_M"];
    $dato["denunciaserv_p14_3_proc_H"] = $_POST["denunciaserv_p14_3_proc_H"];
    $dato["denunciaserv_p14_3_proc_T"] = $_POST["denunciaserv_p14_3_proc_T"];

    $dato["denunciaserv_p14_3_seg_M"] = $_POST["denunciaserv_p14_3_seg_M"];
    $dato["denunciaserv_p14_3_seg_H"] = $_POST["denunciaserv_p14_3_seg_H"];
    $dato["denunciaserv_p14_3_seg_T"] = $_POST["denunciaserv_p14_3_seg_T"];

    $dato["denunciaserv_p14_3_prev_M"] = $_POST["denunciaserv_p14_3_prev_M"];
    $dato["denunciaserv_p14_3_prev_H"] = $_POST["denunciaserv_p14_3_prev_H"];
    $dato["denunciaserv_p14_3_prev_T"] = $_POST["denunciaserv_p14_3_prev_T"];

    $dato["denunciaserv_p14_3_pri_M"] = $_POST["denunciaserv_p14_3_pri_M"];
    $dato["denunciaserv_p14_3_pri_H"] = $_POST["denunciaserv_p14_3_pri_H"];
    $dato["denunciaserv_p14_3_pri_T"] = $_POST["denunciaserv_p14_3_pri_T"];

    $dato["denunciaserv_p14_3_otros"] = $_POST["denunciaserv_p14_3_otros"];
    $dato["denunciaserv_p14_3_otros_M"] = $_POST["denunciaserv_p14_3_otros_M"];
    $dato["denunciaserv_p14_3_otros_H"] = $_POST["denunciaserv_p14_3_otros_H"];
    $dato["denunciaserv_p14_3_otros_T"] = $_POST["denunciaserv_p14_3_otros_T"];

    $dato["denunciaserv_p14_4_inv_M"] = $_POST["denunciaserv_p14_4_inv_M"];
    $dato["denunciaserv_p14_4_inv_H"] = $_POST["denunciaserv_p14_4_inv_H"];
    $dato["denunciaserv_p14_4_inv_T"] = $_POST["denunciaserv_p14_4_inv_T"];

    $dato["denunciaserv_p14_4_intel_M"] = $_POST["denunciaserv_p14_4_intel_M"];
    $dato["denunciaserv_p14_4_intel_H"] = $_POST["denunciaserv_p14_4_intel_H"];
    $dato["denunciaserv_p14_4_intel_T"] = $_POST["denunciaserv_p14_4_intel_T"];

    $dato["denunciaserv_p14_4_reac_M"] = $_POST["denunciaserv_p14_4_reac_M"];
    $dato["denunciaserv_p14_4_reac_H"] = $_POST["denunciaserv_p14_4_reac_H"];
    $dato["denunciaserv_p14_4_reac_T"] = $_POST["denunciaserv_p14_4_reac_T"];

    $dato["denunciaserv_p14_4_proc_M"] = $_POST["denunciaserv_p14_4_proc_M"];
    $dato["denunciaserv_p14_4_proc_H"] = $_POST["denunciaserv_p14_4_proc_H"];
    $dato["denunciaserv_p14_4_proc_T"] = $_POST["denunciaserv_p14_4_proc_T"];

    $dato["denunciaserv_p14_4_seg_M"] = $_POST["denunciaserv_p14_4_seg_M"];
    $dato["denunciaserv_p14_4_seg_H"] = $_POST["denunciaserv_p14_4_seg_H"];
    $dato["denunciaserv_p14_4_seg_T"] = $_POST["denunciaserv_p14_4_seg_T"];

    $dato["denunciaserv_p14_4_prev_M"] = $_POST["denunciaserv_p14_4_prev_M"];
    $dato["denunciaserv_p14_4_prev_H"] = $_POST["denunciaserv_p14_4_prev_H"];
    $dato["denunciaserv_p14_4_prev_T"] = $_POST["denunciaserv_p14_4_prev_T"];

    $dato["denunciaserv_p14_4_pri_M"] = $_POST["denunciaserv_p14_4_pri_M"];
    $dato["denunciaserv_p14_4_pri_H"] = $_POST["denunciaserv_p14_4_pri_H"];
    $dato["denunciaserv_p14_4_pri_T"] = $_POST["denunciaserv_p14_4_pri_T"];

    $dato["denunciaserv_p14_4_otroscual"] = $_POST["denunciaserv_p14_4_otroscual"];
    $dato["denunciaserv_p14_4_otros_M"] = $_POST["denunciaserv_p14_4_otros_M"];
    $dato["denunciaserv_p14_4_otros_H"] = $_POST["denunciaserv_p14_4_otros_H"];
    $dato["denunciaserv_p14_4_otros_T"] = $_POST["denunciaserv_p14_4_otros_T"];



    $dato["denunciaserv_p142_3_reac_M"] = $_POST["denunciaserv_p142_3_reac_M"];
    $dato["denunciaserv_p142_3_reac_H"] = $_POST["denunciaserv_p142_3_reac_H"];
    $dato["denunciaserv_p142_3_reac_T"] = $_POST["denunciaserv_p142_3_reac_T"];

    $dato["denunciaserv_p142_3_proc_M"] = $_POST["denunciaserv_p142_3_proc_M"];
    $dato["denunciaserv_p142_3_proc_H"] = $_POST["denunciaserv_p142_3_proc_H"];
    $dato["denunciaserv_p142_3_proc_T"] = $_POST["denunciaserv_p142_3_proc_T"];

    $dato["denunciaserv_p142_3_seg_M"] = $_POST["denunciaserv_p142_3_seg_M"];
    $dato["denunciaserv_p142_3_seg_H"] = $_POST["denunciaserv_p142_3_seg_H"];
    $dato["denunciaserv_p142_3_seg_T"] = $_POST["denunciaserv_p142_3_seg_T"];

    $dato["denunciaserv_p142_3_prev_M"] = $_POST["denunciaserv_p142_3_prev_M"];
    $dato["denunciaserv_p142_3_prev_H"] = $_POST["denunciaserv_p142_3_prev_H"];
    $dato["denunciaserv_p142_3_prev_T"] = $_POST["denunciaserv_p142_3_prev_T"];

    $dato["denunciaserv_p142_3_pri_M"] = $_POST["denunciaserv_p142_3_pri_M"];
    $dato["denunciaserv_p142_3_pri_H"] = $_POST["denunciaserv_p142_3_pri_H"];
    $dato["denunciaserv_p142_3_pri_T"] = $_POST["denunciaserv_p142_3_pri_T"];

    $dato["denunciaserv_p142_3_otros"] = $_POST["denunciaserv_p142_3_otros"];
    $dato["denunciaserv_p142_3_otros_M"] = $_POST["denunciaserv_p142_3_otros_M"];
    $dato["denunciaserv_p142_3_otros_H"] = $_POST["denunciaserv_p142_3_otros_H"];
    $dato["denunciaserv_p142_3_otros_T"] = $_POST["denunciaserv_p142_3_otros_T"];

    $dato["denunciaserv_p142_4_inv_M"] = $_POST["denunciaserv_p142_4_inv_M"];
    $dato["denunciaserv_p142_4_inv_H"] = $_POST["denunciaserv_p142_4_inv_H"];
    $dato["denunciaserv_p142_4_inv_T"] = $_POST["denunciaserv_p142_4_inv_T"];

    $dato["denunciaserv_p142_4_intel_M"] = $_POST["denunciaserv_p142_4_intel_M"];
    $dato["denunciaserv_p142_4_intel_H"] = $_POST["denunciaserv_p142_4_intel_H"];
    $dato["denunciaserv_p142_4_intel_T"] = $_POST["denunciaserv_p142_4_intel_T"];

    $dato["denunciaserv_p142_4_reac_M"] = $_POST["denunciaserv_p142_4_reac_M"];
    $dato["denunciaserv_p142_4_reac_H"] = $_POST["denunciaserv_p142_4_reac_H"];
    $dato["denunciaserv_p142_4_reac_T"] = $_POST["denunciaserv_p142_4_reac_T"];

    $dato["denunciaserv_p142_4_proc_M"] = $_POST["denunciaserv_p142_4_proc_M"];
    $dato["denunciaserv_p142_4_proc_H"] = $_POST["denunciaserv_p142_4_proc_H"];
    $dato["denunciaserv_p142_4_proc_T"] = $_POST["denunciaserv_p142_4_proc_T"];

    $dato["denunciaserv_p142_4_seg_M"] = $_POST["denunciaserv_p142_4_seg_M"];
    $dato["denunciaserv_p142_4_seg_H"] = $_POST["denunciaserv_p142_4_seg_H"];
    $dato["denunciaserv_p142_4_seg_T"] = $_POST["denunciaserv_p142_4_seg_T"];

    $dato["denunciaserv_p142_4_prev_M"] = $_POST["denunciaserv_p142_4_prev_M"];
    $dato["denunciaserv_p142_4_prev_H"] = $_POST["denunciaserv_p142_4_prev_H"];
    $dato["denunciaserv_p142_4_prev_T"] = $_POST["denunciaserv_p142_4_prev_T"];

    $dato["denunciaserv_p142_4_pri_M"] = $_POST["denunciaserv_p142_4_pri_M"];
    $dato["denunciaserv_p142_4_pri_H"] = $_POST["denunciaserv_p142_4_pri_H"];
    $dato["denunciaserv_p142_4_pri_T"] = $_POST["denunciaserv_p142_4_pri_T"];

    $dato["denunciaserv_p142_4_otroscual"] = $_POST["denunciaserv_p142_4_otroscual"];
    $dato["denunciaserv_p142_4_otros_M"] = $_POST["denunciaserv_p142_4_otros_M"];
    $dato["denunciaserv_p142_4_otros_H"] = $_POST["denunciaserv_p142_4_otros_H"];
    $dato["denunciaserv_p142_4_otros_T"] = $_POST["denunciaserv_p142_4_otros_T"];



    $dato["denuncias_p15_numtot"] = $_POST["denuncias_p15_numtot"];

    $dato["denuncias_p15_1_homi"] = $_POST["denuncias_p15_1_homi"];
    $dato["denuncias_p15_1_femi"] = $_POST["denuncias_p15_1_femi"];
    $dato["denuncias_p15_1_les"] = $_POST["denuncias_p15_1_les"];
    $dato["denuncias_p15_1_viofam"] = $_POST["denuncias_p15_1_viofam"];
    $dato["denuncias_p15_1_abusex"] = $_POST["denuncias_p15_1_abusex"];
    $dato["denuncias_p15_1_hossex"] = $_POST["denuncias_p15_1_hossex"];
    $dato["denuncias_p15_1_viol"] = $_POST["denuncias_p15_1_viol"];
    $dato["denuncias_p15_1_tratper"] = $_POST["denuncias_p15_1_tratper"];
    $dato["denuncias_p15_1_cormen"] = $_POST["denuncias_p15_1_cormen"];
    $dato["denuncias_p15_1_trafmen"] = $_POST["denuncias_p15_1_trafmen"];

    $dato["denuncias_p15_2_mecnopre"] = $_POST["denuncias_p15_2_mecnopre"];

    $dato["denuncias_p15_3_pagint"] = $_POST["denuncias_p15_3_pagint"];
    $dato["denuncias_p15_3_tel"] = $_POST["denuncias_p15_3_tel"];
    $dato["denuncias_p15_3_app"] = $_POST["denuncias_p15_3_app"];
    $dato["necesidades_p15_3_sms"] = $_POST["necesidades_p15_3_sms"];
    $dato["necesidades_p15_3_otros"] = $_POST["necesidades_p15_3_otros"];
    $dato["necesidades_p15_3_cuales"] = $_POST["necesidades_p15_3_cuales"];


    $dato["denuncias_p15_4_den"] = $_POST["denuncias_p15_4_den"];

    $dato["denunciaserv_p16_totdet_M"] = $_POST["denunciaserv_p16_totdet_M"];
    $dato["denunciaserv_p16_totdet_H"] = $_POST["denunciaserv_p16_totdet_H"];
    $dato["denunciaserv_p16_totdet_T"] = $_POST["denunciaserv_p16_totdet_T"];

    $dato["denunciaserv_p16_totdet_meno18M"] = $_POST["denunciaserv_p16_totdet_meno18M"];
    $dato["denunciaserv_p16_totdet_meno18H"] = $_POST["denunciaserv_p16_totdet_meno18H"];
    $dato["denunciaserv_p16_totdet_meno18T"] = $_POST["denunciaserv_p16_totdet_meno18T"];
    $dato["denunciaserv_p16_totdet_TM"] = $_POST["denunciaserv_p16_totdet_TM"];
    $dato["denunciaserv_p16_totdet_TH"] = $_POST["denunciaserv_p16_totdet_TH"];
    $dato["denunciaserv_p16_totdet_TT"] = $_POST["denunciaserv_p16_totdet_TT"];

    $dato["detenciones_p_16_1_detot"] = $_POST["detenciones_p_16_1_detot"];
    $dato["detenciones_p_16_1_defla"] = $_POST["detenciones_p_16_1_defla"];
    $dato["detenciones_p_16_1_decasurg"] = $_POST["detenciones_p_16_1_decasurg"];

    $dato["victimas_p17_bprac"] = $_POST["victimas_p17_bprac"];
    $dato["victimas_p17_1_cuales"] = $_POST["victimas_p17_1_cuales"];

    if($guardar=="ok"){

      $datosGuardados =  ModeloPolicias::mdlMostrarPolicias("policias","uuid",  $dato["uuid"]);
      echo  $datosGuardados[0]["id"];
    }else{
      echo $guardar;
    }


  }

}



if (isset($_POST["tab8"])){

  require_once "../modelos/policias1.modelo.php";

  $idFormulario = $_POST["idFormulario"];
    if($idFormulario > 0){
    $dato["idFormulario"] =$idFormulario;
    $dato["uuid"] = $_POST["uuid"];

    $dato["justiicia_p18_mesajus"] = $_POST["justiicia_p18_mesajus"];

    $dato["necesidades_p18_1_segobedo"] = $_POST["necesidades_p18_1_segobedo"];
    $dato["necesidades_p18_1_uasisjus"] = $_POST["necesidades_p18_1_uasisjus"];
    $dato["necesidades_p18_1_ptrisup"] = $_POST["necesidades_p18_1_ptrisup"];
    $dato["necesidades_p18_1_fisgral"] = $_POST["necesidades_p18_1_fisgral"];
    $dato["necesidades_p18_1_secsegpu"] = $_POST["necesidades_p18_1_secsegpu"];
    $dato["necesidades_p18_1_tinst"] = $_POST["necesidades_p18_1_tinst"];
    $dato["necesidades_p18_1_subsispen"] = $_POST["necesidades_p18_1_subsispen"];
    $dato["necesidades_p18_1_tautsup"] = $_POST["necesidades_p18_1_tautsup"];
    $dato["necesidades_p18_1_tinsestm"] = $_POST["necesidades_p18_1_tinsestm"];
    $dato["necesidades_p18_1_dif"] = $_POST["necesidades_p18_1_dif"];
    $dato["necesidades_p18_1_sipinna"] = $_POST["necesidades_p18_1_sipinna"];
    $dato["necesidades_p18_1_secsal"] = $_POST["necesidades_p18_1_secsal"];
    $dato["necesidades_p18_1_comejavic"] = $_POST["necesidades_p18_1_comejavic"];
    $dato["necesidades_p18_1_cenuatnvic"] = $_POST["necesidades_p18_1_cenuatnvic"];
    $dato["necesidades_p18_1_tcenjusm"] = $_POST["necesidades_p18_1_tcenjusm"];
    $dato["necesidades_p18_1_tfisespm"] = $_POST["necesidades_p18_1_tfisespm"];
    $dato["necesidades_p18_1_dcenpen"] = $_POST["necesidades_p18_1_dcenpen"];
    $dato["necesidades_p18_1_dcenpenadol"] = $_POST["necesidades_p18_1_dcenpenadol"];
    $dato["necesidades_p18_1_torgmec"] = $_POST["necesidades_p18_1_torgmec"];
    $dato["necesidades_p18_1_tsevper"] = $_POST["necesidades_p18_1_tsevper"];
    $dato["necesidades_p18_1_otros"] = $_POST["necesidades_p18_1_otros"];
    $dato["necesidades_p18_1_cual"] = $_POST["necesidades_p18_1_cual"];

    $dato["justiicia_p18_2_semanal"] = $_POST["justiicia_p18_2_semanal"];
    $dato["justiicia_p18_2_quincenal"] = $_POST["justiicia_p18_2_quincenal"];
    $dato["justiicia_p18_2_mensual"] = $_POST["justiicia_p18_2_mensual"];
    $dato["justiicia_p18_2_bimestral"] = $_POST["justiicia_p18_2_bimestral"];
    $dato["justiicia_p18_2_trimestral"] = $_POST["justiicia_p18_2_trimestral"];
    $dato["justiicia_p18_2_semestral"] = $_POST["justiicia_p18_2_semestral"];
    $dato["justiicia_p18_2_anual"] = $_POST["justiicia_p18_2_anual"];

    $dato["justiicia_p18_2_abierta"] = $_POST["justiicia_p18_2_abierta"];



    $dato["justiicia_p18_3_buenpract"] = $_POST["justiicia_p18_3_buenpract"];

    $dato["impacto_p19_medprev"] = $_POST["impacto_p19_medprev"];

    $dato["impacto_p19_1_medse"] = $_POST["impacto_p19_1_medse"];

    $dato["impacto_p19_2_incmed"] = $_POST["impacto_p19_2_incmed"];

    $dato["impacto_p19_3_descmed"] = $_POST["impacto_p19_3_descmed"];

        $dato["comfin"] = $_POST["comfin"];



    $dato["terapeutica_p20_progjus"] = $_POST["terapeutica_p20_progjus"];

    $dato["terapeutica_p20_1_may18_M"] = $_POST["terapeutica_p20_1_may18_M"];
    $dato["terapeutica_p20_1_may18_H"] = $_POST["terapeutica_p20_1_may18_H"];
    $dato["terapeutica_p20_1_may18_T"] = $_POST["terapeutica_p20_1_may18_T"];

    $dato["terapeutica_p20_1_men18_M"] = $_POST["terapeutica_p20_1_men18_M"];
    $dato["terapeutica_p20_1_men18_H"] = $_POST["terapeutica_p20_1_men18_H"];
    $dato["terapeutica_p20_1_men18_T"] = $_POST["terapeutica_p20_1_men18_T"];

    $dato["terapeutica_p20_1_total_M"] = $_POST["terapeutica_p20_1_total_M"];
    $dato["terapeutica_p20_1_total_H"] = $_POST["terapeutica_p20_1_total_H"];
    $dato["terapeutica_p20_1_total_T"] = $_POST["terapeutica_p20_1_total_T"];

    $dato["terapeutica_p20_2_can_M"] = $_POST["terapeutica_p20_2_can_M"];
    $dato["terapeutica_p20_2_can_H"] = $_POST["terapeutica_p20_2_can_H"];
    $dato["terapeutica_p20_2_can_T"] = $_POST["terapeutica_p20_2_can_T"];

    $dato["terapeutica_p20_2_men_M"] = $_POST["terapeutica_p20_2_men_M"];
    $dato["terapeutica_p20_2_men_H"] = $_POST["terapeutica_p20_2_men_H"];
    $dato["terapeutica_p20_2_men_T"] = $_POST["terapeutica_p20_2_men_T"];

    $dato["terapeutica_p20_2_fen_M"] = $_POST["terapeutica_p20_2_fen_M"];
    $dato["terapeutica_p20_2_fen_H"] = $_POST["terapeutica_p20_2_fen_H"];
    $dato["terapeutica_p20_2_fen_T"] = $_POST["terapeutica_p20_2_fen_T"];

    $dato["terapeutica_p20_2_coc_M"] = $_POST["terapeutica_p20_2_coc_M"];
    $dato["terapeutica_p20_2_coc_H"] = $_POST["terapeutica_p20_2_coc_H"];
    $dato["terapeutica_p20_2_coc_T"] = $_POST["terapeutica_p20_2_coc_T"];

    $dato["terapeutica_p20_2_her_M"] = $_POST["terapeutica_p20_2_her_M"];
    $dato["terapeutica_p20_2_her_H"] = $_POST["terapeutica_p20_2_her_H"];
    $dato["terapeutica_p20_2_her_T"] = $_POST["terapeutica_p20_2_her_T"];

    $dato["terapeutica_p20_2_alc_M"] = $_POST["terapeutica_p20_2_alc_M"];
    $dato["terapeutica_p20_2_alc_H"] = $_POST["terapeutica_p20_2_alc_H"];
    $dato["terapeutica_p20_2_alc_T"] = $_POST["terapeutica_p20_2_alc_T"];

    $dato["terapeutica_p20_2_otroascual"] = $_POST["terapeutica_p20_2_otroascual"];
    $dato["terapeutica_p20_2_otras_M"] = $_POST["terapeutica_p20_2_otras_M"];
    $dato["terapeutica_p20_2_otras_H"] = $_POST["terapeutica_p20_2_otras_H"];
    $dato["terapeutica_p20_2_otras_T"] = $_POST["terapeutica_p20_2_otras_T"];

    $actualizar = ModeloPolicias::mdlEditarFPoliciaTab8("policias",  $dato);


    echo $actualizar;
  }else{
    //INSERTA
    $dato["uuid"] = $_POST["uuid"];

    $dato["justiicia_p18_mesajus"] = $_POST["justiicia_p18_mesajus"];

    $dato["necesidades_p18_1_segobedo"] = $_POST["necesidades_p18_1_segobedo"];
    $dato["necesidades_p18_1_uasisjus"] = $_POST["necesidades_p18_1_uasisjus"];
    $dato["necesidades_p18_1_ptrisup"] = $_POST["necesidades_p18_1_ptrisup"];
    $dato["necesidades_p18_1_fisgral"] = $_POST["necesidades_p18_1_fisgral"];
    $dato["necesidades_p18_1_secsegpu"] = $_POST["necesidades_p18_1_secsegpu"];
    $dato["necesidades_p18_1_tinst"] = $_POST["necesidades_p18_1_tinst"];
    $dato["necesidades_p18_1_subsispen"] = $_POST["necesidades_p18_1_subsispen"];
    $dato["necesidades_p18_1_tautsup"] = $_POST["necesidades_p18_1_tautsup"];
    $dato["necesidades_p18_1_tinsestm"] = $_POST["necesidades_p18_1_tinsestm"];
    $dato["necesidades_p18_1_dif"] = $_POST["necesidades_p18_1_dif"];
    $dato["necesidades_p18_1_sipinna"] = $_POST["necesidades_p18_1_sipinna"];
    $dato["necesidades_p18_1_secsal"] = $_POST["necesidades_p18_1_secsal"];
    $dato["necesidades_p18_1_comejavic"] = $_POST["necesidades_p18_1_comejavic"];
    $dato["necesidades_p18_1_cenuatnvic"] = $_POST["necesidades_p18_1_cenuatnvic"];
    $dato["necesidades_p18_1_tcenjusm"] = $_POST["necesidades_p18_1_tcenjusm"];
    $dato["necesidades_p18_1_tfisespm"] = $_POST["necesidades_p18_1_tfisespm"];
    $dato["necesidades_p18_1_dcenpen"] = $_POST["necesidades_p18_1_dcenpen"];
    $dato["necesidades_p18_1_dcenpenadol"] = $_POST["necesidades_p18_1_dcenpenadol"];
    $dato["necesidades_p18_1_torgmec"] = $_POST["necesidades_p18_1_torgmec"];
    $dato["necesidades_p18_1_tsevper"] = $_POST["necesidades_p18_1_tsevper"];
    $dato["necesidades_p18_1_otros"] = $_POST["necesidades_p18_1_otros"];
    $dato["necesidades_p18_1_cual"] = $_POST["necesidades_p18_1_cual"];

    $dato["justiicia_p18_2_semanal"] = $_POST["justiicia_p18_2_semanal"];
    $dato["justiicia_p18_2_quincenal"] = $_POST["justiicia_p18_2_quincenal"];
    $dato["justiicia_p18_2_mensual"] = $_POST["justiicia_p18_2_mensual"];
    $dato["justiicia_p18_2_bimestral"] = $_POST["justiicia_p18_2_bimestral"];
    $dato["justiicia_p18_2_trimestral"] = $_POST["justiicia_p18_2_trimestral"];
    $dato["justiicia_p18_2_semestral"] = $_POST["justiicia_p18_2_semestral"];
    $dato["justiicia_p18_2_anual"] = $_POST["justiicia_p18_2_anual"];

    $dato["justiicia_p18_2_abierta"] = $_POST["justiicia_p18_2_abierta"];


    $dato["justiicia_p18_3_buenpract"] = $_POST["justiicia_p18_3_buenpract"];

    $dato["impacto_p19_medprev"] = $_POST["impacto_p19_medprev"];

    $dato["impacto_p19_1_medse"] = $_POST["impacto_p19_1_medse"];

    $dato["impacto_p19_2_incmed"] = $_POST["impacto_p19_2_incmed"];

    $dato["impacto_p19_3_descmed"] = $_POST["impacto_p19_3_descmed"];

      $dato["comfin"] = $_POST["comfin"];

    $dato["terapeutica_p20_progjus"] = $_POST["terapeutica_p20_progjus"];

    $dato["terapeutica_p20_1_may18_M"] = $_POST["terapeutica_p20_1_may18_M"];
    $dato["terapeutica_p20_1_may18_H"] = $_POST["terapeutica_p20_1_may18_H"];
    $dato["terapeutica_p20_1_may18_T"] = $_POST["terapeutica_p20_1_may18_T"];

    $dato["terapeutica_p20_1_men18_M"] = $_POST["terapeutica_p20_1_men18_M"];
    $dato["terapeutica_p20_1_men18_H"] = $_POST["terapeutica_p20_1_men18_H"];
    $dato["terapeutica_p20_1_men18_T"] = $_POST["terapeutica_p20_1_men18_T"];

    $dato["terapeutica_p20_1_total_M"] = $_POST["terapeutica_p20_1_total_M"];
    $dato["terapeutica_p20_1_total_H"] = $_POST["terapeutica_p20_1_total_H"];
    $dato["terapeutica_p20_1_total_T"] = $_POST["terapeutica_p20_1_total_T"];

    $dato["terapeutica_p20_2_can_M"] = $_POST["terapeutica_p20_2_can_M"];
    $dato["terapeutica_p20_2_can_H"] = $_POST["terapeutica_p20_2_can_H"];
    $dato["terapeutica_p20_2_can_T"] = $_POST["terapeutica_p20_2_can_T"];

    $dato["terapeutica_p20_2_men_M"] = $_POST["terapeutica_p20_2_men_M"];
    $dato["terapeutica_p20_2_men_H"] = $_POST["terapeutica_p20_2_men_H"];
    $dato["terapeutica_p20_2_men_T"] = $_POST["terapeutica_p20_2_men_T"];

    $dato["terapeutica_p20_2_fen_M"] = $_POST["terapeutica_p20_2_fen_M"];
    $dato["terapeutica_p20_2_fen_H"] = $_POST["terapeutica_p20_2_fen_H"];
    $dato["terapeutica_p20_2_fen_T"] = $_POST["terapeutica_p20_2_fen_T"];

    $dato["terapeutica_p20_2_coc_M"] = $_POST["terapeutica_p20_2_coc_M"];
    $dato["terapeutica_p20_2_coc_H"] = $_POST["terapeutica_p20_2_coc_H"];
    $dato["terapeutica_p20_2_coc_T"] = $_POST["terapeutica_p20_2_coc_T"];

    $dato["terapeutica_p20_2_her_M"] = $_POST["terapeutica_p20_2_her_M"];
    $dato["terapeutica_p20_2_her_H"] = $_POST["terapeutica_p20_2_her_H"];
    $dato["terapeutica_p20_2_her_T"] = $_POST["terapeutica_p20_2_her_T"];

    $dato["terapeutica_p20_2_alc_M"] = $_POST["terapeutica_p20_2_alc_M"];
    $dato["terapeutica_p20_2_alc_H"] = $_POST["terapeutica_p20_2_alc_H"];
    $dato["terapeutica_p20_2_alc_T"] = $_POST["terapeutica_p20_2_alc_T"];

    $dato["terapeutica_p20_2_otroascual"] = $_POST["terapeutica_p20_2_otroascual"];
    $dato["terapeutica_p20_2_otras_M"] = $_POST["terapeutica_p20_2_otras_M"];
    $dato["terapeutica_p20_2_otras_H"] = $_POST["terapeutica_p20_2_otras_H"];
    $dato["terapeutica_p20_2_otras_T"] = $_POST["terapeutica_p20_2_otras_T"];

    if($guardar=="ok"){

      $datosGuardados =  ModeloPolicias::mdlMostrarPolicias("policias","uuid",  $dato["uuid"]);
      echo  $datosGuardados[0]["id"];
    }else{
      echo $guardar;
    }


  }

}



if(isset($_POST["FINALIZARFORMULARIO"])){

  include "../modelos/policias1.modelo.php";

  $dato = $_POST["idFormulario"];
  $actualizar = ModeloPolicias::mdlEditarFPoliciaTab9("policias",  $dato);


  echo $actualizar;
  //hash_update

}
