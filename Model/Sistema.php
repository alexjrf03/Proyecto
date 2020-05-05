<?php

require_once 'Conexion.php';

class Sistema {

    static public $table = 'so';

    static public function create($data) 
    {
        $db = new Conexion();
        $db->conectar();
        $table = Sistema::$table;

        $sql = "INSERT INTO $table (
                    nombre_so,version_so
                ) 
                VALUES (
                    '".$data['nombre_so']."','".$data['version_so']."'
                ) ";

        $db->consultar($sql);

        // Extraer id
        $sql_id = "SELECT MAX(id_so) FROM $table";
        $query_id = $db->consultar($sql_id);
        $id =  $db->mostrar($query_id);

        // Insert in the table pibot
        $sql_inter = "INSERT INTO so_app (id_so,id_app) 
                        VALUES ('".$id['max']."','".$data['app_id']."') ";
        $db->consultar($sql_inter);

        return "ok";                              
    }

    static public function read($item, $value) 
    {
        $table = Sistema::$table;

		if($item != null && $value != null){
            
            $db = new Conexion();
            $db->conectar();

            // For tables intermedias, query all data.
            $sql ="SELECT * 
            FROM $item A
                INNER JOIN so_app SOA ON A.id_app = SOA.id_app
                INNER JOIN $table S ON SOA.id_so = S.id_so
            WHERE SOA.id_app = $value";

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
                $sistemas = $db->mostrar($query);
                array_push($ar,$sistemas);
                $total--;
            } while ($total > 0);

        	return $ar;
        }
    }

    static public function update($data) 
    {
        $db = new Conexion();
        $db->conectar();
        $table = Sistema::$table;

        $sql = "UPDATE $table SET 
                    nombre_so='".$data['nombre_so']."', version_so='".$data['version_so']."'
                WHERE id_so='".$data['id_so']."' ";

        $db->consultar($sql);

        return "ok";
    }

    static public function delete() 
    {
        // No aplica
    }

}