<?php
require_once('../../class/Usuario.php');
$usuario = Usuario::recuperarTodos();
include_once ('../../assets/template/header.php');

?>
<!-- Main content -->
    <div class="content" id="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            <h3>Gestión de Usuarios</h3>
            
            <a href="save.php" class="btn btn-success"><i class="fas fa-user-plus" style="color: white"></i> Agregar</a> 
            <br><br>
            <!-- crud -->
            <?php
              if (count($usuario) > 0): ?>
                <table class="table table-bordered">
                  <tr>
                    <th>Nombre</th>  
                    <th>Email</th>    
                    <th>Password</th>
                    <th>Estatus</th>
                    <th>Privilegios</th> 
                    <th> </th>          
                    <th> </th>
                  </tr>  
                  
                  <?php foreach ($usuario as $item): ?>
                  <tr>
                    <td> <?php echo $item['nombre']; ?></td>
                    <td> <?php echo $item['email']; ?></td>
                    <td>No visible</td>                   
                    <td>
                      <?php 
                      if(($item['estatus'])==1):
                        echo 'Activo';
                      elseif(($item['estatus'])==2):
                        echo 'Inactivo';
                      else:
                        echo 'No especificado';
                      endif;
                      ?>
                    </td>
                    <td> 
                      <?php 
                        if(($item['privilegios'])==1):
                          echo 'Super Administrador';
                        elseif(($item['privilegios'])==2):
                          echo 'Administrador';
                        elseif(($item['privilegios'])==3):
                          echo 'Administrativo';
                        else:
                          echo 'No especificado';
                        endif;
                        ?>
                    </td>
                    <td><a href="save.php?usuariopk=<?php echo $item['usuariopk'] ?>" class="btn btn-primary"><i class="fas fa-edit" style="color: white"></i></a></td>
                    <td><a href="delete.php?usuariopk=<?php echo $item['usuariopk'] ?>" class="btn btn-danger" onclick="return confirm('¿Está seguro que desea eliminar el registro?');"><i class="fas fa-trash-alt" style="color: white"></i></a></td>
                  </tr>
                  <?php endforeach; ?>
                </table>
              <?php else: ?>
                <p>No hay usuarios agregados</p>
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
include_once '../../assets/template/footer.php';
?>