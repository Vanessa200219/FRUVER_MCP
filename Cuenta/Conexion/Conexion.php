<?php 
class Conexion{    
    private $dsn='mysql:host=localhost;dbname=database_fruvermcp';
    private $usr='root';
    private $psw='';  
    private $cnx;


public function __construct(){
    try {
        $this->cnx=new PDO($this->dsn,$this->usr,$this->psw); 
    } catch (PDOException $th) {
        echo $th->getMessage();
    }
}

public function desconectar(){
    $this->cnx=null;
}
public function getCnx(){
    return $this->cnx;
}
public function setCnx($cnx){
    $this->cnx=$cnx;
}
}

?>