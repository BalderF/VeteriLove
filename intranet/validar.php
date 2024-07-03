<?php
session_start();
$conexion=mysqli_connect("localhost","root","","veterinaria");

if(isset($_SESSION['rol'])){
    switch($_SESSION['rol']){
case "Administrador":
    header("location:indexAdmin.php");
    break;
    case "Usuario":
        header("location:indexUsuario.php");
        break;
        default;
    }
}
if(isset($_POST['nombre']) && isset($_POST['pass'])){
    $usuario=$_POST['nombre'];
    $contraseña=$_POST['pass'];
    $consulta="SELECT * FROM usuarios where nombre='$usuario' and pass='$contraseña'";
    $resultado=mysqli_query($conexion,$consulta);
    $filas=mysqli_fetch_array($resultado);
    if($filas==true){
  $rol=$filas[5];
  $_SESSION['rol']=$rol;
  switch($_SESSION['rol']){
    case "Administrador":
        $_SESSION['nombre']=$usuario;
        header("location:indexAdmin.php");
        break;
        case "Usuario":
            $_SESSION['nombre']=$usuario;
            header("location:indexUsuario.php");
            break;
            default;
        }

    }else{
        echo"DATOS INCORRECTOS";
        include("login.html");
       
       
    }
}