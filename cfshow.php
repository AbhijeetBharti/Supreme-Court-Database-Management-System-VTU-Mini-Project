<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/box.css">
    <link rel="stylesheet" type="text/css" href="css/menubar.css">
    <link rel="stylesheet" type="text/css" href="css/pop.css">
    <link rel="stylesheet" type="text/css" href="css/abtbody.css">
    <link rel="stylesheet" type="text/css" href="css/table.css">

<style>  
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
<style>
.drop1 {
    padding: 16px;
    font-size: 16px;
    border: darkblue;
    cursor: pointer;
}

.drop1:hover, .drop1:focus {
    background-color: #2980B9;
}

.drop1 {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color:#191970;
    min-width: 150px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.drop1 a:hover {background-color: #ddd;}

.show {display: block;}
</style>

	<title>Court Fees|Supreme Court Of India</title>
 
</head>
<header>
    	<center><a style="text-decoration:none;color:white" href="home.html"><h1>Supreme Court Of India</h1></a></center>
    	<center><h3>|| यतो धर्मस्ततो जयः ||</h3></center>
</header>

		<div class="slideshow-container">
<div class="mySlides fade">
  
  <img src="img/slide1.jpg" style="width:100%">
  <div class="text"></div>
</div>
<div class="mySlides fade">
  
  <img src="img/slide4.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  
  <img src="img/slide3.jpg" style="width:100%">
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
  <li><a  href="home.html">Home</a></li>
  <li><a  href="nc.html">Notices &amp; Circulars</a></li>
    <li><a  href="do.php">Daily Orders</a></li>
    <li><a   href="ef.html">E-Filling</a></li>

    
    <li style="float:right"> 
    <div class="dropdown">
<a id="drop1" onclick="myFunction()">About The Court</a>
  <div id="myDropdown" class="dropdown-content">
    <a href="history.html">History</a>
    <a href="contact.html">Contact</a>
  </div>
</div>
</li>
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}
// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.drop1')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
</ul>
    <div id="id01" class="modal">
  
  <form class="modal-content animate" action="login.php" method="POST">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="img/supreme.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
        <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw"> <a href="#">Forgot password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
    <body>
    	<div>
        <div class="card">
  <div class="header">
    <h3>Quick Links</h3>
  </div>

  <div class="container">
    <a rel="Click Here" style="text-decoration:none" href="judges.html"><h5>&#9679;Judges</h5></a>
    <a rel="Click Here" style="text-decoration:none" href="advocates.php"><h5>&#9679;Advocates</h5></a>
    <a rel="Click Here" style="text-decoration:none" href="casestatus.html"><h5>&#9679;Case Status</h5></a>
    <a rel="Click Here" style="text-decoration:none" href="jv.php"><h5>&#9679;Judgment & Verdicts</h5></a>
    <a rel="Click Here" style="text-decoration:none" href="cavet.php"><h5>&#9679;Caveat</h5></a>
    <a rel="Click Here" style="text-decoration:none" href="casecategory.php"><h5>&#9679;Case Category</h5></a>
    <a rel="Click Here" style="text-decoration:none;color:red;" href="cfshow.php"><h5>&#9679;Court Fees</h5></a>
      
            </div>
</div>
<div class="desc">
  <h3>Court Fees</h3>
<table >
  <tr>
    <th>Case Type</th>
    <th>Category</th>
      <th>Sub Category</th>
      <th>Fees</th>
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

 $result = mysqli_query($conn, 
     "CALL cfs(@p0)") or die("Query fail: " . mysqli_error($conn));
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td> " . $row["casetype"]."</td><td> " . $row["category"]."</td><td> " . $row["scategory"]."</td><td>".$row["fees"]."</td></tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?> 
  
</table>
</div>
  </div>
</body>
<footer>
  <p>Government Of India &#9679; 2018</p>
</footer>
</html>