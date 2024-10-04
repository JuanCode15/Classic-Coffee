<?php
class mdlSugerencia {
    private $db;

    private $yourname;
    private $email;
    private $message;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    public function setYourname($yourname) {
        $this->yourname = $yourname;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setMessage($message) {
        $this->message = $message;
    }

    public function registerSuggest() {
        $sql = "INSERT INTO sugerencias (yourname, email, message) VALUES (?, ?, ?)";
        
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->yourname);
        $stm->bindParam(2, $this->email);
        $stm->bindParam(3, $this->message);

        $result = $stm->execute();
        return $result;
    }

    public function getSuggest() {
        $sql = "SELECT * FROM sugerencias";
    
        $stm = $this->db->prepare($sql);
        $stm->execute();
    
        return $stm->fetchAll(PDO::FETCH_ASSOC);
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
 