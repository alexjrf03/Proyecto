<?php 

class Conexion {

    public $host;
    public $port;
    public $dbname;
    public $user;
    public $password;
    public $conex;

/* Metodo Conection, el constructor una vez realizada la instancia, se ejecuta la funcion.  */

    public function __construct () {
        
        $this->host='localhost';
        $this->port='5432';        
        $this->dbname='SGIA';
        $this->user = 'postgres';
        $this->password='123456';

    } 

    public function conectar(){
        
        $datos = "host='$this->host' port='$this->port' dbname='$this->dbname' user='$this->user' password='$this->password'";

        $conexion = pg_connect($datos);

        $this->conex = $conexion;

        // Para probar si la conexion fue exitosa

        //if(!$this->conex){
          //  echo"Error";
        //}else{
          //  echo"Exitoso";
       // }
        
    }

    //para realizar consultas a la bd
    function consultar($sql)
    {
        $query = pg_query($sql);
        if (!$query) echo $sql;
            return $query;
    }
    //para mostrar los datos de la consulta de la bd
    function mostrar($consultar)
    {
        $mostrar = pg_fetch_assoc($consultar);
            return $mostrar;
    }

    //para destruir la conexion a la bd
    function __destruct()
    {
    pg_close($this->conex);
    }

}

$conexion = new Conexion();
$conexion->conectar();