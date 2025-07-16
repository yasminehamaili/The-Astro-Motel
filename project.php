<<<<<<< HEAD
<?php
$servername = "localhost";
$username = "root";  
$password = "";     
$dbname = "contact"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullname = mysqli_real_escape_string($conn, $_POST[data['name']]);
    $email = mysqli_real_escape_string($conn, $_POST[data['email']]);   
     $subject= mysqli_real_escape_string($conn, $_POST[data['subject']]);
     $message= mysqli_real_escape_string($conn, $_POST[data['message']]);

   
    
    $sql = "INSERT INTO info (name,email,subject,message) 
            VALUES ('$fullname', '$email', '$subject', '$message')";
}

    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('Contact successful!');
                window.location.href = 'index1.html'; 
                </script>";
    } else {
        echo "<script>
                alert('Error: " . $conn->error . "');
                window.location.href = 'index1.html';
                </script>";
    }


$conn->close();
?>

=======
<?php
$servername = "localhost";
$username = "root";  
$password = "";     
$dbname = "contact"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullname = mysqli_real_escape_string($conn, $_POST[data['name']]);
    $email = mysqli_real_escape_string($conn, $_POST[data['email']]);   
     $subject= mysqli_real_escape_string($conn, $_POST[data['subject']]);
     $message= mysqli_real_escape_string($conn, $_POST[data['message']]);

   
    
    $sql = "INSERT INTO info (name,email,subject,message) 
            VALUES ('$fullname', '$email', '$subject', '$message')";
}

    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('Contact successful!');
                window.location.href = 'index1.html'; 
                </script>";
    } else {
        echo "<script>
                alert('Error: " . $conn->error . "');
                window.location.href = 'index1.html';
                </script>";
    }


$conn->close();
?>

>>>>>>> a4717c3d139e6410765664512b6fa36a4822a743
