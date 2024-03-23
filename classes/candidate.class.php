<?php
require_once("../classes/database.php");

class Candidates {
    private $db;
    private $pdo; // Changed from private $database to private $pdo for clarity

    public function __construct(Database $database) {
        $this->pdo = $database->connect(); // Now, this is a PDO object.
    }

    // Add a new candidate
    public function addCandidate($student_name, $position, $division, $party, $status = null, $platform = null, $picture = null) {
        $sql = "INSERT INTO candidates (student_name, position, division, party, status, platform, picture) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql); // Use $this->pdo here
        return $stmt->execute([$student_name, $position, $division, $party, $status, $platform, $picture]);
    }
    // Get all candidates
    public function getAllCandidates() {
        $sql = "SELECT * FROM candidates";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Delete a candidate by ID
    public function deleteCandidate($id) {
        $sql = "DELETE FROM candidates WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$id]);
    }

    // Update a candidate by ID
    public function updateCandidate($id, $student_name, $position, $division, $party, $status, $platform, $picture) {
        $sql = "UPDATE candidates SET student_name = ?, position = ?, division = ?, party = ?, status = ?, platform = ?, picture = ? WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$student_name, $position, $division, $party, $status, $platform, $picture, $id]);
    }
}
?>
