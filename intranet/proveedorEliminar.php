
<?php

include("conexion.php");
$con=conectar();

$cod=$_GET['id'];

$sql="DELETE FROM proveedor  WHERE ruc='$cod'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: proveedorADMIN.php");
    }
?>

