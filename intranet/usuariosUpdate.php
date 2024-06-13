<?php

include("conexion.php");
$con=conectar();

$cod=$_POST['codigo'];
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$pass=$_POST['pass'];
$rol=$_POST['rol'];


$sql="UPDATE usuarios SET  nombre='$nombre',correo='$correo',pass='$pass' ,rol='$rol' WHERE codigo='$cod'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: usuarios.php");
    }
?>