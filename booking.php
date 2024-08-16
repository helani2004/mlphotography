<?php
$servername = "localhost";
$username = "root"; // Default username for XAMPP
$password = ""; // Default password for XAMPP
$dbname = "photo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $event = $_POST['event'];
    $venue = $_POST['venue'];

    $sql = "INSERT INTO urgent(name,email,telephone,event,venue)VALUES('$name', '$email', '$telephone', '$event', '$venue')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location: index.html");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>