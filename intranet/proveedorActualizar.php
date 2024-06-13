<?php include 'sidebarADMIN.php' ?>
<?php
include("conexion.php");
$con = conectar();

$id = $_GET['id'];

$sql = "SELECT * FROM proveedor WHERE ruc='$id'";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);
?>
<section class="home">
    <div class="container mt-5">
        <h3 class="texth3" style="text-align: center;">ACTUALIZAR SERVICIO</h3>

        <form action="proveedorUpdate.php" style="width: 50%; margin: auto;" method="POST">

            <input type="hidden" name="ruc" value="<?php echo $row['ruc']  ?>">

            <p class="text"> Nombre</p><input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre']  ?>">
            <p class="text"> Servicio</p><input type="text" class="form-control mb-3" name="telefono" placeholder="Teléfono" value="<?php echo $row['telefono']  ?>">
            <p class="text"> Costo</p><input type="text" class="form-control mb-3" name="direccion" placeholder="Dirección" value="<?php echo $row['direccion']  ?>">
            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
        </form>

    </div>
</section>