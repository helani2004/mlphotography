<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "photo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle image upload
if (isset($_POST['upload'])) {
    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is an actual image or fake image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "<p>File is not an image.</p>";
        $uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "<p>Sorry, file already exists.</p>";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["image"]["size"] > 5000000) { // 5MB limit
        echo "<p>Sorry, your file is too large.</p>";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif") {
        echo "<p>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</p>";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "<p>Sorry, your file was not uploaded.</p>";
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            $sql = "INSERT INTO galleryy (image_path) VALUES ('$target_file')";
            if ($conn->query($sql) === TRUE) {
                echo "<p>The file ". htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.</p>";
            } else {
                echo "<p>Error: " . $sql . "<br>" . $conn->error . "</p>";
            }
        } else {
            echo "<p>Sorry, there was an error uploading your file.</p>";
        }
    }
}

// Handle image update
if (isset($_POST['update'])) {
    $id = $_POST['id'];

    // Get old image path
    $sql = "SELECT image_path FROM galleryy WHERE id = $id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $old_image_path = $row['image_path'];

        // Delete old image file
        if (file_exists($old_image_path)) {
            unlink($old_image_path);
        }

        // Upload new image
        $target_dir = "images/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            // Update database record
            $sql = "UPDATE galleryy SET image_path = '$target_file' WHERE id = $id";
            if ($conn->query($sql) === TRUE) {
                echo "<p>Image has been updated.</p>";
            } else {
                echo "<p>Error: " . $sql . "<br>" . $conn->error . "</p>";
            }
        } else {
            echo "<p>Sorry, there was an error uploading your file.</p>";
        }
    } else {
        echo "<p>Record not found.</p>";
    }
}

// Handle image deletion
if (isset($_POST['delete'])) {
    $id = $_POST['id'];

    // Get image path
    $sql = "SELECT image_path FROM galleryy WHERE id = $id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $image_path = $row['image_path'];

        // Delete image file
        if (file_exists($image_path)) {
            unlink($image_path);
        }

        // Delete database record
        $sql = "DELETE FROM galleryy WHERE id = $id";
        if ($conn->query($sql) === TRUE) {
            echo "<p>Image has been deleted.</p>";
        } else {
            echo "<p>Error: " . $sql . "<br>" . $conn->error . "</p>";
        }
    } else {
        echo "<p>Record not found.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="img/mallogo.png" rel="shortcut icon"/>
    <title>Upload Images</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #185C36;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .upload-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .upload-section input[type="file"] {
            flex: 1;
            margin-right: 10px;
            padding: 5px;
        }

        .upload-section button {
            padding: 5px 10px;
            cursor: pointer;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
        }

        .gallery-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .gallery-item img {
            max-width: 100px;
            max-height: 100px;
            border-radius: 5px;
            margin-right: 20px;
        }

        .gallery-item button {
            padding: 5px 10px;
            cursor: pointer;
            background-color: #2196F3;
            color: white;
            border: none;
            border-radius: 5px;
            margin-right: 5px;
        }

        .gallery-item button.delete {
            background-color: #f44336;
        }

        .footer {
            text-align: right;
            margin-top: 20px;
        }

        .footer a {
            text-decoration: none;
            padding: 10px 20px;
            background-color: #333;
            color: white;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Upload Images</h1>

        <!-- Upload Form -->
        <div class="upload-section">
            <form action="gallery.php" method="post" enctype="multipart/form-data">
                <input type="file" name="image" id="fileInput" required>
                <button type="submit" name="upload">Upload</button>
            </form>
        </div>

        <!-- Display Gallery Items -->
        <?php
        $sql = "SELECT * FROM galleryy";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $id = $row['id'];
                $image_path = $row['image_path'];
                echo '
                <div class="gallery-item">
                    <img src="' . $image_path . '" alt="Image">
                    <div>
                        <!-- Update Form -->
                        <form action="gallery.php" method="post" enctype="multipart/form-data" style="display:inline;">
                            <input type="hidden" name="id" value="' . $id . '">
                            <input type="file" name="image" required>
                            <button type="submit" name="update">Update</button>
                        </form>
                        <!-- Delete Form -->
                        <form action="gallery.php" method="post" style="display:inline;">
                            <input type="hidden" name="id" value="' . $id . '">
                            <button type="submit" name="delete" class="delete">Delete</button>
                        </form>
                    </div>
                </div>';
            }
        } else {
            echo "<p>No images found in the gallery.</p>";
        }
        $conn->close();
        ?>

        <div class="footer">
            <a href="showgallery.php">View Uploaded images</a>
            <a href="index.html">Back</a>
        </div>
    </div>
</body>
</
