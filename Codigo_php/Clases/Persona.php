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
  
  public static function  reguistrar_telefono($numero_telefono){
    
    $sql = "INSERT INTO `telefono` (`numero`) VALUES ($numero_telefono)";
    
    consultas->insertar_reguistro($sql);
    $sql = "SELECT `id_telefono` FROM `telefono` ORDER BY `id_telefono` DESC LIMIT 1";
    
   $this->id_telefono = consultas->consultar_registro($clave);
   return $this->id_telefono[0][0];
    
  }
  
  public static function consultar_telefono($id_telefono){
    $sql ="SELECT `numero` FROM `telefono` WEHER `id_telefono` = $id_telefono";
    
   $this->numero = consultas->consultar_registro($sql);
   
   return $this->numero[0][0];
  }
  
  public static function editar_telefono($id_telefono, $numero_telefono){
    
  }
}

class sexo{
  public $id_sexo;
  public $nombre_sexo;
  
  public static function registrar_sexo(){
    
  }
  
  public static function consultar_sexo(){
    
  }
  
  public static function editar_sexo(){
      
    }
}

class estado_nutricional{
  public $id_estado_nutricional;
  public $descripcion;
  
  public static function registrar_estado_nutricional(){
      
    }
    
  public static function consultar_estado_nutricional(){
        
      }  
      
  public static function editar_estado_nutricional(){
        
      }    
}

class tallas {
  public $id_prenda;
  public $cedula_escolar;
  public $talla;
  public $id_talla;
  
  public static function registrar_tallas(){
      
    }
    
    public static function consultar_tallas(){
      
    }
    
    public static function editar_tallas(){
        
      }
}

class prendas{
  public $id_prenda;
  public $nombre_prenda;
  
  public static function registrar_prendas(){
      
    }
    
    public static function consultar_prendas(){
      
    }
    
    public static function editar_prendas(){
        
      }
}

class documentos{
  public $id_documento;
  public $nombre_documento;
  
  public static function registrar_documentos(){
      
    }
    
    public static function consultar_documentos(){
      
    }
    
    public static function editar_documentos(){
        
      }
}

class precentado{
  public $id_precentado;
  public $id_documento;
  public $cedula_escolar;
  
  public static function registrar_precentados(){
      
    }
    
    public static function consultar_precentados(){
      
    }
    
    public static function editar_precentados(){
        
      }
}

class ocupacion{
  public $id_ocupacion;
  public $nombre_ocupacion;
  
  public static function registrar_precentados(){
      
    }
    
    public static function consultar_precentados(){
      
    }
    
    public static function editar_precentados(){
        
      }
}

class nivel_instruccion{
  public $id_nivel_instruccion;
  public $nombre_nivel_instruccion;
  
  public static function registrar_nivel_instruccion(){
      
    }
    
    public static function consultar_nivel_instruccion(){
      
    }
    
    public static function editar_nivel_instruccion(){
        
      }
}

class nacionalidad{
  public $id_nacionalidad;
  public $nombre_nacinalidad;
  
  public static function registrar_nacionalidad(){
      
    }
    
    public static function consultar_nacionalidad(){
      
    }
    
    public static function editar_nacionalidad(){
        
      }
}

class rol{
  public $id_rol;
  public $nombre_rol;
  
 public static function registrar_rol($nombre_rol){
   
 }
 
 public static function consultar_rol($id_rol){
   
 }
 
 public static function editar_rol(){
   
 }
}

class session{
  public $cedula;
  public $fecha_session;
  public $hora_inicio;
  public $hora_cierre;
  public $id_session;
  
  public static function registrar_session(){
      
    }
    
    public static function consultar_session(){
      
    }
    
    public static function editar_session(){
        
      }
}

class operacion{
  public $id_session;
  public $id_operacion;
  public $descripcion;
  
  public static function registrar_operacion(){
      
    }
    
    public static function consultar_operacion(){
      
    }
    
    public static function editar_operacion(){
        
      }
}


class parentesco{
  public $id_tipo_parentesco;
  public $cedula_reprecentante;
  public $cedula_escolar;
  
  public static function registrar_parentesco(){
      
    }
    
    public static function consultar_perentesco(){
      
    }
    
    public static function editar_parentesco(){
        
      }
}

class tipo_parentesco{
  public $id_tipo_parentesco;
  public $nombre_parentesco;
  
  public static function registrar_tipo_parentesco(){
      
    }
    
    public static function consultar_tipo_parentesco(){
      
    }
    
    public static function editar_tipo_parentesco(){
        
      }
}

class procedencia{
  public $id_procedencia;
  public $nombre_procedencia;
  
  public static function registrar_procedencia(){
      
    }
    
    public static function consultar_procedencia(){
      
    }
    
    public static function editar_procedencia(){
        
      }
}

class condicion_medica{
  public $id_codicion;
  public $nombre_condicion;
  
  public static function registrar_condicion_medica(){
      
    }
    
    public static function consultar_condicion_medica(){
      
    }
    
    public static function editar_condicion_medica(){
        
      }
}

class tratamiento{
  public $id_codicion;
  public $id_tratamiento;
  public $descripcion_tratamiento;
  
  public static function registrar_tratamiento(){
      
    }
    
    public static function consultar_tratamiento(){
      
    }
    
    public static function editar_tratamiento(){
        
      }
}

class discapacidad{
  public $id_discapacidad;
  public $nombre_discapacidad;
  
  public static function registrar_discapacidad(){
      
    }
    
    public static function consultar_discapacidad(){
      
    }
    
    public static function editar_discapacidad(){
        
      }
}
?>