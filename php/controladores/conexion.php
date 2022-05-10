<?php
/* ========================= Conexion a la base de datos ========================= */

   $servidor = 'localhost';
   $usuario = 'root';
   $password = '';
   $basededatos = 'beauty_connect';
   
   $conectar_Mysql = mysqli_connect($servidor, $usuario, $password, $basededatos);

   if ($conectar_Mysql->connect_errno)
   {
      printf("Error al conectar a la base de datos :%s\n", $conectar_Mysql->connect_error);
      exit;
   }
/* =============================================================================== */
?>