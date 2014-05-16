<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'database.php';

class address extends database {
    public $query;
    public function __construct() {
        parent::__construct();
        $query = "CREATE TABLE IF NOT EXISTS address(aid INT NOT NULL AUTO_INCREMENT,"
        . "per_addr VARCHAR(45) NOT NULL,"
        . "cur_addr VARCHAR(45) NOT NULL,"
        . "off_mob INT NOT NULL,"
        . "emerg_contact_no VARCHAR(45) NOT NULL,"
        . "emergy_contaact_addr VARCHAR(45) NOT NULL,"
        . "state VARCHAR(45) NOT NULL,"
        . "city VARCHAR(45) NOT NULL,"
        . "country VARCHAR(45) NOT NULL,"
        . "tax_id VARCHAR(45) NOT NULL,PRIMARY KEY(aid))";
     
      $result = parent::query_execute($query);
        $error = mysql_error();
        print ($error);
    }
    
    
}
$add = new address(); 