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
$sql = "SELECT * FROM activity WHERE 1=1";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add activity</title>
    <link rel="stylesheet" href="activities.css">
</head>
<body>
<div class="activity-card">
    <form method="post" action="ajouter.php">
    <h2>Add activity</h2>
    <label for="photo-upload" class="photo-label">Add picture</label>
    <input type="file" id="photo-upload" accept="image/*" name="img">
    <label for="title">Title</label>
    <input id="title" type="text" name="title" class="title">
    <label for="activity">activity</label>
    <textarea id="activity" placeholder="..." name="description"></textarea>
    <div class="buttons">
        <a href="theastromoteladmin.html" class="cancel">Cancel</a>
        <a href="theastromoteladmin.html" class="post">Post</a>
    </div>
</form>
</div>
</body>
</html>
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
$sql = "SELECT * FROM activity WHERE 1=1";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add activity</title>
    <link rel="stylesheet" href="activities.css">
</head>
<body>
<div class="activity-card">
    <form method="post" action="ajouter.php">
    <h2>Add activity</h2>
    <label for="photo-upload" class="photo-label">Add picture</label>
    <input type="file" id="photo-upload" accept="image/*" name="img">
    <label for="title">Title</label>
    <input id="title" type="text" name="title" class="title">
    <label for="activity">activity</label>
    <textarea id="activity" placeholder="..." name="description"></textarea>
    <div class="buttons">
        <a href="theastromoteladmin.html" class="cancel">Cancel</a>
        <a href="theastromoteladmin.html" class="post">Post</a>
    </div>
</form>
</div>
</body>
</html>
>>>>>>> a4717c3d139e6410765664512b6fa36a4822a743
