<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$adid = $_POST['adid'];
$cur_add = $_POST['cur_add'];
$cur_country = $_POST ['cur_country'];
$cur_state = $_POST ['cur_state'];
$cur_city = $_POST['cur_city'];
$perm_add = $_POST['perm_add'];
$perm_country = $_POST ['perm_country'];
$perm_state = $_POST ['perm_state'];
$perm_city = $_POST['perm_city'];
$emer_add = $_POST['emer_add'];
$emer_country = $_POST ['emer_country'];
$emer_state = $_POST ['emer_state'];
$emer_city = $_POST['emer_city'];
include_once 'database.php';
$db = new database();
$query = "INSERT INTO address_form (cur_add,cur_country,cur_state,cur_city, perm_add,perm_country,perm_state,perm_city,emer_add, emer_country, emer_state, emer_city) VALUES
     ('$cur_add','$cur_country','$cur_state','$cur_city',$perm_add','$perm_country','$perm_state','$perm_city',$emer_add','$emer_country','$emer_state','$emer_city')";
$result = $db->query_execute($query);
header('Location:home.php');
?>