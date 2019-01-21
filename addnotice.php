<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scdatabase";
$title=$_POST["ntitle"];
$text=$_POST["ntext"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO notice (title,notice)
VALUES ('$title','$text')";

if ($conn->query($sql) === TRUE ) {
    echo  "<script>
     alert('New Recoed Created Successfully');
     window.location.href='anc.html';
     </script>";
} else {
	echo "<script>
     alert('Notice already Exhist');
     window.location.href='anc.html';
     </script>";
   
}

$conn->close();
?>