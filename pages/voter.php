<?php
$title = 'Voters list';
$voter_page = 'active';
require_once("../includes/admin.head.php");
require_once("../classes/voter.class.php");

// Create an instance of VoterManager
$voterManager = new VoterManager();

// Pagination variables
$recordsPerPage = 10;
$totalVoters = count($voterManager->getVotersArray()); 
$totalPages = ceil($totalVoters / $recordsPerPage);
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
// Calculate the offset for the SQL query
$offset = ($currentPage - 1) * $recordsPerPage;

// Get voters data for the current page
$votersArray = $voterManager->getVotersArray($recordsPerPage, $offset);

?>

<!-- sidebar -->
<?php require_once("../includes/sidebar.php"); ?>
<!-- end sidebar -->

<!-- navbar -->
<div class="section">
    <div class="top_navbar">
        <?php require_once("../includes/admin-header.php"); ?>
    </div>
    <!-- end navbar -->

    <!-- main content -->
    <div class="content container-fluid mw-100 border-rounded shadow p-3">
        <div class="h4 mb-4 text-dark border-bottom border-danger">
            Voter's List
        </div>
        <form action="csvhandler.php" method="post" enctype="multipart/form-data" class="mb-2">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <input type="file" class="form-control" id="csvFile" name="csvFile" accept=".csv, .xls, .xlsx, .xlsm, .xlsb, .xml, .ods, .prn, .txt, .tab">
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </div>
                </div>
            </div>
        </form>
        <div class="row px-2">
      <table class="table table-striped table-bordered">
        <thead class="thead text-light bg-danger">
                        <tr class="table-light">
                            <th>#</th>
                            <th>Voter's id</th>
                            <th>Email</th>
                            <th>Student name</th>
                            <th>Password</th>
                            <th>Department & Course </th>
                            <th>QR Code</th>
                            <th>OTP</th>
                            <th>Contact#</th>
                            <th>Online Status</th>
                            <th>Vote Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $counter = ($currentPage - 1) * $recordsPerPage + 1;
                        foreach ($votersArray as $item) {
                            $fullName = ucfirst($item['last_name']) . ', ' . ucfirst($item['first_name']);
                            $deptcourse = ucfirst($item['department']) . ', ' . ucfirst($item['course']);
                            ?>
                            <tr>
                                <td><?= $counter ?></td>
                                <td><?= $item['student_id'] ?></td>
                                <td><?= $item['email'] ?></td>
                                <td><?= $fullName ?></td>
                                <td><?= $item['password_hash'] ?></td>
                                <td><?= $deptcourse ?></td>
                                <td><?= $item['qr_code'] ?></td>
                                <td><?= $item['otp'] ?>
                                    <form action="send_otp.php" method="POST">
                                        <input type="hidden" name="voter_id" value="<?= $item['id'] ?>">
                                        <button type="submit" class="btn btn-primary">Generate OTP</button>
                                    </form>
                                </td>
                                <td><?= $item['contact_number'] ?></td>
                                <td><?= $item['online_status'] ?></td>
                                <td><?= $item['vote_status'] ?></td>
                                <td>
                                    <a href="edit.election.php?id=<?php echo $election['id']; ?>" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="delete.election.php?id=<?php echo $election['id']; ?>" class="btn btn-sm btn-danger">Delete</a>
                                </td>
                            </tr>
                            <?php
                            $counter++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <!-- Pagination -->
           

            <!-- End Pagination -->
        </div>
    </div>
</div>

<?php require_once("../includes/footer.php"); ?>
