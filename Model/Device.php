<?php

require_once 'Conexion.php';

class Device {

    static public $table = 'dispositivo';

    static public function create($data) 
    {
        $db = new Conexion();
        $db->conectar();
        $table = Device::$table;

        $sql = "INSERT INTO $table (
                    nombre_disp,descripcion_disp
                ) 
                VALUES (
                    '".$data['nombre_disp']."','".$data['descripcion_disp']."'
                ) ";

        $db->consultar($sql);

        // Extraer id
        $sql_id = "SELECT MAX(id_disp) FROM $table";
        $query_id = $db->consultar($sql_id);
        $id =  $db->mostrar($query_id);

        // Insert in the table pibot
        $sql_inter = "INSERT INTO dispositivo_app (id_disp,id_app) 
                        VALUES ('".$id['max']."','".$data['app_id']."') ";
        $db->consultar($sql_inter);

        return "ok";                              
    }

    static public function read($item, $value) 
    {
        $table = Device::$table;

		if($item != null && $value != null){
            
            $db = new Conexion();
            $db->conectar();

            $sql ="SELECT * 
            FROM $item A 
                INNER JOIN dispositivo_app DA ON A.id_app = DA.id_app
                INNER JOIN $table D ON DA.id_disp = D.id_disp
            WHERE DA.id_app = $value";

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
                    nombre_disp='".$data['nombre_disp']."', descripcion_disp='".$data['descripcion_disp']."'
                WHERE id_disp='".$data['id_disp']."' ";

        $db->consultar($sql);

        return "ok";
    }

    static public function delete() 
    {
        // No aplica
    }

}