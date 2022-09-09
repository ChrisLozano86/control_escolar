<?php
    require_once ('../../class/Periodo.php');
    
    $periodopk = (isset($_REQUEST['periodopk'])) ? $_REQUEST['periodopk'] : null;
    
    if($periodopk){
        $periodo = Periodo::buscarPorPeriodoPk($periodopk);
        $periodo->eliminar();
        header('Location: index.php');
    }
?>