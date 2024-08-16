<?php
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

$sql = "SELECT * FROM urgent_enquiries";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Check Urgent Enquiries</title>
</head>
<body>
    <h1>Urgent Enquiries</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Telephone</th>
            <th>Venue</th>
            <th>Date</th>
            <th>Time</th>
            <th>Subject</th>
            <th>Message</th>
            <th>Response</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row["id"]."</td>";
                echo "<td>".$row["name"]."</td>";
                echo "<td>".$row["email"]."</td>";
                echo "<td>".$row["telephone"]."</td>";
                echo "<td>".$row["venue"]."</td>";
                echo "<td>".$row["date"]."</td>";
                echo "<td>".$row["time"]."</td>";
                echo "<td>".$row["subject"]."</td>";
                echo "<td>".$row["message"]."</td>";
                echo "<td>
                        <form action='response.php' method='post'>
                            <input type='hidden' name='enquiry_id' value='".$row["id"]."'>
                            <select name='response'>
                                <option value='Accepted'>Accept</option>
                                <option value='Rejected'>Reject</option>
                            </select>
                            <input type='submit' value='Submit'>
                        </form>
                    </td>";
                echo "</tr>";
            }
        }
        ?>
    </table>
</body>
</html>

<?php
$conn->close();
?>
