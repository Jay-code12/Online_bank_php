<?php

class Database{

    // private $host = "localhost";
    // private $user = "root";
    // private $password = "";
    // private $db_name = "jordan"; 

    private $host = "localhost";
    private $user = "luna4272_chucks";
    private $password = "luna4272_chucks";
    private $db_name = "luna4272_chucks"; 
    

    public $pdo;
    
    protected function connect(){
        
        $conn = "mysql:host=$this->host; dbname=$this->db_name";
        $pdo = new PDO($conn, $this->user, $this->password);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        if($pdo == true){
            return $pdo;
        }else{
            return "Database not connected";
        }
    }


}
