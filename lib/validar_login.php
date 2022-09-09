<?php
    session_start();
    require_once '../dashboard/class/Usuario.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $email = (isset($_POST['email'])) ? $_POST['email'] : null;
        $password = (isset($_POST['password'])) ? $_POST['password'] : null;
        $usuario = new Usuario();
        $usuario->setEmail($email);
        $usuario->setPassword($password);
        $entrar = $usuario->logIn();
        if($entrar==true){
            header('Location: ../dashboard/index.php');
        }else{
            echo '<script>
                alert("Datos incorrectos");
                window.location.href="../index.php";
                </script>';
        }
    }