
<?php
include("conexion.php");
$con=conectar();

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$contrasena=$_POST['contrasena'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];



$sql="INSERT INTO cliente (`nombre`,`apellido`,`contraseña`,`telefono`, `direccion`)  VALUES('$nombre','$apellido','$contrasena','$telefono','$direccion')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.html");
 
    
}else {
    echo("No hay");
}
?>