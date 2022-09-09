<?php
    require_once ('../../class/Alumno.php');

    $alumnopk = (isset($_REQUEST['alumnopk'])) ? $_REQUEST['alumnopk'] : null;

    if($alumnopk){
        $alumno = Alumno::buscarPorAlumnoPk($alumnopk);
        if ($alumno->getImagen()!=null){ unlink($alumno->getImagen()); }        
        if ($alumno->getDocCurp()!=null){ unlink($alumno->getDocCurp()); }
        if ($alumno->getDocActNac()!=null){ unlink($alumno->getDocActNac()); }
        if ($alumno->getDocCertSec()!=null){ unlink($alumno->getDocCertSec()); }
        if ($alumno->getDocSurems()!=null){ unlink($alumno->getDocSurems()); }
        if ($alumno->getDocCertCecy()!=null){ unlink($alumno->getDocCertCecy()); }
        $alumno->eliminar();        
        header('Location: index.php');
    }
?>