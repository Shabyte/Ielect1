<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/homepage.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.css"> 
    <title>Homepage</title>
</head>
<body>
    <!--Navbar starts here-->
<nav class="custom-navbar">
        <div class="nav-container">
            <div class="logo-container">
                <img src="images/wmsulogo.png" alt="i-Elect Logo Placeholder" class="logo">
                <span class="logo-text">i-Elect</span>
            </div>
            <div class="nav-links">
                <a href="homepage.php" class="active">HOME</a>
                <a href="vote.php" class="nav-link">VOTE</a>
                <a href="#" class="nav-link">CANDIDACY</a>
                <a href="aboutus.php" class="nav-link">ABOUT US</a>
</nav>
    <!--Navbar ends here-->

    <!--body starts here-->
    <div class="top-container"> 
    <div>
      <div class="form">
        <div class="search">
        <form id="form" role="search">
        <input type="search" id="query" placeholder="Candidate...">
        <button><i class="fa-solid fa-magnifying-glass"></i></button>
        </form>
        </div>
        <div class="time">
        <p>VOTING ENDS:</p> 
        <p id="clock"></p></div>
      </div>
      <div class="data-container">
          <p>DATE:</p>
           <p id="clock"></p>
      </div>
    </div> 
</div> 

 <!--THE FIRST CONTAINER START HERE-->
 <div class="central"><h1>CENTRAL</h1></div>
<div class="candidates-main-1">
    <div class="candidates-card">
        <h3 class="candidates-title">
            PRESIDENT
        </h3>
        <div class="candidates-container">
            <div class="candidate-card">
                <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.freepik.com%2Ffree-vector%2Fportrait-avatar"
                    class="candidate-image" />
                <span class="candidate-name">
                    Aquino, Irene
                </span>
                <span class="candidate-region">
                    USP
                </span>
                <button class="vote-candidate" onclick="window.location.href='profile.php'">
                    View Details
                </button>
            </div>
            <div class="candidate-card">
                <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.freepik.com%2Ffree-vector%2Fportrait-avatar"
                    class="candidate-image" />
                <span class="candidate-name">
                    Aquino, Irene
                </span>
                <span class="candidate-region">
                    USP
                </span>
                <button class="vote-candidate" onclick="window.location.href='profile.php'">
                    View Details
                </button>
            </div>
        </div>
        <button class="view-all-candidates-button" onclick="window.location.href='president.php'">
            View all candidates
        </button>
    </div>
     <!--THE FIRST CONTAINER END HERE-->

    <!--THE SECOND CONTAINER START HERE-->
    <div class="candidates-card">
        <h3 class="candidates-title">
            VICE-PRESIDENT
        </h3>
        <div class="candidates-container">
            <div class="candidate-card">
                <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.freepik.com%2Ffree-vector%2Fportrait-avatar"
                    class="candidate-image" />
                <span class="candidate-name">
                    Aquino, Irene 
                </span>
                <span class="candidate-region">
                    USP
                </span>
                <button class="vote-candidate" onclick="window.location.href='profile.php'">
                    View Details
                </button>
            </div>
            <div class="candidate-card">
                <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.freepik.com%2Ffree-vector%2Fportrait-avatar"
                    class="candidate-image" />
                <span class="candidate-name">
                      Aquino, Irene
                </span>
                <span class="candidate-region">
                    USP
                </span>
                <button class="vote-candidate" onclick="window.location.href='profile.php'">
                   View Details
                </button>
            </div>
        </div>
        <button class="view-all-candidates-button" onclick="window.location.href='vice-president.php'">
            View all candidates
        </button>
    </div>
</div> 
     <!--THE SECOND CONTAINER END HERE-->


     <!--THE THIRD CONTAINER START HERE-->
<div class="local"><h1>LOCAL</h1></div>
<div class="candidates-main-2">
     <div class="candidates-card">
        <h3 class="candidates-title">
            MAYOR
        </h3>
        <div class="candidates-container">
            <div class="candidate-card">
                <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.freepik.com%2Ffree-vector%2Fportrait-avatar"
                    class="candidate-image" />
                <span class="candidate-name">
                    Aquino, Irene 
                </span>
                <span class="candidate-region">
                    USP
                </span>
                <button class="vote-candidate" onclick="window.location.href='profile.php'">
                    View Details
                </button>
            </div>
            <div class="candidate-card">
                <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.freepik.com%2Ffree-vector%2Fportrait-avatar"
                    class="candidate-image" />
                <span class="candidate-name">
                      Aquino, Irene
                </span>
                <span class="candidate-region">
                    USP
                </span>
                <button class="vote-candidate" onclick="window.location.href='profile.php'">
                   View Details
                </button>
            </div>
        </div>
        <button class="view-all-candidates-button" onclick="window.location.href='mayor.php'">
            View all candidates
        </button>
    </div>
     <!--THE THIRD CONTAINER END HERE-->


     <!--THE FOURTH CONTAINER START HERE-->
     <div class="candidates-card">
        <h3 class="candidates-title">
            VICE-MAYOR
        </h3>
        <div class="candidates-container">
            <div class="candidate-card">
                <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.freepik.com%2Ffree-vector%2Fportrait-avatar"
                    class="candidate-image" />
                <span class="candidate-name">
                    Aquino, Irene 
                </span>
                <span class="candidate-region">
                    USP
                </span>
                <button class="vote-candidate" onclick="window.location.href='profile.php'">
                    View Details
                </button>
            </div>
            <div class="candidate-card">
                <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.freepik.com%2Ffree-vector%2Fportrait-avatar"
                    class="candidate-image" />
                <span class="candidate-name">
                      Aquino, Irene
                </span>
                <span class="candidate-region">
                    USP
                </span>
                <button class="vote-candidate" onclick="window.location.href='profile.php'">
                   View Details
                </button>
            </div>
        </div>
        <button class="view-all-candidates-button" onclick="window.location.href='vice-mayor.php'">
            View all candidates
        </button>
    </div>
</div>
     <!--THE FOURTH CONTAINER END HERE-->


     <!--THE FIFTH CONTAINER START HERE-->
     <div class="candidates-main">
     <div class="candidates-card">
        <h3 class="candidates-title">
            SENATORS
        </h3>
        <div class="candidates-container">
            <div class="candidate-card">
                <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.freepik.com%2Ffree-vector%2Fportrait-avatar"
                    class="candidate-image" />
                <span class="candidate-name">
                    Aquino, Irene 
                </span>
                <span class="candidate-region">
                    USP
                </span>
                <button class="vote-candidate" onclick="window.location.href='profile.php'">
                    View Details
                </button>
            </div>
            <div class="candidate-card">
                <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.freepik.com%2Ffree-vector%2Fportrait-avatar"
                    class="candidate-image" />
                <span class="candidate-name">
                      Aquino, Irene
                </span>
                <span class="candidate-region">
                    USP
                </span>
                <button class="vote-candidate" onclick="window.location.href='profile.php'">
                   View Details
                </button>
            </div>
        </div>
        <button class="view-all-candidates-button" onclick="window.location.href='senator.php'">
            View all candidates
        </button>
    </div>
     <!--THE FIFTH CONTAINER END HERE-->


     <!--THE SIXTH CONTAINER START HERE-->
     <div class="candidates-card">
        <h3 class="candidates-title">
            COUNCILORS
        </h3>
        <div class="candidates-container">
            <div class="candidate-card">
                <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.freepik.com%2Ffree-vector%2Fportrait-avatar"
                    class="candidate-image" />
                <span class="candidate-name">
                    Aquino, Irene 
                </span>
                <span class="candidate-region">
                    USP
                </span>
                <button class="vote-candidate" onclick="window.location.href='profile.php'">
                    View Details
                </button>
            </div>
            <div class="candidate-card">
                <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.freepik.com%2Ffree-vector%2Fportrait-avatar"
                    class="candidate-image" />
                <span class="candidate-name">
                      Aquino, Irene
                </span>
                <span class="candidate-region">
                    USP
                </span>
                <button class="vote-candidate" onclick="window.location.href='profile.php'">
                   View Details
                </button>
            </div>
        </div>
        <button class="view-all-candidates-button" onclick="window.location.href='councilor.php'">
            View all candidates
        </button>
    </div>
</div>
<!--THE SIXTH CONTAINER END HERE-->


<script>
// Set the date we're counting down to
var countDownDate = new Date("Jan 5, 2030 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("clock").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("").innerHTML = "EXPIRED";
  }
}, 1000);
</script>

<script src="app.js" type="text/javascript"></script>
</body>
</html>