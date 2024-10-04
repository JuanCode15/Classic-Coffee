<?php
//este modelo hereda del padre o mdlPersona
require_once("mdlPersona.php");

//heredamos la clase
class mdlUsuario extends mdlPersona{
    //atributos
    private $idUsuario;
    private $usuario;
    private $clave;
    private $idRol;
    private $estado;

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

    //validar para el ingreso
    public function validateUser(){
        //Crear la consulta
        $sql = "SELECT P.Documento, P.Nombres,P.Apellidos, U.idUsuario, U.Usuario, U.Clave, R.Descripcion FROM personas AS P 
        INNER JOIN tiposdocumentos AS TD ON P.idTipoDocumento = TD.idTipoDocumento 
        INNER JOIN usuarios AS U ON P.idPersona = U.idPersona 
        INNER JOIN roles AS R ON U.idRol = R.idRol WHERE U.Usuario = ? AND U.Clave = ? AND U.Estado = 1";

        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->usuario);
        $stm->bindParam(2, $this->clave);
        $stm->execute();

        //crear una variable que retornará los datos
        $user = $stm->fetch(PDO::FETCH_ASSOC);
        return $user;
    }

    //metodo para registrar usuario
    public function userRegister(){
        //crear la variable de consulta
        $sql = "INSERT INTO usuarios(idPersona, Usuario, Clave, idRol, Estado) VALUES (?,?,?,?,?)";
        //esta variable mandará el estado activo por defecto para el usuario que se registre
        $estado = 1;

        //vamos a enviar los parámentros
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->idPersona);
        $stm->bindParam(2, $this->usuario);
        $stm->bindParam(3, $this->clave);
        $stm->bindParam(4, $this->idRol);
        $stm->bindParam(5, $estado);

        //respuesta
        $result = $stm->execute();
        return $result;
    }

    //método para ver los usuarios
    public function getUsers(){
        //consulta
        $sql = "SELECT P.*, U.idUsuario,U.Usuario, U.Estado, R.Descripcion AS rol, TD.Descripcion AS tipoDoc FROM personas AS P INNER JOIN usuarios AS U ON P.idPersona = U.idPersona INNER JOIN roles AS R ON R.idRol = U.idRol INNER JOIN tiposdocumentos AS TD ON P.idTipoDocumento = TD.idTipoDocumento; ";

        //vamos a preparar la consulta y ejecutar
        $stm = $this->db->prepare($sql);
        $stm ->execute();
        //vamos a crear la variable para retornar los datos
        $user = $stm->fetchAll(PDO::FETCH_ASSOC);
        return $user;
    }

    //método para tomar el id, filtrar, editar, eliminar y cambiar estado
    public function userId($id){
        //consulta
        $sql = "SELECT P.*, U.*, R.idRol, R.Descripcion AS rol, TD.Descripcion AS tipoDoc FROM personas AS P INNER JOIN usuarios AS U ON P.idPersona = U.idPersona INNER JOIN roles AS R ON R.idRol = U.idRol INNER JOIN tiposdocumentos AS TD ON P.idTipoDocumento = TD.idTipoDocumento WHERE U.idUsuario = ?";

        //preparación y ejecución de la consulta
        $query = $this->db->prepare($sql);
        $query->bindParam(1, $id);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    //método para cambiar el estado
    public function changeStatus($id){
        //consulta
        $sql ="UPDATE usuarios SET Estado = (CASE WHEN Estado = 1 THEN 0 ELSE 1 END) WHERE idUsuario = ?";

        $query = $this->db->prepare($sql);
        $query->bindParam(1, $id);
        return $query->execute();
    }

    //método para eliminar el usuario
    public function deleteUser($id){
        //consulta
        $sql = "DELETE U, P FROM usuarios AS U INNER JOIN personas AS P WHERE P.idPersona = U.idPersona AND U.idUsuario = ?";

        $query = $this->db->prepare($sql);
        $query -> bindParam(1,$id);
        return $query->execute();
    }

    //método para modificar el usuario y la persona
    public function updateUser(){
        //consulta
        $sql = "UPDATE personas AS P INNER JOIN usuarios AS U ON P.idPersona = U.idPersona SET P.idTipoDocumento = ?, P.Documento = ?, P.Nombres =?, P.Apellidos = ?, P.Telefono = ?, P.Direccion = ?, P.Email = ?, U.Usuario = ?, U.Clave = ? WHERE U.idUsuario = ?";

        //preparar la consulta y enviarla
        $stm = $this->db->prepare($sql);
        $stm -> bindParam(1, $this->idTipoDocumento);
        $stm -> bindParam(2, $this->documento);
        $stm -> bindParam(3, $this->nombres);
        $stm -> bindParam(4, $this->apellidos);
        $stm -> bindParam(5, $this->telefono);
        $stm -> bindParam(6, $this->direccion);
        // $stm -> bindParam(7, $this->genero);
        $stm -> bindParam(7, $this->email);
        $stm -> bindParam(8, $this->usuario);
        $stm -> bindParam(9, $this->clave);
        $stm -> bindParam(10, $this->idUsuario);

        //respuesta
        $result = $stm->execute();
        return $result;
    }

    public function countSuggestions() {
        $sql = "SELECT COUNT(*) AS total FROM sugerencias";
    
        $stm = $this->db->prepare($sql);
        $stm->execute();
    
        $result = $stm->fetch(PDO::FETCH_ASSOC);
        return $result['total'];
    }
}

?>