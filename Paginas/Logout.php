<?php
session_start();



include('../Codigo_php/Clases/Conexion.php');

  $conn = new consultas;
  $ci = $_SESSION['ci'];
  $hc =date('h:i');
$sql = "UPDATE `seciones` SET `hora_cierre`='$hc'

WHERE `ci` = $ci ORDER BY `id_secion` DESC LIMIT 1";
//SELECT * FROM `seciones` WHERE `ci` = 30117454 ORDER BY `id_secion` DESC LIMIT 1
$conn->insertar_reguistro($sql) ;
// Redirigir al usuario a otra página
// Eliminar todos los datos de la sesión
session_unset();

// Destruir la sesión
session_destroy();
header("Location: ../Index.php");
exit;
?>
