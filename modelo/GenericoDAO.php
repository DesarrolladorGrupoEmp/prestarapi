<?php

include_once '../Conexion/Conexion.php';

class GenericoDAO
{

    /**
     * El conector de la base de datos
     * @var Conexion
     */
    protected $Conector;
    private $r;

    public function __construct()
    {
        $this->Conector = new Conexion();
        $this->r        = array();
    }

    /**
     *Retorna un Array a partir  de la consulta
     * @param type String $query
     * @return Array -> Un array con los datos de la consulta
     */
    //------------------------------------------------------------------------
    public function EjecutaInsertar($query)
    {
        $Conector = new Conexion();
        $db       = $Conector->connect();

        if (!$result = $db->query($query)) {
            die('There was an error running the query [' . $db->error . ']');
        } else {
            $this->r["estado"]  = "ok";
            $this->r["mensaje"] = "Guardado correctamente.";

            return $this->r;
        }
    }
}
