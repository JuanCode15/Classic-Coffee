<?php 

class reservaController extends Controller{
    private $modeloRe;

    //creo el constructor que va llamar la base de datos
    public function __construct(){
        $this->modeloRe=$this->loadModel("mdlreserva");
    }

    public function getreserva(){
        $reservas = $this->modeloRe->getreserva();
        //cargo las vistas
        require APP.'view/_templates/header.php';
        require APP.'view/usuarios/getReserva.php';
        require APP.'view/_templates/footer.php';
    }
    public function changeStatusR(){
        $status = $this->modeloRe->changeStatusR($_POST['id']);
        echo 1;
    }
}



?>