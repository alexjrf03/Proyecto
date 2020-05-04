<?php

require_once 'Conexion.php';

class Lenguaje {

    static public $table = 'lenguaje';

    static public function create($data) 
    {
        $db = new Conexion();
        $db->conectar();
        $table = Lenguaje::$table;

        $sql = "INSERT INTO $table (
                    nombre_lenguaje, version
                ) 
                VALUES (
                    '".$data['nombre_lenguaje']."','".$data['version']."'
                ) ";

        $db->consultar($sql);

        // Extraer id
        $sql_id = "SELECT MAX(id_lenguaje) FROM $table";
        $query_id = $db->consultar($sql_id);
        $id =  $db->mostrar($query_id);

        // Insert in the table pibot
        $sql_inter = "INSERT INTO lenguaje_app (id_lenguaje,id_app) 
                        VALUES ('".$id['max']."','".$data['app_id']."') ";
        $db->consultar($sql_inter);

        return "ok";                              
    }

    static public function read($item, $value) 
    {
        $table = Lenguaje::$table;

		if($item != null && $value != null){
            
            $db = new Conexion();
            $db->conectar();
            $sql = "SELECT * FROM $table WHERE $item = '$value'";
            $query = $db->consultar($sql);	
            $row = $db->mostrar($query);
            return $row;
 
        } else {

			$db = new Conexion();
			$db->conectar();
			$sql = "SELECT * $table ";
			$query = $db->consultar($sql);
            $ar = array();
            $total = pg_num_rows($query);

            do {
                $lenguaje = $db->mostrar($query);
                array_push($ar,$lenguaje);
                $total--;
            } while ($total > 0);

        	return $ar;
        }
    }

    static public function update($data) 
    {
        $db = new Conexion();
        $db->conectar();
        $table = Lenguaje::$table;

        $sql = "UPDATE $table SET 
                    nombre_lenguaje='".$data['nombre_lenguaje']."', version='".$data['version']."'
                WHERE app_id='".$data['app_id']."' ";

        $db->consultar($sql);

        return "ok";
    }

    static public function delete() 
    {
        // No aplica
    }

}