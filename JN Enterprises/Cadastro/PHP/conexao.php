<?php
    $server = "localhost";
    $user = "root";
    $senha = "";
    $dbName = "jnenterprises";
    
    $conn = mysqli_connect($server, $user, $senha, $dbName);
    
    if($conn){
        // echo"You are connected!";
    }
    else{
        // echo"Could not connect!";
    }
?>