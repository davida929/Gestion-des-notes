<?php
require_once 'Database/Database.php';

class Enseignant {
    private $db;

    public function __construct() {
        $this->db = getDatabase();
    }

    // Créer un nouvel utilisateur
    public function create($mat, $nom, $prenom, $genre, $dateNaissance, $tel , $mail, $password) {
        $sql = "INSERT INTO enseignant VALUES (:mat, :nom , :prenom , :genre , :dateNaissance, :tel , :mail, :password)";
        
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':mat', $mat);
        $stmt->bindParam(':nom', $nom);
        $stmt->bindParam(':prenom', $prenom);
        $stmt->bindParam(':genre', $genre);
        $stmt->bindParam(':dateNaissance', $dateNaissance);
        $stmt->bindParam(':tel', $tel);
        $stmt->bindParam(':mail', $mail);

        $stmt->bindParam(':password', $password);
        return $stmt->execute();
    }

    // Lire un utilisateur par ID
    public function read($mat) {
        $sql = "SELECT * FROM enseignant WHERE mat = :mat";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':mat', $mat);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }



    // Supprimer un utilisateur par ID
    public function delete($mat) {
        $sql = "DELETE FROM enseignant WHERE mat = :mat";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':mat', $mat);
        return $stmt->execute();
    }

    // Lire tous les utilisateurs
    public function readAll() {
        $sql = "SELECT * FROM enseignant";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
