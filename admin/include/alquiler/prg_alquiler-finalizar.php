<?php
session_start();
include "../../config.php";
include "../functions.php";

//--------------------------------------------------------------

$xidalquiler = $_GET['idalquiler'];
$xidhabitacion = $_GET['idhabitacion'];

$consulta="update habitacion set
	idestado = 1,
	idalquiler = 0
	where idhabitacion = '$xidhabitacion'";

if($mysqli->query($consulta)){
		$Men = "Los datos fueron guardados satisfactoriamente.";
		$consultaalq = "update alquilerhabitacion set
			estadoalquiler = 0
			where idalquiler = '$xidalquiler'";
		if($mysqli->query($consultaalq)){}
}else{
		$Men = "Ha fallado, los datos no han sido registrados.";
}


/**
 * Se agrego para el restaurant
 */

$consulta2="update habitacion set
	idestado = 1
	where idhabitacion = '$xidhabitacion'";

if($mysqli->query($consulta2)){
		$Men = "Los datos fueron guardados satisfactoriamente.";
}else{
		$Men = "Ha fallado, los datos no han sido registrados.";
}

$mysqli->close();	
//$_SESSION['msgerror'] = $Men;
header("Location: ../../control-habitaciones.php"); exit;
//************************************************************
?>