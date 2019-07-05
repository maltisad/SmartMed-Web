<?php 
	
	//session_start();
	 $db = mysqli_connect('localhost', 'root', '', 'smartmed');

  if (isset($_POST['submit'])) {

   
    $name = $_POST['name'];
    $email = $_POST['email'];
    $data = $_POST['data'];
     $gender = $_POST['gender'];
     $ch = $_POST['checkbox'];
     $checkbox=implode(' ',$ch);
    $city = $_POST['city'];
    $message = $_POST['message'];
    
   mysqli_query($db, "INSERT INTO contactsubmit (name,email,data,gender,checkbox,city,message) VALUES ('$name', '$email','$data','$gender','$checkbox','$city','$message')"); 
    //$_SESSION['msg'] = " Message saved"; 
    header("location:contact.php");

  }
    /*if (empty($name) || empty($email) || empty($message)){
      header("Location: ../contact.php?submit=empty");
      exit();
    }else{
      if (!preg_match("/^[a-zA-Z ]*$/", $name)){
        header("Location: ../contact.php?submit=char");
        exit();
      }else{
        if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
          header("Location: ../contact.php?submit=email");
          exit();          
        }
      }else{
          header("Location: ../contact.php?submit=success");
          exit();
      }
      
    }
   } 
  

	  

	//mi shfaq resulsts
	//$results=mysqli_query($db,"SELECT * from contactsubmit");

/*
  $name_error1 = $email_error1 = $data_error1 = $message_error1 = "";
  $name = $email = $data = $city = $message = "";
 
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $name_error1 = "Name is required";
    } else {
    $name = test_input($_POST["name"]);
      
    if(!preg_match("/^[a-zA-Z ]*$/",$name)){
      
      $name_error1 = "Only letters and white space allowed";

      }
    }
  
  if (empty($_POST["email"])) {
    $email_error1 = "Email is required";
    } else {
    $email = test_input($_POST["email"]);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){

      $email_error = "Invalid email format";

      }
  }
  

  if (empty($_POST["message"])) {
    $name_error1 = "Message is required";
    } else {
    $name = test_input($_POST["message"]);
      
    if(!preg_match("/^[\\p{L}\\p{M}\\p{N}\\p{P}\\s{Z}\\r\]{2,1500}+$/u",$message)){
      
      $message_error1 = "Usage of wrong characters";

      }
    }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
  }*/
?>