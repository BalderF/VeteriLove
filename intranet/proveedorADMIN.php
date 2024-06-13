<?php include 'sidebarADMIN.php' ?>
<?php
require("conexion.php");
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
                <h3 class="texth3">Nueva Mascota/Servicio</h3>

                <form action="proveedorInsertar.php" method="POST">

                    <p class="text"> Codigo</p> <input type="text" class="form-control mb-3" name="ruc" placeholder="Codigo">
                    <p class="text"> Mascota</p> <input type="text" class="form-control mb-3" name="nombre" placeholder="Mascota">
                    <p class="text"> Servicio</p>
                    <select name="direccion" class="form-control mb-3">
                        <option value="Consulta"> Consulta</option>
                        <option value="Peluqueria" > Peluqueria</option>
                        <option value="Analisis" > Analisis</option>
                    </select>
                    <p class="text"> Costo</p> <input type="text" class="form-control mb-3" name="telefono" placeholder="Costo">
                    
                    <input type="submit" class="btn btn-primary">
                </form>
            </div>

            <div class="contanie" style="margin-top: 20px;">
                <table class="table">
                    <thead class="table-info table-striped">
                        <tr>
                        <th>Id</th>
                            <th>Codigo</th>
                            <th>Mascota</th>
                            <th>Servicio</th>
                            <th>Costo</th>
                            
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
                                <th data-label="Ruc"><?php echo $row['ruc'] ?></th>
                                <th data-label="Nombre"><?php echo $row['nombre'] ?></th>
                                <th data-label="Teléfono"><?php echo $row['direccion'] ?></th>
                                <th data-label="Dirección"><?php echo $row['telefono'] ?></th>      
                                <th><a href="proveedorActualizar.php?id=<?php echo $row['ruc'] ?>" class="btn btn-info">Editar</a></th>
                                <th><a href="proveedorEliminar.php?id=<?php echo $row['ruc'] ?>" class="btn btn-danger">Eliminar</a></th>
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