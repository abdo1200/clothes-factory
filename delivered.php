<?php

include_once "db/DatabaseConnect.php";
include_once "classes/admin.php";


        $admin= new admin(); 
        $id=$_GET['id'];
        $admin->delivered($id);
        
?>
