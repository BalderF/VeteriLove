<?php
require_once("conexion.php");
$con = conectar();
if(empty($_POST['Iniciar'])){
    echo "Debe registrarse";
  }else{
  
   
echo "Buena";
  }


?>