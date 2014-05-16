<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'database.php';

class emp_personal extends database {
    public $query;
    public function __construct() {
           parent::__construct();
        $query = "CREATE TABLE IF NOT EXISTS emp_personal(eid INT NOT NULL AUTO_INCREMENT,"
        . "sex CHAR NOT NULL,"
        . "a_dob DATE NOT NULL,". "f_dob DATE NOT NULL,"
        . "pan_no VARCHAR(45),"
        . "passport_no VARCHAR(45),"
        . "p_email VARCHAR(45) NOT NULL,"
        . "per_mob INT NOT NULL,"
        . "qualif VARCHAR(45) NOT NULL,"
        . "certf VARCHAR(45),"
        . "mother_tongue VARCHAR(45),"
        . "marital_status VARCHAR(45) NOT NULL,"
        . "annivercy VARCHAR(45),"
        . "blood_grp VARCHAR(45) NOT NULL,"
        . "father_name VARCHAR(45) NOT NULL,"
        . "mother_name VARCHAR(45) NOT NULL,"
        . "wife_name VARCHAR(45),"
        . "husband_name VARCHAR(45),"
        . "skills VARCHAR(45) NOT NULL,PRIMARY KEY(eid))";
        
        
        $result = parent::query_execute($query);
        $error = mysql_error();
        print ($error);
    }

   public function select_emp_data($eid,$params){
           if($eid !=0){
               $condition = "WHERE eid = ".$eid;
           }
           else{
               $eid = '';
           }
           if(!empty($params)){
                $fields = implode(' ', $params);
           }
           else{
               $fields = '*';
           }
           $query = "SELECT ".$fields." from emp_personal". $condition;
           parent::query_execute($query);
       }
} 


$em_per = new emp_personal();    

