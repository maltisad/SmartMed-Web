<?php 
  
     require 'class/View.php';
    $obj_view = new View();
    $query_result2 = $obj_view->select_all_doctors();
    include('admin/Login-Signup/session.php'); 
    $db = mysqli_connect('localhost', 'root', '', 'smartmed');

    
//save
    if (isset($_POST['save'])) {
        $emri = $_POST['emri'];
        $mbiemri = $_POST['mbiemri'];
        $numritelefonit = $_POST['numritelefonit'];
        $doktori = $_POST['doktori'];
        $pacienti = $_POST['pacienti'];
           $data = $_POST['data'];
        
        mysqli_query($db, "INSERT INTO termini (emri,mbiemri,numritelefonit,doktori,data,pacienti) VALUES ('$emri', '$mbiemri','$numritelefonit', '$doktori',$data,'$pacienti')"); 
        $_SESSION['message'] = "Address saved"; 
        header('location: doctors.php');
    }

    //mi shfaq resulsts
    $results=mysqli_query($db,"SELECT * from termini");

   
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/termini.css">
</head>
<body>


   <b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
   <b id="logout"><a href="admin/Login-Signup/logout.php">Log Out</a></b>
  <form method="post" action="doctors.php" >
  <input type="hidden" name="id" >
    <div class="input-group">
      <label>Emri</label>
      <input type="text" name="emri">
    </div>
<div class="input-group">
            <label>Mbiemri</label>
            <input type="text" name="mbiemri">
        </div>
        
        <div class="input-group">
            <label>NumriTelefonit</label>
            <input type="text" name="numritelefonit">
        </div>
         <label>Cakto Doktorin</label>
            <select name="doktori">
                 
                              <?php while ( $doctors = mysqli_fetch_assoc($query_result2)) { ?>
                           extract($doctors) ?>
                            <option ><?php echo $doctors['name'];?>-<?php echo $doctors['position'];?></option>
                            
                            <?php } ?>
                        </select>
        </div>
         <div class="input-group">
            <label>Pacienti</label>
            <input type="text"  value="<?php echo $login_session; ?>" class="field left" readonly name="pacienti">
           </div>
               <label for="data">Enter date:</label>
    <input type="date" name="data"  placeholder="Write the date..." data-validation="data" data-validation-format="mm/dd/YYY/">
    <div class="input-group">
      
        <input class="btn" type="submit" name="save" >
    
    </div>
  </form>
  
</body>
</html>