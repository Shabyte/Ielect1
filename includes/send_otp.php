<?php

// Include database configuration file
require_once("../classes/database.php");

// Function to generate OTP
function generateOTP() {
    $otp = rand(100000, 999999);
    return $otp;
}

// Function to send OTP via SMS
function sendOTP($phoneNumber, $otp) {
    // Replace these variables with your actual API credentials and other details
    $apiKey = "YOUR_API_KEY";
    $senderId = "SENDER_ID";
    $message = "Your OTP is: $otp";
    $url = "https://api.example.com/sendotp?apikey=$apiKey&sender=$senderId&message=$message&to=$phoneNumber";

    // Use cURL to send the SMS
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    return $response;
}

// Connect to the database
$db = new Database();
$conn = $db->connect();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Fetch phone number from the database
    $sql = "SELECT contact_number FROM voters WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $_POST['student_id'], PDO::PARAM_INT);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row) {
        $contact_number = $row['contact_number'];
        // Generate OTP
        $otp = generateOTP();
        // Send OTP via SMS
        $response = sendOTP($contact_number, $otp);
        if ($response === "success") {
            // OTP sent successfully
            echo "OTP sent to $contact_number";
        } else {
            // Failed to send OTP
            echo "Failed to send OTP";
        }
    } else {
        // User not found
        echo "User not found";
    }
}

?>
