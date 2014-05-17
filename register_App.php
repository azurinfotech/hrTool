<?php
include_once 'register_db.php';
var_dump($_POST);
$off_email = $_POST['email'];
$password = $_POST['pass'];
$reg_db = new newlogin();
$params = array('off_email','password');
$reg_db -> select_user_data(0,$params);
// Mysql_num_row is counting table row
$count=mysqli_num_rows($reg_db);
// If result matched $username and $password, table row must be 1 row
if ($count > 0) {
     die("User already exist! $count");
}
// validation for email
    $v = "/[a-zA-Z0-9_-.+]+@[a-zA-Z0-9-]+.[a-zA-Z]+/";
    $valid =  (bool)preg_match($v, $off_email);
if(!$valid){
    die("Enter a valid Email address");
}
$salt = hash('sha1', 'azurinfotech');
$password = hash('sha1', $_GET['password']) . $salt;
$cofirmpassword = $_GET['cofirmpassword'];
// validation of confirm password 
if ($password != $confirmpassword) {
echo("Passwords do not match");
exit;
}
$fname = $_GET['fname'];
$lname = $_GET['lname'];
$status = $_GET['status'];
include_once 'database.php';
$db = new database();
$query = "INSERT INTO user(emp_no" . $emp_no . ",off_email" . $off_email . ",password" . $password .",confirmpassword" . $confirmpassword . ",fname" . $fname . ",lname" . $lname . ",status" . $status . ")";
$db->query_execute($query);
 


        