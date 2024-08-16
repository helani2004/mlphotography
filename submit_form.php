<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database configuration
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
$stmt = $conn->prepare("INSERT INTO users (name, contact, email, username, password) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $name, $contact, $email, $username, $password);

// Set parameters and execute
$name = $_POST['name'];
$contact = $_POST['contact'];
$email = $_POST['Email'];
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash the password for security
$stmt->execute();

$stmt->close();
$conn->close();

// Redirect to client.html
header("Location: client.html");
exit();
?>

