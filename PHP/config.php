<?php
    $server = "mysql.webcindario.com";
    $user = "frigelu";
    $pass = "Frigelu123.";
    $database = "frigelu";

    $conn  = mysqli_connect($server,$user,$pass,$database);
    if(!$conn){
        die("Conexión fallida");
    }
?>