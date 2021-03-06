<?php 
require "php/controladores/controladorUsuario.php";
session_start();


?>
<html>

<head>

	<!-- ========= Referencia al archio estilos.css que dara formato y estilo a la pagina web ========= -->
	<link rel="stylesheet" href="css/estilos.css">
	<!-- ============================================================================================== -->


	<!-- ========= Referencia al archio Scripts.js donde se encuentra el codigo de JavaScript ========= -->
	<script src="js/scripts.js"></script>
	<!-- ============================================================================================== -->

	<!-- ===================================== Estilos de letra ======================================= -->
	<!-- ----- Roboto ----- -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
	<!-- ----- Fin Roboto ----- -->

	<!-- ----- Courgette ----- -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
	<!-- ----- Fin Courgette ----- -->
	<!-- =================================== Fin Estilos de letra ==================================== -->


	<!-- ============================== Acceso a iconos de FontAwesome =============================== -->
	<script src="https://kit.fontawesome.com/429a9d0581.js" crossorigin="anonymous"></script>
	<!-- ============================ Fin Acceso a iconos de FontAwesome ============================= -->


	<!-- ======================== Referencia a Librerias AOS para animaciones ======================== -->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<!-- ============================================================================================= -->
	<title>Beauty Connect</title>
</head>

<body>

	<!-- ================================ Inicio de secci??n Encabezado =============================== -->
	<header id="encabezado">

		<nav id="barraNavegacion">
			<!-- Logo Beauty Connect -->
			<a href="Index.html">
				<img src="Media/logo_BC.png" alt="" id="logo">
			</a>
			<!-- Eleccion de Comunidad Autonoma -->
			<div id="selector">
				<select id="comunidadAutonoma" class="comunidadAutonoma" name="comunidadAutonoma" required>
					<option selected value="">Comunidad Aut??noma</option>
					<option value="Andalucia">Andalucia</option>
					<option value="Aragon">Arag??n</option>
					<option value="Asturias">Principado de Asturias</option>
					<option value="Baleares">Islas Baleares</option>
					<option value="Canarias">Canarias</option>
					<option value="Cantabria">Cantabria</option>
					<option value="ClaMancha">Castilla la Mancha</option>
					<option value="CLeon">Castilla y Leon</option>
					<option value="Catalunya">Catalu??a</option>
					<option value="Ceuta">Ceuta</option>
					<option value="Extremadura">Extremadura</option>
					<option value="Galicia">Galicia</option>
					<option value="Rioja">La Rioja</option>
					<option value="Madrid">Madrid</option>
					<option value="Melilla">Melilla</option>
					<option value="Murcia">Regi??n de Murcia</option>
					<option value="Navarra">Navarra</option>
					<option value="Valencia">Valencia</option>
					<option value="PaisVasco">Pais Vasco</option>
				</select>
			</div>

<!-- 
			<div id="usuarioLogueado">
            <div id="usuario">
					<?php /* echo $_SESSION['usuario'] */ ?>
            </div>
            <div>
					<a href="php/logout.php">Log out</a>
            </div>
			</div>
 -->

			<!-- Pesta??as del men?? principal -->
			<div id="menuEncabezado">
				<ul id="menuPrincipal">
					<li class="titulosMenuPpal"><a href="#encabezado"><b>Inicio</b></a></li>
					<li class="titulosMenuPpal"><a href="#servicios"><b>Servicios</b></a>
						<!-- <ul id="subMenuServicios">
							<li class="elementosSubMenu"><a href="#servicios"><b>Peluquer??a</b></a></li>
							<li class="elementosSubMenu"><a href="#servicios"><b>Manicure</b></a></li>
							<li class="elementosSubMenu"><a href="#servicios"><b>Pedicure</b></a></li>
							<li class="elementosSubMenu"><a href="#servicios"><b>Barber??a</b></a></li>
						</ul> -->
					<li class="titulosMenuPpal"><a href="#servicios"><b>En tu Comunidad</b></a></li>
					<li class="titulosMenuPpal"><a href="#sobreNosotros"><b>Sobre Nosotros</b></a>
					<li class="titulosMenuPpal"><a href="#contacto"><b>Contacto</b></a></li>
				</ul>
				<button id="botonAbrirModal" onclick="modalTipoCliente()"><i class="fa-regular fa-circle-user"></i></button>


			</div>


			<!-- Inicio de Modal de selecci??n Cliente/Centro -->

			<div id="modal">
            <div id="contenidoModal">
               <h3>Eres un centro o cliente</h3>

               <div class="tipoCliente">
                  <p>Centro</p>
                  <a class="cerrarModal" href="php/login.php" onclick="cerrarModalTipoCliente()">inicia sesi??n</a>
                  <p>o</p>
                  <a class="cerrarModal" href="php/registroCentro.php" onclick="cerrarModalTipoCliente()">Registrate</a>
               </div>

               <div class="tipoCliente">
                  <p>Cliente</p>
                  <a class="cerrarModal" href="php/login.php" onclick="cerrarModalTipoCliente()">inicia sesi??n</a>
                  <p>o</p>
                  <a class="cerrarModal" href="php/registroCliente.php" onclick="cerrarModalTipoCliente()">Registrate</a>
               </div>

               <button onclick="cerrarModalTipoCliente()">Cerrar</button>
            </div>
			</div>
			<!-- Fin de Modal de selecci??n Cliente/Centro -->

		</nav>

		<h1 id="nombreSalon" data-aos="zoom-in" data-aos-duration="2000">Beauty Connect</h1>
		<h2 id="esloganSalon" data-aos="zoom-in" data-aos-duration="2000">Te ayuda a verte bien,<br> y sentirte mejor</h2>

	</header>
	<!-- ================================  Fin de secci??n Encabezado  ================================ -->









	<!-- ================================ Inicio de secci??n Servicios ================================ -->
	<section id="servicios">
		<h3 class="tituloSeccionBlanco" data-aos="fade-right" data-aos-duration="2000">Selecciona tu servicio</h3>
		<div id="contenedorImgsScrollHorizontal">

			<div class="imgsScrollHorizontal">
				<div class="infoImgsScroll">Maquillaje</div>
				<div class="cajaImgScroll"><img src="media/Imagen_1_HF_Servicios.png" alt="" class="imagenScroll"></div>
			</div>

			<div class="imgsScrollHorizontal">
				<div class="infoImgsScroll">Manicuras y Pedicuras</div>
				<div class="cajaImgScroll"><img src="media/Imagen_2_HF_Servicios.png" alt="" class="imagenScroll"></div>
			</div>

			<div class="imgsScrollHorizontal">
				<div class="infoImgsScroll">Masajes</div>
				<div class="cajaImgScroll"><img src="media/Imagen_3_HF_Servicios.png" alt="" class="imagenScroll"></div>
			</div>

			<div class="imgsScrollHorizontal">
				<div class="infoImgsScroll">Tratamientos faciales</div>
				<div class="cajaImgScroll"><img src="media/Imagen_4_HF_Servicios.png" alt="" class="imagenScroll"></div>
			</div>

			<div class="imgsScrollHorizontal">
				<div class="infoImgsScroll">Depilaci??n cera</div>
				<div class="cajaImgScroll"><img src="media/Imagen_5_HF_Servicios.png" alt="" class="imagenScroll"></div>
			</div>

			<div class="imgsScrollHorizontal">
				<div class="infoImgsScroll">Depilaci??n laser</div>
				<div class="cajaImgScroll"><img src="media/Imagen_6_HF_Servicios.png" alt="" class="imagenScroll"></div>
			</div>

		</div>
		<br>
		<h3 class="tituloSeccionBlanco" data-aos="fade-right" data-aos-duration="2000">En tu comunidad</h3>
		<div id="enTuComunidad">

			<div class="contenedorCentro">
				<div class="contNombreCentro">Nombre Centro</div>
				<div class="cajaImgCentro"><img src="media/mariaPadilla.png" alt="" class="imagenCentro"></div>
			</div>

			<div class="contenedorCentro">
				<div class="contNombreCentro">Nombre Centro</div>
				<div class="cajaImgCentro"><img src="media/mariaPadilla.png" alt="" class="imagenCentro"></div>
			</div>

			<div class="contenedorCentro">
				<div class="contNombreCentro">Nombre Centro</div>
				<div class="cajaImgCentro"><img src="media/mariaPadilla.png" alt="" class="imagenCentro"></div>
			</div>

			<div class="contenedorCentro">
				<div class="contNombreCentro">Nombre Centro</div>
				<div class="cajaImgCentro"><img src="media/mariaPadilla.png" alt="" class="imagenCentro"></div>
			</div>

		</div>
	</section>
	<!-- ================================   Fin de secci??n Servicios  ================================ -->









	<!-- ============================= Inicio de secci??n Sobre Nosotros ============================== -->
	<!-- Contenedor Seccion sobre Nosotros -->
	<section id="sobreNosotros">
		<h3 class="tituloSeccionBlanco" data-aos="fade-right" data-aos-duration="2000">Sobre nosotros</h3>
		<div id="contenedorSobreNosotros">

			<div id="cajaTextoSobreNosotros">
				<p class="textoInfoSobreNosotros">Nombre del centro : </p><br><br>
				<p class="textoInfoSobreNosotros">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit
					eius quas
					harum esse aliquam
					accusantium sunt corporis laborum voluptatem? Ad explicabo unde, aliquam temporibus animi architecto
					alias optio excepturi porro.</p><br><br>
				<p class="textoInfoSobreNosotros">Direcci??n : </p>
				<p class="textoInfoSobreNosotros">Correo : </p>
			</div>

			<div id="imgSobreNosotros">
				<img src="media/ImagenSobreNosotros.png" alt="" data-aos="fade-left" data-aos-duration="2000">
			</div>

		</div>
	</section>


	<!-- ==============================  Fin de secci??n Sobre Nosotros  ============================== -->










	<!-- ================================ Inicio de secci??n Contacto ================================= -->
	<!-- Inicio de secci??n Contacto -->
	<section id="contacto">
		<h3 class="tituloSeccionBlanco" data-aos="fade-right" data-aos-duration="2000">Contacto</h3>
		<div id="contenedorContacto">
			<!-- Link hacia mapa de googleMaps -->
			<iframe id="mapa"
				src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1970.2542566596508!2d-3.6906479058621087!3d40.39672585751849!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422639ec9a7f9f%3A0x9cd1cc078133503!2sCentral%20Divisi%C3%B3n%20Ofim%C3%A1tica%20S.L.!5e0!3m2!1ses!2ses!4v1649931866140!5m2!1ses!2ses"
				width="600" height="500" style="border:0;" allowfullscreen="" loading="lazy"
				referrerpolicy="no-referrer-when-downgrade"></iframe>

			<!-- Inicio de formulario de Consultas -->
			<form action="" id="formulario">

				<!-- Cuadros de entrada de datos a formulario -->
				<label for="nombre">Nombre&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
				<input id="nombre" type="text" name="nombre" placeholder="Nombre completo" required><br><br>
				<label for="correo">Correo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
				<input id="correo" type="email" name="correo" placeholder="Correo electronico" required><br><br>
				<label for="clave">Contrase??a :</label>
				<input id="clave" type="password" name="clave" placeholder="Contrase??a" required><br><br>
				<label for="nombre">Consulta &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
				<textarea name="consulta" id="consulta" cols="58" rows="4" placeholder="Escribanos su consulta"></textarea>
				<!-- <input id="consulta" type="text" name="consulta" placeholder="Escribanos su cunsulta" required> --><br><br><br>
				<button id="botonConsulta"><b>Enviar consulta</b></button>
				<!-- 				<input type="button" value="Solicitar cita" id="botonSolicitar" onclick=""> -->
			</form>
			<!-- Fin de formulario -->
		</div>

	</section>
	<!-- ================================= Final de secci??n Contacto ================================= -->








	<!-- ============================== Inicio de secci??n Pie de P??gina ============================== -->

	<footer id="piePagina">
		<div id="redes">
			<i class="fa-brands fa-facebook"></i>
			<i class="fa-brands fa-twitter"></i>
			<i class="fa-brands fa-instagram"></i>
			<i class="fa-brands fa-tiktok"></i>
		</div>
		<div id="derechos">
			<p>2022 - Beauty Connect</p>
			<i class="fa-regular fa-copyright"></i>
		</div>
	</footer>
	<!-- =============================== Final de secci??n Pie de P??gina ============================== -->






	<!-- ===================== Inicializaci??n de las librerias AOS para animaciones ================== -->
	<script>
		AOS.init();
	</script>
	<!-- ============================================================================================= -->

</body>

</html>