<?php 

include_once("../core/model.php");


class User extends Model{


    public function __construct(

        public int    $id          =0,
        public string $name        ="",
        public string $lastname    =""
    )
    {
        parent::__construct("users");
    }
    public function Create(){

        $this->Insert("id,name,lastname","?,?,?",[

                    $this->id,
                    $this->name,
                    $this->lastname
                    
        ]);


    }

    public function Update(){

        $this->Edit("name=?,lastname=?",[

                $this->name,
                $this->lastname,
                $this->id
        ]);

    }

    public function Delete(){

        $this->Destroy($this->id);

    }


}




?>