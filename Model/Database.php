<?php

require_once 'Conexion.php';

class Database {

    static public $table = 'database';

    static public function create($data) 
    {
        $db = new Conexion();
        $db->conectar();
        $table = Database::$table;

        $sql = "INSERT INTO $table (
                    nombre,estatus,servidor,descripcion,app_id
                ) 
                VALUES (
                    '".$data['nombre']."','".$data['estatus']."','".$data['servidor']."','".$data['descripcion']."','".$data['app_id']."'
                ) ";

        $db->consultar($sql);

        return "ok";                              
    }

    static public function read($item, $value) 
    {
        $table = Database::$table;

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
                    nombre='".$data['nombre']."', estatus='".$data['estatus']."',
                    servidor='".$data['servidor']."', descripcion='".$data['descripcion']."'
                WHERE app_id='".$data['app_id']."' ";

        $db->consultar($sql);

        return "ok";
    }

    static public function delete() 
    {
        // No aplica
    }

}