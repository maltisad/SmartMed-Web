<?php

require_once 'db_connect.php';

class Services  extends Db_connect {
 
    protected $link;
    
    public function __construct(){
        
        $this->link = $this->database_connection();
        
    }
    
 
    //4 funksione per njejt veq se thirr tabela te ndryshme ne databaze
    public function select_all_services(){
           $sql = "SELECT * FROM services";
        if(mysqli_query($this->link, $sql)) {
            $query_result = mysqli_query($this->link, $sql);
            return $query_result;
        } else {
            die('query problem' . mysqli_error($this->link));
        }
    }
 
     
   




}
