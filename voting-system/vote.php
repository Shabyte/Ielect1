<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/vote.css">
    <title>Vote</title>
</head>
<body>
<nav class="custom-navbar">
        <div class="nav-container">
            <div class="logo-container">
                <img src="images/wmsulogo.png" alt="i-Elect Logo Placeholder" class="logo">
                <span class="logo-text">i-Elect</span>
            </div>
            <div class="nav-links">
                <a href="homepage.php" class="nav-link">HOME</a>
                <a href="vote.php" class="active-2">VOTE</a>
                <a href="#" class="nav-link">CANDIDACY</a>
                <a href="aboutus.php" class="nav-link">ABOUT US</a>
</nav>
<div class="paragraph-qr">
    <p>Before casting your vote, below are implemented<br> 
    security methods which must be strictly comply:<br></p>
 <ol>
  <li><strong>QR Code</strong>(given by assigned voting adviser)</li>
  <li><strong>OTP Code</strong>(will be issued upon legitimate<br>
  confirmation of the scanned QR code. )</li>
  <button onclick="window.location.href='scanner.php'"><strong>Proceed</strong></button>
</ol> 
</div>
<div class="parent">
<img class=" background-1" src="images/vote.png" width="500" 
     height="450" > 
<img class=" background-2" src="images/bg.png"> 
</div> 
</body>
</html>