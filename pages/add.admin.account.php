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
            <a href="admin-account.php" class="btn"><i class='bx bxs-left-arrow left-arrow-icon'></i></a>
        <h2 class="text-center">Add Admin</h2>

        <form id="adminForm" action="process.admin.php" method="post">
            
            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <label for="admin_id">AdminID:</label>
                        <input type="text" class="form-control" id="admin_id" name="admin_id" required>
                    </div>
                    <div class="col-md-6">
                        <label for="userName">UserName:</label>
                        <input type="text" class="form-control" id="userName" name="userName" required>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                <div class="col-md-6">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" required minlength="8" maxlength="8">
                </div>
                    <div class="col-md-6">
                        <label for="department">Department:</label>
                        <select class="form-control" id="department" name="department" required>
                            <option value="Information Technology">Information Technology</option>
                            <option value="CS">Computer Science</option>
                            <option value="CL">College Of Law</option>
                            <option value="CN">College Of Nursing</option>
                            <!-- Add more options as needed -->
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-6">
                        <label for="course">Course:</label>
                        <select class="form-control" id="course" name="course">
                            <option value="Computer Science and Engineering">Computer Science and Engineering</option>
                            <option value="ITM">Information Technology Management</option>
                            <option value="CL">College Of Law</option>
                            <!-- Add more options as needed -->
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="role">Role:</label>
                        <select class="form-control" id="role" name="role" required>
                            <option value="sub-admin">Sub-admin</option>
                            <option value="moderator">Moderator</option>
                            <option value="superadmin">Superadmin</option>
                        </select>
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
