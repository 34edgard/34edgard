<?php

class conexiones
{
  public $puerto = "0.0.0.0:3306";
  public $usuario = "root";
  public $contrasena = "root";
  public $baseDeDatos = "Proyecto_v6";
  public $enlace;
  public function conectarse()
  {
    if (
      !($this->enlace = mysqli_connect(
        $this->puerto,
        $this->usuario,
        $this->contrasena
      ))
    ) {
      echo "Error conectando a la base de datos.<br>";
      exit();
    }

    if (!mysqli_select_db($this->enlace, $this->baseDeDatos)) {
      echo "Error seleccionando la base de datos.<br>";
      exit();
    } else {
      return $this->enlace;
    }
  }

  public function cerrar_conexion()
  {
    mysql_close($this->enlace);
  }
}

class consultas extends conexiones
{
  public  function ejecutar_consulta($sql)
  {
    $enlace = $this->conectarse();
    $consulta = mysqli_query($enlace, $sql);

    if (!$consulta) {
      echo "fallo el reguistrado " . $conn->error;
    }

    mysqli_close($enlace);
  }

  public function consultar_registro($clave, $logitud = 1)
  {
    $enlace = $this->conectarse();
    

    $result = mysqli_query($enlace, $clave);
    $a = 0;
if ($result) {
    while ($row = mysqli_fetch_array($result)) {
      for ($i = 0; $i <= $logitud; $i++) {
        $arreglo[$a][$i] = $row[$i];
      }
      $a++;
    }
    
      mysqli_free_result($result);
    }
    mysqli_close($enlace);

    return $arreglo;
  }
}


?>
