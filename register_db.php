<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'database.php';

class newlogin extends database {
    public $query;
      
    public function __construct() {
        parent::__construct();
        $query = "CREATE TABLE IF NOT EXISTS user(password VARCHAR(50) NOT NULL,"
                . "uid INT NOT NULL AUTO_INCREMENT,"
                . "eid INT NOT NULL,"
                ."aid INT NOT NULL,"
                ."off_id INT NOT NULL,"
                ."tid INT NOT NULL,"
                ."Kra_id INT NOT NULL,"
                . "emp_no  VARCHAR(45) NOT NULL,"
                . "fname  VARCHAR(45) NOT NULL,"
                . "lname  VARCHAR(45) NOT NULL,"
                . "off_email  VARCHAR(45) NOT NULL,"
                ."status INT NOT NULL,PRIMARY KEY(uid))";  
        
        $result = parent::query_execute($query);
        $error = mysql_error();
        print ($error);
        
       }
       public function select_user_data($uid,$params){
           if($uid !=0){
               $condition = "WHERE uid = ".$uid;
           }
           else{
               $condition = '';
           }
           if(!empty($params)){
                $fields = implode(' ', $params);
           }
           else{
               $fields = '* ';
           }
           $query = "SELECT ".$fields." from user". $condition;
          $result = mysql_fetch_assoc( parent::query_execute($query));
           return $result;
       }
} 

$userTbl = new newlogin();