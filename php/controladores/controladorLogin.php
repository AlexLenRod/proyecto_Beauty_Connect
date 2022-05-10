
<?php
// Iniciar la sesión y la conexión a bd
require 'conexion.php';

// Recoger datos del formulario
if(isset($_POST)){
	
	// Borrar error antiguo
	if(isset($_SESSION['error_login'])){
		session_unset($_SESSION['error_login']);
	}
			
	// Recoger datos del formulario
	$email = trim($_POST['correo']);
   var_dump($email);
	$password = $_POST['password'];
   var_dump($password);
	
	// Consulta para comprobar las credenciales del usuario
	$sql = "SELECT * FROM cliente WHERE Email = '$email' AND Clave = '$password'";
   var_dump($sql);
	$login = mysqli_query($conectar_Mysql, $sql);
   var_dump($login);
	
	if($login && mysqli_num_rows($login) == 1){
		$usuario = mysqli_fetch_assoc($login);
      var_dump($usuario);
		
		// Comprobar la contraseña
		$verify = password_verify($password, $usuario['Clave']);
      var_dump($verify);
		
		if($verify){
			// Utilizar una sesión para guardar los datos del usuario logueado
			$_SESSION['usuario'] = $usuario;
			
		}else{
			// Si algo falla enviar una sesión con el fallo
			$_SESSION['error_login'] = "Login incorrecto!!";
		}
	}else{
		// mensaje de error
		$_SESSION['error_login'] = "Login incorrecto!!";
	}
}

// Redirigir al index.php
header('Location: ../../index.php');
?>

