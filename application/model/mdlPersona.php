<?php
//crear la clase Persona o este caso mdlPersona
class mdlPersona{
    //atributos de la clase u objeto
    public $idPersona;
    public $documento;
    public $idTipoDocumento;
    public $nombres;
    public $apellidos;
    public $telefono;
    public $direccion;
    public $email;
    public $fechaNacimiento;
    public $genero;
    public $db;

    //siempre en las clases serán necesarios los métodos get y set para los datos
    //método para fijar los datos 
    public function __SET($atributo, $valor){
        //instanciar la variable atributo que será la que guarde los valores principales
        $this->$atributo = $valor;
    }

    //método para reclamar los datos cuando sean necesarios
    public function __GET($atributo){
        //la variable atributo es la que controla, envia y reclama los datos
        return $this->$atributo;
    }

    //crear o llamar la conexión
    public function __construct($db){
        try{
            $this->db = $db;
        }catch(PDOException $e){
            exit("Error al conectar a la base datos");
        }
    }

    //método para registrar las personas
    public function registrarPersonas(){
        //variable para la consulta
        $sql = "INSERT INTO personas(Documento, Nombres, Apellidos, Email, Telefono, Direccion, Genero, FechaNacimiento, idTipoDocumento) VALUES (?,?,?,?,?,?,?,?,?)";

        //crear una variable para preparar y enviar la consulta stm = statement = consulta
        $stm = $this->db->prepare($sql);
        //bindParam — Vincula un parámetro al nombre de variable especificado 
        $stm -> bindParam(1, $this->documento);
        $stm -> bindParam(2, $this->nombres);
        $stm -> bindParam(3, $this->apellidos);
        $stm -> bindParam(4, $this->email);
        $stm -> bindParam(5, $this->telefono);
        $stm -> bindParam(6, $this->direccion);
        $stm -> bindParam(7, $this->genero);
        $stm -> bindParam(8, $this->fechaNacimiento);
        $stm -> bindParam(9, $this->idTipoDocumento);
        //toda consulta necesita una respuesta
        $resultado = $stm->execute();
        return $resultado;

    }

    //este método va a validar cuál es la última persona registra y a partir de ahí continuará el registro, es decir, impedirá que se agregue un registro en una parte de la tabla diferente al final
    public function ultimoIdPersona(){
        //crear la consulta para verificar
        $sql = "SELECT MAX(idPersona) AS ultimoIdPersona FROM personas";
        //vamos a prepara la consulta para ser enviada
        $query = $this->db->prepare($sql);
        $query->execute();
        $ultimoId = $query->fetchAll(PDO::FETCH_ASSOC);
        return $ultimoId;
    }

    //método para ver los documentos
    public function listarTipoDocumento(){
        //crear la consulta
        $sql = "SELECT idTipoDocumento, Descripcion AS doc FROM tiposdocumentos";
        //preparar la consulta
        $query = $this->db->prepare($sql);
        //ejecutar la consulta
        $query->execute();
        $doc = $query->fetchAll(PDO::FETCH_ASSOC);
        return $doc;
    }
}
?>