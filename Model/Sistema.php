<?php

require_once 'Conexion.php';

class Sistema {

    static public $table = 'sistemas';

    static public function create($data) 
    {
        $db = new Conexion();
        $db->conectar();
        $table = Sistema::$table;

        $sql = "INSERT INTO $table (
                    so,app_id
                ) 
                VALUES (
                    '".$data['so']."','".$data['app_id']."'
                ) ";

        $db->consultar($sql);

        return "ok";                              
    }

    static public function read($item, $value) 
    {
        $table = Sistema::$table;

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
                    so='".$data['so']."', app_id='".$data['app_id']."'
                WHERE app_id='".$data['app_id']."' ";

        $db->consultar($sql);

        return "ok";
    }

    static public function delete() 
    {
        // No aplica
    }

}