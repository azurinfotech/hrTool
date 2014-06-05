<?php
include 'session.php';
$sess = new session();
$sess -> startSession();
$kra_id = $_POST['kra_id'];
$kr_area = $_POST['kr_area'];
$kpa = $_POST['kpa'];
$weight_kpi = $_POST['weight_kpi'];
$target = $_POST['target'];
$actual = $_POST['actual'];
$score= $_POST['score'];
$final_score = $_POST['final_score'];
$uid = $sess-> __get('uid');
var_dump($_POST);
include 'database.php';
$db = new database();
$query = "INSERT INTO kra(kra_id,kr_area,uid,kpa,weight_kpi,target,actual,score,final_score)
VALUES ($kra_id,'$kr_area',$uid,'$kpa','$weight_kpi','$target','$actual','$score','$final_score')";
$res=$db ->query_execute($query);
header('Location:kraview.php'); 

