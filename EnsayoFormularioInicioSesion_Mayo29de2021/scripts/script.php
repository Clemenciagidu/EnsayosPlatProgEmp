<?php


//header('Access-Control-Allow-Origin: *');
//header('Access-Control-Allow-Methods: POST, GET, OPTIONS');

	$salt = "MATRIX";
	$usuario = array();
    $usuario["nombre"]  =   $_POST["nombre"];
    $usuario["apellido"]=   $_POST["apellido"];
	$usuario["celular"] =   $_POST["celular"];
	$usuario["correo"]  =   $_POST["correo"];
	$usuario["ciudad"]  =   $_POST["ciudad"];
    $usuario["clave"] =   md5($salt.$_POST["clave1"]);

	echo json_encode($usuario);

?>