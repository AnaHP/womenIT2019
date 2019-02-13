<!DOCTYPE html>
<html lang="en"> <!-- <html class="no-js" lang="en" dir="ltr"> -->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>WomenIT</title>
	<link href="<?=CSS?>foundation.css" rel="stylesheet">
	<link href="<?=CSS?>app.css" rel="stylesheet" >
	<link href="<?=CSS?>style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<meta class="foundation-mq-small">
	<meta class="foundation-mq-small-only">
	<meta class="foundation-mq-medium">
	<meta class="foundation-mq-medium-only">
	<meta class="foundation-mq-large">
	<meta class="foundation-mq-large-only">
	<meta class="foundation-mq-xlarge">
	<meta class="foundation-mq-xlarge-only">
	<meta class="foundation-mq-xxlarge">
	<meta class="foundation-data-attribute-namespace">
	<meta class="foundation-mq-topbar">
</head>
<body>

	<!-- Top Bar -->
	<div class="top-bar-container top-bar-w" data-sticky-container>
		<div class="sticky sticky-topbar" style="position: fixed;" data-sticky data-options="anchor: page; marginTop: 0; stickyOn: small;">
			<div class="top-bar white">
				<div class="top-bar-left">
					<!-- Logo -->
				</div>
				<div class="top-bar-right">
					<ul class="menu white align-right">
						<li><a class="link-menu" href="#program">Programa</a></li>
						<li><a class="link-menu" href="#multimedia">Multimedia</a></li>
						<li><a class="link-menu" href="#register">Registro</a></li>
						<!-- <li><a class="link-menu" href="#">Patrocinadores</a></li> -->
						<li><a class="link-menu" href="#faq">FAQ</a></li>
					</ul>

				</div>
			</div>
		</div>
	</div>

	<!-- Home -->
	<img class="escudo" src="<?=IMG?>uaq.png" alt="">
	<img class="escudo-fif"src="<?=IMG?>fif.png" alt="" >



	<section class="gradient-1">
		<div class="row expanded">
			<div class="height-topbar width-100">
				<div class="row align-center align-middle height-100 padding-top-3 ">
					<div class="large-10 medium-10 small-8 columns text-center">
						<!-- <div class="image-logo" style="background-image: url(<?=IMG?>logoconano.png);"></div> -->
						<img src="<?=IMG?>logoconano.png" alt="">
					</div>
					<div class="large-12 medium-12 small-12 columns">
						<p class="text-center white-color text-first margin-0">Es un evento de mujeres para mujeres en dónde se comparten conocimientos, experiencias y visiones respecto al papel de la mujer en el ámbito profesional y en la industria de las tecnologías de la información.</p>
						<h1 class="white-color text-center margin-0 text-second" style="font-weight: 600;">Mujeres guerreras, mujeres que inspiran.</h1>
					</div>
					<div class="large-10 medium-10 small-12 columns text-center">
						<!-- <div class="row">
							<div class="column">
								<p>mes</p>
								<p></p>
							</div>
							<div class="column">
								<p id="days"></p>
								<p id="textDays"></p>
							</div>
							<div class="column">
								<p id="hours"></p>
							</div>
							<div class="column">
								<p id="minutes"></p>
							</div>
							<div class="column">
								<p id="second"></p>
							</div>
						</div> -->
						<div class="row text-center align-center">
							<div class="large-9 medium-9 small-12 columns">
								<div class="row">
									<div class="large medium small columns">
										<p class="white-color text-time" id="days"></p>
										<p class="white-color text-time2" id="textDay"></p>

									</div>
									<div class="large medium small columns">
										<p class="white-color text-time" id="hours"></p>
										<p class="white-color text-time2" id="textHours"></p>

									</div>
									<div class="large medium small columns">
										<p class="white-color text-time" id="minutes"></p>
										<p class="white-color text-time2" id="textMinutes"></p>

									</div>
									<div class="large medium small columns">
										<p class="white-color text-time" id="second"></p>
										<p class="white-color text-time2" id="textSeconds"></p>

									</div>
								</div>
							</div>
							
						</div>
						<!-- <div class="row text-center align-center">
							<div class="large-9 columns">
								<div class="row">
									<div class="large medium small columns">
										<p class="text-time white-color text-time2" id="textDay"></p>
									</div>
									<div class="large medium small columns">
										<p class="text-time white-color text-time2" id="textHours"></p>
									</div>
									<div class="large medium small columns">
										<p class="text-time white-color text-time2" id="textMinutes"></p>
									</div>
									<div class="large medium small columns">
										<p class="text-time white-color text-time2" id="textSeconds"></p>
									</div>
								</div>
							</div>
						</div> -->
						<!-- <div id="countdown"></div> -->

					</div>
					<div class="large-12 medium-12 small-12 columns text-center">
						<div class="row">
							<div class="large-2 large-offset-5 medium-4 medium-offset-4 small-6 small-offset-3 columns padding-rl-0">
								<a class="button button-register white width-100 margin-bottom-0">¡Regístrate Ahora!</a>
							</div>
						</div>

					</div>
					<div class="large-10 medium-10 small-10 columns text-center">
						<p class="white-color text-bottom margin-0">13 de marzo de 2019 | Centro de Negocios de la Universidad Autónoma de Querétaro</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Program -->
	<section class="gradient-2">
		<!-- Title and Paragraph -->
		<div class="row padding-general-title" id="program">
			<div class="large-12 medium-12 small-12 columns">
				<h1 class="title-page" >Programa</h1>
				<!-- 	<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h2> -->
			</div>
		</div>
		<!-- Content -->
		<div class="row">
			<div class="large-12 medium-12 small-12 columns">

				<ul class="accordion transparent border-bottom" data-accordion data-allow-all-closed="true">
					<li class="accordion-item border-bt" data-accordion-item="">
						<a href="#" class="accordion-title">
							<div class="row">
								<div class="large-2 medium-3 small-3 columns padding-left-0 padding-right-0">
									<h4 class="margin-0 text-hour-program">8:00 am</h4>
								</div>
								<div class="large-10 medium-9 small-9 columns padding-left-0 padding-right-0">
									<h4 class="margin-0">Recepción</h4>
								</div>
							</div>
						</a>
						<div class="accordion-content" data-tab-content="" role="tabpanel" aria-labelledby="zvzzfy-accordion-label" aria-hidden="true" id="zvzzfy-accordion" style="display: none;">
							<div class="row">
								<div class="large-2 medium-3 small-3 columns"></div>
								<div class="large-10 medium-9 small-9 columns padding-1 border-top">
									<div class="row">
										<div class="large-12 medium-12 small-12 columns padding-left-0 padding-right-0">
											<h5 class="p-program">En la recepción se te pedirá tu código QR para confirmar tu asistencia y se te entregará tu kit de bienvenida al evento.</h5>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>

					<li class="accordion-item" data-accordion-item="">
						<a href="#" class="accordion-title">
							<div class="row">
								<div class="large-2 medium-3 small-3 columns padding-left-0 padding-right-0">
									<h4 class="margin-0 text-hour-program">8:30 am</h4>
								</div>
								<div class="large-10 medium-9 small-9 columns padding-left-0 padding-right-0">
									<h4 class="margin-0">Inauguración</h4>
								</div>
							</div>
						</a>
						<div class="accordion-content" data-tab-content="" role="tabpanel" aria-labelledby="zvzzfy-accordion-label" aria-hidden="true" id="zvzzfy-accordion" style="display: none;">
							<div class="row">
								<div class="large-2 medium-3 small-3 columns"></div>
								<div class="large-10 medium-9 small-9 columns padding-1 border-top">
									<div class="row">
										<div class="large-12 medium-12 small-12 columns padding-left-0 padding-right-0">
											<h5 class="p-program">Nuestra rectora la Dra. Margarita Teresa de Jesús García Gasca nos hará el honor de inaugurar WomenIT 2019.</h5>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>


					<li class="accordion-item" data-accordion-item="">
						<a href="#" class="accordion-title border-top">
							<div class="row">
								<div class="large-2 medium-3 small-3 columns padding-left-0 padding-right-0">
									<h4 class="margin-0 text-hour-program">9:00 am</h4>
								</div>
								<div class="large-10 medium-9 small-9 columns padding-left-0 padding-right-0">
									<h4 class="margin-0">Panel: Líderes Universitarias</h4>
								</div>
							</div>
						</a>
						<div class="accordion-content" data-tab-content="" style="display: none;">
							<div class="row">
								<div class="large-2 medium-3 small-3 columns"></div>
								<div class="large-10 medium-9 small-9 columns border-top padding-left-0 padding-right-0">
									<div class="row">
										<div class="large-12 columns">

										</div>
									</div>
									<div class="row padding-vertical-1">
										<div class="large-2 medium-2 small-2 columns center text-center padding-right-0">
											<div class="background-image" style="background-image: url(<?=IMG?>Dra.TeresaGarciaGasca.jpg);"></div>
										</div>
										<div class="large-10 medium-10 small-10 columns align-self-middle">
											<p class="margin-0 blue-color p-name">Dra. Margarita Teresa de Jesús García Gasca</p>
											<p class="margin-0 p-name">Rectora de la Universidad Autónoma de Querétaro</p>

										</div>
									</div>
									<div class="row padding-vertical-1">
										<div class="large-2 medium-2 small-2 columns">
											<div class="background-image" style="background-image: url(<?=IMG?>Dra.JuanaElizabethElton.jpg);"></div>
										</div>
										<div class="large-10 medium-10 small-10 columns align-self-middle">
											<p class="margin-0 blue-color p-name">Dra. Juana Elizabeth Elton Puente</p>
											<p class="margin-0 p-name">Directora de la Facultad de Ciencias Naturales</p>

										</div>
									</div>
									<div class="row padding-vertical-1">
										<div class="large-2 medium-2 small-2 columns">
											<div class="background-image" style="background-image: url(<?=IMG?>Dra.LauraPerezTellez.jpg);"></div>
										</div>
										<div class="large-10 medium-10 small-10 columns align-self-middle">
											<p class="margin-0 blue-color p-name">Lic. Laura Pérez Tellez</p>
											<p class="margin-0 p-name">Directora de la Facultad de Lenguas y Letras</p>
										</div>
									</div>
									<div class="row padding-vertical-1">
										<div class="large-2 medium-2 small-2 columns">
											<div class="background-image" style="background-image: url(<?=IMG?>Dra.MarcelaAvila.jpg);"></div>
										</div>
										<div class="large-10 medium-10 small-10 columns align-self-middle">
											<p class="margin-0 blue-color p-name">Dra. en C. P. S. Marcela Ávila Eggleton</p>
											<p class="margin-0 p-name">Directora de la Facultad de Ciencias Políticas y Sociales</p>

										</div>
									</div>
									<div class="row padding-vertical-1">
										<div class="large-2 medium-2 small-2 columns">
											<div class="background-image" style="background-image: url(<?=IMG?>Dra.SilviaLorenaAmaya.jpg);"></div>
										</div>
										<div class="large-10 medium-10 small-10 columns align-self-middle">
											<p class="margin-0 blue-color p-name">Dra. Silvia Lorena Amaya Llano</p>
											<p class="margin-0 p-name">Directora de la Facultad de Química</p>

										</div>
									</div>
									<div class="row padding-vertical-1">
										<div class="large-2 medium-2 small-2 columns">
											<div class="background-image" style="background-image: url(<?=IMG?>Dra.MargaritaEspinosa.jpg);"></div>
										</div>
										<div class="large-10 medium-10 small-10 columns align-self-middle">
											<p class="margin-0 blue-color p-name">Dra. Ma. Margarita Espinoza Blas</p>
											<p class="margin-0 p-name">Directora de la Facultad de Filosofía</p>
										</div>
									</div>
									<div class="row padding-vertical-1">
										<div class="large-2 medium-2 small-2 columns">
											<div class="background-image" style="background-image: url(<?=IMG?>guadalupe.jpeg);"></div>
										</div>
										<div class="large-10 medium-10 small-10 columns align-self-middle">
											<p class="margin-0 blue-color p-name">M.C.E Ma. Guadalupe Perea Ortiz</p>
											<p class="margin-0 p-name">Directora de la Facultad de Enfermería</p>
										</div>
									</div>
									<div class="row padding-vertical-1">
										<div class="large-2 medium-2 small-2 columns">
											<div class="background-image" style="background-image: url(<?=IMG?>user-female.jpg);"></div>
										</div>
										<div class="large-10 medium-10 small-10 columns align-self-middle">
											<p class="margin-0 blue-color p-name">Dra. Guadalupe Zaldívar Lelo de Larrea</p>
											<p class="margin-0 p-name">Directora de la Facultad de Medicina</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>


				</ul>

			</div>
		</div>
	</section>

	<!-- Multimedia -->
	<section class="">
		<!-- Title and Paragraph -->
		<div class="row padding-general-title-2" id="multimedia">
			<div class="large-12 medium-12 small-12 columns">
				<h1 class="title-page">Multimedia</h1>
				<h2>Reviviendo WomenIT 2018</h2>
			</div>
		</div>
		<!-- Content -->
		<div class="row">
			<div class="large-12 medium-12 small-12 columns">
				<video width="100%" controls>
					<source src="./public/images/vcorta.mp4" type="video/mp4">
						<source src="./public/images/vcorta.mp4" type="video/mp4">
							Your browser does not support HTML5 video.
						</video>
					</div>
					
					<div class="row align-middle">
						<!-- <div class="large-12 medium-12 small-12 columns">
							<h3 class="dark-blue-color">Fotografías</h3>
						</div> -->
						<div class="large-6 medium-6 small-12 columns padding-top-1">
							<img src="./public/images/IMG_0584.jpg" alt="">
						</div>
						<div class="large-6 medium-6 small-12 columns padding-top-1">
							<div class="row">
								<div class="large-6 medium-6 small-12 columns padding-left-0">
									<img src="./public/images/IMG_0626.jpg" alt="">
								</div>
								<div class="large-6 medium-6 small-12 columns padding-right-0">
									<img src="./public/images/IMG_0787.jpg" alt="">
								</div>
								<div class="large-6 medium-6 small-12 columns padding-top-1 padding-left-0">
									<img src="./public/images/IMG_0865.jpg" alt="">
								</div>
								<div class="large-6 medium-6 small-12 columns padding-top-1 padding-right-0">
									<img src="./public/images/IMG_0556.jpg" alt="">
								</div>
							</div>
							<!-- <img src="./public/images/IMG_0626.jpg" alt=""> -->
						</div>
					</div>

					<div class="row align-middle">
						<div class="large-6 medium-6 small-12 columns padding-top-1">
							<div class="row">
								<div class="large-6 medium-6 small-12 columns padding-left-0">
									<img src="./public/images/IMG_0704.jpg" alt="">
								</div>
								<div class="large-6 medium-6 small-12 columns padding-right-0">
									<img src="./public/images/IMG_0537.jpg" alt="">
								</div>
								<div class="large-6 medium-6 small-12 columns padding-top-1 padding-left-0">
									<img src="./public/images/IMG_0630.jpg" alt="">
								</div>
								<div class="large-6 medium-6 small-12 columns padding-top-1 padding-right-0">
									<img src="./public/images/IMG_0649.jpg" alt="">
								</div>
							</div>
						</div>
						<div class="large-6 medium-6 small-12 columns padding-top-1">
							<img src="./public/images/IMG_0674.jpg" alt="">
						</div>
					</div>

					<div class="row align-middle">
						<div class="large-6 medium-6 small-12 columns padding-top-1">
							<img src="./public/images/IMG_0695.jpg" alt="">
						</div>
						<div class="large-6 medium-6 small-12 columns padding-top-1">
							<div class="row">
								<div class="large-6 medium-6 small-12 columns padding-left-0">
									<img src="./public/images/IMG_0730.jpg" alt="">
								</div>
								<div class="large-6 medium-6 small-12 columns padding-right-0">
									<img src="./public/images/IMG_0772.jpg" alt="">
								</div>
								<div class="large-6 medium-6 small-12 columns padding-top-1 padding-left-0">
									<img src="./public/images/IMG_0779.jpg" alt="">
								</div>
								<div class="large-6 medium-6 small-12 columns padding-top-1 padding-right-0">
									<img src="./public/images/IMG_0674.jpg" alt="">
								</div>
							</div>
							<!-- <img src="./public/images/IMG_0626.jpg" alt=""> -->
						</div>
					</div>

					<div class="row align-middle">
						<div class="large-6 medium-6 small-12 columns padding-top-1">
							<div class="row">
								<div class="large-6 medium-6 small-12 columns padding-left-0">
									<img src="./public/images/IMG_0829.jpg" alt="">
								</div>
								<div class="large-6 medium-6 small-12 columns padding-right-0">
									<img src="./public/images/IMG_0846.jpg" alt="">
								</div>
								<div class="large-6 medium-6 small-12 columns padding-top-1 padding-left-0">
									<img src="./public/images/IMG_0848.jpg" alt="">
								</div>
								<div class="large-6 medium-6 small-12 columns padding-top-1 padding-right-0">
									<img src="./public/images/IMG_0859.jpg" alt="">
								</div>
							</div>
						</div>
						<div class="large-6 medium-6 small-12 columns padding-top-1">
							<img src="./public/images/IMG_0795.jpg" alt="">
						</div>
					</div>



					
				<!-- 	<div class="large-6 medium-6 small-12 columns padding-top-1">
						<img src="./public/images/IMG_0787.jpg" alt="">
					</div> -->
					<!-- div class="large-6 medium-6 small-12 columns padding-top-1">
						<img src="./public/images/IMG_0865.jpg" alt="">
					</div> -->
					<!-- <div class="large-6 medium-6 small-12 columns padding-top-1">
						<img src="./public/images/IMG_0556.jpg" alt="">
					</div> -->
					<!-- <div class="large-6 medium-6 small-12 columns padding-top-1">
						<img src="./public/images/IMG_0704.jpg" alt="">
					</div> -->




					<!-- <div class="large-6 medium-6 small-12 columns padding-top-1">
						<img src="./public/images/IMG_0537.jpg" alt="">
					</div> -->
					<!-- <div class="large-6 medium-6 small-12 columns padding-top-1">
						<img src="./public/images/IMG_0630.jpg" alt="">
					</div> -->
				<!-- 	<div class="large-6 medium-6 small-12 columns padding-top-1">
						<img src="./public/images/IMG_0649.jpg" alt="">
					</div> -->
					<!-- <div class="large-6 medium-6 small-12 columns padding-top-1">
						<img src="./public/images/IMG_0674.jpg" alt="">
					</div> -->
					<!-- <div class="large-6 medium-6 small-12 columns padding-top-1">
						<img src="./public/images/IMG_0695.jpg" alt="">
					</div> -->
					<!-- <div class="large-6 medium-6 small-12 columns padding-top-1">
						<img src="./public/images/IMG_0730.jpg" alt="">
					</div> -->
					<!-- <div class="large-6 medium-6 small-12 columns padding-top-1">
						<img src="./public/images/IMG_0772.jpg" alt="">
					</div> -->
					<!-- <div class="large-6 medium-6 small-12 columns padding-top-1">
						<img src="./public/images/IMG_0779.jpg" alt="">
					</div> -->
					<!-- <div class="large-6 medium-6 small-12 columns padding-top-1">
						<img src="./public/images/IMG_0674.jpg" alt="">
					</div> -->
					<!-- <div class="large-6 medium-6 small-12 columns padding-top-1">
						<img src="./public/images/IMG_0859.jpg" alt="">
					</div> -->
				</div>
			</section>

			<!-- Registro -->
			<section class="">
				<!-- Title and Paragraph -->
				<div class="row padding-general-title-2" id="register" >
					<div class="large-12 medium-12 small-12 columns">
						<h1 class="title-page">Regístrate</h1>
						<h2>¿Estás interesada en participar? Aparta tu lugar con el siguiente registro:</h2>
					</div>

				</div>
				<!-- Content -->
				<div id="formFirst">
					<div class="row text-center align-center" >
				<!-- <div class="large-6 columns">
					<div class="row align-center">
						<div class="large-12 columns">
							<h3 class="dark-blue-color">Grupo</h3>
						</div>
						<div class="large-12 columns paddin">
							<p>Explicar de que trata esta sección</p>
						</div>
						<div class="large-5 columns">
							<a class="button link-menu white width-100 margin-bottom-0" id="buttonGroup">¡Registra tu Grupo!</a>
						</div>
					</div>
				</div> -->
				<div class="large-12 medium-12 small-12 columns">
					<div class="row align-center">
						<div class="large-12 medium-12 small-12 columns">
							<h3 class="dark-blue-color">Individual</h3>
						</div>
						<div class="large-12 medium-12 small-12 columns paddin">
							<!-- <p>Explicar de que trata esta sección</p> -->
						</div>
						<div class="large-3 medium-4 small-12 columns padding-top-2">
							<a class="button button-register white width-100 margin-bottom-0" id="buttonIndividual"  onclick="datos()">¡Regístrate Ahora!</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="formSecond" class="hide" style="height: calc(100% - 11.8rem"></div>




		<!-- height: calc(100% - 11.8rem); -->

		<!-- Form -->
		<!-- <form action="">
			<div class="row">
				<div class="small-12 medium-6 columns">

					<div class="form-group margin-bt-2">
						<label class="form-label" for="nameInput">Nombre</label>
						<input class="form-input" id="nameInput" type="text" name="" value="">
					</div>

					<div class="form-group margin-bt-2" >
						<label class="form-label" for="dateInput">Fecha de Nacimiento</label>
						<input class="form-input input-element" id="dateInput" type="tel" name="" value="" placeholder="" onfocus="this.placeholder = 'YYYY/MM/DD'" onblur="this.placeholder = ''" >
					</div>

					<div class="form-group margin-bt-2">
						<select  class="form-input">
							<option value="" disabled selected>Institución</option>
							<option value="husker">UAQ</option>
							<option value="starbuck">UVM</option>
							<option value="hotdog">Marista</option>
						</select>
					</div>

					<div class="form-group margin-bt-2">
						<select  class="form-input">
							<option value="" disabled selected>¿Cómo te enteraste del evento?</option>
							<option value="husker">FB</option>
							<option value="starbuck">Institución</option>
							<option value="hotdog">Otro</option>
						</select>
					</div>
				</div>

				<div class="small-12 medium-6 columns">
					<div class="form-group margin-bt-2">
						<label class="form-label" for="lastNameInput">Apellidos</label>
						<input class="form-input" id="lastNameInput" type="text" name="" value="">
					</div>

					<div class="form-group margin-bt-2">
						<label class="form-label" for="emailInput">Correo</label>
						<input class="form-input" id="emailInput" type="email" name="" value="">
					</div>

					<div class="form-group margin-bt-2">
						<select  class="form-input">
							<option value="" disabled selected>Rol</option>
							<option value="husker">Estudiante</option>
							<option value="starbuck">Profesora</option>
							<option value="hotdog">Externo</option>
						</select>
					</div>

					<div class="form-group margin-bt-2">
						<select  class="form-input">
							<option value="" disabled selected>Rol</option>
							<option value="husker">Estudiante</option>
							<option value="starbuck">Profesora</option>
							<option value="hotdog">Externo</option>
						</select>
					</div>
				</div>
			</div>
		</form> -->
	</section>

	<!-- Patrocinadores -->
	<!-- <section class=""> -->
		<!-- Title and Paragraph -->
		<!-- <div class="row padding-general-title-2">
			<div class="large-12">
				<h1 class="title-page">Patrocinadores</h1>
				<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</h2>
			</div>
		</div> -->
		<!-- Content -->
	<!-- 	<div class="row">

		</div>
	</section> -->

	<!-- FAQ -->
	<section class="height-topbar">
		<!-- Title and Paragraph -->
		<div class="row padding-general-title-2" id="faq">
			<div class="large-12 medium-12 small-12 columns">
				<h1 class="title-page">FAQ</h1>
				<h2>Encuentra las preguntas más frecuentes sobre WomenIT.</h2>
			</div>
		</div>
		<!-- Content -->
		<div class="row align-justify">
			<div class="large-6 medium-6 small-12 columns">

				<ul class="accordion transparent" data-accordion data-allow-all-closed="true">
					<li class="accordion-item" data-accordion-item="">
						<a href="#" class="accordion-title border-top">
							<div class="row">
								<div class="large-12 medium-12 small-12 columns padding-left-0 padding-right-0">
									<h4 class="margin-0 question">¿Es necesario registrarse?</h4>
								</div>

							</div>
						</a>
						<div class="accordion-content" data-tab-content="" style="display: none;">
							<div class="row">
								<div class="large-2 medium-3 small-3 columns"></div>
								<div class="large-10 medium-9 small-9 columns padding-1 border-top">
									<p class="margin-0 p-name">Sí, con el registro aseguras tu lugar en el evento. Además, se hará entrega de un kit de bienvenida.</p>
								</div>
							</div>
						</div>
					</li>

					<li class="accordion-item" data-accordion-item="">
						<a href="#" class="accordion-title border-top">
							<div class="row">
								<div class="large-12 medium-12 small-12 columns  padding-left-0 padding-right-0">
									<h4 class="margin-0 question">¿Hay algún costo por asistir?</h4>
								</div>

							</div>
						</a>
						<div class="accordion-content" data-tab-content="" style="display: none;">
							<div class="row">
								<div class="large-2 medium-3 small-3 columns  padding-left-0 padding-right-0"></div>
								<div class="large-10 medium-9 small-9 columns padding-1 border-top">
									<p class="margin-0 p-name">No, el evento será totalmente gratuito.</p>
								</div>
							</div>
						</div>
					</li>

					<li class="accordion-item" data-accordion-item="">
						<a href="#" class="accordion-title border-top">
							<div class="row">
								<div class="large-12 medium-12 small-12 columns  padding-left-0 padding-right-0">
									<h4 class="margin-0 question">¿Tengo que llevar algo?</h4>
								</div>

							</div>
						</a>
						<div class="accordion-content" data-tab-content="" style="display: none;">
							<div class="row">
								<div class="large-2 medium-3 small-3 columns"></div>
								<div class="large-10 medium-9 small-9 columns padding-1 border-top">
									<p class="margin-0 p-name">No es necesario llevar nada, el mismo kit de bienvenida contiene una libreta, por si se quiere tomar notas.</p>
								</div>
							</div>
						</div>
					</li>

					<li class="accordion-item" data-accordion-item="">
						<a href="#" class="accordion-title border-top">
							<div class="row">
								<div class="large-12 medium-12 small-12 columns  padding-left-0 padding-right-0">
									<h4 class="margin-0 question">¿Cuál es la fecha límite de registro?</h4>
								</div>

							</div>
						</a>
						<div class="accordion-content" data-tab-content="" style="display: none;">
							<div class="row">
								<div class="large-2 medium-3 small-3 columns"></div>
								<div class="large-10 medium-9 small-9 columns padding-1 border-top">
									<p class="margin-0 p-name">La fecha límite es un día antes del evento.</p>
								</div>
							</div>
						</div>
					</li>

					<li class="accordion-item" data-accordion-item="">
						<a href="#" class="accordion-title border-top">
							<div class="row">
								<div class="large-12 medium-12 small-12 columns  padding-left-0 padding-right-0">
									<h4 class="margin-0 question">¿Se entregarán constancias de participación/asistencia?</h4>
								</div>

							</div>
						</a>
						<div class="accordion-content" data-tab-content="" style="display: none;">
							<div class="row">
								<div class="large-2 medium-3 small-3 columns"></div>
								<div class="large-10 medium-9 small-9 columns padding-1 border-top">
									<p class="margin-0 p-name">Sí, siempre y cuando hayas asistido al evento. Una vez concluido el evento, se enviará la constancia al correo electrónico que usaste para el registro.</p>
								</div>
							</div>
						</div>
					</li>

					<li class="accordion-item" data-accordion-item="">
						<a href="#" class="accordion-title border-top">
							<div class="row">
								<div class="large-12 medium-12 small-12 columns  padding-left-0 padding-right-0">
									<h4 class="margin-0 question">¿Se tendrá acceso al Wifi?</h4>
								</div>

							</div>
						</a>
						<div class="accordion-content" data-tab-content="" style="display: none;">
							<div class="row">
								<div class="large-2 medium-3 small-3 columns"></div>
								<div class="large-10 medium-9 small-9 columns padding-1 border-top">
									<p class="margin-0 p-name">No, debido a que durante las conferencias no es necesario el uso de internet.</p>
								</div>
							</div>
						</div>
					</li>

					<li class="accordion-item" data-accordion-item="">
						<a href="#" class="accordion-title border-top">
							<div class="row">
								<div class="large-12 medium-12 small-12 columns  padding-left-0 padding-right-0">
									<h4 class="margin-0 question">¿Puedo llevar mi laptop?</h4>
								</div>

							</div>
						</a>
						<div class="accordion-content" data-tab-content="" style="display: none;">
							<div class="row">
								<div class="large-2 medium-3 small-3 columns"></div>
								<div class="large-10 medium-9 small-9 columns padding-1 border-top">
									<p class="margin-0 p-name">Sí, aunque no es necesario.</p>
								</div>
							</div>
						</div>
					</li>

					<li class="accordion-item" data-accordion-item="">
						<a href="#" class="accordion-title border-top">
							<div class="row">
								<div class="large-12 medium-12 small-12 columns padding-left-0 padding-right-0">
									<h4 class="margin-0 question">¿Habrá alimentos en el evento?</h4>
								</div>

							</div>
						</a>
						<div class="accordion-content" data-tab-content="" style="display: none;">
							<div class="row">
								<div class="large-2 medium-3 small-3 columns"></div>
								<div class="large-10 medium-9 small-9 columns padding-1 border-top">
									<p class="margin-0 p-name">Sí, durante el evento se existirán descansos, en donde se hará entrega de un refrigerio.</p>
								</div>
							</div>
						</div>
					</li>

					<li class="accordion-item" data-accordion-item="">
						<a href="#" class="accordion-title border-top">
							<div class="row">
								<div class="large-12 medium-12 small-12 columns padding-left-0 padding-right-0">
									<h4 class="margin-0 question">¿Puedo tomar fotos o grabar video durante el evento?</h4>
								</div>

							</div>
						</a>
						<div class="accordion-content" data-tab-content="" style="display: none;">
							<div class="row">
								<div class="large-2 medium-3 small-3 columns"></div>
								<div class="large-10 medium-9 small-9 columns padding-1 border-top">
									<p class="margin-0 p-name">Sí, no hay ninguna restricción.</p>
								</div>
							</div>
						</div>
					</li>

					<li class="accordion-item" data-accordion-item="">
						<a href="#" class="accordion-title border-top">
							<div class="row">
								<div class="large-12 medium-12 small-12 columns padding-left-0 padding-right-0">
									<h4 class="margin-0 question">¿El lugar cuenta con estacionamiento?</h4>
								</div>

							</div>
						</a>
						<div class="accordion-content" data-tab-content="" style="display: none;">
							<div class="row">
								<div class="large-2 medium-3 small-3 columns"></div>
								<div class="large-10 medium-9 small-9 columns padding-1 border-top">
									<p class="margin-0 p-name">Sí, el lugar cuenta con un amplio estacionamiento.</p>
								</div>
							</div>
						</div>
					</li>

					<li class="accordion-item" data-accordion-item="">
						<a href="#" class="accordion-title border-top">
							<div class="row">
								<div class="large-12 medium-12 small-12 columns padding-left-0 padding-right-0">
									<h4 class="margin-0 question">¿Habrá transporte hacia y desde el evento?</h4>
								</div>

							</div>
						</a>
						<div class="accordion-content" data-tab-content="" style="display: none;">
							<div class="row">
								<div class="large-2 medium-3 small-3 columns"></div>
								<div class="large-10 medium-9 small-9 columns padding-1 border-top">
									<p class="margin-0 p-name">No, sin embargo, la ubicación del lugar es apta para llegar en cualquier tipo transporte.</p>
								</div>
							</div>
						</div>
					</li>

					<li class="accordion-item" data-accordion-item="">
						<a href="#" class="accordion-title border-top">
							<div class="row">
								<div class="large-12 medium-12 small-12 columns padding-left-0 padding-right-0">
									<h4 class="margin-0 question">¿Se puede salir y regresar del lugar durante el evento?</h4>
								</div>

							</div>
						</a>
						<div class="accordion-content" data-tab-content="" style="display: none;">
							<div class="row">
								<div class="large-2 medium-3 small-3 columns"></div>
								<div class="large-10 medium-9 small-9 columns padding-1 border-top">
									<p class="margin-0 p-name">Una vez que hayas ingresado, se puede salir y entrar sin problema.</p>
								</div>
							</div>
						</div>
					</li>

					<li class="accordion-item border-bottom" data-accordion-item="">
						<a href="#" class="accordion-title border-top">
							<div class="row">
								<div class="large-12 medium-12 small-12 columns padding-left-0 padding-right-0">
									<h4 class="margin-0 question">¿Qué hago si no recibí el correo?</h4>
								</div>

							</div>
						</a>
						<div class="accordion-content" data-tab-content="" style="display: none;">
							<div class="row">
								<div class="large-2 medium-3 small-3 columns"></div>
								<div class="large-10 medium-9 small-9 columns padding-1 border-top">
									<p class="margin-0 p-name">Si los datos se ingresaron correctamente y no se encuentra en la bandeja de entrada, es necesario revisar el spam para verificar que ahí se encuentre, sino comunícate al teléfono 192 1200 ext. 5911</p>
								</div>
							</div>
						</div>
					</li>

				</ul>

			</div>

			<div class="large-5 medium-6 small-12 columns">
				<div class="row">
					<div >
						
					</div>
				</div>
				<iframe class="wh" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3732.1020460397012!2d-100.44410372875616!3d20.70608037948242!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d3575fd626bb9f%3A0x8ffb27d4907d6de8!2sCentro+de+Negocios+UAQ!5e0!3m2!1ses-419!2smx!4v1550090083894" frameborder="0" style="border:0" allowfullscreen></iframe>

			</div>




		</div>
	</section>

	<script src="<?=JS?>config.js"></script>
	<script src="<?=JS?>jquery-3.1.1.js"></script>
	<script src="<?=JS?>funciones-datos.js"></script>
	<script src="<?=JS?>validarInputs.js"></script>
	<script src="<?=JS?>vendor/jquery.js"></script>
	<script src="<?=JS?>vendor/what-input.js"></script>
	<script src="<?=JS?>vendor/foundation.js"></script>
	<script src="<?=JS?>app.js"></script>
	<script src="<?=JS?>cleave.js"></script>
	<script src="<?=JS?>cleave.min.js"></script>
	<script src="<?=JS?>register.js"></script>
	<script src="<?=JS?>time.js"></script>

	<script>
		$(document).foundation();
	</script>
</body>
</html>
