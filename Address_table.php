<?php

include_once 'database.php';
$db = new database();
$sql = "CREATE DATABASE IF NOT EXISTS $address_form(adid INT AUTO_INCREMENT,eid INT NOT NULL,"
        . "cur_add varchar(150),cur_country INT NOT NULL,cur_state INT NOT NULL,cur_city INT NOT NULL, "
        . "perm_add varchar(150),perm_country INT NOT NULL,perm_state INT NOT NULL,perm_city INT NOT NULL "
        . "emer_add varchar(150), emer_country INT NOT NULL, emer_state INT NOT NULL, emer_city INT NOT NULL,"
        . "PRIMARY KEY(adid))";
$db->query_execute($sql);
