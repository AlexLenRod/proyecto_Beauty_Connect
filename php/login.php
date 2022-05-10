


<!DOCTYPE html>

<html>
	<head>
		<title>Login Beauty Connect</title>
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
         <div id="contenedorLogo"> 
            <img src="../media/logo_BC.png" alt="Imagen logo Beauty Connect" id="logo">
         </div>
         <div id="formulario">
            <h3>Login</h3>
<!--             <form role="form" method="post" action="<?php /* echo htmlspecialchars($_SERVER["PHP_SELF"]); */ ?>"> -->
            <form role="form" method="post" action="controladores/controladorLogin.php">

               <div class="etiquetasLogin" id="usuario">
                  <label for="inputUsuario">Correo electrónico : </label><br>
                  <input type="mail" id="inputUsuario" name="correo" placeholder="Ingrese correo electrónico">
               </div>

               <div class="etiquetasLogin" id="clave">
                  <label for="inputPassword">Contraseña : </label><br>
                  <input type="password" id="inputPassword" name="password" placeholder=" Ingrese contraseña">
               </div>

               <div id="botonLogin">
                  <input type="submit" value="Continuar" name="hacerLogin"/><br>
                  <a href="registroCliente.php">Registro Cliente</a>
                  <a href="registroCentro.php">Registro Centro</a>
               </div>

            </form>

            <?php 

            ?>

         </div>
      </div>
	</body>
</html>