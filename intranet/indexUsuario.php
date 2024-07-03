<?php 
session_start();
$usuario=$_SESSION['nombre'];

?>
<?php include 'sidebarUSUARIO.php' ?>

<section class="home">
<div class="alto">
        <h3> BIENVENIDO AL PANEL ADMINISTRATIVO</h2>
    </div>
    <div  style="height: 150px;"> </div>
    <div style="width: 80% ; height: 10%; text-align: center; margin: auto;">
    <?php echo "<h1> $usuario ACCEDISTE COMO  USUARIO </h1>" ?>    
    </div>
<div style="width: 50% ; text-align: center; margin: auto;">
    <img src="IMG-CRUD/logo-admin2.png">
</div>


</section>