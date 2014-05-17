<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'database.php';

class permessions_db extends database {
    public $query;
    public function __construct() {
           parent::__construct();
        $query = "CREATE TABLE IF NOT EXISTS permessions(per_id INT NOT NULL AUTO_INCREMENT,"
        . "per_name VARCHAR(45) NOT NULL,"
        . "rid INT NOT NULL,"
        . "active_inactive BOOL, PRIMARY KEY(per_id),INDEX(rid))";
       
        $result = parent::query_execute($query);
        $error = mysql_error();
        print ($error);
    }
}
$perm = new permessions_db();    

