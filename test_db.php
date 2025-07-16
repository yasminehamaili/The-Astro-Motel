<<<<<<< HEAD
<?php
$conn = mysqli_connect("localhost", "root", "", "inscription");
$sql = "SELECT * FROM logins";
$result = mysqli_query($conn, $sql);

if ($result) {
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo "ID: " . $row["id"]. " - Username: " . $row["user"]. "<br>";
        }
    } else {
        echo "Table is empty";
    }
} else {
    echo "Table not found or error in query";
}
=======
<?php
$conn = mysqli_connect("localhost", "root", "", "inscription");
$sql = "SELECT * FROM logins";
$result = mysqli_query($conn, $sql);

if ($result) {
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo "ID: " . $row["id"]. " - Username: " . $row["user"]. "<br>";
        }
    } else {
        echo "Table is empty";
    }
} else {
    echo "Table not found or error in query";
}
>>>>>>> a4717c3d139e6410765664512b6fa36a4822a743
?>