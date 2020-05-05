<?php

require_once 'Conexion.php';

class Provider {

    static public $table = 'proveedor';

    static public function create($data) 
    {
        $db = new Conexion();
        $db->conectar();
        $table = Provider::$table;

        $sql = "INSERT INTO $table (
                    nombre_proveedor,telefono,correo
                ) 
                VALUES (
                    '".$data['nombre_proveedor']."','".$data['telefono']."','".$data['correo']."'
                ) ";

        $db->consultar($sql);

        // Extraer id
        $sql_id = "SELECT MAX(id_proveedor) FROM $table";
        $query_id = $db->consultar($sql_id);
        $id =  $db->mostrar($query_id);

        // Insert in the table pibot
        $sql_inter = "INSERT INTO proveedor_app (id_proveedor,id_app) 
                        VALUES ('".$id['max']."','".$data['app_id']."') ";
        $db->consultar($sql_inter);

        return "ok";                              
    }

    static public function read($item, $value) 
    {
        $table = Provider::$table;

		if($item != null && $value != null){
            
            $db = new Conexion();
            $db->conectar();

            // For tables intermedias, query all data.
            $sql ="SELECT * 
            FROM $item A
                INNER JOIN proveedor_app PA ON A.id_app = PA.id_app
                INNER JOIN $table P ON PA.id_proveedor = P.id_proveedor
            WHERE PA.id_app = $value";

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
                $provider = $db->mostrar($query);
                array_push($ar,$provider);
                $total--;
            } while ($total > 0);

        	return $ar;
        }
    }

    static public function update($data) 
    {
        $db = new Conexion();
        $db->conectar();
        $table = Provider::$table;

        $sql = "UPDATE $table SET 
                    nombre_proveedor='".$data['nombre_proveedor']."', telefono='".$data['telefono']."',
                    correo='".$data['correo']."'
                WHERE id_proveedor='".$data['id_proveedor']."' ";

        $db->consultar($sql);

        return "ok";
    }

    static public function delete() 
    {
        // No aplica
    }

}