<?php
ob_start();
?>
<?php
require_once('../../class/Alumno.php');
require __DIR__ . "/../../vendor/autoload.php";
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

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

$spread = new Spreadsheet();
$spread
    ->getProperties()
    ->setCreator("CECYTE COMONFORT")
    ->setLastModifiedBy('CECYTE COMONFORT')
    ->setTitle('Reporte de alumnos')
    ->setDescription('Reporte de alumnos en excel')
    ->setCategory('Reporte de alumnos');
 
$fileName="reporte.xlsx";

$sheet = $spread->getActiveSheet();
$sheet->setTitle("REPORTE");
if ($nomCompleto!=""){  
  $sheet->setCellValue('A1', 'APELLIDO PATERNO');
  $sheet->setCellValue('B1', 'APELLIDO MATERNO');
  $sheet->setCellValue('C1', 'NOMBRE');}
if ($numFicha!=""){$sheet->setCellValue('D1', 'N° FICHA');}
if ($numCtrl!=""){$sheet->setCellValue('E1', 'N° CONTROL');}
if ($estatus!=""){$sheet->setCellValue('F1', 'ESTATUS');}
if ($repetidor!=""){$sheet->setCellValue('G1', 'REPETIDOR');}
if ($semestre!=""){$sheet->setCellValue('H1', 'SEMESTRE');}
if ($grupo!=""){$sheet->setCellValue('I1', 'GRUPO');}
if ($turno!=""){$sheet->setCellValue('J1', 'TURNO');}
if ($espe!=""){$sheet->setCellValue('K1', 'ESPECIALIDAD');}
if ($claveEspe!=""){$sheet->setCellValue('L1', 'CLAVE ESPECIALIDAD');}
if ($generacion!=""){$sheet->setCellValue('M1', 'INGRESO');}
if ($generacion!=""){$sheet->setCellValue('N1', 'EGRESO');}
if ($periodo!=""){$sheet->setCellValue('O1', 'PERIODO ESCOLAR');}
if ($extracurri!=""){$sheet->setCellValue('P1', 'EXTRACURRICULAR');}
if ($becas!=""){$sheet->setCellValue('Q1', 'BECA 1');}
if ($becas!=""){$sheet->setCellValue('R1', 'BECA 2');}
if ($becas!=""){$sheet->setCellValue('S1', 'BECA 3');}
if ($surems!=""){$sheet->setCellValue('T1', 'SUREMS');}
if ($fechaBaja!=""){$sheet->setCellValue('U1', 'FECHA BAJA');}
if ($causaBaja!=""){$sheet->setCellValue('V1', 'CAUSA BAJA');}
if ($claveCecy!=""){$sheet->setCellValue('W1', 'CLAVE CECYTE');}
if ($propes!=""){$sheet->setCellValue('X1', 'PROPEDEÚTICA 1');}
if ($propes!=""){$sheet->setCellValue('Y1', 'PROPEDEÚTICA 2');}
if ($datosSecun!=""){$sheet->setCellValue('Z1', 'NOM SECUNDARIA');}
if ($datosSecun!=""){$sheet->setCellValue('AA1', 'CLAVE SECUNDARIA');}
if ($datosSecun!=""){$sheet->setCellValue('AB1', 'PROM SECUNDARIA');}
if ($datosSecun!=""){$sheet->setCellValue('AC1', 'ESTADO SECUNDARIA');}

if ($curp!=""){$sheet->setCellValue('AD1', 'CURP');}
if ($telAlumno!=""){$sheet->setCellValue('AE1', 'TEL ALUMNO');}
if ($sexo!=""){$sheet->setCellValue('AF1', 'SEXO');}
if ($ts!=""){$sheet->setCellValue('AG1', 'TS');}
if ($cuestSalud!=""){$sheet->setCellValue('AH1', 'CUESTIONES SALUD');}
if ($lugarNac!=""){$sheet->setCellValue('AI1', 'LUGAR NAC');}
if ($fechaNac!=""){$sheet->setCellValue('AJ1', 'FECHA NAC');}
if ($emails!=""){$sheet->setCellValue('AK1', 'EMAIL PERSONAL');}
if ($emails!=""){$sheet->setCellValue('AL1', 'EMAIL INSTITUCIONAL');}
if ($nomTutor!=""){$sheet->setCellValue('AM1', 'NOMBRE TUTOR');}
if ($telTutor!=""){$sheet->setCellValue('AN1', 'TEL TUTOR');}
if ($domicilio!=""){$sheet->setCellValue('AO1', 'CALLE');}
if ($domicilio!=""){$sheet->setCellValue('AP1', 'NUM EXT');}
if ($domicilio!=""){$sheet->setCellValue('AQ1', 'NUM INT');}
if ($domicilio!=""){$sheet->setCellValue('AR1', 'COLONIA');}
if ($domicilio!=""){$sheet->setCellValue('AS1', 'CP');}
if ($domicilio!=""){$sheet->setCellValue('AT1', 'POBLACION');}
if ($domicilio!=""){$sheet->setCellValue('AU1', 'MUNICIPIO');}
if ($domicilio!=""){$sheet->setCellValue('AV1', 'ESTADO');}
  
$fila = 2;
//$alumno = Alumno::todos();
$query = "SELECT ".$campos." FROM alumnos a inner join especialidades b on a.especialidad=b.especialidad inner join semestres c on a.semestre=c.semestre inner join grupos d on a.grupo=d.grupo inner join estatus e on a.estatus=e.estatus inner join turnos f on a.turno=f.turno inner join periodosescolares g on a.periodofk=g.periodopk inner join extracurriculares h on a.extracurricular=h.extracurricular inner join causasbaja i on a.causaBaja=i.causaBaja inner join propedeuticas j on a.propedeutica1=j.propedeutica inner join propedeuticas k on a.propedeutica2=k.propedeutica inner join lugares l on a.estadoSecundaria=l.lugarNac inner join tipossang m on a.ts=m.ts inner join lugares n on a.lugarNac=n.lugarNac inner join lugares p on a.estadoDom=p.lugarNac WHERE ".$P.$E.$S.$G.$R.$T.$SX.$ET.$IN.$EG.$NA;
$alumno = Alumno::filtrarParaReporte($query);
foreach ($alumno as $item):     
  if ($nomCompleto!=""){      
    $sheet->setCellValue('A'.$fila, $item['apePaterno']);
    $sheet->setCellValue('B'.$fila, $item['apeMaterno']);
    $sheet->setCellValue('C'.$fila, $item['nomAlumno']);}
  if ($numFicha!=""){$sheet->setCellValue('D'.$fila, $item['ficha']);}
  if ($numCtrl!=""){$sheet->setCellValue('E'.$fila, $item['numControl']);}
  if ($estatus!=""){$sheet->setCellValue('F'.$fila, $item['nomEstatus']);}
  if ($repetidor!=""){$sheet->setCellValue('G'.$fila, $item['repetidor']);}
  if ($semestre!=""){$sheet->setCellValue('H'.$fila, $item['nomSemestre']);}
  if ($grupo!=""){$sheet->setCellValue('I'.$fila, $item['letra']);}
  if ($turno!=""){$sheet->setCellValue('J'.$fila, $item['nomTurno']);}
  if ($espe!=""){$sheet->setCellValue('K'.$fila, $item['nomEspe']);}
  if ($claveEspe!=""){$sheet->setCellValue('L'.$fila, $item['claveEspe']);}
  if ($generacion!=""){$sheet->setCellValue('M'.$fila, $item['ingreso']);}
  if ($generacion!=""){$sheet->setCellValue('N'.$fila, $item['egreso']);}
  if ($periodo!=""){$sheet->setCellValue('O'.$fila, $item["mesInicio"].' '.$item["anioInicio"].' — '.$item["mesFinal"].' '.$item["anioFinal"]);}
  if ($extracurri!=""){$sheet->setCellValue('P'.$fila, $item['nomExtra']);}
  if ($becas!=""){$sheet->setCellValue('Q'.$fila, $item['beca']);}
  if ($becas!=""){$sheet->setCellValue('R'.$fila, $item['beca2']);}
  if ($becas!=""){$sheet->setCellValue('S'.$fila, $item['beca3']);}
  if ($surems!=""){$sheet->setCellValue('T'.$fila, $item['surems']);}
  if ($fechaBaja!=""){$sheet->setCellValue('U'.$fila, $item['fechaBaja']);}
  if ($causaBaja!=""){$sheet->setCellValue('V'.$fila, $item['causaBaja']);}
  if ($claveCecy!=""){$sheet->setCellValue('W'.$fila, $item['claveCecyte']);}
  if ($propes!=""){$sheet->setCellValue('X'.$fila, $item['propedeutica1']);}
  if ($propes!=""){$sheet->setCellValue('Y'.$fila, $item['propedeutica2']);}
  if ($datosSecun!=""){$sheet->setCellValue('Z'.$fila, $item['nomSecundaria']);}
  if ($datosSecun!=""){$sheet->setCellValue('AA'.$fila, $item['claveSecundaria']);}
  if ($datosSecun!=""){$sheet->setCellValue('AB'.$fila, $item['promeSecundaria']);}
  if ($datosSecun!=""){$sheet->setCellValue('AC'.$fila, $item['estadoSecundaria']);}
  
  if ($curp!=""){$sheet->setCellValue('AD'.$fila, $item['curp']);}
  if ($telAlumno!=""){$sheet->setCellValue('AE'.$fila, $item['telAlumno']);}
  if ($sexo!=""){$sheet->setCellValue('AF'.$fila, $item['sexo']);}
  if ($ts!=""){$sheet->setCellValue('AG'.$fila, $item['ts']);}
  if ($cuestSalud!=""){$sheet->setCellValue('AH'.$fila, $item['cuestSalud']);}
  if ($lugarNac!=""){$sheet->setCellValue('AI'.$fila, $item['lugarNac']);}
  if ($fechaNac!=""){$sheet->setCellValue('AJ'.$fila, $item['fechaNac']);}
  if ($emails!=""){$sheet->setCellValue('AK'.$fila, $item['emailPerso']);}
  if ($emails!=""){$sheet->setCellValue('AL'.$fila, $item['emailInsti']);}
  if ($nomTutor!=""){$sheet->setCellValue('AM'.$fila, $item['nomTutor']);}
  if ($telTutor!=""){$sheet->setCellValue('AN'.$fila, $item['telTutor']);}
  if ($domicilio!=""){$sheet->setCellValue('AO'.$fila, $item['calle']);}
  if ($domicilio!=""){$sheet->setCellValue('AP'.$fila, $item['numExt']);}
  if ($domicilio!=""){$sheet->setCellValue('AQ'.$fila, $item['numInt']);}
  if ($domicilio!=""){$sheet->setCellValue('AR'.$fila, $item['colonia']);}
  if ($domicilio!=""){$sheet->setCellValue('AS'.$fila, $item['cp']);}
  if ($domicilio!=""){$sheet->setCellValue('AT'.$fila, $item['poblacion']);}
  if ($domicilio!=""){$sheet->setCellValue('AU'.$fila, $item['municipio']);}
  if ($domicilio!=""){$sheet->setCellValue('AV'.$fila, $item['estadoDom']);}
  $fila++;
endforeach; 

# Crear un "escritor"
$writer = new Xlsx($spread);
# Le pasamos la ruta de guardado

header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment; filename="'. urlencode($fileName).'"');
$writer->save('php://output');
exit;
?>
<?php
ob_end_flush();
?>