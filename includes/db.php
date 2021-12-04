<?php

//$con = mysqli_connect("localhost"  "root" "beavers_cousines");
$server = "localhost";
$username = "root";
$password = "";
$database = "beavers_cousines";


try {
    
    $connection = mysqli_connect($server, $username, $password, $database);
    
    if($connection) {

        // echo " Your connection was successful";
        
    }
}
catch(Exception $errormsg) {
    echo $errormsg->getMessage();
}

