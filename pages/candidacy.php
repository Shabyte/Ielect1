<?php
$title = 'Candidacy';
$candidacy_page = 'active';
require_once("../includes/admin.head.php");
require_once("../classes/candidacy.class.php"); 


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
    <div class="content container-fluid mw-100 border rounded shadow p-3">
        <div class="h4 mb-4 text-dark border-bottom border-danger">
            Candidacy
        </div>
        <div id="electionActions" class="p-3">
            <div class="d-grid d-md-block ">
                <a href="./add.candidacy.php" class="btn btn-primary bg-danger border-0 text-light">
                <i class="bi bi-plus-circle mr-1"></i>Add Candidacy</a>
            </div>
        </div>
        <div class="row px-2">
            <table class="table table-striped table-bordered ">
                <thead class="thead text-light bg-danger">
                    <tr>
                        <th>Id</th>
                        <th>Election</th>
                        <th>Start Date</th>
                        <th>End Date</th>
                        <th>Start time</th>
                        <th>End time</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($candidacy as $candidacy): ?>
                        <tr>
                            <td><?php echo $candidacy['id']; ?></td>
                            <td><?php echo $candidacy['election_title']; ?></td>
                            <td><?php echo $candidacy['start_date']; ?></td>
                            <td><?php echo $candidacy['end_date']; ?></td>
                            <td><?php echo $candidacy['start_time']; ?></td>
                            <td><?php echo $candidacy['end_time']; ?></td>
                            <td><?php echo $candidacy['status']; ?></td>
                            <td>
                                <a href="edit.candidacy.php?id=<?php echo $candidacy['id']; ?>" class="btn btn-sm btn-primary">Edit</a>
                                <a href="delete.candidacy.php?id=<?php echo $candidacy['id']; ?>" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include("../includes/footer.php"); ?>
