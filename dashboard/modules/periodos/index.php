<?php
require_once('../../class/Periodo.php');
$periodo = Periodo::recuperarTodos();
include_once ('../../assets/template/header.php'); 

?>

<!-- Main content -->
    <div class="content" id="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <h3>Gestión de Períodos Escolares</h3>
            
            <a href="save.php" class="btn btn-success"><i class="fas fa-plus-circle" style="color: white"></i> Agregar</a> 
            <br><br>
            <!-- crud -->
            <?php
              if (count($periodo) > 0): ?>
                <table class="table table-bordered table-striped dt-responsive" id="tablaPeriodos" name="tablaPeriodos">
                  <thead>
                    <tr>
                      <th>Mes Inicio</th>  
                      <th>Año Inicio</th>
                      <th>Mes Final</th>                    
                      <th>Año Final</th>                    
                      <th> </th>          
                      <th> </th>
                    </tr>   
                  </thead>  
                  <tbody>           
                    <?php foreach ($periodo as $item): 
                      if ($item['mesInicio'] != "Período Escolar"){ ?>
                      <tr>
                        <td> <?php echo $item['mesInicio']; ?></td> 
                        <td> <?php echo $item['anioInicio']; ?></td>                  
                        <td> <?php echo $item['mesFinal']; ?></td>              
                        <td> <?php echo $item['anioFinal']; ?></td>                    
                        <td style="width: 15%"><a href="save.php?periodopk=<?php echo $item['periodopk'] ?>" class="btn btn-primary"><i class="fas fa-edit" style="color: white"></i> Editar</td>
                        <td style="width: 15%"><a href="delete.php?periodopk=<?php echo $item['periodopk'] ?>" class="btn btn-danger" onclick="return confirm('¿Está seguro que desea eliminar el registro?');"><i class="fas fa-trash-alt" style="color: white"></i> Eliminar</td>
                      </tr>
                    <?php }
                    endforeach; ?>
                  </tbody>
                </table>
              <?php else: ?>
                <p>No hay períodos agregados</p>
              <?php endif; ?>                
            
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
<script src="../../assets/js/modulos/periodos/dataTable.js"></script>