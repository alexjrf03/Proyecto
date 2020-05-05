<?php

require_once 'Conexion.php';

class Service {

    static public $table = 'serviweb';

    static public function create($data) 
    {
        $db = new Conexion();
        $db->conectar();
        $table = Service::$table;

        $sql = "INSERT INTO $table (
                    nombre_serviweb,version_serviweb
                ) 
                VALUES (
                    '".$data['nombre_serviweb']."','".$data['version_serviweb']."'
                ) ";

        $db->consultar($sql);

        // Extraer id
        $sql_id = "SELECT MAX(id_serviweb) FROM $table";
        $query_id = $db->consultar($sql_id);
        $id =  $db->mostrar($query_id);

        // Insert in the table pibot
        $sql_inter = "INSERT INTO serviweb_app (id_serviweb,id_app) 
                        VALUES ('".$id['max']."','".$data['app_id']."') ";
        $db->consultar($sql_inter);

        return "ok";                              
    }

    static public function read($item, $value) 
    {
        $table = Service::$table;

		if($item != null && $value != null){
            
            $db = new Conexion();
            $db->conectar();

            // For tables intermedias, query all data.
            $sql ="SELECT * 
            FROM $item A
                INNER JOIN serviweb_app SA ON A.id_app = SA.id_app
                INNER JOIN $table S ON SA.id_serviweb = S.id_serviweb
            WHERE SA.id_app = $value";

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
                    nombre_serviweb='".$data['nombre_serviweb']."', version_serviweb='".$data['version_serviweb']."'
                WHERE id_serviweb='".$data['id_serviweb']."' ";

        $db->consultar($sql);

        return "ok";
    }

    static public function delete() 
    {
        // No aplica
    }

}