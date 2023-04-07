<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact_habib";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$date = date("Y-m-d");

$sql = "INSERT INTO contact_us (name, email, message, profilecreationdate) 
VALUES ('$name', '$email', '$message', '$date')";

if ($conn->query($sql) === TRUE) {
    $smsg = "Your message has been sent";
    echo "<script type='text/javascript'>alert('$smsg');
    window.location='index.html';
    </script>";
} else {
    $fmsg ="Your message not sent";
    echo "<script type='text/javascript'>alert('$fmsg');
    window.location='index.html';
    </script>";}

$conn->close();
?>