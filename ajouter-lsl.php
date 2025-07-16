<<<<<<< HEAD
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "activities";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $description = $conn->real_escape_string($_POST['description']);


    $targetDir = "uploads/";
    $fileName = basename($_FILES["img"]["name"]);
    $targetFilePath = $targetDir . $fileName;

    if (move_uploaded_file($_FILES["img"]["tmp_name"], $targetFilePath)) {
        $sql = "INSERT INTO activity (img, description) VALUES ('$fileName', '$description')";

        if ($conn->query($sql) === TRUE) {
            header("Location: theastromoteladmin.html");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Error uploading the image.";
    }
}

$conn->close();
?>
=======
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "activities";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $description = $conn->real_escape_string($_POST['description']);


    $targetDir = "uploads/";
    $fileName = basename($_FILES["img"]["name"]);
    $targetFilePath = $targetDir . $fileName;

    if (move_uploaded_file($_FILES["img"]["tmp_name"], $targetFilePath)) {
        $sql = "INSERT INTO activity (img, description) VALUES ('$fileName', '$description')";

        if ($conn->query($sql) === TRUE) {
            header("Location: theastromoteladmin.html");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Error uploading the image.";
    }
}

$conn->close();
?>
>>>>>>> a4717c3d139e6410765664512b6fa36a4822a743
