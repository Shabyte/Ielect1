<?php
$title = 'Candidacy';
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
            <a href="candidacy.php" class="btn"><i class='bx bxs-left-arrow left-arrow-icon'></i></a>
                <h2 class="card-title text-center mb-4">Add Candidacy</h2>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                    <div class="form-group">
                        <label for="election_title">Election Title:</label>
                        <input type="text" class="form-control" name="election_title" required>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="start_date">Start Date:</label>
                                <input type="date" class="form-control" name="start_date" required>
                            </div>
                            <div class="col-md-6">
                                <label for="end_date">End Date:</label>
                                <input type="date" class="form-control" name="end_date" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="start_time">Start Time:</label>
                                <input type="time" class="form-control" name="start_time" required>
                            </div>
                            <div class="col-md-6">
                                <label for="end_time">End Time:</label>
                                <input type="time" class="form-control" name="end_time" required>
                            </div>
                        </div>
                    </div>
                   
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12 text-center"> 
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                    <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   // Retrieve form data
   $election_title = $_POST["election_title"];
   $start_date = $_POST["start_date"];
   $end_date = $_POST["end_date"]; 
   $start_time = $_POST["start_time"];
   $end_time = $_POST["end_time"];

    try {
        // Create an instance of the Database class
        $database = new Database();
        
        // Call the connect method to establish a connection
        $conn = $database->connect();

        // Prepare the SQL statement
        $sql = "INSERT INTO candidacy (election_title, start_date, end_date, start_time, end_time) 
                VALUES (:election_title, :start_date, :end_date, :start_time, :end_time)";

        // Prepare and execute the SQL statement using PDO
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            ':election_title' => $election_title,
            ':start_date' => $start_date,
            ':end_date' => $end_date,
            ':start_time' => $start_time,
            ':end_time' => $end_time
        ]);
        echo "<script>alert('Candidacy added successfully');</script>";
    } catch(PDOException $e) {
        // Output an error message as a JavaScript alert
        echo "<script>alert('Error: " . $e->getMessage() . "');</script>";
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
