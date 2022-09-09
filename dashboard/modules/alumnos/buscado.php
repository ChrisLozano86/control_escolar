<?php 
session_start();
if(isset($_SESSION['privilegios'])){
  if((($_SESSION['estatus'])=='2')){
    header('Location: ../index.php');
  }
}else{
  header('Location: ../index.php'); 
}
require_once('../../class/Conexion.php');
require_once('../../class/Alumno.php');
  $alumnoBuscado = $_POST['alumnoBuscado'];
  $alumno = Alumno::buscar($alumnoBuscado);
?>
    <!-- Main content -->
  <!-- crud--> 
  <?php
    if (count($alumno) > 0): ?>
      <table class="table table-bordered">
      <tr>
        <td>Apellido Paterno</td>    
        <td>Apellido Materno</td> 
        <td>Nombre</td>                   
        <td>Número de Control</td>
        <td>Especialidad</td>
        <td>Imagen</td>
        <?php 
        if(isset($_SESSION['privilegios'])){
          if((($_SESSION['privilegios'])=='3')){ ?>
            <td> </td>           
        <?php 
          }                  
        }?>
        <?php 
        if(isset($_SESSION['privilegios'])){
          if((($_SESSION['privilegios'])!='3')){ ?>
            <td> </td>          
            <td> </td>
        <?php 
          }                  
        }?>
        </tr>  
                 
        <?php foreach ($alumno as $item): ?>
          <tr>
            <td> <?php echo $item['apePaterno']; ?></td>
            <td> <?php echo $item['apeMaterno']; ?></td>
            <td> <?php echo $item['nomAlumno']; ?></td> 
            <td> <?php echo $item['numControl']; ?></td>   
            <td> <?php echo $item['nomEspe']; ?></td>                               
            <td style="width: 15%"> <?php if(($item['imagen']) != null){?>
              <a href="<?php echo $item['imagen']; ?>" class="thumbnail" target="_blank"> <img src="<?php echo $item['imagen']; ?>" alt="Imagen" style="width: 80%"></a></td>                    
            <?php } ?>
            <!-- PARA ENLASAR EL CURP (NO SE OCUPA)
            <td style="width: 10%"> <?php //if(($item['docCurp']) != null){?>
              <a href="<?php //echo $item['docCurp']; ?>" target="_blank"><i class="far fa-file-pdf fa-3x" style="color: firebrick" title="CURP"></i></a></td>
            <?php //} ?>   -->   
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
      </table>
    <?php else: ?>
      <p>No hay coincidencias</p>
    <?php endif; ?>