<?php include 'sidebarADMIN.php' ?>
<?php
include("conexion.php");
$con = conectar();

$sql = "SELECT *  FROM productos";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);
?>

<section class="home">
    <div class="alto">
        <h3> BIENVENIDO AL PANEL ADMINISTRATIVO</h2>
    </div>
    <div class="container mt-5" >
        <div class="row">

            <div class="col-md-4" style="margin: auto;">
                <h3 class="texth3">Nuevo Producto</h3>

                <form action="productoInsertar.php" method="POST">

                    <p class="text"> Codigo</p> <input type="text" class="form-control mb-3" name="codigo" placeholder="Codigo">
                    <p class="text"> Nombre</p> <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                    <p class="text"> Proveedor</p><input type="text" class="form-control mb-3" name="proveedor" placeholder="Proveedor">
                    <p class="text"> Stock</p> <input type="number" class="form-control mb-3" name="stock" placeholder="Stock">
                    <p class="text"> Precio</p> <input type="number" class="form-control mb-3" name="precio" placeholder="Precio">
                    <input type="submit" class="btn btn-primary">
                </form>
            </div>

            <div class="contanie" style="margin-top: 20px;">
                <table class="table">
                    <thead class="table-info table-striped">
                        <tr>
                            
                            <th>Codigo</th>
                            <th>Nombre</th>
                            <th>Proveedor</th>
                            <th>Cantidad</th>
                            <th>Precio</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <tr class="text4">
                              
                                <th data-label="Codigo"><?php echo $row['codigo'] ?></th>
                                <th data-label="Nombre"><?php echo $row['nombre'] ?></th>
                                <th data-label="Proveedor"><?php echo $row['proveedor'] ?></th>
                                <th data-label="Stock"><?php echo $row['stock'] ?></th>
                                <th data-label="Precio"><?php echo $row['precio'] ?></th>
                                <th><a href="productoActualizar.php?id=<?php echo $row['codigo'] ?>" class="btn btn-info">Editar</a></th>
                                <th><a href="productoEliminar.php?id=<?php echo $row['codigo'] ?>" class="btn btn-danger">Eliminar</a></th>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</section>