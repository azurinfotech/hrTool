<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'database.php';

class kra_db extends database {
    public $query;
    public function __construct() {
           parent::__construct();
        $query = "CREATE TABLE IF NOT EXISTS kra(kra_id INT NOT NULL AUTO_INCREMENT,"
        . "kr_area VARCHAR(45) NOT NULL,"
        . "kpa VARCHAR(45) NOT NULL,"
        . "weight_kpi VARCHAR(45) NOT NULL,"
        . "target VARCHAR(45) NOT NULL,"
        . "actual VARCHAR(45) NOT NULL,"
        . "score VARCHAR(45) NOT NULL,"
        . "final_score VARCHAR(45),PRIMARY KEY(kra_id))";
       
        $result = parent::query_execute($query);
        $error = mysql_error();
        print ($error);
    }
    public function select_kr_data($Kra_id,$params){
           if($Kra_id !=0){
               $condition = "WHERE Kra_id = ".$Kra_id;
           }
           else{
               $Kra_id = '';
           }
           if(!empty($params)){
                $fields = implode(' ', $params);
           }
           else{
               $fields = '*';
           }
           $query = "SELECT ".$fields." from Kra". $condition;
           parent::query_execute($query);
       }

}
$kr = new kra();    



