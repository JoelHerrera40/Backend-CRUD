<?php 

class Conexion {

    public function __construct(
        public string $engine = "mysql",
        public string $host   = "localhost",
        public string $dbName = "crudphp",
        public string $charset= "utf8",
        public string $user   = "root",
        public string $pass   = ""
    )
    {}

    protected function conexion(){

        try {
            
            $pdo = new PDO("$this->engine:host=$this->host;
                           dbname=$this->dbName;
                           charset=$this->charset;",
                           $this->user,
                           $this->pass);

                           return $pdo;

        } catch (PDOException $message) {
            echo $message->getMessage();
        }


    }



}
