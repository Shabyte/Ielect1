<?php

require_once("../classes/database.php");

class Candidacy
{
    protected $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    public function getCandidacy()
    {
        try {
            $conn = $this->database->connect();
            $sql = "SELECT * FROM candidacy";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $candidacy = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $candidacy;
        } catch (PDOException $e) {
            // Handle database errors gracefully
            error_log("Database Error: " . $e->getMessage());
            return []; // Return an empty array in case of error
        }
    }
}
// Instantiate the Candidacy class
$candidacyObj = new Candidacy();

// Fetch candidacy from the database
$candidacy = $candidacyObj->getCandidacy();

?>
