<?php

include("conexion.php");
$con=conectar();

$cod=$_POST['codigo'];
$nombre=$_POST['nombre'];
$proveedor=$_POST['proveedor'];
$stock=$_POST['stock'];
$precio=$_POST['precio'];

$sql="UPDATE productos SET  nombre='$nombre',proveedor='$proveedor',stock='$stock' ,precio='$precio' WHERE codigo='$cod'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: productoADMIN.php");
    }
?>