<?php 
require_once('Conexion.php');

class Alumno{
    private $alumnopk;
    private $nomAlumno;
    private $apePaterno;
    private $apeMaterno;
    private $claveCecyte;
    private $ficha;
    private $numControl;
    private $estatus;
    private $repetidor;
    private $especialidad;
    private $claveEspe;
    private $semestre;
    private $grupo;
    private $turno;
    private $ingreso;
    private $egreso;
    private $extracurricular;
    private $propedeutica1;
    private $propedeutica2;
    private $beca;
    private $beca2;
    private $beca3;
    private $nomSecundaria;
    private $claveSecundaria;
    private $promeSecundaria;
    private $estadoSecundaria;
    private $surems;
    private $fechaBaja;
    private $causaBaja;
    private $curp;
    private $telAlumno;
    private $fechaNac;
    private $sexo;
    private $lugarNac;
    private $ts;
    private $cuestSalud;
    private $emailInsti;
    private $emailPerso;
    private $nomTutor;
    private $telTutor;
    private $calle;
    private $numExt;
    private $numInt;
    private $colonia;
    private $cp;
    private $poblacion;
    private $municipio;
    private $estadoDom;
    private $imagen;
    private $docCurp;
    private $docActNac;
    private $docCertSec;
    private $docSurems; 
    private $docCertCecy;    
    private $periodofk;

    const TABLA = 'alumnos';

    public function __construct($nomAlumno=null, $apePaterno=null, $apeMaterno=null, $claveCecyte=null, $ficha = null, $numControl=null, $estatus=null, $repetidor=null, $especialidad=null, $claveEspe=null,
    $semestre=null, $grupo=null, $turno=null, $ingreso=null, $egreso=null, $extracurricular=null, $propedeutica1=null, $propedeutica2=null, $beca=null, $beca2=null, $beca3=null, $nomSecundaria=null, $claveSecundaria=null, $promeSecundaria=null,
    $estadoSecundaria=null, $surems=null, $fechaBaja=null, $causaBaja=null, $curp=null, $telAlumno=null, $fechaNac=null, $sexo=null, $lugarNac=null, $ts=null, $cuestSalud=null, $emailInsti=null, $emailPerso=null, $nomTutor=null, $telTutor=null,
    $calle=null, $numExt=null, $numInt=null, $colonia=null, $cp=null, $poblacion=null, $municipio=null, $estadoDom=null, $imagen=null, $docCurp=null, $docActNac=null, $docCertSec=null, $docSurems=null, $docCertCecy=null, $periodofk=null, $alumnopk=null){
        $this->nomAlumno = $nomAlumno;
        $this->apePaterno = $apePaterno;
        $this->apeMaterno = $apeMaterno;
        $this->claveCecyte = $claveCecyte;
        $this->ficha = $ficha;
        $this->numControl = $numControl;
        $this->estatus = $estatus;
        $this->repetidor = $repetidor;
        $this->especialidad = $especialidad;
        $this->claveEspe = $claveEspe;
        $this->semestre = $semestre;
        $this->grupo = $grupo;
        $this->turno = $turno;
        $this->ingreso = $ingreso;
        $this->egreso = $egreso;
        $this->extracurricular = $extracurricular;
        $this->propedeutica1 = $propedeutica1;
        $this->propedeutica2 = $propedeutica2;
        $this->beca = $beca;
        $this->beca2 = $beca2;
        $this->beca3 = $beca3;
        $this->nomSecundaria = $nomSecundaria;
        $this->claveSecundaria = $claveSecundaria;
        $this->promeSecundaria = $promeSecundaria;
        $this->estadoSecundaria = $estadoSecundaria;
        $this->surems = $surems;
        $this->fechaBaja = $fechaBaja;
        $this->causaBaja = $causaBaja;
        $this->curp = $curp;
        $this->telAlumno = $telAlumno;
        $this->fechaNac = $fechaNac;
        $this->sexo = $sexo;
        $this->lugarNac = $lugarNac;
        $this->ts = $ts;
        $this->cuestSalud = $cuestSalud;
        $this->emailInsti = $emailInsti;
        $this->emailPerso = $emailPerso;
        $this->nomTutor = $nomTutor;
        $this->telTutor = $telTutor;
        $this->calle = $calle;
        $this->numExt = $numExt;
        $this->numInt = $numInt;
        $this->colonia = $colonia;
        $this->cp = $cp;
        $this->poblacion = $poblacion;
        $this->municipio = $municipio;
        $this->estadoDom = $estadoDom;
        $this->imagen = $imagen;
        $this->docCurp = $docCurp;
        $this->docActNac = $docActNac;
        $this->docCertSec = $docCertSec;
        $this->docSurems = $docSurems; 
        $this->docCertCecy = $docCertCecy;       
        $this->periodofk = $periodofk;
        $this->alumnopk = $alumnopk;
    }

    public function getAlumnoPk(){
        return $this->alumnopk;
    }
    public function getNomAlumno(){
        return $this->nomAlumno;
    }
    public function getApePaterno(){
        return $this->apePaterno;
    }
    public function getApeMaterno(){
        return $this->apeMaterno;
    }
    public function getClaveCecyte(){
        return $this->claveCecyte;
    }
    public function getFicha(){
        return $this->ficha;
    }
    public function getNumControl(){
        return $this->numControl;
    }
    public function getEstatus(){
        return $this->estatus;
    }
    public function getRepetidor(){
        return $this->repetidor;
    }
    public function getEspecialidad(){
        return $this->especialidad;
    }
    public function getClaveEspe(){
        return $this->claveEspe;
    }
    public function getSemestre(){
        return $this->semestre;
    }
    public function getGrupo(){
        return $this->grupo;
    }
    public function getTurno(){
        return $this->turno;
    }
    public function getIngreso(){
        return $this->ingreso;
    }
    public function getEgreso(){
        return $this->egreso;
    }
    public function getExtracurricular(){
        return $this->extracurricular;
    }
    public function getPropedeutica1(){
        return $this->propedeutica1;
    }
    public function getPropedeutica2(){
        return $this->propedeutica2;
    }
    public function getBeca(){
        return $this->beca;
    }
    public function getBeca2(){
        return $this->beca2;
    }
    public function getBeca3(){
        return $this->beca3;
    }
    public function getNomSecundaria(){
        return $this->nomSecundaria;
    }
    public function getClaveSecundaria(){
        return $this->claveSecundaria;
    }
    public function getPromeSecundaria(){
        return $this->promeSecundaria;
    }
    public function getEstadoSecundaria(){
        return $this->estadoSecundaria;
    }
    public function getSurems(){
        return $this->surems;
    }
    public function getFechaBaja(){
        return $this->fechaBaja;
    }
    public function getCausaBaja(){
        return $this->causaBaja;
    }
    public function getCurp(){
        return $this->curp;
    }
    public function getTelAlumno(){
        return $this->telAlumno;
    }
    public function getFechaNac(){
        return $this->fechaNac;
    }
    public function getSexo(){
        return $this->sexo;
    }
    public function getLugarNac(){
        return $this->lugarNac;
    }
    public function getTs(){
        return $this->ts;
    }
    public function getCuestSalud(){
        return $this->cuestSalud;
    }
    public function getEmailInsti(){
        return $this->emailInsti;
    }
    public function getEmailPerso(){
        return $this->emailPerso;
    }
    public function getNomTutor(){
        return $this->nomTutor;
    }
    public function getTelTutor(){
        return $this->telTutor;
    }
    public function getCalle(){
        return $this->calle;
    }
    public function getNumExt(){
        return $this->numExt;
    }
    public function getNumInt(){
        return $this->numInt;
    }
    public function getColonia(){
        return $this->colonia;
    }
    public function getCp(){
        return $this->cp;
    }
    public function getPoblacion(){
        return $this->poblacion;
    }
    public function getMunicipio(){
        return $this->municipio;
    }
    public function getEstadoDom(){
        return $this->estadoDom;
    }
    public function getImagen(){
        return $this->imagen;
    }
    public function getDocCurp(){
        return $this->docCurp;
    }
    public function getDocActNac(){
        return $this->docActNac;
    }
    public function getDocCertSec(){
        return $this->docCertSec;
    }
    public function getDocSurems(){
        return $this->docSurems;
    }    
    public function getDocCertCecy(){
        return $this->docCertCecy;
    } 
    public function getPeriodoFk(){
        return $this->periodofk;
    } 
// ----------------- MÉTODOS SET--------------------------------------
    public function setNomAlumno($nomAlumno){
        $this->nomAlumno = $nomAlumno;
    }
    public function setApePaterno($apePaterno){
        $this->apePaterno = $apePaterno;
    }
    public function setApeMaterno($apeMaterno){
        $this->apeMaterno = $apeMaterno;
    }
    public function setClaveCecyte($claveCecyte){
        $this->claveCecyte = $claveCecyte;
    }
    public function setFicha($ficha){
        $this->ficha = $ficha;
    }
    public function setNumControl($numControl){
        $this->numControl = $numControl;
    }
    public function setEstatus($estatus){
        $this->estatus = $estatus;
    }
    public function setRepetidor($repetidor){
        $this->repetidor = $repetidor;
    }
    public function setEspecialidad($especialidad){
        $this->especialidad = $especialidad;
    }
    public function setClaveEspe($claveEspe){
        $this->claveEspe = $claveEspe;
    }
    public function setSemestre($semestre){
        $this->semestre = $semestre;
    }
    public function setGrupo($grupo){
        $this->grupo = $grupo;
    }
    public function setTurno($turno){
        $this->turno = $turno;
    }
    public function setIngreso($ingreso){
        $this->ingreso = $ingreso;
    }
    public function setEgreso($egreso){
        $this->egreso = $egreso;
    }
    public function setExtracurricular($extracurricular){
        $this->extracurricular = $extracurricular;
    }
    public function setPropedeutica1($propedeutica1){
        $this->propedeutica1 = $propedeutica1;
    }
    public function setPropedeutica2($propedeutica2){
        $this->propedeutica2 = $propedeutica2;
    }
    public function setBeca($beca){
        $this->beca = $beca;
    }
    public function setBeca2($beca2){
        $this->beca2 = $beca2;
    }
    public function setBeca3($beca3){
        $this->beca3 = $beca3;
    }
    public function setNomSecundaria($nomSecundaria){
        $this->nomSecundaria = $nomSecundaria;
    }
    public function setClaveSecundaria($claveSecundaria){
        $this->claveSecundaria = $claveSecundaria;
    }
    public function setPromeSecundaria($promeSecundaria){
        $this->promeSecundaria = $promeSecundaria;
    }
    public function setEstadoSecundaria($estadoSecundaria){
        $this->estadoSecundaria = $estadoSecundaria;
    }
    public function setSurems($surems){
        $this->surems = $surems;
    }
    public function setFechaBaja($fechaBaja){
        $this->fechaBaja = $fechaBaja;
    }
    public function setCausaBaja($causaBaja){
        $this->causaBaja = $causaBaja;
    }
    public function setCurp($curp){
        $this->curp = $curp;
    }
    public function setTelAlumno($telAlumno){
        $this->telAlumno = $telAlumno;
    }
    public function setFechaNac($fechaNac){
        $this->fechaNac = $fechaNac;
    }
    public function setSexo($sexo){
        $this->sexo = $sexo;
    }
    public function setLugarNac($lugarNac){
        $this->lugarNac = $lugarNac;
    }
    public function setTs($ts){
        $this->ts = $ts;
    }
    public function setCuestSalud($cuestSalud){
        $this->cuestSalud = $cuestSalud;
    }    
    public function setEmailInsti($emailInsti){
        $this->emailInsti = $emailInsti;
    }
    public function setEmailPerso($emailPerso){
        $this->emailPerso = $emailPerso;
    }
    public function setNomTutor($nomTutor){
        $this->nomTutor = $nomTutor;
    }
    public function setTelTutor($telTutor){
        $this->telTutor = $telTutor;
    }
    public function setCalle($calle){
        $this->calle = $calle;
    }
    public function setNumExt($numExt){
        $this->numExt = $numExt;
    }
    public function setNumInt($numInt){
        $this->numInt = $numInt;
    }
    public function setColonia($colonia){
        $this->colonia = $colonia;
    }
    public function setCp($cp){
        $this->cp = $cp;
    }
    public function setPoblacion($poblacion){
        $this->poblacion = $poblacion;
    }
    public function setMunicipio($municipio){
        $this->municipio = $municipio;
    }
    public function setEstadoDom($estadoDom){
        $this->estadoDom = $estadoDom;
    }
    public function setImagen($imagen){
        $this->imagen = $imagen;
    }
    public function setDocCurp($docCurp){
        $this->docCurp = $docCurp;
    }
    public function setDocActNac($docActNac){
        $this->docActNac = $docActNac;
    }
    public function setDocCertSec($docCertSec){
        $this->docCertSec = $docCertSec;
    }
    public function setDocSurems($docSurems){
        $this->docSurems = $docSurems;
    }   
    public function setDocCertCecy($docCertCecy){
        $this->docCertCecy = $docCertCecy;
    }    
    public function setPeriodoFk($periodofk){
        $this->periodofk = $periodofk;
    }

    // Método GUARDAR Y ACTUALIZAR
    public function guardar(){
        $conexion = new Conexion();
        if($this->alumnopk){
            
            $consulta = $conexion->prepare('UPDATE ' . self::TABLA . ' SET nomAlumno = :nomAlumno, apePaterno = :apePaterno, apeMaterno = :apeMaterno, claveCecyte = :claveCecyte, ficha = :ficha, numControl = :numControl, estatus = :estatus, repetidor = :repetidor, especialidad = :especialidad,
            claveEspe = :claveEspe, semestre = :semestre, grupo = :grupo, turno = :turno, ingreso = :ingreso, egreso = :egreso, extracurricular = :extracurricular, propedeutica1 = :propedeutica1, propedeutica2 = :propedeutica2, beca = :beca, beca2 = :beca2, beca3 = :beca3, nomSecundaria = :nomSecundaria,
            claveSecundaria = :claveSecundaria, promeSecundaria = :promeSecundaria, estadoSecundaria = :estadoSecundaria, surems = :surems, fechaBaja = :fechaBaja, causaBaja = :causaBaja, curp = :curp, telAlumno = :telAlumno, fechaNac = :fechaNac, sexo = :sexo, lugarNac = :lugarNac,
            ts = :ts, cuestSalud = :cuestSalud, emailInsti = :emailInsti, emailPerso = :emailPerso, nomTutor = :nomTutor, telTutor = :telTutor, calle = :calle, numExt = :numExt, numInt = :numInt, colonia = :colonia, cp = :cp,
            poblacion = :poblacion, municipio = :municipio, estadoDom = :estadoDom, imagen = :imagen, docCurp = :docCurp, docActNac = :docActNac, docCertSec = :docCertSec, docSurems = :docSurems, docCertCecy = :docCertCecy, periodofk = :periodofk WHERE alumnopk = :alumnopk');
            $consulta->bindParam(':alumnopk', $this->alumnopk);
            $consulta->bindParam(':nomAlumno', $this->nomAlumno);
            $consulta->bindParam(':apePaterno', $this->apePaterno);
            $consulta->bindParam(':apeMaterno', $this->apeMaterno);
            $consulta->bindParam(':claveCecyte', $this->claveCecyte);
            $consulta->bindParam(':ficha', $this->ficha);
            $consulta->bindParam(':numControl', $this->numControl);
            $consulta->bindParam(':estatus', $this->estatus);
            $consulta->bindParam(':repetidor', $this->repetidor);
            $consulta->bindParam(':especialidad', $this->especialidad);
            $consulta->bindParam(':claveEspe', $this->claveEspe);
            $consulta->bindParam(':semestre', $this->semestre);
            $consulta->bindParam(':grupo', $this->grupo);
            $consulta->bindParam(':turno', $this->turno);
            $consulta->bindParam(':ingreso', $this->ingreso);
            $consulta->bindParam(':egreso', $this->egreso);
            $consulta->bindParam(':extracurricular', $this->extracurricular);
            $consulta->bindParam(':propedeutica1', $this->propedeutica1);
            $consulta->bindParam(':propedeutica2', $this->propedeutica2);
            $consulta->bindParam(':beca', $this->beca);
            $consulta->bindParam(':beca2', $this->beca2);
            $consulta->bindParam(':beca3', $this->beca3);
            $consulta->bindParam(':nomSecundaria', $this->nomSecundaria);
            $consulta->bindParam(':claveSecundaria', $this->claveSecundaria);
            $consulta->bindParam(':promeSecundaria', $this->promeSecundaria);
            $consulta->bindParam(':estadoSecundaria', $this->estadoSecundaria);
            $consulta->bindParam(':surems', $this->surems);
            $consulta->bindParam(':fechaBaja', $this->fechaBaja);
            $consulta->bindParam(':causaBaja', $this->causaBaja);
            $consulta->bindParam(':curp', $this->curp);
            $consulta->bindParam(':telAlumno', $this->telAlumno);
            $consulta->bindParam(':fechaNac', $this->fechaNac);
            $consulta->bindParam(':sexo', $this->sexo);
            $consulta->bindParam(':lugarNac', $this->lugarNac);
            $consulta->bindParam(':ts', $this->ts);
            $consulta->bindParam(':cuestSalud', $this->cuestSalud);
            $consulta->bindParam(':emailInsti', $this->emailInsti);
            $consulta->bindParam(':emailPerso', $this->emailPerso);
            $consulta->bindParam(':nomTutor', $this->nomTutor);
            $consulta->bindParam(':telTutor', $this->telTutor);
            $consulta->bindParam(':calle', $this->calle);
            $consulta->bindParam(':numExt', $this->numExt);
            $consulta->bindParam(':numInt', $this->numInt);
            $consulta->bindParam(':colonia', $this->colonia);
            $consulta->bindParam(':cp', $this->cp);
            $consulta->bindParam(':poblacion', $this->poblacion);
            $consulta->bindParam(':municipio', $this->municipio);
            $consulta->bindParam(':estadoDom', $this->estadoDom);
            $consulta->bindParam(':imagen', $this->imagen);
            $consulta->bindParam(':docCurp', $this->docCurp);
            $consulta->bindParam(':docActNac', $this->docActNac);
            $consulta->bindParam(':docCertSec', $this->docCertSec);
            $consulta->bindParam(':docSurems', $this->docSurems);
            $consulta->bindParam(':docCertCecy', $this->docCertCecy);            
            $consulta->bindParam(':periodofk', $this->periodofk);            
            $consulta->execute();
        }else{            
            $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA . ' (nomAlumno, apePaterno, apeMaterno, claveCecyte, ficha, numControl, estatus, repetidor, especialidad,
            claveEspe, semestre, grupo, turno, ingreso, egreso, extracurricular, propedeutica1, propedeutica2, beca, beca2, beca3, nomSecundaria, claveSecundaria, promeSecundaria, estadoSecundaria, surems, fechaBaja, causaBaja, 
            curp, telAlumno, fechaNac, sexo, lugarNac, ts, cuestSalud, emailInsti, emailPerso, nomTutor, telTutor, calle, numExt, numInt, colonia, cp, poblacion, municipio, estadoDom, imagen, 
            docCurp, docActNac, docCertSec, docSurems, docCertCecy, periodofk) VALUES (:nomAlumno, :apePaterno, :apeMaterno, :claveCecyte, :ficha, :numControl, :estatus, :repetidor, :especialidad,
            :claveEspe, :semestre, :grupo, :turno, :ingreso, :egreso, :extracurricular, :propedeutica1, :propedeutica2, :beca, :beca2, :beca3, :nomSecundaria, :claveSecundaria, :promeSecundaria, :estadoSecundaria, :surems, :fechaBaja, 
            :causaBaja, :curp, :telAlumno, :fechaNac, :sexo, :lugarNac, :ts, :cuestSalud, :emailInsti, :emailPerso, :nomTutor, :telTutor, :calle, :numExt, :numInt, :colonia, :cp,
            :poblacion, :municipio, :estadoDom, :imagen, :docCurp, :docActNac, :docCertSec, :docSurems, :docCertCecy, :periodofk)');
            $consulta->bindParam(':nomAlumno', $this->nomAlumno);
            $consulta->bindParam(':apePaterno', $this->apePaterno);
            $consulta->bindParam(':apeMaterno', $this->apeMaterno);
            $consulta->bindParam(':claveCecyte', $this->claveCecyte);
            $consulta->bindParam(':ficha', $this->ficha);
            $consulta->bindParam(':numControl', $this->numControl);
            $consulta->bindParam(':estatus', $this->estatus);
            $consulta->bindParam(':repetidor', $this->repetidor);
            $consulta->bindParam(':especialidad', $this->especialidad);
            $consulta->bindParam(':claveEspe', $this->claveEspe);
            $consulta->bindParam(':semestre', $this->semestre);
            $consulta->bindParam(':grupo', $this->grupo);
            $consulta->bindParam(':turno', $this->turno);
            $consulta->bindParam(':ingreso', $this->ingreso);
            $consulta->bindParam(':egreso', $this->egreso);
            $consulta->bindParam(':extracurricular', $this->extracurricular);
            $consulta->bindParam(':propedeutica1', $this->propedeutica1);
            $consulta->bindParam(':propedeutica2', $this->propedeutica2);
            $consulta->bindParam(':beca', $this->beca);
            $consulta->bindParam(':beca2', $this->beca2);
            $consulta->bindParam(':beca3', $this->beca3);
            $consulta->bindParam(':nomSecundaria', $this->nomSecundaria);
            $consulta->bindParam(':claveSecundaria', $this->claveSecundaria);
            $consulta->bindParam(':promeSecundaria', $this->promeSecundaria);
            $consulta->bindParam(':estadoSecundaria', $this->estadoSecundaria);
            $consulta->bindParam(':surems', $this->surems);
            $consulta->bindParam(':fechaBaja', $this->fechaBaja);
            $consulta->bindParam(':causaBaja', $this->causaBaja);
            $consulta->bindParam(':curp', $this->curp);
            $consulta->bindParam(':telAlumno', $this->telAlumno);
            $consulta->bindParam(':fechaNac', $this->fechaNac);
            $consulta->bindParam(':sexo', $this->sexo);
            $consulta->bindParam(':lugarNac', $this->lugarNac);
            $consulta->bindParam(':ts', $this->ts);
            $consulta->bindParam(':cuestSalud', $this->cuestSalud);
            $consulta->bindParam(':emailInsti', $this->emailInsti);
            $consulta->bindParam(':emailPerso', $this->emailPerso);
            $consulta->bindParam(':nomTutor', $this->nomTutor);
            $consulta->bindParam(':telTutor', $this->telTutor);
            $consulta->bindParam(':calle', $this->calle);
            $consulta->bindParam(':numExt', $this->numExt);
            $consulta->bindParam(':numInt', $this->numInt);
            $consulta->bindParam(':colonia', $this->colonia);
            $consulta->bindParam(':cp', $this->cp);
            $consulta->bindParam(':poblacion', $this->poblacion);
            $consulta->bindParam(':municipio', $this->municipio);
            $consulta->bindParam(':estadoDom', $this->estadoDom);
            $consulta->bindParam(':imagen', $this->imagen);
            $consulta->bindParam(':docCurp', $this->docCurp);
            $consulta->bindParam(':docActNac', $this->docActNac);
            $consulta->bindParam(':docCertSec', $this->docCertSec);
            $consulta->bindParam(':docSurems', $this->docSurems);
            $consulta->bindParam(':docCertCecy', $this->docCertCecy);            
            $consulta->bindParam(':periodofk', $this->periodofk);
            $consulta->execute();
            $this->alumnopk = $conexion->lastInsertId();
        }
        $conexion = null;
    }

    // Método ELIMINAR
    public function eliminar(){
        $conexion = new Conexion();
        $consulta = $conexion->prepare('DELETE FROM ' . self::TABLA . ' WHERE alumnopk = :alumnopk');
        $consulta->bindParam(':alumnopk', $this->alumnopk);
        $consulta->execute();
        $conexion=null;
    }

    // Método RECUPERAR UN REGISTRO
    public static function buscarPorAlumnoPk($alumnopk){        
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' WHERE alumnopk = :alumnopk');
        $consulta->bindParam(':alumnopk', $alumnopk);
        $consulta->execute();
        $registro = $consulta->fetch();
        $conexion = null;
        if ($registro){ // Si existe el registro 
            return new self($registro['nomAlumno'], $registro['apePaterno'], $registro['apeMaterno'], $registro['claveCecyte'], $registro['ficha'], $registro['numControl'], $registro['estatus'], $registro['repetidor'], $registro['especialidad'],
            $registro['claveEspe'], $registro['semestre'], $registro['grupo'], $registro['turno'], $registro['ingreso'], $registro['egreso'], $registro['extracurricular'], $registro['propedeutica1'], $registro['propedeutica2'], $registro['beca'], $registro['beca2'], $registro['beca3'], $registro['nomSecundaria'],
            $registro['claveSecundaria'], $registro['promeSecundaria'], $registro['estadoSecundaria'], $registro['surems'], $registro['fechaBaja'], $registro['causaBaja'], $registro['curp'], $registro['telAlumno'], $registro['fechaNac'], $registro['sexo'], $registro['lugarNac'],
            $registro['ts'], $registro['cuestSalud'], $registro['emailInsti'], $registro['emailPerso'], $registro['nomTutor'], $registro['telTutor'], $registro['calle'], $registro['numExt'], $registro['numInt'], $registro['colonia'], $registro['cp'],
            $registro['poblacion'], $registro['municipio'], $registro['estadoDom'], $registro['imagen'], $registro['docCurp'], $registro['docActNac'], $registro['docCertSec'], $registro['docSurems'], $registro['docCertCecy'], $registro['periodofk'], $alumnopk);
        }else{ 
            return false;
        }
    }

    // Método RECUPERAR TODOS
    public static function recuperarTodos(){
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA);
        $consulta->execute();
        $registros = $consulta->fetchAll();
        $conexion = null;
        return $registros;
    }

    // Método para llenar el select de periodos
    public static function llenarSelectPeriodo(){
        $conexion = new Conexion();                          
        $consulta = $conexion->prepare("SELECT * FROM periodosescolares");
        $consulta->execute();
        $registros = $consulta->fetchAll(); 
        $conexion = null;
        return $registros;
    }   

    // Método para llenar el select de especialidades
    public static function llenarSelectEspe(){
        $conexion = new Conexion();                          
        $consulta = $conexion->prepare("SELECT * FROM especialidades");
        $consulta->execute();
        $registros = $consulta->fetchAll(); 
        $conexion = null;
        return $registros;
    }   

    // Método para llenar el select de estatus
    public static function llenarSelectEstatus(){
        $conexion = new Conexion();                          
        $consulta = $conexion->prepare("SELECT * FROM estatus");
        $consulta->execute();
        $registros = $consulta->fetchAll(); 
        $conexion = null;
        return $registros;
    } 

    // Método para llenar el select de extracurriculares
    public static function llenarSelectExtra(){
        $conexion = new Conexion();                          
        $consulta = $conexion->prepare("SELECT * FROM extracurriculares");
        $consulta->execute();
        $registros = $consulta->fetchAll(); 
        $conexion = null;
        return $registros;
    } 

    // Método para llenar el select de grupos
    public static function llenarSelectGrupo(){
        $conexion = new Conexion();                          
        $consulta = $conexion->prepare("SELECT * FROM grupos");
        $consulta->execute();
        $registros = $consulta->fetchAll(); 
        $conexion = null;
        return $registros;
    } 

    // Método para llenar el select de lugar de nacimiento
    public static function llenarSelectLugar(){
        $conexion = new Conexion();                          
        $consulta = $conexion->prepare("SELECT * FROM lugares");
        $consulta->execute();
        $registros = $consulta->fetchAll(); 
        $conexion = null;
        return $registros;
    } 

    // Método para llenar el select de propedeuticas
    public static function llenarSelectPrope(){
        $conexion = new Conexion();                          
        $consulta = $conexion->prepare("SELECT * FROM propedeuticas");
        $consulta->execute();
        $registros = $consulta->fetchAll(); 
        $conexion = null;
        return $registros;
    } 

    // Método para llenar el select de semestres
    public static function llenarSelectSemestre(){
        $conexion = new Conexion();                          
        $consulta = $conexion->prepare("SELECT * FROM semestres");
        $consulta->execute();
        $registros = $consulta->fetchAll(); 
        $conexion = null;
        return $registros;
    } 

    // Método para llenar el select de tipos sanguineos
    public static function llenarSelectTs(){
        $conexion = new Conexion();                          
        $consulta = $conexion->prepare("SELECT * FROM tipossang");
        $consulta->execute();
        $registros = $consulta->fetchAll(); 
        $conexion = null;
        return $registros;
    }
    
    // Método para llenar el select de causas de baja
    public static function llenarSelectCausaBaja(){
        $conexion = new Conexion();                          
        $consulta = $conexion->prepare("SELECT * FROM causasBaja");
        $consulta->execute();
        $registros = $consulta->fetchAll(); 
        $conexion = null;
        return $registros;
    }

    // Método para llenar el select de estados de secundaria
    public static function llenarSelectEstadoSecundaria(){
        $conexion = new Conexion();                          
        $consulta = $conexion->prepare("SELECT * FROM lugares");
        $consulta->execute();
        $registros = $consulta->fetchAll(); 
        $conexion = null;
        return $registros;
    }

    // Método para llenar el select de estados del domicilio
    public static function llenarSelectEstadoDom(){
        $conexion = new Conexion();                          
        $consulta = $conexion->prepare("SELECT * FROM lugares");
        $consulta->execute();
        $registros = $consulta->fetchAll(); 
        $conexion = null;
        return $registros;
    }

    // Método para llenar el select de turnos
    public static function llenarSelectTurno(){
        $conexion = new Conexion();                          
        $consulta = $conexion->prepare("SELECT * FROM turnos");
        $consulta->execute();
        $registros = $consulta->fetchAll(); 
        $conexion = null;
        return $registros;
    }

    public static function buscar($alumnoBuscado){
        $conexion = new Conexion();  
        //$consulta = $conexion->prepare("SELECT alumnopk, nomAlumno, apePaterno, apeMaterno, imagen, docCurp, docActNac, docCertSec, docSurems FROM alumnos WHERE nomAlumno LIKE :alumnoBuscado OR apePaterno LIKE :alumnoBuscado OR apeMaterno LIKE :alumnoBuscado");
        $consulta = $conexion->prepare("SELECT alumnopk, apePaterno, apeMaterno, nomAlumno, numControl, nomEspe, imagen FROM alumnos a inner join especialidades b on a.especialidad=b.especialidad WHERE nomAlumno LIKE '%".$alumnoBuscado."%' OR apePaterno LIKE '%".$alumnoBuscado."%' OR apeMaterno LIKE '%".$alumnoBuscado."%' OR concat_ws(' ', apePaterno, apeMaterno) LIKE '%".$alumnoBuscado."%' OR concat_ws(' ', apePaterno, apeMaterno, nomAlumno) LIKE '%".$alumnoBuscado."%' OR concat_ws(' ', nomAlumno, apePaterno, apeMaterno) LIKE '%".$alumnoBuscado."%' OR numControl LIKE '%".$alumnoBuscado."%'");
        /*$consulta->bindParam(':alumnoBuscado', $alumnoBuscado);
        $consulta->bindParam(':apePaterno', $alumnoBuscado);
        $consulta->bindParam(':apeMaterno', $alumnoBuscado);*/
        $consulta->execute();
        $registros = $consulta->fetchAll(); 
        $conexion = null;
        return $registros;
    } 

    public static function filtrar($P, $E, $S, $G, $R, $T, $SX, $ET, $IN, $EG, $NA){
        $conexion = new Conexion();  
        $consulta = $conexion->prepare("SELECT alumnopk, apePaterno, apeMaterno, nomAlumno, imagen, numControl, nomEspe, nomSemestre, letra, repetidor, nomTurno, nomEstatus, mesInicio, anioInicio, mesFinal, anioFinal, ingreso, egreso FROM alumnos a inner join especialidades b on a.especialidad=b.especialidad inner join semestres c on a.semestre=c.semestre inner join grupos d on a.grupo=d.grupo inner join estatus e on a.estatus=e.estatus inner join turnos f on a.turno=f.turno inner join periodosescolares g on a.periodofk=g.periodopk WHERE ".$P.$E.$S.$G.$R.$T.$SX.$ET.$IN.$EG.$NA);
        //$consulta->bindParam(':filtro', $filtro);
        $consulta->execute();
        $registros = $consulta->fetchAll(); 
        $conexion = null;
        return $registros;
    } 
    
    public static function filtrarParaReporte($query){
        $conexion = new Conexion();  
        $consulta = $conexion->prepare($query);
        $consulta->execute();
        $registros = $consulta->fetchAll(); 
        $conexion = null;
        return $registros;
    } 

    // SOLO ES TEMPORAL SE DEBE QUITAR AL FINAL
    public static function todos(){
        $conexion = new Conexion();  
        $consulta = $conexion->prepare("SELECT alumnopk, nomAlumno, apePaterno, apeMaterno, ficha, numControl, nomEstatus, repetidor, nomEspe, b.claveEspe, nomSemestre, letra, nomTurno, ingreso, egreso, mesInicio, anioInicio, mesFinal, anioFinal, nomExtra, beca, beca2, beca3, surems, fechaBaja, razon, claveCecyte, j.nomPrope AS 'propedeutica1', K.nomPrope AS 'propedeutica2', nomSecundaria, claveSecundaria, promeSecundaria, l.nomLugar AS 'estadoSecundaria', curp, telAlumno, sexo, m.nom AS 'ts', cuestSalud, n.nomLugar AS 'lugarNac', fechaNac, emailInsti, emailPerso, nomTutor, telTutor, calle, numExt, numInt, colonia, cp, poblacion, municipio, p.nomLugar AS 'estadoDom' FROM alumnos a inner join especialidades b on a.especialidad=b.especialidad inner join semestres c on a.semestre=c.semestre inner join grupos d on a.grupo=d.grupo inner join estatus e on a.estatus=e.estatus inner join turnos f on a.turno=f.turno inner join periodosescolares g on a.periodofk=g.periodopk inner join extracurriculares h on a.extracurricular=h.extracurricular inner join causasbaja i on a.causaBaja=i.causaBaja inner join propedeuticas j on a.propedeutica1=j.propedeutica inner join propedeuticas k on a.propedeutica2=k.propedeutica inner join lugares l on a.estadoSecundaria=l.lugarNac inner join tipossang m on a.ts=m.ts inner join lugares n on a.lugarNac=n.lugarNac inner join lugares p on a.estadoDom=p.lugarNac");
        //$consulta = $conexion->prepare("SELECT alumnopk, nomAlumno, apePaterno, apeMaterno, numControl, nomEspe, nomSemestre, letra, repetidor, nomTurno, nomEstatus FROM alumnos a inner join especialidades b on a.especialidad=b.especialidad inner join semestres c on a.semestre=c.semestre inner join grupos d on a.grupo=d.grupo inner join estatus e on a.estatus=e.estatus inner join turnos f on a.turno=f.turno");
        //$consulta->bindParam(':filtro', $filtro);
        $consulta->execute();
        $registros = $consulta->fetchAll(); 
        $conexion = null;
        return $registros;
    } 

    public static function actualizarMasivo($query){
        $conexion = new Conexion();  
        $consulta = $conexion->prepare($query);
        //$consulta->bindParam(':filtro', $filtro);
        $consulta->execute();
        $registros = $consulta->fetchAll(); 
        $conexion = null;
        return $registros;
    } 
}