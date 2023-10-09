<?php 

include_once("../model/user.php");


$new_User = new User(
        0,
        "Jhonatan",
        "Almanzar"
        
);

//Create
// $new_User->Create();

//UPDATE
// $new_User->Update()

// DELETE
// $new_User->Delete();

//JSON PREWIEWER
header("content-type:application/json");

//GET-ALL
// echo json_encode($new_User->Get_All());

//GET-ONE
// echo json_encode($new_User->Get_One(1));


?>