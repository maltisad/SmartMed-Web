<?php

  require '../class/Doctor.php';
        $obj_doctor =new Doctor();
  $message='';
        
    if(isset($_POST['btn'])){

        $message = $obj_doctor->save_doctor_image($_POST);
    }


        $query_result2 = $obj_doctor->select_all_positions();
?>
<div>
    
        <p id="titulli">Add Doctor</p>
          <h3 id="error"><?php echo $message;?></h3>

</div>

            <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label >Emri</label>
                    
                    <div>
                        <input type="text" name="name" required class="form-control">
                    </div>
                </div>
             <div class="form-group">
                    <label>Upload Image</label>
                    
                    <div>
                        <input type="file" name="photo">
                    </div>
                </div>
               
                
              <div class="form-group">
                    <label >Pozicioni</label>
                    <div>

  
                        <select name="position">
                              <?php while ( $position = mysqli_fetch_assoc($query_result2)) { ?>
                        
                            <option ><?php echo $position['position'];?></option>
                            
                            <?php } ?>
                        </select>
                    </div>
                </div>
               <div class="form-group">
                    <label></label>
                    <div>
                        <input type="submit" name="btn" value="Save Image" >
                    </div>
                </div>
                
 </form>

</div>

