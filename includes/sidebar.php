<?php
session_start(); // Start the session to access session variables

// Check if the user is logged in and has the necessary role ( moderator)
if (isset($_SESSION['role']) && $_SESSION['role'] == 'moderator') {
    $dashboard_page = ""; 
    $voter_page = ""; 
    $history_page = "";
    $report_page = "";

    // Set the active class for the current page based on the URL
    $currentPage = basename($_SERVER['PHP_SELF']);
    switch ($currentPage) {
        case 'dashboard.php':
            $dashboard_page = "active";
            break;
        case 'voter.php':
            $voter_page = "active";
            break;
        case 'history.php':
            $history_page = "active";
            break;
        case 'report.php':
            $report_page = "active";
            break;
    }
}
?>
<?php
// Check if the user is logged in and has the necessary role (sub-admin)
if (isset($_SESSION['role']) && $_SESSION['role'] == 'sub-admin') {
    $dashboard_page = ""; 
    $voter_page = ""; 
    $candidate_page = ""; 
    $election_page = ""; 
    $candidacy_page = "";
    $party_page = ""; 
    $position_page = "";
    $history_page = ""; 

    // Set the active class for the current page based on the URL
    $currentPage = basename($_SERVER['PHP_SELF']);
    switch ($currentPage) {
        case 'dashboard.php':
            $dashboard_page = "active";
            break;
        case 'voter.php':
            $voter_page = "active";
            break;
        case 'candidate.php':
            $candidate_page = "active";
            break;
        case 'election.php':
            $election_page = "active";
            break;
        case 'candidacy.php':
            $candidacy_page = "active";
            break;
        case 'party.php':
            $party_page = "active";
            break;
        case 'position.php':
            $position_page = "active";
            break;
        case 'history.php':
            $history_page = "active";
            break;
    }
}
?>


<div class="container-fluid">
  <div class="row">
    <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block sidebar shadow">
      <div class="logo">
        <img src="../images/wmsu-logo.png" alt="">
        <h3>I-elect</h3>
      </div>

      <ul class="nav flex-column">
        <li class="nav-item">
            <a href="../pages/dashboard.php" class="nav-link <?= $dashboard_page ?>">
                <i class="bi bi-grid-1x2-fill"></i>
                <span class="item">Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a href="../pages/admin-account.php"  class="nav-link <?= $admin_page ?>">
            <i class="bi bi-person-fill-lock"></i>
                <span class="item">Admin account</span>
            </a>
        </li>

        
        <li class="nav-item">
            <a href="../pages/voter.php" class="<?= $voter_page ?>">
                <i class="bi bi-people-fill"></i>
                <span class="item">Voters</span>
            </a>
        </li>

        <li class="nav-item">
            <a href="../pages/candidate.php" class="<?= $candidate_page ?>">
                <i class='bx bxs-user-detail'></i>
                <span class="item">Candidate list</span>
            </a>
        </li>

        <li class="nav-item">
            <a href="../pages/election.php" class="<?= $election_page ?>">
                <i class="bi bi-receipt-cutoff"></i>
                <span class="item">Election</span>
            </a>
        </li>
        
        <li class="nav-item">
            <a href="../pages/candidacy.php" class="<?= $candidacy_page ?>" >
                <i class="bi bi-archive-fill"></i>
                <span class="item">Candidacy</span>
            </a>
        </li>

        <li class="nav-item">
            <a href="../pages/party.php" class="<?= $party_page ?>">
                <i class='bx bxs-parking'></i>
                <span class="item">Party</span>
            </a>
        </li>

        <li class="nav-item">
            <a href="../pages/position.php" class="<?= $position_page ?>">
                <i class="bi bi-flag-fill"></i>
                <span class="item">Position</span>
            </a>
        </li>

        <li class="nav-item">
            <a href="../pages/history.php" class="<?= $history_page ?>">
                <i class="bi bi-file-earmark-bar-graph-fill"></i>
                <span class="item">History</span>
            </a>
        </li>
        
        <li class="nav-item">
            <a href="../pages/report.php" class="<?= $report_page ?>">
                <i class="bi bi-graph-up"></i>
                <span class="item">Reports</span>
            </a>
        </li>
        </ul>
    </nav>
</div>
</div>