<?php

require_once 'Conexion.php';

class Env {

    static public $table = 'ambiente';

    static public function create($data) 
    {
        $db = new Conexion();
        $db->conectar();
        $table = Env::$table;

        $sql = "INSERT INTO $table (
                    nombre_env
                ) 
                VALUES (
                    '".$data['nombre']."'
                ) ";

        $db->consultar($sql);

        // Extraer id
        $sql_id = "SELECT MAX(id_amb) FROM $table";
        $query_id = $db->consultar($sql_id);
        $id =  $db->mostrar($query_id);

        // Insert in the table pibot
        $sql_inter = "INSERT INTO ambiente_app (id_amb,id_app) 
                        VALUES ('".$id['max']."','".$data['app_id']."') ";
        $db->consultar($sql_inter);

        return "ok";                              
    }

    static public function read($item, $value) 
    {
        $table = Env::$table;

		if($item != null && $value != null){
            
            $db = new Conexion();
            $db->conectar();

            // For tables intermedias, query all data.
            $sql ="SELECT * 
            FROM $item A 
                INNER JOIN ambiente_app AA ON A.id_app = AA.id_app
                INNER JOIN $table AM ON AA.id_amb = AM.id_amb
            WHERE AA.id_app = $value";

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
                $environment = $db->mostrar($query);
                array_push($ar,$environment);
                $total--;
            } while ($total > 0);

        	return $ar;
        }
    }

    static public function update($data) 
    {
        $db = new Conexion();
        $db->conectar();
        $table = Env::$table;

        $sql = "UPDATE $table SET 
                    nombre_env='".$data['nombre']."'
                WHERE id_amb='".$data['id_amb']."' ";

        $db->consultar($sql);

        return "ok";
    }

    static public function delete() 
    {
        // No aplica
    }

}