<?php
 $db = mysqli_connect('localhost', 'root', '', 'smartmed');

 
$image_id =$_GET['id'];
$query_result=$obj_gallery->select_gallery_info_by_id($image_id);
$gallery_info=mysqli_fetch_assoc($query_result);
extract($gallery_info);


if(isset($_POST['btn'])) {
    $image_title=$_POST['image_title'];
     $directory = '../assets/gallery_image/';
        $target_file = $directory . $_FILES['gallery_image']['name'];
        $file_type = pathinfo($target_file, PATHINFO_EXTENSION);
           move_uploaded_file($_FILES['gallery_image']['tmp_name'], $target_file);
   $user=$_POST['user'];
     
      mysqli_query($db, "UPDATE tbl_gallery SET image_title='$image_title',gallery_image='$target_file',user='$user' Where image_id=$image_id");
        header('location:manage_gallery.php');
}

      

        $query_result = $obj_gallery->select_all_users();

?>

<div class="row">
    <div >
        <div >
            <p >Edit Gallery Form</p>
            
        </div>
    </div>
</div>
<div class="row">
    
    <div>
        <div >
            <form  action="" method="post" name="edit_category_form" >
                <div class="form-group">
                    <label">Image Name</label>
                    
                    <div >
                        <input type="text" name="image_title" required class="form-control" value="<?php echo $image_title;?>">
                      
                    </div>
                </div>
                <div >
                    <label>Upload Image</label>
                    
                    <div >
                       
                         <input type="file" name="gallery_image">
                         <br><br>
                        <td><img src="<?php echo $gallery_image;?>" height="150" width="200"></td>
                        
                        
                    </div>
                </div>
                
                 <label >User </label>
                    <div>

     <input type="text" value="<?php echo $login_session;?>" class="field left" readonly name="user">
                      
                    </div>
                <div>
                    <label></label>
                    <div>
                        <input type="submit" name="btn" value="Update Image Info">
                    </div>
                </div>
                
            </form>
        </div>
    </div>
</div>
