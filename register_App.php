<?php
$emp_no = $_GET['emp_no'];
$off_email = $_GET['off_email'];
$salt = hash('sha1', 'azurinfotech');
$password = hash('sha1', $_GET['password']) . $salt;
$fname = $_GET['fname'];
$lname = $_GET['lname'];
$status = $_GET['status'];
include_once 'database.php';
$db = new database();
$query = "INSERT INTO user(emp_no" . $emp_no . ",off_email" . $off_email . ",password" . $password . ",fname" . $fname . ",lname" . $lname . ",status" . $status . ")";
$db->query_execute($query);
 
 

         