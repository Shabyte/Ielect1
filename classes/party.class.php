<?php
require_once("../classes/database.php");

class Party {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    // Add a new party
    public function addParty($name) {
        $sql = "INSERT INTO party (name) VALUES (?)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$name]);
        // Return the last inserted ID
        return $this->db->lastInsertId();
    }

    // Get all parties
    public function getAllParties() {
        $sql = "SELECT * FROM party";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Delete a party by ID
    public function deleteParty($id) {
        $sql = "DELETE FROM party WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$id]);
    }

    // Update a party by ID
    public function updateParty($id, $name) {
        $sql = "UPDATE party SET name = ? WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$name, $id]);
    }
}
?>
