<?php
$title = 'Dashboard';
$dashboard_page = 'active';
require_once("../includes/admin.head.php");
// $username = $_SESSION['username'];
?>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- sidebar -->
<?php require_once("./mod.sidebar.php"); ?>
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

      <div class="row justify-content-center">
        <!-- Center the cards -->
        <div class="col-md-6 col-lg-4 mb-3">
          <div class="card p-3 mb-2">
            <div class="d-flex justify-content-between">
              <div class="d-flex flex-row align-items-center">
                <div class="ms-2 c-details">
                  <h6 class="mb-0">Voters</h6>
                </div>
              </div>
            </div>
            <div class="mt-3 mt-md-5">
              <h5 class="heading">100</h5>
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
            <div class="mt-3 mt-md-5">
              <h5 class="heading">100</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end main content -->

    <!-- pie charts with border -->
    <div class="container border border-primary bg-light rounded p-3">
      <div class="row">
        <div class="col-12 col-md-6 mb-3 mb-md-0">
          <canvas id="pieChart1" width="400" height="400"></canvas>
          <button>result 1</button>
          <button>result 2</button>
        </div>
        <div class="col-12 col-md-6">
          <canvas id="pieChart2" width="400" height="400"></canvas>
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
