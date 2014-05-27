<?php
include_once 'database.php';
$query = "SELECT rname FROM rol_req";
$db = new database();
$result = $db->get_data_array($query);
var_dump($_POST);
$pname = $_POST['permission'];
$value = array();
foreach($result as $role){
    if($role['rname'] != NULL && $role['rname'] != '' && isset($_POST[$role['rname']])){
        $values[$role['rname']] = $_POST[$role['rname']];
    }
}
$db = new database();
$query = "INSERT INTO permi_req (pname) VALUES ('$pname')";
$pid = $db->query_execute($query);
foreach($values as $rid){
    $qury = "INSERT INTO role_permission (pid,rid) VALUES ($pid,$rid)";
    $db ->query_execute($qury);
}
?> 