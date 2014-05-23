<?php
include 'session.php';
$sess = new session();
$sess->startSession();
include_once 'user_db.php';
$off_email = $_POST['email'];
$password = $_POST['pass'];
$reg_db = new newlogin();
$result = $reg_db->select_num_rows("SELECT uid,off_email,password FROM users WHERE off_email LIKE '$off_email'");
if ($result > 0) {
    $_SESSION['flash_message'] = 'The user name already exists.';
    session_write_close();
    header('Location:' . $_SERVER['HTTP_REFERER']);
    exit();
}
// Mysql_num_row is counting table row

$salt = hash('sha1', 'azurinfotech');
$password = hash('sha1', $password) . $salt;
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$status = $_POST['status'];
$emp_no = $_POST['enum'];
$role = $_POST['role'];
//TODO: Need to create folder for every user and save files inside it.
if ($_FILES["pic"]["error"] > 0) {
    echo "Return Code: " . $_FILES["pic"]["error"] . "<br>";
} else {
    echo "Upload: " . $_FILES["pic"]["name"] . "<br>";
    echo "Type: " . $_FILES["pic"]["type"] . "<br>";
    echo "Size: " . ($_FILES["pic"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["pic"]["tmp_name"] . "<br>";
    if (file_exists($_SERVER['DOCUMENT_ROOT']."/hrTool/files/" . $_FILES["pic"]["name"])) {
        echo $_FILES["pic"]["name"] . " already exists. ";
    } else {
        move_uploaded_file($_FILES["pic"]["tmp_name"],
            $_SERVER['DOCUMENT_ROOT']."/hrTool/files/" . $_FILES["pic"]["name"]);
        echo "Stored in: " . $_SERVER['DOCUMENT_ROOT']."/hrTool/files/" . $_FILES["pic"]["name"];
    }
}
if($_FILES['resume']['error'] > 0){
    echo "Return Code: " . $_FILES["resume"]["error"] . "<br>";
}
else{
    echo "Upload: " . $_FILES["resume"]["name"] . "<br>";
    echo "Type: " . $_FILES["resume"]["type"] . "<br>";
    echo "Size: " . ($_FILES["resume"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["resume"]["tmp_name"] . "<br>";
    if (file_exists($_SERVER['DOCUMENT_ROOT']."/hrTool/files/" . $_FILES["resume"]["name"])) {
        echo $_FILES["resume"]["name"] . " already exists. ";
    } else {
        move_uploaded_file($_FILES["resume"]["tmp_name"],
            $_SERVER['DOCUMENT_ROOT']."/hrTool/files/" . $_FILES["resume"]["name"]);
        echo "Stored in: " . $_SERVER['DOCUMENT_ROOT']."/hrTool/files/" . $_FILES["resume"]["name"];
    }
}
$pic = $_SERVER['SERVER_NAME']."/hrTool/files/".$_FILES["pic"]["name"];
$resume = $_SERVER['SERVER_NAME']."/hrTool/files/".$_FILES["pic"]["name"];
include_once 'database.php';
$db = new database();
$query = "INSERT INTO users(password,emp_no,fname,lname,off_email,status,role,pic,resume) VALUES
 ('$password','$emp_no','$fname','$lname','$off_email',$status,$role,'$pic','$resume')";
$res = $db->query_execute($query);
$sub = 'Account Created.';
$pass = $_POST['pass'];
$message = "Hello $fname $lname,\n Your new account on the Azur Employee Database has been created. Please use your
official mail ID to login. Also the password for you is: $pass \n Regards,\nHR Team \n Azur Infotech.";
$from = "admin@hrtool.com";
mail($off_email,$sub,$message,"From: $from");
session_write_close();
header('Location:home.php');
mysqli_error($db->link);
?>

// uploading a file


//saving a uploaded file