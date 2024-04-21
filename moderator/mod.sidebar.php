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
            <a href="mod.php" class="nav-link <?= $dashboard_page ?>">
                <i class="bi bi-grid-1x2-fill"></i>
                <span class="item">Dashboard</span>
            </a>
        </li>


        
        <li class="nav-item">
            <a href="voter.php" class="<?= $voter_page ?>">
                <i class="bi bi-people-fill"></i>
                <span class="item">Voters</span>
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