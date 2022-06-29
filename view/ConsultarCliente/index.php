<?php
  require_once("../../config/conexion.php"); 
  if(isset($_SESSION["usu_id"])){ 
?>
<!DOCTYPE html>
<html>
<?php require_once("../MainHead/head.php");?>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<title>Itec - Ticket por usuarios</title>
</head>

<body class="with-side-menu">

    <?php require_once("../MainHeader/header.php");?>

    <div class="mobile-menu-left-overlay"></div>

    <?php require_once("../MainNav/nav.php");?>

    <!-- Contenido -->
    <div class="page-content">
        <div class="modal-body">
            <input type="hidden" id="tick_id" name="tick_id">
            <div class="form-group">
                <label class="form-label" for="usu_asig">Seleccionar Cliente</label>
                <select class="select2" id="usu_asig" name="usu_asig" data-placeholder="Seleccionar" required>
                </select>
            </div>
            <button type="submit" id="btnenviar" class="btn btn-rounded">Consultar</button>
        </div>
        <div class="container-fluid">
        <h3 class="text-center">Detalle de Cliente</h3>
            <div class="row">
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-sm-4">
                            <article class="statistic-box green">
                                <div>
                                    <div class="number" id="lbltotal"></div>
                                    <div class="caption">
                                        <div>Total de Tickets</div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-sm-4">
                            <article class="statistic-box yellow">
                                <div>
                                    <div class="number" id="lbltotalabierto"></div>
                                    <div class="caption">
                                        <div>Tickets en progreso</div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-sm-4">
                            <article class="statistic-box red">
                                <div>
                                    <div class="number" id="lbltotalcerrado"></div>
                                    <div class="caption">
                                        <div>Tickets Cerrados</div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
            <h3 class="text-center">Tickets por Categoría</h3>
            <div class="row">
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-sm-3">
                            <article class="statistic-box purple">
                                <div>
                                    <div class="number" id="lblinformatica"></div>
                                    <div class="caption">
                                        <div>Informatica</div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-sm-3">
                            <article class="statistic-box purple">
                                <div>
                                    <div class="number" id="lblredes"></div>
                                    <div class="caption">
                                        <div>Redes</div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-sm-3">
                            <article class="statistic-box purple">
                                <div>
                                    <div class="number" id="lblteleco"></div>
                                    <div class="caption">
                                        <div>Telecomunicaciones</div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-sm-3">
                            <article class="statistic-box purple">
                                <div>
                                    <div class="number" id="lblotros"></div>
                                    <div class="caption">
                                        <div>Otros</div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>

            

        </div>
    </div>
    <!-- Contenido -->


    <?php require_once("../MainJs/js.php");?>


    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
	<script src="//cdn.oesmith.co.uk/morris-0.4.1.min.js"></script>

    <script type="text/javascript" src="consultarcliente.js"></script>

</body>

</html>
<?php
  } else {
    header("Location:".Conectar::ruta()."index.php");
  }
?>