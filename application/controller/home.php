<?php
class Home extends Controller
{
    private $modeloS;
    private $modeloRe;

    public function __construct() {
        // Instanciar el modelo con la conexión PDO
        $this->modeloS = $this->loadModel("mdlSugerencia");
        $this->modeloRe = $this->loadModel("mdlreserva");

    }

    

    public function index() {
        // Cargar vista principal
        require APP . 'view/home/index.php';
    }

    public function about() {
        // Cargar vista acerca de
        require APP . 'view/home/about.php';
    }

    public function service() {
        // Cargar vista de servicio
        require APP . 'view/home/service.php';
    }

    public function menu() {
        // Cargar vista de menú
        require APP . 'view/home/menu.php';
    }

    public function contact() {
        if(isset($_POST['btnEnviar'])) {
            // Asignar valores desde el formulario al modelo
            $this->modeloS->setYourname($_POST['txtname']);
            $this->modeloS->setEmail($_POST['txtemail']);
            $this->modeloS->setMessage($_POST['txtMessage']);

            // Registrar sugerencia utilizando el modelo
            $suggest = $this->modeloS->registerSuggest();

            if($suggest) {
                $_SESSION["alert"] = "Swal.fire({
                    position:'',
                    icon: 'success',
                    title: 'Done',
                    showConfirmButton: false,
                    timer: 1500})";
            } else {
                $_SESSION["alert"] = "Swal.fire({
                    position:'',
                    icon: 'error',
                    title: 'Error',
                    showConfirmButton: false,
                    timer: 3000})";
            }

            // Redirigir después de procesar el formulario
            header("Location: " . URL . "home/contact");
            exit();
        }

        // Cargar vista de contacto
        require APP . 'view/home/contact.php';
    }

   public function reserva() {
    if (isset($_POST['btnEnviar'])) {
        // Asignar valores desde el formulario al modelo
        $this->modeloRe->setnomCompleto($_POST['txtNameC']);
        $this->modeloRe->setEmail($_POST['txtEmail']);
        $this->modeloRe->setfecha($_POST['fecha']);
        $this->modeloRe->sethora($_POST['hora']);
        $this->modeloRe->setcantidad($_POST['txtcantidad']);
        $this->modeloRe->setsede($_POST['txtsede']);
        $this->modeloRe->setMesa($_POST['txtmesa']);

        // Registrar la reserva utilizando el modelo
        $booking = $this->modeloRe->registerReserva();

        if ($booking == true) {
            $_SESSION["alert"] = "Swal.fire({
                position:'',
                icon: 'success',
                title: 'Done',
                showConfirmButton: false,
                timer: 1500})";
        } else {
            $_SESSION["alert"] = "Swal.fire({
                position:'',
                icon: 'error',
                title: 'Error',
                showConfirmButton: false,
                timer: 3000})";
        }
            
        // Redirigir después de procesar el formulario
        header("Location: " . URL . "home/reserva");
        exit();
    }
    // Cargar vista de reserva
    require APP . 'view/home/reserva.php';
}

}
?>
