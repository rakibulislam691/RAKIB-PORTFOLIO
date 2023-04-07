<!--Database Connection -->
<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="contact_habib";

//Create Connection
$conn=mysqli_connect($servername,$username,$password,$dbname);

//Check Connection
if(!$conn){
    die("Connection Failed:".mysqli_connect_error());
}

?>



