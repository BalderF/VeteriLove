
<?php

include("conexion.php");
$con=conectar();

$cod=$_GET['id'];

$sql="DELETE FROM servicio  WHERE codigo='$cod'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: servicioADMIN.php");
    }
?>

