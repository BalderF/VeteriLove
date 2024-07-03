<?php include 'sidebarUSUARIO.php' ?>
<?php
include("conexion.php");
$con = conectar();

$sql = "SELECT *  FROM clientes";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);
?>

<section class="home">
    <div class="alto">
        <h3> BIENVENIDO AL PANEL ADMINISTRATIVO</h2>
    </div>
    <div class="container mt-5" >
    <h3 class="texth3">Clientes</h3>
    <div class= "text-right">
                <a href="\Veterinaria\Reporte\PruebaH.php" target="_blank" class="btn btn-success"><i class="fas fa-file-pdf"></i>Generar Reportes</a>
            </div>
        <div class="row">
            <div class="contanie" style="margin-top: 20px;">
                <table class="table">
                    <thead class="table-info table-striped">
                        <tr>
                             <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Teléfono</th>
                            <th>Dirección</th>
                            

                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <tr class="text4">
                                <th data-label="id"><?php echo $row['id'] ?></th>
                                <th data-label="Nombre"><?php echo $row['nombre'] ?></th>
                                <th data-label="Apellidos"><?php echo $row['apellidos'] ?></th>
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