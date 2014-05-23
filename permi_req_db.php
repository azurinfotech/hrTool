<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'database.php';

class per_req extends database {
    public $query;
      
    public function __construct() {
        parent::__construct();
        $query = "CREATE TABLE IF NOT EXISTS permi_req("
                . "pid INT NOT NULL AUTO_INCREMENT,"
                ."pname VARCHAR(100) NOT NULL,PRIMARY KEY(pid))";
         parent::query_execute($query);
       }
       
} 

$permi= new per_req();