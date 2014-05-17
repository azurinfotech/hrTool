<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$off_email = $_POST['off_email']; 
$sql="SELECT off_email, pass FROM user WHERE off_email ='.$off_email.' pass = '.$pass.'"; 
$query = mysql_query($sql); 

if(!$query)  
    { 
    die(mysql_error()); 
    } 
     
if(mysql_affected_rows() != 0) 
    { 
$row=mysql_fetch_array($query); 
$pass=$row["pass"]; 
$off_email=$row["off_email"]; 
    } 
else  
    { 
    echo("no such login in the system. please try again."); 
    } 

