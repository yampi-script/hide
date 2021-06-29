<?php

require_once "../../../modelos/jueces1.modelo.php";

$idDato = $_GET["id"];

$datosFormulario = ModeloJueces::mdlMostrarJuecesID("uuid",$idDato);

//agregar libreria tcpdf

require_once('tcpdf_include.php');

//clase para crear header y footer personalizado

class mipdf extends TCPDF{



  public function Header() {

    require_once "../../../modelos/jueces1.modelo.php";

    $idDato = $_GET["id"];

    $datosFormulario = ModeloJueces::mdlMostrarJuecesID("uuid",$idDato);



  if($datosFormulario["estatus"] == "0"){

  $logo = 'fondovista.png';
  $this->Image($logo, 0, 26, 210, 250, 'PNG', '', '', true, 100, '', false, false, 0, false, false, false);
    }else{
       $logo = 'fondofin.png';
       $this->Image($logo, 0, 26, 210, 250, 'PNG', '', '', true, 100, '', false, false, 0, false, false, false);

     }
 }


    //$logo = 'fondofin.png';

  //  $this->Image($logo, 0, 26, 210, 250, 'PNG', '', '', true, 100, '', false, false, 0, false, false, false);

  //  $this->SetFont('helvetica', 'B', 20);

  //} else  {

  //  $logo2 = 'fondofin.png';

  ////  $this->Image($logo2, 0, 26, 210, 250, 'PNG', '', '', true, 100, '', false, false, 0, false, false, false);

  //////  $this->SetFont('helvetica', 'B', 20);

////////  }

//////////  }


    // public function Header(){

  //  require_once "../../../modelos/jueces1.modelo.php";

  //  $idDato = $_GET["id"];

    // $datosFormulario = ModeloJueces::mdlMostrarJuecesID("uuid",$idDato);
    //  if($datosFormulario["estatus"] == "0"){
      //   $html = '<div><img src="fondovista.png"></div>';
  //        $this->writeHTMLCell(0, 0, '', '', $html, 0, 4, 0, true, '', true);
    //  }else{
  //        $html = '<div><img src="fondofin.png" alt=""></div>';
  //        $this->writeHTMLCell(0, 0, '', '', $html, 0, 4, 0, true, '', true);
  //    }
  //  }


  //footer personalizado
  public function Footer() {
    // posicion
    $this->SetY(-15);
    // fuente
    $this->SetFont('helvetica', 'I', 8);
    // numero de pagina
    $this->Cell(0, 10, 'Página '.$this->getAliasNumPage().' de '.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');


  }
}

//iniciando un nuevo pdf
$pdf = new mipdf(PDF_PAGE_ORIENTATION, 'mm', 'Letter', true, 'UTF-8', false);

//establecer margenes
$pdf->SetMargins(5, 5, 5);
$pdf->SetHeaderMargin(20);

//informacion del pdf
$pdf->SetCreator('SEGOB');
$pdf->SetAuthor('SEGOB');
$pdf->SetTitle('Plataforma Unidad de Justicia');
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);



//tipo de fuente y tamanio

$pdf->SetFont('helvetica', '', 12);


//agregar pag 1
$pdf->AddPage();
$html = '



<table>
<tr><td style="width:100%"><img src="images/uasjgrande.png"></td></tr>
<p style="font-size: 12px;"></p>

<tr>
  <td style="width: 100%; text-align: center; font-size: 14px; background-color:#1c584b; padding: 4px 4px 4px; font-weight:bold;  color:white;">
  CONTACTO PRINCIPAL
  </td>
 </tr>
 <p style="font-size: 12px;"></p>

 <tr>
<td style="width: 100%;">
<b>Nombre de la persona responsable del cuestionario:</b><br>'.$datosFormulario["pcontacto"].'<br>
<b>Cargo:</b>  '.$datosFormulario["cargo"].'<br>
<b>Área o unidad de adscripción:</b> '.$datosFormulario["area"].'<br>
<b>Correo electrónico:</b> '.$datosFormulario["mail"] .'<br>
<b>Teléfono de oficina:</b>  '.$datosFormulario["telofi"] .' <b>Extensión:</b>  '.$datosFormulario["ext"] .' <b>Otro teléfono:</b>  '.$datosFormulario["telextra"] .'
<p style="font-size: 12px;"></p>
</td>


   </tr>

   <tr>
     <td style="width: 100%; text-align: center; font-size: 14px; background-color:#1c584b; padding: 4px 4px 4px; font-weight:bold;  color:white;">
       CONTACTO SECUNDARIO
     </td>
</tr>
<p style="font-size: 12px;"></p>
<tr>
<td style="width: 100%;">
<b>Nombre de la persona responsable del cuestionario:</b><br>'.$datosFormulario["pcontacto2"].'<br>

<b>Cargo:</b>'.$datosFormulario["cargo2"] .'<br>
<b>Área o unidad de adscripción:</b>'.$datosFormulario["area2"] .'<br>

<b>Correo electrónico:</b>'.$datosFormulario["mail2"] .'<br>

<b>Teléfono de oficina:</b>'.$datosFormulario["telofi2"] .' <b>Extensión:</b>  '.$datosFormulario["ext2"] .' <b>Otro teléfono:</b>  '.$datosFormulario["telextra2"] .'






</td>


  </tr>


</table>




';







$html2 = '
<!-- Inicio Tab 1-->
<table>
   <tr>
     <td style="width: 100%; text-align: center; font-size: 14px; background-color:#1c584b; padding: 4px 4px 4px; font-weight:bold;  color:white;">
     1. ESTRUCTURA ORGANIZACIONAL
     </td>
</tr>
<tr>
<td><p style="font-size: 12px;"><b>
1.- Total de Distritos Judiciales con los que cuenta el Poder Judicial de la entidad:
</b></p>
</td>
  </tr>
</table>
<table  cellpadding="1" cellspacing="1">
 <tr>
  <td width="136"  align="center" >'.$datosFormulario["infraestructura_j1_tot"] .'</td>
 </tr>
</table>


<table>
<tr>
<td><p style="font-size: 12px;"><b>
1.1.- Total de juzgados con los que cuenta el Poder Judicial de la entidad:
</b></p>
</td>
  </tr>
</table>
<table  cellpadding="1" cellspacing="1">
 <tr>
  <td width="136"  align="center" >'.$datosFormulario["infraestructura_j1_1_totjuz"] .'</td>
 </tr>
</table>


<table  cellpadding="1" cellspacing="1">
<thead>
<tr style="background-color:#2d8673;color:#FFFFFF; border-color: #FFFFFF;">
  <td width="40" ><b>#</b></td>
  <td width="288" align="center"><b>Descripción</b></td>
  <td width="128" align="center"><b>TOTAL</b></td>
 </tr>
</thead>
 <tr>
  <td width="40" align="center"><b>1</b></td>
  <td width="128" >Total de juzgados</td>
  <td width="128" align="center">'.$datosFormulario["infraestructura_j1_2_totjuz"] .'</td>
   </tr>
 <tr>
 <td width="40" align="center"><b>2</b></td>
  <td width="148" >Materia Sistema Penal Acusatorio</td>
  <td width="128" align="center">'.$datosFormulario["infraestructura_j1_2_matpenacu"] .'</td>
   </tr>
 <tr>
  <td width="40" align="center"><b>3</b></td>
  <td width="288" >Materia Penal con funciones del Sistema Tradicional</td>
  <td width="128" align="center">'.$datosFormulario["infraestructura_j1_2_matpenfun"] .'</td>
   </tr>
</table>



<table>
   <tr>
     <td style="width: 100%; text-align: center; font-size: 14px; background-color:#1c584b; padding: 4px 4px 4px; font-weight:bold;  color:white;">
     2. PERSONAL
     </td>
</tr>
<tr>
<td><p style="font-size: 12px;"><b>
2.- ¿Cuántas personas laboran en la institución? Desglosar por sexo.
</b></p>
</td>
  </tr>
</table>
<table  cellpadding="1" cellspacing="1">
<thead>

<tr style="background-color:#2d8673;color:#FFFFFF; border-color: #FFFFFF;">
  <td width="128" align="center"><b>Mujeres</b></td>
  <td width="128" align="center"><b>Hombres</b></td>
  <td width="128" align="center"><b>TOTAL</b></td>

 </tr>
</thead>
 <tr>
    <td width="128" align="center">'.$datosFormulario["personal_j2_perlab_M"] .'</td>
    <td width="128" align="center">'.$datosFormulario["personal_j2_perlab_H"] .'</td>
    <td width="128" align="center">'.$datosFormulario["personal_j2_perlab_T"] .'</td>
   </tr>
</table>



<table>
<tr>
<td><b>2.1.- ¿Cuántas personas laboran en la institución? Desglosar por función y sexo.
</b>
</td>
  </tr>
</table>



<table  cellpadding="1" cellspacing="1">
<thead>
<tr style="background-color:#2d8673;color:#FFFFFF; border-color: #FFFFFF;">
  <td width="40" align="center"><b>#</b></td>
  <td width="128" align="center"><b>Descripción</b></td>
  <td width="128" align="center"><b>MUJER</b></td>
  <td width="128" align="center"> <b>HOMBRE</b></td>
  <td width="128" align="center"><b>TOTAL</b></td>

 </tr>
</thead>
 <tr>
  <td width="40" align="center"><b>1</b></td>
  <td width="128" >Magistrados/as</td>
  <td width="128" align="center">'.$datosFormulario["personal_j2_1_mag_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["personal_j2_1_mag_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["personal_j2_1_mag_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>2</b></td>
  <td width="128">Jueces/zas</td>
  <td width="128" align="center">'.$datosFormulario["personal_j2_1_jec_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["personal_j2_1_jec_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["personal_j2_1_jec_T"] .'</td>
 </tr>
 <tr>
  <td width="40" align="center"><b>3</b></td>
  <td width="128">Secretarios/as de estudio y cuenta</td>
  <td width="128" align="center">'.$datosFormulario["personal_j2_1_sec_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["personal_j2_1_sec_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["personal_j2_1_sec_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>4</b></td>
 <td width="128">Actuarios/as o diligenciarios/as</td>
 <td width="128" align="center">'.$datosFormulario["personal_j2_1_act_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["personal_j2_1_act_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["personal_j2_1_act_T"] .'</td>
 </tr>
 <tr>
<td width="40" align="center"><b>5</b></td>
 <td width="128">Otros servidores con carrera judicial</td>
 <td width="128" align="center">'.$datosFormulario["personal_j2_1_otrserv_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["personal_j2_1_otrserv_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["personal_j2_1_otrserv_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>6</b></td>
 <td width="128">Otros (¿Cuáles?) '.$datosFormulario["personal_j2_1_otros"] .'</td>
 <td width="128" align="center">'.$datosFormulario["personal_j2_1_otros_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["personal_j2_1_otros_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["personal_j2_1_otros_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>7</b></td>
 <td width="128">Total '.$datosFormulario["personal_j2_1_otros"] .'</td>
 <td width="128" align="center">'.$datosFormulario["personal_j2_1_total_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["personal_j2_1_total_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["personal_j2_1_total_T"] .'</td>
 </tr>
 </table>



 <table>
 <tr>
 <td><p style="font-size: 12px;"><b>
 2.2.- ¿Con cuántos magistrados en materia penal cuenta el Poder Judicial de la entidad? Desglosar por sexo.
 </b></p>
 </td>
   </tr>
 </table>
 <table  cellpadding="1" cellspacing="1">
 <thead>
 <tr style="background-color:#2d8673;color:#FFFFFF; border-color: #FFFFFF;">
   <td width="128" align="center"><b>Mujeres</b></td>
   <td width="128" align="center"><b>Hombres</b></td>
   <td width="128" align="center"><b>TOTAL</b></td>
  </tr>
 </thead>
  <tr>
     <td width="128" align="center">'.$datosFormulario["personal_j2_2_mag_M"] .'</td>
     <td width="128" align="center">'.$datosFormulario["personal_j2_2_mag_H"] .'</td>
     <td width="128" align="center">'.$datosFormulario["personal_j2_2_mag_T"] .'</td>
    </tr>
 </table>




 <table>
 <tr>
 <td><p style="font-size: 12px;"><b>
 2.3.- ¿Con cuántos jueces en materia penal cuenta el Poder Judicial de la entidad? Desglosar por sexo.
 </b></p>
 </td>
   </tr>
 </table>
 <table  cellpadding="1" cellspacing="1">
 <thead>
 <tr style="background-color:#2d8673;color:#FFFFFF; border-color: #FFFFFF;">
   <td width="128" align="center"><b>Mujeres</b></td>
   <td width="128" align="center"><b>Hombres</b></td>
   <td width="128" align="center"><b>TOTAL</b></td>
  </tr>
 </thead>
  <tr>
     <td width="128" align="center">'.$datosFormulario["personal_j2_3_jue_M"] .'</td>
     <td width="128" align="center">'.$datosFormulario["personal_j2_3_jue_H"] .'</td>
     <td width="128" align="center">'.$datosFormulario["personal_j2_3_jue_T"] .'</td>
    </tr>
 </table>



 <table>
 <tr>
 <td><b>
 2.4.- Cuál es el ingreso bruto mensual del personal reportado en las categorías 1 a 5 de la pregunta 2.1? Desglosar por ingreso bruto mensual y por sexo.
 </b>
 </td>
   </tr>
 </table>
 <table  cellpadding="1" cellspacing="1">
 <thead>
 <tr style="background-color:#2d8673;color:#FFFFFF; border-color: #FFFFFF;">
   <td width="40" align="center"><b>#</b></td>
   <td width="128" align="center"><b>Descripción</b></td>
   <td width="128" align="center"><b>MUJER</b></td>
   <td width="128" align="center"> <b>HOMBRE</b></td>
   <td width="128" align="center"><b>TOTAL</b></td>
  </tr>
 </thead>
  <tr>
   <td width="40" align="center"><b>1</b></td>
   <td width="128" >Sin ingresos</td>
   <td width="128" align="center">'.$datosFormulario["personal_j2_4_siningre_M"] .'</td>
   <td width="128" align="center">'.$datosFormulario["personal_j2_4_siningre_H"] .'</td>
   <td width="128" align="center">'.$datosFormulario["personal_j2_4_siningre_T"] .'</td>
  </tr>
  <tr>
  <td width="40" align="center"><b>2</b></td>
   <td width="128">De 1 a 5,000 pesos</td>
   <td width="128" align="center">'.$datosFormulario["personal_j2_4_de1a5000_M"] .'</td>
   <td width="128" align="center">'.$datosFormulario["personal_j2_4_de1a5000_H"] .'</td>
   <td width="128" align="center">'.$datosFormulario["personal_j2_4_de1a5000_T"] .'</td>
  </tr>
  <tr>
   <td width="40" align="center"><b>3</b></td>
   <td width="128">De 5,001 a 10,000 pesos</td>
   <td width="128" align="center">'.$datosFormulario["personal_j2_4_de5001a10000_M"] .'</td>
   <td width="128" align="center">'.$datosFormulario["personal_j2_4_de5001a10000_H"] .'</td>
   <td width="128" align="center">'.$datosFormulario["personal_j2_4_de5001a10000_T"] .'</td>
  </tr>
  <tr>
  <td width="40" align="center"><b>4</b></td>
  <td width="128">De 10,001 a 15,000 pesos</td>
  <td width="128" align="center">'.$datosFormulario["personal_j2_4_de10001a15000_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["personal_j2_4_de10001a15000_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["personal_j2_4_de10001a15000_T"] .'</td>
  </tr>
  <tr>
 <td width="40" align="center"><b>5</b></td>
  <td width="128">De 15,001 a 20,000 pesos
  </td>
  <td width="128" align="center">'.$datosFormulario["personal_j2_4_de15001a20000_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["personal_j2_4_de15001a20000_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["personal_j2_4_de15001a20000_T"] .'</td>
  </tr>
  <tr>
  <td width="40" align="center"><b>6</b></td>
  <td width="128">De 20,001 a 25,000 pesos</td>
  <td width="128" align="center">'.$datosFormulario["personal_j2_4_de20001a25000_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["personal_j2_4_de20001a25000_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["personal_j2_4_de20001a25000_T"] .'</td>
  </tr>
  <tr>
  <td width="40" align="center"><b>7</b></td>
  <td width="128">De 25,001 a 30,000 pesos</td>
  <td width="128" align="center">'.$datosFormulario["personal_j2_4_de25001a30000_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["personal_j2_4_de25001a30000_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["personal_j2_4_de25001a30000_T"] .'</td>
  </tr>
  <tr>
  <td width="40" align="center"><b>8</b></td>
  <td width="128">De 30,001 a 35,000 pesos</td>
  <td width="128" align="center">'.$datosFormulario["personal_j2_4_de30001a35000_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["personal_j2_4_de30001a35000_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["personal_j2_4_de30001a35000_T"] .'</td>
  </tr>
  <tr>
  <td width="40" align="center"><b>9</b></td>
  <td width="128">De 35,001 a 40,000 pesos</td>
  <td width="128" align="center">'.$datosFormulario["personal_j2_4_de35001a40000_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["personal_j2_4_de35001a40000_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["personal_j2_4_de35001a40000_T"] .'</td>
  </tr>
  <tr>
  <td width="40" align="center"><b>10</b></td>
  <td width="128">De 40,001 a 45,000 pesos</td>
  <td width="128" align="center">'.$datosFormulario["personal_j2_4_de40001a45000_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["personal_j2_4_de40001a45000_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["personal_j2_4_de40001a45000_T"] .'</td>
  </tr>
  <tr>
  <td width="40" align="center"><b>11</b></td>
  <td width="128">De 45,001 a 50,000 pesos</td>
  <td width="128" align="center">'.$datosFormulario["personal_j2_4_de45001a50000_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["personal_j2_4_de45001a50000_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["personal_j2_4_de45001a50000_T"] .'</td>
  </tr>
  <tr>
  <td width="40" align="center"><b>12</b></td>
  <td width="128">Más de 50,000 pesos</td>
  <td width="128" align="center">'.$datosFormulario["personal_j2_4_masde50000_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["personal_j2_4_masde50000_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["personal_j2_4_masde50000_T"] .'</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["personal_j2_4_nosesabe"] .'</td>
  </tr>
 </table>



<br><br>



<table>
   <tr>
     <td style="width: 100%; text-align: center; font-size: 14px; background-color:#1c584b; padding: 4px 4px 4px; font-weight:bold;  color:white;">
     3. CAPACITACIÓN Y EVALUACIÓN DE PERSONAL
     </td>
</tr>
<tr>
<td><p style="font-size: 12px;"><b>
3.- ¿Cuántas personas laborando recibieron al menos una capacitación durante el año 2020? Desglosar por función y sexo.
</b></p>
</td>
  </tr>
</table>
<table  cellpadding="1" cellspacing="1">
<thead>
<tr style="background-color:#2d8673;color:#FFFFFF; border-color: #FFFFFF;">
  <td width="40" align="center"><b>#</b></td>
  <td width="128" align="center"><b>Descripción</b></td>
  <td width="128" align="center"><b>MUJER</b></td>
  <td width="128" align="center"> <b>HOMBRE</b></td>
  <td width="128" align="center"><b>TOTAL</b></td>
 </tr>
</thead>
 <tr>
  <td width="40" align="center"><b>1</b></td>
  <td width="128" >Magistrados/as</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_j3_mag_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_j3_mag_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_j3_mag_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>2</b></td>
  <td width="128">Jueces/zas</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_j3_jec_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_j3_jec_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_j3_jec_T"] .'</td>
 </tr>
 <tr>
  <td width="40" align="center"><b>3</b></td>
  <td width="128">Secretarios/as de estudio y cuenta</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_j3_sec_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_j3_sec_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_j3_sec_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>4</b></td>
 <td width="128">Actuarios/as o diligenciarios/as</td>
 <td width="128" align="center">'.$datosFormulario["personal_j2_1_act_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["personal_j2_1_act_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["personal_j2_1_act_T"] .'</td>
 </tr>
 <tr>
<td width="40" align="center"><b>5</b></td>
 <td width="128">Otros servidores con carrera judicial</td>
 <td width="128" align="center">'.$datosFormulario["personal_j2_1_otrserv_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["personal_j2_1_otrserv_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["personal_j2_1_otrserv_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>6</b></td>
 <td width="128">Otros '.$datosFormulario["personal_j2_1_otros"] .'</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_j3_act_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_j3_act_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_j3_act_T"] .'</td>
 </tr>
 <tr>
 <td width="128">'.$datosFormulario["capacitacion_j3_nosesabe"] .'</td>
 </tr>
 </table>




 <table>
 <tr>
 <td><b>
 3.1.- ¿Cuántas personas laborando tomaron al menos una capacitación en las siguientes materias durante el año 2020? Desglosar por sexo.
 </b>
 </td>
   </tr>
 </table>
 <table  cellpadding="1" cellspacing="1">
 <thead>
 <tr style="background-color:#2d8673;color:#FFFFFF; border-color: #FFFFFF;">
   <td width="40" align="center"><b>#</b></td>
   <td width="128" align="center"><b>Descripción</b></td>
   <td width="128" align="center"><b>MUJER</b></td>
   <td width="128" align="center"> <b>HOMBRE</b></td>
   <td width="128" align="center"><b>TOTAL</b></td>
  </tr>
 </thead>
  <tr>
   <td width="40" align="center"><b>1</b></td>
   <td width="128" >Sistema de Justicia Penal Acusatorio </td>
   <td width="128" align="center">'.$datosFormulario["capacitacion_j3_1_sisjus_M"] .'</td>
   <td width="128" align="center">'.$datosFormulario["capacitacion_j3_1_sisjus_H"] .'</td>
   <td width="128" align="center">'.$datosFormulario["capacitacion_j3_1_sisjus_T"] .'</td>
  </tr>
  <tr>
  <td width="40" align="center"><b>2</b></td>
   <td width="128"> Debido proceso</td>
   <td width="128" align="center">'.$datosFormulario["capacitacion_j3_1_debpro_M"] .'</td>
   <td width="128" align="center">'.$datosFormulario["capacitacion_j3_1_debpro_H"] .'</td>
   <td width="128" align="center">'.$datosFormulario["capacitacion_j3_1_debpro_T"] .'</td>
  </tr>
  <tr>
   <td width="40" align="center"><b>3</b></td>
   <td width="128">Feminicidio</td>
   <td width="128" align="center">'.$datosFormulario["capacitacion_j3_1_fem_M"] .'</td>
   <td width="128" align="center">'.$datosFormulario["capacitacion_j3_1_fem_H"] .'</td>
   <td width="128" align="center">'.$datosFormulario["capacitacion_j3_1_fem_T"] .'</td>
  </tr>
  <tr>
  <td width="40" align="center"><b>4</b></td>
  <td width="128">Anti trata de personas</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_j3_1_anttra_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_j3_1_anttra_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_j3_1_anttra_T"] .'</td>
  </tr>
  <tr>
 <td width="40" align="center"><b>5</b></td>
  <td width="128">Violencia contra las mujeres</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_j3_1_viomuj_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_j3_1_viomuj_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_j3_1_viomuj_T"] .'</td>
  </tr>
  <tr>
  <td width="40" align="center"><b>6</b></td>
  <td width="128">Atención de casos de mujeres desaparecidas</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_j3_1_mujdes_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_j3_1_mujdes_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_j3_1_mujdes_T"] .'</td>
  </tr>
  <tr>
  <td width="40" align="center"><b>7</b></td>
  <td width="128">Asistencia consular y derechos de extranjeros</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_j3_1_asicon_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_j3_1_asicon_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_j3_1_asicon_T"] .'</td>
  </tr>
  <tr>
  <td width="40" align="center"><b>8</b></td>
  <td width="128">Sistema Integral de Justicia Penal para Adolescentes</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_j3_1_sisint_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_j3_1_sisint_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_j3_1_sisint_T"] .'</td>
  </tr>
  <tr>
  <td width="40" align="center"><b>9</b></td>
  <td width="128">Ejecución de sanciones</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_j3_1_ejesan_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_j3_1_ejesan_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_j3_1_ejesan_T"] .'</td>
  </tr>
  <tr>
  <td width="40" align="center"><b>10</b></td>
  <td width="128">Atención a personas indígenas</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_j3_1_ateper_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_j3_1_ateper_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_j3_1_ateper_T"] .'</td>
  </tr>
  <tr>
  <td width="40" align="center"><b>11</b></td>
  <td width="128">Atención a personas con discapacidad</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_j3_1_atenperdis_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_j3_1_atenperdis_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_j3_1_atenperdis_T"] .'</td>
  </tr>
  <tr>
  <td width="40" align="center"><b>12</b></td>
  <td width="128">Justicia Alternativa</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_j3_1_jusalt_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_j3_1_jusalt_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_j3_1_jusalt_T"] .'</td>
  </tr>
  <tr>
  <td width="40" align="center"><b>13</b></td>
  <td width="128">Justicia Terapéutica</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_j3_1_juster_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_j3_1_juster_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_j3_1_juster_T"] .'</td>
  </tr>
  <tr>
  <td width="40" align="center"><b>14</b></td>
  <td width="128">Justicia Transicional</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_j3_1_justra_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_j3_1_justra_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_j3_1_justra_T"] .'</td>
  </tr>
  <tr>
  <td width="40" align="center"><b>15</b></td>
  <td width="128">Reparación del daño</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_j3_1_rep_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_j3_1_rep_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_j3_1_rep_T"] .'</td>
  </tr>
  <tr>
  <td width="40" align="center"><b>16</b></td>
  <td width="128">Tortura</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_j3_1_tor_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_j3_1_tor_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_j3_1_tor_T"] .'</td>
  </tr>
  <tr>
  <td width="40" align="center"><b>17</b></td>
  <td width="128">Otros '.$datosFormulario["capacitacion_j3_1_otros"] .'</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_j3_1_otros_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_j3_1_otros_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_j3_1_otros_T"] .'</td>
  </tr>
 </table>


 <table>
 <tr>
 <td><p style="font-size: 12px;"><b>
 3.2.- ¿Qué instituciones u organismos nacionales o extranjeros impartieron las capacitaciones previamente mencionadas?
 </b></p>
 </td>
   </tr>
 </table>
 <table  cellpadding="1" cellspacing="1">
  <tr>
   <td width="536"  align="center" >'.$datosFormulario["capacitacion_j3_2_int"] .'</td>
  </tr>

  <tr>
   <td style="width: 100%; text-align: center; font-size: 14px; background-color:#1c584b; padding: 4px 4px 4px; font-weight:bold;  color:white;">
         4. PRESUPUESTO
    </td>
</tr>
 </table>



 <table>




 <tr>
 <td><p style="font-size: 12px;"><b>
 4.- ¿La institución cuenta con autonomía presupuestal?
 </b></p>

 </td>
   </tr>
   <table  cellpadding="1" cellspacing="1">
    <tr>
     <td width="136"  align="center" >'.$datosFormulario["presupuesto_j4_aut"] .'</td>
    </tr>
 </table>


 <table>
 <tr>
 <td><p style="font-size: 12px;"><b>
 4.1.- ¿Cuál fue el presupuesto anual ejercido durante el año 2020?
 </b></p>
 </td>
   </tr>
 </table>
 <table  cellpadding="1" cellspacing="1">
  <tr>
   <td width="436"   >'.$datosFormulario["presupuesto_j4_1_pre"] .'</td>
  </tr>
 </table>


 <table>
 <tr>
 <td><p style="font-size: 12px;"><b>
 4.2.- Presupuesto anual ejercido 2020, por capítulo 1000 – Servicios Personales
 </b></p>
 </td>
   </tr>
 </table>
 <table  cellpadding="1" cellspacing="1">
  <tr>
   <td width="436"  >'.$datosFormulario["presupuesto_j4_2_preserv"] .'</td>
  </tr>
 </table>


<!-- Fin Tab 1-->


<br><br><br>

<!-- Inicio Tab 2-->

<table>
   <tr>
     <td style="width: 100%; text-align: center; font-size: 14px; background-color:#1c584b; padding: 4px 4px 4px; font-weight:bold;  color:white;">
     5. JUSTICIA PARA MUJERES
     </td>
</tr>
<tr>
<td><p style="font-size: 12px;"><b>
5.- ¿Con qué protocolos cuenta la institución para garantizar los derechos de las mujeres?
</b></p>
</td>
  </tr>
  <table  cellpadding="1" cellspacing="1">
   <tr>
   <td width="128">'.$datosFormulario["mujeres_j5_proint"] .'</td>
 <td width="435">Cuáles: '.$datosFormulario["mujeres_j5_proint_cuales"] .'</td>
   </tr>
   <tr>
  <td width="128">'.$datosFormulario["mujeres_j5_prointr"] .'</td>
  <td width="435">Cuáles: '.$datosFormulario["mujeres_j5_prointr_cuales"] .'</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["mujeres_j5_proinv"] .'</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["mujeres_j5_prosupcor"] .'</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["mujeres_j5_prosupcor"] .'</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["mujeres_j5_ninguno"] .'</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["mujeres_j5_otros"].'</td>
  <td width="435">Cuáles: '.$datosFormulario["mujeres_j5_otros_cuales"].'</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["mujeres_j5_nosesabe"] .'</td>
  </tr>
</table>

<table>
<tr>
<td><p style="font-size: 12px;"><b>
5.1.- ¿La institución cuenta con buenas prácticas que considere sean innovadoras para mejorar el acceso a la justicia para las mujeres?
</b></p>
</td>
  </tr>
</table>
<table  cellpadding="1" cellspacing="1">
 <tr>
  <td width="136"  align="center" >'.$datosFormulario["mujeres_j5_1_buepra"] .'</td>
 </tr>
 </table>

 <table>
 <tr>
 <td><p style="font-size: 12px;"><b>
 5.2.- ¿Cuáles son esas buenas prácticas?
 </b></p>
 </td>
   </tr>
 </table>
 <table  cellpadding="1" cellspacing="1">
  <tr>
   <td width="528"  align="center" >'.$datosFormulario["mujeres_j5_2_cuabuepra"] .'</td>
  </tr>
 </table>

 <table>
 <tr>
 <td><p style="font-size: 12px;"><b>
 5.3- Total de personal que cuenta con una especialidad en justicia para las mujeres.
 </b></p>
 </td>
   </tr>
 </table>
 <table  cellpadding="1" cellspacing="1">
 <thead>
 <tr style="background-color:#2d8673;color:#FFFFFF; border-color: #FFFFFF;">
   <td width="128" align="center"><b>Mujeres</b></td>
   <td width="128" align="center"><b>Hombres</b></td>
   <td width="128" align="center"><b>TOTAL</b></td>
  </tr>
 </thead>
  <tr>
     <td width="128" align="center">'.$datosFormulario["mujeres_j5_3_cuenesp_M"] .'</td>
     <td width="128" align="center">'.$datosFormulario["mujeres_j5_3_cuenesp_H"] .'</td>
     <td width="128" align="center">'.$datosFormulario["mujeres_j5_3_cuenesp_T"] .'</td>
    </tr>
 </table>

<br><br><br>
 <table>
    <tr>
      <td style="width: 100%; text-align: center; font-size: 14px; background-color:#1c584b; padding: 4px 4px 4px; font-weight:bold;  color:white;">
      6. JUSTICIA PENAL PARA ADOLESCENTES
      </td>
 </tr>
</table>


<table>
<tr>
<td><p style="font-size: 12px;"><b>
6.- ¿Con qué protocolos cuenta la institución para garantizar los derechos de niñas, niños y adolescentes?
</b></p>
</td>
  </tr>
  <table  cellpadding="1" cellspacing="1">
   <tr>
   <td width="128">'.$datosFormulario["ja_j6_proint"] .'</td>
 <td width="438">Cuáles: '.$datosFormulario["ja_j6_proint_cual"] .'</td>
   </tr>
   <tr>
  <td width="128">'.$datosFormulario["ja_j6_prointr"] .'</td>
  <td width="438">Cuáles: '.$datosFormulario["ja_j6_prointr_cual"] .'</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["ja_j6_proateint"] .'</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["ja_j6_proactjus"] .'</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["ja_j6_ninguno"] .'</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["ja_j6_otros"].'</td>
  <td width="438">Cuáles: '.$datosFormulario["ja_j6_otros_cual"].'</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["ja_j6_nosesabe"] .'</td>
  </tr>
  </table>

  <table>
  <tr>
  <td><p style="font-size: 12px;"><b>
  6.1.- ¿La institución cuenta con buenas prácticas que considere sean innovadoras para mejorar el acceso a la justicia para niñas, niños y adolescentes?
  </b></p>
  </td>
    </tr>
  </table>
  <table  cellpadding="1" cellspacing="1">
   <tr>
    <td width="136"  align="center" >'.$datosFormulario["ja_j6_1_buepra"] .'</td>
   </tr>
   </table>

   <table>
   <tr>
   <td><p style="font-size: 12px;"><b>
   6.2.- ¿Cuáles son esas buenas prácticas?
   </b></p>
   </td>
     </tr>
   </table>
   <table  cellpadding="1" cellspacing="1">
    <tr>
     <td width="528"  align="center" >'.$datosFormulario["ja_j6_2_cuabuepra"] .'</td>
    </tr>
   </table>

   <table>
   <tr>
   <td><p style="font-size: 12px;"><b>
   6.3.- Total de magistrados especializados en Justicia Penal para Adolescentes. Desglosar por sexo.
   </b></p>
   </td>
     </tr>
   </table>
   <table  cellpadding="1" cellspacing="1">
   <thead>
   <tr style="background-color:#2d8673;color:#FFFFFF; border-color: #FFFFFF;">
     <td width="128" align="center"><b>Mujeres</b></td>
     <td width="128" align="center"><b>Hombres</b></td>
     <td width="128" align="center"><b>TOTAL</b></td>
    </tr>
   </thead>
    <tr>
       <td width="128" align="center">'.$datosFormulario["ja_j6_3_mag_M"] .'</td>
       <td width="128" align="center">'.$datosFormulario["ja_j6_3_mag_H"] .'</td>
       <td width="128" align="center">'.$datosFormulario["ja_j6_3_mag_T"] .'</td>
      </tr>
   </table>

   <table>
   <tr>
   <td><p style="font-size: 12px;"><b>
   6.4.- Total de jueces especializados en Justicia Penal para Adolescentes. Desglosar por sexo.
   </b></p>
   </td>
     </tr>
   </table>
   <table  cellpadding="1" cellspacing="1">
   <thead>
   <tr style="background-color:#2d8673;color:#FFFFFF; border-color: #FFFFFF;">
     <td width="128" align="center"><b>Mujeres</b></td>
     <td width="128" align="center"><b>Hombres</b></td>
     <td width="128" align="center"><b>TOTAL</b></td>
    </tr>
   </thead>
    <tr>
       <td width="128" align="center">'.$datosFormulario["ja_j6_4_jue_M"] .'</td>
       <td width="128" align="center">'.$datosFormulario["ja_j6_4_jue_H"] .'</td>
       <td width="128" align="center">'.$datosFormulario["ja_j6_4_jue_T"] .'</td>
      </tr>
   </table>


   <table>
   <tr>
   <td><p style="font-size: 12px;"><b>
   6.5.- ¿La entidad cuenta con Tribunales Especializados en Justicia Penal para Adolescentes?
   </b></p>
   </td>
     </tr>
   </table>
   <table  cellpadding="1" cellspacing="1">
    <tr>
     <td width="136"  align="center" >'.$datosFormulario["ja_j6_5_triesp"] .'</td>
    </tr>
    </table>

    <table>
    <tr>
    <td><p style="font-size: 12px;"><b>
    6.6.- ¿Con cuántos Tribunales Especializados en Justicia Penal para Adolescentes cuenta la entidad?
    </b></p>
    </td>
      </tr>
    </table>
    <table  cellpadding="1" cellspacing="1">
     <tr>
      <td width="136"  align="center" >'.$datosFormulario["ja_j6_6_triesp"] .'</td>
     </tr>
     </table>

     <br><br><br>
      <table>
         <tr>
           <td style="width: 100%; text-align: center; font-size: 14px; background-color:#1c584b; padding: 4px 4px 4px; font-weight:bold;  color:white;">
           7. JUSTICIA PARA PERSONAS INDÍGENAS
           </td>
      </tr>
     </table>

     <table>
     <tr>
     <td><p style="font-size: 12px;"><b>
     7.- ¿La institución cuenta con intérpretes/traductores de lenguas indígenas?
     </b></p>
     </td>
       </tr>
     </table>
     <table  cellpadding="1" cellspacing="1">
      <tr>
       <td width="136"  align="center" >'.$datosFormulario["indigenas_j7_intlen"] .'</td>
      </tr>
      </table>

      <table>
      <tr>
      <td><b>
      7.1.- ¿Con cuántos intérpretes/traductores cuenta la institución? Desglosar por lengua indígena y sexo.
      </b>
      </td>
        </tr>
      </table>
      <table  cellpadding="1" cellspacing="1">
      <thead>
      <tr style="background-color:#2d8673;color:#FFFFFF; border-color: #FFFFFF;">
        <td width="40" align="center"><b>#</b></td>
        <td width="128" align="center"><b>Descripción</b></td>
        <td width="128" align="center"><b>MUJER</b></td>
        <td width="128" align="center"> <b>HOMBRE</b></td>
        <td width="128" align="center"><b>TOTAL</b></td>
       </tr>
      </thead>
       <tr>
        <td width="40" align="center"><b>1</b></td>
        <td width="128" >Náhuatl</td>
        <td width="128" align="center">'.$datosFormulario["indigenas_j7_1_nahuatl_M"] .'</td>
        <td width="128" align="center">'.$datosFormulario["indigenas_j7_1_nahuatl_H"] .'</td>
        <td width="128" align="center">'.$datosFormulario["indigenas_j7_1_nahuatl_T"] .'</td>
       </tr>
       <tr>
       <td width="40" align="center"><b>2</b></td>
        <td width="128">Maya</td>
        <td width="128" align="center">'.$datosFormulario["indigenas_j7_1_maya_M"] .'</td>
        <td width="128" align="center">'.$datosFormulario["indigenas_j7_1_maya_H"] .'</td>
        <td width="128" align="center">'.$datosFormulario["indigenas_j7_1_maya_T"] .'</td>
       </tr>
       <tr>
        <td width="40" align="center"><b>3</b></td>
        <td width="128">Tsetsal</td>
        <td width="128" align="center">'.$datosFormulario["indigenas_j7_1_tsetsal_M"] .'</td>
        <td width="128" align="center">'.$datosFormulario["indigenas_j7_1_tsetsal_H"] .'</td>
        <td width="128" align="center">'.$datosFormulario["indigenas_j7_1_tsetsal_T"] .'</td>
       </tr>
       <tr>
       <td width="40" align="center"><b>4</b></td>
       <td width="128">Mixteco</td>
       <td width="128" align="center">'.$datosFormulario["indigenas_j7_1_mixteco_M"] .'</td>
       <td width="128" align="center">'.$datosFormulario["indigenas_j7_1_mixteco_H"] .'</td>
       <td width="128" align="center">'.$datosFormulario["indigenas_j7_1_mixteco_T"] .'</td>
       </tr>
       <tr>
      <td width="40" align="center"><b>5</b></td>
       <td width="128">Tsotsil</td>
       <td width="128" align="center">'.$datosFormulario["indigenas_j7_1_tsotsil_M"] .'</td>
       <td width="128" align="center">'.$datosFormulario["indigenas_j7_1_tsotsil_H"] .'</td>
       <td width="128" align="center">'.$datosFormulario["indigenas_j7_1_tsotsil_T"] .'</td>
       </tr>
       <tr>
       <td width="40" align="center"><b>6</b></td>
       <td width="128">Otros '.$datosFormulario["indigenas_j7_1_otros"] .'</td>
       <td width="128" align="center">'.$datosFormulario["indigenas_j7_1_otros_M"] .'</td>
       <td width="128" align="center">'.$datosFormulario["indigenas_j7_1_otros_H"] .'</td>
       <td width="128" align="center">'.$datosFormulario["indigenas_j7_1_otros_T"] .'</td>
       </tr>
       <tr>
       <td width="128">'.$datosFormulario["indigenas_j7_1_nosesabe"] .'</td>
       </tr>
      </table>

      <table>
      <tr>
      <td><p style="font-size: 12px;"><b>
      7.2.- ¿Tienen convenios con alguna institución que provea este servicio?
      </b></p>
      </td>
        </tr>
      </table>
      <table  cellpadding="1" cellspacing="1">
       <tr>
        <td width="136"  align="center" >'.$datosFormulario["indigenas_j7_2_con"] .'</td>
       </tr>
       </table>

       <table>
       <tr>
       <td><p style="font-size: 12px;"><b>
       7.3.- ¿Cuál es el nombre de la institución o instituciones?
       </b></p>
       </td>
         </tr>
       </table>
       <table  cellpadding="1" cellspacing="1">
        <tr>
         <td width="528"  align="center" >'.$datosFormulario["indigenas_j7_3_nomins"] .'</td>
        </tr>
        <tr>
         <td width="136"  align="center" >'.$datosFormulario["indigenas_j7_3_nosesabe"] .'</td>
        </tr>
        </table>

        <table>
        <tr>
        <td><p style="font-size: 12px;"><b>
        7.4.- ¿Con qué protocolos cuenta la institución para garantizar los derechos de las personas indígenas?
        </b></p>
        </td>
          </tr>
          <table  cellpadding="1" cellspacing="1">
           <tr>
           <td width="128">'.$datosFormulario["indigenas_j7_4_proint"] .'</td>
         <td width="538">Cuáles: '.$datosFormulario["indigenas_j7_4_proint_cual"] .'</td>
           </tr>
           <tr>
          <td width="128">'.$datosFormulario["indigenas_j7_4_prointr"] .'</td>
          <td width="438">Cuáles: '.$datosFormulario["indigenas_j7_4_prointr_cual"] .'</td>
          </tr>
          <tr>
          <td width="528">'.$datosFormulario["indigenas_j7_4_proact"] .'</td>
          </tr>
          <tr>
          <td width="528">'.$datosFormulario["indigenas_j7_4_ninguno"] .'</td>
          </tr>
          <tr>
          <td width="128">'.$datosFormulario["indigenas_j7_4_otro"].'</td>
          <td width="438">Cuáles: '.$datosFormulario["indigenas_j7_4_otro_cual"].'</td>
          </tr>
          <tr>
          <td width="528">'.$datosFormulario["indigenas_j7_4_nosesabe"] .'</td>
          </tr>
          </table>

          <table>
          <tr>
          <td><p style="font-size: 12px;"><b>
          7.5.- ¿La institución cuenta con buenas prácticas que considere sean innovadoras para mejorar el acceso a la justicia a personas indígenas?
          </b></p>
          </td>
            </tr>
          </table>
          <table  cellpadding="1" cellspacing="1">
           <tr>
            <td width="136"  align="center" >'.$datosFormulario["indigenas_j7_5_insbuepra"] .'</td>
           </tr>
           </table>

           <table>
           <tr>
           <td><p style="font-size: 12px;"><b>
           7.6.- ¿Cuáles son esas buenas prácticas?
           </b></p>
           </td>
             </tr>
           </table>
           <table  cellpadding="1" cellspacing="1">
            <tr>
             <td width="528"  align="center" >'.$datosFormulario["indigenas_j7_6_cuabuepra"] .'</td>
            </tr>
            </table>

<!-- Fin Tab 2-->


<br><br><br>


<!-- Inicio Tab 3-->
<table>
   <tr>
     <td style="width: 100%; text-align: center; font-size: 14px; background-color:#1c584b; padding: 4px 4px 4px; font-weight:bold;  color:white;">
     8. JUSTICIA PARA PERSONAS EXTRANJERAS
     </td>
</tr>
<tr>
<td><p style="font-size: 12px;"><b>
8.- ¿La institución cuenta con traductores de lenguas extranjeras?
</b></p>
</td>
  </tr>
  </table>
  <table  cellpadding="1" cellspacing="1">
   <tr>
    <td width="136"  align="center" >'.$datosFormulario["extranjeras_j8_tra"] .'</td>
   </tr>
</table>


<table>
<tr>
<td><b>
8.1.- ¿Con cuántos traductores cuenta la institución? Desglosar por lengua extranjera y por sexo.
</b>
</td>
  </tr>
</table>
<table  cellpadding="1" cellspacing="1">
<thead>
<tr style="background-color:#2d8673;color:#FFFFFF; border-color: #FFFFFF;">
  <td width="40" align="center"><b>#</b></td>
  <td width="128" align="center"><b>Descripción</b></td>
  <td width="128" align="center"><b>MUJER</b></td>
  <td width="128" align="center"> <b>HOMBRE</b></td>
  <td width="128" align="center"><b>TOTAL</b></td>
 </tr>
</thead>
 <tr>
  <td width="40" align="center"><b>1</b></td>
  <td width="128" >Inglés</td>
  <td width="128" align="center">'.$datosFormulario["extranjeras_j8_1_ingles_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["extranjeras_j8_1_ingles_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["extranjeras_j8_1_ingles_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>2</b></td>
  <td width="128">Chino</td>
  <td width="128" align="center">'.$datosFormulario["extranjeras_j8_1_chino_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["extranjeras_j8_1_chino_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["extranjeras_j8_1_chino_T"] .'</td>
 </tr>
 <tr>
  <td width="40" align="center"><b>3</b></td>
  <td width="128">Francés</td>
  <td width="128" align="center">'.$datosFormulario["extranjeras_j8_1_frances_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["extranjeras_j8_1_frances_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["extranjeras_j8_1_frances_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>4</b></td>
 <td width="128">Árabe</td>
 <td width="128" align="center">'.$datosFormulario["extranjeras_j8_1_arabe_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["extranjeras_j8_1_arabe_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["extranjeras_j8_1_arabe_T"] .'</td>
 </tr>
 <tr>
<td width="40" align="center"><b>5</b></td>
 <td width="128">Ruso</td>
 <td width="128" align="center">'.$datosFormulario["extranjeras_j8_1_ruso_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["extranjeras_j8_1_ruso_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["extranjeras_j8_1_ruso_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>6</b></td>
 <td width="128">Otros '.$datosFormulario["extranjeras_j8_1_otro"] .'</td>
 <td width="128" align="center">'.$datosFormulario["extranjeras_j8_1_otro_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["extranjeras_j8_1_otro_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["extranjeras_j8_1_otro_T"] .'</td>
 </tr>
 <tr>
 <td width="128">'.$datosFormulario["extranjeras_j8_1_noaplica"] .'</td>
 </tr>
 <tr>
 <td width="128">'.$datosFormulario["extranjeras_j8_1_nosesabe"] .'</td>
 </tr>
</table>



<table>
<tr>
<td><p style="font-size: 12px;"><b>
8.2.- ¿Tienen convenios con otra institución que provea este servicio?
</b></p>
</td>
  </tr>
</table>
<table  cellpadding="1" cellspacing="1">
 <tr>
  <td width="136"  align="center" >'.$datosFormulario["extranjeras_j8_2_con"] .'</td>
 </tr>
</table>

<table>
<tr>
<td><p style="font-size: 12px;"><b>
8.3.- ¿Cuál es el nombre de la institución o instituciones?
</b></p>
</td>
  </tr>
</table>
<table  cellpadding="1" cellspacing="1">
 <tr>
  <td width="528"  align="center" >'.$datosFormulario["extranjeras_j8_3_nomins"] .'</td>
 </tr>
 <tr>
 <td width="128">'.$datosFormulario["extranjeras_j8_3_noaplica"] .'</td>
 </tr>
 <tr>
 <td width="128">'.$datosFormulario["extranjeras_j8_3_nosesabe"] .'</td>
 </tr>
</table>



<table>
<tr>
<td width="528"><b>
8.4.- ¿Con qué protocolos cuenta la institución para garantizar los derechos de personas extranjeras?
</b>
</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["extranjeras_j8_4_proint"] .'</td>
  <td width="435">Cuáles: '.$datosFormulario["extranjeras_j8_4_proint_cual"] .'</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["extranjeras_j8_4_prointr"] .'</td>
  <td width="435">Cuáles: '.$datosFormulario["extranjeras_j8_4_prointr_cual"] .'</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["extranjeras_j8_4_ninguno"] .'</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["extranjeras_j8_4_otro"].'</td>
  <td width="435">Cuáles: '.$datosFormulario["extranjeras_j8_4_otro_cual"].'</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["extranjeras_j8_4_nosesabe"] .'</td>
  </tr>
</table>



<table>
<tr>
<td><p style="font-size: 12px;"><b>
8.5.- ¿La institución cuenta con buenas prácticas que considere sean innovadoras para mejorar el acceso a la justicia a personas extranjeras?
</b></p>
</td>
  </tr>
</table>
<table  cellpadding="1" cellspacing="1">
 <tr>
  <td width="136"  align="center" >'.$datosFormulario["extranjeras_j8_5_buepra"] .'</td>
 </tr>
</table>

<table>
<tr>
<td><p style="font-size: 12px;"><b>
8.6.- ¿Cuáles son esas buenas prácticas?
</b></p>
</td>
  </tr>
</table>
<table  cellpadding="1" cellspacing="1">
 <tr>
  <td width="528"  align="center" >'.$datosFormulario["extranjeras_j8_6_cuabuepra"] .'</td>
 </tr>
 <tr>
 <td width="128">'.$datosFormulario["extranjeras_j8_6_noaplica"] .'</td>
 </tr>
</table>

<br><br><br>


<table>
   <tr>
     <td style="width: 100%; text-align: center; font-size: 14px; background-color:#1c584b; padding: 4px 4px 4px; font-weight:bold;  color:white;">
     9. JUSTICIA PARA PERSONAS CON DISCAPACIDAD
     </td>
</tr>
<tr>
<td><p style="font-size: 12px;"><b>
9.- ¿La institución tiene convenios con otras instituciones u organizaciones de la sociedad civil que les proporcionen alguno de estos servicios para personas con discapacidad?
</b></p>
</td>
  </tr>
  </table>
  <table>
  <tr>
  <td><p style="font-size: 12px;"><b>
   Sistema Braille
  </b></p>
  </td>
    </tr>
  </table>
  <table  cellpadding="1" cellspacing="1">
   <tr>
    <td width="136"  align="center" >'.$datosFormulario["discapacidad_j9_braile"] .'</td>
   </tr>
  </table>
  <table>
  <tr>
  <td><p style="font-size: 12px;"><b>
   Intérpretes de Lengua de Señas Mexicana
  </b></p>
  </td>
    </tr>
  </table>
  <table  cellpadding="1" cellspacing="1">
   <tr>
    <td width="136"  align="center" >'.$datosFormulario["discapacidad_j9_lense"] .'</td>
   </tr>
  </table>



  <table>
  <tr>
  <td><p style="font-size: 12px;"><b>
  9.1.- ¿Cuál es el nombre de la institución o instituciones?
  </b></p>
  </td>
    </tr>
  </table>
  <table  cellpadding="1" cellspacing="1">
   <tr>
    <td width="528"  align="center" >'.$datosFormulario["discapacidad_j9_1_nomins"] .'</td>
   </tr>
   <tr>
   <td width="128">'.$datosFormulario["discapacidad_j9_1_noaplica"] .'</td>
   </tr>
   <tr>
   <td width="128">'.$datosFormulario["discapacidad_j9_1_nosesabe"] .'</td>
   </tr>
  </table>



  <table>
  <tr>
  <td width="528"><b>
  9.2.- ¿Con qué protocolos cuenta la institución para garantizar los derechos de personas con discapacidad?
  </b>
  </td>
    </tr>
    <tr>
    <td width="128">'.$datosFormulario["discapacidad_j9_2_proint"] .'</td>
    <td width="435">Cuáles: '.$datosFormulario["discapacidad_j9_2_proint_cual"] .'</td>
    </tr>
    <tr>
    <td width="128">'.$datosFormulario["discapacidad_j9_2_prointr"] .'</td>
    <td width="435">Cuáles: '.$datosFormulario["discapacidad_j9_2_prointr_cual"] .'</td>
    </tr>
    <tr>
    <td width="528">'.$datosFormulario["discapacidad_j9_2_proact"] .'</td>
    </tr>
    <tr>
    <td width="528">'.$datosFormulario["discapacidad_j9_2_ninguno"] .'</td>
    </tr>
    <tr>
    <td width="128">'.$datosFormulario["discapacidad_j9_2_otros"].'</td>
    <td width="435">Cuáles: '.$datosFormulario["discapacidad_j9_2_otros_cual"].'</td>
    </tr>
    <tr>
    <td width="528">'.$datosFormulario["discapacidad_j9_2_nosesabe"] .'</td>
    </tr>
  </table>



  <table>
  <tr>
  <td><p style="font-size: 12px;"><b>
  9.3.- ¿La institución cuenta con buenas prácticas que considere sean innovadoras para mejorar el acceso a la justicia de personas con discapacidad?
  </b></p>
  </td>
    </tr>
  </table>
  <table  cellpadding="1" cellspacing="1">
   <tr>
    <td width="136"  align="center" >'.$datosFormulario["discapacidad_j9_3_buepra"] .'</td>
   </tr>
  </table>

  <table>
  <tr>
  <td><p style="font-size: 12px;"><b>
  9.4.- ¿Cuáles son esas buenas prácticas?
  </b></p>
  </td>
    </tr>
  </table>
  <table  cellpadding="1" cellspacing="1">
   <tr>
    <td width="528"  align="center" >'.$datosFormulario["discapacidad_j9_4_cuabuepra"] .'</td>
   </tr>
   <tr>
   <td width="128">'.$datosFormulario["discapacidad_j9_4_noaplica"] .'</td>
   </tr>
  </table>
<!-- Fin Tab 3-->

<!-- Inicio Tab 4-->
<table>
   <tr>
     <td style="width: 100%; text-align: center; font-size: 14px; background-color:#1c584b; padding: 4px 4px 4px; font-weight:bold;  color:white;">
     10. COLABORACIÓN CON OTRAS INSTITUCIONES
     </td>
</tr>
  </table>

  <table>
  <tr>
  <td><p style="font-size: 12px;"><b>
  10.- ¿Cuentan con algún tipo de colaboración con otras instituciones u organismos nacionales o extranjeros?
  </b></p>
  </td>
    </tr>
  </table>
  <table  cellpadding="1" cellspacing="1">
   <tr>
    <td width="136"  align="center" >'.$datosFormulario["colaboracion_j10_col"] .'</td>
   </tr>
  </table>

  <table>
  <tr>
  <td><p style="font-size: 12px;"><b>
  10.1.- ¿Con qué instituciones u organismos mantienen colaboración?
  </b></p>
  </td>
    </tr>
  </table>
  <table  cellpadding="1" cellspacing="1">
   <tr>
    <td width="528"  align="center" >'.$datosFormulario["colaboracion_j10_1_ins"] .'</td>
   </tr>
   <tr>
   <td width="128">'.$datosFormulario["colaboracion_j10_1_nosesabe"] .'</td>
   </tr>
  </table>

  <table>
  <tr>
  <td width="528"><b>
  10.2.- ¿Qué tipo de colaboración mantienen?
  </b>
  </td>
    </tr>
    <tr>
    <td width="128">'.$datosFormulario["colaboracion_j10_2_fin"] .'</td>
    </tr>
    <tr>
    <td width="128">'.$datosFormulario["colaboracion_j10_2_don"] .'</td>
    </tr>
    <tr>
    <td width="528">'.$datosFormulario["colaboracion_j10_2_cap"] .'</td>
    </tr>
    <tr>
    <td width="128">'.$datosFormulario["colaboracion_j10_2_otros"].'</td>
    <td width="528">Cuáles: '.$datosFormulario["colaboracion_j10_2_otros_cual"].'</td>
    </tr>
  </table>

  <table>
  <tr>
  <td><p style="font-size: 12px;"><b>
  10.3.- Describir el tipo de colaboración señalado en la pregunta anterior:
  </b></p>
  </td>
    </tr>
  </table>
  <table  cellpadding="1" cellspacing="1">
   <tr>
    <td width="528"  align="center" >'.$datosFormulario["colaboracion_j10_3_tipcol"] .'</td>
   </tr>
   <tr>
   <td width="128">'.$datosFormulario["colaboracion_j10_3_noaplica"] .'</td>
   </tr>
  </table>

  <br><br><br>
  <table>
     <tr>
       <td style="width: 100%; text-align: center; font-size: 14px; background-color:#1c584b; padding: 4px 4px 4px; font-weight:bold;  color:white;">
       11. JUSTICIA DIGITAL
       </td>
  </tr>
    </table>

    <table>
    <tr>
    <td><p style="font-size: 12px;"><b>
    11.- ¿Cuentan con un sistema/plataforma en donde ofrecen servicios de justicia digital para la ciudadanía?
    </b></p>
    </td>
      </tr>
    </table>
    <table  cellpadding="1" cellspacing="1">
     <tr>
      <td width="136"  align="center" >'.$datosFormulario["registro_j11_pla"] .'</td>
     </tr>
    </table>

    <table>
    <tr>
    <td><p style="font-size: 12px;"><b>
    11.1.- ¿Qué servicios proveen a través de este sistema/plataforma?
    </b></p>
    </td>
      </tr>
    </table>
    <table  cellpadding="1" cellspacing="1">
     <tr>
      <td width="528"  align="center" >'.$datosFormulario["registro_j11_1_ser"] .'</td>
     </tr>
    </table>

    <table>
    <tr>
    <td><p style="font-size: 12px;"><b>
    11.2.- Favor de proporcionar el vínculo o liga de acceso:
    </b></p>
    </td>
      </tr>
    </table>
    <table  cellpadding="1" cellspacing="1">
     <tr>
      <td width="528"  align="center" >'.$datosFormulario["registro_j11_2_lig"] .'</td>
     </tr>
    </table>

    <br><br><br>
    <table>
       <tr>
         <td style="width: 100%; text-align: center; font-size: 14px; background-color:#1c584b; padding: 4px 4px 4px; font-weight:bold;  color:white;">
         12. EVALUACIÓN Y SEGUIMIENTO DEL SISTEMA DE JUSTICIA
         </td>
    </tr>
      </table>

      <table>
      <tr>
      <td><p style="font-size: 12px;"><b>
      12.- Sin incluir el Modelo de Evaluación y Seguimiento (MES), ¿La institución cuenta con indicadores para el seguimiento, monitoreo y evaluación del Sistema de Justicia?
      </b></p>
      </td>
        </tr>
      </table>
      <table  cellpadding="1" cellspacing="1">
       <tr>
        <td width="136"  align="center" >'.$datosFormulario["evaluacion_j12_ind"] .'</td>
       </tr>
      </table>

      <table>
      <tr>
      <td><p style="font-size: 12px;"><b>
      12.1.- ¿Cuáles son esos indicadores?
      </b></p>
      </td>
        </tr>
      </table>
      <table  cellpadding="1" cellspacing="1">
       <tr>
        <td width="528"  align="center" >'.$datosFormulario["evaluacion_j12_1_cuaind"] .'</td>
       </tr>
      </table>

      <table>
      <tr>
      <td><p style="font-size: 12px;"><b>
      12.2.- ¿Con qué frecuencia se evalúan dichos indicadores?
      </b></p>
      </td>
        </tr>
      </table>
      <table  cellpadding="1" cellspacing="1">
       <tr>
        <td width="528"  align="center" >'.$datosFormulario["evaluacion_j12_2_frec"] .'</td>
       </tr>
      </table>

<!-- Fin Tab 4-->

<br><br><br>


<!-- Inicio Tab 5-->
<table>
   <tr>
     <td style="width: 100%; text-align: center; font-size: 14px; background-color:#1c584b; padding: 4px 4px 4px; font-weight:bold;  color:white;">
     13. TRANSPARENCIA
     </td>
</tr>
<tr>
<td><p style="font-size: 12px;"><b>
13.- ¿Las sentencias emitidas por el poder judicial son públicas?
</b></p>
</td>
  </tr>
  <table  cellpadding="1" cellspacing="1">
   <tr>
    <td width="528"  align="center" >'.$datosFormulario["transparencia_j13_sen"] .'</td>
   </tr>
</table>
<table>
<tr>
<td><p style="font-size: 12px;"><b>
13.1.- ¿En dónde se encuentran las sentencias disponibles para su consulta? Favor de proporcionar la liga.
</b></p>
</td>
  </tr>
</table>
<table  cellpadding="1" cellspacing="1">
 <tr>
  <td width="136"  align="center" >'.$datosFormulario["transparencia_j13_1_senlig"] .'</td>
 </tr>
</table>
<table>
<tr>
<td><p style="font-size: 12px;"><b>
13.2.- En caso de que las sentencias no sean públicas ¿qué acciones se están implementando para que puedan ser accesibles al público?
</b></p>
</td>
  </tr>
</table>
<table  cellpadding="1" cellspacing="1">
 <tr>
  <td width="136"  align="center" >'.$datosFormulario["transparencia_j13_2_acc"] .'</td>
 </tr>
</table>


<table>
<tr>
<td><p style="font-size: 12px;"><b>
13.3.- ¿La institución cuenta con buenas prácticas que considere sean innovadoras en materia de transparencia y acceso a la información?
</b></p>
</td>
  </tr>
</table>
<table  cellpadding="1" cellspacing="1">
 <tr>
  <td width="136"  align="center" >'.$datosFormulario["transparencia_j13_3_buepra"] .'</td>
 </tr>
</table>

<table>
<tr>
<td><p style="font-size: 12px;"><b>
13.4.- ¿Cuáles son esas buenas prácticas?
</b></p>
</td>
  </tr>
</table>
<table  cellpadding="1" cellspacing="1">
 <tr>
  <td width="528"  align="center" >'.$datosFormulario["transparencia_j13_4_bueprac_cuales"] .'</td>
 </tr>
 <tr>
 <td width="128">'.$datosFormulario["transparencia_j13_4_noaplica"] .'</td>
 </tr>
</table>


<table>
   <tr>
     <td style="width: 100%; text-align: center; font-size: 14px; background-color:#1c584b; padding: 4px 4px 4px; font-weight:bold;  color:white;">
     14. NECESIDADES DE LA INSTITUCIÓN
     </td>
</tr>
<tr>
<td><p style="font-size: 12px;"><b>
14.- ¿Qué necesidades detecta el Tribunal para desempeñar correctamente sus funciones?
</b></p>
</td>
  </tr>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["necesidades_j14_capacitacion"] .'</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["necesidades_j14_recMate"] .'</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["necesidades_j14_recTec"] .'</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["necesidades_j14_recHum"] .'</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["necesidades_j14_infra"] .'</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["necesidades_j14_mejorasLeg"] .'</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["necesidades_j14_protocolos"] .'</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["necesidades_j14_otras"].'</td>
  <td width="528">Cuáles: '.$datosFormulario["necesidades_j14_otrasCuales"].'</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["necesidades_j14_noAplica"] .'</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["necesidades_j14_nosesabe"] .'</td>
  </tr>
</table>

<table>
<tr>
<td><p style="font-size: 12px;"><b>
14.1.- Describir las necesidades señaladas en la pregunta anterior:
</b></p>
</td>
  </tr>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["necesidades_j14_1_descNece"] .'</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["necesidades_j14_1_noAplica"] .'</td>
  </tr>
</table>


<table>
   <tr>
     <td style="width: 100%; text-align: center; font-size: 14px; background-color:#1c584b; padding: 4px 4px 4px; font-weight:bold;  color:white;">
     15.1. RESPONSABILIDADES DE LOS SERVIDORES PÚBLICOS: RESPONSABILIDAD ADMINISTRATIVA
     </td>
</tr>
<tr>
<td><p style="font-size: 12px;"><b>
15.1.1.- ¿Cuentan con un órgano especializado encargado de investigar quejas contra servidores públicos en materia administrativa? En caso de que sí, escribir el nombre del órgano responsable.
</b></p>
</td>
  </tr>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["denunciaserv_j15_1_2_organoEsp"] .'</td>
  </tr>
</table>



<table>
<tr>
<td><p style="font-size: 12px;"><b>
15.1.2.- Total de quejas y/o denuncias presentadas en el año 2020 contra servidores públicos.
</b></p>
</td>
  </tr>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["denunciaserv_j15_1_3_quejasDen"] .'</td>
  </tr>
</table>



<table>
<tr>
<td><p style="font-size: 12px;"><b>
15.1.3.- ¿Cuántas quejas y/o denuncias fueron presentadas en el año 2020 contra servidores públicos? Desglosar por función.
</b></p>
</td>
  </tr>
</table>
<table  cellpadding="1" cellspacing="1">
<thead>
<tr style="background-color:#2d8673;color:#FFFFFF; border-color: #FFFFFF;">
  <td width="40" align="center"><b>#</b></td>
  <td width="128" align="center"><b>Descripción</b></td>
  <td width="128" align="center"><b>Mujeres</b></td>
  <td width="128" align="center"><b>Hombre</b></td>
  <td width="128" align="center"><b>TOTAL</b></td>
 </tr>
</thead>
 <tr>
  <td width="40" align="center"><b>1</b></td>
  <td width="128" >Magistrados/as</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_1_4_magiM"] .'</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_1_4_magiH"] .'</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_1_4_magi"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>2</b></td>
  <td width="128">Jueces/zas</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_1_4_jueM"] .'</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_1_4_jueH"] .'</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_1_4_jue"] .'</td>
 </tr>
 <tr>
  <td width="40" align="center"><b>3</b></td>
  <td width="128">Secretarios/as de estudio y cuenta</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_1_4_secEstM"] .'</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_1_4_secEstH"] .'</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_1_4_secEst"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>4</b></td>
 <td width="128">Actuarios/as o diligenciarios/as</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_1_4_actuM"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_1_4_actuH"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_1_4_actu"] .'</td>
 </tr>
 <tr>
<td width="40" align="center"><b>5</b></td>
 <td width="128">Otros servidores con carrera judicial</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_1_4_carrerajudM"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_1_4_carrerajudH"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_1_4_carrerajud"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>6</b></td>
 <td width="128">Otros '.$datosFormulario["denunciaserv_j15_1_4_otro"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_1_4_otro_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_1_4_otro_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_1_4_otro_T"] .'</td>
 </tr>
 <tr>
 <td width="128">'.$datosFormulario["denunciaserv_j15_1_4_noaplica"] .'</td>
 </tr>
 <tr>
 <td width="128">'.$datosFormulario["denunciaserv_j15_1_4_nosesabe"] .'</td>
 </tr>
</table>



<table>
<tr>
<td><b>
15.1.4.- ¿Cuántos servidores públicos fueron sancionados por faltas administrativas? Desglosar por función y por sexo.
</b>
</td>
  </tr>
</table>
<table  cellpadding="1" cellspacing="1">
<thead>
<tr style="background-color:#2d8673;color:#FFFFFF; border-color: #FFFFFF;">
  <td width="40" align="center"><b>#</b></td>
  <td width="128" align="center"><b>Descripción</b></td>
  <td width="128" align="center"><b>MUJER</b></td>
  <td width="128" align="center"> <b>HOMBRE</b></td>
  <td width="128" align="center"><b>TOTAL</b></td>
 </tr>
</thead>
 <tr>
  <td width="40" align="center"><b>1</b></td>
  <td width="128" >Magistrados</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_1_5_magi_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_1_5_magi_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_1_5_magi_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>2</b></td>
  <td width="128">Jueces/Juezas</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_1_5_jue_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_1_5_jue_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_1_5_jue_T"] .'</td>
 </tr>
 <tr>
  <td width="40" align="center"><b>3</b></td>
  <td width="128">Secretarios/as de estudio y cuenta</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_1_5_secEst_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_1_5_secEst_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_1_5_secEst_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>4</b></td>
 <td width="128">Actuarios/as o diligenciarios/as</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_1_5_actu_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_1_5_actu_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_1_5_actu_T"] .'</td>
 </tr>
 <tr>
<td width="40" align="center"><b>5</b></td>
 <td width="128">Otros servidores de carrera judicial</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_1_5_carrerajud_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_1_5_carrerajud_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_1_5_carrerajud_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>6</b></td>
 <td width="128">Otros '.$datosFormulario["denunciaserv_j15_1_4_otro"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_1_5_otro_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_1_5_otro_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_1_5_otro_T"] .'</td>
 </tr>
 <tr>
 <td width="128">'.$datosFormulario["denunciaserv_j15_1_5_noaplica"] .'</td>
 </tr>
 <tr>
 <td width="128">'.$datosFormulario["denunciaserv_j15_1_5_nosesabe"] .'</td>
 </tr>
</table>


<table>
   <tr>
     <td style="width: 100%; text-align: center; font-size: 14px; background-color:#1c584b; padding: 4px 4px 4px; font-weight:bold;  color:white;">
     15.2. RESPONSABILIDADES DE LOS SERVIDORES PÚBLICOS: RESPONSABILIDAD PENAL
     </td>
</tr>
</table>

<table>
<tr>
<td><b>
15.2.1.-Total de quejas y/o denuncias presentadas en el año 2020 contra servidores públicos. Desglosar por función.
</b>
</td>
  </tr>
</table>
<table  cellpadding="1" cellspacing="1">
<thead>
<tr style="background-color:#2d8673;color:#FFFFFF; border-color: #FFFFFF;">
  <td width="40" align="center"><b>#</b></td>
  <td width="128" align="center"><b>Descripción</b></td>
  <td width="128" align="center"><b>MUJER</b></td>
  <td width="128" align="center"> <b>HOMBRE</b></td>
  <td width="128" align="center"><b>TOTAL</b></td>
 </tr>
</thead>
 <tr>
  <td width="40" align="center"><b>1</b></td>
  <td width="128" >Magistrados</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_2_2_magi_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_2_2_magi_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_2_2_magi_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>2</b></td>
  <td width="128">Jueces/Juezas</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_2_2_jue_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_2_2_jue_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_2_2_jue_T"] .'</td>
 </tr>
 <tr>
  <td width="40" align="center"><b>3</b></td>
  <td width="128">Secretarios/as de estudio y cuenta</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_2_2_secEst_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_2_2_secEst_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_2_2_secEst_M"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>4</b></td>
 <td width="128">Actuarios/as o diligenciarios/as</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_2_2_actu_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_2_2_actu_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_2_2_actu_T"] .'</td>
 </tr>
 <tr>
<td width="40" align="center"><b>5</b></td>
 <td width="128">Otros servidores de carrera judicial</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_2_2_carrerajud_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_2_2_carrerajud_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_2_2_carrerajud_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>6</b></td>
 <td width="128">Otros '.$datosFormulario["denunciaserv_j15_2_2_otros"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_2_2_otro_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_2_2_otro_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_2_2_otro_T"] .'</td>
 </tr>
 <tr>
 <td width="128">'.$datosFormulario["denunciaserv_j15_2_2_noaplica"] .'</td>
 </tr>
 <tr>
 <td width="128">'.$datosFormulario["denunciaserv_j15_2_2_nosesabe"] .'</td>
 </tr>
</table>



<table>
<tr>
<td><p style="font-size: 12px;"><b>
15.2.2.- Reportar el total de sentencias condenatorias en contra de servidores públicos en el año 2020. Desglosar por función.
</b></p>
</td>
  </tr>
</table>
<table  cellpadding="1" cellspacing="1">
<thead>
<tr style="background-color:#2d8673;color:#FFFFFF; border-color: #FFFFFF;">
  <td width="40" align="center"><b>#</b></td>
  <td width="128" align="center"><b>Descripción</b></td>
  <td width="128" align="center"><b>Mujeres</b></td>
  <td width="128" align="center"><b>Hombre</b></td>
  <td width="128" align="center"><b>TOTAL</b></td>
 </tr>
</thead>
 <tr>
  <td width="40" align="center"><b>1</b></td>
  <td width="128" >Magistrados/as</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_2_3_magi_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_2_3_magi_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_2_3_magi"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>2</b></td>
  <td width="128">Jueces/zas</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_2_3_jue_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_2_3_jue_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_2_3_jue"] .'</td>
 </tr>
 <tr>
  <td width="40" align="center"><b>3</b></td>
  <td width="128">Secretarios/as de estudio y cuenta</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_2_3_secEst_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_2_3_secEst_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_2_3_secEst"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>4</b></td>
 <td width="128">Actuarios/as o diligenciarios/as</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_2_3_actu_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_2_3_actu_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_2_3_actu"] .'</td>
 </tr>
 <tr>
<td width="40" align="center"><b>5</b></td>
 <td width="128">Otros servidores con carrera judicial</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_2_3_carrerajud_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_2_3_carrerajud_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_2_3_carrerajud"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>6</b></td>
 <td width="128">Otros '.$datosFormulario["denunciaserv_j15_2_3_otro"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_2_3_otro_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_2_3_otro_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_j15_2_3_otro_T"] .'</td>
 </tr>
 <tr>
 <td width="128">'.$datosFormulario["denunciaserv_j15_2_3_noaplica"] .'</td>
 </tr>
 <tr>
 <td width="128">'.$datosFormulario["denunciaserv_j15_2_3_nosesabe"] .'</td>
 </tr>
</table>


<!-- Fin Tab 5-->



<!-- Inicio Tab 6-->
<br><br><br>
<table>
   <tr>
     <td style="width: 100%; text-align: center; font-size: 14px; background-color:#1c584b; padding: 4px 4px 4px; font-weight:bold;  color:white;">
     16. VINCULACIONES A PROCESO
     </td>
</tr>
  </table>
  <table>
  <tr>
  <td><b>
  16.- Total de personas con autos de vinculación a proceso. Desglosar por sexo y tipo de resolución.
  </b>
  </td>
    </tr>
  </table>
  <br><br><br>
  <table  cellpadding="1" cellspacing="1">
  <thead>
  <tr style="background-color:#2d8673;color:#FFFFFF; border-color: #FFFFFF;">
    <td width="40" align="center"><b>#</b></td>
    <td width="128" align="center"><b>Descripción</b></td>
    <td width="128" align="center"><b>MUJER</b></td>
    <td width="128" align="center"> <b>HOMBRE</b></td>
    <td width="128" align="center"><b>TOTAL</b></td>
   </tr>
  </thead>
   <tr>
    <td width="40" align="center"><b>1</b></td>
    <td width="128" >Vinculación</td>
    <td width="128" align="center">'.$datosFormulario["autovinculacion_j16_vinculacion_M"] .'</td>
    <td width="128" align="center">'.$datosFormulario["autovinculacion_j16_vinculacion_H"] .'</td>
    <td width="128" align="center">'.$datosFormulario["autovinculacion_j16_vinculacion_T"] .'</td>
   </tr>
   <tr>
   <td width="40" align="center"><b>2</b></td>
    <td width="128">No vinculación</td>
    <td width="128" align="center">'.$datosFormulario["autovinculacion_j16_novinculacion_M"] .'</td>
    <td width="128" align="center">'.$datosFormulario["autovinculacion_j16_novinculacion_H"] .'</td>
    <td width="128" align="center">'.$datosFormulario["autovinculacion_j16_novinculacion_T"] .'</td>
   </tr>
   <tr>
    <td width="40" align="center"><b>3</b></td>
    <td width="128">Total</td>
    <td width="128" align="center">'.$datosFormulario["autovinculacion_j16_total_M"] .'</td>
    <td width="128" align="center">'.$datosFormulario["autovinculacion_j16_total_H"] .'</td>
    <td width="128" align="center">'.$datosFormulario["autovinculacion_j16_total_T"] .'</td>
   </tr>
  </table>

  <table>
  <tr>
  <td><b>
  16.1.- Total de personas con autos de vinculación a proceso. Desglosar por edad y sexo.
  </b>
  </td>
    </tr>
  </table>
  <table  cellpadding="1" cellspacing="1">
  <thead>
  <tr style="background-color:#2d8673;color:#FFFFFF; border-color: #FFFFFF;">
    <td width="40" align="center"><b>#</b></td>
    <td width="128" align="center"><b>Descripción</b></td>
    <td width="128" align="center"><b>MUJER</b></td>
    <td width="128" align="center"> <b>HOMBRE</b></td>
    <td width="128" align="center"><b>TOTAL</b></td>
   </tr>
  </thead>
   <tr>
    <td width="40" align="center"><b>1</b></td>
    <td width="128" >Mayor de 18 años</td>
    <td width="128" align="center">'.$datosFormulario["autovinculacion_j16_1_mayor18_M"] .'</td>
    <td width="128" align="center">'.$datosFormulario["autovinculacion_j16_1_mayor18_H"] .'</td>
    <td width="128" align="center">'.$datosFormulario["autovinculacion_j16_1_mayor18_T"] .'</td>
   </tr>
   <tr>
   <td width="40" align="center"><b>2</b></td>
    <td width="128">Menor de 18 años	</td>
    <td width="128" align="center">'.$datosFormulario["autovinculacion_j16_1_menor18_M"] .'</td>
    <td width="128" align="center">'.$datosFormulario["autovinculacion_j16_1_menor18_H"] .'</td>
    <td width="128" align="center">'.$datosFormulario["autovinculacion_j16_1_menor18_T"] .'</td>
   </tr>
   <tr>
    <td width="40" align="center"><b>3</b></td>
    <td width="128">Total</td>
    <td width="128" align="center">'.$datosFormulario["autovinculacion_j16_1_total_M"] .'</td>
    <td width="128" align="center">'.$datosFormulario["autovinculacion_j16_1_total_H"] .'</td>
    <td width="128" align="center">'.$datosFormulario["autovinculacion_j16_1_total_T"] .'</td>
   </tr>
  </table>

  <table>
  <tr>
  <td><b>16.2.- Total de personas con autos de vinculación a proceso. Desglosar por los siguientes delitos y sexo.
  </b>
  </td>
    </tr>
  </table>
  <table  cellpadding="1" cellspacing="1">
  <thead>
  <tr style="background-color:#2d8673;color:#FFFFFF; border-color: #FFFFFF;">
    <td width="40" align="center"><b>#</b></td>
    <td width="128" align="center"><b>Descripción</b></td>
    <td width="128" align="center"><b>MUJER</b></td>
    <td width="128" align="center"> <b>HOMBRE</b></td>
    <td width="128" align="center"><b>TOTAL</b></td>
   </tr>
  </thead>
   <tr>
    <td width="40" align="center"><b>1</b></td>
    <td width="128" >Homicidio</td>
    <td width="128" align="center">'.$datosFormulario["autovinculacion_j16_2_homicidio_M"] .'</td>
    <td width="128" align="center">'.$datosFormulario["autovinculacion_j16_2_homicidio_H"] .'</td>
    <td width="128" align="center">'.$datosFormulario["autovinculacion_j16_2_homicidio_T"] .'</td>
   </tr>
   <tr>
   <td width="40" align="center"><b>2</b></td>
    <td width="128">Feminicidio</td>
    <td width="128" align="center">'.$datosFormulario["autovinculacion_j16_2_feminicidio_M"] .'</td>
    <td width="128" align="center">'.$datosFormulario["autovinculacion_j16_2_feminicidio_H"] .'</td>
    <td width="128" align="center">'.$datosFormulario["autovinculacion_j16_2_feminicidio_T"] .'</td>
   </tr>
   <tr>
    <td width="40" align="center"><b>3</b></td>
    <td width="128">Lesiones</td>
    <td width="128" align="center">'.$datosFormulario["autovinculacion_j16_2_lesiones_M"] .'</td>
    <td width="128" align="center">'.$datosFormulario["autovinculacion_j16_2_lesiones_H"] .'</td>
    <td width="128" align="center">'.$datosFormulario["autovinculacion_j16_2_lesiones_T"] .'</td>
   </tr>
   <tr>
   <td width="40" align="center"><b>4</b></td>
   <td width="128">Violencia familiar</td>
   <td width="128" align="center">'.$datosFormulario["autovinculacion_j16_2_violFam_M"] .'</td>
   <td width="128" align="center">'.$datosFormulario["autovinculacion_j16_2_violFam_H"] .'</td>
   <td width="128" align="center">'.$datosFormulario["autovinculacion_j16_2_violFam_T"] .'</td>
   </tr>
   <tr>
  <td width="40" align="center"><b>5</b></td>
   <td width="128">Abuso sexual</td>
   <td width="128" align="center">'.$datosFormulario["autovinculacion_j16_2_abuSex_M"] .'</td>
   <td width="128" align="center">'.$datosFormulario["autovinculacion_j16_2_abuSex_H"] .'</td>
   <td width="128" align="center">'.$datosFormulario["autovinculacion_j16_2_abuSex_T"] .'</td>
   </tr>
   <tr>
  <td width="40" align="center"><b>6</b></td>
   <td width="128">Hostigamiento sexual</td>
   <td width="128" align="center">'.$datosFormulario["autovinculacion_j16_2_hostSex_M"] .'</td>
   <td width="128" align="center">'.$datosFormulario["autovinculacion_j16_2_hostSex_H"] .'</td>
   <td width="128" align="center">'.$datosFormulario["autovinculacion_j16_2_hostSex_T"] .'</td>
   </tr>
   <tr>
  <td width="40" align="center"><b>7</b></td>
   <td width="128">Violación</td>
   <td width="128" align="center">'.$datosFormulario["autovinculacion_j16_2_violacion_M"] .'</td>
   <td width="128" align="center">'.$datosFormulario["autovinculacion_j16_2_violacion_H"] .'</td>
   <td width="128" align="center">'.$datosFormulario["autovinculacion_j16_2_violacion_T"] .'</td>
   </tr>
   <tr>
  <td width="40" align="center"><b>8</b></td>
   <td width="128">Trata de personas</td>
   <td width="128" align="center">'.$datosFormulario["autovinculacion_j16_2_trata_M"] .'</td>
   <td width="128" align="center">'.$datosFormulario["autovinculacion_j16_2_trata_H"] .'</td>
   <td width="128" align="center">'.$datosFormulario["autovinculacion_j16_2_trata_T"] .'</td>
   </tr>
   <tr>
  <td width="40" align="center"><b>9</b></td>
   <td width="128">Corrupción de menores</td>
   <td width="128" align="center">'.$datosFormulario["autovinculacion_j16_2_corrup_M"] .'</td>
   <td width="128" align="center">'.$datosFormulario["autovinculacion_j16_2_corrup_H"] .'</td>
   <td width="128" align="center">'.$datosFormulario["autovinculacion_j16_2_corrup_T"] .'</td>
   </tr>
   <tr>
  <td width="40" align="center"><b>10</b></td>
   <td width="128">Tráfico de menores</td>
   <td width="128" align="center">'.$datosFormulario["autovinculacion_j16_2_traMen_M"] .'</td>
   <td width="128" align="center">'.$datosFormulario["autovinculacion_j16_2_traMen_H"] .'</td>
   <td width="128" align="center">'.$datosFormulario["autovinculacion_j16_2_traMen_T"] .'</td>
   </tr>
   <tr>
   <td width="40" align="center"><b>11</b></td>
   <td width="128"  >Otros (agregar las vinculaciones por el resto de los delitos) <br>'.$datosFormulario["autovinculacion_j16_2_otros"] .'</td>
   <td width="128"  align="center">'.$datosFormulario["autovinculacion_j16_2_otros_M"] .'</td>
   <td width="128"  align="center">'.$datosFormulario["autovinculacion_j16_2_otros_H"] .'</td>
   <td width="128" align="center">'.$datosFormulario["autovinculacion_j16_2_otros_T"] .'</td>
   </tr>
   <tr>
   <td width="528">'.$datosFormulario["autovinculacion_j16_2_nosesabe"] .'</td>
   </tr>
  </table>

  <br><br><br>
  <table>
     <tr>
       <td style="width: 100%; text-align: center; font-size: 14px; background-color:#1c584b; padding: 4px 4px 4px; font-weight:bold;  color:white;">
       17. CAUSAS PENALES
       </td>
  </tr>
    </table>

    <table>
    <tr>
    <td><b>
    17.- Indicar el total de personas cuya causa penal fue resuelta a través de una solución alterna.
    </b>
    </td>
      </tr>
    </table>
    <table  cellpadding="1" cellspacing="1">
    <thead>
    <tr style="background-color:#2d8673;color:#FFFFFF; border-color: #FFFFFF;">
      <td width="40" align="center"><b>#</b></td>
      <td width="128" align="center"><b>Descripción</b></td>
      <td width="128" align="center"><b>MUJER</b></td>
      <td width="128" align="center"> <b>HOMBRE</b></td>
      <td width="128" align="center"><b>TOTAL</b></td>
     </tr>
    </thead>
     <tr>
      <td width="40" align="center"><b>1</b></td>
      <td width="128" >Suspensión condicional del proceso</td>
      <td width="128" align="center">'.$datosFormulario["solucion_j17_suspCond_M"] .'</td>
      <td width="128" align="center">'.$datosFormulario["solucion_j17_suspCond_H"] .'</td>
      <td width="128" align="center">'.$datosFormulario["solucion_j17_suspCond_T"] .'</td>
     </tr>
     <tr>
     <td width="40" align="center"><b>2</b></td>
      <td width="128">Acuerdo reparatorio	</td>
      <td width="128" align="center">'.$datosFormulario["solucion_j17_acuerdo_M"] .'</td>
      <td width="128" align="center">'.$datosFormulario["solucion_j17_acuerdo_H"] .'</td>
      <td width="128" align="center">'.$datosFormulario["solucion_j17_acuerdo_T"] .'</td>
     </tr>
     <tr>
      <td width="40" align="center"><b>3</b></td>
      <td width="128">Total</td>
      <td width="128" align="center">'.$datosFormulario["solucion_j17_total_M"] .'</td>
      <td width="128" align="center">'.$datosFormulario["solucion_j17_total_H"] .'</td>
      <td width="128" align="center">'.$datosFormulario["solucion_j17_total_T"] .'</td>
     </tr>
    </table>

    <br><br><br>
    <table>
       <tr>
         <td style="width: 100%; text-align: center; font-size: 14px; background-color:#1c584b; padding: 4px 4px 4px; font-weight:bold;  color:white;">
         18. MEDIDAS CAUTELARES
         </td>
    </tr>
      </table>

    <table>
    <tr>
    <td><p style="font-size: 12px;"><b>
    18.- Indicar el total de personas para las cuales se solicitó una medida cautelar. Desglosar por sexo.
    </b></p>
    </td>
      </tr>
    </table>
    <table  cellpadding="1" cellspacing="1">
    <thead>
    <tr style="background-color:#2d8673;color:#FFFFFF; border-color: #FFFFFF;">
      <td width="128" align="center"><b>Mujeres</b></td>
      <td width="128" align="center"><b>Hombres</b></td>
      <td width="128" align="center"><b>TOTAL</b></td>
     </tr>
    </thead>
     <tr>
        <td width="128" align="center">'.$datosFormulario["medida_j18_medidaCau_M"] .'</td>
        <td width="128" align="center">'.$datosFormulario["medida_j18_medidaCau_H"] .'</td>
        <td width="128" align="center">'.$datosFormulario["medida_j18_medidaCau_T"] .'</td>
       </tr>
    </table>

    <table>
    <tr>
    <td><b>18.1.- Indicar el total de personas para las cuales se solicitó una medida cautelar. Desglosar por tipo de medida y sexo.
    </b>
    </td>
      </tr>
    </table>
    <table  cellpadding="1" cellspacing="1">
    <thead>
    <tr style="background-color:#2d8673;color:#FFFFFF; border-color: #FFFFFF;">
      <td width="40" align="center"><b>#</b></td>
      <td width="128" align="center"><b>Descripción</b></td>
      <td width="128" align="center"><b>MUJER</b></td>
      <td width="128" align="center"> <b>HOMBRE</b></td>
      <td width="128" align="center"><b>TOTAL</b></td>
     </tr>
    </thead>
     <tr>
      <td width="40" align="center"><b>1</b></td>
      <td width="128" >Presentación periódica ante el juez o ante autoridad distinta que aquél designe	</td>
      <td width="128" align="center">'.$datosFormulario["medida_j18_1_presePeri_M"] .'</td>
      <td width="128" align="center">'.$datosFormulario["medida_j18_1_presePeri_H"] .'</td>
      <td width="128" align="center">'.$datosFormulario["medida_j18_1_presePeri_T"] .'</td>
     </tr>
     <tr>
     <td width="40" align="center"><b>2</b></td>
      <td width="128">Exhibición de una garantía económica</td>
      <td width="128" align="center">'.$datosFormulario["medida_j18_1_garantia_M"] .'</td>
      <td width="128" align="center">'.$datosFormulario["medida_j18_1_garantia_H"] .'</td>
      <td width="128" align="center">'.$datosFormulario["medida_j18_1_garantia_T"] .'</td>
     </tr>
     <tr>
      <td width="40" align="center"><b>3</b></td>
      <td width="128">Embargo de bienes	</td>
      <td width="128" align="center">'.$datosFormulario["medida_j18_1_embargo_M"] .'</td>
      <td width="128" align="center">'.$datosFormulario["medida_j18_1_embargo_M"] .'</td>
      <td width="128" align="center">'.$datosFormulario["medida_j18_1_embargo_M"] .'</td>
     </tr>
     <tr>
     <td width="40" align="center"><b>4</b></td>
     <td width="128">Inmovilización de cuentas y demás valores que se encuentren dentro del sistema financiero	</td>
     <td width="128" align="center">'.$datosFormulario["medida_j18_1_inmoCue_M"] .'</td>
     <td width="128" align="center">'.$datosFormulario["medida_j18_1_inmoCue_H"] .'</td>
     <td width="128" align="center">'.$datosFormulario["medida_j18_1_inmoCue_T"] .'</td>
     </tr>
     <tr>
    <td width="40" align="center"><b>5</b></td>
     <td width="128">Sometimiento al cuidado o vigilancia de una persona o institución determinada o internamiento a institución determinada</td>
     <td width="128" align="center">'.$datosFormulario["medida_j18_1_some_M"] .'</td>
     <td width="128" align="center">'.$datosFormulario["medida_j18_1_some_H"] .'</td>
     <td width="128" align="center">'.$datosFormulario["medida_j18_1_some_T"] .'</td>
     </tr>
     <tr>
    <td width="40" align="center"><b>6</b></td>
     <td width="128">Prohibición de concurrir a determinadas reuniones o acercarse o ciertos lugares</td>
     <td width="128" align="center">'.$datosFormulario["medida_j18_1_prohi_M"] .'</td>
     <td width="128" align="center">'.$datosFormulario["medida_j18_1_prohi_H"] .'</td>
     <td width="128" align="center">'.$datosFormulario["medida_j18_1_prohi_T"] .'</td>
     </tr>
     <tr>
    <td width="40" align="center"><b>7</b></td>
     <td width="128">Prohibición de convivir, acercarse o comunicarse con determinadas personas, con las víctimas u ofendidos o testigos, siempre que no se afecte el derecho de defensa</td>
     <td width="128" align="center">'.$datosFormulario["medida_j18_1_proConv_M"] .'</td>
     <td width="128" align="center">'.$datosFormulario["medida_j18_1_proConv_H"] .'</td>
     <td width="128" align="center">'.$datosFormulario["medida_j18_1_proConv_T"] .'</td>
     </tr>
     <tr>
    <td width="40" align="center"><b>8</b></td>
     <td width="128">Separación inmediata del domicilio</td>
     <td width="128" align="center">'.$datosFormulario["medida_j18_1_separa_M"] .'</td>
     <td width="128" align="center">'.$datosFormulario["medida_j18_1_separa_H"] .'</td>
     <td width="128" align="center">'.$datosFormulario["medida_j18_1_separa_T"] .'</td>
     </tr>
     <tr>
    <td width="40" align="center"><b>9</b></td>
     <td width="128">Suspensión temporal en el ejercicio del cargo cuando se le atribuye un delito cometido por servidores públicos	</td>
     <td width="128" align="center">'.$datosFormulario["medida_j18_1_susp_M"] .'</td>
     <td width="128" align="center">'.$datosFormulario["medida_j18_1_susp_H"] .'</td>
     <td width="128" align="center">'.$datosFormulario["medida_j18_1_susp_T"] .'</td>
     </tr>
     <tr>
    <td width="40" align="center"><b>10</b></td>
     <td width="128">Suspensión temporal en el ejercicio de una determinada actividad profesional o laboral</td>
     <td width="128" align="center">'.$datosFormulario["medida_j18_1_suspDet_M"] .'</td>
     <td width="128" align="center">'.$datosFormulario["medida_j18_1_suspDet_H"] .'</td>
     <td width="128" align="center">'.$datosFormulario["medida_j18_1_suspDet_T"] .'</td>
     </tr>
     <tr>
    <td width="40" align="center"><b>11</b></td>
     <td width="128">Colocación de localizadores electrónicos	</td>
     <td width="128" align="center">'.$datosFormulario["medida_j18_1_coloca_M"] .'</td>
     <td width="128" align="center">'.$datosFormulario["medida_j18_1_coloca_H"] .'</td>
     <td width="128" align="center">'.$datosFormulario["medida_j18_1_coloca_T"] .'</td>
     </tr>
     <tr>
    <td width="40" align="center"><b>12</b></td>
     <td width="128">Resguardo en su propio domicilio con las modalidades que el juez disponga</td>
     <td width="128" align="center">'.$datosFormulario["medida_j18_1_resguardo_M"] .'</td>
     <td width="128" align="center">'.$datosFormulario["medida_j18_1_resguardo_H"] .'</td>
     <td width="128" align="center">'.$datosFormulario["medida_j18_1_resguardo_T"] .'</td>
     </tr>
     <tr>
    <td width="40" align="center"><b>13</b></td>
     <td width="128">Prisión preventiva</td>
     <td width="128" align="center">'.$datosFormulario["medida_j18_1_prision_M"] .'</td>
     <td width="128" align="center">'.$datosFormulario["medida_j18_1_prision_H"] .'</td>
     <td width="128" align="center">'.$datosFormulario["medida_j18_1_prision_T"] .'</td>
     </tr>
     <tr>
     <td width="40" align="center"><b>14</b></td>
     <td width="128"  >Otros (agregar las vinculaciones por el resto de los delitos) <br>'.$datosFormulario["medida_j18_1_otros"] .'</td>
     <td width="128"  align="center">'.$datosFormulario["medida_j18_1_otros_M"] .'</td>
     <td width="128"  align="center">'.$datosFormulario["medida_j18_1_otros_H"] .'</td>
     <td width="128" align="center">'.$datosFormulario["medida_j18_1_otros_T"] .'</td>
     </tr>
     <tr>
     <td width="528">'.$datosFormulario["medida_j18_1_nosesabe"] .'</td>
     </tr>
    </table>

    <table>
    <tr>
    <td><p style="font-size: 12px;"><b>
    18.2.- Indicar el total de personas a las cuales se les dictó una medida cautelar. Desglosar por sexo.
    </b></p>
    </td>
      </tr>
    </table>
    <table  cellpadding="1" cellspacing="1">
    <thead>
    <tr style="background-color:#2d8673;color:#FFFFFF; border-color: #FFFFFF;">
      <td width="128" align="center"><b>Mujeres</b></td>
      <td width="128" align="center"><b>Hombres</b></td>
      <td width="128" align="center"><b>TOTAL</b></td>
     </tr>
    </thead>
     <tr>
        <td width="128" align="center">'.$datosFormulario["medida_j18_2_dicto_M"] .'</td>
        <td width="128" align="center">'.$datosFormulario["medida_j18_2_dicto_H"] .'</td>
        <td width="128" align="center">'.$datosFormulario["medida_j18_2_dicto_T"] .'</td>
       </tr>
    </table>

    <table>
    <tr>
    <td><b>18.3.- Indicar el total de personas a las cuales se les dictó una medida cautelar. Desglosar por sexo.
    </b>
    </td>
      </tr>
    </table>
    <table  cellpadding="1" cellspacing="1">
    <thead>
    <tr style="background-color:#2d8673;color:#FFFFFF; border-color: #FFFFFF;">
      <td width="40" align="center"><b>#</b></td>
      <td width="128" align="center"><b>Descripción</b></td>
      <td width="128" align="center"><b>MUJER</b></td>
      <td width="128" align="center"> <b>HOMBRE</b></td>
      <td width="128" align="center"><b>TOTAL</b></td>
     </tr>
    </thead>
     <tr>
      <td width="40" align="center"><b>1</b></td>
      <td width="128" >Presentación periódica ante el juez o ante autoridad distinta que aquél designe</td>
      <td width="128" align="center">'.$datosFormulario["medida_j18_3_presePeri_M"] .'</td>
      <td width="128" align="center">'.$datosFormulario["medida_j18_3_presePeri_H"] .'</td>
      <td width="128" align="center">'.$datosFormulario["medida_j18_3_presePeri_T"] .'</td>
     </tr>
     <tr>
     <td width="40" align="center"><b>2</b></td>
      <td width="128">Exhibición de una garantía económica</td>
      <td width="128" align="center">'.$datosFormulario["medida_j18_3_garantia_M"] .'</td>
      <td width="128" align="center">'.$datosFormulario["medida_j18_3_garantia_H"] .'</td>
      <td width="128" align="center">'.$datosFormulario["medida_j18_3_garantia_T"] .'</td>
     </tr>
     <tr>
      <td width="40" align="center"><b>3</b></td>
      <td width="128">Embargo de bienes	</td>
      <td width="128" align="center">'.$datosFormulario["medida_j18_3_embargo_M"] .'</td>
      <td width="128" align="center">'.$datosFormulario["medida_j18_3_embargo_H"] .'</td>
      <td width="128" align="center">'.$datosFormulario["medida_j18_3_embargo_T"] .'</td>
     </tr>
     <tr>
     <td width="40" align="center"><b>4</b></td>
     <td width="128">Inmovilización de cuentas y demás valores que se encuentren dentro del sistema financiero</td>
     <td width="128" align="center">'.$datosFormulario["medida_j18_3_inmoCue_M"] .'</td>
     <td width="128" align="center">'.$datosFormulario["medida_j18_3_inmoCue_H"] .'</td>
     <td width="128" align="center">'.$datosFormulario["medida_j18_3_inmoCue_T"] .'</td>
     </tr>
     <tr>
    <td width="40" align="center"><b>5</b></td>
     <td width="128">Sometimiento al cuidado o vigilancia de una persona o institución determinada o internamiento a institución determinada</td>
     <td width="128" align="center">'.$datosFormulario["medida_j18_3_some_M"] .'</td>
     <td width="128" align="center">'.$datosFormulario["medida_j18_3_some_H"] .'</td>
     <td width="128" align="center">'.$datosFormulario["medida_j18_3_some_T"] .'</td>
     </tr>
     <tr>
    <td width="40" align="center"><b>6</b></td>
     <td width="128">Prohibición de concurrir a determinadas reuniones o acercarse o ciertos lugares</td>
     <td width="128" align="center">'.$datosFormulario["medida_j18_3_prohi_M"] .'</td>
     <td width="128" align="center">'.$datosFormulario["medida_j18_3_prohi_H"] .'</td>
     <td width="128" align="center">'.$datosFormulario["medida_j18_3_prohi_T"] .'</td>
     </tr>
     <tr>
    <td width="40" align="center"><b>7</b></td>
     <td width="128">Prohibición de convivir, acercarse o comunicarse con determinadas personas, con las víctimas u ofendidos o testigos, siempre que no se afecte el derecho de defensa</td>
     <td width="128" align="center">'.$datosFormulario["medida_j18_3_proConv_M"] .'</td>
     <td width="128" align="center">'.$datosFormulario["medida_j18_3_proConv_H"] .'</td>
     <td width="128" align="center">'.$datosFormulario["medida_j18_3_proConv_T"] .'</td>
     </tr>
     <tr>
    <td width="40" align="center"><b>8</b></td>
     <td width="128">Separación inmediata del domicilio</td>
     <td width="128" align="center">'.$datosFormulario["medida_j18_3_separa_M"] .'</td>
     <td width="128" align="center">'.$datosFormulario["medida_j18_3_separa_H"] .'</td>
     <td width="128" align="center">'.$datosFormulario["medida_j18_3_separa_T"] .'</td>
     </tr>
     <tr>
    <td width="40" align="center"><b>9</b></td>
     <td width="128">Suspensión temporal en el ejercicio del cargo cuando se le atribuye un delito cometido por servidores públicos	</td>
     <td width="128" align="center">'.$datosFormulario["medida_j18_3_susp_M"] .'</td>
     <td width="128" align="center">'.$datosFormulario["medida_j18_3_susp_H"] .'</td>
     <td width="128" align="center">'.$datosFormulario["medida_j18_3_susp_T"] .'</td>
     </tr>
     <tr>
    <td width="40" align="center"><b>10</b></td>
     <td width="128">Suspensión temporal en el ejercicio de una determinada actividad profesional o laboral</td>
     <td width="128" align="center">'.$datosFormulario["medida_j18_3_suspDet_M"] .'</td>
     <td width="128" align="center">'.$datosFormulario["medida_j18_3_suspDet_H"] .'</td>
     <td width="128" align="center">'.$datosFormulario["medida_j18_3_suspDet_T"] .'</td>
     </tr>
     <tr>
    <td width="40" align="center"><b>11</b></td>
     <td width="128">Colocación de localizadores electrónicos	</td>
     <td width="128" align="center">'.$datosFormulario["medida_j18_3_coloca_M"] .'</td>
     <td width="128" align="center">'.$datosFormulario["medida_j18_3_coloca_H"] .'</td>
     <td width="128" align="center">'.$datosFormulario["medida_j18_3_coloca_T"] .'</td>
     </tr>
     <tr>
    <td width="40" align="center"><b>12</b></td>
     <td width="128">Resguardo en su propio domicilio con las modalidades que el juez disponga</td>
     <td width="128" align="center">'.$datosFormulario["medida_j18_3_resguardo_M"] .'</td>
     <td width="128" align="center">'.$datosFormulario["medida_j18_3_resguardo_H"] .'</td>
     <td width="128" align="center">'.$datosFormulario["medida_j18_3_resguardo_T"] .'</td>
     </tr>
     <tr>
    <td width="40" align="center"><b>13</b></td>
     <td width="128">Prisión preventiva</td>
     <td width="128" align="center">'.$datosFormulario["medida_j18_3_prision_M"] .'</td>
     <td width="128" align="center">'.$datosFormulario["medida_j18_3_prision_H"] .'</td>
     <td width="128" align="center">'.$datosFormulario["medida_j18_3_prision_T"] .'</td>
     </tr>
     <tr>
     <td width="40" align="center"><b>14</b></td>
     <td width="128"  >Otros (agregar las vinculaciones por el resto de los delitos) <br>'.$datosFormulario["medida_j18_1_otros"] .'</td>
     <td width="128"  align="center">'.$datosFormulario["medida_j18_3_otros_M"] .'</td>
     <td width="128"  align="center">'.$datosFormulario["medida_j18_3_otros_H"] .'</td>
     <td width="128" align="center">'.$datosFormulario["medida_j18_3_otros_T"] .'</td>
     </tr>
    </table>

    <br><br><br>
    <table>
       <tr>
         <td style="width: 100%; text-align: center; font-size: 14px; background-color:#1c584b; padding: 4px 4px 4px; font-weight:bold;  color:white;">
         19. AUDIENCIAS
         </td>
    </tr>

      </table>
      <table>
      <tr>
      <td><b>19.- ¿Cuántas audiencias se llevaron a cabo durante el año 2020? Desglosar por estatus.
      </b>
      </td>
        </tr>
      </table>
      <table  cellpadding="1" cellspacing="1">
      <thead>
      <tr style="background-color:#2d8673;color:#FFFFFF; border-color: #FFFFFF;">
        <td width="40" ><b>#</b></td>
        <td width="288" align="center"><b>Descripción</b></td>
        <td width="128" align="center"><b>Subotal</b></td>
       </tr>
      </thead>
       <tr>
        <td width="40" align="center"><b>1</b></td>
        <td width="128" >Audiencias celebradas</td>
        <td width="128" align="center">'.$datosFormulario["audiencias_j19_audCele"] .'</td>
         </tr>
       <tr>
       <td width="40" align="center"><b>2</b></td>
        <td width="148" >Audiencias anuladas/canceladas</td>
        <td width="128" align="center">'.$datosFormulario["audiencias_j19_audAnul"] .'</td>
         </tr>
       <tr>
        <td width="40" align="center"><b>3</b></td>
        <td width="288" >Audiencias diferidas</td>
        <td width="128" align="center">'.$datosFormulario["audiencias_j19_audDif"] .'</td>
         </tr>
         <tr>
          <td width="40" align="center"><b>4</b></td>
          <td width="288" >Otras (¿Cuáles?)   </td>
          <td width="128" align="center">'.$datosFormulario["audiencias_j19_otras"] .'</td>
          <td width="128" align="center">'.$datosFormulario["audiencias_j19_otrasCual"] .'</td>
           </tr>
           <tr>
            <td width="40" align="center"><b>5</b></td>
            <td width="288" >Total</td>
            <td width="128" align="center">'.$datosFormulario["audiencias_j19_total"] .'</td>
             </tr>
      </table>

      <table>
      <tr>
      <td><b>19.1.- ¿Cuántas audiencias se llevaron a cabo en el año 2020? Desglosar por tipo de audiencia.
      </b>
      </td>
        </tr>
      </table>
      <table  cellpadding="1" cellspacing="1">
      <thead>
      <tr style="background-color:#2d8673;color:#FFFFFF; border-color: #FFFFFF;">
        <td width="40" ><b>#</b></td>
        <td width="288" align="center"><b>Descripción</b></td>
        <td width="128" align="center"><b>Subotal</b></td>
       </tr>
      </thead>
       <tr>
        <td width="40" align="center"><b>1</b></td>
        <td width="128" >Iniciales</td>
        <td width="128" align="center">'.$datosFormulario["audiencias_j19_1_iniciales"] .'</td>
         </tr>
       <tr>
       <td width="40" align="center"><b>2</b></td>
        <td width="148" >Intermedias</td>
        <td width="128" align="center">'.$datosFormulario["audiencias_j19_1_inter"] .'</td>
         </tr>
       <tr>
        <td width="40" align="center"><b>3</b></td>
        <td width="288" >De juicio oral</td>
        <td width="128" align="center">'.$datosFormulario["audiencias_j19_1_juicioOr"] .'</td>
         </tr>
           <tr>
            <td width="40" align="center"><b>4</b></td>
            <td width="288" >De explicación de sentencia</td>
            <td width="128" align="center">'.$datosFormulario["audiencias_j19_1_sentencia"] .'</td>
             </tr>
             <tr>
              <td width="40" align="center"><b>5</b></td>
              <td width="288" >De individualización de sanciones</td>
              <td width="128" align="center">'.$datosFormulario["audiencias_j19_1_sanciones"] .'</td>
               </tr>
               <tr>
                <td width="40" align="center"><b>5</b></td>
                <td width="288" >Total</td>
                <td width="128" align="center">'.$datosFormulario["audiencias_j19_1_total"] .'</td>
                 </tr>
      </table>

<!-- Fin Tab 6-->

<!-- Inicio Tab 7-->
<table>
   <tr>
     <td style="width: 100%; text-align: center; font-size: 14px; background-color:#1c584b; padding: 4px 4px 4px; font-weight:bold;  color:white;">
     20. SENTENCIAS
     </td>
</tr>
</table>
<table>
<tr>
<td><b>
20.- ¿Cuál fue el total de sentencias emitidas en materia penal en el año 2020? Desglosar por tipo.
</b>
</td>
  </tr>
</table>
<table  cellpadding="1" cellspacing="1">
<thead>
<tr style="background-color:#2d8673;color:#FFFFFF; border-color: #FFFFFF;">
  <td width="40" align="center"><b>#</b></td>
  <td width="128" align="center"><b>Descripción</b></td>
  <td width="128" align="center"><b>Subtotal</b></td>
 </tr>
</thead>
 <tr>
  <td width="40" align="center"><b>1</b></td>
  <td width="128" >Absolutoria/as</td>
  <td width="128" align="center">'.$datosFormulario["sentencias_j20_absolutaria"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>2</b></td>
  <td width="128">Condenatoria</td>
  <td width="128" align="center">'.$datosFormulario["sentencias_j20_condena"] .'</td>
 </tr>
 <tr>
  <td width="40" align="center"><b>3</b></td>
  <td width="128">Mixta</td>
  <td width="128" align="center">'.$datosFormulario["sentencias_j20_mixta"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>4</b></td>
 <td width="128">Otros '.$datosFormulario["sentencias_j20_otras"] .'</td>
 <td width="128" align="center">'.$datosFormulario["sentencias_j20_otrasCual"] .'</td>
 </tr>
 <tr>
<td width="40" align="center"><b>5</b></td>
 <td width="128">Total</td>
 <td width="128" align="center">'.$datosFormulario["sentencias_j20_total"] .'</td>
 </tr>
 </table>



 <table>
 <tr>
 <td><b>
 20.1.- ¿Cuál fue el número de sentencias condenatorias emitidas durante el año 2020? Desglosar por tipo.
 </b>
 </td>
   </tr>
 </table>
 <table  cellpadding="1" cellspacing="1">
 <thead>
 <tr style="background-color:#2d8673;color:#FFFFFF; border-color: #FFFFFF;">
   <td width="40" align="center"><b>#</b></td>
   <td width="128" align="center"><b>Descripción</b></td>
   <td width="128" align="center"><b>Subtotal</b></td>
  </tr>
 </thead>
  <tr>
   <td width="40" align="center"><b>1</b></td>
   <td width="128" > Por procedimiento abreviado/as</td>
   <td width="128" align="center">'.$datosFormulario["sentencias_j20_1_proceAbr"] .'</td>
  </tr>
  <tr>
  <td width="40" align="center"><b>2</b></td>
   <td width="128">Por juicio oral</td>
   <td width="128" align="center">'.$datosFormulario["sentencias_j20_1_juicioOr"] .'</td>
  </tr>
  <tr>
  <td width="40" align="center"><b>4</b></td>
  <td width="128">Otros '.$datosFormulario["sentencias_j20_1_otras"] .'</td>
  <td width="128" align="center">'.$datosFormulario["sentencias_j20_1_otrasCual"] .'</td>
  </tr>
  <tr>
 <td width="40" align="center"><b>5</b></td>
  <td width="128">Total</td>
  <td width="128" align="center">'.$datosFormulario["sentencias_j20_1_total"] .'</td>
  </tr>
  </table>



 <table>
 <tr>
 <td><b>
 20.2.- ¿Cuál fue el número de sentencias condenatorias emitidas durante el año 2020? Desglosar por edad y sexo de las personas sentenciadas.
 </b>
 </td>
   </tr>
 </table>
<table  cellpadding="1" cellspacing="1">
<thead>
<tr style="background-color:#2d8673;color:#FFFFFF; border-color: #FFFFFF;">
  <td width="40" align="center"><b>#</b></td>
  <td width="128" align="center"><b>Descripción</b></td>
  <td width="128" align="center"><b>MUJER</b></td>
  <td width="128" align="center"> <b>HOMBRE</b></td>
  <td width="128" align="center"><b>TOTAL</b></td>
 </tr>
</thead>
 <tr>
  <td width="40" align="center"><b>1</b></td>
  <td width="128" >Mayor de 18 años</td>
  <td width="128" align="center">'.$datosFormulario["sentencias_j20_2_mayor18_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["sentencias_j20_2_mayor18_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["sentencias_j20_2_mayor18_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>2</b></td>
  <td width="128">Menor de 18 años</td>
  <td width="128" align="center">'.$datosFormulario["sentencias_j20_2_menor18_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["sentencias_j20_2_menor18_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["sentencias_j20_2_menor18_M"] .'</td>
 </tr>
 <tr>
  <td width="40" align="center"><b>3</b></td>
  <td width="128">Total</td>
  <td width="128" align="center">'.$datosFormulario["sentencias_j20_2_total_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["sentencias_j20_2_total_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["sentencias_j20_2_total_T"] .'</td>
 </tr>
 <tr>
 <td width="128">'.$datosFormulario["sentencias_j20_2_nosesabe"] .'</td>
 </tr>
</table>



<table>
<tr>
<td><b>
20.3.- Indicar el total de personas con sentencias condenatorias por los siguientes delitos. Desglosar por sexo.
</b>
</td>
  </tr>
</table>
<table  cellpadding="1" cellspacing="1">
<thead>
<tr style="background-color:#2d8673;color:#FFFFFF; border-color: #FFFFFF;">
  <td width="40" align="center"><b>#</b></td>
  <td width="128" align="center"><b>Descripción</b></td>
  <td width="128" align="center"><b>MUJER</b></td>
  <td width="128" align="center"> <b>HOMBRE</b></td>
  <td width="128" align="center"><b>TOTAL</b></td>
 </tr>
</thead>
 <tr>
  <td width="40" align="center"><b>1</b></td>
  <td width="128" >Homicidio</td>
  <td width="128" align="center">'.$datosFormulario["sentencias_j20_3_homicidio_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["sentencias_j20_3_homicidio_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["sentencias_j20_3_homicidio_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>2</b></td>
  <td width="128">Feminicidio</td>
  <td width="128" align="center">'.$datosFormulario["sentencias_j20_3_feminicidio_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["sentencias_j20_3_feminicidio_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["sentencias_j20_3_feminicidio_T"] .'</td>
 </tr>
 <tr>
  <td width="40" align="center"><b>3</b></td>
  <td width="128">Lesiones</td>
  <td width="128" align="center">'.$datosFormulario["sentencias_j20_3_lesiones_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["sentencias_j20_3_lesiones_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["sentencias_j20_3_lesiones_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>4</b></td>
 <td width="128">Violencia familiar</td>
 <td width="128" align="center">'.$datosFormulario["sentencias_j20_3_violFam_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["sentencias_j20_3_violFam_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["sentencias_j20_3_violFam_T"] .'</td>
 </tr>
 <tr>
<td width="40" align="center"><b>5</b></td>
 <td width="128">Abuso sexual</td>
 <td width="128" align="center">'.$datosFormulario["sentencias_j20_3_abuSex_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["sentencias_j20_3_abuSex_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["sentencias_j20_3_abuSex_T"] .'</td>
 </tr>
 <tr>
<td width="40" align="center"><b>6</b></td>
 <td width="128">Hostigamiento sexual</td>
 <td width="128" align="center">'.$datosFormulario["sentencias_j20_3_hostSex_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["sentencias_j20_3_hostSex_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["sentencias_j20_3_hostSex_T"] .'</td>
 </tr>
 <tr>
<td width="40" align="center"><b>7</b></td>
 <td width="128">Violación</td>
 <td width="128" align="center">'.$datosFormulario["sentencias_j20_3_violacion_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["sentencias_j20_3_violacion_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["sentencias_j20_3_violacion_T"] .'</td>
 </tr>
 <tr>
<td width="40" align="center"><b>8</b></td>
 <td width="128">Trata de personas</td>
 <td width="128" align="center">'.$datosFormulario["sentencias_j20_3_trata_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["sentencias_j20_3_trata_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["sentencias_j20_3_trata_T"] .'</td>
 </tr>
 <tr>
<td width="40" align="center"><b>9</b></td>
 <td width="128">Corrupción de menores</td>
 <td width="128" align="center">'.$datosFormulario["sentencias_j20_3_corrup_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["sentencias_j20_3_corrup_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["sentencias_j20_3_corrup_T"] .'</td>
 </tr>
 <tr>
<td width="40" align="center"><b>10</b></td>
 <td width="128">Tráfico de menores</td>
 <td width="128" align="center">'.$datosFormulario["sentencias_j20_3_traMen_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["sentencias_j20_3_traMen_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["sentencias_j20_3_traMen_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>11</b></td>
 <td width="128">Otros '.$datosFormulario["sentencias_j20_3_otros"] .'</td>
 <td width="128" align="center">'.$datosFormulario["sentencias_j20_3_otros_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["sentencias_j20_3_otros_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["sentencias_j20_3_otros_T"] .'</td>
 </tr>
 <tr>
 <td width="128">'.$datosFormulario["sentencias_j20_3_nosesabe"] .'</td>
 </tr>
</table>


<table>
<tr>
<td><b>
20.4.- ¿Cuál fue el número de sobreseimientos dictados en el año 2020? Desglosar por tipo.
</b>
</td>
  </tr>
</table>
<table  cellpadding="1" cellspacing="1">
<thead>
<tr style="background-color:#2d8673;color:#FFFFFF; border-color: #FFFFFF;">
  <td width="40" align="center"><b>#</b></td>
  <td width="128" align="center"><b>Descripción</b></td>
  <td width="128" align="center"><b>Total</b></td>
 </tr>
</thead>
 <tr>
  <td width="40" align="center"><b>1</b></td>
  <td width="128" > Sobreseimientos dictados tras cumplir con suspensión condicional</td>
  <td width="128" align="center">'.$datosFormulario["sentencias_j20_4_suspenCond"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>2</b></td>
  <td width="128">Sobreseimientos dictados por acuerdo reparatorio</td>
  <td width="128" align="center">'.$datosFormulario["sentencias_j20_4_acuerdo"] .'</td>
 </tr>
 <tr>
  <td width="40" align="center"><b>3</b></td>
  <td width="128">Sobreseimientos dictados por otorgamiento de perdón</td>
  <td width="128" align="center">'.$datosFormulario["sentencias_j20_4_otorPerd"] .'</td>
 </tr>
 <tr>
<td width="40" align="center"><b>5</b></td>
 <td width="128"> Otras terminaciones (fallecimiento, acumulación, reclasificación)</td>
 <td width="128" align="center">'.$datosFormulario["sentencias_j20_4_otrasDet"] .'</td>
 </tr>
 </table>



 <table>
 <tr>
 <td><b>
 20.5.- ¿Cuál fue el total de apelaciones promovidas a sentencias en el año 2020? Desglosar por tipo.
 </b>
 </td>
   </tr>
 </table>
 <table  cellpadding="1" cellspacing="1">
 <thead>
 <tr style="background-color:#2d8673;color:#FFFFFF; border-color: #FFFFFF;">
   <td width="40" align="center"><b>#</b></td>
   <td width="128" align="center"><b>Descripción</b></td>
   <td width="128" align="center"><b>Subtotal</b></td>
  </tr>
 </thead>
  <tr>
   <td width="40" align="center"><b>1</b></td>
   <td width="128" >Confirmadas</td>
   <td width="128" align="center">'.$datosFormulario["sentencias_j20_5_confirmadas"] .'</td>
  </tr>
  <tr>
  <td width="40" align="center"><b>2</b></td>
   <td width="128">Modificadas</td>
   <td width="128" align="center">'.$datosFormulario["sentencias_j20_5_modificadas"] .'</td>
  </tr>
  <tr>
   <td width="40" align="center"><b>3</b></td>
   <td width="128">Revocadas</td>
   <td width="128" align="center">'.$datosFormulario["sentencias_j20_5_revocadas"] .'</td>
  </tr>
  <tr>
 <td width="40" align="center"><b>5</b></td>
  <td width="128">Total</td>
  <td width="128" align="center">'.$datosFormulario["sentencias_j20_5_total"] .'</td>
  </tr>
  </table>



  <table>
     <tr>
       <td style="width: 100%; text-align: center; font-size: 14px; background-color:#1c584b; padding: 4px 4px 4px; font-weight:bold;  color:white;">
       21. AMPAROS
       </td>
  </tr>
  <tr>
  <td><p style="font-size: 12px;"><b>
  21.- ¿Cuál fue el número de amparos promovidos durante el año 2020?
  </b></p>
  </td>
    </tr>
    <table  cellpadding="1" cellspacing="1">
     <tr>
      <td width="136"  align="center" >'.$datosFormulario["amparos_j21_amparos"] .'</td>
     </tr>
  </table>


  <table>
  <tr>
  <td><b>
  21.1.- Total de amparos promovidos en el año 2020. Desglosar por tipo de resolución.
  </b>
  </td>
    </tr>
  </table>
  <table  cellpadding="1" cellspacing="1">
  <thead>
  <tr style="background-color:#2d8673;color:#FFFFFF; border-color: #FFFFFF;">
    <td width="40" align="center"><b>#</b></td>
    <td width="128" align="center"><b>Descripción</b></td>
    <td width="128" align="center"><b>Subtotal</b></td>
   </tr>
  </thead>
   <tr>
    <td width="40" align="center"><b>1</b></td>
    <td width="128" >Concedidos</td>
    <td width="128" align="center">'.$datosFormulario["amparos_j21_1_concedidos"] .'</td>
   </tr>
   <tr>
   <td width="40" align="center"><b>2</b></td>
    <td width="128">Negados</td>
    <td width="128" align="center">'.$datosFormulario["amparos_j21_1_negados"] .'</td>
   </tr>
   <tr>
   <td width="40" align="center"><b>2</b></td>
    <td width="128">Sobreseídos</td>
    <td width="128" align="center">'.$datosFormulario["amparos_j21_1_sobreseidos"] .'</td>
   </tr>
   <tr>
   <td width="40" align="center"><b>2</b></td>
    <td width="128">Desechados</td>
    <td width="128" align="center">'.$datosFormulario["amparos_j21_1_desechados"] .'</td>
   </tr>
   <tr>
   <td width="40" align="center"><b>4</b></td>
   <td width="128">Otros '.$datosFormulario["amparos_j21_1_otras"] .'</td>
   <td width="128" align="center">'.$datosFormulario["amparos_j21_1_otrasCual"] .'</td>
   </tr>
   <tr>
  <td width="40" align="center"><b>5</b></td>
   <td width="128">Total</td>
   <td width="128" align="center">'.$datosFormulario["amparos_j21_1_total"] .'</td>
   </tr>
   </table>



   <table>
      <tr>
        <td style="width: 100%; text-align: center; font-size: 14px; background-color:#1c584b; padding: 4px 4px 4px; font-weight:bold;  color:white;">
        22. BENEFICIOS PRELIBERACIONALES
        </td>
   </tr>
   <tr>
   <td><p style="font-size: 12px;"><b>
   22.- Indicar el total de personas a las cuales se les otorgó algún beneficio preliberacional. Desglosar por tipo de beneficio y sexo.
   </b></p>
   </td>
     </tr>
   </table>
   <table  cellpadding="1" cellspacing="1">
   <thead>
   <tr style="background-color:#2d8673;color:#FFFFFF; border-color: #FFFFFF;">
     <td width="40" align="center"><b>#</b></td>
     <td width="128" align="center"><b>Descripción</b></td>
     <td width="128" align="center"><b>MUJER</b></td>
     <td width="128" align="center"> <b>HOMBRE</b></td>
     <td width="128" align="center"><b>TOTAL</b></td>
    </tr>
   </thead>
    <tr>
     <td width="40" align="center"><b>1</b></td>
     <td width="128" >Libertad condicionada</td>
     <td width="128" align="center">'.$datosFormulario["preliberacional_j22_libCond_M"] .'</td>
     <td width="128" align="center">'.$datosFormulario["preliberacional_j22_libCond_H"] .'</td>
     <td width="128" align="center">'.$datosFormulario["preliberacional_j22_libCond_T"] .'</td>
    </tr>
    <tr>
    <td width="40" align="center"><b>2</b></td>
     <td width="128">Libertad anticipada</td>
     <td width="128" align="center">'.$datosFormulario["preliberacional_j22_libAnt_M"] .'</td>
     <td width="128" align="center">'.$datosFormulario["preliberacional_j22_libAnt_H"] .'</td>
     <td width="128" align="center">'.$datosFormulario["preliberacional_j22_libAnt_T"] .'</td>
    </tr>
    <tr>
     <td width="40" align="center"><b>3</b></td>
     <td width="128">Sustitución y suspensión temporal de las penas</td>
     <td width="128" align="center">'.$datosFormulario["preliberacional_j22_sustSusp_M"] .'</td>
     <td width="128" align="center">'.$datosFormulario["preliberacional_j22_sustSusp_H"] .'</td>
     <td width="128" align="center">'.$datosFormulario["preliberacional_j22_sustSusp_T"] .'</td>
    </tr>
    <tr>
    <td width="40" align="center"><b>4</b></td>
    <td width="128">Permisos humanitarios</td>
    <td width="128" align="center">'.$datosFormulario["preliberacional_j22_permHum_M"] .'</td>
    <td width="128" align="center">'.$datosFormulario["preliberacional_j22_permHum_H"] .'</td>
    <td width="128" align="center">'.$datosFormulario["preliberacional_j22_permHum_T"] .'</td>
    </tr>
    <tr>
   <td width="40" align="center"><b>5</b></td>
    <td width="128">Preliberación por criterios de política penitenciaria</td>
    <td width="128" align="center">'.$datosFormulario["preliberacional_j22_prelib_M"] .'</td>
    <td width="128" align="center">'.$datosFormulario["preliberacional_j22_prelib_H"] .'</td>
    <td width="128" align="center">'.$datosFormulario["preliberacional_j22_prelib_T"] .'</td>
    </tr>
    </table>



    <table>
       <tr>
         <td style="width: 100%; text-align: center; font-size: 14px; background-color:#1c584b; padding: 4px 4px 4px; font-weight:bold;  color:white;">
         23. VÍCTIMAS
         </td>
    </tr>
    <tr>
    <td><p style="font-size: 12px;"><b>
    23.- ¿Cuál fue el total de víctimas derivadas de las causas penales ingresadas durante el año 2020? Desglosar por edad y sexo.
    </b></p>
    </td>
      </tr>
    </table>
    <table  cellpadding="1" cellspacing="1">
    <thead>
    <tr style="background-color:#2d8673;color:#FFFFFF; border-color: #FFFFFF;">
      <td width="40" align="center"><b>#</b></td>
      <td width="128" align="center"><b>Descripción</b></td>
      <td width="128" align="center"><b>MUJER</b></td>
      <td width="128" align="center"> <b>HOMBRE</b></td>
      <td width="128" align="center"><b>TOTAL</b></td>
     </tr>
    </thead>
     <tr>
      <td width="40" align="center"><b>1</b></td>
      <td width="128" >Mayor de 18 años</td>
      <td width="128" align="center">'.$datosFormulario["victimas_j23_mayor18_M"] .'</td>
      <td width="128" align="center">'.$datosFormulario["victimas_j23_mayor18_H"] .'</td>
      <td width="128" align="center">'.$datosFormulario["victimas_j23_mayor18_T"] .'</td>
     </tr>
     <tr>
     <td width="40" align="center"><b>2</b></td>
      <td width="128">Menor de 18 años	</td>
      <td width="128" align="center">'.$datosFormulario["victimas_j23_menor18_M"] .'</td>
      <td width="128" align="center">'.$datosFormulario["victimas_j23_menor18_H"] .'</td>
      <td width="128" align="center">'.$datosFormulario["victimas_j23_menor18_T"] .'</td>
     </tr>
     <tr>
      <td width="40" align="center"><b>3</b></td>
      <td width="128">Total</td>
      <td width="128" align="center">'.$datosFormulario["victimas_j23_total_M"] .'</td>
      <td width="128" align="center">'.$datosFormulario["victimas_j23_total_H"] .'</td>
      <td width="128" align="center">'.$datosFormulario["victimas_j23_total_T"] .'</td>
     </tr>
    </table>



    <table>
    <tr>
    <td><b>
    23.1.- ¿Cuál fue el total de víctimas derivadas de las causas penales ingresadas durante el año 2020? Desglosar por sexo y por delito.
    </b>
    </td>
      </tr>
    </table>
    <table  cellpadding="1" cellspacing="1">
    <thead>
    <tr style="background-color:#2d8673;color:#FFFFFF; border-color: #FFFFFF;">
      <td width="40" align="center"><b>#</b></td>
      <td width="128" align="center"><b>Descripción</b></td>
      <td width="128" align="center"><b>MUJER</b></td>
      <td width="128" align="center"> <b>HOMBRE</b></td>
      <td width="128" align="center"><b>TOTAL</b></td>
     </tr>
    </thead>
     <tr>
      <td width="40" align="center"><b>1</b></td>
      <td width="128" >Homicidio</td>
      <td width="128" align="center">'.$datosFormulario["victimas_j23_1_homicidio_M"] .'</td>
      <td width="128" align="center">'.$datosFormulario["victimas_j23_1_homicidio_H"] .'</td>
      <td width="128" align="center">'.$datosFormulario["victimas_j23_1_homicidio_T"] .'</td>
     </tr>
     <tr>
     <td width="40" align="center"><b>2</b></td>
      <td width="128">Feminicidio</td>
      <td width="128" align="center">'.$datosFormulario["victimas_j23_1_feminicidio_M"] .'</td>
      <td width="128" align="center">'.$datosFormulario["victimas_j23_1_feminicidio_H"] .'</td>
      <td width="128" align="center">'.$datosFormulario["victimas_j23_1_feminicidio_T"] .'</td>
     </tr>
     <tr>
      <td width="40" align="center"><b>3</b></td>
      <td width="128">Lesiones</td>
      <td width="128" align="center">'.$datosFormulario["victimas_j23_1_lesiones_M"] .'</td>
      <td width="128" align="center">'.$datosFormulario["victimas_j23_1_lesiones_H"] .'</td>
      <td width="128" align="center">'.$datosFormulario["victimas_j23_1_lesiones_T"] .'</td>
     </tr>
     <tr>
     <td width="40" align="center"><b>4</b></td>
     <td width="128">Violencia familiar</td>
     <td width="128" align="center">'.$datosFormulario["victimas_j23_1_violFam_M"] .'</td>
     <td width="128" align="center">'.$datosFormulario["victimas_j23_1_violFam_H"] .'</td>
     <td width="128" align="center">'.$datosFormulario["victimas_j23_1_violFam_T"] .'</td>
     </tr>
     <tr>
    <td width="40" align="center"><b>5</b></td>
     <td width="128">Abuso sexual</td>
     <td width="128" align="center">'.$datosFormulario["victimas_j23_1_abuSex_M"] .'</td>
     <td width="128" align="center">'.$datosFormulario["victimas_j23_1_abuSex_H"] .'</td>
     <td width="128" align="center">'.$datosFormulario["victimas_j23_1_abuSex_T"] .'</td>
     </tr>
     <tr>
    <td width="40" align="center"><b>6</b></td>
     <td width="128">Hostigamiento sexual</td>
     <td width="128" align="center">'.$datosFormulario["victimas_j23_1_hostSex_M"] .'</td>
     <td width="128" align="center">'.$datosFormulario["victimas_j23_1_hostSex_H"] .'</td>
     <td width="128" align="center">'.$datosFormulario["victimas_j23_1_hostSex_T"] .'</td>
     </tr>
     <tr>
    <td width="40" align="center"><b>7</b></td>
     <td width="128">Violación</td>
     <td width="128" align="center">'.$datosFormulario["victimas_j23_1_violacion_M"] .'</td>
     <td width="128" align="center">'.$datosFormulario["victimas_j23_1_violacion_H"] .'</td>
     <td width="128" align="center">'.$datosFormulario["victimas_j23_1_violacion_T"] .'</td>
     </tr>
     <tr>
    <td width="40" align="center"><b>8</b></td>
     <td width="128">Trata de personas</td>
     <td width="128" align="center">'.$datosFormulario["victimas_j23_1_trata_M"] .'</td>
     <td width="128" align="center">'.$datosFormulario["victimas_j23_1_trata_H"] .'</td>
     <td width="128" align="center">'.$datosFormulario["victimas_j23_1_trata_T"] .'</td>
     </tr>
     <tr>
    <td width="40" align="center"><b>9</b></td>
     <td width="128">Corrupción de menores</td>
     <td width="128" align="center">'.$datosFormulario["victimas_j23_1_corrup_M"] .'</td>
     <td width="128" align="center">'.$datosFormulario["victimas_j23_1_corrup_H"] .'</td>
     <td width="128" align="center">'.$datosFormulario["victimas_j23_1_corrup_T"] .'</td>
     </tr>
     <tr>
    <td width="40" align="center"><b>10</b></td>
     <td width="128">Tráfico de menores</td>
     <td width="128" align="center">'.$datosFormulario["victimas_j23_1_traMen_M"] .'</td>
     <td width="128" align="center">'.$datosFormulario["victimas_j23_1_traMen_H"] .'</td>
     <td width="128" align="center">'.$datosFormulario["victimas_j23_1_traMen_T"] .'</td>
     </tr>
     <tr>
     <td width="128">'.$datosFormulario["victimas_j23_1_nosesabe"] .'</td>
     </tr>
    </table>


    <table>
    <tr>
    <td><p style="font-size: 12px;"><b>
    23.2.- ¿La institución cuenta con buenas prácticas que considere sean innovadoras para evitar la revictimización de víctimas directas o indirectas?
    </b></p>
    </td>
      </tr>
    </table>
    <table  cellpadding="1" cellspacing="1">
     <tr>
      <td width="136"  align="center" >'.$datosFormulario["victimas_j23_2_buepra"] .'</td>
     </tr>
    </table>

    <table>
    <tr>
    <td><p style="font-size: 12px;"><b>
    23.3.- ¿Cuáles son esas buenas prácticas?
    </b></p>
    </td>
      </tr>
    </table>
    <table  cellpadding="1" cellspacing="1">
     <tr>
      <td width="528"  align="center" >'.$datosFormulario["victimas_j23_3_cuabuepra"] .'</td>
     </tr>
    </table>
<!-- Fin Tab 7-->

<!-- Inicio Tab 8-->

<br><br><br>
<table>
   <tr>
     <td style="width: 100%; text-align: center; font-size: 14px; background-color:#1c584b; padding: 4px 4px 4px; font-weight:bold;  color:white;">
     24. MESAS DE JUSTICIA
     </td>
</tr>
  </table>

  <table>
  <tr>
  <td><b>24.- ¿La institución participa en las Mesas de Justicia -judicialización- de la entidad?</b>
  </td>
    </tr>
    <tr>
    <td width="128">'.$datosFormulario["justicia_j24_mesas"] .'</td>
    </tr>
  </table>


  <table>
  <tr>
  <td width="528"><b>
  24.1.- ¿Qué instituciones participan en las Mesas de Justicia -judicialización-?
  </b>
  </td>
    </tr>
    <tr>
    <td width="128">'.$datosFormulario["justicia_j24_1_segobedo"] .'</td>
    </tr>
    <tr>
    <td width="128">'.$datosFormulario["justicia_j24_1_uasj"] .'</td>
    </tr>
    <tr>
    <td width="528">'.$datosFormulario["justicia_j24_1_presitsje"] .'</td>
    </tr>
    <tr>
    <td width="528">'.$datosFormulario["justicia_j24_1_fiscalprocu"] .'</td>
    </tr>
    <tr>
    <td width="528">'.$datosFormulario["justicia_j24_1_ssp"] .'</td>
    </tr>
    <tr>
    <td width="528">'.$datosFormulario["justicia_j24_1_ide"] .'</td>
    </tr>
    <tr>
    <td width="528">'.$datosFormulario["justicia_j24_1_peni"] .'</td>
    </tr>
    <tr>
    <td width="528">'.$datosFormulario["justicia_j24_1_medidasCau"] .'</td>
    </tr>
    <tr>
    <td width="528">'.$datosFormulario["justicia_j24_1_iem"] .'</td>
    </tr>
    <tr>
    <td width="528">'.$datosFormulario["justicia_j24_1_difEst"] .'</td>
    </tr>
    <tr>
    <td width="528">'.$datosFormulario["justicia_j24_1_sipinna"] .'</td>
    </tr>
    <tr>
    <td width="528">'.$datosFormulario["justicia_j24_1_salud"] .'</td>
    </tr>
    <tr>
    <td width="528">'.$datosFormulario["justicia_j24_1_asesoresJur"] .'</td>
    </tr>
    <tr>
    <td width="528">'.$datosFormulario["justicia_j24_1_justMuj"] .'</td>
    </tr>
    <tr>
    <td width="528">'.$datosFormulario["justicia_j24_1_delGene"] .'</td>
    </tr>
    <tr>
    <td width="528">'.$datosFormulario["justicia_j24_1_direPeni"] .'</td>
    </tr>
    <tr>
    <td width="528">'.$datosFormulario["justicia_j24_1_direInteAd"] .'</td>
    </tr>
    <tr>
    <td width="528">'.$datosFormulario["justicia_j24_1_mecaAlt"] .'</td>
    </tr>
    <tr>
    <td width="528">'.$datosFormulario["justicia_j24_1_periFor"] .'</td>
    </tr>
    <tr>
    <td width="128">'.$datosFormulario["justicia_j24_1_otros"].'</td>
    <td width="528">Cuáles: '.$datosFormulario["justicia_j24_1_otrosCua"].'</td>
    </tr>
    <td width="528">'.$datosFormulario["justicia_j24_1_nosesabe"] .'</td>
    </tr>
  <tr>
  </table>

  <table>
  <tr>
  <td width="528"><b>
  24.2.- ¿Generalmente con qué frecuencia se realizan las sesiones de las Mesas de Justicia -judicialización- en la entidad?
  </b>
  </td>
    </tr>
    <tr>
    <td width="128">'.$datosFormulario["justicia_j24_2_semanal"] .'</td>
    </tr>
    <tr>
    <td width="128">'.$datosFormulario["justicia_j24_2_quincenal"] .'</td>
    </tr>
    <tr>
    <td width="528">'.$datosFormulario["justicia_j24_2_mensual"] .'</td>
    </tr>
    <tr>
    <td width="528">'.$datosFormulario["justicia_j24_2_bimestral"] .'</td>
    </tr>
    <tr>
    <td width="528">'.$datosFormulario["justicia_j24_2_trimestral"] .'</td>
    </tr>
    <tr>
    <td width="528">'.$datosFormulario["justicia_j24_2_semestral"] .'</td>
    </tr>
    <tr>
    <td width="528">'.$datosFormulario["justicia_j24_2_mensual"] .'</td>
    </tr>
    <tr>
    <td width="528">'.$datosFormulario["justicia_j24_2_anual"] .'</td>
    </tr>
    <tr>
    <td width="528">'.$datosFormulario["justicia_j24_2_nosesabe"] .'</td>
    </tr>
  </table>

  <table>
  <tr>
  <td><p style="font-size: 12px;"><b>
  24.3.- Describir buenas prácticas que considere sean innovadoras para mejorar el Sistema de Justicia y que hayan sido implementadas en la entidad derivadas de las Mesas de Justicia - judicialización-.
  </b></p>
  </td>
    </tr>
  </table>
  <table  cellpadding="1" cellspacing="1">
   <tr>
    <td width="528"  align="center" >'.$datosFormulario["justicia_j24_3_buepra"] .'</td>
   </tr>
  </table>

  <br><br><br>
  <table>
     <tr>
       <td style="width: 100%; text-align: center; font-size: 14px; background-color:#1c584b; padding: 4px 4px 4px; font-weight:bold;  color:white;">
       25. IMPACTO COVID-19
       </td>
  </tr>
    </table>

    <table>
    <tr>
    <td><b>25.- ¿La institución incorporó medidas preventivas durante COVID-19 que considere sean innovadoras para proteger la salud del personal que labora?</b>
    </td>
      </tr>
      <tr>

      <td width="128">'.$datosFormulario["impacto_j25_medidasPrev"] .'</td>
      </tr>
    </table>

    <table>
    <tr>
    <td><p style="font-size: 12px;"><b>
    25.1.- Describir las medidas señaladas en la pregunta anterior.
    </b></p>
    </td>
      </tr>
    </table>
    <table  cellpadding="1" cellspacing="1">
     <tr>
      <td width="528"  align="center" >'.$datosFormulario["impacto_j25_1_desc"] .'</td>
     </tr>
    </table>

    <table>
    <tr>
    <td><b>25.2.-¿La institución incorporó medidas preventivas durante COVID-19 que considere sean innovadoras para proteger la salud de las personas usuarias/ciudadanía?
</b>
    </td>
      </tr>
      <tr>

      <td width="128">'.$datosFormulario["impacto_j25__2_medidasInn"] .'</td>
      </tr>
    </table>

    <table>
    <tr>
    <td><p style="font-size: 12px;"><b>
    25.3.- Describir las medidas/buenas prácticas señaladas en la pregunta anterior.
    </b></p>
    </td>
      </tr>
    </table>
    <table  cellpadding="1" cellspacing="1">
     <tr>
      <td width="528"  align="center" >'.$datosFormulario["impacto_j25_3_desc"] .'</td>
     </tr>
    </table>

    <br><br><br>
    <table>
       <tr>
         <td style="width: 100%; text-align: center; font-size: 14px; background-color:#1c584b; padding: 4px 4px 4px; font-weight:bold;  color:white;">
         26. JUSTICIA TERAPÉUTICA
         </td>
    </tr>
      </table>

      <table>
      <tr>
      <td><b>26.-¿La institución cuenta/participa en un programa de Justicia Terapéutica para la atención y/o tratamiento específico del consumo problemático de sustancias psicoactivas de personas imputadas?
</b>
      </td>
        </tr>
        <tr>
        <td width="128">'.$datosFormulario["terapeutica_j26_justTer"] .'</td>
        </tr>
        <tr>
        <td width="128">'.$datosFormulario["terapeutica_j26_justTer_nosesabe"] .'</td>
        </tr>
      </table>

      <table>
      <tr>
      <td><p style="font-size: 12px;"><b>
      26.1.- Total de personas imputadas a las cuales se les derivó a una institución de salud para recibir tratamiento por el consumo de sustancias psicoactivas. Desglosar por sexo.
      </b></p>
      </td>
        </tr>
      </table>
      <table  cellpadding="1" cellspacing="1">
      <thead>
      <tr style="background-color:#2d8673;color:#FFFFFF; border-color: #FFFFFF;">
        <td width="128" align="center"><b>Mujeres</b></td>
        <td width="128" align="center"><b>Hombres</b></td>
        <td width="128" align="center"><b>TOTAL</b></td>
       </tr>
      </thead>
       <tr>
          <td width="128" align="center">'.$datosFormulario["terapeutica_j26_1_psicoa_M"] .'</td>
          <td width="128" align="center">'.$datosFormulario["terapeutica_j26_1_psicoa_H"] .'</td>
          <td width="128" align="center">'.$datosFormulario["terapeutica_j26_1_psicoa_T"] .'</td>
         </tr>
         <tr>
         <td width="528">'.$datosFormulario["terapeutica_j26_1_psicoa_noaplica"] .'</td>
         </tr>
      </table>

      <table>
      <tr>
      <td><p style="font-size: 12px;"><b>
      26.2.- Total de personas imputadas que ingresaron en el programa de Justicia Terapéutica para la atención y/o tratamiento específico del consumo problemático de sustancias psicoactivas. Desglosar por sexo.
      </b></p>
      </td>
        </tr>
      </table>
      <table  cellpadding="1" cellspacing="1">
      <thead>
      <tr style="background-color:#2d8673;color:#FFFFFF; border-color: #FFFFFF;">
        <td width="128" align="center"><b>Mujeres</b></td>
        <td width="128" align="center"><b>Hombres</b></td>
        <td width="128" align="center"><b>TOTAL</b></td>
       </tr>
      </thead>
       <tr>
          <td width="128" align="center">'.$datosFormulario["terapeutica_j26_2_proJustTer_M"] .'</td>
          <td width="128" align="center">'.$datosFormulario["terapeutica_j26_2_proJustTer_H"] .'</td>
          <td width="128" align="center">'.$datosFormulario["terapeutica_j26_2_proJustTer_T"] .'</td>
         </tr>
         <tr>
         <td width="528">'.$datosFormulario["terapeutica_j26_2_proJustTer_noaplica"] .'</td>
         </tr>
      </table>

      <table>
      <tr>
      <td><p style="font-size: 12px;"><b>
      26.3.- Total de personas imputadas que egresaron de forma satisfactoria del programa de Justicia Terapéutica para la atención y/o tratamiento específico del consumo problemático de sustancias psicoactivas. Desglosar por sexo.
      </b></p>
      </td>
        </tr>
      </table>
      <table  cellpadding="1" cellspacing="1">
      <thead>
      <tr style="background-color:#2d8673;color:#FFFFFF; border-color: #FFFFFF;">
        <td width="128" align="center"><b>Mujeres</b></td>
        <td width="128" align="center"><b>Hombres</b></td>
        <td width="128" align="center"><b>TOTAL</b></td>
       </tr>
      </thead>
       <tr>
          <td width="128" align="center">'.$datosFormulario["terapeutica_j26_3_egresoJustTer_M"] .'</td>
          <td width="128" align="center">'.$datosFormulario["terapeutica_j26_3_egresoJustTer_H"] .'</td>
          <td width="128" align="center">'.$datosFormulario["terapeutica_j26_3_egresoJustTer_T"] .'</td>
         </tr>
         <tr>
         <td width="528">'.$datosFormulario["terapeutica_j26_3_noaplica"] .'</td>
         </tr>
      </table>

      <table>
      <tr>
      <td><b>
      26.4.- Total de personas imputadas que incumplieron el programa de Justicia Terapéutica para la atención y/o tratamiento específico del consumo problemático de sustancias psicoactivas. Desglosar por sexo y tipo de incumplimiento.
      </b>
      </td>
        </tr>
      </table>
      <br><br><br>
      <table  cellpadding="1" cellspacing="1">
      <thead>
      <tr style="background-color:#2d8673;color:#FFFFFF; border-color: #FFFFFF;">
        <td width="40" align="center"><b>#</b></td>
        <td width="128" align="center"><b>Descripción</b></td>
        <td width="128" align="center"><b>MUJER</b></td>
        <td width="128" align="center"> <b>HOMBRE</b></td>
        <td width="128" align="center"><b>TOTAL</b></td>
       </tr>
      </thead>
       <tr>
        <td width="40" align="center"><b>1</b></td>
        <td width="128" >Baja voluntaria	</td>
        <td width="128" align="center">'.$datosFormulario["terapeutica_j26_4_bajaVol_M"] .'</td>
        <td width="128" align="center">'.$datosFormulario["terapeutica_j26_4_bajaVol_H"] .'</td>
        <td width="128" align="center">'.$datosFormulario["terapeutica_j26_4_bajaVol_T"] .'</td>
       </tr>
       <tr>
       <td width="40" align="center"><b>2</b></td>
        <td width="128">Expulsados</td>
        <td width="128" align="center">'.$datosFormulario["terapeutica_j26_4_expul_M"] .'</td>
        <td width="128" align="center">'.$datosFormulario["terapeutica_j26_4_expul_H"] .'</td>
        <td width="128" align="center">'.$datosFormulario["terapeutica_j26_4_expul_T"] .'</td>
       </tr>
       <tr>
        <td width="40" align="center"><b>3</b></td>
        <td width="128">Total</td>
        <td width="128" align="center">'.$datosFormulario["terapeutica_j26_4_total_M"] .'</td>
        <td width="128" align="center">'.$datosFormulario["terapeutica_j26_4_total_H"] .'</td>
        <td width="128" align="center">'.$datosFormulario["terapeutica_j26_4_total_T"] .'</td>
       </tr>
       <tr>
       <td width="528">'.$datosFormulario["terapeutica_j26_4_noaplica"] .'</td>
       </tr>
      </table>

      <table>
      <tr>
      <td><b>
      26.5.- Total de personas imputadas que fueron remitidas a algún programa de atención y/o tratamiento específico para atender el consumo problemático de sustancias psicoactivas. Desglosar por sexo y etapa del programa en el que se encontraban.
      </b>
      </td>
        </tr>
      </table>
      <br><br><br>
      <table  cellpadding="1" cellspacing="1">
      <thead>
      <tr style="background-color:#2d8673;color:#FFFFFF; border-color: #FFFFFF;">
        <td width="40" align="center"><b>#</b></td>
        <td width="128" align="center"><b>Descripción</b></td>
        <td width="128" align="center"><b>MUJER</b></td>
        <td width="128" align="center"> <b>HOMBRE</b></td>
        <td width="128" align="center"><b>TOTAL</b></td>
       </tr>
      </thead>
       <tr>
        <td width="40" align="center"><b>1</b></td>
        <td width="128" >Ejecución de sentencia</td>
        <td width="128" align="center">'.$datosFormulario["terapeutica_j26_5_ejeSen_M"] .'</td>
        <td width="128" align="center">'.$datosFormulario["terapeutica_j26_5_ejeSen_H"] .'</td>
        <td width="128" align="center">'.$datosFormulario["terapeutica_j26_5_ejeSen_T"] .'</td>
       </tr>
       <tr>
       <td width="40" align="center"><b>2</b></td>
        <td width="128">Procedimiento abreviado</td>
        <td width="128" align="center">'.$datosFormulario["terapeutica_j26_5_procAbr_M"] .'</td>
        <td width="128" align="center">'.$datosFormulario["terapeutica_j26_5_procAbr_H"] .'</td>
        <td width="128" align="center">'.$datosFormulario["terapeutica_j26_5_procAbr_T"] .'</td>
       </tr>
       <tr>
        <td width="40" align="center"><b>3</b></td>
        <td width="128">Soluciones alternas</td>
        <td width="128" align="center">'.$datosFormulario["terapeutica_j26_5_solAlt_M"] .'</td>
        <td width="128" align="center">'.$datosFormulario["terapeutica_j26_5_solAlt_H"] .'</td>
        <td width="128" align="center">'.$datosFormulario["terapeutica_j26_5_solAlt_T"] .'</td>
       </tr>
       <tr>
       <td width="528">'.$datosFormulario["terapeutica_j26_6_noaplica"] .'</td>
       </tr>
      </table>

      <table>
      <tr>
      <td><b>
      26.6.- Total de personas imputadas que fueron remitidos a algún programa de atención y/o tratamiento específico para atender el consumo problemático de sustancias psicoactivas. Desglosar por sexo y soluciones alternas.
      </b>
      </td>
        </tr>
      </table>
      <br><br><br>
      <table  cellpadding="1" cellspacing="1">
      <thead>
      <tr style="background-color:#2d8673;color:#FFFFFF; border-color: #FFFFFF;">
        <td width="40" align="center"><b>#</b></td>
        <td width="128" align="center"><b>Descripción</b></td>
        <td width="128" align="center"><b>MUJER</b></td>
        <td width="128" align="center"> <b>HOMBRE</b></td>
        <td width="128" align="center"><b>TOTAL</b></td>
       </tr>
      </thead>
       <tr>
        <td width="40" align="center"><b>1</b></td>
        <td width="128" >Acuerdo reparatorio</td>
        <td width="128" align="center">'.$datosFormulario["terapeutica_j26_6_acuRep_M"] .'</td>
        <td width="128" align="center">'.$datosFormulario["terapeutica_j26_6_acuRep_H"] .'</td>
        <td width="128" align="center">'.$datosFormulario["terapeutica_j26_6_acuRep_T"] .'</td>
       </tr>
       <tr>
       <td width="40" align="center"><b>2</b></td>
        <td width="128">Suspensión condicional</td>
        <td width="128" align="center">'.$datosFormulario["terapeutica_j26_6_suspCon_M"] .'</td>
        <td width="128" align="center">'.$datosFormulario["terapeutica_j26_6_suspCon_H"] .'</td>
        <td width="128" align="center">'.$datosFormulario["terapeutica_j26_6_suspCon_T"] .'</td>
       </tr>
       <tr>
       <td width="528">'.$datosFormulario["terapeutica_j26_6_noaplica"] .'</td>
       </tr>
      </table>

      <table>
      <tr>
      <td><b>
      26.7.- Total de personas imputadas que se encuentran en un programa de Justicia Terapéutica cuyos casos fueron resueltos por acuerdo reparatorio. Desglosar por sexo y estatus del acuerdo.
      </b>
      </td>
        </tr>
      </table>
      <br><br><br>
      <table  cellpadding="1" cellspacing="1">
      <thead>
      <tr style="background-color:#2d8673;color:#FFFFFF; border-color: #FFFFFF;">
        <td width="40" align="center"><b>#</b></td>
        <td width="128" align="center"><b>Descripción</b></td>
        <td width="128" align="center"><b>MUJER</b></td>
        <td width="128" align="center"> <b>HOMBRE</b></td>
        <td width="128" align="center"><b>TOTAL</b></td>
       </tr>
      </thead>
       <tr>
        <td width="40" align="center"><b>1</b></td>
        <td width="128" >Con acuerdo reparatorio firmado</td>
        <td width="128" align="center">'.$datosFormulario["terapeutica_j26_7_firmado_M"] .'</td>
        <td width="128" align="center">'.$datosFormulario["terapeutica_j26_7_firmado_H"] .'</td>
        <td width="128" align="center">'.$datosFormulario["terapeutica_j26_7_firmado_T"] .'</td>
       </tr>
       <tr>
       <td width="40" align="center"><b>2</b></td>
        <td width="128">En trámite</td>
        <td width="128" align="center">'.$datosFormulario["terapeutica_j26_7_tramite_M"] .'</td>
        <td width="128" align="center">'.$datosFormulario["terapeutica_j26_7_tramite_H"] .'</td>
        <td width="128" align="center">'.$datosFormulario["terapeutica_j26_7_tramite_T"] .'</td>
       </tr>
       <tr>
       <td width="528">'.$datosFormulario["terapeutica_j26_7_noaplica"] .'</td>
       </tr>
      </table>

      <table>
      <tr>
      <td><b>26.8.- Total de personas imputadas que se encuentran en un programa de Justicia Terapéutica cuyos casos fueron resueltos por suspensión condicional. Desglosar por sexo y estatus.

      </b>
      </td>
        </tr>
      </table>
      <table  cellpadding="1" cellspacing="1">
      <thead>
      <tr style="background-color:#2d8673;color:#FFFFFF; border-color: #FFFFFF;">
        <td width="40" align="center"><b>#</b></td>
        <td width="128" align="center"><b>Descripción</b></td>
        <td width="128" align="center"><b>MUJER</b></td>
        <td width="128" align="center"> <b>HOMBRE</b></td>
        <td width="128" align="center"><b>TOTAL</b></td>
       </tr>
      </thead>
       <tr>
        <td width="40" align="center"><b>1</b></td>
        <td width="128" >Suspensiones condicionales en proceso de su cumplimiento/td>
        <td width="128" align="center">'.$datosFormulario["terapeutica_j26_8_susp_M"] .'</td>
        <td width="128" align="center">'.$datosFormulario["terapeutica_j26_8_susp_H"] .'</td>
        <td width="128" align="center">'.$datosFormulario["terapeutica_j26_8_susp_T"] .'</td>
       </tr>
       <tr>
       <td width="40" align="center"><b>2</b></td>
        <td width="128">Prórrogas suspensión condicional del proceso</td>
        <td width="128" align="center">'.$datosFormulario["terapeutica_j26_8_prorro_M"] .'</td>
        <td width="128" align="center">'.$datosFormulario["terapeutica_j26_8_prorro_H"] .'</td>
        <td width="128" align="center">'.$datosFormulario["terapeutica_j26_8_prorro_T"] .'</td>
       </tr>
       <tr>
        <td width="40" align="center"><b>3</b></td>
        <td width="128">Suspensiones condicionales del proceso cumplidas</td>
        <td width="128" align="center">'.$datosFormulario["terapeutica_j26_8_cond_M"] .'</td>
        <td width="128" align="center">'.$datosFormulario["terapeutica_j26_8_cond_H"] .'</td>
        <td width="128" align="center">'.$datosFormulario["terapeutica_j26_8_cond_T"] .'</td>
       </tr>
       <tr>
       <td width="40" align="center"><b>4</b></td>
       <td width="128">Suspensiones condicionales del proceso incumplidas	</td>
       <td width="128" align="center">'.$datosFormulario["terapeutica_j26_8_incum_M"] .'</td>
       <td width="128" align="center">'.$datosFormulario["terapeutica_j26_8_incum_H"] .'</td>
       <td width="128" align="center">'.$datosFormulario["terapeutica_j26_8_incum_T"] .'</td>
       </tr>
       <tr>
       <td width="40" align="center"><b>14</b></td>
       <td width="128"  >Otras(¿Cuáles?)      <br>'.$datosFormulario["autovinculacion_j16_2_otros"] .'</td>
       <td width="128"  align="center">'.$datosFormulario["terapeutica_j26_8_otras_M"] .'</td>
       <td width="128"  align="center">'.$datosFormulario["terapeutica_j26_8_otras_H"] .'</td>
       <td width="128" align="center">'.$datosFormulario["terapeutica_j26_8_otras_T"] .'</td>
       </tr>
       <tr>
       <td width="528">'.$datosFormulario["terapeutica_j26_8_noaplica"] .'</td>
       </tr>
      </table>

      <table>
      <tr>
      <td><p style="font-size: 12px;"><b>
      26.9.- Total de personas imputadas a las que se les supervisan medidas cautelares y fueron remitidas a algún programa de atención y/o tratamiento específico para atender el consumo problemático de sustancias psicoactivas. Desglosar por sexo.
      </b></p>
      </td>
        </tr>
      </table>
      <table  cellpadding="1" cellspacing="1">
      <thead>
      <tr style="background-color:#2d8673;color:#FFFFFF; border-color: #FFFFFF;">
        <td width="128" align="center"><b>Mujeres</b></td>
        <td width="128" align="center"><b>Hombres</b></td>
        <td width="128" align="center"><b>TOTAL</b></td>
       </tr>
      </thead>
       <tr>
          <td width="128" align="center">'.$datosFormulario["terapeutica_j26_9_imputadas_M"] .'</td>
          <td width="128" align="center">'.$datosFormulario["terapeutica_j26_9_imputadas_H"] .'</td>
          <td width="128" align="center">'.$datosFormulario["terapeutica_j26_9_imputadas_T"] .'</td>
         </tr>
         <tr>
         <td width="528">'.$datosFormulario["terapeutica_j26_9_imputadas_noapli"] .'</td>
         </tr>
      </table>

<!-- Fin Tab 8-->




';




$html3 = '


<tr><td style="width:100%"><img src="images/uasjgrande2.png"></td></tr>
<p style="font-size: 12px;"></p>

<tr>




<table style="width:100%;"  cellpadding="1" cellspacing="1">
<thead>

<tr style="background-color:#2d8673;color:#FFFFFF; border-color: #FFFFFF;">
    <td width="100%" align="center"><b>Elaboró</b></td>
 </tr>

</thead>

<tr>
<td width="100%" style="text-align: center;" ><br><br><br><br>_________________________________________</td>
</tr>
<tr>
 <td width="100%" style="text-align: center;" >Firma</td>

</tr>
<tr>
<td width="25%" style="text-align: l" ></td>
<td width="100%" style="text-align: l" ><br>Nombre:<br>Cargo:<br></td>
</tr>
</table>


<br> <br> <br>

<table style="width:100%;"  cellpadding="1" cellspacing="1">
<thead>

<tr style="background-color:#2d8673;color:#FFFFFF; border-color: #FFFFFF;">
    <td width="100%" align="center"><b>Verificó</b></td>
 </tr>

</thead>

<tr>
<td width="100%" style="text-align: center;" ><br><br><br><br>_________________________________________</td>
</tr>
<tr>
 <td width="100%" style="text-align: center;" >Firma</td>

</tr>
<tr>
<td width="25%" style="text-align: l" ></td>
<td width="100%" style="text-align: l" ><br>Nombre:<br>Cargo:<br></td>
</tr>
</table>












<br> <br> <br>

<table style="width:100%;"  cellpadding="1" cellspacing="1">
<thead>

<tr style="background-color:#2d8673;color:#FFFFFF; border-color: #FFFFFF;">
    <td width="100%" align="center"><b>Validó</b></td>
 </tr>

</thead>

<tr>
<td width="100%" style="text-align: center;" ><br><br><br><br>_________________________________________</td>
</tr>
<tr>
 <td width="100%" style="text-align: center;" >Firma</td>

</tr>
<tr>
<td width="25%" style="text-align: l" ></td>
<td width="100%" style="text-align: l" ><br>Nombre:<br>Cargo:<br></td>
</tr>
</table>









';




//escribe el texto en la hoja
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);


//agregar pag 2
$pdf->AddPage();
//escrite el texto en la hoja
$pdf->writeHTMLCell(0, 0, '', '', $html2, 0, 1, 0, true, '', true);

//agregar pag 2
$pdf->AddPage();
//escrite el texto en la hoja
$pdf->writeHTMLCell(0, 0, '', '', $html3, 0, 1, 0, true, '', true);

//terminar el pdf
$pdf->Output('datos.pdf', 'I');
