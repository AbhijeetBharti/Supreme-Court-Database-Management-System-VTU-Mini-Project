<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scdatabase";
$name=$_POST["name"];
$dob=$_POST["dob"];
$address=$_POST["address"];
$state=$_POST["State"];
$district=$_POST["dis"];
$pincode=$_POST["pco"];
if(isset($_POST['submit'])){
$gender = $_POST['gender'];  //  Displaying Selected Value
}
$ano=$_POST["aadhar"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$csubject=$_POST["casesub"];
$cfdes=$_POST["cfdesc"];
$id=0;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO efile (id, name, dob, address, state, district, pincode, gender, aadharno, phone, email,csubject,cfdetail)
VALUES ('$id','$name','$dob','$address','$state','$district','$pincode','$gender','$ano','$phone','$email','$csubject','$cfdes')";

if ($conn->query($sql) === TRUE) {
    echo  "<script>
     alert('E-Filled Successfully');
     window.location.href='ef.html';
     </script>";
} else {
	/*echo "<script>
     alert('Case already Exist');
     window.location.href='ef.html';
     </script>";
   */
}

$conn->close();
?>