<?php
$servername = "localhost";
$username = "root";  
$password = "";     
$dbname = "payment"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $fullname =  $_POST['fullname'];
    $email =$_POST['email'];
    $address =$_POST['adress'];
    $city =$_POST['city'];
    $state =$_POST['state'];
    $zipcode =$_POST['zipcode'];
    $name_on_card =$_POST['nameoncard'];
    $card_number =$_POST['cardnumber'];
    $exp_month =$_POST['expmonth'];
    $exp_year =$_POST['expyear'];
    $cvv =$_POST['cvv'];
    $room_type =$_POST['room'];
    $room_view =$_POST['view'];
    $activities =$_POST['activities'];
    
    $sql = "INSERT INTO bookings (fullname, email, address, city, state, zipcode, 
            name_on_card, card_number, exp_month, exp_year, cvv, room_type, 
            room_view, activities) 
            VALUES ('$fullname', '$email', '$address', '$city', '$state', '$zipcode', 
            '$name_on_card', '$card_number', '$exp_month', '$exp_year', '$cvv', 
            '$room_type', '$room_view', '$activities')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('Booking successful!');
                window.location.href = '../theastromotel1.html'; 
                </script>";
    } else {
        echo "<script>
                alert('Error: " . $conn->error . "');
                window.location.href = '../theastromotel1.html';
                </script>";
    }
}

$conn->close();
?>
