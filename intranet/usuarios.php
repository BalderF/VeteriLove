<?php include 'sidebarADMIN.php' ?>
<?php
include("conexion.php");
$con = conectar();

$sql = "SELECT *  FROM usuarios";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);
?>

<section class="home">
    <div class="alto">
        <h3> BIENVENIDO AL PANEL ADMINISTRATIVO</h2>
    </div>
    <div class="container mt-5">
        <div class="row">

            <div class="col-md-4" style="margin: auto;">
                <h3 class="texth3">Nuevo Usuario</h3>

                <form action="usuariosInsertar.php" method="POST">

                    <p class="text"> Codigo</p> <input type="text" class="form-control mb-3" name="codigo" placeholder="Codigo">
                    <p class="text"> Nombre</p> <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                    <p class="text"> Correo</p><input type="email" class="form-control mb-3" name="correo" placeholder="Correo">
                    <p class="text"> Password</p> <input type="password" class="form-control mb-3" name="pass" placeholder="Password">
                    <p class="text"> Rol</p> 
                    <select name="rol" class="form-control mb-3">
                        <option value="Administrador"> Administrador</option>
                        <option value="Usuario" >Usuario</option> 
                    </select>
                    <input type="submit" class="btn btn-primary">
                </form>
            </div>

            <div class="contanie" style="margin-top: 20px;">
                <table class="table">
                    <thead class="table-info table-striped">
                        <tr>
                            <th>Codigo</th>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Rol</th>
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
                                <th data-label="Correo"><?php echo $row['correo'] ?></th>
                               
                                <th data-label="Rol"><?php echo $row['rol'] ?></th>
                                <th><a href="usuariosActualizar.php?id=<?php echo $row['codigo'] ?>" class="btn btn-info">Editar</a></th>
                                <th><a href="usuariosEliminar.php?id=<?php echo $row['codigo'] ?>" class="btn btn-danger">Eliminar</a></th>
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