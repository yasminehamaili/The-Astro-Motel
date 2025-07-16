<<<<<<< HEAD
<?php
$servername = "localhost";
$username = "root";  
$password = "";     
$dbname = "login"; 

$conn = new mysqli($servername, $username, $password, $dbname);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    
    $sql = "SELECT * FROM clientsinfo WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if ($pass=='motel2025') {
            echo "<script>
            alert('Hello!admin');
            window.location.href = 'theastromoteladmin.html'; 
            </script>";
};
        } else {
            echo'
            <script>
            alert(" incorrect password");
            window.location.href = "theastromotel.html"; 
            </script>';
        }
        }
 else {
        echo"
<script>
            alert('user not existe');
            window.location.href = 'theastromotel.html'; 
            </script>";
        };

?>

=======
<?php
$servername = "localhost";
$username = "root";  
$password = "";     
$dbname = "login"; 

$conn = new mysqli($servername, $username, $password, $dbname);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    
    $sql = "SELECT * FROM clientsinfo WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if ($pass=='motel2025') {
            echo "<script>
            alert('Hello!admin');
            window.location.href = 'theastromoteladmin.html'; 
            </script>";
};
        } else {
            echo'
            <script>
            alert(" incorrect password");
            window.location.href = "theastromotel.html"; 
            </script>';
        }
        }
 else {
        echo"
<script>
            alert('user not existe');
            window.location.href = 'theastromotel.html'; 
            </script>";
        };

?>

>>>>>>> a4717c3d139e6410765664512b6fa36a4822a743
