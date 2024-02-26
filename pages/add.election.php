<?php
$title = 'Election';
$election_page = 'active';
require_once("../includes/admin.head.php");
require_once("../classes/database.php");
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

  <!-- main content -->
  <div class="content px-3 container-fluid mw-100 border rounded shadow p-3">
        <div class="card">
            <div class="card-body">
            <a href="election.php" class="btn"><i class='bx bxs-left-arrow left-arrow-icon'></i></a>
                <h2 class="card-title text-center mb-4">Add Election</h2>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                    <div class="form-group">
                        <label for="election_title">Election Title:</label>
                        <input type="text" class="form-control" name="election_title" required>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="date_start">Start Date:</label>
                                <input type="date" class="form-control" name="date_start" required>
                            </div>
                            <div class="col-md-6">
                                <label for="date_end">End Date:</label>
                                <input type="date" class="form-control" name="end_date" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="time_start">Start Time:</label>
                                <input type="time" class="form-control" name="time_start" required>
                            </div>
                            <div class="col-md-6">
                                <label for="time_end">End Time:</label>
                                <input type="time" class="form-control" name="time_end" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="school_year">School Year:</label>
                                <input type="text" class="form-control" name="school_year" required>
                            </div>
                            <div class="col-md-6">
                                <label for="semester">Semester:</label>
                                <select class="form-control" name="semester" required>
                                    <option value="1">1st semester</option>
                                    <option value="2">2nd semester</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12 text-center"> <!-- Use col-md-12 for full width on all devices and text-center to align the button -->
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                    <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   // Retrieve form data
   $election_title = $_POST["election_title"];
   $date_start = $_POST["date_start"];
   $date_end = $_POST["end_date"]; 
   $time_start = $_POST["time_start"];
   $time_end = $_POST["time_end"];
   $school_year = $_POST["school_year"];
   $semester = $_POST["semester"];

    try {
        // Create an instance of the Database class
        $database = new Database();
        
        // Call the connect method to establish a connection
        $conn = $database->connect();

        // Prepare the SQL statement
        $sql = "INSERT INTO election (election_title, date_start, date_end, time_start, time_end, school_year, semester) 
                VALUES (:election_title, :date_start, :date_end, :time_start, :time_end, :school_year, :semester)";

        // Prepare and execute the SQL statement using PDO
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            ':election_title' => $election_title,
            ':date_start' => $date_start,
            ':date_end' => $date_end,
            ':time_start' => $time_start,
            ':time_end' => $time_end,
            ':school_year' => $school_year,
            ':semester' => $semester
        ]);

        // Output a success message
        echo "Election added successfully";
    } catch(PDOException $e) {
        // Output an error message
        echo "Error: " . $e->getMessage();
    }

    // Close the database connection
    $conn = null;
}

?>

                 

                </form>
            </div>
        </div>
    </div>

    
<?php include("../includes/footer.php"); ?>
