<?php
include 'session.php';
$sess = new session();
$sess -> startSession();
$train_sdate = strtotime($_POST['train_sdate']);
$train_name = $_POST['train_name'];
$train_edate = strtotime($_POST['train_edate']);
$trainer_name = $_POST['trainer_name'];
$uid = $_SESSION['uid'];
include 'database.php';
$db = new database();
$query = "INSERT INTO training (uid,train_sdate,train_name, train_edate, trainer_name)
VALUES ($uid,'$train_sdate','$train_name','$train_edate','$trainer_name')";
var_dump($query);
$db->query_execute($query);
header('Location:home.php');
