<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scdatabase";
$name=$_POST["a_name"];
$code=$_POST["a_code"];
$mobile=$_POST["m_no"];
$email=$_POST["email"];
$address=$_POST["address"];
$charge=$_POST["charge"];
$acheivments=$_POST["acheivments"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO advocates (name, code, mobile_no,email_id,address,charge,acheivments)
VALUES ('$name','$code','$mobile','$email','$address','$charge','$acheivments')";

if ($conn->query($sql) === TRUE) {
header("location:loggedinAdvocate.php");
} else {
    echo"0";
}

$conn->close();
?>