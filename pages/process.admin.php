<?php
// Include necessary files
require_once("../classes/admin.class.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize form data
    $adminID = htmlspecialchars($_POST["admin_id"]);
    $userName = htmlspecialchars($_POST["userName"]);
    $password = htmlspecialchars($_POST["password"]);
    $department = htmlspecialchars($_POST["department"]);
    $course = isset($_POST["course"]) ? htmlspecialchars($_POST["course"]) : null;
    $role = htmlspecialchars($_POST["role"]);

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Create an instance of AdminManager
    $adminManager = new AdminAccount();

    // Insert admin data into the database
    $inserted = $adminManager->insertAdmin($adminID, $userName, $hashed_password, $department, $course, $role);

    if ($inserted) {
        // Data inserted successfully
        header("Location: admin-success.php"); // Redirect to success page
        exit();
    } else {
        // Error inserting data
        error_log("Failed to add admin."); // Log the error
        header("Location: admin-error.php"); // Redirect to error page
        exit();
    }
} else {
    // Redirect to error page if the form is not submitted
    header("Location: admin-error.php");
    exit();
}
?>
