<?php

include("conexion.php");
$con=conectar();

$codigo=$_POST['codigo'];
$nombre=$_POST['nombre'];
$costo=$_POST['costo'];
$servicio=$_POST['servicio'];


$sql="UPDATE servicio SET  nombre='$nombre',costo='$costo',servicio='$servicio' WHERE codigo='$codigo'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location:servicioADMIN.php");
    }
?>