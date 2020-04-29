<?php

require_once 'Conexion.php';

class Lenguaje {

    static public $table = 'lenguajes';

    static public function create($data) 
    {
        $db = new Conexion();
        $db->conectar();
        $table = Lenguaje::$table;

        $sql = "INSERT INTO $table (
                    languaje,app_id
                ) 
                VALUES (
                    '".$data['languaje']."','".$data['app_id']."'
                ) ";

        $db->consultar($sql);

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
                    languaje='".$data['languaje']."', app_id='".$data['app_id']."'
                WHERE app_id='".$data['app_id']."' ";

        $db->consultar($sql);

        return "ok";
    }

    static public function delete() 
    {
        // No aplica
    }

}