
<?php

include("conexion.php");
$con=conectar();

$cod=$_GET['id'];

$sql="DELETE FROM usuarios  WHERE codigo='$cod'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: usuarios.php");
    }
?>

