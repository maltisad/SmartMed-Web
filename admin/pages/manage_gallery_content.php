<?php
 $message ='';
 include('delete.php');




    $query_result = $obj_gallery->select_all_gallery_info();


?>


<div >
   
                <p>Gallery Information</p>
                
            </div>
         
         
            <div class="panel-body">
                <table width="100%" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Image Title</th>
                            <th>Image</th>
                           
                             <th>User</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($gallery_info=mysqli_fetch_array($query_result)) { 
                            extract($gallery_info);
                            ?>
                        <tr class="odd gradeX">
                            <td><?php echo $image_id;?></td>
                            <td><?php echo $image_title;?></td>
                            <td><img src="<?php echo $gallery_image;?>" height="150" width="200"></td>
                           
                            <td><?php echo $user;?></td>
                               
                            </td>
                            <td class="center">
                           
                                <a href="edit_gallery.php?id=<?php echo $image_id; ?>"  title="Edit">
                                   Edit
                                </a>
                                
                                   <a href="delete.php?del=<?php echo $image_id; ?>" class="del_btn">Delete</a>
                                   
                               </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
          
        </div>
