<?php
require_once('../../class/Alumno.php');
//$alumno = Alumno::recuperarTodos();
include_once ('../../assets/template/header.php');
?>

<!-- Modal BUSCAR -->
  <div class="modal fade" id="buscarAlumno" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Buscar alumno</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="form-group my-2">
              <label for="alumnoBuscado" class="mx-1 form-label">Nombre/Apellido Paterno/Apellido Materno/Número de Control:</label>
              <input type="text" id="alumnoBuscado" name="alumnoBuscado" onkeyup="buscar_ahora($('#alumnoBuscado').val());" placeholder="Alumno a buscar" class="form-control">                        
            </div>               
            <div id="datos_buscados" class="container"></div>
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-backward" style="color: white"></i> Cancelar</button>
          <!--<button type="submit" class="btn btn-success" onclick="buscar_ahora($('#alumnoBuscado').val());"><i class="fa fa-search"></i> Buscar</button>-->
        </div>
      </div>
    </div>
  </div> <!-- /. DIV MODAL BUSCAR--> 
    <!-- Main content -->
    <div class="content" id="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <h3>Gestión de Alumnos</h3>
            <br>
            <?php 
            if(isset($_SESSION['privilegios'])){
              if((($_SESSION['privilegios'])!='3')){ ?>
                <a href="save.php" class="btn btn-success"><i class="fas fa-user-plus" style="color: white"></i> Agregar</a>
            <br><br>
            <?php 
              }                  
            }?>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#buscarAlumno"><i class="fas fa-search" style="color: white"></i> Buscar Alumno</button>            
            <br><br>
            <a href="filtrados.php" class="btn btn-primary"><i class="fas fa-filter" style="color: white"></i> Filtrar Alumnos</a>
            <!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#filtrarAlumnos"><i class="fas fa-search" style="color: white"></i> Filtrar Alumnos</button> -->           
            <br><br>       
            
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
include_once '../../assets/template/footer.php';
?>
<script src="../../assets/js/modulos/alumnos/buscarAlumno.js"></script>