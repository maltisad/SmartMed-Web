<?php

require_once 'db_connect.php';

class Doctor extends Db_connect {

    protected $link;

    public function __construct() {
        $this->link = $this->database_connection();
    }
    
     public function save_doctor_image($data) {
         
        $directory = '../assets/photo/';
        $target_file = $directory . $_FILES['photo']['name'];
        $file_type = pathinfo($target_file, PATHINFO_EXTENSION);
        //echo $file_type;
     
        $check = getimagesize($_FILES['photo']['tmp_name']);
        if ($check) {

               move_uploaded_file($_FILES['photo']['tmp_name'], $target_file);
                        $sql = "INSERT INTO doctors (name, photo, position)"
                                . "VALUES ('$data[name]','$target_file','$data[position]')";
                        if (mysqli_query($this->link, $sql)) {
                            $message = 'Image uploded';
                            return $message;
                        } else {
                            echo ('Died' . mysqli_error($this->link));
                        }
             
        } 
    }

         public function select_all_positions(){
           $sql = "SELECT * FROM position";
        if(mysqli_query($this->link, $sql)) {
            $query_result = mysqli_query($this->link, $sql);
            return $query_result;
        } else {
            die('query problem' . mysqli_error($this->link));
        }
    }

}