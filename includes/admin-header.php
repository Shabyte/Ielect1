<div class="container-fluid">
  <div class="d-flex justify-content-between align-items-center">
    <div class="hamburger">
      <button class="navbar-toggler" type="button" data-bs-target="#sidebar">
        <i class="bi bi-list"></i>
      </button>
      <span class="administration-text ms-2">Administration</span>
    </div>
    <div class="right-side">
      <div class="dropdown">
        <button class="btn dropdown-toggle" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="../images/3.jpeg" class="rounded-circle me-1" alt="User Image" width="50px" height="50px">
          User Name
        </button>
        <div class="dropdown-menu" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Profile</a>
          <a class="dropdown-item" href="../logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>
</div>



<script>var hamburger = document.querySelector(".hamburger");
hamburger.addEventListener("click", function(){
    document.querySelector("body").classList.toggle("active");
})</script>

