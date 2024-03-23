<?php
$title = 'Election';
$election_page = 'active';
require_once("../includes/admin.head.php");
require_once("../classes/election.class.php");

// Instantiate the Election class
$electionObj = new Election();

// Fetch elections from the database
$elections = $electionObj->getElections();
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
        <table class="table table-striped table-bordered" id="election" >
          <thead class="thead text-light bg-danger">
            <tr>
              <th>Id</th>
              
              <th>Election</th>
              <th>Date start</th>
              <th>Date end</th>
              <th>Time Start</th>
              <th>Time end</th>
              <th>School year</th>
              <th>Semester</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody id="electionTableBody">
         
          <?php foreach ($elections as $election): ?>
              <tr>
                <td><?php echo $election['id']; ?></td>
                <td><?php echo $election['election_title']; ?></td>
                <td><?php echo $election['date_start']; ?></td>
                <td><?php echo $election['date_end']; ?></td>
                <td><?php echo date('h:i A', strtotime($election['time_start'])); ?></td>
                <td><?php echo date('h:i A', strtotime($election['time_end'])); ?></td>
                <td><?php echo $election['school_year']; ?></td>
                <td><?php echo $election['semester']; ?></td>
                <td><?php echo $election['status']; ?></td>
                <td>
                    <a href="edit_election.php?id=<?php echo $election['id']; ?>" class="btn btn-sm btn-primary">Edit</a>
                    <a href="delete.election.php?id=<?php echo $election['id']; ?>" class="btn btn-sm btn-danger">Delete</a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
    
   <!-- Pagination -->
<nav aria-label="Page navigation" class="pt-2 d-flex justify-content-end">
  <ul class="pagination">
    <!-- Previous Page Link -->
    <li class="page-item <?php echo $currentPage == 1 ? 'disabled' : ''; ?>">
      <a class="page-link" href="?page=<?php echo $currentPage - 1; ?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>

    <!-- Pagination Elements -->
    <?php for($i = 1; $i <= $totalPages; $i++): ?>
      <li class="page-item <?php echo $currentPage == $i ? 'active' : ''; ?>">
        <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
      </li>
    <?php endfor; ?>

    <!-- Next Page Link -->
    <li class="page-item <?php echo $currentPage == $totalPages ? 'disabled' : ''; ?>">
      <a class="page-link" href="?page=<?php echo $currentPage + 1; ?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>
<!-- End Pagination -->

  </div>
</div>

<?php include("../includes/footer.php"); ?>
