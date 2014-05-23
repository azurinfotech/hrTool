<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'database.php';

class vocabulary extends database {
    public $query;
    public function __construct() {
           parent::__construct();
           $query = "CREATE TABLE IF NOT EXISTS vocabulary(vid INT NOT NULL AUTO_INCREMENT,"
        . "vname VARCHAR(45) NOT NULL,PRIMARY KEY(vid))";
        
       $result = parent::query_execute($query);
        $error = mysql_error();
        print ($error);
    }
}

 $vocab = new vocabulary();