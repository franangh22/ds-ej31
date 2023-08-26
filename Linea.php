<?php

require_once 'modelo/Demostracion.php';
require_once 'modelo/Linea.php';
require_once 'modelo/RespuestaLinea.php';
require_once 'modelo/Tasa.php';
require_once 'modelo/TipoLinea.php';

header('Content-Type: application/json');

$Demo = new Demostracion();
$Demo->Codigo = 1;
$Demo->Descripcion = 'DNI';

$TipoLinea = new TipoLinea();
$TipoLinea->Codigo = 1;
$TipoLinea->Descripcion = 'Convencional';

$Tasa = new Tasa();
$Tasa->PlazoDesde = 0;
$Tasa->PlazoHasta = 48;
$Tasa->Tem = 4.7671;
$Tasa->Tna = 58;
$Tasa->ListTasaScore = null;

$Linea = new Linea();
$Linea->Id = 222;
$Linea->Codigo = 752;
$Linea->Demostracion = $Demo;
$Linea->Linea = 'Linea sin RCI';
$Linea->RelacionCuotaIngreso = 100;
$Linea->TipoLinea = $TipoLinea;
$Linea->Tasa = $Tasa;
$Linea->Tope = 250000;

$RespuestaLinea = new RespuestaLinea();
$RespuestaLinea->Linea = $Linea;
$RespuestaLinea->ContieneError = true;
$RespuestaLinea->Mensaje = null;

echo json_encode($RespuestaLinea);