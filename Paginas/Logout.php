<?php
session_start();



include('../Codigo_php/Clases/Conexion.php');
include('../Codigo_php/Clases/Persona.php');

  $ci = $_SESSION['ci'];
  
  sesion->editar_sesion($ci);
  
// Redirigir al usuario a otra página
// Eliminar todos los datos de la sesión
session_unset();

// Destruir la sesión
session_destroy();
header("Location: ../Index.php");
exit;
?>
