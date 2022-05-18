<?php
include "./config.php";
session_start();

if(isset($_SESSION["email"])){
    header("Location: ../index.php");
};
if(isset($_POST["email_ini"])){
    $email=$_POST["email_ini"];
    $password = $_POST["password_ini"];

    $sql = mysqli_query($conn,"SELECT * FROM clientes WHERE email='$email' AND pass= '$password'");

    if(mysqli_num_rows($sql) > 0){
        echo('entraste boludo');
        $row = mysqli_fetch_assoc($result);
        $_SESSION['email'] = $row['email'];
        header("Location: ../index.php");
    }else{
        echo"<script>alert('La contraseña o el email son incorrectos');
                window.location='../registro.php'</script>";
    }
}
?>
