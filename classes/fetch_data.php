<?php
require_once("../classes/database.php");

class FetchData {
    
    public static function getTotalVoters() {
        try {
            $db = new Database();
            $conn = $db->connect();

            $query = "SELECT COUNT(*) AS total_voters FROM voters";
            $stmt = $conn->prepare($query);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            return $row['total_voters'];
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return 0; // Return 0 if there's an error
        }
    }
    

    public static function getTotalVoted() {
        try {
            $db = new Database();
            $conn = $db->connect();

            $query = "SELECT COUNT(*) AS total_voted FROM voter_votes";
            $stmt = $conn->prepare($query);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            return $row['total_voted'];
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return 0;
        }
    }

    public static function getTotalAdmin() {
        try {
            $db = new Database();
            $conn = $db->connect();

            $query = "SELECT COUNT(*) AS total_admin FROM adminusers";
            $stmt = $conn->prepare($query);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            return $row['total_admin'];
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return 0; // Return 0 if there's an error
        }
    }
}
?>
