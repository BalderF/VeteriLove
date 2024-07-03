<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="CSS/sidebar.css">

    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/tabla.css">
    <!--<title>Dashboard Sidebar Menu</title>-->
</head>

<body>
    <nav class="sideba close">
        <header>
            <div class="image-text">
                <span class="image">
                <img src="IMG-CRUD/Logo-intranet.png" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name">CLINICA</span>
                    <span class="profession">VETERILOVE</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menus-bar">
            <div class="menus">



                <ul class="menus-links">
                    <li class="navs-link">
                        <a href="indexAdmin.php">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="text nav-text">Inicio</span>
                        </a>
                    </li>

                    <li class="navs-link">
                        <a href="productoADMIN.php">
                            <i class='bx bx-bowl-rice icon'></i>
                            <span class="text nav-text">Productos</span>
                        </a>
                        <span class="tooltip">Productos</span>
                    </li>

                    <li class="navs-link">
                        <a href="servicioADMIN.php">
                            <i class='bx bx-box icon'></i>
                            <span class="text nav-text">Servicios</span>
                        </a>
                        <span class="tooltip">Servicios</span>
                    </li>

                    <li class="navs-link">
                        <a href="usuarios.php">
                            <i class='bx bx-user-check icon'></i>
                            <span class="text nav-text">Usuarios</span>
                        </a>
                        <span class="tooltip">Usuarios</span>
                    </li>

                    <li class="navs-link">
                        <a href="clientesADMIN.php">
                            <i class='bx bx-heart icon'></i>
                            <span class="text nav-text">Clientes</span>
                        </a>
                        <span class="tooltip">Clientes</span>
                    </li>
                    <!--  
                    <li class="navs-link">
                        <a href="#">
                            <i class='bx bx-wallet icon' ></i>
                            <span class="text nav-text">Ventas</span>
                        </a>
                        <span class="tooltip">Ventas</span>
                    </li>-->

                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="loginCerrar.php">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Cerrar Sesión</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Modo Oscuro</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>

            </div>
        </div>

    </nav>



    <script>
        const body = document.querySelector('body'),
            sidebar = body.querySelector('nav'),
            toggle = body.querySelector(".toggle"),

            modeSwitch = body.querySelector(".toggle-switch"),
            modeText = body.querySelector(".mode-text");


        toggle.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        })



        modeSwitch.addEventListener("click", () => {
            body.classList.toggle("dark");

            if (body.classList.contains("dark")) {
                modeText.innerText = "Light mode";
            } else {
                modeText.innerText = "Dark mode";

            }
        });
    </script>