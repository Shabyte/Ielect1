<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>I - ELECT</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

  <style>
    
    body {
      z-index: 1000;
 
        }    
        .top-bar {
    color: #fff;
    padding: 3px 0; 
    position: fixed;
    top: 0;
    width: 100%;
    transition: top 0.3s ease, background-position 0.3s ease; 
    z-index: 1000;
    background: maroon;

    }

    .top-bar.scrolled {
    background-color: #333; 
    }

    .navbar-brand {
    font-size: 24px;
    font-weight: bold;
    }

    .navbar-nav .nav-link {
    color: #867070;
    font-size: 18px;
    padding: 10px 15px;
    transition: color 0.3s ease;
    }

.navbar-nav .nav-link {
    color: white;
    font-weight: bold;
}

.navbar-nav .nav-link:hover {
    color: red;
}

  </style>
</head>
<body>
  
<div class="top-bar" id="topBar">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark">
      <!-- change lang in logo -->
      <div class="logo">
        <img src="wmsu.png" alt="Logo" style="width: 50px; height: 50px; margin-right: 20px;">
    </div>
      <a class="navbar-brand" href="#">i-Elect</a>
     
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#about-me">home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#skills">Vote</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#projects">Candidacy</a>
          </li>
          <div class="dropdown">
          <li class="nav-item">
            <a class="nav-link dropdown-toggle" href="#blog" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                About Us
              </a>  
        
          <ul class="dropdown-menu">
            <li><button class="dropdown-item" type="button">Vision and mission</button></li>
            <li><button class="dropdown-item" type="button">Our Team</button></li>
            <li><button href="#contact"class="dropdown-item" type="button">Contact Us</button></li>
          </ul>
        </li>
        </div>
        
          <div class="dropdown">
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="dropdown" href="#account">
                <i class="bi bi-person-circle"></i>
            </a>
                <ul class="dropdown-menu">
                  <li><button class="dropdown-item" type="button">Profile</button></li>
                  <li><button class="dropdown-item" type="button">Notifications</button></li>
                  <li><button class="dropdown-item" type="button">Logout</button></li>
                </ul>
              </div>
            </li>
            </div>
        </div>
        </div>
        </div>
    </div>
    </div>    
</div>
     
        <style>
             .bi-person-circle{
                font-size:25px;

            }
                .navbar-nav .nav-item{
                 margin: 0px auto;
                 padding: 10px 10px;
                }
        </style>
              
      <div class="section" id="team">
        <div class="container">
            <h1 class="cute" style="margin-left: 80px!important;">MY PROFILE</h1>
            <div class="team-section">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                          <div class="team-member">
                            <img id="profileImagePreview" src="https://apanthersfatherbookoneandapanthersfatherbooktwo.files.wordpress.com/2020/08/pexels-photo-157465.jpeg" style="height: 200px; width: 200px;" alt="Team Member 1">
                            <p>cute</p>
                                <span>pro manager</span>
                                <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#uploadModal">Upload Image</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>

    <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="uploadModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="uploadModalLabel">Upload New Profile Image</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="profileImage">Choose Image</label>
                        <input type="file" class="form-control-file" id="profileImage" onchange="previewImage()">
                    </div>
                </form>
                <div id="previewArea"></div>
                <img id="modalImagePreview" src="" alt="Chosen Image" style="width: 50px; height: 50px;">
            </div>
            
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Upload</button>
              </div>
          </div>
      </div>
    </div>

<style>
  #previewArea img {
      width: 100px;
      height: 100px;
  }
</style>

<script>
function previewImage() {
    var modalImagePreview = document.getElementById("modalImagePreview");
    var profileImagePreview = document.getElementById("profileImagePreview");
    var file = document.getElementById("profileImage").files[0];
    var reader = new FileReader();

    reader.onloadend = function () {
        modalImagePreview.src = reader.result;
        updateProfileImage(reader.result);
    }

    if (file) {
        reader.readAsDataURL(file);
    } else {
        modalImagePreview.src = "";
    }
}

function updateProfileImage(imageSrc) {
    var profileImagePreview = document.getElementById("profileImagePreview");
    profileImagePreview.src = imageSrc;
}
</script>


</script>

        <div class="col-md-7" style="margin-bottom: 20px;">
          <div class="card">
          <div class="team-member">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="voterID">  Voter's Id</label>
                        <input type="text" placeholder="Voter's ID">
                     </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="voterID">  Voter's Id</label>
                        <input type="text" placeholder="Voter's ID">
                     </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="voterID">  Voter's Id</label>
                        <input type="text" placeholder="Voter's ID">
                     </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="voterID">  Voter's Id</label>
                        <input type="text" placeholder="Voter's ID">
                     </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="voterID">  Voter's Id</label>
                        <input type="text" placeholder="Voter's ID">
                     </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="voterID">  Voter's Id</label>
                        <input type="text" placeholder="Voter's ID">
                     </div>
                </div>
              </div>
  
  <style>
    .card {
    background: #fff;
      padding: 10px 15px;
      font-weight: 900;
      color: white;
    }
    .card:hover {
      background: #d69191;
      padding: 10px 15px;
      font-weight: 900;
      color: white;
    }


 #team {
    margin-top: 50%;
 }
    .team-section {
      text-align: center;
      padding: 50px 0;
    }

    .team-member {
      display: inline-block;
      margin: 20px;
    }
    .team-member:hover{
      color: black;
    }

    .team-member img {
      width: 150px;
      height: 150px;
      border-radius: 50%;
    }

    .team-member p {
      margin-top: 10px;
      font-size: 18px;
      font-weight: bold;
    }

    .team-member span {
      display: block;
      font-size: 16px;
      color: #777;
    }
  </style>
        </ul>
      </div>
    </nav>
  </div>
</div>
</div>

<style>
    .contact .card{
        border-radius: 30px 30px;
        margin: 20px auto;
    }

    .contact .container .contact-us{
        padding: 20px 10px;
    }
    
</style>


  <div class="top-bar"></div>

  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 
</script>
  <style>
  </style>
</body>
</html>
