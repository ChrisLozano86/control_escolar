<?php
ob_start();
?>
<?php
  include_once ('../../assets/template/header.php');
  require_once ('../../class/Periodo.php');

  $periodopk = (isset($_REQUEST['periodopk'])) ? $_REQUEST['periodopk'] : null;
  
  if($periodopk){    
    $periodo = Periodo::buscarPorPeriodoPk($periodopk);
  }else{    
    $periodo = new Periodo();
  }
?>

<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $mesInicio = (isset($_POST['mesInicio'])) ? $_POST['mesInicio'] : null;
    $mesFinal = (isset($_POST['mesFinal'])) ? $_POST['mesFinal'] : null;
    $anioInicio = (isset($_POST['anioInicio'])) ? $_POST['anioInicio'] : null;
    $anioFinal = (isset($_POST['anioFinal'])) ? $_POST['anioFinal'] : null;
    $periodo->setMesInicio($mesInicio);
    $periodo->setMesFinal($mesFinal);
    $periodo->setAnioInicio($anioInicio);
    $periodo->setAnioFinal($anioFinal);
    $periodo->guardar();    
    header('Location: index.php');   
  }else{

  ?>
  
    <!-- Main content -->
    <div class="content" id="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col">
              <h3>Registrar Período Escolar</h3>
              <a href="index.php" class="btn btn-info"><i class="fas fa-backward" style="color: white"></i> Regresar</a>
              <br><br>
              <!-- Código del formulario-->
              <form action="save.php" method="post" enctype="multipart/form-data" id="frmPeriodo" name="frmPeriodo"> <!-- El action va al mismo formulario -->
                <?php if ($periodo->getPeriodoPk()): ?>
                  <input type="hidden" name="periodopk" value="<?php echo $periodo->getPeriodoPk() ?>"/>
                <?php endif; ?>
                <div class="card">
                  <h5 class="card-header bg-secondary">Datos del período</h5>						
                  <div class="card-body">	
                    <div class="row">	
                      <div class="form-group my-2 col-xs-12 col-sm-12 col-md-6 col-lg-3">
                        <label for="mesInicio" class="mx-1 col-form obligatorio">Mes Inicio:</label>
                        <select class="custom-select" id="mesInicio" name="mesInicio" required>	 
                        <?php if($periodo->getMesInicio()=='Enero'):?>
                            <option disabled>Mes Inicio</option>
                            <option selected value="Enero">Enero</option>
                            <option value="Febrero">Febrero</option>
                            <option value="Marzo">Marzo</option>  
                            <option value="Abril">Abril</option>  
                            <option value="Mayo">Mayo</option>    
                            <option value="Junio">Junio</option>  
                            <option value="Julio">Julio</option>  
                            <option value="Agosto">Agosto</option>  
                            <option value="Septiembre">Septiembre</option>  
                            <option value="Octubre">Octubre</option>  
                            <option value="Noviembre">Noviembre</option>  
                            <option value="Diciembre">Diciembre</option>  
                          <?php elseif($periodo->getMesInicio()=='Febrero'):?>
                            <option disabled>Mes Inicio</option>
                            <option value="Enero">Enero</option>
                            <option selected value="Febrero">Febrero</option>
                            <option value="Marzo">Marzo</option>  
                            <option value="Abril">Abril</option>  
                            <option value="Mayo">Mayo</option>    
                            <option value="Junio">Junio</option>  
                            <option value="Julio">Julio</option>  
                            <option value="Agosto">Agosto</option>  
                            <option value="Septiembre">Septiembre</option>  
                            <option value="Octubre">Octubre</option>  
                            <option value="Noviembre">Noviembre</option>  
                            <option value="Diciembre">Diciembre</option> 
                          <?php elseif($periodo->getMesInicio()=='Marzo'):?>
                            <option disabled>Mes Inicio</option>
                            <option value="Enero">Enero</option>
                            <option value="Febrero">Febrero</option>
                            <option selected value="Marzo">Marzo</option>  
                            <option value="Abril">Abril</option>  
                            <option value="Mayo">Mayo</option>    
                            <option value="Junio">Junio</option>  
                            <option value="Julio">Julio</option>  
                            <option value="Agosto">Agosto</option>  
                            <option value="Septiembre">Septiembre</option>  
                            <option value="Octubre">Octubre</option>  
                            <option value="Noviembre">Noviembre</option>  
                            <option value="Diciembre">Diciembre</option> 
                          <?php elseif($periodo->getMesInicio()=='Abril'):?>
                            <option disabled>Mes Inicio</option>
                            <option value="Enero">Enero</option>
                            <option value="Febrero">Febrero</option>
                            <option value="Marzo">Marzo</option>  
                            <option selected value="Abril">Abril</option>  
                            <option value="Mayo">Mayo</option>    
                            <option value="Junio">Junio</option>  
                            <option value="Julio">Julio</option>  
                            <option value="Agosto">Agosto</option>  
                            <option value="Septiembre">Septiembre</option>  
                            <option value="Octubre">Octubre</option>  
                            <option value="Noviembre">Noviembre</option>  
                            <option value="Diciembre">Diciembre</option> 
                          <?php elseif($periodo->getMesInicio()=='Mayo'):?>
                            <option disabled>Mes Inicio</option>
                            <option value="Enero">Enero</option>
                            <option value="Febrero">Febrero</option>
                            <option value="Marzo">Marzo</option>  
                            <option value="Abril">Abril</option>  
                            <option selected value="Mayo">Mayo</option>    
                            <option value="Junio">Junio</option>  
                            <option value="Julio">Julio</option>  
                            <option value="Agosto">Agosto</option>  
                            <option value="Septiembre">Septiembre</option>  
                            <option value="Octubre">Octubre</option>  
                            <option value="Noviembre">Noviembre</option>  
                            <option value="Diciembre">Diciembre</option> 
                          <?php elseif($periodo->getMesInicio()=='Junio'):?>
                            <option disabled>Mes Inicio</option>
                            <option value="Enero">Enero</option>
                            <option selected value="Febrero">Febrero</option>
                            <option value="Marzo">Marzo</option>  
                            <option value="Abril">Abril</option>  
                            <option value="Mayo">Mayo</option>    
                            <option selected value="Junio">Junio</option>  
                            <option value="Julio">Julio</option>  
                            <option value="Agosto">Agosto</option>  
                            <option value="Septiembre">Septiembre</option>  
                            <option value="Octubre">Octubre</option>  
                            <option value="Noviembre">Noviembre</option>  
                            <option value="Diciembre">Diciembre</option> 
                          <?php elseif($periodo->getMesInicio()=='Julio'):?>
                            <option disabled>Mes Inicio</option>
                            <option value="Enero">Enero</option>
                            <option value="Febrero">Febrero</option>
                            <option value="Marzo">Marzo</option>  
                            <option value="Abril">Abril</option>  
                            <option value="Mayo">Mayo</option>    
                            <option value="Junio">Junio</option>  
                            <option selected value="Julio">Julio</option>  
                            <option value="Agosto">Agosto</option>  
                            <option value="Septiembre">Septiembre</option>  
                            <option value="Octubre">Octubre</option>  
                            <option value="Noviembre">Noviembre</option>  
                            <option value="Diciembre">Diciembre</option> 
                          <?php elseif($periodo->getMesInicio()=='Agosto'):?>
                            <option disabled>Mes Inicio</option>
                            <option value="Enero">Enero</option>
                            <option value="Febrero">Febrero</option>
                            <option value="Marzo">Marzo</option>  
                            <option value="Abril">Abril</option>  
                            <option value="Mayo">Mayo</option>    
                            <option value="Junio">Junio</option>  
                            <option value="Julio">Julio</option>  
                            <option selected value="Agosto">Agosto</option>  
                            <option value="Septiembre">Septiembre</option>  
                            <option value="Octubre">Octubre</option>  
                            <option value="Noviembre">Noviembre</option>  
                            <option value="Diciembre">Diciembre</option> 
                          <?php elseif($periodo->getMesInicio()=='Septiembre'):?>
                            <option disabled>Mes Inicio</option>
                            <option value="Enero">Enero</option>
                            <option value="Febrero">Febrero</option>
                            <option value="Marzo">Marzo</option>  
                            <option value="Abril">Abril</option>  
                            <option value="Mayo">Mayo</option>    
                            <option value="Junio">Junio</option>  
                            <option value="Julio">Julio</option>  
                            <option value="Agosto">Agosto</option>  
                            <option selected value="Septiembre">Septiembre</option>  
                            <option value="Octubre">Octubre</option>  
                            <option value="Noviembre">Noviembre</option>  
                            <option value="Diciembre">Diciembre</option> 
                          <?php elseif($periodo->getMesInicio()=='Octubre'):?>
                            <option disabled>Mes Inicio</option>
                            <option value="Enero">Enero</option>
                            <option value="Febrero">Febrero</option>
                            <option value="Marzo">Marzo</option>  
                            <option value="Abril">Abril</option>  
                            <option value="Mayo">Mayo</option>    
                            <option value="Junio">Junio</option>  
                            <option value="Julio">Julio</option>  
                            <option value="Agosto">Agosto</option>  
                            <option value="Septiembre">Septiembre</option>  
                            <option selected value="Octubre">Octubre</option>  
                            <option value="Noviembre">Noviembre</option>  
                            <option value="Diciembre">Diciembre</option> 
                          <?php elseif($periodo->getMesInicio()=='Noviembre'):?>
                            <option disabled>Mes Inicio</option>
                            <option value="Enero">Enero</option>
                            <option value="Febrero">Febrero</option>
                            <option value="Marzo">Marzo</option>  
                            <option value="Abril">Abril</option>  
                            <option value="Mayo">Mayo</option>    
                            <option value="Junio">Junio</option>  
                            <option value="Julio">Julio</option>  
                            <option value="Agosto">Agosto</option>  
                            <option value="Septiembre">Septiembre</option>  
                            <option value="Octubre">Octubre</option>  
                            <option selected value="Noviembre">Noviembre</option>  
                            <option value="Diciembre">Diciembre</option> 
                          <?php elseif($periodo->getMesInicio()=='Diciembre'):?>
                            <option disabled>Mes Inicio</option>
                            <option value="Enero">Enero</option>
                            <option value="Febrero">Febrero</option>
                            <option value="Marzo">Marzo</option>  
                            <option value="Abril">Abril</option>  
                            <option value="Mayo">Mayo</option>    
                            <option value="Junio">Junio</option>  
                            <option value="Julio">Julio</option>  
                            <option value="Agosto">Agosto</option>  
                            <option value="Septiembre">Septiembre</option>  
                            <option value="Octubre">Octubre</option>  
                            <option value="Noviembre">Noviembre</option>  
                            <option selected value="Diciembre">Diciembre</option> 
                          <?php else:?>
                            <option selected disabled>Mes Inicio</option>
                            <option value="Enero">Enero</option>
                            <option value="Febrero">Febrero</option>
                            <option value="Marzo">Marzo</option>  
                            <option value="Abril">Abril</option>  
                            <option value="Mayo">Mayo</option>    
                            <option value="Junio">Junio</option>  
                            <option value="Julio">Julio</option>  
                            <option value="Agosto">Agosto</option>  
                            <option value="Septiembre">Septiembre</option>  
                            <option value="Octubre">Octubre</option>  
                            <option value="Noviembre">Noviembre</option>  
                            <option value="Diciembre">Diciembre</option>                             
                          <?php endif;?> 
                        </select>  <!-- /.select mes inicio-->                                           
                      </div> <!-- /.col mes inicio -->
                      <div class="form-group my-2 col-xs-12 col-sm-12 col-md-6 col-lg-3">
                        <label for="anioInicio" class="mx-1 col-form obligatorio">Año Inicio:</label> 
                        <input type="text" id="anioInicio" name="anioInicio" placeholder="Año Inicio" class="form-control date-own" value="<?php echo $periodo->getAnioInicio() ?>" required/>                        
                      </div> <!-- /.col año inicio -->
                      <div class="form-group my-2 col-xs-12 col-sm-12 col-md-6 col-lg-3">
                        <label for="mesFinal" class="mx-1 col-form obligatorio">Mes Final:</label> 
                        <select class="custom-select" id="mesFinal" name="mesFinal" required>	 
                        <?php if($periodo->getMesFinal()=='Enero'):?>
                            <option disabled>Mes Final</option>
                            <option selected value="Enero">Enero</option>
                            <option value="Febrero">Febrero</option>
                            <option value="Marzo">Marzo</option>  
                            <option value="Abril">Abril</option>  
                            <option value="Mayo">Mayo</option>    
                            <option value="Junio">Junio</option>  
                            <option value="Julio">Julio</option>  
                            <option value="Agosto">Agosto</option>  
                            <option value="Septiembre">Septiembre</option>  
                            <option value="Octubre">Octubre</option>  
                            <option value="Noviembre">Noviembre</option>  
                            <option value="Diciembre">Diciembre</option>  
                          <?php elseif($periodo->getMesFinal()=='Febrero'):?>
                            <option disabled>Mes Final</option>
                            <option value="Enero">Enero</option>
                            <option selected value="Febrero">Febrero</option>
                            <option value="Marzo">Marzo</option>  
                            <option value="Abril">Abril</option>  
                            <option value="Mayo">Mayo</option>    
                            <option value="Junio">Junio</option>  
                            <option value="Julio">Julio</option>  
                            <option value="Agosto">Agosto</option>  
                            <option value="Septiembre">Septiembre</option>  
                            <option value="Octubre">Octubre</option>  
                            <option value="Noviembre">Noviembre</option>  
                            <option value="Diciembre">Diciembre</option> 
                          <?php elseif($periodo->getMesFinal()=='Marzo'):?>
                            <option disabled>Mes Final</option>
                            <option value="Enero">Enero</option>
                            <option value="Febrero">Febrero</option>
                            <option selected value="Marzo">Marzo</option>  
                            <option value="Abril">Abril</option>  
                            <option value="Mayo">Mayo</option>    
                            <option value="Junio">Junio</option>  
                            <option value="Julio">Julio</option>  
                            <option value="Agosto">Agosto</option>  
                            <option value="Septiembre">Septiembre</option>  
                            <option value="Octubre">Octubre</option>  
                            <option value="Noviembre">Noviembre</option>  
                            <option value="Diciembre">Diciembre</option> 
                          <?php elseif($periodo->getMesFinal()=='Abril'):?>
                            <option disabled>Mes Final</option>
                            <option value="Enero">Enero</option>
                            <option value="Febrero">Febrero</option>
                            <option value="Marzo">Marzo</option>  
                            <option selected value="Abril">Abril</option>  
                            <option value="Mayo">Mayo</option>    
                            <option value="Junio">Junio</option>  
                            <option value="Julio">Julio</option>  
                            <option value="Agosto">Agosto</option>  
                            <option value="Septiembre">Septiembre</option>  
                            <option value="Octubre">Octubre</option>  
                            <option value="Noviembre">Noviembre</option>  
                            <option value="Diciembre">Diciembre</option> 
                          <?php elseif($periodo->getMesFinal()=='Mayo'):?>
                            <option disabled>Mes Final</option>
                            <option value="Enero">Enero</option>
                            <option value="Febrero">Febrero</option>
                            <option value="Marzo">Marzo</option>  
                            <option value="Abril">Abril</option>  
                            <option selected value="Mayo">Mayo</option>    
                            <option value="Junio">Junio</option>  
                            <option value="Julio">Julio</option>  
                            <option value="Agosto">Agosto</option>  
                            <option value="Septiembre">Septiembre</option>  
                            <option value="Octubre">Octubre</option>  
                            <option value="Noviembre">Noviembre</option>  
                            <option value="Diciembre">Diciembre</option> 
                          <?php elseif($periodo->getMesFinal()=='Junio'):?>
                            <option disabled>Mes Final</option>
                            <option value="Enero">Enero</option>
                            <option selected value="Febrero">Febrero</option>
                            <option value="Marzo">Marzo</option>  
                            <option value="Abril">Abril</option>  
                            <option value="Mayo">Mayo</option>    
                            <option selected value="Junio">Junio</option>  
                            <option value="Julio">Julio</option>  
                            <option value="Agosto">Agosto</option>  
                            <option value="Septiembre">Septiembre</option>  
                            <option value="Octubre">Octubre</option>  
                            <option value="Noviembre">Noviembre</option>  
                            <option value="Diciembre">Diciembre</option> 
                          <?php elseif($periodo->getMesFinal()=='Julio'):?>
                            <option disabled>Mes Final</option>
                            <option value="Enero">Enero</option>
                            <option value="Febrero">Febrero</option>
                            <option value="Marzo">Marzo</option>  
                            <option value="Abril">Abril</option>  
                            <option value="Mayo">Mayo</option>    
                            <option value="Junio">Junio</option>  
                            <option selected value="Julio">Julio</option>  
                            <option value="Agosto">Agosto</option>  
                            <option value="Septiembre">Septiembre</option>  
                            <option value="Octubre">Octubre</option>  
                            <option value="Noviembre">Noviembre</option>  
                            <option value="Diciembre">Diciembre</option> 
                          <?php elseif($periodo->getMesFinal()=='Agosto'):?>
                            <option disabled>Mes Final</option>
                            <option value="Enero">Enero</option>
                            <option value="Febrero">Febrero</option>
                            <option value="Marzo">Marzo</option>  
                            <option value="Abril">Abril</option>  
                            <option value="Mayo">Mayo</option>    
                            <option value="Junio">Junio</option>  
                            <option value="Julio">Julio</option>  
                            <option selected value="Agosto">Agosto</option>  
                            <option value="Septiembre">Septiembre</option>  
                            <option value="Octubre">Octubre</option>  
                            <option value="Noviembre">Noviembre</option>  
                            <option value="Diciembre">Diciembre</option> 
                          <?php elseif($periodo->getMesFinal()=='Septiembre'):?>
                            <option disabled>Mes Final</option>
                            <option value="Enero">Enero</option>
                            <option value="Febrero">Febrero</option>
                            <option value="Marzo">Marzo</option>  
                            <option value="Abril">Abril</option>  
                            <option value="Mayo">Mayo</option>    
                            <option value="Junio">Junio</option>  
                            <option value="Julio">Julio</option>  
                            <option value="Agosto">Agosto</option>  
                            <option selected value="Septiembre">Septiembre</option>  
                            <option value="Octubre">Octubre</option>  
                            <option value="Noviembre">Noviembre</option>  
                            <option value="Diciembre">Diciembre</option> 
                          <?php elseif($periodo->getMesFinal()=='Octubre'):?>
                            <option disabled>Mes Final</option>
                            <option value="Enero">Enero</option>
                            <option value="Febrero">Febrero</option>
                            <option value="Marzo">Marzo</option>  
                            <option value="Abril">Abril</option>  
                            <option value="Mayo">Mayo</option>    
                            <option value="Junio">Junio</option>  
                            <option value="Julio">Julio</option>  
                            <option value="Agosto">Agosto</option>  
                            <option value="Septiembre">Septiembre</option>  
                            <option selected value="Octubre">Octubre</option>  
                            <option value="Noviembre">Noviembre</option>  
                            <option value="Diciembre">Diciembre</option> 
                          <?php elseif($periodo->getMesFinal()=='Noviembre'):?>
                            <option disabled>Mes Final</option>
                            <option value="Enero">Enero</option>
                            <option value="Febrero">Febrero</option>
                            <option value="Marzo">Marzo</option>  
                            <option value="Abril">Abril</option>  
                            <option value="Mayo">Mayo</option>    
                            <option value="Junio">Junio</option>  
                            <option value="Julio">Julio</option>  
                            <option value="Agosto">Agosto</option>  
                            <option value="Septiembre">Septiembre</option>  
                            <option value="Octubre">Octubre</option>  
                            <option selected value="Noviembre">Noviembre</option>  
                            <option value="Diciembre">Diciembre</option> 
                          <?php elseif($periodo->getMesFinal()=='Diciembre'):?>
                            <option disabled>Mes Final</option>
                            <option value="Enero">Enero</option>
                            <option value="Febrero">Febrero</option>
                            <option value="Marzo">Marzo</option>  
                            <option value="Abril">Abril</option>  
                            <option value="Mayo">Mayo</option>    
                            <option value="Junio">Junio</option>  
                            <option value="Julio">Julio</option>  
                            <option value="Agosto">Agosto</option>  
                            <option value="Septiembre">Septiembre</option>  
                            <option value="Octubre">Octubre</option>  
                            <option value="Noviembre">Noviembre</option>  
                            <option selected value="Diciembre">Diciembre</option> 
                          <?php else:?>
                            <option selected disabled>Mes Final</option>
                            <option value="Enero">Enero</option>
                            <option value="Febrero">Febrero</option>
                            <option value="Marzo">Marzo</option>  
                            <option value="Abril">Abril</option>  
                            <option value="Mayo">Mayo</option>    
                            <option value="Junio">Junio</option>  
                            <option value="Julio">Julio</option>  
                            <option value="Agosto">Agosto</option>  
                            <option value="Septiembre">Septiembre</option>  
                            <option value="Octubre">Octubre</option>  
                            <option value="Noviembre">Noviembre</option>  
                            <option value="Diciembre">Diciembre</option>                             
                          <?php endif;?>     
                        </select>  <!-- /.select mes final-->
                      </div> <!-- /.col mes final -->
                      <div class="form-group my-2 col-xs-12 col-sm-12 col-md-6 col-lg-3">
                        <label for="anioFinal" class="mx-1 col-form obligatorio">Año Final:</label> 
                        <input type="text" id="anioFinal" name="anioFinal" placeholder="Año Final" class="form-control date-own" value="<?php echo $periodo->getAnioFinal() ?>" required/>                        
                      </div> <!-- /.col año final -->
                      <div class="form-group my-3 col-xs-12 col-sm-12 col-md-12 col-lg-6">
                        <a href="index.php" class="btn btn-danger"><i class="fas fa-window-close" style="color: white"></i> Cancelar</a>
                      </div> <!-- cancelar -->		 
                      <div class="form-group my-2 col-xs-12 col-sm-12 col-md-12 col-lg-6 align-self-center">
                        <button type="submit" class="btn btn-success float-right"><i class="fa fa-save"></i> Guardar</button> 
                        <!-- <input type="submit" value="Guardar" class="btn btn-primary float-right"/>-->
                      </div> <!-- botón -->		                                        
                    </div> <!-- /.row -->
                  </div> <!-- /.card-body (DATOS DEL NUEVO PERIODO)  -->
                </div> <!-- /.card (DATOS DEL NUEVO PERIODO) -->                 
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
<script src="../../assets/js/modulos/periodos/periodo.js"></script>
<script src="../../assets/js/modulos/periodos/datepicker.js"></script>