<?php
    require_once ('../../class/Usuario.php');
    
    $usuariopk = (isset($_REQUEST['usuariopk'])) ? $_REQUEST['usuariopk'] : null;
    
    if($usuariopk){
        $usuario = Usuario::buscarPorUsuarioPk($usuariopk);
        $usuario->eliminar();
        header('Location: index.php');
    }
?>