<?php
// Database connection
$servername = "localhost";
$username = "root"; // default XAMPP username
$password = ""; // default XAMPP password
$dbname = "photo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = $_POST['name'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$venue = $_POST['venue'];
$date = $_POST['date'];
$event_subject = $_POST['event_subject'];
$message = $_POST['message'];

// Insert data into table
$sql = "INSERT INTO enquiry (name, email, telephone, venue, date, event_subject, message)
        VALUES ('$name', '$email', '$telephone', '$venue', '$date', '$event_subject', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>
