<?php
 extract($_POST);
   
 
 
  if(isset($_POST['formulario'])){
    



  $conn = new consultas;

switch($_POST['formulario']){
  case 'crear':
    
$sql = "
INSERT INTO `personal_administrativo`(`ci`, `nombre`, `apellido`, `contrasena`,`id_rol`) VALUES ($CI,'$usu','$ape','$pass',$rol)";
  break;
  case 'cambiar':
    
$sql = "UPDATE `personal_administrativo` SET `nombre`='$usu2',
`apellido` = '$ape2', 
`contrasena` ='$pass2',
`id_rol` =$id_rol

WHERE `ci` = $CI2";
  break;
}

$conn->insertar_reguistro($sql);



  }

?>
<div class="container mt-5">
      <h1><small>ajustes</small></h1>

      

      <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item" role="presentation">
          <button type="button" class="nav-link active" data-bs-toggle="tab" data-bs-target="#general" role="tab" aria-selected="true">reguistro de usuarios</button>
        </li>
      
        <li class="nav-item" role="presentation">
          <button type="button" class="nav-link" data-bs-toggle="tab" data-bs-target="#usuarios" role="tab">usuarios</button>
        </li>

      </ul>

      <div class="tab-content" role="tablist">
        <div class="tab-pane active" id="general" role="tabpanel">
<form action="Pag_9.php" method="post">
  <fieldset class="thumbnail container mt-5">
    <label class="form-label"> 
    cedula
      <input type="number" name="CI" class="form-control w-75">
    </label>
    <label class="form-label"> 
    nombre 
      <input type="text" name="usu" class="form-control w-75">
    </label>
    <label class="form-label"> 
    apellido
      <input type="text" name="ape" class="form-control w-75">
    </label>
    <label class="form-label"> 
    rol
      <input type="text" name="rol" class="form-control w-75">
    </label>
    <label class="form-label"> 
    contraseña
      <input type="password" name="pass" class="form-control w-75" maxlength="8">
    </label>
    <button type="submit" class="btn btn-primary" name="formulario" value="crear">Crear Usuarion</button>
    <button type="reset" class="btn btn-danger">borrar</button>
  </fieldset>
</form>

        </div>
      
        <div class="tab-pane" id="usuarios" role="tabpanel">
       

 <?php
$conn = new consultas;
 
 

$clave = "SELECT * FROM `personal_administrativo` RIGHT JOIN `roles` ON `personal_administrativo`.`id_rol` = `roles`.`id_rol`";
 
$arreglo = $conn->consultar_reguistro($clave,$logitud =6);
 
 ?>
   <table class="table table-bordered"> 
 <tr>

 
 <td>ci</td> 
 <td>nombre</td>
 <td>apellido</td>
 <td>rol</td> 
 <td>contraseña</td> 
 
 <td></td> 
 <td></td> 
 
 </tr> 
 
 <?php
$a =0;
$i =0;
while($arreglo[$a][0])
 { 
   
 echo '<tr>
<td>'. $arreglo[$a][0] .'</td>
<td>'. $arreglo[$a][1] .'</td>
<td>'. $arreglo[$a][2] .'</td>
<td>'. $arreglo[$a][5] .'</td>
<td>'. $arreglo[$a][3] .'</td>

<td>

 
 
  
  <div class="modal fade" id="firefoxModal'.$i.'" tabindex="-1" aria-labelledby="firefoxModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="firefoxModalLabel">Firefox Bug Test</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">
                    

 <form action="Pag_9.php" method="post">
  <fieldset class="thumbnail container mt-5">
  <label class="form-label"> 
    cedula
      <input type="number" name="CI2" class="form-control w-75" value='.$arreglo[$a][0] .'>
    </label>
    <label class="form-label"> 
    nombre 
      <input type="text" name="usu2" class= form-control w-75" value='.$arreglo[$a][1] .'>
    </label>
    <label class="form-label"> 
    apellido
      <input type="text" name="ape2" class= form-control w-75" value='.$arreglo[$a][2] .'>
    </label>
    <label class="form-label"> 
    rol
      <input type="text" name="rol2" class="form-control w-75" value='.$arreglo[$a][5] .'>
    </label>
    <label class="form-label"> 
    contraseña
      <input type="password" name="pass2" class="form-control w-75 "  value='.$arreglo[$a][3] .'>
      </label><label>id_rol
      <input type="number" name="id_rol" class="form-control w-75 "  value='.$arreglo[$a][4] .'>
    </label>
    <button type="submit" class="btn btn-primary" name="formulario" value="cambiar">cambiar</button>
    <button type="reset" class="btn btn-danger">borrar</button>
  </fieldset>
</form>
 

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
  <button type="button" class="btn btn-secondary " data-bs-toggle="modal" data-bs-target="#firefoxModal'.$i.'">
        editar
      </button>

</td><td>
  <div class="modal fade" id="firefoxModa'.$i.'" tabindex="-1" aria-labelledby="firefoxModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="firefoxModalLabel">Firefox Bug Test</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">
                    
<ul>';
$id = $arreglo[$a][0] ;
$clave = "SELECT * FROM `seciones` WHERE `ci` = $id";
 
$lista_secciones = $conn->consultar_reguistro($clave,$logitud =2);
 $c =0;
 echo "<table class='table table-bordered'>";
 if(!$lista_secciones){
   echo "<h3> lo siento este usuario no tiene historial</h3>";
 }
 
 while($lista_secciones[$c][0]){
   echo "<tr><td>".$lista_secciones[$c][1]."</td><td>".$lista_secciones[$c][2]."</td></tr>" ;
   
   $c++;
 }
echo '</table>


            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
  <button type="button" class="btn btn-secondary " data-bs-toggle="modal" data-bs-target="#firefoxModa'.$i.'">
        historial
      </button>
</td>
 </tr>';
$a = $a +1;
$i = $i +1;
 } 
 ?>
</table>
            </div>
      
      </div>