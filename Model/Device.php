<?php

require_once 'Conexion.php';

class Device {

    static public $table = 'dispositivos';

    static public function create($data) 
    {
        $db = new Conexion();
        $db->conectar();
        $table = Device::$table;

        $sql = "INSERT INTO $table (
                    device,app_id
                ) 
                VALUES (
                    '".$data['device']."','".$data['app_id']."'
                ) ";

        $db->consultar($sql);

        return "ok";                              
    }

    static public function read($item, $value) 
    {
        $table = Device::$table;

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
                $device = $db->mostrar($query);
                array_push($ar,$device);
                $total--;
            } while ($total > 0);

        	return $ar;
        }
    }

    static public function update($data) 
    {
        $db = new Conexion();
        $db->conectar();
        $table = Device::$table;

        $sql = "UPDATE $table SET 
                    device='".$data['device']."', app_id='".$data['app_id']."'
                WHERE app_id='".$data['app_id']."' ";

        $db->consultar($sql);

        return "ok";
    }

    static public function delete() 
    {
        // No aplica
    }

}