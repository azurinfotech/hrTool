
<?php
include 'session.php';
$sess = new session();
$sess -> startSession();
include_once 'database.php';
include_once 'empOfficial_db.php';
$designation = $_POST['designation'];
$date_join = strtotime($_POST['date_join']);
$pre_experience = $_POST['pre_experience'];
$previous_comp = $_POST['previous_comp'];
$vertical_report = $_POST['vertical_report'];
$horiz_report = $_POST['horiz_report'];
$department = $_POST['department'];
$uid = $_SESSION['uid'];
$db = new database();
$query = "INSERT INTO emp_official(uid,designation,date_join,pre_experience,previous_comp,vertical_report,horiz_report,department) VALUES
 ($uid,'$designation','$date_join','$pre_experience','$previous_comp','$vertical_report','$horiz_report','$department')";
$res = $db->query_execute($query);
header('Location:home.php');
