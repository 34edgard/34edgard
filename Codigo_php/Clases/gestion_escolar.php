<?php

class inscripcion {
  public $fecha_inscripcion;
  public $cedula_escolar;
  public $año_escolar;
  public $id_inscripcion;
  
    
  public static function registrar_inscripcion(){
    
    $sql ="INSERT INTO `inscripcion` (`cedula_escolar`,`id_fecha`,`id_año`) VALUES (`$cedula_escolar`,`".registrar_fecha_inscripcion($fecha_inscripcion)."`,$id_año_escolar)";
            
            
 consultas->ejecutar_consulta($sql);
    
  }
  
    public static function consultar_inscripcion(){
    
  }
  
    public static function editar_inscripcion(){
      
    }
    
  
}

class año_escolar {
  public $id_año_escolar;
  public $id_periodo_escolar;
  public $cedula_docente;
  public $id_aula;
  public $id_seccion;
  public $id_nivel;
  
    
    public static function registrar_año_escolar(){
      $sql ="INSERT INTO `año_escolar` (`id_periodo_escolar`,`id_nivel`,`ci`,`id_aula`,`id_seccion`) VALUES ($id_periodo_escolar,$id_nivel,$cedula_docente,$id_aula,$id_seccion)";
              
              
 consultas->ejecutar_consulta($sql);
      
    }
    
      public static function consultar_año_escolar(){
      
    }
    
      public static function editar_año_escolar(){
        
      }
      
    
}

class fecha_inscripcion{
  public $id_fecha_inscripcion;
  public $fecha_inscripcion;
  
  public static function registrar_fecha_inscripcion($fecha_inscripcion){
    $sql ="INSERT INTO `fecha_de_inscripcion` (`fecha_inscripcion`) VALUES ('$fecha_inscripcion')";
            
            
 consultas->ejecutar_consulta($sql);
     
     $sql = "SELECT `id_fecha` FROM `fecha_inscripcion` ORDER BY `id_fecha` DESC LIMIT 1";
 $this->id_fecha_inscripcion = consultas->ejecutar_consulta($sql);
   return $this->id_fecha_inscripcion[0][0];
    
  }
  
    public static function consultar_fecha_inscripcion(){
    
  }
  
    public static function editar_fecha_inscripcion(){
      
    }
    
  
}

class periodo_escolar{
  public $id_periodo_escolar;
  public $periodo;
  
    public static function registrar_periodo_escolar(){
      
      
      $sql ="INSERT INTO `periodo_escolar` (`periodo`) VALUES ('$periodo')";
              
               
 consultas->ejecutar_consulta($sql);
      
    }
    
    public static function consultar_periodo_escolar(){
          
        }
}

class aula {
  public $id_aulas;
  public $nombre_aula;
  
  public static function registrar_aula(){
        
     $sql ="INSERT INTO `niveles` (`nombre_aulas`) VALUES ('$nombre_aula')";
                
                
 consultas->ejecutar_consulta($sql);
        
      }
      
    public static function consultar_aula(){
          
        }  
    public static function editar_aula(){
           
         }   
}

class seccion {
  public $id_seccion;
  public $nombre_seccion;
  
  public static function registrar_seccion($nombre_seccion){
        
        $sql ="INSERT INTO `secciones` (`nombre_seccion`) VALUES ('$nombre_seccion')";
        
        
 consultas->ejecutar_consulta($sql);

      }
      
  public static function consultar_seccion(){
        
      }   
     
  public static function editar_seccion(){
        
      }   
}

class nivel {
  public $id_nivel;
  public $nombre_nivel;
  
  public static function registrar_nivel($nombre_nivel){
        
        $sql ="INSERT INTO `niveles` (`nombre_nivel`) VALUES ('$nombre_nivel')";
        
        
            consultas->ejecutar_consulta($sql);

      }
      
  public static function editar_nivel(){
        
      }
      
  public static function consulta_nivel(){
        
      }
}


?>