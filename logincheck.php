<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function CheckLoginInDB($username,$password)
{
    if(!$this->DBLogin())
    {
        $this->HandleError("Enter login and password!");
        return false;
    }          
    $name = $_GET['uname'];
    $pass = $_GET['pass'];
    $qry = "SELECT off_email,password FROM users WHERE off_email='$off_email' AND password='$pass'".
        
        //" and confirmcode='y'";
     
    $result = mysql_query($qry,$this->connection);
     
    //if(!$result || mysql_num_rows($result) <= 0)
    //{
   //     $this->HandleError("Error logging in. ".
   //         "The username or password does not match");
    //    return false;
    //}
   // return true;
    
    
   if($off_email !== off_email)
    {
     die("Enter Valid Userid");
    }
    
    elseIf($pass !== pass)
    {
        die("Enter Valid Password");
    }
        
    // new try//
    
    {


if ("$off_email == off_email" "$pass!==$pass")
    {
  echo "enter a valid password";
    } 
    
// if ("$pass !== pass")
//    {
//  echo "Enter a valid Password";
//    }
