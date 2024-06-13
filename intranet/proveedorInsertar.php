<?php
include("conexion.php");
$con=conectar();

$ruc=$_POST['ruc'];
$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];



$sql="INSERT INTO productos (`ruc`, `nombre`, `telefono`, `direccion`)  VALUES('$ruc','$nombre','$telefono','$direccion')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: proveedorADMIN.php");
    
}else {
}
?>