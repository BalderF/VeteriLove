<?php
include("conexion.php");
$con=conectar();

$cod=$_POST['codigo'];
$nombre=$_POST['nombre'];
$proveedor=$_POST['proveedor'];
$stock=$_POST['stock'];
$precio=$_POST['precio'];


$sql="INSERT INTO productos (`codigo`, `nombre`, `proveedor`, `stock`, `precio`)  VALUES('$cod','$nombre','$proveedor','$stock','$precio')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: productoADMIN.php");
    
}else {
}
?>