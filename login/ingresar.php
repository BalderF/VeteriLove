<header>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</header>
<?php
require_once("conexion.php");
$con = conectar();
if(!empty($_POST['Inicio'])){

    if(empty($_POST['nombre']) || empty($_POST['contrasena'])){
  
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
         
        $name =$_POST['nombre'];
        $contrasena=$_POST['contrasena'];
        
         $resultado = mysqli_query($con,"SELECT nombre,password FROM clientes where nombre='$name'and password ='$contrasena'");
         $filas = mysqli_fetch_row($resultado);

        
        if ($filas==false) {
           echo  '<script>
           Swal.fire({
           position: "top-end",
            icon: "error",
            title: "Usuario no registrado",
            showConfirmButton: true,
            timer: 3000
          })
            </script>';
           include("index.html");
            
        }else{
          $msg='ok';
            echo  '<script>
           Swal.fire({
           position: "top-end",
            icon: "success",
            title: "Ingreso satisfactorio",
            showConfirmButton: true,
            timer: 3000
          })
            </script>';
           header("location:http://localhost/web_restaurant_italiano-main/index.html");

        }
   
        
      
    }

}else{
    echo'Campos Vacios';
}


?>