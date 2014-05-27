<?php
include 'session.php';
$sess = new session();
$sess -> startSession();
include_once 'database.php';
var_dump($_POST);
$kra_id = $_POST['kra_id'];
$kr_area = $_POST['kr_area'];
$kpa = $_POST['kpa'];
$weight_kpi = $_POST['weight_kpi'];
$target = $_POST['target'];
$actual = $_POST['actual'];
$score= $_POST['score'];
$final_score = $_POST['final_score'];
$uid = $_SESSION['uid'];
$db = new database();
//$uid = $sess-> __get('uid');
$query = "INSERT INTO Kra(kra_id,kr_area,uid,kpa,weight_kpi,target,actual,score,final_score)
VALUES ($kra_id,'$kr_area',$uid,'$kpa','$weight_kpi','$target','$actual','$score','$final_score')";
$res=$db ->query_execute($query);
header('Location:kra_view.php');
