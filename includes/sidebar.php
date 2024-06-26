<?php

session_start(); // Start the session to access session variables

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
                <span class="item">Candidate</span>
            </a>
        </li>

        <li class="nav-item">
            <a href="../pages/candidate-list.php" class="<?= $candidate_list_page ?>">
                <i class='bx bxs-user-detail'></i>
                <span class="item">Candidate list</span>
            </a>
        </li>
        <div class="accordion flush " id="sidebarMenu">
            <div class="accordion-item">
                <h4 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseElection" aria-expanded="false" aria-controls="collapseElection">
                    <span class="item"><i class='bx bx-cog'></i>Election</span>
                </button>
                </h4>
                    <div id="collapseElection" class="accordion-collapse collapse" aria-labelledby="headingElection" data-bs-parent="#sidebarMenu">
                    <div class="accordion-body">
                        <ul class="nav flex-column">
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
                        <!-- Add more election-related links here if needed -->
                        </ul>
                    </div>
                    </div>
            </div>
        </div>
       
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