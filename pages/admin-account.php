<?php
$title = 'Admin-Account';
$admin_page = 'active';
require_once("../includes/admin.head.php");
require_once("../classes/admin.class.php");

// Initialize the AdminAccount class
$adminAccount = new AdminAccount();

//fetched the total number of records from your database
$totalRecords = $adminAccount->countAllAdmins(); // Or any method you use to get the total number of admins

// Define the number of records to display per page
$recordsPerPage = 10; // You can adjust this value according to your needs

// Calculate the total number of pages
$totalPages = ceil($totalRecords / $recordsPerPage);

// Initialize currentPage variable
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
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
  <div class="content container-fluid mw-100 border-rounded shadow p-3">
    <div class="h4 mb-4 text-dark border-bottom border-danger">
      Admin account
    </div>

    <!-- button and searchbar for admin -->
    <div class="row px-2 mb-3">
      <div class="col-md-6">
        <a href="./add.admin.account.php" class="btn btn-primary">Add Admin</a>
      </div>
      <div class="col-md-6">
        <!-- Search Bar -->
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="search-btn">
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button" id="search-btn">Search</button>
          </div>
        </div>
      </div>
    </div>
    <!-- end button and searchbar for admin -->

    <div class="row px-2">
      <table class="table table-striped table-bordered">
        <thead class="thead text-light bg-danger">
          <tr>
            <th>id</th>
            <th>Admin id</th>
            <th>Password</th>
            <th>Admin User</th>
            <th>Department</th>
            <th>Course</th>
            <th>Role</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          // Fetch all admins and display in the table
          $admins = $adminAccount->getAllAdmins();
          foreach ($admins as $admin): ?>
              <tr>
                <td><?php echo $admin['id']; ?></td>
                <td><?php echo $admin['admin_id']; ?></td>
                <td><?php echo $admin['password']; ?></td>
                <td><?php echo $admin['username']; ?></td>
                <td><?php echo $admin['department']; ?></td>
                <td><?php echo $admin['course']; ?></td>
                <td><?php echo $admin['role']; ?></td>
                <td><?php echo $admin['status']; ?></td>
                <td>
                    <a href="edit.admin.php?id=<?php echo $admin['id']; ?>" class="btn btn-sm btn-primary">Edit</a>
                    <a href="delete.admin.php?id=<?php echo $admin['id']; ?>" class="btn btn-sm btn-danger">Delete</a>
                </td>
              </tr>
            <?php endforeach; ?>
        </tbody>
      </table>
    </div>

   <!-- Pagination -->
    
    <!-- End Pagination -->


  </div>
</div>

<?php include("../includes/footer.php"); ?>
