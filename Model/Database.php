<?php

require_once 'Conexion.php';

class Database {

    static public $table = 'tipo_bd';

    static public function create($data) 
    {
        $db = new Conexion();
        $db->conectar();
        $table = Database::$table;

        $sql = "INSERT INTO $table (
                    manejador_bd,version_bd
                ) 
                VALUES (
                    '".$data['manejador_bd']."','".$data['version_bd']."'
                ) ";

        $db->consultar($sql);

        // Extraer id
        $sql_id = "SELECT MAX(id_tbd) FROM $table";
        $query_id = $db->consultar($sql_id);
        $id =  $db->mostrar($query_id);

        // Insert in the table pibot
        $sql_inter = "INSERT INTO bd_app (id_tbd,id_app,nombre_bd,descripcion_bd,estatus) 
                        VALUES ('".$id['max']."','".$data['app_id']."','".$data['nombre_bd']."','".$data['descripcion_bd']."','".$data['estatus']."') ";
        $db->consultar($sql_inter);

        return "ok";                              
    }

    static public function read($item, $value) 
    {
        $table = Database::$table;

		if($item != null && $value != null){
            
            $db = new Conexion();
            $db->conectar();

            // For tables intermedias, query all data.
            $sql ="SELECT * 
            FROM $item A
                INNER JOIN bd_app BDA ON A.id_app = BDA.id_app
                INNER JOIN $table TBD ON BDA.id_tbd = TBD.id_tbd
            WHERE BDA.id_app = $value";

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
                $database = $db->mostrar($query);
                array_push($ar,$database);
                $total--;
            } while ($total > 0);

        	return $ar;
        }
    }

    static public function update($data) 
    {
        $db = new Conexion();
        $db->conectar();
        $table = Database::$table;
        
        $sql = "UPDATE $table SET 
                    manejador_bd='".$data['manejador_bd']."', version_bd='".$data['version_bd']."'
                WHERE id_tbd='".$data['id_tbd']."' ";

        $db->consultar($sql);

        // update in the table pibot
        $sql_inter = "UPDATE bd_app SET 
                        nombre_bd='".$data['nombre_bd']."', descripcion_bd='".$data['descripcion_bd']."',estatus='".$data['estatus']."'
                    WHERE id_bd='".$data['id_bd']."' ";

        $db->consultar($sql_inter);

        return "ok";
    }

    static public function delete() 
    {
        // No aplica
    }

}