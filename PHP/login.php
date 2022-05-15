<?php
    include "config.php";
    error_reporting(0);
    session_start();

    if(isset($_SESSION["username"])){
        header("Location: panel.php");
    }

    if(isset($_POST["submit"])){
        $username=$_POST["username"];
        $password=md5($_POST["password"]);
        if($password==$cpassword){
            $sql ="SELECT * FROM users WHERE 
            email='$email'";
            $result = mysqli_query($conn, $sql);
            if(!result -> num_rows >0){
                $sql ="INSERT INTO tienda_online
                (username, email,password)
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
                echo "<script> echo('El correo ya existe')<script>";
            }
        }else{
            echo "<script>alert('Las contraseñas no coinciden')</script>";
        }
    }
?>
<html>
    <head>
        <title>frigelu</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width"/>
        <script src="https://kit.fontawesome.com/ec26806206.js" crossorigin="anonymous"></script>
        <link rel="icon" type="image/png"  href="./Imagenes/Cabecera/icono1.jpg">
        <link href ="../CSS/Proyecto.css" rel="stylesheet" type="text/css" media ="screen"/>
        <link href ="../CSS/footer.css" rel="stylesheet" type="text/css" media ="screen"/>
    </head>
    <body>
        <header class="header">
            <nav class="nav">
                <a href="../index.php" class=" logo nav-link"><img src="../Imagenes/Cabecera/FRIGELU_Transparente_Grande.png"></a>
                <button class="nav-toggle">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <ul class="nav-menu nav-menu-visible">
                    <li class="nav-menu-item">
                        <a href="./index.html" class="nav-menu-link nav-link nav-menu-link_active">Inicio</a>
                    </li>
                    <li class="nav-menu-item">
                        <a href="" class="nav-menu-link nav-link">Productos</a>
                    </li>
                    <li class="nav-menu-item">
                        <a href="./galeria.html" class="nav-menu-link nav-link">Galeria</a>
                    </li>
                    <li class="nav-menu-item">
                        <a href="./informacion.html" class="nav-menu-link nav-link">Información</a>
                    </li>
                </ul>    
            </nav> 
        </header>
        <section>
            <form method="post" action="login.php">
                <h1>Registro</h1>
                <input type ="text" name="username"placeholder="Usuario"></br>
                <input type ="text" name="email"placeholder="Email"></br>
                <input type ="password" name="password"placeholder="*******"></br>
                <input type ="password" name="cpassword"placeholder="*******"></br>
                <input type="submit" value="Registrarme">
            </form>
        </section>
        <footer id="scroll_3">
            <div class="redes-sociales">
                <div class="redes-sociales-titulo">
                    <h1>REDES SOCIALES</h1>
                </div>
                <div class="redes-sociales-iconos">
                    <a href="https://www.instagram.com/frigelu/"><img alt="instagram" src="../Imagenes/Pie de pagina/intagram.png" height="50px"width="50px"/></a>
                    <a href="https://api.whatsapp.com/message/KZREJQQV6TTRK1"><img  alt="Whatsapp" src="../Imagenes/Pie de pagina/whatsapp.png"height="50px"width="50px"/></a>
                    <a href="https://twitter.com/Frigelu"><img src="../Imagenes/Pie de pagina/twitter.png"height="50px"width="50" alt="Twitter"/></a>
                    <a href="https://www.facebook.com/frigelu"><img src="../Imagenes/Pie de pagina/redsocial.png"height="50px"width="50px" alt="Facebook"/></a>
                </div>
            </div>
            <div class="footer-informacion">
                <div class="footer-informacion-contenido">FRIGELU ESPAÑA/EUROPA</div>
                <div class="footer-informacion-contenido">Avd Benigno Rivera 1</div>
                <div class="footer-informacion-contenido">Polg. Ind do Ceao</div>
                <div class="footer-informacion-contenido">27003 Lugo</div>
                <div class="footer-informacion-contenido"></div>
                <div class="footer-informacion-contenido">frigelu@frigelu.com</div>
            </div>
		</footer>      
    </body>
    <script src="JS/Proyecto.js"></script>
</html>