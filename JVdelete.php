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

$sql = "DELETE triggerjudgement, judgement FROM triggerjudgement INNER JOIN judgement ON triggerjudgement.cno =judgement.caseno   WHERE triggerjudgement.cno=$code ";

if ($conn->query($sql) === TRUE) {
 header('Location: loggedinJV.php');
} else {
    echo"0";
}

$conn->close();
?>