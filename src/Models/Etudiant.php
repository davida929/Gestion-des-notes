<?php
require_once 'Database/Database.php';

class Etudiant {
    private $db;

    public function __construct() {
        $this->db = getDatabase();
    }

    // Créer un nouvel utilisateur
    public function create($code_massar, $nom, $prenom) {
        $sql = "INSERT INTO etudiants VALUES (:code_massar, :nom , :prenom )";
        
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':code_massar', $code_massar);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        return $stmt->execute();
    }
    // Créer un nouvel utilisateur
    public function update($code_massar, $nom, $prenom) {
        $sql = "UPDATE etudiants SET  nom = :nom , prenom =  :prenom WHERE code_massar = :code_massar ";
        
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':code_massar', $code_massar);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        return $stmt->execute();
    }
    // Lire un utilisateur par ID
    public function read($code_massar) {
        $sql = "SELECT * FROM etudiants WHERE code_massar = :code_massar";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':code_massar', $code_massar);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }



    // Supprimer un utilisateur par ID
    public function delete($code_massar) {
        $sql = "DELETE FROM etudiants WHERE code_massar = :code_massar";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':code_massar', $code_massar);
        return $stmt->execute();
    }

    // Lire tous les utilisateurs
    public function readAll() {
        $sql = "SELECT * FROM etudiants";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    public function count() {
        $sql = "SELECT count(*) AS n FROM etudiants";
        $stmt = $this->db->query($sql);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
