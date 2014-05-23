<?php
$rid = $_POST['rid'];
$rname = $_POST['rname'];
include_once 'database.php';
$db = new database();
$query = "INSERT INTO rol_req (rname) VALUES
 ('$rname')";
$result = $db->query_execute($query);
header('Location:home.php');
?>