<?php
class mdlRoles{
    //atributos
    public $idRol;
    public $descripcion;
    public $estado;
    public $db;

    //crear el constructor
    public function __construct($db){
        try{
            $this->db = $db;
        }catch(PDOException $e){
            exit("Error al conectar a la base datos");
        }
    }

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

    //método para ver los roles
    public function getRoles(){
        //crear la consulta
        $sql = "SELECT * FROM roles ORDER BY Descripcion ASC";
        $stm = $this->db->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>