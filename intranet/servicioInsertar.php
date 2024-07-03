<?php
include("conexion.php");
$con=conectar();

$codigo=$_POST['codigo'];
$nombre=$_POST['nombre'];
$costo=$_POST['costo'];
$servicio=$_POST['servicio'];



$sql="INSERT INTO servicio (`codigo`, `nombre`, `costo`, `servicio`)  VALUES('$codigo','$nombre','$costo','$servicio')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location:servicioADMIN.php");
    
}else {
}
?>