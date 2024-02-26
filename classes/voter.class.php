<?php
require_once("../classes/database.php");

class VoterManager {
    private $connection;
    
    public function __construct() {
        // Replace the database credentials with your actual database configuration
        $host = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'ielect';

        try {
            $this->connection = new PDO("mysql:host=$host;dbname=$database", $username, $password);
            // Set PDO to throw exceptions on error
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            // Handle database connection error
            echo "Connection error " . $e->getMessage();
            exit; // Exit script if connection fails
        }
    }

    public function getVotersArray() {
        try {
            // Prepare SQL query to fetch voters
            $stmt = $this->connection->query("SELECT * FROM voters");
            // Fetch all voters as an associative array
            $votersArray = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $votersArray;
        } catch(PDOException $e) {
            // Handle database query error
            echo "Error: " . $e->getMessage();
            return []; // Return an empty array in case of error
        }
    }
}
?>
