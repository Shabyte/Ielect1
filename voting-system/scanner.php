<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/scanner.css">
	<title>QR Code Scanner / Reader</title>
</head>

<body>
    <!-- Navbar Starts Here -->
    <nav class="custom-navbar">
        <div class="nav-container">
            <div class="logo-container">
                <img src="images/wmsulogo.png" alt="i-Elect Logo Placeholder" class="logo">
                <span class="logo-text">i-Elect</span>
            </div>
            <div class="nav-links">
                <a href="homepage.php" class="nav-link">HOME</a>
                <a href="scanner.php" class="active-2">VOTE</a>
                <a href="#" class="nav-link">CANDIDACY</a>
                <a href="aboutus.php" class="nav-link">ABOUT US</a>
</nav>
    <!-- Navbar Ends Here -->
    <div class="pgqr">
        <p><strong>Step 1. QR Code </strong>(given by assigned voting adviser)</p>
    </div>

    <!-- QR Code Body Starts Here -->
	<div class="container">
		<h1>Scan QR Codes</h1>
		<div class="section">
			<div id="my-qr-reader">
			</div>
		</div>
	</div>

    <script>
        // script.js file

function domReady(fn) {
	if (
		document.readyState === "complete" ||
		document.readyState === "interactive"
	) {
		setTimeout(fn, 1000);
	} else {
		document.addEventListener("DOMContentLoaded", fn);
	}
}

domReady(function () {

	// If found you qr code
	function onScanSuccess(decodeText, decodeResult) {
		alert("You Qr is : " + decodeText, decodeResult);
	}

	let htmlscanner = new Html5QrcodeScanner(
		"my-qr-reader",
		{ fps: 10, qrbos: 250 }
	);
	htmlscanner.render(onScanSuccess);
});
    </script>

<script
		src="https://unpkg.com/html5-qrcode">
	</script>
	<script src="script.js"></script>

    <!-- QR Code Body Ends Here-->
</body>

</html>
