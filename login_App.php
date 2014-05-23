<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


//Connect to the database to check if the user exists
include_once 'database.php';
include_once 'session.php';
$sess = new session();
$sess ->startSession();
$name = $_POST['uname'];
$pass = $_POST['pass'];
var_dump($_POST);
$db = new database();
$pass = hash('sha1', $pass);
$salt = hash('sha1', 'azurinfotech');
$pass = $pass . $salt;
$qry = "SELECT uid,off_email,password,role FROM users WHERE off_email='$name'";
var_dump($qry);
$result = mysqli_query($db->link, $qry);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    if($pass = $row['password']){
         $sess -> __set('uid',$row['uid']);
        $sess -> __set('uname',$row['off_email']);
        $sess -> __set('role',$row['role']);
        session_write_close();
        header('Location:home.php');
    }
    else{
        header('Location:login_page.php');
    }
    }
else {
    header('Location:login_page.php');
}







