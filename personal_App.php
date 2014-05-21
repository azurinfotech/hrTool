<?php
include 'session.php';
$sess = new session();
$sess -> startSession();
$sex = $_POST['sex'];
$adob = strtotime($_POST['a_dob']);
$fdob = strtotime($_POST['f_dob']);
$pan = $_POST['pan_no'];
$pass = $_POST['pass_no'];
$pmail = $_POST['p_mail'];
$qualif = $_POST['qualif'];
$certf = $_POST['certf'];
$skills = $_POST['skills'];
$martial = $_POST['mar_status'];
$father_name = $_POST['father_name'];
$mother_name = $_POST['mother_name'];
$wife_name = $_POST['wife_name'];
$husband_name = $_POST['husband_name'];
$anniv = $_POST['anniv'];
$blood_grp = $_POST['blood_grp'];
$mother_tongue = $_POST['mother_tongue'];
$off_mob = $_POST['off_mob'];
$per_mob = $_POST['per_mob'];
$uid = $sess-> __get('uid');
var_dump($_POST);
include 'database.php';
$db = new database();
$query = "INSERT INTO emp_personal (sex,uid,a_dob,f_dob,pan_no,pass_no,p_email,qualif,certf,mother_tongue,
marital_status,anniv,blood_grp,father_name,mother_name,wife_name,husband_name,skills,off_mob,per_mob)
VALUES ('$sex','$uid','$adob','$fdob','$pan','$pass','$pmail','$qualif'
,'$certf','$mother_tongue','$martial','$anniv','$blood_grp','$father_name','$mother_name',
'$wife_name','$husband_name','$skills','$off_mob','$per_mob')";
$db->query_execute($query);
header('Location:home.php');