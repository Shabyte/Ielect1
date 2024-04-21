<?php

$title = 'Dashboard';
$dashboard_page = 'active';
require_once("../includes/admin.head.php");
require_once("../classes/fetch_data.php");

// Fetch total voters and total voted
$total_admins = FetchData::getTotalAdmin();
$total_voters = FetchData::getTotalVoters();
$total_voted = FetchData::getTotalVoted();

// $username = $_SESSION['username'];
?>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- sidebar -->
<?php require_once("../includes/sidebar.php"); ?>
<!-- end sidebar -->

<div class="section">
  <!-- navbar -->
  <div class="top_navbar">
    <?php require_once("../includes/admin-header.php"); ?>
  </div>
  <!-- end navbar -->

  <!-- main content -->
  <div class="content px-3 px-md-5">
    <div class="container mt-3 mt-md-5 mb-3">
    <div class="form-group">
    <label for="school_year">School Year:</label>
    <select class="form-control" name="school_year" required>
        <?php
        // Get the current year
        $currentYear = date("Y");

        // Loop through years starting from the current year and going back 10 years
        for ($i = $currentYear; $i >= $currentYear - 10; $i--) {
            echo "<option value=\"$i\">$i</option>";
        }
        ?>
    </select>
</div>

      <div class="row justify-content-center">
        <!-- Center the cards -->
        <div class="col-md-6 col-lg-4 mb-3">
        <div class="card p-3 mb-2">
            <div class="d-flex justify-content-between">
                <div class="d-flex flex-row align-items-center">
                    <div class="ms-2 c-details">
                        <h6 class="mb-0">Admin</h6>
                    </div>
                </div>
            </div>
            <div class="mt-3 mt-md-2">
                <h5 class="heading"><?php echo $total_admins; ?></h5>
                <p class="text-muted">Total Admin</p>
            </div>
        </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-3">
        <div class="card p-3 mb-2">
            <div class="d-flex justify-content-between">
                <div class="d-flex flex-row align-items-center">
                    <div class="ms-2 c-details">
                        <h6 class="mb-0">Voter</h6>
                    </div>
                </div>
            </div>
            <div class="mt-3 mt-md-2">
                <h5 class="heading"><?php echo $total_voters; ?></h5>
                <p class="text-muted">Total Voter</p>
            </div>
        </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-3">
        <div class="card p-3 mb-2">
            <div class="d-flex justify-content-between">
                <div class="d-flex flex-row align-items-center">
                    <div class="ms-2 c-details">
                        <h6 class="mb-0">Voted</h6>
                    </div>
                </div>
            </div>
            <div class="mt-3 mt-md-2">
                <h5 class="heading"><?php echo $total_voted; ?></h5>
                <p class="text-muted">Total Voted</p>
            </div>
        </div>
</div>

      </div>
    </div>
    <!-- end main content -->

    <!-- pie charts with border -->
    <div class="container border border-primary bg-light rounded p-3">
      <div class="row">
      <div class="col-12 col-md-6 mb-3 mb-md-0 text-center"> <!-- Wrap with text-center class -->
      <canvas id="pieChart1" width="400" height="400"></canvas>
      <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModal">
        User details
      </button>
    </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header float-right">
                <h5>User details</h5>
                <div class="text-right">
                  <i data-dismiss="modal" aria-label="Close" class="fa fa-close"></i>
                </div>
              </div>
              <div class="modal-body">
          


        <div>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Student name</th>
                <th scope="col">Course</th>
                <th scope="col">Department</th>
              </tr>
            </thead>
            <tbody>
            <!-- <?php 
            //  get the data from data base
            
            
            ?> -->
            </tbody>
            </table>
          </div>
        </div>
        <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 text-center"> 
      <canvas id="pieChart2" width="400" height="400"></canvas>
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        User details
      </button>
    </div>
      </div>
    </div>

    <div class="container mt-3 border border-primary bg-light rounded p-3">
      <div class="row">
        <div class="col-12 col-md-6 mb-3 mb-md-0">
          <canvas id="pieChart3" width="400" height="400"></canvas>
        </div>
        
        <div class="col-12 col-md-6">
          <canvas id="pieChart4" width="400" height="400"></canvas>
        </div>
      </div>
    </div>

    <div class="container mt-3 border border-primary bg-light rounded p-3">
      <div class="row">
        <div class="col-12 col-md-6 mb-3 mb-md-0">
          <canvas id="pieChart5" width="400" height="400"></canvas>
        </div>
        <div class="col-12 col-md-6">
          <canvas id="pieChart6" width="400" height="400"></canvas>
        </div>
      </div>
    </div>
  </div>
</div>

<?php require_once("../includes/footer.php"); ?>
