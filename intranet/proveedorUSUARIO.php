<?php include 'sidebarUSUARIO.php' ?>
<?php
include("conexion.php");
$con = conectar();

$sql = "SELECT *  FROM proveedor";
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
                <h3 class="texth3">Proveedores</h3>
            </div>

            <div class="contanie" style="margin-top: 20px;">
                <table class="table">
                    <thead class="table-info table-striped">
                        <tr>
                            <th>Ruc</th>
                            <th>Nombre</th>
                            <th>Teléfono</th>
                            <th>Dirección</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <tr class="text4">
                                <th data-label="Ruc"><?php echo $row['ruc'] ?></th>
                                <th data-label="Nombre"><?php echo $row['nombre'] ?></th>
                                <th data-label="Teléfono"><?php echo $row['telefono'] ?></th>
                                <th data-label="Dirección"><?php echo $row['direccion'] ?></th>      
                               
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