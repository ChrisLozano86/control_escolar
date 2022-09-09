<?php

require_once('Conexion.php'); // usa la clase conexion.php

class Periodo{
    // Se declaran los atributos
    private $periodopk;
    private $mesInicio;
    private $mesFinal;
    private $anioInicio;
    private $anioFinal;    

    // se crea una constante que guardará el nombre de la tabla
    const TABLA = 'periodosescolares';

    // Método constructor
    public function __construct($mesInicio=null, $mesFinal=null, $anioInicio=null, $anioFinal=null, $periodopk=null){
        $this->mesInicio = $mesInicio;
        $this->mesFinal = $mesFinal;
        $this->anioInicio = $anioInicio;
        $this->anioFinal = $anioFinal;        
        $this->periodopk = $periodopk;
    }

    public function getPeriodoPk(){
        return $this->periodopk;
    }

    public function getMesInicio(){
        return $this->mesInicio;
    }

    public function getMesFinal(){
        return $this->mesFinal;
    }

    public function getAnioInicio(){
        return $this->anioInicio;
    }
    
    public function getAnioFinal(){
        return $this->anioFinal;
    }

    public function setMesInicio($mesInicio){
        $this->mesInicio = $mesInicio; 
    }

    public function setMesFinal($mesFinal){
        $this->mesFinal = $mesFinal; 
    }

    public function setAnioInicio($anioInicio){
        $this->anioInicio = $anioInicio;
    }

    public function setAnioFinal($anioFinal){
        $this->anioFinal = $anioFinal;
    }

    // *** Método GUARDAR y MODIFICAR
    
    public function guardar(){        
        $conexion = new Conexion();
        if($this->periodopk){ // Si ya tiene un id asignado entonces MODIFICA
            $consulta = $conexion->prepare('UPDATE ' . self::TABLA . ' SET mesInicio = :mesInicio, mesFinal = :mesFinal, anioInicio = :anioInicio, anioFinal = :anioFinal WHERE periodopk = :periodopk');
            $consulta->bindParam(':periodopk', $this->periodopk);
            $consulta->bindParam(':mesInicio', $this->mesInicio);
            $consulta->bindParam(':mesFinal', $this->mesFinal);
            $consulta->bindParam(':anioInicio', $this->anioInicio);
            $consulta->bindParam(':anioFinal', $this->anioFinal);            
            $consulta->execute();
        }else{ //Si es un registro nuevo (sin id) se INSERTA           
            $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA . ' (mesInicio, mesFinal, anioInicio, anioFinal) VALUES (:mesInicio, :mesFinal, :anioInicio, :anioFinal)');
            $consulta->bindParam(':mesInicio', $this->mesInicio);
            $consulta->bindParam(':mesFinal', $this->mesFinal);
            $consulta->bindParam(':anioInicio', $this->anioInicio);
            $consulta->bindParam(':anioFinal', $this->anioFinal);            
            $consulta->execute();
            $this->periodopk = $conexion->lastInsertId();            
        }        
        $conexion = null;
    }

    // *** Método para ELIMINAR

    public function eliminar(){        
        $conexion = new Conexion();
        $consulta = $conexion->prepare('DELETE FROM ' . self::TABLA . ' WHERE periodopk = :periodopk');
        $consulta->bindParam(':periodopk', $this->periodopk);
        $consulta->execute();
        $conexion = null;
    }

    // *** Método para BUSCAR POR ID, recibe como parámetro el id

    public static function buscarPorPeriodoPk($periodopk){        
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' WHERE periodopk = :periodopk');
        $consulta->bindParam(':periodopk', $periodopk);
        $consulta->execute();
        $registro = $consulta->fetch();
        $conexion = null;
        if ($registro){ // Si existe el registro 
            return new self($registro['mesInicio'], $registro['mesFinal'], $registro['anioInicio'], $registro['anioFinal'], $periodopk);
        }else{ 
            return false;
        }
    }
    
    public static function recuperarTodos(){
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT periodopk, mesInicio, anioInicio, mesFinal, anioFinal FROM periodosescolares ORDER BY anioInicio DESC');
        // $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA);        
        $consulta->execute();
        $registros = $consulta->fetchAll();  
        $conexion = null;
        return $registros;     
    }

    // Método para llenar el select de meses
    public static function llenarSelectMes(){
        $conexion = new Conexion();                          
        $consulta = $conexion->prepare("SELECT * FROM meses");
        $consulta->execute();
        $registros = $consulta->fetchAll(); 
        $conexion = null;
        return $registros;
    } 
}