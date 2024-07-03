<?php include 'sidebarADMIN.php' ?>
<?php
include("conexion.php");
$con = conectar();

$id = $_GET['id'];

$sql = "SELECT * FROM servicio WHERE codigo='$id'";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);
?>
<section class="home">
    <div class="container mt-5">
        <h3 class="texth3" style="text-align: center;">ACTUALIZAR SERVICIO</h3>

        <form action="servicioUpdate.php" style="width: 50%; margin: auto;" method="POST">

            <input type="hidden" name="codigo" value="<?php echo $row['codigo']  ?>">

            <p class="text"> Nombre</p><input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre']  ?>">
            <p class="text"> Costo</p><input type="text" class="form-control mb-3" name="costo" placeholder="Costo" value="<?php echo $row['costo']  ?>">
            <p class="text"> Servicio</p><input type="text" class="form-control mb-3" name="servicio" placeholder="Servicio" value="<?php echo $row['servicio']  ?>">
            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
        </form>

    </div>
</section>