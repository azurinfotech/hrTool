<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'database.php';

class roles_db extends database {
    public $query;
    public function __construct() {
           parent::__construct();
        $query = "CREATE TABLE IF NOT EXISTS roles(rid INT NOT NULL AUTO_INCREMENT,"
        . "role_name VARCHAR(45) NOT NULL,"
        . "uid VARCHAR(45), PRIMARY KEY(per_id))";
       
        $result = parent::query_execute($query);
        $error = mysql_error();
        print ($error);
    }
}
$rol = new roles();    

