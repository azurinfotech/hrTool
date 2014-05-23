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
           $query = "CREATE TABLE IF NOT EXISTS taxonomy(tid INT NOT NULL AUTO_INCREMENT,"
        . "tname VARCHAR(45) NOT NULL,vid VARCHAR(45),PRIMARY KEY(tid),INDEX(vid))";
        
       $result = parent::query_execute($query);
        $error = mysql_error();
        print ($error);
    }
    
       public function select_tax_single($vid){
           if($vid !=0){
               $condition = "WHERE vid = ".$vid;
           }
           else{
               $vid = '';
           }
           $query="SELECT tname from taxonomy".$condition;
            parent::query_execute($query);
           
       }
         public function select_tax_double($vid){
           if($vid !=0){
               $condition = "WHERE vid = ".$vid;
           }
           else{
               $vid = '';
           }
           $query="SELECT tname,tid from taxonomy".$condition;
            parent::query_execute($query);
           
       }
}
 $taxon = new taxonomy();
