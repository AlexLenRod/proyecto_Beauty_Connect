<?php 
   include "controladores/conexion.php";

if ($conectar_Mysql) {
   echo "Conexion establecida";

   if (isset($_POST['registroCliente'])) {

      if (strlen($_POST['nombre']) >= 1 &&
         strlen($_POST['correo']) >= 1 &&
         strlen($_POST['passwordCliente']) >= 1 &&
         strlen($_POST['dni']) >= 1 &&
         strlen($_POST['telefono']) >= 1) {

         $nombre = trim($_POST['nombre']);
         $correo = trim($_POST['correo']);
         $clave = trim($_POST['passwordCliente']);
         $dni = trim($_POST['dni']);
         $telefono = trim($_POST['telefono']);

         $consulta = "INSERT INTO cliente (Nombre, Email, Clave, DNI, Telefono) 
                           VALUES ('$nombre','$correo','$clave','$dni','$telefono')";

         $resultado = mysqli_query($conectar_Mysql, $consulta);

         if ($resultado) {
            
            echo "usuario registrado";

         } else {

            echo "errrrrrrooooooorrrrrrrr";

         }
      }  else {

            echo "Por favor completa todos los campos";

         }

   }
}
?>



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
                  <input type="text" id="inputPasswordCliente" name="passwordCliente" placeholder=" Ingrese contraseña">
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
               </div>

            </form>

         </div>
      </div>
	</body>
</html>