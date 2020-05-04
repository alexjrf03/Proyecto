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

        $sql = "INSERT INTO $tabla (
                        'nombre','usuario_final','url','uso','archivo_conexion','manejo_firma',
                        'archivo_adjunto','metodo_autenticacion','descripcion_app','date'
                    ) 
                    VALUES (
                        '".$data['nombre']."' ,'".$data['usuario_final']."', '".$data['uso']."','".$data['url']."', '".$data['archivo_conexion']."',
                        '".$data['manejo_firma']."','".$data['archivo_adjunto']."','".$data['metodo_autenticacion']."','".$data['descripcion_app']."','".$data['date']."'
                    )";

        $bd->consultar($sql);

        $sql_id = "SELECT MAX(app_id) FROM $tabla";

        $query_id = $bd->consultar($sql_id);
        $app =  $bd->mostrar($query_id);

		return $app;      

    }

    static public function updateApp($tabla,$data){

        $bd=new Conexion();
        $bd->conectar();

        $query="UPDATE $tabla SET nombre='".$data['nombre']."' ,usuario_final='".$data['usuario_final']."',uso='".$data['uso']."',url='".$data['url']."',archivo_conexion='".$data['archivo_conexion']."',manejo_firma='".$data['manejo_firma']."',archivo_adjunto='".$data['archivo_adjunto']."',metodo_autenticacion='".$data['metodo_autenticacion']."',descripcion_app='".$data['descripcion_app']."' 
                            WHERE app_id='".$data['app_id']."' ";

        $bd->consultar($query);

        return "ok";
    }

    static public function deleteApp($tabla,$data){

        $bd = new Conexion();
        $bd->conectar();

        $query = "DELETE FROM $tabla WHERE app_id='".$data['id']."' ";

        $bd->consultar($query);

        return "ok";
    }
}
?>