<?php
require_once("../../config/conexion.php");
if (isset($_SESSION["usu_id"])) {
?>
	<!DOCTYPE html>
	<html>
	<?php require_once("../MainHead/head.php"); ?>
	<title>Itec - Perfil</title>
	</head>

	<body class="with-side-menu">

		<?php require_once("../MainHeader/header.php"); ?>

		<div class="mobile-menu-left-overlay"></div>

		<?php require_once("../MainNav/nav.php"); ?>

		<!-- Contenido -->
		<div class="page-content">
			<div class="container-fluid">

				<header class="section-header">
					<div class="tbl">
						<div class="tbl-row">
							<div class="tbl-cell">
								<h3>Perfil</h3>
								<ol class="breadcrumb breadcrumb-simple">
									<li><a href="..\Home\">Home</a></li>
									<li class="active">Cambiar Contraseña</li>
								</ol>
							</div>
						</div>
					</div>
				</header>



				<section class="box-typical">
					<div class="profile-card">
						<div class="profile-card-photo">
							<img src="../../public/img/<?php echo $_SESSION["rol_id"] ?>.png" alt="">
						</div>
						<div class="profile-card-name"><?php echo $_SESSION["usu_nom"] ?> <?php echo $_SESSION["usu_ape"] ?></div>
						<div class="profile-card-status">
							<?php
							if ($_SESSION['rol_id'] == 1) {
								echo 'Cliente';
							} elseif ($_SESSION['rol_id'] == 2) {
								echo 'Soporte';
							} else {
								echo 'Administrador';
							}
							?>
					</div>
					<!--.profile-card-->

					<div class="profile-statistic tbl">
						<div class="tbl-row">
							<div class="tbl-cell">
							<b class="number" id="lbltotal"></b>
								Total de tickets
							</div>
							<div class="tbl-cell">
							<b class="number" id="lbltotalabierto"></b>
								Tickets en progreso
							</div>
							<div class="tbl-cell" >
							<b class="number" id="lbltotalcerrado"></b>
								Tickets cerrados
							</div>
						</div>
					</div>
				</section>
				<!--.box-typical-->



				<div class="box-typical box-typical-padding text-center">
					<label class="form-label semibold">Cambiar contraseña</label>
					<div class="row">
						<div class="col-lg-6">
							<fieldset class="form-group">
								<label class="form-label semibold" for="exampleInput">Nueva Contraseña</label>
								<input type="password" class="form-control" id="txtpass" name="txtpass">
							</fieldset>
						</div>

						<div class="col-lg-6">
							<fieldset class="form-group">
								<label class="form-label semibold" for="exampleInput">Confirmar Contraseña</label>
								<input type="password" class="form-control" id="txtpassnew" name="txtpassnew">
							</fieldset>
						</div>

						<div class="col-lg-12">
							<button type="button" id="btnactualizar" class="btn btn-rounded btn-inline btn-primary">Actualizar</button>
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- Contenido -->

		<?php require_once("../MainJs/js.php"); ?>

		<script type="text/javascript" src="mntperfil.js"></script>

	</body>

	</html>
<?php
} else {
	header("Location:" . Conectar::ruta() . "index.php");
}
?>