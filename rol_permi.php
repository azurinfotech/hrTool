<?php
include_once 'database.php';

class rol_permi extends database {
    public $query;
      
    public function __construct() {
        parent::__construct();
        $query = "CREATE TABLE IF NOT EXISTS role_permission("
                ."rpid INT NOT NULL AUTO_INCREMENT,"
                ."pid INT NOT NULL,"
                ."rid INT NOT NULL,PRIMARY KEY(rpid))";
         parent::query_execute($query);
       }
       
} 

$role= new rol_permi();
