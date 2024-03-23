<?php
$title = 'Edit Election';
$election_page = 'active';
require_once("../includes/admin.head.php");
require_once("../classes/database.php");

// Check if the admin ID is provided in the URL
if (!isset($_GET['id']) || empty($_GET['id'])) {
    // Redirect to the admin account page if ID is not provided
    header("Location: admin-account.php");
    exit();
}

// Get the admin ID from the URL
$admin_id = $_GET['id'];

// Retrieve admin details from the database based on the ID
$database = new Database();

try {
    // Establish a database connection
    $conn = $database->connect();

    // Prepare SQL statement to fetch admin details by ID
    $sql = "SELECT * FROM adminusers WHERE id = :id";

    // Execute SQL statement using PDO
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $admin_id);
    $stmt->execute();

    // Fetch admin details
    $admin = $stmt->fetch(PDO::FETCH_ASSOC);

    // Check if the admin exists
    if (!$admin) {
        // Redirect to the admin account page if admin is not found
        header("Location: admin-account.php");
        exit();
    }
} catch(PDOException $e) {
    // Output an error message
    echo "Error: " . $e->getMessage();
}

// Initialize success message variable
$success_message = '';

// Process form submission if POST request is received
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST["username"];
    $password = $_POST["password"]; 
    $role = $_POST["role"];
    $department = $_POST["department"];
    $course = $_POST["course"];
    
    try {
        // Prepare SQL statement to update admin details
        $sql = "UPDATE adminusers SET username = :username, password = :password, 
                role = :role, department = :department, course = :course WHERE id = :id";

        // Execute SQL statement using PDO
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            ':username' => $username,
            ':password' => $password,
            ':role' => $role,
            ':department' => $department,
            ':course' => $course,
            ':id' => $admin_id
        ]);

        // Set success message
        $success_message = "Admin updated successfully";
    } catch(PDOException $e) {
        // Output an error message
        echo "Error: " . $e->getMessage();
    }

    // Close the database connection
    $conn = null;
}
?>

<!-- Include sidebar -->
<?php include("../includes/sidebar.php"); ?>

<!-- Navbar -->
<div class="section">
    <div class="top_navbar">
        <?php include("../includes/admin-header.php"); ?>
    </div>
    <!-- End navbar -->

    <div class="container-fluid">
        <div class="row">
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="col-12 col-lg-6 d-flex justify-content-between align-items-center">
                    <h2 class="h3 brand-color pt-3 pb-2">Edit Admin</h2>
                    <a href="admin-account.php" class="text-primary text-decoration-none"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
                </div>
                <div class="col-12 col-lg-6">
                    <form method="post" action="">
                        <div class="mb-2">
                            <label for="username" class="form-label">Username:</label>
                            <input type="text" class="form-control" id="username" name="username" required value="<?php echo isset($admin['username']) ? $admin['username'] : ''; ?>">
                        </div>
                        <div class="mb-2">
                            <label for="password" class="form-label">Password:</label>
                            <input type="password" class="form-control" id="password" name="password" required minlength="8" maxlength="8">
                        </div>
                        <div class="mb-2">
                            <label for="role" class="form-label">Role:</label>
                            <select class="form-control" id="role" name="role" required>
                                <option value="sub-admin" <?php echo isset($admin['role']) && $admin['role'] == 'sub-admin' ? 'selected' : ''; ?>>Sub-admin</option>
                                <option value="moderator" <?php echo isset($admin['role']) && $admin['role'] == 'moderator' ? 'selected' : ''; ?>>Moderator</option>
                                <option value="superadmin" <?php echo isset($admin['role']) && $admin['role'] == 'superadmin' ? 'selected' : ''; ?>>Superadmin</option>
                            </select>
                        </div>
                        <div class="mb-2">
                            <label for="department">Department:</label>
                            <select class="form-control" id="department" name="department" required>
                                <option value="IT">Information Technology</option>
                                <option value="CS">Computer Science</option>
                                <option value="CL">College Of Law</option>
                                <option value="CN">College Of Nursing</option>
                                <!-- Add more options as needed -->
                            </select>
                        </div>
                        <div class="mb-2">
                            <label for="course" class="form-label">Course:</label>
                            <select class="form-control" id="course" name="course">
                                <option value="CSE" <?php echo isset($admin['course']) && $admin['course'] == 'CSE' ? 'selected' : ''; ?>>Computer Science and Engineering</option>
                                <option value="ITM" <?php echo isset($admin['course']) && $admin['course'] == 'ITM' ? 'selected' : ''; ?>>Information Technology Management</option>
                                <option value="CL" <?php echo isset($admin['course']) && $admin['course'] == 'CL' ? 'selected' : ''; ?>>College Of Law</option>
                                <!-- Add more options as needed -->
                            </select>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Update Admin</button>
                        </div>
                    </form>
                    <?php if (!empty($success_message)) : ?>
                        <div class="alert alert-success mt-3" role="alert">
                            <?php echo $success_message; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </main>
        </div>
    </div>
</div>

<!-- Include footer -->
<?php include("../includes/footer.php"); ?>
