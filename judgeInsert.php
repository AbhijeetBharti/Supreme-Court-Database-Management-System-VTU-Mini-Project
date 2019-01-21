<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scdatabase";
$name=$_POST["j_id"];
$code=$_POST["j_name"];
$mobile=$_POST["j_designation"];
$email=$_POST["j_dob"];
$address=$_POST["j_doa"];
$charge=$_POST["j_dor"];
$acheivments=$_POST["j_nj"];
$about=$_POST["j_about"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO judges (id,name,designation,dob,doa,dor,nj,about)
VALUES ('$name','$code','$mobile','$email','$address','$charge','$acheivments','$about')";

if ($conn->query($sql) === TRUE) {
header("location:loggedinJudges.php");
} else {
    echo"0";
}

$conn->close();
?>