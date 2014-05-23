<?php
$vname = $_POST['vname'];
var_dump($_POST);
include_once 'database.php';
$db = new database();
$query = "INSERT INTO vocabulary (vname) VALUES
 ('$vname')";
$res = $db->query_execute($query);
?>
