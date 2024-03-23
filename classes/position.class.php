<?php
require_once("database.php");

class Position {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    // Add a new position
    public function addPosition($position, $maximum_vote) {
        $query = "INSERT INTO positions (description, max_vote) VALUES ('$position', '$maximum_vote')";
        return $this->db->query($query);
    }

    // Get all positions
    public function getAllPositions() {
        $query = "SELECT * FROM positions ORDER BY description ASC";
        return $this->db->query($query);
    }

    // Delete a position by ID
    public function deletePosition($id) {
        $query = "DELETE FROM positions WHERE id = $id";
        return $this->db->query($query);
    }

    // Update a position by ID
    public function updatePosition($id, $position, $maximum_vote) {
        $query = "UPDATE positions SET description = '$position', max_vote = '$maximum_vote' WHERE id = $id";
        return $this->db->query($query);
    }
}
?>