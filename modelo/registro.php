<?php
include "conexion.php";
class registro
{
    public function registro()
    {

    }
    public function registrar($sql)
    {
        $con = new conexion();
        $con->conectar();
        $con->ejecon($sql, 2);
        $con->desconectar();
    }
    public function insertarRegistro($nombres, $apellidos, $cedula, $fechaNacimiento, $fechaExpedicion, $celular, $correo, $direccion, $FKciudad, $FKtipoVivienda, $contacto, $celularContacto, $FKpregunta1, $FKpregunta2, $FKpregunta3)
    {
        $sql = ("INSERT INTO cliente (nombres,apellidos,cedula ,fechaNacimiento ,fechaExpedicion ,celular ,correo ,direccion ,FKciudad ,FKtipoVivienda ,contacto ,celularContacto ,FKpregunta1,FKpregunta2,FKpregunta3 ) VALUES ('$nombres','$apellidos','$cedula' ,'$fechaNacimiento' ,'$fechaExpedicion' ,'$celular' ,'$correo' ,'$direccion' ,'$FKciudad' ,'$FKtipoVivienda' ,'$contacto' ,'$celularContacto' ,'$FKpregunta1','$FKpregunta2','$FKpregunta3' );");
        $this->registrar($sql);
    }
}
