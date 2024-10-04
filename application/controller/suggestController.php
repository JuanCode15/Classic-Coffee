<?php
class suggestController extends Controller{
    private $modeloS; 

    //crear el constructor que llamará del modelo la base de datos
    public function __construct(){
        //instanciar los modelos
        $this->modeloS = $this->loadModel("mdlSugerencia");

    }   

    public function getsuggest(){
        $sugerer = $this->modeloS->getsuggest();
        $totalSuggestions = $this->countSuggestions();



        //crear las variables para llamar los métodos de los modelos

        //para que funcione el método requiere los archivos visuales
        require APP . 'view/_templates/header.php';
        require APP . 'view/usuarios/getsuggest.php';
        require APP . 'view/_templates/footer.php';
    }
    
     // Método para contar el número total de sugerencias
     public function countSuggestions() {
        $total = $this->modeloS->countSuggestions();
        return $total;
    }

        

    
}



?>