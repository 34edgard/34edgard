<?php

class inscripcion {
  public $fecha_inscripcion;
  public $cedula_escolar;
  public $año_escolar;
  public $id_inscripcion;
  
    
  public static function registrar_inscripcion(){
    
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
      
    }
    
      public static function consultar_año_escolar(){
      
    }
    
      public static function editar_año_escolar(){
        
      }
      
    
}

class fecha_inscripcion{
  public $id_fecha_inscripcion;
  public $fecha_inscripcion;
  
  public static function registrar_fecha_inscripcion(){
    
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
      
    }
    
    public static function consultar_periodo_escolar(){
          
        }
}

class aula {
  public $id_aulas;
  public $nombre_aula;
  
  public static function registrar_aula(){
        
      }
      
    public static function consultar_aula(){
          
        }  
    public static function editar_aula(){
           
         }   
}

class seccion {
  public $id_seccion;
  public $nombre_seccion;
  
  public static function registrar_seccion(){
        
      }
      
  public static function consultar_seccion(){
        
      }   
     
  public static function editar_seccion(){
        
      }   
}

class nivel {
  public $id_nivel;
  public $nombre_nivel;
  
  public static function registrar_nivel(){
        
      }
      
  public static function editar_nivel(){
        
      }
      
  public static function consulta_nivel(){
        
      }
}


?>