<?php 
require_once('../../class/Conexion.php');
require_once('../../class/Alumno.php');

$P = $_POST['MODAL_F1'];
$E = $_POST['MODAL_F2'];
$S = $_POST['MODAL_F3'];
$G = $_POST['MODAL_F4'];
$R = $_POST['MODAL_F5'];
$T = $_POST['MODAL_F6'];
$SX = $_POST['MODAL_F7'];
$ET = $_POST['MODAL_F8'];
$IN = $_POST['MODAL_F9'];
$EG = $_POST['MODAL_F10'];
$NA = $_POST['MODAL_F11'];
$periodoActualizado = $_POST['actualizarPeriodo'];
$semestreActualizado = $_POST['actualizarSemestre'];
$grupoActualizado = $_POST['actualizarGrupo'];
$turnoActualizado = $_POST['actualizarTurno'];
$estatusActualizado = $_POST['actualizarEstatus'];
$ingresoActualizado = $_POST['actualizarIngreso'];
$egresoActualizado = $_POST['actualizarEgreso'];

$alumno = Alumno::filtrar($P, $E, $S, $G, $R, $T, $SX, $ET, $IN, $EG, $NA);

if ($periodoActualizado!=""){
  foreach ($alumno as $item): 
    $query = "UPDATE alumnos SET periodofk='".$periodoActualizado."' WHERE alumnopk='".$item["alumnopk"]."'";    
    $prueba = Alumno::actualizarMasivo($query);  
  endforeach;
}

if ($semestreActualizado!=""){
  foreach ($alumno as $item): 
    $query = "UPDATE alumnos SET semestre='".$semestreActualizado."' WHERE alumnopk='".$item["alumnopk"]."'";    
    $prueba = Alumno::actualizarMasivo($query);  
  endforeach;
}

if ($grupoActualizado!=""){
  foreach ($alumno as $item): 
    $query = "UPDATE alumnos SET grupo='".$grupoActualizado."' WHERE alumnopk='".$item["alumnopk"]."'";    
    $prueba = Alumno::actualizarMasivo($query);  
  endforeach;
}

if ($turnoActualizado!=""){
  foreach ($alumno as $item): 
    $query = "UPDATE alumnos SET turno='".$turnoActualizado."' WHERE alumnopk='".$item["alumnopk"]."'";    
    $prueba = Alumno::actualizarMasivo($query);  
  endforeach;
}

if ($estatusActualizado!=""){
  foreach ($alumno as $item): 
    $query = "UPDATE alumnos SET estatus='".$estatusActualizado."' WHERE alumnopk='".$item["alumnopk"]."'";    
    $prueba = Alumno::actualizarMasivo($query);  
  endforeach;
}

if ($ingresoActualizado!=""){
  foreach ($alumno as $item): 
    $query = "UPDATE alumnos SET ingreso='".$ingresoActualizado."' WHERE alumnopk='".$item["alumnopk"]."'";    
    $prueba = Alumno::actualizarMasivo($query);  
  endforeach;
}

if ($egresoActualizado!=""){
  foreach ($alumno as $item): 
    $query = "UPDATE alumnos SET egreso='".$egresoActualizado."' WHERE alumnopk='".$item["alumnopk"]."'";    
    $prueba = Alumno::actualizarMasivo($query);  
  endforeach;
}

echo'<script type="text/javascript"> alert("Las actualizaciones han sido exitosas");
window.location.href="filtrados.php";</script>';
/*
header('Location: filtrados.php');

echo '<script>
        alert("Las actualizaciones han sido exitosas");
      </script>';*/
?>