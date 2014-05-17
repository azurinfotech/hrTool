<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'database.php';
class taxonomy_vocab extends database {
    public $query;
    public function __construct() {
           parent::__construct();
        $query = "CREATE TABLE IF NOT EXISTS taxonomy_vocab(vid INT NOT NULL AUTO_INCREMENT,"
        . "name VARCHAR(45) NOT NULL,"        
       
        . "description VARCHAR(45)," 
        . "hierarchy INT NOT NULL,"     
        . "PRIMARY KEY(vid))";
        
        
        $result = parent::query_execute($query);
        $error = mysql_error();
        print ($error);
    }

   public function select_tax_data($vid,$params){
           if($vid !=0){
               $condition = "WHERE vid = ".$vid;
           }
           else{
               $vid = '';
           }
           if(!empty($params)){
                $fields = implode(' ', $params);
           }
           else{
               $fields = '*';
           }
           $query = "SELECT ".$fields." from taxonomy_vocab". $condition;
           parent::query_execute($query);
       }
} 


$tax_vocab = new taxonomy_vocab();    
