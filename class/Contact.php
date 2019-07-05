<?php

require_once 'db_connect.php';

class Contact extends Db_connect {

    protected $link;

    public function __construct() {
        $this->link = $this->database_connection();
    }
    
   

         public function select_all_contacts(){
           $sql = "SELECT * FROM contacts";//nqs e ki contacts emrin e db tani qet funksion e thirr te contact.php te admin
        if(mysqli_query($this->link, $sql)) {
            $query_result = mysqli_query($this->link, $sql);
            return $query_result;
        } else {
            die('query problem' . mysqli_error($this->link));
        }
    }

}