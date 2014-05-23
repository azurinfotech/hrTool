<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'database.php';

class training extends database {
    public $query;
    public function __construct() {
           parent::__construct();
        $query = "CREATE TABLE IF NOT EXISTS training(trid INT NOT NULL AUTO_INCREMENT,uid INT NOT NULL,"
        . "train_name VARCHAR(45) NOT NULL,"
        . "trainer_name VARCHAR(45) NOT NULL,"
        . "train_sdate INT NOT NULL,"
        . "train_edate INT NOT NULL,PRIMARY KEY(trid))";
       $result = parent::query_execute($query);
        $error = mysql_error();
        print ($error);
    }
    public function select_train_data($tid,$params){
           if($tid !=0){
               $condition = "WHERE tid = ".$tid;
           }
           else{
               $tid = '';
           }
           if(!empty($params)){
                $fields = implode(' ', $params);
           }
           else{
               $fields = '*';
           }
           $query = "SELECT ".$fields." from training". $condition;
           parent::query_execute($query);
       }

}
$train = new training();    


