<?php 

include_once("../core/db.php");  

class Model extends Conexion{

    private $pdo;

    public function __construct(
        public string $table
    )
    {
        parent::__construct();
        $this->pdo = $this->conexion();
    }


    public function Get_All(){

        try {

                $stm= $this->pdo->prepare("SELECT * FROM $this->table");
                $stm->execute();
                return $stm->fetchAll(PDO::FETCH_OBJ);
  
        } catch (PDOException $message) {
            echo $message->getMessage();
        }

    }
    public function Get_One(int $id){

        try {

                $stm= $this->pdo->prepare("SELECT * FROM $this->table WHERE id=?");
                $stm->execute([$id]);
                return $stm->fetchAll(PDO::FETCH_OBJ);
  
        } catch (PDOException $message) {
            echo $message->getMessage();
        }

    }
    public function Destroy(int $id){

        try {

                $stm= $this->pdo->prepare("DELETE FROM $this->table WHERE id=?");
                $stm->execute([$id]);
  
        } catch (PDOException $message) {
            echo $message->getMessage();
        }

    }
    public function Insert(string $columns, string $marcadores, array $data ){
       try {
        $stm= $this->pdo->prepare("INSERT INTO $this->table ($columns) VALUE ($marcadores)");
            $stm->execute($data);
        } catch (PDOException $message) {
            echo $message->getMessage();
        }
    }
    public function Edit(string $columns, array $data ){
        try {
         $stm= $this->pdo->prepare("UPDATE $this->table SET $columns WHERE id=?");
             $stm->execute($data);
         } catch (PDOException $message) {
             echo $message->getMessage();
         }
     }
 


}