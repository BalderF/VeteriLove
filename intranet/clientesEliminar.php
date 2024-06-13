<?php

include("conexion.php");
$con=conectar();

$cod=$_GET['id'];

$sql="DELETE FROM clientes  WHERE id='$cod'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: clientesADMIN.php");
    }
?>

