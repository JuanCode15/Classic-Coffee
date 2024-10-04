<?php
//crear la clase para heredar del controlador
class usuarioController extends Controller{
    //atributo que va a ser el encargado de llamar el modelo necesario
    private $modeloU;
    private $modeloR; 

    //crear el constructor que llamará del modelo la base de datos
    public function __construct(){
        //instanciar los modelos
        $this->modeloU = $this->loadModel("mdlUsuario");
        $this->modeloR = $this->loadModel("mdlRoles");

    }

    //método para el iniciar sesion
    public function login(){
        //capturar cualquier tipo de error
        $error = false;

        //validamos los datos que vengan del formulario
        if(isset($_POST['btnLogin'])){
            $this->modeloU->__SET('usuario', $_POST['txtUser']);
            $this->modeloU->__SET('clave', $_POST['txtPassword']);

            //guardar en un arreglo vacio
            $_POST=[];

            //con una variable vamos a llmar el método de validación
            $validate = $this->modeloU->validateUser();

            //revisar la validación
            if($validate == true){
                $_SESSION['SESSION_START'] = true;

                $error = false;

                //comunicamos formulario y modelo
                $_SESSION['Nombres'] = $validate['Nombres'];
                $_SESSION['idUsuario'] = $validate['idUsuario'];
                $_SESSION['Apellidos'] = $validate['Apellidos'];
                $_SESSION['Documento'] = $validate['Documento'];
                $_SESSION['Usuario'] = $validate['Usuario'];
                $_SESSION['Descripcion'] = $validate['Descripcion'];

                //después de la validación cargar la vista admin
                header("Location:" .URL."usuarioController/main");
            }else{
                $error = true;
            }
        }
        require APP . 'view/usuarios/login.php';
    }

    //método para cargar el admin
    public function main(){
        require APP . 'view/_templates/header.php';
        require APP . 'view/usuarios/main.php';
        require APP . 'view/_templates/footer.php';
    }

    //método para cerrar sesión
    public function closeSession(){
        if(isset($_SESSION['SESSION_START'])){
            session_destroy();
        }

        header("Location: " . URL . "home/index");
        exit();
    }

      //registrar usuarios
      public function userRegister(){
        //con condicional para el formulario
        if(isset($_POST['btnRegister'])){
            //comunicación modelo y formulario
            $this->modeloU->__SET('idTipoDocumento', $_POST['selDocType']);
            $this->modeloU->__SET('documento', $_POST['txtDocument']);
            $this->modeloU->__SET('nombres', $_POST['txtNames']);
            $this->modeloU->__SET('apellidos', $_POST['txtLastName']);
            $this->modeloU->__SET('fechaNacimiento', $_POST['txtBirthdate']);
            $this->modeloU->__SET('telefono', $_POST['txtPhoneNumber']);
            $this->modeloU->__SET('direccion', $_POST['txtAddress']);
            $this->modeloU->__SET('email', $_POST['txtEmail']);
            $this->modeloU->__SET('genero', $_POST['selGenere']);

            //vamos a crear una variable que llamará al método del modelo para poder registrar los datos
            $person = $this->modeloU->registrarPersonas();


            //validamos que registre desde la última persona registrada
            if($person == true){
                $ultimoId = $this->modeloU->ultimoIdPersona();
                //foreach que se encarga de tomar los datos explicitos
                foreach($ultimoId as $value){
                    $ultimoIdValue = $value['ultimoIdPersona'];
                }
            }

            //datos para la tabla usuarios
            $this->modeloU->__SET('idPersona', $ultimoIdValue);
            $this->modeloU->__SET('usuario', $_POST['txtUser']);
            $this->modeloU->__SET('clave', $_POST['txtPassword']);
            $this->modeloU->__SET('idRol', $_POST['selRol']);

            $user = $this->modeloU->userRegister();

            //aquí vamos a estilizar con la librería sweetalert2
            if($person == true && $user == true){
                $_SESSION["alert"] = "Swal.fire({
                    position:'',
                    icon: 'success',
                    title: 'Done',
                    showConfirmButton: false,
                    timer: 1500})";

                    header("Location: " .URL."usuarioController/getUsers");
                    exit();
            }else{
                $_SESSION["alert"] = "Swal.fire({
                    position:'',
                    icon: 'error',
                    title: 'Error',
                    showConfirmButton: false,
                    timer: 3000})";

                    header("Location: " .URL."usuarioController/userRegister");
                    exit();
            }
        }

        //variables para traer los demás métodos necesarios
        $tipoDocumentos = $this->modeloU->listarTipoDocumento();
        $roles = $this->modeloR->getRoles();

        require APP . 'view/_templates/header.php';
        require APP . 'view/usuarios/registerUser.php';
        require APP . 'view/_templates/footer.php';
    }

    //método para ver los usuarios registrados y modificar
    public function getUsers(){
        //vamos a tener el condicional para cuando sea el momento de editar
        if(isset($_POST['btnUpdate'])){
             //comunicación modelo y formulario
            $this->modeloU->__SET('idTipoDocumento', $_POST['selDocType']);
            $this->modeloU->__SET('documento', $_POST['txtDocument']);
            $this->modeloU->__SET('nombres', $_POST['txtNames']);
            $this->modeloU->__SET('apellidos', $_POST['txtLastName']);
            $this->modeloU->__SET('telefono', $_POST['txtPhoneNumber']);
            $this->modeloU->__SET('direccion', $_POST['txtAddress']);
            $this->modeloU->__SET('email', $_POST['txtEmail']);
            $this->modeloU->__SET('usuario', $_POST['txtUser']);
            $this->modeloU->__SET('clave', $_POST['txtPassword']);
            $this->modeloU->__SET('idUsuario', $_POST['txtIdUser']);
            

            //variable para el actualizar
            $update = $this->modeloU->updateUser();


            //sweetalert
            if($update == true){
                $_SESSION["alert"] = "Swal.fire({
                    position:'',
                    icon: 'success',
                    title: 'Done',
                    showConfirmButton: false,
                    timer: 1500})";

                    header("Location: " .URL."usuarioController/getUsers");
                    exit();
            }else{
                $_SESSION["alert"] = "Swal.fire({
                    position:'',
                    icon: 'error',
                    title: 'Error',
                    showConfirmButton: false,
                    timer: 3000})";

                    header("Location: " .URL."usuarioController/getUsers");
                    exit();
            }
        }

        //crear las variables para llamar los métodos de los modelos
        $user = $this->modeloU->getUsers();
        $roles = $this->modeloR->getRoles();
        $tipoDocumentos = $this->modeloU->listarTipoDocumento();

        //para que funcione el método requiere los archivos visuales
        require APP . 'view/_templates/header.php';
        require APP . 'view/usuarios/getUsers.php';
        require APP . 'view/_templates/footer.php';
    }

    //función para traer el ID del modelo
    public function dataUser(){
        //crear una variable para controlar el dato
        $dataUser = $this->modeloU->userId($_POST['id']);
        echo json_encode($dataUser);
    }

    //método para cambiar el estado
    public function changeStatus(){
        $status = $this->modeloU->changeStatus($_POST['id']);
        echo 1;
    }

    //método para cambiar el estado
    public function deleteUser(){
        $status = $this->modeloU->deleteUser($_POST['id']);
        echo 1;
    }
}
?>