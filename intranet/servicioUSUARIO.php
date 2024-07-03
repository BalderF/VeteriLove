<?php include 'sidebarUSUARIO.php' ?>
<?php
include("conexion.php");
$con = conectar();

$sql = "SELECT *  FROM servicio";
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
                <h3 class="texth3">Servicios</h3>
            </div>

            <div class="contanie" style="margin-top: 20px;">
                <table class="table">
                    <thead class="table-info table-striped">
                        <tr>
                            <th>Codigo</th>
                            <th>Nombre</th>
                            <th>Costo</th>
                            <th>Servicio</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <tr class="text4">
                                <th data-label="Codigo"><?php echo $row['codigo'] ?></th>
                                <th data-label="Nombre"><?php echo $row['nombre'] ?></th>
                                <th data-label="Costo"><?php echo $row['costo'] ?></th>
                                <th data-label="Servicio"><?php echo $row['servicio'] ?></th>      
                               
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