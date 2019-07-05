<?php

require_once 'db_connect.php';

class Gallery extends Db_connect {

    protected $link;

    public function __construct() {
        $this->link = $this->database_connection();
    }
    
    

    public function save_gallery_image($data) {
        $directory = '../assets/gallery_image/';
        $target_file = $directory . $_FILES['gallery_image']['name'];
        $file_type = pathinfo($target_file, PATHINFO_EXTENSION);
        //echo $file_type;
     
        $check = getimagesize($_FILES['gallery_image']['tmp_name']);
        if ($check) {

            if (file_exists($target_file)) {
                echo('This image exist!');
            } else {

               move_uploaded_file($_FILES['gallery_image']['tmp_name'], $target_file);
                        $sql = "INSERT INTO tbl_gallery (image_title, gallery_image, user)"
                                . "VALUES ('$data[image_title]','$target_file','$data[user]')";
                        if (mysqli_query($this->link, $sql)) {
                            $message = 'Image uploded';
                            return $message;
                        } else {
                            echo ('Died' . mysqli_error($this->link));
                        }
                  
                
            }
        } else {
            die('Not an image!');
        }
    }
    //Veq i marr te dhanat prej db
    public function select_all_gallery_info(){
        
        $sql="SELECT * FROM tbl_gallery";
        if(mysqli_query($this->link, $sql)){
            $query_result=mysqli_query($this->link,$sql);  
            return $query_result;
        }else{
            die('Query Problem'.mysqli_error($this->link));
        }
    }
    
    //Funksioni qe na duhet per te editit
    public function select_gallery_info_by_id($image_id){
        $sql="SELECT * FROM tbl_gallery WHERE image_id='$image_id' ";
        if(mysqli_query($this->link, $sql)){
            $query_result=mysqli_query($this->link,$sql);  
            return $query_result;
        }else{
            die('Query Problem'.mysqli_error($this->link));
            
        }
    } 
    
       //Funksioni qe mi tregon Adminat ne dropdown kur du me regjistru 
        public function select_all_users(){
           $sql = "SELECT * FROM users where usertype='admin'";
        if(mysqli_query($this->link, $sql)) {
            $query_result = mysqli_query($this->link, $sql);
            return $query_result;
        } else {
            die('query problem' . mysqli_error($this->link));
        }
    }


}
