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
 
 public function registrar_datos($cedula,$nombre,$apellido,$contraseña,$id_){
    
    $sql ="INSERT INTO `personal_administrativo` (`ci`,`nombre`,`apellido`,`contrasena`,`id_rol`) VALUES ($cedula, '$nombre', '$apellido', '$contraseña',$id_rol)";
                  
                  
     consultas->ejecutar_consulta($sql);
          
  }
  
  public static function consultar_datos($ci = 1){
    
    if($ci != 1){
        
       $weher = "`ci` = $ci";
        }else{
          $weher =$ci;
        }
    
    $sql ="SELECT * FROM `personal_administrativo` WEHER  $weher";
    
                  
                  
   return  consultas->consultar_reguistro($sql,4);
          
  }
  
  public function editar_datos($cedula,$nombre,$apellido,$contraseña, $id_rol){
   
   $sql = "UPDATE `personal_administrativo` SET `nombre`='$nombre',
   `apellido` = '$apellido', 
   `contrasena` ='$contraseña',
   `id_rol` =$id_rol
   
   WHERE `ci` = $cedula";
   
   consultas->ejecutar_consulta($sql);
 }
  
}



class direccion{
  public $id_calle;
  public $id_direccion;
  public $descripcion;
  
  public static function registrar_direccion(){
      
    }
    
    public static function consultar_direccion(){
      
    }
    
    public static function editar_direccion(){
        
      }
}

class calle{
  public $id_calle;
  public $nombre_calle;
  public $id_sector;
  
  public static function registrar_calle(){
      
    }
    
    public static function consultar_calle(){
      
    }
    
    public static function editar_calle(){
        
      }
}

class sector{
  public $id_sector;
  public $nombre_sector;
  public $id_municipio;
  
  public static function registrar_sector(){
      
    }
    
    public static function consultar_sector(){
      
    }
    
    public static function editar_sector(){
        
      }
}

class municipio{
  public $id_municipio;
  public $nombre_municipo;
  public $id_parroquia;
  
  public static function registrar_municipio(){
      
    }
    
    public static function consultar_municipio(){
      
    }
    
    public static function editar_municipio(){
        
      }
}

class parroquia {
  public $id_parroquia;
  public $nombre_parroquia;
  public $id_estado;
  
  public static function registrar_parroquia(){
      
    }
    
    public static function consultar_parroquia(){
      
    }
    
    public static function editar_parroquia(){
        
      }
}

class estado {
  public $id_estado;
  public $nombre_estado;
  public $id_pais;
  
  public static function registrar_estado(){
      
    }
    
    public static function consultar_estado(){
      
    }
    
    public static function editar_estado(){
        
      }
}

class pais {
  public $id_pais;
  public $nombre_pais;
  
  public static function registrar_pais(){
    
  }
  
  public static function consultar_pais(){
    
  }
  
  public static function editar_pais(){
      
    }
}


class telefono {
  public $id_telefono;
  public $numero;
  
  public static function  reguistrar_telefono($numero_telefono){
    
    $sql = "INSERT INTO `telefono` (`numero`) VALUES ($numero_telefono)";
    
    consultas->ejecutar_consulta($sql);
    $sql = "SELECT `id_telefono` FROM `telefono` ORDER BY `id_telefono` DESC LIMIT 1";
    
   $this->id_telefono = consultas->ejecutar_consulta($sql);
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
   $sql ="INSERT INTO `rol` (`nombre_rol`) VALUES ($nombre_rol)";
              
              
 consultas->ejecutar_consulta($sql);
      
 }
 
 public static function consultar_rol($id_rol){
   $sql ="SELECT `nombre_rol` FROM `rol` WEHER `id_rol` = $id_rol";
              
              
 return consultas->consultar_registro($sql);
      
 }
 
 public static function editar_rol(){
   
 }
}

class sesion{
  public $cedula;
  public $fecha_sesion;
  public $hora_inicio;
  public $hora_cierre;
  public $id_sesion;
  
  public static function registrar_sesion($cedula){
      
 $fecha_sesion = date('Y-m-d');
 $hora_inicio =date('h:i');
 
$sql = "INSERT INTO `seciones`(`ci`, `fecha`,`hora_inicio`,`hora_cierre`) VALUES ($cedula,'$fecha_nacimiento','$hora_inicio','$hora_inicio')";

consultas->ejecutar_consulta($sql) ;

    }
    
    public static function consultar_sesion($cedula){
      
      $sql = "SELECT * FROM `seciones` WHERE `ci` = $cedula";
return consultas->consultar_reguistro($sql,4);
    }
    
    public static function editar_sesion($cedula){ 
        
        
  $hora_cierre =date('h:i');
$sql = "UPDATE `sesiones` SET `hora_cierre`='$hora_cierre'

WHERE `ci` = $cedula ORDER BY `id_secion` DESC LIMIT 1";

consultas->ejecutar_consulta($sql) ;
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
  
  public static function registrar_parentesco($id_tipo_parentesco,$cedula_escolar, $cedula_reprecentante){
      
      $sql ="INSERT INTO `parentesco` (`id_tipo_parentesco`,`cedula_escolar`,`ci`) VALUES ($id_tipo_parentesco,$cedula_escolar, $cedula_reprecentante)";
              
              
 consultas->ejecutar_consulta($sql);
      
    }
    
    public static function consultar_perentesco(){
      
    }
    
    public static function editar_parentesco(){
        
      }
}

class tipo_parentesco{
  public $id_tipo_parentesco;
  public $nombre_parentesco;
  
  public static function registrar_tipo_parentesco($nombre_parentesco){
      
      $sql ="INSERT INTO `tipo_parentesco` (`nombre_parentesco`) VALUES ('$nombre_parentesco')";
              
              
 consultas->ejecutar_consulta($sql);
      
      
    }
    
    public static function consultar_tipo_parentesco(){
      
    }
    
    public static function editar_tipo_parentesco(){
        
      }
}

class procedencia{
  public $id_procedencia;
  public $nombre_procedencia;
  
  public static function registrar_procedencia($nombre_procedencia){
      $sql ="INSERT INTO `procedencia` (`nombre_procedencia`) VALUES ('$nombre_procedencia')";
              
              
 consultas->ejecutar_consulta($sql);
      
    }
    
    public static function consultar_procedencia(){
      
    }
    
    public static function editar_procedencia(){
        
      }
}

class condicion_medica{
  public $id_condicion;
  public $nombre_condicion;
  
  public static function registrar_condicion_medica($nombre_condicion){
      $sql ="INSERT INTO `condicion_medica` (`nombre_condicion`) VALUES ('$nombre_condicion')";
              
              
consultas->ejecutar_consulta($sql);
      
    }
    
    public static function consultar_condicion_medica(){
      
    }
    
    public static function editar_condicion_medica(){
        
      }
}

class tratamiento{
  public $id_condicion;
  public $id_tratamiento;
  public $nombre_tratamiento;
  
  public static function registrar_tratamiento(){
      $sql ="INSERT INTO `tratamiento` (`id_condicion`,`nombre_tratamiento`) VALUES ($id_condicion, '$nombre_tratamiento')";
              
              
 consultas->ejecutar_consulta($sql);
      
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
      
      $sql ="INSERT INTO `discapacidad` (`nombre_discapacidad`) VALUES ('$nombre_discapacidad')";
        
        
 consultas->ejecutar_consulta($sql);

    }
    
    public static function consultar_discapacidad(){
      
    }
    
    public static function editar_discapacidad(){
        
      }
}
?>