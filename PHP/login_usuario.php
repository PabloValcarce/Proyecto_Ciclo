<?php
include "./config.php";
session_start();

if(isset($_POST["email_ini"])){
    $email=$_POST["email_ini"];
    $password = $_POST["password_ini"];

    $sql = mysqli_query($conn,"SELECT * FROM usuarios WHERE email='$email'AND pass= '$password'");
    
    if(mysqli_num_rows($sql) > 0){
        $row = mysqli_fetch_assoc($sql);
        $_SESSION['username'] = $row['username'];
        echo($_SESSION['username']);
        header("Location: ../index.php");
    }else{
        echo"<script>alert('La contraseña o el email son incorrectos');
                window.location='../registro.php'</script>";
    }
}
?>
