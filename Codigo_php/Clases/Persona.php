<?php

class persona{
  public $nombre ;
  public $apellido ;
  public $fecha_nacimiento;
  public $telefono;
  public $nacionalidad;
  
  public function registrar_datos(){
    
  }
  
  public function consultar_datos(){
    
  }
  
  public function editar_datos(){
   
 }
  
}


class estudiante extends persona{
  public $sexo;
  public $estado_nutricional;
  public $procedencia;
  public $tallas;
  public $documentos_precentados;
  
}

class reprecentante extends persona{
  public $ocupacion;
  public $nivel_instruccion;
}

class docente extends persona{
  public $aula_asignada;
}

class usuario extends persona{
 private $contraseña;
 public $rol;
  
}



class direccion {
  public $pais;
  public $estado;
  public $municipio;
  public $parroquia;
  public $sector;
  public $calle;
}


class telefono {
  public $id_telefono;
  public $numero;
}


class inscripcion {
  public $fecha_inscripcion;
  public $periodo_escolar;
  public $nivel;
  public $seccion;
  public $aula;
  
}

?>