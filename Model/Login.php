<?php 

require_once 'Conexion.php';

class Login {
    
    static public function ingresar($item, $value){
        
        if($item != null){

            $db = new Conexion();
            $db->conectar();
        
            $sql = "SELECT *FROM usuario WHERE $item = '$value'";
        
            $result = $db->consultar($sql);        
            $resp = $db->mostrar($result);
           
            return $resp;            
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
}