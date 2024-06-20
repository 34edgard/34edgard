<?php

class inscripcion {
  public $fecha_inscripcion;
  public $cedula_escolar;
  public $año_escolar;
  public $id_inscripcion;
  
}

class año_escolar {
  public $id_año_escolar;
  public $id_periodo_escolar;
  public $cedula_docente;
  public $id_aula;
  public $id_seccion;
  public $id_nivel;
}

class fecha_inscripcion{
  public $id_fecha_inscripcion;
  public $fecha_inscripcion;
}

class periodo_escolar{
  public $id_periodo_escolar;
  public $periodo;
}

class aula {
  public $id_aulas;
  public $nombre_aula;
}

class seccion {
  public $id_seccion;
  public $nombre_seccion;
}

class nivel {
  public $id_nivel;
  public $nombre_nivel;
}


?>