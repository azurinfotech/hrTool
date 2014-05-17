<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'database.php';
class tax_term_hierarchy extends database {
    public $query;
    public function __construct() {
           parent::__construct();
        $query = "CREATE TABLE IF NOT EXISTS tax_term_hierarchy(tax_id INT NOT NULL AUTO_INCREMENT,"
       
        . "parent INT NOT NULL,PRIMARY KEY(tax_id))";
        
        
        $result = parent::query_execute($query);
        $error = mysql_error();
        print ($error);
    }

   public function select_tax_term_data($off_id,$params){
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
           $query = "SELECT ".$fields." from tax_term_hierarchy". $condition;
           parent::query_execute($query);
       }
} 


$tax_term = new tax_term_hierarchy();    
