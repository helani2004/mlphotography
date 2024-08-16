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
$stmt = $conn->prepare("INSERT INTO urgent_enquiries (name, email, telephone, venue, date, time, subject, message) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssss", $name, $email, $telephone, $venue, $date, $time, $subject, $message);

// Set parameters and execute
$name = $_POST['name'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$venue = $_POST['venue'];
$date = $_POST['date'];
$time = $_POST['time'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();
?>
