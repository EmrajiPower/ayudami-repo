<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" href="js/acciones.js"></script>
	<title>Ayudami</title>
</head>
<body>

	<!-- Header -->
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<a href="index.php">
						<img id="logo" src="images/logos/logo-ayudami.svg" alt="Ayudami" data-no-retina />
					</a>
				</div>
				<div class="col-md-5 offset-md-3 text-right">
					<a href="tel:0180002456913" class="phone">
						018000-2456-913
					</a>
				</div>
			</div>
		</div>
	</header>

	<!-- Paso 1 - Seleccion de Auto -->
	<section class="paso1">
		<div class="container">
			<div class="row">
				<div class="col-md-7">
					<h1 class="main-title wow fadeInDown">Te <span>orientamos</span> en tu proceso de conciliación</h1>
					<p class="secondary-title"> Atenderte sin trámites externos, cuidando tu Privacidad</p>
					<br>
					<a href="formulario.php">
						<button id="boton-informacion" class="submit-cta pull-center">Más Información</button>
					</a>
				</div>
				<div class="col-md-4 offset-md-1">
					<form id="index-cotization-form" method="post" action="conexion.php">
						<div class="row">
							<div class="col-md-12">
								<div id="selector-marca" class="field select-field">
									<label class="wow fadeInDown" style="color:white;padding-bottom: 5px;">¿Cuál es tu caso?</label>
									<input type="hidden" id="select-marca" required/>
									<input name="tipo" type="text" id="select-marca-c" readonly="readonly" class="select option-toggler" placeholder="Tipo" required>
									<div class="options">
										<ul>
											<li>Violencia Intrafamiliar</li>
											<li>Violación</li>
											<li>Amenazas</li>
											<li>Quejas</li>
											<li>Otro</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div id="selector-version" class="field select-field">
									<label class="wow fadeInDown" style="color:white;padding-bottom: 5px;">¿Quien te está afectando?</label>
									<input type="hidden" id="select-version" required/>
									<input name="persona" type="text" id="select-version-c" readonly="readonly" class="select option-toggler" placeholder="Persona" required>
									<div class="options">
										<ul>
											<li>Pariente cercano</li>
											<li>Amigo</li>
											<li>Hermano</li>
											<li>Padre/Madre</li>
											<li>Prefiero decirlo después</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6">
								<div id="selector-model" class="field select-field">
									<label class="wow fadeInDown" style="color:white;padding-bottom: 5px;">¿Con quien desearías quejarte?</label>
									<input type="hidden" id="select-model" required/>
									<input name="entidad" type="text" id="select-model-c" readonly="readonly" class="select option-toggler" placeholder="Entidad" required>
									<div class="options" name="select-entidad">
										<ul>
											<li>Documento Especial</li>
											<li>Policia Nacional</li>
											<li>Fundacion Amigable</li>
											<li>No se</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div id="selector-year" class="field select-field">
									<label class="wow fadeInDown" style="color:white;padding-bottom: 20px;">Tu edad</label>
									<input type="hidden" id="select-year" required/>
									<input name="edad" type="text" id="select-year-c" readonly="readonly" class="select option-toggler" placeholder="Año" required>
									<div class="options">
										<ul>
											<li>Menor de 10 años</li>
											<li>De 11 a 20 años</li>
											<li>De 21 a 30 años</li>
											<li>Mayor de 31 años</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-6">
								<div id="selector-model" class="field select-field">
									<div class="form-group">
										<label id="email"class="wow fadeInDown" style="color:white;">Dirección de Correo</label>
										<input style="margin-top:1.7em;"name="correo" type="email" class="select option-toggler" aria-describedby="emailHelp" required placeholder="hola@gmail.com">
										<small id="emailHelp" class="form-text text-muted">Por correo te notificamos</small>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div id="selector-year" class="field select-field">
									<label id="documento-identidad"class="wow fadeInDown" style="color:white;padding-bottom: 20px;">Tu documento de Identidad</label>
									<input name="cedula" class="select option-toggler" type="text" required placeholder="Ej 1.023.456.789">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="button-container">
									<input class="submit-cta" type="submit" name="boton" value="Enviar Información"></a>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- Compañías -->
	<section class="trusted-companies">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="bordered">
						<p>Estas empresas confían en nosotros</p>
						<img class="allianz-logo" src="images/logos/fiscalia.svg" alt="Fiscalía" data-no-retina />
						<img class="integrity-logo" src="images/logos/policia.svg" alt="Policía" data-no-retina />
						<img class="mapfre-logo" src="images/logos/fun-mujer.png" alt="Fundación de la Mujer" width="32px" height="120px" data-no-retina />
						<img class="mercantil-logo" src="images/logos/cuc.png" alt="Universidad de la Costa" data-no-retina />
						<img class="meridional-logo" src="images/logos/unisimon.png" alt="Universidad Simón Bolívar" data-no-retina />
						<img class="sura-logo" src="images/logos/sura.svg" alt="Sura" data-no-retina />
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Ventajas -->
	<section class="features">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-3 wow fadeInUp">
					<img src="images/horario.svg" data-no-retina>
					<h3>Horario</h3>
					<p>Tenemos el horario más amplio en Atención a Víctimas</p>
				</div>
				<div class="col-lg-4 col-md-3 wow fadeInUp" data-wow-offset="200">
					<img src="images/asesoramiento.svg" data-no-retina>
					<h3>Asesoramiento</h3>
					<p>Personalizado y gratuito durante todo tu proceso</p>
				</div>
				<div class="col-lg-4 col-md-3 wow fadeInUp" data-wow-offset="400">
					<img src="images/app.svg" data-no-retina>
					<h3>App Exclusiva</h3>
					<p>Si ya eres Cliente. Tu credencial siempre a la mano</p>
				</div>
			</div>
		</div>
	</section>
	<!-- Footer -->
	<footer>
		<div class="container upper-footer">
			<div class="row">
				<div class="col-lg-2">
					<a href="https://www.ayudami.com/empresa" target="_blank">Sobre ayudami</a>
				</div>
				<div class="col-lg-2">
					<a href="https://www.ayudami.com/centro-de-soluciones" target="_blank">Centro de Soluciones</a>
				</div>
				<div class="col-lg-2">
					<a href="https://www.ayudami.com/rse" target="_blank">Responsabilidad Social</a>
				</div>
				<div class="col-lg-4 offset-lg-2 text-lg-right">
					<a class="highlighted" href="login.php" target="_blank">Acceso Usuarios</a>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-2">
					<a href="https://www.ayudami.com/aseguradoras" target="_blank">Aseguradoras</a>
				</div>
				<div class="col-lg-2">
					<a href="https://www.ayudami.com/faq" target="_blank">Preguntas Frecuentes</a>
				</div>
				<div class="col-lg-2">
					<a href="https://www.ayudami.com/empleos" target="_blank">Trabaja con Nosotros</a>
				</div>
				<div class="col-lg-2">
					<a href="https://www.ayudami.com/blog" target="_blank">Blog</a>
				</div>
				<div class="col-lg-4 text-lg-right">
					<a href="https://www.ayudami.com/tcondiciones" target="_blank">CC</a>/
					<a href="https://www.ayudami.com/privacidad" target="_blank">Privacidad </a>
					/  2019 © Ayudami
				</div>
			</div>
		</div>
	</footer>

	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/wow.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>

</body>
</html>
