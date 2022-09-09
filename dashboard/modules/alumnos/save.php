<?php
ob_start();
?>
<?php
  include_once '../../assets/template/header.php';
  require_once ('../../class/Alumno.php');
  require_once ('../../class/Conexion.php');

  $alumnopk = (isset($_REQUEST['alumnopk'])) ? $_REQUEST['alumnopk'] : null;

  if ($alumnopk){
    $alumno = Alumno::buscarPorAlumnoPk($alumnopk);
  }else{
    $alumno = new Alumno();
  }   
?>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){  
  $nomAlumno = (isset($_POST['nomAlumno'])) ? $_POST['nomAlumno'] : null;
  $apePaterno = (isset($_POST['apePaterno'])) ? $_POST['apePaterno'] : null;
  $apeMaterno = (isset($_POST['apeMaterno'])) ? $_POST['apeMaterno'] : null;
  $claveCecyte = (isset($_POST['claveCecyte'])) ? $_POST['claveCecyte'] : null;
  $ficha = (isset($_POST['ficha'])) ? $_POST['ficha'] : null;
  $numControl = (isset($_POST['numControl'])) ? $_POST['numControl'] : null;
  $estatus = (isset($_POST['estatus'])) ? $_POST['estatus'] : null;
  $repetidor = (isset($_POST['repetidor'])) ? $_POST['repetidor'] : null;
  $especialidad = (isset($_POST['especialidad'])) ? $_POST['especialidad'] : null;
  $claveEspe = (isset($_POST['claveEspe'])) ? $_POST['claveEspe'] : null;
  $semestre = (isset($_POST['semestre'])) ? $_POST['semestre'] : null;
  $grupo = (isset($_POST['grupo'])) ? $_POST['grupo'] : null;
  $turno = (isset($_POST['turno'])) ? $_POST['turno'] : null;
  $ingreso = (isset($_POST['ingreso'])) ? $_POST['ingreso'] : null;
  $egreso = (isset($_POST['egreso'])) ? $_POST['egreso'] : null;
  $extracurricular = (isset($_POST['extracurricular'])) ? $_POST['extracurricular'] : null;
  $propedeutica1 = (isset($_POST['propedeutica1'])) ? $_POST['propedeutica1'] : null;
  $propedeutica2 = (isset($_POST['propedeutica2'])) ? $_POST['propedeutica2'] : null;
  $beca = (isset($_POST['beca'])) ? $_POST['beca'] : null;
  $beca2 = (isset($_POST['beca2'])) ? $_POST['beca2'] : null;
  $beca3 = (isset($_POST['beca3'])) ? $_POST['beca3'] : null;
  $nomSecundaria = (isset($_POST['nomSecundaria'])) ? $_POST['nomSecundaria'] : null;
  $claveSecundaria = (isset($_POST['claveSecundaria'])) ? $_POST['claveSecundaria'] : null;
  $promeSecundaria = (isset($_POST['promeSecundaria'])) ? $_POST['promeSecundaria'] : null;
  $estadoSecundaria = (isset($_POST['estadoSecundaria'])) ? $_POST['estadoSecundaria'] : null;
  $surems = (isset($_POST['surems'])) ? $_POST['surems'] : null;
  $fechaBaja = (isset($_POST['fechaBaja'])) ? $_POST['fechaBaja'] : null;
  $causaBaja = (isset($_POST['causaBaja'])) ? $_POST['causaBaja'] : null;
  $curp = (isset($_POST['curp'])) ? $_POST['curp'] : null;
  $telAlumno = (isset($_POST['telAlumno'])) ? $_POST['telAlumno'] : null;
  $fechaNac = (isset($_POST['fechaNac'])) ? $_POST['fechaNac'] : null;
  $sexo = (isset($_POST['sexo'])) ? $_POST['sexo'] : null;
  $lugarNac = (isset($_POST['lugarNac'])) ? $_POST['lugarNac'] : null;
  $ts = (isset($_POST['ts'])) ? $_POST['ts'] : null;
  $cuestSalud = (isset($_POST['cuestSalud'])) ? $_POST['cuestSalud'] : null;
  $emailInsti = (isset($_POST['emailInsti'])) ? $_POST['emailInsti'] : null;
  $emailPerso = (isset($_POST['emailPerso'])) ? $_POST['emailPerso'] : null;
  $nomTutor = (isset($_POST['nomTutor'])) ? $_POST['nomTutor'] : null;
  $telTutor = (isset($_POST['telTutor'])) ? $_POST['telTutor'] : null;
  $calle = (isset($_POST['calle'])) ? $_POST['calle'] : null;
  $numExt = (isset($_POST['numExt'])) ? $_POST['numExt'] : null;
  $numInt = (isset($_POST['numInt'])) ? $_POST['numInt'] : null;
  $colonia = (isset($_POST['colonia'])) ? $_POST['colonia'] : null;
  $cp = (isset($_POST['cp'])) ? $_POST['cp'] : null;
  $poblacion = (isset($_POST['poblacion'])) ? $_POST['poblacion'] : null;
  $municipio = (isset($_POST['municipio'])) ? $_POST['municipio'] : null;
  $estadoDom = (isset($_POST['estadoDom'])) ? $_POST['estadoDom'] : null;
  $imagenOcul = (isset($_POST['imagenOcul'])) ? $_POST['imagenOcul'] : null;
  $docCurpOcul = (isset($_POST['docCurpOcul'])) ? $_POST['docCurpOcul'] : null;
  $docActNacOcul = (isset($_POST['docActNacOcul'])) ? $_POST['docActNacOcul'] : null;
  $docCertSecOcul = (isset($_POST['docCertSecOcul'])) ? $_POST['docCertSecOcul'] : null;
  $docSuremsOcul = (isset($_POST['docSuremsOcul'])) ? $_POST['docSuremsOcul'] : null;
  $docCertCecyOcul = (isset($_POST['docCertCecyOcul'])) ? $_POST['docCertCecyOcul'] : null;
  $periodofk = (isset($_POST['periodofk'])) ? $_POST['periodofk'] : null;
  
  $alumno->setNomAlumno($nomAlumno);
  $alumno->setApePaterno($apePaterno);
  $alumno->setApeMaterno($apeMaterno);
  $alumno->setClaveCecyte($claveCecyte);
  $alumno->setFicha($ficha);
  $alumno->setNumControl($numControl);
  $alumno->setEstatus($estatus);
  $alumno->setRepetidor($repetidor);
  $alumno->setEspecialidad($especialidad);
  $alumno->setClaveEspe($claveEspe);
  $alumno->setSemestre($semestre);
  $alumno->setGrupo($grupo);
  $alumno->setTurno($turno);
  $alumno->setIngreso($ingreso);
  $alumno->setEgreso($egreso);
  $alumno->setExtracurricular($extracurricular);
  $alumno->setPropedeutica1($propedeutica1);
  $alumno->setPropedeutica2($propedeutica2);
  $alumno->setBeca($beca);
  $alumno->setBeca2($beca2);
  $alumno->setBeca3($beca3);
  $alumno->setNomSecundaria($nomSecundaria);
  $alumno->setClaveSecundaria($claveSecundaria);
  $alumno->setPromeSecundaria($promeSecundaria);
  $alumno->setFechaBaja($fechaBaja);
  $alumno->setCausaBaja($causaBaja);
  $alumno->setEstadoSecundaria($estadoSecundaria);
  $alumno->setSurems($surems);
  $alumno->setCurp($curp);
  $alumno->setTelAlumno($telAlumno);
  $alumno->setFechaNac($fechaNac);
  $alumno->setSexo($sexo);
  $alumno->setLugarNac($lugarNac);
  $alumno->setTs($ts);
  $alumno->setCuestSalud($cuestSalud);
  $alumno->setEmailInsti($emailInsti);
  $alumno->setEmailPerso($emailPerso);
  $alumno->setNomTutor($nomTutor);
  $alumno->setTelTutor($telTutor);
  $alumno->setCalle($calle);
  $alumno->setNumExt($numExt);
  $alumno->setNumInt($numInt);
  $alumno->setColonia($colonia);
  $alumno->setCp($cp);
  $alumno->setPoblacion($poblacion);
  $alumno->setMunicipio($municipio);
  $alumno->setEstadoDom($estadoDom);
  /*$alumno->setImagen($imagen);
  $alumno->setDocCurp($docCurp);
  $alumno->setDocActNac($docActNac);
  $alumno->setDocCertSec($docCertSec);
  $alumno->setDocSurems($docSurems);*/
  $alumno->setPeriodoFk($periodofk);   
 
  //1 --------------------------- IMAGEN ------------------------------------
   //print_r($_FILES['imagen']); 
  if ($_FILES['imagen']['name']!=null){    
    $tipo = $_FILES['imagen']['type'];
    $tamano = $_FILES['imagen']['size'];
    $rutaServidor1="documentos/imagenes";
    if(!is_dir('documentos/imagenes')){
      mkdir('documentos/imagenes', 0777, true);
    } 
    $rutaTemporal1 = $_FILES['imagen']['tmp_name'];
    $extension1 = pathinfo($_FILES['imagen']['name'], PATHINFO_EXTENSION);
    $nombreImagen1 = 'IMG_'.$numControl.'.'.$extension1;
    $rutaDestino1 = $rutaServidor1.'/'.$nombreImagen1;
    unlink($alumno->getImagen());
    move_uploaded_file($rutaTemporal1, $rutaDestino1);       
    $alumno->setImagen($rutaDestino1);       
  }else{    
    $alumno->setImagen($imagenOcul);
  }
 
   // 2 --------------------------- DOC CURP ------------------------------------
   //print_r($_FILES['docCurp']);    
  if ($_FILES['docCurp']['name']!=null){    
    $tipo = $_FILES['docCurp']['type'];
    $tamano = $_FILES['docCurp']['size'];
    $rutaServidor2="documentos/curps";
    if(!is_dir('documentos/curps')){
      mkdir('documentos/curps', 0777, true);
    } 
    $rutaTemporal2 = $_FILES['docCurp']['tmp_name'];
    $extension2 = pathinfo($_FILES['docCurp']['name'], PATHINFO_EXTENSION);
    $nombreCurp = 'CURP_'.$curp.'.'.$extension2;
    $rutaDestino2 = $rutaServidor2.'/'.$nombreCurp;
    unlink($alumno->getDocCurp());
    move_uploaded_file($rutaTemporal2, $rutaDestino2);    
    $alumno->setDocCurp($rutaDestino2);        
  }else{
    $alumno->setDocCurp($docCurpOcul);
  }
 
   // 3 ------------------------- DOC ACT NAC ------------------------------------
   //print_r($_FILES['docActNac']); 
  if ($_FILES['docActNac']['name']!=null){
    $tipo = $_FILES['docActNac']['type'];
    $tamano = $_FILES['docActNac']['size'];
    $rutaServidor3="documentos/actas";
    if(!is_dir('documentos/actas')){
      mkdir('documentos/actas', 0777, true);
    } 
    $rutaTemporal3 = $_FILES['docActNac']['tmp_name'];
    $extension3 = pathinfo($_FILES['docActNac']['name'], PATHINFO_EXTENSION);
    $nombreAct = 'Acta_'.$curp.'.'.$extension3;
    $rutaDestino3 = $rutaServidor3.'/'.$nombreAct;
    unlink($alumno->getDocActNac());
    move_uploaded_file($rutaTemporal3, $rutaDestino3);
    $alumno->setDocActNac($rutaDestino3);    
  }else{
    $alumno->setDocActNac($docActNacOcul);
  }  
 
  // 4 ------------------------- DOC CERT SEC ------------------------------------
  //print_r($_FILES['docCertSec']);  
  if ($_FILES['docCertSec']['name']!=null){
    $tipo = $_FILES['docCertSec']['type'];
    $tamano = $_FILES['docCertSec']['size'];    
    $rutaServidor4="documentos/certificados";
    if(!is_dir('documentos/certificados')){
      mkdir('documentos/certificados', 0777, true);
    } 
    $rutaTemporal4 = $_FILES['docCertSec']['tmp_name'];
    $extension4 = pathinfo($_FILES['docCertSec']['name'], PATHINFO_EXTENSION);
    $nombreCertificado = 'Certificado_'.date('YmdHis').'.'.$extension4;
    $rutaDestino4 = $rutaServidor4.'/'.$nombreCertificado;
    unlink($alumno->getDocCertSec());
    move_uploaded_file($rutaTemporal4, $rutaDestino4);    
    $alumno->setDocCertSec($rutaDestino4);     
  }else{
    $alumno->setDocCertSec($docCertSecOcul);
  }
 
   // 5 ------------------------- DOC SUREMS ------------------------------------
  //print_r($_FILES['docSurems']); 
  if ($_FILES['docSurems']['name']!=null){
    $tipo = $_FILES['docSurems']['type'];
    $tamano = $_FILES['docSurems']['size'];
    $rutaServidor5="documentos/surems";
    if(!is_dir('documentos/surems')){
      mkdir('documentos/surems', 0777, true);
    } 
    $rutaTemporal5 = $_FILES['docSurems']['tmp_name'];
    $extension5 = pathinfo($_FILES['docSurems']['name'], PATHINFO_EXTENSION);
    $nombreSurems = 'SUREMS_'.$surems.'.'.$extension5;
    $rutaDestino5 = $rutaServidor5.'/'.$nombreSurems;
    unlink($alumno->getDocSurems());
    move_uploaded_file($rutaTemporal5, $rutaDestino5);
    $alumno->setDocSurems($rutaDestino5);     
  }else{
    $alumno->setDocSurems($docSuremsOcul);
  }

  // 6 ------------------------- DOC CERT CECY ------------------------------------
  //print_r($_FILES['docSurems']); 
  if ($_FILES['docCertCecy']['name']!=null){
    $tipo = $_FILES['docCertCecy']['type'];
    $tamano = $_FILES['docCertCecy']['size'];
    $rutaServidor5="documentos/certificados_cecy";
    if(!is_dir('documentos/certificados_cecy')){
      mkdir('documentos/certificados_cecy', 0777, true);
    } 
    $rutaTemporal5 = $_FILES['docCertCecy']['tmp_name'];
    $extension5 = pathinfo($_FILES['docCertCecy']['name'], PATHINFO_EXTENSION);
    $nombreCertCecy = 'CERTIFICADO_CECY'.$numControl.'.'.$extension5;
    $rutaDestino5 = $rutaServidor5.'/'.$nombreCertCecy;
    unlink($alumno->getDocCertCecy());
    move_uploaded_file($rutaTemporal5, $rutaDestino5);
    $alumno->setDocCertCecy($rutaDestino5);     
  }else{
    $alumno->setDocCertCecy($docCertCecyOcul);
  }

  $alumno->guardar();  
  header('Location: index.php');
}else{

?>
  <!-- Main content -->
  <div class="content" id="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <h3>Registrar alumno</h3>
            <a href="index.php" class="btn btn-info"><i class="fas fa-backward" style="color: white"></i> Regresar </a>
            <br><br>
            <!-- Código del formulario-->
            <form action="save.php" method="post" enctype="multipart/form-data" id="frmAlumno" name="frmAlumno">
              <?php if ($alumno->getAlumnoPk()): ?>
                <input type="hidden" name="alumnopk" value="<?php echo $alumno->getAlumnoPk() ?>"/>
              <?php endif; ?>              	
              <!-- DATOS ESCOLARES -->
              <div class="card">
                <h5 class="card-header bg-secondary">Datos escolares</h5>						
                <div class="card-body">	
                  <div class="row">	
                    <div class="form-group my-2 col-xs-12 col-sm-12 col-md-6 col-lg-3 align-self-center">
                      <label for="nomAlumno" class="mx-1 col-form obligatorio">Nombre:</label>
                      <input type="text" id="nomAlumno" name="nomAlumno" placeholder="Nombre" class="form-control" value="<?php echo $alumno->getNomAlumno() ?>" required <?php if(isset($_SESSION['privilegios'])){
                      if((($_SESSION['privilegios'])=='3')){ ?> readonly <?php }}?>>                        
                    </div> <!-- /.col nombre -->
                    <div class="form-group my-2 col-xs-12 col-sm-12 col-md-6 col-lg-3 align-self-center">
                      <label for="apePaterno" class="mx-1 col-form obligatorio">Apellido Paterno:</label>
                      <input  type="text" id="apePaterno" name="apePaterno" placeholder="Apellido Paterno" class="form-control" value="<?php echo $alumno->getApePaterno() ?>" required <?php if(isset($_SESSION['privilegios'])){
                      if((($_SESSION['privilegios'])=='3')){ ?> readonly <?php }}?>>                        
                    </div> <!-- /.col apellido paterno -->
                    <div class="form-group my-2 col-xs-12 col-sm-12 col-md-6 col-lg-3 align-self-center">
                      <label for="apeMaterno" class="mx-1 col-form obligatorio">Apellido Materno:</label>
                      <input type="text" id="apeMaterno" name="apeMaterno" placeholder="Apellido Materno" class="form-control" value="<?php echo $alumno->getApeMaterno() ?>" required <?php if(isset($_SESSION['privilegios'])){
                      if((($_SESSION['privilegios'])=='3')){ ?> readonly <?php }}?>>                        
                    </div> <!-- /.col appelido materno -->   
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-3">                                                
                      <p style="width: 100%"> <?php if($alumno->getImagen() != null){?>
                        <a href="<?php echo $alumno->getImagen() ?>" class="thumbnail" target="_blank"> <img src="<?php echo $alumno->getImagen() ?>" alt="Imagen" style="width: 80%"></a></p>                    
                        <?php } ?>                 
                    </div> <!-- /.col foto -->                 
                    <div class="form-group my-2 col-xs-12 col-sm-12 col-md-6 col-lg-3">
                      <label for="claveCecyte" class="mx-1 col-form">Clave CECyTE:</label>
                      <input type="text" id="claveCecyte" name="claveCecyte" class="form-control" value="Z1ETC0001L" readonly>                        
                    </div>  <!-- /.col numero control -->
                    <div class="form-group my-2 col-xs-12 col-sm-12 col-md-6 col-lg-3">
                      <label for="ficha" class="mx-1 col-form obligatorio">Número de Ficha:</label>
                      <input type="text" id="ficha" name="ficha" placeholder="Número de Ficha" class="form-control" value="<?php echo $alumno->getFicha() ?>" required <?php if(isset($_SESSION['privilegios'])){
                      if((($_SESSION['privilegios'])=='3')){ ?> readonly <?php }}?>>                        
                    </div>  <!-- /.col numero de ficha --> 
                    <div class="form-group my-2 col-xs-12 col-sm-12 col-md-6 col-lg-3">
                      <label for="numControl" class="mx-1 col-form">Número de Control:</label>
                      <input type="text" id="numControl" name="numControl" placeholder="Número de Control" class="form-control" value="<?php echo $alumno->getNumControl() ?>" <?php if(isset($_SESSION['privilegios'])){
                      if((($_SESSION['privilegios'])=='3')){ ?> readonly <?php }}?>>                        
                    </div>  <!-- /.col numero control -->                    
                    <div class="form-group my-2 col-xs-12 col-sm-12 col-md-6 col-lg-3">
                      <label class="mx-1 col-form obligatorio" for="estatus">Estatus:</label>					
                      <select class="custom-select" id="estatus" name="estatus" required <?php if(isset($_SESSION['privilegios'])){
                      if((($_SESSION['privilegios'])=='3')){ ?> disabled <?php }}?>>
                        <option selected disabled>Estatus</option>
                        <?php $registros = Alumno::llenarSelectEstatus();                                                 
                          foreach ($registros as $valores):?>
                            <option value="<?php echo $valores["estatus"] ?>" <?php if ($valores["estatus"]==$alumno->getEstatus()){ echo "selected";}?>><?php echo $valores["nomEstatus"]?></option>
                          <?php endforeach; ?>               				
                      </select>	<!-- /.select estatus  -->
                    </div> <!-- /.col estatus -->
                    <div class="form-group my-2 col-xs-12 col-sm-12 col-md-6 col-lg-3">
                      <label class="mx-1 col-form obligatorio" for="repetidor">Repetidor:</label>					
                      <select class="custom-select" id="repetidor" name="repetidor" required <?php if(isset($_SESSION['privilegios'])){
                      if((($_SESSION['privilegios'])=='3')){ ?> disabled <?php }}?>>	
                        <?php if($alumno->getRepetidor()=="Si"):?>
                          <option disabled>Repetidor</option>
                          <option selected value="Si">Si</option>
                          <option value="No">No</option>  
                        <?php elseif($alumno->getRepetidor()=="No"):?>
                          <option disabled>Repetidor</option>
                          <option value="Si">Si</option>
                          <option selected value="No">No</option> 
                        <?php else:?>
                          <option selected disabled>Repetidor</option>
                          <option value="Si">Si</option>
                          <option value="No">No</option>
                        <?php endif;?>                                                					
                      </select>	<!-- /.select repetidor  -->
                    </div> <!-- /.col repetidor -->
                    <div class="form-group my-2 col-xs-12 col-sm-12 col-md-6 col-lg-6">
                      <label class="mx-1 col-form obligatorio" for="especialidad">Especialidad:</label>					
                      <select class="custom-select" id="especialidad" name="especialidad" required <?php if(isset($_SESSION['privilegios'])){
                      if((($_SESSION['privilegios'])=='3')){ ?> disabled <?php }}?>>	
                        <option selected disabled>Especialidad</option>
                        <?php $registros = Alumno::llenarSelectEspe();                                                 
                          foreach ($registros as $valores):?>
                            <option value="<?php echo $valores["especialidad"] ?>" <?php if ($valores["especialidad"]==$alumno->getEspecialidad()){ echo "selected";}?>><?php echo $valores["nomEspe"]?></option>
                          <?php endforeach; ?>            											
                      </select>	<!-- /.select especialidad  -->
                    </div> <!-- /.col especialidad -->
                    <div class="form-group my-2 col-xs-12 col-sm-12 col-md-6 col-lg-3">
                      <label class="mx-1 col-form obligatorio" for="claveEspe">Clave Especialidad:</label>					
                      <select class="custom-select" id="claveEspe" name="claveEspe" required <?php if(isset($_SESSION['privilegios'])){
                      if((($_SESSION['privilegios'])=='3')){ ?> disabled <?php }}?>>	
                        <option selected disabled>Clave Especialidad</option>
                        <?php $registros = Alumno::llenarSelectEspe();                                                 
                          foreach ($registros as $valores):?>
                            <option value="<?php echo $valores["especialidad"] ?>" <?php if ($valores["especialidad"]==$alumno->getEspecialidad()){ echo "selected";}?>><?php echo $valores["claveEspe"]?></option>
                          <?php endforeach; ?>                             								
                      </select>	<!-- /.select clave especialidad  -->
                    </div> <!-- /.col clave especialidad -->
                    <div class="form-group my-2 col-xs-12 col-sm-12 col-md-6 col-lg-2">
                      <label class="mx-1 col-form" for="semestre">Semestre:</label>					
                      <select class="custom-select" id="semestre" name="semestre" <?php if(isset($_SESSION['privilegios'])){
                      if((($_SESSION['privilegios'])=='3')){ ?> disabled <?php }}?>>	
                        <?php $registros = Alumno::llenarSelectSemestre();                                                 
                          foreach ($registros as $valores):?>
                            <option value="<?php echo $valores["semestre"]?>" <?php if ($valores["semestre"]==$alumno->getSemestre()){ echo "selected";}?>><?php echo $valores["nomSemestre"]?></option>
                          <?php endforeach; ?>              				
                      </select>	<!-- /.select semestre  -->
                    </div> <!-- /.col semestre -->
                    <div class="form-group my-2 col-xs-12 col-sm-12 col-md-6 col-lg-2">
                      <label class="mx-1 col-form" for="grupo">Grupo:</label>					
                      <select class="custom-select" id="grupo" name="grupo" <?php if(isset($_SESSION['privilegios'])){
                      if((($_SESSION['privilegios'])=='3')){ ?> disabled <?php }}?>>                        
                        <?php $registros = Alumno::llenarSelectGrupo();                                                 
                          foreach ($registros as $valores):?>
                            <option value="<?php echo $valores["grupo"] ?>" <?php if ($valores["grupo"]==$alumno->getGrupo()){ echo "selected";}?>><?php echo $valores["letra"]?></option>
                          <?php endforeach; ?>                       									
                      </select>	<!-- /.select grupo  -->
                    </div> <!-- /.col grupo -->
                    <div class="form-group my-2 col-xs-12 col-sm-12 col-md-6 col-lg-4">
                      <label class="mx-1 col-form" for="turno">Turno:</label>					
                      <select class="custom-select" id="turno" name="turno" <?php if(isset($_SESSION['privilegios'])){
                      if((($_SESSION['privilegios'])=='3')){ ?> disabled <?php }}?>>	
                        <?php $registros = Alumno::llenarSelectTurno();                                                 
                        foreach ($registros as $valores):?>
                          <option value="<?php echo $valores["turno"] ?>" <?php if ($valores["turno"]==$alumno->getTurno()){ echo "selected";}?>><?php echo $valores["nomTurno"]?></option>
                        <?php endforeach; ?>                                           					
                      </select>	<!-- /.select turno  -->
                    </div> <!-- /.col turno -->                                 
                    <div class="form-group my-2 col-xs-12 col-sm-12 col-md-6 col-lg-4">
                      <label class="mx-1 col-form" for="ingreso">Generación:</label>
                      <br>
                      <div class="row">
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">                                                
                          <input type="text" id="ingreso" name="ingreso" placeholder="Año Ingreso" class="form-control date-own" value="<?php echo $alumno->getIngreso() ?>" <?php if(isset($_SESSION['privilegios'])){
                          if((($_SESSION['privilegios'])=='3')){ ?> disabled <?php }}?>/>                 
                        </div> <!-- /.col año ingreso -->			 		
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">											
                          <input type="text" id="egreso" name="egreso" placeholder="Año Egreso" class="form-control date-own" value="<?php echo $alumno->getEgreso() ?>" <?php if(isset($_SESSION['privilegios'])){
                          if((($_SESSION['privilegios'])=='3')){ ?> disabled <?php }}?>/> 
                        </div>	<!-- /.col egreso -->
                      </div>	<!-- /.row dentro de col. generacion  -->
                    </div>	<!-- /.col generacion -->				
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-4">
                      <label class="mx-1 col-form" for="periodofk">Período Escolar:</label>	
                        <select class="custom-select" id="periodofk" name="periodofk" <?php if(isset($_SESSION['privilegios'])){if((($_SESSION['privilegios'])=='3')){ ?> disabled <?php }}?>>	
                          <?php $registros = Alumno::llenarSelectPeriodo();                                                 
                          foreach ($registros as $valores):?>
                            <option value="<?php echo $valores["periodopk"] ?>" <?php if ($valores["periodopk"]==$alumno->getPeriodoFk()){ echo "selected";}?>><?php echo $valores["mesInicio"].' '.$valores["anioInicio"].' — '.$valores["mesFinal"].' '.$valores["anioFinal"]?></option>
                          <?php endforeach; ?>                           																
                        </select>	<!-- /.select periodo  -->
                     </div> <!-- /.col periodo escolar -->                                            
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-4">
                      <label class="mx-1 col-form" for="extracurricular">Extracurricular:</label>					
                      <select class="custom-select" id="extracurricular" name="extracurricular" <?php if(isset($_SESSION['privilegios'])){ if((($_SESSION['privilegios'])=='3')){ ?> disabled <?php }}?>>                        
                        <?php $registros = Alumno::llenarSelectExtra();                                           
                          foreach ($registros as $valores):?>
                            <option value="<?php echo $valores["extracurricular"] ?>" <?php if ($valores["extracurricular"]==$alumno->getExtracurricular()){ echo "selected";}?>><?php echo $valores["nomExtra"]?></option>
                          <?php endforeach; ?>                											
                      </select>	<!-- /.select extracurricular  -->
                    </div> <!-- /.col extracurricular -->
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-4">
                      <label for="beca" class="mx-1 col-form">Beca 1:</label>
                      <input type="text" id="beca" name="beca" placeholder="Beca" class="form-control" value="<?php echo $alumno->getBeca() ?>" <?php if(isset($_SESSION['privilegios'])){
                      if((($_SESSION['privilegios'])=='3')){ ?> readonly <?php }}?>>                        
                    </div>	 <!-- /.col beca1 -->  
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-4">
                      <label for="beca2" class="mx-1 col-form">Beca 2:</label>
                      <input type="text" id="beca2" name="beca2" placeholder="Beca" class="form-control" value="<?php echo $alumno->getBeca2() ?>" <?php if(isset($_SESSION['privilegios'])){
                      if((($_SESSION['privilegios'])=='3')){ ?> readonly <?php }}?>>                        
                    </div>	 <!-- /.col beca 2 -->
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-4">
                      <label for="beca3" class="mx-1 col-form">Beca 3:</label>
                      <input type="text" id="beca3" name="beca3" placeholder="Beca" class="form-control" value="<?php echo $alumno->getBeca3() ?>" <?php if(isset($_SESSION['privilegios'])){
                      if((($_SESSION['privilegios'])=='3')){ ?> readonly <?php }}?>>                        
                    </div>	 <!-- /.col beca 2 -->  	
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-4">
                      <label class="mx-1 col-form" for="propedeutica1">Propedéutica 1:</label>					
                      <select class="custom-select" id="propedeutica1" name="propedeutica1" <?php if(isset($_SESSION['privilegios'])){ if((($_SESSION['privilegios'])=='3')){ ?> disabled <?php }}?>>	                       
                        <?php $registros = Alumno::llenarSelectPrope();                                                 
                          foreach ($registros as $valores):?>
                            <option value="<?php echo $valores["propedeutica"]?>" <?php if ($valores["propedeutica"]==$alumno->getPropedeutica1()){ echo "selected";}?>><?php echo $valores["nomPrope"]?></option>
                          <?php endforeach; ?>                          											
                      </select>	<!-- /.select propedeutica 1  -->
                    </div> <!-- /.col propeduetica 1 -->	 
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-4">
                      <label class="mx-1 col-form" for="propedeutica2">Propedéutica 2:</label>					
                      <select class="custom-select" id="propedeutica2" name="propedeutica2" <?php if(isset($_SESSION['privilegios'])){ if((($_SESSION['privilegios'])=='3')){ ?> disabled <?php }}?>>                        
                        <?php $registros = Alumno::llenarSelectPrope();                                                 
                          foreach ($registros as $valores):?>
                            <option value="<?php echo $valores["propedeutica"]?>" <?php if ($valores["propedeutica"]==$alumno->getPropedeutica2()){ echo "selected";}?>><?php echo $valores["nomPrope"]?></option>
                          <?php endforeach; ?>   										
                      </select>	<!-- /.select propedeutica 2  -->
                    </div>	<!-- /.col propedeutica 2 -->                               
                    </div> <!-- /.row -->
                  <div class="row">
                  <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                      <label for="nomSecundaria" class="mx-1 col-form obligatorio">Nombre Secundaria de Procedencia:</label>
                      <input type="text" id="nomSecundaria" name="nomSecundaria" placeholder="Nombre Secundaria de Procedencia" class="form-control" value="<?php echo $alumno->getNomSecundaria() ?>" required <?php if(isset($_SESSION['privilegios'])){
                      if((($_SESSION['privilegios'])=='3')){ ?> readonly <?php }}?>/>                        
                    </div>	 <!-- /.col nombre secundaria de procedencia -->                   
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-4">
                      <label for="claveSecundaria" class="mx-1 col-form">Clave Secundaria de Procedencia:</label>
                      <input type="text" id="claveSecundaria" name="claveSecundaria" placeholder="Clave Secundaria de Procedencia" class="form-control" value="<?php echo $alumno->getClaveSecundaria() ?>" <?php if(isset($_SESSION['privilegios'])){
                      if((($_SESSION['privilegios'])=='3')){ ?> readonly <?php }}?>/>                        
                    </div>	 <!-- /.col clave secundaria de procedencia -->
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-4">
                      <label for="promeSecundaria" class="mx-1 col-form">Promedio Secundaria:</label>
                      <input type="text" id="promeSecundaria" name="promeSecundaria" placeholder="Promedio de Secundaria" class="form-control" value="<?php echo $alumno->getPromeSecundaria() ?>" <?php if(isset($_SESSION['privilegios'])){
                      if((($_SESSION['privilegios'])=='3')){ ?> readonly <?php }}?>/>                        
                    </div> <!-- /.col promedio de secundaria --> 
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-4">
                      <label class="mx-1 col-form obligatorio" for="estadoSecundaria">Estado de la secundaria:</label>	                     
                      <select class="custom-select" id="estadoSecundaria" name="estadoSecundaria" required <?php if(isset($_SESSION['privilegios'])){
                      if((($_SESSION['privilegios'])=='3')){ ?> disabled <?php }}?>>	
                        <option selected disabled>Estado de la Secundaria</option>
                        <?php $registros = Alumno::llenarSelectEstadoSecundaria();                                                 
                          foreach ($registros as $valores):?>
                            <option value="<?php echo $valores["lugarNac"] ?>" <?php if ($valores["lugarNac"]==$alumno->getEstadoSecundaria()){ echo "selected";}?>><?php echo $valores["nomLugar"]?></option>
                          <?php endforeach; ?>                       									
                      </select>	<!-- /.select estado secundaria  -->
                    </div> <!-- /.col estado secundaria --> 
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-4">
                      <label for="surems" class="mx-1 col-form obligatorio">SUREMS:</label>
                      <input type="text" id="surems" name="surems" placeholder="SUREMS" class="form-control" value="<?php echo $alumno->getSurems() ?>" required <?php if(isset($_SESSION['privilegios'])){
                      if((($_SESSION['privilegios'])=='3')){ ?> readonly <?php }}?>/>                
                    </div> <!-- /.col SUREMS -->
                  </div> <!--- /. row -->                      
                  <div class="row">                                         
                    <div class="form-group my-2 col-xs-12 col-sm-12 col-md-6 col-lg-4">
                      <label for="fechaBaja" class="mx-1 col-form">Fecha Baja:</label>                      
                      <input type="text" id="fechaBaja" name="fechaBaja" placeholder="Fecha de Baja" class="form-control fecha" value="<?php echo $alumno->getFechaBaja() ?>" <?php if(isset($_SESSION['privilegios'])){
                      if((($_SESSION['privilegios'])=='3')){ ?> readonly <?php }}?>/>                
                    </div> <!-- /.col fecha baja -->
                    <div class="form-group my-2 col-xs-12 col-sm-12 col-md-6 col-lg-4">
                      <label for="causaBaja" class="mx-1 col-form">Causa Baja:</label>                      				                      
                      <select class="custom-select" id="causaBaja" name="causaBaja" <?php if(isset($_SESSION['privilegios'])){ if((($_SESSION['privilegios'])=='3')){ ?> disabled <?php }}?>>                        
                        <?php $registros = Alumno::llenarSelectCausaBaja();                                                 
                          foreach ($registros as $valores):?>
                            <option value="<?php echo $valores["causaBaja"] ?>" <?php if ($valores["causaBaja"]==$alumno->getCausaBaja()){ echo "selected";}?>><?php echo $valores["razon"]?></option>
                          <?php endforeach; ?>                                          									
                      </select>	<!-- /.select lugar de nacimiento  -->      
                    </div> <!-- /.col causa baja -->                    
                  </div> <!-- /.row -->
                </div> <!-- /.card-body (DATOS ESCOLARES)  -->
              </div> <!-- /.card (DATOS ESCOLARES) -->
              <br>
              <!-- DATOS PERSONALES -->
              <div class="card">
                <h5 class="card-header bg-secondary">Datos personales</h5>						
                <div class="card-body">						
                  <div class="row">	
                    <div class="form-group my-2 col-xs-12 col-sm-12 col-md-6 col-lg-3">
                      <label for="curp" class="mx-1 col-form obligatorio">CURP:</label>
                      <input type="text" id="curp" name="curp" placeholder="CURP" class="form-control" value="<?php echo $alumno->getCurp() ?>" required <?php if(isset($_SESSION['privilegios'])){
                      if((($_SESSION['privilegios'])=='3')){ ?> readonly <?php }}?>/>                
                    </div> <!-- /.col curp -->
                    <div class="form-group my-2 col-xs-12 col-sm-12 col-md-6 col-lg-3">
                      <label for="telAlumno" class="mx-1 col-form obligatorio">Teléfono Alumno:</label>
                      <input type="text" id="telAlumno" name="telAlumno" placeholder="Teléfono alumno" class="form-control" value="<?php echo $alumno->getTelAlumno() ?>" required <?php if(isset($_SESSION['privilegios'])){
                      if((($_SESSION['privilegios'])=='3')){ ?> readonly <?php }}?>/>                
                    </div> <!-- /.col telefono -->
                    <div class="form-group my-2 col-xs-12 col-sm-12 col-md-6 col-lg-3">
                      <label class="mx-1 col-form obligatorio" for="sexo">Sexo:</label>					
                      <select class="custom-select" id="sexo" name="sexo" required <?php if(isset($_SESSION['privilegios'])){ if((($_SESSION['privilegios'])=='3')){ ?> disabled <?php }}?>>	
                        <?php if($alumno->getSexo()=='M'):?>
                          <option disabled>Sexo</option>
                          <option selected value="M">Masculino</option>
                          <option value="F">Femenino</option>    
                        <?php elseif($alumno->getSexo()=='F'):?>
                          <option disabled>Sexo</option>
                          <option value="M">Masculino</option>
                          <option selected value="F">Femenino</option>
                        <?php else:?>
                          <option selected disabled>Sexo</option>
                          <option value="M">Masculino</option>
                          <option value="F">Femenino</option> 
                        <?php endif;?>                                        					
                      </select>	<!-- /.select sexo  -->
                    </div> <!-- /.col sexo -->   
                    <div class="form-group my-2 col-xs-12 col-sm-12 col-md-6 col-lg-3">
                      <label for="ts" class="mx-1 col-form obligatorio">Tipo Sanguíneo:</label>
                      <select class="custom-select" id="ts" name="ts" <?php if(isset($_SESSION['privilegios'])){ if((($_SESSION['privilegios'])=='3')){ ?> disabled <?php }}?>>                        
                        <option selected disabled>Tipo Sanguíneo</option>
                        <?php $registros = Alumno::llenarSelectTs();                                                 
                          foreach ($registros as $valores):?>
                            <option value="<?php echo $valores["ts"]?>" <?php if ($valores["ts"]==$alumno->getTs()){ echo "selected";}?>><?php echo $valores["nom"]?></option>
                          <?php endforeach; ?>                                                
                      </select>	<!-- /.select tipo sanguineo -->            
                    </div> <!-- /.col tipo sanguineo -->
                    <div class="form-group my-2 col-xs-12 col-sm-12 col-md-6 col-lg-3">
                      <label for="cuestSalud" class="mx-1 col-form">Cuestiones de salud:</label>
                      <input type="text" id="cuestSalud" name="cuestSalud" placeholder="Cuestiones de salud" class="form-control" value="<?php echo $alumno->getCuestSalud() ?>" <?php if(isset($_SESSION['privilegios'])){
                      if((($_SESSION['privilegios'])=='3')){ ?> readonly <?php }}?>>                
                    </div> <!-- /.col cuestiones de salud -->  	                   	
                    <div class="form-group my-2 col-xs-12 col-sm-12 col-md-6 col-lg-3">
                      <label class="mx-1 col-form obligatorio" for="lugarNac">Lugar de Nacimiento:</label>	                     
                      <select class="custom-select" id="lugarNac" name="lugarNac" required <?php if(isset($_SESSION['privilegios'])){ if((($_SESSION['privilegios'])=='3')){ ?> disabled <?php }}?>>	
                        <option selected disabled>Lugar de nacimiento</option>
                        <?php $registros = Alumno::llenarSelectLugar();                                                 
                          foreach ($registros as $valores):?>
                            <option value="<?php echo $valores["lugarNac"] ?>" <?php if ($valores["lugarNac"]==$alumno->getLugarNac()){ echo "selected";}?>><?php echo $valores["nomLugar"]?></option>
                          <?php endforeach; ?>                       									
                      </select>	<!-- /.select lugar de nacimiento  -->
                    </div> <!-- /.col lugar de nacimiento -->    
                    <div class="form-group my-2 col-xs-12 col-sm-12 col-md-6 col-lg-3">
                      <label for="fechaNac" class="mx-1 col-form obligatorio">Fecha Nacimiento:</label>
                      <input type="date" id="fechaNac" name="fechaNac" placeholder="Fecha de Nacimiento" class="form-control" value="<?php echo $alumno->getFechaNac() ?>" required <?php if(isset($_SESSION['privilegios'])){
                      if((($_SESSION['privilegios'])=='3')){ ?> readonly <?php }}?>>                
                    </div> <!-- /.col fecha nacimiento -->                     
                    <div class="form-group mt-1 mb-2 col-xs-12 col-sm-12 col-md-6 col-lg-3">
                      <label for="edad" class="mx-1 col-form">Edad:</label>
                      <input type="text" id="edad" name="edad" placeholder="Edad" class="form-control" readonly>             
                    </div>  <!-- /.col edad -->               		 
                    <div class="form-group mt-1 mb-2 col-xs-12 col-sm-12 col-md-6 col-lg-6">
                      <label for="emailInsti" class="mx-1 col-form">Email Institucional:</label>
                      <input type="email" id="emailInsti" name="emailInsti" placeholder="Email institucional" class="form-control" value="<?php echo $alumno->getEmailInsti() ?>" <?php if(isset($_SESSION['privilegios'])){
                      if((($_SESSION['privilegios'])=='3')){ ?> readonly <?php }}?>>                
                    </div> <!-- /.col email1 -->				
                    <div class="form-group mt-1 mb-2 col-xs-12 col-sm-12 col-md-6 col-lg-6">
                      <label for="emailPerso" class="mx-1 col-form obligatorio">Email Personal:</label>
                      <input type="email" id="emailPerso" name="emailPerso" placeholder="Email Personal" class="form-control" value="<?php echo $alumno->getEmailPerso() ?>" required <?php if(isset($_SESSION['privilegios'])){
                      if((($_SESSION['privilegios'])=='3')){ ?> readonly <?php }}?>>                
                    </div> <!-- /.col email2 -->
                    <div class="form-group my-2 col-xs-12 col-sm-12 col-md-6 col-lg-6">
                      <label for="nomTutor" class="mx-1 col-form obligatorio">Nombre del Padre/Madre/Tutor:</label>
                      <input type="text"  id="nomTutor" name="nomTutor" placeholder="Nombre del Padre/Madre/Tutor" class="form-control" value="<?php echo $alumno->getNomTutor() ?>" <?php if(isset($_SESSION['privilegios'])){
                      if((($_SESSION['privilegios'])=='3')){ ?> readonly <?php }}?>>                        
                    </div> <!-- /.col nom padre/tutor -->
                    <div class="form-group my-2 col-xs-12 col-sm-12 col-md-6 col-lg-6">
                      <label for="telTutor" class="mx-1 col-form obligatorio">Teléfono Padre/Madre/Tutor:</label>
                      <input type="text" id="telTutor" name="telTutor" placeholder="Teléfono Padre/Madre/Tutor" class="form-control" value="<?php echo $alumno->getTelTutor() ?>" required <?php if(isset($_SESSION['privilegios'])){
                      if((($_SESSION['privilegios'])=='3')){ ?> readonly <?php }}?>>                
                    </div> <!-- /.col telefono -->
                    <div class="mt-4 mb-2 col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                      <label for="" class="mx-2">Domicilio:</label>					
                    </div> <!-- /.col titulo domicilio -->
                    <div class="form-group my-2 col-xs-12 col-sm-12 col-md-6 col-lg-4">
                      <label for="calle" class="mx-1 col-form obligatorio">Calle:</label>
                      <input type="text" id="calle" name="calle" placeholder="Calle" class="form-control" value="<?php echo $alumno->getCalle() ?>" required <?php if(isset($_SESSION['privilegios'])){
                      if((($_SESSION['privilegios'])=='3')){ ?> readonly <?php }}?>>                
                    </div>	<!-- /.col calle -->		
                    <div class="form-group my-2 col-xs-12 col-sm-12 col-md-6 col-lg-2">
                      <label for="numExt" class="mx-1 col-form obligatorio">Num Exterior:</label>
                      <input type="text" id="numExt" name="numExt" placeholder="Número exterior" class="form-control" value="<?php echo $alumno->getNumExt() ?>" required <?php if(isset($_SESSION['privilegios'])){
                      if((($_SESSION['privilegios'])=='3')){ ?> readonly <?php }}?>>                
                    </div> <!-- /.col numero exterior -->	
                    <div class="form-group my-2 col-xs-12 col-sm-12 col-md-6 col-lg-2">
                      <label for="numInt" class="mx-1 col-form">Num Interior:</label>
                      <input type="text" id="numInt" name="numInt" placeholder="Número interior" class="form-control" value="<?php echo $alumno->getNumInt() ?>" <?php if(isset($_SESSION['privilegios'])){
                      if((($_SESSION['privilegios'])=='3')){ ?> readonly <?php }}?>>                
                    </div> <!-- /.col numero interior -->		
                    <div class="form-group my-2 col-xs-12 col-sm-12 col-md-6 col-lg-4">
                      <label for="colonia" class="mx-1 col-form obligatorio">Colonia:</label>
                      <input type="text" id="colonia" name="colonia" placeholder="Colonia" class="form-control"value="<?php echo $alumno->getColonia() ?>" required <?php if(isset($_SESSION['privilegios'])){
                      if((($_SESSION['privilegios'])=='3')){ ?> readonly <?php }}?>>                
                    </div> <!-- /.col colonia -->
                    <div class="form-group my-2 col-xs-12 col-sm-12 col-md-6 col-lg-2">
                      <label for="cp" class="mx-1 col-form obligatorio">Código Postal:</label>
                      <input type="text" id="cp" name="cp" placeholder="Código Postal" class="form-control" value="<?php echo $alumno->getCp() ?>" required <?php if(isset($_SESSION['privilegios'])){
                      if((($_SESSION['privilegios'])=='3')){ ?> readonly <?php }}?>>                
                    </div> <!-- /.col CP-->	 
                    <div class="form-group my-2 col-xs-12 col-sm-12 col-md-6 col-lg-4">
                      <label for="poblacion" class="mx-1 col-form obligatorio">Población:</label>
                      <input type="text" id="poblacion" name="poblacion" placeholder="Población" class="form-control" value="<?php echo $alumno->getPoblacion() ?>" required <?php if(isset($_SESSION['privilegios'])){
                      if((($_SESSION['privilegios'])=='3')){ ?> readonly <?php }}?>>                
                    </div>  <!-- /.col población -->                 
                    <div class="form-group my-2 col-xs-12 col-sm-12 col-md-6 col-lg-3">
                      <label class="mx-1 col-form obligatorio" for="municipio">Municipio:</label>					
                      <select class="custom-select" id="municipio" name="municipio" required <?php if(isset($_SESSION['privilegios'])){
                      if((($_SESSION['privilegios'])=='3')){ ?> disabled <?php }}?>>
                        <?php if($alumno->getMunicipio()=='Celaya'):?>
                          <option disabled>Municipio</option>						
                          <option selected value="Celaya">Celaya</option>
                          <option value="Comonfort">Comonfort</option>
                          <option value="San Miguel de Allende">San Miguel de Allende</option>						
                          <option value="Otro">Otro</option>   
                        <?php elseif($alumno->getMunicipio()=='Comonfort'):?>
                          <option disabled>Municipio</option>						
                          <option value="Celaya">Celaya</option>
                          <option selected value="Comonfort">Comonfort</option>
                          <option value="San Miguel de Allende">San Miguel de Allende</option>						
                          <option value="Otro">Otro</option>   
                        <?php elseif($alumno->getMunicipio()=='San Miguel de Allende'):?>
                          <option disabled>Municipio</option>						
                          <option value="Celaya">Celaya</option>
                          <option value="Comonfort">Comonfort</option>
                          <option selected value="San Miguel de Allende">San Miguel de Allende</option>						
                          <option value="Otro">Otro</option>  
                        <?php elseif($alumno->getMunicipio()=='Otro'):?>
                          <option disabled>Municipio</option>						
                          <option value="Celaya">Celaya</option>
                          <option value="Comonfort">Comonfort</option>
                          <option value="San Miguel de Allende">San Miguel de Allende</option>						
                          <option selected value="Otro">Otro</option>  
                        <?php else:?>
                          <option selected disabled>Municipio</option>						
                          <option value="Celaya">Celaya</option>
                          <option value="Comonfort">Comonfort</option>
                          <option value="San Miguel de Allende">San Miguel de Allende</option>						
                          <option value="Otro">Otro</option>
                        <?php endif;?>                        
                      </select>	
                    </div> <!-- /.col municipio-->
                    <div class="form-group my-2 col-xs-12 col-sm-12 col-md-6 col-lg-3">
                      <label class="mx-1 col-form obligatorio" for="estadoDom">Estado:</label>	                     
                      <select class="custom-select" id="estadoDom" name="estadoDom" required <?php if(isset($_SESSION['privilegios'])){if((($_SESSION['privilegios'])=='3')){ ?> disabled <?php }}?>>	
                        <option selected disabled>Estado</option>
                        <?php $registros = Alumno::llenarSelectEstadoDom();                                                 
                          foreach ($registros as $valores):?>
                            <option value="<?php echo $valores["lugarNac"] ?>" <?php if ($valores["lugarNac"]==$alumno->getEstadoDom()){ echo "selected";}?>><?php echo $valores["nomLugar"]?></option>
                          <?php endforeach; ?>                       									
                      </select>	<!-- /.select estado domicilio  -->
                    </div> <!-- /.col estado domicilio --> 
                  </div><!-- /.row -->	
                  <br>                  					
                </div> <!-- /-card-body (datos personales)-->
              </div> <!-- /-card (datos personales)-->       
              <!-- ARCHIVOS -->
              <div class="card">
                <h5 class="card-header bg-secondary">Documentos</h5>						
                <div class="card-body">			                                    
                  <div class="row">
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                      <label for="imagen" class="mx-1 col-form">Imagen alumno:</label>
                      <br>
                      <div class="row">
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-3">                                                
                        <p style="width: 100%"> <?php if($alumno->getImagen() != null){?>
                          <a href="<?php echo $alumno->getImagen() ?>" class="thumbnail" target="_blank"> <img src="<?php echo $alumno->getImagen() ?>" alt="Imagen" style="width: 80%"></a></p>                    
                        <?php } ?>                 
                        </div> <!-- /.col foto -->			 		
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-9 align-self-center">											
                          <input type="hidden" name="imagenOcul" value="<?php echo $alumno->getImagen()?>"/>  
                          <input id="imagen" name="imagen" type="file" class="form-control mb-2" accept="image/png, .jpeg, .jpg" <?php if(isset($_SESSION['privilegios'])){
                          if((($_SESSION['privilegios'])=='3')){ ?> disabled <?php }}?>>
                        </div>	<!-- /.col input file -->
                      </div>	<!-- /.row dentro de col. imagen  -->
                    </div>	<!-- /.col imagen -->	
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                      <label for="docCurp" class="mx-1 col-form">CURP:</label>
                      <br>
                      <div class="row">
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-2">                                                
                        <p style="width: 100%"> <?php if($alumno->getDocCurp() != null){?>
                          <a href="<?php echo $alumno->getDocCurp() ?>" target="_blank"><i class="far fa-file-pdf fa-3x" style="color: firebrick" title="CURP"></i></a></p>
                        <?php } ?>               
                        </div> <!-- /.col enlace al curp -->			 		
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-10 align-self-center">											
                          <input type="hidden" name="docCurpOcul" value="<?php echo $alumno->getDocCurp()?>"/>  
                          <input id="docCurp" name="docCurp" type="file" class="form-control mb-2" accept="document, .pdf" <?php if(isset($_SESSION['privilegios'])){
                          if((($_SESSION['privilegios'])=='3')){ ?> disabled <?php }}?>>
                        </div>	<!-- /.col input file -->
                      </div>	<!-- /.row dentro de col. doc curp  -->
                    </div>	<!-- /.col doc curp -->	
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                      <label for="docActNac" class="mx-1 col-form">Acta de nacimiento:</label>
                      <br>
                      <div class="row">
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-2">                                                
                        <p style="width: 100%"> <?php if($alumno->getDocActNac() != null){?>
                          <a href="<?php echo $alumno->getDocActNac() ?>" target="_blank"><i class="far fa-file-pdf fa-3x" style="color: firebrick" title="Acta Nacimiento"></i></a></p>
                        <?php } ?>               
                        </div> <!-- /.col enlace al acta -->			 		
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-10 align-self-center">											
                          <input type="hidden" name="docActNacOcul" value="<?php echo $alumno->getDocActNac()?>"/>
                          <input id="docActNac" name="docActNac" type="file" class="form-control mb-2" accept="document, .pdf" <?php if(isset($_SESSION['privilegios'])){
                          if((($_SESSION['privilegios'])=='3')){ ?> disabled <?php }}?>>  
                        </div>	<!-- /.col input file -->
                      </div>	<!-- /.row dentro de col. doc acta de nac  -->
                    </div>	<!-- /.col doc acta de nacimiento -->
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                      <label for="docCertSec" class="mx-1 col-form">Certificado de secundaria:</label>
                      <br>
                      <div class="row">
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-2">                                                
                        <p style="width: 100%"> <?php if($alumno->getDocCertSec() != null){?>
                          <a href="<?php echo $alumno->getDocCertSec() ?>" target="_blank"><i class="far fa-file-pdf fa-3x" style="color: firebrick" title="Certificado Secundaria"></i></a></p>
                        <?php } ?>               
                        </div> <!-- /.col enlace al certificado sec -->			 		
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-10 align-self-center">											
                          <input type="hidden" name="docCertSecOcul" value="<?php echo $alumno->getDocCertSec()?>"/>
                          <input id="docCertSec" name="docCertSec" type="file" class="form-control mb-2" accept="document, .pdf" <?php if(isset($_SESSION['privilegios'])){
                          if((($_SESSION['privilegios'])=='3')){ ?> disabled <?php }}?>> 
                        </div>	<!-- /.col input file -->
                      </div>	<!-- /.row dentro de col. doc certificado sec  -->
                    </div>	<!-- /.col doc certificado sec -->
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                      <label for="docSurems" class="mx-1 col-form">SUREMS:</label>
                      <br>
                      <div class="row">
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-2">                                                
                        <p style="width: 100%"> <?php if($alumno->getDocSurems() != null){?>
                          <a href="<?php echo $alumno->getDocSurems() ?>" target="_blank"><i class="far fa-file-pdf fa-3x" style="color: firebrick" title="SUREMS"></i></a></p>
                        <?php } ?>               
                        </div> <!-- /.col enlace al SUREMS -->			 		
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-10 align-self-center">											
                          <input type="hidden" name="docSuremsOcul" value="<?php echo $alumno->getDocSurems()?>"/>
                          <input id="docSurems" name="docSurems" type="file" class="form-control mb-2" accept="document, .pdf" <?php if(isset($_SESSION['privilegios'])){
                          if((($_SESSION['privilegios'])=='3')){ ?> disabled <?php }}?>>  
                        </div>	<!-- /.col input file -->
                      </div>	<!-- /.row dentro de col. doc SUREMS  -->
                    </div>	<!-- /.col doc SUREMS -->              
                    <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-6">
                      <label for="docCertCecy" class="mx-1 col-form">Certificado CECyTE:</label>
                      <br>
                      <div class="row">
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-2">                                                
                        <p style="width: 100%"> <?php if($alumno->getDocCertCecy() != null){?>
                          <a href="<?php echo $alumno->getDocCertCecy() ?>" target="_blank"><i class="far fa-file-pdf fa-3x" style="color: firebrick" title="CERTIFICADO CECYTE"></i></a></p>
                        <?php } ?>               
                        </div> <!-- /.col enlace al CERTIFICADO CECY -->			 		
                        <div class="form-group col-xs-12 col-sm-12 col-md-6 col-lg-10 align-self-center">											
                          <input type="hidden" name="docCertCecyOcul" value="<?php echo $alumno->getDocCertCecy()?>"/>
                          <input id="docCertCecy" name="docCertCecy" type="file" class="form-control mb-2" accept="document, .pdf" <?php if(isset($_SESSION['privilegios'])){
                          if((($_SESSION['privilegios'])=='3')){ ?> disabled <?php }}?>>  
                        </div>	<!-- /.col input file -->
                      </div>	<!-- /.row dentro de col. doc CERTIFICADO CECY  -->
                    </div>	<!-- /.col doc CERTIFICADO CECY -->                 		
                  </div> <!-- /.row -->	
                  <div class="row">
                    <div class="form-group my-2 col-xs-12 col-sm-12 col-md-12 col-lg-6">
                      <a href="index.php" class="btn btn-danger"><i class="fas fa-window-close" style="color: white"></i> Cancelar</a>
                    </div> <!-- cancelar -->
                    <?php if(isset($_SESSION['privilegios'])){
                      if((($_SESSION['privilegios'])!='3')){ ?> 
                        <div class="form-group my-2 col-xs-12 col-sm-12 col-md-12 col-lg-6">    
                          <button type="submit" class="btn btn-success float-right"><i class="fa fa-save"></i> Guardar</button>                  
                          <!--<input type="submit" value="Guardar" class="btn btn-success float-right">-->
                        </div> <!-- botón guardar -->		  
                    <?php 
                      }
                    }?>                      
                  </div>	<!-- /.row -->                  				
                </div> <!-- /-card-body (documentos)-->
              </div> <!-- /-card (documentos)-->       
            </form>  <!-- /.form -->       
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php    
  }
  include_once '../../assets/template/footer.php';
?>
<?php
ob_end_flush();
?>
<script src="../../assets/js/modulos/alumnos/datePicker.js"></script>
<script src="../../assets/js/modulos/alumnos/calcularEdad.js"></script>
<script src="../../assets/js/modulos/alumnos/alumno.js"></script>
<script src="../../assets/js/modulos/alumnos/fecha.js"></script>