<?php

session_start();
if (isset($_POST["tab1"])){
  require_once "../modelos/jueces1.modelo.php";

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




    $actualizar = ModeloJueces::mdlEditarFJuecesTab1("jueces",  $dato);


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





    $guardar = ModeloJueces::mdlIngresarFJueces("jueces",  $dato);

    if($guardar=="ok"){

      $datosGuardados =  ModeloJueces::mdlMostrarJueces("jueces","uuid",  $dato["uuid"]);
      echo  $datosGuardados[0]["id"];
    }else{
      echo $guardar;
    }


  }

}


if (isset($_POST["tab2"])){

  require_once "../modelos/jueces1.modelo.php";

  $idFormulario = $_POST["idFormulario"];
    if($idFormulario > 0){
    $dato["idFormulario"] =$idFormulario;
    $dato["uuid"] = $_POST["uuid"];

    // INFRAESTRUCTURA
    $dato["infraestructura_j1_tot"] = $_POST["infraestructura_j1_tot"];

    $dato["infraestructura_j1_1_totjuz"] = $_POST["infraestructura_j1_1_totjuz"];

    $dato["infraestructura_j1_2_totjuz"] = $_POST["infraestructura_j1_2_totjuz"];
    $dato["infraestructura_j1_2_matpenacu"] = $_POST["infraestructura_j1_2_matpenacu"];
    $dato["infraestructura_j1_2_matpenfun"] = $_POST["infraestructura_j1_2_matpenfun"];

    // PERSONAL
    $dato["personal_j2_perlab_M"] = $_POST["personal_j2_perlab_M"];
    $dato["personal_j2_perlab_H"] = $_POST["personal_j2_perlab_H"];
    $dato["personal_j2_perlab_T"] = $_POST["personal_j2_perlab_T"];

    $dato["personal_j2_1_mag_M"] = $_POST["personal_j2_1_mag_M"];
    $dato["personal_j2_1_mag_H"] = $_POST["personal_j2_1_mag_H"];
    $dato["personal_j2_1_mag_T"] = $_POST["personal_j2_1_mag_T"];

    $dato["personal_j2_1_jec_M"] = $_POST["personal_j2_1_jec_M"];
    $dato["personal_j2_1_jec_H"] = $_POST["personal_j2_1_jec_H"];
    $dato["personal_j2_1_jec_T"] = $_POST["personal_j2_1_jec_T"];

    $dato["personal_j2_1_sec_M"] = $_POST["personal_j2_1_sec_M"];
    $dato["personal_j2_1_sec_H"] = $_POST["personal_j2_1_sec_H"];
    $dato["personal_j2_1_sec_T"] = $_POST["personal_j2_1_sec_T"];

    $dato["personal_j2_1_act_M"] = $_POST["personal_j2_1_act_M"];
    $dato["personal_j2_1_act_H"] = $_POST["personal_j2_1_act_H"];
    $dato["personal_j2_1_act_T"] = $_POST["personal_j2_1_act_T"];

    $dato["personal_j2_1_otrserv_M"] = $_POST["personal_j2_1_otrserv_M"];
    $dato["personal_j2_1_otrserv_H"] = $_POST["personal_j2_1_otrserv_H"];
    $dato["personal_j2_1_otrserv_T"] = $_POST["personal_j2_1_otrserv_T"];

    $dato["personal_j2_1_otros"] = $_POST["personal_j2_1_otros"];
    $dato["personal_j2_1_otros_M"] = $_POST["personal_j2_1_otros_M"];
    $dato["personal_j2_1_otros_H"] = $_POST["personal_j2_1_otros_H"];
    $dato["personal_j2_1_otros_T"] = $_POST["personal_j2_1_otros_T"];

    $dato["personal_j2_1_total_M"] = $_POST["personal_j2_1_total_M"];
    $dato["personal_j2_1_total_H"] = $_POST["personal_j2_1_total_H"];
    $dato["personal_j2_1_total_T"] = $_POST["personal_j2_1_total_T"];

    $dato["personal_j2_2_mag_M"] = $_POST["personal_j2_2_mag_M"];
    $dato["personal_j2_2_mag_H"] = $_POST["personal_j2_2_mag_H"];
    $dato["personal_j2_2_mag_T"] = $_POST["personal_j2_2_mag_T"];

    $dato["personal_j2_3_jue_M"] = $_POST["personal_j2_3_jue_M"];
    $dato["personal_j2_3_jue_H"] = $_POST["personal_j2_3_jue_H"];
    $dato["personal_j2_3_jue_T"] = $_POST["personal_j2_3_jue_T"];

    $dato["personal_j2_4_de1a5000_M"] = $_POST["personal_j2_4_de1a5000_M"];
    $dato["personal_j2_4_de1a5000_H"] = $_POST["personal_j2_4_de1a5000_H"];
    $dato["personal_j2_4_de1a5000_T"] = $_POST["personal_j2_4_de1a5000_T"];

    $dato["personal_j2_4_de5001a10000_M"] = $_POST["personal_j2_4_de5001a10000_M"];
    $dato["personal_j2_4_de5001a10000_H"] = $_POST["personal_j2_4_de5001a10000_H"];
    $dato["personal_j2_4_de5001a10000_T"] = $_POST["personal_j2_4_de5001a10000_T"];

    $dato["personal_j2_4_de10001a15000_M"] = $_POST["personal_j2_4_de10001a15000_M"];
    $dato["personal_j2_4_de10001a15000_H"] = $_POST["personal_j2_4_de10001a15000_H"];
    $dato["personal_j2_4_de10001a15000_T"] = $_POST["personal_j2_4_de10001a15000_T"];

    $dato["personal_j2_4_de15001a20000_M"] = $_POST["personal_j2_4_de15001a20000_M"];
    $dato["personal_j2_4_de15001a20000_H"] = $_POST["personal_j2_4_de15001a20000_H"];
    $dato["personal_j2_4_de15001a20000_T"] = $_POST["personal_j2_4_de15001a20000_T"];

    $dato["personal_j2_4_de20001a25000_M"] = $_POST["personal_j2_4_de20001a25000_M"];
    $dato["personal_j2_4_de20001a25000_H"] = $_POST["personal_j2_4_de20001a25000_H"];
    $dato["personal_j2_4_de20001a25000_T"] = $_POST["personal_j2_4_de20001a25000_T"];

    $dato["personal_j2_4_de25001a30000_M"] = $_POST["personal_j2_4_de25001a30000_M"];
    $dato["personal_j2_4_de25001a30000_H"] = $_POST["personal_j2_4_de25001a30000_H"];
    $dato["personal_j2_4_de25001a30000_T"] = $_POST["personal_j2_4_de25001a30000_T"];

    $dato["personal_j2_4_de30001a35000_M"] = $_POST["personal_j2_4_de30001a35000_M"];
    $dato["personal_j2_4_de30001a35000_H"] = $_POST["personal_j2_4_de30001a35000_H"];
    $dato["personal_j2_4_de30001a35000_T"] = $_POST["personal_j2_4_de30001a35000_T"];

    $dato["personal_j2_4_de35001a40000_M"] = $_POST["personal_j2_4_de35001a40000_M"];
    $dato["personal_j2_4_de35001a40000_H"] = $_POST["personal_j2_4_de35001a40000_H"];
    $dato["personal_j2_4_de35001a40000_T"] = $_POST["personal_j2_4_de35001a40000_T"];

    $dato["personal_j2_4_de40001a45000_M"] = $_POST["personal_j2_4_de40001a45000_M"];
    $dato["personal_j2_4_de40001a45000_H"] = $_POST["personal_j2_4_de40001a45000_H"];
    $dato["personal_j2_4_de40001a45000_T"] = $_POST["personal_j2_4_de40001a45000_T"];

    $dato["personal_j2_4_de45001a50000_M"] = $_POST["personal_j2_4_de45001a50000_M"];
    $dato["personal_j2_4_de45001a50000_H"] = $_POST["personal_j2_4_de45001a50000_H"];
    $dato["personal_j2_4_de45001a50000_T"] = $_POST["personal_j2_4_de45001a50000_T"];

    $dato["personal_j2_4_masde50000_M"] = $_POST["personal_j2_4_masde50000_M"];
    $dato["personal_j2_4_masde50000_H"] = $_POST["personal_j2_4_masde50000_H"];
    $dato["personal_j2_4_masde50000_T"] = $_POST["personal_j2_4_masde50000_T"];

    $dato["personal_j2_4_nosesabe"] = $_POST["personal_j2_4_nosesabe"];

    // CAPACITACIÓN Y EVALUACIÓN DE PERSONAL
    $dato["capacitacion_j3_mag_M"] = $_POST["capacitacion_j3_mag_M"];
    $dato["capacitacion_j3_mag_H"] = $_POST["capacitacion_j3_mag_H"];
    $dato["capacitacion_j3_mag_T"] = $_POST["capacitacion_j3_mag_T"];

    $dato["capacitacion_j3_jec_M"] = $_POST["capacitacion_j3_jec_M"];
    $dato["capacitacion_j3_jec_H"] = $_POST["capacitacion_j3_jec_H"];
    $dato["capacitacion_j3_jec_T"] = $_POST["capacitacion_j3_jec_T"];

    $dato["capacitacion_j3_sec_M"] = $_POST["capacitacion_j3_sec_M"];
    $dato["capacitacion_j3_sec_H"] = $_POST["capacitacion_j3_sec_H"];
    $dato["capacitacion_j3_sec_T"] = $_POST["capacitacion_j3_sec_T"];

    $dato["capacitacion_j3_act_M"] = $_POST["capacitacion_j3_act_M"];
    $dato["capacitacion_j3_act_H"] = $_POST["capacitacion_j3_act_H"];
    $dato["capacitacion_j3_act_T"] = $_POST["capacitacion_j3_act_T"];

    $dato["capacitacion_j3_otrserv_M"] = $_POST["capacitacion_j3_otrserv_M"];
    $dato["capacitacion_j3_otrserv_H"] = $_POST["capacitacion_j3_otrserv_H"];
    $dato["capacitacion_j3_otrserv_T"] = $_POST["capacitacion_j3_otrserv_T"];

    $dato["capacitacion_j3_otros"] = $_POST["capacitacion_j3_otros"];
    $dato["capacitacion_j3_otros_M"] = $_POST["capacitacion_j3_otros_M"];
    $dato["capacitacion_j3_otros_H"] = $_POST["capacitacion_j3_otros_H"];
    $dato["capacitacion_j3_otros_T"] = $_POST["capacitacion_j3_otros_T"];

    $dato["capacitacion_j3_nosesabe"] = $_POST["capacitacion_j3_nosesabe"];

    $dato["capacitacion_j3_1_sisjus_M"] = $_POST["capacitacion_j3_1_sisjus_M"];
    $dato["capacitacion_j3_1_sisjus_H"] = $_POST["capacitacion_j3_1_sisjus_H"];
    $dato["capacitacion_j3_1_sisjus_T"] = $_POST["capacitacion_j3_1_sisjus_T"];

    $dato["capacitacion_j3_1_debpro_M"] = $_POST["capacitacion_j3_1_debpro_M"];
    $dato["capacitacion_j3_1_debpro_H"] = $_POST["capacitacion_j3_1_debpro_H"];
    $dato["capacitacion_j3_1_debpro_T"] = $_POST["capacitacion_j3_1_debpro_T"];

    $dato["capacitacion_j3_1_fem_M"] = $_POST["capacitacion_j3_1_fem_M"];
    $dato["capacitacion_j3_1_fem_H"] = $_POST["capacitacion_j3_1_fem_H"];
    $dato["capacitacion_j3_1_fem_T"] = $_POST["capacitacion_j3_1_fem_T"];

    $dato["capacitacion_j3_1_anttra_M"] = $_POST["capacitacion_j3_1_anttra_M"];
    $dato["capacitacion_j3_1_anttra_H"] = $_POST["capacitacion_j3_1_anttra_H"];
    $dato["capacitacion_j3_1_anttra_T"] = $_POST["capacitacion_j3_1_anttra_T"];

    $dato["capacitacion_j3_1_viomuj_M"] = $_POST["capacitacion_j3_1_viomuj_M"];
    $dato["capacitacion_j3_1_viomuj_H"] = $_POST["capacitacion_j3_1_viomuj_H"];
    $dato["capacitacion_j3_1_viomuj_T"] = $_POST["capacitacion_j3_1_viomuj_T"];

    $dato["capacitacion_j3_1_mujdes_M"] = $_POST["capacitacion_j3_1_mujdes_M"];
    $dato["capacitacion_j3_1_mujdes_H"] = $_POST["capacitacion_j3_1_mujdes_H"];
    $dato["capacitacion_j3_1_mujdes_T"] = $_POST["capacitacion_j3_1_mujdes_T"];

    $dato["capacitacion_j3_1_asicon_M"] = $_POST["capacitacion_j3_1_asicon_M"];
    $dato["capacitacion_j3_1_asicon_H"] = $_POST["capacitacion_j3_1_asicon_H"];
    $dato["capacitacion_j3_1_asicon_T"] = $_POST["capacitacion_j3_1_asicon_T"];

    $dato["capacitacion_j3_1_sisint_M"] = $_POST["capacitacion_j3_1_sisint_M"];
    $dato["capacitacion_j3_1_sisint_H"] = $_POST["capacitacion_j3_1_sisint_H"];
    $dato["capacitacion_j3_1_sisint_T"] = $_POST["capacitacion_j3_1_sisint_T"];

    $dato["capacitacion_j3_1_ejesan_M"] = $_POST["capacitacion_j3_1_ejesan_M"];
    $dato["capacitacion_j3_1_ejesan_H"] = $_POST["capacitacion_j3_1_ejesan_H"];
    $dato["capacitacion_j3_1_ejesan_T"] = $_POST["capacitacion_j3_1_ejesan_T"];

    $dato["capacitacion_j3_1_ateper_M"] = $_POST["capacitacion_j3_1_ateper_M"];
    $dato["capacitacion_j3_1_ateper_H"] = $_POST["capacitacion_j3_1_ateper_H"];
    $dato["capacitacion_j3_1_ateper_T"] = $_POST["capacitacion_j3_1_ateper_T"];

    $dato["capacitacion_j3_1_atenperdis_M"] = $_POST["capacitacion_j3_1_atenperdis_M"];
    $dato["capacitacion_j3_1_atenperdis_H"] = $_POST["capacitacion_j3_1_atenperdis_H"];
    $dato["capacitacion_j3_1_atenperdis_T"] = $_POST["capacitacion_j3_1_atenperdis_T"];

    $dato["capacitacion_j3_1_jusalt_M"] = $_POST["capacitacion_j3_1_jusalt_M"];
    $dato["capacitacion_j3_1_jusalt_H"] = $_POST["capacitacion_j3_1_jusalt_H"];
    $dato["capacitacion_j3_1_jusalt_T"] = $_POST["capacitacion_j3_1_jusalt_T"];

    $dato["capacitacion_j3_1_juster_M"] = $_POST["capacitacion_j3_1_juster_M"];
    $dato["capacitacion_j3_1_juster_H"] = $_POST["capacitacion_j3_1_juster_H"];
    $dato["capacitacion_j3_1_juster_T"] = $_POST["capacitacion_j3_1_juster_T"];

    $dato["capacitacion_j3_1_justra_M"] = $_POST["capacitacion_j3_1_justra_M"];
    $dato["capacitacion_j3_1_justra_H"] = $_POST["capacitacion_j3_1_justra_H"];
    $dato["capacitacion_j3_1_justra_T"] = $_POST["capacitacion_j3_1_justra_T"];

    $dato["capacitacion_j3_1_rep_M"] = $_POST["capacitacion_j3_1_rep_M"];
    $dato["capacitacion_j3_1_rep_H"] = $_POST["capacitacion_j3_1_rep_H"];
    $dato["capacitacion_j3_1_rep_T"] = $_POST["capacitacion_j3_1_rep_T"];

    $dato["capacitacion_j3_1_tor_M"] = $_POST["capacitacion_j3_1_tor_M"];
    $dato["capacitacion_j3_1_tor_H"] = $_POST["capacitacion_j3_1_tor_H"];
    $dato["capacitacion_j3_1_tor_T"] = $_POST["capacitacion_j3_1_tor_T"];

    $dato["capacitacion_j3_1_otros"] = $_POST["capacitacion_j3_1_otros"];
    $dato["capacitacion_j3_1_otros_M"] = $_POST["capacitacion_j3_1_otros_M"];
    $dato["capacitacion_j3_1_otros_H"] = $_POST["capacitacion_j3_1_otros_H"];
    $dato["capacitacion_j3_1_otros_T"] = $_POST["capacitacion_j3_1_otros_T"];

    $dato["capacitacion_j3_2_int"] = $_POST["capacitacion_j3_2_int"];

    // Presupuesto
    $dato["presupuesto_j4_aut"] = $_POST["presupuesto_j4_aut"];

    $dato["presupuesto_j4_1_pre"] = $_POST["presupuesto_j4_1_pre"];

    $dato["presupuesto_j4_2_preserv"] = $_POST["presupuesto_j4_2_preserv"];

    $actualizar = ModeloJueces::mdlEditarFJuecesTab2("jueces",  $dato);


    echo $actualizar;
  }else{
    //INSERTA
    $dato["uuid"] = $_POST["uuid"];

    // INFRAESTRUCTURA
    $dato["infraestructura_j1_tot"] = $_POST["infraestructura_j1_tot"];

    $dato["infraestructura_j1_1_totjuz"] = $_POST["infraestructura_j1_1_totjuz"];

    $dato["infraestructura_j1_2_totjuz"] = $_POST["infraestructura_j1_2_totjuz"];
    $dato["infraestructura_j1_2_matpenacu"] = $_POST["infraestructura_j1_2_matpenacu"];
    $dato["infraestructura_j1_2_matpenfun"] = $_POST["infraestructura_j1_2_matpenfun"];

    // PERSONAL
    $dato["personal_j2_perlab_M"] = $_POST["personal_j2_perlab_M"];
    $dato["personal_j2_perlab_H"] = $_POST["personal_j2_perlab_H"];
    $dato["personal_j2_perlab_T"] = $_POST["personal_j2_perlab_T"];

    $dato["personal_j2_1_mag_M"] = $_POST["personal_j2_1_mag_M"];
    $dato["personal_j2_1_mag_H"] = $_POST["personal_j2_1_mag_H"];
    $dato["personal_j2_1_mag_T"] = $_POST["personal_j2_1_mag_T"];

    $dato["personal_j2_1_jec_M"] = $_POST["personal_j2_1_jec_M"];
    $dato["personal_j2_1_jec_H"] = $_POST["personal_j2_1_jec_H"];
    $dato["personal_j2_1_jec_T"] = $_POST["personal_j2_1_jec_T"];

    $dato["personal_j2_1_sec_M"] = $_POST["personal_j2_1_sec_M"];
    $dato["personal_j2_1_sec_H"] = $_POST["personal_j2_1_sec_H"];
    $dato["personal_j2_1_sec_T"] = $_POST["personal_j2_1_sec_T"];

    $dato["personal_j2_1_act_M"] = $_POST["personal_j2_1_act_M"];
    $dato["personal_j2_1_act_H"] = $_POST["personal_j2_1_act_H"];
    $dato["personal_j2_1_act_T"] = $_POST["personal_j2_1_act_T"];

    $dato["personal_j2_1_otrserv_M"] = $_POST["personal_j2_1_otrserv_M"];
    $dato["personal_j2_1_otrserv_H"] = $_POST["personal_j2_1_otrserv_H"];
    $dato["personal_j2_1_otrserv_T"] = $_POST["personal_j2_1_otrserv_T"];

    $dato["personal_j2_1_otros"] = $_POST["personal_j2_1_otros"];
    $dato["personal_j2_1_otros_M"] = $_POST["personal_j2_1_otros_M"];
    $dato["personal_j2_1_otros_H"] = $_POST["personal_j2_1_otros_H"];
    $dato["personal_j2_1_otros_T"] = $_POST["personal_j2_1_otros_T"];

    $dato["personal_j2_1_total_M"] = $_POST["personal_j2_1_total_M"];
    $dato["personal_j2_1_total_H"] = $_POST["personal_j2_1_total_H"];
    $dato["personal_j2_1_total_T"] = $_POST["personal_j2_1_total_T"];

    $dato["personal_j2_2_mag_M"] = $_POST["personal_j2_2_mag_M"];
    $dato["personal_j2_2_mag_H"] = $_POST["personal_j2_2_mag_H"];
    $dato["personal_j2_2_mag_T"] = $_POST["personal_j2_2_mag_T"];

    $dato["personal_j2_3_jue_M"] = $_POST["personal_j2_3_jue_M"];
    $dato["personal_j2_3_jue_H"] = $_POST["personal_j2_3_jue_H"];
    $dato["personal_j2_3_jue_T"] = $_POST["personal_j2_3_jue_T"];

    $dato["personal_j2_4_de1a5000_M"] = $_POST["personal_j2_4_de1a5000_M"];
    $dato["personal_j2_4_de1a5000_H"] = $_POST["personal_j2_4_de1a5000_H"];
    $dato["personal_j2_4_de1a5000_T"] = $_POST["personal_j2_4_de1a5000_T"];

    $dato["personal_j2_4_de5001a10000_M"] = $_POST["personal_j2_4_de5001a10000_M"];
    $dato["personal_j2_4_de5001a10000_H"] = $_POST["personal_j2_4_de5001a10000_H"];
    $dato["personal_j2_4_de5001a10000_T"] = $_POST["personal_j2_4_de5001a10000_T"];

    $dato["personal_j2_4_de10001a15000_M"] = $_POST["personal_j2_4_de10001a15000_M"];
    $dato["personal_j2_4_de10001a15000_H"] = $_POST["personal_j2_4_de10001a15000_H"];
    $dato["personal_j2_4_de10001a15000_T"] = $_POST["personal_j2_4_de10001a15000_T"];

    $dato["personal_j2_4_de15001a20000_M"] = $_POST["personal_j2_4_de15001a20000_M"];
    $dato["personal_j2_4_de15001a20000_H"] = $_POST["personal_j2_4_de15001a20000_H"];
    $dato["personal_j2_4_de15001a20000_T"] = $_POST["personal_j2_4_de15001a20000_T"];

    $dato["personal_j2_4_de20001a25000_M"] = $_POST["personal_j2_4_de20001a25000_M"];
    $dato["personal_j2_4_de20001a25000_H"] = $_POST["personal_j2_4_de20001a25000_H"];
    $dato["personal_j2_4_de20001a25000_T"] = $_POST["personal_j2_4_de20001a25000_T"];

    $dato["personal_j2_4_de25001a30000_M"] = $_POST["personal_j2_4_de25001a30000_M"];
    $dato["personal_j2_4_de25001a30000_H"] = $_POST["personal_j2_4_de25001a30000_H"];
    $dato["personal_j2_4_de25001a30000_T"] = $_POST["personal_j2_4_de25001a30000_T"];

    $dato["personal_j2_4_de30001a35000_M"] = $_POST["personal_j2_4_de30001a35000_M"];
    $dato["personal_j2_4_de30001a35000_H"] = $_POST["personal_j2_4_de30001a35000_H"];
    $dato["personal_j2_4_de30001a35000_T"] = $_POST["personal_j2_4_de30001a35000_T"];

    $dato["personal_j2_4_de35001a40000_M"] = $_POST["personal_j2_4_de35001a40000_M"];
    $dato["personal_j2_4_de35001a40000_H"] = $_POST["personal_j2_4_de35001a40000_H"];
    $dato["personal_j2_4_de35001a40000_T"] = $_POST["personal_j2_4_de35001a40000_T"];

    $dato["personal_j2_4_de40001a45000_M"] = $_POST["personal_j2_4_de40001a45000_M"];
    $dato["personal_j2_4_de40001a45000_H"] = $_POST["personal_j2_4_de40001a45000_H"];
    $dato["personal_j2_4_de40001a45000_T"] = $_POST["personal_j2_4_de40001a45000_T"];

    $dato["personal_j2_4_de45001a50000_M"] = $_POST["personal_j2_4_de45001a50000_M"];
    $dato["personal_j2_4_de45001a50000_H"] = $_POST["personal_j2_4_de45001a50000_H"];
    $dato["personal_j2_4_de45001a50000_T"] = $_POST["personal_j2_4_de45001a50000_T"];

    $dato["personal_j2_4_masde50000_M"] = $_POST["personal_j2_4_masde50000_M"];
    $dato["personal_j2_4_masde50000_H"] = $_POST["personal_j2_4_masde50000_H"];
    $dato["personal_j2_4_masde50000_T"] = $_POST["personal_j2_4_masde50000_T"];

    $dato["personal_j2_4_nosesabe"] = $_POST["personal_j2_4_nosesabe"];

    // CAPACITACIÓN Y EVALUACIÓN DE PERSONAL
    $dato["capacitacion_j3_mag_M"] = $_POST["capacitacion_j3_mag_M"];
    $dato["capacitacion_j3_mag_H"] = $_POST["capacitacion_j3_mag_H"];
    $dato["capacitacion_j3_mag_T"] = $_POST["capacitacion_j3_mag_T"];

    $dato["capacitacion_j3_jec_M"] = $_POST["capacitacion_j3_jec_M"];
    $dato["capacitacion_j3_jec_H"] = $_POST["capacitacion_j3_jec_H"];
    $dato["capacitacion_j3_jec_T"] = $_POST["capacitacion_j3_jec_T"];

    $dato["capacitacion_j3_sec_M"] = $_POST["capacitacion_j3_sec_M"];
    $dato["capacitacion_j3_sec_H"] = $_POST["capacitacion_j3_sec_H"];
    $dato["capacitacion_j3_sec_T"] = $_POST["capacitacion_j3_sec_T"];

    $dato["capacitacion_j3_act_M"] = $_POST["capacitacion_j3_act_M"];
    $dato["capacitacion_j3_act_H"] = $_POST["capacitacion_j3_act_H"];
    $dato["capacitacion_j3_act_T"] = $_POST["capacitacion_j3_act_T"];

    $dato["capacitacion_j3_otrserv_M"] = $_POST["capacitacion_j3_otrserv_M"];
    $dato["capacitacion_j3_otrserv_H"] = $_POST["capacitacion_j3_otrserv_H"];
    $dato["capacitacion_j3_otrserv_T"] = $_POST["capacitacion_j3_otrserv_T"];

    $dato["capacitacion_j3_otros"] = $_POST["capacitacion_j3_otros"];
    $dato["capacitacion_j3_otros_M"] = $_POST["capacitacion_j3_otros_M"];
    $dato["capacitacion_j3_otros_H"] = $_POST["capacitacion_j3_otros_H"];
    $dato["capacitacion_j3_otros_T"] = $_POST["capacitacion_j3_otros_T"];

    $dato["capacitacion_j3_nosesabe"] = $_POST["capacitacion_j3_nosesabe"];

    $dato["capacitacion_j3_1_sisjus_M"] = $_POST["capacitacion_j3_1_sisjus_M"];
    $dato["capacitacion_j3_1_sisjus_H"] = $_POST["capacitacion_j3_1_sisjus_H"];
    $dato["capacitacion_j3_1_sisjus_T"] = $_POST["capacitacion_j3_1_sisjus_T"];

    $dato["capacitacion_j3_1_debpro_M"] = $_POST["capacitacion_j3_1_debpro_M"];
    $dato["capacitacion_j3_1_debpro_H"] = $_POST["capacitacion_j3_1_debpro_H"];
    $dato["capacitacion_j3_1_debpro_T"] = $_POST["capacitacion_j3_1_debpro_T"];

    $dato["capacitacion_j3_1_fem_M"] = $_POST["capacitacion_j3_1_fem_M"];
    $dato["capacitacion_j3_1_fem_H"] = $_POST["capacitacion_j3_1_fem_H"];
    $dato["capacitacion_j3_1_fem_T"] = $_POST["capacitacion_j3_1_fem_T"];

    $dato["capacitacion_j3_1_anttra_M"] = $_POST["capacitacion_j3_1_anttra_M"];
    $dato["capacitacion_j3_1_anttra_H"] = $_POST["capacitacion_j3_1_anttra_H"];
    $dato["capacitacion_j3_1_anttra_T"] = $_POST["capacitacion_j3_1_anttra_T"];

    $dato["capacitacion_j3_1_viomuj_M"] = $_POST["capacitacion_j3_1_viomuj_M"];
    $dato["capacitacion_j3_1_viomuj_H"] = $_POST["capacitacion_j3_1_viomuj_H"];
    $dato["capacitacion_j3_1_viomuj_T"] = $_POST["capacitacion_j3_1_viomuj_T"];

    $dato["capacitacion_j3_1_mujdes_M"] = $_POST["capacitacion_j3_1_mujdes_M"];
    $dato["capacitacion_j3_1_mujdes_H"] = $_POST["capacitacion_j3_1_mujdes_H"];
    $dato["capacitacion_j3_1_mujdes_T"] = $_POST["capacitacion_j3_1_mujdes_T"];

    $dato["capacitacion_j3_1_asicon_M"] = $_POST["capacitacion_j3_1_asicon_M"];
    $dato["capacitacion_j3_1_asicon_H"] = $_POST["capacitacion_j3_1_asicon_H"];
    $dato["capacitacion_j3_1_asicon_T"] = $_POST["capacitacion_j3_1_asicon_T"];

    $dato["capacitacion_j3_1_sisint_M"] = $_POST["capacitacion_j3_1_sisint_M"];
    $dato["capacitacion_j3_1_sisint_H"] = $_POST["capacitacion_j3_1_sisint_H"];
    $dato["capacitacion_j3_1_sisint_T"] = $_POST["capacitacion_j3_1_sisint_T"];

    $dato["capacitacion_j3_1_ejesan_M"] = $_POST["capacitacion_j3_1_ejesan_M"];
    $dato["capacitacion_j3_1_ejesan_H"] = $_POST["capacitacion_j3_1_ejesan_H"];
    $dato["capacitacion_j3_1_ejesan_T"] = $_POST["capacitacion_j3_1_ejesan_T"];

    $dato["capacitacion_j3_1_ateper_M"] = $_POST["capacitacion_j3_1_ateper_M"];
    $dato["capacitacion_j3_1_ateper_H"] = $_POST["capacitacion_j3_1_ateper_H"];
    $dato["capacitacion_j3_1_ateper_T"] = $_POST["capacitacion_j3_1_ateper_T"];

    $dato["capacitacion_j3_1_atenperdis_M"] = $_POST["capacitacion_j3_1_atenperdis_M"];
    $dato["capacitacion_j3_1_atenperdis_H"] = $_POST["capacitacion_j3_1_atenperdis_H"];
    $dato["capacitacion_j3_1_atenperdis_T"] = $_POST["capacitacion_j3_1_atenperdis_T"];

    $dato["capacitacion_j3_1_jusalt_M"] = $_POST["capacitacion_j3_1_jusalt_M"];
    $dato["capacitacion_j3_1_jusalt_H"] = $_POST["capacitacion_j3_1_jusalt_H"];
    $dato["capacitacion_j3_1_jusalt_T"] = $_POST["capacitacion_j3_1_jusalt_T"];

    $dato["capacitacion_j3_1_juster_M"] = $_POST["capacitacion_j3_1_juster_M"];
    $dato["capacitacion_j3_1_juster_H"] = $_POST["capacitacion_j3_1_juster_H"];
    $dato["capacitacion_j3_1_juster_T"] = $_POST["capacitacion_j3_1_juster_T"];

    $dato["capacitacion_j3_1_justra_M"] = $_POST["capacitacion_j3_1_justra_M"];
    $dato["capacitacion_j3_1_justra_H"] = $_POST["capacitacion_j3_1_justra_H"];
    $dato["capacitacion_j3_1_justra_T"] = $_POST["capacitacion_j3_1_justra_T"];

    $dato["capacitacion_j3_1_rep_M"] = $_POST["capacitacion_j3_1_rep_M"];
    $dato["capacitacion_j3_1_rep_H"] = $_POST["capacitacion_j3_1_rep_H"];
    $dato["capacitacion_j3_1_rep_T"] = $_POST["capacitacion_j3_1_rep_T"];

    $dato["capacitacion_j3_1_tor_M"] = $_POST["capacitacion_j3_1_tor_M"];
    $dato["capacitacion_j3_1_tor_H"] = $_POST["capacitacion_j3_1_tor_H"];
    $dato["capacitacion_j3_1_tor_T"] = $_POST["capacitacion_j3_1_tor_T"];

    $dato["capacitacion_j3_1_otros"] = $_POST["capacitacion_j3_1_otros"];
    $dato["capacitacion_j3_1_otros_M"] = $_POST["capacitacion_j3_1_otros_M"];
    $dato["capacitacion_j3_1_otros_H"] = $_POST["capacitacion_j3_1_otros_H"];
    $dato["capacitacion_j3_1_otros_T"] = $_POST["capacitacion_j3_1_otros_T"];

    $dato["capacitacion_j3_2_int"] = $_POST["capacitacion_j3_2_int"];

    // Presupuesto
    $dato["presupuesto_j4_aut"] = $_POST["presupuesto_j4_aut"];

    $dato["presupuesto_j4_1_pre"] = $_POST["presupuesto_j4_1_pre"];

    $dato["presupuesto_j4_2_preserv"] = $_POST["presupuesto_j4_2_preserv"];


    if($guardar=="ok"){

      $datosGuardados =  ModeloJueces::mdlMostrarJueces("jueces","uuid",  $dato["uuid"]);
      echo  $datosGuardados[0]["id"];
    }else{
      echo $guardar;
    }


  }

}






if (isset($_POST["tab3"])){

  require_once "../modelos/jueces1.modelo.php";

  $idFormulario = $_POST["idFormulario"];
    if($idFormulario > 0){
    $dato["idFormulario"] =$idFormulario;
    $dato["uuid"] = $_POST["uuid"];

    // JUSTICIA PARA MUJERES
    $dato["mujeres_j5_proint"] = $_POST["mujeres_j5_proint"];
    $dato["mujeres_j5_proint_cuales"] = $_POST["mujeres_j5_proint_cuales"];
    $dato["mujeres_j5_prointr"] = $_POST["mujeres_j5_prointr"];
    $dato["mujeres_j5_prointr_cuales"] = $_POST["mujeres_j5_prointr_cuales"];
    $dato["mujeres_j5_proinv"] = $_POST["mujeres_j5_proinv"];
    $dato["mujeres_j5_prosupcor"] = $_POST["mujeres_j5_prosupcor"];
    $dato["mujeres_j5_ninguno"] = $_POST["mujeres_j5_ninguno"];
    $dato["mujeres_j5_otros"] = $_POST["mujeres_j5_otros"];
    $dato["mujeres_j5_otros_cuales"] = $_POST["mujeres_j5_otros_cuales"];
    $dato["mujeres_j5_nosesabe"] = $_POST["mujeres_j5_nosesabe"];

    $dato["mujeres_j5_1_buepra"] = $_POST["mujeres_j5_1_buepra"];

    $dato["mujeres_j5_2_cuabuepra"] = $_POST["mujeres_j5_2_cuabuepra"];
    $dato["mujeres_j5_2_noaplica"] = $_POST["mujeres_j5_2_noaplica"];

    // JUSTICIA PENAL PARA ADOLESCENTES

    $dato["ja_j6_proint"] = $_POST["ja_j6_proint"];
    $dato["ja_j6_proint_cual"] = $_POST["ja_j6_proint_cual"];
    $dato["ja_j6_prointr"] = $_POST["ja_j6_prointr"];
    $dato["ja_j6_prointr_cual"] = $_POST["ja_j6_prointr_cual"];
    $dato["ja_j6_proateint"] = $_POST["ja_j6_proateint"];
    $dato["ja_j6_proactjus"] = $_POST["ja_j6_proactjus"];
    $dato["ja_j6_ninguno"] = $_POST["ja_j6_ninguno"];
    $dato["ja_j6_otros"] = $_POST["ja_j6_otros"];
    $dato["ja_j6_otros_cual"] = $_POST["ja_j6_otros_cual"];
    $dato["ja_j6_nosesabe"] = $_POST["ja_j6_nosesabe"];

    $dato["ja_j6_1_buepra"] = $_POST["ja_j6_1_buepra"];

    $dato["ja_j6_2_cuabuepra"] = $_POST["ja_j6_2_cuabuepra"];
    $dato["ja_j6_2_noaplica"] = $_POST["ja_j6_2_noaplica"];

    $dato["ja_j6_3_mag_M"] = $_POST["ja_j6_3_mag_M"];
    $dato["ja_j6_3_mag_H"] = $_POST["ja_j6_3_mag_H"];
    $dato["ja_j6_3_mag_T"] = $_POST["ja_j6_3_mag_T"];

    $dato["ja_j6_4_jue_M"] = $_POST["ja_j6_4_jue_M"];
    $dato["ja_j6_4_jue_H"] = $_POST["ja_j6_4_jue_H"];
    $dato["ja_j6_4_jue_T"] = $_POST["ja_j6_4_jue_T"];

    $dato["ja_j6_5_triesp"] = $_POST["ja_j6_5_triesp"];

    $dato["ja_j6_6_triesp"] = $_POST["ja_j6_6_triesp"];
    $dato["ja_j6_6_noaplica"] = $_POST["ja_j6_6_noaplica"];

    // JUSTICIA PARA PERSONAS INDÍGENAS
    $dato["indigenas_j7_intlen"] = $_POST["indigenas_j7_intlen"];

    $dato["indigenas_j7_1_nahuatl_M"] = $_POST["indigenas_j7_1_nahuatl_M"];
    $dato["indigenas_j7_1_nahuatl_H"] = $_POST["indigenas_j7_1_nahuatl_H"];
    $dato["indigenas_j7_1_nahuatl_T"] = $_POST["indigenas_j7_1_nahuatl_T"];

    $dato["indigenas_j7_1_maya_M"] = $_POST["indigenas_j7_1_maya_M"];
    $dato["indigenas_j7_1_maya_H"] = $_POST["indigenas_j7_1_maya_H"];
    $dato["indigenas_j7_1_maya_T"] = $_POST["indigenas_j7_1_maya_T"];

    $dato["indigenas_j7_1_tsetsal_M"] = $_POST["indigenas_j7_1_tsetsal_M"];
    $dato["indigenas_j7_1_tsetsal_H"] = $_POST["indigenas_j7_1_tsetsal_H"];
    $dato["indigenas_j7_1_tsetsal_T"] = $_POST["indigenas_j7_1_tsetsal_T"];

    $dato["indigenas_j7_1_mixteco_M"] = $_POST["indigenas_j7_1_mixteco_M"];
    $dato["indigenas_j7_1_mixteco_H"] = $_POST["indigenas_j7_1_mixteco_H"];
    $dato["indigenas_j7_1_mixteco_T"] = $_POST["indigenas_j7_1_mixteco_T"];

    $dato["indigenas_j7_1_tsotsil_M"] = $_POST["indigenas_j7_1_tsotsil_M"];
    $dato["indigenas_j7_1_tsotsil_H"] = $_POST["indigenas_j7_1_tsotsil_H"];
    $dato["indigenas_j7_1_tsotsil_T"] = $_POST["indigenas_j7_1_tsotsil_T"];

    $dato["indigenas_j7_1_otros"] = $_POST["indigenas_j7_1_otros"];
    $dato["indigenas_j7_1_otros_M"] = $_POST["indigenas_j7_1_otros_M"];
    $dato["indigenas_j7_1_otros_H"] = $_POST["indigenas_j7_1_otros_H"];
    $dato["indigenas_j7_1_otros_T"] = $_POST["indigenas_j7_1_otros_T"];

    $dato["indigenas_j7_1_noaplica"] = $_POST["indigenas_j7_1_noaplica"];
    $dato["indigenas_j7_1_nosesabe"] = $_POST["indigenas_j7_1_nosesabe"];

    $dato["indigenas_j7_2_con"] = $_POST["indigenas_j7_2_con"];

    $dato["indigenas_j7_3_nomins"] = $_POST["indigenas_j7_3_nomins"];
    $dato["indigenas_j7_3_noaplica"] = $_POST["indigenas_j7_3_noaplica"];
    $dato["indigenas_j7_3_nosesabe"] = $_POST["indigenas_j7_3_nosesabe"];

    $dato["indigenas_j7_4_proint"] = $_POST["indigenas_j7_4_proint"];
    $dato["indigenas_j7_4_proint_cual"] = $_POST["indigenas_j7_4_proint_cual"];
    $dato["indigenas_j7_4_prointr"] = $_POST["indigenas_j7_4_prointr"];
    $dato["indigenas_j7_4_prointr_cual"] = $_POST["indigenas_j7_4_prointr_cual"];
    $dato["indigenas_j7_4_proact"] = $_POST["indigenas_j7_4_proact"];
    $dato["indigenas_j7_4_ninguno"] = $_POST["indigenas_j7_4_ninguno"];
    $dato["indigenas_j7_4_otro"] = $_POST["indigenas_j7_4_otro"];
    $dato["indigenas_j7_4_otro_cual"] = $_POST["indigenas_j7_4_otro_cual"];
    $dato["indigenas_j7_4_nosesabe"] = $_POST["indigenas_j7_4_nosesabe"];

    $dato["indigenas_j7_5_insbuepra"] = $_POST["indigenas_j7_5_insbuepra"];

    $dato["indigenas_j7_6_cuabuepra"] = $_POST["indigenas_j7_6_cuabuepra"];
    $dato["indigenas_j7_6_noaplica"] = $_POST["indigenas_j7_6_noaplica"];

    $actualizar = ModeloJueces::mdlEditarFJuecesTab3("jueces",  $dato);


    echo $actualizar;
  }else{
    //INSERTA
    $dato["uuid"] = $_POST["uuid"];
    // JUSTICIA PARA MUJERES
    $dato["mujeres_j5_proint"] = $_POST["mujeres_j5_proint"];
    $dato["mujeres_j5_proint_cuales"] = $_POST["mujeres_j5_proint_cuales"];
    $dato["mujeres_j5_prointr"] = $_POST["mujeres_j5_prointr"];
    $dato["mujeres_j5_prointr_cuales"] = $_POST["mujeres_j5_prointr_cuales"];
    $dato["mujeres_j5_proinv"] = $_POST["mujeres_j5_proinv"];
    $dato["mujeres_j5_prosupcor"] = $_POST["mujeres_j5_prosupcor"];
    $dato["mujeres_j5_ninguno"] = $_POST["mujeres_j5_ninguno"];
    $dato["mujeres_j5_otros"] = $_POST["mujeres_j5_otros"];
    $dato["mujeres_j5_otros_cuales"] = $_POST["mujeres_j5_otros_cuales"];
    $dato["mujeres_j5_nosesabe"] = $_POST["mujeres_j5_nosesabe"];

    $dato["mujeres_j5_1_buepra"] = $_POST["mujeres_j5_1_buepra"];

    $dato["mujeres_j5_2_cuabuepra"] = $_POST["mujeres_j5_2_cuabuepra"];
    $dato["mujeres_j5_2_noaplica"] = $_POST["mujeres_j5_2_noaplica"];

    // JUSTICIA PENAL PARA ADOLESCENTES

    $dato["ja_j6_proint"] = $_POST["ja_j6_proint"];
    $dato["ja_j6_proint_cual"] = $_POST["ja_j6_proint_cual"];
    $dato["ja_j6_prointr"] = $_POST["ja_j6_prointr"];
    $dato["ja_j6_prointr_cual"] = $_POST["ja_j6_prointr_cual"];
    $dato["ja_j6_proateint"] = $_POST["ja_j6_proateint"];
    $dato["ja_j6_proactjus"] = $_POST["ja_j6_proactjus"];
    $dato["ja_j6_ninguno"] = $_POST["ja_j6_ninguno"];
    $dato["ja_j6_otros"] = $_POST["ja_j6_otros"];
    $dato["ja_j6_otros_cual"] = $_POST["ja_j6_otros_cual"];
    $dato["ja_j6_nosesabe"] = $_POST["ja_j6_nosesabe"];

    $dato["ja_j6_1_buepra"] = $_POST["ja_j6_1_buepra"];

    $dato["ja_j6_2_cuabuepra"] = $_POST["ja_j6_2_cuabuepra"];
    $dato["ja_j6_2_noaplica"] = $_POST["ja_j6_2_noaplica"];

    $dato["ja_j6_3_mag_M"] = $_POST["ja_j6_3_mag_M"];
    $dato["ja_j6_3_mag_H"] = $_POST["ja_j6_3_mag_H"];
    $dato["ja_j6_3_mag_T"] = $_POST["ja_j6_3_mag_T"];

    $dato["ja_j6_4_jue_M"] = $_POST["ja_j6_4_jue_M"];
    $dato["ja_j6_4_jue_H"] = $_POST["ja_j6_4_jue_H"];
    $dato["ja_j6_4_jue_T"] = $_POST["ja_j6_4_jue_T"];

    $dato["ja_j6_5_triesp"] = $_POST["ja_j6_5_triesp"];

    $dato["ja_j6_6_triesp"] = $_POST["ja_j6_6_triesp"];
    $dato["ja_j6_6_noaplica"] = $_POST["ja_j6_6_noaplica"];

    // JUSTICIA PARA PERSONAS INDÍGENAS
    $dato["indigenas_j7_intlen"] = $_POST["indigenas_j7_intlen"];

    $dato["indigenas_j7_1_nahuatl_M"] = $_POST["indigenas_j7_1_nahuatl_M"];
    $dato["indigenas_j7_1_nahuatl_H"] = $_POST["indigenas_j7_1_nahuatl_H"];
    $dato["indigenas_j7_1_nahuatl_T"] = $_POST["indigenas_j7_1_nahuatl_T"];

    $dato["indigenas_j7_1_maya_M"] = $_POST["indigenas_j7_1_maya_M"];
    $dato["indigenas_j7_1_maya_H"] = $_POST["indigenas_j7_1_maya_H"];
    $dato["indigenas_j7_1_maya_T"] = $_POST["indigenas_j7_1_maya_T"];

    $dato["indigenas_j7_1_tsetsal_M"] = $_POST["indigenas_j7_1_tsetsal_M"];
    $dato["indigenas_j7_1_tsetsal_H"] = $_POST["indigenas_j7_1_tsetsal_H"];
    $dato["indigenas_j7_1_tsetsal_T"] = $_POST["indigenas_j7_1_tsetsal_T"];

    $dato["indigenas_j7_1_mixteco_M"] = $_POST["indigenas_j7_1_mixteco_M"];
    $dato["indigenas_j7_1_mixteco_H"] = $_POST["indigenas_j7_1_mixteco_H"];
    $dato["indigenas_j7_1_mixteco_T"] = $_POST["indigenas_j7_1_mixteco_T"];

    $dato["indigenas_j7_1_tsotsil_M"] = $_POST["indigenas_j7_1_tsotsil_M"];
    $dato["indigenas_j7_1_tsotsil_H"] = $_POST["indigenas_j7_1_tsotsil_H"];
    $dato["indigenas_j7_1_tsotsil_T"] = $_POST["indigenas_j7_1_tsotsil_T"];

    $dato["indigenas_j7_1_otros"] = $_POST["indigenas_j7_1_otros"];
    $dato["indigenas_j7_1_otros_M"] = $_POST["indigenas_j7_1_otros_M"];
    $dato["indigenas_j7_1_otros_H"] = $_POST["indigenas_j7_1_otros_H"];
    $dato["indigenas_j7_1_otros_T"] = $_POST["indigenas_j7_1_otros_T"];

    $dato["indigenas_j7_1_noaplica"] = $_POST["indigenas_j7_1_noaplica"];
    $dato["indigenas_j7_1_nosesabe"] = $_POST["indigenas_j7_1_nosesabe"];

    $dato["indigenas_j7_2_con"] = $_POST["indigenas_j7_2_con"];

    $dato["indigenas_j7_3_nomins"] = $_POST["indigenas_j7_3_nomins"];
    $dato["indigenas_j7_3_noaplica"] = $_POST["indigenas_j7_3_noaplica"];
    $dato["indigenas_j7_3_nosesabe"] = $_POST["indigenas_j7_3_nosesabe"];

    $dato["indigenas_j7_4_proint"] = $_POST["indigenas_j7_4_proint"];
    $dato["indigenas_j7_4_proint_cual"] = $_POST["indigenas_j7_4_proint_cual"];
    $dato["indigenas_j7_4_prointr"] = $_POST["indigenas_j7_4_prointr"];
    $dato["indigenas_j7_4_prointr_cual"] = $_POST["indigenas_j7_4_prointr_cual"];
    $dato["indigenas_j7_4_proact"] = $_POST["indigenas_j7_4_proact"];
    $dato["indigenas_j7_4_ninguno"] = $_POST["indigenas_j7_4_ninguno"];
    $dato["indigenas_j7_4_otro"] = $_POST["indigenas_j7_4_otro"];
    $dato["indigenas_j7_4_otro_cual"] = $_POST["indigenas_j7_4_otro_cual"];
    $dato["indigenas_j7_4_nosesabe"] = $_POST["indigenas_j7_4_nosesabe"];

    $dato["indigenas_j7_5_insbuepra"] = $_POST["indigenas_j7_5_insbuepra"];

    $dato["indigenas_j7_6_cuabuepra"] = $_POST["indigenas_j7_6_cuabuepra"];
    $dato["indigenas_j7_6_noaplica"] = $_POST["indigenas_j7_6_noaplica"];


    if($guardar=="ok"){

      $datosGuardados =  ModeloJueces::mdlMostrarJueces("jueces","uuid",  $dato["uuid"]);
      echo  $datosGuardados[0]["id"];
    }else{
      echo $guardar;
    }


  }

}




if (isset($_POST["tab4"])){

  require_once "../modelos/jueces1.modelo.php";

  $idFormulario = $_POST["idFormulario"];
    if($idFormulario > 0){
    $dato["idFormulario"] =$idFormulario;
    $dato["uuid"] = $_POST["uuid"];

    // JUSTICIA PARA PERSONAS EXTRANJERAS
    $dato["extranjeras_j8_tra"] = $_POST["extranjeras_j8_tra"];
    $dato["extranjeras_j8_1_ingles_M"] = $_POST["extranjeras_j8_1_ingles_M"];
    $dato["extranjeras_j8_1_ingles_H"] = $_POST["extranjeras_j8_1_ingles_H"];
    $dato["extranjeras_j8_1_ingles_T"] = $_POST["extranjeras_j8_1_ingles_T"];
    $dato["extranjeras_j8_1_chino_M"] = $_POST["extranjeras_j8_1_chino_M"];
    $dato["extranjeras_j8_1_chino_H"] = $_POST["extranjeras_j8_1_chino_H"];
    $dato["extranjeras_j8_1_chino_T"] = $_POST["extranjeras_j8_1_chino_T"];
    $dato["extranjeras_j8_1_frances_M"] = $_POST["extranjeras_j8_1_frances_M"];
    $dato["extranjeras_j8_1_frances_H"] = $_POST["extranjeras_j8_1_frances_H"];
    $dato["extranjeras_j8_1_frances_T"] = $_POST["extranjeras_j8_1_frances_T"];
    $dato["extranjeras_j8_1_arabe_M"] = $_POST["extranjeras_j8_1_arabe_M"];
    $dato["extranjeras_j8_1_arabe_H"] = $_POST["extranjeras_j8_1_arabe_H"];
    $dato["extranjeras_j8_1_arabe_T"] = $_POST["extranjeras_j8_1_arabe_T"];
    $dato["extranjeras_j8_1_ruso_M"] = $_POST["extranjeras_j8_1_ruso_M"];
    $dato["extranjeras_j8_1_ruso_H"] = $_POST["extranjeras_j8_1_ruso_H"];
    $dato["extranjeras_j8_1_ruso_T"] = $_POST["extranjeras_j8_1_ruso_T"];
    $dato["extranjeras_j8_1_otro"] = $_POST["extranjeras_j8_1_otro"];
    $dato["extranjeras_j8_1_otro_M"] = $_POST["extranjeras_j8_1_otro_M"];
    $dato["extranjeras_j8_1_otro_H"] = $_POST["extranjeras_j8_1_otro_H"];
    $dato["extranjeras_j8_1_otro_T"] = $_POST["extranjeras_j8_1_otro_T"];
    $dato["extranjeras_j8_1_noaplica"] = $_POST["extranjeras_j8_1_noaplica"];
    $dato["extranjeras_j8_1_nosesabe"] = $_POST["extranjeras_j8_1_nosesabe"];
    $dato["extranjeras_j8_2_con"] = $_POST["extranjeras_j8_2_con"];
    $dato["extranjeras_j8_3_nomins"] = $_POST["extranjeras_j8_3_nomins"];
    $dato["extranjeras_j8_3_noaplica"] = $_POST["extranjeras_j8_3_noaplica"];
    $dato["extranjeras_j8_3_nosesabe"] = $_POST["extranjeras_j8_3_nosesabe"];
    $dato["extranjeras_j8_4_proint"] = $_POST["extranjeras_j8_4_proint"];
    $dato["extranjeras_j8_4_proint_cual"] = $_POST["extranjeras_j8_4_proint_cual"];
    $dato["extranjeras_j8_4_prointr"] = $_POST["extranjeras_j8_4_prointr"];
    $dato["extranjeras_j8_4_prointr_cual"] = $_POST["extranjeras_j8_4_prointr_cual"];
    $dato["extranjeras_j8_4_ninguno"] = $_POST["extranjeras_j8_4_ninguno"];
    $dato["extranjeras_j8_4_otro"] = $_POST["extranjeras_j8_4_otro"];
    $dato["extranjeras_j8_4_otro_cual"] = $_POST["extranjeras_j8_4_otro_cual"];
    $dato["extranjeras_j8_4_nosesabe"] = $_POST["extranjeras_j8_4_nosesabe"];
    $dato["extranjeras_j8_5_buepra"] = $_POST["extranjeras_j8_5_buepra"];
    $dato["extranjeras_j8_6_cuabuepra"] = $_POST["extranjeras_j8_6_cuabuepra"];
    $dato["extranjeras_j8_6_noaplica"] = $_POST["extranjeras_j8_6_noaplica"];
    $dato["discapacidad_j9_braile"] = $_POST["discapacidad_j9_braile"];
    $dato["discapacidad_j9_lense"] = $_POST["discapacidad_j9_lense"];
    $dato["discapacidad_j9_1_nomins"] = $_POST["discapacidad_j9_1_nomins"];
    $dato["discapacidad_j9_1_noaplica"] = $_POST["discapacidad_j9_1_noaplica"];
    $dato["discapacidad_j9_1_nosesabe"] = $_POST["discapacidad_j9_1_nosesabe"];
    $dato["discapacidad_j9_2_proint"] = $_POST["discapacidad_j9_2_proint"];
    $dato["discapacidad_j9_2_proint_cual"] = $_POST["discapacidad_j9_2_proint_cual"];
    $dato["discapacidad_j9_2_prointr"] = $_POST["discapacidad_j9_2_prointr"];
    $dato["discapacidad_j9_2_prointr_cual"] = $_POST["discapacidad_j9_2_prointr_cual"];
    $dato["discapacidad_j9_2_proact"] = $_POST["discapacidad_j9_2_proact"];
    $dato["discapacidad_j9_2_ninguno"] = $_POST["discapacidad_j9_2_ninguno"];
    $dato["discapacidad_j9_2_otros"] = $_POST["discapacidad_j9_2_otros"];
    $dato["discapacidad_j9_2_otros_cual"] = $_POST["discapacidad_j9_2_otros_cual"];
    $dato["discapacidad_j9_2_nosesabe"] = $_POST["discapacidad_j9_2_nosesabe"];
    $dato["discapacidad_j9_3_buepra"] = $_POST["discapacidad_j9_3_buepra"];
    $dato["discapacidad_j9_4_cuabuepra"] = $_POST["discapacidad_j9_4_cuabuepra"];
    $dato["discapacidad_j9_4_noaplica"] = $_POST["discapacidad_j9_4_noaplica"];

    $actualizar = ModeloJueces::mdlEditarFJuecesTab4("jueces",  $dato);


    echo $actualizar;
  }else{
    //INSERTA
    $dato["uuid"] = $_POST["uuid"];
    // JUSTICIA PARA PERSONAS EXTRANJERAS
    $dato["extranjeras_j8_tra"] = $_POST["extranjeras_j8_tra"];
    $dato["extranjeras_j8_1_ingles_M"] = $_POST["extranjeras_j8_1_ingles_M"];
    $dato["extranjeras_j8_1_ingles_H"] = $_POST["extranjeras_j8_1_ingles_H"];
    $dato["extranjeras_j8_1_ingles_T"] = $_POST["extranjeras_j8_1_ingles_T"];
    $dato["extranjeras_j8_1_chino_M"] = $_POST["extranjeras_j8_1_chino_M"];
    $dato["extranjeras_j8_1_chino_H"] = $_POST["extranjeras_j8_1_chino_H"];
    $dato["extranjeras_j8_1_chino_T"] = $_POST["extranjeras_j8_1_chino_T"];
    $dato["extranjeras_j8_1_frances_M"] = $_POST["extranjeras_j8_1_frances_M"];
    $dato["extranjeras_j8_1_frances_H"] = $_POST["extranjeras_j8_1_frances_H"];
    $dato["extranjeras_j8_1_frances_T"] = $_POST["extranjeras_j8_1_frances_T"];
    $dato["extranjeras_j8_1_arabe_M"] = $_POST["extranjeras_j8_1_arabe_M"];
    $dato["extranjeras_j8_1_arabe_H"] = $_POST["extranjeras_j8_1_arabe_H"];
    $dato["extranjeras_j8_1_arabe_T"] = $_POST["extranjeras_j8_1_arabe_T"];
    $dato["extranjeras_j8_1_ruso_M"] = $_POST["extranjeras_j8_1_ruso_M"];
    $dato["extranjeras_j8_1_ruso_H"] = $_POST["extranjeras_j8_1_ruso_H"];
    $dato["extranjeras_j8_1_ruso_T"] = $_POST["extranjeras_j8_1_ruso_T"];
    $dato["extranjeras_j8_1_otro"] = $_POST["extranjeras_j8_1_otro"];
    $dato["extranjeras_j8_1_otro_M"] = $_POST["extranjeras_j8_1_otro_M"];
    $dato["extranjeras_j8_1_otro_H"] = $_POST["extranjeras_j8_1_otro_H"];
    $dato["extranjeras_j8_1_otro_T"] = $_POST["extranjeras_j8_1_otro_T"];
    $dato["extranjeras_j8_1_noaplica"] = $_POST["extranjeras_j8_1_noaplica"];
    $dato["extranjeras_j8_1_nosesabe"] = $_POST["extranjeras_j8_1_nosesabe"];
    $dato["extranjeras_j8_2_con"] = $_POST["extranjeras_j8_2_con"];
    $dato["extranjeras_j8_3_nomins"] = $_POST["extranjeras_j8_3_nomins"];
    $dato["extranjeras_j8_3_noaplica"] = $_POST["extranjeras_j8_3_noaplica"];
    $dato["extranjeras_j8_3_nosesabe"] = $_POST["extranjeras_j8_3_nosesabe"];
    $dato["extranjeras_j8_4_proint"] = $_POST["extranjeras_j8_4_proint"];
    $dato["extranjeras_j8_4_proint_cual"] = $_POST["extranjeras_j8_4_proint_cual"];
    $dato["extranjeras_j8_4_prointr"] = $_POST["extranjeras_j8_4_prointr"];
    $dato["extranjeras_j8_4_prointr_cual"] = $_POST["extranjeras_j8_4_prointr_cual"];
    $dato["extranjeras_j8_4_ninguno"] = $_POST["extranjeras_j8_4_ninguno"];
    $dato["extranjeras_j8_4_otro"] = $_POST["extranjeras_j8_4_otro"];
    $dato["extranjeras_j8_4_otro_cual"] = $_POST["extranjeras_j8_4_otro_cual"];
    $dato["extranjeras_j8_4_nosesabe"] = $_POST["extranjeras_j8_4_nosesabe"];
    $dato["extranjeras_j8_5_buepra"] = $_POST["extranjeras_j8_5_buepra"];
    $dato["extranjeras_j8_6_cuabuepra"] = $_POST["extranjeras_j8_6_cuabuepra"];
    $dato["extranjeras_j8_6_noaplica"] = $_POST["extranjeras_j8_6_noaplica"];
    $dato["discapacidad_j9_braile"] = $_POST["discapacidad_j9_braile"];
    $dato["discapacidad_j9_lense"] = $_POST["discapacidad_j9_lense"];
    $dato["discapacidad_j9_1_nomins"] = $_POST["discapacidad_j9_1_nomins"];
    $dato["discapacidad_j9_1_noaplica"] = $_POST["discapacidad_j9_1_noaplica"];
    $dato["discapacidad_j9_1_nosesabe"] = $_POST["discapacidad_j9_1_nosesabe"];
    $dato["discapacidad_j9_2_proint"] = $_POST["discapacidad_j9_2_proint"];
    $dato["discapacidad_j9_2_proint_cual"] = $_POST["discapacidad_j9_2_proint_cual"];
    $dato["discapacidad_j9_2_prointr"] = $_POST["discapacidad_j9_2_prointr"];
    $dato["discapacidad_j9_2_prointr_cual"] = $_POST["discapacidad_j9_2_prointr_cual"];
    $dato["discapacidad_j9_2_proact"] = $_POST["discapacidad_j9_2_proact"];
    $dato["discapacidad_j9_2_ninguno"] = $_POST["discapacidad_j9_2_ninguno"];
    $dato["discapacidad_j9_2_otros"] = $_POST["discapacidad_j9_2_otros"];
    $dato["discapacidad_j9_2_otros_cual"] = $_POST["discapacidad_j9_2_otros_cual"];
    $dato["discapacidad_j9_2_nosesabe"] = $_POST["discapacidad_j9_2_nosesabe"];
    $dato["discapacidad_j9_3_buepra"] = $_POST["discapacidad_j9_3_buepra"];
    $dato["discapacidad_j9_4_cuabuepra"] = $_POST["discapacidad_j9_4_cuabuepra"];
    $dato["discapacidad_j9_4_noaplica"] = $_POST["discapacidad_j9_4_noaplica"];


    if($guardar=="ok"){

      $datosGuardados =  ModeloJueces::mdlMostrarJueces("jueces","uuid",  $dato["uuid"]);
      echo  $datosGuardados[0]["id"];
    }else{
      echo $guardar;
    }


  }

}




if (isset($_POST["tab5"])){

  require_once "../modelos/jueces1.modelo.php";

  $idFormulario = $_POST["idFormulario"];
    if($idFormulario > 0){
    $dato["idFormulario"] =$idFormulario;
    $dato["uuid"] = $_POST["uuid"];

    // COLABORACIÓN CON OTRAS INSTITUCIONES
    $dato["colaboracion_j10_col"] = $_POST["colaboracion_j10_col"];
    $dato["colaboracion_j10_1_ins"] = $_POST["colaboracion_j10_1_ins"];
    $dato["colaboracion_j10_1_noaplica"] = $_POST["colaboracion_j10_1_noaplica"];
    $dato["colaboracion_j10_1_nosesabe"] = $_POST["colaboracion_j10_1_nosesabe"];
    $dato["colaboracion_j10_2_fin"] = $_POST["colaboracion_j10_2_fin"];
    $dato["colaboracion_j10_2_don"] = $_POST["colaboracion_j10_2_don"];
    $dato["colaboracion_j10_2_cap"] = $_POST["colaboracion_j10_2_cap"];
    $dato["colaboracion_j10_2_otros"] = $_POST["colaboracion_j10_2_otros"];
    $dato["colaboracion_j10_2_otros_cual"] = $_POST["colaboracion_j10_2_otros_cual"];
    $dato["colaboracion_j10_3_tipcol"] = $_POST["colaboracion_j10_3_tipcol"];
    $dato["colaboracion_j10_3_noaplica"] = $_POST["colaboracion_j10_3_noaplica"];
    $dato["registro_j11_pla"] = $_POST["registro_j11_pla"];
    $dato["registro_j11_1_ser"] = $_POST["registro_j11_1_ser"];
    $dato["registro_j11_1_noaplica"] = $_POST["registro_j11_1_noaplica"];
    $dato["registro_j11_2_lig"] = $_POST["registro_j11_2_lig"];
    $dato["registro_j11_3_regcap"] = $_POST["registro_j11_3_regcap"];
    $dato["registro_j11_3_regper"] = $_POST["registro_j11_3_regper"];
    $dato["registro_j11_3_regvic"] = $_POST["registro_j11_3_regvic"];
    $dato["registro_j11_3_regaud"] = $_POST["registro_j11_3_regaud"];
    $dato["registro_j11_3_regmed"] = $_POST["registro_j11_3_regmed"];
    $dato["registro_j11_3_regres"] = $_POST["registro_j11_3_regres"];
    $dato["registro_j11_3_regsentip"] = $_POST["registro_j11_3_regsentip"];
    $dato["registro_j11_3_regsendel"] = $_POST["registro_j11_3_regsendel"];
    $dato["registro_j11_3_otros"] = $_POST["registro_j11_3_otros"];
    $dato["registro_j11_3_otros_cuales"] = $_POST["registro_j11_3_otros_cuales"];
    $dato["registro_j11_3_noaplica"] = $_POST["registro_j11_3_noaplica"];
    $dato["registro_j11_3_nosesabe"] = $_POST["registro_j11_3_nosesabe"];
    $dato["registro_j11_4_lib"] = $_POST["registro_j11_4_lib"];
    $dato["registro_j11_4_bd"] = $_POST["registro_j11_4_bd"];
    $dato["registro_j11_4_ap"] = $_POST["registro_j11_4_ap"];
    $dato["registro_j11_4_pla"] = $_POST["registro_j11_4_pla"];
    $dato["registro_j11_4_otro"] = $_POST["registro_j11_4_otro"];
    $dato["registro_j11_4_otro_cual"] = $_POST["registro_j11_4_otro_cual"];
    $dato["registro_j11_4_noaplica"] = $_POST["registro_j11_4_noaplica"];
    $dato["registro_j11_4_nosesabe"] = $_POST["registro_j11_4_nosesabe"];
    $dato["registro_j11_5_int"] = $_POST["registro_j11_5_int"];
    $dato["registro_j11_6_intmun"] = $_POST["registro_j11_6_intmun"];
    $dato["registro_j11_6_intmunotr"] = $_POST["registro_j11_6_intmunotr"];
    $dato["registro_j11_6_intest"] = $_POST["registro_j11_6_intest"];
    $dato["registro_j11_6_intestotr"] = $_POST["registro_j11_6_intestotr"];
    $dato["registro_j11_6_intfed"] = $_POST["registro_j11_6_intfed"];
    $dato["registro_j11_6_guanac"] = $_POST["registro_j11_6_guanac"];
    $dato["registro_j11_6_progen"] = $_POST["registro_j11_6_progen"];
    $dato["registro_j11_6_progenotr"] = $_POST["registro_j11_6_progenotr"];
    $dato["registro_j11_6_fisgen"] = $_POST["registro_j11_6_fisgen"];
    $dato["registro_j11_6_podjudotr"] = $_POST["registro_j11_6_podjudotr"];
    $dato["registro_j11_6_podjud"] = $_POST["registro_j11_6_podjud"];
    $dato["registro_j11_6_sispen"] = $_POST["registro_j11_6_sispen"];
    $dato["registro_j11_6_sispenotr"] = $_POST["registro_j11_6_sispenotr"];
    $dato["registro_j11_6_sispenfed"] = $_POST["registro_j11_6_sispenfed"];
    $dato["registro_j11_6_otras"] = $_POST["registro_j11_6_otras"];
    $dato["registro_j11_6_otras_cual"] = $_POST["registro_j11_6_otras_cual"];
    $dato["registro_j11_6_noaplica"] = $_POST["registro_j11_6_noaplica"];
     $dato["evaluacion_j12_ind"] = $_POST["evaluacion_j12_ind"];
     $dato["evaluacion_j12_1_cuaind"] = $_POST["evaluacion_j12_1_cuaind"];
     $dato["evaluacion_j12_1_noaplica"] = $_POST["evaluacion_j12_1_noaplica"];
     $dato["evaluacion_j12_2_frec"] = $_POST["evaluacion_j12_2_frec"];
     $dato["evaluacion_j12_2_noaplica"] = $_POST["evaluacion_j12_2_noaplica"];


    $actualizar = ModeloJueces::mdlEditarFJuecesTab5("jueces",  $dato);


    echo $actualizar;
  }else{
    //INSERTA
    $dato["uuid"] = $_POST["uuid"];
    // COLABORACIÓN CON OTRAS INSTITUCIONES
    $dato["colaboracion_j10_col"] = $_POST["colaboracion_j10_col"];
    $dato["colaboracion_j10_1_ins"] = $_POST["colaboracion_j10_1_ins"];
    $dato["colaboracion_j10_1_noaplica"] = $_POST["colaboracion_j10_1_noaplica"];
    $dato["colaboracion_j10_1_nosesabe"] = $_POST["colaboracion_j10_1_nosesabe"];
    $dato["colaboracion_j10_2_fin"] = $_POST["colaboracion_j10_2_fin"];
    $dato["colaboracion_j10_2_don"] = $_POST["colaboracion_j10_2_don"];
    $dato["colaboracion_j10_2_cap"] = $_POST["colaboracion_j10_2_cap"];
    $dato["colaboracion_j10_2_otros"] = $_POST["colaboracion_j10_2_otros"];
    $dato["colaboracion_j10_2_otros_cual"] = $_POST["colaboracion_j10_2_otros_cual"];
    $dato["colaboracion_j10_3_tipcol"] = $_POST["colaboracion_j10_3_tipcol"];
    $dato["colaboracion_j10_3_noaplica"] = $_POST["colaboracion_j10_3_noaplica"];
    $dato["registro_j11_pla"] = $_POST["registro_j11_pla"];
    $dato["registro_j11_ser"] = $_POST["registro_j11_ser"];
    $dato["registro_j11_noaplica"] = $_POST["registro_j11_noaplica"];
    $dato["registro_j11_2_lig"] = $_POST["registro_j11_2_lig"];
    $dato["registro_j11_3_regcap"] = $_POST["registro_j11_3_regcap"];
    $dato["registro_j11_3_regper"] = $_POST["registro_j11_3_regper"];
    $dato["registro_j11_3_regvic"] = $_POST["registro_j11_3_regvic"];
    $dato["registro_j11_3_regaud"] = $_POST["registro_j11_3_regaud"];
    $dato["registro_j11_3_regmed"] = $_POST["registro_j11_3_regmed"];
    $dato["registro_j11_3_regres"] = $_POST["registro_j11_3_regres"];
    $dato["registro_j11_3_regsentip"] = $_POST["registro_j11_3_regsentip"];
    $dato["registro_j11_3_regsendel"] = $_POST["registro_j11_3_regsendel"];
    $dato["registro_j11_3_otros"] = $_POST["registro_j11_3_otros"];
    $dato["registro_j11_3_otros_cuales"] = $_POST["registro_j11_3_otros_cuales"];
    $dato["registro_j11_3_noaplica"] = $_POST["registro_j11_3_noaplica"];
    $dato["registro_j11_3_nosesabe"] = $_POST["registro_j11_3_nosesabe"];
    $dato["registro_j11_4_lib"] = $_POST["registro_j11_4_lib"];
    $dato["registro_j11_4_bd"] = $_POST["registro_j11_4_bd"];
    $dato["registro_j11_4_ap"] = $_POST["registro_j11_4_ap"];
    $dato["registro_j11_4_pla"] = $_POST["registro_j11_4_pla"];
    $dato["registro_j11_4_otro"] = $_POST["registro_j11_4_otro"];
    $dato["registro_j11_4_otro_cual"] = $_POST["registro_j11_4_otro_cual"];
    $dato["registro_j11_4_noaplica"] = $_POST["registro_j11_4_noaplica"];
    $dato["registro_j11_4_nosesabe"] = $_POST["registro_j11_4_nosesabe"];
    $dato["registro_j11_5_int"] = $_POST["registro_j11_5_int"];
    $dato["registro_j11_6_intmun"] = $_POST["registro_j11_6_intmun"];
    $dato["registro_j11_6_intmunotr"] = $_POST["registro_j11_6_intmunotr"];
    $dato["registro_j11_6_intest"] = $_POST["registro_j11_6_intest"];
    $dato["registro_j11_6_intestotr"] = $_POST["registro_j11_6_intestotr"];
    $dato["registro_j11_6_intfed"] = $_POST["registro_j11_6_intfed"];
    $dato["registro_j11_6_guanac"] = $_POST["registro_j11_6_guanac"];
    $dato["registro_j11_6_progen"] = $_POST["registro_j11_6_progen"];
    $dato["registro_j11_6_progenotr"] = $_POST["registro_j11_6_progenotr"];
    $dato["registro_j11_6_fisgen"] = $_POST["registro_j11_6_fisgen"];
    $dato["registro_j11_6_podjudotr"] = $_POST["registro_j11_6_podjudotr"];
    $dato["registro_j11_6_podjud"] = $_POST["registro_j11_6_podjud"];
    $dato["registro_j11_6_sispen"] = $_POST["registro_j11_6_sispen"];
    $dato["registro_j11_6_sispenotr"] = $_POST["registro_j11_6_sispenotr"];
    $dato["registro_j11_6_sispenfed"] = $_POST["registro_j11_6_sispenfed"];
    $dato["registro_j11_6_otras"] = $_POST["registro_j11_6_otras"];
    $dato["registro_j11_6_otras_cual"] = $_POST["registro_j11_6_otras_cual"];
    $dato["registro_j11_6_noaplica"] = $_POST["registro_j11_6_noaplica"];
     $dato["evaluacion_j12_ind"] = $_POST["evaluacion_j12_ind"];
     $dato["evaluacion_j12_1_cuaind"] = $_POST["evaluacion_j12_1_cuaind"];
     $dato["evaluacion_j12_1_noaplica"] = $_POST["evaluacion_j12_1_noaplica"];
     $dato["evaluacion_j12_2_frec"] = $_POST["evaluacion_j12_2_frec"];
     $dato["evaluacion_j12_2_noaplica"] = $_POST["evaluacion_j12_2_noaplica"];


    if($guardar=="ok"){

      $datosGuardados =  ModeloJueces::mdlMostrarJueces("jueces","uuid",  $dato["uuid"]);
      echo  $datosGuardados[0]["id"];
    }else{
      echo $guardar;
    }


  }

}





if (isset($_POST["tab6"])){

  require_once "../modelos/jueces1.modelo.php";

  $idFormulario = $_POST["idFormulario"];
    if($idFormulario > 0){
    $dato["idFormulario"] =$idFormulario;
    $dato["uuid"] = $_POST["uuid"];
    // TRANSPARENCIA
    $dato["transparencia_j13_sen"] = $_POST["transparencia_j13_sen"];

    $dato["transparencia_j13_1_senlig"] = $_POST["transparencia_j13_1_senlig"];

    $dato["transparencia_j13_2_acc"] = $_POST["transparencia_j13_2_acc"];

    $dato["transparencia_j13_3_buepra"] = $_POST["transparencia_j13_3_buepra"];

    $dato["transparencia_j13_4_bueprac_cuales"] = $_POST["transparencia_j13_4_bueprac_cuales"];
    $dato["transparencia_j13_4_noaplica"] = $_POST["transparencia_j13_4_noaplica"];

    $dato["necesidades_j14_capacitacion"] = $_POST["necesidades_j14_capacitacion"];
    $dato["necesidades_j14_recMate"] = $_POST["necesidades_j14_recMate"];
    $dato["necesidades_j14_recTec"] = $_POST["necesidades_j14_recTec"];
    $dato["necesidades_j14_recHum"] = $_POST["necesidades_j14_recHum"];
    $dato["necesidades_j14_infra"] = $_POST["necesidades_j14_infra"];
    $dato["necesidades_j14_mejorasLeg"] = $_POST["necesidades_j14_mejorasLeg"];
    $dato["necesidades_j14_protocolos"] = $_POST["necesidades_j14_protocolos"];
    $dato["necesidades_j14_otras"] = $_POST["necesidades_j14_otras"];
    $dato["necesidades_j14_otrasCuales"] = $_POST["necesidades_j14_otrasCuales"];
    $dato["necesidades_j14_noAplica"] = $_POST["necesidades_j14_noAplica"];
    $dato["necesidades_j14_nosesabe"] = $_POST["necesidades_j14_nosesabe"];

    $dato["necesidades_j14_1_descNece"] = $_POST["necesidades_j14_1_descNece"];
    $dato["necesidades_j14_1_noAplica"] = $_POST["necesidades_j14_1_noAplica"];


    $dato["denunciaserv_j15_1_2_organoEsp"] = $_POST["denunciaserv_j15_1_2_organoEsp"];
    $dato["denunciaserv_j15_1_2_organoEsp_cual"] = $_POST["denunciaserv_j15_1_2_organoEsp_cual"];
    $dato["denunciaserv_j15_1_3_quejasDen"] = $_POST["denunciaserv_j15_1_3_quejasDen"];
    $dato["denunciaserv_j15_1_4_magiM"] = $_POST["denunciaserv_j15_1_4_magiM"];
    $dato["denunciaserv_j15_1_4_magiH"] = $_POST["denunciaserv_j15_1_4_magiH"];


    $dato["denunciaserv_j15_1_4_magi"] = $_POST["denunciaserv_j15_1_4_magi"];


    $dato["denunciaserv_j15_1_4_secEstM"] = $_POST["denunciaserv_j15_1_4_secEstM"];
    $dato["denunciaserv_j15_1_4_secEstH"] = $_POST["denunciaserv_j15_1_4_secEstH"];

        $dato["denunciaserv_j15_1_4_secEst"] = $_POST["denunciaserv_j15_1_4_secEst"];



    $dato["denunciaserv_j15_1_4_jueM"] = $_POST["denunciaserv_j15_1_4_jueM"];
    $dato["denunciaserv_j15_1_4_jueH"] = $_POST["denunciaserv_j15_1_4_jueH"];

    $dato["denunciaserv_j15_1_4_secEstM"] = $_POST["denunciaserv_j15_1_4_secEstM"];
    $dato["denunciaserv_j15_1_4_secEstH"] = $_POST["denunciaserv_j15_1_4_secEstH"];

        $dato["denunciaserv_j15_1_4_secEst"] = $_POST["denunciaserv_j15_1_4_secEst"];

    $dato["denunciaserv_j15_1_4_jue"] = $_POST["denunciaserv_j15_1_4_jue"];
    $dato["denunciaserv_j15_1_4_actuM"] = $_POST["denunciaserv_j15_1_4_actuM"];
    $dato["denunciaserv_j15_1_4_actuH"] = $_POST["denunciaserv_j15_1_4_actuH"];

    $dato["denunciaserv_j15_1_4_actu"] = $_POST["denunciaserv_j15_1_4_actu"];
    $dato["denunciaserv_j15_1_4_carrerajudM"] = $_POST["denunciaserv_j15_1_4_carrerajudM"];
    $dato["denunciaserv_j15_1_4_carrerajudH"] = $_POST["denunciaserv_j15_1_4_carrerajudH"];
    $dato["denunciaserv_j15_1_4_carrerajud"] = $_POST["denunciaserv_j15_1_4_carrerajud"];
    $dato["denunciaserv_j15_1_4_otro"] = $_POST["denunciaserv_j15_1_4_otro"];
    $dato["denunciaserv_j15_1_4_otro_M"] = $_POST["denunciaserv_j15_1_4_otro_M"];
    $dato["denunciaserv_j15_1_4_otro_H"] = $_POST["denunciaserv_j15_1_4_otro_H"];
    $dato["denunciaserv_j15_1_4_otro_T"] = $_POST["denunciaserv_j15_1_4_otro_T"];
    $dato["denunciaserv_j15_1_4_noaplica"] = $_POST["denunciaserv_j15_1_4_noaplica"];
    $dato["denunciaserv_j15_1_4_nosesabe"] = $_POST["denunciaserv_j15_1_4_nosesabe"];

    $dato["denunciaserv_j15_1_5_magi_M"] = $_POST["denunciaserv_j15_1_5_magi_M"];
    $dato["denunciaserv_j15_1_5_magi_H"] = $_POST["denunciaserv_j15_1_5_magi_H"];
    $dato["denunciaserv_j15_1_5_magi_T"] = $_POST["denunciaserv_j15_1_5_magi_T"];
    $dato["denunciaserv_j15_1_5_jue_M"] = $_POST["denunciaserv_j15_1_5_jue_M"];
    $dato["denunciaserv_j15_1_5_jue_H"] = $_POST["denunciaserv_j15_1_5_jue_H"];
    $dato["denunciaserv_j15_1_5_jue_T"] = $_POST["denunciaserv_j15_1_5_jue_T"];
    $dato["denunciaserv_j15_1_5_secEst_M"] = $_POST["denunciaserv_j15_1_5_secEst_M"];
    $dato["denunciaserv_j15_1_5_secEst_H"] = $_POST["denunciaserv_j15_1_5_secEst_H"];
    $dato["denunciaserv_j15_1_5_secEst_T"] = $_POST["denunciaserv_j15_1_5_secEst_T"];
    $dato["denunciaserv_j15_1_5_actu_M"] = $_POST["denunciaserv_j15_1_5_actu_M"];
    $dato["denunciaserv_j15_1_5_actu_H"] = $_POST["denunciaserv_j15_1_5_actu_H"];
    $dato["denunciaserv_j15_1_5_actu_T"] = $_POST["denunciaserv_j15_1_5_actu_T"];
    $dato["denunciaserv_j15_1_5_carrerajud_M"] = $_POST["denunciaserv_j15_1_5_carrerajud_M"];
    $dato["denunciaserv_j15_1_5_carrerajud_H"] = $_POST["denunciaserv_j15_1_5_carrerajud_H"];
    $dato["denunciaserv_j15_1_5_carrerajud_T"] = $_POST["denunciaserv_j15_1_5_carrerajud_T"];
    $dato["denunciaserv_j15_1_5_otros"] = $_POST["denunciaserv_j15_1_5_otros"];
    $dato["denunciaserv_j15_1_5_otro_M"] = $_POST["denunciaserv_j15_1_5_otro_M"];
    $dato["denunciaserv_j15_1_5_otro_H"] = $_POST["denunciaserv_j15_1_5_otro_H"];
    $dato["denunciaserv_j15_1_5_otro_T"] = $_POST["denunciaserv_j15_1_5_otro_T"];
    $dato["denunciaserv_j15_1_5_noaplica"] = $_POST["denunciaserv_j15_1_5_noaplica"];
    $dato["denunciaserv_j15_1_5_nosesabe"] = $_POST["denunciaserv_j15_1_5_nosesabe"];


    $dato["denunciaserv_j15_2_2_magi_M"] = $_POST["denunciaserv_j15_2_2_magi_M"];
    $dato["denunciaserv_j15_2_2_magi_H"] = $_POST["denunciaserv_j15_2_2_magi_H"];
    $dato["denunciaserv_j15_2_2_magi_T"] = $_POST["denunciaserv_j15_2_2_magi_T"];
    $dato["denunciaserv_j15_2_2_jue_M"] = $_POST["denunciaserv_j15_2_2_jue_M"];
    $dato["denunciaserv_j15_2_2_jue_H"] = $_POST["denunciaserv_j15_2_2_jue_H"];
    $dato["denunciaserv_j15_2_2_jue_T"] = $_POST["denunciaserv_j15_2_2_jue_T"];
    $dato["denunciaserv_j15_2_2_secEst_M"] = $_POST["denunciaserv_j15_2_2_secEst_M"];
    $dato["denunciaserv_j15_2_2_secEst_H"] = $_POST["denunciaserv_j15_2_2_secEst_H"];
    $dato["denunciaserv_j15_2_2_secEst_T"] = $_POST["denunciaserv_j15_2_2_secEst_T"];
    $dato["denunciaserv_j15_2_2_actu_M"] = $_POST["denunciaserv_j15_2_2_actu_M"];
    $dato["denunciaserv_j15_2_2_actu_H"] = $_POST["denunciaserv_j15_2_2_actu_H"];
    $dato["denunciaserv_j15_2_2_actu_T"] = $_POST["denunciaserv_j15_2_2_actu_T"];
    $dato["denunciaserv_j15_2_2_carrerajud_M"] = $_POST["denunciaserv_j15_2_2_carrerajud_M"];
    $dato["denunciaserv_j15_2_2_carrerajud_H"] = $_POST["denunciaserv_j15_2_2_carrerajud_H"];
    $dato["denunciaserv_j15_2_2_carrerajud_T"] = $_POST["denunciaserv_j15_2_2_carrerajud_T"];
    $dato["denunciaserv_j15_2_2_otros"] = $_POST["denunciaserv_j15_2_2_otros"];
    $dato["denunciaserv_j15_2_2_otro_M"] = $_POST["denunciaserv_j15_2_2_otro_M"];
    $dato["denunciaserv_j15_2_2_otro_H"] = $_POST["denunciaserv_j15_2_2_otro_H"];
    $dato["denunciaserv_j15_2_2_otro_H"] = $_POST["denunciaserv_j15_2_2_otro_H"];
    $dato["denunciaserv_j15_2_2_noaplica"] = $_POST["denunciaserv_j15_2_2_noaplica"];
    $dato["denunciaserv_j15_2_2_nosesabe"] = $_POST["denunciaserv_j15_2_2_nosesabe"];

    $dato["denunciaserv_j15_2_3_magi_M"] = $_POST["denunciaserv_j15_2_3_magi_M"];
    $dato["denunciaserv_j15_2_3_magi_H"] = $_POST["denunciaserv_j15_2_3_magi_H"];
    $dato["denunciaserv_j15_2_3_magi"] = $_POST["denunciaserv_j15_2_3_magi"];
    $dato["denunciaserv_j15_2_3_jue_M"] = $_POST["denunciaserv_j15_2_3_jue_M"];
    $dato["denunciaserv_j15_2_3_jue_H"] = $_POST["denunciaserv_j15_2_3_jue_H"];
    $dato["denunciaserv_j15_2_3_jue"] = $_POST["denunciaserv_j15_2_3_jue"];
    $dato["denunciaserv_j15_2_3_secEst_M"] = $_POST["denunciaserv_j15_2_3_secEst_M"];
    $dato["denunciaserv_j15_2_3_secEst_H"] = $_POST["denunciaserv_j15_2_3_secEst_H"];
    $dato["denunciaserv_j15_2_3_secEst"] = $_POST["denunciaserv_j15_2_3_secEst"];
    $dato["denunciaserv_j15_2_3_actu_M"] = $_POST["denunciaserv_j15_2_3_actu_M"];
    $dato["denunciaserv_j15_2_3_actu_H"] = $_POST["denunciaserv_j15_2_3_actu_H"];
    $dato["denunciaserv_j15_2_3_actu"] = $_POST["denunciaserv_j15_2_3_actu"];
    $dato["denunciaserv_j15_2_3_carrerajud_M"] = $_POST["denunciaserv_j15_2_3_carrerajud_M"];
    $dato["denunciaserv_j15_2_3_carrerajud_H"] = $_POST["denunciaserv_j15_2_3_carrerajud_H"];
    $dato["denunciaserv_j15_2_3_carrerajud"] = $_POST["denunciaserv_j15_2_3_carrerajud"];
    $dato["denunciaserv_j15_2_3_otro"] = $_POST["denunciaserv_j15_2_3_otro"];
    $dato["denunciaserv_j15_2_3_otro_M"] = $_POST["denunciaserv_j15_2_3_otro_M"];
    $dato["denunciaserv_j15_2_3_otro_H"] = $_POST["denunciaserv_j15_2_3_otro_H"];
    $dato["denunciaserv_j15_2_3_otro_T"] = $_POST["denunciaserv_j15_2_3_otro_T"];
    $dato["denunciaserv_j15_2_3_noaplica"] = $_POST["denunciaserv_j15_2_3_noaplica"];
    $dato["denunciaserv_j15_2_3_nosesabe"] = $_POST["denunciaserv_j15_2_3_nosesabe"];

    $actualizar = ModeloJueces::mdlEditarFJuecesTab6("jueces",  $dato);


    echo $actualizar;
  }else{
    //INSERTA
    $dato["uuid"] = $_POST["uuid"];
    // TRANSPARENCIA
    $dato["transparencia_j13_sen"] = $_POST["transparencia_j13_sen"];

    $dato["transparencia_j13_1_senlig"] = $_POST["transparencia_j13_1_senlig"];

    $dato["transparencia_j13_2_acc"] = $_POST["transparencia_j13_2_acc"];

    $dato["transparencia_j13_3_buepra"] = $_POST["transparencia_j13_3_buepra"];

    $dato["transparencia_j13_4_bueprac_cuales"] = $_POST["transparencia_j13_4_bueprac_cuales"];
    $dato["transparencia_j13_4_noaplica"] = $_POST["transparencia_j13_4_noaplica"];

    $dato["necesidades_j14_capacitacion"] = $_POST["necesidades_j14_capacitacion"];
    $dato["necesidades_j14_recMate"] = $_POST["necesidades_j14_recMate"];
    $dato["necesidades_j14_recTec"] = $_POST["necesidades_j14_recTec"];
    $dato["necesidades_j14_recHum"] = $_POST["necesidades_j14_recHum"];
    $dato["necesidades_j14_infra"] = $_POST["necesidades_j14_infra"];
    $dato["necesidades_j14_mejorasLeg"] = $_POST["necesidades_j14_mejorasLeg"];
    $dato["necesidades_j14_protocolos"] = $_POST["necesidades_j14_protocolos"];
    $dato["necesidades_j14_otras"] = $_POST["necesidades_j14_otras"];
    $dato["necesidades_j14_otrasCuales"] = $_POST["necesidades_j14_otrasCuales"];
    $dato["necesidades_j14_noAplica"] = $_POST["necesidades_j14_noAplica"];
    $dato["necesidades_j14_nosesabe"] = $_POST["necesidades_j14_nosesabe"];

    $dato["necesidades_j14_1_descNece"] = $_POST["necesidades_j14_1_descNece"];
    $dato["necesidades_j14_1_noAplica"] = $_POST["necesidades_j14_1_noAplica"];


    $dato["denunciaserv_j15_1_2_organoEsp"] = $_POST["denunciaserv_j15_1_2_organoEsp"];
    $dato["denunciaserv_j15_1_2_organoEsp_cual"] = $_POST["denunciaserv_j15_1_2_organoEsp_cual"];
    $dato["denunciaserv_j15_1_3_quejasDen"] = $_POST["denunciaserv_j15_1_3_quejasDen"];
    $dato["denunciaserv_j15_1_4_magiM"] = $_POST["denunciaserv_j15_1_4_magiM"];
    $dato["denunciaserv_j15_1_4_magiH"] = $_POST["denunciaserv_j15_1_4_magiH"];


    $dato["denunciaserv_j15_1_4_magi"] = $_POST["denunciaserv_j15_1_4_magi"];


    $dato["denunciaserv_j15_1_4_secEstM"] = $_POST["denunciaserv_j15_1_4_secEstM"];
    $dato["denunciaserv_j15_1_4_secEstH"] = $_POST["denunciaserv_j15_1_4_secEstH"];

        $dato["denunciaserv_j15_1_4_secEst"] = $_POST["denunciaserv_j15_1_4_secEst"];



    $dato["denunciaserv_j15_1_4_jueM"] = $_POST["denunciaserv_j15_1_4_jueM"];
    $dato["denunciaserv_j15_1_4_jueH"] = $_POST["denunciaserv_j15_1_4_jueH"];

    $dato["denunciaserv_j15_1_4_jue"] = $_POST["denunciaserv_j15_1_4_jue"];
    $dato["denunciaserv_j15_1_4_actuM"] = $_POST["denunciaserv_j15_1_4_actuM"];
    $dato["denunciaserv_j15_1_4_actuH"] = $_POST["denunciaserv_j15_1_4_actuH"];

    $dato["denunciaserv_j15_1_4_actu"] = $_POST["denunciaserv_j15_1_4_actu"];
    $dato["denunciaserv_j15_1_4_carrerajudM"] = $_POST["denunciaserv_j15_1_4_carrerajudM"];
    $dato["denunciaserv_j15_1_4_carrerajudH"] = $_POST["denunciaserv_j15_1_4_carrerajudH"];

    $dato["denunciaserv_j15_1_4_carrerajud"] = $_POST["denunciaserv_j15_1_4_carrerajud"];
    $dato["denunciaserv_j15_1_4_otro"] = $_POST["denunciaserv_j15_1_4_otro"];
    $dato["denunciaserv_j15_1_4_otro_M"] = $_POST["denunciaserv_j15_1_4_otro_M"];
    $dato["denunciaserv_j15_1_4_otro_H"] = $_POST["denunciaserv_j15_1_4_otro_H"];
    $dato["denunciaserv_j15_1_4_otro_T"] = $_POST["denunciaserv_j15_1_4_otro_T"];
    $dato["denunciaserv_j15_1_4_noaplica"] = $_POST["denunciaserv_j15_1_4_noaplica"];
    $dato["denunciaserv_j15_1_4_nosesabe"] = $_POST["denunciaserv_j15_1_4_nosesabe"];

    $dato["denunciaserv_j15_1_5_magi_M"] = $_POST["denunciaserv_j15_1_5_magi_M"];
    $dato["denunciaserv_j15_1_5_magi_H"] = $_POST["denunciaserv_j15_1_5_magi_H"];
    $dato["denunciaserv_j15_1_5_magi_T"] = $_POST["denunciaserv_j15_1_5_magi_T"];
    $dato["denunciaserv_j15_1_5_jue_M"] = $_POST["denunciaserv_j15_1_5_jue_M"];
    $dato["denunciaserv_j15_1_5_jue_H"] = $_POST["denunciaserv_j15_1_5_jue_H"];
    $dato["denunciaserv_j15_1_5_jue_T"] = $_POST["denunciaserv_j15_1_5_jue_T"];
    $dato["denunciaserv_j15_1_5_secEst_M"] = $_POST["denunciaserv_j15_1_5_secEst_M"];
    $dato["denunciaserv_j15_1_5_secEst_H"] = $_POST["denunciaserv_j15_1_5_secEst_H"];
    $dato["denunciaserv_j15_1_5_secEst_T"] = $_POST["denunciaserv_j15_1_5_secEst_T"];
    $dato["denunciaserv_j15_1_5_actu_M"] = $_POST["denunciaserv_j15_1_5_actu_M"];
    $dato["denunciaserv_j15_1_5_actu_H"] = $_POST["denunciaserv_j15_1_5_actu_H"];
    $dato["denunciaserv_j15_1_5_actu_T"] = $_POST["denunciaserv_j15_1_5_actu_T"];
    $dato["denunciaserv_j15_1_5_carrerajud_M"] = $_POST["denunciaserv_j15_1_5_carrerajud_M"];
    $dato["denunciaserv_j15_1_5_carrerajud_H"] = $_POST["denunciaserv_j15_1_5_carrerajud_H"];
    $dato["denunciaserv_j15_1_5_carrerajud_T"] = $_POST["denunciaserv_j15_1_5_carrerajud_T"];
    $dato["denunciaserv_j15_1_5_otros"] = $_POST["denunciaserv_j15_1_5_otros"];
    $dato["denunciaserv_j15_1_5_otro_M"] = $_POST["denunciaserv_j15_1_5_otro_M"];
    $dato["denunciaserv_j15_1_5_otro_H"] = $_POST["denunciaserv_j15_1_5_otro_H"];
    $dato["denunciaserv_j15_1_5_otro_T"] = $_POST["denunciaserv_j15_1_5_otro_T"];
    $dato["denunciaserv_j15_1_5_noaplica"] = $_POST["denunciaserv_j15_1_5_noaplica"];
    $dato["denunciaserv_j15_1_5_nosesabe"] = $_POST["denunciaserv_j15_1_5_nosesabe"];


    $dato["denunciaserv_j15_2_2_magi_M"] = $_POST["denunciaserv_j15_2_2_magi_M"];
    $dato["denunciaserv_j15_2_2_magi_H"] = $_POST["denunciaserv_j15_2_2_magi_H"];
    $dato["denunciaserv_j15_2_2_magi_T"] = $_POST["denunciaserv_j15_2_2_magi_T"];
    $dato["denunciaserv_j15_2_2_jue_M"] = $_POST["denunciaserv_j15_2_2_jue_M"];
    $dato["denunciaserv_j15_2_2_jue_H"] = $_POST["denunciaserv_j15_2_2_jue_H"];
    $dato["denunciaserv_j15_2_2_jue_T"] = $_POST["denunciaserv_j15_2_2_jue_T"];
    $dato["denunciaserv_j15_2_2_secEst_M"] = $_POST["denunciaserv_j15_2_2_secEst_M"];
    $dato["denunciaserv_j15_2_2_secEst_H"] = $_POST["denunciaserv_j15_2_2_secEst_H"];
    $dato["denunciaserv_j15_2_2_secEst_T"] = $_POST["denunciaserv_j15_2_2_secEst_T"];
    $dato["denunciaserv_j15_2_2_actu_M"] = $_POST["denunciaserv_j15_2_2_actu_M"];
    $dato["denunciaserv_j15_2_2_actu_H"] = $_POST["denunciaserv_j15_2_2_actu_H"];
    $dato["denunciaserv_j15_2_2_actu_T"] = $_POST["denunciaserv_j15_2_2_actu_T"];
    $dato["denunciaserv_j15_2_2_carrerajud_M"] = $_POST["denunciaserv_j15_2_2_carrerajud_M"];
    $dato["denunciaserv_j15_2_2_carrerajud_H"] = $_POST["denunciaserv_j15_2_2_carrerajud_H"];
    $dato["denunciaserv_j15_2_2_carrerajud_T"] = $_POST["denunciaserv_j15_2_2_carrerajud_T"];
    $dato["denunciaserv_j15_2_2_otros"] = $_POST["denunciaserv_j15_2_2_otros"];
    $dato["denunciaserv_j15_2_2_otro_M"] = $_POST["denunciaserv_j15_2_2_otro_M"];
    $dato["denunciaserv_j15_2_2_otro_H"] = $_POST["denunciaserv_j15_2_2_otro_H"];
    $dato["denunciaserv_j15_2_2_otro_H"] = $_POST["denunciaserv_j15_2_2_otro_H"];
    $dato["denunciaserv_j15_2_2_noaplica"] = $_POST["denunciaserv_j15_2_2_noaplica"];
    $dato["denunciaserv_j15_2_2_nosesabe"] = $_POST["denunciaserv_j15_2_2_nosesabe"];

    $dato["denunciaserv_j15_2_3_magi_M"] = $_POST["denunciaserv_j15_2_3_magi_M"];
    $dato["denunciaserv_j15_2_3_magi_H"] = $_POST["denunciaserv_j15_2_3_magi_H"];
    $dato["denunciaserv_j15_2_3_magi"] = $_POST["denunciaserv_j15_2_3_magi"];
    $dato["denunciaserv_j15_2_3_jue_M"] = $_POST["denunciaserv_j15_2_3_jue_M"];
    $dato["denunciaserv_j15_2_3_jue_H"] = $_POST["denunciaserv_j15_2_3_jue_H"];
    $dato["denunciaserv_j15_2_3_jue"] = $_POST["denunciaserv_j15_2_3_jue"];
    $dato["denunciaserv_j15_2_3_secEst_M"] = $_POST["denunciaserv_j15_2_3_secEst_M"];
    $dato["denunciaserv_j15_2_3_secEst_H"] = $_POST["denunciaserv_j15_2_3_secEst_H"];
    $dato["denunciaserv_j15_2_3_secEst"] = $_POST["denunciaserv_j15_2_3_secEst"];
    $dato["denunciaserv_j15_2_3_actu_M"] = $_POST["denunciaserv_j15_2_3_actu_M"];
    $dato["denunciaserv_j15_2_3_actu_H"] = $_POST["denunciaserv_j15_2_3_actu_H"];
    $dato["denunciaserv_j15_2_3_actu"] = $_POST["denunciaserv_j15_2_3_actu"];
    $dato["denunciaserv_j15_2_3_carrerajud_M"] = $_POST["denunciaserv_j15_2_3_carrerajud_M"];
    $dato["denunciaserv_j15_2_3_carrerajud_H"] = $_POST["denunciaserv_j15_2_3_carrerajud_H"];
    $dato["denunciaserv_j15_2_3_carrerajud"] = $_POST["denunciaserv_j15_2_3_carrerajud"];
    $dato["denunciaserv_j15_2_3_otro"] = $_POST["denunciaserv_j15_2_3_otro"];
    $dato["denunciaserv_j15_2_3_otro_M"] = $_POST["denunciaserv_j15_2_3_otro_M"];
    $dato["denunciaserv_j15_2_3_otro_H"] = $_POST["denunciaserv_j15_2_3_otro_H"];
    $dato["denunciaserv_j15_2_3_otro_T"] = $_POST["denunciaserv_j15_2_3_otro_T"];
    $dato["denunciaserv_j15_2_3_noaplica"] = $_POST["denunciaserv_j15_2_3_noaplica"];
    $dato["denunciaserv_j15_2_3_nosesabe"] = $_POST["denunciaserv_j15_2_3_nosesabe"];


    if($guardar=="ok"){

      $datosGuardados =  ModeloJueces::mdlMostrarJueces("jueces","uuid",  $dato["uuid"]);
      echo  $datosGuardados[0]["id"];
    }else{
      echo $guardar;
    }


  }

}




if (isset($_POST["tab7"])){

  require_once "../modelos/jueces1.modelo.php";

  $idFormulario = $_POST["idFormulario"];
    if($idFormulario > 0){
    $dato["idFormulario"] =$idFormulario;
    $dato["uuid"] = $_POST["uuid"];
    $dato["autovinculacion_j16_vinculacion_M"] = $_POST["autovinculacion_j16_vinculacion_M"];
    $dato["autovinculacion_j16_vinculacion_H"] = $_POST["autovinculacion_j16_vinculacion_H"];
    $dato["autovinculacion_j16_vinculacion_T"] = $_POST["autovinculacion_j16_vinculacion_T"];
    $dato["autovinculacion_j16_novinculacion_M"] = $_POST["autovinculacion_j16_novinculacion_M"];
    $dato["autovinculacion_j16_novinculacion_H"] = $_POST["autovinculacion_j16_novinculacion_H"];
    $dato["autovinculacion_j16_novinculacion_T"] = $_POST["autovinculacion_j16_novinculacion_T"];
    $dato["autovinculacion_j16_total_M"] = $_POST["autovinculacion_j16_total_M"];
    $dato["autovinculacion_j16_total_H"] = $_POST["autovinculacion_j16_total_H"];
    $dato["autovinculacion_j16_total_T"] = $_POST["autovinculacion_j16_total_T"];

    $dato["autovinculacion_j16_1_mayor18_M"] = $_POST["autovinculacion_j16_1_mayor18_M"];
    $dato["autovinculacion_j16_1_mayor18_H"] = $_POST["autovinculacion_j16_1_mayor18_H"];
    $dato["autovinculacion_j16_1_mayor18_T"] = $_POST["autovinculacion_j16_1_mayor18_T"];
    $dato["autovinculacion_j16_1_menor18_M"] = $_POST["autovinculacion_j16_1_menor18_M"];
    $dato["autovinculacion_j16_1_menor18_H"] = $_POST["autovinculacion_j16_1_menor18_H"];
    $dato["autovinculacion_j16_1_menor18_T"] = $_POST["autovinculacion_j16_1_menor18_T"];
    $dato["autovinculacion_j16_1_total_M"] = $_POST["autovinculacion_j16_1_total_M"];
    $dato["autovinculacion_j16_1_total_H"] = $_POST["autovinculacion_j16_1_total_H"];
    $dato["autovinculacion_j16_1_total_T"] = $_POST["autovinculacion_j16_1_total_T"];

    $dato["autovinculacion_j16_2_homicidio_M"] = $_POST["autovinculacion_j16_2_homicidio_M"];
    $dato["autovinculacion_j16_2_homicidio_H"] = $_POST["autovinculacion_j16_2_homicidio_H"];
    $dato["autovinculacion_j16_2_homicidio_T"] = $_POST["autovinculacion_j16_2_homicidio_T"];
    $dato["autovinculacion_j16_2_feminicidio_M"] = $_POST["autovinculacion_j16_2_feminicidio_M"];
    $dato["autovinculacion_j16_2_feminicidio_H"] = $_POST["autovinculacion_j16_2_feminicidio_H"];
    $dato["autovinculacion_j16_2_feminicidio_T"] = $_POST["autovinculacion_j16_2_feminicidio_T"];
    $dato["autovinculacion_j16_2_lesiones_M"] = $_POST["autovinculacion_j16_2_lesiones_M"];
    $dato["autovinculacion_j16_2_lesiones_H"] = $_POST["autovinculacion_j16_2_lesiones_H"];
    $dato["autovinculacion_j16_2_lesiones_T"] = $_POST["autovinculacion_j16_2_lesiones_T"];
    $dato["autovinculacion_j16_2_violFam_M"] = $_POST["autovinculacion_j16_2_violFam_M"];
    $dato["autovinculacion_j16_2_violFam_H"] = $_POST["autovinculacion_j16_2_violFam_H"];
    $dato["autovinculacion_j16_2_violFam_T"] = $_POST["autovinculacion_j16_2_violFam_T"];
    $dato["autovinculacion_j16_2_abuSex_M"] = $_POST["autovinculacion_j16_2_abuSex_M"];
    $dato["autovinculacion_j16_2_abuSex_H"] = $_POST["autovinculacion_j16_2_abuSex_H"];
    $dato["autovinculacion_j16_2_abuSex_T"] = $_POST["autovinculacion_j16_2_abuSex_T"];
    $dato["autovinculacion_j16_2_hostSex_M"] = $_POST["autovinculacion_j16_2_hostSex_M"];
    $dato["autovinculacion_j16_2_hostSex_H"] = $_POST["autovinculacion_j16_2_hostSex_H"];
    $dato["autovinculacion_j16_2_hostSex_T"] = $_POST["autovinculacion_j16_2_hostSex_T"];
    $dato["autovinculacion_j16_2_violacion_M"] = $_POST["autovinculacion_j16_2_violacion_M"];
    $dato["autovinculacion_j16_2_violacion_H"] = $_POST["autovinculacion_j16_2_violacion_H"];
    $dato["autovinculacion_j16_2_violacion_T"] = $_POST["autovinculacion_j16_2_violacion_T"];
    $dato["autovinculacion_j16_2_trata_M"] = $_POST["autovinculacion_j16_2_trata_M"];
    $dato["autovinculacion_j16_2_trata_H"] = $_POST["autovinculacion_j16_2_trata_H"];
    $dato["autovinculacion_j16_2_trata_T"] = $_POST["autovinculacion_j16_2_trata_T"];
    $dato["autovinculacion_j16_2_corrup_M"] = $_POST["autovinculacion_j16_2_corrup_M"];
    $dato["autovinculacion_j16_2_corrup_H"] = $_POST["autovinculacion_j16_2_corrup_H"];
    $dato["autovinculacion_j16_2_corrup_T"] = $_POST["autovinculacion_j16_2_corrup_T"];
    $dato["autovinculacion_j16_2_traMen_M"] = $_POST["autovinculacion_j16_2_traMen_M"];
    $dato["autovinculacion_j16_2_traMen_H"] = $_POST["autovinculacion_j16_2_traMen_H"];
    $dato["autovinculacion_j16_2_traMen_T"] = $_POST["autovinculacion_j16_2_traMen_T"];
    $dato["autovinculacion_j16_2_otros"] = $_POST["autovinculacion_j16_2_otros"];
    $dato["autovinculacion_j16_2_otros_M"] = $_POST["autovinculacion_j16_2_otros_M"];
    $dato["autovinculacion_j16_2_otros_H"] = $_POST["autovinculacion_j16_2_otros_H"];
    $dato["autovinculacion_j16_2_otros_T"] = $_POST["autovinculacion_j16_2_otros_T"];
    $dato["autovinculacion_j16_2_nosesabe"] = $_POST["autovinculacion_j16_2_nosesabe"];

    $dato["solucion_j17_suspCond_M"] = $_POST["solucion_j17_suspCond_M"];
    $dato["solucion_j17_suspCond_H"] = $_POST["solucion_j17_suspCond_H"];
    $dato["solucion_j17_suspCond_T"] = $_POST["solucion_j17_suspCond_T"];
    $dato["solucion_j17_acuerdo_M"] = $_POST["solucion_j17_acuerdo_M"];
    $dato["solucion_j17_acuerdo_H"] = $_POST["solucion_j17_acuerdo_H"];
    $dato["solucion_j17_acuerdo_T"] = $_POST["solucion_j17_acuerdo_T"];
    $dato["solucion_j17_total_M"] = $_POST["solucion_j17_total_M"];
    $dato["solucion_j17_total_H"] = $_POST["solucion_j17_total_H"];
    $dato["solucion_j17_total_T"] = $_POST["solucion_j17_total_T"];

    $dato["medida_j18_medidaCau_M"] = $_POST["medida_j18_medidaCau_M"];
    $dato["medida_j18_medidaCau_H"] = $_POST["medida_j18_medidaCau_H"];
    $dato["medida_j18_medidaCau_T"] = $_POST["medida_j18_medidaCau_T"];

    $dato["medida_j18_1_presePeri_M"] = $_POST["medida_j18_1_presePeri_M"];
    $dato["medida_j18_1_presePeri_H"] = $_POST["medida_j18_1_presePeri_H"];
    $dato["medida_j18_1_presePeri_T"] = $_POST["medida_j18_1_presePeri_T"];
    $dato["medida_j18_1_garantia_M"] = $_POST["medida_j18_1_garantia_M"];
    $dato["medida_j18_1_garantia_H"] = $_POST["medida_j18_1_garantia_H"];
    $dato["medida_j18_1_garantia_T"] = $_POST["medida_j18_1_garantia_T"];
    $dato["medida_j18_1_embargo_M"] = $_POST["medida_j18_1_embargo_M"];
    $dato["medida_j18_1_embargo_H"] = $_POST["medida_j18_1_embargo_H"];
    $dato["medida_j18_1_embargo_T"] = $_POST["medida_j18_1_embargo_T"];
    $dato["medida_j18_1_inmoCue_M"] = $_POST["medida_j18_1_inmoCue_M"];
    $dato["medida_j18_1_inmoCue_H"] = $_POST["medida_j18_1_inmoCue_H"];
    $dato["medida_j18_1_inmoCue_T"] = $_POST["medida_j18_1_inmoCue_T"];
    $dato["medida_j18_1_some_M"] = $_POST["medida_j18_1_some_M"];
    $dato["medida_j18_1_some_H"] = $_POST["medida_j18_1_some_H"];
    $dato["medida_j18_1_some_T"] = $_POST["medida_j18_1_some_T"];
    $dato["medida_j18_1_prohi_M"] = $_POST["medida_j18_1_prohi_M"];
    $dato["medida_j18_1_prohi_H"] = $_POST["medida_j18_1_prohi_H"];
    $dato["medida_j18_1_prohi_T"] = $_POST["medida_j18_1_prohi_T"];
    $dato["medida_j18_1_proConv_M"] = $_POST["medida_j18_1_proConv_M"];
    $dato["medida_j18_1_proConv_H"] = $_POST["medida_j18_1_proConv_H"];
    $dato["medida_j18_1_proConv_T"] = $_POST["medida_j18_1_proConv_T"];
    $dato["medida_j18_1_separa_M"] = $_POST["medida_j18_1_separa_M"];
    $dato["medida_j18_1_separa_H"] = $_POST["medida_j18_1_separa_H"];
    $dato["medida_j18_1_separa_T"] = $_POST["medida_j18_1_separa_T"];
    $dato["medida_j18_1_susp_M"] = $_POST["medida_j18_1_susp_M"];
    $dato["medida_j18_1_susp_H"] = $_POST["medida_j18_1_susp_H"];
    $dato["medida_j18_1_susp_T"] = $_POST["medida_j18_1_susp_T"];
    $dato["medida_j18_1_suspDet_M"] = $_POST["medida_j18_1_suspDet_M"];
    $dato["medida_j18_1_suspDet_H"] = $_POST["medida_j18_1_suspDet_H"];
    $dato["medida_j18_1_suspDet_T"] = $_POST["medida_j18_1_suspDet_T"];
    $dato["medida_j18_1_coloca_M"] = $_POST["medida_j18_1_coloca_M"];
    $dato["medida_j18_1_coloca_H"] = $_POST["medida_j18_1_coloca_H"];
    $dato["medida_j18_1_coloca_T"] = $_POST["medida_j18_1_coloca_T"];
    $dato["medida_j18_1_resguardo_M"] = $_POST["medida_j18_1_resguardo_M"];
    $dato["medida_j18_1_resguardo_H"] = $_POST["medida_j18_1_resguardo_H"];
    $dato["medida_j18_1_resguardo_T"] = $_POST["medida_j18_1_resguardo_T"];
    $dato["medida_j18_1_prision_M"] = $_POST["medida_j18_1_prision_M"];
    $dato["medida_j18_1_prision_H"] = $_POST["medida_j18_1_prision_H"];
    $dato["medida_j18_1_prision_T"] = $_POST["medida_j18_1_prision_T"];
    $dato["medida_j18_1_otros"] = $_POST["medida_j18_1_otros"];
    $dato["medida_j18_1_otros_M"] = $_POST["medida_j18_1_otros_M"];
    $dato["medida_j18_1_otros_H"] = $_POST["medida_j18_1_otros_H"];
    $dato["medida_j18_1_otros_T"] = $_POST["medida_j18_1_otros_T"];
    $dato["medida_j18_1_nosesabe"] = $_POST["medida_j18_1_nosesabe"];

    $dato["medida_j18_2_dicto_M"] = $_POST["medida_j18_2_dicto_M"];
    $dato["medida_j18_2_dicto_H"] = $_POST["medida_j18_2_dicto_H"];
    $dato["medida_j18_2_dicto_T"] = $_POST["medida_j18_2_dicto_T"];

    $dato["medida_j18_3_presePeri_M"] = $_POST["medida_j18_3_presePeri_M"];
    $dato["medida_j18_3_presePeri_H"] = $_POST["medida_j18_3_presePeri_H"];
    $dato["medida_j18_3_presePeri_T"] = $_POST["medida_j18_3_presePeri_T"];
    $dato["medida_j18_3_garantia_M"] = $_POST["medida_j18_3_garantia_M"];
    $dato["medida_j18_3_garantia_H"] = $_POST["medida_j18_3_garantia_H"];
    $dato["medida_j18_3_garantia_T"] = $_POST["medida_j18_3_garantia_T"];
    $dato["medida_j18_3_embargo_M"] = $_POST["medida_j18_3_embargo_M"];
    $dato["medida_j18_3_embargo_H"] = $_POST["medida_j18_3_embargo_H"];
    $dato["medida_j18_3_embargo_T"] = $_POST["medida_j18_3_embargo_T"];
    $dato["medida_j18_3_inmoCue_M"] = $_POST["medida_j18_3_inmoCue_M"];
    $dato["medida_j18_3_inmoCue_H"] = $_POST["medida_j18_3_inmoCue_H"];
    $dato["medida_j18_3_inmoCue_T"] = $_POST["medida_j18_3_inmoCue_T"];
    $dato["medida_j18_3_some_M"] = $_POST["medida_j18_3_some_M"];
    $dato["medida_j18_3_some_H"] = $_POST["medida_j18_3_some_H"];
    $dato["medida_j18_3_some_T"] = $_POST["medida_j18_3_some_T"];
    $dato["medida_j18_3_prohi_M"] = $_POST["medida_j18_3_prohi_M"];
    $dato["medida_j18_3_prohi_H"] = $_POST["medida_j18_3_prohi_H"];
    $dato["medida_j18_3_prohi_T"] = $_POST["medida_j18_3_prohi_T"];
    $dato["medida_j18_3_proConv_M"] = $_POST["medida_j18_3_proConv_M"];
    $dato["medida_j18_3_proConv_H"] = $_POST["medida_j18_3_proConv_H"];
    $dato["medida_j18_3_proConv_T"] = $_POST["medida_j18_3_proConv_T"];
    $dato["medida_j18_3_separa_M"] = $_POST["medida_j18_3_separa_M"];
    $dato["medida_j18_3_separa_H"] = $_POST["medida_j18_3_separa_H"];
    $dato["medida_j18_3_separa_T"] = $_POST["medida_j18_3_separa_T"];
    $dato["medida_j18_3_susp_M"] = $_POST["medida_j18_3_susp_M"];
    $dato["medida_j18_3_susp_H"] = $_POST["medida_j18_3_susp_H"];
    $dato["medida_j18_3_susp_T"] = $_POST["medida_j18_3_susp_T"];
    $dato["medida_j18_3_suspDet_M"] = $_POST["medida_j18_3_suspDet_M"];
    $dato["medida_j18_3_suspDet_H"] = $_POST["medida_j18_3_suspDet_H"];
    $dato["medida_j18_3_suspDet_T"] = $_POST["medida_j18_3_suspDet_T"];
    $dato["medida_j18_3_coloca_M"] = $_POST["medida_j18_3_coloca_M"];
    $dato["medida_j18_3_coloca_H"] = $_POST["medida_j18_3_coloca_H"];
    $dato["medida_j18_3_coloca_T"] = $_POST["medida_j18_3_coloca_T"];
    $dato["medida_j18_3_resguardo_M"] = $_POST["medida_j18_3_resguardo_M"];
    $dato["medida_j18_3_resguardo_H"] = $_POST["medida_j18_3_resguardo_H"];
    $dato["medida_j18_3_resguardo_T"] = $_POST["medida_j18_3_resguardo_T"];
    $dato["medida_j18_3_prision_M"] = $_POST["medida_j18_3_prision_M"];
    $dato["medida_j18_3_prision_H"] = $_POST["medida_j18_3_prision_H"];
    $dato["medida_j18_3_prision_T"] = $_POST["medida_j18_3_prision_T"];
    $dato["medida_j18_3_otros"] = $_POST["medida_j18_3_otros"];
    $dato["medida_j18_3_otros_M"] = $_POST["medida_j18_3_otros_M"];
    $dato["medida_j18_3_otros_H"] = $_POST["medida_j18_3_otros_H"];
    $dato["medida_j18_3_otros_T"] = $_POST["medida_j18_3_otros_T"];

    $dato["audiencias_j19_audCele"] = $_POST["audiencias_j19_audCele"];
    $dato["audiencias_j19_audAnul"] = $_POST["audiencias_j19_audAnul"];
    $dato["audiencias_j19_audDif"] = $_POST["audiencias_j19_audDif"];
    $dato["audiencias_j19_otras"] = $_POST["audiencias_j19_otras"];
    $dato["audiencias_j19_otrasCual"] = $_POST["audiencias_j19_otrasCual"];
    $dato["audiencias_j19_total"] = $_POST["audiencias_j19_total"];

    $dato["audiencias_j19_1_iniciales"] = $_POST["audiencias_j19_1_iniciales"];
    $dato["audiencias_j19_1_inter"] = $_POST["audiencias_j19_1_inter"];
    $dato["audiencias_j19_1_juicioOr"] = $_POST["audiencias_j19_1_juicioOr"];
    $dato["audiencias_j19_1_sentencia"] = $_POST["audiencias_j19_1_sentencia"];
    $dato["audiencias_j19_1_sanciones"] = $_POST["audiencias_j19_1_sanciones"];
    $dato["audiencias_j19_1_total"] = $_POST["audiencias_j19_1_total"];


    $actualizar = ModeloJueces::mdlEditarFJuecesTab7("jueces",  $dato);


    echo $actualizar;
  }else{
    //INSERTA
    $dato["uuid"] = $_POST["uuid"];

    $dato["autovinculacion_j16_vinculacion_M"] = $_POST["autovinculacion_j16_vinculacion_M"];
    $dato["autovinculacion_j16_vinculacion_H"] = $_POST["autovinculacion_j16_vinculacion_H"];
    $dato["autovinculacion_j16_vinculacion_T"] = $_POST["autovinculacion_j16_vinculacion_T"];
    $dato["autovinculacion_j16_novinculacion_M"] = $_POST["autovinculacion_j16_novinculacion_M"];
    $dato["autovinculacion_j16_novinculacion_H"] = $_POST["autovinculacion_j16_novinculacion_H"];
    $dato["autovinculacion_j16_novinculacion_T"] = $_POST["autovinculacion_j16_novinculacion_T"];
    $dato["autovinculacion_j16_total_M"] = $_POST["autovinculacion_j16_total_M"];
    $dato["autovinculacion_j16_total_H"] = $_POST["autovinculacion_j16_total_H"];
    $dato["autovinculacion_j16_total_T"] = $_POST["autovinculacion_j16_total_T"];

    $dato["autovinculacion_j16_1_mayor18_M"] = $_POST["autovinculacion_j16_1_mayor18_M"];
    $dato["autovinculacion_j16_1_mayor18_H"] = $_POST["autovinculacion_j16_1_mayor18_H"];
    $dato["autovinculacion_j16_1_mayor18_T"] = $_POST["autovinculacion_j16_1_mayor18_T"];
    $dato["autovinculacion_j16_1_menor18_M"] = $_POST["autovinculacion_j16_1_menor18_M"];
    $dato["autovinculacion_j16_1_menor18_H"] = $_POST["autovinculacion_j16_1_menor18_H"];
    $dato["autovinculacion_j16_1_menor18_T"] = $_POST["autovinculacion_j16_1_menor18_T"];
    $dato["autovinculacion_j16_1_total_M"] = $_POST["autovinculacion_j16_1_total_M"];
    $dato["autovinculacion_j16_1_total_H"] = $_POST["autovinculacion_j16_1_total_H"];
    $dato["autovinculacion_j16_1_total_T"] = $_POST["autovinculacion_j16_1_total_T"];

    $dato["autovinculacion_j16_2_homicidio_M"] = $_POST["autovinculacion_j16_2_homicidio_M"];
    $dato["autovinculacion_j16_2_homicidio_H"] = $_POST["autovinculacion_j16_2_homicidio_H"];
    $dato["autovinculacion_j16_2_homicidio_T"] = $_POST["autovinculacion_j16_2_homicidio_T"];
    $dato["autovinculacion_j16_2_feminicidio_M"] = $_POST["autovinculacion_j16_2_feminicidio_M"];
    $dato["autovinculacion_j16_2_feminicidio_H"] = $_POST["autovinculacion_j16_2_feminicidio_H"];
    $dato["autovinculacion_j16_2_feminicidio_T"] = $_POST["autovinculacion_j16_2_feminicidio_T"];
    $dato["autovinculacion_j16_2_lesiones_M"] = $_POST["autovinculacion_j16_2_lesiones_M"];
    $dato["autovinculacion_j16_2_lesiones_H"] = $_POST["autovinculacion_j16_2_lesiones_H"];
    $dato["autovinculacion_j16_2_lesiones_T"] = $_POST["autovinculacion_j16_2_lesiones_T"];
    $dato["autovinculacion_j16_2_violFam_M"] = $_POST["autovinculacion_j16_2_violFam_M"];
    $dato["autovinculacion_j16_2_violFam_H"] = $_POST["autovinculacion_j16_2_violFam_H"];
    $dato["autovinculacion_j16_2_violFam_T"] = $_POST["autovinculacion_j16_2_violFam_T"];
    $dato["autovinculacion_j16_2_abuSex_M"] = $_POST["autovinculacion_j16_2_abuSex_M"];
    $dato["autovinculacion_j16_2_abuSex_H"] = $_POST["autovinculacion_j16_2_abuSex_H"];
    $dato["autovinculacion_j16_2_abuSex_T"] = $_POST["autovinculacion_j16_2_abuSex_T"];
    $dato["autovinculacion_j16_2_hostSex_M"] = $_POST["autovinculacion_j16_2_hostSex_M"];
    $dato["autovinculacion_j16_2_hostSex_H"] = $_POST["autovinculacion_j16_2_hostSex_H"];
    $dato["autovinculacion_j16_2_hostSex_T"] = $_POST["autovinculacion_j16_2_hostSex_T"];
    $dato["autovinculacion_j16_2_violacion_M"] = $_POST["autovinculacion_j16_2_violacion_M"];
    $dato["autovinculacion_j16_2_violacion_H"] = $_POST["autovinculacion_j16_2_violacion_H"];
    $dato["autovinculacion_j16_2_violacion_T"] = $_POST["autovinculacion_j16_2_violacion_T"];
    $dato["autovinculacion_j16_2_trata_M"] = $_POST["autovinculacion_j16_2_trata_M"];
    $dato["autovinculacion_j16_2_trata_H"] = $_POST["autovinculacion_j16_2_trata_H"];
    $dato["autovinculacion_j16_2_trata_T"] = $_POST["autovinculacion_j16_2_trata_T"];
    $dato["autovinculacion_j16_2_corrup_M"] = $_POST["autovinculacion_j16_2_corrup_M"];
    $dato["autovinculacion_j16_2_corrup_H"] = $_POST["autovinculacion_j16_2_corrup_H"];
    $dato["autovinculacion_j16_2_corrup_T"] = $_POST["autovinculacion_j16_2_corrup_T"];
    $dato["autovinculacion_j16_2_traMen_M"] = $_POST["autovinculacion_j16_2_traMen_M"];
    $dato["autovinculacion_j16_2_traMen_H"] = $_POST["autovinculacion_j16_2_traMen_H"];
    $dato["autovinculacion_j16_2_traMen_T"] = $_POST["autovinculacion_j16_2_traMen_T"];
    $dato["autovinculacion_j16_2_otros"] = $_POST["autovinculacion_j16_2_otros"];
    $dato["autovinculacion_j16_2_otros_M"] = $_POST["autovinculacion_j16_2_otros_M"];
    $dato["autovinculacion_j16_2_otros_H"] = $_POST["autovinculacion_j16_2_otros_H"];
    $dato["autovinculacion_j16_2_otros_T"] = $_POST["autovinculacion_j16_2_otros_T"];
    $dato["autovinculacion_j16_2_nosesabe"] = $_POST["autovinculacion_j16_2_nosesabe"];

    $dato["solucion_j17_suspCond_M"] = $_POST["solucion_j17_suspCond_M"];
    $dato["solucion_j17_suspCond_H"] = $_POST["solucion_j17_suspCond_H"];
    $dato["solucion_j17_suspCond_T"] = $_POST["solucion_j17_suspCond_T"];
    $dato["solucion_j17_acuerdo_M"] = $_POST["solucion_j17_acuerdo_M"];
    $dato["solucion_j17_acuerdo_H"] = $_POST["solucion_j17_acuerdo_H"];
    $dato["solucion_j17_acuerdo_T"] = $_POST["solucion_j17_acuerdo_T"];
    $dato["solucion_j17_total_M"] = $_POST["solucion_j17_total_M"];
    $dato["solucion_j17_total_H"] = $_POST["solucion_j17_total_H"];
    $dato["solucion_j17_total_T"] = $_POST["solucion_j17_total_T"];

    $dato["medida_j18_medidaCau_M"] = $_POST["medida_j18_medidaCau_M"];
    $dato["medida_j18_medidaCau_H"] = $_POST["medida_j18_medidaCau_H"];
    $dato["medida_j18_medidaCau_T"] = $_POST["medida_j18_medidaCau_T"];

    $dato["medida_j18_1_presePeri_M"] = $_POST["medida_j18_1_presePeri_M"];
    $dato["medida_j18_1_presePeri_H"] = $_POST["medida_j18_1_presePeri_H"];
    $dato["medida_j18_1_presePeri_T"] = $_POST["medida_j18_1_presePeri_T"];
    $dato["medida_j18_1_garantia_M"] = $_POST["medida_j18_1_garantia_M"];
    $dato["medida_j18_1_garantia_H"] = $_POST["medida_j18_1_garantia_H"];
    $dato["medida_j18_1_garantia_T"] = $_POST["medida_j18_1_garantia_T"];
    $dato["medida_j18_1_embargo_M"] = $_POST["medida_j18_1_embargo_M"];
    $dato["medida_j18_1_embargo_H"] = $_POST["medida_j18_1_embargo_H"];
    $dato["medida_j18_1_embargo_T"] = $_POST["medida_j18_1_embargo_T"];
    $dato["medida_j18_1_inmoCue_M"] = $_POST["medida_j18_1_inmoCue_M"];
    $dato["medida_j18_1_inmoCue_H"] = $_POST["medida_j18_1_inmoCue_H"];
    $dato["medida_j18_1_inmoCue_T"] = $_POST["medida_j18_1_inmoCue_T"];
    $dato["medida_j18_1_some_M"] = $_POST["medida_j18_1_some_M"];
    $dato["medida_j18_1_some_H"] = $_POST["medida_j18_1_some_H"];
    $dato["medida_j18_1_some_T"] = $_POST["medida_j18_1_some_T"];
    $dato["medida_j18_1_prohi_M"] = $_POST["medida_j18_1_prohi_M"];
    $dato["medida_j18_1_prohi_H"] = $_POST["medida_j18_1_prohi_H"];
    $dato["medida_j18_1_prohi_T"] = $_POST["medida_j18_1_prohi_T"];
    $dato["medida_j18_1_proConv_M"] = $_POST["medida_j18_1_proConv_M"];
    $dato["medida_j18_1_proConv_H"] = $_POST["medida_j18_1_proConv_H"];
    $dato["medida_j18_1_proConv_T"] = $_POST["medida_j18_1_proConv_T"];
    $dato["medida_j18_1_separa_M"] = $_POST["medida_j18_1_separa_M"];
    $dato["medida_j18_1_separa_H"] = $_POST["medida_j18_1_separa_H"];
    $dato["medida_j18_1_separa_T"] = $_POST["medida_j18_1_separa_T"];
    $dato["medida_j18_1_susp_M"] = $_POST["medida_j18_1_susp_M"];
    $dato["medida_j18_1_susp_H"] = $_POST["medida_j18_1_susp_H"];
    $dato["medida_j18_1_susp_T"] = $_POST["medida_j18_1_susp_T"];
    $dato["medida_j18_1_suspDet_M"] = $_POST["medida_j18_1_suspDet_M"];
    $dato["medida_j18_1_suspDet_H"] = $_POST["medida_j18_1_suspDet_H"];
    $dato["medida_j18_1_suspDet_T"] = $_POST["medida_j18_1_suspDet_T"];
    $dato["medida_j18_1_coloca_M"] = $_POST["medida_j18_1_coloca_M"];
    $dato["medida_j18_1_coloca_H"] = $_POST["medida_j18_1_coloca_H"];
    $dato["medida_j18_1_coloca_T"] = $_POST["medida_j18_1_coloca_T"];
    $dato["medida_j18_1_resguardo_M"] = $_POST["medida_j18_1_resguardo_M"];
    $dato["medida_j18_1_resguardo_H"] = $_POST["medida_j18_1_resguardo_H"];
    $dato["medida_j18_1_resguardo_T"] = $_POST["medida_j18_1_resguardo_T"];
    $dato["medida_j18_1_prision_M"] = $_POST["medida_j18_1_prision_M"];
    $dato["medida_j18_1_prision_H"] = $_POST["medida_j18_1_prision_H"];
    $dato["medida_j18_1_prision_T"] = $_POST["medida_j18_1_prision_T"];
    $dato["medida_j18_1_otros"] = $_POST["medida_j18_1_otros"];
    $dato["medida_j18_1_otros_M"] = $_POST["medida_j18_1_otros_M"];
    $dato["medida_j18_1_otros_H"] = $_POST["medida_j18_1_otros_H"];
    $dato["medida_j18_1_otros_T"] = $_POST["medida_j18_1_otros_T"];
    $dato["medida_j18_1_nosesabe"] = $_POST["medida_j18_1_nosesabe"];

    $dato["medida_j18_2_dicto_M"] = $_POST["medida_j18_2_dicto_M"];
    $dato["medida_j18_2_dicto_H"] = $_POST["medida_j18_2_dicto_H"];
    $dato["medida_j18_2_dicto_T"] = $_POST["medida_j18_2_dicto_T"];

    $dato["medida_j18_3_presePeri_M"] = $_POST["medida_j18_3_presePeri_M"];
    $dato["medida_j18_3_presePeri_H"] = $_POST["medida_j18_3_presePeri_H"];
    $dato["medida_j18_3_presePeri_T"] = $_POST["medida_j18_3_presePeri_T"];
    $dato["medida_j18_3_garantia_M"] = $_POST["medida_j18_3_garantia_M"];
    $dato["medida_j18_3_garantia_H"] = $_POST["medida_j18_3_garantia_H"];
    $dato["medida_j18_3_garantia_T"] = $_POST["medida_j18_3_garantia_T"];
    $dato["medida_j18_3_embargo_M"] = $_POST["medida_j18_3_embargo_M"];
    $dato["medida_j18_3_embargo_H"] = $_POST["medida_j18_3_embargo_H"];
    $dato["medida_j18_3_embargo_T"] = $_POST["medida_j18_3_embargo_T"];
    $dato["medida_j18_3_inmoCue_M"] = $_POST["medida_j18_3_inmoCue_M"];
    $dato["medida_j18_3_inmoCue_H"] = $_POST["medida_j18_3_inmoCue_H"];
    $dato["medida_j18_3_inmoCue_T"] = $_POST["medida_j18_3_inmoCue_T"];
    $dato["medida_j18_3_some_M"] = $_POST["medida_j18_3_some_M"];
    $dato["medida_j18_3_some_H"] = $_POST["medida_j18_3_some_H"];
    $dato["medida_j18_3_some_T"] = $_POST["medida_j18_3_some_T"];
    $dato["medida_j18_3_prohi_M"] = $_POST["medida_j18_3_prohi_M"];
    $dato["medida_j18_3_prohi_H"] = $_POST["medida_j18_3_prohi_H"];
    $dato["medida_j18_3_prohi_T"] = $_POST["medida_j18_3_prohi_T"];
    $dato["medida_j18_3_proConv_M"] = $_POST["medida_j18_3_proConv_M"];
    $dato["medida_j18_3_proConv_H"] = $_POST["medida_j18_3_proConv_H"];
    $dato["medida_j18_3_proConv_T"] = $_POST["medida_j18_3_proConv_T"];
    $dato["medida_j18_3_separa_M"] = $_POST["medida_j18_3_separa_M"];
    $dato["medida_j18_3_separa_H"] = $_POST["medida_j18_3_separa_H"];
    $dato["medida_j18_3_separa_T"] = $_POST["medida_j18_3_separa_T"];
    $dato["medida_j18_3_susp_M"] = $_POST["medida_j18_3_susp_M"];
    $dato["medida_j18_3_susp_H"] = $_POST["medida_j18_3_susp_H"];
    $dato["medida_j18_3_susp_T"] = $_POST["medida_j18_3_susp_T"];
    $dato["medida_j18_3_suspDet_M"] = $_POST["medida_j18_3_suspDet_M"];
    $dato["medida_j18_3_suspDet_H"] = $_POST["medida_j18_3_suspDet_H"];
    $dato["medida_j18_3_suspDet_T"] = $_POST["medida_j18_3_suspDet_T"];
    $dato["medida_j18_3_coloca_M"] = $_POST["medida_j18_3_coloca_M"];
    $dato["medida_j18_3_coloca_H"] = $_POST["medida_j18_3_coloca_H"];
    $dato["medida_j18_3_coloca_T"] = $_POST["medida_j18_3_coloca_T"];
    $dato["medida_j18_3_resguardo_M"] = $_POST["medida_j18_3_resguardo_M"];
    $dato["medida_j18_3_resguardo_H"] = $_POST["medida_j18_3_resguardo_H"];
    $dato["medida_j18_3_resguardo_T"] = $_POST["medida_j18_3_resguardo_T"];
    $dato["medida_j18_3_prision_M"] = $_POST["medida_j18_3_prision_M"];
    $dato["medida_j18_3_prision_H"] = $_POST["medida_j18_3_prision_H"];
    $dato["medida_j18_3_prision_T"] = $_POST["medida_j18_3_prision_T"];
    $dato["medida_j18_3_otros"] = $_POST["medida_j18_3_otros"];
    $dato["medida_j18_3_otros_M"] = $_POST["medida_j18_3_otros_M"];
    $dato["medida_j18_3_otros_H"] = $_POST["medida_j18_3_otros_H"];
    $dato["medida_j18_3_otros_T"] = $_POST["medida_j18_3_otros_T"];

    $dato["audiencias_j19_audCele"] = $_POST["audiencias_j19_audCele"];
    $dato["audiencias_j19_audAnul"] = $_POST["audiencias_j19_audAnul"];
    $dato["audiencias_j19_audDif"] = $_POST["audiencias_j19_audDif"];
    $dato["audiencias_j19_otras"] = $_POST["audiencias_j19_otras"];
    $dato["audiencias_j19_otrasCual"] = $_POST["audiencias_j19_otrasCual"];
    $dato["audiencias_j19_total"] = $_POST["audiencias_j19_total"];

    $dato["audiencias_j19_1_iniciales"] = $_POST["audiencias_j19_1_iniciales"];
    $dato["audiencias_j19_1_inter"] = $_POST["audiencias_j19_1_inter"];
    $dato["audiencias_j19_1_juicioOr"] = $_POST["audiencias_j19_1_juicioOr"];
    $dato["audiencias_j19_1_sentencia"] = $_POST["audiencias_j19_1_sentencia"];
    $dato["audiencias_j19_1_sanciones"] = $_POST["audiencias_j19_1_sanciones"];
    $dato["audiencias_j19_1_total"] = $_POST["audiencias_j19_1_total"];

    if($guardar=="ok"){

      $datosGuardados =  ModeloJueces::mdlMostrarJueces("jueces","uuid",  $dato["uuid"]);
      echo  $datosGuardados[0]["id"];
    }else{
      echo $guardar;
    }


  }

}



if (isset($_POST["tab8"])){

  require_once "../modelos/jueces1.modelo.php";

  $idFormulario = $_POST["idFormulario"];
    if($idFormulario > 0){
    $dato["idFormulario"] =$idFormulario;
    $dato["uuid"] = $_POST["uuid"];

    $dato["sentencias_j20_absolutaria"] = $_POST["sentencias_j20_absolutaria"];
    $dato["sentencias_j20_condena"] = $_POST["sentencias_j20_condena"];
    $dato["sentencias_j20_mixta"] = $_POST["sentencias_j20_mixta"];
    $dato["sentencias_j20_otras"] = $_POST["sentencias_j20_otras"];
    $dato["sentencias_j20_otrasCual"] = $_POST["sentencias_j20_otrasCual"];
    $dato["sentencias_j20_total"] = $_POST["sentencias_j20_total"];

    $dato["sentencias_j20_1_proceAbr"] = $_POST["sentencias_j20_1_proceAbr"];
    $dato["sentencias_j20_1_juicioOr"] = $_POST["sentencias_j20_1_juicioOr"];
    $dato["sentencias_j20_1_otras"] = $_POST["sentencias_j20_1_otras"];
    $dato["sentencias_j20_1_otrasCual"] = $_POST["sentencias_j20_1_otrasCual"];
    $dato["sentencias_j20_1_total"] = $_POST["sentencias_j20_1_total"];

    $dato["sentencias_j20_2_mayor18_M"] = $_POST["sentencias_j20_2_mayor18_M"];
    $dato["sentencias_j20_2_mayor18_H"] = $_POST["sentencias_j20_2_mayor18_H"];
    $dato["sentencias_j20_2_mayor18_T"] = $_POST["sentencias_j20_2_mayor18_T"];
    $dato["sentencias_j20_2_menor18_M"] = $_POST["sentencias_j20_2_menor18_M"];
    $dato["sentencias_j20_2_menor18_H"] = $_POST["sentencias_j20_2_menor18_H"];
    $dato["sentencias_j20_2_menor18_T"] = $_POST["sentencias_j20_2_menor18_T"];
    $dato["sentencias_j20_2_total_M"] = $_POST["sentencias_j20_2_total_M"];
    $dato["sentencias_j20_2_total_H"] = $_POST["sentencias_j20_2_total_H"];
    $dato["sentencias_j20_2_total_T"] = $_POST["sentencias_j20_2_total_T"];
    $dato["sentencias_j20_2_nosesabe"] = $_POST["sentencias_j20_2_nosesabe"];

    $dato["sentencias_j20_3_homicidio_M"] = $_POST["sentencias_j20_3_homicidio_M"];
    $dato["sentencias_j20_3_homicidio_H"] = $_POST["sentencias_j20_3_homicidio_H"];
    $dato["sentencias_j20_3_homicidio_T"] = $_POST["sentencias_j20_3_homicidio_T"];
    $dato["sentencias_j20_3_feminicidio_M"] = $_POST["sentencias_j20_3_feminicidio_M"];
    $dato["sentencias_j20_3_feminicidio_H"] = $_POST["sentencias_j20_3_feminicidio_H"];
    $dato["sentencias_j20_3_feminicidio_T"] = $_POST["sentencias_j20_3_feminicidio_T"];
    $dato["sentencias_j20_3_lesiones_M"] = $_POST["sentencias_j20_3_lesiones_M"];
    $dato["sentencias_j20_3_lesiones_H"] = $_POST["sentencias_j20_3_lesiones_H"];
    $dato["sentencias_j20_3_lesiones_T"] = $_POST["sentencias_j20_3_lesiones_T"];
    $dato["sentencias_j20_3_violFam_M"] = $_POST["sentencias_j20_3_violFam_M"];
    $dato["sentencias_j20_3_violFam_H"] = $_POST["sentencias_j20_3_violFam_H"];
    $dato["sentencias_j20_3_violFam_T"] = $_POST["sentencias_j20_3_violFam_T"];
    $dato["sentencias_j20_3_abuSex_M"] = $_POST["sentencias_j20_3_abuSex_M"];
    $dato["sentencias_j20_3_abuSex_H"] = $_POST["sentencias_j20_3_abuSex_H"];
    $dato["sentencias_j20_3_abuSex_T"] = $_POST["sentencias_j20_3_abuSex_T"];
    $dato["sentencias_j20_3_hostSex_M"] = $_POST["sentencias_j20_3_hostSex_M"];
    $dato["sentencias_j20_3_hostSex_H"] = $_POST["sentencias_j20_3_hostSex_H"];
    $dato["sentencias_j20_3_hostSex_T"] = $_POST["sentencias_j20_3_hostSex_T"];
    $dato["sentencias_j20_3_violacion_M"] = $_POST["sentencias_j20_3_violacion_M"];
    $dato["sentencias_j20_3_violacion_H"] = $_POST["sentencias_j20_3_violacion_H"];
    $dato["sentencias_j20_3_violacion_T"] = $_POST["sentencias_j20_3_violacion_T"];
    $dato["sentencias_j20_3_trata_M"] = $_POST["sentencias_j20_3_trata_M"];
    $dato["sentencias_j20_3_trata_H"] = $_POST["sentencias_j20_3_trata_H"];
    $dato["sentencias_j20_3_trata_T"] = $_POST["sentencias_j20_3_trata_T"];
    $dato["sentencias_j20_3_corrup_M"] = $_POST["sentencias_j20_3_corrup_M"];
    $dato["sentencias_j20_3_corrup_H"] = $_POST["sentencias_j20_3_corrup_H"];
    $dato["sentencias_j20_3_corrup_T"] = $_POST["sentencias_j20_3_corrup_T"];
    $dato["sentencias_j20_3_traMen_M"] = $_POST["sentencias_j20_3_traMen_M"];
    $dato["sentencias_j20_3_traMen_H"] = $_POST["sentencias_j20_3_traMen_H"];
    $dato["sentencias_j20_3_traMen_T"] = $_POST["sentencias_j20_3_traMen_T"];
    /*$dato["sentencias_j20_3_otros"] = $_POST["sentencias_j20_3_otros"];
    $dato["sentencias_j20_3_otros_M"] = $_POST["sentencias_j20_3_otros_M"];
    $dato["sentencias_j20_3_otros_H"] = $_POST["sentencias_j20_3_otros_H"];
    $dato["sentencias_j20_3_otros_T"] = $_POST["sentencias_j20_3_otros_T"];*/
    $dato["sentencias_j20_3_nosesabe"] = $_POST["sentencias_j20_3_nosesabe"];

    $dato["sentencias_j20_4_suspenCond"] = $_POST["sentencias_j20_4_suspenCond"];
    $dato["sentencias_j20_4_acuerdo"] = $_POST["sentencias_j20_4_acuerdo"];
    $dato["sentencias_j20_4_otorPerd"] = $_POST["sentencias_j20_4_otorPerd"];
    $dato["sentencias_j20_4_otrasDet"] = $_POST["sentencias_j20_4_otrasDet"];

    $dato["sentencias_j20_5_confirmadas"] = $_POST["sentencias_j20_5_confirmadas"];
    $dato["sentencias_j20_5_modificadas"] = $_POST["sentencias_j20_5_modificadas"];
    $dato["sentencias_j20_5_revocadas"] = $_POST["sentencias_j20_5_revocadas"];
    $dato["sentencias_j20_5_total"] = $_POST["sentencias_j20_5_total"];

    $dato["amparos_j21_amparos"] = $_POST["amparos_j21_amparos"];
    $dato["amparos_j21_1_concedidos"] = $_POST["amparos_j21_1_concedidos"];
    $dato["amparos_j21_1_negados"] = $_POST["amparos_j21_1_negados"];
    $dato["amparos_j21_1_sobreseidos"] = $_POST["amparos_j21_1_sobreseidos"];
    $dato["amparos_j21_1_desechados"] = $_POST["amparos_j21_1_desechados"];
    $dato["amparos_j21_1_otras"] = $_POST["amparos_j21_1_otras"];
    $dato["amparos_j21_1_otrasCual"] = $_POST["amparos_j21_1_otrasCual"];
    $dato["amparos_j21_1_total"] = $_POST["amparos_j21_1_total"];

    $dato["preliberacional_j22_libCond_M"] = $_POST["preliberacional_j22_libCond_M"];
    $dato["preliberacional_j22_libCond_H"] = $_POST["preliberacional_j22_libCond_H"];
    $dato["preliberacional_j22_libCond_T"] = $_POST["preliberacional_j22_libCond_T"];
    $dato["preliberacional_j22_libAnt_M"] = $_POST["preliberacional_j22_libAnt_M"];
    $dato["preliberacional_j22_libAnt_H"] = $_POST["preliberacional_j22_libAnt_H"];
    $dato["preliberacional_j22_libAnt_T"] = $_POST["preliberacional_j22_libAnt_T"];
    $dato["preliberacional_j22_sustSusp_M"] = $_POST["preliberacional_j22_sustSusp_M"];
    $dato["preliberacional_j22_sustSusp_H"] = $_POST["preliberacional_j22_sustSusp_H"];
    $dato["preliberacional_j22_sustSusp_T"] = $_POST["preliberacional_j22_sustSusp_T"];
    $dato["preliberacional_j22_permHum_M"] = $_POST["preliberacional_j22_permHum_M"];
    $dato["preliberacional_j22_permHum_H"] = $_POST["preliberacional_j22_permHum_H"];
    $dato["preliberacional_j22_permHum_T"] = $_POST["preliberacional_j22_permHum_T"];
    $dato["preliberacional_j22_prelib_M"] = $_POST["preliberacional_j22_prelib_M"];
    $dato["preliberacional_j22_prelib_H"] = $_POST["preliberacional_j22_prelib_H"];
    $dato["preliberacional_j22_prelib_T"] = $_POST["preliberacional_j22_prelib_T"];

    $dato["victimas_j23_mayor18_M"] = $_POST["victimas_j23_mayor18_M"];
    $dato["victimas_j23_mayor18_H"] = $_POST["victimas_j23_mayor18_H"];
    $dato["victimas_j23_mayor18_T"] = $_POST["victimas_j23_mayor18_T"];
    $dato["victimas_j23_menor18_M"] = $_POST["victimas_j23_menor18_M"];
    $dato["victimas_j23_menor18_H"] = $_POST["victimas_j23_menor18_H"];
    $dato["victimas_j23_menor18_T"] = $_POST["victimas_j23_menor18_T"];
    $dato["victimas_j23_total_M"] = $_POST["victimas_j23_total_M"];
    $dato["victimas_j23_total_H"] = $_POST["victimas_j23_total_H"];
    $dato["victimas_j23_total_T"] = $_POST["victimas_j23_total_T"];

    $dato["victimas_j23_1_homicidio_M"] = $_POST["victimas_j23_1_homicidio_M"];
    $dato["victimas_j23_1_homicidio_H"] = $_POST["victimas_j23_1_homicidio_H"];
    $dato["victimas_j23_1_homicidio_T"] = $_POST["victimas_j23_1_homicidio_T"];
    $dato["victimas_j23_1_feminicidio_M"] = $_POST["victimas_j23_1_feminicidio_M"];
    $dato["victimas_j23_1_feminicidio_H"] = $_POST["victimas_j23_1_feminicidio_H"];
    $dato["victimas_j23_1_feminicidio_T"] = $_POST["victimas_j23_1_feminicidio_T"];
    $dato["victimas_j23_1_lesiones_M"] = $_POST["victimas_j23_1_lesiones_M"];
    $dato["victimas_j23_1_lesiones_H"] = $_POST["victimas_j23_1_lesiones_H"];
    $dato["victimas_j23_1_lesiones_T"] = $_POST["victimas_j23_1_lesiones_T"];
    $dato["victimas_j23_1_violFam_M"] = $_POST["victimas_j23_1_violFam_M"];
    $dato["victimas_j23_1_violFam_H"] = $_POST["victimas_j23_1_violFam_H"];
    $dato["victimas_j23_1_violFam_T"] = $_POST["victimas_j23_1_violFam_T"];
    $dato["victimas_j23_1_abuSex_M"] = $_POST["victimas_j23_1_abuSex_M"];
    $dato["victimas_j23_1_abuSex_H"] = $_POST["victimas_j23_1_abuSex_H"];
    $dato["victimas_j23_1_abuSex_T"] = $_POST["victimas_j23_1_abuSex_T"];
    $dato["victimas_j23_1_hostSex_M"] = $_POST["victimas_j23_1_hostSex_M"];
    $dato["victimas_j23_1_hostSex_H"] = $_POST["victimas_j23_1_hostSex_H"];
    $dato["victimas_j23_1_hostSex_T"] = $_POST["victimas_j23_1_hostSex_T"];
    $dato["victimas_j23_1_violacion_M"] = $_POST["victimas_j23_1_violacion_M"];
    $dato["victimas_j23_1_violacion_H"] = $_POST["victimas_j23_1_violacion_H"];
    $dato["victimas_j23_1_violacion_T"] = $_POST["victimas_j23_1_violacion_T"];
    $dato["victimas_j23_1_trata_M"] = $_POST["victimas_j23_1_trata_M"];
    $dato["victimas_j23_1_trata_H"] = $_POST["victimas_j23_1_trata_H"];
    $dato["victimas_j23_1_trata_T"] = $_POST["victimas_j23_1_trata_T"];
    $dato["victimas_j23_1_corrup_M"] = $_POST["victimas_j23_1_corrup_M"];
    $dato["victimas_j23_1_corrup_H"] = $_POST["victimas_j23_1_corrup_H"];
    $dato["victimas_j23_1_corrup_T"] = $_POST["victimas_j23_1_corrup_T"];
    $dato["victimas_j23_1_traMen_M"] = $_POST["victimas_j23_1_traMen_M"];
    $dato["victimas_j23_1_traMen_H"] = $_POST["victimas_j23_1_traMen_H"];
    $dato["victimas_j23_1_traMen_T"] = $_POST["victimas_j23_1_traMen_T"];
    $dato["victimas_j23_1_nosesabe"] = $_POST["victimas_j23_1_nosesabe"];

    $dato["victimas_j23_2_buepra"] = $_POST["victimas_j23_2_buepra"];
    $dato["victimas_j23_3_cuabuepra"] = $_POST["victimas_j23_3_cuabuepra"];


    $actualizar = ModeloJueces::mdlEditarFJuecesTab8("jueces",  $dato);


    echo $actualizar;
  }else{
    //INSERTA
    $dato["uuid"] = $_POST["uuid"];

    $dato["sentencias_j20_absolutaria"] = $_POST["sentencias_j20_absolutaria"];
    $dato["sentencias_j20_condena"] = $_POST["sentencias_j20_condena"];
    $dato["sentencias_j20_mixta"] = $_POST["sentencias_j20_mixta"];
    $dato["sentencias_j20_otras"] = $_POST["sentencias_j20_otras"];
    $dato["sentencias_j20_otrasCual"] = $_POST["sentencias_j20_otrasCual"];
    $dato["sentencias_j20_total"] = $_POST["sentencias_j20_total"];

    $dato["sentencias_j20_1_proceAbr"] = $_POST["sentencias_j20_1_proceAbr"];
    $dato["sentencias_j20_1_juicioOr"] = $_POST["sentencias_j20_1_juicioOr"];
    $dato["sentencias_j20_1_otras"] = $_POST["sentencias_j20_1_otras"];
    $dato["sentencias_j20_1_otrasCual"] = $_POST["sentencias_j20_1_otrasCual"];
    $dato["sentencias_j20_1_total"] = $_POST["sentencias_j20_1_total"];

    $dato["sentencias_j20_2_mayor18_M"] = $_POST["sentencias_j20_2_mayor18_M"];
    $dato["sentencias_j20_2_mayor18_H"] = $_POST["sentencias_j20_2_mayor18_H"];
    $dato["sentencias_j20_2_mayor18_T"] = $_POST["sentencias_j20_2_mayor18_T"];
    $dato["sentencias_j20_2_menor18_M"] = $_POST["sentencias_j20_2_menor18_M"];
    $dato["sentencias_j20_2_menor18_H"] = $_POST["sentencias_j20_2_menor18_H"];
    $dato["sentencias_j20_2_menor18_T"] = $_POST["sentencias_j20_2_menor18_T"];
    $dato["sentencias_j20_2_total_M"] = $_POST["sentencias_j20_2_total_M"];
    $dato["sentencias_j20_2_total_H"] = $_POST["sentencias_j20_2_total_H"];
    $dato["sentencias_j20_2_total_T"] = $_POST["sentencias_j20_2_total_T"];
    $dato["sentencias_j20_2_nosesabe"] = $_POST["sentencias_j20_2_nosesabe"];

    $dato["sentencias_j20_3_homicidio_M"] = $_POST["sentencias_j20_3_homicidio_M"];
    $dato["sentencias_j20_3_homicidio_H"] = $_POST["sentencias_j20_3_homicidio_H"];
    $dato["sentencias_j20_3_homicidio_T"] = $_POST["sentencias_j20_3_homicidio_T"];
    $dato["sentencias_j20_3_feminicidio_M"] = $_POST["sentencias_j20_3_feminicidio_M"];
    $dato["sentencias_j20_3_feminicidio_H"] = $_POST["sentencias_j20_3_feminicidio_H"];
    $dato["sentencias_j20_3_feminicidio_T"] = $_POST["sentencias_j20_3_feminicidio_T"];
    $dato["sentencias_j20_3_lesiones_M"] = $_POST["sentencias_j20_3_lesiones_M"];
    $dato["sentencias_j20_3_lesiones_H"] = $_POST["sentencias_j20_3_lesiones_H"];
    $dato["sentencias_j20_3_lesiones_T"] = $_POST["sentencias_j20_3_lesiones_T"];
    $dato["sentencias_j20_3_violFam_M"] = $_POST["sentencias_j20_3_violFam_M"];
    $dato["sentencias_j20_3_violFam_H"] = $_POST["sentencias_j20_3_violFam_H"];
    $dato["sentencias_j20_3_violFam_T"] = $_POST["sentencias_j20_3_violFam_T"];
    $dato["sentencias_j20_3_abuSex_M"] = $_POST["sentencias_j20_3_abuSex_M"];
    $dato["sentencias_j20_3_abuSex_H"] = $_POST["sentencias_j20_3_abuSex_H"];
    $dato["sentencias_j20_3_abuSex_T"] = $_POST["sentencias_j20_3_abuSex_T"];
    $dato["sentencias_j20_3_hostSex_M"] = $_POST["sentencias_j20_3_hostSex_M"];
    $dato["sentencias_j20_3_hostSex_H"] = $_POST["sentencias_j20_3_hostSex_H"];
    $dato["sentencias_j20_3_hostSex_T"] = $_POST["sentencias_j20_3_hostSex_T"];
    $dato["sentencias_j20_3_violacion_M"] = $_POST["sentencias_j20_3_violacion_M"];
    $dato["sentencias_j20_3_violacion_H"] = $_POST["sentencias_j20_3_violacion_H"];
    $dato["sentencias_j20_3_violacion_T"] = $_POST["sentencias_j20_3_violacion_T"];
    $dato["sentencias_j20_3_trata_M"] = $_POST["sentencias_j20_3_trata_M"];
    $dato["sentencias_j20_3_trata_H"] = $_POST["sentencias_j20_3_trata_H"];
    $dato["sentencias_j20_3_trata_T"] = $_POST["sentencias_j20_3_trata_T"];
    $dato["sentencias_j20_3_corrup_M"] = $_POST["sentencias_j20_3_corrup_M"];
    $dato["sentencias_j20_3_corrup_H"] = $_POST["sentencias_j20_3_corrup_H"];
    $dato["sentencias_j20_3_corrup_T"] = $_POST["sentencias_j20_3_corrup_T"];
    $dato["sentencias_j20_3_traMen_M"] = $_POST["sentencias_j20_3_traMen_M"];
    $dato["sentencias_j20_3_traMen_H"] = $_POST["sentencias_j20_3_traMen_H"];
    $dato["sentencias_j20_3_traMen_T"] = $_POST["sentencias_j20_3_traMen_T"];
    /*$dato["sentencias_j20_3_otros"] = $_POST["sentencias_j20_3_otros"];
    $dato["sentencias_j20_3_otros_M"] = $_POST["sentencias_j20_3_otros_M"];
    $dato["sentencias_j20_3_otros_H"] = $_POST["sentencias_j20_3_otros_H"];
    $dato["sentencias_j20_3_otros_T"] = $_POST["sentencias_j20_3_otros_T"];*/
    $dato["sentencias_j20_3_nosesabe"] = $_POST["sentencias_j20_3_nosesabe"];

    $dato["sentencias_j20_4_suspenCond"] = $_POST["sentencias_j20_4_suspenCond"];
    $dato["sentencias_j20_4_acuerdo"] = $_POST["sentencias_j20_4_acuerdo"];
    $dato["sentencias_j20_4_otorPerd"] = $_POST["sentencias_j20_4_otorPerd"];
    $dato["sentencias_j20_4_otrasDet"] = $_POST["sentencias_j20_4_otrasDet"];

    $dato["sentencias_j20_5_confirmadas"] = $_POST["sentencias_j20_5_confirmadas"];
    $dato["sentencias_j20_5_modificadas"] = $_POST["sentencias_j20_5_modificadas"];
    $dato["sentencias_j20_5_revocadas"] = $_POST["sentencias_j20_5_revocadas"];
    $dato["sentencias_j20_5_total"] = $_POST["sentencias_j20_5_total"];

    $dato["amparos_j21_amparos"] = $_POST["amparos_j21_amparos"];
    $dato["amparos_j21_1_concedidos"] = $_POST["amparos_j21_1_concedidos"];
    $dato["amparos_j21_1_negados"] = $_POST["amparos_j21_1_negados"];
    $dato["amparos_j21_1_sobreseidos"] = $_POST["amparos_j21_1_sobreseidos"];
    $dato["amparos_j21_1_desechados"] = $_POST["amparos_j21_1_desechados"];
    $dato["amparos_j21_1_otras"] = $_POST["amparos_j21_1_otras"];
    $dato["amparos_j21_1_otrasCual"] = $_POST["amparos_j21_1_otrasCual"];
    $dato["amparos_j21_1_total"] = $_POST["amparos_j21_1_total"];

    $dato["preliberacional_j22_libCond_M"] = $_POST["preliberacional_j22_libCond_M"];
    $dato["preliberacional_j22_libCond_H"] = $_POST["preliberacional_j22_libCond_H"];
    $dato["preliberacional_j22_libCond_T"] = $_POST["preliberacional_j22_libCond_T"];
    $dato["preliberacional_j22_libAnt_M"] = $_POST["preliberacional_j22_libAnt_M"];
    $dato["preliberacional_j22_libAnt_H"] = $_POST["preliberacional_j22_libAnt_H"];
    $dato["preliberacional_j22_libAnt_T"] = $_POST["preliberacional_j22_libAnt_T"];
    $dato["preliberacional_j22_sustSusp_M"] = $_POST["preliberacional_j22_sustSusp_M"];
    $dato["preliberacional_j22_sustSusp_H"] = $_POST["preliberacional_j22_sustSusp_H"];
    $dato["preliberacional_j22_sustSusp_T"] = $_POST["preliberacional_j22_sustSusp_T"];
    $dato["preliberacional_j22_permHum_M"] = $_POST["preliberacional_j22_permHum_M"];
    $dato["preliberacional_j22_permHum_H"] = $_POST["preliberacional_j22_permHum_H"];
    $dato["preliberacional_j22_permHum_T"] = $_POST["preliberacional_j22_permHum_T"];
    $dato["preliberacional_j22_prelib_M"] = $_POST["preliberacional_j22_prelib_M"];
    $dato["preliberacional_j22_prelib_H"] = $_POST["preliberacional_j22_prelib_H"];
    $dato["preliberacional_j22_prelib_T"] = $_POST["preliberacional_j22_prelib_T"];

    $dato["victimas_j23_mayor18_M"] = $_POST["victimas_j23_mayor18_M"];
    $dato["victimas_j23_mayor18_H"] = $_POST["victimas_j23_mayor18_H"];
    $dato["victimas_j23_mayor18_T"] = $_POST["victimas_j23_mayor18_T"];
    $dato["victimas_j23_menor18_M"] = $_POST["victimas_j23_menor18_M"];
    $dato["victimas_j23_menor18_H"] = $_POST["victimas_j23_menor18_H"];
    $dato["victimas_j23_menor18_T"] = $_POST["victimas_j23_menor18_T"];
    $dato["victimas_j23_total_M"] = $_POST["victimas_j23_total_M"];
    $dato["victimas_j23_total_H"] = $_POST["victimas_j23_total_H"];
    $dato["victimas_j23_total_T"] = $_POST["victimas_j23_total_T"];

    $dato["victimas_j23_1_homicidio_M"] = $_POST["victimas_j23_1_homicidio_M"];
    $dato["victimas_j23_1_homicidio_H"] = $_POST["victimas_j23_1_homicidio_H"];
    $dato["victimas_j23_1_homicidio_T"] = $_POST["victimas_j23_1_homicidio_T"];
    $dato["victimas_j23_1_feminicidio_M"] = $_POST["victimas_j23_1_feminicidio_M"];
    $dato["victimas_j23_1_feminicidio_H"] = $_POST["victimas_j23_1_feminicidio_H"];
    $dato["victimas_j23_1_feminicidio_T"] = $_POST["victimas_j23_1_feminicidio_T"];
    $dato["victimas_j23_1_lesiones_M"] = $_POST["victimas_j23_1_lesiones_M"];
    $dato["victimas_j23_1_lesiones_H"] = $_POST["victimas_j23_1_lesiones_H"];
    $dato["victimas_j23_1_lesiones_T"] = $_POST["victimas_j23_1_lesiones_T"];
    $dato["victimas_j23_1_violFam_M"] = $_POST["victimas_j23_1_violFam_M"];
    $dato["victimas_j23_1_violFam_H"] = $_POST["victimas_j23_1_violFam_H"];
    $dato["victimas_j23_1_violFam_T"] = $_POST["victimas_j23_1_violFam_T"];
    $dato["victimas_j23_1_abuSex_M"] = $_POST["victimas_j23_1_abuSex_M"];
    $dato["victimas_j23_1_abuSex_H"] = $_POST["victimas_j23_1_abuSex_H"];
    $dato["victimas_j23_1_abuSex_T"] = $_POST["victimas_j23_1_abuSex_T"];
    $dato["victimas_j23_1_hostSex_M"] = $_POST["victimas_j23_1_hostSex_M"];
    $dato["victimas_j23_1_hostSex_H"] = $_POST["victimas_j23_1_hostSex_H"];
    $dato["victimas_j23_1_hostSex_T"] = $_POST["victimas_j23_1_hostSex_T"];
    $dato["victimas_j23_1_violacion_M"] = $_POST["victimas_j23_1_violacion_M"];
    $dato["victimas_j23_1_violacion_H"] = $_POST["victimas_j23_1_violacion_H"];
    $dato["victimas_j23_1_violacion_T"] = $_POST["victimas_j23_1_violacion_T"];
    $dato["victimas_j23_1_trata_M"] = $_POST["victimas_j23_1_trata_M"];
    $dato["victimas_j23_1_trata_H"] = $_POST["victimas_j23_1_trata_H"];
    $dato["victimas_j23_1_trata_T"] = $_POST["victimas_j23_1_trata_T"];
    $dato["victimas_j23_1_corrup_M"] = $_POST["victimas_j23_1_corrup_M"];
    $dato["victimas_j23_1_corrup_H"] = $_POST["victimas_j23_1_corrup_H"];
    $dato["victimas_j23_1_corrup_T"] = $_POST["victimas_j23_1_corrup_T"];
    $dato["victimas_j23_1_traMen_M"] = $_POST["victimas_j23_1_traMen_M"];
    $dato["victimas_j23_1_traMen_H"] = $_POST["victimas_j23_1_traMen_H"];
    $dato["victimas_j23_1_traMen_T"] = $_POST["victimas_j23_1_traMen_T"];
    $dato["victimas_j23_1_nosesabe"] = $_POST["victimas_j23_1_nosesabe"];

    $dato["victimas_j23_2_buepra"] = $_POST["victimas_j23_2_buepra"];
    $dato["victimas_j23_3_cuabuepra"] = $_POST["victimas_j23_3_cuabuepra"];

    if($guardar=="ok"){

      $datosGuardados =  ModeloJueces::mdlMostrarJueces("jueces","uuid",  $dato["uuid"]);
      echo  $datosGuardados[0]["id"];
    }else{
      echo $guardar;
    }


  }

}


if (isset($_POST["tab9"])){

  require_once "../modelos/jueces1.modelo.php";

  $idFormulario = $_POST["idFormulario"];
    if($idFormulario > 0){
    $dato["idFormulario"] =$idFormulario;
    $dato["uuid"] = $_POST["uuid"];

    $dato["justicia_j24_mesas"] = $_POST["justicia_j24_mesas"];

    $dato["justicia_j24_1_segobedo"] = $_POST["justicia_j24_1_segobedo"];
    $dato["justicia_j24_1_uasj"] = $_POST["justicia_j24_1_uasj"];
    $dato["justicia_j24_1_presitsje"] = $_POST["justicia_j24_1_presitsje"];
    $dato["justicia_j24_1_fiscalprocu"] = $_POST["justicia_j24_1_fiscalprocu"];
    $dato["justicia_j24_1_ssp"] = $_POST["justicia_j24_1_ssp"];
    $dato["justicia_j24_1_ide"] = $_POST["justicia_j24_1_ide"];
    $dato["justicia_j24_1_peni"] = $_POST["justicia_j24_1_peni"];
    $dato["justicia_j24_1_medidasCau"] = $_POST["justicia_j24_1_medidasCau"];
    $dato["justicia_j24_1_iem"] = $_POST["justicia_j24_1_iem"];
    $dato["justicia_j24_1_difEst"] = $_POST["justicia_j24_1_difEst"];
    $dato["justicia_j24_1_sipinna"] = $_POST["justicia_j24_1_sipinna"];
    $dato["justicia_j24_1_salud"] = $_POST["justicia_j24_1_salud"];
    $dato["justicia_j24_1_asesoresJur"] = $_POST["justicia_j24_1_asesoresJur"];
    $dato["justicia_j24_1_justMuj"] = $_POST["justicia_j24_1_justMuj"];
    $dato["justicia_j24_1_delGene"] = $_POST["justicia_j24_1_delGene"];
    $dato["justicia_j24_1_direPeni"] = $_POST["justicia_j24_1_direPeni"];
    $dato["justicia_j24_1_direInteAd"] = $_POST["justicia_j24_1_direInteAd"];
    $dato["justicia_j24_1_mecaAlt"] = $_POST["justicia_j24_1_mecaAlt"];
    $dato["justicia_j24_1_periFor"] = $_POST["justicia_j24_1_periFor"];
    $dato["justicia_j24_1_otros"] = $_POST["justicia_j24_1_otros"];
    $dato["justicia_j24_1_otrosCua"] = $_POST["justicia_j24_1_otrosCua"];
    $dato["justicia_j24_1_noaplica"] = $_POST["justicia_j24_1_noaplica"];
    $dato["justicia_j24_1_nosesabe"] = $_POST["justicia_j24_1_nosesabe"];

    $dato["justicia_j24_2_semanal"] = $_POST["justicia_j24_2_semanal"];
    $dato["justicia_j24_2_quincenal"] = $_POST["justicia_j24_2_quincenal"];
    $dato["justicia_j24_2_mensual"] = $_POST["justicia_j24_2_mensual"];
    $dato["justicia_j24_2_bimestral"] = $_POST["justicia_j24_2_bimestral"];
    $dato["justicia_j24_2_trimestral"] = $_POST["justicia_j24_2_trimestral"];
    $dato["justicia_j24_2_semestral"] = $_POST["justicia_j24_2_semestral"];
    $dato["justicia_j24_2_anual"] = $_POST["justicia_j24_2_anual"];
    $dato["justicia_j24_2_noaplica"] = $_POST["justicia_j24_2_noaplica"];
    $dato["justicia_j24_2_nosesabe"] = $_POST["justicia_j24_2_nosesabe"];

    $dato["justicia_j24_3_buepra"] = $_POST["justicia_j24_3_buepra"];

    $dato["impacto_j25_medidasPrev"] = $_POST["impacto_j25_medidasPrev"];

    $dato["impacto_j25_1_desc"] = $_POST["impacto_j25_1_desc"];

    $dato["impacto_j25__2_medidasInn"] = $_POST["impacto_j25__2_medidasInn"];

    $dato["impacto_j25_3_desc"] = $_POST["impacto_j25_3_desc"];

    $dato["terapeutica_j26_justTer"] = $_POST["terapeutica_j26_justTer"];
    $dato["terapeutica_j26_justTer_noaplica"] = $_POST["terapeutica_j26_justTer_noaplica"];
    $dato["terapeutica_j26_justTer_nosesabe"] = $_POST["terapeutica_j26_justTer_nosesabe"];

    $dato["terapeutica_j26_1_psicoa_M"] = $_POST["terapeutica_j26_1_psicoa_M"];
    $dato["terapeutica_j26_1_psicoa_H"] = $_POST["terapeutica_j26_1_psicoa_H"];
    $dato["terapeutica_j26_1_psicoa_T"] = $_POST["terapeutica_j26_1_psicoa_T"];
    $dato["terapeutica_j26_1_psicoa_noaplica"] = $_POST["terapeutica_j26_1_psicoa_noaplica"];

    $dato["terapeutica_j26_2_proJustTer_M"] = $_POST["terapeutica_j26_2_proJustTer_M"];
    $dato["terapeutica_j26_2_proJustTer_H"] = $_POST["terapeutica_j26_2_proJustTer_H"];
    $dato["terapeutica_j26_2_proJustTer_T"] = $_POST["terapeutica_j26_2_proJustTer_T"];

    $dato["terapeutica_j26_2_proJustTer_noaplica"] = $_POST["terapeutica_j26_2_proJustTer_noaplica"];

    $dato["terapeutica_j26_3_egresoJustTer_M"] = $_POST["terapeutica_j26_3_egresoJustTer_M"];
    $dato["terapeutica_j26_3_egresoJustTer_H"] = $_POST["terapeutica_j26_3_egresoJustTer_H"];
    $dato["terapeutica_j26_3_egresoJustTer_T"] = $_POST["terapeutica_j26_3_egresoJustTer_T"];

    $dato["terapeutica_j26_3_noaplica"] = $_POST["terapeutica_j26_3_noaplica"];

    $dato["terapeutica_j26_4_bajaVol_M"] = $_POST["terapeutica_j26_4_bajaVol_M"];
    $dato["terapeutica_j26_4_bajaVol_H"] = $_POST["terapeutica_j26_4_bajaVol_H"];
    $dato["terapeutica_j26_4_bajaVol_T"] = $_POST["terapeutica_j26_4_bajaVol_T"];

    $dato["terapeutica_j26_4_expul_M"] = $_POST["terapeutica_j26_4_expul_M"];
    $dato["terapeutica_j26_4_expul_H"] = $_POST["terapeutica_j26_4_expul_H"];
    $dato["terapeutica_j26_4_expul_T"] = $_POST["terapeutica_j26_4_expul_T"];

    $dato["terapeutica_j26_4_total_M"] = $_POST["terapeutica_j26_4_total_M"];
    $dato["terapeutica_j26_4_total_H"] = $_POST["terapeutica_j26_4_total_H"];
    $dato["terapeutica_j26_4_total_T"] = $_POST["terapeutica_j26_4_total_T"];
    $dato["terapeutica_j26_4_noaplica"] = $_POST["terapeutica_j26_4_noaplica"];

    $dato["terapeutica_j26_5_ejeSen_M"] = $_POST["terapeutica_j26_5_ejeSen_M"];
    $dato["terapeutica_j26_5_ejeSen_H"] = $_POST["terapeutica_j26_5_ejeSen_H"];
    $dato["terapeutica_j26_5_ejeSen_T"] = $_POST["terapeutica_j26_5_ejeSen_T"];

    $dato["terapeutica_j26_5_procAbr_M"] = $_POST["terapeutica_j26_5_procAbr_M"];
    $dato["terapeutica_j26_5_procAbr_H"] = $_POST["terapeutica_j26_5_procAbr_H"];
    $dato["terapeutica_j26_5_procAbr_T"] = $_POST["terapeutica_j26_5_procAbr_T"];

    $dato["terapeutica_j26_5_solAlt_M"] = $_POST["terapeutica_j26_5_solAlt_M"];
    $dato["terapeutica_j26_5_solAlt_H"] = $_POST["terapeutica_j26_5_solAlt_H"];
    $dato["terapeutica_j26_5_solAlt_T"] = $_POST["terapeutica_j26_5_solAlt_T"];
    $dato["terapeutica_j26_5_noaplica"] = $_POST["terapeutica_j26_5_noaplica"];

    $dato["terapeutica_j26_6_acuRep_M"] = $_POST["terapeutica_j26_6_acuRep_M"];
    $dato["terapeutica_j26_6_acuRep_H"] = $_POST["terapeutica_j26_6_acuRep_H"];
    $dato["terapeutica_j26_6_acuRep_T"] = $_POST["terapeutica_j26_6_acuRep_T"];

    $dato["terapeutica_j26_6_suspCon_M"] = $_POST["terapeutica_j26_6_suspCon_M"];
    $dato["terapeutica_j26_6_suspCon_H"] = $_POST["terapeutica_j26_6_suspCon_H"];
    $dato["terapeutica_j26_6_suspCon_T"] = $_POST["terapeutica_j26_6_suspCon_T"];
    $dato["terapeutica_j26_6_noaplica"] = $_POST["terapeutica_j26_6_noaplica"];

    $dato["terapeutica_j26_7_firmado_M"] = $_POST["terapeutica_j26_7_firmado_M"];
    $dato["terapeutica_j26_7_firmado_H"] = $_POST["terapeutica_j26_7_firmado_H"];
    $dato["terapeutica_j26_7_firmado_T"] = $_POST["terapeutica_j26_7_firmado_T"];

    $dato["terapeutica_j26_7_tramite_M"] = $_POST["terapeutica_j26_7_tramite_M"];
    $dato["terapeutica_j26_7_tramite_H"] = $_POST["terapeutica_j26_7_tramite_H"];
    $dato["terapeutica_j26_7_tramite_T"] = $_POST["terapeutica_j26_7_tramite_T"];
    $dato["terapeutica_j26_7_noaplica"] = $_POST["terapeutica_j26_7_noaplica"];

    $dato["terapeutica_j26_8_susp_M"] = $_POST["terapeutica_j26_8_susp_M"];
    $dato["terapeutica_j26_8_susp_H"] = $_POST["terapeutica_j26_8_susp_H"];
    $dato["terapeutica_j26_8_susp_T"] = $_POST["terapeutica_j26_8_susp_T"];

    $dato["terapeutica_j26_8_prorro_M"] = $_POST["terapeutica_j26_8_prorro_M"];
    $dato["terapeutica_j26_8_prorro_H"] = $_POST["terapeutica_j26_8_prorro_H"];
    $dato["terapeutica_j26_8_prorro_T"] = $_POST["terapeutica_j26_8_prorro_T"];

    $dato["terapeutica_j26_8_cond_M"] = $_POST["terapeutica_j26_8_cond_M"];
    $dato["terapeutica_j26_8_cond_H"] = $_POST["terapeutica_j26_8_cond_H"];
    $dato["terapeutica_j26_8_cond_T"] = $_POST["terapeutica_j26_8_cond_T"];

    $dato["terapeutica_j26_8_incum_M"] = $_POST["terapeutica_j26_8_incum_M"];
    $dato["terapeutica_j26_8_incum_H"] = $_POST["terapeutica_j26_8_incum_H"];
    $dato["terapeutica_j26_8_incum_T"] = $_POST["terapeutica_j26_8_incum_T"];

    $dato["terapeutica_j26_8_otras"] = $_POST["terapeutica_j26_8_otras"];
    $dato["terapeutica_j26_8_otras_M"] = $_POST["terapeutica_j26_8_otras_M"];
    $dato["terapeutica_j26_8_otras_H"] = $_POST["terapeutica_j26_8_otras_H"];
    $dato["terapeutica_j26_8_otras_T"] = $_POST["terapeutica_j26_8_otras_T"];

    $dato["terapeutica_j26_8_noaplica"] = $_POST["terapeutica_j26_8_noaplica"];}

    $dato["terapeutica_j26_9_imputadas_M"] = $_POST["terapeutica_j26_9_imputadas_M"];
    $dato["terapeutica_j26_9_imputadas_H"] = $_POST["terapeutica_j26_9_imputadas_H"];
    $dato["terapeutica_j26_9_imputadas_T"] = $_POST["terapeutica_j26_9_imputadas_T"];
    $dato["terapeutica_j26_9_imputadas_noapli"] = $_POST["terapeutica_j26_9_imputadas_noapli"];

    $actualizar = ModeloJueces::mdlEditarFJuecesTab9("jueces",  $dato);


    echo $actualizar;
  }else{
    //INSERTA
    $dato["uuid"] = $_POST["uuid"];

    $dato["justicia_j24_mesas"] = $_POST["justicia_j24_mesas"];

    $dato["justicia_j24_1_segobedo"] = $_POST["justicia_j24_1_segobedo"];
    $dato["justicia_j24_1_uasj"] = $_POST["justicia_j24_1_uasj"];
    $dato["justicia_j24_1_presitsje"] = $_POST["justicia_j24_1_presitsje"];
    $dato["justicia_j24_1_fiscalprocu"] = $_POST["justicia_j24_1_fiscalprocu"];
    $dato["justicia_j24_1_ssp"] = $_POST["justicia_j24_1_ssp"];
    $dato["justicia_j24_1_ide"] = $_POST["justicia_j24_1_ide"];
    $dato["justicia_j24_1_peni"] = $_POST["justicia_j24_1_peni"];
    $dato["justicia_j24_1_medidasCau"] = $_POST["justicia_j24_1_medidasCau"];
    $dato["justicia_j24_1_iem"] = $_POST["justicia_j24_1_iem"];
    $dato["justicia_j24_1_difEst"] = $_POST["justicia_j24_1_difEst"];
    $dato["justicia_j24_1_sipinna"] = $_POST["justicia_j24_1_sipinna"];
    $dato["justicia_j24_1_salud"] = $_POST["justicia_j24_1_salud"];
    $dato["justicia_j24_1_asesoresJur"] = $_POST["justicia_j24_1_asesoresJur"];
    $dato["justicia_j24_1_justMuj"] = $_POST["justicia_j24_1_justMuj"];
    $dato["justicia_j24_1_delGene"] = $_POST["justicia_j24_1_delGene"];
    $dato["justicia_j24_1_direPeni"] = $_POST["justicia_j24_1_direPeni"];
    $dato["justicia_j24_1_direInteAd"] = $_POST["justicia_j24_1_direInteAd"];
    $dato["justicia_j24_1_mecaAlt"] = $_POST["justicia_j24_1_mecaAlt"];
    $dato["justicia_j24_1_periFor"] = $_POST["justicia_j24_1_periFor"];
    $dato["justicia_j24_1_otros"] = $_POST["justicia_j24_1_otros"];
    $dato["justicia_j24_1_otrosCua"] = $_POST["justicia_j24_1_otrosCua"];
    $dato["justicia_j24_1_noaplica"] = $_POST["justicia_j24_1_noaplica"];
    $dato["justicia_j24_1_nosesabe"] = $_POST["justicia_j24_1_nosesabe"];

    $dato["justicia_j24_2_semanal"] = $_POST["justicia_j24_2_semanal"];
    $dato["justicia_j24_2_quincenal"] = $_POST["justicia_j24_2_quincenal"];
    $dato["justicia_j24_2_mensual"] = $_POST["justicia_j24_2_mensual"];
    $dato["justicia_j24_2_bimestral"] = $_POST["justicia_j24_2_bimestral"];
    $dato["justicia_j24_2_trimestral"] = $_POST["justicia_j24_2_trimestral"];
    $dato["justicia_j24_2_semestral"] = $_POST["justicia_j24_2_semestral"];
    $dato["justicia_j24_2_anual"] = $_POST["justicia_j24_2_anual"];
    $dato["justicia_j24_2_noaplica"] = $_POST["justicia_j24_2_noaplica"];
    $dato["justicia_j24_2_nosesabe"] = $_POST["justicia_j24_2_nosesabe"];

    $dato["justicia_j24_3_buepra"] = $_POST["justicia_j24_3_buepra"];

    $dato["impacto_j25_medidasPrev"] = $_POST["impacto_j25_medidasPrev"];

    $dato["impacto_j25_1_desc"] = $_POST["impacto_j25_1_desc"];

    $dato["impacto_j25__2_medidasInn"] = $_POST["impacto_j25__2_medidasInn"];

    $dato["impacto_j25_3_desc"] = $_POST["impacto_j25_3_desc"];

    $dato["terapeutica_j26_justTer"] = $_POST["terapeutica_j26_justTer"];
    $dato["terapeutica_j26_justTer_noaplica"] = $_POST["terapeutica_j26_justTer_noaplica"];
    $dato["terapeutica_j26_justTer_nosesabe"] = $_POST["terapeutica_j26_justTer_nosesabe"];

    $dato["terapeutica_j26_1_psicoa_M"] = $_POST["terapeutica_j26_1_psicoa_M"];
    $dato["terapeutica_j26_1_psicoa_H"] = $_POST["terapeutica_j26_1_psicoa_H"];
    $dato["terapeutica_j26_1_psicoa_T"] = $_POST["terapeutica_j26_1_psicoa_T"];
    $dato["terapeutica_j26_1_psicoa_noaplica"] = $_POST["terapeutica_j26_1_psicoa_noaplica"];

    $dato["terapeutica_j26_2_proJustTer_M"] = $_POST["terapeutica_j26_2_proJustTer_M"];
    $dato["terapeutica_j26_2_proJustTer_H"] = $_POST["terapeutica_j26_2_proJustTer_H"];
    $dato["terapeutica_j26_2_proJustTer_T"] = $_POST["terapeutica_j26_2_proJustTer_T"];

    $dato["terapeutica_j26_2_proJustTer_noaplica"] = $_POST["terapeutica_j26_2_proJustTer_noaplica"];

    $dato["terapeutica_j26_3_egresoJustTer_M"] = $_POST["terapeutica_j26_3_egresoJustTer_M"];
    $dato["terapeutica_j26_3_egresoJustTer_H"] = $_POST["terapeutica_j26_3_egresoJustTer_H"];
    $dato["terapeutica_j26_3_egresoJustTer_T"] = $_POST["terapeutica_j26_3_egresoJustTer_T"];

    $dato["terapeutica_j26_3_noaplica"] = $_POST["terapeutica_j26_3_noaplica"];

    $dato["terapeutica_j26_4_bajaVol_M"] = $_POST["terapeutica_j26_4_bajaVol_M"];
    $dato["terapeutica_j26_4_bajaVol_H"] = $_POST["terapeutica_j26_4_bajaVol_H"];
    $dato["terapeutica_j26_4_bajaVol_T"] = $_POST["terapeutica_j26_4_bajaVol_T"];

    $dato["terapeutica_j26_4_expul_M"] = $_POST["terapeutica_j26_4_expul_M"];
    $dato["terapeutica_j26_4_expul_H"] = $_POST["terapeutica_j26_4_expul_H"];
    $dato["terapeutica_j26_4_expul_T"] = $_POST["terapeutica_j26_4_expul_T"];

    $dato["terapeutica_j26_4_total_M"] = $_POST["terapeutica_j26_4_total_M"];
    $dato["terapeutica_j26_4_total_H"] = $_POST["terapeutica_j26_4_total_H"];
    $dato["terapeutica_j26_4_total_T"] = $_POST["terapeutica_j26_4_total_T"];
    $dato["terapeutica_j26_4_noaplica"] = $_POST["terapeutica_j26_4_noaplica"];

    $dato["terapeutica_j26_5_ejeSen_M"] = $_POST["terapeutica_j26_5_ejeSen_M"];
    $dato["terapeutica_j26_5_ejeSen_H"] = $_POST["terapeutica_j26_5_ejeSen_H"];
    $dato["terapeutica_j26_5_ejeSen_T"] = $_POST["terapeutica_j26_5_ejeSen_T"];

    $dato["terapeutica_j26_5_procAbr_M"] = $_POST["terapeutica_j26_5_procAbr_M"];
    $dato["terapeutica_j26_5_procAbr_H"] = $_POST["terapeutica_j26_5_procAbr_H"];
    $dato["terapeutica_j26_5_procAbr_T"] = $_POST["terapeutica_j26_5_procAbr_T"];

    $dato["terapeutica_j26_5_solAlt_M"] = $_POST["terapeutica_j26_5_solAlt_M"];
    $dato["terapeutica_j26_5_solAlt_H"] = $_POST["terapeutica_j26_5_solAlt_H"];
    $dato["terapeutica_j26_5_solAlt_T"] = $_POST["terapeutica_j26_5_solAlt_T"];
    $dato["terapeutica_j26_5_noaplica"] = $_POST["terapeutica_j26_5_noaplica"];

    $dato["terapeutica_j26_6_acuRep_M"] = $_POST["terapeutica_j26_6_acuRep_M"];
    $dato["terapeutica_j26_6_acuRep_H"] = $_POST["terapeutica_j26_6_acuRep_H"];
    $dato["terapeutica_j26_6_acuRep_T"] = $_POST["terapeutica_j26_6_acuRep_T"];

    $dato["terapeutica_j26_6_suspCon_M"] = $_POST["terapeutica_j26_6_suspCon_M"];
    $dato["terapeutica_j26_6_suspCon_H"] = $_POST["terapeutica_j26_6_suspCon_H"];
    $dato["terapeutica_j26_6_suspCon_T"] = $_POST["terapeutica_j26_6_suspCon_T"];
    $dato["terapeutica_j26_6_noaplica"] = $_POST["terapeutica_j26_6_noaplica"];

    $dato["terapeutica_j26_7_firmado_M"] = $_POST["terapeutica_j26_7_firmado_M"];
    $dato["terapeutica_j26_7_firmado_H"] = $_POST["terapeutica_j26_7_firmado_H"];
    $dato["terapeutica_j26_7_firmado_T"] = $_POST["terapeutica_j26_7_firmado_T"];

    $dato["terapeutica_j26_7_tramite_M"] = $_POST["terapeutica_j26_7_tramite_M"];
    $dato["terapeutica_j26_7_tramite_H"] = $_POST["terapeutica_j26_7_tramite_H"];
    $dato["terapeutica_j26_7_tramite_T"] = $_POST["terapeutica_j26_7_tramite_T"];
    $dato["terapeutica_j26_7_noaplica"] = $_POST["terapeutica_j26_7_noaplica"];

    $dato["terapeutica_j26_8_susp_M"] = $_POST["terapeutica_j26_8_susp_M"];
    $dato["terapeutica_j26_8_susp_H"] = $_POST["terapeutica_j26_8_susp_H"];
    $dato["terapeutica_j26_8_susp_T"] = $_POST["terapeutica_j26_8_susp_T"];

    $dato["terapeutica_j26_8_prorro_M"] = $_POST["terapeutica_j26_8_prorro_M"];
    $dato["terapeutica_j26_8_prorro_H"] = $_POST["terapeutica_j26_8_prorro_H"];
    $dato["terapeutica_j26_8_prorro_T"] = $_POST["terapeutica_j26_8_prorro_T"];

    $dato["terapeutica_j26_8_cond_M"] = $_POST["terapeutica_j26_8_cond_M"];
    $dato["terapeutica_j26_8_cond_H"] = $_POST["terapeutica_j26_8_cond_H"];
    $dato["terapeutica_j26_8_cond_T"] = $_POST["terapeutica_j26_8_cond_T"];

    $dato["terapeutica_j26_8_incum_M"] = $_POST["terapeutica_j26_8_incum_M"];
    $dato["terapeutica_j26_8_incum_H"] = $_POST["terapeutica_j26_8_incum_H"];
    $dato["terapeutica_j26_8_incum_T"] = $_POST["terapeutica_j26_8_incum_T"];

    $dato["terapeutica_j26_8_otras"] = $_POST["terapeutica_j26_8_otras"];
    $dato["terapeutica_j26_8_otras_M"] = $_POST["terapeutica_j26_8_otras_M"];
    $dato["terapeutica_j26_8_otras_H"] = $_POST["terapeutica_j26_8_otras_H"];
    $dato["terapeutica_j26_8_otras_T"] = $_POST["terapeutica_j26_8_otras_T"];
    $dato["terapeutica_j26_8_noaplica"] = $_POST["terapeutica_j26_8_noaplica"];

    $dato["terapeutica_j26_9_imputadas_M"] = $_POST["terapeutica_j26_9_imputadas_M"];
    $dato["terapeutica_j26_9_imputadas_H"] = $_POST["terapeutica_j26_9_imputadas_H"];
    $dato["terapeutica_j26_9_imputadas_T"] = $_POST["terapeutica_j26_9_imputadas_T"];
    $dato["terapeutica_j26_9_imputadas_noapli"] = $_POST["terapeutica_j26_9_imputadas_noapli"];

    if($guardar=="ok"){

      $datosGuardados =  ModeloJueces::mdlMostrarJueces("jueces","uuid",  $dato["uuid"]);
      echo  $datosGuardados[0]["id"];
    }else{
      echo $guardar;
    }


  }


  if(isset($_POST["FINALIZARFORMULARIO"])){

    include "../modelos/jueces1.modelo.php";

    $dato = $_POST["idFormulario"];
    $actualizar = ModeloJueces::mdlEditarFJuecesTab10("jueces",  $dato);


    echo $actualizar;
    //hash_update

  }
