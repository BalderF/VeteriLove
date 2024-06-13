<?php
include("conexion.php");
$con=conectar();

$cod=$_POST['codigo'];
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$pass=$_POST['pass'];
$rol=$_POST['rol'];


$sql="INSERT INTO usuarios (`codigo`, `nombre`, `correo`, `pass`, `rol`)  VALUES('$cod','$nombre','$correo','$pass','$rol')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: usuarios.php");
    
}else {
}
?>