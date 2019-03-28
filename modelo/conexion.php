<?php
class conexion
{
    public $link;
    public function conexion()
    {}
    public function conectar()
    {
        include "configuracion.php";
        $this->link = mysqli_connect($serv, $user, $pass, $db);
        if (!$this->link) {
            echo "Error en la conexion";
        }
    }
    public function ejecon($con, $op)
    {
        $recordset = mysqli_query($this->link, $con);
        if ($op == 1) {
            while ($linea = mysqli_fetch_array($recordset)) {
                $data[] = $linea;
            }
        } else {
            $data[] = "";
        }
        $dat = isset($data) ? $data : null;
        if ($dat) {
            return $dat;
        }
    }

    public function desconectar()
    {
        mysqli_close($this->link);
    }
}
