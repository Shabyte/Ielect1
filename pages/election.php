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
    <div class="h4 mb-4 text-dark border-bottom border-danger">
      Election
    </div>
    <!-- add election btn -->
    <div id="electionActions" class="p-3">
        <div class="d-grid d-md-block ">
            <a href="./add.election.php" class="btn btn-primary bg-danger border-0 text-light"><i class="bi bi-plus-circle mr-1"></i>Add Election</a>
        </div>
    </div>
      <!-- add election btn -->
      <div class="card">
      <div class="table-responsive">
        <table class="table table-striped table-bordered" id="election">
          <thead class="thead text-light bg-danger">
            <tr>
              <th>Id</th>
              <th>Time</th>
              <th>Start time</th>
              <th>End time</th>
              <th>School year</th>
              <th>Semester</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody id="electionTableBody">
         

          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<?php include("../includes/footer.php"); ?>