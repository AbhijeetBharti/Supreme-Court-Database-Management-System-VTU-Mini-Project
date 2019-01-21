<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scdatabase";
$cno=$_POST["cno"];
$slci=$_POST["slci"];
$dno=$_POST["dno"];
$ctitle=$_POST["ctitle"];
$pname=$_POST["pname"];
$rname=$_POST["rname"];
$fees=$_POST["cfees"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO caveat (cavno,slci,diaryno,cause,padvo,radvo,cfees)
VALUES ('$cno','$slci','$dno','$ctitle','$pname','$rname','$fees')";

if ($conn->query($sql) === TRUE ) {
    echo  "<script>
     alert('New Recoed Created Successfully');
     window.location.href='loggedincaveat.html';
     </script>";
} else {
	echo "<script>
     alert('Case already Exhist');
     window.location.href='loggedincaveat.html';
     </script>";
   
}

$conn->close();
?>