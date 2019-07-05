<?php

require_once 'db_connect.php';

class View  extends Db_connect {
 
    protected $link;
    
    public function __construct(){
        
        $this->link = $this->database_connection();
        
    }
    
        //Mi tregon doktorat ne index.php

        public function select_all_doctors(){
           $sql = "SELECT * FROM doctors";
        if(mysqli_query($this->link, $sql)) {
            $query_result = mysqli_query($this->link, $sql);
            return $query_result;
        } else {
            die('query problem' . mysqli_error($this->link));
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
