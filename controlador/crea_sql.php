<?php

class crea_sql
{
    public function crea_insert($array_campos)
    {

        //-----------------------------------------------------------
        //toma el nombre de la tabla
        $nom_tabla = $array_campos['nom_tabla'];
        //-----------------------------------------------------------
        //retira el campo tipo y nom_tabla de $array_campos
        unset($array_campos['tipo']);
        unset($array_campos['nom_tabla']);
        //setea pkID a null ya que es autonumerico puede que esto sea condicional a futuro
        //$array_campos['pkID'] = "NULL";
        //-----------------------------------------------------------
        // construye query...
        $sql = "insert INTO `" . $nom_tabla . "`";

        // implode keys of $array...
        $sql .= " (`" . implode("`, `", array_keys($array_campos)) . "`)";

        // implode values of $array...
        $sql .= " VALUES ('" . implode("', '", $array_campos) . "') ";
        //-----------------------------------------------------------
        $sql_rep = str_replace("'NULL'", "NULL", $sql);
        //-----------------------------------------------------------
        return $sql_rep;
    }
}
