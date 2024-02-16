<!-- <div class="col-xl-3 col-md-6 mb-4 py-3">
                <div class="card border-left-primary shadow h-10 py-2">
                   
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Voters</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?php
                            
                            $query = "SELECT id FROM register ORDER BY id";  
                            $query_run = mysqli_query($connection, $query);
                            $row = mysqli_num_rows($query_run);
                            echo '<h4> Total Admin: '.$row.'</h4>';
                        ?>
                    </div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div> -->



<!-- csv file script -->
// Check if a file is uploaded
if (isset($_FILES['csvFile']) && !empty($_FILES['csvFile']['name'])) {
    // Process the uploaded CSV file
    $csvFileName = $_FILES['csvFile']['name'];
    $uploadDirectory = "uploads/"; // Adjust this directory path as needed
    $targetFilePath = $uploadDirectory . basename($csvFileName);

    if (move_uploaded_file($_FILES['csvFile']['tmp_name'], $targetFilePath)) {
        // Parse the CSV file and perform necessary actions
        $data = parseCsvFile($targetFilePath);

        // Display the parsed data
        echo '<div class="alert alert-success">File uploaded successfully.</div>';
        echo '<h3>Parsed Data:</h3>';
        echo '<pre>';
        print_r($data);
        echo '</pre>';

        // Example: Update the database with the parsed data
        updateDatabase($data);

    } else {
        echo '<div class="alert alert-danger">Error uploading file. Please try again.</div>';
    }
}

// Function to parse CSV file
function parseCsvFile($filePath)
{
    $data = []; // Initialize an array to store parsed data

    if (($handle = fopen($filePath, "r")) !== false) {
        // Read each row from the CSV file
        while (($row = fgetcsv($handle, 1000, ",")) !== false) {
            // Add the row data to the $data array
            $data[] = $row;
        }
        fclose($handle); // Close the file handle
    }

    return $data;
}

// Function to update the database
function updateDatabase($data)
{
    // Adjust the database connection details
    $host = "your_db_host";
    $username = "your_db_username";
    $password = "your_db_password";
    $dbname = "your_db_name";

    // Create connection
    $conn = new mysqli($host, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Assume the CSV structure: id, last_name, first_name, course, status
    $sql = "INSERT INTO voters (id, last_name, first_name, course, status) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bind_param("issss", $id, $last_name, $first_name, $course, $status);

    // Loop through each row and insert into the database
    foreach ($data as $row) {
        list($id, $last_name, $first_name, $course, $status) = $row;
        $stmt->execute();
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}


<!-- csv code -->
 <!-- csv file upload -->
        <form action="#" method="post" enctype="multipart/form-data" class="mb-3">
            <div class="input-group ">
                <input type="file" name="csvFile" class="form-control" accept=".csv">
                <button type="submit" class="btn btn-primary">Upload CSV</button>
            </div>
        </form>
        <!-- csv file upload -->