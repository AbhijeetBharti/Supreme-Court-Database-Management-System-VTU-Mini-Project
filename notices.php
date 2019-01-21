<!DOCTYPE html>
<html>
 <link rel="stylesheet" type="text/css" href="css/table.css">
<head>
	<title></title>
</head>
<style type="text/css">
	ul {
    display: block;
    list-style-type: none;
    margin-top: 1em;
    margin-bottom: 1 em;
    margin-left: 0;
    margin-right: 0;
    padding-left: 40px;
}
li {	color: black;
	text-decoration-style: inherit;
	    background: #ebebeb;
}
</style>
<body>
	<div id=".scilist1">
		<table >
  <tr>
    <th>Title</th>
    <th>Body</th>
  </tr>
  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scdatabase";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT title,notice FROM notice";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    
    while($row = $result->fetch_assoc()) {
        echo "<tr><td> " . $row["title"]."</td><td>".$row["notice"]."</td></tr>";
    }
} else {
    echo "0 results";
}
$conn->close();

?> 
</table>
</div>

</body>
</html>