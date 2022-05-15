<?php
include "./config.php";
session_start();
if(isset($_SESSION["username"])){
    header("Location: ../index.php");
};
    if(isset($_POST["username"])){
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = md5($_POST["password"]);
        $cpassword = md5($_POST["cpassword"]);
        if($password==$cpassword){
            $sql ="SELECT * FROM clientes WHERE 
            email='$email'";
            $result = mysqli_query($conn, $sql);
            if(!$result -> num_rows >0){
                $sql ="INSERT INTO clientes (username, email, password)
                VALUE ('$username','$email','$password')";
                $result = mysqli_query($conn,$sql);
                if($result){
                    echo "<script>alert ('Usuario registrado con exito')</script>";
                    $username="";
                    $email="";
                    $_POST["password"]="";
                    $_POST["cpassword"]="";
                }else{
                    echo"<script>alert('Hay un error')</script>";
                }
            }else{
                echo ("<script> alert('El correo ya existe')<script>");
            }
        }else{
            echo "<script>alert('Las contraseñas no coinciden')</script>";
        }
    }else{
    }
    
?>