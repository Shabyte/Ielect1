<!DOCTYPE html>
<?php
$title = 'Admin-Account';
$admin_page = 'active';
require_once("../includes/admin.head.php");
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
    <div class="content px-3 container-fluid mw-100 border rounded shadow p-3">
        <div class="card">
            <div class="card-body">
            <a href="position.php" class="btn"><i class='bx bxs-left-arrow left-arrow-icon'></i></a>
        <h2 class="text-center">Add Admin</h2>

        <form id="adminForm" action="process.admin.php" method="post">
            
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <label for="admin_id">Position:</label>
                        <input type="text" class="form-control" id="admin_id" name="admin_id" required>
                    </div>
                    <div class="col-md-6">
                        <label for="userName">Maximum Vote:</label>
                        <input type="text" class="form-control" id="userName" name="userName" required>
                    </div>
                </div>
            </div>

         

           

            <div class="form-group d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Add Admin</button>
            </div>
        </form>
    </div>
        </div>
        </div>
</div>

<?php require_once("../includes/footer.php"); ?>
