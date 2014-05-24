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
        $query = "CREATE TABLE IF NOT EXISTS users("
                . "uid INT NOT NULL AUTO_INCREMENT,"
                ."password VARCHAR(100) NOT NULL,"
                . "emp_no  VARCHAR(10) NOT NULL,"
                . "fname  VARCHAR(60) NOT NULL,"
                . "lname  VARCHAR(60) NOT NULL,"
                . "off_email  VARCHAR(75) NOT NULL,"
                ."status INT NOT NULL,
                pic VARCHAR(100),
                resume VARCHAR(100),
                role INT NOT NULL,PRIMARY KEY(uid))";
         parent::query_execute($query);
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
           $query = "SELECT ".$fields." from users". $condition;
          $result = parent::query_execute($query);
           return $result;
       }

} 

$userTbl = new newlogin();