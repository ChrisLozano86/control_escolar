<?php
ob_start();
require_once('../../class/Alumno.php');
include_once ('../../assets/template/header.php');
?>
<!-- Modal ACTUALIZADO MASIVO -->
<div class="modal fade" id="modalActualizar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Actualizado Masivo</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="form-group my-2">
            <form action="actualizadoMasivo.php" method="post">
                <div class="row">
                  <div class="form-group">
                    <input type="hidden" name="MODAL_F1" id="MODAL_F1"/>
                    <input type="hidden" name="MODAL_F2" id="MODAL_F2"/>
                    <input type="hidden" name="MODAL_F3" id="MODAL_F3"/>
                    <input type="hidden" name="MODAL_F4" id="MODAL_F4"/>
                    <input type="hidden" name="MODAL_F5" id="MODAL_F5"/>
                    <input type="hidden" name="MODAL_F6" id="MODAL_F6"/>
                    <input type="hidden" name="MODAL_F7" id="MODAL_F7"/>
                    <input type="hidden" name="MODAL_F8" id="MODAL_F8"/>
                    <input type="hidden" name="MODAL_F9" id="MODAL_F9"/>
                    <input type="hidden" name="MODAL_F10" id="MODAL_F10"/>
                    <input type="hidden" name="MODAL_F11" id="MODAL_F11"/>
                                        
                  </div>
                    <div class="form-group col-sm-12 col-md-3 col-lg-3">
                      <input name="checPeriodo" type="checkbox" id="checPeriodo" onChange="comprobarPeriodo(this);"/>
                      <label for="checPeriodo">Actualizar Periodo</label>
                      <select class="custom-select" name="actualizarPeriodo" id="actualizarPeriodo" style="display:none">
                        <option value=""></option>
                        <?php $registros = Alumno::llenarSelectPeriodo();                                                 
                          foreach ($registros as $valores):
                            if ($valores['mesInicio'] != "Período Escolar"){ ?>
                              <option value="<?php echo $valores["periodopk"] ?>" <?php if(isset($_POST["filtroPeriodo"])){if ($valores["periodopk"] == $_POST["filtroPeriodo"]){ echo "selected";}}?>><?php echo $valores["mesInicio"].' '.$valores["anioInicio"].' — '.$valores["mesFinal"].' '.$valores["anioFinal"]?></option>
                          <?php }
                        endforeach; ?> 
                      </select> <!-- /.select periodo --> 
                    </div> <!-- /.col periodo --> 
                    <div class="form-group col-sm-12 col-md-3 col-lg-3">
                      <input name="checSemestre" type="checkbox" id="checSemestre" onChange="comprobarSemestre(this);"/>
                      <label for="checSemestre">Actualizar Semestre</label>
                      <select class="custom-select" name="actualizarSemestre" id="actualizarSemestre" style="display:none">
                        <option value=""></option>
                        <?php $registros = Alumno::llenarSelectSemestre();                                                 
                        foreach ($registros as $valores):
                          if ($valores['semestre'] != "1"){?>
                            <option value="<?php echo $valores["semestre"]?>" <?php if(isset($_POST["filtroSemestre"])){ if ($valores["semestre"] == $_POST["filtroSemestre"]){ echo "selected";}}?>><?php echo $valores["nomSemestre"]?></option>
                        <?php }
                        endforeach; ?>
                      </select> <!-- /.select semestre --> 
                    </div> <!-- /.col semestre --> 
                    <div class="form-group col-xs-12 col-sm-12 col-md-3 col-lg-3">
                      <input name="checGrupo" type="checkbox" id="checGrupo" onChange="comprobarGrupo(this);"/>
                      <label class="mx-1 col-form" for="checGrupo">Actualizar Grupo:</label>	                     
                      <select class="custom-select" id="actualizarGrupo" name="actualizarGrupo" style="display:none">
                        <option value=""></option>
                        <?php $registros = Alumno::llenarSelectGrupo();                                                 
                        foreach ($registros as $valores):
                          if ($valores['grupo'] != "1"){?>
                            <option value="<?php echo $valores["grupo"] ?>" <?php if(isset($_POST["filtroGrupo"])){ if ($valores["grupo"] == $_POST["filtroGrupo"]){ echo "selected";}}?>><?php echo $valores["letra"]?></option>
                        <?php }
                        endforeach; ?>                     									
                      </select>	<!-- /.select grupo -->
                    </div> <!-- /.col grupo -->  
                    <div class="form-group col-xs-12 col-sm-12 col-md-3 col-lg-3">
                      <input name="checTurno" type="checkbox" id="checTurno" onChange="comprobarTurno(this);"/>
                      <label class="mx-1 col-form" for="checTurno">Actualizar Turno:</label>	                     
                      <select class="custom-select" id="actualizarTurno" name="actualizarTurno" style="display:none">
                        <option value=""></option>
                        <?php $registros = Alumno::llenarSelectTurno();                                                 
                        foreach ($registros as $valores):
                          if ($valores['turno'] != "1"){?>
                            <option value="<?php echo $valores["turno"] ?>" <?php if(isset($_POST["filtroTurno"])){ if ($valores["turno"] == $_POST["filtroTurno"]){ echo "selected";}}?>><?php echo $valores["nomTurno"]?></option>
                        <?php }
                        endforeach; ?>                                                                  									
                      </select>	<!-- /.select turno -->
                    </div> <!-- /.col turno -->  
                    <div class="form-group my-2 col-xs-12 col-sm-12 col-md-3 col-lg-3">
                      <input name="checEstatus" type="checkbox" id="checEstatus" onChange="comprobarEstatus(this);"/>
                      <label class="mx-1 col-form" for="checEstatus">Actualizar Estatus:</label>	                     
                      <select class="custom-select" id="actualizarEstatus" name="actualizarEstatus" style="display:none">
                        <option value=""></option>
                        <?php $registros = Alumno::llenarSelectEstatus();                                                 
                        foreach ($registros as $valores):?>
                            <option value="<?php echo $valores["estatus"] ?>" <?php if(isset($_POST["filtroEstatus"])){ if ($valores["estatus"] == $_POST["filtroEstatus"]){ echo "selected";}}?>><?php echo $valores["nomEstatus"]?></option>
                      <?php endforeach; ?>                     									
                      </select>	<!-- /.select estatus -->
                    </div> <!-- /.col estatus --> 
                    <div class="form-group my-2 col-sm-12 col-md-3 col-lg-3">
                      <input name="checIngreso" type="checkbox" id="checIngreso" onChange="comprobarIngreso(this);"/>
                      <label for="checIngreso">Actualizar Ingreso:</label>
                      <input type="text" id="actualizarIngreso" name="actualizarIngreso" placeholder="Año Ingreso" class="form-control date-own" value="<?php if(isset($_POST["filtroIngreso"])){echo $_POST["filtroIngreso"];}?>" style="display:none"/>
                    </div> <!-- /.col ingreso -->
                    <div class="form-group my-2 col-sm-12 col-md-3 col-lg-3">
                      <input name="checEgreso" type="checkbox" id="checEgreso" onChange="comprobarEgreso(this);"/>                      
                      <label for="checEgreso">Actualizar Egreso:</label>
                      <input type="text" id="actualizarEgreso" name="actualizarEgreso" placeholder="Año Egreso" class="form-control date-own" value="<?php if(isset($_POST["filtroEgreso"])){echo $_POST["filtroEgreso"];}?>" style="display:none"/>
                    </div> <!-- /.col egreso -->               
                </div> 
                <br>
                <button type="submit" class="btn btn-primary float-left" name="btnActualizarMasivo" id="btnActualizarMasivo" onclick="return confirm('¿Está seguro que desea actualizar los registros?');"><i class="fa fa-check-square"></i>  Actualizar</button>
              </form>                                      
            </div>               
            <div id="datos_buscados" class="container"></div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-backward" style="color: white"></i> Cancelar</button>
        </div>
      </div>
    </div>
  </div> <!-- /. DIV MODAL ACTUALIZADO MASIVO --> 

  <!-- Modal REPORTE DINÁMICO EXCEL -->
<div class="modal fade" id="modalReporte" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Seleccione los campos que debe contener el reporte</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="form-group my-2">
            <form action="descargar_documento.php" method="post">
                <div class="row">
                  <div class="form-group">
                    <input type="hidden" name="MODAL_FN1" id="MODAL_FN1"/>
                    <input type="hidden" name="MODAL_FN2" id="MODAL_FN2"/>
                    <input type="hidden" name="MODAL_FN3" id="MODAL_FN3"/>
                    <input type="hidden" name="MODAL_FN4" id="MODAL_FN4"/>
                    <input type="hidden" name="MODAL_FN5" id="MODAL_FN5"/>
                    <input type="hidden" name="MODAL_FN6" id="MODAL_FN6"/>
                    <input type="hidden" name="MODAL_FN7" id="MODAL_FN7"/>
                    <input type="hidden" name="MODAL_FN8" id="MODAL_FN8"/>
                    <input type="hidden" name="MODAL_FN9" id="MODAL_FN9"/>
                    <input type="hidden" name="MODAL_FN10" id="MODAL_FN10"/>
                    <input type="hidden" name="MODAL_FN11" id="MODAL_FN11"/>
                    <input type="hidden" name="MODAL_WHERE" id="MODAL_WHERE"/>
                    <!-- Datos escolares --> 
                    <input type="hidden" name="MODAL_NomCompleto" id="MODAL_NomCompleto"/> 
                    <input type="hidden" name="MODAL_NumFicha" id="MODAL_NumFicha"/> 
                    <input type="hidden" name="MODAL_NumCtrl" id="MODAL_NumCtrl"/> 
                    <input type="hidden" name="MODAL_Estatus" id="MODAL_Estatus"/> 
                    <input type="hidden" name="MODAL_Repetidor" id="MODAL_Repetidor"/> 
                    <input type="hidden" name="MODAL_Semestre" id="MODAL_Semestre"/> 
                    <input type="hidden" name="MODAL_Grupo" id="MODAL_Grupo"/> 
                    <input type="hidden" name="MODAL_Turno" id="MODAL_Turno"/> 
                    <input type="hidden" name="MODAL_Espe" id="MODAL_Espe"/> 
                    <input type="hidden" name="MODAL_ClaveEspe" id="MODAL_ClaveEspe"/> 
                    <input type="hidden" name="MODAL_Gene" id="MODAL_Gene"/> 
                    <input type="hidden" name="MODAL_Period" id="MODAL_Period"/> 
                    <input type="hidden" name="MODAL_Extracurri" id="MODAL_Extracurri"/> 
                    <input type="hidden" name="MODAL_Becas" id="MODAL_Becas"/> 
                    <input type="hidden" name="MODAL_Surems" id="MODAL_Surems"/> 
                    <input type="hidden" name="MODAL_FechaBaja" id="MODAL_FechaBaja"/> 
                    <input type="hidden" name="MODAL_CausaBaja" id="MODAL_CausaBaja"/> 
                    <input type="hidden" name="MODAL_ClaveCecy" id="MODAL_ClaveCecy"/> 
                    <input type="hidden" name="MODAL_Prope" id="MODAL_Prope"/> 
                    <input type="hidden" name="MODAL_DatosSecun" id="MODAL_DatosSecun"/>
                    <input type="hidden" name="MODAL_DatosEsc" id="MODAL_DatosEsc"/> 
                    <!-- Datos personales --> 
                    <input type="hidden" name="MODAL_Curp" id="MODAL_Curp"/> 
                    <input type="hidden" name="MODAL_TelAlumno" id="MODAL_TelAlumno"/> 
                    <input type="hidden" name="MODAL_Sexo" id="MODAL_Sexo"/> 
                    <input type="hidden" name="MODAL_TS" id="MODAL_TS"/> 
                    <input type="hidden" name="MODAL_CuestSalud" id="MODAL_CuestSalud"/> 
                    <input type="hidden" name="MODAL_LugarNac" id="MODAL_LugarNac"/> 
                    <input type="hidden" name="MODAL_FechaNac" id="MODAL_FechaNac"/> 
                    <input type="hidden" name="MODAL_Emails" id="MODAL_Emails"/> 
                    <input type="hidden" name="MODAL_NomTutor" id="MODAL_NomTutor"/> 
                    <input type="hidden" name="MODAL_TelTutor" id="MODAL_TelTutor"/> 
                    <input type="hidden" name="MODAL_Domicilio" id="MODAL_Domicilio"/>
                    <input type="hidden" name="MODAL_DatosPerso" id="MODAL_DatosPerso"/> 

                    <input type="hidden" name="MODAL_CAMPOS" id="MODAL_CAMPOS"/> 
                  </div>           
                  <div class="form-group col-sm-12 col-md-3 col-lg-12">
                    <label for="checDatosEscolares">Todos los datos escolares</label>     
                    <input name="checDatosEscolares" type="checkbox" id="checDatosEscolares" onChange="comprobarDatosEsco(this);"/>                                      
                  </div> <!-- /.col datos escolares -->                   
                  <div class="form-group col-sm-12 col-md-3 col-lg-2">
                    <label for="checNomCompleto">Nombre</label>
                    <input name="checNomCompleto" type="checkbox" id="checNomCompleto"/>                                           
                  </div> <!-- /.col nom completo --> 
                  <div class="form-group col-sm-12 col-md-3 col-lg-2">
                    <label for="checNumFicha">Num Ficha</label>
                    <input name="checNumFicha" type="checkbox" id="checNumFicha"/>                                           
                  </div> <!-- /.col num ficha -->  
                  <div class="form-group col-sm-12 col-md-3 col-lg-2">
                    <label for="checNumCtrl">Num Control</label>
                    <input name="checNumCtrl" type="checkbox" id="checNumCtrl"/>                                           
                  </div> <!-- /.col num control --> 
                  <div class="form-group col-sm-12 col-md-3 col-lg-2">
                    <label for="checEst">Estatus</label>
                    <input name="checEst" type="checkbox" id="checEst"/>                                           
                  </div> <!-- /.col estatus -->
                  <div class="form-group col-sm-12 col-md-3 col-lg-2">
                    <label for="checRepetidor">Repetidor</label>
                    <input name="checRepetidor" type="checkbox" id="checRepetidor"/>                                           
                  </div> <!-- /.col repetidor --> 
                  <div class="form-group col-sm-12 col-md-3 col-lg-2">
                    <label for="checSem">Semestre</label>
                    <input name="checSem" type="checkbox" id="checSem"/>                                           
                  </div> <!-- /.col sem --> 
                  <div class="form-group col-sm-12 col-md-3 col-lg-2">
                    <label for="checGrup">Grupo</label>
                    <input name="checGrup" type="checkbox" id="checGrup"/>                                           
                  </div> <!-- /.col grup -->
                  <div class="form-group col-sm-12 col-md-3 col-lg-2">
                    <label for="checTurn">Turno</label>
                    <input name="checTurn" type="checkbox" id="checTurn"/>                                           
                  </div> <!-- /.col turn -->  
                  <div class="form-group col-sm-12 col-md-3 col-lg-2">
                    <label for="checEspe">Especialidad</label>
                    <input name="checEspe" type="checkbox" id="checEspe"/>                                           
                  </div> <!-- /.col especialidad --> 
                  <div class="form-group col-sm-12 col-md-3 col-lg-2">
                    <label for="checClaveEspe">Clave Espe</label>
                    <input name="checClaveEspe" type="checkbox" id="checClaveEspe"/>                                           
                  </div> <!-- /.col clave especialidad --> 
                  <div class="form-group col-sm-12 col-md-3 col-lg-2">
                    <label for="checGeneracion">Generación</label>
                    <input name="checGeneracion" type="checkbox" id="checGeneracion"/>                                           
                  </div> <!-- /.col generacion -->
                  <div class="form-group col-sm-12 col-md-3 col-lg-2">
                    <label for="checPeriodoEs">Periodo Esc</label>
                    <input name="checPeriodoEs" type="checkbox" id="checPeriodoEs"/>                                           
                  </div> <!-- /.col periodo escolar -->
                  <div class="form-group col-sm-12 col-md-3 col-lg-2">
                    <label for="checExtracurri">Curricular</label>
                    <input name="checExtracurri" type="checkbox" id="checExtracurri"/>                                           
                  </div> <!-- /.col estracurricular -->
                  <div class="form-group col-sm-12 col-md-3 col-lg-2">
                    <label for="checBecas">Becas</label>
                    <input name="checBecas" type="checkbox" id="checBecas"/>                                           
                  </div> <!-- /.col becas -->         
                  <div class="form-group col-sm-12 col-md-3 col-lg-2">
                    <label for="checSurems">SUREMS</label>
                    <input name="checSurems" type="checkbox" id="checSurems"/>                                           
                  </div> <!-- /.col surems --> 
                  <div class="form-group col-sm-12 col-md-3 col-lg-2">
                    <label for="checFechaBaja">Fecha Baja</label>
                    <input name="checFechaBaja" type="checkbox" id="checFechaBaja"/>                                           
                  </div> <!-- /.col fecha Baja -->                   
                  <div class="form-group col-sm-12 col-md-3 col-lg-2">
                    <label for="checCausaBaja">Causa Baja</label>
                    <input name="checCausaBaja" type="checkbox" id="checCausaBaja"/>                                           
                  </div> <!-- /.col causa Baja -->                                               
                  <div class="form-group col-sm-12 col-md-3 col-lg-3">
                    <label for="checClaveCecy">Clave CECyTE</label>
                    <input name="checClaveCecy" type="checkbox" id="checClaveCecy"/>                                           
                  </div> <!-- /.col checClaveCecy --> 
                  <div class="form-group col-sm-12 col-md-3 col-lg-3">
                    <label for="checPrope">Propedéuticas</label>
                    <input name="checPrope" type="checkbox" id="checPrope"/>                                           
                  </div> <!-- /.col prope -->
                  <div class="form-group col-sm-12 col-md-3 col-lg-3">
                    <label for="checSecun">Datos Secundaria</label>
                    <input name="checSecun" type="checkbox" id="checSecun"/>                                           
                  </div> <!-- /.col checSecun --> 
                  
                  <div class="form-group col-sm-12 col-md-3 col-lg-12">
                    <label for="checDatosPersonales">Todos los datos personales</label> 
                    <input name="checDatosPersonales" type="checkbox" id="checDatosPersonales" onChange="comprobarDatosPerso(this);"/>                      
                  </div> <!-- /.col datos personales -->
                  <div class="form-group col-sm-12 col-md-3 col-lg-2">
                    <label for="checCurp">CURP</label>
                    <input name="checCurp" type="checkbox" id="checCurp"/>                                           
                  </div> <!-- /.col curp -->  
                  <div class="form-group col-sm-12 col-md-3 col-lg-2">
                    <label for="checTelAlum">Tel Alumno</label>
                    <input name="checTelAlum" type="checkbox" id="checTelAlum"/>                                           
                  </div> <!-- /.col tel alumno -->  
                  <div class="form-group col-sm-12 col-md-3 col-lg-2">
                    <label for="checSexo">Sexo</label>
                    <input name="checSexo" type="checkbox" id="checSexo"/>                                           
                  </div> <!-- /.col sexo -->     
                  <div class="form-group col-sm-12 col-md-3 col-lg-2">
                    <label for="checTs">T.S</label>
                    <input name="checTs" type="checkbox" id="checTs"/>                                           
                  </div> <!-- /.col ts --> 
                  <div class="form-group col-sm-12 col-md-3 col-lg-2">
                    <label for="checCuestSalud">Cuest Salud</label>
                    <input name="checCuestSalud" type="checkbox" id="checCuestSalud"/>                                           
                  </div> <!-- /.col cuest slaud -->   
                  <div class="form-group col-sm-12 col-md-3 col-lg-2">
                    <label for="checLugarNac">Lugar Nac</label>
                    <input name="checLugarNac" type="checkbox" id="checLugarNac"/>                                           
                  </div> <!-- /.col lugar nac -->  
                  <div class="form-group col-sm-12 col-md-3 col-lg-2">
                    <label for="checFechaNac">Fecha Nac</label>
                    <input name="checFechaNac" type="checkbox" id="checFechaNac"/>                                           
                  </div> <!-- /.col fecha nac --> 
                  <div class="form-group col-sm-12 col-md-3 col-lg-2">
                    <label for="checEmails">Emails</label>
                    <input name="checEmails" type="checkbox" id="checEmails"/>                                           
                  </div> <!-- /.col emails -->     
                  <div class="form-group col-sm-12 col-md-3 col-lg-2">
                    <label for="checNomTutor">Nom Tutor</label>
                    <input name="checNomTutor" type="checkbox" id="checNomTutor"/>                                           
                  </div> <!-- /.col nom tutor --> 
                  <div class="form-group col-sm-12 col-md-3 col-lg-2">
                    <label for="checTelTutor">Tel Tutor</label>
                    <input name="checTelTutor" type="checkbox" id="checTelTutor"/>                                           
                  </div> <!-- /.col tel tutor -->  
                  <div class="form-group col-sm-12 col-md-3 col-lg-2">
                    <label for="checDom">Domicilio</label>
                    <input name="checDom" type="checkbox" id="checDom"/>                                           
                  </div> <!-- /.col dom -->                 
                                   
                </div> 
                <br>
                <button type="submit" class="btn btn-primary float-left" name="btnGenerarReporte" id="btnGenerarReporte" onclick="comprobar();"><i class="fa fa-download"></i>  Descargar Reporte</button>
              </form>                                      
            </div>               
            <div id="datos_buscados" class="container"></div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-backward" style="color: white"></i> Cancelar</button>
        </div>
      </div>
    </div>
  </div> <!-- /. DIV MODAL REPORTE DINÁMICO EXCEL --> 

  <!-- Main content -->
    <div class="content" id="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <h3>Filtrar Alumnos</h3>
            <a href="index.php" class="btn btn-info"><i class="fas fa-backward" style="color: white"></i> Regresar </a>
            <br><br>
            <form method="post" action="filtrados.php" id="frmFiltros" name="frmFiltros" >
              <div class="row">
                <div class="form-group my-2 col-xs-12 col-sm-12 col-md-3 col-lg-3">
                  <label class="mx-1 col-form" for="filtroPeriodo">Período Escolar:</label>	                     
                  <select class="custom-select" id="filtroPeriodo" name="filtroPeriodo">	
                    <option value="">Todos</option>
                    <?php $registros = Alumno::llenarSelectPeriodo();                                                 
                    foreach ($registros as $valores):
                      if ($valores['mesInicio'] != "Período Escolar"){ ?>
                        <option value="<?php echo $valores["periodopk"] ?>" <?php if(isset($_POST["filtroPeriodo"])){if ($valores["periodopk"] == $_POST["filtroPeriodo"]){ echo "selected";}}?>><?php echo $valores["mesInicio"].' '.$valores["anioInicio"].' — '.$valores["mesFinal"].' '.$valores["anioFinal"]?></option>
                    <?php }
                  endforeach; ?>                      									
                  </select>	<!-- /.select periodo escolar  -->
                </div> <!-- /.col periodo escolar -->
                <div class="form-group my-2 col-xs-12 col-sm-12 col-md-3 col-lg-3">
                  <label class="mx-1 col-form" for="filtroEspe">Especialidad:</label>	                     
                  <select class="custom-select" id="filtroEspe" name="filtroEspe">	
                    <option selected value = "">Todas</option>
                    <?php $registros = Alumno::llenarSelectEspe();                                                 
                    foreach ($registros as $valores):?>
                      <option value="<?php echo $valores["especialidad"] ?>" <?php if(isset($_POST["filtroEspe"])){ if ($valores["especialidad"] == $_POST["filtroEspe"]){ echo "selected";}}?>><?php echo $valores["nomEspe"]?></option>
                    <?php endforeach; ?>                      									
                  </select>	<!-- /.select especialidad -->
                </div> <!-- /.col especialidad -->
                <div class="form-group my-2 col-xs-12 col-sm-12 col-md-3 col-lg-2">
                  <label class="mx-1 col-form" for="filtroSemestre">Semestre:</label>	                     
                  <select class="custom-select" id="filtroSemestre" name="filtroSemestre">
                    <option value="">Todos</option>
                    <?php $registros = Alumno::llenarSelectSemestre();                                                 
                    foreach ($registros as $valores):
                      if ($valores['semestre'] != "1"){?>
                        <option value="<?php echo $valores["semestre"]?>" <?php if(isset($_POST["filtroSemestre"])){ if ($valores["semestre"] == $_POST["filtroSemestre"]){ echo "selected";}}?>><?php echo $valores["nomSemestre"]?></option>
                    <?php }
                    endforeach; ?>                    									
                  </select>	<!-- /.select semestre -->
                </div> <!-- /.col semestre -->
                <div class="form-group my-2 col-xs-12 col-sm-12 col-md-3 col-lg-2">
                  <label class="mx-1 col-form" for="filtroGrupo">Grupo:</label>	                     
                  <select class="custom-select" id="filtroGrupo" name="filtroGrupo">
                    <option value="">Todos</option>
                    <?php $registros = Alumno::llenarSelectGrupo();                                                 
                    foreach ($registros as $valores):
                      if ($valores['grupo'] != "1"){?>
                        <option value="<?php echo $valores["grupo"] ?>" <?php if(isset($_POST["filtroGrupo"])){ if ($valores["grupo"] == $_POST["filtroGrupo"]){ echo "selected";}}?>><?php echo $valores["letra"]?></option>
                  <?php }
                    endforeach; ?>                     									
                  </select>	<!-- /.select grupo -->
                </div> <!-- /.col grupo -->
                <div class="form-group my-2 col-xs-12 col-sm-12 col-md-3 col-lg-2">
                  <label class="mx-1 col-form" for="filtroRepe">Repetidor:</label>	                     
                  <select class="custom-select" id="filtroRepe" name="filtroRepe">
                    <?php if($_POST["filtroRepe"]== "Si"):?>
                      <option value="">Todos</option>
                      <option selected value="Si">Si</option>
                      <option value="No">No</option>  
                    <?php elseif($_POST["filtroRepe"]== "No"):?>
                      <option value="">Todos</option>
                      <option value="Si">Si</option>
                      <option selected value="No">No</option> 
                    <?php else:?>
                      <option value="" selected>Todos</option>
                      <option value="Si">Si</option>
                      <option value="No">No</option>
                    <?php endif;?>                                                                                  									
                  </select>	<!-- /.select repetidor -->
                </div> <!-- /.col repetidor -->
                <div class="form-group my-2 col-xs-12 col-sm-12 col-md-3 col-lg-3">
                  <label class="mx-1 col-form" for="filtroTurno">Turno:</label>	                     
                  <select class="custom-select" id="filtroTurno" name="filtroTurno">
                    <option value="">Todos</option>
                    <?php $registros = Alumno::llenarSelectTurno();                                                 
                    foreach ($registros as $valores):
                      if ($valores['turno'] != "1"){?>
                        <option value="<?php echo $valores["turno"] ?>" <?php if(isset($_POST["filtroTurno"])){ if ($valores["turno"] == $_POST["filtroTurno"]){ echo "selected";}}?>><?php echo $valores["nomTurno"]?></option>
                    <?php }
                    endforeach; ?>                                                                  									
                  </select>	<!-- /.select turno -->
                </div> <!-- /.col turno -->
                <div class="form-group my-2 col-xs-12 col-sm-12 col-md-3 col-lg-2">
                  <label class="mx-1 col-form" for="filtroSexo">Sexo:</label>	                     
                  <select class="custom-select" id="filtroSexo" name="filtroSexo">
                    <?php if($_POST["filtroSexo"]=='M'):?>
                          <option value="">Todos</option>
                          <option selected value="M">Masculino</option>
                          <option value="F">Femenino</option>    
                        <?php elseif($_POST["filtroSexo"]=='F'):?>
                          <option value="">Todos</option>
                          <option value="M">Masculino</option>
                          <option selected value="F">Femenino</option>
                        <?php else:?>
                          <option value="" selected>Todos</option>
                          <option value="M">Masculino</option>
                          <option value="F">Femenino</option> 
                        <?php endif;?>                                                                 									
                  </select>	<!-- /.select turno -->
                </div> <!-- /.col turno -->
                <div class="form-group my-2 col-xs-12 col-sm-12 col-md-3 col-lg-3">
                  <label class="mx-1 col-form" for="filtroEstatus">Estatus:</label>	                     
                  <select class="custom-select" id="filtroEstatus" name="filtroEstatus">
                    <option value="">Todos</option>
                    <?php $registros = Alumno::llenarSelectEstatus();                                                 
                    foreach ($registros as $valores):?>
                        <option value="<?php echo $valores["estatus"] ?>" <?php if(isset($_POST["filtroEstatus"])){ if ($valores["estatus"] == $_POST["filtroEstatus"]){ echo "selected";}}?>><?php echo $valores["nomEstatus"]?></option>
                  <?php endforeach; ?>                     									
                  </select>	<!-- /.select estatus -->
                </div> <!-- /.col estatus -->
                <div class="form-group my-2 col-sm-12 col-md-3 col-lg-2">
                  <label for="filtroIngreso">Año ingreso:</label>
                  <input type="text" id="filtroIngreso" name="filtroIngreso" placeholder="Año Ingreso" class="form-control date-own" value="<?php if(isset($_POST["filtroIngreso"])){echo $_POST["filtroIngreso"];}?>"/>
                </div> <!-- /.col ingreso -->
                <div class="form-group my-2 col-sm-12 col-md-3 col-lg-2">
                  <label for="filtroEgreso">Año egreso:</label>
                  <input type="text" id="filtroEgreso" name="filtroEgreso" placeholder="Año Egreso" class="form-control date-own" value="<?php if(isset($_POST["filtroEgreso"])){echo $_POST["filtroEgreso"];}?>"/>
                </div> <!-- /.col egreso -->
                <div class="form-group my-2 col-sm-12 col-md-3 col-lg-3">
                  <label for="filtroNac">Fecha de nacimiento:</label>
                  <input type="date" id="filtroNac" name="filtroNac" placeholder="Fecha de nacimiento" class="form-control" value="<?php if(isset($_POST["filtroNac"])){echo $_POST["filtroNac"];}?>"/>
                </div> <!-- /.col ingreso -->
                <div class="form-group mt-4 col-xs-12 col-sm-12 col-md-3 col-lg-4">    
                  <button type="submit" class="btn btn-success float-right" name="btnFiltrar" id="btnFiltrar"><i class="fa fa-filter"></i> Filtrar</button>                  
                  <!--<input type="submit" value="filtrar" class="btn btn-success float-right">-->
                </div> <!-- botón -->	
              </div> <!-- /.ROW DEL FILTRADOR -->
            </form>
            <br>   
            <?php  
            ////////// -------------- FILTROS -------------------------
            if (isset($_POST['btnFiltrar'])){ 
              if($_POST["filtroPeriodo"]=="" AND $_POST["filtroEspe"]=="" AND $_POST["filtroSemestre"]=="" AND $_POST["filtroGrupo"]=="" AND $_POST["filtroRepe"]=="" AND $_POST["filtroTurno"]=="" AND $_POST["filtroSexo"]=="" AND $_POST["filtroEstatus"]=="" AND $_POST["filtroIngreso"]=="" AND $_POST["filtroEgreso"]=="" AND $_POST["filtroNac"]==""){
                echo '<script>
                alert("Ingrese algún filtro");
                </script>';
              } 
              ///// FILTRO PERIODO
              $P = $_POST["filtroPeriodo"];
              if($_POST["filtroPeriodo"]!=""){$P = " periodofk = '".$_POST["filtroPeriodo"]."'"; $GLOBAL_P=$P;}
              ///// FILTRO ESPECIALIDAD
              $E = $_POST["filtroEspe"];
              if($_POST["filtroEspe"]!=""){
                if($_POST["filtroPeriodo"]==""){
                  $E = " a.especialidad = '".$_POST["filtroEspe"]."'";
                }else{$E = " AND a.especialidad = '".$_POST["filtroEspe"]."'";}                
              }
              ///// FILTRO SEMESTRE
              $S = $_POST["filtroSemestre"];
              if($_POST["filtroSemestre"]!=""){
                if($_POST["filtroPeriodo"]=="" AND $_POST["filtroEspe"]==""){
                  $S= " a.semestre = '".$_POST["filtroSemestre"]."'";
                }else{$S = " AND a.semestre = '".$_POST["filtroSemestre"]."'";}                
              }
              ///// FILTRO GRUPO
              $G = $_POST["filtroGrupo"];
              if($_POST["filtroGrupo"]!=""){
                if($_POST["filtroPeriodo"]=="" AND $_POST["filtroEspe"]=="" AND $_POST["filtroSemestre"]==""){
                  $G = " a.grupo = '".$_POST["filtroGrupo"]."'";
                }else{$G = " AND a.grupo = '".$_POST["filtroGrupo"]."'";}                
              }
              ///// FILTRO REPETIDOR
              $R = $_POST["filtroRepe"];
              if($_POST["filtroRepe"]!=""){
                if($_POST["filtroPeriodo"]=="" AND $_POST["filtroEspe"]=="" AND $_POST["filtroSemestre"]=="" AND $_POST["filtroGrupo"]==""){
                  $R = " repetidor = '".$_POST["filtroRepe"]."'";
                }else{$R = " AND repetidor = '".$_POST["filtroRepe"]."'";}
              }
              ///// FILTRO TURNO
              $T = $_POST["filtroTurno"];
              if($_POST["filtroTurno"]!=""){
                if($_POST["filtroPeriodo"]=="" AND $_POST["filtroEspe"]=="" AND $_POST["filtroSemestre"]=="" AND $_POST["filtroGrupo"]=="" AND $_POST["filtroRepe"]==""){
                  $T = " a.turno = '".$_POST["filtroTurno"]."'";
                }else{$T = " AND a.turno = '".$_POST["filtroTurno"]."'";}
              }
              ///// FILTRO SEXO
              $SX = $_POST["filtroSexo"];
              if($_POST["filtroSexo"]!=""){
                if($_POST["filtroPeriodo"]=="" AND $_POST["filtroEspe"]=="" AND $_POST["filtroSemestre"]=="" AND $_POST["filtroGrupo"]=="" AND $_POST["filtroRepe"]=="" AND $_POST["filtroTurno"]==""){
                  $SX = " sexo = '".$_POST["filtroSexo"]."'";
                }else{$SX = " AND sexo = '".$_POST["filtroSexo"]."'";}
              }
              ///// FILTRO ESTATUS
              $ET = $_POST["filtroEstatus"];
              if($_POST["filtroEstatus"]!=""){
                if($_POST["filtroPeriodo"]=="" AND $_POST["filtroEspe"]=="" AND $_POST["filtroSemestre"]=="" AND $_POST["filtroGrupo"]=="" AND $_POST["filtroRepe"]=="" AND $_POST["filtroTurno"]=="" AND $_POST["filtroSexo"]==""){
                  $ET = " a.estatus = '".$_POST["filtroEstatus"]."'";
                }else{$ET = " AND a.estatus = '".$_POST["filtroEstatus"]."'";}
              }
              ///// FILTRO INGRESO
              $IN = $_POST["filtroIngreso"];
              if($_POST["filtroIngreso"]!=""){
                if($_POST["filtroPeriodo"]=="" AND $_POST["filtroEspe"]=="" AND $_POST["filtroSemestre"]=="" AND $_POST["filtroGrupo"]=="" AND $_POST["filtroRepe"]=="" AND $_POST["filtroTurno"]=="" AND $_POST["filtroSexo"]=="" AND $_POST["filtroEstatus"]==""){
                  $IN = " ingreso = '".$_POST["filtroIngreso"]."'";
                }else{$IN = " AND ingreso = '".$_POST["filtroIngreso"]."'";}
              }
              ///// FILTRO EGRESO
              $EG = $_POST["filtroEgreso"];
              if($_POST["filtroEgreso"]!=""){
                if($_POST["filtroPeriodo"]=="" AND $_POST["filtroEspe"]=="" AND $_POST["filtroSemestre"]=="" AND $_POST["filtroGrupo"]=="" AND $_POST["filtroRepe"]=="" AND $_POST["filtroTurno"]=="" AND $_POST["filtroSexo"]=="" AND $_POST["filtroEstatus"]=="" AND $_POST["filtroIngreso"]==""){
                  $EG = " egreso = '".$_POST["filtroEgreso"]."'";
                }else{$EG = " AND egreso = '".$_POST["filtroEgreso"]."'";}
              }
              ///// FILTRO FECHA NAC
              $NA = $_POST["filtroNac"];
              if($_POST["filtroNac"]!=""){
                if($_POST["filtroPeriodo"]=="" AND $_POST["filtroEspe"]=="" AND $_POST["filtroSemestre"]=="" AND $_POST["filtroGrupo"]=="" AND $_POST["filtroRepe"]=="" AND $_POST["filtroTurno"]=="" AND $_POST["filtroSexo"]=="" AND $_POST["filtroEstatus"]=="" AND $_POST["filtroIngreso"]=="" AND $_POST["filtroEgreso"]==""){
                  $NA = " fechaNac = '".$_POST["filtroNac"]."'";
                }else{$NA = " AND fechaNac = '".$_POST["filtroNac"]."'";}
              }
              ///// LLAMA AL MÉTODO FILTRAR
              $alumno = Alumno::filtrar($P, $E, $S, $G, $R, $T, $SX, $ET, $IN, $EG, $NA);
              
              //echo $P.$E.$S.$G.$R.$T.$SX.$ET. $IN, $EG, $NA;
            
              if (count($alumno) > 0): ?>
              <table class="table table-bordered table-striped dt-responsive" id="tablaAlumnos" name="tablaAlumnos">
                <thead>
                  <tr>                     
                    <th>Apellido Paterno</th>    
                    <th>Apellido Materno</th> 
                    <th>Nombre</th>    
                    <th>Imagen</th>               
                    <th>Num Comtrol</th>
                    <th>Especialidad</th>
                    <th>Semestre</th>
                    <th>Grupo</th>
                    <th>Repetidor</th>
                    <th>Turno</th>
                    <th>Estatus</th>
                    <th>Período Escolar</th>
                    <th>Ingreso</th>
                    <th>Egreso</th>
                    <?php 
                    if(isset($_SESSION['privilegios'])){
                      if((($_SESSION['privilegios'])=='3')){ ?>
                        <th> </th>                        
                    <?php 
                      }                  
                    }?>
                    <?php 
                    if(isset($_SESSION['privilegios'])){
                      if((($_SESSION['privilegios'])!='3')){ ?>
                        <th> </th>
                        <th> </th>
                    <?php 
                      }                  
                    }?>
                  </tr>  
                </thead>
                <tbody>
                <?php foreach ($alumno as $item): ?>                  
                    <tr>
                      <td> <?php echo $item['apePaterno']; ?></td>
                      <td> <?php echo $item['apeMaterno']; ?></td>
                      <td> <?php echo $item['nomAlumno']; ?></td> 
                      <td style="width: 15%"> <?php if(($item['imagen']) != null){?>
                        <a href="<?php echo $item['imagen']; ?>" class="thumbnail" target="_blank"> <img src="<?php echo $item['imagen']; ?>" alt="Imagen" style="width: 100%"></a></td>                    
                      <?php } ?>
                      <td> <?php echo $item['numControl']; ?></td>   
                      <td> <?php echo $item['nomEspe']; ?></td>  
                      <td> <?php echo $item['nomSemestre']; ?></td>    
                      <td> <?php echo $item['letra']; ?></td> 
                      <td> <?php echo $item['repetidor']; ?></td>  
                      <td> <?php echo $item['nomTurno']; ?></td> 
                      <td> <?php echo $item['nomEstatus']; ?></td> 
                      <td> <?php echo $item["mesInicio"].' '.$item["anioInicio"].' — '.$item["mesFinal"].' '.$item["anioFinal"];?></td>   
                      <td> <?php echo $item['ingreso']; ?></td> 
                      <td> <?php echo $item['egreso']; ?></td> 
                      <?php 
                      if(isset($_SESSION['privilegios'])){
                        if((($_SESSION['privilegios'])=='3')){ ?>
                          <td><a href="save.php?alumnopk=<?php echo $item['alumnopk'] ?>" class="btn btn-info"><i class="fas fa-eye" style="color: white"></i> </a></td>
                      <?php 
                        }                  
                      }?>
                      <?php 
                      if(isset($_SESSION['privilegios'])){
                        if((($_SESSION['privilegios'])!='3')){ ?>
                          <td><a href="save.php?alumnopk=<?php echo $item['alumnopk'] ?>" class="btn btn-primary"><i class="fas fa-edit" style="color: white"></i> </a></td>
                          <td><a href="delete.php?alumnopk=<?php echo $item['alumnopk'] ?>" class="btn btn-danger" onclick="return confirm('¿Está seguro que desea eliminar el registro?');"><i class="fas fa-trash-alt" style="color: white"></i> </a></td>                           
                      <?php 
                        }                  
                      }?>
                    </tr>                  
                <?php endforeach; ?>
                </tbody>
              </table>  
              <br>
              <div class="row">
                <div class="col">
                    <?php 
                    if(isset($_SESSION['privilegios'])){
                      if((($_SESSION['privilegios'])!='3')){ ?>
                        <button type="button" class="btn btn-primary float-left" data-toggle="modal" data-target="#modalActualizar" onclick="recibir();"><i class="fas fa-edit" style="color: white"></i> Actualizado Masivo</button>            
                  <?php 
                      }                  
                    }?>
                </div>
                <button type="button" class="btn btn-primary float-left" data-toggle="modal" data-target="#modalReporte" onclick="recibir2();"><i class="fas fa-download" style="color: white"></i> Generar Reporte</button>
                <form action="" method = "post"> <!-- FORMULARIO PARA SACAR LAS VARIABLES DE LA CONSULTA   --->        
                  <!--<button type="submit" class="btn btn-primary float-right" name="btnReporte" id="btnReporte"><i class="fa fa-file-download"></i>  Generar Reporte</button>-->         
                  <input type="hidden" name="F1" id="F1" value="<?php echo $P ?>"/>
                  <input type="hidden" name="F2" id="F2" value="<?php echo $E ?>"/>
                  <input type="hidden" name="F3" id="F3" value="<?php echo $S ?>"/>
                  <input type="hidden" name="F4" id="F4" value="<?php echo $G ?>"/>
                  <input type="hidden" name="F5" id="F5" value="<?php echo $R ?>"/>
                  <input type="hidden" name="F6" id="F6" value="<?php echo $T ?>"/>
                  <input type="hidden" name="F7" id="F7" value="<?php echo $SX ?>"/>
                  <input type="hidden" name="F8" id="F8" value="<?php echo $ET ?>"/>   
                  <input type="hidden" name="F9" id="F9" value="<?php echo $IN ?>"/>  
                  <input type="hidden" name="F10" id="F10" value="<?php echo $EG ?>"/>  
                  <input type="hidden" name="F11" id="F11" value="<?php echo $NA ?>"/>                               
                </form>   
              </div>      
              <br>   
              <?php else: ?>
                <p>No hay coincidencias</p>
              <?php endif;            
            }
            ?>
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
include_once '../../assets/template/footer.php';?>
<script src="../../assets/js/modulos/alumnos/dataTable1.js"></script>
<script src="../../assets/js/modulos/alumnos/datePicker.js"></script>
<script src="../../assets/js/modulos/alumnos/asignarValoresModal.js"></script>
<!-- PARA EL MODAL DE ACTUALIZADO MASIVO -->
<script src="../../assets/js/modulos/alumnos/mostrarMenuModal.js"></script>
<!-- PARA EL MODAL DE REPORTE DINÁMICO DE EXCEL -->
<script src="../../assets/js/modulos/alumnos/modalReporteCheck.js"></script>
<script src="../../assets/js/modulos/alumnos/filtrosReporteExcel.js"></script>
<?php ob_end_flush();?>