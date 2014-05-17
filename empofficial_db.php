<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'database.php';
class empofficial extends database {
    public $query;
    public function __construct() {
           parent::__construct();
        $query = "CREATE TABLE IF NOT EXISTS emp_official(off_id INT NOT NULL AUTO_INCREMENT,"
        . "uid INT NOT NULL,"
        . "designation VARCHAR(45) NOT NULL,"
        . "date_join DATE NOT NULL,"
        . "pre_experience VARCHAR(45),"
        . "salary_acc INT NOT NULL,"
        . "previous_comp VARCHAR(45),"      
        . "vertical_report VARCHAR(45),"
        . "horiz_report VARCHAR(45),"
        . "first_quater VARCHAR(45),"
        . "second_quater VARCHAR(45),"
        . "third_quater VARCHAR(45),"
        . "fourth_quater VARCHAR(45),"
        . "department INT NOT NULL,PRIMARY KEY(off_id),INDEX(uid))";        
        $result = parent::query_execute($query);
        $error = mysql_error();
        print ($error);
    }

   public function select_off_data($off_id,$params){
           if($off_id !=0){
               $condition = "WHERE off_id = ".$off_id;
           }
           else{
               $off_id = '';
           }
           if(!empty($params)){
                $fields = implode(' ', $params);
           }
           else{
               $fields = '*';
           }
           $query = "SELECT ".$fields." from emp_official". $condition;
           parent::query_execute($query);
       }
} 


$em_off = new empofficial();    


