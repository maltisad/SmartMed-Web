
 <?php  
include 'config.php';

  function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  //define variables and set to empty values
  $firstname_error = $lastname_error = $email_error = $message_error = "";
  $name = $email = $phone = $message = "";
  
 if(isset($_POST["register"]))  
 {  
    /*  if(empty($_POST["firstname"])&&empty($_POST["lastname"])&&empty($_POST["username"]) && empty($_POST["password"]))  
      {  
           echo '<script>alert("All Fields are required")</script>';  
      } */ 
       if($_POST['firstname']==""){
      $firstname_error = "Name is required";
    }
      

      if($_POST['lastname']==""){
       $lastname_error = "Lastname is required";
     }
       if($_POST['username']==""){
       $email_error = "Email is required";
     }

       if($_POST['password']==""){
       $email_error = "Password is required";
     }
      else  
      {  
        
           $firstname = mysqli_real_escape_string($conn, $_POST["firstname"]);  
           $lastname = mysqli_real_escape_string($conn, $_POST["lastname"]);  
           $username = mysqli_real_escape_string($conn, $_POST["username"]);  
           $pass = mysqli_real_escape_string($conn, $_POST["password"]); 
          
           $query = "INSERT INTO users (firstname,lastname,username, password) VALUES('$firstname','$lastname','$username', '$pass')"; 

           if(mysqli_query($conn, $query))  
           {  
            if (!preg_match("/[\p{L}\p{P}\p{Zs} ]/", $firstname)){
                 $firstname_error = "Only letters are allowed";    
              }
            if (!preg_match("/[\p{L}\p{P}\p{Zs} ]/", $lastname)){
                 $lastname_error = "Only letters are allowed";    
              }
           
            if (!filter_var($username, FILTER_VALIDATE_EMAIL)){
             $email_error = "Invalid email format";
         }
              else{
                echo '<script>alert("Registration Done")</script>';  
              }
              }
           }  

         }
  

/*
if(isset($_POST['Login'])){
  session_start();
  $user=$_POST['user'];
  $pass=$_POST['pass'];
  $usertype=$_POST['usertype'];
  $_SESSION['logun_user']=$username;
  $usertype=$_POST['usertype'];
  $query="SELECT username,password FROM users WHERE username='".$user."' and password='".$pass."'and usertype='".$usertype."'";
  $result=mysqli_query($conn,$query);
  $count = mysqli_num_rows($result); 
  


  if($count==1){
       session_start();
     $_SESSION['valid'] = true;
    $_SESSION['timeout'] = time();
    $_SESSION['login_session'] = $_POST['user'];

     if($usertype=="admin"){
    header("location:../admin_master.php");
    }
    else{
      header("location:../../doctors.php");
    }
  }else{
     echo '<script>alert("Incorrect Username or Password")</script>';  
  }

}*/
 ?>  