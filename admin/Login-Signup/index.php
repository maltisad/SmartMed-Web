<?php
include('login.php'); // Includes Login Script

?> 
<!DOCTYPE html>
<html>
<head>
  <title>Login Form in PHP with Session</title>
  <link rel="stylesheet" type="text/css" href="../../css/login.css">
</head>
<body>
>
  
   <div class="wrapper">
        <div class="side left"><h3>SMART MED</h3></div>
        <div class="side right">
  <form action="" method="post">
   
   <input id="name" name="username" placeholder="username" type="text">
  
   <input id="password" name="password" placeholder="**********" type="password"><br><br>
     Select user type:<select name="usertype">
     <option value="admin">Admin</option>
      <option value="user">User</option>
 </select>
   <input name="submit" type="submit" value=" Login ">
   
        </form>
        </div> <!--end login-->
    </div>

</body>
</html>