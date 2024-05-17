<header>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</header>
<?php

require_once("conexion.php");
$con = conectar();

if(!empty($_POST['registro'])){
    if(empty($_POST['nombre']) || empty($_POST['apellido']) || empty($_POST['contrasena']) || empty($_POST['telefono']) || empty($_POST['direccion'])){
  
        echo     '<script>
        Swal.fire({
        position: "top-end",
         icon: "error",
         title: "Campos Vacios",
         showConfirmButton: true,
         timer: 3000
       })
         </script>';
        include("index.html");
    }
    else{
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $contrasena=$_POST['contrasena'];
        $telefono=$_POST['telefono'];
        $direccion=$_POST['direccion'];
        $sql="insert into clientes(nombre,apellidos,password,telefono,direccion) values
        ('$nombre','$apellido','$contrasena','$telefono','$direccion')";
        $query=mysqli_query($con,$sql);
        if($sql==1){
            echo     '<script>
            Swal.fire({
            position: "top-end",
             icon: "error",
             title: "Error al registrar",
             showConfirmButton: true,
             timer: 3000
           })
             </script>';
            include("index.html");
        }else{
            echo     '<script>
            Swal.fire({
            position: "top-end",
             icon: "success",
             title: "Registrado Exitosamente",
             showConfirmButton: true,
             timer: 3000
           })
             </script>';
            include("index.html");

        }
      
    }
}






?>