<?php
/**
 * Created by PhpStorm.
 * User: arvind
 * Date: 5/21/14
 * Time: 2:20 PM
 */
include 'session.php';
$sess = new session();
$sess->startSession();
include 'database.php';
$off_email = $_POST['off_email'];
$sql = "SELECT off_email, password FROM users WHERE off_email = '$off_email'";
$db = new database();
$result = $db->select_data($sql);
$result = mysqli_fetch_array($result);

if ($result == NULL) {
    $sess->__set('flag_message', 'The email id ' . $off_email . 'does not exist');
    session_write_close();
    header('Location:forgotpass.php');
} else {
    $from = "admin@hrtool.com";
    $to = $result['off_email'];
    $sub = "Password retrieve";
    $pass = str_shuffle('azurinfotech');
    $query = "UPDATE TABLE users SET password = '$pass' WHERE off_email = '$off_email'";
    $db ->query_execute($query);
    $message = "You Generated a forgot password request.\n Your password is : $pass";
    mail($to, $sub, $message, "From: $from");
    header('Location:login_Page.php');

}

