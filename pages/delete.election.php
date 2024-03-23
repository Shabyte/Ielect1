<?php
// Include the necessary files (such as database connection)
require_once("../classes/database.php");

// Check if the election ID is provided in the URL
if (!isset($_GET['id']) || empty($_GET['id'])) {
    // Redirect to the election page if ID is not provided
    header("Location: election.php");
    exit();
}

// Get the election ID from the URL
$election_id = $_GET['id'];

try {
    // Create an instance of the Database class
    $database = new Database();

    // Establish a connection to the database
    $conn = $database->connect();

    // Prepare the SQL statement to soft delete the election
    $sql = "UPDATE election SET deleted_at = CURRENT_TIMESTAMP() WHERE id = :id
    ";

    // Prepare and execute the SQL statement using PDO
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $election_id);
    $stmt->execute();

    // No need to redirect, simply exit after successful deletion
    exit();
} catch(PDOException $e) {
    // Redirect back to the election page with an error message
    header("Location: election.php?error=" . urlencode($e->getMessage()));
    exit();
}
?>
