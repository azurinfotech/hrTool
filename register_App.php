<?php
$sql="SELECT * FROM user WHERE off_email='$off_email' and password='$password'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $username and $password, table row must be 1 row
if ($count > 0) {
     die("User already exist! $count");
}
$emp_no = $_GET['emp_no'];
$off_email = $_GET['off_email'];
// validation for email
var_dump($_POST);
    $v = "/[a-zA-Z0-9_-.+]+@[a-zA-Z0-9-]+.[a-zA-Z]+/";
    $valid =  (bool)preg_match($v, $off_email);
if(!$valid){
    die("Enter a valid Email address");
}
$salt = hash('sha1', 'azurinfotech');
$password = hash('sha1', $_GET['password']) . $salt;
$fname = $_GET['fname'];
$lname = $_GET['lname'];
$status = $_GET['status'];
include_once 'database.php';
$db = new database();
$query = "INSERT INTO user(emp_no" . $emp_no . ",off_email" . $off_email . ",password" . $password . ",fname" . $fname . ",lname" . $lname . ",status" . $status . ")";
$db->query_execute($query);
 


        