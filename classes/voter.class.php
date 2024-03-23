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

    public function insertVoter($student_id, $email, $first_name, $last_name, $course, $department, $contact_number) {
        try {
            // Prepare SQL statement for inserting a new voter
            $stmt = $this->connection->prepare("INSERT INTO voters (student_id, email, first_name, last_name, course, department, contact_number) VALUES (:student_id, :email, :first_name, :last_name, :course, :department, :contact_number)");
            
            // Bind parameters and execute the statement
            $stmt->bindParam(':student_id', $student_id);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':first_name', $first_name);
            $stmt->bindParam(':last_name', $last_name);
            $stmt->bindParam(':course', $course);
            $stmt->bindParam(':department', $department);
            $stmt->bindParam(':contact_number', $contact_number);
            
            // Execute the SQL statement
            $stmt->execute();

            // Return true if insertion was successful
            return true;
        } catch(PDOException $e) {
            // Handle database query error
            echo "Error: " . $e->getMessage();
            return false; // Return false if insertion failed
        }
    }
    
}
?>
