<?php
ob_start();
?>
<?php
  // Include permite ejecutar la página aún cuando falla el archivo
  include_once ('../../assets/template/header.php');
  // Si hay un problema con el archivo indicado con require se manda un error fatal y no deja avanzar
  require_once ('../../class/Usuario.php');

  $usuariopk = (isset($_REQUEST['usuariopk'])) ? $_REQUEST['usuariopk'] : null;
  
  if($usuariopk){
    /* Si existe un id es porque se trata de una actualización, por lo que con el método indicado de la clase
    Usuario se obtienen los campos y los prepara para las que el constructor y los demás métodos los maneje */
    $usuario = Usuario::buscarPorUsuarioPk($usuariopk);
  }else{
    /* Si es un registro nuevo crea un objeto de la clase Usuario */
    $usuario = new Usuario();
  }
?>

<?php
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // Obtiene los datos del formulario y los asigna en la variable que le corresponde
    $nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : null;
    $email = (isset($_POST['email'])) ? $_POST['email'] : null;
    $password = (isset($_POST['password'])) ? $_POST['password'] : null;
    $estatus = $_POST['estatus'];
    $privilegios = $_POST['privilegios'];
    //alert($nombre);
    // Asigna la información a los campos del objeto usuario para trabajar con los métodos de la clase usuario
    $usuario->setNombre($nombre);
    $usuario->setEmail($email);
    $usuario->setPassword($password);
    $usuario->setEstatus($estatus);
    $usuario->setPrivilegios($privilegios);
    // Usa el método guardar de la clase usuario y redirecciona al index en el que se estarán actualizados los cambios
    $usuario->guardar();    
    header('Location: index.php');   
  }else{

  ?>
  
    <!-- Main content -->
    <div class="content" id="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col">
              <h3>Registrar usuario</h3>
              <a href="index.php" class="btn btn-info"><i class="fas fa-backward" style="color: white"></i> Regresar</a>              
              <br><br>
              <!-- Código del formulario-->
              <form action="save.php" method="post" enctype="multipart/form-data" id="frmUsuario" name="frmUsuario"> <!-- El action va al mismo formulario -->
                <!-- Si encontró un id asociado -->
                <?php if ($usuario->getUsuarioPk()): ?>
                  <!-- Lo guarda en un input que está oculto (hidden) al usuario-->
                  <input type="hidden" name="usuariopk" value="<?php echo $usuario->getUsuarioPk() ?>"/>
                <?php endif; ?>
                <div class="card">
                  <h5 class="card-header bg-secondary">Datos del usuario</h5>						
                  <div class="card-body">	
                    <div class="row">	
                      <div class="form-group my-2 col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <label for="nombre" class="mx-1 col-form obligatorio">Nombre: </label> 
                        <!-- En caso de que sea una actualización asigna el valor que obtiene de la BD con el método de la clase usuario-->
                        <input type="text" id="nombre" name="nombre" placeholder="Nombre" class="form-control" value="<?php echo $usuario->getNombre() ?>" required/>                        
                      </div> <!-- /.col nombre -->
                      <div class="form-group my-2 col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <label for="email" class="mx-1 col-form obligatorio">Email: </label>
                        <input  type="email" id="email" name="email" placeholder="Email" class="form-control" value="<?php echo $usuario->getEmail() ?>" required/>                        
                      </div> <!-- /.col email -->
                      <div class="form-group my-2 col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <label for="password" class="mx-1 col-form obligatorio">Contraseña: </label>
                        <input type="password" id="password" name="password" placeholder="Contraseña" class="form-control" value="<?php echo $usuario->getPassword() ?>" required/>                        
                      </div> <!-- /.col contraseña -->                                  
                      <div class="form-group my-2 col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <label class="mx-1 col-form obligatorio" for="estatus">Estatus: </label>					
                        <select class="custom-select" id="estatus" name="estatus" required>	
                        <?php 
                          if($usuario->getEstatus()==1):?>
                            <option disabled>Estatus</option>
                            <option selected value="1">Activo</option>
                            <option value="2">Inactivo</option>  
                          <?php elseif($usuario->getEstatus()==2):?>
                            <option disabled>Estatus</option>
                            <option value="1">Activo</option>
                            <option selected value="2">Inactivo</option> 
                          <?php else:?>
                            <option selected disabled>Estatus</option>
                            <option value="1">Activo</option>
                            <option value="2">Inactivo</option> 
                          <?php endif;?>                                                               					
                        </select>	<!-- /.select estatus  -->
                      </div> <!-- /.col estatus -->
                      <div class="form-group my-2 col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <label class="mx-1 col-form obligatorio" for="privilegios">Privilegios: </label>					
                        <select class="custom-select" id="privilegios" name="privilegios" required>	
                          <?php if($usuario->getPrivilegios()==1):?>
                            <option disabled>Privilegios</option>
                            <option selected value="1">Super Administrador</option>
                            <option value="2">Administrador</option>  
                            <option value="3">Administrativo</option>    
                          <?php elseif($usuario->getPrivilegios()==2):?>
                            <option disabled>Privilegios</option>
                            <option value="1">Super Administrador</option>
                            <option selected value="2">Administrador</option>  
                            <option value="3">Administrativo</option> 
                          <?php elseif($usuario->getPrivilegios()==3):?>
                            <option disabled>Privilegios</option>
                            <option value="1">Super Administrador</option>
                            <option value="2">Administrador</option>  
                            <option selected value="3">Administrativo</option>
                          <?php else:?>
                            <option selected disabled>Privilegios</option>
                            <option value="1">Super Administrador</option>
                            <option value="2">Administrador</option>  
                            <option value="3">Administrativo</option>    
                          <?php endif;?>                                                 					
                        </select>	<!-- /.select privilegios  -->                        
                      </div> <!-- /.col privilegios -->  
                      <div class="form-group my-3 col-xs-12 col-sm-12 col-md-12 col-lg-6">
                        <a href="index.php" class="btn btn-danger"><i class="fas fa-window-close" style="color: white"></i> Cancelar</a>
                      </div> <!-- cancelar -->		 
                      <div class="form-group my-2 col-xs-12 col-sm-12 col-md-12 col-lg-6 align-self-center">
                        <button type="submit" class="btn btn-success float-right"><i class="fa fa-save"></i> Guardar</button>
                        <!-- <input type="submit" value="Guardar" class="btn btn-primary float-right" name="btnAgregar" id="btnAgregar"/>-->
                      </div> <!-- botón -->		                                        
                    </div> <!-- /.row -->                    
                  </div> <!-- /.card-body (DATOS DEL NUEVO USUARIO)  -->
                </div> <!-- /.card (DATOS DEL NUEVO USUARIO) -->                 
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
<script src="../../assets/js/modulos/usuarios/usuario.js"></script>