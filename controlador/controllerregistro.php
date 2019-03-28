<?php
include "../modelo/registro.php";
$registro = new registro();

//Recibe las variables
$nombres         = isset($_POST["nombres"]) ? $_POST["nombres"] : null;
$apellidos       = isset($_POST["apellidos"]) ? $_POST["apellidos"] : null;
$cedula          = isset($_POST["cedula"]) ? $_POST["cedula"] : null;
$fechaNacimiento = isset($_POST["fechaNacimiento"]) ? $_POST["fechaNacimiento"] : null;
$fechaExpedicion = isset($_POST["fechaExpedicion"]) ? $_POST["fechaExpedicion"] : null;
$celular         = isset($_POST["celular"]) ? $_POST["celular"] : null;
$correo          = isset($POST["correo"]) ? $_POST["correo"] : null;
$direccion       = isset($_POST["direccion"]) ? $_POST["direccion"] : null;
$FKciudad        = isset($_POST["FKciudad"]) ? $_POST["FKciudad"] : null;
$FKtipoVivienda  = isset($_POST["FKtipoVivienda"]) ? $_POST["FKtipoVivienda"] : null;
$contacto        = isset($_POST["contacto"]) ? $_POST["contacto"] : null;
$celularContacto = isset($_POST["celularContacto"]) ? $_POST["celularContacto"] : null;
$FKpregunta1     = isset($_POST["FKpregunta1"]) ? $_POST["FKpregunta1"] : null;
$FKpregunta2     = isset($_POST["FKpregunta2"]) ? $_POST["FKpregunta2"] : null;
$FKpregunta3     = isset($_POST["FKpregunta3"]) ? $_POST["FKpregunta3"] : null;
$FKestadoCliente = isset($_POST["FKestadoCliente"]) ? $_POST["FKestadoCliente"] : null;

$registro->insertarRegistro($nombres, $apellidos, $cedula, $fechaNacimiento, $fechaExpedicion, $celular, $correo, $direccion, $FKciudad, $FKtipoVivienda, $contacto, $celularContacto, $FKpregunta1, $FKpregunta2, $FKpregunta3);
