<?php
// Include necessary files
require_once("../includes/admin.head.php");
require_once("../classes/voter.class.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if a file is uploaded
    if (isset($_FILES["csvFile"]) && $_FILES["csvFile"]["error"] == 0) {
        // Define allowed file types
        $allowedExtensions = array("csv", "xls", "xlsx", "xlsm", "xlsb", "xml", "ods", "prn", "txt", "tab");
        // Get the file extension
        $fileExtension = pathinfo($_FILES["csvFile"]["name"], PATHINFO_EXTENSION);

        // Check if the uploaded file has a valid extension
        if (in_array($fileExtension, $allowedExtensions)) {
            // Define the target directory for file upload
            $pages = "../pages/";
            // Generate a unique file name to avoid overwriting existing files
            $student = uniqid() . "." . $fileExtension;
            // Set the path to save the uploaded file
            $ielect = $pages . $student;

            // Upload the file to the target directory
            if (move_uploaded_file($_FILES["csvFile"]["tmp_name"], $ielect)) {
                // File uploaded successfully, now parse the CSV file and insert data into the database
                $csvData = array_map('str_getcsv', file($ielect));
                
                // Assuming the CSV format: student_id, email, first_name, last_name, password, course, department, contact_number
                foreach ($csvData as $row) {
                    // Check if all required fields are present
                    if (count($row) >= 5) {
                        $student_id = $row[0];
                        $email = $row[1];
                        $first_name = $row[2];
                        $last_name = $row[3];
                        $password = password_hash($row[4], PASSWORD_DEFAULT); // Hash the password
                        $course = isset($row[5]) ? $row[5] : null;
                        $department = isset($row[6]) ? $row[6] : null;
                        $contact_number = isset($row[7]) ? $row[7] : null;
                        
                        // Insert voter data into the database
                        $voterManager = new VoterManager();
                        $voterManager->insertVoter($student_id, $email, $first_name, $last_name, $password, $course, $department, $contact_number);
                    } else {
                        echo "Error: Invalid CSV format.";
                        // You might want to handle this error differently based on your application's requirements
                    }
                }
                echo "Data inserted successfully.";
            } else {
                // Error uploading file
                echo "Error uploading file.";
            }
        } else {
            // Invalid file extension
            echo "Invalid file extension.";
        }
    } else {
        // No file uploaded or error in uploading
        echo "No file uploaded or error in uploading.";
    }
} else {
    // Redirect to error page or handle the case when the form is not submitted
    echo "Invalid request.";
}
?>
<?php
// Include necessary files
require_once("../includes/admin.head.php");
require_once("../classes/voter.class.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if a file is uploaded
    if (isset($_FILES["csvFile"]) && $_FILES["csvFile"]["error"] == 0) {
        // Define allowed file types
        $allowedExtensions = array("csv", "xls", "xlsx", "xlsm", "xlsb", "xml", "ods", "prn", "txt", "tab");
        // Get the file extension
        $fileExtension = pathinfo($_FILES["csvFile"]["name"], PATHINFO_EXTENSION);

        // Check if the uploaded file has a valid extension
        if (in_array($fileExtension, $allowedExtensions)) {
            // Define the target directory for file upload
            $pages = "../pages/";
            // Generate a unique file name to avoid overwriting existing files
            $student = uniqid() . "." . $fileExtension;
            // Set the path to save the uploaded file
            $ielect = $pages . $student;

            // Upload the file to the target directory
            if (move_uploaded_file($_FILES["csvFile"]["tmp_name"], $ielect)) {
                // File uploaded successfully, now parse the CSV file and insert data into the database
                $csvData = array_map('str_getcsv', file($ielect));
                
                // Assuming the CSV format: student_id, email, first_name, last_name, password, course, department, contact_number
                foreach ($csvData as $row) {
                    // Check if all required fields are present
                    if (count($row) >= 5) {
                        $student_id = $row[0];
                        $email = $row[1];
                        $first_name = $row[2];
                        $last_name = $row[3];
                        $password = password_hash($row[4], PASSWORD_DEFAULT); // Hash the password
                        $course = isset($row[5]) ? $row[5] : null;
                        $department = isset($row[6]) ? $row[6] : null;
                        $contact_number = isset($row[7]) ? $row[7] : null;
                        
                        // Insert voter data into the database
                        $voterManager = new VoterManager();
                        $voterManager->insertVoter($student_id, $email, $first_name, $last_name, $password, $course, $department, $contact_number);
                    } else {
                        echo "Error: Invalid CSV format.";
                        // You might want to handle this error differently based on your application's requirements
                    }
                }
                echo "Data inserted successfully.";
            } else {
                // Error uploading file
                echo "Error uploading file.";
            }
        } else {
            // Invalid file extension
            echo "Invalid file extension.";
        }
    } else {
        // No file uploaded or error in uploading
        echo "No file uploaded or error in uploading.";
    }
} else {
    // Redirect to error page or handle the case when the form is not submitted
    echo "Invalid request.";
}
?>
