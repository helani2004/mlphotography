<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "malcome";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO responses (enquiry_id, response) VALUES (?, ?)");
$stmt->bind_param("is", $enquiry_id, $response);

// Set parameters and execute
$enquiry_id = $_POST['enquiry_id'];
$response = $_POST['response'];
$stmt->execute();

echo "Response recorded successfully";

$stmt->close();
$conn->close();
?>
