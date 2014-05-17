<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$name = trim($_GET['uname']);
$pass = trim($_GET['pass']);
//Connect to the database to check if the user exists
var_dump($pass);
var_dump($name);
include_once 'database.php';
<<<<<<< Updated upstream
var_dump($name);
//var_dump($_SESSION);
=======
>>>>>>> Stashed changes
$db = new database();
$pass = hash('sha1', $pass);
$salt = hash('sha1', 'azurinfotech');
$pass = $pass . $salt;
<<<<<<< Updated upstream
$qry = "SELECT off_email ,password FROM user WHERE off_email='$name'";
$result = mysqli_query($db->link, $qry);
var_dump(mysqli_num_rows($result));
if ($result) {
    $row = mysql_fetch_assoc($result);
    if (mysql_num_rows($result) > 0) {
        //Login Successful
        session_regenerate_id();
        $_SESSION['SESS_MEMBER_ID'] = $member['mem_id'];
        $_SESSION['SESS_FIRST_NAME'] = $member['uname'];
        session_write_close();
        header("location: home.php");
        exit();
    } else {
        //Login failed
        $errmsg_arr[] = 'user name and password not found';
        $errflag = true;
        if ($errflag) {
            $_SESSION['ERRMSG_ARR'] = $errmsg_arr;
            session_write_close();
            header("location: index.php");
            exit();
        }
    }
} else {
    die("Query failed");
=======
$qry = "SELECT off_email,lname FROM user WHERE off_email LIKE '$name' AND lname LIKE '$pass'";
var_dump($qry);
$row = $db->query_execute($qry);
var_dump($row);
if ($row) {
    $result = mysql_fetch_assoc($row);
    //Login Successful
    session_regenerate_id();
    $member = mysql_fetch_assoc($result);
    $_SESSION['SESS_FIRST_NAME'] = $member['uname'];
    session_write_close();
    header("location: home.php");
    exit();
} else {
    die("Login failed, please enter a valid user name");
>>>>>>> Stashed changes
}







