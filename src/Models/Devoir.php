<?php
require_once 'Database/Database.php';

class Devoir {
    private $db;

    public function __construct() {
        $this->db = getDatabase();
    }

    // Créer un nouvel utilisateur
    public function create($matr_ens, $titre, $classe, $dateDs, $niveau) {
        $sql = "INSERT INTO devoir(matr_ens, titre, classe, dateNotes, niveu) VALUES (:matr_ens , :titre , :classe , :dateDs , :niveau)";
        
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':matr_ens', $matr_ens);
        $stmt->bindParam(':titre', $titre);
        $stmt->bindParam(':classe', $classe);
        $stmt->bindParam(':dateDs', $dateDs);
        $stmt->bindParam(':niveau', $niveau);
        return $stmt->execute();
    }

    // Lire un utilisateur par ID
    public function read($idr) {
        $sql = "SELECT * FROM devoir WHERE matr = :matr";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':matr', $matr);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }




    // Supprimer un utilisateur par ID
    public function delete($id) {
        $sql = "DELETE FROM devoir WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    // Lire tous les utilisateurs
    public function readAll() {
        $sql = "SELECT * FROM devoir";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

      // Lire tous les niveau existants
    public function getLevel($ens_id) {
        $sql = "SELECT distinct niveu from devoir WHERE matr_ens = :matr_ens ";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':matr_ens', $ens_id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllbyLevel($ens_id, $level) {
        $sql = "SELECT * from devoir WHERE matr_ens = :matr_ens AND niveu = :level ";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':matr_ens', $ens_id);
        $stmt->bindParam(':level', $level);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Lire tous les utilisateurs a partir de certaine rangs
    public function fetch_between($debut, $fin) {
        $sql = "SELECT * FROM devoir LIMIT $fin OFFSET $debut ";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function count() {
        $sql = "SELECT count(*) AS n FROM devoir";
        $stmt = $this->db->query($sql);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
