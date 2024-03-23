<?php
  $title = 'Position';
  $position_page = 'active';
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
    <div class="content container-fluid mw-100 border-rounded shadow p-3">
      <div class="h4 mb-4 text-dark border-bottom border-danger">
     Position
      </div>
      <div class="row px-2">
        <table class="table table-striped table-bordered ">
          <thead class="thead text-light bg-danger">
            <tr>
              <th>Position</th>
              <th>Maximum vote</th>
              <th>Action</th>
            </tr>
          </thead>
        </table>
        <tbody>
       

        </tbody>
      </div>
    </div>
  </div>

  <?php include("../includes/footer.php"); ?>