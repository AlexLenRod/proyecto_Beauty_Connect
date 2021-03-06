<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- ========= Referencia al archio estilos.css que dara formato y estilo a la pagina web ========= -->
   <link rel="stylesheet" href="CSS/estilos.css">
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
         <!-- <li class="titulosMenuPpal"><a href="#servicios"><b>Servicios</b></a>
				
			</li> -->


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
            <a href="php/login.php"><i class="fa-regular fa-circle-user"></i></a>
         </div>
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

   </section>
   <!-- ================================   Fin de secci??n Servicios  ================================ -->











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