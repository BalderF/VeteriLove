<?php include 'sidebarADMIN.php' ?>
<?php
include("conexion.php");
$con = conectar();

$id = $_GET['id'];

$sql = "SELECT * FROM productos WHERE codigo='$id'";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);
?>
<section class="home">
    <div class="container mt-5">
        <h3  class="texth3" style="text-align: center;">ACTUALIZAR PRODUCTO</h3>

        <form action="productoUpdate.php"  style="width: 50%; margin: auto;"method="POST">

            <input type="hidden" name="codigo" value="<?php echo $row['codigo']  ?>">

            <p  class="text"> Nombre</p><input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre']  ?>">
            <p class="text"> Proveedor</p><input type="text" class="form-control mb-3" name="proveedor" placeholder="Proveedor" value="<?php echo $row['proveedor']  ?>">
            <p class="text"> Stock</p><input type="number" class="form-control mb-3" name="stock" placeholder="Stock" value="<?php echo $row['stock']  ?>">
            <p class="text"> Precio</p><input type="number" class="form-control mb-3" name="precio" placeholder="Precio" value="<?php echo $row['precio']  ?>">
            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
        </form>

    </div>
</section>