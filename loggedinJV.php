<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/box.css">
    <link rel="stylesheet" type="text/css" href="css/menubar.css">
    <link rel="stylesheet" type="text/css" href="css/pop.css">
    <link rel="stylesheet" type="text/css" href="css/tab.css">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
   
<script type="text/javascript">
function executeOnSubmit()
{
    alert('Details inserted !')
}


</script>


<style>
    /* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
    </style>
<style> 
    .container1 {
  width:1000px; 
  height: 500px;
        
}

.leftbar {
  width:300px; 
  float:left; 
   margin-top: 0px;
  height: 150px;
}
.centerbar {
  width:1000px; 
  height: 150px; 
  float:center; 
  margin-top: 50px;
  margin-left:300px;
}
.centerbar p {
  color: #ffffff;
  
  padding-top: 10px;
}
header
{
    background-color:#191970;
	padding: 1px;
    font-size: 15px;
    color: white;
}
footer {
    background-color: #191970;
    padding: 20px;
    text-align: center;
    color: white;
    margin-top: 500px;
    
}
</style>

	<title>Supreme Court Of India</title>
 
</head>
<header>
    	<center><h1>Supreme Court Of India</h1></center>
    	<center><h3>|| यतो धर्मस्ततो जयः ||</h3></center>
</header>

		<div class="slideshow-container">
<div class="mySlides fade">
  
  <img src="slide1.jpg" style="width:100%">
  <div class="text"></div>
</div>
<div class="mySlides fade">
  
  <img src="slide4.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  
  <img src="slide3.jpg" style="width:100%">
  <div class="text"></div>
</div>
</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<script>
var slideIndex = 0;
showSlides();
function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 1000); // Change image every 2 seconds
}
</script>
<ul>
  <li><a  href="anc.html">Home</a></li>
  <li><a  href="anc.html">Notices &amp; Circulars</a></li>
    <li><a class="active" href="loggedinJV.php">Daily Orders</a></li>
    <li><a   href="loggedinef.php">E-Filled</a></li>
    <li style="float:right"><a class="active"  href="staffLogIn.html">Log Out</a></li>
</ul>
    
    <body>
<div class="container1">
<div class="leftbar">
<div class="card">
  <div class="header">
    <h3>Quick Links</h3>
  </div>

  <div class="container">
 <a rel="Click Here" style="text-decoration:none" href="loggedinJudges.php"><h5>&#9679;Judges</h5></a>
    <a rel="Click Here" style="text-decoration:none" href="loggedinAdvocate.php"><h5>&#9679;Advocates</h5></a>
    <a rel="Click Here" style="text-decoration:none" href="loggedInCS.php"><h5>&#9679;Case Status</h5></a>
    <a rel="Click Here" style="text-decoration:none;color:red;" href="loggedinJV.php"> <h5>&#9679;Judgements &amp; Verdicts</h5></a>
    <a rel="Click Here" style="text-decoration:none" href="loggedincaveat.html"><h5>&#9679;Caveat</h5></a>
    <a rel="Click Here" style="text-decoration:none" href="loggedinCourtfees.html"><h5>&#9679;Court Fees</h5></a>
  </div>
</div>
    </div>
  

  <div class="centerbar">
      <h1><center>Daily Orders and Judgement &amp; Verdict Details</center> </h1>
      <div class="tab">
  <button1 class="tablinks" onclick="openTab(event, 'Insert')" id="defaultOpen"><center>Insert</center></button1>
  <button1 class="tablinks" onclick="openTab(event, 'Delete')"><center>Delete</center></button1>
</div>

<div id="Insert" class="tabcontent">
 <form action="j_insert.php" method="POST" onsubmit="return executeOnSubmit();"><br>
Case No.:<br><input type="text" name="j_case" required ><br>
Judgement or Order Date:<br><input type="text" name="j_date" placeholder="YYYY-MM-DD" required><br>
Description:<br><input type="text" name="description" required >
<br><br>
         <input type="submit"  /><br><br>
      </form>
</div>

<div id="Delete" class="tabcontent">
  <table >
  <tr>
  <th>Case No.</th>
    <th>Diary No.</th>
      <th>Case Type</th>
      <th>Case Year</th>
      <th>Petitioner Name</th>
      <th>Respondent Name</th>
      <th>Respondent Advocates</th>
      <th>Petitioner Advocates</th>
      <th>Judges</th>
       <th>Judgement or Order Date</th>
       <th>Description</th>
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

$sql = "SELECT triggerjudgement.*,judgement.jd,judgement.description FROM triggerjudgement INNER JOIN judgement ON triggerjudgement.cno = judgement.caseno";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    
    while($row = $result->fetch_assoc()) {
        echo "<tr><td> " . $row["cno"]."</td><td>".$row["diaryno"]."</td><td>".$row["ctype"]."</td><td>".$row["cyear"]."</td><td>".$row["pname"]."</td><td>".$row["rname"]."</td><td>".$row["radvocates"]."</td><td>".$row["padvocates"]."</td><td>".$row["judges"]."</td><td>".$row["jd"]."</td><td>".$row["description"]."</td><td>"." <button onclick=\"location.href='JVDelete.php?id=".$row['cno']."'\">Delete</button></td>"."</td></tr>";
    }
} else {
    echo "0 results";
}
$conn->close();

?> 
  
</table>
  
</div>
      <script>
function openTab(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

      
</div>
        </div>
        
</body>
    



<footer>
  <p>Government Of India &#9679; 2018</p>
</footer>
</html>