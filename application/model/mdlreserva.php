<?php
class mdlreserva {
    private $db;

    private $idUsuario;
    private $nomCompleto;

    private $email;
    private $fecha;
    private $hora;
    private $cantidad;
    private $sede;
    private $Mesa;
    public function __construct(PDO $db) {
        $this->db = $db;
    }

    public function setnomCompleto($nomCompleto) {
        $this->nomCompleto = $nomCompleto;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setfecha($fecha) {
        $this->fecha = $fecha;
    }
    public function sethora($hora) {
        $this->hora = $hora;
    }
    public function setcantidad($cantidad) {
        $this->cantidad = $cantidad;
    }

    public function setsede($sede) {
        $this->sede = $sede;
    }

    public function setmesa($Mesa) {
        $this->Mesa = $Mesa;
    }
    public function registerReserva() {
        $sql = "INSERT INTO reservas(nomCompleto,Email, fecha, hora, cantidad,sede,Mesa, EstadoR) VALUES (?,?,?,?,?,?,?,?)";
        
        $status = 1;
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->nomCompleto);
        $stm->bindParam(2, $this->email);
        $stm->bindParam(3, $this->fecha);
        $stm->bindParam(4, $this->hora);
        $stm->bindParam(5, $this->cantidad);
        $stm->bindParam(6, $this->sede);
        $stm->bindParam(7, $this->Mesa);
        $stm->bindParam(8, $status);
        $result = $stm->execute();
        return $result;
    }

    public function getreserva() {
        $sql = "SELECT * FROM reservas";
    
        $stm = $this->db->prepare($sql);
        $stm->execute();
    
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }


    public function changeStatusR($id){
        //consulta
        $sql ="UPDATE reservas SET EstadoR = (CASE WHEN EstadoR = 1 THEN 0 ELSE 1 END) WHERE idUsuario = ?";

        $query = $this->db->prepare($sql);
        $query->bindParam(1, $id);
        return $query->execute();
    }
    



}
?>
 