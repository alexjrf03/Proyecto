<?php

require_once 'Conexion.php';

class Env {

    static public $table = 'ambientes';

    static public function create($data) 
    {
        $db = new Conexion();
        $db->conectar();
        $table = Env::$table;

        $sql = "INSERT INTO $table (
                    environment,app_id
                ) 
                VALUES (
                    '".$data['environment']."','".$data['app_id']."'
                ) ";

        $db->consultar($sql);

        return "ok";                              
    }

    static public function read($item, $value) 
    {
        $table = Env::$table;

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
                    environment='".$data['environment']."', app_id='".$data['app_id']."'
                WHERE app_id='".$data['app_id']."' ";

        $db->consultar($sql);

        return "ok";
    }

    static public function delete() 
    {
        // No aplica
    }

}