<?php

ini_set('error_reporting', E_ALL | E_STRICT);
ini_set('display_errors', 1);

header('content-type: aplication/json; charset=utf-8'); //header para json

include '../modelo/GenericoDAO.php';
include 'crea_sql.php';

$accion = isset($_POST['tipo']) ? $_POST['tipo'] : "x";

$r = array();

switch ($accion) {
    case 'inserta_registro':

        $generico = new GenericoDAO();
        $crea_sql = new crea_sql();

        $q_inserta  = $crea_sql->crea_insert($_POST);
        $r["query"] = $q_inserta;

        $resultado = $generico->EjecutaInsertar($q_inserta);

        if ($resultado) {
            $r[] = $resultado;
        } else {
            $r["estado"]  = "Error";
            $r["mensaje"] = "No se inserto.";
        }

        break;
}

echo json_encode($r); //imprime el json
