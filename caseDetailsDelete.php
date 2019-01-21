<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scdatabase";
$code = $_GET["id"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "DELETE FROM cs WHERE cno=$code  ";

if ($conn->query($sql) === TRUE) {
 header('Location: loggedInCS.php');
} else {
    echo"0";
}

$conn->close();
?>