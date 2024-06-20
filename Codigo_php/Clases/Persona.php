<?php



class persona{
  public $cedula;
  public $nombre;
  public $apellido;
  public $fecha_nacimiento;
  public $id_telefono;
  public $id_nacionalidad;
  
  public function registrar_datos(){
    
  }
  
  public function consultar_datos(){
    
  }
  
  public function editar_datos(){
   
 }
  
}


class estudiante extends persona{
  public $id_sexo;
  public $id_estado_nutricional;
  public $id_procedencia;
  public $direccion;
  public $lugar_nacimiento;
  public $id_codicion;
  public $id_discapacidad;
}

class reprecentante extends persona{
  public $direccion_trabajo;
  public $direccion_habitacion;
  public $ocupacion;
  public $nivel_instruccion;
  public $id_codicion;
  public $id_discapacidad;
}

class docente extends persona{
  public $aula_asignada;
}

class personal_administrativo extends persona{
 private $contraseña;
 public $id_rol;
  
}



class direccion {
  public $id_calle;
  public $id_direccion;
}

class calle {
  public $id_calle;
  public $nombre_calle;
  public $id_sector;
}

class sector{
  public $id_sector;
  public $nombre_sector;
  public $id_municipio;
}

class municipio {
  public $id_municipio;
  public $nombre_municipo;
  public $id_parroquia;
}

class parroquia {
  public $id_parroquia;
  public $nombre_parroquia;
  public $id_estado;
}

class estado {
  public $id_estado;
  public $nombre_estado;
  public $id_pais;
}

class pais {
  public $id_pais;
  public $nombre_pais;
}


class telefono {
  public $id_telefono;
  public $numero;
}

class sexo{
  public $id_sexo;
  public $nombre_sexo;
}

class estado_nutricional{
  public $id_estado_nutricional;
  public $descripcion;
}

class tallas {
  public $id_prenda;
  public $cedula_escolar;
  public $talla;
  public $id_talla;
}

class prendas{
  public $id_prenda;
  public $nombre_prenda;
}

class documentos{
  public $id_documento;
  public $nombre_documento;
}

class precentado{
  public $id_precentado;
  public $id_documento;
  public $cedula_escolar;
}

class ocupacion{
  public $id_ocupacion;
  public $nombre_ocupacion;
}

class nivel_instruccion{
  public $id_nivel_instruccion;
  public $nombre_nivel_instruccion;
}

class nacionalidad{
  public $id_nacionalidad;
  public $nombre_nacinalidad;
}

class rol{
  public $id_rol;
  public $nombre_rol;
}

class session{
  public $cedula;
  public $fecha_session;
  public $hora_inicio;
  public $hora_cierre;
  public $id_session;
}

class operacion{
  public $id_session;
  public $id_operacion;
  public $descripcion;
}


class parentesco{
  public $id_tipo_parentesco;
  public $cedula_reprecentante;
  public $cedula_escolar;
}

class tipo_parentesco{
  public $id_tipo_parentesco;
  public $nombre_parentesco;
}

class procedencia{
  public $id_procedencia;
  public $nombre_procedencia;
}

class condicion_medica{
  public $id_codicion;
  public $nombre_condicion;
}

class tratamiento{
  public $id_codicion;
  public $id_tratamiento;
  public $descripcion_tratamiento;
}

class discapacidad{
  public $id_discapacidad;
  public $nombre_discapacidad;
}
?>