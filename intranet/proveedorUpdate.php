<?php

include("conexion.php");
$con=conectar();

$ruc=$_POST['ruc'];
$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];


$sql="UPDATE proveedor SET  nombre='$nombre',telefono='$telefono',direccion='$direccion' WHERE ruc='$ruc'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: proveedorADMIN.php");
    }
?>