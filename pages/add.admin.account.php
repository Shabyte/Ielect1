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
    <div class="content container-fluid mw-100 border-rounded shadow p-3">
            <h2 class="text-center">Add Admin</h2>

            <form id="adminForm" action="process_admin.php" method="post">
        <div class="form-group">
            <label for="adminID">AdminID:</label>
            <input type="text" class="form-control" id="adminID" name="adminID" required>
        </div>

        <div class="form-group">
            <label for="userName">UserName:</label>
            <input type="text" class="form-control" id="userName" name="userName" required>
        </div>

        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>

        <div class="form-group">
            <label for="department">Department:</label>
            <select class="form-control" id="department" name="department" required>
                <option value="IT">Information Technology</option>
                <option value="CS">Computer Science</option>
                <!-- Add more options as needed -->
            </select>
        </div>

        <div class="form-group">
            <label for="course">Course:</label>
            <select class="form-control" id="course" name="course">
                <option value="CSE">Computer Science and Engineering</option>
                <option value="ITM">Information Technology Management</option>
                <!-- Add more options as needed -->
            </select>
        </div>
        <div class="form-group">
            <label for="role">Role:</label>
            <select class="form-control" id="role" name="role" required>
                <option value="sub-admin">Sub-admin</option>
                <option value="moderator">Moderator</option>
                <option value="superadmin">Superadmin</option>
            </select>
        </div>

        <div class="form-group">
            <label for="restrictions">Restrictions:</label>
            <select class="form-control" id="restrictions" name="restrictions[]" multiple>
                <option value="Can add new users">Can add new users</option>
                <option value="Can delete users">Can delete users</option>
                <option value="Can edit user profiles">Can edit user profiles</option>
                <!-- Add more options as needed -->
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Add Admin</button>
    </form>
   
  
<?php require_once("../includes/footer.php"); ?>
