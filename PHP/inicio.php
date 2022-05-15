<?php
include "./config.php";
session_start();
error_reporting(0);

if(isset($_SESSION["username"])){
    header("Location: ../index.php");
}

if(isset($_POST["username"])){
    $email=$_POST["email"];
    $password = md5($_POST["password"]);
    $sql = "SELECT * FROM tienda_online WHERE email='$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    if($result ->num_rows > 0){
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: ../index.php");
    }else{
        echo"<script>alert('La contraseña o el email son incorrectos')</script>";
    }
}
?>
