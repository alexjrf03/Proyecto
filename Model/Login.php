<?php 

require_once 'Conexion.php';

class Login {
    
    static public function ingresar($item, $value){
        
        if($item != null){

            $db = new Conexion();
            $db->conectar();
        
            $sql = "SELECT * FROM usuario WHERE $item = '$value'";
        
            $result = $db->consultar($sql);        
            $resp = $db->mostrar($result);
           
            return $resp;            
        } else {

            $db = new Conexion();
            $db->conectar();

            $sql = "SELECT * FROM usuario";
            $result = $db->consultar($sql);
            $ar = array();

            $total = pg_num_rows($result);

            do {

                $usuario = $db->mostrar($result);
                array_push($ar,$usuario);
                $total--;

            } while ($total>0);

            return $ar;
        }
	}
    
    static public function actualizar($item1, $value1, $item2, $value2){
        
        $db = new Conexion();
        $db->conectar();
     
        $sql = "UPDATE usuario SET $item1 = '$value1' WHERE $item2 = '$value2'";
        
        $result = $db->consultar($sql);
        $resp = $db->mostrar($result);
           
        return "ok";
        
    }

    static public function createUser($tabla, $data)
    {
        $db = new Conexion();
        $db->conectar();

        $sql = "INSERT INTO $tabla (correo, password, ultima_conexion, estatus, admin) VALUES ('".$data['correo']."', '".md5($data['pass'])."','".$data['ultima_conexion']."', true, false ) ";

        $db->consultar($sql);
        return "ok";
    }

    static public function updateUser($tabla,$data){

        $bd=new Conexion();
        $bd->conectar();

        $query="UPDATE $tabla SET correo='".$data['correom']."' ,password='".md5($data['pass'])."',estatus='".$data['estatus']."' WHERE correo='".$data['correo']."' ";

        $bd->consultar($query);

        return "ok";
    }

    static public function deleteUser($tabla,$data){

        $bd = new Conexion();
        $bd->conectar();

        $query = "DELETE FROM $tabla WHERE correo='".$data['correo']."' ";

        $bd->consultar($query);
        return "ok";
    }

}