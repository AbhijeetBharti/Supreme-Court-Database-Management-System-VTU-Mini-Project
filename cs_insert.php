<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scdatabase";
$cn=$_POST["cno"];
$dn=$_POST["dno"];
$ctype=$_POST["ctype"];
$cyear=$_POST["cyear"];
$pname=$_POST["pname"];
$rname=$_POST["rname"];
$rAd=$_POST["rAd"];
$pAd=$_POST["pAd"];
$judges=$_POST["judges"];
$nh=$_POST["nh"];
$d=$_POST["description"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO cs (cno, diaryno, ctype,cyear,pname,rname,radvocates,padvocates,judges,nh,description)
VALUES ('$cn','$dn','$ctype','$cyear','$pname','$rname','$rAd','$pAd','$judges','$nh','$d')";

if ($conn->query($sql) === TRUE) {
header("location:loggedinCS.php");
} else {
    echo"0";
}

$conn->close();
?>