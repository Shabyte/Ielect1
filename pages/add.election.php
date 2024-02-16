<?php
$title = 'Admin-Account';
$election_page = 'active';
require_once("../includes/admin.head.php");
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
                <h2 class="card-title mb-4">Add Election</h2>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                    <div class="form-group">
                        <label for="election_title">Election Title:</label>
                        <input type="text" class="form-control" name="election_title" required>
                    </div>

                    <div class="form-group">
                        <label for="start_time">Start Time:</label>
                        <input type="datetime-local" class="form-control" name="start_time" required>
                    </div>

                    <div class="form-group">
                        <label for="end_time">End Time:</label>
                        <input type="datetime-local" class="form-control" name="end_time" required>
                    </div>

                    <div class="form-group">
                        <label for="school_year">School Year:</label>
                        <input type="text" class="form-control" name="school_year" required>
                    </div>

                    <div class="form-group">
                        <label for="semester">Semester:</label>
                        <input type="text" class="form-control" name="semester" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    
<?php include("../includes/footer.php"); ?>
