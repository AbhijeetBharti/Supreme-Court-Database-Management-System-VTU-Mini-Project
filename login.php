<?php

define('DB_SERVER','localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'scdatabase');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = $_POST['uname'];
      $mypassword = $_POST['psw']; 
      
      $sql = "SELECT username FROM login WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
     
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         
         header("location:anc.html");
      }else {
         $error = "Your Login Name or Password is invalid";
         echo "$error";
      }
   }