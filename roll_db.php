<?php

include_once 'database.php';

class roll_req extends database {
    public $query;
      
    public function __construct() {
        parent::__construct();
        $query = "CREATE TABLE IF NOT EXISTS rol_req("
                . "rid INT NOT NULL AUTO_INCREMENT,"
                ."rname VARCHAR(100) NOT NULL,PRIMARY KEY(rid))";
         parent::query_execute($query);
       }
       
} 

$roll= new roll_req();
