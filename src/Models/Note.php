<?php
require_once 'Database/Database.php';

class Note {
    private $db;

    public function __construct() {
        $this->db = getDatabase();
    }

    // Créer un nouveau Note
    public function create($id_devoir, $id_etu , $note ) {
        $sql = "INSERT INTO notes(id_devoir, id_etu, note) VALUES (:id_devoir, :id_etu , :note )";
        
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id_devoir', $id_devoir);
        $stmt->bindParam(':id_etu', $id_etu);
        $stmt->bindParam(':note', $note);
        return $stmt->execute();
    }

    // // Lire un utilisateur par ID
    // public function read($code_massar) {
    //     $sql = "SELECT * FROM  WHERE code_massar = :code_massar";
    //     $stmt = $this->db->prepare($sql);
    //     $stmt->bindParam(':code_massar', $code_massar);
    //     $stmt->execute();
    //     return $stmt->fetch(PDO::FETCH_ASSOC);
    // }



    // Supprimer un utilisateur par ID
    public function delete($id) {
        $sql = "DELETE FROM notes WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
     public function fetchAll($id_devoir) {
        $sql = "select e.* , n.note, n.id from etudiants e join notes n on n.id_etu = e.code_massar  where n.id_devoir = :id_devoir";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id_devoir', $id_devoir);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
     public function find($id_devoir, $key) {
        $sql = "select e.* , n.note, n.id from etudiants e join notes n on n.id_etu = e.code_massar  
                where n.id_devoir = :id_devoir
                and ( e.code_massar LIKE '%$key%' or e.nom LIKE '%$key%' or e.prenom LIKE '%$key%' or n.note LIKE '%$key%' )
                ";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id_devoir', $id_devoir);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    // Lire tous les utilisateurs
    public function readAll() {
        $sql = "SELECT * FROM notes";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
