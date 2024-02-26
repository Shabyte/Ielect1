<?php

require_once("../classes/database.php");

class Election
{
    protected $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    public function getElections()
    {
        try {
            $conn = $this->database->connect();
            
            // Prepare the SQL statement
            $sql = "SELECT * FROM election";
            $stmt = $conn->prepare($sql);
            
            // Execute the statement
            $stmt->execute();
            
            // Fetch all rows as associative array
            $elections = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            return $elections;
        } catch (PDOException $e) {
            // Handle database errors gracefully
            echo "Error: " . $e->getMessage();
            return []; // Return an empty array in case of error
        }
    }
}
// Instantiate the Election class
$electionObj = new Election();

// Define the number of records per page
$recordsPerPage = 10;

// Fetch elections from the database
$elections = $electionObj->getElections();

// Calculate the total number of pages
$totalPages = ceil(count($elections) / $recordsPerPage);

// Get the current page number from the query string or set it to 1 by default
$currentPage = isset($_GET['page']) ? intval($_GET['page']) : 1;

// Slice the array to get the records for the current page
$start = ($currentPage - 1) * $recordsPerPage;
$end = $start + $recordsPerPage;
$electionsOnPage = array_slice($elections, $start, $recordsPerPage);
?>
