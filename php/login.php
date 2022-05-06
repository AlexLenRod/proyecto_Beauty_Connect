
<?php 
/* 
   session_start();

   require "controladores/controladorUsuarios.php"; 



   if(isset($_POST["hacerLogin"]))
   {
      $usuario = obtenerUsuario($_POST["nombre"], $_POST["password"]);

      if($usuario)
      {
         hacerLogin($usuario);
      }
      else
      {
         $error = "El usuario o la contraseña no son válidos";
      }
   }
 */
?>

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
      <div id="contenedorlogin">
         <div id="contenedorLogo"> 
            <img src="../media/logo_BC.png" alt="Imagen logo Beauty Connect" id="logo">
         </div>
         <div id="formulario">
            <form role="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

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
                  <a href="registro.php">Registrarse</a>
               </div>

            </form>

            <?php /*
               if(isset($error))
               echo $error; */
            ?>

         </div>
      </div>
	</body>
</html>