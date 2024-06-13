
<?php

include("conexion.php");
$con=conectar();

$cod=$_GET['id'];

$sql="DELETE FROM productos  WHERE codigo='$cod'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: platilloADMIN.php");
    }
?>

