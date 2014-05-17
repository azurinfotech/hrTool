<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$name = $_GET['uname'];
$pass = $_GET['pass'];
//Connect to the database to check if the user exists
include_once 'database.php';
var_dump($name);
//var_dump($_SESSION);
$db = new database();
$pass = hash('sha1', $pass);
$salt = hash('sha1', 'azurinfotech');
$pass = $pass . $salt;
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
}







