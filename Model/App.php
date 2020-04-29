<?php
require_once 'Conexion.php';
class App {

	public function consultarApp($table,$item,$value) {

        if($item != null){

            $db = new Conexion();
	    	$db->conectar();

            $sql = "SELECT * FROM $table WHERE $item = $value";
            $result = $db->consultar($sql);
            $resp = $db->mostrar($result);

            return $resp;
 
        } else {
            $db = new conexion();
	    	$db->conectar();

            $sql = "SELECT * FROM $table";
            $result = $db->consultar($sql);
            $ar = array();
            $total = pg_num_rows($result);

            do {

                $proveedores = $db->mostrar($result);
                array_push($ar,$proveedores);
                $total--; 

            } while ($total>0);

        return $ar;

        }
    }
    
	static public function insertarApp($tabla,$data){

        $bd = new Conexion();
        $bd->conectar();

        $sql = "INSERT INTO $tabla (name,final_user,uso,url,conection_file,firms,attached_files,authentication_method,description,date) 
                    VALUES ('".$data['name']."' ,'".$data['final_user']."', '".$data['uso']."','".$data['url']."', '".$data['conection_file']."', '".$data['firms']."','".$data['attached_files']."','".$data['authentication_method']."','".$data['description']."','".$data['date']."')";

        $query = $bd->consultar($sql);

        $sql_id = "SELECT MAX(app_id) FROM $tabla";

        $query_id = $bd->consultar($sql_id);
        $app =  $bd->mostrar($query_id);

		return $app;      

    }

    static public function updateApp($tabla,$data){

        $bd=new Conexion();
        $bd->conectar();

        $query="UPDATE $tabla SET name='".$data['name']."' ,final_user='".$data['final_user']."',uso='".$data['uso']."',url='".$data['url']."',conection_file='".$data['conection_file']."',firms='".$data['firms']."',attached_files='".$data['attached_files']."',authentication_method='".$data['authentication_method']."',description='".$data['description']."' WHERE id='".$data['id']."' ";

        $bd->consultar($query);

        return "ok";
    }

    static public function deleteApp($tabla,$data){

        $bd = new Conexion();
        $bd->conectar();

        $query = "DELETE FROM $tabla WHERE id='".$data['id']."' ";

        $bd->consultar($query);

        return "ok";
    }
}
?>