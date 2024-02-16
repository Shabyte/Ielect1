<?php
$title = 'Voters list';
$voter_page = 'active';
require_once("../includes/admin.head.php");
?>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

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

        <div class="row px-3">
            <div class="table-responsive">

                <div class="container ">
                    <form action="/your_backend_upload_handler.php" method="post" enctype="multipart/form-data" class="mb-2">
                        <div class="mb-3">
                            <label for="csvFile" class="form-label">Choose a CSV file:</label>
                            <input type="file" class="form-control" id="csvFile" name="csvFile" accept=".csv">
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary">Upload</button>
                        </div>
                    </form>

                    <!-- Search bar -->

                    <!-- Search bar -->

                </div>

                <table id="voter" class="table table-bordered">
                    <thead class="thead text-light">
                        <tr class="table-light">
                            <th>#</th>
                            <th>Voter's id</th>
                            <th>Email</th>
                            <th>Student name</th>
                            <th>Department & Course </th>
                            <th>QR Code</th>
                            <th>OTP</th>
                            <th>Online Status</th>
                            <th>Vote Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($votersArray) {
                            foreach ($votersArray as $item) {
                                $fullName = ucfirst($item['last_name']) . ', ' . ucfirst($item['first_name']);
                                $deptcourse = ucfirst($item['department']) . ', ' . ucfirst($item['course']);
                                ?>
                                <tr>
                                    <td><?= $counter ?></td>
                                    <td><?= $item['email'] ?></td>
                                    <td><?= $item['user_id'] ?></td>
                                    <td><?= $fullName ?></td>
                                    <td><?= $deptcourse?></td>
                                    <td><?= ucfirst($item['online_status']) ?></td>
                                    <td><?= ucfirst($item['vote_status']) ?></td>
                                    <td class="text-center"><a href="position.php?id=<?= $item['id'] ?>"><i class="bi bi-pencil-square"></i></a></td>
                                </tr>
                                <?php
                                $counter++;
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php require_once("../includes/footer.php"); ?>

