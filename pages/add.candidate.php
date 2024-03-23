<?php
session_start();

// Include necessary files and classes
require_once('../includes/admin.head.php');
require_once("../classes/candidate.class.php");
require_once("../classes/database.php"); // Ensure this is included if not already

$title = 'Add Candidate';
$error = '';

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $student_name = filter_input(INPUT_POST, 'student_name', FILTER_SANITIZE_STRING);
    $position = filter_input(INPUT_POST, 'position', FILTER_SANITIZE_STRING);
    $division = filter_input(INPUT_POST, 'division', FILTER_SANITIZE_STRING);
    $party = filter_input(INPUT_POST, 'party', FILTER_SANITIZE_STRING);
    $platform = filter_input(INPUT_POST, 'platform', FILTER_SANITIZE_STRING);
    $status = filter_input(INPUT_POST, 'status', FILTER_SANITIZE_STRING); 

    // Handle file upload for picture
    if (isset($_FILES['picture']) && $_FILES['picture']['error'] == 0) {
        $allowedMimeTypes = ['image/jpeg', 'image/png', 'image/gif'];
        $fileInfo = finfo_open(FILEINFO_MIME_TYPE); // Open a fileinfo resource
        $detectedType = finfo_file($fileInfo, $_FILES['picture']['tmp_name']);
    
        if (in_array($detectedType, $allowedMimeTypes) && $_FILES['picture']['size'] <= 5000000) { // 5MB limit
            $temp_name = $_FILES['picture']['tmp_name'];
            $newFileName = uniqid('candidate_', true) . '.' . pathinfo($_FILES['picture']['name'], PATHINFO_EXTENSION); // Generate new file name
            $ielect = $uplieleoad_path . basename($newFileName);
    
            if (move_uploaded_file($temp_name, $ielect)) {
                $picture = $newFileName; // Store/Use the new file name
            } else {
                $error = "Failed to upload picture.";
            }
        } else {
            $error = "Invalid file type or size too large.";
        }
        finfo_close($fileInfo);
    } else {
        $picture = null; // No file uploaded or an error occurred
    }
    
}
?>


<body>

    <div class="container mt-4">
        <h2>Add Candidate</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">

            
            <div class="mb-3">
                <label for="student_name" class="form-label">Student Name</label>
                <input type="text" class="form-control" id="student_name" name="student_name" required>
            </div>
            <div class="mb-3">
                <label for="position" class="form-label">Position</label>
                <input type="text" class="form-control" id="position" name="position" required>
            </div>
            <div class="mb-3">
                <label for="division" class="form-label">Division</label>
                <input type="text" class="form-control" id="division" name="division" required>
            </div>
            <div class="mb-3">
                <label for="party" class="form-label">Party</label>
                <input type="text" class="form-control" id="party" name="party" required>
            </div>
            <div class="mb-3">
                <label for="platform" class="form-label">Platform</label>
                <input type="text" class="form-control" id="platform" name="platform" required>
            </div>
            <!-- Add field for picture upload if needed -->
            <div class="mb-3">
                <label for="picture" class="form-label">Picture</label>
                <input type="file" class="form-control" id="picture" name="picture" accept="image/*" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Candidate</button>
        </form>
        <?php
        if (!empty($error)) {
            echo "<p class='text-danger mt-3'>$error</p>";
        }
        ?>
    </div>

    <?php require_once("../includes/footer.php"); ?>
</body>

</html>
