






<!DOCTYPE html>

<html>
	<head>
		<title>Registro Cliente Beauty Connect</title>
      <link rel="stylesheet" href="../css/estilosForms.css">
         
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

    </head>
	<body>
      <div id="contenedorFormulario">
         <div id="contenedorLogoRegistro"> 
            <img src="../media/logo_BC.png" alt="Imagen logo Beauty Connect" id="logoRegistro">
         </div>
         <div id="formularioRegistroCentro">
            <h3>Registro centro</h3>
            <form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

               <div class="etiquetasRegistro" id="nombreCentro">
                  <label for="inputNombreCentro">Nombre del centro : </label><br>
                  <input type="text" id="inputCentro" name="nombre" placeholder="Ingrese nombre completo">
               </div>

               <div class="etiquetasRegistro" id="correoCentro">
                  <label for="inputCorreoCentro">Correo electrónico : </label><br>
                  <input type="mail" id="inputCorreoCentro" name="correo" placeholder="Ingrese correo electrónico">
               </div>

               <div class="etiquetasRegistro" id="claveCentro">
                  <label for="inputPassword">Contraseña : </label><br>
                  <input type="password" id="inputPasswordCentro" name="passwordCentro" placeholder=" Ingrese contraseña">
               </div>

               <div class="etiquetasRegistro" id="nifCentro">
                  <label for="inputNifCentro">CIF : </label><br>
                  <input type="text" id="inputNifCentro" name="dni" placeholder="Ingrese DNI">
               </div>

               <div class="etiquetasRegistro" id="telefonoCentro">
                  <label for="inputTelCentro">Teléfono movil/fijo : </label><br>
                  <input type="number" id="inputTelCentro" name="telefono" placeholder="Ingrese número de teléfono móvil/Fijo">
               </div>

               <div class="etiquetasRegistro" id="comunidadAutoCentro">
                  <label for="inputComunidadCentro">Teléfono movil/fijo : </label><br>
                  <input type="text" id="inputComunidadCentro" name="comunidadAutonoma" placeholder="Ingrese comunidad Autonoma">
               </div>

               <div id="botonRegistro">
                  <input type="submit" value="Registrar" name="registroCentro"/><br>
               </div>

         </div>
      </div>
	</body>
</html>