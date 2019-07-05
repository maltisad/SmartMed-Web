<?php
session_start(); // Starting Session 
$error = ''; // Variable To Store Error Message 
if (isset($_POST['submit'])) { 
  if (empty($_POST['username']) || empty($_POST['password'])) { 
    $error = "Username or Password is invalid"; 
  } 
  else{ 
    // Define $username and $password 
    $username = $_POST['username']; 
    $password = $_POST['password']; 
     $usertype=$_POST['usertype'];
    // mysqli_connect() function opens a new connection to the MySQL server. 
    $conn = mysqli_connect("localhost", "root", "", "smartmed"); 
    // SQL query to fetch information of registerd users and finds user match. 
    $query = "SELECT username, password from users where username='".$username."' AND password='".$password."' and usertype='".$usertype."'"; 
    $result=mysqli_query($conn,$query);
  $count = mysqli_num_rows($result); 
  


  if($count==1){
     
  
      $_SESSION['login_user'] = $username;
     if($usertype=="admin"){
    header("location:../admin_master.php");
    }
    else{
      header("location:../../doctors.php");
    }
  }else{
     echo '<script>alert("Incorrect Username or Password")</script>';  
  }
}
}


    // To protect MySQL injection for Security purpose 
   /* $stmt = $conn->prepare($query); 
    $stmt->bind_param("ss", $username, $password,$usertype); 
    $stmt->execute(); 
    $stmt->bind_result($username, $password,$usertype); 
    $stmt->store_result(); 
    if($stmt->fetch()) //fetching the contents of the row { 
      $_SESSION['login_user'] = $username; // Initializing Session 
    header("location: index.php"); // Redirecting To Profile Page 
  } */
 // mysqli_close($conn); // Closing Connection 
 
?>