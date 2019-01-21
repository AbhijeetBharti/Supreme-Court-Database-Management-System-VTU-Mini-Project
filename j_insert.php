<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scdatabase";
$c=$_POST["j_case"];
$d=$_POST["j_date"];
$de=$_POST["description"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO judgement (caseno, jd, description)
VALUES ('$c','$d','$de')";

if ($conn->query($sql) === TRUE) {
header("location:loggedinJV.php");
} else {
    echo"0";
}

$conn->close();
?>