<?php 
class db {
    public $conn;
    protected  $server_name ="localhost";
    protected $user_name ="root";
    protected $pass ="Dinh@2001";
    protected $db_name="injection";
    


    function __construct(){
        $this -> conn = new mysqli($this->server_name,$this->user_name,$this->pass,$this->db_name);
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        mysqli_query( $this -> conn,"set names 'utf8'");

    }
    
  
}
?>