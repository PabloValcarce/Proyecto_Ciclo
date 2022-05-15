<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $database = "tienda_online";

    $conn  = mysqli_conNect($server,$user,$pass,$database);
    if(!$conn){
        die("Conexión fallida");
    }
?>