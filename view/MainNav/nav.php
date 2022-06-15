<?php
    if ($_SESSION["rol_id"]==1){ //Sesion rol 1 - usuario
        ?>
            <nav class="side-menu">
                <ul class="side-menu-list">
                    <li class="blue-dirty">
                        <a href="..\Home\">
                            <span class="glyphicon glyphicon-home"></span>
                            <span class="lbl">Inicio</span>
                        </a>
                    </li>

                    <li class="blue-dirty">
                        <a href="..\NuevoTicket\">
                            <span class="glyphicon glyphicon-plus-sign"></span>
                            <span class="lbl">Ingresar Ticket</span>
                        </a>
                    </li>

                    <li class="blue-dirty">
                        <a href="..\ConsultarTicket\">
                            <span class="glyphicon glyphicon-folder-open"></span>
                            <span class="lbl">Historial de Tickets</span>
                        </a>
                    </li>
                </ul>
            </nav>
        <?php
    }elseif($_SESSION["rol_id"]==2){
        ?>
            <nav class="side-menu">
                <ul class="side-menu-list">
                    <li class="blue-dirty">
                        <a href="..\Home\">
                            <span class="glyphicon glyphicon-home"></span>
                            <span class="lbl">Inicio</span>
                        </a>
                    </li>

                    <li class="blue-dirty">
                        <a href="..\NuevoTicket\">
                            <span class="glyphicon glyphicon-plus-sign"></span>
                            <span class="lbl">Ingresar Ticket</span>
                        </a>
                    </li>
                    <li class="blue-dirty">
                        <a href="..\ConsultarTicket\">
                            <span class="glyphicon glyphicon-folder-open"></span>
                            <span class="lbl">Historial de Tickets</span>
                        </a>
                    </li>
                </ul>
            </nav>
        <?php
    }
    else{ //Sesion rol 3 - Administrador
        ?>
            <nav class="side-menu">
                <ul class="side-menu-list">
                    <li class="blue-dirty">
                        <a href="..\Home\">
                            <span class="glyphicon glyphicon-home"></span>
                            <span class="lbl">Inicio</span>
                        </a>
                    </li>

                    <li class="blue-dirty">
                        <a href="..\MntUsuario\">
                            <span class="glyphicon glyphicon-wrench"></span>
                            <span class="lbl">Gestión de Usuarios</span>
                        </a>
                    </li>
                    <li class="blue-dirty">
                        <a href="..\ConsultarTicket\">
                            <span class="glyphicon glyphicon-folder-open"></span>
                            <span class="lbl">Historial de Tickets</span>
                        </a>
                    </li>
                </ul>
            </nav>
        <?php
    }
?>