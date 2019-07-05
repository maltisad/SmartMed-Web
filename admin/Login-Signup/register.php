<?php
include 'verify.php';
?>
 <!DOCTYPE html>  
 <html>  
      <head>  
          <link rel="stylesheet" type="text/css" href="../../css/login.css">
      </head>  
      <body>  
 
     
   <div class="wrapper">
        <div class="side left"><h3>SMART MED</h3></div>
        <div class="side right">
             
                <form method="post">
                   <h3>Registration</h3>
               
                     <input type="text" name="firstname" class="form-control" placeholder="Enter FirstName" />  
                     <br>  
                   <p> <span > <?php echo $firstname_error; ?></span> </p>
                     <input type="text" name="lastname" class="form-control" placeholder="Enter LastName"   />  
                     <br>      
                     <p><span ><?php echo $lastname_error; ?></span> </p>
                     
                     <input type="text" name="username" class="form-control" placeholder="Enter Email"/>  
                      <p><span class="error_val"><?php echo $email_error; ?></span> </p>
                     
                     <input type="password" name="password" class="form-control" placeholder="Enter Password"/>  
                     <br>  
                     <input type="submit" name="register" value="Register" />  
                  

            </form>
        </div> <!--end login-->
    </div>
</form> 
</body>
</html>