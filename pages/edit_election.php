<?php
$title = 'Edit Election';
$election_page = 'active';
require_once("../includes/admin.head.php");
require_once("../classes/database.php");

// Check if the election ID is provided in the URL
if (!isset($_GET['id']) || empty($_GET['id'])) {
    // Redirect to the election page if ID is not provided
    header("Location: election.php");
    exit();
}

// Get the election ID from the URL
$election_id = $_GET['id'];

// Retrieve election details from the database based on the ID (Assuming you have a method to fetch election details by ID)
// Create an instance of the Database class
$database = new Database();

try {
    // Call the connect method to establish a connection
    $conn = $database->connect();

    // Prepare the SQL statement to fetch election details by ID
    $sql = "SELECT * FROM election WHERE id = :id";

    // Prepare and execute the SQL statement using PDO
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $election_id);
    $stmt->execute();

    // Fetch the election details
    $election = $stmt->fetch(PDO::FETCH_ASSOC);

    // Check if the election exists
    if (!$election) {
        // Redirect to the election page if election is not found
        header("Location: election.php");
        exit();
    }
} catch(PDOException $e) {
    // Output an error message
    echo "Error: " . $e->getMessage();
}

// Process form submission if POST request is received
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $election_title = $_POST["election_title"];
    $date_start = $_POST["date_start"];
    $date_end = $_POST["date_end"]; 
    $time_start = $_POST["time_start"];
    $time_end = $_POST["time_end"];
    $school_year = $_POST["school_year"];
    $semester = $_POST["semester"];

    try {
        // Prepare the SQL statement to update election details
        $sql = "UPDATE election SET election_title = :election_title, date_start = :date_start, date_end = :date_end, 
                time_start = :time_start, time_end = :time_end, school_year = :school_year, semester = :semester WHERE id = :id";

        // Prepare and execute the SQL statement using PDO
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            ':election_title' => $election_title,
            ':date_start' => $date_start,
            ':date_end' => $date_end,
            ':time_start' => $time_start,
            ':time_end' => $time_end,
            ':school_year' => $school_year,
            ':semester' => $semester,
            ':id' => $election_id
        ]);

        // Output a success message
        echo "Election updated successfully";
    } catch(PDOException $e) {
        // Output an error message
        echo "Error: " . $e->getMessage();
    }

    // Close the database connection
    $conn = null;
}
?>

<!-- sidebar -->
<?php include("../includes/sidebar.php"); ?>
<!-- end sidebar -->

<!-- navbar -->
<div class="section">
  <div class="top_navbar">
    <?php include("../includes/admin-header.php"); ?>
  </div>
  <!-- end navbar -->
    <div class="container-fluid">
        <div class="row">
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="col-12 col-lg-6 d-flex justify-content-between align-items-center">
                    <h2 class="h3 brand-color pt-3 pb-2">Edit Election</h2>
                    <a href="election.php" class="text-primary text-decoration-none"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
                </div>
                <div class="col-12 col-lg-6">
                    <form method="post" action="">
                        <div class="mb-2">
                            <label for="election_title" class="form-label">Election Title:</label>
                            <input type="text" class="form-control" id="election_title" name="election_title" required value="<?php echo isset($election['election_title']) ? $election['election_title'] : ''; ?>">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-2">
                                    <label for="date_start" class="form-label">Start Date:</label>
                                    <input type="date" class="form-control" id="date_start" name="date_start" required value="<?php echo isset($election['date_start']) ? $election['date_start'] : ''; ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-2">
                                    <label for="date_end" class="form-label">End Date:</label>
                                    <input type="date" class="form-control" id="date_end" name="date_end" required value="<?php echo isset($election['date_end']) ? $election['date_end'] : ''; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-2">
                                    <label for="time_start" class="form-label">Start Time:</label>
                                    <input type="time" class="form-control" id="time_start" name="time_start" required value="<?php echo isset($election['time_start']) ? $election['time_start'] : ''; ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-2">
                                    <label for="time_end" class="form-label">End Time:</label>
                                    <input type="time" class="form-control" id="time_end" name="time_end" required value="<?php echo isset($election['time_end']) ? $election['time_end'] : ''; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="mb-2">
                            <label for="school_year" class="form-label">School Year:</label>
                            <input type="text" class="form-control" id="school_year" name="school_year" required value="<?php echo isset($election['school_year']) ? $election['school_year'] : ''; ?>">
                        </div>
                        <div class="mb-2">
                            <label for="semester" class="form-label">Semester:</label>
                            <select class="form-control" id="semester" name="semester" required>
                                <option value="1" <?php echo isset($election['semester']) && $election['semester'] == '1' ? 'selected' : ''; ?>>1st semester</option>
                                <option value="2" <?php echo isset($election['semester']) && $election['semester'] == '2' ? 'selected' : ''; ?>>2nd semester</option>
                            </select>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Update Election</button>
                        </div>
                    </form>
                </div>
            </main>
        </div>
    </div>
</main>

<?php include("../includes/footer.php"); ?>
