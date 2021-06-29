<?php

require_once "../../../modelos/policias1.modelo.php";

$idDato = $_GET["id"];

$datosFormulario = ModeloPolicias::mdlMostrarPoliciasID("uuid",$idDato);

//agregar libreria tcpdf

require_once('tcpdf_include.php');

//clase para crear header y footer personalizado

class mipdf extends TCPDF{

  //Header personalizado

  //public function Header() {
//$datosFormulario = ModeloPolicias::mdlMostrarPoliciasID("uuid",$idDato);
//$estatus = $datosFormulario["estatus"];

  //  if($estatus != 0){

  //  $logo = 'fondovista.png';



    //$logo = 'fondofin.png';

  //  $this->Image($logo, 0, 26, 210, 250, 'PNG', '', '', true, 100, '', false, false, 0, false, false, false);

  //  $this->SetFont('helvetica', 'B', 20);

  //} else  {

  //  $logo2 = 'fondofin.png';

  ////  $this->Image($logo2, 0, 26, 210, 250, 'PNG', '', '', true, 100, '', false, false, 0, false, false, false);

  //////  $this->SetFont('helvetica', 'B', 20);

////////  }

//////////  }


public function Header(){

  require_once "../../../modelos/policias1.modelo.php";

  $idDato = $_GET["id"];

  $datosFormulario = ModeloPolicias::mdlMostrarPoliciasID("uuid",$idDato);
    if($datosFormulario["estatus"] == "0"){
       $html = '<div><img src="fondovista.png" alt=""></div>';
        $this->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);
    }else{
        $html = '<div><img src="fondofin.png" alt=""></div>';
        $this->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);
    }
}


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

<table>



   <tr>
     <td style="width: 100%; text-align: center; font-size: 14px; background-color:#1c584b; padding: 4px 4px 4px; font-weight:bold;  color:white;">
       1. PERSONAL
     </td>
</tr>
<tr>
<td><p style="font-size: 12px;"><b>
1.- ¿Cuántas personas laboran en la institución? Desglosar por sexo.
</b></p>
</td>
  </tr>



</table>



<table  cellpadding="1" cellspacing="1">
<thead>
 <tr style="background-color:#2d8673;color:#FFFFFF; border-color: #FFFFFF;">
  <td width="140" align="center"><b>Descripción</b></td>
  <td width="140" align="center"><b>MUJER</b></td>
  <td width="140" align="center"> <b>HOMBRE</b></td>
  <td width="136" align="center"><b>TOTAL</b></td>
 </tr>
</thead>
 <tr>
  <td width="140"  >Total Personal</td>
  <td width="140"  align="center">'.$datosFormulario["personal_p1_totalp_M"] .'</td>
  <td width="140"  align="center">'.$datosFormulario["personal_p1_totalp_H"] .'</td>
  <td width="136"  align="center" >'.$datosFormulario["personal_p1_totalp_T"] .'</td>
 </tr>
</table>

<table>
<tr>
<td>  <b>
1.1.- ¿Cuántas personas laboran en la institución? Desglosar por función policial y sexo.
</b>
</td>
  </tr>
</table>





<table  cellpadding="1" cellspacing="1">
<thead>

<tr style="background-color:#2d8673;color:#FFFFFF; border-color: #FFFFFF;">
  <td width="40" ><b>#</b></td>
  <td width="128" align="center"><b>Descripción</b></td>
  <td width="128" align="center"><b>MUJER</b></td>
  <td width="128" align="center"> <b>HOMBRE</b></td>
  <td width="128" align="center"><b>TOTAL</b></td>

 </tr>
</thead>
 <tr>
  <td width="40" align="center"><b>1</b></td>
  <td width="128" >Investigación y Análisis</td>
  <td width="128" align="center">'.$datosFormulario["personal_p1_invyanali_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["personal_p1_invyanali_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["personal_p1_invyanali_T"] .'</td>

 </tr>
 <tr>
 <td width="40" align="center"><b>2</b></td>
  <td width="128" >Inteligencia</td>
  <td width="128" align="center">'.$datosFormulario["personal_p1_inte_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["personal_p1_inte_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["personal_p1_inte_T"] .'</td>
 </tr>
 <tr>
  <td width="40" align="center"><b>3</b></td>
  <td width="128" >Reacción</td>
  <td width="128" align="center">'.$datosFormulario["personal_p1_reacc_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["personal_p1_reacc_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["personal_p1_reacc_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>4</b></td>
 <td width="128" >Procesal</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_proce_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_proce_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_proce_T"] .'</td>
 </tr>
 <tr>
<td width="40" align="center"><b>5</b></td>
 <td width="128" >Seguridad y Custodia Penitenciaria</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_segycuspen_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_segycuspen_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_segycuspen_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>6</b></td>
 <td width="128" >Preventivo</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_preven_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_preven_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_preven_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>7</b></td>
 <td width="128" >Primer respondiente</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_prirespon_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_prirespon_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_prirespon_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>8</b></td>
 <td width="128" >Otros <br>Cuáles: '.$datosFormulario["personal_p1_otros"] .'</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_otros_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_otros_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_otros_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>9</b></td>
 <td width="128" >Total</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_total_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_total_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_total_T"] .'</td>
 </tr>
</table>



<table>
<tr>
<td><b>1.2.- Del personal reportado en las categorías 1 a 7 de la pregunta anterior, ¿Cuántas personas laboran en la institución? Desglosar por rango de ingreso bruto mensual y por sexo.
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
  <td width="128" align="center">'.$datosFormulario["personal_p1_siningre_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["personal_p1_siningre_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["personal_p1_siningre_T"] .'</td>
 </tr>

 <tr>
 <td width="40" align="center"><b>2</b></td>
  <td width="128">De 1 a 5,000 pesos</td>
  <td width="128" align="center">'.$datosFormulario["personal_p1_de1a5000_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["personal_p1_de1a5000_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["personal_p1_de1a5000_T"] .'</td>
 </tr>

 <tr>
  <td width="40" align="center"><b>3</b></td>
  <td width="128">De 5,001 a 10,000 pesos</td>
  <td width="128" align="center">'.$datosFormulario["personal_p1_de5001a10000_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["personal_p1_de5001a10000_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["personal_p1_de5001a10000_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>4</b></td>
 <td width="128">De 10,001 a 15,000 pesos</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_de10001a15000_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_de10001a15000_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_de10001a15000_T"] .'</td>
 </tr>
 <tr>
<td width="40" align="center"><b>5</b></td>
 <td width="128">De 15,001 a 20,000 pesos</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_de15001a20000_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_de15001a20000_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_de15001a20000_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>6</b></td>
 <td width="128">De 20,001 a 25,000 pesos</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_de20001a25000_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_de20001a25000_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_de20001a25000_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>7</b></td>
 <td width="128">De 25,001 a 30,000 pesos</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_de25001a30000_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_de25001a30000_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_de25001a30000_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>8</b></td>
 <td width="128">De 30,001 a 35,000 pesos</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_de30001a35000_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_de30001a35000_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_de30001a35000_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>9</b></td>
 <td width="128">De 35,001 a 40,000 pesos</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_de35001a40000_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_de35001a40000_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_de35001a40000_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>10</b></td>
 <td width="128">De 40,001 a 45,000 pesos</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_de40001a45000_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_de40001a45000_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_de40001a45000_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>11</b></td>
 <td width="128">De 45,001 a 50,000 pesos</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_de45001a50000_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_de45001a50000_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_de45001a50000_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>12</b></td>
 <td width="128">Más de 50,000 pesos</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_masde50000_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_masde50000_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_masde50000_T"] .'</td>
 </tr>
</table>

<br><br><br><br><br><br>

<table>
<tr>
<td><b>1.3.- Del personal reportado en las categorías 1 a 7 de la pregunta 1.1, ¿cuántas personas laboran en la institución? Desglosar por grado de escolaridad y por sexo.
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
  <td width="128" >Ninguno</td>
  <td width="128" align="center">'.$datosFormulario["personal_p1_2_ning_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["personal_p1_2_ning_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["personal_p1_2_ning_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>2</b></td>
  <td width="128">Preescolar</td>
  <td width="128" align="center">'.$datosFormulario["personal_p1_2_prees_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["personal_p1_2_prees_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["personal_p1_2_prees_T"] .'</td>
 </tr>
 <tr>
  <td width="40" align="center"><b>3</b></td>
  <td width="128">Primaria</td>
  <td width="128" align="center">'.$datosFormulario["personal_p1_2_prim_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["personal_p1_2_prim_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["personal_p1_2_prim_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>4</b></td>
 <td width="128">Secundaria</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_2_secu_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_2_secu_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_2_secu_T"] .'</td>
 </tr>
 <tr>
<td width="40" align="center"><b>5</b></td>
 <td width="128">Carrera técnica con secundaria terminada</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_2_ctsect_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_2_ctsect_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_2_ctsect_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>6</b></td>
 <td width="128">Normal básica</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_2_nbasica_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_2_nbasica_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_2_nbasica_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>7</b></td>
 <td width="128">Preparatoria o bachillerato</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_2_preobach_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_2_preobach_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_2_preobach_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>8</b></td>
 <td width="128">	Carrera técnica con preparatoria terminada</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_2_ctcpret_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_2_ctcpret_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_2_ctcpret_T"] .'</td>
 </tr>

 <tr>
 <td width="40" align="center"><b>9</b></td>
 <td width="128">Licenciatura o profesional</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_2_licoprof_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_2_licoprof_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_2_licoprof_T"] .'</td>
 </tr>

 <tr>
 <td width="40" align="center"><b>10</b></td>
 <td width="128">Maestría o doctorado</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_2_maesdoc_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_2_maesdoc_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_2_maesdoc_T"] .'</td>
 </tr>

 <tr>
 <td width="40" align="center"><b>11</b></td>
 <td width="128">	Total</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_2_total_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_2_total_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["personal_p1_2_total_T"] .'</td>
 </tr>

</table>

<table>



   <tr>
     <td style="width: 100%; text-align: center; font-size: 14px; background-color:#1c584b; padding: 4px 4px 4px; font-weight:bold;  color:white;">
     2. CAPACITACIÓN Y EVALUACIÓN DE PERSONAL
<p style="font-size: 8px;">LA INFORMACIÓN PROPORCIONADA EN ESTA SECCIÓN NOS PERMITIRÁ CONOCER LAS CAPACITACIONES CON LAS QUE SE PODRÍA COADYUVAR A LA INSTITUCIÓN.</p>
     </td>
</tr>
</table>
<table>
<tr>
<td><b>2.- ¿La institución cuenta con una Universidad/Academia Policial en la entidad?.</b>
</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["capacitacion_p2"] .'</td>
  </tr>
</table>
<table>
<tr>
<td><b>2.1.- Indique el nombre o nombres de dichas instituciones</b>
</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["capacitacion_p2_1_nom"] .'</td>
  </tr>
</table>
<table>
<tr>
<td><b>2.2.- La Universidad/Academia de la entidad cuenta con las siguientes facilidades:</b>
</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["capacitacion_p2_2_aul"] .'</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["capacitacion_p2_2_comp"] .'</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["capacitacion_p2_2_juor"] .'</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["capacitacion_p2_2_come"] .'</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["capacitacion_p2_2_coci"] .'</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["capacitacion_p2_2_dorm"] .'</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["capacitacion_p2_2_pruf"] .'</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["capacitacion_p2_2_auvis"] .'</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["capacitacion_p2_2_medi"] .'</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["capacitacion_p2_2_tirof"] .'</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["capacitacion_p2_2_tirov"] .'</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["capacitacion_p2_2_entre"] .'</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["capacitacion_p2_2_vehi"] .'</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["capacitacion_p2_2_unif"] .'</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["capacitacion_p2_2_otro"] .' </td>
  <td width="528">Cuáles:'.$datosFormulario["capacitacion_p2_2_otro_cual"] .' </td>
  </tr>

</table>
<table>
<tr>
<td><b>
2.3.- ¿Cuántas personas laborando recibieron al menos una capacitación durante el año 2020? Desglosar por función policial y sexo.</b>
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
  <td width="128" align="center">Investigación y Análisis</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_p2_3_invyanali_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_p2_3_invyanali_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_p2_3_invyanali_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>2</b></td>
  <td width="128">Inteligencia</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_p2_3_inte_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_p2_3_inte_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_p2_3_inte_T"] .'</td>
 </tr>
 <tr>
  <td width="40" align="center"><b>3</b></td>
  <td width="128">Reacción</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_p2_3_reacc_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_p2_3_reacc_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_p2_3_reacc_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>4</b></td>
 <td width="128">Procesal</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_3_proce_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_3_proce_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_3_proce_T"] .'</td>
 </tr>
 <tr>
<td width="40" align="center"><b>5</b></td>
 <td width="128">Seguridad y Custodia Penitenciaria</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_3_segycuspen_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_3_segycuspen_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_3_segycuspen_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>6</b></td>
 <td width="128">Preventivo</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_3_preven_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_3_preven_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_3_preven_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>7</b></td>
 <td width="128">Primer respondiente</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_3_prirespon_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_3_prirespon_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_3_prirespon_T"] .'</td>
 </tr>


</table>




<table>
<tr>
<td><b>2.4.- ¿Cuántas personas laborando tomaron al menos una capacitación en las siguientes materias durante el año 2020? Desglosar por sexo.</b>
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
  <td width="128" >Marco jurídico de la Actuación Policial</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_majudlacpo_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_majudlacpo_H"] .'</td>
  <td width="128" align="center"0>'.$datosFormulario["capacitacion_p2_4_majudlacpo_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>2</b></td>
  <td width="128">Prevención del delito y participación ciudadana</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_prdedeypaci_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_prdedeypaci_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_prdedeypaci_T"] .'</td>
 </tr>
 <tr>
  <td width="40" align="center"><b>3</b></td>
  <td width="128">Derechos humanos y garantías individuales</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_dehuygain_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_dehuygain_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_dehuygain_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>4</b></td>
 <td width="128">	Reforma al Sistema Penal - Juicio Penal Acusatorio</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_realsipejupeac_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_realsipejupeac_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_realsipejupeac_T"] .'</td>
 </tr>
 <tr>
<td width="40" align="center"><b>5</b></td>
 <td width="128">Preservación del lugar de los hechos o del hallazgo</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_prdeludeloheodeha_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_prdeludeloheodeha_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_prdeludeloheodeha_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>6</b></td>
 <td width="128">Intervención del lugar de los hechos o del hallazgo
y manejo de evidencias, elementos o datos de prueba</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_idldlhodhymdeeoddp_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_idldlhodhymdeeoddp_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_idldlhodhymdeeoddp_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>7</b></td>
 <td width="128">Cadena de custodia</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_cadecu_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_cadecu_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_cadecu_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>8</b></td>
 <td width="128">Entrevistas a testigos</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_enates_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_enates_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_enates_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>9</b></td>
 <td width="128">Uso legítimo de la fuerza</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_usledelafu_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_usledelafu_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_usledelafu_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>10</b></td>
 <td width="128">Investigación</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_inves_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_inves_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_inves_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>11</b></td>
 <td width="128">Primer respondiente</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_prres_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_prres_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_prres_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>12</b></td>
 <td width="128">Informe Policial Homologado</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_inpoho_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_inpoho_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_inpoho_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>13</b></td>
 <td width="128">Especialización</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_especia_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_especia_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_especia_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>14</b></td>
 <td width="128">Actualización</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_actualiza_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_actualiza_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_actualiza_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>15</b></td>
 <td width="128">	Sistema de Justicia Penal Acusatorio</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_sidejupeacu_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_sidejupeacu_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_sidejupeacu_M"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>16</b></td>
 <td width="128">	Debido proceso</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_depro_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_depro_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_depro_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>17</b></td>
 <td width="128" >	Feminicidio</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_femeni_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_femeni_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_femeni_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>18</b></td>
 <td width="128">	Anti trata de personas</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_antrdepe_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_antrdepe_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_antrdepe_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>19</b></td>
 <td width="128" >	Violencia contra las mujeres</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_vicolamu_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_vicolamu_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_vicolamu_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>20</b></td>
 <td width="128" >	Perspectiva de género</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_predege_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_predege_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_predege_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>21</b></td>
 <td width="128" >	Asistencia consular y derechos de extranjeros</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_ascoydedeex_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_ascoydedeex_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_ascoydedeex_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>22</b></td>
 <td width="128">Sistema Integral de Justicia Penal para Adolescentes</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_siindejupepaad_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_siindejupepaad_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_siindejupepaad_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>23</b></td>
 <td width="128">Atención a personas indígenas</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_ataperin_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_ataperin_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_ataperin_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>24</b></td>
 <td width="128">Atención a personas con discapacidad</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_atapercondis_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_atapercondis_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_atapercondis_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>25</b></td>
 <td width="128">Justicia Alternativa</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_jusalt_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_jusalt_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_jusalt_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>26</b></td>
 <td width="128">Justicia Terapéutica</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_justera_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_justera_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_justera_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>27</b></td>
 <td width="128">Justicia Transicional</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_justransi_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_justransi_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_justransi_T"] .'</td>
 </tr>


 <tr>
 <td width="40" align="center"><b>28</b></td>
 <td width="128">Atención de casos de mujeres desaparecidas</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_atemuj_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_atemuj_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_atemuj_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>29</b></td>
 <td width="128">Otras (¿cuáles?)</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_otros_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_otros_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["capacitacion_p2_4_otros_T"] .'</td>
 </tr>



</table>








<table>
<tr>
<td><b>2.5.- ¿Qué instituciones u organismos nacionales o extranjeros impartieron las capacitaciones previamente mencionadas?</b>
</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["capacitacion_p2_5_instuprga"] .'</td>
  </tr>
</table>
<table>
<tr>
<td><b>
2.6.- ¿Cuántas evaluaciones de Control de Confianza se llevaron a cabo en el año 2020?
Desglosar por sexo.
</b>
</td>
  </tr>
</table>
<table  cellpadding="1" cellspacing="1">
<thead>
<tr style="background-color:#2d8673;color:#FFFFFF; border-color: #FFFFFF;">
  <td width="192" align="center"><b>MUJER</b></td>
<td width="192" align="center"> <b>HOMBRE</b></td>
  <td width="192" align="center"><b>TOTAL</b></td>
 </tr>
</thead>
<tr>
 <td width="192"  align="center">'.$datosFormulario["capacitacion_p2_6_evconconf_M"] .'</td>
 <td width="192"  align="center">'.$datosFormulario["capacitacion_p2_6_evconconf_H"] .'</td>
 <td width="192"  align="center" >'.$datosFormulario["capacitacion_p2_6_evconconf_T"] .'</td>
</tr>
</table>
<table>

   <tr>
     <td style="width: 100%; text-align: center; font-size: 14px; background-color:#1c584b; padding: 4px 4px 4px; font-weight:bold;  color:white;">
     3. PRESUPUESTO
     </td>

</tr>
</table>
<table>
<tr>
<td><b>3.- ¿La institución cuenta con autonomía presupuestal?
</b>
</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["presupuesto_p3"] .'</td>
  </tr>
</table>

<table>
<tr>
<td><b>
3.1.- ¿Cuál fue el presupuesto anual ejercido durante el año 2020?
</b>
</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["presupuestop3_1_anuaeje20"] .'</td>
  </tr>
</table>

<table>
<tr>
<td><b>
3.2.- Presupuesto anual ejercido 2020, por capítulo 1000 – Servicios Personales
</b>
</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["presupuestop3_2_anuaeje20"] .'</td>
  </tr>
</table>
<table>
   <tr>
     <td style="width: 100%; text-align: center; font-size: 14px; background-color:#1c584b; padding: 4px 4px 4px; font-weight:bold;  color:white;">
     4. JUSTICIA PARA MUJERES
     </td>
</tr>
</table>

<table>
<tr>
<td width="528"><b>
4.- ¿Con qué protocolos cuenta la institución para garantizar los derechos de las mujeres?
</b>
</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["mujeres_p4_protoInterna"] .'</td>
  <td width="528">Cuáles: '.$datosFormulario["mujeres_p4_protoInterna_cual"] .'</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["mujeres_p4_interno"] .'</td>
  <td width="528">Cuáles: '.$datosFormulario["mujeres_p4_interno_cua"] .'</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["mujeres_p4_protoInvmipp"] .'</td>
  </tr>
  <td width="528">'.$datosFormulario["mujeres_p4_protoScjn"] .'</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["mujeres_p4_ninguno"] .'</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["mujeres_p4_otroProtocolo"].'</td>
  <td width="528">Cuáles: '.$datosFormulario["mujeres_p4_otroProtocolo_cual"].'</td>
  </tr>
</table>


<table>
<tr>
<td><b>4.1.- ¿La institución cuenta con buenas prácticas que considere sean innovadoras para mejorar el acceso a la justicia para las mujeres?
</b>
</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["mujeres_p4_1_buenprac"] .'</td>
  </tr>
</table>
<table>
<tr>
<td><b>4.2.- ¿Cuáles son esas buenas prácticas?
</b>
</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["mujeres_p4_2_cualBuenprac"] .'</td>
  </tr>
</table>

<BR><BR><BR><BR>
<table>
<tr>
<td><b>4.3.- Total de personal especializado en justicia para mujeres. Desglosar por sexo.
</b>
</td>
  </tr>
</table>
<table  cellpadding="1" cellspacing="1">
<thead>
<tr style="background-color:#2d8673;color:#FFFFFF; border-color: #FFFFFF;">
  <td width="128" align="center"><b>MUJER</b></td>
<td width="128" align="center"> <b>HOMBRE</b></td>
  <td width="128" align="center"><b>TOTAL</b></td>
 </tr>
</thead>
<tr>
 <td width="140"  align="center">'.$datosFormulario["mujeres_p4_3_justmuj_M"] .'</td>
 <td width="140"  align="center">'.$datosFormulario["mujeres_p4_3_justmuj_H"] .'</td>
 <td width="136"  align="center" >'.$datosFormulario["mujeres_p4_3_justmuj_T"] .'</td>
</tr>
</table>

<table>

   <tr>
     <td style="width: 100%; text-align: center; font-size: 14px; background-color:#1c584b; padding: 4px 4px 4px; font-weight:bold;  color:white;">
     5. JUSTICIA PARA ADOLESCENTES
     </td>

</tr>
</table>

<table>
<tr>
<td><b>5.- ¿Con qué protocolos cuenta la institución para garantizar los derechos de niñas, niños y adolescentes?
</b>
</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["nna_p5_protoInterna"] .'</td>
  <td width="128">Cuáles: '.$datosFormulario["nna_p5_protoInterna_cual"] .'</td>

  </tr>
  <tr>
  <td width="128">'.$datosFormulario["nna_p5_interno"] .'</td>
  <td width="128">Cuáles: '.$datosFormulario["nna_p5_interno_cua"] .'</td>

  </tr>
  <tr>
  <td width="570">'.$datosFormulario["nna_p5_protoAteninte"] .'</td>
  </tr>
  <tr>
  <td width="570">'.$datosFormulario["nna_p5_protoActjust"] .'</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["nna_p5_ninguno"] .'</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["nna_p5_otroProtocolo"] .'  </td>
  <td width="128">Cuáles: '.$datosFormulario["nna_p5_otroProtocolo_cual"] .'</td>
  </tr>
</table>

<table>
<tr>
<td><b>5.1.- ¿La institución cuenta con buenas prácticas que considere sean innovadoras para mejorar el acceso a la justicia a niñas, niños y adolescentes?
</b>
</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["nna_p5_1_buenpracs"] .'</td>
  </tr>
</table>

<table>
<tr>
<td><b>5.2.- ¿Cuáles son esas buenas prácticas?
</b>
</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["nna_p5_2_cualBuenpract"] .'</td>
  </tr>
</table>

<table>
<tr>
<td><b>
5.3.-Total de personal especializado en justicia para adolescentes. Desglosar por sexo.
</b>
</td>
  </tr>
</table>
<table  cellpadding="1" cellspacing="1">
<thead>
<tr style="background-color:#2d8673;color:#FFFFFF; border-color: #FFFFFF;">
  <td width="128" align="center"><b>MUJER</b></td>
<td width="128" align="center"> <b>HOMBRE</b></td>
  <td width="128" align="center"><b>TOTAL</b></td>
 </tr>
</thead>
<tr>
 <td width="140"  align="center">'.$datosFormulario["ja_p5_3_espejust_M"] .'</td>
 <td width="140"  align="center">'.$datosFormulario["ja_p5_3_espejust_H"] .'</td>
 <td width="136"  align="center" >'.$datosFormulario["ja_p5_3_espejust_T"] .'</td>
</tr>
</table>
<table>
   <tr>
     <td style="width: 100%; text-align: center; font-size: 14px; background-color:#1c584b; padding: 4px 4px 4px; font-weight:bold;  color:white;">
     6. JUSTICIA PARA PERSONAS INDÍGENAS
     </td>
</tr>
</table>
<table>
<tr>
<td><b>
6.- ¿Cuentan con intérpretes/traductores de lenguas indígenas?
</b>
</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["indigenas_p6_tradulenind"] .'</td>
  </tr>
</table>
<table>
<tr>
<td><b>
6.1.- ¿Con cuántos intérpretes/traductores cuenta la institución? Desglosar por lengua indígena y por sexo.
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
  <td width="128" align="center">'.$datosFormulario["indigenas_p6_1_nahuatl_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["indigenas_p6_1_nahuatl_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["indigenas_p6_1_nahuatl_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>2</b></td>
  <td width="128">Maya</td>
  <td width="128" align="center">'.$datosFormulario["indigenas_p6_1_maya_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["indigenas_p6_1_maya_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["indigenas_p6_1_maya_T"] .'</td>
 </tr>
 <tr>
  <td width="40" align="center"><b>3</b></td>
  <td width="128">Tseltal</td>
  <td width="128" align="center">'.$datosFormulario["indigenas_p6_1_tseltal_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["indigenas_p6_1_tseltal_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["indigenas_p6_1_tseltal_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>4</b></td>
 <td width="128">	Mixteco</td>
 <td width="128" align="center">'.$datosFormulario["indigenas_p6_1_mixteco_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["indigenas_p6_1_mixteco_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["indigenas_p6_1_mixteco_T"] .'</td>
 </tr>
 <tr>
<td width="40" align="center"><b>5</b></td>
 <td width="128">Tsotsil</td>
 <td width="128" align="center">'.$datosFormulario["indigenas_p6_1_tsotsil_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["indigenas_p6_1_tsotsil_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["indigenas_p6_1_tsotsil_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>6</b></td>
 <td width="128">Otras (¿cuáles?) <br>'.$datosFormulario["indigenas_p6_1_otro"] .'</td>
 <td width="128" align="center">'.$datosFormulario["indigenas_p6_1_otro_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["indigenas_p6_1_otro_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["indigenas_p6_1_otro_T"] .'</td>
 </tr>
</table>

<table>
<tr>
<td><b>6.2- ¿Tienen convenios con alguna institución que provea este servicio?
</b>
</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["indigenas_p6_2_convenio"] .'</td>
  </tr>
</table>

<table>
<tr>
<td><b>
6.3.-¿Cuál es el nombre de la institución o instituciones?
</b>
</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["indigenas_p6_2_nombinst"] .'</td>
  </tr>
</table>

<table>
<tr>
<td><b>6.4.- ¿Con qué protocolos cuenta la institución para garantizar los derechos de las personas indígenas?
</b>
</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["indigenas_p6_4_ProtoInter"] .'(¿cuáles?): '.$datosFormulario["indigenas_p6_4_ProtoInter_cual"] .'</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["indigenas_p6_4_interno"] .' (¿cuáles?): '.$datosFormulario["indigenas_p6_4_interno_cual"] .'</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["indigenas_p6_4_ProtoImpjust"] .'</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["indigenas_p6_4_ninguno"] .'</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["indigenas_p6_4_otro"] .'  (¿cuáles?): '.$datosFormulario["indigenas_p6_4_otro_cual"] .'</td>
  </tr>
</table>
<table>
<tr>
<td><b>6.5.- ¿La institución cuenta con buenas prácticas que considere sean innovadoras para mejorar el acceso a la justicia a personas indígenas?
</b>
</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["indigenas_p6_5_buenaspract"] .'</td>
  </tr>
</table>

<table>
<tr>
<td><b>6.6.-¿Cuáles son esas buenas prácticas?
</b>
</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["indigenas_p6_6_cualbuenaspra"] .'</td>
  </tr>
</table>


<table>



   <tr>
     <td style="width: 100%; text-align: center; font-size: 14px; background-color:#1c584b; padding: 4px 4px 4px; font-weight:bold;  color:white;">
    7. JUSTICIA PARA PERSONAS EXTRANJERAS
     </td>

</tr>
</table>

<table>
<tr>
<td><b>7.- ¿Cuentan con traductores de lenguas extranjeras?
</b>
</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["extranjeras_p7_tradLenExt"] .'</td>
  </tr>
</table>

<table>
<tr>
<td><b>7.1.- ¿Con cuántos traductores cuenta la institución? Desglosar por lengua extranjera y por sexo.
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
  <td width="128" align="center">'.$datosFormulario["extranjeras_p7_1_ingles_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["extranjeras_p7_1_ingles_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["extranjeras_p7_1_ingles_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>2</b></td>
  <td width="128">Chino</td>
  <td width="128" align="center">'.$datosFormulario["extranjeras_p7_1_chino_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["extranjeras_p7_1_chino_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["extranjeras_p7_1_chino_T"] .'</td>
 </tr>
 <tr>
  <td width="40" align="center"><b>3</b></td>
  <td width="128">Francés</td>
  <td width="128" align="center">'.$datosFormulario["extranjeras_p7_1_frances_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["extranjeras_p7_1_frances_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["extranjeras_p7_1_frances_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>4</b></td>
 <td width="128">Árabe</td>
 <td width="128" align="center">'.$datosFormulario["extranjeras_p7_1_arabe_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["extranjeras_p7_1_arabe_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["extranjeras_p7_1_arabe_T"] .'</td>
 </tr>
 <tr>
<td width="40" align="center"><b>5</b></td>
 <td width="128">Ruso</td>
 <td width="128" align="center">'.$datosFormulario["extranjeras_p7_1_ruso_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["extranjeras_p7_1_ruso_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["extranjeras_p7_1_ruso_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>6</b></td>
 <td width="128"  >Otras (¿cuáles?): <br>'.$datosFormulario["extranjeras_p7_1_otro"] .'</td>
 <td width="128"  align="center">'.$datosFormulario["extranjeras_p7_1_otro_M"] .'</td>
 <td width="128"  align="center">'.$datosFormulario["extranjeras_p7_1_otro_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["extranjeras_p7_1_otro_T"] .'</td>
 </tr>

</table>

<table>
<tr>
<td><b>7.2- ¿Tienen convenios con otra institución que provea este servicio?
</b>
</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["extranjeras_p7_2_ConvInst"] .'</td>
  </tr>
</table>

<table>
<tr>
<td><b>7.3.-¿Cuál es el nombre de dicha institución o instituciones?
</b>
</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["extranjeras_p7_3_nombreInsti"] .'</td>
  </tr>
</table>

<table>
<tr>
<td><b>7.4 ¿Con qué protocolos cuenta la institución para garantizar los derechos de personas extranjeras?
</b>
</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["extranjeras_p7_4_ProtoInterna"] .' ¿Cuáles?: '.$datosFormulario["extranjeras_p7_4_ProtoInterna_cual"] .'</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["extranjeras_p7_4_interno"] .'  ¿Cuáles?: '.$datosFormulario["extranjeras_p7_4_interno_cual"] .'</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["extranjeras_p7_4_ninguno"] .'</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["extranjeras_p7_4_Otro"] .' ¿Cuáles?: '.$datosFormulario["extranjeras_p7_4_interno_cual"] .'</td>
  </tr>
</table>

<table>
<tr>
<td><b>7.5- ¿La institución cuenta con buenas prácticas que considere sean innovadoras para mejorar el acceso a la justicia a personas extranjeras?
</b>
</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["extranjeras_p7_5_buenasprac"] .'</td>
  </tr>
</table>
<table>
<tr>
<td><b>7.6.-¿Cuáles son esas buenas prácticas?
</b>
</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["extranjeras_p7_6_buenasprac_cual"] .'</td>
  </tr>
</table>
<table>
<tr>
      <td style="width: 100%; text-align: center; font-size: 14px; background-color:#1c584b; padding: 4px 4px 4px; font-weight:bold;  color:white;">
      8. JUSTICIA PARA PERSONAS CON DISCAPACIDAD
      </td>
   </tr>
</table>
<table>
<tr>
<td><b>8.- ¿Tienen convenios con instituciones u organizaciones de la sociedad civil que les proporcionen alguno de estos servicios para personas con discapacidad?
</b>
<br>
Sistema Braille
</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["discapacidad_p8_braile"] .'</td>
  </tr>
</table>
<table>
<tr>
<td>Intérpretes de Lengua de Señas Mexicana
</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["discapacidad_p8_LenSen"] .'</td>
  </tr>

</table>
<table>
<tr>
<td><b>
8.1.-¿Cuál es el nombre de dicha institución o instituciones?
</b>
</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["discapacidad_p8_1_nombreInst"] .'</td>
  </tr>
</table>
<table>
<tr>
<td><b>
8.2.- ¿Con qué protocolos cuenta la institución para garantizar los derechos de personas con discapacidad?
</b>
</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["discapacidad_p8_2_ProtoInterna"] .' ¿Cuáles?: '.$datosFormulario["discapacidad_p8_2_ProtoInterna_cual"] .'  </td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["discapacidad_p8_2_interno"] .' ¿Cuáles?: '.$datosFormulario["discapacidad_p8_2_interno_cua"] .'</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["discapacidad_p8_2_ProtoImpJust"] .'</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["discapacidad_p8_2_ninguno"] .'</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["discapacidad_p8_2_otros"] .' ¿Cuáles?: '.$datosFormulario["discapacidad_p8_2_otros_cual"] .'</td>
  </tr>
</table>
<table>
<tr>
<td><b>
8.3.- ¿La institución cuenta con buenas prácticas que considere sean innovadoras para mejorar el acceso a la justicia de personas con discapacidad?
</b>
</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["discapacidad_p8_3_buenasprac"] .'</td>
  </tr>
</table>

<table>
<tr>
<td><b>
8.4.-¿Cuáles son esas buenas prácticas?
</b>
</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["discapacidad_p8_3_buenasprac_cual"] .'</td>
  </tr>

</table>

<table>

<tr>
      <td style="width: 100%; text-align: center; font-size: 14px; background-color:#1c584b; padding: 4px 4px 4px; font-weight:bold;  color:white;">
      9. COLABORACIÓN CON OTRAS INSTITUCIONES
      </td>
   </tr>

</table>

<table>
<tr>
<td><b>9.- ¿Cuentan con algún tipo de colaboración con otras instituciones u organismos nacionales o extranjeros?
</b>
</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["colaboracion_p9_tipcol"] .'</td>
  </tr>
</table>
<table>
<tr>
<td><b>9.1.- ¿Con qué instituciones u organismos mantienen colaboración?
</b>
</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["colaboracion_p9_1_instcol"] .'</td>
  </tr>
</table>
<table>
<tr>
<td><b>9.2.- ¿Qué tipo de colaboración mantienen?
</b>
</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["colaboracion_p9_2_finan"] .'</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["colaboracion_p9_2_dona"] .'</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["colaboracion_p9_2_capa"] .'</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["colaboracion_p9_2_otros"] .'</td>
  <td width="128">'.$datosFormulario["colaboracion_p9_2_cual"] .'</td>
  </tr>
</table>

<table>
<tr>
<td><b>9.3.- Describir el tipo de colaboración señalada en la pregunta anterior.
</b>
</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["colaboracion_p9_3_descol"] .'</td>
  </tr>

</table>


<table>
<tr>
      <td style="width: 100%; text-align: center; font-size: 14px; background-color:#1c584b; padding: 4px 4px 4px; font-weight:bold;  color:white;">
      10. JUSTICIA DIGITAL
      </td>
   </tr>
</table>
<table>
<tr>
<td><b>10.- ¿La institución cuenta con un sistema/plataforma en donde ofrecer servicios de justicia digital para la ciudadanía?</b>
</td>
  </tr>
  <tr>

  <td width="128">'.$datosFormulario["registro_p10_intsispla"] .'</td>
  </tr>

</table>
<table>
<tr>
<td><b>10.1.- ¿Qué servicios proveen a través de este sistema/plataforma?
</b>
</td>

  </tr>
  <tr>
  <td width="528">'.$datosFormulario["registro_p10_1_servsispl"] .'</td>
  </tr>
</table>
<table>
<tr>
<td><b>10.2.- Favor de proporcionar el vínculo o liga de acceso.
</b>
</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["registro_p10_2_proliga"] .'</td>
  </tr>

</table>


<table>

<tr>
      <td style="width: 100%; text-align: center; font-size: 14px; background-color:#1c584b; padding: 4px 4px 4px; font-weight:bold;  color:white;">
      11. EVALUACIÓN Y SEGUIMIENTO DEL SISTEMA DE JUSTICIA

      </td>
   </tr>

</table>

<table>
<tr>
<td><b>
11.- Sin incluir el Modelo de Evaluación y Seguimiento (MES), ¿La institución cuenta con indicadores para el seguimiento, monitoreo y evaluación del Sistema de Justicia?
</b>
</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["indicadores_p11_modeval"] .'</td>
  </tr>
</table>

<table>
<tr>
<td><b>
11.1.- ¿Cuáles son esos indicadores?
</b>
</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["indicadores_p11_1_cualind"] .'</td>
  </tr>
</table>

<table>
<tr>
<td><b>
11.2.- ¿Con qué frecuencia se evalúan dichos indicadores?
</b>
</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["evaluacion_p11_2_evalind"] .'</td>
  </tr>
</table>

<table>
<tr>
      <td style="width: 100%; text-align: center; font-size: 14px; background-color:#1c584b; padding: 4px 4px 4px; font-weight:bold;  color:white;">
      12. TRANSPARENCIA

      </td>
   </tr>

</table>

<table>
<tr>
<td><b>
12.- ¿La institución cuenta con buenas prácticas que considere sean innovadoras en materia de transparencia y acceso a la información?
</b>
</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["indicadores_p12_bunprac"] .'</td>
  </tr>
</table>
<table>
<tr>
<td><b>12.1.- ¿Cuáles son esas buenas prácticas?
</b>
</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["transparencia_p12_1_cualpract"] .'</td>
  </tr>
</table>
<table>

<tr>
      <td style="width: 100%; text-align: center; font-size: 14px; background-color:#1c584b; padding: 4px 4px 4px; font-weight:bold;  color:white;">
      13. NECESIDADES DE LA INSTITUCIÓN
      </td>
   </tr>

</table>

<table>
<tr>
<td><b>13.- ¿Qué requiere la institución estatal encargada de la seguridad pública para desempeñar correctamente sus funciones?
</b>
</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["necesidades_p13_cap"] .'</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["necesidades_p13_recmat"] .'</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["necesidades_p13_rectec"] .'</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["necesidades_p13_per"] .'</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["necesidades_p13_infra"] .'</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["necesidades_p13_mej"] .'</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["necesidades_p13_prot"] .'</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["necesidades_p13_otros"] .'</td>
  <td width="128">'.$datosFormulario["necesidades_p13_cual"] .'</td>
  </tr>
</table>

<table>
<tr>
<td><b>13.1.- Describir las necesidades señaladas en la pregunta anterior:
</b>
</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["necesidades_p13_1_desnec"] .'</td>
  </tr>
</table>


<table>

<tr>
      <td style="width: 100%; text-align: center; font-size: 14px; background-color:#1c584b; padding: 4px 4px 4px; font-weight:bold;  color:white;">
      14.1 RESPONSABILIDADES DE LOS SERVIDORES PÚBLICOS: RESPONSABILIDAD ADMINISTRATIVA

      </td>
   </tr>

</table>

<table>
<tr>
<td><b>14.1.1.-¿Cuentan con un órgano especializado encargado de investigar quejas contra servidores públicos en materia administrativa? En caso de que sí, escribir el nombre del órgano responsable.
</b>
</td>
  </tr>
  <tr>

  <td width="128">'.$datosFormulario["denunciaserv_p14_den"] .'</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["denunciaserv_p14_den_cual"] .'</td>
  </tr>
</table>

<table>
<tr>
<td><b>14.1.2.- Total de quejas presentadas en el año 2020 contra servidores públicos.
</b>
</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["denunciaserv_p14_2_quej"] .'</td>
  </tr>
</table>
<table>
<tr>
<td><b>14.1.3.- ¿Cuántas quejas fueron presentadas en el año 2020 contra servidores públicos? Desglosar por función y por sexo.
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
  <td width="128" >	Investigación y Análisis</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_p14_3_inv_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_p14_3_inv_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_p14_3_inv_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>2</b></td>
  <td width="128">Inteligencia</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_p14_3_int_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_p14_3_int_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_p14_3_int_T"] .'</td>
 </tr>
 <tr>
  <td width="40" align="center"><b>3</b></td>
  <td width="128">Reacción</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_p14_3_reac_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_p14_3_reac_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_p14_3_reac_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>4</b></td>
 <td width="128">Procesal</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p14_3_proc_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p14_3_proc_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p14_3_proc_T"] .'</td>
 </tr>
 <tr>
<td width="40" align="center"><b>5</b></td>
 <td width="128">Seguridad y Custodia Penitenciaria</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p14_3_seg_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p14_3_seg_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p14_3_seg_T"] .'</td>
 </tr>
 <tr>
<td width="40" align="center"><b>6</b></td>
 <td width="128">Preventivo</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p14_3_prev_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p14_3_prev_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p14_3_prev_T"] .'</td>
 </tr>
 <tr>
<td width="40" align="center"><b>7</b></td>
 <td width="128">Primer respondiente</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p14_3_pri_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p14_3_pri_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p14_3_pri_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>8</b></td>
 <td width="128">Otras (¿cuáles?) <br> '.$datosFormulario["denunciaserv_p14_3_otros"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p14_3_otros_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p14_3_otros_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p14_3_otros_T"] .'</td>
 </tr>

</table>

<table>
<tr>
<td><b>14.1.4.- ¿Cuántos servidores públicos fueron sancionados por faltas administrativas? Desglosar por función y por sexo.
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
  <td width="128" >	Investigación y Análisis</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_p14_4_inv_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_p14_4_inv_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_p14_4_inv_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>2</b></td>
  <td width="128">Inteligencia</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_p14_4_intel_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_p14_4_intel_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_p14_4_intel_T"] .'</td>
 </tr>
 <tr>
  <td width="40" align="center"><b>3</b></td>
  <td width="128">Reacción</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_p14_4_reac_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_p14_4_reac_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_p14_4_reac_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>4</b></td>
 <td width="128">Procesal</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p14_4_proc_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p14_4_proc_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p14_4_proc_T"] .'</td>
 </tr>
 <tr>
<td width="40" align="center"><b>5</b></td>
 <td width="128">Seguridad y Custodia Penitenciaria</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p14_4_seg_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p14_4_seg_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p14_4_seg_T"] .'</td>
 </tr>
 <tr>
<td width="40" align="center"><b>6</b></td>
 <td width="128">Preventivo</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p14_4_prev_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p14_4_prev_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p14_4_prev_T"] .'</td>
 </tr>
 <tr>
<td width="40" align="center"><b>7</b></td>
 <td width="128">Primer respondiente</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p14_4_seg_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p14_4_seg_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p14_4_seg_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>8</b></td>
 <td width="128">Otras (¿cuáles?)<br>'.$datosFormulario["denunciaserv_p14_4_otroscual"] .'  </td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p14_4_otros_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p14_4_otros_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p14_4_otros_T"] .'</td>
 </tr>

</table>
<BR><BR><BR>
<table>

<tr>
      <td style="width: 100%; text-align: center; font-size: 14px; background-color:#1c584b; padding: 4px 4px 4px; font-weight:bold;  color:white;">
      14.2 RESPONSABILIDADES DE LOS SERVIDORES PÚBLICOS: RESPONSABILIDAD PENAL

      </td>
   </tr>

</table>

<table>
<tr>
<td><b>14.2.1.- Total de denuncias presentadas en el año 2020 contra servidores públicos. Desglosar por función y por sexo.
</b>
</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["denunciaserv_p142_2_quej"] .'</td>
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
  <td width="128" >	Investigación y Análisis</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_p142_3_inv_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_p142_3_inv_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_p142_3_inv_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>2</b></td>
  <td width="128">Inteligencia</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_p142_3_int_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_p142_3_int_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_p142_3_int_T"] .'</td>
 </tr>
 <tr>
  <td width="40" align="center"><b>3</b></td>
  <td width="128">Reacción</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_p142_3_reac_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_p142_3_reac_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_p142_3_reac_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>4</b></td>
 <td width="128">Procesal</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p142_3_proc_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p142_3_proc_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p142_3_proc_T"] .'</td>
 </tr>
 <tr>
<td width="40" align="center"><b>5</b></td>
 <td width="128">Seguridad y Custodia Penitenciaria</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p142_3_seg_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p142_3_seg_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p142_3_seg_T"] .'</td>
 </tr>
 <tr>
<td width="40" align="center"><b>6</b></td>
 <td width="128">Preventivo</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p142_3_prev_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p142_3_prev_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p142_3_prev_T"] .'</td>
 </tr>
 <tr>
<td width="40" align="center"><b>7</b></td>
 <td width="128">Primer respondiente</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p142_3_pri_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p142_3_pri_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p142_3_pri_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>8</b></td>
 <td width="128">Otras (¿cuáles?) <br>'.$datosFormulario["denunciaserv_p142_3_otros"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p142_3_otros_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p142_3_otros_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p142_3_otros_T"] .'</td>
 </tr>

</table>

<table>
<tr>
<td><b>14.2.2.- Total de sentencias condenatorias en contra de servidores públicos en el año 2020. Desglosar por función y por sexo.
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
  <td width="128" >	Investigación y Análisis</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_p142_4_inv_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_p142_4_inv_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_p142_4_inv_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>2</b></td>
  <td width="128">Inteligencia</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_p142_4_intel_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_p142_4_intel_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_p142_4_intel_T"] .'</td>
 </tr>
 <tr>
  <td width="40" align="center"><b>3</b></td>
  <td width="128">Reacción</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_p142_4_reac_M"] .'</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_p142_4_reac_H"] .'</td>
  <td width="128" align="center">'.$datosFormulario["denunciaserv_p142_4_reac_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>4</b></td>
 <td width="128">Procesal</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p142_4_proc_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p142_4_proc_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p142_4_proc_T"] .'</td>
 </tr>
 <tr>
<td width="40" align="center"><b>5</b></td>
 <td width="128">Seguridad y Custodia Penitenciaria</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p142_4_seg_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p142_4_seg_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p142_4_seg_T"] .'</td>
 </tr>
 <tr>
<td width="40" align="center"><b>6</b></td>
 <td width="128">Preventivo</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p142_4_prev_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p142_4_prev_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p142_4_prev_T"] .'</td>
 </tr>
 <tr>
<td width="40" align="center"><b>7</b></td>
 <td width="128">Primer respondiente</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p142_4_pri_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p142_4_pri_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p142_4_pri_T"] .'</td>
 </tr>
 <tr>
 <td width="40" align="center"><b>8</b></td>
 <td width="128">Otras (¿cuáles?) <br>'.$datosFormulario["denunciaserv_p142_4_otroscual"] .' </td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p142_4_otros_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p142_4_otros_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p142_4_otros_T"] .'</td>
 </tr>

</table>


<table>

<tr>
      <td style="width: 100%; text-align: center; font-size: 14px; background-color:#1c584b; padding: 4px 4px 4px; font-weight:bold;  color:white;">
      15. DENUNCIAS
      </td>
   </tr>
</table>

<table>
<tr>
<td><b>15.- Número total de denuncias recibidas por la institución estatal de seguridad pública en el año 2020.
</b>
</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["denuncias_p15_numtot"] .'</td>
  </tr>
</table>

<table>
<tr>
<td><b>
15.1.- Número de denuncias recibidas en el año 2020. Desagregar por los siguientes delitos:
</b>
</td>
  </tr>
</table>

<table  cellpadding="1" cellspacing="1">
<thead>

<tr style="background-color:#2d8673;color:#FFFFFF; border-color: #FFFFFF;">
  <td width="74" align="center"><b>#</b></td>
  <td width="240" align="center"><b>Descripción</b></td>
  <td width="240" align="center"><b>TOTAL</b></td>

 </tr>
</thead>
<tr>
 <td width="74" align="center"><b>1</b></td>
 <td width="240" >Homicidio	</td>
 <td width="240" align="center">'.$datosFormulario["denuncias_p15_1_homi"] .'</td>
</tr>
<tr>
 <td width="74" align="center"><b>2</b></td>
 <td width="240" >Feminicidio</td>
 <td width="240" align="center">'.$datosFormulario["denuncias_p15_1_femi"] .'</td>
</tr>
<tr>
 <td width="74" align="center"><b>3</b></td>
 <td width="240" >Lesiones</td>
 <td width="240" align="center">'.$datosFormulario["denuncias_p15_1_les"] .'</td>
</tr>
<tr>
 <td width="74" align="center"><b>4</b></td>
 <td width="240" >Violencia familiar</td>
 <td width="240" align="center">'.$datosFormulario["denuncias_p15_1_viofam"] .'</td>
</tr>
<tr>
 <td width="74" align="center"><b>5</b></td>
 <td width="240" >Abuso sexual</td>
 <td width="240" align="center">'.$datosFormulario["denuncias_p15_1_abusex"] .'</td>
</tr>
<tr>
 <td width="74" align="center"><b>6</b></td>
 <td width="240" >Hostigamiento sexual</td>
 <td width="240" align="center">'.$datosFormulario["denuncias_p15_1_hossex"] .'</td>
</tr>
<tr>
 <td width="74" align="center"><b>7</b></td>
 <td width="240" >Violación</td>
 <td width="240" align="center">'.$datosFormulario["denuncias_p15_1_viol"] .'</td>
</tr>
<tr>
 <td width="74" align="center"><b>8</b></td>
 <td width="240" >Trata de personas</td>
 <td width="240" align="center">'.$datosFormulario["denuncias_p15_1_tratper"] .'</td>
</tr>
<tr>
 <td width="74" align="center"><b>9</b></td>
 <td width="240" >Corrupción de menores</td>
 <td width="240" align="center">'.$datosFormulario["denuncias_p15_1_cormen"] .'</td>
</tr>
<tr>
 <td width="74" align="center"><b>10</b></td>
 <td width="240" >Tráfico de menores</td>
 <td width="240" align="center">'.$datosFormulario["denuncias_p15_1_trafmen"] .'</td>
</tr>
</table>

<table>
<tr>
<td><b>15.2.- ¿Cuentan con mecanismos no presenciales para interponer una denuncia?
</b>
</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["denuncias_p15_2_mecnopre"] .'</td>
  </tr>
</table>

<table>
<tr>
<td><b>
15.3. ¿Cuáles son los mecanismos no presenciales con los que cuentan?
</b>
</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["denuncias_p15_3_pagint"] .'</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["denuncias_p15_3_tel"] .'</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["denuncias_p15_3_app"] .'</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["necesidades_p15_3_sms"] .'</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["necesidades_p15_3_otros"] .'
¿Cuáles?: '.$datosFormulario["necesidades_p15_3_cuales"] .' </td>
  </tr>
</table>

<table>
<tr>
<td><b>15.4.- ¿Para qué delitos es posible realizar una denuncia por medio de mecanismos no presenciales?
</b>
</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["denuncias_p15_4_den"] .'</td>
  </tr>
</table>

<table>

<tr>
      <td style="width: 100%; text-align: center; font-size: 14px; background-color:#1c584b; padding: 4px 4px 4px; font-weight:bold;  color:white;">
      16. DETENCIONES
      </td>
   </tr>
</table>

<table>
<tr>
<td><b>16. Total de detenciones realizadas durante el año 2020. Desagregar por edad de la persona detenida y sexo
</b>
</td>
  </tr>
</table>

<table  cellpadding="1" cellspacing="1">
<thead>

<tr style="background-color:#2d8673;color:#FFFFFF; border-color: #FFFFFF;">
    <td width="128" align="center"><b>Descripción</b></td>
  <td width="128" align="center"><b>MUJER</b></td>
  <td width="128" align="center"><b>HOMBRE</b></td>
  <td width="128" align="center"><b>TOTAL</b></td>

 </tr>
</thead>
<tr>
 <td width="128" >Mayor de 18</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p16_totdet_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p16_totdet_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p16_totdet_T"] .'</td>
</tr>
<tr>
 <td width="128" >Menor de 18</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p16_totdet_meno18M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p16_totdet_meno18H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p16_totdet_meno18T"] .'</td>
</tr>
<tr>
 <td width="128" >Total</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p16_totdet_TM"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p16_totdet_TH"] .'</td>
 <td width="128" align="center">'.$datosFormulario["denunciaserv_p16_totdet_TT"] .'</td>
</tr>
</table>


<table>
<tr>
<td><b>16.1.- Total de detenciones realizadas durante el año 2020. Desagregar por los siguientes rubros:
</b>
</td>
  </tr>
</table>

<table  cellpadding="1" cellspacing="1">
<thead>

<tr style="background-color:#2d8673;color:#FFFFFF; border-color: #FFFFFF;">
  <td width="128" align="center"><b>Descripción</b></td>
  <td width="128" align="center"><b>TOTAL</b></td>

 </tr>
</thead>
<tr>
 <td width="128" >Detenciones totales</td>
 <td width="128" align="center">'.$datosFormulario["detenciones_p_16_1_detot"] .'</td>
</tr>
<tr>
 <td width="128" >Detenciones en flagrancia</td>
 <td width="128" align="center">'.$datosFormulario["detenciones_p_16_1_defla"] .'</td>
</tr>
<tr>
 <td width="128" >Detenciones por caso urgente</td>
 <td width="128" align="center">'.$datosFormulario["detenciones_p_16_1_decasurg"] .'</td>
</tr>
</table>


<table>

<tr>
      <td style="width: 100%; text-align: center; font-size: 14px; background-color:#1c584b; padding: 4px 4px 4px; font-weight:bold;  color:white;">
      17. VÍCTIMAS
      </td>
   </tr>
</table>


<table>
<tr>
<td><b>
17.- ¿La institución cuenta con buenas prácticas que considere sean innovadoras para evitar la revictimización de víctimas directas o indirectas?
</b>
</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["victimas_p17_bprac"] .'</td>
  </tr>
</table>

<table>
<tr>
<td><b>17.1.- ¿Cuáles son esas buenas prácticas?
</b>
</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["victimas_p17_1_cuales"] .'</td>
  </tr>
</table>

<table>

<tr>
      <td style="width: 100%; text-align: center; font-size: 14px; background-color:#1c584b; padding: 4px 4px 4px; font-weight:bold;  color:white;">
      18. MESAS DE JUSTICIA
      </td>
   </tr>
</table>


<table>
<tr>
<td><b>18.- ¿La institución participa en las Mesas de Justicia -judicialización- de la entidad?
</b>
</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["justiicia_p18_mesajus"] .'</td>
  </tr>
</table>

<table>
<tr>
<td><b>18.1.- ¿Qué instituciones participan en las Mesas de Justicia -judicialización-?
</b>
</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["necesidades_p18_1_segobedo"] .'</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["necesidades_p18_1_uasisjus"] .'</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["necesidades_p18_1_ptrisup"] .'</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["necesidades_p18_1_fisgral"] .'</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["necesidades_p18_1_secsegpu"] .'</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["necesidades_p18_1_tinst"] .'</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["necesidades_p18_1_subsispen"] .'</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["necesidades_p18_1_tautsup"] .'</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["necesidades_p18_1_tinsestm"] .'</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["necesidades_p18_1_dif"] .'</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["necesidades_p18_1_sipinna"] .'</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["necesidades_p18_1_secsal"] .'</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["necesidades_p18_1_comejavic"] .'</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["necesidades_p18_1_cenuatnvic"] .'</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["necesidades_p18_1_tcenjusm"] .'</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["necesidades_p18_1_tfisespm"] .'</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["necesidades_p18_1_dcenpen"] .'</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["necesidades_p18_1_dcenpenadol"] .'</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["necesidades_p18_1_torgmec"] .'</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["necesidades_p18_1_tsevper"] .'</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["necesidades_p18_1_otros"] .'  ¿Cuáles?:  '.$datosFormulario["necesidades_p18_1_cual"] .'</td>

  </tr>
</table>

<table>
<tr>
<td><b>18.2.- ¿Generalmente con qué frecuencia se realizan las sesiones de las Mesas de Justicia -judicialización- en la entidad?
</b>
</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["justiicia_p18_2_abierta"] .'</td>
  </tr>

</table>

<table>
<tr>
<td><b>18.3.- Describir buenas prácticas que considere sean innovadoras para mejorar el Sistema de Justicia y que hayan sido implementadas en la entidad derivadas de las Mesas de Justicia
</b>
</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["justiicia_p18_3_buenpract"] .'</td>
  </tr>
</table>

<table>
<tr>
      <td style="width: 100%; text-align: center; font-size: 14px; background-color:#1c584b; padding: 4px 4px 4px; font-weight:bold;  color:white;">
      19. IMPACTO COVID-19
      </td>
   </tr>
</table>


<table>
<tr>
<td><b>19.- ¿La institución incorporó medidas preventivas durante COVID-19 que considere sean innovadoras para proteger la salud del personal que labora?
</b>
</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["impacto_p19_medprev"] .'</td>
  </tr>
</table>

<table>
<tr>
<td><b>19.1.- Describir las medidas señaladas en la pregunta anterior
</b>
</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["impacto_p19_1_medse"] .'</td>
  </tr>
</table>

<table>
<tr>
<td><b>19.2.- ¿La institución incorporó medidas preventivas durante COVID-19 que considere sean innovadoras para proteger la salud de las personas usuarias/ciudadanía?
</b>
</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["impacto_p19_2_incmed"] .'</td>
  </tr>
</table>

<table>
<tr>
<td><b>19.3.- Describir las medidas/buenas prácticas señaladas en la pregunta anterior
</b>
</td>
  </tr>
  <tr>
  <td width="528">'.$datosFormulario["impacto_p19_3_descmed"] .'</td>
  </tr>
</table>


<table>

<tr>
      <td style="width: 100%; text-align: center; font-size: 14px; background-color:#1c584b; padding: 4px 4px 4px; font-weight:bold;  color:white;">
      20. JUSTICIA TERAPÉUTICA
      <p style="font-size: 8px;">
LAS SIGUIENTES PREGUNTAS SON RECABADAS CON EL FIN DE QUE LA DIRECCIÓN GENERAL PARA LA RECONCILIACIÓN Y JUSTICIA DE LA UASJ PUEDA COADYUVAR EN LA IMPLEMENTACIÓN DE PROYECTOS DE JUSTICIA TERAPÉUTICA.
</p>
      </td>
   </tr>

</table>

<table>
<tr>
<td><b>20.- ¿La institución cuenta/participa en un programa de Justicia Terapéutica para la atención y/o tratamiento específico del consumo
</b>
</td>
  </tr>
  <tr>
  <td width="128">'.$datosFormulario["terapeutica_p20_progjus"] .'</td>
  </tr>
</table>


<table>
<tr>
<td><b>20.1.- Total de personas detenidas en flagrancia bajo el influjo, uso o consumo problemático de sustancias psicoactivas. Desglosar por edad y sexo.
</b>
</td>
  </tr>
</table>

<table  cellpadding="1" cellspacing="1">
<thead>

<tr style="background-color:#2d8673;color:#FFFFFF; border-color: #FFFFFF;">
    <td width="128" align="center"><b>Descripción</b></td>
  <td width="128" align="center"><b>MUJER</b></td>
  <td width="128" align="center"><b>HOMBRE</b></td>
  <td width="128" align="center"><b>TOTAL</b></td>

 </tr>
</thead>
<tr>
 <td width="128" >Mayor de 18</td>
 <td width="128" align="center">'.$datosFormulario["terapeutica_p20_1_may18_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["terapeutica_p20_1_may18_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["terapeutica_p20_1_may18_T"] .'</td>
</tr>
<tr>
 <td width="128" >Menor de 18</td>
 <td width="128" align="center">'.$datosFormulario["terapeutica_p20_1_men18_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["terapeutica_p20_1_men18_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["terapeutica_p20_1_men18_T"] .'</td>
</tr>
<tr>
 <td width="128" >Total</td>
 <td width="128" align="center">'.$datosFormulario["terapeutica_p20_1_total_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["terapeutica_p20_1_total_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["terapeutica_p20_1_total_T"] .'</td>
</tr>
</table>


<table>
<tr>
<td><b>20.2.- Total de personas detenidas en flagrancia bajo el influjo, uso o consumo problemático de sustancias psicoactivas. Desglosar sexo y por sustancia utilizada.
</b>
</td>
  </tr>
</table>

<table  cellpadding="1" cellspacing="1">
<thead>

<tr style="background-color:#2d8673;color:#FFFFFF; border-color: #FFFFFF;">
    <td width="128" align="center"><b>Descripción</b></td>
  <td width="128" align="center"><b>MUJER</b></td>
  <td width="128" align="center"><b>HOMBRE</b></td>
  <td width="128" align="center"><b>TOTAL</b></td>

 </tr>
</thead>
<tr>
 <td width="128" >1. Cannabis</td>
 <td width="128" align="center">'.$datosFormulario["terapeutica_p20_2_can_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["terapeutica_p20_2_can_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["terapeutica_p20_2_can_T"] .'</td>
</tr>
<tr>
 <td width="128" >2. Metanfetamina</td>
 <td width="128" align="center">'.$datosFormulario["terapeutica_p20_2_men_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["terapeutica_p20_2_men_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["terapeutica_p20_2_men_T"] .'</td>
</tr>
<tr>
 <td width="128" >3. Fentanil</td>
 <td width="128" align="center">'.$datosFormulario["terapeutica_p20_2_fen_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["terapeutica_p20_2_fen_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["terapeutica_p20_2_fen_T"] .'</td>
</tr>
<tr>
 <td width="128" >4. Cocaína</td>
 <td width="128" align="center">'.$datosFormulario["terapeutica_p20_2_coc_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["terapeutica_p20_2_coc_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["terapeutica_p20_2_coc_T"] .'</td>
</tr>
<tr>
 <td width="128" >5. Heroína</td>
 <td width="128" align="center">'.$datosFormulario["terapeutica_p20_2_her_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["terapeutica_p20_2_her_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["terapeutica_p20_2_her_T"] .'</td>
</tr>
<tr>
 <td width="128" >6. Alcohol</td>
 <td width="128" align="center">'.$datosFormulario["terapeutica_p20_2_alc_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["terapeutica_p20_2_alc_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["terapeutica_p20_2_alc_T"] .'</td>
</tr>
<tr>
 <td width="128" >7. Otras (¿Cuáles?)</td>
 <td width="128" align="center">'.$datosFormulario["terapeutica_p20_2_otras_M"] .'</td>
 <td width="128" align="center">'.$datosFormulario["terapeutica_p20_2_otras_H"] .'</td>
 <td width="128" align="center">'.$datosFormulario["terapeutica_p20_2_otras_T"] .'</td>
</tr>
<tr>
<td width="128">'.$datosFormulario["terapeutica_p20_2_otroascual"].'</td>
</tr>
</table>

<table>

<tr>
      <td style="width: 100%; text-align: center; font-size: 14px; background-color:#1c584b; padding: 4px 4px 4px; font-weight:bold;  color:white;">
      21.- OBSERVACIONES FINALES
SI TIENE COMENTARIOS, SUGERENCIAS O REQUIERE REALIZAR ACLARACIONES SOBRE ALGUNA DE LAS PREGUNTAS RELACIONADAS AL CUESTIONARIO, PUEDE INCLUIRLAS EN ESTA SECCIÓN.

      </td>
   </tr>
   <tr>
   <td width="528">'.$datosFormulario["comfin"].'</td>
   </tr>


</table>



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
