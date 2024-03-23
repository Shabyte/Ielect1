<?php
$title = 'Candidate';
$candidate_page = 'active';
require_once("../includes/admin.head.php"); 
require_once("../classes/candidate.class.php");
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
  <div class="content container-fluid mw-100 border-rounded shadow p-3">
    <div class="h4 mb-4 text-dark border-bottom border-danger">
      Candidate
    </div>
    <div id="candidateAction" class="p-3">
      <div class="d-grid d-md-block ">
        <a href="./add.candidate.php" class="btn btn-primary bg-danger border-0 text-light"><i class="bi bi-plus-circle mr-1"></i>Add Election</a>
      </div>
    </div>
    <div class="row px-2">
      <table class="table table-striped table-bordered ">
        <thead class="thead text-light bg-danger">
          <tr>
            <th>ID</th>
            <th>Student Name</th>
            <th>Position</th>
            <th>Division</th>
            <th>Party</th>
            <th>Status</th>
            <th>Platform</th>
            <th>Picture</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          // Include database connection
          require_once "../classes/database.php";

          // Query to fetch candidate data from the database
          $db = new Database();
          $connection = $db->connect();
          $sql = "SELECT * FROM candidates";
          $result = $connection->query($sql);

          // Check if there are candidates
          if ($result->rowCount() > 0) {
            // Loop through each row and display candidate data
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
              echo "<tr>";
              echo "<td>" . $row['id'] . "</td>";
              echo "<td>" . $row['student_name'] . "</td>";
              echo "<td>" . $row['position'] . "</td>";
              echo "<td>" . $row['division'] . "</td>";
              echo "<td>" . $row['party'] . "</td>";
              echo "<td>" . $row['status'] . "</td>";
              echo "<td>" . $row['platform'] . "</td>";
              echo "<td><img src='picture" . $row['picture'] . "' alt='Picture' width='100'></td>"; 
              echo "<td>";
              echo "<a href='edit_candidate.php?id=" . $row['id'] . "' class='btn btn-primary'>Edit</a>"; // Edit button
              echo "<a href='delete_candidate.php?id=" . $row['id'] . "' class='btn btn-danger'>Delete</a>"; // Delete button
              echo "</td>";
              echo "</tr>";
            }
          } else {
            echo "<tr><td colspan='9'>No candidates found</td></tr>";
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php include("../includes/footer.php"); ?>
