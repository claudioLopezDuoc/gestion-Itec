<header class="site-header">
    <div class="container-fluid">

        <a href="..\Home\" class="site-logo">
            <!--Redirecciona home-->
            <img class="hidden-md-down" src="../../public/img/logo-itec.png" alt="">
            <!--Logo empresa-->
            <img class="hidden-lg-up" src="../../public/img/logo-itec-mob.png" alt="">
            <!--Logo empresa mobile-->
        </a>

        <!--<button id="show-hide-sidebar-toggle" class="show-hide-sidebar">
            <span>toggle menu</span>
        </button>-->

        <button class="hamburger hamburger--htla">
            <span>menu</span>
            <!--Menu navegacion-->
        </button>

        <div class="site-header-content ">
            <div class="site-header-content-in">
                <div class="site-header-shown">
                    <div class="dropdown user-menu">
                        <button class="dropdown-toggle" id="dd-user-menu" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="../../public/img/<?php echo $_SESSION["rol_id"] ?>.png" alt="">
                            <!--Icono usuario rol-->
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dd-user-menu">
                            <a class="dropdown-item" href="../MntPerfil/"><span class="font-icon glyphicon glyphicon-user"></span>Perfil</a>
                            <!--Perfil-->
                            <a class="dropdown-item" href="#"><span class="font-icon glyphicon glyphicon-question-sign"></span>Ayuda</a>
                            <!--Ayuda-->
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../Logout/logout.php"><span class="font-icon glyphicon glyphicon-log-out"></span>Cerrar Sesion</a>
                            <!--Cerrar sesion-->
                        </div>
                    </div>
                </div>

                <div class="mobile-menu-right-overlay"></div>

                <input type="hidden" id="user_idx" value="<?php echo $_SESSION["usu_id"] ?>"><!-- ID del Usuario-->
                <input type="hidden" id="rol_idx" value="<?php echo $_SESSION["rol_id"] ?>"><!-- Rol del Usuario-->

                <div class="dropdown dropdown-typical">
                    <a href="..\MntPerfil\" class="dropdown-toggle no-arr">
                        <span class="font-icon font-icon-user"></span>
                        <span class="activity-line-item-user-status">
                            <?php
                            if ($_SESSION['rol_id'] == 1) {
                                echo 'Cliente';
                            }elseif ($_SESSION['rol_id'] == 2){
                                echo 'Soporte';
                            } else {
                                echo 'Administrador';
                            }
                            ?>
                        </span>
                        <span class="lblcontactonomx"><?php echo $_SESSION["usu_nom"] ?> <?php echo $_SESSION["usu_ape"] ?></span>
                        
                    </a>
                </div>

            </div>
        </div>
    </div>
</header>