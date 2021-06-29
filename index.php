<?php
error_reporting(E_ERROR | E_PARSE);



require_once "controladores/plantilla.controlador.php";
require_once "controladores/usuarios.controlador.php";
require_once "controladores/categorias.controlador.php";
require_once "controladores/utilerias.controlador.php";
require_once "controladores/empresa.controlador.php";
require_once "controladores/perfiles.controlador.php";
require_once "controladores/CorreoSaliente.controlador.php";
require_once "controladores/bitacora.controlador.php";

require_once "modelos/usuarios.modelo.php";
require_once "modelos/categorias.modelo.php";
require_once "modelos/empresa.modelo.php";
require_once "modelos/correo.modelo.php";
require_once "modelos/perfiles.modelo.php";
require_once "modelos/bitacora.modelo.php";
require_once "modelos/policias1.modelo.php";
require_once "modelos/jueces1.modelo.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();
