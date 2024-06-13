<?php include 'sidebarADMIN.php' ?>
<?php
include("conexion.php");
$con = conectar();

$id = $_GET['id'];

$sql = "SELECT * FROM usuarios WHERE codigo='$id'";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);
?>
<section class="home">
    <div class="container mt-5">
        <h3 class="texth3" style="text-align: center;">ACTUALIZAR USUARIOS</h3>

        <form action="usuariosUpdate.php" style="width: 50%; margin: auto;" method="POST">

            <input type="hidden" name="codigo" value="<?php echo $row['codigo']  ?>">

            <p class="text"> Nombre</p><input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre']  ?>">
            <p class="text"> Correo</p><input type="email" class="form-control mb-3" name="correo" placeholder="correo" value="<?php echo $row['correo']  ?>">
            <p class="text"> Password</p><input type="password" class="form-control mb-3" name="pass" placeholder="pass" value="<?php echo $row['pass']  ?>">
            <p class="text"> Rol</p>
            <select name="rol" class="form-control mb-3" value="<?php echo $row['rol']  ?>">
                <option value="Administrador"> Administrador</option>
                <option value="Usuario">Usuario</option>

            </select>
            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
        </form>

    </div>
</section>