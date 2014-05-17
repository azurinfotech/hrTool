<?php
<<<<<<< Updated upstream
include_once 'register_db.php';
var_dump($_POST);
$off_email = $_POST['email'];
$password = $_POST['pass'];
$reg_db = new newlogin();
$params = array('off_email','password');
$result = $reg_db -> select_user_data(0,$params);
// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
// If result matched $username and $password, table row must be 1 row
if ($count > 0) {
    // die("User already exist! $count");
}
//// validation for email
//    $v = "/[a-zA-Z0-9_-.+]+@[a-zA-Z0-9-]+.[a-zA-Z]+/";
//    $valid =  (bool)preg_match($v, $off_email);
//preg_match($v,$off_email);
//if(!$valid){
//    die("Enter a valid Email address");
//}
$salt = hash('sha1', 'azurinfotech');
$password = hash('sha1', $password) . $salt;
// validation of confirm password
//if ($password != $confirmpassword) {
//echo("Passwords do not match");
//exit;
//}
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$status = $_POST['status'];
$emp_no = $_POST['enum'];
=======
$off_email = $_GET['email'];
$salt = hash('sha1', 'azurinfotech');
$password = hash('sha1', $_GET['pass']) . $salt;
$fname = $_GET['fname'];
$lname = $_GET['lname'];
$status = $_GET['status'];
var_dump($_POST);
>>>>>>> Stashed changes
include_once 'database.php';
$db = new database();
$query = "INSERT INTO user  (password,uid,emp_no,fname,lname,off_email,status) VALUES ('$password',0,'$emp_no','$fname','$lname','$off_email',$status)";
var_dump(mysqli_real_escape_string($db->link,$query));
$db->query_execute(mysqli_real_escape_string($db->link,$query));
mysqli_error($db->link);
 


        
