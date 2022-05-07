







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
         <div id="formularioRegistroCliente">
            <h3>Registro cliente</h3>
            <form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

               <div class="etiquetasRegistro" id="nombreCliente">
                  <label for="inputNombreCliente">Nombre : </label><br>
                  <input type="text" id="inputCliente" name="nombre" placeholder="Ingrese nombre completo">
               </div>

               <div class="etiquetasRegistro" id="correoCliente">
                  <label for="inputCorreoCliente">Correo electrónico : </label><br>
                  <input type="mail" id="inputCorreoCliente" name="correo" placeholder="Ingrese correo electrónico">
               </div>

               <div class="etiquetasRegistro" id="claveCliente">
                  <label for="inputPassword">Contraseña : </label><br>
                  <input type="password" id="inputPasswordCliente" name="passwordCliente" placeholder=" Ingrese contraseña">
               </div>

               <div class="etiquetasRegistro" id="nifCliente">
                  <label for="inputNifCliente">NIF : </label><br>
                  <input type="text" id="inputNifCliente" name="dni" placeholder="Ingrese DNI">
               </div>

               <div class="etiquetasRegistro" id="telefonoCliente">
                  <label for="inputTelCliente">Teléfono movil/fijo : </label><br>
                  <input type="number" id="inputTelCliente" name="telefono" placeholder="Ingrese número de teléfono móvil/Fijo">
               </div>

               <div id="botonRegistro">
                  <input type="submit" value="Registrar" name="registroCliente"/><br>
<!--                   <a href="registroCliente.php">Registrarse</a> -->
               </div>

            </form>

         </div>
      </div>
	</body>
</html>