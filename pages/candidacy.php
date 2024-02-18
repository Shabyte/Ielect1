<?php
  $title = 'Candidacy';
  $candidacy_page = 'active';
  require_once("../includes/admin.head.php"); 
  ?>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


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
    <div class="content container-fluid mw-100 border rounded shadow p-3">
    <div class="h4 mb-4 text-dark border-bottom border-danger">
      Candidacy
      </div>
      <div id="electionActions" class="p-3">
        <div class="d-grid d-md-block ">
            <a href="./add.election.php" class="btn btn-primary bg-danger border-0 text-light"><i class="bi bi-plus-circle mr-1"></i>Add Candidacy</a>
        </div>
    </div>
      <div class="row px-2">
        <table class="table table-striped table-bordered ">
          <thead class="thead text-light bg-danger">
            <tr>
              <th>Id</th>
              <th>Election</th>
              <th>Time</th>
              <th>Start time</th>
              <th>End time</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
        </table>
        <tbody>
        <!-- <?php
          $result = $db->query("SELECT * FROM voters ORDER BY last_name DESC");

          if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
                  ?>
                  <tr>
                    <td><?php echo $row['voter_id ']; ?></td>
                    <td><?php echo $row['last_name ']; ?></td>
                    <td><?php echo $row['first_name ']; ?></td>
                    <td><?php echo $row['course ']; ?></td>
                    <td><?php echo $row['status ']; ?></td>

                  </tr>
                  <?php
              }
          }else{
            ?>

            <?php
          }
        ?> -->

        </tbody>
      </div>
    </div>
  </div>

  <?php include("../includes/footer.php"); ?>