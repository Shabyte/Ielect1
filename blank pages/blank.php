
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Election - iElect</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          <h4>Create Election</h4>
        </div>
        <div class="card-body">
          <?php if ($election_created): ?>
            <div class="alert alert-success" role="alert">
              Election created successfully! <a href="dashboard.php" class="alert-link">Go to Dashboard</a>
            </div>
          <?php endif; ?>
          
          <form action="create_election.php" method="post">
            <div class="form-group">
              <label for="election_name">Election Name:</label>
              <input type="text" class="form-control" id="election_name" name="election_name" required>
            </div>
            <button type="submit" class="btn btn-primary">Create Election</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
