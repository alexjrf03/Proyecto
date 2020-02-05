<?php 

class Conexion {

    public $host;
    public $port;
    public $db_name;
    public $user;
    public $password;
    public $conex;

/* Metodo Conection, el constructor una vez realizada la instancia, se ejecuta la funcion.  */

    public function __construct () {
        
        $this->host='localhost';
        $this->port='5432';        
        $this->db_name='SGIA';
        $this->user = 'alex';
        $this->password='123456';

    } 

    public function conectar(){
        
       // $datos = "host=".$this->host." dbname=".$this->db_name." user=".$this->user." password=".$this->password." ";
        
        $conexion = pg_connect("host=localhost dbname=SGIA user=alex password=123456") or die('No se ha podido conectar: ' . pg_last_error());

        $this->conex = $conexion;

        if(!$this->conex){
            echo"Error";
        }else{
            echo"Exitoso";
        }
        
    }

    // //para destruir la conexion a la bd
    // function __destruct()
    // {
    //     pg_close($this->conex);
    // }

}

$conexion = new Conexion();
$conexion->conectar();