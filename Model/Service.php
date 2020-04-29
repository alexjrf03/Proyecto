<?php

require_once 'Conexion.php';

class Service {

    static public $table = 'servidores';

    static public function create($data) 
    {
        $db = new Conexion();
        $db->conectar();
        $table = Service::$table;

        $sql = "INSERT INTO $table (
                    web_service,app_id
                ) 
                VALUES (
                    '".$data['web_service']."','".$data['app_id']."'
                ) ";

        $db->consultar($sql);

        return "ok";                              
    }

    static public function read($item, $value) 
    {
        $table = Service::$table;

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
                $service = $db->mostrar($query);
                array_push($ar,$service);
                $total--;
            } while ($total > 0);

        	return $ar;
        }
    }

    static public function update($data) 
    {
        $db = new Conexion();
        $db->conectar();
        $table = Service::$table;

        $sql = "UPDATE $table SET 
                    web_service='".$data['web_service']."', app_id='".$data['app_id']."'
                WHERE app_id='".$data['app_id']."' ";

        $db->consultar($sql);

        return "ok";
    }

    static public function delete() 
    {
        // No aplica
    }

}