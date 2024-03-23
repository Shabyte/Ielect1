<?php
// Include necessary files
require_once("../classes/admin.class.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $adminID = $_POST["admin_id"];
    $userName = $_POST["userName"];
    $password = $_POST["password"];
    $department = $_POST["department"];
    $course = isset($_POST["course"]) ? $_POST["course"] : null;
    $role = $_POST["role"];

    // Create an instance of AdminManager
    $adminManager = new AdminAccount();

    // Insert admin data into the database
    $inserted = $adminManager->insertAdmin($adminID, $userName, $password, $department, $course, $role);

    if ($inserted) {
        // Data inserted successfully
        header("Location: admin-account.php"); // Redirect to admin list page
        exit();
    } else {
        // Error inserting data
        echo "Error: Failed to add admin.";
    }
} else {
    // Redirect to error page or handle the case when the form is not submitted
    echo "Invalid request.";
}
?>
