<?php include 'sidebarUSUARIO.php' ?>
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
                <h3 class="texth3">Productos</h3>
              
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