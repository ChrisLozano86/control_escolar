<?php

require_once('Conexion.php'); // usa la clase conexion.php

class Usuario{
    // Se declaran los atributos
    private $usuariopk;
    private $nombre;
    private $email;
    private $password;
    private $estatus;
    private $privilegios;

    // se crea una constante que guardará el nombre de la tabla
    const TABLA = 'usuarios';

    // Método constructor
    public function __construct($nombre=null, $email=null, $password=null, $estatus=null, $privilegios=null, $usuariopk=null){
        /* Con la palabra this se hace referencia al atributo declarado al principio y le asigna el valor 
        de los parámetros que se mandan del formulario, que como en este caso apenas es el constructor 
        se inicializan en nulo*/
        $this->nombre = $nombre;
        $this->email = $email;
        $this->password = $password;
        $this->estatus = $estatus;
        $this->privilegios = $privilegios;
        $this->usuariopk = $usuariopk;
    }

    //Los métodos GET obtienen el valor de la variable indicada y lo guarda en el atributo correspondiente

    public function getUsuarioPk(){
        return $this->usuariopk;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getPassword(){
        return $this->password;
    }
    
    public function getEstatus(){
        return $this->estatus;
    }

    public function getPrivilegios(){
        return $this->privilegios;
    }

    //Los métodos SET asigna el valor que llega como parámetro al atributo correspondiente

    public function setNombre($nombre){
        $this->nombre = $nombre; 
    }

    public function setEmail($email){
        $this->email = $email; 
    }

    public function setPassword($password){
        $this->password = $password;
    }

    public function setEstatus($estatus){
        $this->estatus = $estatus;
    }

    public function setPrivilegios($privilegios){
        $this->privilegios = $privilegios;
    }

    // *** Método GUARDAR y MODIFICAR
    
    public function guardar(){
        // crea un objeto nuevo de la clase conexión, por lo que podrá acceder a sus atributos y métodos
        $conexion = new Conexion();
        if($this->usuariopk){ // Si ya tiene un id asignado entonces MODIFICA
            /* En la variable consulta se prepara la instrucción sql
             SELF=Se usa para hacer referencia a la constante que guarda el nombre de la tabla
             se usan bindParam para hacer vincular el valor del atributo a una variable con dos puntos antes y así hacer más corta la consulta */
            $consulta = $conexion->prepare('UPDATE ' . self::TABLA . ' SET nombre = :nombre, email = :email, password = :password, estatus = :estatus, privilegios = :privilegios WHERE usuariopk = :usuariopk');
            // Enlazamos el atributo a cada nombre de variable definido con BindParam
            $consulta->bindParam(':usuariopk', $this->usuariopk);
            $consulta->bindParam(':nombre', $this->nombre);
            $consulta->bindParam(':email', $this->email);
            $consulta->bindParam(':password', $this->password);
            $consulta->bindParam(':estatus', $this->estatus);
            $consulta->bindParam(':privilegios', $this->privilegios);
            // Se ejecuta la consulta
            $consulta->execute();
        }else{ //Si es un registro nuevo (sin id) se INSERTA
            // Se prepara la instrucción sql
            $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA . ' (nombre, email, password, estatus, privilegios) VALUES (:nombre, :email, :password, :estatus, :privilegios)');
            // Vinculamos el atributo a cada nombre de variable definido
            $consulta->bindParam(':nombre', $this->nombre);
            $consulta->bindParam(':email', $this->email);
            $consulta->bindParam(':password', $this->password);
            $consulta->bindParam(':estatus', $this->estatus);
            $consulta->bindParam(':privilegios', $this->privilegios);
            // Se ejecuta la consulta
            $consulta->execute();
            // Se recupera el id del último registro insertado
            $this->usuariopk = $conexion->lastInsertId();
            //$this->usuariopk = $conexion->lastInsertUsuarioPk();
        }
        // Se cierra la conexión
        $conexion = null;
    }

    // *** Método para ELIMINAR

    public function eliminar(){        
        $conexion = new Conexion();
        $consulta = $conexion->prepare('DELETE FROM ' . self::TABLA . ' WHERE usuariopk = :usuariopk');
        $consulta->bindParam(':usuariopk', $this->usuariopk);
        $consulta->execute();
        $conexion = null;
    }

    // *** Método para BUSCAR POR ID, recibe como parámetro el id

    public static function buscarPorUsuarioPk($usuariopk){        
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA . ' WHERE usuariopk = :usuariopk');
        $consulta->bindParam(':usuariopk', $usuariopk);
        $consulta->execute();
        // Con la función FETCH se divide por campos el arreglo que devuelve la consulta y lo guarda en la variable registro
        $registro = $consulta->fetch();
        $conexion = null;
        if ($registro){ // Si existe el registro 
            /* Hace referencia a estos valores de  nuevo para que el constructor pueda procesarlos (editarlos, eliminarlos*/
            return new self($registro['nombre'], $registro['email'], $registro['password'], $registro['estatus'], $registro['privilegios'], $usuariopk);
        }else{ 
            // Si no encontró el registro
            return false;
        }
    }

    // *** Método para OBTENER todos los registros 
    public static function recuperarTodos(){
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA);
        $consulta->execute();
        // Con la función FETCHALL se divide por campos el arreglo de CADA FILA que devuelve la consulta y lo guarda en la variable registros
        $registros = $consulta->fetchAll();  
        /* No usa ningún condicional porque no necesita procesar los datos solo los imprimirá en pantalla */ 
        $conexion = null;
        return $registros;     
    }

    public function logIn(){
        $conexion = new Conexion();
        $consulta = $conexion->prepare('SELECT email, privilegios, estatus FROM ' . self::TABLA . ' WHERE email = :email and password = :password');
        $consulta->bindParam(':email', $this->email);
        $consulta->bindParam(':password', $this->password);
        $consulta->execute();
        $registro = $consulta->fetch();
        $conexion = null;
        if ($registro){
            $_SESSION['email'] = $registro[0];
            $_SESSION['privilegios'] = $registro[1];
            $_SESSION['estatus'] = $registro[2];
            return true;
        }else{
            return false;
        }
    }
}