<?php
$tname = $_POST['tname'];
$vocab = $_POST['vocab'];
var_dump($_POST);
include_once 'database.php';
$db = new database();
$query = "INSERT INTO taxonomy (tname,vid) VALUES
 ('$tname',$vocab)";
$res = $db->query_execute($query);
?>
