<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'database.php';
class taxonomy extends database {
    public $query;
    public function __construct() {
           parent::__construct();
        $query = "CREATE TABLE IF NOT EXISTS taxonomy(tax_id INT NOT NULL AUTO_INCREMENT,"
        . "name VARCHAR(45) NOT NULL,"        
        . "vid INT NOT NULL,"
        . "description VARCHAR(45),"      
        . "PRIMARY KEY(tax_id))";
        
        
        $result = parent::query_execute($query);
        $error = mysql_error();
        print ($error);
    }

   public function select_taxonomy_data($tax_id,$params){
           if($tax_id !=0){
               $condition = "WHERE tax_id = ".$tax_id;
           }
           else{
               $tax_id = '';
           }
           if(!empty($params)){
                $fields = implode(' ', $params);
           }
           else{
               $fields = '*';
           }
           $query = "SELECT ".$fields." from taxonomy". $condition;
           parent::query_execute($query);
       }
} 


$tax_nomy = new taxonomy();    


