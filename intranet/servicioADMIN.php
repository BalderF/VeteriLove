<?php include 'sidebarADMIN.php' ?>
<?php
require("conexion.php");
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
                <h3 class="texth3">Nuevo Servicio</h3>

                <form action="servicioInsertar.php" method="POST">

                    <p class="text"> Codigo</p> <input type="text" class="form-control mb-3" name="codigo" placeholder="Codigo">
                    <p class="text"> Nombre</p> <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                    <p class="text"> Costo</p><input type="text" class="form-control mb-3" name="costo" placeholder="Costo">
                    <p class="text"> Servicio</p> <input type="text" class="form-control mb-3" name="servicio" placeholder="Servicio">
                    
                    <input type="submit" class="btn btn-primary">
                </form>
            </div>

            <div class="contanie" style="margin-top: 20px;">
                <table class="table">
                    <thead class="table-info table-striped">
                        <tr>
                        <th>Id</th>
                            <th>Codigo</th>
                            <th>Nombre</th>
                            <th>Costo</th>
                            <th>Servicio</th>
                            
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <tr class="text4">
                            <th data-label="Id"><?php echo $row['id'] ?></th>
                                <th data-label="Codigo"><?php echo $row['codigo'] ?></th>
                                <th data-label="Nombre"><?php echo $row['nombre'] ?></th>
                                <th data-label="Costo"><?php echo $row['costo'] ?></th>
                                <th data-label="Servicio"><?php echo $row['servicio'] ?></th>      
                                <th><a href="servicioActualizar.php?id=<?php echo $row['codigo'] ?>" class="btn btn-info">Editar</a></th>
                                <th><a href="servicioEliminar.php?id=<?php echo $row['codigo'] ?>" class="btn btn-danger">Eliminar</a></th>
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