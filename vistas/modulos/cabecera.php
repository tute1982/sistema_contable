<header class="main-header">
    <!-- LOGOTIPO --> 
    <a href="inicio" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">
            <img src="vistas/img/plantilla/icono-blanco.png" class="img-responsive" style="padding: 10px">
        </span>
        <!-- logo normal -->
        <span class="logo-lg">
            <img src="vistas/img/plantilla/logo-blanco-lineal.png" class="img-responsive" style="padding: 10px 0px">
        </span>
    </a>
    <!-- Barra de Navegacion --> 
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <!-- Perfil de Usuario --> 
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <?php
                        if($_SESSION["foto"] != ""){
                            echo '<img src="'.$_SESSION['foto'].'" class="user-image" alt="User Image">';
                        } else {
                            echo '<img src="vistas/img/usuarios/default/anonymous.png" class="user-image" alt="User Image">';
                        }
                        ?>
                        <span class="hidden-xs"><?php echo $_SESSION["nombre"]; ?></span>
                    </a>
                    <!-- Dropdown-Toogle -->
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <?php
                            if($_SESSION["foto"] != ""){
                                echo '<img src="'.$_SESSION['foto'].'" class="img-circle" alt="User Image">';
                            } else {
                                echo '<img src="vistas/img/usuarios/default/anonymous.png" class="img-circle" alt="User Image">';
                            }
                            ?>
                            <!-- <img src="../../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"> -->

                            <p>
                            <?php echo $_SESSION["nombre"]; ?>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <li class="user-body">
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <!-- <div class="pull-left">
                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                            </div> -->
                            <div class="pull-right">
                            <a href="#" class="btn btn-default btn-flat">Salir</a>
                            </div>
                        </li>
                    </ul>
                    <!-- <ul class="dropdown-menu">
                        <li class="user-body">
                            <div class="pull-right">
                              <a href="salir" class="btn btn-default btn-flat">Salir</a>
                            </div>
                        </li>
                    </ul> -->
                </li>
            </ul>
        </div>


    </nav>

</header>