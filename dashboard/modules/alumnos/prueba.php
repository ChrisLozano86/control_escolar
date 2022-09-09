<?php 
require_once('../../class/Alumno.php');
$P = $_POST['MODAL_FN1'];
$E = $_POST['MODAL_FN2'];
$S = $_POST['MODAL_FN3'];
$G = $_POST['MODAL_FN4'];
$R = $_POST['MODAL_FN5'];
$T = $_POST['MODAL_FN6'];
$SX = $_POST['MODAL_FN7'];
$ET = $_POST['MODAL_FN8'];
$IN = $_POST['MODAL_FN9'];
$EG = $_POST['MODAL_FN10'];
$NA = $_POST['MODAL_FN11'];

$datosEscolares= (isset($_POST['MODAL_DatosEsc'])) ? $_POST['MODAL_DatosEsc'] : null; 
$nomCompleto= (isset($_POST['MODAL_NomCompleto'])) ? $_POST['MODAL_NomCompleto'] : null; 
$numFicha=(isset($_POST['MODAL_NumFicha'])) ? $_POST['MODAL_NumFicha'] : null; 
$numCtrl=(isset($_POST['MODAL_NumCtrl'])) ? $_POST['MODAL_NumCtrl'] : null; 
$estatus=(isset($_POST['MODAL_Estatus'])) ? $_POST['MODAL_Estatus'] : null; 
$repetidor=(isset($_POST['MODAL_Repetidor'])) ? $_POST['MODAL_Repetidor'] : null; 
$semestre=(isset($_POST['MODAL_Semestre'])) ? $_POST['MODAL_Semestre'] : null; 
$grupo=(isset($_POST['MODAL_Grupo'])) ? $_POST['MODAL_Grupo'] : null; 
$turno=(isset($_POST['MODAL_Turno'])) ? $_POST['MODAL_Turno'] : null; 
$espe=(isset($_POST['MODAL_Espe'])) ? $_POST['MODAL_Espe'] : null; 
$claveEspe=(isset($_POST['MODAL_ClaveEspe'])) ? $_POST['MODAL_ClaveEspe'] : null; 
$generacion=(isset($_POST['MODAL_Gene'])) ? $_POST['MODAL_Gene'] : null; 
$periodo=(isset($_POST['MODAL_Period'])) ? $_POST['MODAL_Period'] : null; 
$extracurri=(isset($_POST['MODAL_Extracurri'])) ? $_POST['MODAL_Extracurri'] : null; 
$becas=(isset($_POST['MODAL_Becas'])) ? $_POST['MODAL_Becas'] : null;
$surems=(isset($_POST['MODAL_Surems'])) ? $_POST['MODAL_Surems'] : null; 
$fechaBaja=(isset($_POST['MODAL_FechaBaja'])) ? $_POST['MODAL_FechaBaja'] : null; 
$causaBaja=(isset($_POST['MODAL_CausaBaja'])) ? $_POST['MODAL_CausaBaja'] : null; 
$claveCecy=(isset($_POST['MODAL_ClaveCecy'])) ? $_POST['MODAL_ClaveCecy'] : null; 
$propes=(isset($_POST['MODAL_Prope'])) ? $_POST['MODAL_Prope'] : null; 
$datosSecun=(isset($_POST['MODAL_DatosSecun'])) ? $_POST['MODAL_DatosSecun'] : null; 
    
$datosPersonales=(isset($_POST['MODAL_DatosPerso'])) ? $_POST['MODAL_DatosPerso'] : null; 
$curp=(isset($_POST['MODAL_Curp'])) ? $_POST['MODAL_Curp'] : null; 
$telAlumno=(isset($_POST['MODAL_TelAlumno'])) ? $_POST['MODAL_TelAlumno'] : null; 
$sexo=(isset($_POST['MODAL_Sexo'])) ? $_POST['MODAL_Sexo'] : null; 
$ts=(isset($_POST['MODAL_TS'])) ? $_POST['MODAL_TS'] : null; 
$cuestSalud=(isset($_POST['MODAL_CuestSalud'])) ? $_POST['MODAL_CuestSalud'] : null; 
$lugarNac=(isset($_POST['MODAL_LugarNac'])) ? $_POST['MODAL_LugarNac'] : null; 
$fechaNac=(isset($_POST['MODAL_FechaNac'])) ? $_POST['MODAL_FechaNac'] : null; 
$emails=(isset($_POST['MODAL_Emails'])) ? $_POST['MODAL_Emails'] : null; 
$nomTutor=(isset($_POST['MODAL_NomTutor'])) ? $_POST['MODAL_NomTutor'] : null; 
$telTutor=(isset($_POST['MODAL_TelTutor'])) ? $_POST['MODAL_TelTutor'] : null; 
$domicilio=(isset($_POST['MODAL_Domicilio'])) ? $_POST['MODAL_Domicilio'] : null;  
    
$campos = $_POST['MODAL_CAMPOS'];

echo $P, $E, $S, $G, $R, $T, $SX, $ET, $IN, $EG, $NA;
//echo $nomCompleto;
//echo $numFicha;
//echo $numCtrl;
echo  ' ---------------- Salto de linea ----------------';
//echo $campos;
//echo  ' ---------------- SEGUNDO SALTO de linea ----------------';

$query = "SELECT ".$campos." FROM alumnos a inner join especialidades b on a.especialidad=b.especialidad inner join semestres c on a.semestre=c.semestre inner join grupos d on a.grupo=d.grupo inner join estatus e on a.estatus=e.estatus inner join turnos f on a.turno=f.turno inner join periodosescolares g on a.periodofk=g.periodopk inner join extracurriculares h on a.extracurricular=h.extracurricular inner join causasbaja i on a.causaBaja=i.causaBaja inner join propedeuticas j on a.propedeutica1=j.propedeutica inner join propedeuticas k on a.propedeutica2=k.propedeutica inner join lugares l on a.estadoSecundaria=l.lugarNac inner join tipossang m on a.ts=m.ts inner join lugares n on a.lugarNac=n.lugarNac inner join lugares p on a.estadoDom=p.lugarNac WHERE ".$P.$E.$S.$G.$R.$T.$SX.$ET.$IN.$EG.$NA;
echo $query;
$alumno = Alumno::filtrarParaReporte($query);
if (count($alumno) > 0): ?>
    <table class="table table-bordered table-striped dt-responsive" id="tablaPrueba" name="tablaPrueba">
                  <thead>
                    <tr>
                      <th>Nombre</th>  
                      <th>Apellido Paterno</th>
                      <th>Apellido Materno</th>                    
                      <th>Num control</th>            
                    </tr>   
                  </thead>  
                  <tbody>           
                    <?php foreach ($alumno as $item):?>
                      <tr>
                        <td> <?php echo $item['nomAlumno']; ?></td> 
                        <td> <?php echo $item['apePaterno']; ?></td>                  
                        <td> <?php echo $item['apeMaterno']; ?></td>              
                        <td> <?php echo $item['numControl']; ?></td>                    
                    </tr>
                    <?php
                    endforeach; ?>
                  </tbody>
                </table>
                <br>   
              <?php else: ?>
                <p>No hay coincidencias</p>
              <?php endif;  